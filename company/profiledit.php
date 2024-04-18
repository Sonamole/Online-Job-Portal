<?php
include('../include/config.php');
include('../include/session.php');

if(isset($_POST['submit'])) {
    $upid=$_POST['hid'];
    $cmpname =$_POST['name'];    
    $cmpemail=$_POST['email'];
    $cmpheaq =$_POST['headq'];    
    $cmppass=$_POST['pass'];

    // if($_POST['hid']!=null) {
    //     $hid=$_POST['hid'];
   
 
     $updtq="UPDATE `tbl_cmpreg` set `cmpname`='$cmpname',`cmpemail` ='$cmpemail',`cmpheadq`='$cmpheaq',`cmppass`='$cmppass' WHERE `id`=$upid";
 
        $results=mysqli_query($conn,$updtq);
        if($results)
        {
            $update="UPDATE `tbl_login` set `uname`='$cmpname',`password`='$cmppass' WHERE  `id`='$Uid' ";
 
            $res=mysqli_query($conn,$update);
            header('location:profile.php');
        }
    }
// }
        ?>