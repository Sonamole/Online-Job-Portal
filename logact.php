<?php
session_start();
include('include/config.php');
$name=$_POST['name'];
$password=$_POST['password'];

$sql="SELECT * FROM `tbl_login` WHERE `uname`='$name' AND `password`='$password'";
$res=mysqli_query($conn,$sql);
$count=mysqli_num_rows($res);
$select=mysqli_fetch_assoc($res);
 

if($count>0)
{
    $_SESSION["user_id"]=$select['id'];
    $_SESSION["user_name"]=$select['uname'];

    if($select['category']=='user'){
        header('Location:User/home.html');
    }
    else if($select['category']=='company'){
        header('Location:company/profile.php');
    }
    else if($select['category']=='admin'){
        header('Location:Admin/totalno.php');
    }
}
else{
    echo "<script>alert('Invalid Username or Password');</script>";
    // header('Location:location:index.html');
    // exit(); 
}
?>



