<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "bookverse";

$con = mysqli_connect($host, $username, $password, $db);

if(!$con){
  header("Location: ../Error/error.php");
  die();
}


?>