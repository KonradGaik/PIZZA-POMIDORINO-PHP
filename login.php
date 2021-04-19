<?php

$haslo = $login = '';

if(isset($_POST['submit'])){
session_start();

$_SESSION['login'] = $_POST['login'];

header('Location: index.php');
}


?>
<html>
<head></head>
<body>
<?php include ('templates/header.php'); ?>

<h1>Logowanie</h1>
<form class="white" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
<input type="text" name="login" value="<?php echo htmlspecialchars($login)?>">
<label>Login:</label>
<input type="text" name="haslo" value="<?php echo htmlspecialchars($haslo)?>">
<label>Haslo:</label> </br> </br>

<input type="submit" name="submit" value="Zaloguj" class="btn brand z-depth-0 ">
</form>
<?php include ('templates/footer.php'); ?>

</body></html>