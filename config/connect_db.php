<?php
 
 // $conn = mysqli_connect('localhost','Konrad','test1234','pomidorino_pizza');
 // if(!$conn){
 // echo 'Blad polaczenia:'. mysqli_connect_error();}
 
 require  'lib/Medoo/Medoo.php';
 use Medoo\Medoo; //host=127.0.0.1'
 $pdo=new PDO('mysql:dbname=pomidorino_pizza;host=192.168.64.2','Konrad','test1234'); 
//$pdo = new PDO('mysql:dbname=pomidorino_pizza;host=http://192.168.64.2/', 'Konrad', 'test1234');
 $database = new Medoo([
	'pdo' => $pdo,
	'database_type' => 'mysql',
	// 'database_name' => 'pomidorino_pizza',
	// 'server' => '192.168.64.2',
	// 'username' => 'Konrad',
	// 'password' => 'test1234',

	'charset' => 'utf8mb4',
	'collation' => 'utf8mb4_general_ci',
	'port' => 3306,

	'prefix' => 'PREFIX_',
 
	'logging' => true,
 
	'option' => [
        PDO::ATTR_CASE => PDO::CASE_NATURAL, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION 
	]
]);


?>