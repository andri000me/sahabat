<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container" style="margin-bottom:750px;">
    <?php
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
    ?>
    <h3> Selamat datang <?= $session['nama'] ?> (<?= $role ?>) </h3>
</div>
<?= $this->endSection(); ?>