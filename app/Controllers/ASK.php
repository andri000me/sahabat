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
            'status_ptsp' => 0,
            'dishub' => 0,
            'status_dishub' => 0,
            'pelayanan_dimohon' => $this->request->getVar('pelayanan_dimohon'),
            'jumlah_kendaraan' => $this->request->getVar('jumlah_kendaraan'),
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

        return redirect()->to('/ask/lengkapiBerkas/' . $slug . '/' . $this->request->getVar('kode_registrasi') . '');
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

    public function permohonanSaya()
    {
        session();
        if ($this->user) {
            $data = [
                'title' => 'Permohonan Angkutan Orang Tidak Dalam Trayek',
                'session' => $this->user,
                'validation' => \Config\Services::validation(),
                'ranmor' => $this->ranmorModel->getRanmor(),
                'ask' => $this->askModel->getAskSaya(),
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
            'status_ptsp' => 1
        ]);

        return redirect()->to('/ask/permohonanSaya');
    }
}
