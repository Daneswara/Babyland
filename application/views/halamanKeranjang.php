<!doctype html>


<html lang="en" class="no-js">
    <head>
        <title>Baby Land</title>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/fonts/font-roboto.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/fonts/font-opensans.css">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/font-awesome.css" media="screen">
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/keranjang.css" media="screen"> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/animate.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/style.css" media="screen">

        
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>/js/bootstrap.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>/js/keranjang.js"></script>


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
                                <li><a href="<?php echo base_url('index.php') ?>">Home</a></li>
                                <li class="drop"><a href="<?php echo base_url('index.php/SewaAlatBayi/index') ?>">Sewa</a>
                                <li class="drop"><a href="<?php echo base_url('index.php/Profil/index'); ?>">Profil</a>
                                </li>
                                <li><a href="<?php echo base_url('index.php/Transaksi/index')?>">Transaksi</a></li>
                                <li class="drop"><a href="<?php echo base_url('index.php/Pemberitahuan/index') ?>">Pemberitahuan</a>
                                </li>
                                <li class="drop"><a href="<?php echo base_url('index.php/Login/index') ?>">Masuk</a>
                                </li>
                                <li><a href="<?php echo base_url('index.php/Daftar/index') ?>">Daftar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <!-- End Header -->


            <!-- content 
                    ================================================== -->
            <div class="container">
    <div class="row">

        <section class="content">
            <h1>Halaman Keranjang</h1>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <!-- <div class="pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-success btn-filter" data-target="pagado">Pagado</button>
                                <button type="button" class="btn btn-warning btn-filter" data-target="pendiente">Pendiente</button>
                                <button type="button" class="btn btn-danger btn-filter" data-target="cancelado">Cancelado</button>
                                <button type="button" class="btn btn-default btn-filter" data-target="all">Todos</button>
                            </div>
                        </div> -->
                        <div class="table-container">
                            <table class="table table-filter">
                                <thead>
                                    <tr>
                                        <td width="5%"><h4>Jumlah</h4></td>
                                        <td width="30%"><h4>Nama Alat Bayi</h4></td>
                                        <td width="20%"><h4>Waktu Sewa</h4></td>
                                        <td width="20%"><h4>Harga</h4></td>
                                        <td width="20%"><h4>Total</h4></td>
                                        <td width="5%"><h4>Delete</h4></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr data-status="pagado">
                                        <td>
                                            <p>1</p>
                                        </td>
                                        <td>
                                            <div class="media">
                                                <a href="#" class="pull-left">
                                                    <img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
                                                </a>
                                                <div class="media-body">
                                                    
                                                    <h4 class="title">
                                                        KeranjangBelanja1
                                                    </h4>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2 Minggu</td>
                                        <td>Rp 50.000</td>
                                        <td>Rp 200.000</td>
                                        <td>
                                            <a href=""><i class="fa fa-trash-o" style="font-size: 23px"></i></a>
                                        </td>
                                    </tr>
                                    <tr data-status="pendiente">
                                        <td>
                                            <p>2</p>
                                        </td>
                                        <td>
                                            <div class="media">
                                                <a href="#" class="pull-left">
                                                    <img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
                                                </a>
                                                <div class="media-body">
                                                   
                                                    <h4 class="title">
                                                        KeranjangBelanja2
                                                    </h4>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                        <td>2 Minggu</td>
                                        <td>Rp 50.000</td>
                                        <td>Rp 200.000</td>
                                        <td>
                                            <a href=""><i class="fa fa-trash-o" style="font-size: 23px"></i></a>
                                        </td>
                                    </tr>
                                    <tr data-status="cancelado">
                                        <td>
                                            <p>1</p>
                                        </td>
                                        <td>
                                            <div class="media">
                                                <a href="#" class="pull-left">
                                                    <img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
                                                </a>
                                                <div class="media-body">
                                                    
                                                    <h4 class="title">
                                                        KeranjangBelanja3
                                                    </h4>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                        <td>4 Minggu</td>
                                        <td>Rp 50.000</td>
                                        <td>Rp 200.000</td>
                                        <td>
                                            <a href=""><i class="fa fa-trash-o" style="font-size: 23px"></i></a>
                                        </td>
                                    </tr>
                                    <tr data-status="pagado">
                                        <td>
                                            <p>4</p>
                                        </td>
                                        <td>
                                            <div class="media">
                                                <a href="#" class="pull-left">
                                                    <img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
                                                </a>
                                                <div class="media-body">
                                                    
                                                    <h4 class="title">
                                                        KeranjangBelanja4
                                                    </h4>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                        <td>2 Minggu</td>
                                        <td>Rp 50.000</td>
                                        <td>Rp 200.000</td>
                                        <td>
                                            <a href=""><i class="fa fa-trash-o" style="font-size: 23px"></i></a>
                                        </td>
                                    </tr>
                                    <tr data-status="pendiente">
                                        <td>
                                            <p>3</p>
                                        </td>
                                        <td>
                                            <div class="media">
                                                <a href="#" class="pull-left">
                                                    <img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
                                                </a>
                                                <div class="media-body">
                                                    
                                                    <h4 class="title">
                                                        KeranjangBelanja5
                                                    </h4>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                        <td>2 Minggu</td>
                                        <td>Rp 50.000</td>
                                        <td>Rp 200.000</td>
                                        <td>   
                                              <a href=""><i class="fa fa-trash-o" style="font-size: 23px"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td style="font-weight: bold;font-size: 23px">Total</td>
                                        <td></td>
                                        <td></td>
                                        <td style="font-weight: bold;font-size: 23px">RP 1.000.000</td>

                                    </tr>
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-filter pull-right" data-target="pagado" style="background:#2f3133;color: white;font-weight: bold">SEWA</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
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