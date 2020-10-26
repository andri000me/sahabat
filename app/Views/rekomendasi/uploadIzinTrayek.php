<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container-fluid" style="margin-bottom:300px;">
    <form method="POST" class="needs-validation md-form text-left" style="color: #757575;" action="/verifikasi/saveUploadIzinTrayek" enctype="multipart/form-data" novalidate>


        <input name="id" type="hidden" value="<?= $detail['idpermohonan'] ?>">
        <input name="img_izin_trayek_lama" type="hidden" value="<?= $detail['img_izin_trayek'] ?>">

        <div class="my-4 px-3 py-3" style="width:1000px;">
            <h5 class="text-primary font-weight-bold card-title">Upload Izin Trayek</h5>
            <p class="card-text">Data Permohonan</p>
            <div class="cards px-4 py-3 mb-3">
                <div class="row mb-3">
                    <div class="col-sm-3 mb-2">Nama Koperasi</div>
                    <div class="col-sm-8 font-weight-bold">: <?= $detail['nama_perusahaan'] ?></div>

                    <div class="col-sm-3 mb-2">Trayek yang di mohon</div>
                    <div class="col-sm-8">: <?= $trayek['trayek'] ?></div>

                    <div class="col-sm-3 mb-2">Nama Pemilik</div>
                    <div class="col-sm-8">: <?= $detail['nama_pemilik'] ?> </div>

                    <div class="col-sm-3 mb-2">Nomor Kendaraan</div>
                    <div class="col-sm-8">: <?= $detail['nomor_kendaraan'] ?> </div>
                </div>
            </div>

            <div class="cards px-4 py-3">
                <div class="md-form">
                    <div class="file-field">

                        <div class="btn btn-dark btn-sm float-left">
                            <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                            <input type="file" name="img_izin_trayek" id="uploadImage">
                        </div>

                        <a href="/img/img_izin_trayek/<?= $detail['img_izin_trayek'] ?>" target="_blank" type="button" class="btn btn-sm btn-danger"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>
                        <div class="file-path-wrapper">
                            <input name="img_izin_trayek" class="file-path validate" type="text" placeholder="Izin Trayek">
                        </div>
                    </div>
                </div>
            </div>

            <div class="buttons mt-3">
                <button type="submit button" class="btn btn-md btn-primary text-light">Upload Izin Trayek<i class="fa fa-check ml-1"></i> </button>
            </div>
        </div>
    </form>
</div>
<!-- Central Modal Small -->
<?= $this->endSection(); ?>