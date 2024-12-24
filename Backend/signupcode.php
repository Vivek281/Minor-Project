<?php
session_start();
include('Admin/config/dbcon.php');

if (isset($_POST['signup_btn'])) {
    $name = ($_POST['name']);
    $email = ($_POST['email']);
    $password = ($_POST['password']);
    $cnfrmpassword = ($_POST['cnfrmpassword']);

    if ($password == $cnfrmpassword) {

        // $hash_password = password_hash($password, PASSWORD_BCRYPT);
        
        // Check Email
        $checkemail = "SELECT email FROM users WHERE email='$email'";
        $checkemail_run = mysqli_query($con, $checkemail);

        if (mysqli_num_rows($checkemail_run) > 0) 
        {
            // Email already exists
            $_SESSION['message'] = "Email already exists";
            header("Location: ../Frontend/signup.php");
            exit(0);
        } 
        else 
        {
            $user_query = "INSERT INTO users (name, email, password,role) VALUES ('$name', '$email', '$password','User')";
            $user_query_run = mysqli_query($con, $user_query);

            if ($user_query_run) {
                $_SESSION['message'] = "Registered Successfully";
                header("Location: ../Frontend/login.php");
                exit(0);
            } else {
                $_SESSION['message'] = "Something Went Wrong";
                header("Location: ../Frontend/signup.php");
                exit(0);
            }
        }
    } else {
        $_SESSION['message'] = "Password and Confirm Password do not match";
        header("Location: ../Frontend/signup.php");
        exit(0);
    }
} else {
    header("Location: ../Frontend/signup.php");
    exit(0);
}
?>
