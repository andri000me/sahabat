<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <!-- <div class="judul pl-4 wow fadeInLeft"><i class="fa fa-eye mr-2"></i> Detail data rekomendasi</div> -->

    <div class="row mb-5 wow fadeInRight">
        <div class="col-sm-12 mb-3 mb-md-0">
            <div class="cards px-4 pt-3">
                <div class="card-body">
                    <div class="container-fluid">

                        <div class="row mb-5">
                            <div class="col-md-8">
                                <h4 class="text-dark font-weight-bold card-title">Detail data permohonan</h4>
                                <p class="card-text">Detail data permohonan rekomendasi Dinas Perhubungan Provinsi Gorontalo</p>
                            </div>

                            <div class="col text-right">
                                <!-- <a href="/verifikasi/terima/<?= $detail['idpermohonan'] ?>" type="btn" class="ml-auto btn btn-sm btn-success"><i class="fa fa-check"></i> Terima</a>
                                <a data-toggle="modal" data-target="#modalContactForm" type="btn" class="ml-auto btn btn-sm btn-danger"><i class="fa fa-ban"></i> Tolak</a> -->
                            </div>
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
                                : <?= $detail['tgl_permohonan'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 textf">
                                Jenis Permohonan
                            </div>
                            <div class="col-sm-8">
                                : <?= $detail['jenis_permohonan'] ?>
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
                                : <?= $detail['uji_berkala_berlaku'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 textf">
                                STNKB dan PKB berlaku
                            </div>
                            <div class="col-sm-8">
                                : <?= $detail['stnkb_berlaku'] ?> / <?= $detail['pkb_berlaku'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 textf">
                                Iuran Jasa Raharja berlaku
                            </div>
                            <div class="col-sm-8">
                                : <?= $detail['jasa_raharja_berlaku'] ?>
                            </div>
                        </div>

                        <div class="row mt-5 mb-3">
                            <div class="col">
                                <h4 class="text-dark font-weight-bold card-title">Kelengkapan Dokumen Permohonan</h4>
                            </div>
                        </div>

                        <table class="table table-bordered">
                            <thead class="cyan white-text">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Jenis Dokumen</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Surat Permohonan yang ditujukan kepada Kepala DPM Prov. Gorontalo</td>
                                    <td><a href="/img/img_permohonan/<?= $detail['img_surat_permohonan'] ?>" target="_blank" type="btn" class="ml-auto btn btn-sm btn-cyan"><i class="fa fa-eye"></i> Lihat Dokumen</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Fotocopy Akte Perusahaan berserta pengesahan</td>
                                    <td><a href="/img/img_akte_perusahaan/<?= $detail['img_akte_perusahaan'] ?>" target="_blank" type="btn" class="ml-auto btn btn-sm btn-cyan"><i class="fa fa-eye"></i> Lihat Dokumen</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Fotocopy Tanda Daftar Perusahaan (TDP) / Nomor Induk Berusaha (NIB)</td>
                                    <td><a href="/img/img_tdp/<?= $detail['img_tdp'] ?>" target="_blank" type="btn" class="ml-auto btn btn-sm btn-cyan"><i class="fa fa-eye"></i> Lihat Dokumen</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Fotocopy Surat Izin Usaha Perdagangan (SIUP)</td>
                                    <td><a href="/img/img_siup/<?= $detail['img_siup'] ?>" target="_blank" type="btn" class="ml-auto btn btn-sm btn-cyan"><i class="fa fa-eye"></i> Lihat Dokumen</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Fotocopy Nomor Pokok Wajib Pajak (NPWP) Badan Usaha</td>
                                    <td><a href="/img/img_npwp/<?= $detail['img_npwp'] ?>" target="_blank" type="btn" class="ml-auto btn btn-sm btn-cyan"><i class="fa fa-eye"></i> Lihat Dokumen</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Fotocopy KTP Direktur Perusahaan </td>
                                    <td><a href="/img/img_ktp_direktur/<?= $detail['img_ktp_direktur'] ?>" target="_blank" type="btn" class="ml-auto btn btn-sm btn-cyan"><i class="fa fa-eye"></i> Lihat Dokumen</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Rekomendasi Asal Trayek </td>
                                    <td><a href="/img/img_rekomendasi/<?= $at['img_rekomendasi_asal'] ?>" target="_blank" type="btn" class="ml-auto btn btn-sm btn-cyan"><i class="fa fa-eye"></i> Lihat Dokumen</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Rekomendasi Tujuan Trayek </td>
                                    <td><a href="/img/img_rekomendasi/<?= $at['img_rekomendasi_tujuan'] ?>" target="_blank" type="btn" class="ml-auto btn btn-sm btn-cyan"><i class="fa fa-eye"></i> Lihat Dokumen</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Fotocopy STNKB dan PKB</td>
                                    <td><a href="/img/img_stnkb_pkb/<?= $detail['img_stnkb_pkb'] ?>" target="_blank" type="btn" class="ml-auto btn btn-sm btn-cyan"><i class="fa fa-eye"></i> Lihat Dokumen</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>Fotocopy Buku KIR</td>
                                    <td><a href="/img/img_kir/<?= $detail['img_kir'] ?>" type="btn" target="_blank" class="ml-auto btn btn-sm btn-cyan"><i class="fa fa-eye"></i> Lihat Dokumen</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>Fotocopy Iuran Jasa Raharja</td>
                                    <td><a href="/img/img_jasa_raharja/<?= $detail['img_jasa_raharja'] ?>" target="_blank" type="btn" class="ml-auto btn btn-sm btn-cyan"><i class="fa fa-eye"></i> Lihat Dokumen</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">11</th>
                                    <td>Surat Pernyataan Kesanggupan untuk Pemegang Izin Trayek </td>
                                    <td><a href="/img/img_surat_pernyataan/<?= $detail['img_surat_pernyataan'] ?>" target="_blank" type="btn" class="ml-auto btn btn-sm btn-cyan"><i class="fa fa-eye"></i> Lihat Dokumen</a></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Kirim pesan penolakan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/verifikasi/tolak/<?= $detail['idpermohonan'] ?>" method="POST">
                <input type="hidden" name="kode_booking" value="<?= $detail['kode_booking'] ?>">
                <div class="modal-body mx-3">
                    <div class="md-form">
                        <i class="fas fa-pencil prefix grey-text"></i>
                        <textarea name="msg" type="text" id="form8" class="md-textarea form-control" rows="4"></textarea>
                        <label data-error="wrong" data-success="right" for="form8">Pesan</label>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-danger">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>