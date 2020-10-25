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
                                <img class="text-center" id="uploadPreview" src="<?= base_url(); ?>/assets/img/foto/kop.png" style="width:870px" alt="IMG">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 text-right">
                                <p class="font-weight-bold text-padat"></p><br>
                                <p class=" text-padat">Yth,</p>
                            </div>
                            <div class="col text-left">
                                <p class="text-padat">Kepada</p>
                                <p class="font-weight-bold text-padat">Kepala Dinas Penanaman Modal, ESDM dan </p>
                                <p class="font-weight-bold text-padat">Transmigrasi Provinsi Gorontalo</p>
                                <p class="font-weight-bold text-padat">Ub. Bidang Perizinan </p>
                                <p class="text-padat">di-</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 text-right">
                            </div>
                            <div class="col text-left">
                                <p class=" text-padat">GORONTALO</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <p class=" text-padat">Dengan hormat, bersama ini disampaikan :</p>
                            </div>
                            <div class="col text-left">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-11">
                                <?php
                                if ($detail['status'] == 1) {
                                    $p = "REGIS BARU";
                                    $t = "Dimohon";
                                    $d = "Diberikan";
                                }
                                if ($detail['status'] == 2) {
                                    $p = "PERPANJANGAN";
                                    $t = "Dilayani";
                                    $d = "Diberikan Perpanjangan";
                                }
                                ?>
                                <?php
                                $jumlah_sekarang = count($count);
                                $nomor_surat = 46 + $jumlah_sekarang;
                                ?>
                                <p class="text-center text-ppadat font-weight-bold">PERTIMBANGAN PERMOHONAN <?= $p; ?></p>
                                <p class="text-center text-ppadat font-weight-bold">IZIN ANGKUTAN ORANG DALAM TRAYEK </p>
                                <p style="text-decoration: underline;" class="text-center text-ppadat font-weight-bold">ANGKUTAN ANTARKOTA DALAM PROPINSI (AKDP) </p>
                                <p class="text-center text-pppadat">Nomor : 552 / DISHUB-AJ / <?= $nomor_surat ?> / X / 2020</p>
                                <p class="text-justify text-pppadat">Memperhatikan Surat Kepala Bidang Perizinan Dinas Penanaman Modal, ESDM Dan Transmigrasi Provinsi Gorontalo perihal Permohonan Pertimbangan Teknis Untuk Izin Trayek AKDP, maka Berdasarkan Undang-Undang Nomor 22 Tahun 2009 Tentang Lalu Lintas Dan Angkutan Jalan dan Peraturan Pemerintah Nomor 74 Tahun 2014 tentang Angkutan Jalan serta Peraturan Menteri Perhubungan Nomor PM 15 Tahun 2019 tentang Penyelenggaraan Angkutan Orang Dengan Kendaraan Bermotor Umum Dalam Trayek dan Peraturan Gubernur Gorontalo Nomor 46 Tahun 2019 tentang Jaringan Trayek AKDP, sebagai bahan pertimbangan permohonan Izin Angkutan Orang Dalam Trayek Antar Kota Dalam Provinsi (AKDP) sebagai berikut :</p>
                            </div>
                        </div>

                        <div class="row font-weight-bold">
                            <div class="col-sm-3 textff">
                                Nama Pemohon
                            </div>
                            <div class="col-sm-8 textff">
                                : <?= $detail['nama_perusahaan'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 textff">

                            </div>
                            <div class="col-sm-8 textff ml-2 font-weight-bold" style="font-size: 14px; margin-top: -7px;">
                                <?= $detail['alamat'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 textff">
                                Tanggal Permohonan
                            </div>
                            <div class="col-sm-8 textff">
                                <?php
                                $originalDate = $detail['tgl_permohonan'];
                                $newDate = date("d F Y", strtotime($originalDate));
                                ?>
                                : <?= $newDate ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 textff">
                                Jenis Permohonan
                            </div>
                            <div class="col-sm-8 textff">
                                : <?= $jenis['nama'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 textff">
                                Trayek <?= $t ?>
                            </div>
                            <div class="col-sm-8 textff">
                                : <?= $trayek['trayek'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 textff">
                                Nomor Kendaraan
                            </div>
                            <div class="col-sm-8 textff">
                                : <?= $detail['nomor_kendaraan'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 textff">
                                Nama Pemilik sesuai STNKB
                            </div>
                            <div class="col-sm-8 textff">
                                : <?= $detail['nama_pemilik'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 textff">
                                Alamat pemilik
                            </div>
                            <div class="col-sm-8 textff">
                                : <?= $detail['alamat_pemilik'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 textff">
                                Jenis Kendaraan
                            </div>
                            <div class="col-sm-8 textff">
                                : <?= $detail['jenis_kendaraan'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 textff">
                                Tahun Pembuatan
                            </div>
                            <div class="col-sm-8 textff">
                                : <?= $detail['tahun_pembuatan'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 textff">
                                Nomor Pemeriksaan KIR
                            </div>
                            <div class="col-sm-8 textff">
                                : <?= $detail['nomor_kir'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 textff">
                                Kapasitas Angkutan
                            </div>
                            <div class="col-sm-8 textff">
                                : <?= $detail['kapasitas_angkutan'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 textff">
                                Uji Berkala berlaku
                            </div>
                            <div class="col-sm-8 textff">
                                <?php $originalDate = $detail['uji_berkala_berlaku'];
                                $newDate = date("d-m-Y", strtotime($originalDate)); ?>
                                : <?= $newDate ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 textff">
                                STNKB dan PKB berlaku
                            </div>
                            <div class="col-sm-8 textff">
                                <?php $originalDate = $detail['stnkb_berlaku'];
                                $newDate = date("d-m-Y", strtotime($originalDate)); ?>
                                <?php $originalDate = $detail['pkb_berlaku'];
                                $newDate1 = date("d-m-Y", strtotime($originalDate)); ?>
                                : <?= $newDate ?> / <?= $newDate1 ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 textff">
                                Iuran Jasa Raharja berlaku
                            </div>
                            <div class="col-sm-8 textff">
                                <?php $originalDate = $detail['jasa_raharja_berlaku'];
                                $newDate = date("d-m-Y", strtotime($originalDate)); ?>
                                : <?= $newDate ?>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-10">
                                <p class="text-justify text-pppadat">Sesuai persyaratan administrasi teknis dan khusus, <a class="font-weight-bold">Dapat <?= $d ?> Izin Trayek Angkutan</a> Antar Kota Dalam Provinsi (AKDP) dengan ketentuan sebagai berikut : </p>
                            </div>
                        </div>

                        <div class="row" style="margin-top:-27px;">
                            <div class="col-sm-3 textff">
                                - Kode/Trayek yang dilayani
                            </div>
                            <div class="col-sm-8 textff font-weight-bold">
                                : <?= $trayek['trayek'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 textff">
                                - Masa berlaku izin
                            </div>
                            <div class="col-sm-8 textff font-weight-bold">
                                <?php $originalDate = $detail['masa_berlaku'];
                                $newDate1 = date("d-m-Y", strtotime($originalDate)); ?>
                                : Sampai dengan <?= $newDate1 ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 textff">
                                Demikian Pertimbangan ini disampaikan untuk bahan proses lebih lanjut.
                            </div>
                            <div class="col textff">
                            </div>
                        </div>


                        <div class="row mt-4">
                            <div class="col-md-6 text-right">
                                <p class="font-weight-bold text-padat"></p><br>
                                <p class=" text-padat"></p>
                            </div>
                            <div class="col-sm-4 text-center">
                                <p class="text-padat ml-5 text-left">Ditetapkan di Gorontalo</p>
                                <?php $originalDate = $detail['tgl_approve'];
                                $newDate1 = date("d F Y", strtotime($originalDate)); ?>
                                <p class="text-padat ml-5 text-left">pada tanggal <?= $newDate1 ?></p>
                                <!-- <p class="text-padat ml-5 text-left">pada tanggal </p> -->
                                <p class="font-weight-bold text-padat text-center">an. KEPALA DINAS,</p>
                                <p class="font-weight-bold text-padat text-center">KEPALA BIDANG ANGKUTAN JALAN</p>
                                <!-- <img class="text-center" id="uploadPreview" src="<?= base_url(); ?>/assets/img/foto/qr.png" style="width:120px;" alt="IMG"> -->
                                <?= $qrq ?>
                                <p class="font-weight-bold text-padat text-center" style="text-decoration: underline;">ABD. KARIM RAUF, ST., M.Si</p>
                                <p class="text-padat text-center">NIP. 19770106 200212 1 007</p>
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