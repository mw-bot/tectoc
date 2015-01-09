<script>
$(function() {
  $('#<?php print $params['id'] ?> table').addClass('mw-ui-table');
});
</script>
<?php

$view = normalize_path(__DIR__ . '/views/search_box.php', false);
include($view);
?>
<?php if (isset($_GET['mfa'])): ?>
    <?php
    $id = $_GET['mfa'];
    $data = tecdoc_get_mfa($id);
    $view = normalize_path(__DIR__ . '/views/mfa.php', false);
    include($view);
    ?>
<?php elseif (isset($_GET['mod'])): ?>
    <?php
    $id = $_GET['mod'];
    $data = tecdoc_get_mod($id);
    $view = normalize_path(__DIR__ . '/views/mod.php', false);
    include($view);
    ?>
<?php
elseif (isset($_GET['typ'])): ?>
    <?php
    $id = $_GET['typ'];
    $data = tecdoc_get_typ($id);
    $view = normalize_path(__DIR__ . '/views/typ.php', false);
    include($view);
    ?>
    <?php
elseif (isset($_GET['find'])): ?>
    <?php
    $id = $_GET['find'];
    $data = tecdoc_find_art($id);
    $view = normalize_path(__DIR__ . '/views/find.php', false);
    include($view);
    ?>
<?php
elseif (isset($_GET['art'])): ?>
    <?php
    $id = $_GET['art'];
    $data = tecdoc_get_art($id);
    $images = tecdoc_get_art_images($id);

    $sellers = tecdoc_get_art_sellers($id);

    $view = normalize_path(__DIR__ . '/views/art.php', false);
    include($view);
    ?>
<?php
elseif (isset($_GET['buy_art'])): ?>
    <?php
    $id = $_GET['buy_art'];
    $data = tecdoc_get_art($id);
    $images = tecdoc_get_art_images($id);

    dd($data);
    ?>
    <?php
elseif (isset($_GET['sell_art'])): ?>
    <?php
    $id = $_GET['sell_art'];
    $data = tecdoc_get_art($id);
    $images = tecdoc_get_art_images($id);
    $view = normalize_path(__DIR__ . '/views/part_providers/mark_avaiable.php', false);
    include($view);
    ?>

<?php
else: ?>
    <?php
    $data = tecdoc_get();
    $view = normalize_path(__DIR__ . '/views/default.php', false);
    include($view);
    ?>
<?php endif ?>
