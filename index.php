<?php
include ('config/connect_db.php');

$sql = 'SELECT nazwa, imie, id, dodatki, created_at, email FROM pizzas ORDER BY created_at ';
$result= mysqli_query($conn,$sql);
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="pl">

<?php include ('templates/header.php') ?>

<h4 class="center grey-text"> PIZZERIA</h4>
<div class="container">
<div class="row">

<?php foreach ($pizzas as $pizza): ?>
<div class="col s6 m3">
<div class="card z-depth-0">
<div class="card-content center">
<h6><?php echo htmlspecialchars($pizza['nazwa']) ?></h6>
 <?php foreach(explode(',',$pizza['dodatki'])as $ing ): ?><ul>
<li><?php      echo htmlspecialchars($ing)     ?> </li>  </ul>
<?php endforeach; ?>
</div>
<div class="card-action center">
<a  class="brand-text" href="details.php?id=<?php echo $pizza['id'] ?>">Szczegoly</a>
</div>
</div>
</div>
<?php  endforeach;  ?>

</div>
</div> 
<div class="center"><?php if((count($pizzas)>=2)){echo 'Liczba zamówień jest wieksza niz dwa.';}
else{echo 'Liczba zamówień jest mniejsza lub rowna dwa.';} ?> </div>
<?php include ('templates/footer.php') ?>
</html>
