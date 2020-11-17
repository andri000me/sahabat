<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <div class="row mb-5 wow fadeInRight">
        <div class="col-sm-12 mb-3 mb-md-0">
            <div class="">
                <div class="card-body">

                    <h5 class="text-dark font-weight-bold card-title">Data Persetujuan Permohonan Rekomendasi AOTDT</h5>

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
                                            $status = '<a href="" class="badge badge-warning">Sedang diverifikasi oleh PTSP</a></a>';
                                            $btn2 = '';
                                            $btn3 = '';
                                        }
                                        if ($ran['rekompersetujuan'] == 1 && $ran['status_rekompersetujuan'] == 1) {
                                            $status = '<a href="" class="badge badge-warning">Sedang Diverifikasi oleh Verifikator</a></a>';
                                            $btn2 = '';
                                            $btn3 = '';
                                        }
                                        if ($ran['rekompersetujuan'] == 1 && $ran['status_rekompersetujuan'] == 2) {
                                            $status = '<a href="" class="badge badge-warning">Lakukan Verifikasi</a>';
                                            $btn2 = '<a href="/ask/detailverifikasiaotdt/' . $ran['slug'] . '/' . $ran['kode_registrasi'] . '" class="btn btn-sm btn-warning">Verifikasi</a>
                                            <a onclick="return confirm(\'Yakin terima permohonan?\')" href="/ask/saveapprovepersetujuanizin/' . $ran['idask'] . '/' . $ran['slug'] . '/' . $ran['kode_registrasi'] . '" class="btn btn-sm btn-success">Approve</a>
                                            <a onclick="return confirm(\'Yakin tolak permohonan?\')" href="/ask/savetolakpersetujuanizin/' . $ran['idask'] . '/' . $ran['slug'] . '/' . $ran['kode_registrasi'] . '" class="btn btn-sm btn-danger">Tolak</a>';
                                            $btn3 = '';
                                        }
                                        if ($ran['rekompersetujuan'] == 1 && $ran['status_rekompersetujuan'] == 3) {
                                            $status = '<a href="" class="badge badge-success">Diapprove</a>';
                                            $btn2 = '';
                                            $btn3 = '<a href="/ask/uploadpenolakanptsp/' . $ran['slug'] . '/' . $ran['kode_registrasi'] . '" class="btn btn-sm btn-success">Cetak Persetujuan Izin</a>';
                                        }
                                        if ($ran['rekompersetujuan'] == 1 && $ran['status_rekompersetujuan'] == 4) {
                                            $status = '<a href="" class="badge badge-danger">Ditolak</a>';
                                            $btn2 = '';
                                            $btn3 = '<a href="/ask/uploadpenolakanptsp/' . $ran['slug'] . '/' . $ran['kode_registrasi'] . '" class="btn btn-sm btn-danger">Cetak Penolakan</a>';
                                        }
                                        ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><a href="#" class="font-weight-bold text-primary"><?= $ran['kode_registrasi'] ?></a></td>
                                            <td><?= $ran['nama_perusahaan'] ?></td>
                                            <td><a href="" class="font-weight-bold text-dark"><?= $ran['jumlah_kendaraan'] ?></a></td>
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