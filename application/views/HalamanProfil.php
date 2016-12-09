<!doctype html>
<html lang="en" class="no-js" style="height: 100%">
    <head>
        <title>Baby Land</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/fonts/font-roboto.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/fonts/font-opensans.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/bootstrap.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/login.css" media="screen">
        <!-- REVOLUTION BANNER CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/fullwidth.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/settings.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/magnific-popup.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/font-awesome.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/animate.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/style.css" media="screen">
        <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.migrate.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.appear.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>js/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.imagesloaded.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.isotope.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>js/retina-1.1.0.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>js/plugins-scroll.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>js/waypoint.min.js"></script>
        <!-- jQuery KenBurn Slider  -->
        <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.countTo.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>js/script.js"></script>
    </head>
    <body style="position: relative;min-height: 100%">
        <!-- Container -->
        <div id="container">
            <!-- Header
            ================================================== -->
            <header class="clearfix">
                <!-- Static navbar -->
                <div class="navbar navbar-default navbar-static-top">
                    <div class="top-line" style="padding:0;margin:0;">
                        <div class="container">
                            <ul class="top-menu" style="margin-top: 25px;">
                                <li style="font-size: 25px; color: white">BabyLand</li>
                            </ul>
                            <ul class="top-list" style="margin-right:-60px;">
                                <li><a href="<?php echo base_url('index.php/halamanKeranjang/index') ?>" class="nav-bar"><i class="fa fa-shopping-cart"></i> Your Cart <span>(23)</span> Items</a></li>
                                <li><a href="" class="nav-bar">Welcome, <?php echo $this->session->userdata('username');?></a></li>
                                <li><a href="<?php echo base_url('index.php/Controller_Rumah/keluar') ?>" class="nav-bar">Keluar</a></li>
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
                                <li class="drop"><a href="<?php echo base_url('index.php') ?>">Halaman Depan</a></li>
                                <li class="drop"><a  href="<?php echo base_url('index.php/Controller_Masuk/index') ?>">Masuk</a>
                            </li>
                            <li><a href="<?php echo base_url('index.php/Controller_Daftar/index') ?>">Daftar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->
    <!-- content
    ================================================== -->
    <div id="content" style="margin-bottom: 120px">
            <?php foreach($data as $profil){ ?>
        <div class="login-wrap" style="width: 60%" >
            <h2>Profile <a href=""><i class="fa fa-pencil" style="font-size: 22px" title="edit profile"></a></i></h2>
            <div class="col-sm-12" style="border-bottom: 1px solid #e7e7e7;margin: 45px 0 30px 0">
                <div class="profile">
                    <img  href="" src="<?php echo base_url().'uploads/thumbs/'.$profil->foto ?>" class="img-responsive img" style="border: 5px solid #bbcbe5"/>
                </div>
                <div class="profile">
                    <h3 style="color:#000;opacity: 0.7;font-weight: bold">Yudistira Sugandi</h3>
                    <p style="margin: 20px 20px 2px 0;font-size: 16px">yudistira96@gmail.com</p>
                    <a href="#">change profile picture</a>
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <div>
                <form action="<?php base_url('index.php/Login/prosesMasuk'); ?>" method="POST" >
                    <div class="pull-left" style="width: 45%;margin-left: 20px;">
                        <div class="form-group inputan">
                            <p>Username<span>*</span></p>
                            <span class="icon-case"><i class="fa fa-male"></i></span>
                            <input type="text" name="username" id="username" required="required" value="<?php echo $profil->username ?>"/>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group inputan">
                            <p>Nama <span>*</span></p>
                            <span class="icon-case"><i class="fa fa-user"></i></span>
                            <input type="text" name="name" id="name" required="required" value="<?php echo $profil->nama ?>"/>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group inputan">
                            <p>E-mail <span>*</span></p>
                            <span class="icon-case"><i class="fa fa-envelope-o"></i></span>
                            <input type="text" name="email" id="email" required="required" value="<?php echo $profil->email ?>"/>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group inputan">
                            <p>Password <span>*</span></p>
                            <span class="icon-case"><i class="fa fa-lock"></i></span>
                            <input type="text" name="password" id="pasword" required="required" value="<?php echo $profil->password ?>"/>
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="pull-right" style="width: 45%;margin-right: 20px" style="clear:both">
                        <div class="form-group inputan">
                            <p>Kota <span>*</span></p>
                            <span class="icon-case"><i class="fa fa-user"></i></span>
                            <input type="text" name="kota" id="kota" required="required" value="<?php echo $profil->kota?>"/>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group inputan">
                            <p>Nomor Telepon <span>*</span></p>
                            <span class="icon-case"><i class="fa fa-phone"></i></span>
                            <input type="text" name="notelp" id="notelp" required="required" value="<?php echo $profil->notelp ?>"/>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group inputan">
                            <p>Alamat <span>*</span></p>
                            <span class="icon-case"><i class="fa fa-comments-o"></i></span>
                            <textarea name="alamat" id="alamat" rows="4" cols="40" required="required"><?php echo $profil->alamat ?></textarea>
                            <div class="validation"></div>
                        </div>
                    </div>
                    <span class="clearfix"></span>
                </form>
            </div>
        </div>
                <?php } ?>

    </div>
    <span class="clearfix"></span>
    <!-- End content -->
    <!-- footer
    ================================================== -->
    <footer style="position: absolute;bottom:0;left:0;right:0;">
        <div class="footer-line" >
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