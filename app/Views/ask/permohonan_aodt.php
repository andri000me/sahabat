<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <div class="row mb-5 wow fadeInRight">
        <div class="col-sm-12 mb-3 mb-md-0">
            <div class="">
                <div class="card-body">

                    <h5 class="text-dark font-weight-bold card-title">Persetujuan Permohonan Izin Penyelenggaraan Angkutan Orang Tidak Dalam Trayek (AOTDT)</h5>
                    <p class="card-text">Untuk mengajukan permohonan Permohonan Izin Penyelenggaraan Angkutan Orang Tidak Dalam Trayek atau Permohonan Izin AOTDT, <br>
                        Silahkan lengkapi berkas dibawah ini, pastikan data yang anda upload adalah benar <br>
                    </p>

                    <div class="cards px-4 py-3">

                        <form method="POST" class="needs-validation md-form text-left" style="color: #757575;" action="/ask/save" enctype="multipart/form-data" novalidate>

                            <input type="hidden" name="kode_registrasi" value="<?= date('YmdHis'); ?>">

                            <div class="md-form mb-4 pink-textarea active-textarea">
                                <textarea name="pelayanan_dimohon" id="form18" class="md-textarea form-control" rows="3" required></textarea>
                                <label for="form18">Pelayanan yang dimohon</label>
                                <div class="invalid-feedback">
                                    Pelayanan yang dimohon
                                </div>
                            </div>

                            <div class="md-form">
                                <input name="jumlah_kendaraan" type="number" id="form2" class="form-control" required>
                                <label for="form2">Jumlah Kendaraan</label>
                                <div class="invalid-feedback">
                                    Jumlah Kendaraan tidak boleh kosong
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="file" name="img_surat_permohonan" id="uploadImage">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input name="img_surat_permohonan" class="file-path validate" type="text" placeholder="Scan / Foto Surat Permohonanan Izin Penyelenggaraan AOTDT (Jelas)">
                                    </div>
                                </div>
                                <div class="kacili" style="margin-left:280px;">
                                    <?= $validation->getError('img_surat_permohonan') ?>
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="file" name="img_bukti_pengesahan" id="uploadImage">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input name="img_bukti_pengesahan" class="file-path validate" type="text" placeholder="Scan / Foto Bukti Pengesahan dari Kemenkumham/Koperasi (Jelas)">
                                    </div>
                                </div>
                                <div class="kacili" style="margin-left:280px;">
                                    <?= $validation->getError('img_bukti_pengesahan') ?>
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="file" name="img_domisili" id="uploadImage">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input name="img_domisili" class="file-path validate" type="text" placeholder="Scan / Foto Surat Keterangan Domisili (Jelas)">
                                    </div>
                                </div>
                                <div class="kacili" style="margin-left:280px;">
                                    <?= $validation->getError('img_domisili') ?>
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="file" name="img_pernyataan_kesanggupan" id="uploadImage">
                                    </div>

                                    <div class="file-path-wrapper">
                                        <input name="img_pernyataan_kesanggupan" class="file-path validate" type="text" placeholder="Scan / Foto Surat Pernyataan Kesanggupan untuk Memenuhi seluruh kewajiban sebagai pemegang izin AOTDT bermaterai (Jelas)">
                                    </div>
                                </div>
                                <div class="kacili" style="margin-left:280px;">
                                    <?= $validation->getError('img_pernyataan_kesanggupan') ?>
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="file" name="img_pernyataan_kerjasama" id="uploadImage">
                                    </div>

                                    <div class="file-path-wrapper">
                                        <input name="img_pernyataan_kerjasama" class="file-path validate" type="text" placeholder="Scan / Foto Surat Pernyataan Kesanggupan memiliki dan atau bekerjasama dengan bengkel bermaterai (Jelas)">
                                    </div>
                                </div>
                                <div class="kacili" style="margin-left:280px;">
                                    <?= $validation->getError('img_pernyataan_kerjasama') ?>
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="file" name="img_perjanjian" id="uploadImage">
                                    </div>

                                    <div class="file-path-wrapper">
                                        <input name="img_perjanjian" class="file-path validate" type="text" placeholder="Scan / Foto Surat Perjanjian antara pemilik kendaraan/anggota koperasi dengan Koperasi (Jelas)">
                                    </div>
                                </div>
                                <div class="kacili" style="margin-left:280px;">
                                    <?= $validation->getError('img_perjanjian') ?>
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="file" name="img_pemda" id="uploadImage">
                                    </div>

                                    <div class="file-path-wrapper">
                                        <input name="img_pemda" class="file-path validate" type="text" placeholder="Scan / Foto Surat Keterangan dari Pemerintah Daerah Setempat tentang tempat penyimpanan kendaraan (Jelas)">
                                    </div>
                                </div>
                                <div class="kacili" style="margin-left:280px;">
                                    <?= $validation->getError('img_pemda') ?>
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="file" name="img_rencana_bisnis" id="uploadImage">
                                    </div>

                                    <div class="file-path-wrapper">
                                        <input name="img_rencana_bisnis" class="file-path validate" type="text" placeholder="Scan / Foto Rencana bisnis perusahaan angkutan/koperasi (Jelas)">
                                    </div>
                                </div>
                                <div class="kacili" style="margin-left:280px;">
                                    <?= $validation->getError('img_rencana_bisnis') ?>
                                </div>
                            </div>
                    </div>

                    <div class="buttons mt-5">
                        <button type="submit button" class="btn btn-md btn-info">Lanjutkan <i class="fa fa-arrow-right ml-1"></i> </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>