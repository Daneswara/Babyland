<!doctype html>


<html lang="en" class="no-js">
    <head>
        <title>Baby Land</title>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/font-awesome.css" media="screen">
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://necolas.github.io/normalize.css/5.0.0/normalize.css"> 
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
                            <ul class="top-list">
                                <li>
                                    <form style="margin-right: 20px"> 
                                        <input type="search" placeholder="Search..."/ style="width: 500px">
                                        <span>
                                              <i class="fa fa-search" style="color:white;margin-left: 10px;font-size: 23px"></i>
                                        </span>
                                         
                                    </form>
                                </li>
                                <li><a href="<?php echo base_url('index.php/halamanKeranjang/index')?>"><i class="fa fa-shopping-cart"></i> Your Cart <span>(23)</span> Items</a></li>
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
                                <li class="drop"><a class="active" href="index-2.html">Sewa</a>
                                    <ul class="drop-down">
                                        <li><a href="index-2.html">Home 1</a></li>
                                        <li><a href="home2.html">Home 2</a></li>
                                        <li><a href="home3.html">Home 3</a></li>
                                        <li><a href="home4.html">Home 4</a></li>
                                        <li><a href="home5.html">Home 5</a></li>
                                        <li><a href="home6.html">Home 6</a></li>
                                    </ul>
                                </li>
                                <li class="drop"><a href="#">Profil</a>
                                    <ul class="drop-down">
                                        <li class="drop"><a href="about.html">About</a>
                                            <ul class="drop-down level3">
                                                <li><a href="about.html">About 1</a></li>
                                                <li><a href="about2.html">About 2</a></li>
                                                <li><a href="about3.html">About 3</a></li>
                                                <li><a href="about-me.html">About Me</a></li>
                                                <li><a href="about-me2.html">About Me 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="drop"><a href="services.html">Services</a>
                                            <ul class="drop-down level3">
                                                <li><a href="services.html">Services 1</a></li>
                                                <li><a href="services2.html">Services 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="pricing.html">Pricing Tables</a></li>
                                        <li><a href="careers.html">Careers</a></li>
                                        <li><a href="testimonials.html">Testimonials</a></li>
                                        <li><a href="blank.html">Blank Page</a></li>
                                        <li><a href="error.html">Error 404</a></li>
                                        <li><a href="<?php echo base_url('index.php/login/index')?>">Log in</a></li>
                                    </ul>
                                </li>
                                <li class="logo"><a href="<?php echo base_url('index.php')?>"><img alt="" src="<?php echo base_url() ?>/images/logo.png"></a></li>
                                <li class="drop"><a href="<?php echo base_url('index.php/login/index')?>">Masuk</a>
                                </li>
                                <li><a href="<?php echo base_url('index.php/daftar/index')?>">Daftar</a>
                                   
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
                        <div class="pull-right" style="margin: 25px 0;">
                            <a href=""><i class="fa fa-trash-o" style="font-size: 23px"></i></a>
                            <span>Delete choosen items</span>
                        </div>
                        <div class="table-container">
                            <table class="table table-filter">
                                <thead>
                                    <tr>
                                        <td></td>
                                        <td><h4>Jumlah</h4></td>
                                        <td><h4>Nama Barang</h4></td>
                                        <td><h4>Lama Menyewa(Minggu)</h4></td>
                                        <td><h4>Harga</h4></td>
                                        <td><h4>Total</h4></td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr data-status="pagado">
                                        <td>
                                            <div class="ckbox">
                                                <input type="checkbox" id="checkbox1">
                                                <label for="checkbox1"></label>
                                            </div>
                                        </td>
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
                                        <td>2</td>
                                        <td>Rp 50.000</td>
                                        <td>Rp 200.000</td>
                                        <td>
                                            <a href=""><i class="fa fa-trash-o" style="font-size: 23px"></i></a>
                                        </td>
                                    </tr>
                                    <tr data-status="pendiente">
                                        <td>
                                            <div class="ckbox">
                                                <input type="checkbox" id="checkbox3">
                                                <label for="checkbox3"></label>
                                            </div>
                                        </td>
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
                                        <td>2</td>
                                        <td>Rp 50.000</td>
                                        <td>Rp 200.000</td>
                                        <td>
                                            <a href=""><i class="fa fa-trash-o" style="font-size: 23px"></i></a>
                                        </td>
                                    </tr>
                                    <tr data-status="cancelado">
                                        <td>
                                            <div class="ckbox">
                                                <input type="checkbox" id="checkbox2">
                                                <label for="checkbox2"></label>
                                            </div>
                                        </td>
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
                                        <td>2</td>
                                        <td>Rp 50.000</td>
                                        <td>Rp 200.000</td>
                                        <td>
                                            <a href=""><i class="fa fa-trash-o" style="font-size: 23px"></i></a>
                                        </td>
                                    </tr>
                                    <tr data-status="pagado" class="selected">
                                        <td>
                                            <div class="ckbox">
                                                <input type="checkbox" id="checkbox4" checked>
                                                <label for="checkbox4"></label>
                                            </div>
                                        </td>
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
                                        <td>2</td>
                                        <td>Rp 50.000</td>
                                        <td>Rp 200.000</td>
                                        <td>
                                            <a href=""><i class="fa fa-trash-o" style="font-size: 23px"></i></a>
                                        </td>
                                    </tr>
                                    <tr data-status="pendiente">
                                        <td>
                                            <div class="ckbox">
                                                <input type="checkbox" id="checkbox5">
                                                <label for="checkbox5"></label>
                                            </div>
                                        </td>
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
                                        <td>2</td>
                                        <td>Rp 50.000</td>
                                        <td>Rp 200.000</td>
                                        <td>   
                                              <a href=""><i class="fa fa-trash-o" style="font-size: 23px"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
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