<?php
include('../include/config.php');
include('../include/session.php');
if(isset($_GET['up_id'])){
    $u_name = "";
    $u_password = "";

    $id = $_GET['up_id']; 
    $sql = "SELECT * FROM `tbl_login` WHERE `category`='admin' AND `id`='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if($row){
        $u_name = $row['uname'];
        $u_password = $row['password'];
        $data = [$u_name, $u_password];
        echo json_encode($data);
    } else {
        // echo json_encode([]); // Return an empty array if no data is found
    }
}


?>