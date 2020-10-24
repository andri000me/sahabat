<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <!-- <div class="judul pl-4 wow fadeInLeft"><i class="fa fa-file mr-2"></i> Data permohonan rekomendasi</div> -->

    <div class="row mb-5">
        <div class="col-sm-12 mb-3 mb-md-0">
            <div class="cards px-4 pt-3">
                <div class="card-body">

                    <div class="row animated zoomIn">
                        <div class="col">
                            <h4 class="text-dark font-weight-bold card-title">Data Permohonan Asal Tujuan Trayek</h4>
                            <p class="card-text">Data permohonan rekomendasi Asal/Tujuan Trayek Dinas Perhubungan Kota
                                Gorontalo
                            </p>
                        </div>
                    </div>

                    <div class="table-responsive animated zoomIn">
                        <table id="dtMaterialDesignExample" class="table table-bordered table-striped" cellspacing="0" width="100%">
                            <thead class="primary-color-dark white-text">
                                <tr>
                                    <td class="th-sm">Pemohon
                                    </td>
                                    <td class="th-sm">Trayek yang dimohon
                                    </td>
                                    <td class="th-sm" style="width: 120px;">Nama Pemilik
                                    </td>
                                    <td class="th-sm">Nomor Kendaraan
                                    </td>
                                    <td class="th-sm">Status
                                    </td>
                                    <td class="th-sm" style="width:360px;">Action
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($permohonan as $p) : ?>
                                    <?php
                                    if ($session['id'] == 9) {
                                        if ($p['asal'] == 1) {
                                            if ($p['status_asal'] == 0) {
                                                $status = '<a class="badge badge-warning">Perlu Diverifikasi !</a>';
                                                $action = '<a href="/koperasi/verifikasiKota/' . $p['slug'] . '/' . $p['idpermohonan'] . '" class="btn btn-sm btn-warning mr-1"><i class="fa fa-print mr-1"></i>Verifikasi</a>';
                                            }
                                            if ($p['status_asal'] == 1) {
                                                $status = '<a class="badge badge-danger">Ditolak</a>';
                                                $action = "";
                                            }
                                            if ($p['status_asal'] == 2) {
                                                $status = '<a class="badge badge-success">Diterima</a>';
                                                $action = '<a href="/koperasi/cetakKota/' . $p['slug'] . '/' . $p['idpermohonan'] . '" class="btn btn-sm btn-success mr-1"><i class="fa fa-print mr-1"></i>Cetak</a>';
                                            }
                                        } else if ($p['tujuan'] == 1) {
                                            if ($p['status_tujuan'] == 0) {
                                                $status = '<a class="badge badge-warning">Perlu Diverifikasi !</a>';
                                                $action = '<a href="/koperasi/verifikasiKota/' . $p['slug'] . '/' . $p['idpermohonan'] . '" class="btn btn-sm btn-warning mr-1"><i class="fa fa-print mr-1"></i>Verifikasi</a>';
                                            }
                                            if ($p['status_tujuan'] == 1) {
                                                $status = '<a class="badge badge-danger">Ditolak</a>';
                                                $action = "";
                                            }
                                            if ($p['status_tujuan'] == 2) {
                                                $status = '<a class="badge badge-success">Diterima</a>';
                                                $action = '<a href="/koperasi/cetakKota/' . $p['slug'] . '/' . $p['idpermohonan'] . '" class="btn btn-sm btn-success mr-1"><i class="fa fa-print mr-1"></i>Cetak</a>';
                                            }
                                        }
                                    }
                                    if ($session['id'] == 10) {
                                        if ($p['asal'] == 2) {
                                            if ($p['status_asal'] == 0) {
                                                $status = '<a class="badge badge-warning">Perlu Diverifikasi !</a>';
                                                $action = '<a href="/koperasi/verifikasiKab/' . $p['slug'] . '/' . $p['idpermohonan'] . '" class="btn btn-sm btn-warning mr-1"><i class="fa fa-print mr-1"></i>Verifikasi</a>';
                                            }
                                            if ($p['status_asal'] == 1) {
                                                $status = '<a class="badge badge-danger">Ditolak</a>';
                                                $action = "";
                                            }
                                            if ($p['status_asal'] == 2) {
                                                $status = '<a class="badge badge-success">Diterima</a>';
                                                $action = '<a href="/koperasi/cetakKab/' . $p['slug'] . '/' . $p['idpermohonan'] . '" class="btn btn-sm btn-success mr-1"><i class="fa fa-print mr-1"></i>Cetak</a>';
                                            }
                                        } else if ($p['tujuan'] == 2) {
                                            if ($p['status_tujuan'] == 0) {
                                                $status = '<a class="badge badge-warning">Perlu Diverifikasi !</a>';
                                                $action = '<a href="/koperasi/verifikasiKab/' . $p['slug'] . '/' . $p['idpermohonan'] . '" class="btn btn-sm btn-warning mr-1"><i class="fa fa-print mr-1"></i>Verifikasi</a>';
                                            }
                                            if ($p['status_tujuan'] == 1) {
                                                $status = '<a class="badge badge-danger">Ditolak</a>';
                                                $action = "";
                                            }
                                            if ($p['status_tujuan'] == 2) {
                                                $status = '<a class="badge badge-success">Diterima</a>';
                                                $action = '<a href="/koperasi/cetakKab/' . $p['slug'] . '/' . $p['idpermohonan'] . '" class="btn btn-sm btn-success mr-1"><i class="fa fa-print mr-1"></i>Cetak</a>';
                                            }
                                        }
                                    }
                                    if ($session['id'] == 11) {
                                        if ($p['asal'] == 3) {
                                            if ($p['status_asal'] == 0) {
                                                $status = '<a class="badge badge-warning">Perlu Diverifikasi !</a>';
                                                $action = '<a href="/koperasi/verifikasiBoneBol/' . $p['slug'] . '/' . $p['idpermohonan'] . '" class="btn btn-sm btn-warning mr-1"><i class="fa fa-print mr-1"></i>Verifikasi</a>';
                                            }
                                            if ($p['status_asal'] == 1) {
                                                $status = '<a class="badge badge-danger">Ditolak</a>';
                                                $action = "";
                                            }
                                            if ($p['status_asal'] == 2) {
                                                $status = '<a class="badge badge-success">Diterima</a>';
                                                $action = '<a href="/koperasi/cetakBoneBol/' . $p['slug'] . '/' . $p['idpermohonan'] . '" class="btn btn-sm btn-success mr-1"><i class="fa fa-print mr-1"></i>Cetak</a>';
                                            }
                                        } else if ($p['tujuan'] == 3) {
                                            if ($p['status_tujuan'] == 0) {
                                                $status = '<a class="badge badge-warning">Perlu Diverifikasi !</a>';
                                                $action = '<a href="/koperasi/verifikasiBoneBol/' . $p['slug'] . '/' . $p['idpermohonan'] . '" class="btn btn-sm btn-warning mr-1"><i class="fa fa-print mr-1"></i>Verifikasi</a>';
                                            }
                                            if ($p['status_tujuan'] == 1) {
                                                $status = '<a class="badge badge-danger">Ditolak</a>';
                                                $action = "";
                                            }
                                            if ($p['status_tujuan'] == 2) {
                                                $status = '<a class="badge badge-success">Diterima</a>';
                                                $action = '<a href="/koperasi/cetakBoneBol/' . $p['slug'] . '/' . $p['idpermohonan'] . '" class="btn btn-sm btn-success mr-1"><i class="fa fa-print mr-1"></i>Cetak</a>';
                                            }
                                        }
                                    }
                                    if ($session['id'] == 12) {
                                        if ($p['asal'] == 4) {
                                            if ($p['status_asal'] == 0) {
                                                $status = '<a class="badge badge-warning">Perlu Diverifikasi !</a>';
                                                $action = '<a href="/koperasi/verifikasiGorut/' . $p['slug'] . '/' . $p['idpermohonan'] . '" class="btn btn-sm btn-warning mr-1"><i class="fa fa-print mr-1"></i>Verifikasi</a>';
                                            }
                                            if ($p['status_asal'] == 1) {
                                                $status = '<a class="badge badge-danger">Ditolak</a>';
                                                $action = "";
                                            }
                                            if ($p['status_asal'] == 2) {
                                                $status = '<a class="badge badge-success">Diterima</a>';
                                                $action = '<a href="/koperasi/cetakGorut/' . $p['slug'] . '/' . $p['idpermohonan'] . '" class="btn btn-sm btn-success mr-1"><i class="fa fa-print mr-1"></i>Cetak</a>';
                                            }
                                        } else if ($p['tujuan'] == 4) {
                                            if ($p['status_tujuan'] == 0) {
                                                $status = '<a class="badge badge-warning">Perlu Diverifikasi !</a>';
                                                $action = '<a href="/koperasi/verifikasiGorut/' . $p['slug'] . '/' . $p['idpermohonan'] . '" class="btn btn-sm btn-warning mr-1"><i class="fa fa-print mr-1"></i>Verifikasi</a>';
                                            }
                                            if ($p['status_tujuan'] == 1) {
                                                $status = '<a class="badge badge-danger">Ditolak</a>';
                                                $action = "";
                                            }
                                            if ($p['status_tujuan'] == 2) {
                                                $status = '<a class="badge badge-success">Diterima</a>';
                                                $action = '<a href="/koperasi/cetakGorut/' . $p['slug'] . '/' . $p['idpermohonan'] . '" class="btn btn-sm btn-success mr-1"><i class="fa fa-print mr-1"></i>Cetak</a>';
                                            }
                                        }
                                    }
                                    if ($session['id'] == 13) {
                                        if ($p['asal'] == 5) {
                                            if ($p['status_asal'] == 0) {
                                                $status = '<a class="badge badge-warning">Perlu Diverifikasi !</a>';
                                                $action = '<a href="/koperasi/verifikasiBoalemo/' . $p['slug'] . '/' . $p['idpermohonan'] . '" class="btn btn-sm btn-warning mr-1"><i class="fa fa-print mr-1"></i>Verifikasi</a>';
                                            }
                                            if ($p['status_asal'] == 1) {
                                                $status = '<a class="badge badge-danger">Ditolak</a>';
                                                $action = "";
                                            }
                                            if ($p['status_asal'] == 2) {
                                                $status = '<a class="badge badge-success">Diterima</a>';
                                                $action = '<a href="/koperasi/cetakBoalemo/' . $p['slug'] . '/' . $p['idpermohonan'] . '" class="btn btn-sm btn-success mr-1"><i class="fa fa-print mr-1"></i>Cetak</a>';
                                            }
                                        } else if ($p['tujuan'] == 5) {
                                            if ($p['status_tujuan'] == 0) {
                                                $status = '<a class="badge badge-warning">Perlu Diverifikasi !</a>';
                                                $action = '<a href="/koperasi/verifikasiBoalemo/' . $p['slug'] . '/' . $p['idpermohonan'] . '" class="btn btn-sm btn-warning mr-1"><i class="fa fa-print mr-1"></i>Verifikasi</a>';
                                            }
                                            if ($p['status_tujuan'] == 1) {
                                                $status = '<a class="badge badge-danger">Ditolak</a>';
                                                $action = "";
                                            }
                                            if ($p['status_tujuan'] == 2) {
                                                $status = '<a class="badge badge-success">Diterima</a>';
                                                $action = '<a href="/koperasi/cetakBoalemo/' . $p['slug'] . '/' . $p['idpermohonan'] . '" class="btn btn-sm btn-success mr-1"><i class="fa fa-print mr-1"></i>Cetak</a>';
                                            }
                                        }
                                    }
                                    if ($session['id'] == 14) {
                                        if ($p['asal'] == 6) {
                                            if ($p['status_asal'] == 0) {
                                                $status = '<a class="badge badge-warning">Perlu Diverifikasi !</a>';
                                                $action = '<a href="/koperasi/verifikasiPohuwato/' . $p['slug'] . '/' . $p['idpermohonan'] . '" class="btn btn-sm btn-warning mr-1"><i class="fa fa-print mr-1"></i>Verifikasi</a>';
                                            }
                                            if ($p['status_asal'] == 1) {
                                                $status = '<a class="badge badge-danger">Ditolak</a>';
                                                $action = "";
                                            }
                                            if ($p['status_asal'] == 2) {
                                                $status = '<a class="badge badge-success">Diterima</a>';
                                                $action = '<a href="/koperasi/cetakPohuwato/' . $p['slug'] . '/' . $p['idpermohonan'] . '" class="btn btn-sm btn-success mr-1"><i class="fa fa-print mr-1"></i>Cetak</a>';
                                            }
                                        } else if ($p['tujuan'] == 6) {
                                            if ($p['status_tujuan'] == 0) {
                                                $status = '<a class="badge badge-warning">Perlu Diverifikasi !</a>';
                                                $action = '<a href="/koperasi/verifikasiPohuwato/' . $p['slug'] . '/' . $p['idpermohonan'] . '" class="btn btn-sm btn-warning mr-1"><i class="fa fa-print mr-1"></i>Verifikasi</a>';
                                            }
                                            if ($p['status_tujuan'] == 1) {
                                                $status = '<a class="badge badge-danger">Ditolak</a>';
                                                $action = "";
                                            }
                                            if ($p['status_tujuan'] == 2) {
                                                $status = '<a class="badge badge-success">Diterima</a>';
                                                $action = '<a href="/koperasi/cetakPohuwato/' . $p['slug'] . '/' . $p['idpermohonan'] . '" class="btn btn-sm btn-success mr-1"><i class="fa fa-print mr-1"></i>Cetak</a>';
                                            }
                                        }
                                    }
                                    ?>
                                    <tr>
                                        <td class="font-weight-bold text-primary"><?= $p['nama_perusahaan'] ?></td>
                                        <td>
                                            <a id="btnModalDetail" class="text-primary" data-toggle="modal" data-target="#modalDetail" data-nama="<?= $p['nama_pemilik'] ?>" data-trayek="<?= $p['trayek'] ?>" data-nomor="<?= $p['nomor_kendaraan'] ?>" data-kir="<?= $p['nomor_kir'] ?>" data-tahun="<?= $p['tahun_pembuatan'] ?>" data-merk="<?= $p['merk'] ?>" data-chasis="<?= $p['nomor_chasis'] ?>" data-mesin="<?= $p['nomor_mesin'] ?>" data-pkb="<?= $p['nomor_regis_pkb'] ?>" data-kir="<?= $p['img_kir'] ?>" data-surat="<?= $p['img_surat_permohonan_koperasi'] ?>" data-ktp="<?= $p['img_ktp_pemilik'] ?>" data-stnkb="<?= $p['img_stnkb'] ?>" data-jasa="<?= $p['img_jasa_raharja'] ?>" data-imgkir="<?= $p['img_kir'] ?>"><?= $p['trayek'] ?></a>
                                        </td>
                                        <td><?= $p['nama_pemilik'] ?></td>
                                        <td><?= $p['nomor_kendaraan'] ?></td>
                                        <td><?= $status ?></td>
                                        <td><?= $action ?></td>
                                    </tr>

                                <?php endforeach; ?>
                            </tbody>
                        </table>

                        <div class="cards px-4 py-4">
                            <small class="text-danger font-weight-bold">PEHATIAN !</small>
                            <div class="row">
                                <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-print"></i> Tombol Cetak</a>
                                <small class="mt-2 ml-3 mr-1">Apabila status tombol cetak berwarna merah, </small>
                                <small class="mt-2">maka yang akan keluar adalah Surat Penolakan</small>
                            </div>
                            <div class="row">
                                <a href="#" class="btn btn-sm btn-success"><i class="fa fa-print"></i> Tombol Cetak</a>
                                <small class="mt-2 ml-3 mr-2">Apabila status tombol cetak berwarna hijau, </small>
                                <small class="mt-2"> maka yang akan keluar adalah Surat Rekomendasi</small>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Central Modal Small -->
<div class="modal fade" id="modalDetail" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title w-100 font-weight-bold text-primary" id="myModalLabel">Detail Permohonan
                    Asal/Tujuan Trayek</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="isiModal">
                <h5 class="modal-title w-100 mb-3 font-weight-bold" id="myModalLabel">Informasi Data Pemohon</h5>
                <table class="table table-sm table-bordered">
                    <tr>
                        <td style="border:0;">Trayek yang dilayani</td>
                        <td><textarea style="overflow:hidden; padding:0; border:0; font-size: 14px;" rows="3" class="form-control text-dark" id="trayek"></textarea></td>
                    </tr>
                    <tr>
                        <td style="font-size: 14px;">Nama Pemilik</td>
                        <td><input style="border: 0;" id="nama_pemilik"></td>
                    </tr>
                    <tr>
                        <td style="font-size: 14px;">Nomor Kendaraan</td>
                        <td><input style="border: 0;" id="nomor"></td>
                    </tr>
                    <tr>
                        <td style="font-size: 14px;">Nomor KIR</td>
                        <td><input style="border: 0;" id="kir"></td>
                    </tr>
                    <tr>
                        <td style="font-size: 14px;">Tahun Pembuatan</td>
                        <td><input style="border: 0;" id="tahun"></td>
                    </tr>
                    <tr>
                        <td style="font-size: 14px;">Merk/Type</td>
                        <td><input style="border: 0;" id="merk"></td>
                    </tr>
                    <tr>
                        <td style="font-size: 14px;">Nomor Chasis</td>
                        <td><input style="border: 0;" id="chasis"></td>
                    </tr>
                    <tr>
                        <td style="font-size: 14px;">Nomor Mesin</td>
                        <td><input style="border: 0;" id="mesin"></td>
                    </tr>
                    <tr>
                        <td style="font-size: 14px;">Nomor Regis PKB</td>
                        <td><input style="border: 0;" id="pkb"></td>
                    </tr>
                </table>

                <h5 class="modal-title w-100 mb-3 font-weight-bold" id="myModalLabel">Lampiran Permohonan</h5>

                <table class="table table-sm table-bordered">
                    <tr>
                        <td style="font-size: 14px;">Scan/Foto Surat Permohonan Koperasi</td>
                        <td><a class="btn btn-sm btn-primary" id="surat" target="_blank">Lihat Dokumen</a></td>
                    </tr>
                    <tr>
                        <td style="font-size: 14px;">Scan/Foto KTP Pemilik</td>
                        <td><a class="btn btn-sm btn-primary" id="ktp" target="_blank">Lihat Dokumen</a></td>
                    </tr>
                    <tr>
                        <td style="font-size: 14px;">Scan/Foto STNKB Berlaku</td>
                        <td><a class="btn btn-sm btn-primary" id="stnkb" target="_blank">Lihat Dokumen</a></td>
                    </tr>
                    <tr>
                        <td style="font-size: 14px;">Scan/Foto Jasa Raharja</td>
                        <td><a class="btn btn-sm btn-primary" id="jasa" target="_blank">Lihat Dokumen</a></td>
                    </tr>
                    <tr>
                        <td style="font-size: 14px;">Scan/Foto KIR Berlaku</td>
                        <td><a class="btn btn-sm btn-primary" id="imgkir" target="_blank">Lihat Dokumen</a></td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Central Modal Small -->
<?= $this->endSection(); ?>