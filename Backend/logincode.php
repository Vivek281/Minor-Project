<?php
session_start();
include('Admin/config/dbcon.php');

if (isset($_POST['login_btn'])) {

    $email = ($_POST['email']);
    $password = ($_POST['password']);

    $login_query = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1";
    $login_query_run=mysqli_query($con, $login_query);

    if(mysqli_num_rows($login_query_run) > 0)
    {
        foreach($login_query_run as $data)
        {
            $user_id = $data['id'];
            $user_name = $data['name'];
            $user_email = $data['email'];
            $role = $data['role'];
        }
        $_SESSION['auth']=true;
        $_SESSION['auth_role']=$role;
        $_SESSION['auth_user']=[
            'user_id' => $user_id,
            'user_name' => $user_name,
            'user_email' => $user_email,
        ];

        if($_SESSION['auth_role'] == "Admin")
        {
            $_SESSION['message'] = "Welcome to Admin Panel";
            header("Location: index.php");
            exit(0);
        }
        elseif($_SESSION['auth_role'] == "User")
        {
            $_SESSION['message'] = "Logged in successfully";
            header("Location: ../Frontend/index.php");
            exit(0);
        }


    }else{
        $_SESSION['message'] = "Invalid Email or Password";
        header("Location: ../Frontend/login.php");
        exit(0);
    }
}
else{
    $_SESSION['message'] = "Please Register";
    header("Location: ../Frontend/login.php");
    exit(0);
}


?>