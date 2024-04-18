<!doctype html>
<html lang="en">
  <head>
    <title>Company Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />
    <link rel="shortcut icon" href="https://media-exp2.licdn.com/dms/image/C5603AQHRYmump59UEg/profile-displayphoto-shrink_400_400/0/1653980640771?e=1660780800&v=beta&t=ffYb5z-pccqg2OLScYwL_PQGkUWf6eRnFOk17-z_Y7M">
    <link rel="stylesheet" href="css/custom-bs.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/line-icons/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">    
  </head>
  <body id="top">
 
    
<div class="site-wrap">
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    

    <!-- NAVBAR -->
    <header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-center">
      <?php 
      include('../include/session.php');
      include('../include/config.php');
      echo "<h1 style='font-family: Arial, sans-serif; color:grey;'>$Uname</h1>";
  

       ?>
          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">              
                <!-- <li><a href="home.php" class="nav-link active">Home</a></li> -->
                <li><a href="profile.php" class="nav-link active">Profile</a></li>
              <!-- <li><a href="about.php" class="nav-link active">About</a></li> -->
     
              <li class="has-children">
                  <li><a href="job-single.php">Jobs Posted</a></li>
</li>
              <li class="has-children">
                <a href="agree-table.php"class="nav-link active">Job Applications</a>
               
              </li>

              <li class="has-children">
                <a href="postjob.php"class="nav-link active">Post a Job</a>
               
              </li>
       
            
           
          </nav>
                    <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
                
            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>
        </div>
      </div>
    </header>