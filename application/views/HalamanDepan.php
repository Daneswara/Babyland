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
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/login.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/settinggambar.css" media="screen">
        <!-- REVOLUTION BANNER CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/fullwidth.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/settings.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/magnific-popup.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/font-awesome.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/animate.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/style.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/dropdown.css" media="screen">
        <!-- END -->
        <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.min.js"></script>
        <!-- DROPDOWN -->
        <script type="text/javascript" src="<?php echo base_url() ?>js/dropdown.js"></script>
        <!--  -->
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
                    <div class="top-line" style="padding:0;margin:0;">
                        <div class="container">
                            <ul class="top-menu" style="margin-top: 25px;">
                                <li style="font-size: 25px; color: white">BabyLand</li>
                            </ul>
                            <ul class="top-list" style="margin-right:-60px;">
                                <li class="search" style="padding: 0">
                                    <form style="width: 450px;padding:0" action="<?php echo base_url('index.php/Controller_Cari/index'); ?>" method="GET">
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
                                <li class="drop"><a class="active" href="<?php echo base_url('index.php') ?>">Halaman Depan</a></li>
                                <?php if ($this->session->userdata('status') == "login") { ?>
                                    <li class="drop"><a href="<?php echo base_url('index.php/Controller_SewaAlatBayi/index'); ?>">Sewa</a>
                                    </li>
                                    <?php if ($this->session->userdata('username') == "admin") { ?>
                                        <li class="drop"><a href="<?php echo base_url('index.php/Controller_Pengguna/index'); ?>">Pengguna</a>
                                        </li>
    <?php } else { ?>

                                        <li class="drop"><a href="<?php echo base_url('index.php/Controller_Pengguna/menampilkanHalamanProfil'); ?>">Profil</a>
                                        </li><?php } ?>

                                    <li><a href="<?php echo base_url('index.php/Transaksi/index') ?>">Transaksi</a></li>
                                    <li class="drop"><a href="<?php echo base_url('index.php/Pemberitahuan/index') ?>">Pemberitahuan</a>
                                    </li><?php } ?>
<?php if ($this->session->userdata('status') != 'login') { ?>
                                    <li class="drop"><a href="<?php echo base_url('index.php/Controller_Masuk/index') ?>">Masuk</a>
                                    </li>
                                    <li><a href="<?php echo base_url('index.php/Controller_Daftar/index') ?>">Daftar</a>
                                    </li>
                                </ul><?php } ?>
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
                        <div class="shop-row">
                            <h1 style="color: black">Produk Minggu Ini</h1>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="row">

<?php foreach ($user as $data) { ?>
                                            <div class="col-sm-3" >
                                                <a href="<?php echo base_url('index.php/Controller_AlatBayi/index') . '/' . $data->id_alat ?>"><div class="product-post">
                                                        <div class="product-gal item-image">
                                                            <img alt="" src="<?php echo base_url() . 'uploads/thumbs/' . $data->foto; ?>"/>

                                                        </div>
                                                        <div class="product-content item-content">
                                                            <h3><?php echo $data->nama_alat; ?></h3>
                                                            <p class="price">Rp.  <?php echo $data->harga; ?></p>
                                                        </div>
                                                    </div></a>
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
        <script type="text/javascript">
            var tpj = jQuery;
            tpj.noConflict();
            tpj(document).ready(function() {
                if (tpj.fn.cssOriginal != undefined)
                    tpj.fn.css = tpj.fn.cssOriginal;
                var api = tpj('.fullwidthbanner').revolution(
                        {
                            delay: 8000,
                            startwidth: 1170,
                            startheight: 864,
                            onHoverStop: "off", // Stop Banner Timet at Hover on Slide on/off
                            thumbWidth: 100, // Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
                            thumbHeight: 50,
                            thumbAmount: 3,
                            hideThumbs: 0,
                            navigationType: "bullet", // bullet, thumb, none
                            navigationArrows: "solo", // nexttobullets, solo (old name verticalcentered), none
                            navigationStyle: "round", // round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom
                            navigationHAlign: "center", // Vertical Align top,center,bottom
                            navigationVAlign: "bottom", // Horizontal Align left,center,right
                            navigationHOffset: 30,
                            navigationVOffset: 40,
                            soloArrowLeftHalign: "left",
                            soloArrowLeftValign: "center",
                            soloArrowLeftHOffset: 40,
                            soloArrowLeftVOffset: 0,
                            soloArrowRightHalign: "right",
                            soloArrowRightValign: "center",
                            soloArrowRightHOffset: 40,
                            soloArrowRightVOffset: 0,
                            touchenabled: "on", // Enable Swipe Function : on/off
                            stopAtSlide: -1, // Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
                            stopAfterLoops: -1, // Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic
                            hideCaptionAtLimit: 0, // It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
                            hideAllCaptionAtLilmit: 0, // Hide all The Captions if Width of Browser is less then this value
                            hideSliderAtLimit: 0, // Hide the whole slider, and stop also functions if Width of Browser is less than this value
                            fullWidth: "on",
                            shadow: 1                               //0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)
                        });
                // TO HIDE THE ARROWS SEPERATLY FROM THE BULLETS, SOME TRICK HERE:
                // YOU CAN REMOVE IT FROM HERE TILL THE END OF THIS SECTION IF YOU DONT NEED THIS !
                api.bind("revolution.slide.onloaded", function(e) {
                    jQuery('.tparrows').each(function() {
                        var arrows = jQuery(this);
                        var timer = setInterval(function() {
                            if (arrows.css('opacity') == 1 && !jQuery('.tp-simpleresponsive').hasClass("mouseisover"))
                                arrows.fadeOut(300);
                        }, 3000);
                    })
                    jQuery('.tp-simpleresponsive, .tparrows').hover(function() {
                        jQuery('.tp-simpleresponsive').addClass("mouseisover");
                        jQuery('body').find('.tparrows').each(function() {
                            jQuery(this).fadeIn(300);
                        });
                    }, function() {
                        if (!jQuery(this).hasClass("tparrows"))
                            jQuery('.tp-simpleresponsive').removeClass("mouseisover");
                    })
                });
                // END OF THE SECTION, HIDE MY ARROWS SEPERATLY FROM THE BULLETS
            });
        </script>
    </body>
</html>