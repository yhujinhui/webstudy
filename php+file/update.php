<?php 
require_once('lib/print.php');
require_once('view/top.php');
?>

	<a href="create.php">create</a>
	<?php if(isset($_GET['id'])){ ?>
	<a href="update.php?id=<?=$_GET['id']?>">update</a>
<?php } ?>
	
	<form action="update_process.php" method="post">
		<input type="hidden" name="old_Title" value="<?=$_GET['id']?>">
		<p><input type="text" name="Title" placeholder="title" value="<?php print_title(); ?>"></p>
		<p><textarea name="Description" cols="30" rows="10" placeholder="description"><?php print_description();?></textarea></p>
		<p><input type="submit"></p>
	</form>
</body>
</html>