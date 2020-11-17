<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <div class="row mb-5 wow fadeInRight">
        <div class="col-sm-12 mb-3 mb-md-0">
            <div class="">
                <div class="card-body">

                    <h5 class="text-dark font-weight-bold card-title">Data Permohonan Penerbitan Izin AOTDT</h5>
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
                                        <td class="th-sm">Status Upload
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
                                            if ($ran['penerbitan'] == 1 && $ran['status_penerbitan'] == 1) {
                                                $status = '<a href="" class="badge badge-warning">Lengkapi Berkas</a>';
                                                $button = '<a onclick="return confirm(\'Ajukan penerbitan izin untuk berkasi ini ?\')" href="/ask/ajukanpenerbitanizin/' . $ran['idask'] . '/' . $ran['slug'] . '/' . $ran['kode_registrasi'] . '" class="btn btn-sm btn-secondary">Ajukan Penerbitan Izin <i class="fa fa-check"></i></a>';
                                            }
                                            if ($ran['penerbitan'] == 1 && $ran['status_penerbitan'] == 2) {
                                                $status = '<a href="" class="badge badge-warning">Sedang diverifikasi oleh PTSP</a>';
                                                $button = '';
                                            }
                                            if ($ran['penerbitan'] == 1 && $ran['status_penerbitan'] == 3) {
                                                $status = '<a href="" class="badge badge-success">Diterima</a>';
                                                if ($ran['img_izin']) {
                                                    $status2  = '<a href="" class="badge badge-success">File telah di upload</a>';
                                                    $button = '<a target="_blank" href="/img/img_izin/' . $ran['img_izin'] . '" class="btn btn-sm btn-success">Cetak Izin AOTDT <i class="fa fa-arrow-right"></i></a>';
                                                } else {
                                                    $status2  = '<a href="" class="badge badge-danger">File belum di upload</a>';
                                                    $button = '';
                                                }
                                            }
                                            if ($ran['penerbitan'] == 1 && $ran['status_penerbitan'] == 4) {
                                                $status = '<a href="" class="badge badge-danger">Ditolak</a>';
                                                if ($ran['img_penolakan_izin']) {
                                                    $status2  = '<a href="" class="badge badge-success">File telah di upload</a>';
                                                    $button = '<a target="_blank" href="/img/img_penolakan_izin/' . $ran['img_penolakan_izin'] . '" class="btn btn-sm btn-danger">Cetak Penolakan Izin <i class="fa fa-arrow-right"></i></a>';
                                                } else {
                                                    $status2  = '<a href="" class="badge badge-danger">File belum di upload</a>';
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
                                                <?= $status2 ?>
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