<?php
    session_start();
    include('authentication.php');
    include('includes/header.php');
    ?>
<div class="container-fluid px-4">
    <h2 class="mt-4">Users</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">Users</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
        <?php include('../Frontend/message.php');?>
            <div class="card">
                <div class="card-header">
                    <h4>Add New User
                        <a href="usermanage.php" class="btn btn-danger mb-3 float-end">Cancel</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="user_code.php" method="POST">
                        <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Addres</label>
                            <input type="text" name="address" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Confirm Password</label>
                            <input type="password" name="cnfrmpassword" class="form-control" >
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Status</label>
                            <input type="checkbox" name="status"  width="70px" height="70px">
                        </div>
                        <div class="col-md-12 mb-3">
                            <button type="submit" name="add_btn" class="btn btn-primary">Add User</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
    include('includes/footer.php');
    ?>