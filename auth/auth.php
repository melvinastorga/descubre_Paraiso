<?php
    include('connection.php');

    function isAdmin($username, $password){
        $query = "SELECT username FROM admin where username = '".$username."' and password = '".$password."';".
        $result = mysqli_query($connection, $query);
        if($result){
            session_start();
            $_SESSION['username'] = $username;
            return true;
        }
        return false;
    }

    function logout(){
        session_unset();
        session_destroy();
    }
?>