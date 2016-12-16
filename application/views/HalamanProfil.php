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
                                <li class="drop"><a href="<?php echo base_url('index.php') ?>">Halaman Depan</a></li>
                                <li class="drop"><a href="<?php echo base_url('index.php/Controller_SewaAlatBayi/index') ?>">Sewa</a>
                                <li class="drop"><a class="active" href="<?php echo base_url('index.php/Controller_Pengguna/menampilkanHalamanProfil'); ?>">Profil</a>
                                </li>
                                <li><a href="<?php echo base_url('index.php/Transaksi/index') ?>">Transaksi</a></li>
                                <li class="drop"><a href="<?php echo base_url('index.php/Pemberitahuan/index') ?>">Pemberitahuan</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <!-- End Header -->
            <!-- content
            ================================================== -->
            <div id="content" style="margin-bottom: 120px">
                <?php foreach ($data as $profil) { ?>
                    <div class="login-wrap" style="width: 60%" >
                        <h2>Profile <a href="#" class="edit" title="edit profile"><i class="fa fa-pencil"></i></a></h2>

                        <div class="profile" style="padding-top: 20px; padding-left: 30px">
                            <img  href="" src="<?php
                            if (isset($profil->fotoprofil)) {
                                echo base_url() . 'uploads/thumbs/' . $profil->fotoprofil;
                            } else {
                                echo base_url() . 'images/avatar.png';
                            }
                            ?>" class="img-responsive img" style="border: 2px solid #bbcbe5"/>
                        </div>
                        <div>
                            <form action="<?php echo base_url('index.php/Profil/prosesPerbaruiProfil');?>" method="POST" enctype="multipart/form-data">
                                <div class="pull-left" style="width: 60%;margin-left: 20px;">
                                   <!--  <div class="form-group inputan">
                                        <p>Username<span>*</span></p>
                                        <span class="icon-case"><i class="fa fa-male"></i></span>
                                        <input type="text" name="username" id="username" required="required" value="" disabled="disabled"/>
                                        <div class="validation"></div>
                                    </div> -->
                                    <!-- <div class="form-group inputan">
                                        <p>Password<span>*</span></p>
                                        <span class="icon-case"><i class="fa fa-male"></i></span>
                                        <input type="text" name="password" id="password" required="required" value="" disabled="disabled"/>
                                        <div class="validation"></div>
                                    </div> -->
                                   <div class="form-group inputan" style="display:hidden; padding-right: 10px">
                                        <p>Upload Foto</p>
                                        <div class="input-group image-preview">
                                            <input type="text" class="form-control image-preview-filename" name="id" value="<?php echo $profil->fotoprofil ?>" disabled="disabled" >
                                            <input type="hidden" name="nama_alat" value="<?php echo $profil->fotoprofil?>">
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
                                        <p>Nama <span>*</span></p>
                                        <span class="icon-case"><i class="fa fa-user"></i></span>
                                        <input type="text" name="name" id="name" required="required" value="<?php echo $profil->nama ?>" disabled="disabled"/>
                                        <div class="validation"></div>
                                    </div>
                                    <div class="form-group inputan">
                                        <p>E-mail <span>*</span></p>
                                        <span class="icon-case"><i class="fa fa-envelope-o"></i></span>
                                        <input type="text" name="email" id="email" required="required" value="<?php echo $profil->email ?>" disabled="disabled"/>
                                        <div class="validation"></div>
                                    </div>
                                    <div class="form-group inputan">
                                        <p>Kota <span>*</span></p>
                                        <span class="icon-case"><i class="fa fa-user"></i></span>
                                        <input type="text" name="kota" id="kota" required="required" value="<?php echo $profil->kota ?>" disabled="disabled"/>
                                        <div class="validation"></div>
                                    </div>
                                    <div class="form-group inputan">
                                        <p>Nomor Telepon <span>*</span></p>
                                        <span class="icon-case"><i class="fa fa-phone"></i></span>
                                        <input type="text" name="notelp" id="notelp" required="required" value="<?php echo $profil->notelp ?>" disabled="disabled"/>
                                        <div class="validation"></div>
                                    </div>
                                    <div class="form-group inputan">
                                        <p>Alamat <span>*</span></p>
                                        <span class="icon-case"><i class="fa fa-comments-o"></i></span>
                                        <textarea name="alamat" id="alamat" rows="4" cols="55" required="required" disabled="disabled"><?php echo $profil->alamat ?></textarea>
                                        <div class="validation"></div>
                                    </div>
                                    <input type="submit" value="Perbarui Profil" style="display: none">
                                </div>
                                <span class="clearfix"></span>
                            </form>
                        </div>
                    </div>
                <?php } ?>

            </div>
            <span class="clearfix"></span>
        </div>
        <script>
            $(document).ready(function(){
                $('.edit').click(function(){
                    $('input, textarea').removeAttr('disabled');
                    $('input[type="submit"]').css('display', 'block');
                });
            });
        </script>
    </body>
</html>