<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark primary-color-dark lighten-1">
  <a class="navbar-brand font-weight-bold amber-text" href="#">SAHABAT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555" aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/login/home">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Permohonan Asal Tujuan
        </a>
        <div class="dropdown-menu dropdown-warning" aria-labelledby="navbarDropdownMenuLink-555">
          <a class="dropdown-item" href="/koperasi/buat_permohonan">Buat Permohonan</a>
          <a class="dropdown-item" href="/koperasi">Data Permohonan</a>
        </div>
      </li>
      <li class="nav-item">
        <?php
        if ($session['id'] == 9) {
          $href = "Kota";
        }
        if ($session['id'] == 10) {
          $href = "Kab";
        }
        if ($session['id'] == 11) {
          $href = "BoneBol";
        }
        if ($session['id'] == 12) {
          $href = "Gorut";
        }
        if ($session['id'] == 13) {
          $href = "Boalemo";
        }
        if ($session['id'] == 14) {
          $href = "Pohuwato";
        }
        if ($session['id'] == 1) {
          $href = "#";
        }
        if ($session['id'] == 2) {
          $href = "#";
        }
        if ($session['id'] == 3) {
          $href = "#";
        }
        if ($session['id'] == 4) {
          $href = "#";
        }
        if ($session['id'] == 5) {
          $href = "#";
        }
        if ($session['id'] == 6) {
          $href = "#";
        }
        if ($session['id'] == 7) {
          $href = "#";
        }
        if ($session['id'] == 8) {
          $href = "#";
        }
        ?>
        <a class="nav-link" href="/koperasi/verifikasiPermohonan<?= $href ?>">Verifikasi Permohonan</a>
      </li>
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Rekomendasi Pertimbangan Teknis
        </a>
        <div class="dropdown-menu dropdown-warning" aria-labelledby="navbarDropdownMenuLink-555">
          <a class="dropdown-item" href="#">Buat Rekomendasi</a>
          <a class="dropdown-item" href="#">Data Rekomendasi</a>
        </div>
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
          <a class="dropdown-item" href="/login/berkas">Profil Perusahaan</a>
          <a class="dropdown-item" href="#">Profil User</a>
          <a class="dropdown-item" href="/login/logout">Keluar</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->