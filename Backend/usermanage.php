
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
                    <h4 class="d-flex justify-content-between align-items-center">User Management
                        <a href="add_user.php" class="btn btn-success">Add New</a>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover text-center">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                     <th scope="col">Email</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Role</th>
                                    <th scope="col" colspan='2'>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                // Display existing users
                                $sql = "SELECT * FROM users";
                                $result = mysqli_query($con, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row["id"] ?></td>
                                        <td><?php echo $row["name"] ?></td>
                                        <td><?php echo $row["email"] ?></td>
                                        <td><?php echo $row["address"] ?></td>
                                        <td><?php echo $row["role"] ?></td>
                                        <td><a href="edit_user.php?id=<?= $row["id"] ;?>" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a></td>
                                        <td>
                                        <form action="user_code.php" method="POST" onsubmit="return confirmDelete();">
                                            <button type="submit" value="<?= $row["id"];?>" name="delete_user" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
                                        </form>    
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div> <!-- cut-->
            </div>
        </div>
    </div>
</div>
    <?php
    include('includes/footer.php');
    ?>










