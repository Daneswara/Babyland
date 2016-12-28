<!doctype html>
<html lang="en" class="no-js" style="height: 100%">
    <head>
        <title>Baby Land</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/fonts/font-roboto.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/fonts/font-opensans.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/bootstrap.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/login.css" media="screen">
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
        <script type="text/javascript" src="<?php echo base_url() ?>js/upload.js"></script>
        <!-- jQuery KenBurn Slider  -->
        <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.countTo.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>js/script.js"></script>
    </head>
    <body style="position: relative;min-height: 100%">
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
                                <li><a href="<?php echo base_url('index.php/Controller_Keranjang/index') ?>" class="nav-bar"><i class="fa fa-shopping-cart"></i> Keranjang Alat Bayi</a></li>
                                <li><a href="" class="nav-bar">Welcome, <?php echo $this->session->userdata('username'); ?></a></li>
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
                                <li class="drop"><a href="<?php echo base_url('index.php/Controller_SewaAlatBayi/index') ?>">Sewa</a>
                                    <?php if ($this->session->userdata('username') == "admin") { ?>
                                    <li class="drop"><a href="<?php echo base_url('index.php/Controller_Pengguna/index'); ?>">Pengguna</a>
                                    </li>
                                <?php } else { ?>

                                    <li class="drop"><a href="<?php echo base_url('index.php/Controller_Profil/index'); ?>">Profil</a>
                                    </li><?php } ?>
                                <li><a href="<?php echo base_url('index.php/Controller_Transaksi/index') ?>">Transaksi</a></li>
                                <li class="drop"><a href="<?php echo base_url('index.php/Controller_Pemberitahuan/index') ?>">Pemberitahuan</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <!-- End Header -->
            <!-- content
            ================================================== -->
            <div id="content" style="margin-bottom: 120px">
                <div class="login-wrap" style="width: 80%" >
                    <h2>Edit Data Alat Bayi</h2>
                    <?php foreach ($data as $alatbayi) { ?>

                        <div class="col-sm-6" style="border-right: 1px solid #bbcbe5;margin: 45px 0 30px 0">
                            <div class="profile">
                                <img  href="" src="<?php echo base_url() . '/uploads/thumbs/' . $alatbayi->foto ?>" class="img-responsive img" style="border: 3px solid #bbcbe5;width: 80%"/>
                            </div>
                            <div class="profile">
                                <h3 style="color:#000;opacity: 0.7;font-weight: bold"><?php echo $alatbayi->nama_alat ?></h3>
                            </div>
                        </div>
                        <div style="">
                            <form action="<?php echo base_url('index.php/Controller_SewaAlatBayi/perbaruiAlatBayi') . '/' . $alatbayi->id_alat ?>" method="POST" enctype="multipart/form-data">
                                <div class="pull-left" style="width: 45%;margin-left: 20px;">
                                    <div class="form-group inputan">
                                        <p>Nama Alat</p>
                                        <span class="icon-case"><i class="fa fa-male"></i></span>
                                        <input type="text" name="alatbayi" id="alatbayi" value="<?php echo $alatbayi->nama_alat ?>"/>
                                        <div class="validation"></div>
                                    </div>
                                    <div class="form-group inputan" style="display:hidden; padding-right: 10px">
                                        <p>Upload Foto</p>
                                        <div class="input-group image-preview">
                                            <input type="text" class="form-control image-preview-filename" name="id" value="<?php echo $alatbayi->foto ?>" disabled="disabled" >
                                            <input type="hidden" name="nama_alat" value="<?php echo $alatbayi->foto ?>">
                                            <span class="input-group-btn">
                                                <span><i class="fa fa-cross-o"></i></span> Clear
                                                </button>
                                                <div class="btn btn-default image-preview-input">
                                                    <span><i class="fa fa-folder-open"></i></span>
                                                    <span class="image-preview-input-title">Browse</span>
                                                    <input type="file" name="userfile" id="userfile"/>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group inputan">
                                        <p>Jumlah Alat</p>
                                        <span class="icon-case"><i class="fa fa-user"></i></span>
                                        <input type="number" name="jumlah" id="jumlah" value="<?php echo $alatbayi->jumlah ?>"/>
                                        <div class="validation"></div>
                                    </div>
                                    <div class="form-group inputan">
                                        <p>Harga</p>
                                        <span class="icon-case"><i class="fa fa-envelope-o"></i></span>
                                        <input type="number" name="harga" id="harga" value="<?php echo $alatbayi->harga ?>" />
                                        <div class="validation"></div>
                                    </div>
                                    <div class="form-group inputan">
                                        <p>Deskripsi Alat</p>
                                        <span class="icon-case"><i class="fa fa-comments-o"></i></span>
                                        <textarea name="deskripsi" id="deskripsi" rows="4" cols="55"><?php echo $alatbayi->deskripsi ?></textarea>
                                        <div class="validation"></div>
                                    </div>
                                    <input type="submit" value="Simpan" class="btn btn-default" style="background: #000;opacity: 0.6">

                                </div>
                                <span class="clearfix"></span>


                            </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <span class="clearfix"></span>
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
        <script>

        </script>
    </body>
</html>