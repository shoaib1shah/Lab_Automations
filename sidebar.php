<?php include 'config.php';
session_start();
?>
<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Lab<br>Automation</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <!-- <h6 class="mb-0"><?php echo $_SESSION['u_name']?></h6>
                        <span><?php echo $_SESSION['u_role']?></span> -->
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
             
               
               
                    <a href="users.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>All users</a>
                    <a href="adduser.php" class="nav-item nav-link">Add user</a>
                    <a href="users.php" class="nav-item nav-link">Update user</a>
                    <a href="users.php" class="nav-item nav-link">Delete user</a>
                    <a href="allproduct.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>All Products</a>
                    <a href="addproduct.php" class="nav-item nav-link">Add Product</a>
                    <a href="productupdate.php" class="nav-item nav-link">Update Product</a>
                    <a href="productdelete.php" class="nav-item nav-link">Delete Product</a>
                    <a href="capacitor.php" class="nav-item nav-link">Capacitor</a>
                    <a href="Resistor.php" class="nav-item nav-link">Resistor</a>
                    <a href="switches.php" class="nav-item nav-link">Switches</a>
                    <a href="fuses.php" class="nav-item nav-link">fuses</a>
                    <a href="protesting.php" class="nav-item nav-link">Product Testing</a>
                    <a href="searchbystatus.php" class="nav-item nav-link">Product Status</a>
                
                </div>
            </nav>
        </div>