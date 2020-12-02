<?php

namespace App\Controllers;

use App\Models\TrayekModel;
use App\Models\LoginModel;

class Trayek extends BaseController
{
    protected $trayekModel;
    protected $user;
    protected $loginModel;

    public function __construct()
    {
        $this->trayekModel = new TrayekModel();
        $this->loginModel = new LoginModel();
        $this->session = session();
        $this->user = $this->loginModel->where('email', $this->session->get('email'))->first();
    }

    public function index()
    {
        if ($this->user) {
            $trayek = $this->trayekModel->findAll();
            $data = [
                'title' => 'Data Trayek',
                'trayek' => $trayek,
                'session' => $this->user
            ];
            return view('/trayek/index', $data);
        } else {
            return redirect()->to('/login/login');
        }
    }

    public function trayekinfo()
    {

        $trayek = $this->trayekModel->findAll();
        $data = [
            'title' => 'Data Trayek',
            'trayek' => $trayek,
            'session' => $this->user
        ];
        return view('/trayek/trayekinfo', $data);
    }

    public function admintrayek()
    {

        $trayek = $this->trayekModel->findAll();
        $data = [
            'title' => 'Data Trayek',
            'trayek' => $trayek,
            'session' => $this->user
        ];
        return view('/trayek/admintrayek', $data);
    }

    public function edittrayek($kd)
    {

        $data = [
            'title' => 'Data Trayek',
            'trayek' => $this->trayekModel->getTrayekEdit($kd),
            'session' => $this->user
        ];
        return view('/trayek/edittrayek', $data);
    }

    public function saveedit()
    {
        $this->trayekModel->save([
            'id' => $this->request->getVar('id'),
            'kode_trayek' => $this->request->getVar('kode_trayek'),
            'trayek' => $this->request->getVar('trayek'),
            'kuota' => $this->request->getVar('kuota'),
            'terisi' => $this->request->getVar('terisi'),
            'asal' => $this->request->getVar('asal'),
            'tujuan' => $this->request->getVar('tujuan'),
        ]);

        return redirect()->to('/trayek/admintrayek');
    }
}
