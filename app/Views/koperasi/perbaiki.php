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
                    <h5 class="text-dark font-weight-bold card-title">Perbaiki Data Permohonan Rekomendasi Asal / Tujuan Angkutan
                        Orang Dalam Trayek AKDP</h4>
                        <p class="card-text">Isi data sesuai dengan dokumen yang di upload</p>


                        <div class="cards px-4 py-3">
                            <!-- Form -->
                            <form method="POST" class="needs-validation md-form text-left" style="color: #757575;" action="/koperasi/saveUpdate/<?= $mana ?>/<?= $permohonan['slug'] ?>/<?= $permohonan['idpermohonan'] ?>" enctype="multipart/form-data" novalidate>

                                <div class="md-form form-row mt-0">
                                    <div class="col">
                                        <select name="trayek_dilayani" class="mdb-select md-form" searchable="Trayek Yang Dilayani" disabled>
                                            <?php foreach ($trayek as $tr) : ?>
                                                <?php
                                                if ($permohonan['trayek_dilayani'] == $tr['kode_trayek']) {
                                                    $selected = "selected";
                                                } else {
                                                    $selected = "";
                                                }
                                                ?>
                                                <option value="<?= $tr['kode_trayek']; ?>" <?= $selected ?>><?= $tr['trayek']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <label class="mdb-main-label">Trayek yang dilayani</label>

                                    </div>
                                </div>

                                <div class="md-form">
                                    <input name="nama_pemilik" type="text" id="form2" class="form-control" value="<?= $permohonan['nama_pemilik'] ?>" required>
                                    <label for="form2">Nama Pemilik Kendaraan</label>
                                    <div class="invalid-feedback">
                                        Nama Pemilik Kendaraan tidak boleh kosong
                                    </div>
                                </div>

                                <div class="md-form mb-4 pink-textarea active-textarea">
                                    <textarea name="alamat_pemilik" id="form18" class="md-textarea form-control" rows="3" required><?= $permohonan['alamat_pemilik'] ?></textarea>
                                    <label for="form18">Alamat Pemilik</label>
                                    <div class="invalid-feedback">
                                        Alamat Pemilik tidak boleh kosong
                                    </div>
                                </div>

                                <div class="md-form">
                                    <input name="nomor_kendaraan" type="text" id="form2" class="form-control" value="<?= $permohonan['nomor_kendaraan'] ?>" required>
                                    <label for="form2">Nomor Kendaraan</label>
                                    <div class="invalid-feedback">
                                        Nomor Kendaraan tidak boleh kosong
                                    </div>
                                </div>

                                <div class="md-form">
                                    <input name="jenis_kendaraan" type="text" id="form2" class="form-control" value="<?= $permohonan['jenis_kendaraan'] ?>" required>
                                    <label for="form2">Jenis Kendaraan</label>
                                    <div class="invalid-feedback">
                                        Jenis Kendaraan tidak boleh kosong
                                    </div>
                                </div>

                                <div class="md-form">
                                    <input name="merk" type="text" id="form2" class="form-control" value="<?= $permohonan['merk'] ?>" required>
                                    <label for="form2">Merk/Type</label>
                                    <div class="invalid-feedback">
                                        Jenis Kendaraan tidak boleh kosong
                                    </div>
                                </div>

                                <div class="md-form">
                                    <input name="tahun_pembuatan" type="text" id="form2" class="form-control" value="<?= $permohonan['tahun_pembuatan'] ?>" required>
                                    <label for="form2">Tahun Pembuatan</label>
                                    <div class="invalid-feedback">
                                        Tahun Pembuatan tidak boleh kosong
                                    </div>
                                </div>

                                <div class="md-form">
                                    <input name="nomor_kir" type="text" id="form2" class="form-control" value="<?= $permohonan['nomor_kir'] ?>" required>
                                    <label for="form2">Nomor KIR</label>
                                    <div class="invalid-feedback">
                                        Nomor KIR tidak boleh kosong
                                    </div>
                                </div>

                                <div class="md-form">
                                    <input name="nomor_chasis" type="text" id="form2" class="form-control" value="<?= $permohonan['nomor_chasis'] ?>" required>
                                    <label for="form2">Nomor Chasis</label>
                                    <div class="invalid-feedback">
                                        Nomor Chasis tidak boleh kosong
                                    </div>
                                </div>

                                <div class="md-form">
                                    <input name="nomor_mesin" type="text" id="form2" class="form-control" value="<?= $permohonan['nomor_mesin'] ?>" required>
                                    <label for="form2">Nomor Mesin</label>
                                    <div class="invalid-feedback">
                                        Nomor Mesin tidak boleh kosong
                                    </div>
                                </div>

                                <div class="md-form">
                                    <input name="nomor_regis_pkb" type="text" id="form2" class="form-control" value="<?= $permohonan['nomor_regis_pkb'] ?>" required>
                                    <label for="form2">Nomor Regis PKB</label>
                                    <div class="invalid-feedback">
                                        Nomor Regis PKB tidak boleh kosong
                                    </div>
                                </div>
                        </div>


                        <h5 class="text-dark font-weight-bold card-title mt-5">Buat Permohonan Rekomendasi Asal/Tujuan
                            Angkutan Orang Dalam Trayek AKDP</h5>
                        <p class="card-text">Isi data sesuai dengan dokumen yang di upload</p>

                        <div class="cards px-4 py-3">
                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="hidden" name="img_surat_permohonan_koperasi_lama" id="uploadImage" value="<?= $permohonan['img_surat_permohonan_koperasi'] ?>">
                                        <input type="file" name="img_surat_permohonan_koperasi" id="uploadImage" value="<?= $permohonan['img_surat_permohonan_koperasi'] ?>">
                                    </div>
                                    <?php
                                    if ($permohonan['img_surat_permohonan_koperasi']) {
                                        $link = 'href="/img/img_surat_permohonan_koperasi/' . $permohonan['img_surat_permohonan_koperasi'] . '"';
                                        $btn = "btn-success";
                                    } else {
                                        $link = "#";
                                        $btn = "btn-danger";
                                    }
                                    ?>
                                    <a <?= $link ?> target="_blank" type="button" class="btn btn-sm <?= $btn ?>"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>
                                    <div class="file-path-wrapper">
                                        <input name="img_surat_permohonan_koperasi" class="file-path validate" type="text" placeholder="Scan/Foto Surat Permohonan Koperasi (Jelas)">
                                    </div>
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="hidden" name="img_ktp_pemilik_lama" id="uploadImage" value="<?= $permohonan['img_ktp_pemilik'] ?>">
                                        <input type="file" name="img_ktp_pemilik" id="uploadImage" value="<?= $permohonan['img_ktp_pemilik'] ?>">
                                    </div>
                                    <?php
                                    if ($permohonan['img_ktp_pemilik']) {
                                        $link = 'href="/img/img_ktp_pemilik/' . $permohonan['img_ktp_pemilik'] . '"';
                                        $btn = "btn-success";
                                    } else {
                                        $link = "#";
                                        $btn = "btn-danger";
                                    }
                                    ?>

                                    <a <?= $link ?> target="_blank" type="button" class="btn btn-sm <?= $btn ?>"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>
                                    <div class="file-path-wrapper">
                                        <input name="img_ktp_pemilik" class="file-path validate" type="text" placeholder="Scan/Foto KTP Pemilik (Jelas)">
                                    </div>
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="hidden" name="img_stnkb_lama" id="uploadImage" value="<?= $permohonan['img_stnkb'] ?>">
                                        <input type="file" name="img_stnkb" id="uploadImage" value="<?= $permohonan['img_stnkb'] ?>">
                                    </div>
                                    <?php
                                    if ($permohonan['img_stnkb']) {
                                        $link = 'href="/img/img_stnkb/' . $permohonan['img_stnkb'] . '"';
                                        $btn = "btn-success";
                                    } else {
                                        $link = "#";
                                        $btn = "btn-danger";
                                    }
                                    ?>

                                    <a <?= $link ?> target="_blank" type="button" class="btn btn-sm <?= $btn ?>"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>
                                    <div class="file-path-wrapper">
                                        <input name="img_stnkb" class="file-path validate" type="text" placeholder="Scan/Foto STNKB (Jelas)">
                                    </div>
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="hidden" name="img_jasa_raharja_lama" id="uploadImage" value="<?= $permohonan['img_jasa_raharja'] ?>">
                                        <input type="file" name="img_jasa_raharja" id="uploadImage" value="<?= $permohonan['img_jasa_raharja'] ?>">
                                    </div>
                                    <?php
                                    if ($permohonan['img_jasa_raharja']) {
                                        $link = 'href="/img/img_jasa_raharja/' . $permohonan['img_jasa_raharja'] . '"';
                                        $btn = "btn-success";
                                    } else {
                                        $link = "#";
                                        $btn = "btn-danger";
                                    }
                                    ?>

                                    <a <?= $link ?> target="_blank" type="button" class="btn btn-sm <?= $btn ?>"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>
                                    <div class="file-path-wrapper">
                                        <input name="img_jasa_raharja" class="file-path validate" type="text" placeholder="Scan/Foto Iuran Jasa Raharja (Jelas)">
                                    </div>
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="hidden" name="img_kir_lama" id="uploadImage" value="<?= $permohonan['img_kir'] ?>">
                                        <input type="file" name="img_kir" id="uploadImage" value="<?= $permohonan['img_kir'] ?>">
                                    </div>
                                    <?php
                                    if ($permohonan['img_kir']) {
                                        $link = 'href="/img/img_kir/' . $permohonan['img_kir'] . '"';
                                        $btn = "btn-success";
                                    } else {
                                        $link = "#";
                                        $btn = "btn-danger";
                                    }
                                    ?>

                                    <a <?= $link ?> target="_blank" type="button" class="btn btn-sm <?= $btn ?>"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>
                                    <div class="file-path-wrapper">
                                        <input name="img_kir" class="file-path validate" type="text" placeholder="Scan/Foto Buku KIR Berlaku (Jelas)">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <h5 class="text-dark font-weight-bold card-title mt-5">Foto 4 Sisi Kendaraan</h5>
                        <p class="card-text">Upload Foto Berwarna 4 Sisi Kendaraan</p>

                        <div class="cards px-4 py-3">
                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="hidden" name="foto_depan_lama" id="uploadImage" value="<?= $permohonan['foto_depan'] ?>">
                                        <input type="file" name="foto_depan" id="uploadImage" value="<?= $permohonan['foto_depan'] ?>">
                                    </div>
                                    <?php
                                    if ($permohonan['foto_depan']) {
                                        $link = 'href="/img/foto_depan/' . $permohonan['foto_depan'] . '"';
                                        $btn = "btn-success";
                                    } else {
                                        $link = "#";
                                        $btn = "btn-danger";
                                    }
                                    ?>

                                    <a <?= $link ?> target="_blank" type="button" class="btn btn-sm <?= $btn ?>"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>
                                    <div class="file-path-wrapper">
                                        <input name="foto_depan" class="file-path validate" type="text" placeholder="Foto Depan Kendaraan">
                                    </div>
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="hidden" name="foto_belakang_lama" id="uploadImage" value="<?= $permohonan['foto_belakang'] ?>">
                                        <input type="file" name="foto_belakang" id="uploadImage" value="<?= $permohonan['foto_belakang'] ?>">
                                    </div>
                                    <?php
                                    if ($permohonan['foto_belakang']) {
                                        $link = 'href="/img/foto_belakang/' . $permohonan['foto_belakang'] . '"';
                                        $btn = "btn-success";
                                    } else {
                                        $link = "#";
                                        $btn = "btn-danger";
                                    }
                                    ?>

                                    <a <?= $link ?> target="_blank" type="button" class="btn btn-sm <?= $btn ?>"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>
                                    <div class="file-path-wrapper">
                                        <input name="foto_belakang" class="file-path validate" type="text" placeholder="Foto Belakang Kendaraan">
                                    </div>
                                </div>

                            </div>

                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="hidden" name="foto_kanan_lama" id="uploadImage" value="<?= $permohonan['foto_kanan'] ?>">
                                        <input type="file" name="foto_kanan" id="uploadImage" value="<?= $permohonan['foto_kanan'] ?>">
                                    </div>
                                    <?php
                                    if ($permohonan['foto_kanan']) {
                                        $link = 'href="/img/foto_kanan/' . $permohonan['foto_kanan'] . '"';
                                        $btn = "btn-success";
                                    } else {
                                        $link = "#";
                                        $btn = "btn-danger";
                                    }
                                    ?>

                                    <a <?= $link ?> target="_blank" type="button" class="btn btn-sm <?= $btn ?>"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>
                                    <div class="file-path-wrapper">
                                        <input name="foto_kanan" class="file-path validate" type="text" placeholder="Foto Samping Kanan Kendaraan">
                                    </div>
                                </div>

                            </div>

                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="hidden" name="foto_kiri_lama" id="uploadImage" value="<?= $permohonan['foto_kiri'] ?>">
                                        <input type="file" name="foto_kiri" id="uploadImage" value="<?= $permohonan['foto_kiri'] ?>">
                                    </div>
                                    <?php
                                    if ($permohonan['foto_kiri']) {
                                        $link = 'href="/img/foto_kiri/' . $permohonan['foto_kiri'] . '"';
                                        $btn = "btn-success";
                                    } else {
                                        $link = "#";
                                        $btn = "btn-danger";
                                    }
                                    ?>

                                    <a <?= $link ?> target="_blank" type="button" class="btn btn-sm <?= $btn ?>"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>
                                    <div class="file-path-wrapper">
                                        <input name="foto_kiri" class="file-path validate" type="text" placeholder="Foto Samping Kiri Kendaraan">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="buttons mt-5 text-center">
                            <button type="submit" class="btn btn-md btn-dark">Simpan perubahan<i class="fa fa-save ml-1"></i> </button>
                            <a onclick="return confirm('Pastikan data telah diperbaiki dengan benar. Klik OK untuk melanjutkan')" href="/koperasi/ajukankembali/<?= $mana ?>/<?= $permohonan['slug'] ?>/<?= $permohonan['idpermohonan'] ?>" class="btn btn-md btn-danger">Ajukan Kembali<i class="fa fa-arrow-right ml-1"></i> </a>
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>