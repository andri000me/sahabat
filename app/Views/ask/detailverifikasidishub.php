<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <div class="row mb-5 wow fadeInRight">
        <div class="col-sm-12 mb-3 mb-md-0">
            <div class="">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="text-dark font-weight-bold card-title">Verifikasi Permohonan Izin Penyelenggaraan Angkutan Orang Tidak Dalam Trayek (AOTDT)</h5>
                            </p>
                        </div>
                        <div class="text-right col">
                            <a onclick="return confirm('Apakah anda yakin?')" href="/ask/terimapermohonandishub/<?= $ask['idask'] ?>/<?= $ask['slug'] ?>/<?= $ask['kode_registrasi'] ?>" class="btn btn-sm btn-success"> Terima <i class="fa fa-check"></i></a>
                            <a onclick="return confirm('Apakah anda yakin melakukan penolakan?')" href="/ask/tolakpermohonandishub/<?= $ask['idask'] ?>/<?= $ask['slug'] ?>/<?= $ask['kode_registrasi'] ?>" class="btn btn-sm btn-danger"> Tolak <i class="fa fa-ban"></i></a>
                        </div>
                    </div>

                    <div class="cards px-4 py-3">
                        <div class="mt-3">
                            <table id=" dtMaterialDesignExample" class="table table-bordered" cellspacing="0" width="100%">
                                <tbody>
                                    <tr>
                                        <td class="font-weight-bold" width="300" style="font-size: 15px;">Pemohon</td>
                                        <td class="font-weight-bold">
                                            <a style="font-size: 15px;"><?= $ask['nama_perusahaan'] ?></a><br>
                                            <?= $ask['alamat'] ?><br>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td class="" width="300" style="font-size: 15px;">Tanggal Permohonan</td>
                                        <td class="">
                                            <a style="font-size: 15px;"><?= $ask['created_at'] ?></a><br>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td class="" style="font-size: 15px;">Pelayanan yang dimohon</td>
                                        <td class="" style="font-size: 15px;"><?= $ask['pelayanan_dimohon'] ?></td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td class="" style="font-size: 15px;">Jumlah Kendaraan</td>
                                        <td class=""><?= $ask['jumlah_kendaraan'] ?> Unit Kendaraan</td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td class="" style="font-size: 15px;">Model/Jenis Kendaraan</td>
                                        <td class=""><?= $ask['jenis_kendaraan'] ?> UNIT</td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td class="" style="font-size: 15px;">Kapasitas Angkutan</td>
                                        <td class=""><?= $ask['kapasitas_angkut'] ?> Orang</td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td class="" style="font-size: 15px;">Wilayah Operasi</td>
                                        <td class=""><?= $ask['wilayah_operasi'] ?> Orang</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="md-form">
                            <div class="file-field">
                                <a href="/img/img_surat_persetujuan/<?= $ask['img_surat_persetujuan'] ?>" target="_blank" type="button" class="btn btn-sm btn-success"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>
                                <div class="file-path-wrapper">
                                    <input name="img_surat_persetujuan" class="file-path validate" type="text" placeholder="Scan / Foto Surat Persetujuan Permohonanan Izin Penyelenggaraan AOTDT dari PTSP (Jelas)">
                                </div>
                            </div>
                            <div class="kacili" style="margin-left:280px;">
                                <?= $validation->getError('img_surat_persetujuan') ?>
                            </div>
                        </div>

                        <div class="md-form">
                            <div class="file-field">
                                <a href="/img/img_surat_permohonan/<?= $ask['img_surat_permohonan'] ?>" target="_blank" type="button" class="btn btn-sm btn-success"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>
                                <div class="file-path-wrapper">
                                    <input name="img_surat_permohonan" class="file-path validate" type="text" placeholder="Scan / Foto Surat Permohonanan Izin Penyelenggaraan AOTDT (Jelas)">
                                </div>
                            </div>
                            <div class="kacili" style="margin-left:280px;">
                                <?= $validation->getError('img_surat_permohonan') ?>
                            </div>
                        </div>

                        <div class="md-form">
                            <div class="file-field">
                                <a href="/img/img_bukti_pengesahan/<?= $ask['img_bukti_pengesahan'] ?>" target="_blank" type="button" class="btn btn-sm btn-success"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>
                                <div class="file-path-wrapper">
                                    <input name="img_bukti_pengesahan" class="file-path validate" type="text" placeholder="Scan / Foto Bukti Pengesahan dari Kemenkumham/Koperasi (Jelas)">
                                </div>
                            </div>
                            <div class="kacili" style="margin-left:280px;">
                                <?= $validation->getError('img_bukti_pengesahan') ?>
                            </div>
                        </div>

                        <div class="md-form">
                            <div class="file-field">
                                <a href="/img/img_domisili/<?= $ask['img_domisili'] ?>" target="_blank" type="button" class="btn btn-sm btn-success"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>
                                <div class="file-path-wrapper">
                                    <input name="img_domisili" class="file-path validate" type="text" placeholder="Scan / Foto Surat Keterangan Domisili (Jelas)">
                                </div>
                            </div>
                            <div class="kacili" style="margin-left:280px;">
                                <?= $validation->getError('img_domisili') ?>
                            </div>
                        </div>

                        <div class="md-form">
                            <div class="file-field">
                                <a href="/img/img_pernyataan_kesanggupan/<?= $ask['img_pernyataan_kesanggupan'] ?>" target="_blank" type="button" class="btn btn-sm btn-success"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>
                                <div class="file-path-wrapper">
                                    <input name="img_pernyataan_kesanggupan" class="file-path validate" type="text" placeholder="Scan / Foto Surat Pernyataan Kesanggupan untuk Memenuhi seluruh kewajiban sebagai pemegang izin AOTDT bermaterai (Jelas)">
                                </div>
                            </div>
                            <div class="kacili" style="margin-left:280px;">
                                <?= $validation->getError('img_pernyataan_kesanggupan') ?>
                            </div>
                        </div>

                        <div class="md-form">
                            <div class="file-field">
                                <a href="/img/img_pernyataan_kerjasama/<?= $ask['img_pernyataan_kerjasama'] ?>" target="_blank" type="button" class="btn btn-sm btn-success"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>
                                <div class="file-path-wrapper">
                                    <input name="img_pernyataan_kerjasama" class="file-path validate" type="text" placeholder="Scan / Foto Surat Pernyataan Kesanggupan memiliki dan atau bekerjasama dengan bengkel bermaterai (Jelas)">
                                </div>
                            </div>
                            <div class="kacili" style="margin-left:280px;">
                                <?= $validation->getError('img_pernyataan_kerjasama') ?>
                            </div>
                        </div>

                        <div class="md-form">
                            <div class="file-field">
                                <a href="/img/img_perjanjian/<?= $ask['img_perjanjian'] ?>" target="_blank" type="button" class="btn btn-sm btn-success"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>
                                <div class="file-path-wrapper">
                                    <input name="img_perjanjian" class="file-path validate" type="text" placeholder="Scan / Foto Surat Perjanjian antara pemilik kendaraan/anggota koperasi dengan Koperasi (Jelas)">
                                </div>
                            </div>
                            <div class="kacili" style="margin-left:280px;">
                                <?= $validation->getError('img_perjanjian') ?>
                            </div>
                        </div>

                        <div class="md-form">
                            <div class="file-field">
                                <a href="/img/img_pemda/<?= $ask['img_pemda'] ?>" target="_blank" type="button" class="btn btn-sm btn-success"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>
                                <div class="file-path-wrapper">
                                    <input name="img_pemda" class="file-path validate" type="text" placeholder="Scan / Foto Surat Keterangan dari Pemerintah Daerah Setempat tentang tempat penyimpanan kendaraan (Jelas)">
                                </div>
                            </div>
                            <div class="kacili" style="margin-left:280px;">
                                <?= $validation->getError('img_pemda') ?>
                            </div>
                        </div>

                        <div class="md-form">
                            <div class="file-field">
                                <a href="/img/img_rencana_bisnis/<?= $ask['img_rencana_bisnis'] ?>" target="_blank" type="button" class="btn btn-sm btn-success"><i class="fa fa-eye mr-1"></i> Lihat dokumen</a>
                                <div class="file-path-wrapper">
                                    <input name="img_rencana_bisnis" class="file-path validate" type="text" placeholder="Scan / Foto Rencana bisnis perusahaan angkutan/koperasi (Jelas)">
                                </div>
                            </div>
                            <div class="kacili" style="margin-left:280px;">
                                <?= $validation->getError('img_rencana_bisnis') ?>
                            </div>
                        </div>
                    </div>


                    <div class="row mb-5 wow fadeInRight mt-5">
                        <div class="col-sm-12 mb-3 mb-md-0">
                            <div class="">
                                <h5 class="text-dark font-weight-bold card-title">Data kendaraan</h5>
                                <p class="card-text">Data Kendaraan<br>
                                </p>
                                <div class="cards px-4 py-3">
                                    <div class="table-responsive animated zoomIn">
                                        <table id="dtMaterialDesignExample" class="table table-bordered table-striped" cellspacing="0" width="100%">
                                            <thead class="primary-color-dark white-text">
                                                <tr>
                                                    <td class="th-sm">No
                                                    </td>
                                                    <td class="th-sm">Nomor Kendaraan
                                                    </td>
                                                    <td class="th-sm" style="width: 120px;">Nomor UJI
                                                    </td>
                                                    <td class="th-sm">Kapasitas
                                                    </td>
                                                    <td class="th-sm" style="width:360px;">Action
                                                    </td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1
                                                ?>
                                                <?php foreach ($ranmor as $ran) : ?>
                                                    <tr>
                                                        <td><?= $i++ ?></td>
                                                        <td><?= $ran['nomor_kendaraan'] ?></td>
                                                        <td><?= $ran['nomor_uji'] ?></td>
                                                        <td><?= $ran['kapasitas'] ?></td>
                                                        <td>
                                                            <a href="/img/img_ranmor/<?= $ran['img_ranmor'] ?>" target="_blank" class="btn btn-sm btn-success">Lihat Dokumen</a>
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
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>