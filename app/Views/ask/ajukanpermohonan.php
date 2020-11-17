<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <!--<div class="row" style="margin-top: -4px;">-->
    <!--    <div class="col success-color-dark text-white text-center py-2" style="border: 1px solid white;">-->
    <!--        <a href="#" class="text-white"> Upload Berkas</a>-->
    <!--    </div>-->
    <!--    <div class="col success-color text-white text-center py-2" style="border: 1px solid white;">-->
    <!--        <a href="/ask/berkaskendaraan/<?= $ask['slug'] ?>/<?= $ask['kode_registrasi'] ?>" class="text-white"> Berkas Kendaraan</a>-->
    <!--    </div>-->
    <!--</div>-->

    <div class="row mb-5 wow fadeInRight">
        <div class="col-sm-12 mb-3 mb-md-0">
            <div class="">
                <div class="card-body">

                    <h5 class="text-dark font-weight-bold card-title">Permohonan Izin Penyelenggaraan Angkutan Orang Tidak Dalam Trayek (AOTDT)</h5>
                    <p class="card-text">Untuk mengajukan Permohonan Izin Penyelenggaraan Angkutan Orang Tidak Dalam Trayek atau Permohonan Izin AOTDT, <br>
                        Silahkan lengkapi berkas dibawah ini, pastikan dokumen yang anda upload adalah benar <br>
                    </p>

                    <div class="cards px-4 py-3">

                        <form method="POST" class="needs-validation md-form text-left" style="color: #757575;" action="/ask/uploadpersetujuan" enctype="multipart/form-data" novalidate>

                            <input type="hidden" name="id" value="<?= $ask['idask'] ?>">
                            <input type="hidden" name="slug" value="<?= $ask['slug'] ?>">
                            <input type="hidden" name="kode_registrasi" value="<?= $ask['kode_registrasi'] ?>">

                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn primary-color-dark text-light btn-sm float-left">
                                        <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                        <input type="file" name="img_surat_persetujuan" id="uploadImage">
                                    </div>
                                    <?php
                                    if ($ask['img_surat_persetujuan']) {
                                        $href = 'href="/img/img_surat_persetujuan/' . $ask['img_surat_persetujuan'] . '" target="_blank"';
                                        $btn = "success";
                                    } else {
                                        $btn = "danger";
                                        $href = 'href="#"';
                                    }

                                    ?>
                                    <a <?= $href ?> type="button" class="btn btn-sm btn-<?= $btn ?>"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>
                                    <div class="file-path-wrapper">
                                        <input name="img_surat_persetujuan" class="file-path validate" type="text" placeholder="Scan / Foto Surat Persetujuan Permohonanan Izin Penyelenggaraan AOTDT (Jelas)">
                                    </div>
                                </div>
                                <div class="kacili" style="margin-left:280px;">
                                    <?= $validation->getError('img_surat_persetujuan') ?>
                                </div>
                            </div>

                    </div>

                    <div class="buttons mt-5">
                        <button type="submit button" class="btn btn-md btn-success">Simpan <i class="fa fa-check ml-1"></i> </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>