<?php


    function isAdmin($username, $password){
        
        $host = "localhost";
        $useN = "id16025515_root";
        $passW = "H?bFjE2}7m%|J)CQ";
        $dbName = "id16025515_proyecto";
        
        
        $connection = mysqli_connect($host,$useN,$passW,$dbName) or die("No se pudo conectar a la BD: ".mysqli_connect_error());
        
        $query = "SELECT username FROM Administrador where username = '".$username."' and _password = '".$password."'";
        $result = mysqli_query($connection, $query);
       
        
        
        if($result->num_rows > 0){
            session_start();
            $_SESSION['username'] = $username;
            return true;
        }
        return false;
    }
?>