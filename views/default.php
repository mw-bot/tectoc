<?php if (!empty($data)): ?>

<table width="100%" border="0">
  <?php foreach ($data as $item): ?>
  <tr>
    <td><a href="<?php print content_link(); ?>?mfa=<?php print $item['ID'] ?>">
    <img src="<?php print TEXDOC_URL . 'png/' . $item['ID'] ?>.png">
	<?php print $item['F1'] ?>
    </a></td>
  </tr>
  <?php endforeach; ?>
</table>
<?php endif ?>
