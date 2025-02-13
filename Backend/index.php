    <?php
    session_start();
    include('authentication.php');
    include('includes/header.php');
    ?>

    <?php include('../Frontend/message.php');?>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total Users
                                        <?php
                                        $dash_user = "SELECT * from users";
                                        $dash_user_run = mysqli_query($con, $dash_user);
                                        if($user_total = mysqli_num_rows($dash_user_run)){
                                            echo'<h4 class="mb-0">'.$user_total. '</h4>';
                                        }else{
                                            echo'<h4 class="mb-0"> 0 </h4>';
                                        }
                                        ?>

                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Total Books
                                    <?php
                                        $dash_book = "SELECT * from books";
                                        $dash_book_run = mysqli_query($con, $dash_book);
                                        if($book_total = mysqli_num_rows($dash_book_run)){
                                            echo'<h4 class="mb-0">'.$book_total. '</h4>';
                                        }else{
                                            echo'<h4 class="mb-0"> 0 </h4>';
                                        }
                                        ?>

                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Success Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div> -->
                        <div class="card mb-4"> 
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Users Info
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Role</th>
                                     </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Role</th>
                                    </tr>
                                    </tfoot>
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
    <?php
    include('includes/footer.php');
    ?>
