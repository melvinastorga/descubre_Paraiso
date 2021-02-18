<?php
    include('../auth/auth.php');
    $requestMethod = $_SERVER["REQUEST_METHOD"];
    
    if($requestMethod == "POST"){
        if(!isAdmin($_POST["username"],$_POST["password"])){
            die("Error!");
        }

    }
?>