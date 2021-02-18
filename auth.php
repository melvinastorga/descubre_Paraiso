<?php

//include('../connection_local.php');




    function isAdmin($username, $password){
        
        $host = "localhost";
        $username = "root";
        $password = "admin";
        $dbName = "proyecto";
        
        
        $connection = mysqli_connect($host,$username,$password,$dbName) or die("No se pudo conectar a la BD: ".mysqli_connect_error());
        
        $query = "SELECT username FROM Administrador where username = '".$username."' and _password = '".$password."'";
        $result = mysqli_query($connection, $query);
       
        
        
        if($result->fetch_assoc()){
            session_start();
            $_SESSION['username'] = $username;
            return true;
        }
        return false;
    }
?>