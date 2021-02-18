<?php
     include('../auth.php');
     include('../connection_local.php');
     
     
    $requestMethod = $_SERVER["REQUEST_METHOD"];
    
    if($requestMethod == "POST"){
        
        echo isAdmin($_POST["name"],$_POST["password"], $conn);
        
       

    }
?>