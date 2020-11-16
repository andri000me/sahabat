<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <div class="row mb-5 wow fadeInRight">
        <div class="col-sm-12 mb-3 mb-md-0">
            <div class="">
                <div class="card-body">

                    <h5 class="text-dark font-weight-bold card-title">Data Permohonan Rekomendasi AOTDT</h5>
                    <p class="card-text">Untuk mengajukan Permohonan Izin AOTDT, Silahkan klik "Ajukan" pada action di kanan tabel <br>
                    </p>

                    <div class="cards px-4 py-3">
                        <div class="table-responsive animated zoomIn">
                            <table id="dtMaterialDesignExample" class="table table-bordered table-striped" cellspacing="0" width="100%">
                                <thead class="primary-color-dark white-text">
                                    <tr>
                                        <td class="th-sm">No
                                        </td>
                                        <td class="th-sm">Kode Registrasi
                                        </td>
                                        <td class="th-sm">Nama Perusahaan
                                        </td>
                                        <td class="th-sm">Jumlah Kendaraan
                                        </td>
                                        <td class="th-sm" style="width: 120px;">Tanggal Pengajuan
                                        </td>
                                        <td class="th-sm">Status
                                        </td>
                                        <td class="th-sm" style="width:360px;">Action
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1
                                    ?>
                                    <?php foreach ($ask as $ran) : ?>
                                        <tr>
                                            <?php
                                            if ($ran['status_dishub'] == 0) {
                                                $status = '<a href="" class="badge badge-warning">Lengkapi Berkas</a>';
                                                $button = '<a href="/ask/ajukanpermohonan/' . $ran['slug'] . '/' . $ran['kode_registrasi'] . '" class="btn btn-sm btn-secondary">Ajukan Permohonan <i class="fa fa-arrow-right"></i></a>';
                                            }
                                            if ($ran['status_dishub'] == 1) {
                                                $status = '<a href="" class="badge badge-warning">Sedang diverifikasi oleh Dishub</a>';
                                                $button = '';
                                            }
                                            if ($ran['status_dishub'] == 2) {
                                                $status = '<a href="" class="badge badge-success">Diterima</a>';
                                                if ($ran['img_permohonan']) {
                                                    $button = '<a target="_blank" href="/img/img_permohonan/' . $ran['img_permohonan'] . '" class="btn btn-sm btn-success">Cetak Permohonan <i class="fa fa-arrow-right"></i></a>';
                                                } else {
                                                    $button = '';
                                                }
                                            }
                                            if ($ran['status_dishub'] == 3) {
                                                $status = '<a href="" class="badge badge-danger">Ditolak</a>';
                                                if ($ran['img_permohonan']) {
                                                    $button = '<a href="/ask/cetakpenolakanpermohonan/' . $ran['slug'] . '/' . $ran['kode_registrasi'] . '" class="btn btn-sm btn-success">Cetak Penolakan <i class="fa fa-arrow-right"></i></a>';
                                                } else {
                                                    $button = '';
                                                }
                                            }
                                            ?>
                                            <td><?= $i++ ?></td>
                                            <td><a href="#" class="font-weight-bold text-primary"><?= $ran['kode_registrasi'] ?></a></td>
                                            <td><?= $ran['nama_perusahaan'] ?></td>
                                            <td><a href="" class="font-weight-bold text-dark"><?= $ran['jumlah_kendaraan'] ?></a></td>
                                            <td><?= $ran['created_at'] ?></td>
                                            <td>
                                                <?= $status ?>
                                            </td>
                                            <td>
                                                <?= $button ?>
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