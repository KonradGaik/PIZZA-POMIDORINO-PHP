<?php 
include ('config/connect_db.php');
if(isset($_POST['delete'])){
$id_to_delete = mysqli_real_escape_string($conn,$_POST['id_to_delete']);
$sql =  "DELETE FROM pizzas WHERE id = $id_to_delete";
if(mysqli_query($conn,$sql)){'Location:index.php';}
else{echo 'Blad usuwania:'. mysqli_error($conn);}
}
if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "SELECT * FROM pizzas WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $pizza = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($conn);
}
?>
<html>
<head></head>
<body>
<?php include ('templates/header.php'); ?>

<h4 class="center">Szczegóły:</h4></br>
<div class="container center">
<?php if($pizza): ?>
 
<p> Stworzone przez: <?php echo $pizza['email']; ?></p>
<p>Imie: <?php echo htmlspecialchars($pizza['imie']); ?></p>
<p>Nazwa pizzy: <?php echo htmlspecialchars($pizza['nazwa']);?></p>
<p>Dodatki: <?php echo htmlspecialchars($pizza['dodatki']);?></p>
<p>Zamówiono o: <?php echo htmlspecialchars($pizza['created_at']); ?></p>

<form action="detalis.php" method="POST"><input type="hidden" name="id_to_delete" value=<?php echo $pizza['id'] ?>>
<input type="submit" name="delete" value="Usuń" class="btn brand z-depth-0"></form>
<?php else: ?><h5> Pizza nie istnieje </h5> 
<?php endif; ?>
</div>
<?php include ('templates/footer.php'); ?>

</body></html>