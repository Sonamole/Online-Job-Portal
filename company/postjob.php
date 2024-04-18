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
    <section class="section-hero overlay inner-page bg-image" style="background-image: url(' https://images.pexels.com/photos/1714205/pexels-photo-1714205.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <!-- <h1 class="text-white font-weight-bold">Post A Job</h1> -->
            <div class="custom-breadcrumbs">
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <section class="site-section">
      <div class="container">
        <div class="row align-items-center mb-5">
          <div class="col-lg-8 mb-4 mb-lg-0">
            <div class="d-flex align-items-center">
              <div>
                <h2>Post A Job</h2>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
             
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-lg-12">
            <form action="post-job.php"class="p-4 p-md-5 border rounded" method="post">
            <input type="hidden" id="id" name="hid" value="<?php echo isset($_GET['up_id']) ? $_GET['up_id'] : null ?>">
              <div class="form-group">
                <label for="job-title">Job Title</label>
                <input type="text" class="form-control" name="jobtitle" id="job-title" placeholder="Web Designer" value="<?php echo isset($u_jobtitle) ? $u_jobtitle : "" ?>">
              </div>

              <div class="form-group">
                <label for="job-region">Job Region</label>
                <select class="selectpicker border rounded" id="jobreg" name="jobreg" data-style="btn-black" data-width="100%" data-live-search="true" title="Select Job region">
                  
                  <?php               
$api_url = 'https://restcountries.com/v2/all';

// Fetch data from the API
$response = file_get_contents($api_url);
$countries = json_decode($response, true);
 


    // Print the list of country names
    foreach ($countries as $country) {
         $countryName =$country['name'];
        echo "<option value=\"$countryName\">$countryName</option>";
    }

?>
                 </select>
                
              </div>
            

              <div class="form-group">
                <label for="job-type">Job Type</label>
                <select class="selectpicker border rounded" id="job-type" name="jobtype" data-style="btn-black" data-width="100%" data-live-search="true" title="Select Job Type">
                  <option>Part Time</option>
                  <option>Full Time</option>
                </select>
              </div>
              <div class="form-group">
                <label for="company-website-fb">Posted date</label>
                <input type="date" class="form-control" name="date" id="company-website-fb" placeholder="date">
              </div>


              <input type="hidden" class="form-control"  id="company-website-fb" value=<?php  ?>>
            
              <div class="form-group">
                <label for="job-description">Description</label>
                  <div class="editor"  >                   
                  <textarea  id="message" name="jobdes" rows="5" class="form-control" placeholder="description"> <?php echo isset($u_jobdes) ? $u_jobdes : "" ?></textarea>
                </div>
              </div>


                <div class="form-group">
                
                </label>

                <div class="col-md-12">
                <button style="background-color: royalblue; color: white; padding: 10px 20px; border: none; border-radius: 5px;" name="submit">Submit</button>


                </div>
              </div>
            </form>
          </div>         
        </div>
        <div class="row align-items-center mb-5">
          
          <div class="col-lg-4 ml-auto">
            <div class="row">             
            </div>
          </div>
        </div>
      </div>
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
    <script src="js/quill.min.js"></script>   
    <script src="js/bootstrap-select.min.js"></script>   
    <script src="js/custom.js"></script>    
  </body>
</html>