<!DOCTYPE html>
<html dir="ltr" lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Favicon icon -->
      <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>assets/admin/assets/images/favicon.png">
      <title>Firdasafridi admin Template - The Ultimate Multipurpose admin template</title>
      <!-- This page plugin CSS -->
      <link href="<?=base_url()?>assets/admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
      <!-- Custom CSS -->
      <link href="<?=base_url()?>assets/admin/dist/css/style.min.css" rel="stylesheet">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="<?=base_url()?>assets/admin/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="<?=base_url()?>assets/admin/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <script src="<?=base_url()?>assets/admin/assets/libs/jquery/dist/jquery.min.js"></script>
      <script src="<?=base_url()?>assets/js/alert.js"></script>
      <script>
         var ROOT = "<?=base_url()?>";
      </script>
      <!-- ============================================================== -->
      <!-- Preloader - style you can find in spinners.css -->
      <!-- ============================================================== -->
      <div class="preloader">
         <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
         </div>
      </div>
      <!-- ============================================================== -->
      <!-- Main wrapper - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <div id="main-wrapper">
         <!-- ============================================================== -->
         <!-- Topbar header - style you can find in pages.scss -->
         <!-- ============================================================== -->
         <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
               <div class="navbar-header">
                  <!-- This is for the sidebar toggle which is visible on mobile only -->
                  <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                  <i class="ti-menu ti-close"></i>
                  </a>
                  <!-- ============================================================== -->
                  <!-- Logo -->
                  <!-- ============================================================== -->
                  <a class="navbar-brand" href="index.html">
                     <!-- Logo icon -->
                     <b class="logo-icon">
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="<?=base_url()?>assets/admin/assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                        <!-- Light Logo icon -->
                        <img src="<?=base_url()?>assets/admin/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                     </b>
                     <!--End Logo icon -->
                     <!-- Logo text -->
                     <span class="logo-text">
                        <h3>Admin</h3>
                     </span>
                  </a>
                  <!-- ============================================================== -->
                  <!-- End Logo -->
                  <!-- ============================================================== -->
                  <!-- ============================================================== -->
                  <!-- Toggle which is visible on mobile only -->
                  <!-- ============================================================== -->
                  <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="ti-more"></i>
                  </a>
               </div>
               <!-- ============================================================== -->
               <!-- End Logo -->
               <!-- ============================================================== -->
               <div class="navbar-collapse collapse" id="navbarSupportedContent">
                  <!-- ============================================================== -->
                  <!-- toggle and nav items -->
                  <!-- ============================================================== -->
                  <ul class="navbar-nav float-left mr-auto">
                     <li class="nav-item d-none d-md-block">
                        <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                        <i class="sl-icon-menu font-20"></i>
                        </a>
                     </li>
                  </ul>
                  <!-- ============================================================== -->
                  <!-- Right side toggle and nav items -->
                  <!-- ============================================================== -->
                  <ul class="navbar-nav float-right">
                     <!-- ============================================================== -->
                     <!-- Search -->
                     <!-- ============================================================== -->
                     <li class="nav-item search-box">
                        <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                        <i class="ti-search font-16"></i>
                        </a>
                        <form class="app-search position-absolute">
                           <input type="text" class="form-control" placeholder="Search &amp; enter">
                           <a class="srh-btn">
                           <i class="ti-close"></i>
                           </a>
                        </form>
                     </li>
                     <!-- ============================================================== -->
                     <!-- User profile and search -->
                     <!-- ============================================================== -->
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                        <img src="<?=base_url()?>assets/admin/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                           <span class="with-arrow">
                           <span class="bg-primary"></span>
                           </span>
                           <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                              <div class="">
                                 <img src="<?=base_url()?>assets/admin/assets/images/users/1.jpg" alt="user" class="img-circle" width="60">
                              </div>
                              <div class="m-l-10">
                                 <h4 class="m-b-0">Admin</h4>
                                 <p class=" m-b-0">admin@m-telpro.com</p>
                              </div>
                           </div>
                           <a class="dropdown-item" href="javascript:void(0)">
                           <i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                           <a class="dropdown-item" href="javascript:void(0)">
                           <i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                           <div class="dropdown-divider"></div>
                           <div class="p-l-30 p-10">
                              <a href="#(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a>
                           </div>
                        </div>
                     </li>
                     <!-- ============================================================== -->
                     <!-- User profile and search -->
                     <!-- ============================================================== -->
                  </ul>
               </div>
            </nav>
         </header>
         <!-- ============================================================== -->
         <!-- End Topbar header -->
         <!-- ============================================================== -->
         <!-- ============================================================== -->
         <!-- Left Sidebar - style you can find in sidebar.scss  -->
         <!-- ============================================================== -->
         <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
               <!-- Sidebar navigation-->
               <nav class="sidebar-nav">
                  <ul id="sidebarnav">
                     <!-- User Profile-->
                     <li>
                        <!-- User Profile-->
                        <div class="user-profile dropdown m-t-20">
                           <div class="user-pic">
                              <img src="<?=base_url()?>assets/admin/assets/images/users/1.jpg" alt="users" class="rounded-circle img-fluid" />
                           </div>
                           <div class="user-content hide-menu m-t-10">
                              <h5 class="m-b-10 user-name font-medium">M TelPro</h5>
                              <a href="#(0)" class="btn btn-circle btn-sm m-r-5" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true"
                                 aria-expanded="false">
                              <i class="ti-settings"></i>
                              </a>
                              <div class="dropdown-menu animated flipInY" aria-labelledby="Userdd">
                                 <a class="dropdown-item" href="javascript:void(0)">
                                 <i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                 <a class="dropdown-item" href="javascript:void(0)">
                                 <i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                              </div>
                           </div>
                        </div>
                        <!-- End User Profile-->
                     </li>
                     <!-- User Profile-->
                     <li class="nav-small-cap">
                        <i class="mdi mdi-dots-horizontal"></i>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="icon-Car-Wheel"></i>
                        <span class="hide-menu">Dashboards </span>
                        </a>
                        <ul aria-expanded="false" class="collapse  first-level">
                           <li class="sidebar-item">
                              <a href="#" class="sidebar-link">
                              <i class="icon-Record"></i>
                              <span class="hide-menu"> Halaman Utama </span>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="icon-Receipt-4"></i>
                        <span class="hide-menu">Sewa Mobil </span>
                        </a>
                        <ul aria-expanded="false" class="collapse  first-level">
                           <li class="sidebar-item">
                              <a href="<?=base_url()?>admin/sewa" class="sidebar-link">
                              <i class="icon-Record"></i>
                              <span class="hide-menu"> List Sewa Mobil </span>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="calculator.html" aria-expanded="false">
                        <i class="icon-Receipt-3"></i>
                        <span class="hide-menu">E-Sales </span>
                        </a>
                        <ul aria-expanded="false" class="collapse  first-level">
                           <li class="sidebar-item">
                              <a href="<?=base_url()?>admin/esales" class="sidebar-link">
                              <i class="icon-Record"></i>
                              <span class="hide-menu"> Calculator </span>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="icon-Sidebar-Window"></i>
                        <span class="hide-menu">Manajemen Berita </span>
                        </a>
                        <ul aria-expanded="false" class="collapse  first-level">
                           <li class="sidebar-item">
                              <a href="#" class="sidebar-link">
                              <i class="icon-Record"></i>
                              <span class="hide-menu"> Tambah Berita </span>
                              </a>
                              <a href="#" class="sidebar-link">
                              <i class="icon-Record"></i>
                              <span class="hide-menu"> List Berita </span>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="icon-Wrench"></i>
                        <span class="hide-menu">Master </span>
                        </a>
                        <ul aria-expanded="false" class="collapse  first-level">
                           <li class="sidebar-item">
                              <a href="#" class="sidebar-link">
                              <i class="icon-Record"></i>
                              <span class="hide-menu"> Kategori Mobil </span>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="icon-Add-User"></i>
                        <span class="hide-menu">Manajemen User </span>
                        </a>
                        <ul aria-expanded="false" class="collapse  first-level">
                           <li class="sidebar-item">
                              <a href="#" class="sidebar-link">
                              <i class="icon-Record"></i>
                              <span class="hide-menu"> List User </span>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="icon-Eyeglasses-Smiley"></i>
                        <span class="hide-menu">Manajemen Admin </span>
                        </a>
                        <ul aria-expanded="false" class="collapse  first-level">
                           <li class="sidebar-item">
                              <a href="#" class="sidebar-link">
                              <i class="icon-Record"></i>
                              <span class="hide-menu"> List User Admin</span>
                              </a>
                              <a href="#" class="sidebar-link">
                              <i class="icon-Record"></i>
                              <span class="hide-menu"> Role Admin</span>
                              </a>
                              <a href="#" class="sidebar-link">
                              <i class="icon-Record"></i>
                              <span class="hide-menu"> Setting Role Menu</span>
                              </a>
                              <a href="<?=base_url()?>admin/mastermenu" class="sidebar-link">
                              <i class="icon-Record"></i>
                              <span class="hide-menu"> Master Menu</span>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="icon-Line-Chart3"></i>
                        <span class="hide-menu">Report </span>
                        </a>
                        <ul aria-expanded="false" class="collapse  first-level">
                           <li class="sidebar-item">
                              <a href="#" class="sidebar-link">
                              <i class="icon-Record"></i>
                              <span class="hide-menu"> Jumlah Transaksi </span>
                              </a>
                              <a href="#" class="sidebar-link">
                              <i class="icon-Record"></i>
                              <span class="hide-menu"> Jumlah User </span>
                              </a>
                              <a href="#" class="sidebar-link">
                              <i class="icon-Record"></i>
                              <span class="hide-menu"> Laporan Bulanan </span>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="authentication-login1.html
                           " aria-expanded="false">
                        <i class="mdi mdi-directions"></i>
                        <span class="hide-menu">Log Out</span>
                        </a>
                     </li>
                  </ul>
               </nav>
               <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
         </aside>
         <!-- ============================================================== -->
         <!-- End Left Sidebar - style you can find in sidebar.scss  -->
         <!-- ============================================================== -->
         <!-- ============================================================== -->
         <!-- Page wrapper  -->
         <!-- ============================================================== -->
         <div class="page-wrapper">