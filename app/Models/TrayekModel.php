<?php

namespace App\Models;

use CodeIgniter\Model;

class TrayekModel extends model
{
    protected $table      = 'trayek';
    protected $primaryKey = 'kode_trayek';
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'kode_trayek', 'trayek', 'kuouta', 'terisi', 'asal', 'tujuan'];

    public function getTrayek($kdt = false)
    {
        if ($kdt == false) {
            $this->db->table('trayek');
            $this->select('*');
            $this->where('kuota != 0');
            return $this->findAll();
        } else {
            return $this->where(['kode_trayek' => $kdt])->first();
        }
    }

    public function getTrayekEdit($kdt = false)
    {
        if ($kdt == false) {
            $this->db->table('trayek');
            $this->select('*');
            return $this->findAll();
        } else {
            return $this->where(['id' => $kdt])->first();
        }
    }
}
