<?php 
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <?php include 'links.php'?>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <?php include 'sidebar.php'?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
                <?php include 'nav.php'?>
            <!-- Navbar End -->


            <!-- Table Start -->
            <div class="container-fluid pt-4 px-8">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-8">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">All Users <a href="adduser.php" class="btn btn-danger btn-sm mx-5 text">Add User</a></h6>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Use Id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">User Role</th>
                                        <th scope="col">Operation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $qselect="SELECT `uid`, `uname`,`uemail`,`urole` from `register` where `urole`='user'";
                                  $result=mysqli_query($conn,$qselect);
                                  while( $row=mysqli_fetch_assoc($result))
                                  {

                                 
                                 
                                echo "
                                <tr>
                                     <td>$row[uid]</td>
                                     <td>$row[uname]</td>
                                     <td>$row[uemail]</td>  
                                    <td>$row[urole]</td>
                                 <td><a href='updateuser.php? updateuid=$row[uid]' class='btn btn-info btn-sm'>update</a></td>
                                  <td><a href='delete.php? deleteuid=$row[uid]' class='btn btn-danger btn-sm'>Delete</a></td>
                                </tr>
                                ";
                                  
                                  }
                                  ?>            
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
            <!-- Table End -->


            <!-- Footer Start -->
            <?php include 'footer.php'?>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
<!-- modal window -->
 <!-- Button trigger modal -->

    <!-- JavaScript Libraries -->
    <?php include 'jslinks.php'?>
</body>

</html>
<?php

?>