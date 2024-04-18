<?php
include('../include/config.php');
include('../include/session.php');
echo $Uid;
// echo $jobid;
$userid=$Uid;
$name=$_POST['name'];
$email=$_POST['email'];
$date=$_POST['date'];
$message=$_POST['message'];
$jobid=$_POST['jobid'];

$ImagePath="../Admin/images/";
 
if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
    $ImagePath .= basename($_FILES['file']['name']);
    if (move_uploaded_file($_FILES['file']['tmp_name'], $ImagePath)) {
       
        $sql="INSERT INTO `tbl_apply`(`name`,`email`,`date`,`message`,`file`,`userid`,`jobid`) VALUES ('$name','$email','$date','$message','$ImagePath','$userid','$jobid')";
        $res=mysqli_query($conn,$sql);
        if($res){
            header("location:apply.php");
            
        }
        else{
            echo "error".$sql."<br>".mysqli_error($conn);
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
} else {
    echo "File upload error: " . $_FILES['file']['error'];
   }

?>


