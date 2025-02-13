
<?php
    session_start();
    include('authentication.php');
    include('includes/header.php');
    ?>

   
<div class="container-fluid px-4">
    <h2 class="mt-4">Books</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">Books</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
        <?php include('../Frontend/message.php');?>
            <div class="card">
                <div class="card-header">
                    <h4 class="d-flex justify-content-between align-items-center">Book Management
                        <a href="add_book.php" class="btn btn-success">Add New</a>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover text-center">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                     <th scope="col">Author</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">File Location</th>
                                    <th scope="col">Image</th>
                                    <th scope="col" colspan='2'>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                // Display existing users
                                $sql = "SELECT * FROM books";
                                $result = mysqli_query($con, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row["id"] ?></td>
                                        <td><?php echo $row["name"] ?></td>
                                        <td><?php echo $row["author"] ?></td>
                                        <td><?php echo $row["description"] ?></td>
                                        <td><?php echo $row["category"] ?></td>
                                        <td><?php echo $row["file-location"] ?></td>
                                        <td><?php echo $row["image"] ?></td>
                                        <td><a href="edit_book.php?id=<?= $row["id"] ;?>" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a></td>
                                        <td>
                                        <form action="book_code.php" method="POST" onsubmit="return confirmDelete();">
                                            <button type="submit" value="<?= $row["id"];?>" name="delete_book" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
                                        </form>    
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php
    include('includes/footer.php');
    ?>










