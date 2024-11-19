<?php include 'config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

<?php require 'links.php'?>
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
       
        <?php require 'signup.php'?>
        <!-- Sing in  Form -->
       

    </div>

    <!-- JS -->

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<?php
if(isset($_POST['register']))
{
    $uname=$_POST['uname'];
    $uemail=$_POST['uemail'];
    $upass=$_POST['upass'];
    $urpass=$_POST['urpass'];
    $query="INSERT INTO `register`(`uname`, `uemail`, `upass`) VALUES ('$uname','$uemail','$upass')";
    $row= mysqli_query($conn,$query);
if(empty($uname) || empty($uemail) || empty($upass))
{
    echo "<script>alert('Kindly fill the fileld')
    window.location.href='index.php'
    </script>";
}
else if($row)
{
 
    echo "<script>alert('Data inserted  successfully')
    window.location.href='signin.php'
    </script>";
  
}
else if($pass!==$urpass)
{
 
    echo "<script>alert('Password not matched')
    window.location.href='index.php'
    </script>";
}

}

?>