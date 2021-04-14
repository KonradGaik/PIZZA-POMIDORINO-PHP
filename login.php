<?php 

require_once ('db.php');
session_start();
$login = '';
$password = '';
if(!empty($_POST['login']) && !empty($_POST['password'])){
if($_POST['login']==USERNAME){
 password_hash(PASSWORD,PASSWORD_DEFAULT);
 if(password_verify($_POST['password'],PASSWORD)){
echo 'Poprawnie zalogowane';
 }else{echo 'Niepoprawnie zalogowano';}
}
}
?>
<!DOCTYPE html>
<html lang="pl">
    
<?php include ('templates/header.php') ?>

<h1>Logowanie</h1>
<form action="login.php" method="post"></form>
<h2>Login:</h2>
<input type="text" name="login" value="<?php echo htmlspecialchars($login) ?>">
<h2>Hasło:</h2>
<input type="text" name="password" value="<?php echo htmlspecialchars($password) ?>">
<input type="submit" name="submit" value="Potwierdz" class="btn brand z-depth-0">
<?php include ('templates/footer.php') ?>
</html>