<?php


if (!defined("TEXDOC_URL")) {
    define("TEXDOC_URL", 'http://steve.gmk.bg/data/');

}


function tecdoc_get($params = array())
{

    $key = md5(serialize($params));
    $minutes = 60 * 24;
    return Cache::tags('tecdoc')->remember('tecdoc_' . $key, $minutes, function () use ($params) {
        $url = TEXDOC_URL . 'json.php?' . http_build_query($params);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $data = curl_exec($ch);

        curl_close($ch);
        $data = @json_decode($data, true);
        return $data;
    });
}


function tecdoc_get_mfa($id)
{
    $params = array();
    $params['func'] = 1;
    $params['mfa'] = $id;
    $data = tecdoc_get($params);
    return $data;
}

function tecdoc_get_mod($id)
{
    $params = array();
    $params['func'] = 2;
    $params['mod'] = $id;
    $data = tecdoc_get($params);
    return $data;
}

function tecdoc_get_typ($id)
{
    $params = array();
    $params['func'] = 12;
    $params['mod'] = $id;
    $data = tecdoc_get($params);
    return $data;
}

function tecdoc_get_art($id)
{
    $params = array();
    $params['func'] = 21;
    $params['art'] = $id;
    $data = tecdoc_get($params);
    return $data;
}

function tecdoc_find_art($kw)
{
    $params = array();
    $params['func'] = 30;
    $params['find'] = $kw;
    $data = tecdoc_get($params);


    if (!empty($data)) {
        $res = array();
        foreach ($data as $item) {
            if (isset($item['ART_ID'])) {
                $sellers = tecdoc_get_art_sellers($item['ART_ID']);

                if (!empty($sellers)) {
                    $item['sellers'] = $sellers;
                }

            }
            $res[] = $item;
        }
        return $res;
    }


    return $data;
}

function tecdoc_get_art_images($id)
{
    $params = array();
    $params['func'] = 23;
    $params['art'] = $id;
    $data = tecdoc_get($params);
    return $data;
}

api_expose('tecdoc_mark_avaiable');
function tecdoc_mark_avaiable($params)
{


    if (!isset($params['art_id'])) {
        return array('error' => 'Invalid art_id!');
    }

    if (!isset($params['price'])) {
        return array('error' => 'Invalid price!');
    }

    if (!is_logged()) {
        return array('error' => 'You are not logged!');
    }

    $existing = array();
    $existing['table'] = 'tecdoc_pricing';
    $existing['art_id'] = $params['art_id'];
    $existing['user_id'] = user_id();
    $existing['single'] = 1;
    $existing_res = db_get($existing);
    if (isset($existing_res['id'])) {
        $existing['id'] = $existing_res['id'];
    }
    $existing['price'] = floatval($params['price']);

    $res = db_save($existing);
    return $res;
}

function tecdoc_get_art_sellers($art_id)
{

    $existing = array();
    $existing['table'] = 'tecdoc_pricing';
    $existing['art_id'] = $art_id;
    $existing_res = db_get($existing);
    return $existing_res;

}




//
//
//function tecdoc_image_to_png($filepath)
//{
//    $type = exif_imagetype($filepath); // [] if you don't have exif you could use getImageSize()
//    $allowedTypes = array(
//        1,  // [] gif
//        2,  // [] jpg
//        10,  // [] jpg
//        3,  // [] png
//        6   // [] bmp
//    );
//    if (!in_array($type, $allowedTypes)) {
//        return false;
//    }
//    switch ($type) {
//        case 1 :
//            $im = imageCreateFromGif($filepath);
//
//            break;
//        case 2 :
//            $im = imageCreateFromJpeg($filepath);
//            break;
//        case 3 :
//            $im = imageCreateFromPng($filepath);
//            break;
//        case 6 :
//            $im = imageCreateFromBmp($filepath);
//            break;
//    }
//
//    $fn = basename($filepath);
//
//    imagepng($im, $fn . ".png");
//    imagedestroy($im);
//    return true;
//}