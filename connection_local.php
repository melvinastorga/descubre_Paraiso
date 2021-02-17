<?php

$host = "localhost";
$username = "root";
$password = "admin";
$dbName = "proyecto";


$connection = mysqli_connect($host,$username,$password,$dbName) or die("No se pudo conectar a la BD: ".mysqli_connect_error());

mysqli_set_charset($connection,"utf8");

?>