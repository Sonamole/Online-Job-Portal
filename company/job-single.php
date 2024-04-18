<?php
include('header.php');
if(isset($_GET['up_id'])){
  $u_jobtitle="";
  
  $u_jobdes="";
$id=$_GET['up_id'];   
$sql="SELECT * from `tbl_post` WHERE `id`='$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if($row){

  $u_jobtitle=$row['jobtitle'];

  $u_jobdes=$row['jobdes'];
}                                            
}
?>
 

<!-- HOME -->
<section class="section-hero overlay inner-page bg-image" style="background-image: url('https://images.pexels.com/photos/1714205/pexels-photo-1714205.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');" id="home-section">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="custom-breadcrumbs">
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include('../include/config.php');
$place = "SELECT * FROM `tbl_post` Where cmp_id='$Uid' ";
$place_run = mysqli_query($conn, $place);
?>

<div class="container mt-5">
  <?php
  // echo $Uid;
  if (mysqli_num_rows($place_run)) {
    while ($row = mysqli_fetch_assoc($place_run)) {
      echo '<div class="job-post-box">';
      // echo '<div class="company-name">' . $row['cmpname'] . '</div>';
      echo '<div class="job-details">';
      echo '<strong>Job Title:</strong> ' . $row['jobtitle'] . '<br>';
      echo '<strong>Job Region:</strong> ' . $row['jobreg'] . '<br>';
      echo '<strong>Job Type:</strong> ' . $row['jobtype'] . '<br>';
      echo '<strong>Date:</strong> ' . $row['date'] . '<br>';
      echo '<strong>Job Description:</strong> ' . $row['jobdes'].'<br>';
      echo '<td ><a href="postjob.php?up_id=' . $row['id'] . '"><button name="Submit">Edit</button></a> </td>';
      echo '</div>';
      echo '</div>';
    }
  }
  ?>
</div>

<style>
  .job-post-box {
    background-color: #f8f9fa;
    border: 2px solid #17a2b8;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
  }

  .job-post-box:hover {
    transform: scale(1.05);
  }

  .company-name {
    font-size: 24px;
    font-weight: bold;
    color: #007bff;
    margin-bottom: 10px;
  }

  .job-details {
    color: #495057;
  }
</style>

<!-- SCRIPTS -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/stickyfill.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/custom.js"></script>
</body>

</html>
