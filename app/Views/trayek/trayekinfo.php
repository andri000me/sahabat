<?= $this->extend('layout/template_public') ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <!-- <div class="judul pl-4 wow fadeInLeft"><i class="fa fa-file mr-2"></i> Data Trayek</div> -->

    <div class="row mb-5">
        <div class="col-sm-12 mb-3 mb-md-0">
            <div class="px-4 pt-3">
                <div class="card-body">

                    <div class="row animated zoomIn">
                        <div class="col text-center">
                            <img src="/assets/img/logos.png" alt="" width="7%" class="mb-3">
                            <h2 class="text-uppercase text-dark font-weight-bold card-title">Data Trayek</h2>
                            <p class="card-text text-uppercase">Data trayek yang dilayani Dinas Perhubungan Provinsi Gorontalo</p>
                        </div>
                    </div>
                    <div class="cards py-4 px-4 mt-4 color-a">
                        <div class="table-responsive animated zoomIn">
                            <table id="dtMaterialDesignExample" class="table table-bordered" cellspacing="0" width="100%">
                                <thead class="cyan white-text">
                                    <tr>
                                        <th class="th-sm">Kode Trayek
                                        </th>
                                        <th class="th-sm">Nama Trayek
                                        </th>
                                        <th class="th-sm">Kuota
                                        </th>
                                        <th class="th-sm">Terisi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($trayek as $tr) : ?>
                                        <?php
                                        if ($tr['kuota'] == 0) {
                                            $kuota = '<span class="text-danger"> Kuota Habis</span>';
                                        } else {
                                            $kuota = '<span class="text-success font-weight-bold">' . $tr['kuota'] . '</span>';
                                        }
                                        ?>
                                        <tr>
                                            <td><?= $tr['kode_trayek']; ?></td>
                                            <td><?= $tr['trayek']; ?></td>
                                            <td><?= $kuota ?></td>
                                            <td class="text-danger"><?= $tr['terisi'] ?></td>
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
</div>

<!-- Central Modal Medium Danger -->
<div class="modal fade" id="centralModalDanger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-info" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading lead">Tambah Kuota Trayek</p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">
                <div class="md-form mb-5">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <input type="number" id="defaultForm-email" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="defaultForm-email">Masukan jumlah kuota trayek</label>
                </div>
            </div>

            <!--Footer-->
            <div class="modal-footer justify-content-center">
                <a href="" type="button" class="btn btn-info waves-effect" data-dismiss="modal"><i class="fa fa-plus"></i> Tambah</a>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Central Modal Medium Danger-->

<?= $this->endSection(); ?>