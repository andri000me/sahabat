<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container">
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
                                    <td class="th-sm" style="width: 120px;">Nomor Kendaraan
                                    </td>
                                    <td class="th-sm">Permohoanan
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
                                        <td><?= $tr['nama_pemohon']; ?></td>
                                        <td><?= $tr['nomor_kendaraan']; ?></td>
                                        <td><?= $status ?></td>
                                        <?php
                                        if ($tr['status_verifikasi'] == 0) {
                                            $st = '<a href="/verifikasi/rekomendasi/' . $tr['kode_booking'] . '" type="btn" class="ml-auto btn btn-sm btn-rounded btn-danger animated rotateIn"><i class="fa fa-check"></i> Lakukan Verivikasi</a>';
                                        }
                                        if ($tr['status_verifikasi'] == 1) {
                                            $st = '<span class="badge badge-success"><i class="fas fa-stopwatch"></i> Diverifikasi</span>';
                                        }
                                        if ($tr['status_verifikasi'] == 2) {
                                            $st = '<span class="badge badge-success"><i class="fas fa-stopwatch"></i> Sedang Diverifikasi</span>';
                                        }
                                        if ($tr['status_verifikasi'] == 3) {
                                            $st = '<span class="badge badge-danger"><i class="fas fa-stopwatch"></i> Ditolak</span>';
                                        }
                                        if ($tr['status_verifikasi'] == 4) {
                                            $st = "salah script bro";
                                        }
                                        ?>
                                        <td><?= $st ?></td>
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