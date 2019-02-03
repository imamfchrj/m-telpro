<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Firda Safridi">
        <meta name="description" content="TRENDS - Telkom Rental and Delivery Services">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://www.tokenomy.com/">
        <meta property="og:title" content="TRENDS - Telkom Rental and Delivery Services" />
        <meta property="og:description" content="TRENDS - Telkom Rental and Delivery Services" />
        <meta property="og:image" content="http://trends.gsd.co.id/assets/img/logo-trends-red.png" />
        <meta property="og:image:type" content="image/png">
        <meta name="keywords" content="Sewa Mobil Online, rental mobil online, Jasa rental mobil, sewa mobil murah, rental mobil jakarta, jasa sewa mobil murah, sewa mobil jakarta, jasa sewa mobil, rental mobil murah, sewa mobil, harga sewa mobil jakarta, harga sewa mobil bandung, harga rental mobil">
        <title> TRENDS - Telkom Rental and Delivery Service</title>
        <link rel="shortcut icon" href="<?=base_url()?>images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="<?=base_url()?>#"><img src="images/logo_telpro.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href="<?=base_url()?>"><i class="fa fa-phone"></i><span>(+61) 3214 546789</span></a></div>
                                <div class="top-menu-item"><a href="<?=base_url()?>"><i class="fa fa-envelope"></i><span>contact@market-telpro.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Account
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?=base_url()?>#">Login</a></li>
                                            <li><a href="<?=base_url()?>#">Register</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu" >
                                    <li class="menu-item   current-menu-parent   <?php if($menu=="home") echo "active-color"?> ">
                                        <a href="<?=base_url()?>#">Home</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children <?php if($menu=="services") echo "active-color"?>  ">
                                            <a href="<?=base_url()?>#"> Service & Product <span class="fa fa-angle-right "></span></a>
                                            <!--class=" dl-submenu "-->
                                            <ul class="sub-menu dl-submenu">
                                                <li class="menu-item current-menu-item">
                                                    <a href="<?=base_url()?>services">Service</a>
                                                </li>
                                                <li class="menu-item current-menu-item">
                                                    <a href="<?=base_url()?>products">Product</a>
                                                </li>
                                                <li class="menu-item current-menu-item">
                                                    <a href="<?=base_url()?>area">Service Area</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item current-menu-parent <?php if($menu=="costumer") echo "active-color"?> ">
                                            <a href="<?=base_url()?>costumer">Costumer</a>
                                            <!--class=" dl-submenu "-->
                                        </li>
                                        <li class="menu-item current-menu-parent <?php if($menu=="news") echo "active-color"?> ">
                                            <a href="<?=base_url()?>news">News</a>
                                            <!--class=" dl-submenu "-->
                                        </li>
                                    <li class="menu-item <?php if($menu=="about_us") echo "active-color"?> ">
                                        <a href="<?=base_url()?>about_us">About Us</a>
                                    </li>
                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                            <!-- <a href="<?=base_url()?>" class="wheel-cheader-but">Sewa Sekarang</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>