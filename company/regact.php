<?php
session_start();
include('../include/config.php');
$cmpname=$_POST['cmpname'];
$cmpemail=$_POST['cmpemail'];
$cmpheadq=$_POST['cmpheadq'];
$cmppass=$_POST['cmppass'];
$category='company';
                                                                                       
$sql="INSERT INTO `tbl_cmpreg`( `cmpname`, `cmpemail`,`cmpheadq`, `cmppass`) VALUES ('$cmpname','$cmpemail','$cmpheadq','$cmppass')";
$res=mysqli_query($conn,$sql);



if($res){
    header("location:../index.html");
    
}
else{
    echo "error".$sql."<br>".mysqli_error($conn);
}
?> 
