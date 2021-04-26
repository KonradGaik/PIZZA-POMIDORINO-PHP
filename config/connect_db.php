// $conn = mysqli_connect('localhost','Konrad','test1234','pomidorino_pizza');
// if(!$conn){
// echo 'Blad polaczenia:'. mysqli_connect_error();}


<?php
 
 $database = new Medoo([
	// required
	'database_type' => 'mysql',
	'database_name' => 'name',
	'server' => 'localhost',
	'username' => 'your_username',
	'password' => 'XD',
 
	// [optional]
	'charset' => 'utf8mb4',
	'collation' => 'utf8mb4_general_ci',
	'port' => 3306,
 
	// [optional] Table prefix
	'prefix' => 'PREFIX_',
 
	// [optional] Enable logging (Logging is disabled by default for better performance)
	'logging' => true,
 
	// [optional] MySQL socket (shouldn't be used with server and port)
	'socket' => '/tmp/mysql.sock',
 
	'option' => [
        PDO::ATTR_CASE => PDO::CASE_NATURAL, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION 
	]
]);
 
$database->insert("account", [
	"user_name" => "localhost",
	"email" => "foo@bar.com"
]);


?>