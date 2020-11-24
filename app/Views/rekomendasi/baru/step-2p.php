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

                    <form method="POST" class="needs-validation md-form text-left" style="color: #757575;" action="/rekomendasi/saveuploadizintrayek/<?= $step2['idpermohonan']  ?>" enctype="multipart/form-data" novalidate>

                        <input name="img_izin_trayek_lama" type="hidden" value="<?= $step2['img_izin_trayek'] ?>">

                        <input name="kode_booking" type="hidden" value="<?= $step2['kode_booking'] ?>">
                        <input name="nomor_kendaraan" type="hidden" value="<?= $step2['nomor_kendaraan'] ?>">

                        <div class="file-field">
                            <div class="btn btn-primary btn-sm float-left">
                                <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                <input type="file" name="img_izin_trayek" id="s6">
                            </div>
                            <?php
                            if ($step2['img_izin_trayek']) {
                                $btn = '<a href="/img/img_izin_trayek/' . $step2['img_izin_trayek'] . '" target="_blank" type="button" class="btn btn-sm btn-success"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>';
                            } else {
                                $btn = '<a href="#" target="_blank" type="button" class="btn btn-sm btn-danger"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>';
                            }
                            ?>
                            <?= $btn ?>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Asli Izin Trayek AKDP Lama">
                            </div>
                            <div class="kacili" style="margin-left:160px;">
                                <?= $validation->getError('img_izin_trayek') ?>
                            </div>
                        </div>

                        <div class="md-form form-row mt-4">
                            <div class="col">
                                <select name="trayek_dilayani" class="mdb-select md-form" searchable="Trayek Yang Dilayani">
                                    <option value="" disabled selected>Pilih</option>
                                    <?php foreach ($trayek as $tr) : ?>
                                        <option value="<?= $tr['kode_trayek']; ?>"><?= $tr['trayek']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <label class="mdb-main-label">Trayek yang dilayani</label>
                                <div class="kacili">
                                    <?= $validation->getError('trayek_dilayani') ?>
                                </div>
                            </div>
                        </div>

                        <div class="buttons mt-5">
                            <button type="submit button" class="btn btn-md btn-primary"> Simpan & Lanjutkan <i class="fa fa-arrow-right mr-1"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>