<?php

namespace App\Models;

use CodeIgniter\Model;

class TrayekModel extends model
{
    protected $table      = 'trayek';
    protected $primaryKey = 'kode_trayek';
    protected $useTimestamps = true;

    public function getTrayek($kdt = false)
    {
        if ($kdt == false) {
            return $this->findAll();
        }

        return $this->where(['kode_trayek' => "$kdt"])->first();
    }
}
