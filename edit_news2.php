<?php

session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}

$new_id = $_POST['new_id'];
$title = $_POST['new_title'];
$date = $_POST['new_date'];
$category = $_POST['new_category'];
$image = $_POST['new_image'];
$contain = $_POST['new_contain'];
$video = $_POST['new_video'];


echo "id es $new_id xD";

include('connection_guapiles.php');


$query = "UPDATE news set title = '$title', category = '$category',
contain = '$contain', image = '$image', video = '$video' WHERE new_id = $new_id";

echo $query;

$sql = mysqli_query($connection,$query);
    
    include("gestionarNoticias.php");
    echo " <script > ";
    echo " toastr.success('La noticia $title ha sido actualizada correctamente!'); ";
    echo " </script> ";

mysqli_close($connection);

?>
