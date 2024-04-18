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
    <title>Admin portal</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
   <link href="css/style.min.css" rel="stylesheet">
     
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
                                <span class="hide-menu">Dashboard</span>
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
                        <h4 class="page-title">Company Details</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                               
                            </ol>
                           
                        </div>
                    </div>
                </div>
                
            </div>
             
            <div class="container-fluid">
               
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            
                            <div class="table-responsive">


                                <?php
                                include('../include/config.php');
                                $place="SELECT * FROM `tbl_cmpreg` WHERE `status`='0'";
                                $place_run=mysqli_query($conn,$place)
                                ?>

                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">id</th> 
                                            <th class="border-top-0">Name</th>                              
                                            <th class="border-top-0">Email</th>                                      
                                            <th class="border-top-0" >Headquaters</th>
                                            <th class="border-top-0">Password</th>
                                            <!-- <th class="border-top-0"> Approved</th> -->
                                            <th class="border-top-0"> Rejected</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if(mysqli_num_rows($place_run))
                                        {
                                        
                                        while ($row=mysqli_fetch_assoc($place_run))
                                         {  
                                        
                                         ?>                                         
                                        <tr>
                                           <td> <?php echo $id=$row['id'];?></td>
                                           <!-- <td> <//?php echo $row['id']; ?> </td>  -->
                                            <td> <?php echo $row['cmpname']; ?> </td>                                            
                                            <td><?php echo $row['cmpemail']; ?></td>                                           
                                            <td><?php echo $row['cmpheadq']; ?></td>
                                            <td><?php echo $row['cmppass']; ?></td>
                                            
                                            <td>
                                            <?php echo'<a href="apprcmp.php?id='.$id.'" > <button class="btn btn-success">Approve</button></a>';?> 
                                            <?php echo'<a href="reject.php?id='.$id.'">     <button class="btn btn-danger">Reject</button></a>';?>
                                            
                                            </td>
                                            <td>
                                             
                                        </tr>
                                       <?php 
                                         }
                                        }
                                       
                                       
                                       ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
             
        </div>
         
    </div>
     
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