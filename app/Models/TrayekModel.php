<?php

namespace App\Models;

use CodeIgniter\Model;

class TrayekModel extends model
{
    protected $table      = 'trayek';
    protected $primaryKey = 'kode_trayek';
    protected $useTimestamps = true;

    public function getTrayek()
    {
        return $this->findAll();
    }
}
