<!doctype html>


<html lang="en" class="no-js">
    <head>
        <title>Baby Land</title>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/fonts/font-roboto.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/fonts/font-opensans.css">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/bootstrap.css" media="screen"> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/register.css" media="screen">    
        <!-- REVOLUTION BANNER CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/fullwidth.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/settings.css" media="screen" />

        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/magnific-popup.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/font-awesome.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/animate.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/style.css" media="screen">

        <script type="text/javascript" src="<?php echo base_url() ?>/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>/js/jquery.migrate.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>/js/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>/js/jquery.appear.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>/js/jquery.imagesloaded.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>/js/jquery.isotope.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>/js/retina-1.1.0.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>/js/plugins-scroll.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>/js/waypoint.min.js"></script>

        <!-- jQuery KenBurn Slider  -->
        <script type="text/javascript" src="<?php echo base_url() ?>/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>/js/jquery.countTo.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>/js/script.js"></script>

    </head>
    <body>

        <!-- Container -->
        <div id="container">
            <!-- Header
                ================================================== -->
            <header class="clearfix">
                <!-- Static navbar -->
                <div class="navbar navbar-default navbar-static-top">
                    <div class="top-line">
                        <div class="container">
                            <ul class="top-menu">
                                <li><a href="#"><i class="fa fa-envelope"></i>yudistira96@gmail.com </a></li>
                                <li><a href="#"><i class="fa fa-phone-square"></i>085746921137</a></li>
                                <li><a href="#"><i class="fa fa-skype"></i>blablablabla</a></li>
                            </ul>
                            <ul class="top-list">
                                <li>
                                    <form style="margin-right: 20px"> 
                                        <input type="search" placeholder="Search..."/ style="width: 400px">
                                               <span>
                                            <a href="<?php echo base_url('index.php/Pencarian/index') ?>"><i class="fa fa-search" style="color:white;margin-left: 10px;font-size: 23px"></i></a>
                                        </span>

                                    </form>
                                </li>
                                <li><a href="<?php echo base_url('index.php/halamanKeranjang/index') ?>"><i class="fa fa-shopping-cart"></i> Your Cart <span>(23)</span> Items</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="drop"><a href="<?php echo base_url('index.php') ?>">Home</a></li>
                                <li class="drop"><a class="active" href="<?php echo base_url('index.php/Pengguna/index') ?>">Pemberitahuan</a>
                                </li>
                                <li class="drop"><a href="<?php echo base_url('index.php/Profil/index') ?>">Profil</a>
                                </li>
                                <li class="logo"><a href="<?php echo base_url('index.php') ?>"><img alt="" src="<?php echo base_url() ?>/images/logo.png"></a></li>
                                <li class="drop"><a href="<?php echo base_url('index.php/Login/index') ?>">Masuk</a>
                                </li>
                                <li><a href="<?php echo base_url('index.php/Daftar/index') ?>">Daftar</a>
                                </li>
                                <li><a href="<?php echo base_url('index.php') ?>">Transaksi</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <!-- End Header -->


            <!-- content 
                    ================================================== -->
            <div id="content">
                <div class="testbox" style="height: 300px;">
                    <h1>Masuk</h1>
                    <hr>
                    <form action="<?php echo base_url('index.php/Login/prosesMasuk') ?>" method="post">
                        
                        <input type="email" name="email" id="email" placeholder="Email" required/>
                        <input type="password" name="password" id="password" placeholder="Password" required/>
                        <br>
                        <input type="submit" value="Login">

                    </form>
                </div>
            </div>
            <!-- End content -->

            <!-- footer 
                    ================================================== -->
            <footer>
                <div class="footer-line">
                    <div class="container">
                        <p><span class="span-one">BABYLAND 2016.</span></p>
                        <ul class="footer-social-icons">
                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>                      
                        </ul>
                    </div>
                </div>

            </footer>
            <!-- End footer -->
        </div>
        <!-- End Container -->

    </body>
</html>
