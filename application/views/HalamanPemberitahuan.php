<!doctype html>


<html lang="en" class="no-js" style="height: 100%;">
    <head>
        <title>Baby Land</title>

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
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/pengguna.css" media="screen">

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
    <body style="position: relative;border: 1px solid transparent;min-height: 100%">

        <!-- Container -->
        <div id="container" >
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
                                <li class="drop"><a href="<?php echo base_url('index.php/Profil/index') ?>">Profil</a> </li>
                                <li><a href="<?php echo base_url('index.php/Transaksi/index')?>">Transaksi</a></li>
                                <li class="drop"><a class="active" href="<?php echo base_url('index.php/Pemberitahuan/index') ?>">Pemberitahuan</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <!-- End Header -->


            <!-- content 
                    ================================================== -->
            <div id="content" style="margin-bottom: 68px">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="panel panel-default panel-table" >
            <div class="panel-body">
              <table class="table table-striped table-bordered table-list">
                <thead>
                  <tr>
                    <th class="hidden-xs">ID</th>
                    <th width="200px">Tanggal</th>
                    <th width="200px">Pesanan</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="hidden-xs">1</td>
                    <td>29 November 2016</td>
                    <td>BABYLAND-201</td>
                    <td>Proses Pengiriman</td>
                  </tr>
                  
                  <tr>
                    <td class="hidden-xs">2</td>
                    <td>29 November 2016</td>
                    <td>BABYLAND-202</td>
                    <td>Menunggu Pembayaran</td>
                  </tr>
                </tbody>
              </table>
              
              
            </div>
            <div class="panel-footer" >
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

    </body>
</html>
