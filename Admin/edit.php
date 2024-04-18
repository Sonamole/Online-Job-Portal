<?php
include("../include/config.php");
include("../include/session.php");
if(isset($_POST['submit'])) {
    $name=$_POST['name'];
    
    $password=$_POST['password'];
    

     $updtq="UPDATE `tbl_login` set `uname`='$name',`password` ='$password' WHERE  `category`='admin'";
 
        $results=mysqli_query($conn,$updtq);
        if($results)
        {
       
?>
<script>alert("updated successfully");</script>

<?php
          header('location:totalno.php');

          }
    }
