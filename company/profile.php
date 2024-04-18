<?php
include('header.php');

if (isset($_GET['up_id'])) {
    $u_cmpname = "";
    $u_cmpemail = "";
    $u_cmpheadq = "";
    $u_cmppass = "";

    $id = $_GET['up_id'];
    $sql = "SELECT * FROM `tbl_cmpreg` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if ($row) {
        $u_cmpname = $row['cmpname'];
        $u_cmpemail = $row['cmpemail'];
        $u_cmpheadq = $row['cmpheadq'];
        $u_cmppass = $row['cmppass'];
    }
}
?>



<section class="section-hero overlay inner-page bg-image"
    style="background-image: url('https://images.pexels.com/photos/1714205/pexels-photo-1714205.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');"
    id="home-section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="custom-breadcrumbs">
                    <!-- Add your breadcrumbs here if needed -->
                </div>
            </div>
        </div>
    </div>
</section>
<a href="../include/logout.php" class="logout-button">Log Out</a>
<?php
$place = "SELECT  tbl_cmpreg.id  ,tbl_cmpreg.cmpname , tbl_cmpreg.cmpemail, tbl_cmpreg.cmpheadq, tbl_cmpreg.cmppass FROM tbl_login INNER JOIN  tbl_cmpreg ON tbl_login.cmp_id= tbl_cmpreg.id WHERE tbl_login.id=$Uid ";
//echo $place;
$place_run = mysqli_query($conn, $place);

if (mysqli_num_rows($place_run)) {
    while ($row = mysqli_fetch_assoc($place_run)) {
        // echo $row['id'];
        echo '<div class="company-info-box">';
        echo "<h3 class='company-title'>Company Information</h3>";
        echo "<strong>Company name:</strong> " . $row['cmpname'] . "<br>";
        echo "<strong>Email:</strong> " . $row['cmpemail'] . " <br>";
        echo "<strong>Headquarters:</strong> " . $row['cmpheadq'] . "<br>";
        echo "<strong>Password:</strong> " . $row['cmppass'] . "<br>";
        echo '<td ><a href="profile.php?up_id=' . $row['id'] . '"><button>Edit</button></a> </td>';
        echo '</div>';
    }
}
?>

<form action="profiledit.php" method="POST" class="company-form">
    <label for="name">Company Name:</label>
    <input type="hidden" id="id" name="hid" value="<?php echo isset($_GET['up_id']) ? $_GET['up_id'] : null ?>">
    <input type="text" id="name" name="name" placeholder="Enter your name"
        value="<?php echo isset($u_cmpname) ? $u_cmpname : "" ?>">

    <label for="email">Cmp Email:</label>
    <input type="text" id="email" name="email" placeholder="Enter your email"
        value="<?php echo isset($u_cmpemail) ? $u_cmpemail : "" ?>">

    <label for="headquaters">Headquarter:</label>
    <input type="text" id="headquaters" name="headq" placeholder="Enter your headquaters"
        value="<?php echo isset($u_cmpheadq) ? $u_cmpheadq : "" ?>">

    <label for="password">Cmp Password:</label>
    <input type="password" id="password" name="pass" placeholder="Enter your password"
        value="<?php echo isset($u_cmppass) ? $u_cmppass : "" ?>">

    <button type="submit" name="submit">Update</button>
</form>

<style>
    .company-info-box {
        border: 1px solid #ccc;
        padding: 20px;
        margin: 20px;
        background-color: #f2f2f2;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .company-title {
        color: black;
    }

    .company-form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
        margin-top: 20px;
    }

    .company-form label {
        display: block;
        margin-bottom: 8px;
    }

    .company-form input {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .company-form button {
        background-color: #4caf50;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .company-form button:hover {
        background-color: #45a049;
    }
    .logout-button {
            /* display: inline-block; */
            padding: 10px ;
            background-color:grey;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            /* padding-left:60px; */
            width:70px;
        }
</style>

<!-- Your existing script tags -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<!-- ... (other scripts) ... -->
<script src="js/custom.js"></script>
</body>

</html>
