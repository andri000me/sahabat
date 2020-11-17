<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <div class="row mb-5 wow fadeInRight">
        <div class="col-sm-12 mb-3 mb-md-0">
            <div class="">
                <div class="card-body">

                    <h5 class="text-dark font-weight-bold card-title">Data Persetujuan Permohonan Rekomendasi AOTDT</h5>
                    <p class="card-text">Silahkan lengkapi berkas kendaraan anda sesuai dengan jumlah kendaraan yang dimohon, <br>
                    </p>

                    <div class="cards px-4 py-3">
                        <div class="table-responsive animated zoomIn">
                            <table id="dtMaterialDesignExample" class="table table-bordered table-striped" cellspacing="0" width="100%">
                                <thead class="primary-color-dark white-text">
                                    <tr>
                                        <td class="th-sm">No
                                        </td>
                                        <td class="th-sm">Kode Registrasi
                                        </td>
                                        <td class="th-sm">Nama Perusahaan
                                        </td>
                                        <td class="th-sm">Jumlah Kendaraan
                                        </td>
                                        <td class="th-sm" style="width: 120px;">Tanggal Pengajuan
                                        </td>
                                        <td class="th-sm">Status
                                        </td>
                                        <td class="th-sm">Status Upload
                                        </td>
                                        <td class="th-sm" style="width:360px;">Action
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1
                                    ?>
                                    <?php foreach ($ask as $ran) : ?>
                                        <?php
                                        if ($ran['status_dishub'] == 1) {
                                            $btn1 = '<a href="" class="badge badge-warning">Lakukan Verifikasi</a></a>';
                                            $btn2 = '<a href="/ask/detailverifikasidishub/' . $ran['slug'] . '/' . $ran['kode_registrasi'] . '" class="btn btn-sm btn-warning">Verifikasi</a>';
                                            $btn3 = '';
                                            $status2 = "";
                                        }
                                        if ($ran['status_dishub'] == 2 && $ran['dishub_approve'] == 0) {
                                            $btn1 = '<a href="" class="badge badge-warning">Selesai verifikasi, Menunggu Approve</a>';
                                            $btn2 = '';
                                            $btn3 = '<a href="/ask/detailverifikasiapprove/' . $ran['slug'] . '/' . $ran['kode_registrasi'] . '" class="btn btn-sm btn-primary">Detail</a>
                                            <a onclick="return confirm(\'Yakin Approve?\')" href="/ask/approve1/' . $ran['idask'] . '/' . $ran['slug'] . '/' . $ran['kode_registrasi'] . '" class="btn btn-sm btn-success">Approve</a>
                                           ';
                                            if ($ran['img_permohonan']) {
                                                $status2  = '<a href="" class="badge badge-success">File telah di upload</a>';
                                            } else {
                                                $status2  = '<a href="" class="badge badge-danger">File belum di upload</a>';
                                            }
                                        }
                                        if ($ran['status_dishub'] == 2 && $ran['dishub_approve'] == 1) {
                                            $btn1 = '<a href="" class="badge badge-success">Diapprove</a>';
                                            $btn2 = '';
                                            $btn3 = '<a href="/ask/detailverifikasidishub/' . $ran['slug'] . '/' . $ran['kode_registrasi'] . '" class="btn btn-sm btn-primary">Detail</a>
                                            <a target="_blank" href="/ask/cetakpermohonan/' . $ran['slug'] . '/' . $ran['kode_registrasi'] . '" class="btn btn-sm btn-dark">Cetak</a>
                                            <a href="/ask/uploadrekomendasi/' . $ran['slug'] . '/' . $ran['kode_registrasi'] . '" class="btn btn-sm btn-success">Upload Permohonan</a>';
                                            if ($ran['img_permohonan']) {
                                                $status2  = '<a href="" class="badge badge-success">File telah di upload</a>';
                                            } else {
                                                $status2  = '<a href="" class="badge badge-danger">File belum di upload</a>';
                                            }
                                        }
                                        if ($ran['status_dishub'] == 3) {
                                            $btn1 = '<a href="" class="badge badge-danger">Dtolak</a>';
                                            $btn2 = '';
                                            $btn3 = '<a href="/ask/uploadpenolakandishub/' . $ran['slug'] . '/' . $ran['kode_registrasi'] . '" class="btn btn-sm btn-danger">Upload Penolakan</a>';
                                            if ($ran['img_penolakan_permohonan']) {
                                                $status2  = '<a href="" class="badge badge-success">File telah di upload</a>';
                                            } else {
                                                $status2  = '<a href="" class="badge badge-danger">File belum di upload</a>';
                                            }
                                        }
                                        ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><a href="#" class="font-weight-bold text-primary"><?= $ran['kode_registrasi'] ?></a></td>
                                            <td><?= $ran['nama_perusahaan'] ?></td>
                                            <td><a href="" class="font-weight-bold text-dark"><?= $ran['jumlah_kendaraan'] ?></a></td>
                                            <td><?= $ran['created_at'] ?></td>
                                            <td>
                                                <?= $btn1 ?>
                                            </td>
                                            <td>
                                                <?= $status2 ?>
                                            </td>
                                            <td>
                                                <?= $btn2 ?>
                                                <?= $btn3 ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>