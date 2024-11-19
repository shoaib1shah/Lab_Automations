<?php
include 'config.php';
if(isset($_GET['prodelete']))
{    
    $pid=$_GET['prodelete'];
    $deleteq="DELETE FROM `products` WHERE `pid`= $pid";
    $result=mysqli_query($conn,$deleteq);
    if($result)
    {
            echo "<script>alert('Do your really want to delete the data');
            window.location.href='users.php';
            </script>";
    }
  
}
?>