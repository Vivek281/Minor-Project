<?php
session_start();
?>


<?php
include('header.php');
?>



<header>
    <h2 class="logo">BookVerse</h2>
    <nav class="navigation">
        <a href="index.php">Home</a>
        <a href="categories.php">Categories</a>
        <a href="list.php">List</a>
        <a href="about.php">About</a>
             <?php if(isset($_SESSION['auth_user'])):?>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle  user-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false"><a href=""><?= $_SESSION['auth_user']['user_name'];?></a>
            </button>
            <ul class="dropdown-menu">
            <form action="logout.php" method="POST">
                        <button type="submit" name="logout_btn">LogOut</button>
                    </form>
            </ul>
            </div>

            <?php else:?>
        <button class="btnLogin-popup" onclick="window.location.href='login.php'">Login</button>
       
         <?php endif; ?>
    </nav>
</header>





