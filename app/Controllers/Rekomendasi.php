<?php

namespace App\Controllers;

use App\Models\RekomendasiModel;
use App\Models\VerifikasiModel;
use App\Models\TrayekModel;
use App\Models\MsgPenolakanModel;
use App\Models\LoginModel;
use chillerlan\QRCode\QRCode;

class Rekomendasi extends BaseController
{
    protected $rekomendasiModel;
    protected $verifikasiModel;
    protected $trayekModel;
    protected $msgPenolakanModel;
    protected $loginModel;
    protected $user;

    public function __construct()
    {
        $this->rekomendasiModel = new RekomendasiModel();
        $this->verifikasiModel = new VerifikasiModel();
        $this->trayekModel = new TrayekModel();
        $this->msgPenolakanModel = new MsgPenolakanModel();
        $this->loginModel = new LoginModel();
        $this->session = session();
        $this->user = $this->loginModel->where('email', $this->session->get('email'))->first();
    }

    public function penolakan($kd)
    {
        session();

        $data = [
            'title' => 'Pesan Penolakan',
            'jenis_permohonan' => $this->rekomendasiModel->getJenisPermohonan(),
            'msg_penolakan' => $this->msgPenolakanModel->getMsgPenolakan($kd),
            'rekomendasi' => $this->verifikasiModel->getRekomendasi($kd),
            'validation' => \Config\Services::validation(),
            'session' => $this->user
        ];
        return view('rekomendasi/msg_penolakan', $data);
    }

    public function index()
    {
        if ($this->user) {
            $data = [
                'title' => 'Buat Penolakan',
                'validation' => \Config\Services::validation(),
                'session' => $this->user
            ];
            return view('rekomendasi/index', $data);
        } else {
            return redirect()->to('/login/login');
        }
    }

    public function finish($id)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_verifikasi' => 0,
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil dikirim, mengunngu verivikasi</div>');
        return redirect()->to('/rekomendasi/rekomendasi/');
    }

    public function rekomendasi()
    {
        session();

        $data = [
            'title' => 'Buat Permohonan',
            'jenis_permohonan' => $this->rekomendasiModel->getJenisPermohonan(),
            'permohonan' => $this->verifikasiModel->getRekomendasi(),
            'kode' => $this->verifikasiModel->getRekomendasiLimit(),
            'validation' => \Config\Services::validation(),
            'session' => $this->user
        ];
        return view('rekomendasi/rekomendasi', $data);
    }

    public function step1()
    {
        session();

        $data = [
            'title' => 'Buat Permohonan',
            'jenis_permohonan' => $this->rekomendasiModel->getJenisPermohonan(),
            'kode' => $this->verifikasiModel->getRekomendasiLimit(),
            'validation' => \Config\Services::validation(),
            'session' => $this->user
        ];
        return view('rekomendasi/baru/step-1', $data);
    }

    public function step1p()
    {
        session();

        $data = [
            'title' => 'Buat Permohonan',
            'jenis_permohonan' => $this->rekomendasiModel->getJenisPermohonan(),
            'kode' => $this->verifikasiModel->getRekomendasiLimit(),
            'validation' => \Config\Services::validation(),
            'session' => $this->user
        ];
        return view('rekomendasi/baru/step-1p', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'img_permohonan' => [
                'rules' => 'uploaded[img_permohonan]|max_size[img_permohonan,1024]|is_image[img_permohonan]|mime_in[img_permohonan,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                    'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                    'is_image' => 'Ini bukan gambar',
                    'mime_in' => 'Ini bukan gambar'
                ]
            ],
            'jenis_permohonan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis permohonan belum dipilih'
                ]
            ],
        ])) {
            // $msg = \Config\Services::validation();
            // return redirect()->to('/rekomendasi/step1')->withInput()->with('validation', $msg);
            return redirect()->to('/rekomendasi/step1')->withInput();
        }

        //abil gambar
        $img_permohonan = $this->request->getFile('img_permohonan');

        if ($img_permohonan->getError() == 4) {
            $nama_img = "default.png";
        } else {
            $nama_img = $img_permohonan->getRandomName();
            $img_permohonan->move('img/img_permohonan', $nama_img);
        }

        $slug = url_title($this->request->getVar('nama_pemohon'), '-', true);
        $this->verifikasiModel->save([
            'slug' => $slug,
            'status' => 1,
            'status_verifikasi' => 4,
            'img_surat_permohonan' => $nama_img,
            'tgl_permohonan' => $this->request->getVar('tgl_permohonan_submit'),
            'kode_booking' => $this->request->getVar('kdb'),
            'nama_pemohon' => $this->request->getVar('nama_pemohon'),
            'alamat_pemohon' => $this->request->getVar('alamat_pemohon'),
            'jenis_permohonan' => $this->request->getVar('jenis_permohonan'),
        ]);

        return redirect()->to('/rekomendasi/step2/' . $this->request->getVar('kdb') . '');
        // dd($this->request->getVar());
    }

    public function qrq()
    {
        $data = 'zack';
        // quick and simple:
        echo '<img src="' . (new QRCode)->render($data) . '" alt="QR Code" />';
    }

    public function savep()
    {
        if (!$this->validate([
            'img_permohonan' => [
                'rules' => 'uploaded[img_permohonan]|max_size[img_permohonan,1024]|is_image[img_permohonan]|mime_in[img_permohonan,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                    'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                    'is_image' => 'Ini bukan gambar',
                    'mime_in' => 'Ini bukan gambar'
                ]
            ],
            'jenis_permohonan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis permohonan belum dipilih'
                ]
            ],
        ])) {
            // $msg = \Config\Services::validation();
            // return redirect()->to('/rekomendasi/step1')->withInput()->with('validation', $msg);
            return redirect()->to('/rekomendasi/step1')->withInput();
        }

        //abil gambar
        $img_permohonan = $this->request->getFile('img_permohonan');

        if ($img_permohonan->getError() == 4) {
            $nama_img = "default.png";
        } else {
            $nama_img = $img_permohonan->getRandomName();
            $img_permohonan->move('img/img_permohonan', $nama_img);
        }

        $slug = url_title($this->request->getVar('nama_pemohon'), '-', true);
        $this->verifikasiModel->save([
            'slug' => $slug,
            'status' => 2,
            'status_verifikasi' => 4,
            'img_surat_permohonan' => $nama_img,
            'tgl_permohonan' => $this->request->getVar('tgl_permohonan_submit'),
            'kode_booking' => $this->request->getVar('kdb'),
            'nama_pemohon' => $this->request->getVar('nama_pemohon'),
            'alamat_pemohon' => $this->request->getVar('alamat_pemohon'),
            'jenis_permohonan' => $this->request->getVar('jenis_permohonan')
        ]);

        return redirect()->to('/rekomendasi/step2/' . $this->request->getVar('kdb') . '');
        // dd($this->request->getVar());
    }

    public function step2($id)
    {
        session();

        $data = [
            'title' => 'Buat Permohonan',
            'trayek' => $this->trayekModel->getTrayek(),
            'step2' => $this->verifikasiModel->getRekomendasi($id),
            'validation' => \Config\Services::validation(),
            'session' => $this->user
        ];
        return view('rekomendasi/baru/step-2', $data);
    }

    public function update2($id)
    {
        $kdb = $this->request->getVar('kode_booking');

        if ($this->request->getVar('img_trayek_lama')) {
            if (!$this->validate([
                'trayek_dilayani' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Trayek yang dilayani belum dipilih'
                    ]
                ]
            ])) {
                return redirect()->to('/rekomendasi/step2/' . $kdb . '')->withInput();
            }
        } else {
            if (!$this->validate([
                'trayek_dilayani' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Trayek yang dilayani belum dipilih'
                    ]
                ],
                'img_trayek' => [
                    'rules' => 'uploaded[img_trayek]|max_size[img_trayek,1024]|is_image[img_trayek]|mime_in[img_trayek,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                        'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                        'is_image' => 'Ini bukan gambar',
                        'mime_in' => 'Ini bukan gambar'
                    ]
                ],
            ])) {
                return redirect()->to('/rekomendasi/step2/' . $kdb . '')->withInput();
            }
        }

        $img_trayek = $this->request->getFile('img_trayek');
        //abil gambar

        if ($img_trayek)
            if ($img_trayek->getError() == 4) {
                $nama_img = $this->request->getVar('img_trayek_lama');
            } else {
                $nama_img = $img_trayek->getRandomName();
                $img_trayek->move('img/img_trayek', $nama_img);
                if ($this->request->getVar('img_trayek_lama')) {
                    unlink('img/img_trayek/' . $this->request->getVar('img_trayek_lama'));
                } else {
                }
            }

        $this->verifikasiModel->save([
            'id' => $id,
            'img_trayek' => $nama_img,
            'trayek_dilayani' => $this->request->getVar('trayek_dilayani'),
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Berhasil ubah data</div>');
        return redirect()->to('/rekomendasi/step3/' . $kdb . '');
    }

    public function step3($id)
    {
        session();

        $data = [
            'title' => 'Buat Permohonan',
            'trayek' => $this->trayekModel->getTrayek(),
            'step3' => $this->verifikasiModel->getRekomendasi($id),
            'validation' => \Config\Services::validation(),
            'session' => $this->user
        ];
        return view('rekomendasi/baru/step-3', $data);
    }

    public function update3($id)
    {
        $kdb = $this->request->getVar('kode_booking');

        if (!$this->request->getVar('img_stnkb_pkb_lama')) {
            if (!$this->validate([
                'img_stnkb_pkb' => [
                    'rules' => 'uploaded[img_stnkb_pkb]|max_size[img_stnkb_pkb,1024]|is_image[img_stnkb_pkb]|mime_in[img_stnkb_pkb,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                        'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                        'is_image' => 'Ini bukan gambar',
                        'mime_in' => 'Ini bukan gambar'
                    ]
                ],
            ])) {
                return redirect()->to('/rekomendasi/step3/' . $kdb . '')->withInput();
            }
        }

        $img_stnkb_pkb = $this->request->getFile('img_stnkb_pkb');
        //abil gambar

        if ($img_stnkb_pkb)
            if ($img_stnkb_pkb->getError() == 4) {
                $nama_img = $this->request->getVar('img_stnkb_pkb_lama');
            } else {
                $nama_img = $img_stnkb_pkb->getRandomName();
                $img_stnkb_pkb->move('img/img_stnkb_pkb', $nama_img);
                if ($this->request->getVar('img_stnkb_pkb_lama')) {
                    unlink('img/img_stnkb_pkb/' . $this->request->getVar('img_stnkb_pkb_lama'));
                } else {
                }
            }

        $this->verifikasiModel->save([
            'id' => $id,
            'img_stnkb_pkb' => $nama_img,
            'nomor_kendaraan' => $this->request->getVar('nomor_kendaraan'),
            'nama_pemilik' => $this->request->getVar('nama_pemilik'),
            'alamat_pemilik' => $this->request->getVar('alamat_pemilik'),
            'jenis_kendaraan' => $this->request->getVar('jenis_kendaraan'),
            'tahun_pembuatan' => $this->request->getVar('tahun_pembuatan'),
            'stnkb_berlaku' => $this->request->getVar('stnkb_berlaku_submit'),
            'pkb_berlaku' => $this->request->getVar('pkb_berlaku_submit'),
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Berhasil ubah data</div>');
        return redirect()->to('/rekomendasi/step4/' . $kdb . '');
    }

    public function step4($id)
    {
        session();

        $data = [
            'title' => 'Buat Permohonan',
            'trayek' => $this->trayekModel->getTrayek(),
            'step4' => $this->verifikasiModel->getRekomendasi($id),
            'validation' => \Config\Services::validation(),
            'session' => $this->user
        ];
        return view('rekomendasi/baru/step-4', $data);
    }

    public function update4($id)
    {
        $kdb = $this->request->getVar('kode_booking');

        if (!$this->request->getVar('img_kir_lama')) {
            if (!$this->validate([
                'img_kir' => [
                    'rules' => 'uploaded[img_kir]|max_size[img_kir,1024]|is_image[img_kir]|mime_in[img_kir,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                        'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                        'is_image' => 'Ini bukan gambar',
                        'mime_in' => 'Ini bukan gambar'
                    ]
                ],
            ])) {
                return redirect()->to('/rekomendasi/step4/' . $kdb . '')->withInput();
            }
        }

        $img_kir = $this->request->getFile('img_kir');
        //abil gambar

        if ($img_kir)
            if ($img_kir->getError() == 4) {
                $nama_img = $this->request->getVar('img_kir_lama');
            } else {
                $nama_img = $img_kir->getRandomName();
                $img_kir->move('img/img_kir', $nama_img);
                if ($this->request->getVar('img_kir_lama')) {
                    unlink('img/img_kir/' . $this->request->getVar('img_kir_lama'));
                } else {
                }
            }

        $this->verifikasiModel->save([
            'id' => $id,
            'img_kir' => $nama_img,
            'nomor_kir' => $this->request->getVar('nomor_kir'),
            'kapasitas_angkutan' => $this->request->getVar('kapasitas_angkutan'),
            'uji_berkala_berlaku' => $this->request->getVar('uji_berkala_berlaku_submit'),
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Berhasil ubah data</div>');
        return redirect()->to('/rekomendasi/step5/' . $kdb . '');
    }

    public function step5($id)
    {
        session();

        $data = [
            'title' => 'Buat Permohonan',
            'trayek' => $this->trayekModel->getTrayek(),
            'step5' => $this->verifikasiModel->getRekomendasi($id),
            'validation' => \Config\Services::validation(),
            'session' => $this->user
        ];
        return view('rekomendasi/baru/step-5', $data);
    }

    public function update5($id)
    {
        $kdb = $this->request->getVar('kode_booking');

        if (!$this->request->getVar('img_jasa_raharja_lama')) {
            if (!$this->validate([
                'img_jasa_raharja' => [
                    'rules' => 'uploaded[img_jasa_raharja]|max_size[img_jasa_raharja,1024]|is_image[img_jasa_raharja]|mime_in[img_jasa_raharja,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                        'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                        'is_image' => 'Ini bukan gambar',
                        'mime_in' => 'Ini bukan gambar'
                    ]
                ],
            ])) {
                return redirect()->to('/rekomendasi/step5/' . $kdb . '')->withInput();
            }
        }

        $img_jasa_raharja = $this->request->getFile('img_jasa_raharja');
        //abil gambar

        if ($img_jasa_raharja)
            if ($img_jasa_raharja->getError() == 4) {
                $nama_img = $this->request->getVar('img_jasa_raharja_lama');
            } else {
                $nama_img = $img_jasa_raharja->getRandomName();
                $img_jasa_raharja->move('img/img_jasa_raharja', $nama_img);
                if ($this->request->getVar('img_jasa_raharja_lama')) {
                    unlink('img/img_jasa_raharja/' . $this->request->getVar('img_jasa_raharja_lama'));
                } else {
                }
            }

        $this->verifikasiModel->save([
            'id' => $id,
            'img_jasa_raharja' => $nama_img,
            'jasa_raharja_berlaku' => $this->request->getVar('jasa_raharja_berlaku_submit')
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Berhasil ubah data</div>');
        return redirect()->to('/rekomendasi/step6/' . $kdb . '');
    }

    public function step6($id)
    {
        session();

        $data = [
            'title' => 'Buat Permohonan',
            'trayek' => $this->trayekModel->getTrayek(),
            'step6' => $this->verifikasiModel->getRekomendasi($id),
            'validation' => \Config\Services::validation(),
            'session' => $this->user
        ];
        return view('rekomendasi/baru/step-6', $data);
    }

    public function update6($id)
    {
        $kdb = $this->request->getVar('kode_booking');

        if (!$this->request->getVar('img_akte_perusahaan_lama')) {
            if (!$this->validate([
                'img_akte_perusahaan' => [
                    'rules' => 'uploaded[img_akte_perusahaan]|max_size[img_akte_perusahaan,1024]|is_image[img_akte_perusahaan]|mime_in[img_akte_perusahaan,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                        'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                        'is_image' => 'Ini bukan gambar',
                        'mime_in' => 'Ini bukan gambar'
                    ]
                ],

            ])) {
                return redirect()->to('/rekomendasi/step6/' . $kdb . '')->withInput();
            }
        }
        if (!$this->request->getVar('img_tdp_lama')) {
            if (!$this->validate([
                'img_tdp' => [
                    'rules' => 'uploaded[img_tdp]|max_size[img_tdp,1024]|is_image[img_tdp]|mime_in[img_tdp,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                        'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                        'is_image' => 'Ini bukan gambar',
                        'mime_in' => 'Ini bukan gambar'
                    ]
                ],
            ])) {
                return redirect()->to('/rekomendasi/step6/' . $kdb . '')->withInput();
            }
        }
        if (!$this->request->getVar('img_siup_lama')) {
            if (!$this->validate([
                'img_siup' => [
                    'rules' => 'uploaded[img_siup]|max_size[img_siup,1024]|is_image[img_siup]|mime_in[img_siup,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                        'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                        'is_image' => 'Ini bukan gambar',
                        'mime_in' => 'Ini bukan gambar'
                    ]
                ],
            ])) {
                return redirect()->to('/rekomendasi/step6/' . $kdb . '')->withInput();
            }
        }
        if (!$this->request->getVar('img_npwp_lama')) {
            if (!$this->validate([
                'img_npwp' => [
                    'rules' => 'uploaded[img_npwp]|max_size[img_npwp,1024]|is_image[img_npwp]|mime_in[img_npwp,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                        'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                        'is_image' => 'Ini bukan gambar',
                        'mime_in' => 'Ini bukan gambar'
                    ]
                ],
            ])) {
                return redirect()->to('/rekomendasi/step6/' . $kdb . '')->withInput();
            }
        }
        if (!$this->request->getVar('img_ktp_lama')) {
            if (!$this->validate([
                'img_ktp' => [
                    'rules' => 'uploaded[img_ktp]|max_size[img_ktp,1024]|is_image[img_ktp]|mime_in[img_ktp,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                        'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                        'is_image' => 'Ini bukan gambar',
                        'mime_in' => 'Ini bukan gambar'
                    ]
                ],
            ])) {
                return redirect()->to('/rekomendasi/step6/' . $kdb . '')->withInput();
            }
        }
        if (!$this->request->getVar('img_surat_pernyataan_lama')) {
            if (!$this->validate([
                'img_surat_pernyataan' => [
                    'rules' => 'uploaded[img_surat_pernyataan]|max_size[img_surat_pernyataan,1024]|is_image[img_surat_pernyataan]|mime_in[img_surat_pernyataan,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                        'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                        'is_image' => 'Ini bukan gambar',
                        'mime_in' => 'Ini bukan gambar'
                    ]
                ],
            ])) {
                return redirect()->to('/rekomendasi/step6/' . $kdb . '')->withInput();
            }
        }
    }

    public function s1($id)
    {
        $kdb = $this->request->getVar('kode_booking');

        $img_akte_perusahaan = $this->request->getFile('img_akte_perusahaan');
        //abil gambar

        if ($img_akte_perusahaan) {
            if ($img_akte_perusahaan->getError() == 4) {
                $nama_img_akte = $this->request->getVar('img_akte_perusahaan_lama');
            } else {
                $nama_img_akte = $img_akte_perusahaan->getRandomName();
                $img_akte_perusahaan->move('img/img_akte_perusahaan', $nama_img_akte);
                if ($this->request->getVar('img_akte_perusahaan_lama')) {
                    unlink('img/img_akte_perusahaan/' . $this->request->getVar('img_akte_perusahaan_lama'));
                } else {
                }
            }
        }

        $this->verifikasiModel->save([
            'id' => $id,
            'img_akte_perusahaan' => $nama_img_akte,
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil dikirim, mengunngu verivikasi</div>');
        return redirect()->to('/rekomendasi/step6/' . $kdb . '');
    }

    public function s2($id)
    {
        $kdb = $this->request->getVar('kode_booking');

        $img_tdp = $this->request->getFile('img_tdp');
        //abil gambar

        if ($img_tdp) {
            if ($img_tdp->getError() == 4) {
                $nama_img_tdp = $this->request->getVar('img_tdp_lama');
            } else {
                $nama_img_tdp = $img_tdp->getRandomName();
                $img_tdp->move('img/img_tdp', $nama_img_tdp);
                if ($this->request->getVar('img_tdp_lama')) {
                    unlink('img/img_tdp/' . $this->request->getVar('img_tdp_lama'));
                } else {
                }
            }
        }

        $this->verifikasiModel->save([
            'id' => $id,
            'img_tdp' => $nama_img_tdp,
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil dikirim, mengunngu verivikasi</div>');
        return redirect()->to('/rekomendasi/step6/' . $kdb . '');
    }

    public function s3($id)
    {
        $kdb = $this->request->getVar('kode_booking');

        $img_siup = $this->request->getFile('img_siup');
        //abil gambar

        if ($img_siup) {
            if ($img_siup->getError() == 4) {
                $nama_img_siup = $this->request->getVar('img_siup_lama');
            } else {
                $nama_img_siup = $img_siup->getRandomName();
                $img_siup->move('img/img_siup', $nama_img_siup);
                if ($this->request->getVar('img_siup_lama')) {
                    unlink('img/img_siup/' . $this->request->getVar('img_siup_lama'));
                } else {
                }
            }
        }

        $this->verifikasiModel->save([
            'id' => $id,
            'img_siup' => $nama_img_siup,
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil dikirim, mengunngu verivikasi</div>');
        return redirect()->to('/rekomendasi/step6/' . $kdb . '');
    }
    public function s4($id)
    {
        $kdb = $this->request->getVar('kode_booking');

        $img_npwp = $this->request->getFile('img_npwp');
        //abil gambar

        if ($img_npwp) {
            if ($img_npwp->getError() == 4) {
                $nama_img_npwp = $this->request->getVar('img_npwp_lama');
            } else {
                $nama_img_npwp = $img_npwp->getRandomName();
                $img_npwp->move('img/img_npwp', $nama_img_npwp);
                if ($this->request->getVar('img_npwp_lama')) {
                    unlink('img/img_npwp/' . $this->request->getVar('img_npwp_lama'));
                } else {
                }
            }
        }

        $this->verifikasiModel->save([
            'id' => $id,
            'img_npwp' => $nama_img_npwp,
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil dikirim, mengunngu verivikasi</div>');
        return redirect()->to('/rekomendasi/step6/' . $kdb . '');
    }
    public function s5($id)
    {
        $kdb = $this->request->getVar('kode_booking');

        $img_ktp = $this->request->getFile('img_ktp');
        //abil gambar

        if ($img_ktp) {
            if ($img_ktp->getError() == 4) {
                $nama_img_ktp = $this->request->getVar('img_ktp_lama');
            } else {
                $nama_img_ktp = $img_ktp->getRandomName();
                $img_ktp->move('img/img_ktp', $nama_img_ktp);
                if ($this->request->getVar('img_ktp_lama')) {
                    unlink('img/img_ktp/' . $this->request->getVar('img_ktp_lama'));
                } else {
                }
            }
        }

        $this->verifikasiModel->save([
            'id' => $id,
            'img_ktp' => $nama_img_ktp,
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil dikirim, mengunngu verivikasi</div>');
        return redirect()->to('/rekomendasi/step6/' . $kdb . '');
    }
    public function s6($id)
    {
        $kdb = $this->request->getVar('kode_booking');

        $img_surat_pernyataan = $this->request->getFile('img_surat_pernyataan');
        //abil gambar

        if ($img_surat_pernyataan) {
            if ($img_surat_pernyataan->getError() == 4) {
                $nama_img_surat_pernyataan = $this->request->getVar('img_surat_pernyataan_lama');
            } else {
                $nama_img_surat_pernyataan = $img_surat_pernyataan->getRandomName();
                $img_surat_pernyataan->move('img/img_surat_pernyataan', $nama_img_surat_pernyataan);
                if ($this->request->getVar('img_surat_pernyataan_lama')) {
                    unlink('img/img_surat_pernyataan/' . $this->request->getVar('img_surat_pernyataan_lama'));
                } else {
                }
            }
        }

        $this->verifikasiModel->save([
            'id' => $id,
            'img_surat_pernyataan' => $nama_img_surat_pernyataan,
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil dikirim, mengunngu verivikasi</div>');
        return redirect()->to('/rekomendasi/step6/' . $kdb . '');
    }





    public function step7()
    {
        return view('rekomendasi/baru/step-7');
    }
    public function step8()
    {
        return view('rekomendasi/baru/step-8');
    }
    public function step9()
    {
        return view('rekomendasi/baru/step-9');
    }
    public function step11($id)
    {
        session();

        $data = [
            'title' => 'Buat Permohonan',
            'trayek' => $this->trayekModel->getTrayek(),
            'step11' => $this->verifikasiModel->getRekomendasi($id),
            'jenis_permohonan' => $this->rekomendasiModel->getJenisPermohonan(),
            'validation' => \Config\Services::validation(),
            'session' => $this->user

        ];
        return view('rekomendasi/baru/step-11', $data);
    }

    public function update($id)
    {
        $kdb = $this->request->getVar('kode_booking');
        if (!$this->validate([
            'img_permohonan' => [
                'rules' => 'max_size[img_permohonan,1024]|is_image[img_permohonan]|mime_in[img_permohonan,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                    'is_image' => 'Ini bukan gambar',
                    'mime_in' => 'Ini bukan gambar'
                ]
            ],
            'jenis_permohonan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis permohonan belum dipilih'
                ]
            ],
        ])) {
            return redirect()->to('/rekomendasi/step11/' . $kdb . '')->withInput();
        }

        $img_permohonan = $this->request->getFile('img_permohonan');
        //abil gambar

        if ($img_permohonan)
            if ($img_permohonan->getError() == 4) {
                $nama_img = $this->request->getVar('img_permohonan_lama');
            } else {
                $nama_img = $img_permohonan->getRandomName();
                $img_permohonan->move('img/img_permohonan', $nama_img);

                if ($this->request->getVar('img_permohonan_lama')) {
                    unlink('img/img_permohonan/' . $this->request->getVar('img_permohonan_lama'));
                } else {
                }

                $slug = url_title($this->request->getVar('nama_pemohon'), '-', true);
                $this->verifikasiModel->save([
                    'id' => $id,
                    'slug' => $slug,
                    'status' => 1,
                    'img_surat_permohonan' => $nama_img,
                    'tgl_permohonan' => $this->request->getVar('tgl_permohonan_submit'),
                    'nama_pemohon' => $this->request->getVar('nama_pemohon'),
                    'alamat_pemohon' => $this->request->getVar('alamat_pemohon'),
                    'jenis_permohonan' => $this->request->getVar('jenis_permohonan')
                ]);

                session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Berhasil ubah data</div>');
                return redirect()->to('/rekomendasi/step11/' . $kdb . '');
            }
        return redirect()->to('/rekomendasi/step2/' . $kdb . '')->withInput();
    }
}
