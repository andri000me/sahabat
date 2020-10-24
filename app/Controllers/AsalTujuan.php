<?php

namespace App\Controllers;

use App\Models\AsalTujuanModel;
use App\Models\KoperasiModel;
use App\Models\LoginModel;
use App\Models\MsgPenolakanModel;
use App\Models\RekomendasiModel;
use App\Models\TrayekModel;
use App\Models\VerifikasiModel;

class AsalTujuan extends BaseController
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

    public function cetakPohuwato($id)
    {
        $data = [
            'title' => 'Koperasi',
            'session' => $this->user,
            'cetak' => $this->asalTujuanModel->getCetakById($id),
        ];
        return view('koperasi/cetak_pohuwato', $data);

    }
}
