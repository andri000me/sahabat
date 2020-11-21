<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container-fluid mt-4">

    <div class="section-headers wow fadeInRight">
        <h3 class="section-titles mb-3"><img src="<?= base_url(); ?>/assets/img/icon/dishub.png" style="width:60px;" alt="IMG"></h3>
        <h3 class="section-titles">Dokumen Permohonan Pertimbangan Teknis </h3>
        <h3 class="section-titles">Izin Penyelenggaraan Angkutan Orang Dalam Trayek AKDP</h3>
        <h3 class="section-titles text-danger">(Pengurusan Baru)</h3>
    </div>

    <!-- step -->
    <div class="row" style="margin-bottom:-30px;">
        <div class="col-md-12">

            <ul class="stepper stepper-horizontal">

                <li class="warning wow fadeInLeft">
                    <a href="#!">
                        <span class="circle">1</span>
                        <span class="label">Syarat 1</span>
                    </a>
                </li>

                <li class="secondary wow fadeInLeft">
                    <a href="/rekomendasi/step2/">
                        <span class="circle">2</span>
                        <span class="label">Syarat 2</span>
                    </a>
                </li>

                <li class="secondary wow fadeInLeft">
                    <a href="#!">
                        <span class="circle">3</span>
                        <span class="label">Syarat 3</span>
                    </a>
                </li>

                <li class="secondary wow fadeInLeft">
                    <a href="#!">
                        <span class="circle">4</span>
                        <span class="label">Syarat 4</span>
                    </a>
                </li>

                <li class="secondary wow fadeInLeft">
                    <a href="#!">
                        <span class="circle">5</span>
                        <span class="label">Syarat 5</span>
                    </a>
                </li>

                <li class="secondary wow fadeInLeft">
                    <a href="#!">
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
                    <h4 class="text-dark font-weight-bold card-title">Syarat 1 - Surat Permohonan yang ditujukan kepada Kepala DPM Prov. Gorontalo</h4>
                    <p class="card-text">Isi data sesuai dengan dokumen yang di upload</p>

                    <!-- Form -->
                    <form method="POST" class="needs-validation md-form text-left" style="color: #757575;" action="/rekomendasi/save" enctype="multipart/form-data" novalidate>


                        <?php if (session()->getFlashdata('msg')) : ?>
                            <?= session()->getFlashdata('msg'); ?>
                        <?php endif; ?>

                        <div class="md-form">
                            <div class="file-field">
                                <div class="btn btn-primary btn-sm float-left">
                                    <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                    <input type="file" name="img_permohonan" id="uploadImage">
                                </div>
                                <div class="file-path-wrapper">
                                    <input name="img_permohonan" class="file-path validate" type="text" placeholder="Surat Permohonan yang ditujukan kepada Kepala DPM Prov. Gorontalo">
                                </div>
                            </div>
                            <div class="kacili" style="margin-left:160px;">
                                <?= $validation->getError('img_permohonan') ?>
                            </div>
                        </div>

                        <div class="md-form mt-5 mb-5">
                            <input name="nomor_kendaraan" type="text" id="form2" class="form-control">
                            <label for="form2">Nomor Kendaraan</label>
                            <div class="invalid-feedback">
                                Nomor Kendaraan harus di isi
                            </div>
                        </div>

                        <div class="md-form mt-5">
                            <input name="tgl_permohonan" placeholder="Tanggal Permohonan (Sesuai dengan tanggal pada surat permohonan)" type="text" id="date-picker-example" class="form-control datepicker" required value="<?= old('tgl_permohonan') ?>">
                            <label for="date-picker-example">Tanggal Permohonan (Sesuai dengan tanggal pada surat permohonan)</label>
                            <div class="invalid-feedback">
                                Tanggal permohonan tidak boleh kosong
                            </div>
                        </div>

                        <div class="md-form" hidden>
                            <input value="<?= date('YmdHis') ?>" name="kdb" type="text" id="kdb" class="form-control">
                            <label for=" kdb">Nama Pemohon</label>
                        </div>

                        <div class="buttons mt-5">
                            <button type="submit button" class="btn btn-md btn-primary">Simpan & Lanjutkan <i class="fa fa-arrow-right ml-1"></i> </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>