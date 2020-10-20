<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container">

    <div class="section-headers">
        <h3 class="section-titles mb-3"><img src="<?= base_url(); ?>/assets/img/icon/dishub.png" style="width:60px;" alt="IMG"></h3>
        <h3 class="section-titles">Dokumen Permohonan Pertimbangan Teknis </h3>
        <h3 class="section-titles">Izin Penyelenggaraan Angkutan Orang Dalam Trayek AKDP</h3>
        <?php
        if ($step6['status'] == 1) {
            $tatus = "Pengurusan Baru";
        }
        if ($step6['status'] == 2) {
            $tatus = "Perpanjangan";
        }
        ?>
        <h3 class="section-titles text-danger">(<?= $tatus ?>)</h3>
    </div>

    <!-- step -->
    <div class="row" style="margin-bottom:-30px;">
        <div class="col-md-12">

            <ul class="stepper stepper-horizontal">

                <li class="secondary wow fadeInLeft">
                    <a href="/rekomendasi/step11/<?= $step6['kode_booking'] ?>">
                        <span class="circle">1</span>
                        <span class="label">Step 1</span>
                    </a>
                </li>

                <li class="secondary wow fadeInLeft">
                    <a href="/rekomendasi/step2/<?= $step6['kode_booking'] ?>">
                        <span class="circle">2</span>
                        <span class="label">Step 2</span>
                    </a>
                </li>

                <li class="secondary wow fadeInLeft">
                    <a href="/rekomendasi/step3/<?= $step6['kode_booking'] ?>">
                        <span class="circle">3</span>
                        <span class="label">Step 3</span>
                    </a>
                </li>

                <li class="secondary wow fadeInLeft">
                    <a href="/rekomendasi/step4/<?= $step6['kode_booking'] ?>">
                        <span class="circle">4</span>
                        <span class="label">Step 4</span>
                    </a>
                </li>

                <li class="secondary wow fadeInLeft">
                    <a href="/rekomendasi/step5/<?= $step6['kode_booking'] ?>">
                        <span class="circle">5</span>
                        <span class="label">Step 5</span>
                    </a>
                </li>

                <li class="warning wow fadeInLeft">
                    <a href="#">
                        <span class="circle">6</span>
                        <span class="label">Step 6</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <div class="row mb-5 wow fadeInRight">
        <div class="col-sm-12 mb-3 mb-md-0">
            <div class="cards px-4 pt-3">
                <div class="card-body">
                    <h4 class="text-dark font-weight-bold card-title">Step 6 - Upload dokumen lain </h4>
                    <p class="card-text mb-1">1. Fotocopy Akte Perusahaan berserta pengesahan</p>
                    <p class="card-text mb-1">2. Fotocopy Tanda Daftar Perusahaan (TDP) / Nomor Induk Berusaha (NIB)</p>
                    <p class="card-text mb-1">3. Fotocopy Surat Izin Usaha Perdagangan (SIUP)</p>
                    <p class="card-text mb-1">4. Fotocopy Nomor Pokok Wajib Pajak (NPWP) Badan Usaha</p>
                    <p class="card-text mb-1">5. Fotocopy KTP Direktur Perusahaan </p>
                    <p class="card-text mb-1">6. Surat Pernyataan Kesanggupan untuk Pemegang Izin Trayek </p>

                    <!-- Form -->
                    <form id="s1form" method="POST" class="needs-validation md-form text-left" style="color: #757575;" action="/rekomendasi/s1/<?= $step6['id'] ?>" enctype="multipart/form-data" novalidate>

                        <input name="img_akte_perusahaan_lama" type="hidden" value="<?= $step6['img_akte_perusahaan'] ?>">

                        <input name="kode_booking" type="hidden" value="<?= $step6['kode_booking'] ?>">

                        <div class="file-field">
                            <div class="btn btn-primary btn-sm float-left">
                                <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                <input name="img_akte_perusahaan" type="file" id="s1">
                            </div>
                            <a href="/img/img_akte_perusahaan/<?= $step6['img_akte_perusahaan'] ?>" target="_blank" type="button" class="btn btn-sm btn-danger"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Fotocopy Akte Perusahaan berserta pengesahan" value="<?= $step6['img_akte_perusahaan'] ?>">
                            </div>
                            <div class="kacili" style="margin-left:160px;">
                                <?= $validation->getError('img_akte_perusahaan') ?>
                            </div>
                        </div>

                    </form>

                    <form id="s2form" method="POST" class="needs-validation md-form text-left" style="color: #757575;" action="/rekomendasi/s2/<?= $step6['id'] ?>" enctype="multipart/form-data" novalidate>

                        <input name="img_tdp_lama" type="hidden" value="<?= $step6['img_tdp'] ?>">

                        <input name="kode_booking" type="hidden" value="<?= $step6['kode_booking'] ?>">

                        <div class="file-field">
                            <div class="btn btn-primary btn-sm float-left">
                                <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                <input name="img_tdp" type="file" id="s2">
                            </div>
                            <a href="/img/img_tdp/<?= $step6['img_tdp'] ?>" target="_blank" type="button" class="btn btn-sm btn-danger"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Fotocopy Tanda Daftar Perusahaan (TDP) / Nomor Induk Berusaha (NIB)" value="<?= $step6['img_tdp'] ?>">
                            </div>
                            <div class="kacili" style="margin-left:160px;">
                                <?= $validation->getError('img_tdp') ?>
                            </div>
                        </div>

                    </form>

                    <form id="s3form" method="POST" class="needs-validation md-form text-left" style="color: #757575;" action="/rekomendasi/s3/<?= $step6['id'] ?>" enctype="multipart/form-data" novalidate>

                        <input name="img_siup_lama" type="hidden" value="<?= $step6['img_siup'] ?>">

                        <input name="kode_booking" type="hidden" value="<?= $step6['kode_booking'] ?>">

                        <div class="file-field">
                            <div class="btn btn-primary btn-sm float-left">
                                <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                <input type="file" name="img_siup" id="s3">
                            </div>
                            <a href="/img/img_siup/<?= $step6['img_siup'] ?>" target="_blank" type="button" class="btn btn-sm btn-danger"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Fotocopy Surat Izin Usaha Perdagangan (SIUP)" value="<?= $step6['img_siup'] ?>">
                            </div>
                            <div class="kacili" style="margin-left:160px;">
                                <?= $validation->getError('img_siup') ?>
                            </div>
                        </div>

                    </form>

                    <form id="s4form" method="POST" class="needs-validation md-form text-left" style="color: #757575;" action="/rekomendasi/s4/<?= $step6['id'] ?>" enctype="multipart/form-data" novalidate>

                        <input name="img_npwp_lama" type="hidden" value="<?= $step6['img_npwp'] ?>">

                        <input name="kode_booking" type="hidden" value="<?= $step6['kode_booking'] ?>">

                        <div class="file-field">
                            <div class="btn btn-primary btn-sm float-left">
                                <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                <input type="file" name="img_npwp" id="s4">
                            </div>
                            <a href="/img/img_npwp/<?= $step6['img_npwp'] ?>" target="_blank" type="button" class="btn btn-sm btn-danger"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Fotocopy Nomor Pokok Wajib Pajak (NPWP) Badan Usaha" value="<?= $step6['img_npwp'] ?>">
                            </div>
                            <div class="kacili" style="margin-left:160px;">
                                <?= $validation->getError('img_npwp') ?>
                            </div>
                        </div>

                    </form>

                    <form id="s5form" method="POST" class="needs-validation md-form text-left" style="color: #757575;" action="/rekomendasi/s5/<?= $step6['id'] ?>" enctype="multipart/form-data" novalidate>

                        <input name="img_ktp_lama" type="hidden" value="<?= $step6['img_ktp'] ?>">

                        <input name="kode_booking" type="hidden" value="<?= $step6['kode_booking'] ?>">

                        <div class="file-field">
                            <div class="btn btn-primary btn-sm float-left">
                                <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                <input type="file" name="img_ktp" id="s5">
                            </div>
                            <a href="/img/img_ktp/<?= $step6['img_ktp'] ?>" target="_blank" type="button" class="btn btn-sm btn-danger"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Fotocopy KTP Direktur Perusahaan" value="<?= $step6['img_ktp'] ?>">
                            </div>
                            <div class="kacili" style="margin-left:160px;">
                                <?= $validation->getError('img_ktp') ?>
                            </div>
                        </div>

                    </form>

                    <form id="s6form" method="POST" class="needs-validation md-form text-left" style="color: #757575;" action="/rekomendasi/s6/<?= $step6['id'] ?>" enctype="multipart/form-data" novalidate>

                        <input name="img_surat_pernyataan_lama" type="hidden" value="<?= $step6['img_surat_pernyataan'] ?>">

                        <input name="kode_booking" type="hidden" value="<?= $step6['kode_booking'] ?>">

                        <div class="file-field">
                            <div class="btn btn-primary btn-sm float-left">
                                <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                <input type="file" name="img_surat_pernyataan" id="s6">
                            </div>
                            <a href="/img/img_surat_pernyataan/<?= $step6['img_surat_pernyataan'] ?>" target="_blank" type="button" class="btn btn-sm btn-danger"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Surat Pernyataan Kesanggupan untuk Pemegang Izin Trayek" value="<?= $step6['img_surat_pernyataan'] ?>">
                            </div>
                            <div class="kacili" style="margin-left:160px;">
                                <?= $validation->getError('img_surat_pernyataan') ?>
                            </div>
                        </div>

                    </form>

                    <form id="s5form" method="POST" class="needs-validation md-form text-left" style="color: #757575;" action="/rekomendasi/finish/<?= $step6['id'] ?>" enctype="multipart/form-data" novalidate>
                        <div class="buttons mt-5">
                            <?php
                            if ($step6['tgl_permohonan'] && $step6['nama_pemohon'] && $step6['alamat_pemohon'] && $step6['jenis_permohonan'] && $step6['trayek_dilayani'] && $step6['nomor_kendaraan'] && $step6['nama_pemilik'] && $step6['alamat_pemilik'] && $step6['jenis_kendaraan'] && $step6['tahun_pembuatan'] && $step6['nomor_kir'] && $step6['kapasitas_angkutan'] && $step6['uji_berkala_berlaku'] && $step6['stnkb_berlaku'] && $step6['pkb_berlaku'] && $step6['jasa_raharja_berlaku'] && $step6['img_surat_permohonan'] && $step6['img_akte_perusahaan'] && $step6['img_tdp'] && $step6['img_siup'] && $step6['img_npwp'] && $step6['img_ktp'] && $step6['img_trayek'] && $step6['img_stnkb_pkb'] && $step6['img_kir'] && $step6['img_jasa_raharja'] && $step6['img_surat_pernyataan']) {
                                $class = 'class="btn btn-md btn-success"';
                            } else {
                                $class = 'class="btn btn-md btn-light" disabled';
                            }
                            ?>
                            <button type="button" class="btn btn-md btn-dark"><i class="fa fa-arrow-left mr-1"></i> Sebelumnya</button>
                            <button type="submit button" <?= $class ?>>Finish <i class="fa fa-check ml-1"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>