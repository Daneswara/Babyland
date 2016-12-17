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
    <body style="position: relative;min-height: 100%">
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
                                <li><a href="<?php echo base_url('index.php/Controller_Keranjang/index') ?>" class="nav-bar"><i class="fa fa-shopping-cart"></i> Keranjang Alat Bayi</a></li>
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
                                <li class="drop"><a href="<?php echo base_url('index.php') ?>">Halaman Depan</a> </li>
                                <li class="drop"><a href="<?php echo base_url('index.php/Controller_SewaAlatBayi/index') ?>">Sewa</a></li>
                                <?php if ($this->session->userdata('username') == "admin") { ?>
                                        <li class="drop"><a href="<?php echo base_url('index.php/Controller_Pengguna/index'); ?>">Pengguna</a>
                                        </li>
    <?php } else { ?>

                                        <li class="drop"><a href="<?php echo base_url('index.php/Controller_Profil/index'); ?>">Profil</a>
                                        </li><?php } ?>
                                        <li><a href="<?php echo base_url('index.php/Controller_Transaksi/index')?>">Transaksi</a></li>
                                <li class="drop"><a class="active" href="<?php echo base_url('index.php/Controller_Pemberitahuan/index') ?>">Pemberitahuan</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <!-- End Header -->
            <!-- content
            ================================================== -->
            <h1 style="color: black; padding-bottom: 20px; margin-top: 0px">Menyewa Alat Bayi</h1>
            <!-- End content -->
            <div id="content" style="margin-bottom: 68px">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default panel-table" >
                            <div class="panel-body">
                                <table class="table table-striped table-bordered table-list">
                                    <thead>
                                        <tr>
                                            <th class="hidden-xs">ID</th>
                                            <th width="200px" >Tanggal</th>
                                            <th width="300px" >Penyewaan</th>
                                            <th width="200px">Total Harga</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $count=1; ?>
                                    <?php foreach($sewa as $transaksi){ ?>
                                        <tr>
                                            <td class="hidden-xs"><?php echo $count++ ?></td>
                                            <td><?php echo $transaksi->tanggal ?></td>
                                            <td><?php echo "Babyland-".$transaksi->id_order ?></td>
                                            <td><?php echo "Rp. ".$transaksi->total ?></td>
                                            <td><?php 
                                                if($transaksi->status==0){echo "dalam proses";}
                                                elseif($transaksi->status==1){echo "pengiriman";}
                                                else{echo "selesai";}
                                             ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>


                            </div>
                            <div class="panel-footer" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h1 style="color: black; padding-bottom: 20px">Alat Bayi Disewakan</h1>
            <div id="content" style="margin-bottom: 68px">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default panel-table" >
                            <div class="panel-body">
                                <table class="table table-striped table-bordered table-list">
                                    <thead>
                                        <tr>
                                            <th class="hidden-xs">ID</th>
                                            <th width="180px" >Alat Bayi</th>
                                            <th width="180px" >Tanggal Transaksi</th>
                                            <th width="150px">Tanggal Mulai</th>
                                            <th width="150px">Tanggal Akhir</th>
                                            <th width="120px">Waktu Sewa</th>
                                            <th width="120px">Harga</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $count=1; ?>
                                    <?php foreach($disewakan as $transaksi){ ?>
                                        <tr>
                                            <td class="hidden-xs"><?php echo $count++ ?></td>
                                            <td><?php echo $transaksi->nama_alat ?></td>
                                            <td><?php echo $transaksi->tanggal ?></td>
                                            <td><?php echo $transaksi->tanggal_mulai ?></td>
                                            <td><?php echo $transaksi->tanggal_akhir ?></td>
                                            <td><?php echo $transaksi->lama . " Hari";?></td>
                                            <td><?php echo ($transaksi->harga*$transaksi->lama) ?></td>
                                            <td><?php 
                                                if($transaksi->status==0){echo "dalam proses";}
                                                elseif($transaksi->status==1){echo "pengiriman";}
                                                else{echo "selesai";}
                                             ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>


                            </div>
                            <div class="panel-footer" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- footer
            ================================================== -->
            <footer style="padding-top: 50px;">
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