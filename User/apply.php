<?php
 $jobid=$_GET['id'] ;
?>

<!doctype html>
<html lang="en">
  <head>
    <title>  User Portal</title>
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
              <li><a href="home.html" class="nav-link">Home</a></li>
              <li><a href="about.html" class="active">About</a></li>
              <li><a href="profile.php" class="nav-link">Profile</a></li>
              <li class="has-children">
                <a href="job-single.php">Job Lists</a>
                <ul class="dropdown">
                
                </ul>
              </li>
              <li class="has-children">
                <a href="blog.html">Blog</a>
                
              </li>              
              <a href="home.html" class="Goback-button">Go back</a>
              
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
            <h1 class="text-white font-weight-bold">Apply Page</h1>
            <div class="custom-breadcrumbs">
            </div>
          </div>
        </div>
      </div>
    </section>    
    
   
    <section class="site-section pt-0">
  
 
     
    
    <form action="applyact.php" method="POST" enctype="multipart/form-data" style="max-width: 600px; margin: 0 auto; background-color: #f5f5f5; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <div style="margin-bottom: 15px;">
        <div style="display: inline-block; width: 150px; font-weight: bold; color: #333;">Full name</div>
        <div style="display: inline-block;">
            <input type="text" name="name" style="width: 300px; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
        </div>
    </div>
    <div style="margin-bottom: 15px;">
        <div style="display: inline-block; width: 150px; font-weight: bold; color: #333;">Email </div>
        <div style="display: inline-block;">
            <div class="input-group">
                <input type="email" name="email" placeholder=" " style="width: 300px; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
        </div>
    </div>
    <div style="margin-bottom: 15px;">
        <div style="display: inline-block; width: 150px; font-weight: bold; color: #333;">Applying Date </div>
        <div style="display: inline-block;">
            <div class="input-group">
                <input type="date" name="date" placeholder=" " style="width: 300px; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
        </div>
    </div>
    <div style="margin-bottom: 15px;">
        <div style="display: inline-block; width: 150px; font-weight: bold; color: #333;">Message</div>
        <div style="display: inline-block;">
            <div class="input-group">
                <textarea class="textarea--style-6" name="message" placeholder=" " style="width: 300px; padding: 8px; border: 1px solid #ccc; border-radius: 5px;"></textarea>
            </div>
        </div>
        <input type="hidden" name="jobid" value="<?php echo $jobid; ?>">
    </div>
    <div style="margin-bottom: 15px;">
        <div style="display: inline-block; width: 150px; font-weight: bold; color: #333;">Upload CV</div>
        <div style="display: inline-block;">
            <div class="input-group js-input-file">
                <input class="input-file" type="file" name="file" id="file" style="display: none;">
                <label class="label--file" for="file" style="padding: 8px 12px; background-color: #3498db; color: #fff; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;">Choose file</label>
            </div>
        </div>
    </div>
    <div style="text-align: center;">
        <button class="btn btn--radius-2 btn--blue-2" name="button" style="padding: 10px 20px; font-size: 16px; background-color: #3498db; color: #fff; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;">Send Application</button>
    </div>
</form>

<style>
    /* Hover effect for the button */
    .btn--blue-2:hover {
        background-color: #2980b9;
    }
</style>


               
                    </section>
 
 


    <!-- <footer class="site-footer">
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
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      
          <!-- </div>
        </div>
      </div>
    </footer> --> -->

    
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