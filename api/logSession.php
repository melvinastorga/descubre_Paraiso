<?php
     include('../auth.php');
    $requestMethod = $_SERVER["REQUEST_METHOD"];
    
    if($requestMethod == "POST"){
        
        echo isAdmin($_POST["name"],$_POST["password"]);
        
       

    }
?>