<?php
include("includes/navbar.php");
?>






<div class="wrapper">
<span class="icon-close">
            <ion-icon name="close"></ion-icon>
        </span>
    <div class="form-box login">
        <h2>Login</h2>
        <form action="#">
            <div class="input-box">
                <span class="icon">
                <ion-icon name="mail"></ion-icon>
                </span>
                <input type="email" placeholder="Email" required>
                <label for=""></label>
            </div>
            <div class="input-box">
                <span class="icon">
                <ion-icon name="lock-closed"></ion-icon>
                </span>
                <input type="password" placeholder="Password"required>
                <label for=""></label>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forgot Password?</a>
            </div>
            <button type="submit" class="btn">Login</button>
            <div class="register-link">
                <p>Don't have an account? <a href="#">Register</a></p>
            </div>
        </form>
    </div>
    <div class="form-box register" style="display: none;">
            <h2>Register</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon">
                    <ion-icon name="person"></ion-icon>
                    </span>
                    <input type="text" placeholder="Username" required>
                    <label for=""></label>
                </div>
                <div class="input-box">
                    <span class="icon">
                    <ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="email" placeholder="Email" required>
                    <label for=""></label>
                </div>
                <div class="input-box">
                    <span class="icon">
                    <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" placeholder="Password" required>
                    <label for=""></label>
                </div>
                <button type="submit" class="btn">Register</button>
                <div class="login-link">
                    <p>Already have an account? <a href="#">Login</a></p>
                </div>
        </div>
</div>






<?php
include("includes/footer.php");
?>