<?php
    session_start();
    $_SESSION["loggedin"]=false;
    unset($_SESSION["name"]);
    unset($_SESSION["UserType"]);
    header("location: default.php");
?>