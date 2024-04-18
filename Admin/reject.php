<?php
include('../include/config.php');
$id=$_GET['id'];
$sql="DELETE FROM `tbl_cmpreg` WHERE id='$id'";
$res=mysqli_query($conn,$sql);
if($res)
{ 
    $sql1="DELETE FROM `tbl_login` WHERE id='$id'";
    $result=mysqli_query($conn,$sql1);
    header("location:profile.php");
}
else{
    echo "error".$sql1."<br>".mysqli_error($conn);
}
?>