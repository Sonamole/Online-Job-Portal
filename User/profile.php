
<?php
include('../include/config.php');
include('../include/session.php');

 

?>

<!doctype html>
<html lang="en">
  <head>
    <title>User Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
    <link rel="stylesheet" href="css/custom-bs.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/line-icons/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/quill.snow.css">
    
<style>
  .btn {
  text-decoration: none;
  padding: 0.5rem;
  border: 1px solid #333333;
}

  </style>
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">    
  </head>
  <body id="top">
  
  </div>
    

<div class="site-wrap">
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    

    <!-- NAVBAR -->
    <header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="site-logo col-6"><a href="index.html">JobBoard</a></div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li><a href="home.html" class="nav-link">Home</a></li>
              <li><a href="about.html" class="active">About</a></li>
              <li><a href="profile.php" class="active">Profile</a></li>
              <li class="has-children">
                <a href="job-single.php">Job Lists</a>
                <ul class="dropdown">
                   
                </ul>
              </li>
              <li class="has-children">
                <a href="blog.html">Blog</a>              
              </li>                          
 
            </ul>
          </nav>
          
          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">             
            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>
        </div>
      </div>
    </header>

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/index2cut.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
          <h1 class="text-white font-weight-bold">
          </h1>
            <div class="custom-breadcrumbs">
            </div>
          </div>
        </div>
      </div>
    </section>            
       </div>
     </div>
     <br><br>
<?php
// Fetch user details from tbl_reg
$userDetailsQuery = "SELECT * FROM `tbl_login` WHERE `id` = '$Uid'  ";
 
$userDetailsResult = mysqli_query($conn, $userDetailsQuery);

if ($userDetailsResult && mysqli_num_rows($userDetailsResult) > 0) {
    $userDetails = mysqli_fetch_assoc($userDetailsResult);
 

    // Fetch number of jobs applied by the current user
    $appliedJobsQuery = "SELECT COUNT(*) AS jobCount FROM `tbl_apply` WHERE `userid` = '$Uid'";
    $appliedJobsResult = mysqli_query($conn, $appliedJobsQuery);
    $jobCount = 0;

    if ($appliedJobsResult && mysqli_num_rows($appliedJobsResult) > 0) {
        $jobCountData = mysqli_fetch_assoc($appliedJobsResult);
        $jobCount = $jobCountData['jobCount'];
    }

  echo "<div >";
echo "<h1>User Account Details</h1>";

echo "<p><i class='fas fa-user'></i> <b>Name:</b>" . $userDetails['uname'] . "</p>";

echo "<p><i class='fas fa-envelope'></i> <b>Password:</b>" . $userDetails['password'] . "</p>";
echo "<p><i class='fas fa-envelope'></i> <b>Number of jobs apllied:</b>" . $jobCount . "</p>";
// echo '<td ><a href="register.php?up_id=' . $userDetails['id'] . '"><button>Edit</button></a> </td>';

  }
?>
     <a class="btn" href="jobsapplied.php">
    Applied Jobs
    </a>

</div>


     <?php


$place = "SELECT a.*, p.jobtitle FROM `tbl_apply` a
          INNER JOIN `tbl_post` p ON a.jobid = p.id
          WHERE a.`userid` = '$Uid' AND a.`status` = 1 ORDER BY id DESC LIMIT 5";


$place_run = mysqli_query($conn, $place);
?>

<?php
if (mysqli_num_rows($place_run)) {
    while ($row = mysqli_fetch_assoc($place_run)) {
        ?>
        <div class="card" style="width:50rem; background-color: rgb(236, 231, 225);">
            <div class="card-body">
                <h1 class="card-title">Your Job Application is approved</h1>
                <h5 class="card-title"><b><?php echo $row['name']; ?></b></h5>
                <!-- <p><b>Company:</b> <//?php echo $row['cmpname']; ?></p> -->
                <p><b>Job Title:</b> <?php echo $row['jobtitle']; ?></p>
                <!-- <p><?php echo $row['message']; ?></p> -->
            </div>
        </div><br><br>

        <?php
    }
}
?>
     </section>  
    
    
     <footer class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Search Trending</h3>
            <ul class="list-unstyled">
              <li><a href="job-single.html">Web Design</a></li>             
              <li><a href="job-single.html">Web Developers</a></li>
               
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Company</h3>
            <ul class="list-unstyled">
              <li><a href="about.html">About Us</a></li>             
              <li><a href="blog.html">Blog</a></li>
               
            </ul>
          </div>
           
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Contact Us</h3>
            <div class="footer-social">
              <a href=" https:www.facebook.com/sonamole.eldho"><span class="icon-facebook"></span></a>
              <a href=" https://www.instagram.com/__lil_.cutie.__/"><span class="icon-instagram"></span></a>
              <a href="https://www.linkedin.com/in/sonamole-eldho-26ba08219?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BkEj8LKpFT3GZ0Ulg5nv2bA%3D%3D "><span class="icon-linkedin"></span></a>
            </div>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-12">
            <p class="copyright"><small>
             
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  </a>
           </small></p>
          </div>
        </div>
      </div>
    </footer>

  </div>

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
    <script src="js/quill.min.js"></script>       
    <script src="js/bootstrap-select.min.js"></script>   
    <script src="js/custom.js"></script>  
  </body>
</html>