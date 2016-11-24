<!doctype html>


<html lang="en" class="no-js">
    <head>
        <title>Baby Land - Masuk</title>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700' rel='stylesheet' type='text/css'>


        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/bootstrap.css" media="screen">	
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
                            <ul class="top-list">
                                <li><a href="#"><i class="fa fa-shopping-cart"></i> Your Cart <span>(23)</span> Items</a></li>
                                <li>
                                    <form>
                                        <input type="search" placeholder="Search..."/>
                                        <button type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </form>
                                </li>
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
                                <li class="drop"><a href="index-2.html">Sewa</a>
                                </li>
                                <li class="drop"><a href="<?php echo base_url('index.php/profil/index')?>">Profil</a>
                                </li>
                                <li class="logo"><a href="<?php echo base_url() ?>"><img alt="" src="<?php echo base_url() ?>images/logo.png"></a></li>
                                <li class="drop"><a class="active" href="<?php echo base_url('index.php/login/index') ?>">Masuk</a>
                                </li>
                                <li><a href="<?php echo base_url('index.php/daftar/index') ?>">Daftar</a>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <!-- End Header -->
            <body>
                <div class="section-content contact-section">

                    <div class="container">

                        <div class="animated-area">
                            <form id="contact-form">
                                <div class="inner-contact-form">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <input name="email" id="email" type="text" placeholder="Email">
                                            <input name="password" id="password" type="text" placeholder="Password">
                                        </div>

                                    </div>

                                    <div class="submit-area">
                                        <button type="submit" name="contact-submit" id="submit_contact">
                                            <i class="fa fa-user"></i> Masuk
                                        </button>
                                    </div>
                                </div>
                                <div id="msg-error" class="message">
                                    <h1>UPPSSS! Whe have an Error</h1>
                                    <p>All fields are required. Also type a valid email address</p>
                                    <a href="#" class="type-again button-optional">Try again</a>
                                </div>
                                <div id="msg-success" class="message">
                                    <h1>Great!</h1>
                                    <p>Your message has been sent.</p>
                                    <a href="#" class="type-again button-optional">Send another message</a>
                                </div>
                            </form>						
                        </div>

                    </div>
                </div>
            </body>


            <!-- footer 
                    ================================================== -->
            <footer>

                <div class="footer-line">
                    <div class="container">
                        <p><span class="span-one">BABYLAND 2016.</span> <span> All rights reserved.</span></p>

                    </div>
                </div>

            </footer>
            <!-- End footer -->
        </div>
        <!-- End Container -->

        <!-- Contents of first window -->

        <!--
        ##############################
         - ACTIVATE THE BANNER HERE -
        ##############################
        -->
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
                            shadow: 1								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

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