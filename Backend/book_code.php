<?php
   include('authentication.php');
include('../Frontend/message.php');

// Add Code

if (isset($_POST['add_btn'])) {
    $name = ($_POST['name']);
    $author = ($_POST['author']);
    $description = ($_POST['description']);
    $category = ($_POST['category']);
    $file_location = ($_POST['file-location']);
  

    // Image upload
    $target_dir = "../Frontend/img/";
    $image= $_FILES['image']['name'];
    $target_file = $target_dir . basename($image);

    
    $checkbook = "SELECT name FROM books WHERE name='$name'";
    $checkbook_run = mysqli_query($con, $checkbook);

        if (mysqli_num_rows($checkbook_run) > 0) 
        {
            // description already exists
            $_SESSION['message'] = "Book already exists";
            header("Location: add_book.php");
            exit(0);
        } 
        else 
        {
            $book_query = "INSERT INTO books (name, author, description, category,`file-location`, image) VALUES ('$name', '$author', '$description', '$category','$file_location','$image')";
            $book_query_run = mysqli_query($con, $book_query);

            if ($book_query_run) {
                move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
                $_SESSION['message'] = "Data Inserted Successfully";
                header("Location: bookmanage.php");
                exit(0);
            } else {
                $_SESSION['message'] = "Something Went Wrong";
                header("Location: add_book.php");
                exit(0);
            }
        }
    }


// Edit Code

if(isset($_POST['edit_btn'])) {
    $book_id = $_POST['book_id'];
    $name = $_POST['name'];
    $author = $_POST['author'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $file_location = $_POST['file-location'];
    //Image update
    $target_dir = "../Frontend/img/";
    $image= $_FILES['image']['name'];
    $target_file = $target_dir . basename($image);




    $status = isset($_POST['status']) && $_POST['status'] == true ? '1' : '0';

    $query = "UPDATE books SET name='$name', author='$author', description='$description', category='$category', `file-location`='$file_location', image='$image' WHERE id='$book_id'";
    $query_run = mysqli_query($con, $query);






    if($query_run) {
        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

        $_SESSION['message'] = 'Updated Successfully';
        header('Location: bookmanage.php');
        exit(0);
    } else {
        $_SESSION['message'] = 'Something Went Wrong';
        header('Location: edit_book.php');
        exit(0);
    }
}



// Delete Code
if(isset($_POST['delete_book']))
{
    $book_id = $_POST['delete_book'];
    $query = "DELETE FROM books WHERE id = '$book_id'";
    $query_run = mysqli_query($con, $query);
    
    if($query_run)
    {
        $_SESSION['message'] = 'Deleted Successfully';
        header('Location: bookmanage.php');
        exit(0);
    }
    else{
        $_SESSION['message'] = 'Something went wrong! Error in deletion.';
        header('Location: bookmanage.php');
        exit(0);
    }
}

?>

