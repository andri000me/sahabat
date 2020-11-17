<?php

namespace App\Controllers;

use App\Models\AsalTujuanModel;
use App\Models\KoperasiModel;
use App\Models\LoginModel;
use App\Models\MsgPenolakanModel;
use App\Models\RekomendasiModel;
use App\Models\TrayekModel;
use App\Models\VerifikasiModel;

class Koperasi extends BaseController
{
    protected $rekomendasiModel;
    protected $verifikasiModel;
    protected $trayekModel;
    protected $msgPenolakanModel;
    protected $loginModel;
    protected $user;
    protected $asalTujuanModel;
    protected $koperasiModel;

    public function __construct()
    {
        $this->rekomendasiModel = new RekomendasiModel();
        $this->verifikasiModel = new VerifikasiModel();
        $this->trayekModel = new TrayekModel();
        $this->msgPenolakanModel = new MsgPenolakanModel();
        $this->loginModel = new LoginModel();
        $this->asalTujuanModel = new AsalTujuanModel();
        $this->koperasiModel = new KoperasiModel();
        $this->session = session();
        $this->user = $this->loginModel->where('email', $this->session->get('email'))->first();
    }

    public function index()
    {
        $id = $this->user['id'];
        $data = [
            'title' => 'Koperasi',
            'session' => $this->user,
            'permohonan' => $this->koperasiModel->getPermohonanKoperasi($id),
        ];
        return view('koperasi/index', $data);
    }

    public function buat_permohonan()
    {
        session();
        $data = [
            'title' => 'Buat Permohonan',
            'trayek' => $this->trayekModel->getTrayek(),
            'session' => $this->user,
            'wilayah' => $this->asalTujuanModel->getWilayah(),
            'validation' => \Config\Services::validation(),
        ];
        return view('koperasi/buat_permohonan', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'img_surat_permohonan_koperasi' => [
                'rules' => 'uploaded[img_surat_permohonan_koperasi]|max_size[img_surat_permohonan_koperasi,1024]|is_image[img_surat_permohonan_koperasi]|mime_in[img_surat_permohonan_koperasi,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                    'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                    'is_image' => 'Ini bukan gambar',
                    'mime_in' => 'Ini bukan gambar',
                ],
            ],
            'img_ktp_pemilik' => [
                'rules' => 'uploaded[img_ktp_pemilik]|max_size[img_ktp_pemilik,1024]|is_image[img_ktp_pemilik]|mime_in[img_ktp_pemilik,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                    'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                    'is_image' => 'Ini bukan gambar',
                    'mime_in' => 'Ini bukan gambar',
                ],
            ],
            'img_stnkb' => [
                'rules' => 'uploaded[img_stnkb]|max_size[img_stnkb,1024]|is_image[img_stnkb]|mime_in[img_stnkb,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                    'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                    'is_image' => 'Ini bukan gambar',
                    'mime_in' => 'Ini bukan gambar',
                ],
            ],
            'img_jasa_raharja' => [
                'rules' => 'uploaded[img_jasa_raharja]|max_size[img_jasa_raharja,1024]|is_image[img_jasa_raharja]|mime_in[img_jasa_raharja,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                    'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                    'is_image' => 'Ini bukan gambar',
                    'mime_in' => 'Ini bukan gambar',
                ],
            ],
            'img_kir' => [
                'rules' => 'uploaded[img_kir]|max_size[img_kir,1024]|is_image[img_kir]|mime_in[img_kir,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                    'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                    'is_image' => 'Ini bukan gambar',
                    'mime_in' => 'Ini bukan gambar',
                ],
            ],
            'foto_depan' => [
                'rules' => 'uploaded[foto_depan]|max_size[foto_depan,1024]|is_image[foto_depan]|mime_in[foto_depan,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                    'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                    'is_image' => 'Ini bukan gambar',
                    'mime_in' => 'Ini bukan gambar',
                ],
            ],
            'foto_belakang' => [
                'rules' => 'uploaded[foto_belakang]|max_size[foto_belakang,1024]|is_image[foto_belakang]|mime_in[foto_belakang,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                    'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                    'is_image' => 'Ini bukan gambar',
                    'mime_in' => 'Ini bukan gambar',
                ],
            ],
            'foto_kanan' => [
                'rules' => 'uploaded[foto_kanan]|max_size[foto_kanan,1024]|is_image[foto_kanan]|mime_in[foto_kanan,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                    'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                    'is_image' => 'Ini bukan gambar',
                    'mime_in' => 'Ini bukan gambar',
                ],
            ],
            'foto_kiri' => [
                'rules' => 'uploaded[foto_kiri]|max_size[foto_kiri,1024]|is_image[foto_kiri]|mime_in[foto_kiri,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                    'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                    'is_image' => 'Ini bukan gambar',
                    'mime_in' => 'Ini bukan gambar',
                ],
            ],
            'trayek_dilayani' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Trayek yang dilayani belum dipilih',
                ],
            ],
        ])) {
            return redirect()->to('/koperasi/buat_permohonan')->withInput();
        }

        //abil gambar
        $img_surat_permohonan_koperasi = $this->request->getFile('img_surat_permohonan_koperasi');

        if ($img_surat_permohonan_koperasi->getError() == 4) {
            $nama_img_surat_permohonan_koperasi = "default.png";
        } else {
            $nama_img_surat_permohonan_koperasi = $img_surat_permohonan_koperasi->getRandomName();
            $img_surat_permohonan_koperasi->move('img/img_surat_permohonan_koperasi', $nama_img_surat_permohonan_koperasi);
        }

        $img_ktp_pemilik = $this->request->getFile('img_ktp_pemilik');

        if ($img_ktp_pemilik->getError() == 4) {
            $nama_img_ktp_pemilik = "default.png";
        } else {
            $nama_img_ktp_pemilik = $img_ktp_pemilik->getRandomName();
            $img_ktp_pemilik->move('img/img_ktp_pemilik', $nama_img_ktp_pemilik);
        }

        $img_stnkb = $this->request->getFile('img_stnkb');

        if ($img_stnkb->getError() == 4) {
            $nama_img_stnkb = "default.png";
        } else {
            $nama_img_stnkb = $img_stnkb->getRandomName();
            $img_stnkb->move('img/img_stnkb_pkb', $nama_img_stnkb);
        }

        $img_jasa_raharja = $this->request->getFile('img_jasa_raharja');

        if ($img_jasa_raharja->getError() == 4) {
            $nama_img_jasa_raharja = "default.png";
        } else {
            $nama_img_jasa_raharja = $img_jasa_raharja->getRandomName();
            $img_jasa_raharja->move('img/img_jasa_raharja', $nama_img_jasa_raharja);
        }

        $img_kir = $this->request->getFile('img_kir');

        if ($img_kir->getError() == 4) {
            $nama_img_kir = "default.png";
        } else {
            $nama_img_kir = $img_kir->getRandomName();
            $img_kir->move('img/img_kir', $nama_img_kir);
        }

        $foto_depan = $this->request->getFile('foto_depan');

        if ($foto_depan->getError() == 4) {
            $nama_foto_depan = "default.png";
        } else {
            $nama_foto_depan = $foto_depan->getRandomName();
            $foto_depan->move('img/foto_depan', $nama_foto_depan);
        }

        $foto_belakang = $this->request->getFile('foto_belakang');

        if ($foto_belakang->getError() == 4) {
            $nama_foto_belakang = "default.png";
        } else {
            $nama_foto_belakang = $foto_belakang->getRandomName();
            $foto_belakang->move('img/foto_belakang', $nama_foto_belakang);
        }

        $foto_kanan = $this->request->getFile('foto_kanan');

        if ($foto_kanan->getError() == 4) {
            $nama_foto_kanan = "default.png";
        } else {
            $nama_foto_kanan = $foto_kanan->getRandomName();
            $foto_kanan->move('img/foto_kanan', $nama_foto_kanan);
        }

        $foto_kiri = $this->request->getFile('foto_kiri');

        if ($foto_kiri->getError() == 4) {
            $nama_foto_kiri = "default.png";
        } else {
            $nama_foto_kiri = $foto_kiri->getRandomName();
            $foto_kiri->move('img/foto_kiri', $nama_foto_kiri);
        }

        // $slug = url_title($this->request->getVar('nama_pemohon'), '-', true);

        if ($this->request->getVar('asal')) {
            $status_asal = 0;
            $asal = $this->request->getVar('asal');
        } else {
            $status_asal = 3;
            $asal = 0;
        }

        if ($this->request->getVar('tujuan')) {
            $status_tujuan = 0;
            $tujuan = $this->request->getVar('tujuan');
        } else {
            $status_tujuan = 3;
            $tujuan = 0;
        }

        $slug = url_title($this->request->getVar('nama_pemilik'), '-', true);

        $this->koperasiModel->save([
            'slug' => $slug,
            'koperasi_id' => $this->user['id'],
            'status_asal' => $status_asal,
            'status_tujuan' => $status_tujuan,
            'trayek_dilayani' => $this->request->getVar('trayek_dilayani'),
            'asal' => $asal,
            'tujuan' => $tujuan,
            'nomor_kendaraan' => $this->request->getVar('nomor_kendaraan'),
            'nama_pemilik' => $this->request->getVar('nama_pemilik'),
            'alamat_pemilik' => $this->request->getVar('alamat_pemilik'),
            'jenis_kendaraan' => $this->request->getVar('jenis_kendaraan'),
            'nomor_kir' => $this->request->getVar('nomor_kir'),
            'merk' => $this->request->getVar('merk'),
            'tahun_pembuatan' => $this->request->getVar('tahun_pembuatan'),
            'nomor_chasis' => $this->request->getVar('nomor_chasis'),
            'nomor_mesin' => $this->request->getVar('nomor_mesin'),
            'nomor_regis_pkb' => $this->request->getVar('nomor_regis_pkb'),
            'img_surat_permohonan_koperasi' => $nama_img_surat_permohonan_koperasi,
            'img_ktp_pemilik' => $nama_img_ktp_pemilik,
            'img_stnkb' => $nama_img_stnkb,
            'img_jasa_raharja' => $nama_img_jasa_raharja,
            'img_kir' => $nama_img_kir,
            'foto_depan' => $nama_foto_depan,
            'foto_belakang' => $nama_foto_belakang,
            'foto_kanan' => $nama_foto_kanan,
            'foto_kiri' => $nama_foto_kiri,
        ]);

        return redirect()->to('/koperasi/index/' . $this->request->getVar('kdb') . '');
        // dd($this->request->getVar());
    }

    public function saveEdit()
    {
        $slug = url_title($this->request->getVar('nama_pemilik'), '-', true);
        $id = $this->request->getVar('id');

        $this->koperasiModel->save([
            'id' => $id,
            'slug' => $slug,
            'nomor_kendaraan' => $this->request->getVar('nomor_kendaraan'),
            'nama_pemilik' => $this->request->getVar('nama_pemilik'),
            'alamat_pemilik' => $this->request->getVar('alamat_pemilik'),
            'jenis_kendaraan' => $this->request->getVar('jenis_kendaraan'),
            'nomor_kir' => $this->request->getVar('nomor_kir'),
            'merk' => $this->request->getVar('merk'),
            'tahun_pembuatan' => $this->request->getVar('tahun_pembuatan'),
            'nomor_chasis' => $this->request->getVar('nomor_chasis'),
            'nomor_mesin' => $this->request->getVar('nomor_mesin'),
            'nomor_regis_pkb' => $this->request->getVar('nomor_regis_pkb')
        ]);

        if ($this->user['wilayah_id'] == $this->request->getVar('asal')) {
            if ($this->user['wilayah_id'] == 1) {
                $link = "Kota";
            } else if ($this->user['wilayah_id'] == 2) {
                $link = "Kab";
            } else if ($this->user['wilayah_id'] == 3) {
                $link = "BonrBol";
            } else if ($this->user['wilayah_id'] == 4) {
                $link = "Gorut";
            } else if ($this->user['wilayah_id'] == 5) {
                $link = "Boalemo";
            } else if ($this->user['wilayah_id'] == 6) {
                $link = "Pohuwato";
            }
        } else if ($this->user['wilayah_id'] == $this->request->getVar('tujuan')) {
            if ($this->user['wilayah_id'] == 1) {
                $link = "Kota";
            } else if ($this->user['wilayah_id'] == 2) {
                $link = "Kab";
            } else if ($this->user['wilayah_id'] == 3) {
                $link = "BonrBol";
            } else if ($this->user['wilayah_id'] == 4) {
                $link = "Gorut";
            } else if ($this->user['wilayah_id'] == 5) {
                $link = "Boalemo";
            } else if ($this->user['wilayah_id'] == 6) {
                $link = "Pohuwato";
            }
        }
        return redirect()->to('/koperasi/verifikasi' . $link . '/' . $slug . '/' . $id . '');
        // dd($this->request->getVar());
    }

    public function verifikasiPermohonanKota()
    {
        if ($this->user['id'] == 9) {
            session();
            $data = [
                'title' => 'Koperasi',
                'session' => $this->user,
                'permohonan' => $this->koperasiModel->getPermohonanKota(),
            ];
            return view('koperasi/indexKota', $data);
        } else {
            return view('blank');
        }
    }

    public function verifikasiKota($slug, $id)
    {
        if ($this->user['id'] == 9) {
            session();

            $check = $this->koperasiModel->getPermohonanKota($slug, $id);

            if ($check) {
                if ($check['asal'] == 1) {
                    $get = $this->koperasiModel->getPermohonanKota($slug, $id);
                } else if ($check['tujuan'] == 1) {
                    $get = $this->koperasiModel->getPermohonanKota($slug, $id);
                } else {
                    return view('blank');
                }
            } else {
                return view('blank');
            }

            $data = [
                'title' => 'Koperasi',
                'session' => $this->user,
                'permohonan' => $get,
                'koperasi' => $this->koperasiModel->getDataKoperasi($id),
                'trayek' => $this->trayekModel->getTrayek(),
                'wilayah' => $this->asalTujuanModel->getWilayah(),
            ];

            if ($check['asal'] == 1 && $check['status_asal'] == 0) {
                return view('koperasi/verifikasi', $data);
            } else if ($check['tujuan'] == 1 && $check['status_tujuan'] == 0) {
                return view('koperasi/verifikasi', $data);
            } else {
                return view('blank');
            }
        } else {
            return view('blank');
        }
    }

    public function terimaKota($slug, $id)
    {
        $check = $this->koperasiModel->getPermohonanKota($slug, $id);
        if ($check) {
            if ($check['asal'] == 1) {
                $this->koperasiModel->save([
                    'id' => $id,
                    'status_asal' => 2,
                    'tgl_approve' => date('Y-m-d'),
                ]);
                return redirect()->to('/koperasi/verifikasiPermohonanKota');
            } else if ($check['tujuan'] == 1) {
                $this->koperasiModel->save([
                    'id' => $id,
                    'status_tujuan' => 2,
                    'tgl_approve' => date('Y-m-d'),
                ]);
                return redirect()->to('/koperasi/verifikasiPermohonanKota');
            }
        } else {
        }
    }

    public function tolakKota($slug, $id)
    {
        $check = $this->koperasiModel->getPermohonanKota($slug, $id);
        if ($check) {
            if ($check['asal'] == 1) {
                $this->koperasiModel->save([
                    'id' => $id,
                    'status_asal' => 1,
                ]);
                return redirect()->to('/koperasi/verifikasiPermohonanKota');
            } else if ($check['tujuan'] == 1) {
                $this->koperasiModel->save([
                    'id' => $id,
                    'status_tujuan' => 1,
                ]);
                return redirect()->to('/koperasi/verifikasiPermohonanKota');
            }
        } else {
        }
    }

    public function verifikasiPermohonanKab()
    {
        if ($this->user['id'] == 10) {
            session();
            $data = [
                'title' => 'Koperasi',
                'session' => $this->user,
                'permohonan' => $this->koperasiModel->getPermohonanKab(),
            ];
            return view('koperasi/indexKota', $data);
        } else {
            return view('blank');
        }
    }

    public function verifikasiKab($slug, $id)
    {
        if ($this->user['id'] == 10) {
            session();

            $check = $this->koperasiModel->getPermohonanKab($slug, $id);
            if ($check) {
                if ($check['asal'] == 2) {
                    $get = $this->koperasiModel->getPermohonanKab($slug, $id);
                } else if ($check['tujuan'] == 2) {
                    $get = $this->koperasiModel->getPermohonanKab($slug, $id);
                } else {
                    return view('blank');
                }
            } else {
                return view('blank');
            }
            $data = [
                'title' => 'Koperasi',
                'session' => $this->user,
                'permohonan' => $get,
                'koperasi' => $this->koperasiModel->getDataKoperasi($id),
                'trayek' => $this->trayekModel->getTrayek(),
                'wilayah' => $this->asalTujuanModel->getWilayah(),
            ];
            if ($check['asal'] == 2 && $check['status_asal'] == 0) {
                return view('koperasi/verifikasi', $data);
            } else if ($check['tujuan'] == 2 && $check['status_tujuan'] == 0) {
                return view('koperasi/verifikasi', $data);
            } else {
                return view('blank');
            }
        } else {
            return view('blank');
        }
    }

    public function terimaKab($slug, $id)
    {
        $check = $this->koperasiModel->getPermohonanKab($slug, $id);
        if ($check) {
            if ($check['asal'] == 2) {
                $this->koperasiModel->save([
                    'id' => $id,
                    'status_asal' => 2,
                    'tgl_approve' => date('Y-m-d'),
                ]);
                return redirect()->to('/koperasi/verifikasiPermohonanKab');
            } else if ($check['tujuan'] == 2) {
                $this->koperasiModel->save([
                    'id' => $id,
                    'status_tujuan' => 2,
                    'tgl_approve' => date('Y-m-d'),
                ]);
                return redirect()->to('/koperasi/verifikasiPermohonanKab');
            }
        } else {
        }
    }

    public function tolakKab($slug, $id)
    {
        $check = $this->koperasiModel->getPermohonanKab($slug, $id);
        if ($check) {
            if ($check['asal'] == 2) {
                $this->koperasiModel->save([
                    'id' => $id,
                    'status_asal' => 1,
                ]);
                return redirect()->to('/koperasi/verifikasiPermohonanKab');
            } else if ($check['tujuan'] == 2) {
                $this->koperasiModel->save([
                    'id' => $id,
                    'status_tujuan' => 1,
                ]);
                return redirect()->to('/koperasi/verifikasiPermohonanKab');
            }
        } else {
        }
    }

    public function verifikasiPermohonanBoneBol()
    {
        if ($this->user['id'] == 11) {
            session();
            $data = [
                'title' => 'Koperasi',
                'session' => $this->user,
                'permohonan' => $this->koperasiModel->getPermohonanBoneBol(),
            ];
            return view('koperasi/indexKota', $data);
        } else {
            return view('blank');
        }
    }

    public function verifikasiBoneBol($slug, $id)
    {
        if ($this->user['id'] == 11) {
            session();

            $check = $this->koperasiModel->getPermohonanBoneBol($slug, $id);
            if ($check) {
                if ($check['asal'] == 3) {
                    $get = $this->koperasiModel->getPermohonanBoneBol($slug, $id);
                } else if ($check['tujuan'] == 3) {
                    $get = $this->koperasiModel->getPermohonanBoneBol($slug, $id);
                } else {
                    return view('blank');
                }
            } else {
                return view('blank');
            }

            $data = [
                'title' => 'Koperasi',
                'session' => $this->user,
                'permohonan' => $get,
                'koperasi' => $this->koperasiModel->getDataKoperasi($id),
                'trayek' => $this->trayekModel->getTrayek(),
                'wilayah' => $this->asalTujuanModel->getWilayah(),
            ];
            if ($check['asal'] == 3 && $check['status_asal'] == 0) {
                return view('koperasi/verifikasi', $data);
            } else if ($check['tujuan'] == 3 && $check['status_tujuan'] == 0) {
                return view('koperasi/verifikasi', $data);
            } else {
                return view('blank');
            }
        } else {
            return view('blank');
        }
    }

    public function terimaBoneBol($slug, $id)
    {
        $check = $this->koperasiModel->getPermohonanBoneBol($slug, $id);
        if ($check) {
            if ($check['asal'] == 3) {
                $this->koperasiModel->save([
                    'id' => $id,
                    'status_asal' => 2,
                    'tgl_approve' => date('Y-m-d'),
                ]);
                return redirect()->to('/koperasi/verifikasiPermohonanBoneBol');
            } else if ($check['tujuan'] == 3) {
                $this->koperasiModel->save([
                    'id' => $id,
                    'status_tujuan' => 2,
                    'tgl_approve' => date('Y-m-d'),
                ]);
                return redirect()->to('/koperasi/verifikasiPermohonanBoneBol');
            }
        } else {
        }
    }

    public function tolakBoneBol($slug, $id)
    {
        $check = $this->koperasiModel->getPermohonanBoneBol($slug, $id);
        if ($check) {
            if ($check['asal'] == 3) {
                $this->koperasiModel->save([
                    'id' => $id,
                    'status_asal' => 1,
                ]);
                return redirect()->to('/koperasi/verifikasiPermohonanBoneBol');
            } else if ($check['tujuan'] == 3) {
                $this->koperasiModel->save([
                    'id' => $id,
                    'status_tujuan' => 1,
                ]);
                return redirect()->to('/koperasi/verifikasiPermohonanBoneBol');
            }
        } else {
        }
    }

    public function verifikasiPermohonanGorut()
    {
        if ($this->user['id'] == 12) {
            session();
            $data = [
                'title' => 'Koperasi',
                'session' => $this->user,
                'permohonan' => $this->koperasiModel->getPermohonanGorut(),
            ];
            return view('koperasi/indexKota', $data);
        } else {
            return view('blank');
        }
    }

    public function verifikasiGorut($slug, $id)
    {
        if ($this->user['id'] == 12) {
            session();

            $check = $this->koperasiModel->getPermohonanGorut($slug, $id);
            if ($check) {
                if ($check['asal'] == 4) {
                    $get = $this->koperasiModel->getPermohonanGorut($slug, $id);
                } else if ($check['tujuan'] == 4) {
                    $get = $this->koperasiModel->getPermohonanGorut($slug, $id);
                } else {
                    return view('blank');
                }
            } else {
                return view('blank');
            }

            $data = [
                'title' => 'Koperasi',
                'session' => $this->user,
                'permohonan' => $get,
                'koperasi' => $this->koperasiModel->getDataKoperasi($id),
                'trayek' => $this->trayekModel->getTrayek(),
                'wilayah' => $this->asalTujuanModel->getWilayah(),
            ];
            if ($check['asal'] == 4 && $check['status_asal'] == 0) {
                return view('koperasi/verifikasi', $data);
            } else if ($check['tujuan'] == 4 && $check['status_tujuan'] == 0) {
                return view('koperasi/verifikasi', $data);
            } else {
                return view('blank');
            }
        } else {
            return view('blank');
        }
    }

    public function terimaGorut($slug, $id)
    {
        $check = $this->koperasiModel->getPermohonanGorut($slug, $id);
        if ($check) {
            if ($check['asal'] == 4) {
                $this->koperasiModel->save([
                    'id' => $id,
                    'status_asal' => 2,
                    'tgl_approve' => date('Y-m-d'),
                ]);
                return redirect()->to('/koperasi/verifikasiPermohonanGorut');
            } else if ($check['tujuan'] == 4) {
                $this->koperasiModel->save([
                    'id' => $id,
                    'status_tujuan' => 2,
                    'tgl_approve' => date('Y-m-d'),
                ]);
                return redirect()->to('/koperasi/verifikasiPermohonanGorut');
            }
        } else {
        }
    }

    public function tolakGorut($slug, $id)
    {
        $check = $this->koperasiModel->getPermohonanGorut($slug, $id);
        if ($check) {
            if ($check['asal'] == 4) {
                $this->koperasiModel->save([
                    'id' => $id,
                    'status_asal' => 1,
                ]);
                return redirect()->to('/koperasi/verifikasiPermohonanGorut');
            } else if ($check['tujuan'] == 4) {
                $this->koperasiModel->save([
                    'id' => $id,
                    'status_tujuan' => 1,
                ]);
                return redirect()->to('/koperasi/verifikasiPermohonanGorut');
            }
        } else {
        }
    }

    public function verifikasiPermohonanBoalemo()
    {
        if ($this->user['id'] == 13) {
            session();
            $data = [
                'title' => 'Koperasi',
                'session' => $this->user,
                'permohonan' => $this->koperasiModel->getPermohonanBoalemo(),
            ];
            return view('koperasi/indexKota', $data);
        } else {
            return view('blank');
        }
    }

    public function verifikasiBoalemo($slug, $id)
    {
        if ($this->user['id'] == 13) {
            session();

            $check = $this->koperasiModel->getPermohonanBoalemo($slug, $id);
            if ($check) {
                if ($check['asal'] == 5) {
                    $get = $this->koperasiModel->getPermohonanBoalemo($slug, $id);
                } else if ($check['tujuan'] == 5) {
                    $get = $this->koperasiModel->getPermohonanBoalemo($slug, $id);
                } else {
                    return view('blank');
                }
            } else {
                return view('blank');
            }

            $data = [
                'title' => 'Koperasi',
                'session' => $this->user,
                'permohonan' => $get,
                'koperasi' => $this->koperasiModel->getDataKoperasi($id),
                'trayek' => $this->trayekModel->getTrayek(),
                'wilayah' => $this->asalTujuanModel->getWilayah(),
            ];
            if ($check['asal'] == 5 && $check['status_asal'] == 0) {
                return view('koperasi/verifikasi', $data);
            } else if ($check['tujuan'] == 5 && $check['status_tujuan'] == 0) {
                return view('koperasi/verifikasi', $data);
            } else {
                return view('blank');
            }
        } else {
            return view('blank');
        }
    }

    public function terimaBoalemo($slug, $id)
    {
        $check = $this->koperasiModel->getPermohonanBoalemo($slug, $id);
        if ($check) {
            if ($check['asal'] == 5) {
                $this->koperasiModel->save([
                    'id' => $id,
                    'status_asal' => 2,
                    'tgl_approve' => date('Y-m-d'),
                ]);
                return redirect()->to('/koperasi/verifikasiPermohonanBoalemo');
            } else if ($check['tujuan'] == 5) {
                $this->koperasiModel->save([
                    'id' => $id,
                    'status_tujuan' => 2,
                    'tgl_approve' => date('Y-m-d'),
                ]);
                return redirect()->to('/koperasi/verifikasiPermohonanBoalemo');
            }
        } else {
        }
    }

    public function tolakBoalemo($slug, $id)
    {
        $check = $this->koperasiModel->getPermohonanBoalemo($slug, $id);
        if ($check) {
            if ($check['asal'] == 5) {
                $this->koperasiModel->save([
                    'id' => $id,
                    'status_asal' => 1,
                ]);
                return redirect()->to('/koperasi/verifikasiPermohonanBoalemo');
            } else if ($check['tujuan'] == 5) {
                $this->koperasiModel->save([
                    'id' => $id,
                    'status_tujuan' => 1,
                ]);
                return redirect()->to('/koperasi/verifikasiPermohonanBoalemo');
            }
        } else {
        }
    }

    public function verifikasiPermohonanPohuwato()
    {
        if ($this->user['id'] == 14) {
            session();
            $data = [
                'title' => 'Koperasi',
                'session' => $this->user,
                'permohonan' => $this->koperasiModel->getPermohonanPohuwato(),
            ];
            return view('koperasi/indexKota', $data);
        } else {
            return view('blank');
        }
    }

    public function verifikasiPohuwato($slug, $id)
    {
        if ($this->user['id'] == 14) {
            session();

            $check = $this->koperasiModel->getPermohonanPohuwato($slug, $id);
            if ($check) {
                if ($check['asal'] == 6) {
                    $get = $this->koperasiModel->getPermohonanPohuwato($slug, $id);
                } else if ($check['tujuan'] == 6) {
                    $get = $this->koperasiModel->getPermohonanPohuwato($slug, $id);
                } else {
                    return view('blank');
                }
            } else {
                return view('blank');
            }

            $data = [
                'title' => 'Koperasi',
                'session' => $this->user,
                'permohonan' => $get,
                'koperasi' => $this->koperasiModel->getDataKoperasi($id),
                'trayek' => $this->trayekModel->getTrayek(),
                'wilayah' => $this->asalTujuanModel->getWilayah(),
            ];
            if ($check['asal'] == 6 && $check['status_asal'] == 0) {
                return view('koperasi/verifikasi', $data);
            } else if ($check['tujuan'] == 6 && $check['status_tujuan'] == 0) {
                return view('koperasi/verifikasi', $data);
            } else {
                return view('blank');
            }
        } else {
            return view('blank');
        }
    }


    public function terimaPohuwato($slug, $id)
    {
        $check = $this->koperasiModel->getPermohonanPohuwato($slug, $id);
        if ($check) {
            if ($check['asal'] == 6) {
                $this->koperasiModel->save([
                    'id' => $id,
                    'status_asal' => 2,
                    'tgl_approve' => date('Y-m-d'),
                ]);
                return redirect()->to('/koperasi/verifikasiPermohonanPohuwato');
            } else if ($check['tujuan'] == 6) {
                $this->koperasiModel->save([
                    'id' => $id,
                    'status_tujuan' => 2,
                    'tgl_approve' => date('Y-m-d'),
                ]);
                return redirect()->to('/koperasi/verifikasiPermohonanPohuwato');
            }
        } else {
        }
    }

    public function tolakPohuwato($slug, $id)
    {
        $check = $this->koperasiModel->getPermohonanPohuwato($slug, $id);
        if ($check) {
            if ($check['asal'] == 6) {
                $this->koperasiModel->save([
                    'id' => $id,
                    'status_asal' => 1,
                ]);
                return redirect()->to('/koperasi/verifikasiPermohonanPohuwato');
            } else if ($check['tujuan'] == 6) {
                $this->koperasiModel->save([
                    'id' => $id,
                    'status_tujuan' => 1,
                ]);
                return redirect()->to('/koperasi/verifikasiPermohonanPohuwato');
            }
        } else {
        }
    }

    public function cetakKota($slug, $id)
    {
        session();
        $permohonan = $this->koperasiModel->getPermohonanKota($slug, $id);
        $kdt = $permohonan['trayek_dilayani'];
        $count = $this->koperasiModel->getPermohonanKota();

        $data = [
            'title' => 'Koperasi',
            'session' => $this->user,
            'permohonan' => $permohonan,
            'count' => $count,
            'koperasi' => $this->koperasiModel->getDataKoperasi($id),
            'trayek' => $this->trayekModel->getTrayek($kdt),
            'wilayah' => $this->asalTujuanModel->getWilayah(),
        ];
        return view('cetak/cetakKota', $data);
    }
    public function cetakKab($slug, $id)
    {
        session();
        $permohonan = $this->koperasiModel->getPermohonanKab($slug, $id);
        $kdt = $permohonan['trayek_dilayani'];
        $count = $this->koperasiModel->getPermohonanKab();

        $data = [
            'title' => 'Koperasi',
            'session' => $this->user,
            'permohonan' => $permohonan,
            'count' => $count,
            'koperasi' => $this->koperasiModel->getDataKoperasi($id),
            'trayek' => $this->trayekModel->getTrayek($kdt),
            'wilayah' => $this->asalTujuanModel->getWilayah(),
        ];
        return view('cetak/cetakKab', $data);
    }
    public function cetakBoneBol($slug, $id)
    {
        session();
        $permohonan = $this->koperasiModel->getPermohonanBoneBol($slug, $id);
        $kdt = $permohonan['trayek_dilayani'];
        $count = $this->koperasiModel->getPermohonanBoneBol();

        $data = [
            'title' => 'Koperasi',
            'session' => $this->user,
            'permohonan' => $permohonan,
            'count' => $count,
            'koperasi' => $this->koperasiModel->getDataKoperasi($id),
            'trayek' => $this->trayekModel->getTrayek($kdt),
            'wilayah' => $this->asalTujuanModel->getWilayah(),
        ];
        return view('cetak/cetakBoneBol', $data);
    }
    public function cetakGorut($slug, $id)
    {
        session();
        $permohonan = $this->koperasiModel->getPermohonanGorut($slug, $id);
        $kdt = $permohonan['trayek_dilayani'];
        $count = $this->koperasiModel->getPermohonanGorut();

        $data = [
            'title' => 'Koperasi',
            'session' => $this->user,
            'permohonan' => $permohonan,
            'count' => $count,
            'koperasi' => $this->koperasiModel->getDataKoperasi($id),
            'trayek' => $this->trayekModel->getTrayek($kdt),
            'wilayah' => $this->asalTujuanModel->getWilayah(),
        ];
        return view('cetak/cetakGorut', $data);
    }
    public function cetakBoalemo($slug, $id)
    {
        session();
        $permohonan = $this->koperasiModel->getPermohonanBoalemo($slug, $id);
        $kdt = $permohonan['trayek_dilayani'];
        $count = $this->koperasiModel->getPermohonanBoalemo();

        $data = [
            'title' => 'Koperasi',
            'session' => $this->user,
            'permohonan' => $permohonan,
            'count' => $count,
            'koperasi' => $this->koperasiModel->getDataKoperasi($id),
            'trayek' => $this->trayekModel->getTrayek($kdt),
            'wilayah' => $this->asalTujuanModel->getWilayah(),
        ];
        return view('cetak/cetakBoalemo', $data);
    }
    public function cetakPohuwato($slug, $id)
    {
        session();
        $permohonan = $this->koperasiModel->getPermohonanPohuwato($slug, $id);
        $kdt = $permohonan['trayek_dilayani'];
        $count = $this->koperasiModel->getPermohonanPohuwato();

        $data = [
            'title' => 'Koperasi',
            'session' => $this->user,
            'permohonan' => $permohonan,
            'count' => $count,
            'koperasi' => $this->koperasiModel->getDataKoperasi($id),
            'trayek' => $this->trayekModel->getTrayek($kdt),
            'wilayah' => $this->asalTujuanModel->getWilayah(),
        ];
        return view('cetak/cetakPohuwato', $data);
    }


    public function cetakKotaTolak($slug, $id)
    {
        session();
        $permohonan = $this->koperasiModel->getPermohonanPohuwato($slug, $id);
        $kdt = $permohonan['trayek_dilayani'];
        $count = $this->koperasiModel->getPermohonanPohuwato();

        $data = [
            'title' => 'Koperasi',
            'session' => $this->user,
            'permohonan' => $permohonan,
            'count' => $count,
            'koperasi' => $this->koperasiModel->getDataKoperasi($id),
            'trayek' => $this->trayekModel->getTrayek($kdt),
            'wilayah' => $this->asalTujuanModel->getWilayah(),
        ];
        return view('cetak/cetakKotaTolak', $data);
    }
    public function cetakKabTolak($slug, $id)
    {
        session();
        $permohonan = $this->koperasiModel->getPermohonanPohuwato($slug, $id);
        $kdt = $permohonan['trayek_dilayani'];
        $count = $this->koperasiModel->getPermohonanPohuwato();

        $data = [
            'title' => 'Koperasi',
            'session' => $this->user,
            'permohonan' => $permohonan,
            'count' => $count,
            'koperasi' => $this->koperasiModel->getDataKoperasi($id),
            'trayek' => $this->trayekModel->getTrayek($kdt),
            'wilayah' => $this->asalTujuanModel->getWilayah(),
        ];
        return view('cetak/cetakKabTolak', $data);
    }
    public function cetakBoneBolTolak($slug, $id)
    {
        session();
        $permohonan = $this->koperasiModel->getPermohonanPohuwato($slug, $id);
        $kdt = $permohonan['trayek_dilayani'];
        $count = $this->koperasiModel->getPermohonanPohuwato();

        $data = [
            'title' => 'Koperasi',
            'session' => $this->user,
            'permohonan' => $permohonan,
            'count' => $count,
            'koperasi' => $this->koperasiModel->getDataKoperasi($id),
            'trayek' => $this->trayekModel->getTrayek($kdt),
            'wilayah' => $this->asalTujuanModel->getWilayah(),
        ];
        return view('cetak/cetakBoneBolTolak', $data);
    }
    public function cetakGorutTolak($slug, $id)
    {
        session();
        $permohonan = $this->koperasiModel->getPermohonanPohuwato($slug, $id);
        $kdt = $permohonan['trayek_dilayani'];
        $count = $this->koperasiModel->getPermohonanPohuwato();

        $data = [
            'title' => 'Koperasi',
            'session' => $this->user,
            'permohonan' => $permohonan,
            'count' => $count,
            'koperasi' => $this->koperasiModel->getDataKoperasi($id),
            'trayek' => $this->trayekModel->getTrayek($kdt),
            'wilayah' => $this->asalTujuanModel->getWilayah(),
        ];
        return view('cetak/cetakGorutTolak', $data);
    }
    public function cetakBoalemoTolak($slug, $id)
    {
        session();
        $permohonan = $this->koperasiModel->getPermohonanPohuwato($slug, $id);
        $kdt = $permohonan['trayek_dilayani'];
        $count = $this->koperasiModel->getPermohonanPohuwato();

        $data = [
            'title' => 'Koperasi',
            'session' => $this->user,
            'permohonan' => $permohonan,
            'count' => $count,
            'koperasi' => $this->koperasiModel->getDataKoperasi($id),
            'trayek' => $this->trayekModel->getTrayek($kdt),
            'wilayah' => $this->asalTujuanModel->getWilayah(),
        ];
        return view('cetak/cetakBoalemoTolak', $data);
    }
    public function cetakPohuwatoTolak($slug, $id)
    {
        session();
        $permohonan = $this->koperasiModel->getPermohonanPohuwato($slug, $id);
        $kdt = $permohonan['trayek_dilayani'];
        $count = $this->koperasiModel->getPermohonanPohuwato();

        $data = [
            'title' => 'Koperasi',
            'session' => $this->user,
            'permohonan' => $permohonan,
            'count' => $count,
            'koperasi' => $this->koperasiModel->getDataKoperasi($id),
            'trayek' => $this->trayekModel->getTrayek($kdt),
            'wilayah' => $this->asalTujuanModel->getWilayah(),
        ];
        return view('cetak/cetakPohuwatoTolak', $data);
    }

    public function uploadPenolakan($slug, $id)
    {
        session();

        $permohonan = $this->koperasiModel->getPermohonanPohuwato($slug, $id);
        $kdt = $permohonan['trayek_dilayani'];
        $count = $this->koperasiModel->getPermohonanPohuwato();

        $data = [
            'title' => 'Koperasi',
            'session' => $this->user,
            'permohonan' => $permohonan,
            'count' => $count,
            'koperasi' => $this->koperasiModel->getDataKoperasi($id),
            'trayek' => $this->trayekModel->getTrayek($kdt),
            'wilayah' => $this->asalTujuanModel->getWilayah(),
            'validation' => \Config\Services::validation(),
        ];
        return view('koperasi/uploadPenolakan', $data);
    }

    public function saveUploadPenolakan()
    {
        session();

        $id = $this->request->getVar('id');
        $slug = $this->request->getVar('slug');

        if (!$this->validate([
            'img_penolakan' => [
                'rules' => 'uploaded[img_penolakan]|max_size[img_penolakan,1024]|is_image[img_penolakan]|mime_in[img_penolakan,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                    'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                    'is_image' => 'Ini bukan gambar',
                    'mime_in' => 'Ini bukan gambar',
                ],
            ],
        ])) {
            return redirect()->to('/koperasi/uploadPenolakan/' . $slug . '/' . $id . '')->withInput();
        }

        if ($this->user['wilayah_id'] == 1) {
            $check = $this->koperasiModel->getPermohonanKota($slug, $id);
        } else if ($this->user['wilayah_id'] == 2) {
            $check = $this->koperasiModel->getPermohonanKab($slug, $id);
        } else if ($this->user['wilayah_id'] == 3) {
            $check = $this->koperasiModel->getPermohonanBoneBol($slug, $id);
        } else if ($this->user['wilayah_id'] == 4) {
            $check = $this->koperasiModel->getPermohonanGorut($slug, $id);
        } else if ($this->user['wilayah_id'] == 5) {
            $check = $this->koperasiModel->getPermohonanBoalemo($slug, $id);
        } else if ($this->user['wilayah_id'] == 6) {
            $check = $this->koperasiModel->getPermohonanPohuwato($slug, $id);
        }

        if ($check) {
            if ($check['asal'] == $this->user['wilayah_id']) {

                $img_penolakan = $this->request->getFile('img_penolakan');

                if ($img_penolakan->getError() == 4) {
                    $nama_img_penolakan = "default.png";
                } else {
                    $nama_img_penolakan = $img_penolakan->getRandomName();
                    $img_penolakan->move('img/img_penolakan', $nama_img_penolakan);
                    if ($this->request->getVar('img_penolakan_lama')) {
                        unlink('img/img_penolakan/' . $this->request->getVar('img_penolakan_asal_lama'));
                    } else {
                    }
                }

                $this->koperasiModel->save([
                    'id' => $id,
                    'img_penolakan_asal' => $nama_img_penolakan,
                ]);
                return redirect()->to('/koperasi/uploadPenolakan/' . $slug . '/' . $id . '');
            } else if ($check['tujuan'] == $this->user['wilayah_id']) {

                $img_penolakan = $this->request->getFile('img_penolakan');

                if ($img_penolakan->getError() == 4) {
                    $nama_img_penolakan = "default.png";
                } else {
                    $nama_img_penolakan = $img_penolakan->getRandomName();
                    $img_penolakan->move('img/img_penolakan', $nama_img_penolakan);
                    if ($this->request->getVar('img_penolakan_lama')) {
                        unlink('img/img_penolakan/' . $this->request->getVar('img_penolakan_tujuan_lama'));
                    } else {
                    }
                }

                $this->koperasiModel->save([
                    'id' => $id,
                    'img_penolakan_tujuan' => $nama_img_penolakan,
                ]);
                return redirect()->to('/koperasi/uploadPenolakan/' . $slug . '/' . $id . '');
            }
        } else {
        }
    }

    public function uploadRekomendasi($slug, $id)
    {
        session();

        $permohonan = $this->koperasiModel->getPermohonanPohuwato($slug, $id);
        $kdt = $permohonan['trayek_dilayani'];
        $count = $this->koperasiModel->getPermohonanPohuwato();

        $data = [
            'title' => 'Koperasi',
            'session' => $this->user,
            'permohonan' => $permohonan,
            'count' => $count,
            'koperasi' => $this->koperasiModel->getDataKoperasi($id),
            'trayek' => $this->trayekModel->getTrayek($kdt),
            'wilayah' => $this->asalTujuanModel->getWilayah(),
            'validation' => \Config\Services::validation(),
        ];
        return view('koperasi/uploadRekomendasi', $data);
    }

    public function saveUploadRekomendasi()
    {
        session();

        $id = $this->request->getVar('id');
        $slug = $this->request->getVar('slug');

        if (!$this->validate([
            'img_rekomendasi' => [
                'rules' => 'uploaded[img_rekomendasi]|max_size[img_rekomendasi,1024]|is_image[img_rekomendasi]|mime_in[img_rekomendasi,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                    'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                    'is_image' => 'Ini bukan gambar',
                    'mime_in' => 'Ini bukan gambar',
                ],
            ],
        ])) {
            return redirect()->to('/koperasi/uploadPenolakan/' . $slug . '/' . $id . '')->withInput();
        }

        if ($this->user['wilayah_id'] == 1) {
            $check = $this->koperasiModel->getPermohonanKota($slug, $id);
        } else if ($this->user['wilayah_id'] == 2) {
            $check = $this->koperasiModel->getPermohonanKab($slug, $id);
        } else if ($this->user['wilayah_id'] == 3) {
            $check = $this->koperasiModel->getPermohonanBoneBol($slug, $id);
        } else if ($this->user['wilayah_id'] == 4) {
            $check = $this->koperasiModel->getPermohonanGorut($slug, $id);
        } else if ($this->user['wilayah_id'] == 5) {
            $check = $this->koperasiModel->getPermohonanBoalemo($slug, $id);
        } else if ($this->user['wilayah_id'] == 6) {
            $check = $this->koperasiModel->getPermohonanPohuwato($slug, $id);
        }

        if ($check) {
            if ($check['asal'] == $this->user['wilayah_id']) {

                $img_rekomendasi = $this->request->getFile('img_rekomendasi');

                if ($img_rekomendasi->getError() == 4) {
                    $nama_img_rekomendasi = "default.png";
                } else {
                    $nama_img_rekomendasi = $img_rekomendasi->getRandomName();
                    $img_rekomendasi->move('img/img_rekomendasi', $nama_img_rekomendasi);
                    if ($this->request->getVar('img_rekomendasi_lama')) {
                        unlink('img/img_rekomendasi/' . $this->request->getVar('img_rekomendasi_asal_lama'));
                    } else {
                    }
                }

                $this->koperasiModel->save([
                    'id' => $id,
                    'img_rekomendasi_asal' => $nama_img_rekomendasi,
                ]);
                return redirect()->to('/koperasi/uploadrekomendasi/' . $slug . '/' . $id . '');
            } else if ($check['tujuan'] == $this->user['wilayah_id']) {

                $img_rekomendasi = $this->request->getFile('img_rekomendasi');

                if ($img_rekomendasi->getError() == 4) {
                    $nama_img_rekomendasi = "default.png";
                } else {
                    $nama_img_rekomendasi = $img_rekomendasi->getRandomName();
                    $img_rekomendasi->move('img/img_rekomendasi', $nama_img_rekomendasi);
                    if ($this->request->getVar('img_rekomendasi_lama')) {
                        unlink('img/img_rekomendasi/' . $this->request->getVar('img_rekomendasi_tujuan_lama'));
                    } else {
                    }
                }

                $this->koperasiModel->save([
                    'id' => $id,
                    'img_rekomendasi_tujuan' => $nama_img_rekomendasi,
                ]);
                return redirect()->to('/koperasi/uploadrekomendasi/' . $slug . '/' . $id . '');
            }
        } else {
        }
    }
}
