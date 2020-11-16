<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <div class="row mb-5 wow fadeInRight">
        <div class="col-sm-12 mb-3 mb-md-0">
            <div class="">
                <div class="card-body">

                    <h5 class="text-dark font-weight-bold card-title">Lengkapi berkas kendaraan</h5>
                    <p class="card-text">Silahkan lengkapi berkas kendaraan anda sesuai dengan jumlah kendaraan yang dimohon, <br>
                        Berkas yang harus anda upload antara lain: <br>
                        1. Scan/Foto STNK (Jelas) <br>
                        2. Scan/Foto Buku KIR (Jelas) <br>
                        3. Scan/Foto Jasa Raharja (Jelas) <br>
                        4. Foto 4 Sisi Kendaraan (Depan, Belakang, Samping Kanan, dan Samping Kiri) <br>
                        <br>
                        File di gabung menjadi satu dalam format .pdf <br>
                    </p>

                    <?php
                    if (count($ranmor) != $ask['jumlah_kendaraan']) {
                    ?>
                        <div class="cards px-4 py-3">
                            <form method="POST" class="needs-validation md-form text-left" style="color: #757575;" action="/ranmor/save" enctype="multipart/form-data" novalidate>

                                <?php
                                if ($ask) {
                                ?>
                                    <input type="hidden" name="slug" value="<?= $ask['slug'] ?>">
                                    <input type="hidden" name="kode_registrasi" value="<?= $ask['kode_registrasi'] ?>">
                                <?php
                                } else {
                                }
                                ?>
                                <p class="font-weight-bold">Data kendaraan</p>
                                <div class="md-form">
                                    <input name="nomor_kendaraan" type="text" id="form2" class="form-control" required>
                                    <label for="nomor_kendaraan">Nomor kendaraan</label>
                                    <div class="invalid-feedback">
                                        Nomor kendaraan tidak boleh kosong
                                    </div>
                                </div>

                                <div class="md-form">
                                    <input name="nomor_uji" type="text" id="form2" class="form-control" required>
                                    <label for="nomor_uji">Nomor UJI</label>
                                    <div class="invalid-feedback">
                                        Nomor UJI tidak boleh kosong
                                    </div>
                                </div>

                                <div class="md-form">
                                    <input name="kapasitas" type="text" id="form2" class="form-control" required>
                                    <label for="kapasitas">Kapasitas Angkutan</label>
                                    <div class="invalid-feedback">
                                        Kapasitas Angkutan tidak boleh kosong
                                    </div>
                                </div>

                                <div class="md-form">
                                    <div class="file-field">
                                        <div class="btn primary-color-dark text-light btn-sm float-left">
                                            <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                            <input type="file" name="img_ranmor" id="uploadImage">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input name="img_ranmor" class="file-path validate" type="text" placeholder="Berkas ">
                                        </div>
                                    </div>
                                    <div class="kacili" style="margin-left:150px;">
                                        <?= $validation->getError('img_ranmor') ?>
                                    </div>
                                </div>

                        </div>
                        <div class="buttons mt-5">
                            <button type="submit button" class="btn btn-md btn-info">Tambah Data Kendaraan <i class="fa fa-plus ml-1"></i> </button>
                        </div>
                        </form>
                    <?php
                    } else {
                    ?>
                        <a href="/ask/ajukandishub/<?= $ask['slug'] ?>/<?= $ask['kode_registrasi'] ?>/<?= $ask['idask'] ?>" onclick="return confirm('Ajukan permohonan ini ?')" type="button" class="btn btn-md btn-success">Ajukan Permohonan <i class="fa fa-check ml-1"></i> </a>
                    <?php
                    }
                    ?>
                </div>

                <div class="cards px-4 py-3">
                    <div class="table-responsive animated zoomIn">
                        <table id="dtMaterialDesignExample" class="table table-bordered table-striped" cellspacing="0" width="100%">
                            <thead class="primary-color-dark white-text">
                                <tr>
                                    <td class="th-sm">No
                                    </td>
                                    <td class="th-sm">Nomor Kendaraan
                                    </td>
                                    <td class="th-sm" style="width: 120px;">Nomor UJI
                                    </td>
                                    <td class="th-sm">Kapasitas
                                    </td>
                                    <td class="th-sm" style="width:360px;">Action
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1
                                ?>
                                <?php foreach ($ranmor as $ran) : ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= $ran['nomor_kendaraan'] ?></td>
                                        <td><?= $ran['nomor_uji'] ?></td>
                                        <td><?= $ran['kapasitas'] ?></td>
                                        <td>
                                            <a href="/ranmor/hapus/<?= $ran['idranmor'] ?>/<?= $ask['slug'] ?>/<?= $ask['kode_registrasi'] ?>" onclick="return confirm('Apakah anda yakin ?')" class="btn btn-sm btn-danger mr-1">Hapus</a>
                                            <a href="/img/img_ranmor/<?= $ran['img_ranmor'] ?>" target="_blank" class="btn btn-sm btn-success">Lihat Dokumen</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>