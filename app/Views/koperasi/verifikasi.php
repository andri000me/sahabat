<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <div class="row mb-5 wow fadeInRight">
        <div class="col-sm-12 mb-3 mb-md-0">
            <div class="">
                <div class="card-body">


                    <div class="cards px-4 py-3">
                        <!-- Form -->
                        <form method="POST" class="needs-validation md-form text-left" style="color: #757575;" action="/koperasi/saveEdit" enctype="multipart/form-data" novalidate>

                            <input name="id" type="hidden" value="<?= $permohonan['idpermohonan'] ?>">
                            <input name="asal" type="hidden" value="<?= $permohonan['asal'] ?>">
                            <input name="tujuan" type="hidden" value="<?= $permohonan['tujuan'] ?>">

                            <div class="row mb-5">
                                <div class="col">
                                    <h5 class="text-primary font-weight-bold card-title">Data Permohonan Rekomendasi Asal / Tujuan Angkutan
                                        Orang Dalam Trayek AKDP</h5>
                                    <p class="card-text">Periksa apaka field isian sama dengan dokumen yang di upload</p>
                                </div>

                                <div class="col text-right">
                                    <button type="submit button" class="btn btn-sm btn-primary text-light">Simpan Perubahan<i class="fa fa-check ml-1"></i> </button>
                                    <a data-toggle="modal" data-target="#centralModalSuccess" type="button" class="btn btn-sm btn-success text-light">Approve<i class="fa fa-check ml-1"></i> </a>
                                    <a data-toggle="modal" data-target="#ModalDanger" type="button" class="btn btn-sm btn-danger text-light">Tolak<i class="fa fa-ban ml-1"></i> </a>
                                </div>
                            </div>
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
                        </form>
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

                        <h5 class="text-dark font-weight-bold card-title mt-5">Foto 4 Sisi Kendaraan</h5>
                        <p class="card-text">Foto 4 Sisi Kendaraan</p>

                        <div class="row">
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="view overlay">
                                        <img class="card-img-top" src="/img/foto_depan/<?= $permohonan['foto_depan'] ?>" alt="Card image cap">
                                        <a href="#!">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <div class="card-body text-center">
                                        <h4 class="card-title">Foto Depan</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="view overlay">
                                        <img class="card-img-top" src="/img/foto_belakang/<?= $permohonan['foto_belakang'] ?>" alt="Card image cap">
                                        <a href="#!">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <div class="card-body text-center">
                                        <h4 class="card-title">Foto Belakang</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="view overlay">
                                        <img class="card-img-top" src="/img/foto_kanan/<?= $permohonan['foto_kanan'] ?>" alt="Card image cap">
                                        <a href="#!">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <div class="card-body text-center">
                                        <h4 class="card-title">Foto Samping Kanan</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="view overlay">
                                        <img class="card-img-top" src="/img/foto_kiri/<?= $permohonan['foto_kiri'] ?>" alt="Card image cap">
                                        <a href="#!">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <div class="card-body text-center">
                                        <h4 class="card-title">Foto Samping Kiri</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- modal terima -->
<!-- Central Modal Medium Success -->
<div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-success" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading lead">Konfirmasi</p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">
                <div class="text-center">
                    <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
                    <p>Terima permohonan dari <b><?= $koperasi['nama_perusahaan'] ?> ?</b></p>
                </div>
            </div>

            <!--Footer-->
            <div class="modal-footer justify-content-center">
                <?php
                if ($session['id'] == 9) {
                    $mana = "Kota";
                }
                if ($session['id'] == 10) {
                    $mana = "Kab";
                }
                if ($session['id'] == 11) {
                    $mana = "BoneBol";
                }
                if ($session['id'] == 12) {
                    $mana = "Gorut";
                }
                if ($session['id'] == 13) {
                    $mana = "Boalemo";
                }
                if ($session['id'] == 14) {
                    $mana = "Pohuwato";
                }
                ?>
                <a href="/koperasi/terima<?= $mana ?>/<?= $permohonan['slug'] ?>/<?= $permohonan['idpermohonan'] ?>" type="button" class="btn btn-success">Ya, Terima <i class="far fa-gem ml-1 white-text"></i></a>
                <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">Batal</a>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Central Modal Medium Success-->

<script>
    $("#centralModalSuccess").on('show.bs.modal', function() {
        alert("Hello World!");
    });
</script>

<!-- modal tolak -->

<!-- Central Modal Danger Demo-->
<div class="modal fade" id="ModalDanger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="t`rue">
    <div class="modal-dialog modal-notify modal-danger" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading">Warning</p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">
                <div class="text-center">
                    <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
                    <p>Yakin lakukan penolakan terhadap permohonan dari <b><?= $koperasi['nama_perusahaan'] ?> ?</b></p>
                </div>
            </div>

            <!--Footer-->
            <div class="modal-footer justify-content-center">
                <a href="/koperasi/tolak<?= $mana ?>/<?= $permohonan['slug'] ?>/<?= $permohonan['idpermohonan'] ?>" type="button" class="btn btn-danger">Ya, Tolak <i class="far fa-gem ml-1 white-text"></i></a>
                <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Batal</a>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Central Modal Danger Demo-->

<script>
    $("#ModalDanger").on('hide.bs.modal', function() {
        alert("Hello World!");
    });
</script>
<?= $this->endSection(); ?>