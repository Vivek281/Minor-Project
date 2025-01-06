<?php
   include('authentication.php');
include('../Frontend/message.php');

// Add Code

if (isset($_POST['add_btn'])) {
    $name = ($_POST['name']);
    $address = ($_POST['address']);
    $email = ($_POST['email']);
    $password = ($_POST['password']);
    $cnfrmpassword = ($_POST['cnfrmpassword']);
    $status = $_POST['status'] ==true ? '1':'0';

    if ($password == $cnfrmpassword) {
        // Check Email
        $checkemail = "SELECT email FROM users WHERE email='$email'";
        $checkemail_run = mysqli_query($con, $checkemail);

        if (mysqli_num_rows($checkemail_run) > 0) 
        {
            // Email already exists
            $_SESSION['message'] = "Email already exists";
            header("Location: add_user.php");
            exit(0);
        } 
        else 
        {
            $user_query = "INSERT INTO users (name, address, email, password,role,status) VALUES ('$name', '$address', '$email', '$password','User','$status')";
            $user_query_run = mysqli_query($con, $user_query);

            if ($user_query_run) {
                $_SESSION['message'] = "Data Inserted Successfully";
                header("Location: usermanage.php");
                exit(0);
            } else {
                $_SESSION['message'] = "Something Went Wrong";
                header("Location: add_user.php");
                exit(0);
            }
        }
    } else {
        $_SESSION['message'] = "Password and Confirm Password do not match";
        header("Location: add_user.php");
        exit(0);
    }
}

// Edit Code

if(isset($_POST['edit_btn'])) {
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $role = $_POST['role'];



    $status = isset($_POST['status']) && $_POST['status'] == true ? '1' : '0';

    $query = "UPDATE users SET name='$name', address='$address', email='$email', role='$role', status='$status' WHERE id='$user_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = 'Updated Successfully';
        header('Location: usermanage.php');
        exit(0);
    } else {
        $_SESSION['message'] = 'Something Went Wrong';
        header('Location: edit_user.php');
        exit(0);
    }
}



// Delete Code
if(isset($_POST['delete_user']))
{
    $user_id = $_POST['delete_user'];
    $query = "DELETE FROM users WHERE id = '$user_id'";
    $query_run = mysqli_query($con, $query);
    
    if($query_run)
    {
        $_SESSION['message'] = 'Deleted Successfully';
        header('Location: usermanage.php');
        exit(0);
    }
    else{
        $_SESSION['message'] = 'Deleted Successfully';
        header('Location: usermanage.php');
        exit(0);
    }
}

?>

