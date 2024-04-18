<?php
include('../include/config.php');
$id=$_GET['id'];

$sql="UPDATE `tbl_cmpreg` SET `status`='1'  WHERE `id`='$id'";
$res=mysqli_query($conn,$sql);
if($res)
{   
    $sql2="SELECT * from `tbl_cmpreg` WHERE `id`='$id'";
    $result=mysqli_query($conn,$sql2);
    $select=mysqli_fetch_assoc($result);
  
    $category='company';
    
   
    $sql3 = "INSERT INTO `tbl_login` (`uname`, `password`, `category`,`cmp_id`) VALUES ('" . $select['cmpname'] . "', '" . $select['cmppass'] . "', '" . $category . "','" . $select['id'] . "')";
    $result1=mysqli_query($conn,$sql3);
    header("location:profile.php");
}
else{
    echo "error".$sql1."<br>".mysqli_error($conn);
}
?>



