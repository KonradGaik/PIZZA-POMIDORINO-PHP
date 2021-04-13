<?php

if(isset($_POST['submit'])){

if(empty($_POST['email'])){
	echo "Nie podales e-maila.</br>";
}else{$email = $_POST['email'] ;
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
echo 'Email nieprawidlowy.';}
}

if(empty($_POST['name'])){echo "Nie podales imienia.";}
else{$name = $_POST['name'];
	if (!(preg_match('/^[a-zA-Z\s]+$/',$name)));
	else{echo 'Podano niepoprawne imie.';}}

if(empty($_POST['title'])){
	echo "Nie podales nazwy pizzy";}
	else{$title = $_POST['title'];
		if (!(preg_match('/^[a-zA-Z\s]+$/',$title)));
		else{echo 'Podano niepoprawna nazwe pizzy.';}}

if(empty($_POST['dodatki'])){
	echo "Nie podales dodatkow";
}else{$dodatki = $_POST['dodatki'];
	if (!(preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$dodatki)));
	else{echo 'Podano niepoprawny format dodatkow.';}}
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
			<input type="text" name="dodatki">
			<div class="center">
				<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
			</div>
		</form>
	</section>
<?php include ('templates/footer.php'); ?>
</html>
