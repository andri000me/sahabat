<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container-fluid" style="margin-bottom:300px;">
    <form method="POST" class="needs-validation md-form text-left" style="color: #757575;" action="/koperasi/saveUploadRekomendasi" enctype="multipart/form-data" novalidate>

        <input name="id" type="hidden" value="<?= $permohonan['idpermohonan'] ?>">
        <input name="slug" type="hidden" value="<?= $permohonan['slug'] ?>">
        <input name="img_rekomendasi_asal_lama" type="hidden" value="<?= $permohonan['img_rekomendasi_asal'] ?>">
        <input name="img_rekomendasi_tujuan_lama" type="hidden" value="<?= $permohonan['img_rekomendasi_tujuan'] ?>">

        <div class="my-4 px-3 py-3" style="width:1000px;">
            <h5 class="text-success font-weight-bold card-title">Upload Surat Rekomendasi</h5>
            <p class="card-text">Data Permohonan</p>
            <div class="cards px-4 py-3 mb-3">
                <div class="row mb-3">
                    <div class="col-sm-3 mb-2">Nama Koperasi</div>
                    <div class="col-sm-8 font-weight-bold">: <?= $koperasi['nama_perusahaan'] ?></div>

                    <div class="col-sm-3 mb-2">Trayek yang di mohon</div>
                    <div class="col-sm-8">: <?= $permohonan['trayek'] ?></div>

                    <div class="col-sm-3 mb-2">Nama Pemilik</div>
                    <div class="col-sm-8">: <?= $permohonan['nama_pemilik'] ?></div>

                    <div class="col-sm-3 mb-2">Nomor Kendaraan</div>
                    <div class="col-sm-8">: <?= $permohonan['nomor_kendaraan'] ?></div>
                </div>
            </div>

            <div class="cards px-4 py-3">
                <div class="md-form">
                    <div class="file-field">
                        <div class="btn btn-primary btn-sm float-left">
                            <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                            <input type="file" name="img_rekomendasi" id="uploadImage">
                        </div>

                        <?php
                        if ($session['wilayah_id'] == $permohonan['asal']) {
                            if ($permohonan['img_rekomendasi_asal']) {
                                $link = 'href="/img/img_rekomendasi/' . $permohonan['img_rekomendasi_asal'] . '"';
                                $btn = "btn-success";
                            } else {
                                $link = "#";
                                $btn = "btn-danger";
                            }
                        } else if ($session['wilayah_id'] == $permohonan['tujuan']) {
                            if ($permohonan['img_rekomendasi_tujuan']) {
                                $link = 'href="/img/img_rekomendasi/' . $permohonan['img_rekomendasi_tujuan'] . '"';
                                $btn = "btn-success";
                            } else {
                                $link = "#";
                                $btn = "btn-danger";
                            }
                        } else {
                            $link = "#";
                            $btn = "btn-danger";
                        }
                        ?>

                        <a <?= $link ?> target="_blank" type="button" class="btn btn-sm <?= $btn ?>"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>
                        <div class="file-path-wrapper">
                            <input name="img_rekomendasi" class="file-path validate" type="text" placeholder="Surat Penolakan">
                        </div>
                    </div>
                    <div class="kacili" style="margin-left:280px;">
                        <?= $validation->getError('img_rekomendasi') ?>
                    </div>
                </div>
            </div>

            <div class="buttons mt-3">
                <button type="submit button" class="btn btn-md btn-success text-light">Upload Surat Penolakan<i class="fa fa-check ml-1"></i> </button>
            </div>
        </div>
    </form>
</div>
<!-- Central Modal Small -->
<?= $this->endSection(); ?>