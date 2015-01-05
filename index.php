<link rel="stylesheet" href="<?php print $config['url_to_module'] ?>js/tablesaw/dist/tablesaw.css">


<script src="<?php print $config['url_to_module'] ?>js/tablesaw/dist/tablesaw.js"></script>
<?php if (isset($_GET['mfa'])): ?>
    <?php
    $id = $_GET['mfa'];
    $params = array();
    $params['func'] = 1;
    $params['mfa'] = $id;
    $data = tecdoc_get($params);
    ?>
    <?php if (!empty($data)): ?>
        <table width="100%" border="0" class="tablesaw" data-tablesaw-sortable>
            <thead>
            <tr>
                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Model</th>
                <th scope="col" data-tablesaw-sortable-col>Start</th>
                <th scope="col" data-tablesaw-sortable-col>End</th>
            </tr>
            </thead>


            <?php foreach ($data as $item): ?>
                <tr>
                    <td>
                        <a href="<?php print content_link(); ?>?mod=<?php print $item['ID'] ?>"><?php print $item['F1'] ?>
                        </a></td>


                    <td>
                        <?php print $item['F2'] ?>

                    </td>

                    <td>
                        <?php print $item['F3'] ?>

                    </td>


                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif ?>
<?php elseif (isset($_GET['mod'])): ?>
    <?php
    $id = $_GET['mod'];
    $params = array();
    $params['func'] = 2;
    $params['mod'] = $id;
    $data = tecdoc_get($params);

    ?>
    <?php if (!empty($data)): ?>
        <table width="100%" border="0" class="tablesaw" data-tablesaw-sortable>
            <thead>
            <tr>
                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Model</th>
                <th scope="col" data-tablesaw-sortable-col>>Start</th>
                <th scope="col" data-tablesaw-sortable-col>>End</th>
                <th scope="col" data-tablesaw-sortable-col>>kW</th>
                <th scope="col" data-tablesaw-sortable-col>>HP</th>
                <th scope="col" data-tablesaw-sortable-col>>cc</th>
                <th scope="col" data-tablesaw-sortable-col>>body</th>
            </tr>
            </thead>


            <?php foreach ($data as $item): ?>
                <tr>
                    <td>
                        <a href="<?php print content_link(); ?>?typ=<?php print $item['ID'] ?>"><?php print $item['F1'] ?>
                        </a></td>
                    <td>
                        <?php print $item['F2'] ?>
                    </td>
                    <td>
                        <?php print $item['F3'] ?>

                    </td>
                    <td>
                        <?php print $item['F4'] ?>

                    </td>
                    <td>
                        <?php print $item['F5'] ?>

                    </td>
                    <td>
                        <?php print $item['F6'] ?>
                    </td>
                    <td>
                        <?php print $item['F7'] ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif ?>


<?php
elseif (isset($_GET['typ'])): ?>
    <?php
    $id = $_GET['typ'];
    $params = array();
    $params['func'] = 12;
    $params['mod'] = $id;
    $data = tecdoc_get($params);

    ?>
    <?php if (!empty($data)): ?>
        <table width="100%" border="0">
            <thead>
            <tr>
                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Class</th>
                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Item</th>
                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Brand</th>
                <th scope="col" data-tablesaw-sortable-col>>Art number</th>

            </tr>
            </thead>
            <?php foreach ($data as $item): ?>
                <tr>

                    <td>
                        <?php print $item['SPARE_CLASS'] ?>

                    </td>

                    <td>
                        <a href="<?php print content_link(); ?>?art=<?php print $item['ART_ID'] ?>"><?php print $item['SPARE_NAME'] ?>
                        </a></td>

                    <td>
                        <?php print $item['BRAND_NAME'] ?>

                    </td>

                    <td>
                        <?php print $item['ART_ARTICLE_NR'] ?>

                    </td>


                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif ?>

<?php
elseif (isset($_GET['art'])): ?>
    <?php
    $id = $_GET['art'];
    $params = array();
    $params['func'] = 20;
    $params['art'] = $id;
    $data = tecdoc_get($params);

    ?>
    <?php if (!empty($data)): ?>
        <table  border="0">
            <?php foreach ($data as $item): ?>

                <tr>

                    <td>
                        <?php print $item['F1'] ?>
                    </td>
                    <td>
                        <?php print $item['F2'] ?>
                    </td>
                    <td>
                        <?php print $item['F3'] ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>



    <?php endif ?>

<?php
else: ?>
    <?php
    $mfa = tecdoc_get();
    ?>
    <?php if (!empty($mfa)): ?>
        <table width="100%" border="0">
            <?php foreach ($mfa as $item): ?>
                <tr>
                    <td><a href="<?php print content_link(); ?>?mfa=<?php print $item['ID'] ?>"><img
                                src="<?php print TEXDOC_URL . 'png/' . $item['ID'] ?>.png"><?php print $item['F1'] ?>
                        </a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif ?>
<?php endif ?>
