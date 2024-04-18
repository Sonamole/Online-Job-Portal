<?php
session_start();
include('../include/config.php');
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$category='user';


$sql="INSERT INTO `tbl_reg`( `name`, `email`, `password`) VALUES ('$name','$email','$password')";
$res=mysqli_query($conn,$sql);
if($res){
    header("location:../index.html");
    $sql1="INSERT INTO `tbl_login`( `uname`, `password`,`category`) VALUES ('$name','$password','$category')";
$res1=mysqli_query($conn,$sql1);
}
else{
    echo "error".$sql."<br>".mysqli_error($conn);
}
?> 
