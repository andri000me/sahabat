<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container-fluid mt-4">

    <div class="section-headers">
        <h3 class="section-titles mb-3"><img src="<?= base_url(); ?>/assets/img/icon/dishub.png" style="width:60px;" alt="IMG"></h3>
        <h3 class="section-titles">Dokumen Permohonan Pertimbangan Teknis </h3>
        <h3 class="section-titles">Izin Penyelenggaraan Angkutan Orang Dalam Trayek AKDP</h3>
        <?php
        if ($step3['status'] == 1) {
            $tatus = "Pengurusan Baru";
        }
        if ($step3['status'] == 2) {
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
                    <a href="/rekomendasi/step11/<?= $step3['kode_booking'] ?>">
                        <span class="circle">1</span>
                        <span class="label">Syarat 1</span>
                    </a>
                </li>

                <li class="secondary wow fadeInLeft">
                    <a href="/rekomendasi/step2/<?= $step3['kode_booking'] ?>">
                        <span class="circle">2</span>
                        <span class="label">Syarat 2</span>
                    </a>
                </li>

                <li class="warning wow fadeInLeft">
                    <a href="#">
                        <span class="circle">3</span>
                        <span class="label">Syarat 3</span>
                    </a>
                </li>

                <li class="secondary wow fadeInLeft">
                    <a href="/rekomendasi/step4/<?= $step3['kode_booking'] ?>">
                        <span class="circle">4</span>
                        <span class="label">Syarat 4</span>
                    </a>
                </li>

                <li class="secondary wow fadeInLeft">
                    <a href="/rekomendasi/step5/<?= $step3['kode_booking'] ?>">
                        <span class="circle">5</span>
                        <span class="label">Syarat 5</span>
                    </a>
                </li>

                <li class="secondary wow fadeInLeft">
                    <a href="/rekomendasi/step6/<?= $step3['kode_booking'] ?>">
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
                    <h4 class="text-dark font-weight-bold card-title">Syarat 3 - STNKB dan PKB </h4>
                    <p class="card-text">Isi data sesuai dengan dokumen yang di upload</p>

                    <!-- Form -->
                    <form method="POST" class="needs-validation md-form text-left" style="color: #757575;" action="/rekomendasi/update3/<?= $step3['id'] ?>" enctype="multipart/form-data" novalidate>

                        <!-- //hidden -->
                        <input name="img_stnkb_pkb_lama" type="hidden" value="<?= $step3['img_stnkb_pkb'] ?>">
                        <input name="kode_booking" type="hidden" value="<?= $step3['kode_booking'] ?>">

                        <div class="file-field">
                            <div class="btn btn-primary btn-sm float-left">
                                <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                <input type="file" name="img_stnkb_pkb" id="uploadImage" onchange="PreviewImage()">
                            </div>
                            <a href="/img/img_stnkb_pkb/<?= $step3['img_stnkb_pkb'] ?>" target="_blank" type="button" class="btn btn-sm btn-danger"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="STNKB dan PKB" value="<?= $step3['img_stnkb_pkb'] ?>">
                            </div>
                            <div class="kacili" style="margin-left:160px;">
                                <?= $validation->getError('img_stnkb_pkb') ?>
                            </div>
                        </div>

                        <div class="md-form mt-5">
                            <input name="nomor_kendaraan" type="text" id="form2" class="form-control" value="<?= $step3['nomor_kendaraan'] ?>">
                            <label for="form2">Nomor Kendaraan</label>
                            <div class="invalid-feedback">
                                Nomor Kendaraan harus di isi
                            </div>
                        </div>

                        <div class="md-form">
                            <input name="nama_pemilik" type="text" id="form2" class="form-control" value="<?= $step3['nama_pemilik'] ?>" required>
                            <label for="form2">Nama Pemilik</label>
                            <div class="invalid-feedback">
                                Nama Pemilik harus di isi
                            </div>
                        </div>

                        <div class="md-form mb-4 pink-textarea active-textarea">
                            <textarea name="alamat_pemilik" id="form18" class="md-textarea form-control" rows="3" required><?= $step3['alamat_pemilik'] ?></textarea>
                            <label for="form18">Alamat Pemilik</label>
                            <div class="invalid-feedback">
                                Alamat Pemilik harus di isi
                            </div>
                        </div>

                        <div class="md-form mt-4">
                            <input name="jenis_kendaraan" type="text" id="form2" class="form-control" value="<?= $step3['jenis_kendaraan'] ?>" required>
                            <label for="form2">Jenis Kendaraan</label>
                            <div class="invalid-feedback">
                                Jenis Kendaraan harus di isi
                            </div>
                        </div>

                        <div class="md-form mt-4">
                            <input name="tahun_pembuatan" type="text" id="form2" class="form-control" value="<?= $step3['tahun_pembuatan']  ?>" required>
                            <label for="form2">Tahun Pembuatan</label>
                            <div class="invalid-feedback">
                                Tahun Pembuatan harus di isi
                            </div>
                        </div>


                        <div class="md-form mt-5">
                            <input name="stnkb_berlaku" placeholder="STNKB berlaku sampai dengan" type="text" id="date-picker-example" class="form-control datepicker" value="<?= $step3['stnkb_berlaku']  ?>" required>
                            <label for="date-picker-example">STNKB berlaku sampai dengan</label>
                            <div class="invalid-feedback">
                                STNKB berlaku harus di isi
                            </div>
                        </div>

                        <div class="md-form mt-5">
                            <input name="pkb_berlaku" placeholder="PKB berlaku sampai dengan" type="text" id="date-picker-example" class="form-control datepicker" value="<?= $step3['pkb_berlaku']  ?>" required>
                            <label for="date-picker-example">PKB berlaku sampai dengan</label>
                            <div class="invalid-feedback">
                                PKB berlaku harus di isi
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