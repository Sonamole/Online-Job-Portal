<?php
include('../include/config.php');

$id=$_GET['id'];

$sql="UPDATE `tbl_apply` SET `status`='1' WHERE id='$id' ";
$res=mysqli_query($conn,$sql);
if($res)
{ 
    header("location:agree-table.php");
}
else{
    echo "error".$sql1."<br>".mysqli_error($conn);
}
?>

 