<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container-fluid" style="margin-bottom:300px;">
    <form method="POST" class="needs-validation md-form text-left" style="color: #757575;" action="/ask/saveUploadRekomendasi" enctype="multipart/form-data" novalidate>

        <input name="id" type="hidden" value="<?= $ask['idask'] ?>">
        <input name="slug" type="hidden" value="<?= $ask['slug'] ?>">
        <input name="kode_registrasi" type="hidden" value="<?= $ask['kode_registrasi'] ?>">

        <div class="my-4 px-3 py-3" style="width:1000px;">
            <h5 class="text-success font-weight-bold card-title">Upload Surat Rekomendasi Permohonan</h5>
            <p class="card-text">Data Permohonan</p>
            <div class="cards px-4 py-3 mb-3">
                <div class="row mb-3">
                    <div class="col-sm-3 mb-2">Kode Reigstrasi</div>
                    <div class="col-sm-8 font-weight-bold">: <?= $ask['kode_registrasi'] ?></div>

                    <div class="col-sm-3 mb-2">Nama perusahaan</div>
                    <div class="col-sm-8">: <?= $ask['nama_perusahaan'] ?></div>

                    <div class="col-sm-3 mb-2">Jumlah Kendaraan</div>
                    <div class="col-sm-8">: <?= $ask['jumlah_kendaraan'] ?></div>

                    <div class="col-sm-3 mb-2">Tanggal Pengajuan</div>
                    <div class="col-sm-8">: <?= $ask['created_at'] ?></div>
                </div>
            </div>

            <div class="cards px-4 py-3">
                <div class="md-form">
                    <div class="file-field">
                        <div class="btn btn-primary btn-sm float-left">
                            <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                            <input type="file" name="img_permohonan" id="uploadImage">
                        </div>

                        <?php
                        if ($ask['img_permohonan']) {
                            $link = 'href="/img/img_permohonan/' . $ask['img_permohonan'] . '"';
                            $btn = "btn-success";
                        } else {
                            $link = "#";
                            $btn = "btn-danger";
                        }
                        ?>

                        <a <?= $link ?> target="_blank" type="button" class="btn btn-sm <?= $btn ?>"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>
                        <div class="file-path-wrapper">
                            <input name="img_penolakan_ptsp" class="file-path validate" type="text" placeholder="Rekomendasi Permohonan">
                        </div>
                    </div>
                    <div class="kacili" style="margin-left:280px;">
                        <?= $validation->getError('img_permohonan') ?>
                    </div>
                </div>
            </div>

            <div class="buttons mt-3">
                <button type="submit button" class="btn btn-md btn-success text-light">Upload Surat Penolakan<i class="fa fa-upload ml-1"></i> </button>
            </div>
        </div>
    </form>
</div>
<!-- Central Modal Small -->
<?= $this->endSection(); ?>