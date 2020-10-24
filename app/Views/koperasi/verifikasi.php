<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

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


                                <!-- <div class="md-form form-row mt-0">
                                    <div class="col">
                                        <select name="asal" class="mdb-select md-form" searchable="Asal Trayek">
                                            <option value="">Pilih</option>
                                            <?php foreach ($wilayah as $tr) : ?>
                                                <?php
                                                if ($permohonan['asal'] == $tr['id']) {
                                                    $selected = "selected";
                                                    $value = $tr['id'];
                                                    $v = $tr['wilayah'];
                                                } else {
                                                    $selected = "";
                                                    $value = $tr['id'];
                                                    $v = $tr['wilayah'];
                                                }
                                                ?>
                                                <option value="<?= $value ?>" <?= $selected ?>><?= $v ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <label class="mdb-main-label">Asal Trayek</label>
                                    </div>

                                    <div class="col">
                                        <select name="tujuan" class="mdb-select md-form" searchable="Tujuan Trayek">
                                            <option value="">Pilih</option>
                                            <?php foreach ($wilayah as $tr) : ?>
                                                <?php
                                                if ($permohonan['tujuan'] == $tr['id']) {
                                                    $selected = "selected";
                                                    $value = $tr['id'];
                                                    $v = $tr['wilayah'];
                                                } else {
                                                    $selected = "";
                                                    $value = $tr['id'];
                                                    $v = $tr['wilayah'];
                                                }
                                                ?>
                                                <option value="<?= $value ?>" <?= $selected ?>><?= $v ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <label class="mdb-main-label">Tujuan Trayek</label>
                                    </div>
                                </div> -->

                                <div class="md-form">
                                    <input name="nama_pemilik" type="text" id="form2" class="form-control" value="<?= $permohonan['nama_pemilik'] ?>" required>
                                    <label for="form2">Nama Pemilik Kendaraan</label>
                                    <div class="invalid-feedback">
                                        Nama Pemilik Kendaraan tidak boleh kosong
                                    </div>
                                </div>

                                <div class="md-form mb-4 pink-textarea active-textarea">
                                    <textarea name="alamat" id="form18" class="md-textarea form-control" rows="3" required><?= $permohonan['alamat_pemilik'] ?></textarea>
                                    <label for="form18">Alamat</label>
                                    <div class="invalid-feedback">
                                        Alamat tidak boleh kosong
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

                        <div class="buttons mt-5">
                            <button type="submit button" class="btn btn-md btn-primary text-light">Simpan Perubahan<i class="fa fa-check ml-1"></i> </button>
                            <a href="" type="button" class="btn btn-md btn-success text-light">Approve<i class="fa fa-check ml-1"></i> </a>
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>