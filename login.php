<?php 
include ('config/connect_db.php');
$login=$haslo='';
$errors= array('login'=>'','haslo'=>'');
if(!empty($_POST['login']) && (!empty($_POST['haslo']))){
echo $_POST['login'];
echo $_POST['haslo'];}

if($_POST['submit']){
session_start();
$_SESSION['login'] = $_POST['login'];
header('Location:index.php');
}

?>
<html>
<head></head>
<body>
<?php include ('templates/header.php'); ?>

<h1>Logowanie</h1>
<form class="white" action="login.php" method="POST">
<input type="text" name="login" value="<?php echo htmlspecialchars($login)?>">
<label>Login:</label>
<input type="text" name="haslo" value="<?php echo htmlspecialchars($haslo)?>">
<label>Haslo:</label> </br> </br> 
<input type="submit" name="submit" value="Zaloguj" class="btn brand z-depth-0 ">
</form>
<?php include ('templates/footer.php'); ?>

</body></html>