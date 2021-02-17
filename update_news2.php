<?php
$new_id = $_POST['new_id'];
$title = $_POST['new_title'];
$date = $_POST['new_date'];
$category = $_POST['new_category'];
$image = $_POST['new_image'];
$contain = $_POST['new_contain'];
$video = $_POST['new_video'];


echo "id es $new_id xD";

$result = str_replace(array("&#39;","'"),$video)";

echo $result." result !!";

include('connection.php');


$query = "UPDATE customer set customer_name = '$customer_name', lastname = '$customer_lastname',
address = '$customerdirection', phone = '$customer_phone' WHERE customer_id = $customer_id and number_doc = '$customer_doc'";

echo $query;

$sql = mysqli_query($connection,$query);
    
    include("clientes.php");
    echo " <script > ";
    echo " toastr.success('El cliente $customer_name ha sido actualizado correctamente!'); ";
    echo " </script> ";

mysqli_close($connection);

?>
