<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container-fluid mt-4">

    <div class="section-headers">
        <h3 class="section-titles mb-3"><img src="<?= base_url(); ?>/assets/img/icon/dishub.png" style="width:60px;" alt="IMG"></h3>
        <h3 class="section-titles">Dokumen Permohonan Pertimbangan Teknis </h3>
        <h3 class="section-titles">Izin Penyelenggaraan Angkutan Orang Dalam Trayek AKDP</h3>
        <?php
        if ($step5['status'] == 1) {
            $tatus = "Pengurusan Baru";
        }
        if ($step5['status'] == 2) {
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
                if ($step5['img_surat_permohonan'] && $step5['tgl_permohonan'] && $step5['nama_pemohon']) {
                    $complete = "completed";
                } else {
                    $complete = "";
                }
                ?>
                <li class="<?= $complete ?> wow fadeInLeft">
                    <a href="/rekomendasi/step11/<?= $step5['kode_booking'] ?>">
                        <span class=" circle">1</span>
                        <span class="label">Syarat 1</span>
                    </a>
                </li>

                <?php
                if ($step5['trayek_dilayani']) {
                    $complete = "completed";
                } else {
                    $complete = "";
                }
                ?>
                <li class="<?= $complete ?> wow fadeInLeft">
                    <a href="/rekomendasi/step2/<?= $step5['kode_booking'] ?>">
                        <span class="circle">2</span>
                        <span class="label">Syarat 2</span>
                    </a>
                </li>

                <?php
                if ($step5['img_stnkb_pkb'] && $step5['nomor_kendaraan'] && $step5['nama_pemilik'] && $step5['alamat_pemilik'] && $step5['jenis_kendaraan'] && $step5['tahun_pembuatan'] && $step5['stnkb_berlaku'] && $step5['pkb_berlaku']) {
                    $complete = "completed";
                } else {
                    $complete = "";
                }
                ?>
                <li class="<?= $complete ?> wow fadeInLeft">
                    <a href="/rekomendasi/step3/<?= $step5['kode_booking'] ?>">
                        <span class="circle">3</span>
                        <span class="label">Syarat 3</span>
                    </a>
                </li>

                <?php
                if ($step5['img_kir'] && $step5['nomor_kir'] && $step5['kapasitas_angkutan'] && $step5['uji_berkala_berlaku']) {
                    $complete = "completed";
                } else {
                    $complete = "";
                }
                ?>
                <li class="<?= $complete ?> wow fadeInLeft">
                    <a href="/rekomendasi/step4/<?= $step5['kode_booking'] ?>">
                        <span class="circle">4</span>
                        <span class="label">Syarat 4</span>
                    </a>
                </li>

                <li class="warning wow fadeInLeft">
                    <a href="#">
                        <span class="circle">5</span>
                        <span class="label">Syarat 5</span>
                    </a>
                </li>

                <?php
                if ($step5['img_surat_pernyataan']) {
                    $complete = "completed";
                } else {
                    $complete = "";
                }
                ?>
                <li class="<?= $complete ?> wow fadeInLeft">
                    <a href="/rekomendasi/step6/<?= $step5['kode_booking'] ?>">
                        <span class="circle">6</span>
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
                    <h4 class="text-dark font-weight-bold card-title">Syarat 5 - Iuran Jasa Raharja </h4>
                    <p class="card-text">Isi data sesuai dengan dokumen yang di upload</p>

                    <!-- Form -->
                    <form method="POST" class="needs-validation md-form text-left" style="color: #757575;" action="/rekomendasi/update5/<?= $step5['idpermohonan'] ?>" enctype="multipart/form-data" novalidate>

                        <input name="img_jasa_raharja_lama" type="hidden" value="<?= $step5['img_jasa_raharja'] ?>">
                        <input name="kode_booking" type="hidden" value="<?= $step5['kode_booking'] ?>">

                        <div class="file-field">
                            <div class="btn btn-primary btn-sm float-left">
                                <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                <input name="img_jasa_raharja" type="file" name="image" id="uploadImage" onchange="PreviewImage()">
                            </div>
                            <?php
                            if ($step5['img_jasa_raharja']) {
                                $btn = '<a href="/img/img_jasa_raharja/' . $step5['img_jasa_raharja'] . '" target="_blank" type="button" class="btn btn-sm btn-success"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>';
                            } else {
                                $btn = '<a href="#" target="_blank" type="button" class="btn btn-sm btn-danger"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>';
                            }
                            ?>
                            <?= $btn ?>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Iuran Jasa Raharja" value="">
                            </div>
                            <div class="kacili" style="margin-left:160px;">
                                <?= $validation->getError('img_jasa_raharja') ?>
                            </div>
                        </div>

                        <div class="md-form mt-5">
                            <input name="jasa_raharja_berlaku" placeholder="Iuran Jasa Raharja berlaku sampai dengan" type="text" id="date-picker-example" class="form-control datepicker" value="<?= $step5['jasa_raharja_berlaku'] ?>" required>
                            <label for="date-picker-example">Iuran Jasa Raharja berlaku sampai dengan</label>
                            <div class="invalid-feedback">
                                Jasa Raharja berlaku harus di isi
                            </div>
                        </div>

                        <div class="buttons mt-5">
                            <button type="button" class="btn btn-md btn-dark"><i class="fa fa-arrow-left mr-1"></i> Sebelumnya</button>
                            <button type="submit button" class="btn btn-md btn-primary">Simpan & Lanjutkan <i class="fa fa-arrow-right ml-1"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>