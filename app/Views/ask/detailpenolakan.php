<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="cards mt-4 py-4 px-4">
        <div class="mb-4 ">
            <h5 class="text-danger font-weight-bold card-title">Detail Penolakan</h5>
            <p class="card-text">Periksa apaka field isian sama dengan dokumen yang di upload</p>
        </div>

        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Pesan Penolakan</h4>
            <span><?= $msg['msg'] ?></span><br>
            <hr>
            <div class="row">
                <div class="col">
                    <p class="mb-0">Terima Kasih</p>
                </div>
                <div class="col text-right">
                    <a target="_blank" href="/img/img/<?= $msg['img'] ?>" class="btn btn-sm btn-secondary"><i class="fa fa-download"> Unduh Lampiran Penolakan</i></a>
                    <?php
                    if ($ask['img_penolakan_ptsp']) {
                        $img = '<a target="_blank" href="' . $ask['img_penolakan_ptsp'] . '" class="btn btn-sm btn-danger"><i class="fa fa-download"> Unduh Surat Penolakan</i></a>';
                    } else {
                        $img = '<a href="#" class="btn btn-sm btn-danger"><i class="fa fa-download"> Unduh Surat Penolakan</i></a>';
                    }
                    ?>
                    <?= $img ?>
                </div>
            </div>
        </div>

        <a href="/ask/perbaiki/<?= $ask['kode_registrasi'] ?>" class="btn btn-md btn-primary"><i class="fa fa-check"> Perbaiki Data Permohonan</i></a>
    </div>
</div>
<?= $this->endSection(); ?>