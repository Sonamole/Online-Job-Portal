 
 
 
<!doctype html>

<html lang="en">
  <head>
    <title>Sign IN </title>
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

         
    <!-- HOME -->
              
        <img src="images/jobboard.png" class="job">  
        <h1 style="color: blue; font-size: 50px; text-align: center;"><b>Company</h2></b>

        <section> 
          <div class="container"> 
           <div class="cola"> 
            <form action="regact.php"method="POST">
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
               
                  <label class="text-black" for="fname">Company Name</label>
                  <input type="text" id="cmpname" name="cmpname" class="form-control" placeholder=" Enter company name " 
                  value="<?php echo isset($u_name) ? $u_name : "" ?>">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Email</label>
                  <input type="text" id="cmpemail" name="cmpemail" class="form-control" placeholder="Enter company mail"
                  value="<?php echo isset($u_email) ? $u_email: "" ?>">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Headquarters</label>
                  <input type="text" id="cmpheadq" name="cmpheadq" class="form-control" placeholder="Enter headquaters">
                </div>
              </div>
              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Password</label>
                  <input type="password" id="cmppass" name="cmppass" class="form-control" placeholder="Password">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Sign Up" class="btn px-4 btn-primary text-white">
                </div>
              </div>
            </form>
            </div>            
          </div>
        </div> 
       </div>
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