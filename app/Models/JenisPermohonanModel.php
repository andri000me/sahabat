<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisPermohonanModel extends model
{
    protected $table      = 'jenis_permohonan';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;

    public function getJenisPermohonan($kdp = false)
    {
        if ($kdp == false) {
            return $this->findAll();
        }

        return $this->where(['kode' => $kdp])->first();
    }

    public function getPemohon()
    {
        $this->db->table('user');
        $this->select('*');
        $this->where(['role' => 0]);
        $query = $this->findAll();
        return $query;
    }
}
