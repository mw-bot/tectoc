<?php 

if(!is_logged()):
?>

<module type="users/login" />


<?php else: ?>
<script>
$(document).ready(function() {
$("#part_mark_for_sale_form").submit(function(e) {
    e.preventDefault();
    var postData = $(this).serializeArray();
 
    $.ajax({
        type: "POST",
        url: "<?php print api_url('tecdoc_mark_avaiable') ?>",
        data: postData,
        cache: false
    }).done(function(result) {
        window.location.href="<?php print content_link(); ?>?art=<?php print $id ?>";
    }).fail(function() {
        alert('error');
    });
});
 
});
</script>
<form name="part_mark_for_sale_form" id="part_mark_for_sale_form" action="" method="POST">

<h2>Sell this item</h2>
Price
<input type="text" name="price">
<input type="hidden" name="art_id" value="<?php print $id ?>">
<input type="submit" value="Save" />
</form>
<hr>
<?php include(__DIR__.DS.'../art.php'); ?>
<?php endif; ?>