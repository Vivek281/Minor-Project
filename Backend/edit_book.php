<?php
  include('authentication.php');
  include('includes/header.php');
?>

<div class="container-fluid px-4">
    <h2 class="mt-4">Book</h2>
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">Book</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
        <?php include('../Frontend/message.php');?>
            <div class="card">
                <div class="card-header">
                    <h4>Edit Book
                        <a href="bookmanage.php" class="btn btn-danger mb-3 float-end">Cancel</a>
                    </h4>
                </div>
                <div class="card-body">
                    <?php
                    if(isset($_GET['id']))
                    {
                        $book_id = $_GET['id'];
                        $books = "SELECT * FROM books WHERE id='$book_id' ";
                        $book_run = mysqli_query($con, $books);
                        if(mysqli_num_rows($book_run) > 0)
                        {
                            foreach($book_run as $books) { 

                            ?>

                            <form action="book_code.php" method="POST"  enctype="multipart/form-data">
                                
                                <input type="hidden" name="book_id" value="<?= $books['id'];?>">
                                <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="">Name</label>
                                    <input type="text" name="name" value="<?=$books['name'];?>" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Author</label>
                                    <input type="text" name="author" value="<?=$books['author'];?>" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Description</label>
                                    <input type="text" name="description" value="<?=$books['description'];?>" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Category</label>
                                    <select name="category" require class="form-control">
                                        <option value="">Select category</option>
                                        <option value="Fiction" <?= $books['category']=='Fiction' ? 'selected': ''?> >Fiction</option>
                                        <option value="Non-fiction"  <?= $books['category']=='Non-fiction' ? 'selected': ''?> >Non-fiction</option>
                                        <option value="Science Fiction"  <?= $books['category']=='Science Fiction' ? 'selected': ''?> >Science Fiction</option>
                                        <option value="Mystery"  <?= $books['category']=='Mystery' ? 'selected': ''?> >Mystery</option>
                                        <option value="Biography"  <?= $books['category']=='Biography' ? 'selected': ''?> >Biography</option>
                                        <option value="History"  <?= $books['category']=='History' ? 'selected': ''?> >History</option>
                                        <option value="Self-help"  <?= $books['category']=='Self-help' ? 'selected': ''?> >Self-help</option>
                                        <option value="Kids"  <?= $books['category']=='Kids' ? 'selected': ''?> >Kids</option>
                                        <option value="Wealth Generation"  <?= $books['category']=='Wealth Generation' ? 'selected': ''?> >Wealth Generation</option>
                                        <option value="Mystery & Thriller"  <?= $books['category']=='Mystery & Thriller' ? 'selected': ''?> >Mystery & Thriller</option>
                                        <option value="Philosophy"  <?= $books['category']=='Philosophy' ? 'selected': ''?> >Philosophy</option>
                                        <option value="Novel"  <?= $books['category']=='Novel' ? 'selected': ''?> >Novel</option>
                                    </select>
                                </div>
                                <!-- <div class="col-md-6 mb-3"  style='width:70px; height:70px;'>
                                    <label for="">Status</label>
                                    <input type="checkbox" name="status"  <?= $books['status'] =='1' ? 'checked': ''?> >
                                </div> -->
                                <div class="col-md-6 mb-3">
                                    <label for="">File Location</label>
                                    <input type="text" name="file-location" value="<?=$books['file-location'];?>" class="form-control">
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
