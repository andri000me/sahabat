<?php

namespace App\Models;

use CodeIgniter\Model;

class AsalTujuanModel extends model
{
    protected $table = 'wilayah';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    // protected $allowedFields = ['nama', 'email', 'hp', 'role', 'password'];

    public function getWilayah($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function getCetakById($id)
    {
        $this->select('*');
        $this->from('permohonan_kabkota');
        $this->where('permohonan_kabkota.id', $id);
        return $this->first();
    }
}
