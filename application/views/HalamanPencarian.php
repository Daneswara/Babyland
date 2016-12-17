<!doctype html>
<html lang="en" class="no-js" style="height: 100%;">
    <head>
        <title>BABYLAND</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/fonts/font-roboto.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/fonts/font-opensans.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/bootstrap.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/login.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/settinggambar.css" media="screen">
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
    <body style="position: relative;padding:0;min-height: 100%">
        <!-- Container -->
        <div id="container" >
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
                                <li class="search" style="padding: 0">
                                    <form style="width: 450px;padding:0">
                                        <div class="form-group inputan" style="margin: 0;">

                                            <input type="text" name="search" id="search" required="required" placeholder="search..." style="margin:0;width: 350px;border: 1px solid transparent;border-radius: 5px 0 0 5px"/>
                                            <span><input type="submit" value="cari" style="width: 50px;padding: 11px 12px 12px 12px;margin:-1px 0 0 -4px;border-radius: 0 5px 5px 0;border: 1px solid transparent;background: #e8e9e9;color: black;font-weight: bold"/></span>

                                        </div>
                                    </form>
                                </li>
                                <li><a href="<?php echo base_url('index.php/Controller_Keranjang/index') ?>" class="nav-bar"><i class="fa fa-shopping-cart"></i> Keranjang Alat Bayi</a></li>
                                <li><a href="" class="nav-bar">Welcome, <?php
                                        if ($this->session->userdata('username')) {
                                            echo $this->session->userdata('username')."</a></li>";
                                            echo "<li><a href='";
                                            echo base_url('index.php/Controller_Rumah/keluar');
                                            echo "' class='nav-bar'>Keluar</a></li>";
                                        } else {
                                            echo "Tamu</a></li>";
                                        }
                                        ?>
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
                                <?php
                                if ($this->session->userdata('status') == "login") {
                                    echo "<li><a href ='";
                                    echo base_url('index.php/Controller_SewaAlatBayi/index');
                                    echo "'>Sewa</a><li><a href ='";
                                    echo base_url('index.php/Controller_Profil/index');
                                    echo "'>Profil</a></li><li><a href ='";
                                    echo base_url('index.php/Transaksi/index');
                                    echo "'>Transaksi</a></li><li><a href ='";
                                    echo base_url('index.php/Pemberitahuan/index');
                                    echo "'>Pemberitahuan</a></li>";
                                } else {
                                    echo "<li><a href='";
                                    echo base_url('index.php/Controller_Masuk/index');
                                    echo "'>Masuk</a></li><li><a href='";
                                    echo base_url('index.php/Controller_Daftar/index');
                                    echo "'>Daftar</a></li>";
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <!-- End Header -->
            <!-- content
            ================================================== -->
            <div id="content">
                <!-- shop section -->
                <div class="section-content shop-section">
                    <div class="container">
                        <div class="sewa-row">
                            <h1 style="color: black;margin:0">Hasil Pencarian</h1>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="row">
                                        <?php foreach ($user as $data) { ?>
                                            <div class="col-sm-3" style="margin-bottom: 20px;margin-top: 30px">
                                                <a href="<?php echo base_url('index.php/Controller_AlatBayi/index') . '/' . $data->id_alat ?>">
                                                    <div class="product-post">
                                                        <div class="product-gal item-image">
                                                            <img alt="" src="<?php echo base_url() . 'uploads/thumbs/' . $data->foto; ?>"/>
                                                        </div>
                                                        <div class="product-content item-content">
                                                            <h3><?php echo $data->nama_alat; ?></h3>
                                                            <p class="price">Rp.  <?php echo $data->harga. " / Hari"; ?></p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End content -->
            <!-- footer
            ================================================== -->
            <footer style="position: absolute;bottom:0;left:0;right:0;">
                <div class="footer-line" >
                    <div class="container">
                        <p><span class="span-one">BABYLAND 2016.</span></p>
                    </div>
                </div>
            </footer>
            <!-- End footer -->
        </div>
        <!-- End Container -->
        <script type="text/javascript">
        </script>
    </body>
</html>