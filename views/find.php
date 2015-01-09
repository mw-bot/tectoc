<?php if (!empty($data)): ?>

<table border="0">
  <thead>
    <tr>
<!--      <th scope="col"></th>
-->      <th scope="col">Brand</th>
      <th scope="col">Art number</th>
      <th scope="col">Description</th>
      <th scope="col">Assembly</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <?php foreach ($data as $item): ?>
  <tr>
    <!--<td><?php $img = tecdoc_get_art_image_remote($item['ART_ID']); ?>
      <?php if ($img): ?>
      <a href="<?php print content_link(); ?>?art=<?php print $item['ART_ID'] ?>"> <img src="<?php print $img ?>" height="30" /></a>
      <?php endif ?></td>-->
    <td><?php print $item['SUP_BRAND'] ?></td>
    <td><a href="<?php print content_link(); ?>?art=<?php print $item['ART_ID'] ?>"><?php print $item['ART_ARTICLE_NR'] ?></a></td>
    <td><?php print $item['GA_DESCRIPTION'] ?></td>
    <td><?php print $item['GA_ASSEMBLY'] ?></td>
    <td><?php if (isset($item['sellers'])): ?>
      <a class="mw-ui-btn" href="<?php print content_link(); ?>?art=<?php print $item['ART_ID'] ?>">Buy</a>
      <?php endif ?></td>
  </tr>
  <?php endforeach; ?>
</table>
<?php else: ?>
<h4>No results found</h4>
<?php endif ?>
