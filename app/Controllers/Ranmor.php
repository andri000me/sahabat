<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\AskModel;
use App\Models\RanmorModel;


class Ranmor extends BaseController
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

    public function save()
    {
        if (!$this->validate([
            'img_ranmor' => [
                'rules' => 'uploaded[img_ranmor]|max_size[img_ranmor,3068]|mime_in[img_ranmor,image/jpg,image/jpeg,image/png,application/pdf]',
                'errors' => [
                    'uploaded' => 'Pilih dokumen terlebih dahulu',
                    'max_size' => 'Ukuran dokumen terlalu besar (Maksimal 3Mb)',
                    'mime_in' => 'Format tidak sesuai',
                ],
            ],

        ])) {
            return redirect()->to('/ask/lengkapiBerkas/' . $this->request->getVar('slug') . '/' . $this->request->getVar('kode_registrasi') . '')->withInput();
        }

        $img_ranmor = $this->request->getFile('img_ranmor');

        if ($img_ranmor->getError() == 4) {
            $nama_img_ranmor = "default.png";
        } else {
            $nama_img_ranmor = $img_ranmor->getRandomName();
            $img_ranmor->move('img/img_ranmor', $nama_img_ranmor);
        }

        $slug = url_title($this->user['nama_perusahaan'], '-', true);

        $this->ranmorModel->save([
            'ask_kode_registrasi' => $this->request->getVar('kode_registrasi'),
            'nomor_kendaraan' => $this->request->getVar('nomor_kendaraan'),
            'nomor_uji' => $this->request->getVar('nomor_uji'),
            'kapasitas' => $this->request->getVar('kapasitas'),
            'img_ranmor' => $nama_img_ranmor,
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
                'ask' => $this->askModel->getAsk($kode_registrasi),
            ];
            return view('ask/lengkapi_berkas', $data);
        } else {
            return redirect()->to('login/login');
        }
    }

    public function hapus($id, $slug, $kode_registrasi)
    {
        $this->ranmorModel->delete([
            'id' => $id,
        ]);

        return redirect()->to("/ask/lengkapiBerkas/$slug/$kode_registrasi");
    }
}
