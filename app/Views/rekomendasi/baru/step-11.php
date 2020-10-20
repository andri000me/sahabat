<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container">

    <div class="section-headers wow fadeInRight">
        <h3 class="section-titles mb-3"><img src="<?= base_url(); ?>/assets/img/icon/dishub.png" style="width:60px;" alt="IMG"></h3>
        <h3 class="section-titles">Dokumen Permohonan Pertimbangan Teknis </h3>
        <h3 class="section-titles">Izin Penyelenggaraan Angkutan Orang Dalam Trayek AKDP</h3>
        <?php
        if ($step11['status'] == 1) {
            $tatus = "Pengurusan Baru";
        }
        if ($step11['status'] == 2) {
            $tatus = "Perpanjangan";
        }
        ?>
        <h3 class="section-titles text-danger">(<?= $tatus ?>)</h3>
    </div>

    <!-- step -->
    <div class="row" style="margin-bottom:-30px;">
        <div class="col-md-12">

            <ul class="stepper stepper-horizontal">

                <li class="warning wow fadeInLeft">
                    <a href="#">
                        <span class="circle">1</span>
                        <span class="label">Step 1</span>
                    </a>
                </li>

                <li class="wow fadeInLeft">
                    <a href="/rekomendasi/step2/<?= $step11['kode_booking'] ?>">
                        <span class="circle">2</span>
                        <span class="label">Step 2</span>
                    </a>
                </li>

                <li class="secondary wow fadeInLeft">
                    <a href="/rekomendasi/step3/<?= $step11['kode_booking'] ?>">
                        <span class="circle">3</span>
                        <span class="label">Step 3</span>
                    </a>
                </li>

                <li class="secondary wow fadeInLeft">
                    <a href="/rekomendasi/step4/<?= $step11['kode_booking'] ?>">
                        <span class="circle">4</span>
                        <span class="label">Step 4</span>
                    </a>
                </li>

                <li class="secondary wow fadeInLeft">
                    <a href="/rekomendasi/step5/<?= $step11['kode_booking'] ?>">
                        <span class="circle">5</span>
                        <span class="label">Step 5</span>
                    </a>
                </li>

                <li class="secondary wow fadeInLeft">
                    <a href="/rekomendasi/step6/<?= $step11['kode_booking'] ?>">
                        <span class="circle">6</span>
                        <span class="label">Step 6</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <?php if (session()->getFlashdata('msg')) : ?>
        <?= session()->getFlashdata('msg'); ?>
    <?php endif; ?>

    <div class="row mb-5 wow fadeInRight">
        <div class="col-sm-12 mb-3 mb-md-0">
            <div class="cards px-4 pt-3">
                <div class="card-body">
                    <h4 class="text-dark font-weight-bold card-title">Step 1 - Surat Permohonan yang ditujukan kepada Kepala DPM Prov. Gorontalo</h4>
                    <p class="card-text">Isi data sesuai dengan dokumen yang di upload</p>

                    <!-- Form -->
                    <form method="POST" class="needs-validation md-form text-left" style="color: #757575;" action="/rekomendasi/update/<?= $step11['id'] ?>" enctype="multipart/form-data" novalidate>
                        <!-- //hidden -->
                        <input name="img_permohonan_lama" type="hidden" value="<?= $step11['img_surat_permohonan'] ?>">
                        <input name="kode_booking" type="hidden" value="<?= $step11['kode_booking'] ?>">

                        <div class="md-form">
                            <div class="file-field">
                                <div class="btn btn-primary btn-sm float-left">
                                    <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                    <input type="file" name="img_permohonan" id="uploadImage" onchange="PreviewImage()" value="<?= $step11['img_surat_permohonan'] ?>">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Surat Permohonan yang ditujukan kepada Kepala DPM Prov. Gorontalo">
                                </div>
                                <div class="kacili" style="margin-left:160px;">
                                    <?= $validation->getError('img_permohonan') ?>
                                </div>
                            </div>
                        </div>

                        <div class="md-form">
                            <?php
                            if ($step11['img_surat_permohonan']) {
                                $img = $step11['img_surat_permohonan'];
                            } else {
                                $img = "default.png";
                            }
                            ?>
                            <img id="uploadPreview" src="<?= base_url(); ?>/img/img_permohonan/<?= $img ?>" style="width:250px;" alt="IMG">
                            <label for="form1"></label>
                        </div>

                        <div class="md-form mt-5">
                            <input name="tgl_permohonan" placeholder="Tanggal Permohonan" type="text" id="date-picker-example" class="form-control datepicker" value="<?= $step11['tgl_permohonan'] ?>">
                            <label for="date-picker-example">Tanggal Permohonan</label>
                            <div class="invalid-feedback">
                                Tanggal permohonan tidak boleh kosong
                            </div>
                        </div>

                        <div class="md-form">
                            <input name="nama_pemohon" type="text" id="form2" class="form-control" value="<?= $step11['nama_pemohon'] ?>">
                            <label for="form2">Nama Pemohon</label>
                            <div class="invalid-feedback">
                                Nama pemohon tidak boleh kosong
                            </div>
                        </div>

                        <div class="md-form mb-4 pink-textarea active-textarea">
                            <textarea name="alamat_pemohon" id="form18" class="md-textarea form-control" rows="3"><?= $step11['alamat_pemohon'] ?></textarea>
                            <label for="form18">Alamat Pemohon</label>
                            <div class="invalid-feedback">
                                Alamat pemohon tidak boleh kosong
                            </div>
                        </div>

                        <div class="md-form">
                            <select name="jenis_permohonan" class="mdb-select md-form mt-5" searchable="Jenis Permohonan">
                                <option value="" disabled selected>Jenis Permohonan</option>
                                <?php foreach ($jenis_permohonan as $jp) : ?>
                                    <?php
                                    if ($jp['kode'] == $step11['jenis_permohonan']) {
                                        $selected = "selected";
                                    } else {
                                        $selected = "";
                                    }
                                    ?>
                                    <option value="<?= $jp['kode']; ?>" <?= $selected ?>><?= $jp['nama']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="kacili" style="margin-top:-20px;">
                                <?= $validation->getError('jenis_permohonan') ?>
                            </div>
                        </div>

                        <div class="buttons mt-5">
                            <button type="submit button" class="btn btn-md btn-primary">Simpan & Lanjutkan <i class="fa fa-arrow-right ml-1"></i> </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>