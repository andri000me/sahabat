<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container-fluid" style="margin-bottom:750px;">
    <?php
    if ($session['role'] == 0) {
        $role = $session['nama_perusahaan'];
    }
    if ($session['role'] == 1) {
        $role = "Admin PTSP";
    }
    if ($session['role'] == 2) {
        $role = "Verifikator";
    }
    if ($session['role'] == 3) {
        $role = "Admin";
    }
    if ($session['role'] == 4) {
        $role = "Super Admin";
    }
    if ($session['role'] == 5) {
        $role = "Admin Kota Gorontalo";
    }
    if ($session['role'] == 6) {
        $role = "Admin Kabupaten Gorontalo";
    }
    if ($session['role'] == 7) {
        $role = "Admin Kabupaten Bone Bolango";
    }
    if ($session['role'] == 8) {
        $role = "Admin Kabupaten Gorontalo utara";
    }
    if ($session['role'] == 9) {
        $role = "Admin Kabupaten Boalemo";
    }
    if ($session['role'] == 10) {
        $role = "Admin Kabupaten Pohuwato";
    }
    ?>
    <h3> Selamat datang <?= $session['nama'] ?> (<?= $role ?>) </h3>
</div>
<?= $this->endSection(); ?>