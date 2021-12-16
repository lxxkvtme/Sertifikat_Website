<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="Sertifikat Website">
   <meta name="author" content="Belostemas">
   <link rel="shortcut icon" href="assets/images/favlogo.png">
   <title>Sertifikat Website</title>
   <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,500,700" rel="stylesheet">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karla:400,700">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rancho">

   <!--Morris Chart CSS -->
   <link rel="stylesheet" href="assets/plugins/morris/morris.css">
   <!-- App css -->
   <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
   <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
   <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

   <script src="assets/js/modernizr.min.js"></script>

   <script src="https://kit.fontawesome.com/6410f806cd.js" crossorigin="anonymous"></script>


   <style>
      .logo h3 {
         line-height: 30px;
         font-size: 23px;
         color: #fff;
         margin-top: 27px;
         font-family: 'Roboto';
      }
   </style>

</head>

<body class="fixed-left">
   <div id="droba-loader">
      <div class="loader"></div>
   </div>
   <!-- Begin page -->
   <div id="wrapper">

      <!-- Top Bar Start -->
      <div class="topbar">
         <!-- LOGO -->
         <div class="topbar-left">
            <a href="index.html" class="logo">
               <!-- <img class="flgo" src="assets/images/ews_new.png" alt="Logo" width="100px"> -->
               <h3>Sertifikat Website</h3>
            </a>
         </div>
         <!-- Button mobile view to collapse sidebar menu -->
         <div class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
               <!-- Page title -->
               <ul class="nav navbar-nav list-inline navbar-left">
                  <!-- <li class="list-inline-item">
                     <button class="button-menu-mobile open-left">
                        <i class="ti-layout-grid2"></i>
                     </button>
                  </li> -->
                  <li class="list-inline-item">
                     <h4 class="page-title"><?= $headline ?></h4>
                  </li>
               </ul>
               <nav class="navbar-custom">
                  <ul class="list-unstyled topbar-right-menu float-right mb-0">
                     <li class="hide-phone">
                        <form class="app-search">
                           <input type="text" placeholder="Search..." class="form-control">
                           <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                     </li>
                     <li>
                        <!-- Notification -->
                        <div class="notification-box">
                           <ul class="list-inline mb-0">
                              <li>
                                 <a href="javascript:void(0);" class="right-bar-toggle">
                                    <i class="mdi mdi-bell-outline"></i>
                                    <div class="noti-dot">
                                       <span class="pulse"></span>
                                    </div>
                                 </a>
                              </li>
                           </ul>
                        </div>
                        <!-- End Notification bar -->
                     </li>
                     <li class="dropdown dropslide">
                        <a class="nav-link" href="index.html#" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <img src="assets/images/profile.jpg" alt="user-img" class="rounded-circle img-thumbnail img-responsive">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                           <a class="dropdown-item" href="index.html#"><i class="mdi mdi-account"></i>
                              Profile</a>
                           <a class="dropdown-item" href="index.html#"><i class="mdi mdi-settings"></i>
                              Settings</a>
                           <div class="dropdown-divider"></div>
                           <a class="dropdown-item" href="index.html#"><i class="mdi mdi-power"></i> Logout</a>
                        </div>
                     </li>
                  </ul>
               </nav>
            </div><!-- end container -->
         </div><!-- end navbar -->
      </div>
      <!-- Top Bar End -->


      <!-- Left Sidebar-->
      <?php
      $this->db->select('*');
      $this->db->from('tb_menu');
      $data['menu'] = $this->db->get()->result_array();
      ?>

      <div class="left side-menu">
         <div class="sidebar-inner slimscrollleft">
            <!--- Sidemenu -->
            <div id="sidebar-menu">
               <ul>
                  <?php foreach ($data['menu'] as $mn) : ?>
                     <li><a href="<?= base_url($mn['link_menu'])  ?>"> <i class="<?= $mn['icon_menu'] ?>"></i><?= $mn['nama_menu'] ?></a></li>
                  <?php endforeach; ?>
               </ul>
               <div class="clearfix"></div>
            </div>
            <!-- Sidebar -->
            <div class="clearfix"></div>
         </div>
      </div>
      <!-- Left Sidebar End -->

      <!-- Right Sidebar -->
      <div class="side-bar right-bar">
         <h4 class="mt-3">Notifications</h4>
         <div class="notification-list nicescroll">
            <ul class="list-group list-no-border user-list">
               <li class="list-group-item">
                  <a href="index.html#" class="user-list-item">
                     <div class="icon bg-info">
                        <i class="mdi mdi-account"></i>
                     </div>
                     <div class="user-desc">
                        <span class="name">New Signup</span>
                        <span class="desc">There are new settings available</span>
                        <span class="time">5 hours ago</span>
                     </div>
                  </a>
               </li>
               <li class="list-group-item">
                  <a href="index.html#" class="user-list-item">
                     <div class="icon bg-info">
                        <i class="mdi mdi-comment"></i>
                     </div>
                     <div class="user-desc">
                        <span class="name">New Message received</span>
                        <span class="desc">There are new settings available</span>
                        <span class="time">1 day ago</span>
                     </div>
                  </a>
               </li>
               <li class="list-group-item">
                  <a href="index.html#" class="user-list-item">
                     <div class="icon bg-info">
                        <i class="mdi mdi-settings"></i>
                     </div>
                     <div class="user-desc">
                        <span class="name">Settings</span>
                        <span class="desc">There are new settings available</span>
                        <span class="time">1 day ago</span>
                     </div>
                  </a>
               </li>
               <li class="list-group-item">
                  <a href="index.html#" class="user-list-item">
                     <div class="icon bg-info">
                        <i class="mdi mdi-account"></i>
                     </div>
                     <div class="user-desc">
                        <span class="name">New Signup</span>
                        <span class="desc">There are new settings available</span>
                        <span class="time">2 hours ago</span>
                     </div>
                  </a>
               </li>
               <li class="list-group-item">
                  <a href="index.html#" class="user-list-item">
                     <div class="icon bg-info">
                        <i class="mdi mdi-comment"></i>
                     </div>
                     <div class="user-desc">
                        <span class="name">New Message received</span>
                        <span class="desc">There are new settings available</span>
                        <span class="time">2 day ago</span>
                     </div>
                  </a>
               </li>
               <li class="list-group-item">
                  <a href="index.html#" class="user-list-item">
                     <div class="icon bg-info">
                        <i class="mdi mdi-settings"></i>
                     </div>
                     <div class="user-desc">
                        <span class="name">Settings</span>
                        <span class="desc">There are new settings available</span>
                        <span class="time">2 day ago</span>
                     </div>
                  </a>
               </li>

            </ul>
         </div>
      </div>
      <!-- /Right-bar -->

   </div>
   <!-- END wrapper -->


   <?= $contents; ?>


   <!-- footer -->
   <footer class="footer text-right">
      2021 - Website Sertifikat
   </footer>


   <!-- jQuery  -->
   <script src="assets/js/jquery.min.js"></script>
   <script src="assets/js/popper.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>
   <script src="assets/js/detect.js"></script>
   <script src="assets/js/fastclick.js"></script>
   <script src="assets/js/jquery.blockUI.js"></script>
   <script src="assets/js/waves.js"></script>
   <script src="assets/js/jquery.nicescroll.js"></script>
   <script src="assets/js/jquery.slimscroll.js"></script>
   <script src="assets/js/jquery.scrollTo.min.js"></script>

   <!--Morris Chart-->
   <script src="assets/plugins/morris/morris.min.js"></script>
   <script src="assets/plugins/raphael/raphael-min.js"></script>


   <!-- App js -->
   <script src="assets/js/jquery.core.js"></script>
   <script src="assets/js/jquery.app.js"></script>

   <script src="assets/js/main.js"></script>
   <script src="assets/js/pages/dashboard1.js"></script>

</body>

</html>