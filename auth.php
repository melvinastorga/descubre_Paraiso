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
       
        //echo $row = $result->fetch_assoc()
        
        if(true){
            session_start();
            $_SESSION['username'] = "c";
            return true;
        }
        return false;
    }

    function logout(){
        session_unset();
        session_destroy();
    }
?>