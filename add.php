<?php

if(isset($_POST['submit'])){
echo $_POST['email'].'<br />';
echo $_POST['name'].'<br />';
echo $_POST['title'].'<br />';
echo $_POST['ingredients'].'<br />';
}
?>
<!DOCTYPE html>
<html>
<?php include ('templates/header.php'); ?>
<section class="container grey-text">
		<h4 class="center">Add a Pizza</h4>
		<form class="white" action="add.php" method="POST">
			<label>Twoj e-mail</label>
			<input type="text" name="email">
			<label>Twoje imie</label>
			<input type="text" name="name">
            <label>Nazwa pizzy</label>
			<input type="text" name="title">
			<label>Dodatki(oddzielone przecinkami) </label>
			<input type="text" name="ingredients">
			<div class="center">
				<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
			</div>
		</form>
	</section>
<?php include ('templates/footer.php'); ?>
</html>
