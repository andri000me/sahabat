<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container" style="margin-bottom:500px;">
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Maaf,</h4>
        <h4 class="alert-heading">Permohonan Rekomendasi atas nama <b><?= $rekomendasi['nama_pemohon'] ?></b> Ditangguhkan karena,</h4>
    </div>
    <?php foreach ($msg_penolakan as $msg) : ?>
        <div class="alert alert-warning" role="alert">
            <!-- <small><?= $msg['created_at'] ?></small> -->
            <small style="text-decoration:underline;">Send by Verifikator Dinas Perhubungan Provinsi gorontalo on 21 Desember 2019</small><br>
            <?= $msg['msg'] ?>
        </div>
    <?php endforeach; ?>
</div>
<?= $this->endSection(); ?>