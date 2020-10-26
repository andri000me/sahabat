<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sahabat</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>/assets/img/favicon.png" rel="icon">
    <link href="<?= base_url() ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/venobox/venobox.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/css/datepicker.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/breadcumb.css">

    <!-- mdb -->
    <link href="<?= base_url() ?>/mdb/pro/css/mdb.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/mdb/pro/css/style.css" rel="stylesheet">

    <!-- datatables -->
    <link href="<?= base_url() ?>/mdb/pro/css/addons/datatables.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/mdb/pro/css/addons/datatables-select.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/mdb/pro/css/addons/dataTables.bootstrap4.min.css" rel="stylesheet">


</head>

<div class="container pl-5">
    <!-- <div class="judul pl-4 wow fadeInLeft"><i class="fa fa-eye mr-2"></i> Detail data rekomendasi</div> -->

    <div class="row mb-5 wow fadeInRight">
        <div class="col-sm-12 mb-3 mb-md-0">
            <div class="px-4 pt-3">
                <div class="card-body">
                    <div class="container">
                        <div class="row mb-2">
                            <div class="col-md-11">
                                <img class="text-center" id="uploadPreview" src="<?= base_url(); ?>/assets/img/foto/kop KP.png" style="width:900px" alt="IMG">
                                <table width="100%" class="ml-5" style="margin-top:-300px;">
                                    <tr>
                                        <td rowspan="4" width="10%">
                                            <?= $qr ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="font-size:20px;" class="text-dark">Nomor Registrasi</td>
                                        <td style="font-size:20px;" class="text-dark">:</td>
                                        <td style="font-size:20px;" class="font-weight-bold text-dark"><?= $detail['kode_booking'] ?></td>
                                    </tr>
                                    <tr>
                                        <td style="font-size:20px;" class="text-dark">Nama Perusahaan</td>
                                        <td style="font-size:20px;" class="text-dark">:</td>
                                        <td style="font-size:20px;" class="font-weight-bold text-dark"><?= $detail['nama_perusahaan'] ?></td>
                                    </tr>
                                    <tr>
                                        <td style="font-size:20px;" class="text-dark">Masa Berlaku</td>
                                        <td style="font-size:20px;" class="text-dark">:</td>
                                        <td style="font-size:20px;" class="font-weight-bold text-dark">
                                            <?php $originalDate = $detail['pkb_berlaku'];
                                            $newDate1 = date("d F Y", strtotime($originalDate)); ?>
                                            <?= $newDate1 ?>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url() ?>/assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?= base_url() ?>/assets/vendor/php-email-form/validate.js"></script>
<script src="<?= base_url() ?>/assets/vendor/wow/wow.min.js"></script>
<script src="<?= base_url() ?>/assets/vendor/venobox/venobox.min.js"></script>
<script src="<?= base_url() ?>/assets/vendor/superfish/superfish.min.js"></script>
<script src="<?= base_url() ?>/assets/vendor/hoverIntent/hoverIntent.js"></script>

<!-- Template Main JS File -->
<script src="<?= base_url() ?>/assets/js/mainl.js"></script>

<!-- date picker -->
<script type="text/javascript" src="<?= base_url(); ?>/assets/js/datepicker.js"></script>

<!-- mdb -->
<script type="text/javascript" src="<?= base_url() ?>/mdb/pro/js/mdb.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/mdb/pro/js/popper.min.js"></script>

<!-- datatables -->
<script type="text/javascript" src="<?= base_url() ?>/mdb/pro/js/addons/datatables.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?= base_url() ?>/mdb/pro/js/addons/datatables-select.min.js" type="text/javascript"></script>