<?php
include 'config.php';
if(isset($_GET['deleteuid']))
{    
    $uid=$_GET['deleteuid'];
    $deleteq="DELETE FROM `register` WHERE `uid`= $uid";
    $result=mysqli_query($conn,$deleteq);
    if($result)
    {
            echo "<script>alert('Do your really want to delete the data');
            window.location.href='users.php';
            </script>";
    }
  
}
?>