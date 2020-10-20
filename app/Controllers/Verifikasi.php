<?php

namespace App\Controllers;

use App\Models\VerifikasiModel;
use App\Models\LoginModel;
use App\Models\MsgPenolakanModel;
use chillerlan\QRCode\QRCode;


class Verifikasi extends BaseController
{
    protected $verifikasiModel;
    protected $user;
    protected $loginModel;
    protected $msgPenolakanModel;

    public function __construct()
    {
        $this->verifikasiModel = new VerifikasiModel();
        $this->msgPenolakanModel = new MsgPenolakanModel();
        $this->loginModel = new LoginModel();
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
        $data = [
            'title' => 'Data Permohonan',
            'permohonan' => $this->verifikasiModel->getRekomendasiVerifikasi(),
            'session' => $this->user
        ];
        return view('verifikasi/rekomendasi', $data);
    }

    public function terverifikasi()
    {
        if ($this->user['role'] == 4) {
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

    public function cetak($kd)
    {
        $detail = $this->verifikasiModel->getRekomendasi($kd);
        $kdb = $detail['kode_booking'];

        // quick and simple:
        $qrcode = '<img src="' . (new QRCode)->render($kdb) . '" alt="QR Code" />';

        $data = [
            'title' => 'Cetak Permohonan',
            'detail' => $this->verifikasiModel->getRekomendasi($kd),
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
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil dikirim, mengunngu verivikasi</div>');
        return redirect()->to('/verifikasi/terverifikasi/');
    }
}
