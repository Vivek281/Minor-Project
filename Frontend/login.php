<?php
session_start();

if(isset($_SESSION['auth'])){

    if(!isset ($_SESSION['message'])){
        $SESSION['message'] = "YOu are already Logged in..!";
    }
    header("Location: ../Backend/index.php");
    exit(0);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/CSS/app.css">
</head>
<body>
<div class="message">
    <?php
include("message.php");

?></div>

    <div class="wrapper">
        <div class="form-box login">
                    
                     
                <h2>Login</h2>
                <form action="../Backend/logincode.php" method="POST">
                    <div class="input-box">
                        <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                        </span>
                        <input type="email" name="email" placeholder="Email" required>
                        <label for=""></label>
                    </div>
                    <div class="input-box">
                        <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                        </span>
                        <input type="password" name="password" placeholder="Password"required>
                        <label for=""></label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">Remember me</label>
                        <a href="#">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn login_btn" name="login_btn">Login</button>
                    <div class="register-link">
                        <p>Don't have an account? <a href="signup.php">Register</a></p>
                    </div>
                </form>
            </div>

    </div>

</body>
</html>