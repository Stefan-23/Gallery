<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin Page
                            <small>Subheading</small>
                            <?php 
                            echo "<br>";
                               
                            
                               $result_set = User::find_users();

                               while($row = mysqli_fetch_array($result_set)){
                                   
                                    echo "Username: " . $row['username'] . "<br>";
                                    echo  "Password: ". $row['password'] . "<br>";
                               
                                }

                                $resultId = User::findUsersById(1);

                                echo $resultId['username'];

                            
                            ?>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->