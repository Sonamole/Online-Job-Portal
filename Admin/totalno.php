<?php
include('../include/config.php');
include('../include/session.php');


?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title> Admin Portal</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
   <link href="css/style.min.css" rel="stylesheet">
     <style>
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
</head>

<body>
     
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
         
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="plugins/images/logo-icon.png" alt="homepage" />
                        </b>
                         
                        <span class="logo-text">
                            
                            <h2 style="color: black;padding-top: 15px;"><b>JOBBOARD</b></h2>
                        </span>
                    </a>
                     
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                     
                    
                        
                    </ul>
                </div>
            </nav>
        </header>
         
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                                                    </li>
                        <li class="sidebar-item">
                            
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="totalno.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Dasboard</span>
                            </a>
                        </li>
                         
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="comdisplay.php"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu">Companies Onboard<table></table></span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profile.php"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu">Companies registered<table></table></span>
                            </a>
                        </li>
                         
                        <li class="text-center p-20 upgrade-btn">
                            
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
         
        <div class="page-wrapper">
             
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <a href="../include/logout.php" class="logout-button">Log Out</a>
                        <h1 class="page-title" style="color:red">Profile</h1><br><br>
                        <?php
include('../include/config.php');
// include('../include/session.php');  
$place = "SELECT * FROM `tbl_login` WHERE `category`='admin'";
$place_run = mysqli_query($conn, $place);

if (mysqli_num_rows($place_run)) {
    while ($row = mysqli_fetch_assoc($place_run)) {
       
        echo "<h4></i> <b>Name:</b>" . $row['uname'] . "</h4><br>";
        echo "<h4></i> <b>Password:</b>" . $row['password'] . "</h4><br>";
        // echo'<td ><a href="totalno.php?up_id='.$row['id'].'"><button>Edit</button></a> </td>';
        echo '<button onclick="showEditForm(' . $row['id'] . ')">Edit</button>';
    }
}
?>

<br><br>
 <form action="edit.php" method="POST"  id="editForm" style="display: none";>
            <label for="name">Name:</label>
            <input type="hidden" id="id" name="id" value="<?php echo isset($_GET['up_id']) ?  $_GET['up_id'] : null ?>" >
            <input type="text" id="name" name="name" placeholder="Enter your name" value="<?php echo isset($u_name) ?  $u_name: "" ?>">
<br><br>
            
            <label for="email">Pass:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" value="<?php echo isset($u_password) ?  $u_password : "" ?>">
<br><br>
            
            <!-- <input type="hidden"  value=""> -->
            <button type="submit" name="submit">Update </button>
        </form>

                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                        
                           
                        </div>
                    </div>
                </div>
                
            </div>
             
            <div class="container-fluid">
               
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            
                          
                          <?php
 

    // Fetch number of jobs applied by the current user
    $appliedJobsQuery = "SELECT COUNT(*) AS cmpcount FROM `tbl_cmpreg` WHERE `status` = '1'";
    $appliedJobsResult = mysqli_query($conn, $appliedJobsQuery);
    // $jobCount = 0;

    if ($appliedJobsResult && mysqli_num_rows($appliedJobsResult) > 0) {
        $jobCountData = mysqli_fetch_assoc($appliedJobsResult);
        $jobCount = $jobCountData['cmpcount'];
    }

  echo "<div >";
 

echo "<h4></i> <b>Number of Companies registered:</b>" . $jobCount . "</h4><br>";

 
?>


 
                          <?php
// Fetch user details from tbl_reg
$userDetailsQuery = "SELECT * FROM `tbl_login` WHERE `id` = '$Uid'";
$userDetailsResult = mysqli_query($conn, $userDetailsQuery);

if ($userDetailsResult && mysqli_num_rows($userDetailsResult) > 0) {
    $userDetails = mysqli_fetch_assoc($userDetailsResult);

    // Fetch number of jobs applied by the current user
    $appliedJobsQuery = "SELECT COUNT(*) AS jobcount FROM `tbl_post`";
    $appliedJobsResult = mysqli_query($conn, $appliedJobsQuery);
    $jobCount = 0;

    if ($appliedJobsResult && mysqli_num_rows($appliedJobsResult) > 0) {
        $jobCountData = mysqli_fetch_assoc($appliedJobsResult);
        $jobCount = $jobCountData['jobcount'];
    }

  echo "<div >";
 

echo "<h4></i> <b>Number of  jobs posted:</b>" . $jobCount . "</h4><br>";

  }
?>


<?php
// Fetch user details from tbl_reg


    // Fetch number of jobs applied by the current user
    $appliedJobsQuery = "SELECT COUNT(*) AS usercount FROM `tbl_login` WHERE `category`='user'  ";
    $appliedJobsResult = mysqli_query($conn, $appliedJobsQuery);
    $jobCount = 0;

    if ($appliedJobsResult && mysqli_num_rows($appliedJobsResult) > 0) {
        $jobCountData = mysqli_fetch_assoc($appliedJobsResult);
        $jobCount = $jobCountData['usercount'];
    }

  echo "<div >";
 

echo "<h4></i> <b>Number of users:</b>" . $jobCount . "</h4>";

  
?>

                              
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
             
        </div>
         
    </div>
 <script>
    function showEditForm(id) {
        // Set the user ID in the hidden field
        document.getElementById('id').value = id;

        // Fetch user information via AJAX
        fetch('upd.php?up_id=' + id)
            .then(response => response.json())
            .then(data => {
                // Populate form fields with fetched data
                document.getElementById('name').value = data[0]; // Assuming the first element is the name
                document.getElementById('password').value = data[1]; // Assuming the second element is the password

                // Show the edit form
                document.getElementById('editForm').style.display = 'block';
            })
            .catch(error => {
                console.error('Error fetching user information:', error);
            });
    }
</script>



    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

</html>