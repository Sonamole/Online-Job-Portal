<?php
include('../include/config.php');
include('../include/session.php');

if(isset($_POST['submit'])) {

    $jobtitle=$_POST['jobtitle'];
    $jobreg=$_POST['jobreg'];
    $jobtype=$_POST['jobtype'];
    $date=$_POST['date'];
    $jobdes=$_POST['jobdes'];
    
    
    echo $_POST['hid'];

    if($_POST['hid']!=null) {
        $hid=$_POST['hid'];

     $updtq="update `tbl_post` set jobtitle='$jobtitle',jobdes ='$jobdes' WHERE  `id`='$hid'";
 
        $results=mysqli_query($conn,$updtq);
        if($results)
        {
       
?>
<script>alert("updated successfully");</script>

<?php
        header('location:postjob.php');

        }
        
    }
    else{


 

$sql="INSERT INTO `tbl_post`(`jobtitle`,`jobreg`,`jobtype`,`date`,`jobdes`,`cmp_id`) VALUES ('$jobtitle','$jobreg','$jobtype','$date','$jobdes','$Uid')";
echo $sql;
$res=mysqli_query($conn,$sql);
if($res){
    header("location:postjob.php");
    
}
else{
    echo "error".$sql."<br>".mysqli_error($conn);
}
    }
}
?>