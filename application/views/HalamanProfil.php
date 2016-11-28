<!doctype html>
<html lang="en" class="no-js">
    <head>
        <title>BABYLAND</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/fonts/font-roboto.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/fonts/font-opensans.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/bootstrap.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/register.css" media="screen">
        <!-- REVOLUTION BANNER CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/fullwidth.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/settings.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/magnific-popup.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/font-awesome.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/animate.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/style.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/profile.css" media="screen">
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
                                <li style="font-size: 25px; color: white">BabyLand</li>
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
                                <li class="drop"><a href="<?php echo base_url('index.php') ?>">Home</a> </li>
                                <li class="drop"><a href="<?php echo base_url('index.php/SewaAlatBayi/index') ?>">Sewa</a>
                                <li class="drop"><a class="active" href="<?php echo base_url('index.php/Profil/index') ?>">Profil</a> </li>
                                <li><a href="<?php echo base_url('index.php/Transaksi/index')?>">Transaksi</a></li>
                                <li class="drop"><a href="<?php echo base_url('index.php/Pemberitahuan/index') ?>">Pemberitahuan</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <!-- End Header -->
            <div class="container">
                <div class="row profile">
                    <div class="col-md-6">
                        <div class="profile-sidebar">
                            <!-- SIDEBAR USERPIC -->
                            <div class="profile-userpic">
                                <img src="<?php echo base_url() ?>/images/alatbayi.jpg" class="img-responsive" alt="">
                            </div>
                            <!-- END SIDEBAR USERPIC -->
                            <!-- SIDEBAR USER TITLE -->
                            <div class="profile-usertitle">
                                <div class="profile-usertitle-name">
                                    yudistira S
                                </div>
                                <div class="profile-usertitle-job">
                                    anggota/pengguna
                                </div>
                            </div>
                            <!-- END SIDEBAR USER TITLE -->
                            <!-- SIDEBAR BUTTONS -->
                            <!-- END SIDEBAR BUTTONS -->
                            <!-- END MENU -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-content">
                            <!-- content 
                                    ================================================== -->
                            <div id="content" style="">
                                <div class="" style="height: 780px">
                                    <h1>Halaman Profil</h1>
                                    <form action="">
                                        <hr>
                                        <input type="email" name="email" id="email" placeholder="Email" value="yudistira96@gmail.com" style="width:460px;margin-bottom: 20px;" required="required" disabled="disabled"/>
                                        <input type="text" name="name" id="name" placeholder="Name" value="Yudistira S" style="width:460px;margin-bottom: 20px" required="required" disabled="disabled"/>
                                        <input type="password" name="password" id="password" placeholder="Password" value="12345" style="width:460px;margin-bottom: 20px" required="required" disabled="disabled"/>
                                        <input type="text" name="alamat" id="alamat" placeholder="alamat" value="Jalan Gajayana 1 782A, Malang" style="width:460px;margin-bottom: 20px" required="required" disabled="disabled"/>
                                        <input type="text" name="notlp" id="notlp" placeholder="nomor telepon" value="083848872189" style="width:460px;margin-bottom: 20px" required="required" disabled="disabled"/>
                                        <div style="margin-bottom : 15px; margin-left: -10px">
                                            <h4 style="margin-bottom: 10px">Foto Profil</h4>
                                            <div>
                                                <img src="<?php echo base_url() ?>/images/alatbayi.jpg" class="img-responsive" alt="" style="width: 120px;height: auto;border:1px solid black"></div>
                                            <input id="file-0a" class="file" name="file" type="file" data-min-file-count="1" style="margin-top: 15px" required="required" disabled="disabled">
                                        </div>
                                        <input type="text" name="name" id="name" placeholder="nomor telepon" style="width:460px;margin-bottom: 20px" required="required" disabled="disabled"/><br>
                                        <a href="#" style="width:460px;margin-left: -10px" class="btn btn-warning pull-left">Perbarui Profil</a>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End content -->
            <!-- footer
            ================================================== -->
            <footer>
                <div class="footer-line">
                    <div class="container">
                        <p><span class="span-one">BABYLAND 2016.</span></p>
                    </div>
                </div>
            </footer>
            <!-- End footer -->
        </div>
        <!-- End Container -->
    </body>
</html>