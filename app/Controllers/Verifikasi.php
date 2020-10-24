<?php

namespace App\Controllers;

use App\Models\VerifikasiModel;
use App\Models\LoginModel;
use App\Models\MsgPenolakanModel;
use App\Models\JenisPermohonanModel;
use App\Models\TrayekModel;
use chillerlan\QRCode\QRCode;


class Verifikasi extends BaseController
{
    protected $verifikasiModel;
    protected $user;
    protected $loginModel;
    protected $msgPenolakanModel;
    protected $jenisPermohonanModel;
    protected $trayekModel;

    public function __construct()
    {
        $this->verifikasiModel = new VerifikasiModel();
        $this->msgPenolakanModel = new MsgPenolakanModel();
        $this->loginModel = new LoginModel();
        $this->jenisPermohonanModel = new JenisPermohonanModel();
        $this->trayekModel = new TrayekModel();
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

    public function detail($kd)
    {
        $data = [
            'title' => 'Detail Data Permohonan',
            'detail' => $this->verifikasiModel->getRekomendasi($kd),
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
        $nama = $detail['nama_pemohon'];
        $nomor = $detail['nomor_kendaraan'];
        $jenis = $detail['jenis_permohonan'];
        $masa_berlaku = $detail['masa_berlaku'];

        $qr = '' . $nama . ' - ' . $nomor . ' - ' . 'Izin Trayek Angkutan Sampai Dengan' . ' ' . $masa_berlaku;

        // quick and simple:
        $qrcode = '<img width="150" src="' . (new QRCode)->render($qr) . '" alt="QR Code" />';

        $data = [
            'title' => 'Cetak Permohonan',
            'detail' => $this->verifikasiModel->getRekomendasi($kd),
            'jenis' => $this->jenisPermohonanModel->getJenisPermohonan($kdp),
            'trayek' => $this->trayekModel->getTrayek($kdt),
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
}
