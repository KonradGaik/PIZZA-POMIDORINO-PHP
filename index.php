<?php
session_start();
if(!empty($_SESSION['user']) :   ?>

<!DOCTYPE html>
<html lang="pl">
 
<?php include ('templates/header.php') ?>

<h1>Witamy, witamy, witamy</h1>

<p> Hi <?php else :?> </p>   
    <?php  elseif: ?> 
<a href="logout.php">Wyloguj</a>
<?php include ('templates/footer.php') ?>
<?php endif; ?>
</html>
