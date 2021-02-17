<?php

$new_id = $_GET['new_id'];

include('connection_guapiles.php');

if($new_id != null || $new_id != ''){

$query = "Delete from news where new_id = $new_id" ;

$sql = mysqli_query($connection,$query);


include("gestionarNoticias.php");
    echo " <script > ";
    echo " toastr.success('La noticia con ID $new_id ha sido eliminada correctamente!'); ";
    echo " </script> ";

}else{
    include("clientes.php");
    echo " <script > ";
    echo " toastr.warning('Elija una noticia para eliminar!'); ";
    echo " </script> ";
}

mysqli_close($connection);
?>