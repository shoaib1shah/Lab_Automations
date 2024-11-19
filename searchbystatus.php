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
            <div class="container-fluid pt-4 px-4" width="100%">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Basic Table</h6>
                            <table class="table"  >
                         
                                    <tr class="">
                                        <th scope="col">Product id</th>    
                                        <th  scope="col ">Status</th>
                                        <th scope="col ">Remarks</th>  
                                        <th  scope="col">CprI Status</th>
                                    </tr>
                                <tbody>
                                    <?php
$select="SELECT `tid`,`status`,`pname`,`remarks`,`Cpri_status` FROM `testing` where `status`='Rejected' AND `Cpri_status`='Rejected'";
$result=mysqli_query($conn,$select);
;
while ($row=mysqli_fetch_assoc($result)) {
    echo 
    " <tr>
     <td>$row[tid]</td>
  <td>$row[status]</td>
   <td>$row[remarks]</td>
    <td>$row[Cpri_status]</td>
 </tr>" ;
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

    <!-- JavaScript Libraries -->
    <?php include 'jslinks.php'?>
</body>

</html>