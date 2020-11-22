<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\AskModel;
use App\Models\RanmorModel;
use App\Models\MsgPenolakanModel;
use chillerlan\QRCode\QRCode;


class ASK extends BaseController
{
    protected $loginModel;
    protected $askModel;
    protected $ranmorModel;
    protected $msgPenolakanModel;

    public function __construct()
    {
        $this->loginModel = new LoginModel();
        $this->askModel = new AskModel();
        $this->ranmorModel = new RanmorModel();
        $this->msgPenolakanModel = new MsgPenolakanModel();
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

    public function cetakpermohonan($kode_registrasi)
    {
        session();

        $qrcode = '<img width="150" src="' . (new QRCode)->render($kode_registrasi) . '" alt="QR Code" />';

        if ($this->user) {
            $data = [
                'title' => 'Permohonan Angkutan Orang Tidak Dalam Trayek',
                'session' => $this->user,
                'validation' => \Config\Services::validation(),
                'ask' => $this->askModel->getAsk($kode_registrasi),
                'qrq' => $qrcode
            ];
            return view('ask/cetakpermohonan', $data);
        } else {
            return redirect()->to('login/login');
        }
    }

    public function cetakpenerbitan($kode_registrasi)
    {
        session();

        $qrcode = '<img width="150" src="' . (new QRCode)->render($kode_registrasi) . '" alt="QR Code" />';

        if ($this->user) {
            $data = [
                'title' => 'Permohonan Angkutan Orang Tidak Dalam Trayek',
                'session' => $this->user,
                'validation' => \Config\Services::validation(),
                'ask' => $this->askModel->getAsk($kode_registrasi),
                'qrq' => $qrcode
            ];
            return view('ask/cetakpenerbitan', $data);
        } else {
            return redirect()->to('login/login');
        }
    }

    public function detailaotdt($slug, $kode_registrasi)
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
            'penerbitan' => 0,
            'status_penerbitan' => 0,
            'rekompersetujuan' => 1,
            'status_rekompersetujuan' => 0,
            // 'pelayanan_dimohon' => $this->request->getVar('pelayanan_dimohon'),
            'jumlah_kendaraan' => $this->request->getVar('jumlah_kendaraan'),
            'jenis_kendaraan' => $this->request->getVar('jenis_kendaraan'),
            'kapasitas_angkut' => $this->request->getVar('kapasitas_angkut'),
            'wilayah_operasi' => $this->request->getVar('wilayah_operasi'),
            // 'pengaruh' => $this->request->getVar('pengaruh'),
            // 'kelas_jalan' => $this->request->getVar('kelas_jalan'),
            // 'fasilitas_pool' => $this->request->getVar('fasilitas_pool'),
            // 'fasilitas_perawatan' => $this->request->getVar('fasilitas_perawatan'),
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

        return redirect()->to('/ask/permohonansaya');
    }

    public function saveperbaikan()
    {
        $img_surat_permohonan = $this->request->getFile('img_surat_permohonan');

        if ($img_surat_permohonan->getError() == 4) {
            $nama_img_surat_permohonan = $this->request->getVar('img_surat_permohonan_lama');
        } else {
            $nama_img_surat_permohonan = $img_surat_permohonan->getRandomName();
            $img_surat_permohonan->move('img/img_surat_permohonan', $nama_img_surat_permohonan);
        }

        $img_bukti_pengesahan = $this->request->getFile('img_bukti_pengesahan');

        if ($img_bukti_pengesahan->getError() == 4) {
            $nama_img_bukti_pengesahan = $this->request->getVar('img_bukti_pengesahan_lama');
        } else {
            $nama_img_bukti_pengesahan = $img_bukti_pengesahan->getRandomName();
            $img_bukti_pengesahan->move('img/img_bukti_pengesahan', $nama_img_bukti_pengesahan);
        }

        $img_domisili = $this->request->getFile('img_domisili');

        if ($img_domisili->getError() == 4) {
            $nama_img_domisili = $this->request->getVar('img_domisili_lama');
        } else {
            $nama_img_domisili = $img_domisili->getRandomName();
            $img_domisili->move('img/img_domisili', $nama_img_domisili);
        }

        $img_pernyataan_kesanggupan = $this->request->getFile('img_pernyataan_kesanggupan');

        if ($img_pernyataan_kesanggupan->getError() == 4) {
            $nama_img_pernyataan_kesanggupan = $this->request->getVar('img_pernyataan_kesanggupan_lama');
        } else {
            $nama_img_pernyataan_kesanggupan = $img_pernyataan_kesanggupan->getRandomName();
            $img_pernyataan_kesanggupan->move('img/img_pernyataan_kesanggupan', $nama_img_pernyataan_kesanggupan);
        }

        $img_pernyataan_kerjasama = $this->request->getFile('img_pernyataan_kerjasama');

        if ($img_pernyataan_kerjasama->getError() == 4) {
            $nama_img_pernyataan_kerjasama = $this->request->getVar('img_pernyataan_kerjasama_lama');
        } else {
            $nama_img_pernyataan_kerjasama = $img_pernyataan_kerjasama->getRandomName();
            $img_pernyataan_kerjasama->move('img/img_pernyataan_kerjasama', $nama_img_pernyataan_kerjasama);
        }

        $img_perjanjian = $this->request->getFile('img_perjanjian');

        if ($img_perjanjian->getError() == 4) {
            $nama_img_perjanjian = $this->request->getVar('img_perjanjian_lama');
        } else {
            $nama_img_perjanjian = $img_perjanjian->getRandomName();
            $img_perjanjian->move('img/img_perjanjian', $nama_img_perjanjian);
        }

        $img_pemda = $this->request->getFile('img_pemda');

        if ($img_pemda->getError() == 4) {
            $nama_img_pemda = $this->request->getVar('img_pemda_lama');
        } else {
            $nama_img_pemda = $img_pemda->getRandomName();
            $img_pemda->move('img/img_pemda', $nama_img_pemda);
        }

        $img_rencana_bisnis = $this->request->getFile('img_rencana_bisnis');

        if ($img_rencana_bisnis->getError() == 4) {
            $nama_img_rencana_bisnis = $this->request->getVar('img_rencana_bisnis_lama');
        } else {
            $nama_img_rencana_bisnis = $img_rencana_bisnis->getRandomName();
            $img_rencana_bisnis->move('img/img_rencana_bisnis', $nama_img_rencana_bisnis);
        }

        $slug = url_title($this->user['nama_perusahaan'], '-', true);

        $this->askModel->save([
            'ptsp' => 1,
            'status_ptsp' => 1,
            'dishub' => 0,
            'status_dishub' => 0,
            'penerbitan' => 0,
            'status_penerbitan' => 0,
            'rekompersetujuan' => 1,
            'status_rekompersetujuan' => 0,
            'id' => $this->request->getVar('idask'),
            'jumlah_kendaraan' => $this->request->getVar('jumlah_kendaraan'),
            'jenis_kendaraan' => $this->request->getVar('jenis_kendaraan'),
            'kapasitas_angkut' => $this->request->getVar('kapasitas_angkut'),
            'wilayah_operasi' => $this->request->getVar('wilayah_operasi'),
            'img_surat_permohonan' => $nama_img_surat_permohonan,
            'img_bukti_pengesahan' => $nama_img_bukti_pengesahan,
            'img_domisili' => $nama_img_domisili,
            'img_pernyataan_kesanggupan' => $nama_img_pernyataan_kesanggupan,
            'img_pernyataan_kerjasama' => $nama_img_pernyataan_kerjasama,
            'img_perjanjian' => $nama_img_perjanjian,
            'img_pemda' => $nama_img_pemda,
            'img_rencana_bisnis' => $nama_img_rencana_bisnis,
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->to('/ask/permohonansaya');
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
            return view('ask/berkas_kendaraan', $data);
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

    public function ajukanpenerbitan($slug, $kode_registrasi)
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
            return view('ask/ajukanpenerbitan', $data);
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

    public function detailpenolakan($id)
    {
        session();

        $data = [
            'title' => 'Koperasi',
            'session' => $this->user,
            'ask' => $this->askModel->getAsk($id),
            'msg' => $this->msgPenolakanModel->getMsgPenolakans($id),
            'validation' => \Config\Services::validation(),
        ];
        return view('ask/detailpenolakan', $data);
    }

    public function detailpenolakanterbit($id)
    {
        session();

        $data = [
            'title' => 'Koperasi',
            'session' => $this->user,
            'ask' => $this->askModel->getAsk($id),
            'msg' => $this->msgPenolakanModel->getMsgPenolakans($id),
            'validation' => \Config\Services::validation(),
        ];
        return view('ask/detailpenolakanterbit', $data);
    }

    public function perbaiki($id)
    {
        session();

        $data = [
            'title' => 'Koperasi',
            'session' => $this->user,
            'ask' => $this->askModel->getAsk($id),
            'validation' => \Config\Services::validation(),
        ];
        return view('ask/perbaiki', $data);
    }

    public function permohonansaya()
    {
        $id = $this->user['id'];
        session();
        if ($this->user) {
            $data = [
                'title' => 'Permohonan Angkutan Orang Tidak Dalam Trayek',
                'session' => $this->user,
                'validation' => \Config\Services::validation(),
                'ranmor' => $this->ranmorModel->getRanmor(),
                'ask' => $this->askModel->getAsksaya($id),
            ];
            return view('ask/permohonansaya', $data);
        } else {
            return redirect()->to('login/login');
        }
    }

    public function batalkanpengajuan($kode_registrasi)
    {
        $this->askModel->batalkanPengajuan($kode_registrasi);
        $this->ranmorModel->batalkanPengajuan($kode_registrasi);

        return redirect()->to('/ask/permohonansaya');
    }

    public function ajukanptsp($id)
    {
        session();
        $this->askModel->save([
            'id' => $id,
            'ptsp' => 1,
            'status_ptsp' => 1
        ]);

        return redirect()->to('/ask/permohonansaya');
    }

    public function ajukandishub($slug, $kode_registrasi, $id)
    {
        session();
        $this->askModel->save([
            'id' => $id,
            'status_penerbitan' => 1
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

    public function terimapenerbitan($id, $slug, $kode_registrasi)
    {
        session();
        $this->askModel->save([
            'id' => $id,
            'status_penerbitan' => 2
        ]);

        return redirect()->to('/ask/verifikasipenerbitanaotdt');
    }

    public function tolakpenerbitan($id, $slug, $kode_registrasi)
    {
        session();
        $this->askModel->save([
            'id' => $id,
            'status_penerbitan' => 5
        ]);

        return redirect()->to('/ask/verifikasipenerbitanaotdt');
    }

    public function terimapenerbitandishub($id, $slug, $kode_registrasi)
    {
        session();
        $this->askModel->save([
            'id' => $id,
            'status_penerbitan' => 3
        ]);

        return redirect()->to('/ask/verifikasipenerbitandishub');
    }

    public function tolakpenerbitandishub($id, $slug, $kode_registrasi)
    {
        session();
        $this->askModel->save([
            'id' => $id,
            'status_penerbitan' => 5
        ]);

        return redirect()->to('/ask/verifikasipenerbitandishub');
    }

    public function saveapprovepenerbitandishub($id, $slug, $kode_registrasi)
    {
        session();
        $this->askModel->save([
            'id' => $id,
            'status_penerbitan' => 4,
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/ask/approvepenerbitandishub');
    }

    public function disapprovepenerbitandishub($id, $slug, $kode_registrasi)
    {
        session();
        $this->askModel->save([
            'id' => $id,
            'status_penerbitan' => 5
        ]);

        return redirect()->to('/ask/approvepenerbitandishub');
    }

    public function approve1($id, $slug, $kode_registrasi)
    {
        session();
        $this->askModel->save([
            'id' => $id,
            'dishub_approve' => 1,
            'penerbitan' => 1,
            'status_penerbitan' => 1
        ]);

        return redirect()->to('/ask/approvepermohonan');
    }

    public function ajukanpenerbitanizin($id, $slug, $kode_registrasi)
    {
        session();
        $this->askModel->save([
            'id' => $id,
            'penerbitan' => 1,
            'ptsp_penerbitan' => 1,
            'status_penerbitan' => 2
        ]);

        return redirect()->to('/ask/penerbitanizin');
    }

    public function tolak()
    {
        session();

        $img = $this->request->getFile('img');
        $id = $this->request->getVar('idask');

        if ($img->getError() == 4) {
            $nama_img = "default.png";
        } else {
            $nama_img = $img->getRandomName();
            $img->move('img/img', $nama_img);
        }

        $msg = $this->msgPenolakanModel->getMsgPenolakans($this->request->getVar('kode_registrasi'));

        $this->msgPenolakanModel->delete([
            'id' => $msg['id'],
        ]);

        $this->askModel->save([
            'id' => $id,
            'rekompersetujuan' => 1,
            'dishub' => 1,
            'status_rekompersetujuan' => 4,
        ]);

        $this->msgPenolakanModel->save([
            'kode_booking' => $this->request->getVar('kode_registrasi'),
            'status' => $this->user['id'],
            'msg' => $this->request->getVar('msg'),
            'img' => $nama_img,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        return redirect()->to('/ask/verifikasiaotdt');
    }

    public function tolakterbit()
    {
        session();

        $img = $this->request->getFile('img');
        $id = $this->request->getVar('idask');

        if ($img->getError() == 4) {
            $nama_img = "default.png";
        } else {
            $nama_img = $img->getRandomName();
            $img->move('img/img', $nama_img);
        }

        $msg = $this->msgPenolakanModel->getMsgPenolakans($this->request->getVar('kode_registrasi'));

        $this->msgPenolakanModel->delete([
            'id' => $msg['id'],
        ]);

        $this->askModel->save([
            'id' => $id,
            'status_penerbitan' => 5,
        ]);

        $this->msgPenolakanModel->save([
            'kode_booking' => $this->request->getVar('kode_registrasi'),
            'status' => $this->user['id'],
            'msg' => $this->request->getVar('msg'),
            'img' => $nama_img,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        return redirect()->to('/ask/verifikasipenerbitanaotdt');
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

    public function ajukanpersetujuandishub($id, $slug, $kode_registrasi)
    {
        session();
        $this->askModel->save([
            'id' => $id,
            'status_rekompersetujuan' => 1
        ]);

        return redirect()->to('/ask/verifikasiaotdt');
    }

    public function terimapersetujuanizin($id, $slug, $kode_registrasi)
    {
        session();
        $this->askModel->save([
            'id' => $id,
            'status_rekompersetujuan' => 2
        ]);

        return redirect()->to('/ask/verifikasiaotdtdishub');
    }

    public function vterimapersetujuanizin($id, $slug, $kode_registrasi)
    {
        session();
        $this->askModel->save([
            'id' => $id,
            'status_rekompersetujuan' => 2
        ]);

        return redirect()->to('/ask/verifikasiaotdtdishub');
    }

    public function vtolakpersetujuanizin($id, $slug, $kode_registrasi)
    {
        session();
        $this->askModel->save([
            'id' => $id,
            'status_rekompersetujuan' => 4
        ]);

        return redirect()->to('/ask/verifikasiaotdtdishub');
    }

    public function saveapprovepersetujuanizin($id, $slug, $kode_registrasi)
    {
        session();
        $this->askModel->save([
            'id' => $id,
            'status_rekompersetujuan' => 3
        ]);

        return redirect()->to('/ask/approvepersetujuanizin');
    }

    public function savetolakpersetujuanizin($id, $slug, $kode_registrasi)
    {
        session();
        $this->askModel->save([
            'id' => $id,
            'status_rekompersetujuan' => 4
        ]);

        return redirect()->to('/ask/approvepersetujuanizin');
    }


    public function approvepersetujuanizin()
    {
        session();
        if ($this->user) {
            $data = [
                'title' => 'Permohonan Angkutan Orang Tidak Dalam Trayek',
                'session' => $this->user,
                'validation' => \Config\Services::validation(),
                'ranmor' => $this->ranmorModel->getRanmor(),
                'ask' => $this->askModel->getAskptsp(),
            ];
            return view('ask/approvepersetujuanizin', $data);
        } else {
            return redirect()->to('login/login');
        }
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
                'ask' => $this->askModel->getAskptsp(),
            ];
            return view('ask/verifikasiaotdt', $data);
        } else {
            return redirect()->to('login/login');
        }
    }

    public function verifikasiaotdtdishub()
    {
        session();
        if ($this->user) {
            $data = [
                'title' => 'Permohonan Angkutan Orang Tidak Dalam Trayek',
                'session' => $this->user,
                'validation' => \Config\Services::validation(),
                'ranmor' => $this->ranmorModel->getRanmor(),
                'ask' => $this->askModel->getAskptspdishub(),
            ];
            return view('ask/verifikasiaotdtdishub', $data);
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

    public function permohonanizin()
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
            return view('ask/permohonanizin', $data);
        } else {
            return redirect()->to('login/login');
        }
    }

    public function penerbitanizin()
    {
        session();
        $id = $this->user['id'];
        if ($this->user) {
            $data = [
                'title' => 'Permohonan Angkutan Orang Tidak Dalam Trayek',
                'session' => $this->user,
                'validation' => \Config\Services::validation(),
                'ranmor' => $this->ranmorModel->getRanmor(),
                'ask' => $this->askModel->getAskDishubterbit($id),
            ];
            return view('ask/penerbitanizin', $data);
        } else {
            return redirect()->to('login/login');
        }
    }

    public function verifikasipenerbitanaotdt()
    {
        session();
        $id = $this->user['id'];
        if ($this->user) {
            $data = [
                'title' => 'Permohonan Angkutan Orang Tidak Dalam Trayek',
                'session' => $this->user,
                'validation' => \Config\Services::validation(),
                'ranmor' => $this->ranmorModel->getRanmor(),
                'ask' => $this->askModel->getAskptspterbit($id),
            ];
            return view('ask/verifikasipenerbitanaotdt', $data);
        } else {
            return redirect()->to('login/login');
        }
    }

    public function verifikasipenerbitandishub()
    {
        session();
        if ($this->user) {
            $data = [
                'title' => 'Permohonan Angkutan Orang Tidak Dalam Trayek',
                'session' => $this->user,
                'validation' => \Config\Services::validation(),
                'ranmor' => $this->ranmorModel->getRanmor(),
                'ask' => $this->askModel->getAskDishubVerifikasi()
            ];
            return view('ask/verifikasipenerbitandishub', $data);
        } else {
            return redirect()->to('login/login');
        }
    }

    public function approvepenerbitandishub()
    {
        session();
        if ($this->user) {
            $data = [
                'title' => 'Permohonan Angkutan Orang Tidak Dalam Trayek',
                'session' => $this->user,
                'validation' => \Config\Services::validation(),
                'ranmor' => $this->ranmorModel->getRanmor(),
                'ask' => $this->askModel->getAskDishubVerifikasi()
            ];
            return view('ask/approvepenerbitandishub', $data);
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

    public function detailverifikasipenerbitan($slug, $kode_registrasi)
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
            return view('ask/detailverifikasipenerbitan', $data);
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

    public function uploadPenolakanptsp($slug, $kode_registrasi)
    {
        session();
        if ($this->user) {
            $data = [
                'title' => 'Permohonan Angkutan Orang Tidak Dalam Trayek',
                'session' => $this->user,
                'validation' => \Config\Services::validation(),
                'ask' => $this->askModel->getAskptsp($kode_registrasi),
                'ranmor' => $this->ranmorModel->getAllRanmor($kode_registrasi),

            ];
            return view('ask/upload_penolakan_ptsp', $data);
        } else {
            return redirect()->to('login/login');
        }
    }

    public function uploadizin($slug, $kode_registrasi)
    {
        session();
        if ($this->user) {
            $data = [
                'title' => 'Permohonan Angkutan Orang Tidak Dalam Trayek',
                'session' => $this->user,
                'validation' => \Config\Services::validation(),
                'ask' => $this->askModel->getAskptsp($kode_registrasi),
                'ranmor' => $this->ranmorModel->getAllRanmor($kode_registrasi),

            ];
            return view('ask/uploadizinaotdt', $data);
        } else {
            return redirect()->to('login/login');
        }
    }

    public function uploadpenolakanizin($slug, $kode_registrasi)
    {
        session();
        if ($this->user) {
            $data = [
                'title' => 'Permohonan Angkutan Orang Tidak Dalam Trayek',
                'session' => $this->user,
                'validation' => \Config\Services::validation(),
                'ask' => $this->askModel->getAskptsp($kode_registrasi),
                'ranmor' => $this->ranmorModel->getAllRanmor($kode_registrasi),

            ];
            return view('ask/uploadpenolakanizin', $data);
        } else {
            return redirect()->to('login/login');
        }
    }

    public function savePenolakanptsp()
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

    public function saveuploadizin()
    {
        if (!$this->validate([
            'img_izin' => [
                'rules' => 'uploaded[img_izin]|max_size[img_izin,3068]|mime_in[img_izin,image/jpg,image/jpeg,image/png,application/pdf]',
                'errors' => [
                    'uploaded' => 'Pilih dokumen terlebih dahulu',
                    'max_size' => 'Ukuran dokumen terlalu besar (Maksimal 3Mb)',
                    'mime_in' => 'Format tidak sesuai',
                ],
            ],

        ])) {
            return redirect()->to('/ask/uploadizin/' . $this->request->getVar('slug') . '/' . $this->request->getVar('kode_registrasi') . '')->withInput();
        }

        $img_izin = $this->request->getFile('img_izin');

        if ($img_izin->getError() == 4) {
            $nama_img_izin = "default.png";
        } else {
            $nama_img_izin = $img_izin->getRandomName();
            $img_izin->move('img/img_izin', $nama_img_izin);
        }

        $slug = url_title($this->user['nama_perusahaan'], '-', true);

        $this->askModel->save([
            'id' => $this->request->getVar('id'),
            'img_izin' => $nama_img_izin,
        ]);

        return redirect()->to('/ask/uploadizin/' . $this->request->getVar('slug') . '/' . $this->request->getVar('kode_registrasi') . '');
    }

    public function saveuploadberitaacarapenerbitan()
    {
        if (!$this->validate([
            'img_penerbitan' => [
                'rules' => 'uploaded[img_penerbitan]|max_size[img_penerbitan,3068]|mime_in[img_penerbitan,image/jpg,image/jpeg,image/png,application/pdf]',
                'errors' => [
                    'uploaded' => 'Pilih dokumen terlebih dahulu',
                    'max_size' => 'Ukuran dokumen terlalu besar (Maksimal 3Mb)',
                    'mime_in' => 'Format tidak sesuai',
                ],
            ],

        ])) {
            return redirect()->to('/ask/uploadizin/' . $this->request->getVar('slug') . '/' . $this->request->getVar('kode_registrasi') . '')->withInput();
        }

        $img_penerbitan = $this->request->getFile('img_penerbitan');

        if ($img_penerbitan->getError() == 4) {
            $nama_img_penerbitan = "default.png";
        } else {
            $nama_img_penerbitan = $img_penerbitan->getRandomName();
            $img_penerbitan->move('img/img_penerbitan', $nama_img_penerbitan);
        }

        $slug = url_title($this->user['nama_perusahaan'], '-', true);

        $this->askModel->save([
            'id' => $this->request->getVar('id'),
            'img_penerbitan' => $nama_img_penerbitan,
        ]);

        return redirect()->to('/ask/uploadberitaacarapenerbitan/' . $this->request->getVar('slug') . '/' . $this->request->getVar('kode_registrasi') . '');
    }

    public function saveuploadpenolakanizin()
    {
        if (!$this->validate([
            'img_penolakan_izin' => [
                'rules' => 'uploaded[img_penolakan_izin]|max_size[img_penolakan_izin,3068]|mime_in[img_penolakan_izin,image/jpg,image/jpeg,image/png,application/pdf]',
                'errors' => [
                    'uploaded' => 'Pilih dokumen terlebih dahulu',
                    'max_size' => 'Ukuran dokumen terlalu besar (Maksimal 3Mb)',
                    'mime_in' => 'Format tidak sesuai',
                ],
            ],

        ])) {
            return redirect()->to('/ask/uploadpenolakanizin/' . $this->request->getVar('slug') . '/' . $this->request->getVar('kode_registrasi') . '')->withInput();
        }

        $img_penolakan_izin = $this->request->getFile('img_penolakan_izin');

        if ($img_penolakan_izin->getError() == 4) {
            $nama_img_penolakan_izin = "default.png";
        } else {
            $nama_img_penolakan_izin = $img_penolakan_izin->getRandomName();
            $img_penolakan_izin->move('img/img_penolakan_izin', $nama_img_penolakan_izin);
        }

        $slug = url_title($this->user['nama_perusahaan'], '-', true);

        $this->askModel->save([
            'id' => $this->request->getVar('id'),
            'img_penolakan_izin' => $nama_img_penolakan_izin,
        ]);

        return redirect()->to('/ask/uploadpenolakanizin/' . $this->request->getVar('slug') . '/' . $this->request->getVar('kode_registrasi') . '');
    }

    public function saveUploarekomendasi()
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


    public function uploadPersetujuanptsp($slug, $kode_registrasi)
    {
        session();
        if ($this->user) {
            $data = [
                'title' => 'Permohonan Angkutan Orang Tidak Dalam Trayek',
                'session' => $this->user,
                'validation' => \Config\Services::validation(),
                'ask' => $this->askModel->getAskptsp($kode_registrasi),
                'ranmor' => $this->ranmorModel->getAllRanmor($kode_registrasi),

            ];
            return view('ask/upload_persetujuan_ptsp', $data);
        } else {
            return redirect()->to('login/login');
        }
    }

    public function uploadberitaacara($slug, $kode_registrasi)
    {
        session();
        if ($this->user) {
            $data = [
                'title' => 'Permohonan Angkutan Orang Tidak Dalam Trayek',
                'session' => $this->user,
                'validation' => \Config\Services::validation(),
                'ask' => $this->askModel->getAskptsp($kode_registrasi),
                'ranmor' => $this->ranmorModel->getAllRanmor($kode_registrasi),

            ];
            return view('ask/uploadberitaacara', $data);
        } else {
            return redirect()->to('login/login');
        }
    }

    public function uploadberitaacarapenerbitan($slug, $kode_registrasi)
    {
        session();
        if ($this->user) {
            $data = [
                'title' => 'Permohonan Angkutan Orang Tidak Dalam Trayek',
                'session' => $this->user,
                'validation' => \Config\Services::validation(),
                'ask' => $this->askModel->getAskptsp($kode_registrasi),
                'ranmor' => $this->ranmorModel->getAllRanmor($kode_registrasi),

            ];
            return view('ask/uploadberitaacarapenerbitan', $data);
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
                'ask' => $this->askModel->getAskptsp($kode_registrasi),
                'ranmor' => $this->ranmorModel->getAllRanmor($kode_registrasi),

            ];
            return view('ask/uploadrekomendasi', $data);
        } else {
            return redirect()->to('login/login');
        }
    }

    public function savepersetujuanptsp()
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

    public function saveberitaacara()
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
            return redirect()->to('/ask/uploadpersetujuanptsp/' . $this->request->getVar('slug') . '/' . $this->request->getVar('kode_registrasi') . '')->withInput();
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

        return redirect()->to('/ask/uploadberitaacara/' . $this->request->getVar('slug') . '/' . $this->request->getVar('kode_registrasi') . '');
    }

    public function uploadpersetujuan()
    {
        if (!$this->validate([
            'img_penolakan_permohonan' => [
                'rules' => 'uploaded[img_penolakan_permohonan]|max_size[img_penolakan_permohonan,3068]|mime_in[img_penolakan_permohonan,image/jpg,image/jpeg,image/png,application/pdf]',
                'errors' => [
                    'uploaded' => 'Pilih dokumen terlebih dahulu',
                    'max_size' => 'Ukuran dokumen terlalu besar (Maksimal 3Mb)',
                    'mime_in' => 'Format tidak sesuai',
                ],
            ],

        ])) {
            return redirect()->to('/ask/ajukanpermohonan/' . $this->request->getVar('slug') . '/' . $this->request->getVar('kode_registrasi') . '')->withInput();
        }

        $img_penolakan_permohonan = $this->request->getFile('img_penolakan_permohonan');

        if ($img_penolakan_permohonan->getError() == 4) {
            $nama_img_penolakan_permohonan = "default.png";
        } else {
            $nama_img_penolakan_permohonan = $img_penolakan_permohonan->getRandomName();
            $img_penolakan_permohonan->move('img/img_penolakan_permohonan', $nama_img_penolakan_permohonan);
        }

        $slug = url_title($this->user['nama_perusahaan'], '-', true);

        $this->askModel->save([
            'id' => $this->request->getVar('id'),
            'img_penolakan_permohonan' => $nama_img_penolakan_permohonan,
        ]);

        return redirect()->to('/ask/ajukanpermohonan/' . $this->request->getVar('slug') . '/' . $this->request->getVar('kode_registrasi') . '');
    }
}
