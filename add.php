<?php
$title = $name = $dodatki = $email = '';
$errors = array('email'=>'','name'=>'','title'=>'','dodatki'=>''); 

if(isset($_POST['submit'])){
if(empty($_POST['email'])){
	echo "Nie podales e-maila.</br>";
}else{$email = $_POST['email'] ;
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
$errors['email'] = 'Email nieprawidlowy.';}
}

if(empty($_POST['name'])){
	echo "Nie podales imienia";}
else{$name = $_POST['name'];
	if (!(preg_match('[a-zA-Z]',$name)));
	else{$errors['name'] = 'Podano niepoprawne imie.';}
}


if(empty($_POST['title'])){
	echo "Nie podales nazwy pizzy";}
	else{$title = $_POST['title'];
		if (!(preg_match('[a-zA-Z]',$title)));
		else{$errors['title']= 'Podano niepoprawna nazwe pizzy.';}}

if(empty($_POST['dodatki'])){
	echo "Nie podales dodatkow";
}else{$dodatki = $_POST['dodatki'];
	if ((preg_match('#\G(?:[A-Za-z]+(?:\s*,\s*|$))+$#',$dodatki)));
	else{$errors['dodatki'] = 'Podano niepoprawny format dodatkow.';}}

	if(array_filter($errors)){
		 echo 'Bledy w formularzu.';
	 }else{	 header('Location:congratulation.php');}

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
			<input type="text" name="name"value="<?php echo htmlspecialchars($name) ?>">
			<label>Twoje imie</label>
			<div class="red-text"><?php echo $errors['name']; ?></div>
            
			<input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
			<div class="red-text"><?php echo $errors['title']; ?></div>
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
