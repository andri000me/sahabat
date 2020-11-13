<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <div class="row mb-5 wow fadeInRight">
        <div class="col-sm-12 mb-3 mb-md-0">
            <div class="">
                <div class="card-body">
                    <h5 class="text-dark font-weight-bold card-title">Permohonan Izin Penyelenggaraan Angkutan Orang Tidak Dalam Trayek (AOTDT)</h4>
                        <p class="card-text">Untuk mengajukan permohonan Permohonan Izin Penyelenggaraan Angkutan Orang Tidak Dalam Trayek atau Permohonan Izin AOTDT, <br>
                            Silahkan lengkapi berkas dibawah ini, pastikan data yang anda isikan adalah benar, <br>
                            Pastikan juga data pada filed isian sama dengan berkas yang anda upload</p>

                        <div class="cards px-4 py-3">
                            <!-- Form -->
                            <form method="POST" class="needs-validation md-form text-left" style="color: #757575;" action="/login/saveBerkas" enctype="multipart/form-data" novalidate>

                                <div class="md-form">
                                    <input name="nik_direktur" type="text" id="form2" class="form-control" required>
                                    <label for="form2">NIK Direktur</label>
                                    <div class="invalid-feedback">
                                        NIK Direktur tidak boleh kosong
                                    </div>
                                </div>

                                <div class="md-form">
                                    <input name="nama_direktur" type="text" id="form2" class="form-control" required>
                                    <label for="form2">Nama Direktur</label>
                                    <div class="invalid-feedback">
                                        Nama Direktur tidak boleh kosong
                                    </div>
                                </div>

                                <div class="md-form">
                                    <input name="nama_perusahaan" type="text" id="form2" class="form-control" required>
                                    <label for="form2">Nama Perusahaan</label>
                                    <div class="invalid-feedback">
                                        Nama Perusahaan tidak boleh kosong
                                    </div>
                                </div>

                                <div class="md-form">
                                    <input name="hp" type="text" id="form2" class="form-control" required>
                                    <label for="form2">Nomor Handphone</label>
                                    <div class="invalid-feedback">
                                        Nomor Handphone tidak boleh kosong
                                    </div>
                                </div>

                                <div class="md-form">
                                    <input name="email" type="text" id="form2" class="form-control" required>
                                    <label for="form2">Email</label>
                                    <div class="invalid-feedback">
                                        Email tidak boleh kosong
                                    </div>
                                </div>

                                <div class="md-form mb-4 pink-textarea active-textarea">
                                    <textarea name="alamat" id="form18" class="md-textarea form-control" rows="3" required></textarea>
                                    <label for="form18">Alamat Perusahaan</label>
                                    <div class="invalid-feedback">
                                        Alamat Perusahaan tidak boleh kosong
                                    </div>
                                </div>
                        </div>


                        <h5 class="text-dark font-weight-bold card-title mt-5">Lampiran Dokumen </h5>
                        <p class="card-text">Upload Dokumen Lampiran</p>
                        <div class="cards px-4 py-3">

                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="file" name="img_akte_pendirian" id="uploadImage">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input name="img_akte_pendirian" class="file-path validate" type="text" placeholder="Scan / Foto Surat Permohonanan Izin Penyelenggaraan AOOTDT (Jelas)">
                                    </div>
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="file" name="img_akte_pendirian" id="uploadImage">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input name="img_akte_pendirian" class="file-path validate" type="text" placeholder="Scan / Foto Akte Pendirian dan atau perubahan terakhir (Jelas)">
                                    </div>
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
                            </div>

                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="file" name="img_siup" id="uploadImage">
                                    </div>

                                    <div class="file-path-wrapper">
                                        <input name="img_siup" class="file-path validate" type="text" placeholder="Scan / Foto SIUP (Jelas)">
                                    </div>
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="file" name="img_tdp" id="uploadImage">
                                    </div>

                                    <div class="file-path-wrapper">
                                        <input name="img_tdp" class="file-path validate" type="text" placeholder="Scan / Foto TDP (Jelas)">
                                    </div>
                                </div>
                            </div>

                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="file" name="img_npwp" id="uploadImage">
                                    </div>

                                    <div class="file-path-wrapper">
                                        <input name="img_npwp" class="file-path validate" type="text" placeholder="Scan / Foto NPWP (Jelas)">
                                    </div>
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
                            </div>

                        </div>

                        <div class="buttons mt-5">
                            <button type="submit button" class="btn btn-md primary-color-dark text-light">Simpan<i class="fa fa-check ml-1"></i> </button>
                            <button type="submit button" class="btn btn-md success-color-dark text-light">Finish<i class="fa fa-check ml-1"></i> </button>
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>