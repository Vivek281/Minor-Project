<?php
include('header.php');
?>



<header>
    <h2 class="logo">BookVerse</h2>
    <nav class="navigation">
        <a href="index.php">Home</a>
        <a href="#">Categories</a>
        <a href="#">List</a>
        <a href="about.php">About</a>
    <?php if(isset($_SESSION['auth_user'])):?>
        <a href=""><?= $_SESSION['auth_user']['user_name'];?></a>
        <form action="logout.php" method="POST">
            <button type="submit" name="logout_btn">LogOut</button>
        </form>
            <?php else:?>
        <button class="btnLogin-popup" onclick="window.location.href='login.php'">Login</button>
       
    <?php endif; ?>
    </nav>
</header>





