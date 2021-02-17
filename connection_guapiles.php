<?php

$host = "163.178.107.2";
$dbname = "descrubre_paraiso_bd";
$user = "laboratorios";
$password = "Saucr.120A";

$connection = mysqli_connect($host,$user,$password,$dbname) or die("No se pudo conectar a la BD: ".mysqli_connect_error());

mysqli_set_charset($connection,"utf8");

?>