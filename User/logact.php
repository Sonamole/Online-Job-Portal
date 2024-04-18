<?php
session_start();
include('../include/config.php');
$email=$_POST['Email'];
$password=$_POST['Password'];
$sql="SELECT * FROM `tbl_reg` WHERE `email`='$email' AND `password`='$password'";
$res=mysqli_query($conn,$sql);
$count=mysqli_num_rows($res);
$select=mysqli_fetch_assoc($res);
if($count>0)
{
    $_SESSION['user_id']= $select['id'];
    header("location:home.html");
}
else{
    echo'invalid username or password';
}
?>