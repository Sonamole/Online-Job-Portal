<!doctype html>
<html lang="en">
  <head>
    <title>User portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

  <div id="overlayer"></div>
   <div class="loader"> 
     <div class="spinner-border text-primary" role="status"> 
       <span class="sr-only">Loading...</span> 
    </div>
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
              <li><a href="index.html" class="nav-link ">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="profile.php" class="nav-link active">Profile</a></li>
              <li class="has-children">
                <a href="job-single.php" class="active">Job Lists</a>
                <ul class="dropdown">
                  
                  
                </ul>
              </li>
              <li class="has-children">
                <a href="Blog.html">Blog</a>
                <ul class="dropdown">
                  
                  
                  
                
                </ul>
               
               
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
            <h1 class="text-white font-weight-bold">  List of jobs</h1>
            <div class="custom-breadcrumbs">
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
 
                                <?php
                                include('../include/config.php');
                                $place="SELECT * FROM `tbl_post`";
                                $place_run=mysqli_query($conn,$place)
                                ?>


                                          <?php
                                        if(mysqli_num_rows($place_run))
                                        {
                                        
                                        while ($row=mysqli_fetch_assoc($place_run))
                                         {  


                                         

                                          ?>
<section class="site-section" method="post"> 
  <div class="container">
    <div class="row align-items-center mb-5">
      <div class="col-lg-8 mb-4 mb-lg-0">
        <div class="d-flex align-items-center">
          <div  >
          </div>
          <div>
            <h2><?php echo $row['jobtitle'];?></h2>
            <div>
              <!-- <span class="ml-0 mr-2 mb-2"><span class="icon-briefcase mr-2"></span> <//?php echo $row['cmpname'];?> </span> -->
              <span class="m-2"><span class="icon-room mr-2"></span> <?php echo $row['jobreg'];?> </span>
              <span class="m-2"><span class="icon-clock-o mr-2"></span><span class="text-primary"><?php echo $row['jobtype'];?></span></span>
              <span class="m-2"><span class="icon-clock-o mr-2"></span><span class="text-primary"><?php echo $row['date'];?></span></span>
            </div>
          </div>
        </div>
      </div>
       
    </div>
    <div class="row ">
      <div class="col-lg-8 ">
        <div class="mb-5 ">          
          <!-- <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-align-left mr-3"></span>Job Description</h3> -->
          <p> <?php echo $row['jobdes'];?></p>
            </div>
         
        <div class="row mb-5 ">
          <div class="col-6 ">
          
           
          
          </div>
          <div>
          <a href="apply.php?id=<?php echo $row['id']; ?>" style="display: inline-block; padding: 10px 20px; background-color: #4CAF50; color: #fff; text-decoration: none; border-radius: 5px;">Apply Now</a>

</div>

        </div>
    
      <div class="col-lg-4">
           
      </div>
    </div>
  </div>
  <?php 
    }
   }
  else{
   echo'invalid';
  }
  ?>
</section>


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
    <script src="js/bootstrap-select.min.js"></script>   
    <script src="js/custom.js"></script>     
  </body>
</html>
















