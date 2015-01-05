<?php if (!empty($data)): ?>

<table width="100%" border="0">
  <thead>
    <tr>
      <th scope="col">Class</th>
      <th scope="col">Item</th>
      <th scope="col">Brand</th>
      <th scope="col">Art number</th>
    </tr>
  </thead>
  <?php foreach ($data as $item): ?>
  <tr>
    <td><?php print $item['SPARE_CLASS'] ?></td>
    <td><a href="<?php print content_link(); ?>?art=<?php print $item['ART_ID'] ?>"><?php print $item['SPARE_NAME'] ?> </a></td>
    <td><?php print $item['BRAND_NAME'] ?></td>
    <td><?php print $item['ART_ARTICLE_NR'] ?></td>
  </tr>
  <?php endforeach; ?>
</table>
<?php endif ?>
