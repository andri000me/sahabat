<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends model
{
    protected $table      = 'user';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['img_akte_perusahaan', 'img_izin_angkutan', 'img_tdp', 'img_npwp', 'img_ktp_direktur', 'img_siup', 'img_nib', 'nik_direktur', 'nama_direktur', 'alamat', 'nama', 'email', 'hp', 'role', 'password', 'img_ktp_direktur', 'nama_perusahaan'];

    public function getUser($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->findAll();
    }
}
