<?php if (!empty($data)): ?>

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
