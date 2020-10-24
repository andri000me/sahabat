<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <!--
    <div class="section-headers wow fadeInRight mb-5">
        <h3 class="section-titles mb-3"><img src="<?= base_url(); ?>/assets/img/icon/dishub.png" style="width:60px;" alt="IMG"></h3>
        <h3 class="section-titles">Dokumen Permohonan Pertimbangan Teknis </h3>
        <h3 class="section-titles">Izin Penyelenggaraan Angkutan Orang Dalam Trayek AKDP</h3>
        <h3 class="section-titles text-danger">(Pengurusan Baru)</h3>
    </div> -->

    <div class="row mb-5 wow fadeInRight">
        <div class="col-sm-12 mb-3 mb-md-0">
            <div class="">
                <div class="card-body">
                    <h5 class="text-dark font-weight-bold card-title">Profil Perusahaan</h4>
                        <p class="card-text">Silahkan lengkapi profil perusahaan untuk dapat melakukan permohonan</p>

                        <div class="cards px-4 py-3">
                            <!-- Form -->
                            <form method="POST" class="needs-validation md-form text-left" style="color: #757575;" action="/login/saveBerkas" enctype="multipart/form-data" novalidate>

                                <div class="md-form">
                                    <input name="nik_direktur" type="text" id="form2" class="form-control" value="<?= $session['nik_direktur'] ?>" required>
                                    <label for="form2">NIK Direktur</label>
                                    <div class="invalid-feedback">
                                        NIK Direktur tidak boleh kosong
                                    </div>
                                </div>

                                <div class="md-form">
                                    <input name="nama_direktur" type="text" id="form2" class="form-control" value="<?= $session['nama_direktur'] ?>" required>
                                    <label for="form2">Nama Direktur</label>
                                    <div class="invalid-feedback">
                                        Nama Direktur tidak boleh kosong
                                    </div>
                                </div>

                                <div class="md-form">
                                    <input name="nama_perusahaan" type="text" id="form2" class="form-control" value="<?= $session['nama_perusahaan'] ?>" required>
                                    <label for="form2">Nama Perusahaan</label>
                                    <div class="invalid-feedback">
                                        Nama Perusahaan tidak boleh kosong
                                    </div>
                                </div>

                                <div class="md-form">
                                    <input name="hp" type="text" id="form2" class="form-control" value="<?= $session['hp'] ?>" required>
                                    <label for="form2">Nomor Handphone</label>
                                    <div class="invalid-feedback">
                                        Nomor Handphone tidak boleh kosong
                                    </div>
                                </div>

                                <div class="md-form">
                                    <input name="email" type="text" id="form2" class="form-control" value="<?= $session['email'] ?>" required>
                                    <label for="form2">Email</label>
                                    <div class="invalid-feedback">
                                        Email tidak boleh kosong
                                    </div>
                                </div>

                                <div class="md-form mb-4 pink-textarea active-textarea">
                                    <textarea name="alamat" id="form18" class="md-textarea form-control" rows="3" required><?= $session['alamat'] ?></textarea>
                                    <label for="form18">Alamat Perusahaan</label>
                                    <div class="invalid-feedback">
                                        Alamat Perusahaan tidak boleh kosong
                                    </div>
                                </div>
                        </div>


                        <h5 class="text-dark font-weight-bold card-title mt-5">Lampiran</h5>
                        <p class="card-text">Upload Lampiran</p>
                        <div class="cards px-4 py-3">

                            <!-- HiddenSubmit -->
                            <input name="img_akte_lama" type="hidden" value="<?= $session['img_akte_perusahaan'] ?>">
                            <input name="img_izin_angkutan_lama" type="hidden" value="<?= $session['img_izin_angkutan'] ?>">
                            <input name="img_tdp_lama" type="hidden" value="<?= $session['img_tdp'] ?>">
                            <input name="img_ktp_direktur_lama" type="hidden" value="<?= $session['img_ktp_direktur'] ?>">
                            <input name="img_npwp_lama" type="hidden" value="<?= $session['img_npwp'] ?>">
                            <input name="img_siup_lama" type="hidden" value="<?= $session['img_siup'] ?>">
                            <input name="img_nib_lama" type="hidden" value="<?= $session['img_nib'] ?>">

                            <input name="id" type="hidden" value="<?= $session['id'] ?>">



                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="file" name="img_akte" id="uploadImage">
                                    </div>
                                    <?php
                                    if ($session['img_akte_perusahaan']) {
                                        $link = 'href="/img/img_akte_perusahaan/' . $session['img_akte_perusahaan'] . '"';
                                        $btn = "btn-success";
                                    } else {
                                        $link = "";
                                        $btn = "btn-danger";
                                    }
                                    ?>
                                    <a <?= $link ?> target="_blank" type="button" class="btn btn-sm <?= $btn ?>"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>

                                    <div class="file-path-wrapper">
                                        <input name="img_akte" class="file-path validate" type="text" placeholder="Scan / Foto Akte Perusahaan berserta pengesahan (Jelas)">
                                    </div>
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="file" name="img_izin_angkutan" id="uploadImage">
                                    </div>

                                    <?php
                                    if ($session['img_izin_angkutan']) {
                                        $link = 'href="/img/img_izin_angkutan/' . $session['img_izin_angkutan'] . '"';
                                        $btn = "btn-success";
                                    } else {
                                        $link = "#";
                                        $btn = "btn-danger";
                                    }
                                    ?>
                                    <a <?= $link ?> target="_blank" type="button" class="btn btn-sm <?= $btn ?>"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>

                                    <div class="file-path-wrapper">
                                        <input name="img_izin_angkutan" class="file-path validate" type="text" placeholder="Scan / Foto Izin Angkutan Dalam Trayek/Tidak Dalam Trayek">
                                    </div>
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="file" name="img_tdp" id="uploadImage">
                                    </div>

                                    <?php
                                    if ($session['img_tdp']) {
                                        $link = 'href="/img/img_tdp/' . $session['img_tdp'] . '"';
                                        $btn = "btn-success";
                                    } else {
                                        $link = "";
                                        $btn = "btn-danger";
                                    }
                                    ?>
                                    <a <?= $link ?> target="_blank" type="button" class="btn btn-sm <?= $btn ?>"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>

                                    <div class="file-path-wrapper">
                                        <input name="img_tdp" class="file-path validate" type="text" placeholder="Scan / Foto TDP (Jelas)">
                                    </div>
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="file" name="img_ktp_direktur" id="uploadImage">
                                    </div>

                                    <?php
                                    if ($session['img_ktp_direktur']) {
                                        $link = 'href="/img/img_ktp_direktur/' . $session['img_ktp_direktur'] . '"';
                                        $btn = "btn-success";
                                    } else {
                                        $link = "";
                                        $btn = "btn-danger";
                                    }
                                    ?>
                                    <a <?= $link ?> target="_blank" type="button" class="btn btn-sm <?= $btn ?>"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>

                                    <div class="file-path-wrapper">
                                        <input name="img_ktp_direktur" class="file-path validate" type="text" placeholder="Scan / Foto KTP Direktur (Jelas)">
                                    </div>
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="file" name="img_npwp" id="uploadImage">
                                    </div>

                                    <?php
                                    if ($session['img_npwp']) {
                                        $link = 'href="/img/img_npwp/' . $session['img_npwp'] . '"';
                                        $btn = "btn-success";
                                    } else {
                                        $link = "";
                                        $btn = "btn-danger";
                                    }
                                    ?>
                                    <a <?= $link ?> target="_blank" type="button" class="btn btn-sm <?= $btn ?>"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>

                                    <div class="file-path-wrapper">
                                        <input name="img_npwp" class="file-path validate" type="text" placeholder="Scan / Foto NPWP Perusahaan (Jelas)">
                                    </div>
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="file" name="img_siup" id="uploadImage">
                                    </div>

                                    <?php
                                    if ($session['img_siup']) {
                                        $link = 'href="/img/img_siup/' . $session['img_siup'] . '"';
                                        $btn = "btn-success";
                                    } else {
                                        $link = "";
                                        $btn = "btn-danger";
                                    }
                                    ?>
                                    <a <?= $link ?> target="_blank" type="button" class="btn btn-sm <?= $btn ?>"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>

                                    <div class="file-path-wrapper">
                                        <input name="img_siup" class="file-path validate" type="text" placeholder="Scan Foto SIUP (Jelas)">
                                    </div>
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="file" name="img_nib" id="uploadImage">
                                    </div>

                                    <?php
                                    if ($session['img_nib']) {
                                        $link = 'href="/img/img_nib/' . $session['img_nib'] . '"';
                                        $btn = "btn-success";
                                    } else {
                                        $link = "";
                                        $btn = "btn-danger";
                                    }
                                    ?>
                                    <a <?= $link ?> target="_blank" type="button" class="btn btn-sm <?= $btn ?>"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>

                                    <div class="file-path-wrapper">
                                        <input name="img_nib" class="file-path validate" type="text" placeholder="Scan / Foto NIB (Jelas)">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="buttons mt-5">
                            <button type="submit button" class="btn btn-md primary-color-dark text-light">Simpan<i class="fa fa-check ml-1"></i> </button>
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>