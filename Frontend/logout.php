<?php
session_start();

// session destroy
if(isset($_POST['logout_btn'])){
    unset($_SESSION['auth']);
    unset($_SESSION['auth_role']);
    unset($_SESSION['auth_user']);

    $_SESSION['message'] = "Logged out successfully";
    header("Location: index.php");
    exit(0);
}
?>