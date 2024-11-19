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
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
       
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 ">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                      
                            <h3>Add Products</h3>
                        </div>
                        <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingText" placeholder="Name of Prodcut" name="pname">
                            <label for="pname">Name of Product</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="file" class="form-control bg-dark" id="floatingInput" placeholder="Choose Image" name="pimage">
                      
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="floatingPassword" placeholder="Product Price"  name="pprice">
                            <label for="pprice">Product Price</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" name="pselect" aria-label="Default select example"> 
                            <?php
                            $query="SELECT * FROM `category`";
                            $result=mysqli_query($conn,$query);

                            while($row=mysqli_fetch_assoc($result))
                            {
                            //  print_r($row['cname']);
                            echo "<option value='$row[cid]''>$row[cname]</option>";
                            }

                            ?>
                            </select>
                       
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mt-2 mb-2" name="add">Add Product</button>
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

    <!-- JavaScript Libraries -->
    <?php include 'jslinks.php'?>
</body>

</html>
<?php
if(isset($_POST['add']))
{
$pname=$_POST['pname'];
$pprice=$_POST['pprice'];
$pimage=$_FILES['pimage'];
$imgname=$_FILES['pimage']['name'];
$imgtemp_name=$_FILES['pimage']['tmp_name'];
$pselect=$_POST['pselect'];
$pinsert="INSERT INTO `products`(`pname`, `pimg`, `pprice`, `category`) VALUES ('$pname','$imgname',$pprice,'$pselect')";
$result=mysqli_query($conn,$pinsert);
if($result)
{
    $finalimg= move_uploaded_file($imgtemp_name,'upload/'.$imgname);
    echo "<script>alert('Data inserted')</script>";
}
}

?>