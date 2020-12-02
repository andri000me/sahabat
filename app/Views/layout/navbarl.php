<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark primary-color-dark lighten-1">
  <a class="navbar-brand font-weight-bold amber-text" href="#">SAHABAT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555" aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <?php
  if ($session['id'] == 9) {
    $href = "Kota";
    $hidden_kota = "hidden";
  } else if ($session['id'] == 10) {
    $href = "Kab";
    $hidden_kota = "hidden";
  } else if ($session['id'] == 11) {
    $href = "BoneBol";
    $hidden_kota = "hidden";
  } else if ($session['id'] == 12) {
    $href = "Gorut";
    $hidden_kota = "hidden";
  } else if ($session['id'] == 13) {
    $href = "Boalemo";
    $hidden_kota = "hidden";
  } else if ($session['id'] == 14) {
    $href = "Pohuwato";
    $hidden_kota = "hidden";
  } else {
    $hidden_kota = "";
  }

  if ($session['id'] == 3) {
    $href = "#";
    $hidden_vers = "hidden";
  } else if ($session['id'] == 8) {
    $href = "#";
    $hidden_vers = "hidden";
  } else {
    $hidden_vers = "";
  }

  if ($session['id'] == 4) {
    $href = "#";
    $hidden_approver = "hidden";
  } else {
    $hidden_approver = "";
  }
  if ($session['id'] == 5) {
    $href = "#";
  }
  if ($session['id'] == 6) {
    $href = "#";
  }

  if ($session['id'] == 7) {
    $href = "#";
    $hidden_ptsp = "hidden";
  } else {
    $hidden_ptsp = "";
  }

  if ($session['role'] == 0) {
    $href = "#";
    $hidden_koperasi = "hidden";
  } else {
    $hidden_koperasi = "";
  }
  ?>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/login/home">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" <?= $hidden_ptsp ?><?= $hidden_approver ?> <?= $hidden_vers ?> <?= $hidden_kota ?>>Rekomendasi Asal-Tujuan
        </a>
        <div class="dropdown-menu dropdown-warning" aria-labelledby="navbarDropdownMenuLink-555">
          <a class="dropdown-item" href="/koperasi/buat_permohonan">Buat Permohonan</a>
          <a class="dropdown-item" href="/koperasi">Data Permohonan</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" <?= $hidden_ptsp ?><?= $hidden_approver ?> <?= $hidden_vers ?> <?= $hidden_kota ?>>Izin Trayek AKDP
        </a>
        <div class="dropdown-menu dropdown-warning" aria-labelledby="navbarDropdownMenuLink-555">
          <a class="dropdown-item" href="/rekomendasi/step1">Permohonan Baru</a>
          <a class="dropdown-item" href="/rekomendasi/step1p">Perpanjangan</a>
          <a class="dropdown-item" href="/rekomendasi/rekomendasi">Data Permohonan</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" <?= $hidden_ptsp ?><?= $hidden_approver ?> <?= $hidden_vers ?> <?= $hidden_kota ?>>Persetujuan ASK
        </a>
        <div class="dropdown-menu dropdown-warning" aria-labelledby="navbarDropdownMenuLink-555">
          <a class="dropdown-item" href="/ask">Buat Persetujuan Permohonan ASK</a>
          <a class="dropdown-item" href="/ask/permohonanSaya">Data Persetujuan Permohonan ASK</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/ask/penerbitanizin" <?= $hidden_ptsp ?><?= $hidden_approver ?> <?= $hidden_vers ?> <?= $hidden_kota ?>>Rekomendasi Penerbitan ASK</a>
      </li>

      <!-- <li class="nav-item">
        <a class="nav-link" href="/ask/penerbitanizin<?= $href ?>" <?= $hidden_ptsp ?><?= $hidden_approver ?> <?= $hidden_vers ?> <?= $hidden_kota ?>>Penerbitan ASK</a>
      </li> -->

      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" <?= $hidden_approver ?> <?= $hidden_vers ?><?= $hidden_kota ?> <?= $hidden_koperasi ?>>Data Permohonan
        </a>
        <div class="dropdown-menu dropdown-warning" aria-labelledby="navbarDropdownMenuLink-555">
          <a class="dropdown-item" href="/rekomendasi/rekomendasi">Izin Trayek AKDP</a>
          <a class="dropdown-item" href="#!">Izin Operasional ASK</a>
        </div>
      </li> -->

      <li class="nav-item">
        <a class="nav-link" href="/verifikasi/verifikasiptsp" <?= $hidden_approver ?> <?= $hidden_vers ?><?= $hidden_kota ?> <?= $hidden_koperasi ?>>Persetujuan Rekomendasi Izin AKDP</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/ask/verifikasiaotdt" <?= $hidden_approver ?> <?= $hidden_vers ?><?= $hidden_kota ?> <?= $hidden_koperasi ?>>Persetujuan Izin ASK</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/ask/verifikasipenerbitanaotdt" <?= $hidden_approver ?> <?= $hidden_vers ?><?= $hidden_kota ?> <?= $hidden_koperasi ?>>Penerbitan Izin ASK</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/koperasi/verifikasiPermohonan<?= $href ?>" <?= $hidden_ptsp ?> <?= $hidden_approver ?> <?= $hidden_vers ?><?= $hidden_koperasi ?>>Verifikasi Permohonan</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/verifikasi/rekomendasi<?= $href ?>" <?= $hidden_ptsp ?><?= $hidden_approver ?> <?= $hidden_koperasi ?> <?= $hidden_kota ?>>Verifikasi Rekomendasi AKDP</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/ask/verifikasiaotdtdishub<?= $href ?>" <?= $hidden_ptsp ?><?= $hidden_approver ?> <?= $hidden_koperasi ?> <?= $hidden_kota ?>>Verifikasi Rekomendasi Persetujuan ASK</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/ask/verifikasipenerbitandishub<?= $href ?>" <?= $hidden_ptsp ?><?= $hidden_approver ?> <?= $hidden_koperasi ?> <?= $hidden_kota ?>>Verifikasi Rekomendasi Penertiban ASK</a>
      </li>

      <!-- <li class="nav-item">
        <a class="nav-link" href="/verifikasi/rekomendasi<?= $href ?>" <?= $hidden_ptsp ?><?= $hidden_approver ?> <?= $hidden_koperasi ?> <?= $hidden_kota ?>>Verifikasi Rekomendasi Penerbitan ASK</a>
      </li> -->

      <li class="nav-item">
        <a class="nav-link" href="/verifikasi/terverifikasi<?= $href ?>" <?= $hidden_ptsp ?><?= $hidden_vers ?><?= $hidden_koperasi ?> <?= $hidden_kota ?>>Rekomendasi Izin Trayek AKDP</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/ask/approvepersetujuanizin<?= $href ?>" <?= $hidden_ptsp ?><?= $hidden_vers ?><?= $hidden_koperasi ?> <?= $hidden_kota ?>>Persetujuan Izin ASK</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/ask/approvepenerbitandishub" <?= $hidden_ptsp ?><?= $hidden_vers ?><?= $hidden_koperasi ?> <?= $hidden_kota ?>>Penerbitan ASK</a>
      </li>

      <!-- <li class="nav-item">
        <a class="nav-link" href="/ask/terverifikasi<?= $href ?>" <?= $hidden_ptsp ?><?= $hidden_vers ?><?= $hidden_koperasi ?> <?= $hidden_kota ?>>Data Penerbitan ASK</a>
      </li> -->
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light font-weight-bold"><?= $session['nama_perusahaan'] ?>
          <i class="fas fa-envelope"></i>
        </a>
      </li>
      <li class="nav-item avatar dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg" class="rounded-circle z-depth-0" alt="avatar image">
        </a>
        <div class="dropdown-menu dropdown-menu-lg-right dropdown-warning" aria-labelledby="navbarDropdownMenuLink-55">
          <a class="font-weight-bold amber-text" width="00"><?= $session['nama'] ?></a>
          <a class="dropdown-item" href="/login/berkas" <?= $hidden_ptsp ?><?= $hidden_approver ?> <?= $hidden_vers ?><?= $hidden_kota ?>>Profil Perusahaan</a>
          <!-- <a class="dropdown-item" href="#">Profil User</a> -->
          <a class="dropdown-item" href="/login/logout">Keluar</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->