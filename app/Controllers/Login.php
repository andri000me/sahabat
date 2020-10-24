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
            'session' => $this->user,
        ];

        return view('auth/index', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah User',
            'session' => $this->user,
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
                        'isLoggedIn' => true,
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
        return redirect()->to('/login/login');
    }

    public function home()
    {
        $this->user = $this->loginModel->where('email', $this->session->get('email'))->first();
        $data = [
            'title' => 'Home Page',
            'session' => $this->user,
        ];

        return view('home/home', $data);
    }

    public function berkas()
    {
        session();
        $this->user = $this->loginModel->where('email', $this->session->get('email'))->first();
        $data = [
            'title' => 'Berkas Perusahaan',
            'session' => $this->user,
        ];

        return view('auth/berkas_perusahaan', $data);
    }

    public function saveBerkas()
    {

        $img_akte = $this->request->getFile('img_akte');
        if ($img_akte) {
            if ($img_akte->getError() == 4) {
                $nama_img_akte = $this->request->getVar('img_akte_lama');
            } else {
                $nama_img_akte = $img_akte->getRandomName();
                $img_akte->move('img/img_akte_perusahaan', $nama_img_akte);
                if ($this->request->getVar('img_akte_lama')) {
                    unlink('img/img_akte_perusahaan/' . $this->request->getVar('img_akte_lama'));
                } else {
                }
            }
        }
        $img_izin_angkutan = $this->request->getFile('img_izin_angkutan');
        if ($img_izin_angkutan) {
            if ($img_izin_angkutan->getError() == 4) {
                $nama_img_izin_angkutan = $this->request->getVar('img_izin_angkutan_lama');
            } else {
                $nama_img_izin_angkutan = $img_izin_angkutan->getRandomName();
                $img_izin_angkutan->move('img/img_izin_angkutan', $nama_img_izin_angkutan);
                if ($this->request->getVar('img_izin_angkutan_lama')) {
                    unlink('img/img_izin_angkutan/' . $this->request->getVar('img_izin_angkutan_lama'));
                } else {
                }
            }
        }
        $img_tdp = $this->request->getFile('img_tdp');
        if ($img_tdp) {
            if ($img_tdp->getError() == 4) {
                $nama_img_tdp = $this->request->getVar('img_tdp_lama');
            } else {
                $nama_img_tdp = $img_tdp->getRandomName();
                $img_tdp->move('img/img_tdp', $nama_img_tdp);
                if ($this->request->getVar('img_tdp_lama')) {
                    unlink('img/img_tdp/' . $this->request->getVar('img_tdp_lama'));
                } else {
                }
            }
        }
        $img_ktp = $this->request->getFile('img_ktp_direktur');
        if ($img_ktp) {
            if ($img_ktp->getError() == 4) {
                $nama_img_ktp_direktur = $this->request->getVar('img_ktp_direktur_lama');
            } else {
                $nama_img_ktp_direktur = $img_ktp->getRandomName();
                $img_ktp->move('img/img_ktp_direktur', $nama_img_ktp_direktur);
                if ($this->request->getVar('_direktur_lama')) {
                    unlink('img/img_ktp_direktur/' . $this->request->getVar('img_ktp_direktur_lama'));
                } else {
                }
            }
        }
        $img_npwp = $this->request->getFile('img_npwp');
        if ($img_npwp) {
            if ($img_npwp->getError() == 4) {
                $nama_img_npwp = $this->request->getVar('img_npwp_lama');
            } else {
                $nama_img_npwp = $img_npwp->getRandomName();
                $img_npwp->move('img/img_npwp', $nama_img_npwp);
                if ($this->request->getVar('img_npwp_lama')) {
                    unlink('img/img_npwp/' . $this->request->getVar('img_npwp_lama'));
                } else {
                }
            }
        }
        $img_siup = $this->request->getFile('img_siup');
        if ($img_siup) {
            if ($img_siup->getError() == 4) {
                $nama_img_siup = $this->request->getVar('img_siup_lama');
            } else {
                $nama_img_siup = $img_siup->getRandomName();
                $img_siup->move('img/img_siup', $nama_img_siup);
                if ($this->request->getVar('img_siup_lama')) {
                    unlink('img/img_siup/' . $this->request->getVar('img_siup_lama'));
                } else {
                }
            }
        }
        $img_nib = $this->request->getFile('img_nib');
        if ($img_nib) {
            if ($img_nib->getError() == 4) {
                $nama_img_nib = $this->request->getVar('img_nib_lama');
            } else {
                $nama_img_nib = $img_nib->getRandomName();
                $img_nib->move('img/img_nib', $nama_img_nib);
                if ($this->request->getVar('img_nib_lama')) {
                    unlink('img/img_nib/' . $this->request->getVar('img_nib_lama'));
                } else {
                }
            }
        }

        // $kapasitas = $this->request->getVar('kapasitas_angkutan') . " Orang +" . $this->request->getVar('kapasitas_angkutan') . " Kg Barang";
        $id = $this->request->getVar('id');
        $this->loginModel->save([
            'id' => $id,
            'img_akte_perusahaan' => $nama_img_akte,
            'img_izin_angkutan' => $nama_img_izin_angkutan,
            'img_tdp' => $nama_img_tdp,
            'img_ktp_direktur' => $nama_img_ktp_direktur,
            'img_npwp' => $nama_img_npwp,
            'img_siup' => $nama_img_siup,
            'img_nib' => $nama_img_nib,
            'nik_direktur' => $this->request->getVar('nik_direktur'),
            'nama_direktur' => $this->request->getVar('nama_direktur'),
            'nama_perusahaan' => $this->request->getVar('nama_perusahaan'),
            'hp' => $this->request->getVar('hp'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat'),
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Berhasil update data</div>');
        return redirect()->to('/login/berkas/');
    }
}
