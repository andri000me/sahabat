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

                        <form method="POST" class="needs-validation md-form text-left" style="color: #757575;" action="/ask/saveperbaikan" enctype="multipart/form-data" novalidate>

                            <input type="hidden" name="kode_registrasi" value="<?= date('YmdHis'); ?>">
                            <input type="hidden" name="idask" value="<?= $ask['idask'] ?>">

                            <div class="md-form">
                                <input name="jumlah_kendaraan" type="number" id="form2" class="form-control" value="<?= $ask['jumlah_kendaraan'] ?>">
                                <label for="form2">Jumlah Kendaraan</label>
                                <div class="invalid-feedback">
                                    Jumlah Kendaraan tidak boleh kosong
                                </div>
                            </div>

                            <div class="md-form">
                                <input name="jenis_kendaraan" type="text" id="form2" class="form-control" value="<?= $ask['jenis_kendaraan'] ?>">
                                <label for="form2">Model/Jenis Kendaraan</label>
                                <div class="invalid-feedback">
                                    Model/Jenis Kendaraan tidak boleh kosong
                                </div>
                            </div>

                            <div class="md-form">
                                <input name="kapasitas_angkut" type="text" id="form2" class="form-control" value="<?= $ask['kapasitas_angkut'] ?>">
                                <label for="form2">Kapasitas angkut penumpang</label>
                                <div class="invalid-feedback">
                                    Kapasitas angkut penumpang tidak boleh kosong
                                </div>
                            </div>

                            <div class="form-group my-5">
                                <select name="wilayah_operasi" class="mdb-select md-form mt-5" searchable="Wilayah Operasi">
                                    <?php
                                    if ($ask['wilayah_operasi'] == "Kota Gorontalo dan Sekitarnya") {
                                        $sel = "selected";
                                        $sel1 = "";
                                        $sel2 = "";
                                        $sel3 = "";
                                    }
                                    if ($ask['wilayah_operasi'] == "Kabupaten Gorontalo Utara") {
                                        $sel = "";
                                        $sel1 = "selected";
                                        $sel2 = "";
                                        $sel3 = "";
                                    }
                                    if ($ask['wilayah_operasi'] == "Kabupaten Boalemo") {
                                        $sel = "";
                                        $sel1 = "";
                                        $sel2 = "selected";
                                        $sel3 = "";
                                    }
                                    if ($ask['wilayah_operasi'] == "Kabupaten Pohuwato") {
                                        $sel = "";
                                        $sel1 = "";
                                        $sel2 = "";
                                        $sel3 = "selected";
                                    }
                                    ?>
                                    <option value="" disabled selected>Pilih</option>
                                    <option value="Kota Gorontalo dan Sekitarnya" <?= $sel ?>>Kota Gorontalo dan Sekitarnya</option>
                                    <option value="Kabupaten Gorontalo Utara" <?= $sel1 ?>>Kabupaten Gorontalo Utara</option>
                                    <option value="Kabupaten Boalemo" <?= $sel2 ?>>Kabupaten Boalemo</option>
                                    <option value="Kabupaten Pohuwato" <?= $sel3 ?>>Kabupaten Pohuwato</option>
                                </select>
                                <label class="mdb-main-label">Fasilitas pemeliharaan atau perawatan kendaraan</label>
                                <div class="kacili" style="margin-top:-20px;">
                                    <?= $validation->getError('nama_pemohon') ?>
                                </div>
                            </div>

                            <hr class="mt-5">
                            <h5 class="text-dark font-weight-bold card-title">Upload Dokumen</h5>
                            <p class="card-text">Upload dokumen persyaratan
                            </p>


                            <div class="md-form mt-5">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="file" name="img_surat_permohonan" id="uploadImage">
                                        <input type="hidden" name="img_surat_permohonan_lama" value="<?= $ask['img_surat_permohonan'] ?>">
                                    </div>
                                    <a href="/img/img_surat_permohonan/<?= $ask['img_surat_permohonan'] ?>" target="_blank" class="ml-auto btn btn-sm btn-cyan"><i class="fa fa-eye"></i> Lihat Dokumen</a>
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
                                        <input type="hidden" name="img_bukti_pengesahan_lama" value="<?= $ask['img_bukti_pengesahan'] ?>">
                                    </div>
                                    <a href="/img/img_bukti_pengesahan/<?= $ask['img_bukti_pengesahan'] ?>" target="_blank" class="ml-auto btn btn-sm btn-cyan"><i class="fa fa-eye"></i> Lihat Dokumen</a>
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
                                        <input type="hidden" name="img_domisili_lama" value="<?= $ask['img_domisili'] ?>">
                                    </div>
                                    <a href="/img/img_domisili/<?= $ask['img_domisili'] ?>" target="_blank" class="ml-auto btn btn-sm btn-cyan"><i class="fa fa-eye"></i> Lihat Dokumen</a>
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
                                        <input type="hidden" name="img_pernyataan_kesanggupan_lama" value="<?= $ask['img_pernyataan_kesanggupan'] ?>">
                                    </div>
                                    <a href="/img/img_pernyataan_kesanggupan/<?= $ask['img_pernyataan_kesanggupan'] ?>" target="_blank" class="ml-auto btn btn-sm btn-cyan"><i class="fa fa-eye"></i> Lihat Dokumen</a>
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
                                        <input type="hidden" name="img_pernyataan_kerjasama_lama" value="<?= $ask['img_pernyataan_kerjasama'] ?>">
                                    </div>
                                    <a href="/img/img_pernyataan_kerjasama/<?= $ask['img_pernyataan_kerjasama'] ?>" href="/img/img_bukti_pengesahan/<?= $ask['img_bukti_pengesahan'] ?>" target="_blank" class="ml-auto btn btn-sm btn-cyan"><i class="fa fa-eye"></i> Lihat Dokumen</a>
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
                                        <input type="hidden" name="img_perjanjian_lama" value="<?= $ask['img_perjanjian'] ?>">
                                    </div>
                                    <a href="/img/img_perjanjian/<?= $ask['img_perjanjian'] ?>" target="_blank" class="ml-auto btn btn-sm btn-cyan"><i class="fa fa-eye"></i> Lihat Dokumen</a>
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
                                        <input type="hidden" name="img_pemda_lama" value="<?= $ask['img_pemda'] ?>">
                                    </div>
                                    <a href="/img/img_pemda/<?= $ask['img_pemda'] ?>" target="_blank" class="ml-auto btn btn-sm btn-cyan"><i class="fa fa-eye"></i> Lihat Dokumen</a>
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
                                        <input type="hidden" name="img_rencana_bisnis_lama" value="<?= $ask['img_rencana_bisnis'] ?>">
                                    </div>
                                    <a href="/img/img_rencana_bisnis/<?= $ask['img_rencana_bisnis'] ?>" target="_blank" class="ml-auto btn btn-sm btn-cyan"><i class="fa fa-eye"></i> Lihat Dokumen</a>
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
                        <button type="submit button" class="btn btn-md btn-info">Ajukan Permohonan <i class="fa fa-arrow-right ml-1"></i> </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>