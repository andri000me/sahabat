<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <!-- <div class="judul pl-4 wow fadeInLeft"><i class="fa fa-eye mr-2"></i> Detail data rekomendasi</div> -->

    <div class="row mb-5 wow fadeInRight">
        <div class="col-sm-12 mb-3 mb-md-0">
            <div class="cards px-4 pt-3">
                <div class="card-body">
                    <div class="container-fluid">
                        <?php
                        if ($detail['status_verifikasi'] == 4) {
                        ?>
                            <div class="col text-center">
                                <h5><a class="badge badge-danger"><i class="fa fa-ban"></i> Permohonan telah ditolak !</a></h5>
                                <a href="/login/home" class="text-primary"><i class="fa fa-arrow-left"></i> Kembali ke halaman utama</a>
                            </div>
                        <?php } else {
                        ?>
                    </div>
                    <div class="container-fluid">

                        <div class="row mb-5">
                            <div class="col-md-8">
                                <?php
                                if ($detail['status'] == 1) {
                                    $sts = "Registrasi Baru";
                                } else {
                                    $sts = "Perpanjangan";
                                }
                                ?>
                                <h4 class="text-dark font-weight-bold card-title">Detail data permohonan <?= $sts ?> Rekomendasi Izin Trayek AKDP</h4>
                                <p class="card-text">Detail data permohonan rekomendasi Dinas Perhubungan Provinsi Gorontalo</p>
                            </div>
                            <?php
                            if ($detail['status'] == 1) {
                            ?>
                                <div class="col text-right">
                                    <?php
                                    if ($detail['status_verifikasi'] == 4) {
                                    ?>
                                        <a class="badge badge-danger"><i class="fa fa-ban"></i> Permohonan telah ditolak !</a>
                                        <?php
                                    } else {
                                        if ($session['role'] == 3) {
                                        ?>
                                            <a data-toggle="modal" data-target="#ModalSuccess" type="button" class="btn btn-sm btn-success text-light">Approve Permohonan<i class="fa fa-check ml-1"></i> </a>
                                        <?php
                                        } else {
                                        }
                                        if ($detail['status_img_surat_permohonan'] == 1 && $detail['status_img_akte_perusahaan'] == 1 && $detail['status_img_tdp'] == 1 && $detail['status_img_siup'] == 1 && $detail['status_img_npwp'] == 1 && $detail['status_img_ktp']  == 1 && $detail['status_img_trayek']  == 1 && $detail['status_img_trayek_tujuan']  == 1 && $detail['status_img_stnkb_pkb']  == 1 && $detail['status_img_kir'] == 1 && $detail['status_img_jasa_raharja'] == 1 && $detail['status_img_surat_pernyataan'] == 1) {
                                        } else {
                                        ?>
                                            <a data-toggle="modal" data-target="#ModalDanger" type="button" class="btn btn-sm btn-danger text-light">Tolak Permohonan<i class="fa fa-ban ml-1"></i> </a>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                            <?php
                            }
                            ?>
                            <?php
                            if ($detail['status'] == 2) {
                            ?>
                                <div class="col text-right">
                                    <?php
                                    if ($detail['status_verifikasi'] == 4) {
                                    ?>
                                        <a class="badge badge-danger"><i class="fa fa-ban"></i> Permohonan telah ditolak !</a>
                                        <?php
                                    } else {
                                        if ($session['role'] == 3) {
                                        ?>
                                            <a data-toggle="modal" data-target="#ModalSuccess" type="button" class="btn btn-sm btn-success text-light">Approve Permohonan<i class="fa fa-check ml-1"></i> </a>
                                        <?php
                                        } else {
                                        }
                                        if ($detail['status_img_surat_permohonan'] == 1 && $detail['status_img_akte_perusahaan'] == 1 && $detail['status_img_tdp'] == 1 && $detail['status_img_siup'] == 1 && $detail['status_img_npwp'] == 1 && $detail['status_img_ktp']  == 1 && $detail['status_img_trayek_tujuan']  == 1 && $detail['status_img_stnkb_pkb']  == 1 && $detail['status_img_kir'] == 1 && $detail['status_img_jasa_raharja'] == 1 && $detail['status_img_surat_pernyataan'] == 1) {
                                        } else {
                                        ?>
                                            <a data-toggle="modal" data-target="#ModalDanger" type="button" class="btn btn-sm btn-danger text-light">Tolak Permohonan<i class="fa fa-ban ml-1"></i> </a>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                            <?php
                            }
                            ?>
                            </form>

                        </div>

                        <div class="row font-weight-bold">
                            <div class="col-sm-3 textf">
                                Nama Pemohon
                            </div>
                            <div class="col-sm-8">
                                : <?= $detail['nama_perusahaan'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 textf">
                                Tanggal Permohonan
                            </div>
                            <div class="col-sm-8">
                                <?php
                                $originalDate = $detail['tgl_permohonan'];
                                $newDate = date("d F Y", strtotime($originalDate));
                                ?>
                                : <?= $newDate ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 textf">
                                Jenis Permohonan
                            </div>
                            <div class="col-sm-8">
                                : Pertimbangan Teknis Izin Trayek AKDP
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 textf">
                                Trayek yang dilayani
                            </div>
                            <div class="col-sm-8">
                                : <?= $detail['trayek_dilayani'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 textf">
                                Nomor Kendaraan
                            </div>
                            <div class="col-sm-8">
                                : <?= $detail['nomor_kendaraan'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 textf">
                                Nama Pemilik sesuai STNKB
                            </div>
                            <div class="col-sm-8">
                                : <?= $detail['nama_pemilik'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 textf">
                                Alamat pemilik
                            </div>
                            <div class="col-sm-8">
                                : <?= $detail['alamat_pemilik'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 textf">
                                Jenis Kendaraan
                            </div>
                            <div class="col-sm-8">
                                : <?= $detail['jenis_kendaraan'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 textf">
                                Tahun Pembuatan
                            </div>
                            <div class="col-sm-8">
                                : <?= $detail['tahun_pembuatan'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 textf">
                                Nomor Pemeriksaan KIR
                            </div>
                            <div class="col-sm-8">
                                : <?= $detail['nomor_kir'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 textf">
                                Kapasitas Angkutan
                            </div>
                            <div class="col-sm-8">
                                : <?= $detail['kapasitas_angkutan'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 textf">
                                Uji Berkala berlaku
                            </div>
                            <div class="col-sm-8">
                                <?php
                                $originalDate = $detail['uji_berkala_berlaku'];
                                $newDate = date("d-m-Y", strtotime($originalDate));
                                ?>
                                : <?= $newDate ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 textf">
                                STNKB dan PKB berlaku
                            </div>
                            <div class="col-sm-8">
                                <?php
                                $originalDate = $detail['stnkb_berlaku'];
                                $newDate = date("d-m-Y", strtotime($originalDate));
                                ?>
                                <?php
                                $originalDate = $detail['uji_berkala_berlaku'];
                                $newDate2 = date("d-m-Y", strtotime($originalDate));
                                ?>
                                : <?= $newDate ?> / <?= $newDate2 ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 textf">
                                Iuran Jasa Raharja berlaku
                            </div>
                            <div class="col-sm-8">
                                <?php
                                $originalDate = $detail['jasa_raharja_berlaku'];
                                $newDate = date("d-m-Y", strtotime($originalDate));
                                ?>
                                : <?= $newDate ?>
                            </div>
                        </div>

                        <div class="row mt-5 mb-3">
                            <div class="col">
                                <h4 class="text-dark font-weight-bold card-title">Kelengkapan Dokumen Permohonan</h4>
                                <p class="mb-0 text-danger"><i class="fa fa-chevron-right"></i>
                                    Jika dokumen telah sesuai, Silahkan klik tombol centang hijau <i class="btn btn-sm btn-success fa fa-check"></i> yang ada di action sebelah kanan tabel
                                </p>
                                <p class="mb-0 text-danger"><i class="fa fa-chevron-right"></i>
                                    Jika Dokumen tidak sesuai, Silahkan klik tombol merah <i class="btn btn-sm btn-danger fa fa-ban"></i> yang ada di action sebelah kanan tabel
                                </p>
                                <!-- <p class="mb-0 text-danger"><i class="fa fa-chevron-right"></i>
                                    Apabila semua dokumen sudah valid, silahkan klik button <a type="button" class="btn btn-sm btn-secondary text-light">Lengkapi dan Ajukan<i class="fa fa-check ml-1"></i> </a>
                                </p>
                                <p class="mb-0 text-danger"><i class="fa fa-chevron-right"></i>
                                    Apabila dokumen belum semuanya valid, silahkan klik button <a type="button" class="btn btn-sm btn-danger text-light">Tolak Permohonan<i class="fa fa-ban ml-1"></i></a> untuk melakukan penolakan
                                </p> -->
                            </div>
                        </div>

                        <table class="table table-bordered">
                            <thead class="cyan white-text">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Jenis Dokumen</th>
                                    <th scope="col" width="200" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <?php
                                    if ($detail['status_img_surat_permohonan'] == 0) {
                                        $status = '<i class="fa fa-question"></i>';
                                        $text = 'class="text-dark"';
                                    }
                                    if ($detail['status_img_surat_permohonan'] == 1) {
                                        $status = '<i class="fa fa-check"></i>';
                                        $text = 'class="text-success"';
                                    }
                                    if ($detail['status_img_surat_permohonan'] == 2) {
                                        $status = '<i class="fa fa-ban"></i>';
                                        $text = 'class="text-danger"';
                                    }
                                    ?>
                                    <td <?= $text ?>>Surat Permohonan yang ditujukan kepada Kepala DPM Prov. Gorontalo <?= $status ?></td>
                                    <td class="text-right">
                                        <a href="/img/img_permohonan/<?= $detail['img_surat_permohonan'] ?>" target="_blank" type="btn" class="ml-auto btn btn-sm btn-cyan"><i class="fa fa-eye"></i> Lihat Dokumen</a>
                                        <a href="/verifikasi/terima0/<?= $detail['kode_booking'] ?>/<?= $detail['trayek_dilayani'] ?>/<?= $detail['idpermohonan'] ?>" class="btn btn-sm btn-success"><i class="fa fa-check"></i></a>
                                        <a href="/verifikasi/tolak0/<?= $detail['kode_booking'] ?>/<?= $detail['trayek_dilayani'] ?>/<?= $detail['idpermohonan'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <?php
                                    if ($detail['status_img_akte_perusahaan'] == 0) {
                                        $statusa = '<i class="fa fa-question"></i>';
                                        $texta = 'class="text-dark"';
                                    }
                                    if ($detail['status_img_akte_perusahaan'] == 1) {
                                        $statusa = '<i class="fa fa-check"></i>';
                                        $texta = 'class="text-success"';
                                    }
                                    if ($detail['status_img_akte_perusahaan'] == 2) {
                                        $statusa = '<i class="fa fa-ban"></i>';
                                        $texta = 'class="text-danger"';
                                    }
                                    ?>
                                    <td <?= $texta ?>>Fotocopy Akte Perusahaan berserta pengesahan <?= $statusa ?></td>
                                    <td class="text-right">
                                        <a href="/img/img_akte_perusahaan/<?= $detail['img_akte_perusahaan'] ?>" target="_blank" type="btn" class="ml-auto btn btn-sm btn-cyan"><i class="fa fa-eye"></i> Lihat Dokumen</a>
                                        <a href="/verifikasi/terimaa/<?= $detail['kode_booking'] ?>/<?= $detail['trayek_dilayani'] ?>/<?= $detail['idpermohonan'] ?>" class="btn btn-sm btn-success"><i class="fa fa-check"></i></a>
                                        <a href="/verifikasi/tolaka/<?= $detail['kode_booking'] ?>/<?= $detail['trayek_dilayani'] ?>/<?= $detail['idpermohonan'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <?php
                                    if ($detail['status_img_tdp'] == 0) {
                                        $statusb = '<i class="fa fa-question"></i>';
                                        $textb = 'class="text-dark"';
                                    }
                                    if ($detail['status_img_tdp'] == 1) {
                                        $statusb = '<i class="fa fa-check"></i>';
                                        $textb = 'class="text-success"';
                                    }
                                    if ($detail['status_img_tdp'] == 2) {
                                        $statusb = '<i class="fa fa-ban"></i>';
                                        $textb = 'class="text-danger"';
                                    }
                                    ?>
                                    <td <?= $textb ?>>Fotocopy Tanda Daftar Perusahaan (TDP) / Nomor Induk Berusaha (NIB) <?= $statusb ?></td>
                                    <td class="text-right">
                                        <a href="/img/img_tdp/<?= $detail['img_tdp'] ?>" target="_blank" type="btn" class="ml-auto btn btn-sm btn-cyan"><i class="fa fa-eye"></i> Lihat Dokumen</a>
                                        <a href="/verifikasi/terimab/<?= $detail['kode_booking'] ?>/<?= $detail['trayek_dilayani'] ?>/<?= $detail['idpermohonan'] ?>" class="btn btn-sm btn-success"><i class="fa fa-check"></i></a>
                                        <a href="/verifikasi/tolakb/<?= $detail['kode_booking'] ?>/<?= $detail['trayek_dilayani'] ?>/<?= $detail['idpermohonan'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <?php
                                    if ($detail['status_img_siup'] == 0) {
                                        $statusc = '<i class="fa fa-question"></i>';
                                        $textc = 'class="text-dark"';
                                    }
                                    if ($detail['status_img_siup'] == 1) {
                                        $statusc = '<i class="fa fa-check"></i>';
                                        $textc = 'class="text-success"';
                                    }
                                    if ($detail['status_img_siup'] == 2) {
                                        $statusc = '<i class="fa fa-ban"></i>';
                                        $textc = 'class="text-danger"';
                                    }
                                    ?>
                                    <td <?= $textc ?>>Fotocopy Surat Izin Usaha Perdagangan (SIUP) <?= $statusc ?></td>
                                    <td class="text-right">
                                        <a href="/img/img_siup/<?= $detail['img_siup'] ?>" target="_blank" type="btn" class="ml-auto btn btn-sm btn-cyan"><i class="fa fa-eye"></i> Lihat Dokumen</a>
                                        <a href="/verifikasi/terimac/<?= $detail['kode_booking'] ?>/<?= $detail['trayek_dilayani'] ?>/<?= $detail['idpermohonan'] ?>" class="btn btn-sm btn-success"><i class="fa fa-check"></i></a>
                                        <a href="/verifikasi/tolakc/<?= $detail['kode_booking'] ?>/<?= $detail['trayek_dilayani'] ?>/<?= $detail['idpermohonan'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <?php
                                    if ($detail['status_img_npwp'] == 0) {
                                        $statusd = '<i class="fa fa-question"></i>';
                                        $textd = 'class="text-dark"';
                                    }
                                    if ($detail['status_img_npwp'] == 1) {
                                        $statusd = '<i class="fa fa-check"></i>';
                                        $textd = 'class="text-success"';
                                    }
                                    if ($detail['status_img_npwp'] == 2) {
                                        $statusd = '<i class="fa fa-ban"></i>';
                                        $textd = 'class="text-danger"';
                                    }
                                    ?>
                                    <td <?= $textd ?>>Fotocopy Nomor Pokok Wajib Pajak (NPWP) Badan Usaha <?= $statusd ?></td>
                                    <td class="text-right">
                                        <a href="/img/img_npwp/<?= $detail['img_npwp'] ?>" target="_blank" type="btn" class="ml-auto btn btn-sm btn-cyan"><i class="fa fa-eye"></i> Lihat Dokumen</a>
                                        <a href="/verifikasi/terimad/<?= $detail['kode_booking'] ?>/<?= $detail['trayek_dilayani'] ?>/<?= $detail['idpermohonan'] ?>" class="btn btn-sm btn-success"><i class="fa fa-check"></i></a>
                                        <a href="/verifikasi/tolakd/<?= $detail['kode_booking'] ?>/<?= $detail['trayek_dilayani'] ?>/<?= $detail['idpermohonan'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <?php
                                    if ($detail['status_img_ktp'] == 0) {
                                        $statuse = '<i class="fa fa-question"></i>';
                                        $texte = 'class="text-dark"';
                                    }
                                    if ($detail['status_img_ktp'] == 1) {
                                        $statuse = '<i class="fa fa-check"></i>';
                                        $texte = 'class="text-success"';
                                    }
                                    if ($detail['status_img_ktp'] == 2) {
                                        $statuse = '<i class="fa fa-ban"></i>';
                                        $texte = 'class="text-danger"';
                                    }
                                    ?>
                                    <td <?= $texte ?>>Fotocopy KTP Direktur Perusahaan <?= $statuse ?></td>
                                    <td class="text-right">
                                        <a href="/img/img_ktp_direktur/<?= $detail['img_ktp_direktur'] ?>" target="_blank" type="btn" class="ml-auto btn btn-sm btn-cyan"><i class="fa fa-eye"></i> Lihat Dokumen</a>
                                        <a href="/verifikasi/terimae/<?= $detail['kode_booking'] ?>/<?= $detail['trayek_dilayani'] ?>/<?= $detail['idpermohonan'] ?>" class="btn btn-sm btn-success"><i class="fa fa-check"></i></a>
                                        <a href="/verifikasi/tolake/<?= $detail['kode_booking'] ?>/<?= $detail['trayek_dilayani'] ?>/<?= $detail['idpermohonan'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i></a>
                                    </td>
                                </tr>
                                <?php
                                if ($detail['status'] == 1) {
                                ?>
                                    <tr>
                                        <th scope="row">7</th>
                                        <?php
                                        if ($detail['status_img_trayek'] == 0) {
                                            $statusf = '<i class="fa fa-question"></i>';
                                            $textf = 'class="text-dark"';
                                        }
                                        if ($detail['status_img_trayek'] == 1) {
                                            $statusf = '<i class="fa fa-check"></i>';
                                            $textf = 'class="text-success"';
                                        }
                                        if ($detail['status_img_trayek'] == 2) {
                                            $statusf = '<i class="fa fa-ban"></i>';
                                            $textf = 'class="text-danger"';
                                        }
                                        ?>
                                        <td <?= $textf ?>>Rekomendasi Asal Trayek <?= $statusf ?></td>
                                        <td class="text-right">
                                            <a href="/img/img_rekomendasi/<?= $at['img_rekomendasi_asal'] ?>" target="_blank" type="btn" class="ml-auto btn btn-sm btn-cyan"><i class="fa fa-eye"></i> Lihat Dokumen</a>
                                            <a href="/verifikasi/terimaf/<?= $detail['kode_booking'] ?>/<?= $detail['trayek_dilayani'] ?>/<?= $detail['idpermohonan'] ?>" class="btn btn-sm btn-success"><i class="fa fa-check"></i></a>
                                            <a href="/verifikasi/tolakf/<?= $detail['kode_booking'] ?>/<?= $detail['trayek_dilayani'] ?>/<?= $detail['idpermohonan'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <?php
                                        if ($detail['status_img_trayek_tujuan'] == 0) {
                                            $statusg = '<i class="fa fa-question"></i>';
                                            $textg = 'class="text-dark"';
                                        }
                                        if ($detail['status_img_trayek_tujuan'] == 1) {
                                            $statusg = '<i class="fa fa-check"></i>';
                                            $textg = 'class="text-success"';
                                        }
                                        if ($detail['status_img_trayek_tujuan'] == 2) {
                                            $statusg = '<i class="fa fa-ban"></i>';
                                            $textg = 'class="text-danger"';
                                        }
                                        ?>
                                        <td <?= $textg ?>>Rekomendasi Tujuan Trayek <?= $statusg ?></td>
                                        <td class="text-right">
                                            <a href="/img/img_rekomendasi/<?= $at['img_rekomendasi_tujuan'] ?>" target="_blank" type="btn" class="ml-auto btn btn-sm btn-cyan"><i class="fa fa-eye"></i> Lihat Dokumen</a>
                                            <a href="/verifikasi/terimag/<?= $detail['kode_booking'] ?>/<?= $detail['trayek_dilayani'] ?>/<?= $detail['idpermohonan'] ?>" class="btn btn-sm btn-success"><i class="fa fa-check"></i></a>
                                            <a href="/verifikasi/tolakg/<?= $detail['kode_booking'] ?>/<?= $detail['trayek_dilayani'] ?>/<?= $detail['idpermohonan'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i></a>
                                        </td>
                                    </tr>
                                <?php
                                } else {
                                ?>
                                    <tr>
                                        <th scope="row">7</th>
                                        <?php
                                        if ($detail['status_img_trayek_tujuan'] == 0) {
                                            $statusg = '<i class="fa fa-question"></i>';
                                            $textg = 'class="text-dark"';
                                        }
                                        if ($detail['status_img_trayek_tujuan'] == 1) {
                                            $statusg = '<i class="fa fa-check"></i>';
                                            $textg = 'class="text-success"';
                                        }
                                        if ($detail['status_img_trayek_tujuan'] == 2) {
                                            $statusg = '<i class="fa fa-ban"></i>';
                                            $textg = 'class="text-danger"';
                                        }
                                        ?>
                                        <td <?= $textg ?>>Izin Trayek Lama <?= $statusg ?></td>
                                        <td class="text-right">
                                            <a href="/img/img_izin_trayek/<?= $detail['img_izin_trayek'] ?>" target="_blank" type="btn" class="ml-auto btn btn-sm btn-cyan"><i class="fa fa-eye"></i> Lihat Dokumen</a>
                                            <a href="/verifikasi/terimag/<?= $detail['kode_booking'] ?>/<?= $detail['trayek_dilayani'] ?>/<?= $detail['idpermohonan'] ?>" class="btn btn-sm btn-success"><i class="fa fa-check"></i></a>
                                            <a href="/verifikasi/tolakg/<?= $detail['kode_booking'] ?>/<?= $detail['trayek_dilayani'] ?>/<?= $detail['idpermohonan'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i></a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                                <tr>
                                    <th scope="row">8</th>
                                    <?php
                                    if ($detail['status_img_stnkb_pkb'] == 0) {
                                        $status1 = '<i class="fa fa-question"></i>';
                                        $text1 = 'class="text-dark"';
                                    }
                                    if ($detail['status_img_stnkb_pkb'] == 1) {
                                        $status1 = '<i class="fa fa-check"></i>';
                                        $text1 = 'class="text-success"';
                                    }
                                    if ($detail['status_img_stnkb_pkb'] == 2) {
                                        $status1 = '<i class="fa fa-ban"></i>';
                                        $text1 = 'class="text-danger"';
                                    }
                                    ?>
                                    <td <?= $text1 ?>>Fotocopy STNKB dan PKB <?= $status1 ?></td>
                                    <td class="text-right">
                                        <a href="/img/img_stnkb_pkb/<?= $detail['img_stnkb_pkb'] ?>" target="_blank" type="btn" class="ml-auto btn btn-sm btn-cyan"><i class="fa fa-eye"></i> Lihat Dokumen</a>
                                        <a href="/verifikasi/terima1/<?= $detail['kode_booking'] ?>/<?= $detail['trayek_dilayani'] ?>/<?= $detail['idpermohonan'] ?>" class="btn btn-sm btn-success"><i class="fa fa-check"></i></a>
                                        <a href="/verifikasi/tolak1/<?= $detail['kode_booking'] ?>/<?= $detail['trayek_dilayani'] ?>/<?= $detail['idpermohonan'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <?php
                                    if ($detail['status_img_kir'] == 0) {
                                        $status2 = '<i class="fa fa-question"></i>';
                                        $text2 = 'class="text-dark"';
                                    }
                                    if ($detail['status_img_kir'] == 1) {
                                        $status2 = '<i class="fa fa-check"></i>';
                                        $text2 = 'class="text-success"';
                                    }
                                    if ($detail['status_img_kir'] == 2) {
                                        $status2 = '<i class="fa fa-ban"></i>';
                                        $text2 = 'class="text-danger"';
                                    }
                                    ?>
                                    <td <?= $text2 ?>>Fotocopy Buku KIR <?= $status2 ?></td>
                                    <td class="text-right">
                                        <a href="/img/img_kir/<?= $detail['img_kir'] ?>" type="btn" target="_blank" class="ml-auto btn btn-sm btn-cyan"><i class="fa fa-eye"></i> Lihat Dokumen</a>
                                        <a href="/verifikasi/terima2/<?= $detail['kode_booking'] ?>/<?= $detail['trayek_dilayani'] ?>/<?= $detail['idpermohonan'] ?>" class="btn btn-sm btn-success"><i class="fa fa-check"></i></a>
                                        <a href="/verifikasi/tolak2/<?= $detail['kode_booking'] ?>/<?= $detail['trayek_dilayani'] ?>/<?= $detail['idpermohonan'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <?php
                                    if ($detail['status_img_jasa_raharja'] == 0) {
                                        $status3 = '<i class="fa fa-question"></i>';
                                        $text3 = 'class="text-dark"';
                                    }
                                    if ($detail['status_img_jasa_raharja'] == 1) {
                                        $status3 = '<i class="fa fa-check"></i>';
                                        $text3 = 'class="text-success"';
                                    }
                                    if ($detail['status_img_jasa_raharja'] == 2) {
                                        $status3 = '<i class="fa fa-ban"></i>';
                                        $text3 = 'class="text-danger"';
                                    }
                                    ?>
                                    <td <?= $text3 ?>>Fotocopy Iuran Jasa Raharja <?= $status3 ?></td>
                                    <td class="text-right">
                                        <a href="/img/img_jasa_raharja/<?= $detail['img_jasa_raharja'] ?>" target="_blank" type="btn" class="ml-auto btn btn-sm btn-cyan"><i class="fa fa-eye"></i> Lihat Dokumen</a>
                                        <a href="/verifikasi/terima3/<?= $detail['kode_booking'] ?>/<?= $detail['trayek_dilayani'] ?>/<?= $detail['idpermohonan'] ?>" class="btn btn-sm btn-success"><i class="fa fa-check"></i></a>
                                        <a href="/verifikasi/tolak3/<?= $detail['kode_booking'] ?>/<?= $detail['trayek_dilayani'] ?>/<?= $detail['idpermohonan'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">11</th>
                                    <?php
                                    if ($detail['status_img_surat_pernyataan'] == 0) {
                                        $status4 = '<i class="fa fa-question"></i>';
                                        $text4 = 'class="text-dark"';
                                    }
                                    if ($detail['status_img_surat_pernyataan'] == 1) {
                                        $status4 = '<i class="fa fa-check"></i>';
                                        $text4 = 'class="text-success"';
                                    }
                                    if ($detail['status_img_surat_pernyataan'] == 2) {
                                        $status4 = '<i class="fa fa-ban"></i>';
                                        $text4 = 'class="text-danger"';
                                    }
                                    ?>
                                    <td <?= $text4 ?>>Surat Pernyataan Kesanggupan untuk Pemegang Izin Trayek <?= $status4 ?> </td>
                                    <td class="text-right">
                                        <a href="/img/img_surat_pernyataan/<?= $detail['img_surat_pernyataan'] ?>" target="_blank" type="btn" class="ml-auto btn btn-sm btn-cyan"><i class="fa fa-eye"></i> Lihat Dokumen</a>
                                        <a href="/verifikasi/terima4/<?= $detail['kode_booking'] ?>/<?= $detail['trayek_dilayani'] ?>/<?= $detail['idpermohonan'] ?>" class="btn btn-sm btn-success"><i class="fa fa-check"></i></a>
                                        <a href="/verifikasi/tolak4/<?= $detail['kode_booking'] ?>/<?= $detail['trayek_dilayani'] ?>/<?= $detail['idpermohonan'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                <?php
                        }
                ?>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- modal terima -->
<!-- Central Modal Medium Success -->
<div class="modal fade" id="ModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-success" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading lead">Konfirmasi</p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">
                <div class="text-center">
                    <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
                    <p>Terima permohonan <b><?= $detail['nama_perusahaan'] ?></b> ?</p>
                </div>
            </div>

            <!--Footer-->
            <div class="modal-footer justify-content-center">
                <a href="/verifikasi/approve/<?= $detail['kode_booking'] ?>/<?= $detail['trayek_dilayani'] ?>/<?= $detail['idpermohonan'] ?>" type="button" class="btn btn-success">Ya, Terima <i class="far fa-gem ml-1 white-text"></i></a>
                <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">Batal</a>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Central Modal Medium Success-->

<script>
    $("#centralModalSuccess").on('show.bs.modal', function() {
        alert("Hello World!");
    });
</script>

<!-- modal tolak -->

<!-- Central Modal Danger Demo-->
<div class="modal fade" id="ModalDanger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="t`rue">
    <div class="modal-dialog modal-notify modal-danger" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading">Warning</p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <form method="POST" class="needs-validation md-form text-left" style="color: #757575;" action="/verifikasi/tolakpermohonan" enctype="multipart/form-data" novalidate>

                <input name="idpermohonan" type="hidden" value="<?= $detail['idpermohonan'] ?>">
                <input name="kode_booking" type="hidden" value="<?= $detail['kode_booking'] ?>">
                <input name="trayek_dilayani" type="hidden" value="<?= $detail['trayek_dilayani'] ?>">

                <div class="modal-body">
                    <div class="md-form mb-4 pink-textarea active-textarea">
                        <textarea name="msg" id="form18" class="md-textarea form-control" rows="3" required></textarea>
                        <label for="form18">Keterangan</label>
                        <div class="invalid-feedback">
                            Keterangan tidak boleh kosong
                        </div>
                    </div>

                    <div class="md-form">
                        <div class="file-field">
                            <div class="btn btn-danger text-light btn-sm float-left">
                                <span><i class="fa fa-image mr-1"></i> Pilih File Dokumen</span>
                                <input type="file" name="img" id="uploadImage">
                            </div>
                            <div class="file-path-wrapper">
                                <input name="img" class="file-path validate" type="text" placeholder="Dokumen Penolakan (Optional)">
                            </div>
                        </div>
                    </div>
                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center">
                    <button type="submit button" class="btn btn-danger">Ya, Tolak</button>
                    <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Batal</a>
                </div>
            </form>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Central Modal Danger Demo-->

<script>
    $("#ModalDanger").on('hide.bs.modal', function() {
        alert("Hello World!");
    });
</script>

<?= $this->endSection(); ?>