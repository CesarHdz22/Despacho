<?php
/*
$host = "192.168.1.181";
$user = "Admin";
$password = "1234567890";
$dbname = "despacho";
*/
$host = "localhost";
$user = "root";
$password = "";
$dbname = "despacho";
try {
	$conexionpdo = new PDO("mysql:host=".$host.";dbname=".$dbname,$user,$password);
	$conexionpdo->exec("SET CHARACTER SET utf8");
} catch (PDOException $e) {
	echo "Error en la conexion".$e->getMessage();
}


?>