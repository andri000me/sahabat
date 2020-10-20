<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container">

    <div class="section-headers">
        <h3 class="section-titles mb-3"><img src="<?= base_url(); ?>/assets/img/icon/dishub.png" style="width:60px;" alt="IMG"></h3>
        <h3 class="section-titles">Dokumen Permohonan Pertimbangan Teknis </h3>
        <h3 class="section-titles">Izin Penyelenggaraan Angkutan Orang Dalam Trayek AKDP</h3>
        <?php
        if ($step2['status'] == 1) {
            $tatus = "Pengurusan Baru";
        }
        if ($step2['status'] == 2) {
            $tatus = "Perpanjangan";
        }
        ?>
        <h3 class="section-titles text-danger">(<?= $tatus ?>)</h3>
    </div>

    <!-- step -->
    <div class="row" style="margin-bottom:-30px;">
        <div class="col-md-12">

            <ul class="stepper stepper-horizontal">

                <li class="secondary wow fadeInLeft">
                    <a href="/rekomendasi/step11/<?= $step2['kode_booking'] ?>">
                        <span class="circle">1</span>
                        <span class="label">Step 1</span>
                    </a>
                </li>

                <li class="warning wow fadeInLeft">
                    <a href="#">
                        <span class="circle">2</span>
                        <span class="label">Step 2</span>
                    </a>
                </li>

                <li class="secondary wow fadeInLeft">
                    <a href="/rekomendasi/step3/<?= $step2['kode_booking'] ?>"">
                        <span class=" circle">3</span>
                        <span class="label">Step 3</span>
                    </a>
                </li>

                <li class="secondary wow fadeInLeft">
                    <a href="/rekomendasi/step4/<?= $step2['kode_booking'] ?>"">
                            <span class=" circle">4</span>
                        <span class="label">Step 4</span>
                    </a>
                </li>

                <li class="secondary wow fadeInLeft">
                    <a href="/rekomendasi/step5/<?= $step2['kode_booking'] ?>"">
                        <span class=" circle">5</span>
                        <span class="label">Step 5</span>
                    </a>
                </li>

                <li class="secondary wow fadeInLeft">
                    <a href="/rekomendasi/step6/<?= $step2['kode_booking'] ?>"">
                        <span class=" circle">6</span>
                        <span class="label">Step 6</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <div class="row mb-5 wow fadeInRight">
        <div class="col-sm-12 mb-3 mb-md-0">
            <div class="cards px-4 pt-3">
                <div class="card-body">
                    <h4 class="text-dark font-weight-bold card-title">Step 2 - Rekomendasi Asal dan Tujuan Trayek</h4>
                    <p class="card-text">Isi data sesuai dengan dokumen yang di upload</p>

                    <!-- Form -->
                    <form method="POST" class="needs-validation md-form text-left" style="color: #757575;" action="/rekomendasi/update2/<?= $step2['id'] ?>" enctype="multipart/form-data" novalidate>

                        <!-- //hidden -->
                        <input name="img_trayek_lama" type="hidden" value="<?= $step2['img_trayek'] ?>">
                        <input name="kode_booking" type="hidden" value="<?= $step2['kode_booking'] ?>">

                        <div class="md-form">
                            <div class="file-field">
                                <div class="btn btn-primary btn-sm float-left">
                                    <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                    <input type="file" name="img_trayek" id="uploadImage" onchange="PreviewImage()" value="<?= $step2['img_trayek'] ?>">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" value="<?= $step2['img_trayek'] ?>" type="text" placeholder="Trayek yang dilayani">
                                </div>
                                <div class="kacili" style="margin-left:160px;">
                                    <?= $validation->getError('img_trayek') ?>
                                </div>
                            </div>
                        </div>

                        <div class="md-form">
                            <?php
                            if ($step2['img_trayek']) {
                                $img = $step2['img_trayek'];
                            } else {
                                $img = "default.png";
                            }
                            ?>
                            <img id="uploadPreview" src="<?= base_url(); ?>/img/img_trayek/<?= $img ?>" style=" width:250px;" alt="IMG">
                            <label for="form1"></label>
                        </div>

                        <select name="trayek_dilayani" class="mdb-select md-form mt-5" searchable="Trayek Yang Dilayani">
                            <option value="" disabled selected>Trayek Yang Dilayani</option>
                            <?php foreach ($trayek as $tr) : ?>
                                <?php
                                if ($tr['kode_trayek'] == old('trayek_dilayani')) {
                                    $x = "selected";
                                }
                                if ($step2['trayek_dilayani'] == $tr['kode_trayek']) {
                                    $x = "selected";
                                } else {
                                    $x = "";
                                }
                                ?>
                                <option value="<?= $tr['kode_trayek']; ?>" <?= $x ?>><?= $tr['trayek']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="kacili" style="margin-top:-20px;">
                            <?= $validation->getError('trayek_dilayani') ?>
                        </div>

                        <div class="buttons mt-5">
                            <button type="button" class="btn btn-md btn-dark"><i class="fa fa-arrow-left mr-1"></i> Sebelumnya</button>
                            <button type="submit" class="btn btn-md btn-primary">Simpan & Lanjutkan <i class="fa fa-arrow-right ml-1"></i></button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>