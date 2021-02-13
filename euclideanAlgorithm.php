<?php

//datos de acceso para la base de datos

$host = "localhost";
$username = "root";
$password = "admin";
$dbName = "b76223_tarea";

global $conn;

$conn = mysqli_connect($host, $username, $password, $dbName);

if (mysqli_connect_errno()) {
    echo "Connection couldn't be established" . mysqli_connect_errno();
}


// obtiene las probabilidades para obtener las rutas 

function getRuthPlace ($priceSearch, $turistSearch, $ageSearch, $placeSearch, $categorySearch, $conn){
    
    
}

?>