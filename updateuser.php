<?php 
include 'config.php';
// show on text field
if(isset($_GET['updateuid']))
{
$id=$_GET['updateuid'];

$select="SELECT * from `register` where `uid`=$id";
$result=mysqli_query($conn,$select);
$row=mysqli_fetch_assoc($result);
$uname=$row['uname'];
$uemail=$row['uemail'];
}
// update work
if (isset($_POST["update"])) {

    $name=$_POST["uname"];
    $email=$_POST["uemail"];
    $update="UPDATE `register` SET `uid`=$id,`uname`='$name',`uemail`='$email' WHERE `uid`=$id";
    $result=mysqli_query($conn, $update);
 
    if ($result) {
        echo "<script>confirm('Do you want to update data');
        window.location.href='users.php';</script>";
    }
    else {  
        echo "<script>alert('Data error')</script>";
    }
}

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
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
       <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
           <div class="col-12 col-xl-4">
               <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                   <div class="d-flex align-items-center justify-content-between mb-3">
                
                       <h3>Update Users</h3>
                   </div>
                   <form action="" method="post">
                   <div class="form-floating mb-3">
                       <input type="text" class="form-control" id="floatingText" name="uname" value="<?php echo $uname;?>">
                       <label for="name">User name</label>
                   </div>
                <div class="form-floating mb-3">
                       <input type="text" class="form-control" id="floatingText" name="uemail" value="<?php echo $uemail;?>">
                       <label for="email">User Email</label>
                   </div>
                       
                   <button type="submit" class="btn btn-primary py-3 w-100 mt-2 mb-2" name="update">Update</button>
                 
                   </form>
               </div>
           </div>
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
