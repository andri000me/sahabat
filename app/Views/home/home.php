<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container-fluid px-5 py-4" style="margin-bottom:750px;">
    
<div class="cards py-4 px-4 mb-4" style="background-color:light-red;">
<h5 class="mb-0 text-danger font-weight-bold">PERHATIAN !</h5>
<p class="mb-0 text-danger"><i class="fa fa-chevron-right"></i> Mohon maaf, untuk cetak rekomendasi Asal-Tujuan Trayek belum bisa dilakukan, Dikarenakan Format Rekomendasi Asal-Tujuan Trayek dari Masing-masing Kabupaten/Kota belum dilengkapi</p>
<p class="mb-0 text-danger"><i class="fa fa-chevron-right"></i> Apabila ada berkas Permohonan Rekomendasi Asal-Tujuan yang masuk, diharapkan Admin dari masing-masing Kabupaten/Kota untuk membuat rekomendasi secara manual untuk kemudian di upload di SAHABAT. <br>Terima Kasih </p>
</div>

<?php
if($session['role'] == 0){
?>
    <div class="row cards px-4 py-4 color-a">
        <div class="col-sm-4 text-center">
            <div class="avatar mx-auto">
                <img src="https://www.searchpng.com/wp-content/uploads/2019/02/Men-Profile-Image.png" alt="avatar mx-auto white" class="imgs rounded-circle img-fluid">
            </div>
            <h5 class="mt-4"><?= $session['nama'] ?></h5>
            <h5 style="margin-top:-20px;" class="text-info font-weight-bold">
                <?php if ($session['nama_perusahaan']) { ?>
                    <?= $session['nama_perusahaan'] ?>
                <?php } else { ?>
                    NAMA PERUSAHAAN
                <?php } ?>
            </h5>
        </div>
        <div class="col">
            <h5 style="font-size: 17px;" class="mt-3">Nama Perusahaan</h5>
            <h5 style="font-size: 17px; margin-top:-20px;" class="text-info font-weight-bold mb-4">
                <?php if ($session['nama_perusahaan']) { ?>
                    <?= $session['nama_perusahaan'] ?>
                <?php } else { ?>
                    NAMA PERUSAHAAN
                <?php } ?>
            </h5>
            <h5 style="font-size: 17px;" class="">NIK Direktur</h5>
            <h5 style="font-size: 17px; margin-top:-20px;" class="text-info font-weight-bold mb-4">
                <?php if ($session['nik_direktur']) { ?>
                    <?= $session['nik_direktur'] ?>
                <?php } else { ?>
                    NIK DIREKTUR
                <?php } ?>
            </h5>
            <h5 style="font-size: 17px;" class="">Nama Direktur</h5>
            <h5 style="font-size: 17px; margin-top:-20px;" class="text-info font-weight-bold mb-4">
                <?php if ($session['nama_direktur']) { ?>
                    <?= $session['nama_direktur'] ?>
                <?php } else { ?>
                    NAMA DIREKTUR
                <?php } ?>
            </h5>
            <h5 style="font-size: 17px;" class="">Alamat Perusahaan</h5>
            <h5 style="font-size: 17px; margin-top:-20px;" class="text-info font-weight-bold mb-4">
                <?php if ($session['alamat']) { ?>
                    <?= $session['alamat'] ?>
                <?php } else { ?>
                    Alamat
                <?php } ?>
            </h5>
        </div>
        <div class="col">
            <h5 style="font-size: 17px;" class="mt-3">Nama Operator</h5>
            <h5 style="font-size: 17px; margin-top:-20px;" class="text-info font-weight-bold mb-4"><?= $session['nama'] ?></h5>
            <h5 style="font-size: 17px;" class="">Nomor Handphone</h5>
            <h5 style="font-size: 17px; margin-top:-20px;" class="text-info font-weight-bold mb-4"><?= $session['hp'] ?></h5>
            <h5 style="font-size: 17px;" class="">Email</h5>
            <h5 style="font-size: 17px; margin-top:-20px;" class="text-info font-weight-bold mb-4"><?= $session['email'] ?></h5>
        </div>
    </div>

<?php
}else{
?>
    <div class="row cards px-4 py-4 color-a">
        <div class="col-sm-4 text-center">
            <div class="avatar mx-auto">
                <img src="https://www.searchpng.com/wp-content/uploads/2019/02/Men-Profile-Image.png" alt="avatar mx-auto white" class="imgs rounded-circle img-fluid">
            </div>
            <h5 class="mt-4"><?= $session['nama'] ?></h5>
            <h5 style="margin-top:-20px;" class="text-info font-weight-bold">
                <?php if ($session['nama_perusahaan']) { ?>
                    <?= $session['nama_perusahaan'] ?>
                <?php } else { ?>
                    NAMA PERUSAHAAN
                <?php } ?>
            </h5>
        </div>
    </div>
<?php
}
?>
</div>
<?= $this->endSection(); ?>