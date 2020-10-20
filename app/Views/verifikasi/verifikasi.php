<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container">

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
                        <span class="label">Step 1</span>
                    </a>
                </li>

                <li class="secondary wow fadeInLeft">
                    <a href="/rekomendasi/step2/">
                        <span class="circle">2</span>
                        <span class="label">Step 2</span>
                    </a>
                </li>

                <li class="secondary wow fadeInLeft">
                    <a href="#!">
                        <span class="circle">3</span>
                        <span class="label">Step 3</span>
                    </a>
                </li>

                <li class="secondary wow fadeInLeft">
                    <a href="#!">
                        <span class="circle">4</span>
                        <span class="label">Step 4</span>
                    </a>
                </li>

                <li class="secondary wow fadeInLeft">
                    <a href="#!">
                        <span class="circle">5</span>
                        <span class="label">Step 5</span>
                    </a>
                </li>

                <li class="secondary wow fadeInLeft">
                    <a href="#!">
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
                    <h4 class="text-dark font-weight-bold card-title">Step 1 - Surat Permohonan yang ditujukan kepada Kepala DPM Prov. Gorontalo</h4>
                    <p class="card-text">Isi data sesuai dengan dokumen yang di upload</p>

                    <!-- Form -->
                    <form class="md-form text-left" style="color: #757575;" action="#!">

                        <div class="file-field">
                            <div class="btn btn-primary btn-sm float-left">
                                <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                <input type="file" name="image" id="uploadImage" onchange="PreviewImage()">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Surat Permohonan yang ditujukan kepada Kepala DPM Prov. Gorontalo">
                            </div>
                        </div>

                        <div class="md-form">
                            <img id="uploadPreview" src="<?= base_url(); ?>/assets/img/foto/default.png" style="width:100%;" alt="IMG">
                            <label for="form1"></label>
                        </div>

                        <div class="md-form mt-5">
                            <input placeholder="Tanggal Permohonan" type="text" id="date-picker-example" class="form-control datepicker">
                            <label for="date-picker-example">Tanggal Permohonan</label>
                        </div>

                        <div class="md-form">
                            <input type="text" id="form2" class="form-control" required>
                            <label for="form2">Nama Pemohon</label>
                        </div>

                        <div class="md-form mb-4 pink-textarea active-textarea">
                            <textarea id="form18" class="md-textarea form-control" rows="3"></textarea>
                            <label for="form18">Alamat Pemohon</label>
                        </div>

                        <select class="mdb-select md-form mt-5" searchable="Jenis Permohonan">
                            <option value="" disabled selected>Jenis Permohonan</option>
                            <option value="1">Pertimbangan Teknis Untuk Izin Trayek AKDP</option>
                            <option value="2">Pertimbangan Teknis Untuk Izin Trayek AKDP</option>
                            <option value="3">Pertimbangan Teknis Untuk Izin Trayek AKDP</option>
                            <option value="3">Pertimbangan Teknis Untuk Izin Trayek AKDP</option>
                            <option value="3">Pertimbangan Teknis Untuk Izin Trayek AKDP</option>
                        </select>
                        <label class="mdb-main-label">Label example</label>
                        <div class="buttons mt-5">
                            <button type="button" class="btn btn-md btn-danger" data-toggle="modal" data-target="#modalContactForm"> <i class="fa fa-ban ml-1"></i> Tolak</button>
                            <button type="button" class="btn btn-md btn-success"> <i class="fa fa-check ml-1"></i> Terima & Lanjutkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Write to us</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">

                    <div class="md-form">
                        <i class="fas fa-pencil prefix grey-text"></i>
                        <textarea type="text" id="form8" class="md-textarea form-control" rows="4"></textarea>
                        <label data-error="wrong" data-success="right" for="form8">Your message</label>
                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-danger">Kirim pesan penolakan <i class="fas fa-paper-plane"></i></button>
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>