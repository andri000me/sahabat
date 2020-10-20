<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends model
{
    protected $table      = 'user';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'email', 'hp', 'role', 'password'];

    public function getUser($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->findAll();
    }
}
