<?php


$host = "localhost";
$username = "id16025515_root";
$password = "H?bFjE2}7m%|J)CQ";
$dbName = "id16025515_proyecto";


/*
$host = "localhost";
$username = "root";
$password = "admin";
$dbName = "proyecto";

*/

$conn = mysqli_connect($host,$username,$password,$dbName) or die("No se pudo conectar a la BD: ".mysqli_connect_error());

mysqli_set_charset($conn,"utf8");

?>