<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container-fluid mt-4">

    <div class="section-headers">
        <h3 class="section-titles mb-3"><img src="<?= base_url(); ?>/assets/img/icon/dishub.png" style="width:60px;" alt="IMG"></h3>
        <h3 class="section-titles">Dokumen Permohonan Pertimbangan Teknis </h3>
        <h3 class="section-titles">Izin Penyelenggaraan Angkutan Orang Dalam Trayek AKDP</h3>
        <?php
        if ($step2['status'] == 1) {
            $tatus = "Pengurusan Baru";
        }
        if ($step2['status'] == 2) {
            $tatus = "Perpanjangan";
        }
        ?>
        <h3 class="section-titles text-danger">(<?= $tatus ?>)</h3>
    </div>

    <!-- step -->
    <div class="row" style="margin-bottom:-30px;">
        <div class="col-md-12">

            <ul class="stepper stepper-horizontal">

                <?php
                if ($step2['img_surat_permohonan']  && $step2['tgl_permohonan'] && $step2['nama_pemohon']) {
                    $complete = "completed";
                } else {
                    $complete = "";
                }
                ?>
                <li class="<?= $complete ?> wow fadeInLeft">
                    <a href="/rekomendasi/step11/<?= $step2['kode_booking'] ?>">
                        <span class="circle">1</span>
                        <span class="label">Syarat 1</span>
                    </a>
                </li>

                <li class="warning wow fadeInLeft">
                    <a href="#">
                        <span class="circle">2</span>
                        <span class="label">Syarat 2</span>
                    </a>
                </li>
                <?php
                if ($step2['img_stnkb_pkb'] && $step2['nomor_kendaraan'] && $step2['nama_pemilik'] && $step2['alamat_pemilik'] && $step2['jenis_kendaraan'] && $step2['tahun_pembuatan'] && $step2['stnkb_berlaku'] && $step2['pkb_berlaku']) {
                    $complete = "completed";
                } else {
                    $complete = "";
                }
                ?>
                <li class="<?= $complete ?> wow fadeInLeft">
                    <a href="/rekomendasi/step3/<?= $step2['kode_booking'] ?>"">
                        <span class=" circle">3</span>
                        <span class="label">Syarat 3</span>
                    </a>
                </li>

                <?php
                if ($step2['img_kir'] && $step2['nomor_kir'] && $step2['kapasitas_angkutan'] && $step2['uji_berkala_berlaku']) {
                    $complete = "completed";
                } else {
                    $complete = "";
                }
                ?>
                <li class="<?= $complete ?> wow fadeInLeft">
                    <a href="/rekomendasi/step4/<?= $step2['kode_booking'] ?>"">
                            <span class=" circle">4</span>
                        <span class="label">Syarat 4</span>
                    </a>
                </li>

                <?php
                if ($step2['img_jasa_raharja'] && $step2['jasa_raharja_berlaku']) {
                    $complete = "completed";
                } else {
                    $complete = "";
                }
                ?>
                <li class="<?= $complete ?> wow fadeInLeft">
                    <a href="/rekomendasi/step5/<?= $step2['kode_booking'] ?>"">
                        <span class=" circle">5</span>
                        <span class="label">Syarat 5</span>
                    </a>
                </li>

                <?php
                if ($step2['img_surat_pernyataan']) {
                    $complete = "completed";
                } else {
                    $complete = "";
                }
                ?>
                <li class="<?= $complete ?> wow fadeInLeft">
                    <a href="/rekomendasi/step6/<?= $step2['kode_booking'] ?>"">
                        <span class=" circle">6</span>
                        <span class="label">Syarat 6</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <div class="row mb-5 wow fadeInRight">
        <div class="col-sm-12 mb-3 mb-md-0">
            <div class="cards px-4 pt-3">
                <div class="card-body">
                    <h4 class="text-dark font-weight-bold card-title">Syarat 2 - Rekomendasi Asal dan Tujuan Trayek</h4>
                    <p class="card-text">Isi data sesuai dengan dokumen yang di upload</p>

                    <!-- Form -->
                    <form method="POST" class="needs-validation md-form text-left" style="color: #757575;" action="/rekomendasi/update2/<?= $step2['idpermohonan'] ?>" enctype="multipart/form-data" novalidate>

                        <!-- //hidden -->
                        <input name="img_trayek_lama" type="hidden" value="<?= $step2['img_trayek'] ?>">
                        <input name="img_trayek_tujuan_lama" type="hidden" value="<?= $step2['img_trayek_tujuan'] ?>">
                        <input name="kode_booking" type="hidden" value="<?= $step2['kode_booking'] ?>">

                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading font-weight-bold">Data Rekomendasi Asal-Tujuan</h4>

                            <div class="row">
                                <div class="col-sm-2">
                                    <i class="fa fa-check"></i> Nama Pemilik
                                </div>
                                <div class="text-right col-sm-1">
                                    :
                                </div>
                                <div class="col">
                                    <?= $asaltujuan['nama_pemilik']; ?>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-sm-2">
                                    <i class="fa fa-check"></i> Trayek Dilayani
                                </div>
                                <div class="text-right col-sm-1">
                                    :
                                </div>
                                <div class="col">
                                    <?= $asaltujuan['trayek']; ?>
                                </div>
                            </div>

                            <?php
                            if ($asaltujuan['asal'] == 0) {
                                $asal = "";
                            }
                            if ($asaltujuan['asal'] == 1) {
                                $asal = "Kota Gorontalo";
                            }
                            if ($asaltujuan['asal'] == 2) {
                                $asal = "Kab Gorontalo";
                            }
                            if ($asaltujuan['asal'] == 3) {
                                $asal = "Kab Bone Bolango";
                            }
                            if ($asaltujuan['asal'] == 4) {
                                $asal = "Kab Gorontalo Utara";
                            }
                            if ($asaltujuan['asal'] == 5) {
                                $asal = "Kab Boalemo";
                            }
                            if ($asaltujuan['asal'] == 6) {
                                $asal = "Kab Pohuwato";
                            }
                            if ($asaltujuan['tujuan'] == 0) {
                                $tujuan = "";
                            }
                            if ($asaltujuan['tujuan'] == 1) {
                                $tujuan = "Kota Gorontalo";
                            }
                            if ($asaltujuan['tujuan'] == 2) {
                                $tujuan = "Kab Gorontalo";
                            }
                            if ($asaltujuan['tujuan'] == 3) {
                                $tujuan = "Kab Bone Bolango";
                            }
                            if ($asaltujuan['tujuan'] == 4) {
                                $tujuan = "Kab Gorontalo Utara";
                            }
                            if ($asaltujuan['tujuan'] == 5) {
                                $tujuan = "Kab Boalemo";
                            }
                            if ($asaltujuan['tujuan'] == 6) {
                                $tujuan = "Kab Pohuwato";
                            }
                            ?>

                            <div class="row mt-2">
                                <div class="col-sm-2">
                                    <i class="fa fa-check"></i> Trayek Asal
                                </div>
                                <div class="text-right col-sm-1">
                                    :
                                </div>
                                <div class="col">
                                    <?= $asal ?>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-sm-2">
                                    <i class="fa fa-check"></i> Trayek Tujuan
                                </div>
                                <div class="text-right col-sm-1">
                                    :
                                </div>
                                <div class="col">
                                    <?= $tujuan ?>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-sm-2">
                                    <i class="fa fa-check"></i> Nomor Kendaraan
                                </div>
                                <div class="text-right col-sm-1">
                                    :
                                </div>
                                <div class="col">
                                    <?= $asaltujuan['nomor_kendaraan'] ?>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-sm-2">
                                    <i class="fa fa-check"></i> Nomor KIR
                                </div>
                                <div class="text-right col-sm-1">
                                    :
                                </div>
                                <div class="col">
                                    <?= $asaltujuan['nomor_kir'] ?>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-sm-2">
                                    <i class="fa fa-check"></i> Tahun Pembuatan
                                </div>
                                <div class="text-right col-sm-1">
                                    :
                                </div>
                                <div class="col">
                                    <?= $asaltujuan['tahun_pembuatan'] ?>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-sm-2">
                                    <i class="fa fa-check"></i> Merk/Type
                                </div>
                                <div class="text-right col-sm-1">
                                    :
                                </div>
                                <div class="col">
                                    <?= $asaltujuan['merk'] ?>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-sm-2">
                                    <i class="fa fa-check"></i> Nomor Chasis
                                </div>
                                <div class="text-right col-sm-1">
                                    :
                                </div>
                                <div class="col">
                                    <?= $asaltujuan['nomor_chasis'] ?>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-sm-2">
                                    <i class="fa fa-check"></i> Nomor Mesin
                                </div>
                                <div class="text-right col-sm-1">
                                    :
                                </div>
                                <div class="col">
                                    <?= $asaltujuan['nomor_mesin'] ?>
                                </div>
                            </div>

                            <div class="row mt-2 mb-4">
                                <div class="col-sm-2">
                                    <i class="fa fa-check"></i> Nomor Registrasi PKB
                                </div>
                                <div class="text-right col-sm-1">
                                    :
                                </div>
                                <div class="col">
                                    <?= $asaltujuan['nomor_regis_pkb'] ?>
                                </div>
                            </div>

                            <!-- <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p> -->
                            <hr>
                            <p class="mb-0 text-danger"><i class="fa fa-chevron-right"></i> Periksa apakah data permohonan Asal-Tujuan anda sudah sesuai</p>
                            <p class="mb-0 text-danger"><i class="fa fa-chevron-right"></i> Apabila sudah sesuai, maka klik simpan dan lanjutkan</p>
                            <p class="mb-0 text-danger"><i class="fa fa-chevron-right"></i> Apabila tidak sesuai, silahkan hubungi Admin Dinas Perhubungan Provinsi Gorontalo</p>
                        </div>

                        <div class="buttons mt-5">
                            <button type="button" class="btn btn-md btn-dark"><i class="fa fa-arrow-left mr-1"></i> Sebelumnya</button>
                            <button type="submit" class="btn btn-md btn-primary">Simpan & Lanjutkan <i class="fa fa-arrow-right ml-1"></i></button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>