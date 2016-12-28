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
            $(document).ready(function() {
                $('button.increase1').click(function(i, oldva) {
                    $('input#jumlah').val(function(i, oldval) {
                        return parseInt(oldval, 10) + 1;
                    });
                });
            });
        </script>
    </head>
    <body>
        <?php error_reporting(0); ?>
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
                                            echo $this->session->userdata('username') . "</a></li>";
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
                                <li class="drop"><a href="<?php echo base_url('index.php') ?>">Halaman Depan</a></li>
                                <?php
                                if ($this->session->userdata('status') == "login") {
                                    echo "<li><a href ='";
                                    echo base_url('index.php/Controller_SewaAlatBayi/index');
                                    echo "'>Sewa</a><li><a href ='";
                                    echo base_url('index.php/Controller_Profil/index');
                                    echo "'>Profil</a></li><li><a href ='";
                                    echo base_url('index.php/Controller_Transaksi/index');
                                    echo "'>Transaksi</a></li><li><a href ='";
                                    echo base_url('index.php/Controller_Pemberitahuan/index');
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
                                                                <?php foreach ($nama as $data) { ?>
                                                                    <div class="image-holder" >
                                                                        <img alt="" src="<?php echo base_url() . 'uploads/thumbs/' . $data->foto; ?>"/>
                                                                        <p></p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-sm-8">
                                                                <div class="single-product-content">
                                                                    <div class="product-price-section">
                                                                        <div class="left-section">
                                                                            <p style="font-weight: bold">Nama Alat :<?php echo $data->nama_alat; ?></p>
                                                                            <p style="font-weight: bold">Tersedia :  <?php echo $data->jumlah; ?></p>
                                                                        </div>
                                                                        <div class="right-section">
                                                                            <h1 class="price"><?php echo "Rp. " . $data->harga . " / Hari"; ?></h1>
                                                                            <p></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="bying-section">
                                                                        <form action="<?php echo base_url('index.php/Controller_Keranjang/prosesKeranjang/'.$data->jumlah) ?>" method="POST">
                                                                            <div class="left-section">
                                                                                <span>Tanggal mulai sewa:</span>
                                                                                <input type="text" id="start_date" name="date_start"  style="width: 20%" required="required"/>
                                                                                <span style="padding-left: 10px">Sampai:</span>
                                                                                <input type="text" id="end_date" name="date_end"  style="width: 20%" required="required"/>
                                                                                <span style="padding-left: 10px">Jumlah:</span>
                                                                                <input type="number" style="width: 50px;height: 50px;text-align: center;font-size: 20px;border: 1px solid #e7e7e7" min="0" max="<?php echo $data->jumlah ?>" id="jumlah" name="jumlah" value="0" required="required"/>
                                                                                <div class="quantity-buttons">
                                                                                </div>

                                                                            </div>
                                                                            <div class="left-section" style="margin-left: 15px">

                                                                                <ul class="product-post-list">
                                                                                    <li><input type="submit" class="btn btn-info" style="padding: 10px 20px" value="Tambah Ke Keranjang"></li>
                                                                                </ul>

                                                                                <input type="hidden" name="nama_alat" value="<?php echo $data->nama_alat ?>">
                                                                                <input type="hidden" name="harga" value="<?php echo $data->harga ?>">
                                                                                <input type="hidden" name="hidden" value="<?php echo $this->uri->segment(3); ?>">
                                                                                <input type="hidden" name="id_user" value="<?php echo $data->id_user; ?>">
                                                                                <div class="quantity-buttons">
                                                                                </div>
                                                                            </div>

                                                                        </form>
                                                                    </div>
                                                                    <div class="vertical-tabs-box triggerAnimation animated">
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
                                                    <input type="submit" value="Komentar" style="height:30px;width:75px;border: 1px solid transparent">
                                                </span>
                                            </form>
                                            <?php foreach ($user as $data) { ?>
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
        <?php
        foreach ($tanggal as $tanggal) {
            $date [] = $tanggal->tanggal_mulai;
            $date1 [] = $tanggal->tanggal_akhir;
        }
        for ($i = 0; $i < count($date); $i++) {
            $begin[] = new DateTime($date[$i]);
            $end [] = new DateTime($date1[$i]);
        }
        $data = [];
        for ($j = 0; $j < count($date); $j++) {
            for ($i = $begin[$j]; $begin[$j] <= $end[$j]; $i->modify('+1 day')) {
                $data [] = $i->format("j-n-Y");
            }
        }
        ?>

        <script>

            // To set mindate in enddate
            function unavailable(date) {
                dmy = date.getDate() + "-" + (date.getMonth() + 1) + "-" + date.getFullYear();
                if ($.inArray(dmy, unavailableDates) == -1) {
                    return [true, ""];
                } else {
                    return [false, "", "Unavailable"];
                }
            }

            function customRange(input)
            {
                return {
                    minDate: (input.id == "end_date" ? $("#start_date").datepicker("getDate") : new Date())
                };
            }
            var unavailableDates = <?php echo json_encode($data); ?>;
            var unavailableDateObjects = convertDisabledFieldToDateObject(unavailableDates);

// To set maxdate in startdate
            function customRangeStart(input)
            {
                return {
                    maxDate: (input.id == "start_date" ? $("#end_date").datepicker("getDate") : null)
                };
            }

            $(document).ready(function() {
                $('#start_date').datepicker(
                        {
                            beforeShow: customRangeStart,
                            beforeShowDay: unavailable,
                            minDate: 0,
                            dateFormat: "yy-mm-dd",
                            changeYear: true,
                            onSelect: function() {
                                triggerOnStartSelect();
                            }
                        });
                $('#end_date').datepicker(
                        {
                            beforeShow: customRange,
                            beforeShowDay: unavailable,
                            dateFormat: "yy-mm-dd",
                            changeYear: true,
                        });

            });

//Convert String Date List to Date object List
            function convertDisabledFieldToDateObject(diabledList) {
                var dateList = [];
                $.each(diabledList, function(i, singleDate) {
                    var parsedDate = $.datepicker.parseDate("dd-mm-yy", singleDate);
                    dateList.push(parsedDate);
                });
                //Sort date if the diabled date sets are in jumbled order
                dateList.sort(function(date1, date2) {
                    return date1 - date2;
                });
                return dateList;
            }

//Trigger upon change event of either start or end date
            function triggerOnStartSelect() {
                var startDate = new Date($("#start_date").datepicker("getDate"));
                var endDate = new Date($("#end_date").datepicker("getDate"));
                //if required you could reset all of the default setting here //
                //And can also validate the date objects 

                //Holds to be set maxdate of end_date datepicker
                var tempEndDate = null;
                $.each(unavailableDateObjects, function(i, disabledRangeDate) {
                    if (startDate < disabledRangeDate) {
                        tempEndDate = new Date(disabledRangeDate);
                        //subtracts one day from the nearest disabled range date 
                        tempEndDate.setDate(tempEndDate.getDate() - 1);
                        return false;
                    }
                });
                $("#end_date").datepicker("option", "maxDate", tempEndDate);
            }
        </script>
    </body>
</html>