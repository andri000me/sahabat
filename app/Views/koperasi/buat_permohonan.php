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
                    <h5 class="text-dark font-weight-bold card-title">Buat Permohonan Rekomendasi Asal / Tujuan Angkutan
                        Orang Dalam Trayek AKDP</h4>
                        <p class="card-text">Isi data sesuai dengan dokumen yang di upload</p>


                        <div class="cards px-4 py-3">
                            <!-- Form -->
                            <form method="POST" class="needs-validation md-form text-left" style="color: #757575;" action="/koperasi/save" enctype="multipart/form-data" novalidate>

                                <div class="md-form form-row mt-0">
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

                                <!-- 
                                <div class="md-form form-row mt-0">
                                    <div class="col">
                                        <select name="asal" class="mdb-select md-form" searchable="Asal Trayek">
                                            <option value="" disabled selected>Pilih</option>
                                            <?php foreach ($wilayah as $tr) : ?>
                                                <option value="<?= $tr['id']; ?>"><?= $tr['wilayah']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <label class="mdb-main-label">Asal Trayek</label>
                                    </div>

                                    <div class="col">
                                        <select name="tujuan" class="mdb-select md-form" searchable="Tujuan Trayek">
                                            <option value="" disabled selected>Pilih</option>
                                            <?php foreach ($wilayah as $tr) : ?>
                                                <option value="<?= $tr['id']; ?>"><?= $tr['wilayah']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <label class="mdb-main-label">Tujuan Trayek</label>
                                    </div>
                                </div> -->

                                <div class="md-form">
                                    <input name="nama_pemilik" type="text" id="form2" class="form-control" value="<?= old('nama_pemilik') ?>" required>
                                    <label for="form2">Nama Pemilik Kendaraan</label>
                                    <div class="invalid-feedback">
                                        Nama Pemilik Kendaraan tidak boleh kosong
                                    </div>
                                </div>

                                <div class="md-form mb-4 pink-textarea active-textarea">
                                    <textarea name="alamat_pemilik" id="form18" class="md-textarea form-control" rows="3" required><?= old('alamat_pemilik') ?></textarea>
                                    <label for="form18">Alamat Pemilik</label>
                                    <div class="invalid-feedback">
                                        Alamat Pemilik tidak boleh kosong
                                    </div>
                                </div>

                                <div class="md-form">
                                    <input name="nomor_kendaraan" type="text" id="form2" class="form-control" value="<?= old('nomor_kendaraan') ?>" required>
                                    <label for="form2">Nomor Kendaraan</label>
                                    <div class="invalid-feedback">
                                        Nomor Kendaraan tidak boleh kosong
                                    </div>
                                </div>
                                
                                
                                <div class="md-form form-row mt-4">
                                    <div class="col">
                                        <select name="jenis_kendaraan" class="mdb-select md-form" searchable="Jenis Kendaraan">
                                            <option value="" disabled selected>Pilih</option>
                                            <option value="Mikrolet">Mikrolet</option>
                                            <option value="Minibus">Minibus</option>
                                        </select>
                                        <label class="mdb-main-label">Jenis Kendaraan</label>
                                        <div class="kacili">
                                            <?= $validation->getError('jenis_kendaraan') ?>
                                        </div>
                                    </div>
                                </div>

                                <!--<div class="md-form">-->
                                <!--    <input name="jenis_kendaraan" type="text" id="form2" class="form-control" value="<?= old('jenis_kendaraan') ?>" required>-->
                                <!--    <label for="form2">Jenis Kendaraan</label>-->
                                <!--    <div class="invalid-feedback">-->
                                <!--        Jenis Kendaraan tidak boleh kosong-->
                                <!--    </div>-->
                                <!--</div>-->

                                <div class="md-form">
                                    <input name="merk" type="text" id="form2" class="form-control" value="<?= old('merk') ?>" required>
                                    <label for="form2">Merk/Type</label>
                                    <div class="invalid-feedback">
                                        Jenis Kendaraan tidak boleh kosong
                                    </div>
                                </div>

                                <div class="md-form">
                                    <input name="tahun_pembuatan" type="text" id="form2" class="form-control" value="<?= old('tahun_pembuatan') ?>" required>
                                    <label for="form2">Tahun Pembuatan</label>
                                    <div class="invalid-feedback">
                                        Tahun Pembuatan tidak boleh kosong
                                    </div>
                                </div>

                                <div class="md-form">
                                    <input name="nomor_kir" type="text" id="form2" class="form-control" value="<?= old('nomor_kir') ?>" required>
                                    <label for="form2">Nomor KIR</label>
                                    <div class="invalid-feedback">
                                        Nomor KIR tidak boleh kosong
                                    </div>
                                </div>

                                <div class="md-form">
                                    <input name="nomor_chasis" type="text" id="form2" class="form-control" value="<?= old('nomor_chasis') ?>" required>
                                    <label for="form2">Nomor Chasis</label>
                                    <div class="invalid-feedback">
                                        Nomor Chasis tidak boleh kosong
                                    </div>
                                </div>

                                <div class="md-form">
                                    <input name="nomor_mesin" type="text" id="form2" class="form-control" value="<?= old('nomor_mesin') ?>" required>
                                    <label for="form2">Nomor Mesin</label>
                                    <div class="invalid-feedback">
                                        Nomor Mesin tidak boleh kosong
                                    </div>
                                </div>

                                <div class="md-form">
                                    <input name="nomor_regis_pkb" type="text" id="form2" class="form-control" value="<?= old('nomor_regis_pkb') ?>" required>
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
                                        <input type="file" name="img_surat_permohonan_koperasi" id="uploadImage">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input name="img_surat_permohonan_koperasi" class="file-path validate" type="text" placeholder="Scan/Foto Surat Permohonan Koperasi (Jelas)">
                                    </div>
                                </div>
                                <div class="kacili" style="margin-left:160px;">
                                    <?= $validation->getError('img_surat_permohonan_koperasi') ?>
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="file" name="img_ktp_pemilik" id="uploadImage">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input name="img_ktp_pemilik" class="file-path validate" type="text" placeholder="Scan/Foto KTP Pemilik (Jelas)">
                                    </div>
                                </div>
                                <div class="kacili" style="margin-left:160px;">
                                    <?= $validation->getError('img_ktp_pemilik') ?>
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="file" name="img_stnkb" id="uploadImage">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input name="img_stnkb" class="file-path validate" type="text" placeholder="Scan/Foto STNKB (Jelas)">
                                    </div>
                                </div>
                                <div class="kacili" style="margin-left:160px;">
                                    <?= $validation->getError('img_stnkb') ?>
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="file" name="img_jasa_raharja" id="uploadImage">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input name="img_jasa_raharja" class="file-path validate" type="text" placeholder="Scan/Foto Iuran Jasa Raharja (Jelas)">
                                    </div>
                                </div>
                                <div class="kacili" style="margin-left:160px;">
                                    <?= $validation->getError('img_jasa_raharja') ?>
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="file" name="img_kir" id="uploadImage">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input name="img_kir" class="file-path validate" type="text" placeholder="Scan/Foto Buku KIR Berlaku (Jelas)">
                                    </div>
                                </div>
                                <div class="kacili" style="margin-left:160px;">
                                    <?= $validation->getError('img_kir') ?>
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
                                        <input type="file" name="foto_depan" id="uploadImage">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input name="foto_depan" class="file-path validate" type="text" placeholder="Foto Depan Kendaraan">
                                    </div>
                                </div>
                                <div class="kacili" style="margin-left:160px;">
                                    <?= $validation->getError('foto_depan') ?>
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="file" name="foto_belakang" id="uploadImage">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input name="foto_belakang" class="file-path validate" type="text" placeholder="Foto Belakang Kendaraan">
                                    </div>
                                </div>
                                <div class="kacili" style="margin-left:160px;">
                                    <?= $validation->getError('foto_belakang') ?>
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="file" name="foto_kanan" id="uploadImage">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input name="foto_kanan" class="file-path validate" type="text" placeholder="Foto Samping Kanan Kendaraan">
                                    </div>
                                </div>
                                <div class="kacili" style="margin-left:160px;">
                                    <?= $validation->getError('foto_kanan') ?>
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="file" name="foto_kiri" id="uploadImage">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input name="foto_kiri" class="file-path validate" type="text" placeholder="Foto Samping Kiri Kendaraan">
                                    </div>
                                </div>
                                <div class="kacili" style="margin-left:160px;">
                                    <?= $validation->getError('foto_kiri') ?>
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