<?php


if (!defined("TEXDOC_URL")) {
    define("TEXDOC_URL", 'http://steve.gmk.bg/data/');

}


function tecdoc_get($params = array())
{

    $url = TEXDOC_URL . 'json.php?' . http_build_query($params);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    $data = curl_exec($ch);

    curl_close($ch);
    $data = @json_decode($data, true);
    return $data;


}