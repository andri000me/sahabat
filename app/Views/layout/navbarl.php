<header id="header" class="header-transparent animated slideInDown">
  <div class="container">

    <div id="logo" class="pull-left">
      <a href="index.html"><img src="<?= base_url() ?>/assets/icon/logo.png" alt=""></a>
    </div>

    <?php
    if ($session['role'] == 1) {
      $ptsp = "hidden";
      $adm = "";
      $veri = "";
      $sup = "";
    }
    if ($session['role'] == 2) {
      $veri = "hidden";
      $adm = "";
      $ptsp = "";
      $sup = "";
    }
    if ($session['role'] == 3) {
      $adm = "hidden";
      $ptsp = "";
      $veri = "";
      $sup = "";
    }
    if ($session['role'] == 4) {
      $sup = "";
      $adm = "";
      $veri = "";
      $ptsp = "";
    }
    ?>
    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li class="menu-active"><a href="/login/home/"/verifikasi/terverifikasi/"">Home </a> </li> <li class=""><a href="/rekomendasi/rekomendasi" <?= $veri ?><?= $adm ?>>Rekomendasi Saya</a></li>
        <li class=""><a href="/rekomendasi/" <?= $veri ?><?= $adm ?>>Buat Rekomendasi</a></li>
        <li class=""><a href="/verifikasi/rekomendasi/" <?= $ptsp ?><?= $adm ?>>Verifikasi Permohonan</a></li>
        <li class=""><a href="/verifikasi/terverifikasi/" <?= $veri ?><?= $ptsp ?>>Data Permohonan</a></li>
        <li class=""><a href="/trayek/" <?= $veri ?><?= $ptsp ?><?= $adm ?>>Trayek</a></li>
        <li class=""><a href="/login/" <?= $veri ?><?= $adm ?><?= $ptsp ?>>User</a></li>
        <!-- <li class=""><a href="/trayek/">Trayek</a></li> -->

        <li class="drop-down"><a href=""><i class="fa fa-user mr-1"></i><?= $session['nama'] ?></a>
          <ul>
            <li><a href="#"><i class="fa fa-gear mr-1"></i>Preferences</a></li>
            <li><a href="/login/logout"><i class="fa fa-logout mr-1"></i>Keluar</a></li>
          </ul>
        </li>
      </ul>
    </nav><!-- #nav-menu-container -->
  </div>
  <!--/.Navbar -->
</header>