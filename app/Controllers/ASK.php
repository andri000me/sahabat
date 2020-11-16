<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\AskModel;
use App\Models\RanmorModel;

class ASK extends BaseController
{
    protected $loginModel;
    protected $askModel;
    protected $ranmorModel;

    public function __construct()
    {
        $this->loginModel = new LoginModel();
        $this->askModel = new AskModel();
        $this->ranmorModel = new RanmorModel();
        $this->session = session();
        $this->user = $this->loginModel->where('email', $this->session->get('email'))->first();
    }

    public function index()
    {
        session();
        if ($this->user) {
            $data = [
                'title' => 'Permohonan Angkutan Orang Tidak Dalam Trayek',
                'session' => $this->user,
                'validation' => \Config\Services::validation(),
                'ask' => $this->askModel->getAsk(),
            ];
            return view('ask/permohonan_aodt', $data);
        } else {
            return redirect()->to('login/login');
        }
    }

    public function detailAOTDT($slug, $kode_registrasi)
    {
        session();
        if ($this->user) {
            $data = [
                'title' => 'Permohonan Angkutan Orang Tidak Dalam Trayek',
                'session' => $this->user,
                'validation' => \Config\Services::validation(),
                'ask' => $this->askModel->getAsk($kode_registrasi),
                'ranmor' => $this->ranmorModel->getAllRanmor($kode_registrasi),
            ];
            return view('ask/detail_aotdt', $data);
        } else {
            return redirect()->to('login/login');
        }
    }

    public function save()
    {
        if (!$this->validate([
            'img_surat_permohonan' => [
                'rules' => 'uploaded[img_surat_permohonan]|max_size[img_surat_permohonan,1024]|mime_in[img_surat_permohonan,image/jpg,image/jpeg,image/png,application/pdf]',
                'errors' => [
                    'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                    'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                    'mime_in' => 'Format tidak sesuai',
                ],
            ],
            'img_bukti_pengesahan' => [
                'rules' => 'uploaded[img_bukti_pengesahan]|max_size[img_bukti_pengesahan,1024]|mime_in[img_bukti_pengesahan,image/jpg,image/jpeg,image/png,application/pdf]',
                'errors' => [
                    'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                    'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                    'mime_in' => 'Format tidak sesuai',
                ],
            ],
            'img_domisili' => [
                'rules' => 'uploaded[img_domisili]|max_size[img_domisili,1024]|mime_in[img_domisili,image/jpg,image/jpeg,image/png,application/pdf]',
                'errors' => [
                    'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                    'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                    'mime_in' => 'Format tidak sesuai',
                ],
            ],
            'img_pernyataan_kesanggupan' => [
                'rules' => 'uploaded[img_pernyataan_kesanggupan]|max_size[img_pernyataan_kesanggupan,1024]|mime_in[img_pernyataan_kesanggupan,image/jpg,image/jpeg,image/png,application/pdf]',
                'errors' => [
                    'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                    'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                    'mime_in' => 'Format tidak sesuai',
                ],
            ],
            'img_pernyataan_kerjasama' => [
                'rules' => 'uploaded[img_pernyataan_kerjasama]|max_size[img_pernyataan_kerjasama,1024]|mime_in[img_pernyataan_kerjasama,image/jpg,image/jpeg,image/png,application/pdf]',
                'errors' => [
                    'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                    'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                    'mime_in' => 'Format tidak sesuai',
                ],
            ],
            'img_perjanjian' => [
                'rules' => 'uploaded[img_perjanjian]|max_size[img_perjanjian,1024]|mime_in[img_perjanjian,image/jpg,image/jpeg,image/png,application/pdf]',
                'errors' => [
                    'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                    'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                    'mime_in' => 'Format tidak sesuai',
                ],
            ],
            'img_pemda' => [
                'rules' => 'uploaded[img_pemda]|max_size[img_pemda,1024]|mime_in[img_pemda,image/jpg,image/jpeg,image/png,application/pdf]',
                'errors' => [
                    'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                    'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                    'mime_in' => 'Format tidak sesuai',
                ],
            ],
            'img_rencana_bisnis' => [
                'rules' => 'uploaded[img_rencana_bisnis]|max_size[img_rencana_bisnis,1024]|mime_in[img_rencana_bisnis,image/jpg,image/jpeg,image/png,application/pdf]',
                'errors' => [
                    'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                    'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                    'mime_in' => 'Format tidak sesuai',
                ],
            ],
        ])) {
            return redirect()->to('/ask/index')->withInput();
        }


        $img_surat_permohonan = $this->request->getFile('img_surat_permohonan');

        if ($img_surat_permohonan->getError() == 4) {
            $nama_img_surat_permohonan = "default.png";
        } else {
            $nama_img_surat_permohonan = $img_surat_permohonan->getRandomName();
            $img_surat_permohonan->move('img/img_surat_permohonan', $nama_img_surat_permohonan);
        }

        $img_bukti_pengesahan = $this->request->getFile('img_bukti_pengesahan');

        if ($img_bukti_pengesahan->getError() == 4) {
            $nama_img_bukti_pengesahan = "default.png";
        } else {
            $nama_img_bukti_pengesahan = $img_bukti_pengesahan->getRandomName();
            $img_bukti_pengesahan->move('img/img_bukti_pengesahan', $nama_img_bukti_pengesahan);
        }

        $img_domisili = $this->request->getFile('img_domisili');

        if ($img_domisili->getError() == 4) {
            $nama_img_domisili = "default.png";
        } else {
            $nama_img_domisili = $img_domisili->getRandomName();
            $img_domisili->move('img/img_domisili', $nama_img_domisili);
        }

        $img_pernyataan_kesanggupan = $this->request->getFile('img_pernyataan_kesanggupan');

        if ($img_pernyataan_kesanggupan->getError() == 4) {
            $nama_img_pernyataan_kesanggupan = "default.png";
        } else {
            $nama_img_pernyataan_kesanggupan = $img_pernyataan_kesanggupan->getRandomName();
            $img_pernyataan_kesanggupan->move('img/img_pernyataan_kesanggupan', $nama_img_pernyataan_kesanggupan);
        }

        $img_pernyataan_kerjasama = $this->request->getFile('img_pernyataan_kerjasama');

        if ($img_pernyataan_kerjasama->getError() == 4) {
            $nama_img_pernyataan_kerjasama = "default.png";
        } else {
            $nama_img_pernyataan_kerjasama = $img_pernyataan_kerjasama->getRandomName();
            $img_pernyataan_kerjasama->move('img/img_pernyataan_kerjasama', $nama_img_pernyataan_kerjasama);
        }

        $img_perjanjian = $this->request->getFile('img_perjanjian');

        if ($img_perjanjian->getError() == 4) {
            $nama_img_perjanjian = "default.png";
        } else {
            $nama_img_perjanjian = $img_perjanjian->getRandomName();
            $img_perjanjian->move('img/img_perjanjian', $nama_img_perjanjian);
        }

        $img_pemda = $this->request->getFile('img_pemda');

        if ($img_pemda->getError() == 4) {
            $nama_img_pemda = "default.png";
        } else {
            $nama_img_pemda = $img_pemda->getRandomName();
            $img_pemda->move('img/img_pemda', $nama_img_pemda);
        }

        $img_rencana_bisnis = $this->request->getFile('img_rencana_bisnis');

        if ($img_rencana_bisnis->getError() == 4) {
            $nama_img_rencana_bisnis = "default.png";
        } else {
            $nama_img_rencana_bisnis = $img_rencana_bisnis->getRandomName();
            $img_rencana_bisnis->move('img/img_rencana_bisnis', $nama_img_rencana_bisnis);
        }

        $slug = url_title($this->user['nama_perusahaan'], '-', true);

        $this->askModel->save([
            'slug' => $slug,
            'kode_registrasi' => $this->request->getVar('kode_registrasi'),
            'id_koperasi' => $this->user['id'],
            'ptsp' => 1,
            'status_ptsp' => 1,
            'dishub' => 0,
            'status_dishub' => 0,
            'pelayanan_dimohon' => $this->request->getVar('pelayanan_dimohon'),
            'jumlah_kendaraan' => $this->request->getVar('jumlah_kendaraan'),
            'jenis_kendaraan' => $this->request->getVar('jenis_kendaraan'),
            'kapasitas_angkut' => $this->request->getVar('kapasitas_angkut'),
            'wilayah_operasi' => $this->request->getVar('wilayah_operasi'),
            'pengaruh' => $this->request->getVar('pengaruh'),
            'kelas_jalan' => $this->request->getVar('kelas_jalan'),
            'fasilitas_pool' => $this->request->getVar('fasilitas_pool'),
            'fasilitas_perawatan' => $this->request->getVar('fasilitas_perawatan'),
            'img_surat_permohonan' => $nama_img_surat_permohonan,
            'img_bukti_pengesahan' => $nama_img_bukti_pengesahan,
            'img_domisili' => $nama_img_domisili,
            'img_pernyataan_kesanggupan' => $nama_img_pernyataan_kesanggupan,
            'img_pernyataan_kerjasama' => $nama_img_pernyataan_kerjasama,
            'img_perjanjian' => $nama_img_perjanjian,
            'img_pemda' => $nama_img_pemda,
            'img_rencana_bisnis' => $nama_img_rencana_bisnis,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->to('/ask/permohonanSaya');
    }

    public function lengkapiBerkas($slug, $kode_registrasi)
    {
        session();
        if ($this->user) {
            $data = [
                'title' => 'Permohonan Angkutan Orang Tidak Dalam Trayek',
                'session' => $this->user,
                'validation' => \Config\Services::validation(),
                'ranmor' => $this->ranmorModel->getAllRanmor($kode_registrasi),
                'ask' => $this->askModel->getAsk($kode_registrasi),
            ];
            return view('ask/lengkapi_berkas', $data);
        } else {
            return redirect()->to('login/login');
        }
    }
    public function ajukanPermohonan($slug, $kode_registrasi)
    {
        session();
        if ($this->user) {
            $data = [
                'title' => 'Permohonan Angkutan Orang Tidak Dalam Trayek',
                'session' => $this->user,
                'validation' => \Config\Services::validation(),
                'ranmor' => $this->ranmorModel->getAllRanmor($kode_registrasi),
                'ask' => $this->askModel->getAsk($kode_registrasi),
            ];
            return view('ask/ajukanpermohonan', $data);
        } else {
            return redirect()->to('login/login');
        }
    }

    public function berkaskendaraan($slug, $kode_registrasi)
    {
        session();
        if ($this->user) {
            $data = [
                'title' => 'Permohonan Angkutan Orang Tidak Dalam Trayek',
                'session' => $this->user,
                'validation' => \Config\Services::validation(),
                'ranmor' => $this->ranmorModel->getAllRanmor($kode_registrasi),
                'ask' => $this->askModel->getAsk($kode_registrasi),
            ];
            return view('ask/berkas_kendaraan', $data);
        } else {
            return redirect()->to('login/login');
        }
    }

    public function permohonanSaya()
    {
        $id = $this->user['id'];
        session();
        if ($this->user) {
            $data = [
                'title' => 'Permohonan Angkutan Orang Tidak Dalam Trayek',
                'session' => $this->user,
                'validation' => \Config\Services::validation(),
                'ranmor' => $this->ranmorModel->getRanmor(),
                'ask' => $this->askModel->getAskSaya($id),
            ];
            return view('ask/permohonanSaya', $data);
        } else {
            return redirect()->to('login/login');
        }
    }

    public function batalkanPengajuan($kode_registrasi)
    {
        $this->askModel->batalkanPengajuan($kode_registrasi);
        $this->ranmorModel->batalkanPengajuan($kode_registrasi);

        return redirect()->to('/ask/permohonanSaya');
    }

    public function ajukanPTSP($id)
    {
        session();
        $this->askModel->save([
            'id' => $id,
            'ptsp' => 1,
            'status_ptsp' => 1
        ]);

        return redirect()->to('/ask/permohonanSaya');
    }

    public function ajukandishub($slug, $kode_registrasi, $id)
    {
        session();
        $this->askModel->save([
            'id' => $id,
            'dishub' => 1,
            'status_dishub' => 1
        ]);


        return redirect()->to('/ask/permohonanizin');
    }
    public function terima($id, $slug, $kode_registrasi)
    {
        session();
        $this->askModel->save([
            'id' => $id,
            'status_ptsp' => 2
        ]);

        return redirect()->to('/ask/verifikasiaotdt');
    }
    public function approve1($id, $slug, $kode_registrasi)
    {
        session();
        $this->askModel->save([
            'id' => $id,
            'dishub_approve' => 1
        ]);

        return redirect()->to('/ask/approvepermohonan');
    }
    public function tolak($id, $slug, $kode_registrasi)
    {
        session();
        $this->askModel->save([
            'id' => $id,
            'status_ptsp' => 3
        ]);

        return redirect()->to('/ask/verifikasiaotdt');
    }


    public function terimapermohonandishub($id, $slug, $kode_registrasi)
    {
        session();
        $this->askModel->save([
            'id' => $id,
            'status_dishub' => 2
        ]);

        return redirect()->to('/ask/verifikasipermohonandishub');
    }

    public function tolakpermohonandishub($id, $slug, $kode_registrasi)
    {
        session();
        $this->askModel->save([
            'id' => $id,
            'status_dishub' => 3
        ]);

        return redirect()->to('/ask/verifikasipermohonandishub');
    }


    public function verifikasiaotdt()
    {
        session();
        if ($this->user) {
            $data = [
                'title' => 'Permohonan Angkutan Orang Tidak Dalam Trayek',
                'session' => $this->user,
                'validation' => \Config\Services::validation(),
                'ranmor' => $this->ranmorModel->getRanmor(),
                'ask' => $this->askModel->getAskPTSP(),
            ];
            return view('ask/verifikasiaotdt', $data);
        } else {
            return redirect()->to('login/login');
        }
    }

    public function verifikasipermohonandishub()
    {
        session();
        if ($this->user) {
            $data = [
                'title' => 'Permohonan Angkutan Orang Tidak Dalam Trayek',
                'session' => $this->user,
                'validation' => \Config\Services::validation(),
                'ranmor' => $this->ranmorModel->getRanmor(),
                'ask' => $this->askModel->getPermohonanDishub(),
            ];
            return view('ask/verifikasidishub', $data);
        } else {
            return redirect()->to('login/login');
        }
    }

    public function approvepermohonan()
    {
        session();
        if ($this->user) {
            $data = [
                'title' => 'Permohonan Angkutan Orang Tidak Dalam Trayek',
                'session' => $this->user,
                'validation' => \Config\Services::validation(),
                'ranmor' => $this->ranmorModel->getRanmor(),
                'ask' => $this->askModel->getPermohonanDishubApprove(),
            ];
            return view('ask/approvepermohonan', $data);
        } else {
            return redirect()->to('login/login');
        }
    }

    public function permohonanIzin()
    {
        session();
        $id = $this->user['id'];
        if ($this->user) {
            $data = [
                'title' => 'Permohonan Angkutan Orang Tidak Dalam Trayek',
                'session' => $this->user,
                'validation' => \Config\Services::validation(),
                'ranmor' => $this->ranmorModel->getRanmor(),
                'ask' => $this->askModel->getAskDishub($id),
            ];
            return view('ask/permohonanIzin', $data);
        } else {
            return redirect()->to('login/login');
        }
    }


    public function detailverifikasiaotdt($slug, $kode_registrasi)
    {
        session();
        if ($this->user) {
            $data = [
                'title' => 'Permohonan Angkutan Orang Tidak Dalam Trayek',
                'session' => $this->user,
                'validation' => \Config\Services::validation(),
                'ask' => $this->askModel->getAsk($kode_registrasi),
                'ranmor' => $this->ranmorModel->getAllRanmor($kode_registrasi),

            ];
            return view('ask/detailverifikasiaotdt', $data);
        } else {
            return redirect()->to('login/login');
        }
    }

    public function detailverifikasidishub($slug, $kode_registrasi)
    {
        session();
        if ($this->user) {
            $data = [
                'title' => 'Permohonan Angkutan Orang Tidak Dalam Trayek',
                'session' => $this->user,
                'validation' => \Config\Services::validation(),
                'ask' => $this->askModel->getAsk($kode_registrasi),
                'ranmor' => $this->ranmorModel->getAllRanmor($kode_registrasi),

            ];
            return view('ask/detailverifikasidishub', $data);
        } else {
            return redirect()->to('login/login');
        }
    }

    public function detailverifikasiapprove($slug, $kode_registrasi)
    {
        session();
        if ($this->user) {
            $data = [
                'title' => 'Permohonan Angkutan Orang Tidak Dalam Trayek',
                'session' => $this->user,
                'validation' => \Config\Services::validation(),
                'ask' => $this->askModel->getAsk($kode_registrasi),
                'ranmor' => $this->ranmorModel->getAllRanmor($kode_registrasi),

            ];
            return view('ask/detailverifikasiapprove', $data);
        } else {
            return redirect()->to('login/login');
        }
    }

    public function uploadPenolakanPTSP($slug, $kode_registrasi)
    {
        session();
        if ($this->user) {
            $data = [
                'title' => 'Permohonan Angkutan Orang Tidak Dalam Trayek',
                'session' => $this->user,
                'validation' => \Config\Services::validation(),
                'ask' => $this->askModel->getAskPTSP($kode_registrasi),
                'ranmor' => $this->ranmorModel->getAllRanmor($kode_registrasi),

            ];
            return view('ask/upload_penolakan_ptsp', $data);
        } else {
            return redirect()->to('login/login');
        }
    }

    public function savePenolakanPTSP()
    {
        if (!$this->validate([
            'img_penolakan_ptsp' => [
                'rules' => 'uploaded[img_penolakan_ptsp]|max_size[img_penolakan_ptsp,3068]|mime_in[img_penolakan_ptsp,image/jpg,image/jpeg,image/png,application/pdf]',
                'errors' => [
                    'uploaded' => 'Pilih dokumen terlebih dahulu',
                    'max_size' => 'Ukuran dokumen terlalu besar (Maksimal 3Mb)',
                    'mime_in' => 'Format tidak sesuai',
                ],
            ],

        ])) {
            return redirect()->to('/ask/uploadpenolakanptsp/' . $this->request->getVar('slug') . '/' . $this->request->getVar('kode_registrasi') . '')->withInput();
        }

        $img_penolakan_ptsp = $this->request->getFile('img_penolakan_ptsp');

        if ($img_penolakan_ptsp->getError() == 4) {
            $nama_img_penolakan_ptsp = "default.png";
        } else {
            $nama_img_penolakan_ptsp = $img_penolakan_ptsp->getRandomName();
            $img_penolakan_ptsp->move('img/img_penolakan_ptsp', $nama_img_penolakan_ptsp);
        }

        $slug = url_title($this->user['nama_perusahaan'], '-', true);

        $this->askModel->save([
            'id' => $this->request->getVar('id'),
            'img_penolakan_ptsp' => $nama_img_penolakan_ptsp,
        ]);

        return redirect()->to('/ask/uploadpenolakanptsp/' . $this->request->getVar('slug') . '/' . $this->request->getVar('kode_registrasi') . '');
    }

    public function saveUploadRekomendasi()
    {
        if (!$this->validate([
            'img_permohonan' => [
                'rules' => 'uploaded[img_permohonan]|max_size[img_permohonan,3068]|mime_in[img_permohonan,image/jpg,image/jpeg,image/png,application/pdf]',
                'errors' => [
                    'uploaded' => 'Pilih dokumen terlebih dahulu',
                    'max_size' => 'Ukuran dokumen terlalu besar (Maksimal 3Mb)',
                    'mime_in' => 'Format tidak sesuai',
                ],
            ],

        ])) {
            return redirect()->to('/ask/uploadrekomendasi/' . $this->request->getVar('slug') . '/' . $this->request->getVar('kode_registrasi') . '')->withInput();
        }

        $img_permohonan = $this->request->getFile('img_permohonan');

        if ($img_permohonan->getError() == 4) {
            $nama_img_permohonan = "default.png";
        } else {
            $nama_img_permohonan = $img_permohonan->getRandomName();
            $img_permohonan->move('img/img_permohonan', $nama_img_permohonan);
        }

        $slug = url_title($this->user['nama_perusahaan'], '-', true);

        $this->askModel->save([
            'id' => $this->request->getVar('id'),
            'img_permohonan' => $nama_img_permohonan,
        ]);

        return redirect()->to('/ask/uploadrekomendasi/' . $this->request->getVar('slug') . '/' . $this->request->getVar('kode_registrasi') . '');
    }


    public function uploadPersetujuanPTSP($slug, $kode_registrasi)
    {
        session();
        if ($this->user) {
            $data = [
                'title' => 'Permohonan Angkutan Orang Tidak Dalam Trayek',
                'session' => $this->user,
                'validation' => \Config\Services::validation(),
                'ask' => $this->askModel->getAskPTSP($kode_registrasi),
                'ranmor' => $this->ranmorModel->getAllRanmor($kode_registrasi),

            ];
            return view('ask/upload_persetujuan_ptsp', $data);
        } else {
            return redirect()->to('login/login');
        }
    }


    public function uploadrekomendasi($slug, $kode_registrasi)
    {
        session();
        if ($this->user) {
            $data = [
                'title' => 'Permohonan Angkutan Orang Tidak Dalam Trayek',
                'session' => $this->user,
                'validation' => \Config\Services::validation(),
                'ask' => $this->askModel->getAskPTSP($kode_registrasi),
                'ranmor' => $this->ranmorModel->getAllRanmor($kode_registrasi),

            ];
            return view('ask/uploadrekomendasi', $data);
        } else {
            return redirect()->to('login/login');
        }
    }

    public function savepersetujuanPTSP()
    {
        if (!$this->validate([
            'img_persetujuan_ptsp' => [
                'rules' => 'uploaded[img_persetujuan_ptsp]|max_size[img_persetujuan_ptsp,3068]|mime_in[img_persetujuan_ptsp,image/jpg,image/jpeg,image/png,application/pdf]',
                'errors' => [
                    'uploaded' => 'Pilih dokumen terlebih dahulu',
                    'max_size' => 'Ukuran dokumen terlalu besar (Maksimal 3Mb)',
                    'mime_in' => 'Format tidak sesuai',
                ],
            ],

        ])) {
            return redirect()->to('/ask/uploadpersetujuanptsp/' . $this->request->getVar('slug') . '/' . $this->request->getVar('kode_registrasi') . '')->withInput();
        }

        $img_persetujuan_ptsp = $this->request->getFile('img_persetujuan_ptsp');

        if ($img_persetujuan_ptsp->getError() == 4) {
            $nama_img_persetujuan_ptsp = "default.png";
        } else {
            $nama_img_persetujuan_ptsp = $img_persetujuan_ptsp->getRandomName();
            $img_persetujuan_ptsp->move('img/img_persetujuan_ptsp', $nama_img_persetujuan_ptsp);
        }

        $slug = url_title($this->user['nama_perusahaan'], '-', true);

        $this->askModel->save([
            'id' => $this->request->getVar('id'),
            'img_persetujuan_ptsp' => $nama_img_persetujuan_ptsp,
        ]);

        return redirect()->to('/ask/uploadpersetujuanptsp/' . $this->request->getVar('slug') . '/' . $this->request->getVar('kode_registrasi') . '');
    }

    public function uploadpersetujuan()
    {
        if (!$this->validate([
            'img_surat_persetujuan' => [
                'rules' => 'uploaded[img_surat_persetujuan]|max_size[img_surat_persetujuan,3068]|mime_in[img_surat_persetujuan,image/jpg,image/jpeg,image/png,application/pdf]',
                'errors' => [
                    'uploaded' => 'Pilih dokumen terlebih dahulu',
                    'max_size' => 'Ukuran dokumen terlalu besar (Maksimal 3Mb)',
                    'mime_in' => 'Format tidak sesuai',
                ],
            ],

        ])) {
            return redirect()->to('/ask/ajukanpermohonan/' . $this->request->getVar('slug') . '/' . $this->request->getVar('kode_registrasi') . '')->withInput();
        }

        $img_surat_persetujuan = $this->request->getFile('img_surat_persetujuan');

        if ($img_surat_persetujuan->getError() == 4) {
            $nama_img_surat_persetujuan = "default.png";
        } else {
            $nama_img_surat_persetujuan = $img_surat_persetujuan->getRandomName();
            $img_surat_persetujuan->move('img/img_surat_persetujuan', $nama_img_surat_persetujuan);
        }

        $slug = url_title($this->user['nama_perusahaan'], '-', true);

        $this->askModel->save([
            'id' => $this->request->getVar('id'),
            'img_surat_persetujuan' => $nama_img_surat_persetujuan,
        ]);

        return redirect()->to('/ask/ajukanpermohonan/' . $this->request->getVar('slug') . '/' . $this->request->getVar('kode_registrasi') . '');
    }
}
