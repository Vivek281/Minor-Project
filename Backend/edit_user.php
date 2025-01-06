<?php
  include('authentication.php');
  include('includes/header.php');
?>

<div class="container-fluid px-4">
    <h2 class="mt-4">Users</h2>
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">Users</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
        <?php include('../Frontend/message.php');?>
            <div class="card">
                <div class="card-header">
                    <h4>Edit User
                        <a href="usermanage.php" class="btn btn-danger mb-3 float-end">Cancel</a>
                    </h4>
                </div>
                <div class="card-body">
                    <?php
                    if(isset($_GET['id']))
                    {
                        $user_id = $_GET['id'];
                        $users = "SELECT * FROM users WHERE id='$user_id' ";
                        $user_run = mysqli_query($con, $users);
                        if(mysqli_num_rows($user_run) > 0)
                        {
                            foreach($user_run as $user) { 

                            ?>

                            <form action="user_code.php" method="POST"  enctype="multipart/form-data">
                                
                                <input type="hidden" name="user_id" value="<?= $user['id'];?>">
                                <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="">Name</label>
                                    <input type="text" name="name" value="<?=$user['name'];?>" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Address</label>
                                    <input type="text" name="address" value="<?=$user['address'];?>" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Email</label>
                                    <input type="email" name="email" value="<?=$user['email'];?>" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Role</label>
                                    <select name="role" require class="form-control">
                                        <option value="">Select Role</option>
                                        <option value="Admin" <?= $user['role']=='Admin' ? 'selected': ''?> >Admin</option>
                                        <option value="User"  <?= $user['role']=='User' ? 'selected': ''?> >User</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3"  style='width:70px; height:70px;'>
                                    <label for="">Status</label>
                                    <input type="checkbox" name="status"  <?= $user['status'] =='1' ? 'checked': ''?> >
                                </div>
                                <div class="col-md-12 mb-3">
                                    <button type="submit" name="edit_btn" class="btn btn-primary">Update Data</button>
                                </div>
                                </div>
                            </form>
                        <?php
                            }
                        }
                        else{
                            ?>
                            <h4>No Record Found</h4>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Include footer and scripts
include('includes/footer.php');
include('includes/scripts.php');
?>
