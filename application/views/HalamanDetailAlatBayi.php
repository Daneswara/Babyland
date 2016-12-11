<!doctype html>
<html lang="en" class="no-js">
    <head>
        <title>BABYLAND</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/fonts/font-roboto.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/fonts/font-opensans.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/komen.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/bootstrap.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/login.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/magnific-popup.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/font-awesome.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/animate.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/style.css" media="screen">
        <script>
    $(document).ready(function(){
        $('button.increase1').click(function(i, oldva) {
            $('input#jumlah').val( function(i, oldval) {
                return parseInt( oldval, 10) + 1;
});
        });
    });
</script>
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
                                <li><a href="<?php echo base_url('index.php/Controller_Keranjang/index') ?>" class="nav-bar"><i class="fa fa-shopping-cart"></i> Your Cart <span>(23)</span> Items</a></li>
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
                                <li class="drop"><a href="<?php echo base_url('index.php/Controller_SewaAlatBayi/index') ?>">Sewa</a>
                                <li class="drop"><a href="<?php echo base_url('index.php/Profil/index'); ?>">Profil</a>
                            </li>
                            <li><a href="<?php echo base_url('index.php/Transaksi/index') ?>">Transaksi</a></li>
                            <li class="drop"><a href="<?php echo base_url('index.php/Pemberitahuan/index') ?>">Pemberitahuan</a>
                        </li>
                        <li class="drop"><a href="<?php echo base_url('index.php/Controller_Masuk/index') ?>">Masuk</a>
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
<div id="content">
<!-- shop section -->
<div class="section-content shop-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shop-row">
                    <div id="carousel-example-generic3" class="carousel slide" data-ride="carousel" >
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="single-product">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <div class="product-visibility">
                                            <?php foreach ($nama as $data){ ?>
                                                <div class="image-holder" >
                                                    <img alt="" src="<?php echo base_url().'uploads/thumbs/'.$data->foto;?>"/>
                                                    <a href="<?php echo base_url() ?>/images/alatbayi.jpg"class="zoom"><i class="fa fa-search"></i></a>
                                                    <p></p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8">
                                            <div class="single-product-content">
                                                <div class="product-price-section">
                                                    <div class="left-section">
                                                        <p style="font-weight: bold">Nama alat :<?php echo $data->nama_alat; ?></p>
                                                        <p style="font-weight: bold">tersedia :  <?php echo $data->jumlah; ?></p>
                                                        <p style="font-weight: bold">by : <a href=""> <?php echo $data->username; ?></a></p>
                                                    </div>
                                                    <div class="right-section">
                                                        <h1 class="price">Harga: <?php echo "Rp. ".$data->harga; ?></h1>
                                                        <p></p>
                                                    </div>
                                                </div>
                                                <div class="bying-section">
                                                <form action="<?php echo base_url('index.php/Controller_Keranjang/prosesKeranjang') ?>" method="POST">
                                                    <div class="left-section">
                                                        <span>Jumlah:</span>
                                                        <input type="number" style="width: 50px;height: 50px;text-align: center;font-size: 20px;border: 1px solid #e7e7e7" min="0" max="<?php echo $data->jumlah ?>" id="jumlah" name="jumlah" value="0"/>
                                                        <div class="quantity-buttons">
                                                        </div>
                                                    </div>
                                                    <div class="left-section" style="margin-left: 15px">
                                                        <span>Lama Sewa:</span>
                                                        <input type="number" style="width: 50px;height: 50px;text-align: center;font-size: 20px;border: 1px solid #e7e7e7" min="0" id="lama" name="lama" value="0"/>
                                                        <span><p style="margin-left: 5px">Minggu</p></span>

                                                        <input type="hidden" name="nama_alat" value="<?php echo $data->nama_alat?>">
                                                        <input type="hidden" name="harga" value="<?php echo $data->harga?>">
                                                        <input type="hidden" name="hidden" value="<?php echo $this->uri->segment(3); ?>">
                                                        <div class="quantity-buttons">
                                                        </div>
                                                    </div>
                                                    <div class="right-section">
                                                        <ul class="product-post-list">
                                                            <li><input type="submit" class="btn btn-info" style="padding: 10px 20px" value="Add to Cart"></li>
                                                        </ul>
                                                    </div>
                                                    <div class="left-section">
                                                        <span>tanggal mulai:</span>
                                                        <input type="text" id="datepicker" name="date"  style="width: 60%"/>
                                                    </div>
                                                    </form>
                                                </div>
                                                <div class="vertical-tabs-box triggerAnimation animated" data-animate="bounceIn">
                                                    <!-- Nav tabs -->
                                                    <ul class="nav nav-tabs" id="myTab">
                                                    </ul>
                                                    <div class="tab-content" style=" margin-left: 0px">
                                                        <div class="tab-pane active" id="home-tab">
                                                            <p><b>DESKRIPSI</b></p><br>
                                                            <p> <?php echo $data->deskripsi; ?>.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                        <!-- Controls -->
                    </div>
                </div>
            </div>
            <!-- comment -->
            <div class="container" style="margin-top: 50px">
                <div class="col-sm-12">
                    <div class="panel panel-white post panel-shadow">
                        <h3>Komentar</h3>
                        <div class="post-footer">
                            <form class="input-group" action="<?php echo base_url('index.php/Controller_komentar/prosesKomentar') ?>" method="POST">
                                <input class="form-control" name="komen" placeholder="Write your comment here..." type="text">
                                <input type="hidden" name="hidden" value="<?php echo $this->uri->segment(3); ?>">
                                <span class="input-group-addon" style="padding:0">
                                    <input type="submit" value="tambah" style="height:30px;width:75px;border: 1px solid transparent">
                                </span>
                            </form>
                            <?php foreach($nama as $data){ ?>
                            <ul class="comments-list">
                                <li class="comment">
                                    <a class="pull-left" href="#">
                                        <img class="avatar" src="http://bootdey.com/img/Content/user_1.jpg" alt="avatar">
                                    </a>
                                    <div class="comment-body">
                                        <div class="comment-heading">
                                            <h4 class="user"><?php echo $data->username ?></h4>
                                            <h5 class="time"><?php echo $data->tanggal ?></h5>
                                        </div>
                                        <p><?php echo $data->komentar ?></p>
                                    </div>
                                    <!-- <ul class="comments-list">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="Write your comment here..." type="text">
                                            <span class="input-group-addon">
                                                <a href="#"><i class="fa fa-edit"></i></a>
                                            </span>
                                        </div>
                                        <li class="comment">
                                            <a class="pull-left" href="#">
                                                <img class="avatar" src="http://bootdey.com/img/Content/user_3.jpg" alt="avatar">
                                            </a>
                                            <div class="comment-body">
                                                <div class="comment-heading">
                                                    <h4 class="user">Ryan Haywood</h4>
                                                    <h5 class="time">3 minutes ago</h5>
                                                </div>
                                                <p>Relax my friend</p>
                                            </div>
                                        </li>
                                        <li class="comment">
                                            <a class="pull-left" href="#">
                                                <img class="avatar" src="http://bootdey.com/img/Content/user_2.jpg" alt="avatar">
                                            </a>
                                            <div class="comment-body">
                                                <div class="comment-heading">
                                                    <h4 class="user">Gavino Free</h4>
                                                    <h5 class="time">3 minutes ago</h5>
                                                </div>
                                                <p>Ok, cool.</p>
                                            </div>
                                        </li>
                                    </ul> -->
                                </li>
                            </ul>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end comment -->
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
        <p><span class="span-one">BABYLAND 2016</span></p>
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

<!-- datetimepicker -->
<script type="text/javascript" src="<?php echo base_url() ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>/js/bootstrap.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>/js/datetimepicker.js"></script>
<!--  end-->
<script type="text/javascript" src="<?php echo base_url() ?>/js/waypoint.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>/js/script.js"></script>

</body>
</html>