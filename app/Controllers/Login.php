<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Login extends BaseController
{
    protected $loginModel;
    protected $user;
    protected $email;
    public function __construct()
    {
        $this->loginModel = new LoginModel();
        $this->validation = \Config\Services::validation();
        $this->session = session();
        $this->user = $this->loginModel->where('email', $this->session->get('email'))->first();
    }

    public function index()
    {
        $data = [
            'title' => 'Data User',
            'user' => $this->loginModel->getUser(),
            'session' => $this->user
        ];

        return view('auth/index', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah User',
            'session' => $this->user
        ];

        return view('auth/tambah', $data);
    }

    public function tambahUser()
    {
        $this->loginModel->save([
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'hp' => $this->request->getVar('hp'),
            'role' => $this->request->getVar('role'),
        ]);

        return redirect()->to('/login' . $this->request->getVar('kdb') . '');
    }

    public function login()
    {
        $user = $this->loginModel->where('email', $this->session->get('email'))->first();
        if ($user) {
            return redirect()->to('/login/home');
        }
        $data = [
            'title' => 'Data Login',
        ];

        return view('auth/login', $data);
    }

    public function masuk()
    {
        if ($this->request->getVar()) {
            //lakukan validasi untuk data yang di Var
            $data = $this->request->getVar();
            // $validate = $this->validation->run($data, 'masuk');
            $errors = $this->validation->getErrors();

            if ($errors) {
                return view('auth/login');
            }

            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');

            $user = $this->loginModel->where('email', $email)->first();

            if ($user) {
                if (!password_verify($password, $user['password'])) {
                    session()->setFlashdata('msg', '<div class="alert alert-danger" role="alert">Password salah </div>');
                } else {
                    $sessData = [
                        'email' => $user['email'],
                        'role' => $user['role'],
                        'isLoggedIn' => TRUE
                    ];

                    $this->session->set($sessData);

                    return redirect()->to('/login/home');
                }
            } else {
                session()->setFlashdata('msg', '<div class="alert alert-danger" role="alert">User tidak ditemukan</div>');
            }
        }
        return view('auth/login');
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/');
    }

    public function home()
    {
        $this->user = $this->loginModel->where('email', $this->session->get('email'))->first();
        $data = [
            'title' => 'Home Page',
            'session' => $this->user
        ];

        return view('home/home', $data);
    }
}
