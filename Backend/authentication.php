<?php
session_start();
include('Admin/config/dbcon.php');

if(!isset($_SESSION['auth'])){

    header("Location: ../Frontend/login.php");
    exit(0);
}
else{
    if($_SESSION['auth_role']!="Admin"){
        $_SESSION['message'] = "You are not authorized as Admin";
        header("Location: ../Frontend/login.php");
        exit(0);
    }
}
?>