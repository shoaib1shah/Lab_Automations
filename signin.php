<?php
include("config.php");
session_start();
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
   <?php
   require_once("links.php");
   ?>
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


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                            </a>
                            <h3>Sign In</h3>
                        </div>
<form action="" method="post">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="uemail">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="upass">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <a href="">Forgot Password</a>
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="login">Sign In</button>
                        <p class="text-center mb-0">Don't have an Account? <a href="signup.php" >Sign Up</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->
  <?php
  require_once("jslinks.php");
  ?>
</body>

</html>
<?php
if(isset($_POST["login"]))
{
  
    $uemail = $_POST["uemail"];
    $upass = $_POST["upass"];
    $qcheck="SELECT uname,uemail,upass,urole FROM `register` WHERE `uemail`='$uemail' AND `upass`='$upass'";
    $result = mysqli_query($conn, $qcheck);
    $check=mysqli_num_rows($result);
   
 
    if($check>0)
    {
        $row=mysqli_fetch_assoc($result);
        // print_r($row);

        $_SESSION["u_name"] = $row['uname'];
        $_SESSION["u_email"] = $row['uemail'];
        $_SESSION["u_pass"] = $row['upass'];
        $_SESSION["u_role"] = $row['urole'];
    
     echo "<script>window.location.href='index.php'</script>";
    
    }
    else
    {
        
        echo "<script>window.location.href='signup.php'</script>";
     
    }
}


?>