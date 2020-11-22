<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <div class="row mb-5 wow fadeInRight">
        <div class="col-sm-12 mb-3 mb-md-0">
            <div class="">
                <div class="card-body">

                    <h5 class="text-dark font-weight-bold card-title">Data Persetujuan Permohonan Rekomendasi AOTDT</h5>
                    <p class="card-text">Silahkan lengkapi berkas kendaraan anda sesuai dengan jumlah kendaraan yang dimohon, <br>
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
                                        <?php
                                        if ($ran['rekompersetujuan'] == 1 && $ran['status_rekompersetujuan'] == 0) {
                                            $status = '<a href="" class="badge badge-warning">Sedang Diverifikasi oleh PTSP</a>';
                                            $btn2 = '';
                                            $btn3 = '';
                                        }
                                        if ($ran['rekompersetujuan'] == 1 && $ran['status_rekompersetujuan'] == 1) {
                                            $status = '<a href="" class="badge badge-warning">Sedang Di Verifikasi oleh Dishub</a></a>';
                                            $btn2 = '';
                                            $btn3 = '';
                                        }
                                        if ($ran['rekompersetujuan'] == 1 && $ran['status_rekompersetujuan'] == 2) {
                                            $status = '<a href="" class="badge badge-warning">Menunggu approve</a>';
                                            $btn2 = '';
                                            $btn3 = '';
                                        }
                                        if ($ran['rekompersetujuan'] == 1 && $ran['status_rekompersetujuan'] == 3) {
                                            $status = '<a href="" class="badge badge-success">Diapprove</a>';
                                            $btn2 = '<a target="_blank" href="/ask/cetakpermohonan/' . $ran['kode_registrasi'] . '" class="btn btn-sm btn-dark">Cetak Rekomendasi Persetujuan</a>';
                                            if ($ran['img_persetujuan_ptsp']) {
                                                $btn3 = '<a target="_blank" href="/img/img_persetujuan_ptsp/' . $ran['img_persetujuan_ptsp'] . '" class="btn btn-sm btn-success">Cetak Persetujuan Izin</a>';
                                            } else {
                                                $btn3 = "";
                                            }
                                        }
                                        if ($ran['rekompersetujuan'] == 1 && $ran['status_rekompersetujuan'] == 4) {
                                            $status = '<a href="" class="badge badge-danger">Dtolak</a>';
                                            $btn2 = '';
                                            $btn3 = '<a href="/ask/detailpenolakan/' . $ran['kode_registrasi'] . '" class="btn btn-sm btn-danger">Lihat Detail Penolakan</a>';
                                        }
                                        ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><a href="#" class="font-weight-bold text-primary"><?= $ran['kode_registrasi'] ?></a></td>
                                            <td><?= $ran['nama_perusahaan'] ?></td>
                                            <td><a href="" class="font-weight-bold text-dark"><?= $ran['jumlah_kendaraan'] ?> Unit</a></td>
                                            <td><?= $ran['created_at'] ?></td>
                                            <td>
                                                <?= $status ?>
                                            </td>
                                            <td>
                                                <?= $btn2 ?>
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