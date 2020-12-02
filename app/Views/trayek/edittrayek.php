<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <!-- <div class="judul pl-4 wow fadeInLeft"><i class="fa fa-file mr-2"></i> Data permohonan rekomendasi</div> -->

    <div class="row mb-5 row animated zoomIn mt-3">
        <div class="col-sm-12 mb-3 mb-md-0">
            <div class="cards px-4 pt-3">
                <div class="card-body">

                    <div class="">
                        <div class="col">
                            <h4 class="text-dark font-weight-bold card-title ml-1">Edit Data Asal-Tujuan Trayek </h4>
                        </div>
                    </div>
                    <div class="mb-5 mt-0">

                        <!--Card content-->
                        <div class="card-body pt-0">

                            <!-- Form -->
                            <form class="text-left" style="color: #757575;" action="/trayek/saveedit">

                                <input type="hidden" value="<?= $trayek['id'] ?>" name="id">

                                <!-- E-mail -->
                                <div class="md-form mt-5">
                                    <input value="<?= $trayek['kode_trayek'] ?>" name="kode_trayek" type="text" id="materialRegisterFormEmail" class="form-control">
                                    <label for="materialRegisterFormEmail">Kode Trayek</label>
                                </div>

                                <!-- E-mail -->
                                <div class="md-form mt-0">
                                    <input value="<?= $trayek['trayek'] ?>" name="trayek" type="text" id="materialRegisterFormEmail" class="form-control">
                                    <label for="materialRegisterFormEmail">Trayek</label>
                                </div>

                                <div class="md-form mt-0">
                                    <input value="<?= $trayek['kuota'] ?>" name="kuota" type="text" id="materialRegisterFormEmail" class="form-control">
                                    <label for="materialRegisterFormEmail">Kuota</label>
                                </div>

                                <div class="md-form mt-0">
                                    <input value="<?= $trayek['terisi'] ?>" name="terisi" type="text" id="materialRegisterFormEmail" class="form-control">
                                    <label for="materialRegisterFormEmail">Terisi</label>
                                </div>

                                <div class="form-group">
                                    <select name="asal" class="mdb-select md-form mt-5" searchable="Asal Trayek">
                                        <option value="" disabled selected>Asal Trayek</option>
                                        <?php
                                        if ($trayek['asal'] == 1) {
                                            $t1 = "selected";
                                            $t2 = "";
                                            $t3 = "";
                                            $t4 = "";
                                            $t5 = "";
                                            $t6 = "";
                                        } else if ($trayek['asal'] == 2) {
                                            $t1 = "";
                                            $t2 = "selected";
                                            $t3 = "";
                                            $t4 = "";
                                            $t5 = "";
                                            $t6 = "";
                                        } else if ($trayek['asal'] == 3) {
                                            $t1 = "";
                                            $t2 = "";
                                            $t3 = "selected";
                                            $t4 = "";
                                            $t5 = "";
                                            $t6 = "";
                                        } else if ($trayek['asal'] == 4) {
                                            $t1 = "";
                                            $t2 = "";
                                            $t3 = "";
                                            $t4 = "selected";
                                            $t5 = "";
                                            $t6 = "";
                                        } else if ($trayek['asal'] == 5) {
                                            $t1 = "";
                                            $t2 = "";
                                            $t3 = "";
                                            $t4 = "";
                                            $t5 = "selected";
                                            $t6 = "";
                                        } else if ($trayek['asal'] == 6) {
                                            $t1 = "";
                                            $t2 = "";
                                            $t3 = "";
                                            $t4 = "";
                                            $t5 = "";
                                            $t6 = "selected";
                                        } else {
                                            $t1 = "";
                                            $t2 = "";
                                            $t3 = "";
                                            $t4 = "";
                                            $t5 = "";
                                            $t6 = "";
                                        }
                                        ?>
                                        <option value="1" <?= $t1 ?>>Kota Gorontalo</option>
                                        <option value="2" <?= $t2 ?>>Kabupaten Gorontalo</option>
                                        <option value="3" <?= $t3 ?>>Kabupaten Bone Bolango</option>
                                        <option value="4" <?= $t4 ?>>Kabupaten Gorontalo Utara</option>
                                        <option value="5" <?= $t5 ?>>Kabupaten Boalemo</option>
                                        <option value="6" <?= $t6 ?>>Kabupaten Pohuwato</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select name="tujuan" class="mdb-select md-form mt-5" searchable="Tujuan Trayek">
                                        <option value="" disabled selected>Tujuan Trayek</option>
                                        <?php
                                        if ($trayek['tujuan'] == 1) {
                                            $t1 = "selected";
                                            $t2 = "";
                                            $t3 = "";
                                            $t4 = "";
                                            $t5 = "";
                                            $t6 = "";
                                        } else if ($trayek['tujuan'] == 2) {
                                            $t1 = "";
                                            $t2 = "selected";
                                            $t3 = "";
                                            $t4 = "";
                                            $t5 = "";
                                            $t6 = "";
                                        } else if ($trayek['tujuan'] == 3) {
                                            $t1 = "";
                                            $t2 = "";
                                            $t3 = "selected";
                                            $t4 = "";
                                            $t5 = "";
                                            $t6 = "";
                                        } else if ($trayek['tujuan'] == 4) {
                                            $t1 = "";
                                            $t2 = "";
                                            $t3 = "";
                                            $t4 = "selected";
                                            $t5 = "";
                                            $t6 = "";
                                        } else if ($trayek['tujuan'] == 5) {
                                            $t1 = "";
                                            $t2 = "";
                                            $t3 = "";
                                            $t4 = "";
                                            $t5 = "selected";
                                            $t6 = "";
                                        } else if ($trayek['tujuan'] == 6) {
                                            $t1 = "";
                                            $t2 = "";
                                            $t3 = "";
                                            $t4 = "";
                                            $t5 = "";
                                            $t6 = "selected";
                                        } else {
                                            $t1 = "";
                                            $t2 = "";
                                            $t3 = "";
                                            $t4 = "";
                                            $t5 = "";
                                            $t6 = "";
                                        }
                                        ?>
                                        <option value="1" <?= $t1 ?>>Kota Gorontalo</option>
                                        <option value="2" <?= $t2 ?>>Kabupaten Gorontalo</option>
                                        <option value="3" <?= $t3 ?>>Kabupaten Bone Bolango</option>
                                        <option value="4" <?= $t4 ?>>Kabupaten Gorontalo Utara</option>
                                        <option value="5" <?= $t5 ?>>Kabupaten Boalemo</option>
                                        <option value="6" <?= $t6 ?>>Kabupaten Pohuwato</option>
                                    </select>
                                </div>
                                <!-- Sign up button -->
                                <button class="btn btn-dark btn-sm my-5 ml-0" type="submit"><i class="fa fa-save"></i> Simpan Perubahan</button>

                            </form>
                            <!-- Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>