<?php if (!empty($data)): ?>

<table width="100%" border="0">
  <thead>
    <tr>
      <th scope="col">Model</th>
      <th scope="col">Start</th>
      <th scope="col">End</th>
    </tr>
  </thead>
  <?php foreach ($data as $item): ?>
  <tr>
    <td><a href="<?php print content_link(); ?>?mod=<?php print $item['ID'] ?>"><?php print $item['F1'] ?> </a></td>
    <td><?php print $item['F2'] ?></td>
    <td><?php print $item['F3'] ?></td>
  </tr>
  <?php endforeach; ?>
</table>
<?php endif ?>
