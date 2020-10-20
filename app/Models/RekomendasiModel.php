<?php

namespace App\Models;

use CodeIgniter\Model;

class RekomendasiModel extends model
{
    protected $table      = 'jenis_permohonan';
    protected $primaryKey = 'kode';
    protected $useTimestamps = true;

    public function getJenisPermohonan()
    {
        return $this->findAll();
    }
}
