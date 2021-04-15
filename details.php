<?php 
include ('config/connect_db.php');
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
<?php else: ?><h5> Pizza nie istnieje </h5> 
<?php endif; ?>
</div>
<?php include ('templates/footer.php'); ?>

</body></html>