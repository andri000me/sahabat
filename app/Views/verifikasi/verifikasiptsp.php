<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <!-- <div class="judul pl-4 wow fadeInLeft"><i class="fa fa-file mr-2"></i> Data permohonan rekomendasi</div> -->

    <div class="row mb-5">
        <div class="col-sm-12 mb-3 mb-md-0">
            <div class="cards px-4 pt-3">
                <div class="card-body">

                    <div class="row animated zoomIn">
                        <div class="col">
                            <h4 class="text-dark font-weight-bold card-title">Data permohonan rekomendasi </h4>
                            <p class="card-text">Data permohonan rekomendasi masuk Dinas Perhubungan Provinsi Gorontalo</p>
                        </div>
                    </div>
                    <div class="table-responsive animated zoomIn">
                        <table id="dtMaterialDesignExample" class="table table-bordered" cellspacing="0" width="100%">
                            <thead class="cyan white-text">
                                <tr>
                                    <td class="th-sm">Nama Pemohon
                                    </td>
                                    <td class="th-sm">Nama Pemilik
                                    </td>
                                    <td class="th-sm" style="width: 120px;">Nomor Kendaraan
                                    </td>
                                    <td class="th-sm">Permohoanan
                                    </td>
                                    <td class="th-sm">Status
                                    </td>
                                    <td class="th-sm" style="width:140px;">Action
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($permohonan as $tr) : ?>
                                    <?php
                                    if ($tr['status'] == 1) {
                                        $status = "Permohonan Baru";
                                    }
                                    if ($tr['status'] == 2) {
                                        $status = "Perpanjangan";
                                    }
                                    ?>
                                    <tr>
                                        <td><?= $tr['nama_perusahaan']; ?></td>
                                        <td><?= $tr['nama_pemilik']; ?></td>
                                        <td><?= $tr['nomor_kendaraan']; ?></td>
                                        <td><?= $status ?></td>
                                        <?php
                                        if ($tr['status_verifikasi'] == 0) {
                                            if ($tr['img_pengantar_ptsp']) {
                                                $st = '<span class="badge badge-success"><i class="fas fa-stopwatch"></i> Berkas Lengkap, Silahkan Ajukan Permohonan</span>';
                                                $btn2 = '<a onclick="return confirm(\'Apakah anda yakin ?\')" href="/verifikasi/terimaptsp/' . $tr['idpermohonan'] . '" type="btn" class="ml-auto btn btn-sm btn-rounded btn-success animated rotateIn"><i class="fa fa-check"></i> Ajukan</a>';
                                            } else {
                                                $st = '<span class="badge badge-warning"><i class="fas fa-stopwatch"></i> Lengkapi Dokumen</span>';
                                                $btn2 = "";
                                            }
                                            $btn = '<a href="/verifikasi/details/' . $tr['kode_booking'] . '/' . $tr['trayek_dilayani'] . '" type="btn" class="ml-auto btn btn-sm btn-rounded btn-warning animated rotateIn"><i class="fa fa-check"></i> Verivikasi</a>';
                                            if (!$btn) {
                                                $btn = '<a href="/verifikasi/uploadpengantarptsp/' . $tr['kode_booking'] . '/' . $tr['trayek_dilayani'] . '" type="btn" class="ml-auto btn btn-sm btn-rounded btn-secondary animated rotateIn"><i class="fa fa-check"></i> Lengkapi</a>';
                                            }
                                        }
                                        if ($tr['status_verifikasi'] == 1) {
                                            $st = '<span class="badge badge-warning"><i class="fas fa-stopwatch"></i> Sedang Diverifikasi Oleh Dishub</span>';
                                            $btn = "";
                                            $btn2 = "";
                                        }
                                        if ($tr['status_verifikasi'] == 2) {
                                            $st = '<span class="badge badge-warning"><i class="fas fa-stopwatch"></i> Menunggu Approve</span>';
                                            $btn = "";
                                            $btn2 = "";
                                        }
                                        if ($tr['status_verifikasi'] == 3) {
                                            $st = '<span class="badge badge-success"><i class="fas fa-stopwatch"></i> Diapprove</span>';
                                            $btn = '<a href="/verifikasi/cetak/' . $tr['kode_booking'] . '/' . $tr['jenis_permohonan']  . '/' . $tr['trayek_dilayani']  . '" target="_blank" type="btn" class="ml-auto btn btn-sm btn-rounded btn-success animated rotateIn"><i class="fa fa-check"></i> Cetak Rekomendasi Izin AKDP</a>';
                                            $btn2 = "";
                                        }
                                        if ($tr['status_verifikasi'] == 4) {
                                            $st = '<span class="badge badge-danger"><i class="fas fa-stopwatch"></i> Ditolak</span>';
                                            $btn = "";
                                            $btn2 = "";
                                        }
                                        ?>
                                        <td><?= $st ?></td>
                                        <td>
                                            <?= $btn2 ?>
                                            <?= $btn ?>
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