<?php
session_start();
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


<div class="message"><?php
include("message.php");
?></div>

<div class="wrapper">
        <!-- <span class="icon-close">
            <ion-icon name="close"></ion-icon>
        </span> -->
   
    <div class="form-box register">
               
            <h2>Register</h2>
            <form action="../Backend/signupcode.php" method="POST">
                <div class="input-box">
                    <span class="icon">
                    <ion-icon name="person"></ion-icon>
                    </span>
                    <input type="text" placeholder="Username" name="name" required>
                    <label for=""></label>
                </div>
                <div class="input-box">
                    <span class="icon">
                    <ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="email" placeholder="Email" name="email" required>
                    <label for=""></label>
                </div>
                <div class="input-box">
                    <span class="icon">
                    <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" placeholder="Password" name="password" required>
                    <label for=""></label>
                </div>
                <div class="input-box">
                    <span class="icon">
                    <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" placeholder="Confirm Password"  name="cnfrmpassword" required>
                    <label for=""></label>
                </div>
                <button type="submit"  name="signup_btn" class="btn signup_btn">Register</button>
                <div class="login-link">
                    <p>Already have an account? <a href="login.php">Login</a></p>
                </div>
        </div>
    </div>

<div>


</body>
</html>