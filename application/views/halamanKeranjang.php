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
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/font-awesome.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/keranjang.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/animate.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/style.css" media="screen">

        <script type="text/javascript" src="<?php echo base_url() ?>/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>/js/keranjang.js"></script>
        <script type="text/javascript">
            // To conform clear all data in cart.
            function clear_all() {
                var result = confirm('Are you sure want to clear all bookings?');

                if (result) {
                    window.location = "<?php echo base_url('index.php/Controller_Keranjang/prosesHapusAlatBayi/all'); ?>";
                } else {
                    return false; // cancel button
                }
            }
        </script>
    </head>
    <body style="position: relative;border: 1px solid transparent;min-height: 100%">
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
                                <li><a href="<?php echo base_url('index.php') ?>">Halaman Depan</a></li>



                                <?php
                                if ($this->session->userdata('status') == "login") {
                                    echo "<li><a href ='";
                                    echo base_url('index.php/Controller_SewaAlatBayi/index');
                                    echo "'>Sewa</a>";
                                    ?>
                                <?php if ($this->session->userdata('username') == "admin") { ?>
                                        <li class="drop"><a href="<?php echo base_url('index.php/Controller_Pengguna/index'); ?>">Pengguna</a>
                                        </li>
    <?php } else { ?>

                                        <li class="drop"><a href="<?php echo base_url('index.php/Controller_Pengguna/menampilkanHalamanProfil'); ?>">Profil</a>
                                        </li><?php } ?>
                                <?php
                                    echo "</li><li><a href ='";
                                    echo base_url('index.php/Transaksi/index');
                                    echo "'>Transaksi</a></li><li><a href ='";
                                    echo base_url('index.php/Pemberitahuan/index');
                                    echo "'>Pemberitahuan</a></li>";
                                } else {
                                    echo "<li><a href='";
                                    echo base_url('index.php/Controller_Masuk/index');
                                    echo "'>Masuk</a></li><li><a href='";
                                    echo base_url('index.php/Controller_Daftar/index');
                                    echo "'>Daftar</a></li>";
                                }
                                ?>

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
                                    <div class="table-container">
                                        <div id="text"> 
                                            <?php
                                            $cart_check = $this->cart->contents();

                                            // If cart is empty, this will show below message.
                                            if (empty($cart_check)) {
                                                echo '<h4 style="text-align:center;opacity: 0.6">' . 'halaman keranjang kosong, pilih alat bayi terlebih dahulu' . '<h4>';
                                            } else {
                                                ?> 
                                            </div>
                                            <table class="table table-filter">
                                                <?php if ($cart = $this->cart->contents()) { ?>
                                                    <thead>
                                                        <tr>
                                                            <td width="5%"><h4>Jumlah</h4></td>
                                                            <td width="20%"><h4>Nama Alat Bayi</h4></td>
                                                            <td width="15%"><h4>Mulai sewa</h4></td>
                                                            <td width="15%"><h4>Akhir sewa</h4></td>
                                                            <td width="20%"><h4>Harga</h4></td>
                                                            <td width="20%"><h4>Total</h4></td>
                                                            <td width="5%"><h4>Delete</h4></td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $total = 0;
                                                        $grand_total = 0;
                                                        foreach ($cart as $keranjang) {
                                                            ?>

                                                            <tr data-status="pagado">
                                                                <td>
                                                                    <?php echo $keranjang['qty'] ?>
                                                                </td>
                                                                <td>
                                                                    <div class="media">
                                                                        <div class="media-body">

                                                                            <h4 class="title">
                                                                                <?php echo $keranjang['name']; ?>
                                                                            </h4>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><?php echo $keranjang['start']; ?></td>
                                                                <td><?php echo $keranjang['end']; ?></td>
                                                                <td>Rp. <?php echo $keranjang['price']; ?></td>
                                                                <td>Rp <?php
                                                                    $total = ($keranjang['lama'] * $keranjang['price'] * $keranjang['qty']);
                                                                    echo $total;
                                                                    ?></td>
                                                                <td>
                                                                    <a href="<?php echo base_url('index.php/Controller_Keranjang/prosesHapusAlatBayi/' . $keranjang['rowid']) ?>"><i class="fa fa-trash-o" style="font-size: 23px"></i></a>
                                                                </td>
                                                            </tr>
                                                            <?php $grand_total += $total ?>
                                                        <?php } ?>
                                                        <tr><p class="pull-right" style="font-weight: bold;font-size: 25px">Total Harga: Rp. <?php echo $grand_total ?></p></tr>

                                                    </tbody>
                                                <?php } ?>
                                            </table>

                                            <a href="<?php echo base_url('index.php/Transaksi/prosesSewa') ?>" class="btn btn-filter pull-right"  style="background:#2f3133;color: white;font-weight: bold">Sewa sekarang</a>
                                            <div class="" style="margin-bottom: 20px"><a onclick="clear_all()"><i class="fa fa-trash-o" style="margin-right: 10px;font-size:23px"></i>Hapus semua keranjang</a></div>

                                        <?php } ?>
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
            <footer style="position: absolute;bottom:0;left:0;right:0;">
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