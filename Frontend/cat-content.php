<?php

include("includes/navbar.php");

?>
<?php
include("../Backend/Admin/config/dbcon.php");
?>
<?php
include("message.php");
?>


<?php
        if (isset($_GET['ctbtn'])){
    $category = $con->real_escape_string($_GET['ctbtn']);
    $sql = "SELECT * FROM books WHERE category = '$category'";
    $result = mysqli_query($con, $sql);

    if ($result->num_rows > 0) {
    
?>





<div class="book-container">
        <h1><?php echo "$category";?> Books</h1>
<?php

    while ($row = mysqli_fetch_assoc($result)) {

?>

        <div class="book-cards">
            <div class="book-card">
                <img class="image-placeholder" src="img/<?php echo $row["image"]?>"></img>
                <div class="book-info">
                    <h2><a href="Books/<?php echo $row["file-location"] ?>"><?php echo $row["name"] ?></a></h2>
                    <p><em><?php echo $row["author"] ?></em></p>
                    <p><?php echo $row["description"] ?></p>
                    <div class="buttons">
                        <a href="Books/<?php echo $row["file-location"] ?>" class="details-btn">View Details</a>
                        <!-- <button class="add-btn">Add to List</button> -->
                    </div>
                </div>
                
            </div>
                    
        </div>
        <?php
                    }
                    ?>
      


    </div>



<?php

}else{
    $_SESSION['message'] = 'No books found in this category.';
    header('Location: categories.php');
    exit(0);
}
}else{
    $_SESSION['message'] = 'Invalid category selected.';
    header('Location: categories.php');
    exit(0);
}



?>











<?php
include("includes/footer.php");
?>