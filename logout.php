<?php
    include('../auth/auth.php');
    logout();
    header("Location: login.php");
?>