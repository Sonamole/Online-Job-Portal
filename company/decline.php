<?php
include('../include/config.php');
include('../include/session.php');
$id=$_GET['id'];
$sql="DELETE FROM `tbl_apply` WHERE id='$id'";
$res=mysqli_query($conn,$sql);
if($res)
{ 
    header("location:agree-table.php");
}
else{
    echo "error".$sql1."<br>".mysqli_error($conn);
}
?>