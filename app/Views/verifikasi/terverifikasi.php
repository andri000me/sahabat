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
                                    <td class="th-sm" style="width: 120px;">Nomor Kendaraan
                                    </td>
                                    <td class="th-sm">Status Verifikasi
                                    </td>
                                    <td class="th-sm">Status
                                    </td>
                                    <td class="th-sm" style="width:240px;">Action
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($permohonan as $tr) : ?>

                                    <?php
                                    if ($tr['status'] == 1) {
                                        $status = "Permohonan Baru";
                                    }
                                    if ($tr['status'] == 0) {
                                        $status = "Perpanjangan";
                                    }
                                    ?>

                                    <?php
                                    if ($tr['status_verifikasi'] == 0) {
                                        $href2 = 'data-toggle="modal" data-target="#centralModalDanger2"';
                                        $href = 'data-toggle="modal" data-target="#centralModalDanger2"';
                                        $st = '<span class="badge badge-danger"><i class="fas fa-stopwatch"></i> Belum Diverifikasi</span>';
                                    }
                                    if ($tr['status_verifikasi'] == 1) {
                                        $href2 = 'data-toggle="modal" data-target="#centralModalDanger"';
                                        $href = 'href=/verifikasi/approve/' . $tr['id'] . '';
                                        $st = '<span class="badge badge-warning"><i class="fas fa-stopwatch"></i> Diverifikasi</span>';
                                    }
                                    if ($tr['status_verifikasi'] == 2) {
                                        $href2 = 'href=/verifikasi/cetak/' . $tr['kode_booking'] . '/' . $tr['jenis_permohonan']  . '/' . $tr['trayek_dilayani']  . ' target=_blank';
                                        $href = "";
                                        $st = '<span class="badge badge-success"><i class="fas fa-stopwatch"></i> Di Approve</span>';
                                    }
                                    ?>

                                    <tr>
                                        <td><?= $tr['nama_pemohon']; ?></td>
                                        <td><?= $tr['nomor_kendaraan']; ?></td>
                                        <td><?= $st ?></td>
                                        <td><?= $status ?></td>
                                        <td><a href="/verifikasi/terverifikasi/<?= $tr['kode_booking']; ?>" type="btn" class="ml-auto btn btn-sm btn-rounded btn-cyan animated rotateIn"><i class="fa fa-eye"></i> Lihat Detail</a>
                                            <a <?= $href ?> type="btn" class="ml-auto btn btn-sm btn-rounded btn-success animated rotateIn"><i class="fa fa-check"></i> Approve</a>
                                            <a <?= $href2 ?> type="btn" class="btn-disabled ml-auto btn btn-sm btn-rounded btn-light animated rotateIn"><i class="fa fa-print"></i> Cetak</a></td>
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

<!-- Central Modal Medium Danger -->
<div class="modal fade" id="centralModalDanger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-danger" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading lead">Peringatan !</p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">
                <div class="text-center">
                    <i class="text-danger fa fa-ban fa-4x mb-3 animated rotateIn"></i>
                    <p>Data Belum Di Approve</p>
                    <p style="margin-top:-31px;">Silahkan klik Approve terlebih dahulu</p>
                </div>
            </div>

            <!--Footer-->
            <div class="modal-footer justify-content-center">
                <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Ok</a>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<div class="modal fade" id="centralModalDanger2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-danger" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading lead">Peringatan !</p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">
                <div class="text-center">
                    <i class="text-danger fa fa-ban fa-4x mb-3 animated rotateIn"></i>
                    <p>Data Belum Di Verifikasi</p>
                    <p style="margin-top:-31px;">Silahkan hubungi verifikator</p>
                </div>
            </div>

            <!--Footer-->
            <div class="modal-footer justify-content-center">
                <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Ok</a>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Central Modal Medium Danger-->

<?= $this->endSection(); ?>