<?php
$conn = mysqli_connect('localhost','Konrad','test1234','pomidorino_pizza');
if(!$conn){
echo 'Blad polaczenia:'. mysqli_connect_error();}

$sql = 'SELECT nazwa, imie, id FROM pizzas';
$result= mysqli_query($conn,$sql);
$pizza = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);
print_r($pizza);
?>
<!DOCTYPE html>
<html lang="pl">

<?php include ('templates/header.php') ?>

<h1>Witamy, witamy, witamy</h1>

 

<?php include ('templates/footer.php') ?>
</html>
