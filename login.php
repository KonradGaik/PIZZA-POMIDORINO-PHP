<?php 
require_once ('db.php');
session_start();

if(!empty($_POST['login']) && !empty($_POST['password'])){
if($_POST['login'] == USERNAME){
 if(password_verify($_POST['password'],PASSWORD)){
$_SESSION['user'] = strip_tags($_POST['login']);
header('Location:http://192.168.64.2/THENINJANETPHP/index.php ');
 }else{echo 'Niepoprawne hasło lub login.';}
}
}

?>
<!DOCTYPE html>
<html lang="pl">
    
<?php include ('templates/header.php') ?>

<h1>Logowanie</h1>
<form action="login.php" method="post"></form>
<h4>Login:</h4>
<input type="text" name="login" >
<h4>Hasło:</h4>
<input type="text" name="password" >
<input type="submit" name="submit" value="Potwierdz" class="btn brand z-depth-0">
<?php include ('templates/footer.php');  ?>
</html>

