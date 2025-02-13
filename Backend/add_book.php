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
                    <h4>Add New Book
                        <a href="bookmanage.php" class="btn btn-danger mb-3 float-end">Cancel</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="book_code.php" method="POST" enctype="multipart/form-data" >
                        <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Author</label>
                            <input type="text" name="author" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Description</label>
                            <input type="text" name="description" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                                    <label for="">Category</label>
                                    <select name="category" require class="form-control">
                                        <option value="">Select category</option>
                                        <option value="Fiction">Fiction</option>
                                        <option value="Non-fiction">Non-fiction</option>
                                        <option value="Science Fiction">Science Fiction</option>
                                        <option value="Mystery">Mystery</option>
                                        <option value="Biography">Biography</option>
                                        <option value="History">History</option>
                                        <option value="Self-help" >Self-help</option>
                                        <option value="Kids" >Kids</option>
                                        <option value="Wealth Generation" >Wealth Generation</option>
                                        <option value="Mystery & Thriller" >Mystery & Thriller</option>
                                        <option value="Philosophy">Philosophy</option>
                                        <option value="Novel" >Novel</option>
                                    </select>
                                </div>
                        <div class="col-md-6 mb-3">
                            <label for="">File Location</label>
                            <input type="text" name="file-location" class="form-control" >
                        </div>
                        <!-- <div class="col-md-6 mb-3">
                            <label for="">Status</label>
                            <input type="checkbox" name="status"  width="70px" height="70px">
                        </div> -->
                        <div class="col-md-6 mb-3">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control">
                        </div>
                        <div class="col-md-12 mb-3">
                            <button type="submit" name="add_btn" class="btn btn-primary">Add Book</button>
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