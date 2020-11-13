<?php

namespace App\Controllers;

use App\Models\LoginModel;


class ASK extends BaseController
{
    protected $loginModel;

    public function __construct()
    {
        $this->loginModel = new LoginModel();
        $this->session = session();
        $this->user = $this->loginModel->where('email', $this->session->get('email'))->first();
    }

    public function index()
    {
        if ($this->user) {
            $data = [
                'title' => 'Permohonan Angkutan Orang Tidak Dalam Trayek',
                'session' => $this->user
            ];
            return view('ask/permohonan_aodt', $data);
        } else {
            return redirect()->to('login/login');
        }
    }
}
