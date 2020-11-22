<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <div class="row mb-5 wow fadeInRight">
        <div class="col-sm-12 mb-3 mb-md-0">
            <div class="">
                <div class="card-body">

                    <h5 class="text-dark font-weight-bold card-title">Data Penerbitan Izin AOTDT</h5>
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
                                            if ($ran['rekompersetujuan'] == 1 && $ran['status_rekompersetujuan'] == 0 && $ran['status_penerbitan'] == 0) {
                                                $status = '<a href="" class="badge badge-warning">Sedang Diverifikasi oleh PTSP</a>';
                                                $button = '';
                                                $btn3 = '';
                                            }
                                            if ($ran['rekompersetujuan'] == 1 && $ran['status_rekompersetujuan'] == 1 && $ran['status_penerbitan'] == 0) {
                                                $status = '<a href="" class="badge badge-warning">Sedang Di Verifikasi oleh Dishub</a></a>';
                                                $button = '';
                                                $btn3 = '';
                                            }
                                            if ($ran['rekompersetujuan'] == 1 && $ran['status_rekompersetujuan'] == 2 && $ran['status_penerbitan'] == 0) {
                                                $status = '<a href="" class="badge badge-warning">Menunggu approve</a>';
                                                $button = '';
                                                $btn3 = '';
                                            }
                                            if ($ran['rekompersetujuan'] == 1 && $ran['status_rekompersetujuan'] == 3 && $ran['status_penerbitan'] == 0) {
                                                $status = '<a href="" class="badge badge-warning">Lengkapi Berkas Kendaraan</a>';
                                                $button = '';
                                                $btn3 = '';
                                            }
                                            if ($ran['rekompersetujuan'] == 1 && $ran['status_rekompersetujuan'] == 4 && $ran['status_penerbitan'] == 0) {
                                                $status = '<a href="" class="badge badge-danger">Dtolak</a>';
                                                $button = '';
                                                $btn3 = '<a href="/ask/uploadpenolakanptsp/' . $ran['slug'] . '/' . $ran['kode_registrasi'] . '" class="btn btn-sm btn-danger">Cetak Penolakan</a>';
                                            }
                                            if ($ran['rekompersetujuan'] == 1 && $ran['status_rekompersetujuan'] == 3 && $ran['status_penerbitan'] == 1) {
                                                $status = '<a href="" class="badge badge-warning">Sedang diverifikasi oleh PTSP</a></a>';
                                                $button = '';
                                                $btn3 = '';
                                            }
                                            if ($ran['rekompersetujuan'] == 1 && $ran['status_rekompersetujuan'] == 3 && $ran['status_penerbitan'] == 2) {
                                                $status = '<a href="" class="badge badge-warning">Sedang Diverifikasi Oleh Verifikator</a></a>';
                                                $button = '';
                                                $btn3 = '';
                                            }
                                            if ($ran['rekompersetujuan'] == 1 && $ran['status_rekompersetujuan'] == 3 && $ran['status_penerbitan'] == 3) {
                                                $status = '<a href="" class="badge badge-warning">Lakukan Verifikasi !</a></a>';
                                                $button = '<a href="/ask/detailverifikasipenerbitan/' . $ran['slug'] . '/' . $ran['kode_registrasi'] . '" class="btn btn-sm btn-warning">Verifikasi <i class="fa fa-check"></i></a>';
                                                $btn3 = '';
                                            }
                                            if ($ran['rekompersetujuan'] == 1 && $ran['status_rekompersetujuan'] == 3 && $ran['status_penerbitan'] == 4) {
                                                $status = '<a href="" class="badge badge-success">Diapprove</a></a>';
                                                $button = '<a target="_blank" href="/ask/cetakpenerbitan/' . $ran['kode_registrasi'] . '" class="btn btn-sm btn-light"><i class="fa fa-print"></i> Cetak Rekomendasi Penerbitan Izin</a>
                                                <a target="_blank" href="/ask/uploadberitaacarapenerbitan/' . $ran['slug'] . '/' . $ran['kode_registrasi'] . '" class="btn btn-sm btn-success"><i class="fa fa-print"></i> Upload Berita Acara</a>
                                                ';
                                                if ($ran['img_penerbitan']) {
                                                    $btn3 = '<a target="_blank" href="/img/img_penerbitan/' . $ran['img_penerbitan'] . '" class="btn btn-sm btn-success">Cetak Berita Acara Penerbitan <i class="fa fa-print"></i> </a>';
                                                } else {
                                                    $btn3 = "";
                                                }
                                            }
                                            if ($ran['rekompersetujuan'] == 1 && $ran['status_rekompersetujuan'] == 3 && $ran['status_penerbitan'] == 5) {
                                                $status = '<a href="" class="badge badge-danger">Ditolak</a></a>';
                                                $button = '<a href="/ask/lengkapiberkas/' . $ran['slug'] . '/' . $ran['kode_registrasi'] . '" class="btn btn-sm btn-secondary">Cetak Rekomendasi Penerbitan <i class="fa fa-arrow-right"></i> </a>';
                                                $btn3 = "";
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
                                                <?= $btn3 ?>
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