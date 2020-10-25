<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends model
{
    protected $table      = 'user';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;

    public function getPemohon()
    {
        $this->db->table('user');
        $this->select('*');
        $this->where(['role' => 0]);
        $query = $this->findAll();
        return $query;
    }
}
