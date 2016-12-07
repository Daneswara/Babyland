<!doctype html>
<html lang="en" class="no-js" style="height: 100%;">
    <head>
        <title>Baby Land</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://yourwebsite.com/style.css">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/bootstrap.css" media="screen">
        <link rel="stylesheet" href="https://necolas.github.io/normalize.css/5.0.0/normalize.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/login.css" media="screen">
        <!-- REVOLUTION BANNER CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/fullwidth.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/settings.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/magnific-popup.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/font-awesome.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/animate.css" media="screen">
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/style.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/pengguna.css" media="screen">
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
    <body style="position: relative;border: 1px solid transparent;min-height: 100%">
        <!-- Container -->
        <div id="container" >
            <!-- Header
            ================================================== -->
            <header class="clearfix">
                <!-- Static navbar -->
                <div class="navbar navbar-default navbar-static-top" >
                    <div class="top-line" style="padding:0;margin:0;">
                        <div class="container">
                            <ul class="top-menu" style="margin-top: 25px;">
                                <li style="font-size: 25px; color: white">BabyLand</li>
                            </ul>
                            <ul class="top-list" style="margin-right:-60px;">
                                <li class="search">
                                    <form style="margin-right: 20px">
                                        <input type="search" placeholder="Search..."/ style="width: 400px">
                                        <span>
                                            <a href="<?php echo base_url('index.php/Pencarian/index') ?>"><i class="fa fa-search" style="color:white;margin-left: 10px;font-size: 23px"></i></a>
                                        </span>
                                    </form>
                                </li>
                                <li><a href="<?php echo base_url('index.php/halamanKeranjang/index') ?>" class="nav-bar"><i class="fa fa-shopping-cart"></i> Your Cart <span>(23)</span> Items</a></li>
                                <li><a href="" class="nav-bar">Welcome, <?php echo $this->session->userdata('username');?></a></li>
                                <li><a href="" class="nav-bar">Keluar</a></li>
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
                                <li class="drop"><a href="<?php echo base_url('index.php')?>">Home</a></li>
                                <li class="drop"><a class="active" href="<?php echo base_url('index.php/Pengguna/index') ?>">Pemberitahuan</a>
                            </li>
                            <li class="drop"><a href="<?php echo base_url('index.php/Profil/index')?>">Profil</a>
                        </li>
                        <li class="drop"><a href="<?php echo base_url('index.php/Controller_Masuk/index')?>">Masuk</a>
                    </li>
                    <li><a href="<?php echo base_url('index.php/Daftar/index') ?>">Daftar</a>
                </li>
                <li><a href="<?php echo base_url('index.php')?>">Transaksi</a></li>
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
                            <th><em class="fa fa-cog"></em></th>
                            <th class="hidden-xs">ID</th>
                            <th>username</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>no telepon</th>
                            <th>kota</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($user as $data){ ?>
                        <tr>
                            <td align="center">
                                <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                <a class="btn btn-danger" href="<?php echo base_url('index.php/pengguna/prosesHapus').'?id='.$data->id_user?>"><em class="fa fa-trash-o"></em></a>
                            </td>
                            <td class="hidden-xs">1</td>
                            <td><?php echo $data->username; ?></td>
                            <td><?php echo $data->nama; ?></td>
                            <td><?php echo $data->email; ?></td>
                            <td><?php echo $data->alamat; ?></td>
                            <td><?php echo $data->notelp ;?></td>
                            <td><?php echo $data->kota; ?></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
                
                
            </div>
            <div class="panel-footer" >
                <div class="row" class="clearfix">
                    <div class="col col-xs-4">Page 1 of 5
                    </div>
                    <div class="col col-xs-8" >
                        <ul class="pagination hidden-xs pull-right" style="clear:both;border:2px solid black;width: 170px">
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                        </ul>
                        <ul class="pagination visible-xs pull-right">
                            <li><a href="#">&laquo;</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
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