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

<div class="container">
    <!-- <div class="judul pl-4 wow fadeInLeft"><i class="fa fa-eye mr-2"></i> Detail data rekomendasi</div> -->

    <div class="row mb-5 wow fadeInRight">
        <div class="col-sm-12 mb-3 mb-md-0">
            <div class="px-4 pt-3">
                <div class="card-body text-dark">
                    <div class="container">
                        <div class="row mb-2" style="margin-left: 0px;">
                            <img class="text-center" id="uploadPreview" src="<?= base_url(); ?>/assets/img/foto/kopPohuwato.png" style="width:990px" alt="IMG">
                        </div>
                        <div class="text-center">
                            <?php
                            $no = count($count);
                            $no_surat = $no + 1;
                            ?>
                            <h1 class="text-dark font-weight-bold mt-2">REKOMENDASI IZIN TRAYEK</h1>
                            <h5 class="text-dark font-weight-bold" style="margin-top:-25px; margin-left:-370px;">Nomor : </h5>
                        </div>

                        <div class="row text-left">

                            <div class="col-sm-1 font-weight-bold">
                                I.
                            </div>
                            <div class="col-sm-11" style="margin-left:-70px;">
                                Dasar
                            </div>

                            <div class="col-sm-1 ">
                            </div>
                            <div class="col-sm-11" style="margin-left:-70px;">
                                1. Undang-Undang Nomor 22 Tahun 2009 Tentang Lalu Lintas Dan Angkutan Jalan;
                            </div>

                            <div class="col-sm-1 ">
                            </div>
                            <div class="col-sm-11" style="margin-left:-70px;">
                                2. Peraturan Pemerintah Nomor 74 Tahun 2014 tentang Angkutan Jalan;
                            </div>

                            <div class="col-sm-1 ">
                            </div>
                            <div class="col-sm-11" style="margin-left:-70px;">
                                3. Peraturan Menteri Perhubungan Nomor PM 15 Tahun 2019 tentang Penyelenggaraan Angkutan Orang
                            </div>

                            <div class="col-sm-1 ">
                            </div>
                            <div class="col-sm-11" style="margin-left:-54px;">
                                Dengan Kendaraan Bermotor Umum Dalam Trayek;
                            </div>

                            <div class="col-sm-1 ">
                            </div>
                            <div class="col-sm-11" style="margin-left:-70px;">
                                4. Peraturan Gubernur Gorontalo Nomor 46 Tahun 2019 tentang Jaringan Trayek AKDP;
                            </div>

                            <div class="col-sm-1 ">
                            </div>
                            <div class="col-sm-11" style="margin-left:-70px;">
                                5. Peraturan Daerah Kabupaten / Kota ..................
                            </div>

                            <div class="col-sm-1 ">
                            </div>
                            <div class="col-sm-11" style="margin-left:-70px;">
                                6. Peraturan Bupati / Walikota ................
                            </div>
                        </div>

                        <div class="row text-left mt-3x">

                            <div class="col-sm-1 font-weight-bold">
                                II.
                            </div>
                            <div class="col-sm-11" style="margin-left:-70px;">
                                Dengan Kendaraan Bermotor Umum Dalam Trayek;
                            </div>

                            <div class="col-sm-1 ">
                            </div>
                            <div class="col-sm-3" style="margin-left:-70px;">
                                - Tanggal Permohonan
                            </div>
                            <div class="col-sm-1" style="margin-left:-70px;">
                                :
                            </div>
                            <div class="col-sm-7" style="margin-left:-70px;">
                                ....
                            </div>

                            <!-- <div class="col-sm-1 ">
                            </div>
                            <div class="col-sm-3" style="margin-left:-70px;">
                                - Nama Pemohon Badan Usaha
                            </div>
                            <div class="col-sm-1" style="margin-left:-70px;">
                                :
                            </div>
                            <div class="col-sm-7" style="margin-left:-70px;">
                                ....
                            </div>

                            <div class="col-sm-1 ">
                            </div>
                            <div class="col-sm-3" style="margin-left:-70px;">
                                - Nama Direktur Badan Usaha
                            </div>
                            <div class="col-sm-1" style="margin-left:-70px;">
                                :
                            </div>
                            <div class="col-sm-7" style="margin-left:-70px;">
                                ....
                            </div>

                            <div class="col-sm-1 ">
                            </div>
                            <div class="col-sm-3" style="margin-left:-70px;">
                                - Alamat Pemohon
                            </div>
                            <div class="col-sm-1" style="margin-left:-70px;">
                                :
                            </div>
                            <div class="col-sm-7" style="margin-left:-70px;">
                                ....
                            </div> -->
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                Memperhatikan
                            </div>
                            <div class="col-sm-1">
                                :
                            </div>
                            <div class="col-sm-9">
                                Permohonan dari Pemilik Kendaraan Tanggal <b class="font-weight-bold">
                                    <?php
                                    $originalDate = $permohonan['created_at'];
                                    $newDate = date("d F Y", strtotime($originalDate));
                                    ?>
                                    <?= $newDate ?></b> Tentang Pertimbangan Pengoprasian Kenderaan Angkutan Penumpang <b class="font-weight-bold"> A/N <?= $permohonan['nama_pemilik'] ?></b>
                            </div>
                        </div>

                        <div class="text-center">
                            <h5 class="text-dark font-weight-bold mt-3" style="text-decoration:underline;">MEMBERIKAN REKOMENDASI</h5>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">
                                PERTAMA
                            </div>
                            <div class="col-sm-1">
                                :
                            </div>
                            <div class="col-sm-2">
                                Nama Koperasi
                            </div>
                            <div class="col-sm-7 font-weight-bold">
                                : <?= $koperasi['nama_perusahaan'] ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">

                            </div>
                            <div class="col-sm-1">

                            </div>
                            <div class="col-sm-2">
                                Alamat
                            </div>
                            <div class="col-sm-7">
                                : <?= $koperasi['alamat'] ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">

                            </div>
                            <div class="col-sm-1">

                            </div>
                            <div class="col-sm-2">
                                No./Tggl Akta
                            </div>
                            <div class="col-sm-7">
                                : -
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-1">
                            </div>

                            <div class="col-sm-8 font-weight-bold">
                                Selaku Pemilik Kenderaan Bermotor dengan identitas :
                            </div>
                            <div class="col-sm-1">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">

                            </div>
                            <div class="col-sm-1">

                            </div>
                            <div class="col-sm-2">
                                Nama Pemilik
                            </div>
                            <div class="col-sm-7">
                                : <?= $permohonan['nama_pemilik'] ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">

                            </div>
                            <div class="col-sm-1">

                            </div>
                            <div class="col-sm-2">
                                Alamat Pemilik
                            </div>
                            <div class="col-sm-7">
                                : <?= $permohonan['alamat_pemilik'] ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">

                            </div>
                            <div class="col-sm-1">

                            </div>
                            <div class="col-sm-2">
                                No. Kenderaan
                            </div>
                            <div class="col-sm-7">
                                : <?= $permohonan['nomor_kendaraan'] ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">

                            </div>
                            <div class="col-sm-1">

                            </div>
                            <div class="col-sm-2">
                                Jenis Kenderaan
                            </div>
                            <div class="col-sm-7">
                                : <?= $permohonan['jenis_kendaraan'] ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">

                            </div>
                            <div class="col-sm-1">

                            </div>
                            <div class="col-sm-2">
                                Merk/Type
                            </div>
                            <div class="col-sm-7">
                                : <?= $permohonan['merk'] ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">

                            </div>
                            <div class="col-sm-1">

                            </div>
                            <div class="col-sm-2">
                                Tahun Pembuatan
                            </div>
                            <div class="col-sm-7">
                                : <?= $permohonan['tahun_pembuatan'] ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">

                            </div>
                            <div class="col-sm-1">

                            </div>
                            <div class="col-sm-2">
                                Nomor Chasis
                            </div>
                            <div class="col-sm-7">
                                : <?= $permohonan['nomor_chasis'] ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">

                            </div>
                            <div class="col-sm-1">

                            </div>
                            <div class="col-sm-2">
                                Nomor Mesin
                            </div>
                            <div class="col-sm-7">
                                : <?= $permohonan['nomor_mesin'] ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">

                            </div>
                            <div class="col-sm-1">

                            </div>
                            <div class="col-sm-2">
                                Nomor Regis PKB
                            </div>
                            <div class="col-sm-7">
                                : <?= $permohonan['nomor_regis_pkb'] ?>
                            </div>
                        </div>

                        <div class="text-center">
                            <h5 class="text-dark font-weight-bold mt-3" style="text-decoration:underline;">Untuk digunakan Melayani Trayek </h5>
                        </div>

                        <div class="row mt-4">
                            <div class="col-sm-2">

                            </div>
                            <div class="col-sm-8">
                                <div class="text-center text-dark" style="margin-top:-20px;">
                                    <?= $permohonan['trayek'] ?>
                                </div>
                            </div>
                            <div class="col-sm-2">

                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-sm-2">
                                KEDUA
                            </div>
                            <div class="col-sm-1">
                                :
                            </div>
                            <div class="col-sm-9">
                                Dalam Pelaksanaan pengoprasian Kenderaan agar mentaati segala ketentuan dalam berlalu lintas.
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">
                                KETIGA
                            </div>
                            <div class="col-sm-1">
                                :
                            </div>
                            <div class="col-sm-9">
                                Mewajibkan kepada pengusaha / pemilik menyerahkan dan melengkapi persyaratan-persyaratan.
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">
                                KEEMPAT
                            </div>
                            <div class="col-sm-1">
                                :
                            </div>
                            <div class="col-sm-9">
                                Mewajibkan kepada pengusaha / pemilik menyerahkan dan melengkapi persyaratan-persyaratan.
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-sm-7">
                            </div>
                            <div class="col-sm-5 text-center">
                                <?php
                                $originalDate = $permohonan['tgl_approve'];
                                $newDate = date("d F Y", strtotime($originalDate));
                                ?>
                                Marisa, <?= $newDate ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-7">
                            </div>
                            <div class="col-sm-5 text-center font-weight-bold">
                                a.n KEPALA DINAS
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-7">
                            </div>
                            <div class="col-sm-5 text-center font-weight-bold">
                                ub. Sekretaris
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-sm-7">
                            </div>
                            <div class="col-sm-5 text-center font-weight-bold" style=" margin-bottom:50px;">
                                KABID LALU LINTAS DAN ANGKUTAN
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-sm-7">
                            </div>
                            <div class="col-sm-5 text-center font-weight-bold" style="text-decoration:underline;">
                                HERDI POHA,SE
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-7">
                            </div>
                            <div class="col-sm-5 text-center" style="margin-top: -5px;">
                                NIP. 19750918 200312 1 008
                            </div>
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