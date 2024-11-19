<?php 
include 'config.php';
// show on text field
if(isset($_GET['cpri']))
{
$id=$_GET['cpri'];

$select="SELECT `pid`,`pname`,`pprice`,`pimg`,`cid`,`cname` from products as p INNER join category as c on p.category=c.cid where `pid`='$id'";
$result=mysqli_query($conn,$select);
$row=mysqli_fetch_assoc($result);
$cid=$row['cid'];
$pname=$row['pname'];
$pcat=$row['cname'];
}
// update work
if (isset($_POST["update"])) {

    $cpri=$_POST["cpri"]; 
    $pid=$row['pid'];                  

    $update="UPDATE `testing` SET `Cpri_status`='$cpri' WHERE `pid`='$pid'" ;
    $result=mysqli_query($conn, $update);
 
    if ($result) {
        echo "<script>alert('CPRI testing updated successfully');
        window.location.href='protesting.php';</script>";
    }
    else {  
        echo "<script>alert('Testing error');
        window.location.href='protesting.php';</script>";
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
            <div class="container-fluid">
                <div class="row">
       <div class="row align-items-center justify-content-center" style="min-height: 100vh;">
           <div class="col-12">
               <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                   <div class="d-flex align-items-center justify-content-between mb-3">
                
                       <h3>CPRI Testing</h3>
                   </div>
                   <form action="" method="post">
                   <div class="form-floating mb-3">
                       <input type="text" class="form-control" id="floatingText" name="pname" value="<?php echo $pname;?>">
                       <label for="Product Name">Product name</label>
                   </div>
                   <input type="hidden" name="pid" placeholder="product id" value="<?php echo $id;?>">
                   <input type="hidden" name="cid" placeholder="cat id" value="<?php echo $cid;?>">
                <div class="form-floating mb-3">
                       <input type="text" class="form-control" id="floatingText" name="pcat" value="<?php echo $pcat;?>">
                       <label for="Product category">Product Category</label>
                   </div>
                   <div class="form-floating mb-3">
                            <select class="form-select" name="cpri" aria-label="Default select example"> 
                                <option value="" disabled> Select</option>
                          <option value="Approved">Approved</option>
                          <option value="Rejected">Rejected</option>
                            </select>
                        </div>
                   <button type="submit" class="btn btn-primary py-3 w-25 mt-2 mb-2" name="update">Update</button>
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
