<?php

namespace App\Controllers;

use App\Models\LoginModel;


class API extends BaseController
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

        $data = [
            'title' => 'Cek Kartu Pengawasan',
            'session' => $this->user
        ];
        return view('api/cek_kartu_pengawasan', $data);
    }
}
