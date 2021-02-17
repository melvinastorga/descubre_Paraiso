<?php

ini_set('date.timezone', 'America/Costa_Rica');

$new_title = $_POST['new_title'];
$new_category = $_POST['new_category'];
$new_contain = $_POST['new_contain'];
$new_image = $_POST['new_image'];
$new_video = $_POST['new_video'];
$date = date('Y-m-d',time());

include('connection_guapiles.php');

$result = str_replace('"',"'",$new_video);

$query = "INSERT INTO news values (0,'$new_title','$new_category', '$new_contain'
,'$date', '$new_image', '$result')" ;



$sql = mysqli_query($connection,$query);

    
    include("gestionarNoticias.php");
    echo " <script > ";
    echo " toastr.success('La noticia $new_title ha sido insertada correctamente!'); ";
    echo " </script> ";
   

mysqli_close($connection);

