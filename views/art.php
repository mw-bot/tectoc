<?php if (isset($sellers) and !empty($sellers)): ?>
<h2>Buy this item</h2>
<table border="0">
 <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Seller</th>
      <th scope="col">Price</th>
      <th scope="col">Buy</th>
    </tr>
  </thead>
  <?php foreach ($sellers as $seller): ?>
  <tr>
    <td><img src="<?php print user_picture($seller['user_id']); ?>" height="30" /></td>
    <td><?php print user_name($seller['user_id']); ?></td>
    <td><?php print ($seller['price']); ?></td>
    <td><a class="mw-ui-btn" href="<?php print content_link(); ?>?buy_art=<?php print $id ?>">Buy</a>
</td>
  </tr>
  <?php endforeach; ?>
</table>
<?php endif ?>

<?php if (!empty($data)): ?>
<?php if (!empty($images)): ?>
<?php foreach ($images as $item): ?>

<img src="<?php print $item ?>" />
<?php endforeach; ?>
<?php endif ?>
<table border="0">
  <?php foreach ($data as $item): ?>
  <tr>
    <td><?php print $item['F1'] ?></td>
    <td><?php print $item['F2'] ?></td>
    <td><?php print $item['F3'] ?></td>
  </tr>
  <?php endforeach; ?>
</table>
<?php endif ?>

<?php if (isset($_REQUEST['art'])): ?>
<a href="<?php print content_link(); ?>?sell_art=<?php print $_REQUEST['art'] ?>">Sell this item</a>
<?php endif ?>
