<?php

namespace App\Controllers;

use App\Models\VerifikasiModel;
use App\Models\LoginModel;
use App\Models\MsgPenolakanModel;
use App\Models\JenisPermohonanModel;
use App\Models\TrayekModel;
use App\Models\KoperasiModel;
use chillerlan\QRCode\QRCode;


class Verifikasi extends BaseController
{
    protected $verifikasiModel;
    protected $user;
    protected $loginModel;
    protected $msgPenolakanModel;
    protected $jenisPermohonanModel;
    protected $trayekModel;
    protected $koperasiModel;

    public function __construct()
    {
        $this->verifikasiModel = new VerifikasiModel();
        $this->msgPenolakanModel = new MsgPenolakanModel();
        $this->loginModel = new LoginModel();
        $this->jenisPermohonanModel = new JenisPermohonanModel();
        $this->trayekModel = new TrayekModel();
        $this->koperasiModel = new KoperasiModel();
        $this->session = session();
        $this->user = $this->loginModel->where('email', $this->session->get('email'))->first();
    }

    public function verifikasi()
    {
        $data = [
            'title' => 'Proses Verifikasi',
            'session' => $this->user
        ];
        return view('verifikasi/verifikasi', $data);
    }

    public function rekomendasi()
    {
        if ($this->user['role'] == 2) {
            $data = [
                'title' => 'Data Permohonan',
                'permohonan' => $this->verifikasiModel->getRekomendasiVerifikasi(),
                'session' => $this->user
            ];
            return view('verifikasi/rekomendasi', $data);
        } else {
            return view('blank');
        }
    }

    public function verifikasiptsp()
    {
        if ($this->user) {
            $data = [
                'title' => 'Data Permohonan',
                'permohonan' => $this->verifikasiModel->getRekomendasiVerifikasi(),
                'session' => $this->user
            ];
            return view('verifikasi/verifikasiptsp', $data);
        } else {
            return view('blank');
        }
    }

    public function approverekomendasi()
    {
        if ($this->user) {
            $data = [
                'title' => 'Data Permohonan',
                'permohonan' => $this->verifikasiModel->getRekomendasiVerifikasi(),
                'session' => $this->user
            ];
            return view('verifikasi/approverekomendasi', $data);
        } else {
            return view('blank');
        }
    }

    public function terverifikasi()
    {
        if ($this->user['role'] == 4 or $this->user['role'] == 3) {
            $data = [
                'title' => 'Data Permohonan',
                'permohonan' => $this->verifikasiModel->getRekomendasiterVerifikasi(),
                'session' => $this->user
            ];
            return view('verifikasi/terverifikasi', $data);
        } else {
            return view('blank');
        }
    }

    public function blank()
    {
        return view('blank');
    }

    public function uploadIzinTrayek($id, $kdp, $kdt)
    {
        session();

        $data = [
            'title' => 'Detail Data Permohonan',
            'detail' => $this->verifikasiModel->getRekomendasi($id),
            'trayek' => $this->trayekModel->getTrayek($kdt),
            'session' => $this->user,
            'validation' => \Config\Services::validation(),

        ];
        return view('rekomendasi/uploadIzinTrayek', $data);
    }

    public function uploadpengantarptsp($id, $ids)
    {
        session();
        $asal = $this->koperasiModel->where('id', $ids)->first();
        $kdt = $asal['trayek_dilayani'];
        $data = [
            'title' => 'Detail Data Permohonan',
            'detail' => $this->verifikasiModel->getRekomendasi($id),
            'trayek' => $this->trayekModel->getTrayek($kdt),
            'session' => $this->user,
            'validation' => \Config\Services::validation(),

        ];
        return view('verifikasi/uploadpengantarptsp', $data);
    }

    public function cetakKP($id, $kdp, $kdt)
    {
        session();

        $no_regis = $this->verifikasiModel->getRekomendasi($id);

        $qr = $no_regis['kode_booking'];

        // quick and simple:
        $qrcode = '<img width="170" src="' . (new QRCode)->render($qr) . '" alt="QR Code" />';

        $data = [
            'title' => 'Detail Data Permohonan',
            'detail' => $this->verifikasiModel->getRekomendasi($id),
            // 'jenis' => $this->jenisPermohonanModel->getJenisPermohonan($kdp),
            'trayek' => $this->trayekModel->getTrayek($kdt),
            'session' => $this->user,
            'qr' => $qrcode
        ];
        return view('verifikasi/cetakKP', $data);
    }

    public function details($id, $tr)
    {
        $data = [
            'title' => 'Detail Data Permohonan',
            'detail' => $this->verifikasiModel->getRekomendasi($id),
            'at' => $this->koperasiModel->getKoperasiVer($tr),
            'session' => $this->user
        ];
        return view('verifikasi/detailRekomendasi', $data);
    }

    public function detailTerverifikasi($kd)
    {
        $data = [
            'title' => 'Detail Data Permohonan',
            'detail' => $this->verifikasiModel->getRekomendasi($kd),
            'session' => $this->user
        ];
        return view('verifikasi/detailTerverifikasi', $data);
    }

    public function cetak($kd, $kdp, $kdt)
    {
        $detail = $this->verifikasiModel->getRekomendasi($kd);
        $nama = $detail['nama_perusahaan'];
        $nomor = $detail['nomor_kendaraan'];
        $jenis = $detail['jenis_permohonan'];
        $masa_berlaku = $detail['masa_berlaku'];

        $qr = '' . $nama . ' - ' . $nomor . ' - ' . 'Izin Trayek Angkutan Sampai Dengan' . ' ' . $masa_berlaku;

        // quick and simple:
        $qrcode = '<img width="150" src="' . (new QRCode)->render($qr) . '" alt="QR Code" />';
        $at = $this->koperasiModel->getKoperasiVer($kdt);
        $kode_trayek = $at['trayek_dilayani'];

        $data = [
            'title' => 'Cetak Permohonan',
            'detail' => $this->verifikasiModel->getRekomendasi($kd),
            'count' => $this->verifikasiModel->getRekomendasi(),
            'jenis' => $this->jenisPermohonanModel->getJenisPermohonan($kdp),
            'trayek' => $this->trayekModel->getTrayek($kode_trayek),
            'session' => $this->user,
            'qrq' => $qrcode
        ];
        return view('verifikasi/cetak', $data);
    }

    public function terima($id)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_verifikasi' => 1,
            'masa_berlaku' => $this->request->getVar('masa_berlaku_submit'),
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil dikirim, mengunngu verivikasi</div>');
        return redirect()->to('/verifikasi/rekomendasi/');
    }

    public function saveUploadIzinTrayek()
    {

        $img_izin_trayek = $this->request->getFile('img_izin_trayek');
        $kode_booking = $this->request->getVar('kode_booking');
        $jenis_permohonan = $this->request->getVar('jenis_permohonan');
        $trayek_dilayani = $this->request->getVar('trayek_dilayani');

        if (!$this->validate([
            'img_izin_trayek' => [
                'rules' => 'uploaded[img_izin_trayek]|max_size[img_izin_trayek,1024]|is_image[img_izin_trayek]|mime_in[img_izin_trayek,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                    'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                    'is_image' => 'Ini bukan gambar',
                    'mime_in' => 'Ini bukan gambar'
                ]
            ],
        ])) {
            return redirect()->to('/verifikasi/uploadIzinTrayek/' . $kode_booking . '/' . $jenis_permohonan . '/' . $trayek_dilayani . '')->withInput();
        }

        if ($img_izin_trayek) {

            if ($img_izin_trayek->getError() == 4) {
                $nama_img_izin_trayek = $this->request->getVar('img_izin_trayek_lama');
            } else {
                $nama_img_izin_trayek = $img_izin_trayek->getRandomName();
                $img_izin_trayek->move('img/img_izin_trayek', $nama_img_izin_trayek);
                if ($this->request->getVar('img_izin_trayek_lama')) {
                    unlink('img/img_izin_trayek/' . $this->request->getVar('img_izin_trayek_lama'));
                } else {
                }
            }
        }
        $this->verifikasiModel->save([
            'id' => $this->request->getVar('id'),
            'img_izin_trayek' => $nama_img_izin_trayek,
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Berhasil Di Upload</div>');
        return redirect()->to('/rekomendasi/rekomendasi/');
    }

    public function saveuploadpengantarptsp()
    {

        $img_pengantar_ptsp = $this->request->getFile('img_pengantar_ptsp');
        $kode_booking = $this->request->getVar('kode_booking');
        $jenis_permohonan = $this->request->getVar('jenis_permohonan');
        $trayek_dilayani = $this->request->getVar('trayek_dilayani');

        if (!$this->validate([
            'img_pengantar_ptsp' => [
                'rules' => 'uploaded[img_pengantar_ptsp]|max_size[img_pengantar_ptsp,1024]|is_image[img_pengantar_ptsp]|mime_in[img_pengantar_ptsp,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                    'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                    'is_image' => 'Ini bukan gambar',
                    'mime_in' => 'Ini bukan gambar'
                ]
            ],
        ])) {
            return redirect()->to('/verifikasi/uploadIzinTrayek/' . $kode_booking . '/' . $jenis_permohonan . '/' . $trayek_dilayani . '')->withInput();
        }

        if ($img_pengantar_ptsp) {

            if ($img_pengantar_ptsp->getError() == 4) {
                $nama_img_pengantar_ptsp = $this->request->getVar('img_pengantar_ptsp_lama');
            } else {
                $nama_img_pengantar_ptsp = $img_pengantar_ptsp->getRandomName();
                $img_pengantar_ptsp->move('img/img_pengantar_ptsp', $nama_img_pengantar_ptsp);
                if ($this->request->getVar('img_pengantar_ptsp_lama')) {
                    unlink('img/img_pengantar_ptsp/' . $this->request->getVar('img_pengantar_ptsp_lama'));
                } else {
                }
            }
        }
        $this->verifikasiModel->save([
            'id' => $this->request->getVar('id'),
            'img_pengantar_ptsp' => $nama_img_pengantar_ptsp,
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Berhasil Di Upload</div>');
        return redirect()->to('/verifikasi/verifikasiptsp/');
    }

    public function tolak($id)
    {
        $this->msgPenolakanModel->save([
            'kode_booking' => $this->request->getVar('kode_booking'),
            'msg' => $this->request->getVar('msg'),
        ]);

        $this->verifikasiModel->save([
            'id' => $id,
            'status_verifikasi' => 3,
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil dikirim, mengunngu verivikasi</div>');
        return redirect()->to('/verifikasi/rekomendasi/');
    }
    public function approve($id)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_verifikasi' => 2,
            'tgl_approve' => date('Y-m-d'),
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil dikirim, mengunngu verivikasi</div>');
        return redirect()->to('/verifikasi/terverifikasi/');
    }

    public function terimaptsp($id)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_verifikasi' => 1,
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil dikirim, mengunngu verivikasi</div>');
        return redirect()->to('/verifikasi/verifikasiptsp/');
    }
    public function tolakptsp($id, $idasal)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_verifikasi' => 4,
        ]);

        $this->koperasiModel->save([
            'id' => $idasal,
            'used' => 0,
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil dikirim, mengunngu verivikasi</div>');
        return redirect()->to('/verifikasi/verifikasiptsp/');
    }

    public function terimaverifikator($id)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_verifikasi' => 2,
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil dikirim, mengunngu verivikasi</div>');
        return redirect()->to('/verifikasi/rekomendasi/');
    }
    public function tolakverifikator($id, $idasal)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_verifikasi' => 4,
        ]);

        $this->koperasiModel->save([
            'id' => $idasal,
            'used' => 0,
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil dikirim, mengunngu verivikasi</div>');
        return redirect()->to('/verifikasi/rekomendasi/');
    }

    public function saveapprove($id)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_verifikasi' => 3,
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil dikirim, mengunngu verivikasi</div>');
        return redirect()->to('/verifikasi/approverekomendasi/');
    }
    public function tolaksaveapprove($id, $idasal)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_verifikasi' => 4,
        ]);

        $this->koperasiModel->save([
            'id' => $idasal,
            'used' => 0,
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil dikirim, mengunngu verivikasi</div>');
        return redirect()->to('/verifikasi/approverekomendasi/');
    }
}
