<?php
include ('config/connect_db.php');

$imie = $nazwa = $dodatki = $email = '';
$errors = array('email'=>'','imie'=>'','nazwa'=>'','dodatki'=>''); 

if(isset($_POST['submit'])){
if(empty($_POST['email'])){
	echo "Nie podales e-maila.</br>";
}else{$email = $_POST['email'] ;
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
$errors['email'] = 'Email nieprawidlowy.';}
}

if(empty($_POST['imie'])){
	echo "Nie podales imienia";}
else{$name = $_POST['imie'];
	if (!(preg_match('[a-zA-Z]',$imie)));
	else{$errors['imie'] = 'Podano niepoprawne imie.';}
}

if(empty($_POST['nazwa'])){
	echo "Nie podales nazwy pizzy";}
	else{$title = $_POST['nazwa'];
		if (!(preg_match('[a-zA-Z]',$nazwa)));
		else{$errors['nazwa']= 'Podano niepoprawna nazwe pizzy.';}}

if(empty($_POST['dodatki'])){
	echo "Nie podales dodatkow";
}else{$dodatki = $_POST['dodatki'];
	if ((preg_match('#\G(?:[A-Za-z]+(?:\s*,\s*|$))+$#',$dodatki)));
	else{$errors['dodatki'] = 'Podano niepoprawny format dodatkow.';}}

	if(array_filter($errors)){
		 echo 'Bledy w formularzu.';
	 }else{	
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$nazwa = mysqli_real_escape_string($conn,$_POST['nazwa']);
		$imie = mysqli_real_escape_string($conn,$_POST['imie']);
		$dodatki = mysqli_real_escape_string($conn,$_POST['dodatki']);
	
		$sql = "INSERT INTO pizzas(email,nazwa,imie,dodatki) VALUES ('$email','$nazwa','$imie','$dodatki')";
		if(mysqli_query($conn,$sql)){
		header('Location:order.php');}
else{echo 'query error: '. mysqli_error($conn);}
	 }
}
?>
<!DOCTYPE html>
<html>
<?php include ('templates/header.php'); ?>
<section class="container grey-text">
		<h4 class="center">Złóz zamowienie</h4>
		<form class="white" action="add.php" method="POST">
			
			<input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
			<label>Twoj e-mail</label>
			<div class="red-text"><?php echo $errors['email']; ?></div>
			<input type="text" name="imie"value="<?php echo htmlspecialchars($imie) ?>">
			<label>Twoje imie</label>
			<div class="red-text"><?php echo $errors['imie']; ?></div>
            
			<input type="text" name="nazwa" value="<?php echo htmlspecialchars($nazwa) ?>">
			<div class="red-text"><?php echo $errors['nazwa']; ?></div>
			<label>Nazwa pizzy</label>
	
			<input type="text" name="dodatki"value="<?php echo htmlspecialchars($dodatki) ?>">
			<div class="red-text"><?php echo $errors['dodatki']; ?></div>
			<label>Dodatki(oddzielone przecinkami) </label>
			<div class="center">
				<input type="submit" name="submit" value="Potwierdz" class="btn brand z-depth-0">
			</div>
		</form>
	</section>
<?php include ('templates/footer.php'); ?>
</html>
