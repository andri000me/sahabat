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
                            <img class="text-center" id="uploadPreview" src="<?= base_url(); ?>/assets/img/foto/kopPohuwato.png" style="width:890px" alt="IMG">
                        </div>
                        <div class="text-center" style="margin-left: -90px;">
                            <h4 class="text-dark font-weight-bold mt-2">REKOMENDASI ASAL DAN ATAU TUJUAN TRAYEK</h4>
                            <h4 class="text-dark font-weight-bold" style="margin-top:-25px; text-decoration:underline;">ANGKUTAN ANTARKOTA DALAM PROVINSI (AKDP)</h4>
                            <h5 class="text-dark font-weight-bold" style="margin-top:-20px; margin-left:-370px;">Nomor : </h5>
                        </div>
                        <div class="mt-5">
                            <div class="">
                                <div class="row text-left">

                                    <div class="col-sm-1 font-weight-bold">
                                        I.
                                    </div>
                                    <div class="col-sm-11" style="margin-left:-60px;">
                                        Dasar
                                    </div>

                                    <div class="col-sm-1 ">
                                    </div>
                                    <div class="col-sm-11" style="margin-left:-60px;">
                                        1. Undang-Undang Nomor 22 Tahun 2009 Tentang Lalu Lintas Dan Angkutan Jalan;
                                    </div>

                                    <div class="col-sm-1 ">
                                    </div>
                                    <div class="col-sm-11" style="margin-left:-60px;">
                                        2. Peraturan Pemerintah Nomor 74 Tahun 2014 tentang Angkutan Jalan;
                                    </div>

                                    <div class="col-sm-1 ">
                                    </div>
                                    <div class="col-sm-11" style="margin-left:-60px;">
                                        3. Peraturan Menteri Perhubungan Nomor PM 15 Tahun 2019 tentang Penyelenggaraan Angkutan Orang
                                    </div>

                                    <div class="col-sm-1 ">
                                    </div>
                                    <div class="col-sm-11" style="margin-left:-44px;">
                                        Dengan Kendaraan Bermotor Umum Dalam Trayek;
                                    </div>

                                    <div class="col-sm-1 ">
                                    </div>
                                    <div class="col-sm-11" style="margin-left:-60px;">
                                        4. Peraturan Gubernur Gorontalo Nomor 46 Tahun 2019 tentang Jaringan Trayek AKDP;
                                    </div>

                                    <div class="col-sm-1 ">
                                    </div>
                                    <div class="col-sm-11" style="margin-left:-60px;">
                                        5. Peraturan Daerah Kabupaten / Kota ..................
                                    </div>

                                    <div class="col-sm-1 ">
                                    </div>
                                    <div class="col-sm-11" style="margin-left:-60px;">
                                        6. Peraturan Bupati / Walikota ................
                                    </div>
                                </div>

                                <div class="row text-left mt-3">

                                    <div class="col-sm-1 font-weight-bold">
                                        II.
                                    </div>
                                    <div class="col-sm-11" style="margin-left:-60px;">
                                        Memperhatikan permohonan sebagai berikut :
                                    </div>

                                </div>

                                <div class="row text-left">

                                    <div class="col-sm-4" style="margin-left:25px;">
                                        - Tanggal Permohonan
                                    </div>
                                    <div class="col-sm-1" style="margin-left:-25px;">
                                        :
                                    </div>
                                    <div class="col-sm-7" style="margin-left:-55px;">
                                        <?= $permohonan['created_at'] ?>
                                    </div>

                                    <div class="col-sm-4" style="margin-left:25px;">
                                        - Nama Pemohon Badan Usaha
                                    </div>
                                    <div class="col-sm-1" style="margin-left:-25px;">
                                        :
                                    </div>
                                    <div class="col-sm-7" style="margin-left:-55px;">
                                        <?= $koperasi['nama_perusahaan'] ?>
                                    </div>

                                    <div class="col-sm-4" style="margin-left:25px;">
                                        - Nama Direktur Badan Usaha
                                    </div>
                                    <div class="col-sm-1" style="margin-left:-25px;">
                                        :
                                    </div>
                                    <div class="col-sm-7" style="margin-left:-55px;">
                                        <?= $koperasi['nama_direktur'] ?>
                                    </div>

                                    <div class="col-sm-4" style="margin-left:25px;">
                                        - Alamat Pemohon
                                    </div>
                                    <div class="col-sm-1" style="margin-left:-25px;">
                                        :
                                    </div>
                                    <div class="col-sm-7" style="margin-left:-55px;">
                                        <?= $koperasi['alamat'] ?>
                                    </div>

                                </div>
                            </div>

                            <div class="text-center" style="margin-left: -90px;">
                                <h5 class="text-dark mt-4">MENERANGKAN</h5>
                            </div>

                            <div class="mt-4">
                                <div class="row">
                                    <div class="col-sm-2">
                                        PERTAMA
                                    </div>
                                    <div class="col-sm-1">
                                        :
                                    </div>
                                    <div class="col-sm-9" style="margin-left: -70px;">
                                        Memberikan Rekomendasi Kepada :
                                    </div>
                                </div>

                                <div class="row" style="margin-left: 170px;">
                                    <div class="col-sm-4">
                                        - Nama Badan Usaha
                                    </div>
                                    <div class="col-sm-1">
                                        :
                                    </div>
                                    <div class="col-sm-7" style="margin-left: -50px;">
                                        ...
                                    </div>

                                    <div class="col-sm-4">
                                        - Nama Sesuai STNKB
                                    </div>
                                    <div class="col-sm-1">
                                        :
                                    </div>
                                    <div class="col-sm-7" style="margin-left: -50px;">
                                        ...
                                    </div>

                                    <div class="col-sm-4">
                                        - Nomor Kendaraan
                                    </div>
                                    <div class="col-sm-1">
                                        :
                                    </div>
                                    <div class="col-sm-7" style="margin-left: -50px;">
                                        ...
                                    </div>

                                    <div class="col-sm-4">
                                        - Jenis Kendaraan
                                    </div>
                                    <div class="col-sm-1">
                                        :
                                    </div>
                                    <div class="col-sm-7" style="margin-left: -50px;">
                                        ...
                                    </div>

                                    <div class="col-sm-4">
                                        - Tahun Pembuatan
                                    </div>
                                    <div class="col-sm-1">
                                        :
                                    </div>
                                    <div class="col-sm-7" style="margin-left: -50px;">
                                        ...
                                    </div>

                                    <div class="col-sm-4">
                                        - Nomor Pemeriksaan KIR
                                    </div>
                                    <div class="col-sm-1">
                                        :
                                    </div>
                                    <div class="col-sm-7" style="margin-left: -50px;">
                                        ...
                                    </div>

                                    <div class="col-sm-4">
                                        - Nomor Rangka
                                    </div>
                                    <div class="col-sm-1">
                                        :
                                    </div>
                                    <div class="col-sm-7" style="margin-left: -50px;">
                                        ...
                                    </div>

                                    <div class="col-sm-4">
                                        - Nomor Mesin
                                    </div>
                                    <div class="col-sm-1">
                                        :
                                    </div>
                                    <div class="col-sm-7" style="margin-left: -50px;">
                                        ...
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-sm-2">
                                        KEDUA
                                    </div>
                                    <div class="col-sm-1">
                                        :
                                    </div>
                                    <div class="col-sm-9" style="margin-left: -70px;">
                                        Dalam pengoperasian kendaraan agar mentaati segala ketentuan dalam berlalu lintas.
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-sm-2">
                                        KETIGA
                                    </div>
                                    <div class="col-sm-1">
                                        :
                                    </div>
                                    <div class="col-sm-9" style="margin-left: -70px;">
                                        Persetujuan pelayanan trayek ini dapat diberikan dalam jangka waktu 1 (satu) bulan terhitung sejak tanggal diterbitkan.
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-sm-2">
                                        KEEMPAT
                                    </div>
                                    <div class="col-sm-1">
                                        :
                                    </div>
                                    <div class="col-sm-9" style="margin-left: -70px;">
                                        Selanjutnya pemohon melakukan permohonan Izin Penyelenggaraan Angkutan Orang Dalam Trayek AKDP di kantor PTSP Provinsi Gorontalo.
                                    </div>
                                </div>

                                <div class="mt-2">
                                    Demikian Rekomendasi ini diberikan untuk bahan proses selanjutnya.
                                </div>

                                <div class="row mt-5">
                                    <div class="col-sm-7">

                                    </div>
                                    <div class="col-sm-2">
                                        Dikeluarkan di
                                    </div>
                                    <div class="col-sm-1" style="margin-left: -50px;">
                                        :
                                    </div>
                                    <div class="col-sm-2" style="margin-left: -70px;">
                                        Gorontalo
                                    </div>

                                    <div class="col-sm-7">

                                    </div>
                                    <div class="col-sm-2">
                                        Pada tanggal
                                    </div>
                                    <div class="col-sm-1" style="margin-left: -50px;">
                                        :
                                    </div>
                                    <div class="col-sm-2" style="margin-left: -70px;">
                                        12 Agustus 2020
                                    </div>
                                </div>

                                <div class="row text-center mt-3">
                                    <div class="col-sm-7">

                                    </div>
                                    <div class="col-sm-4">
                                        an. Kepala Dinas
                                    </div>
                                    <div class="col-sm-7">

                                    </div>
                                    <div class="col-sm-4">
                                        Kabid Lalulintas dan Angkutan Jalan
                                    </div>
                                </div>
                                <div class="row text-center" style="margin-top: 90px;">
                                    <div class="col-sm-7">

                                    </div>
                                    <div class="col-sm-4" style="text-decoration: underline;">
                                        Abd. Karim A Rauf
                                    </div>
                                    <div class="col-sm-7">

                                    </div>
                                    <div class="col-sm-4">
                                        NIP. 12331231 12312123
                                    </div>
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