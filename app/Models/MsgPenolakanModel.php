<?php

namespace App\Models;

use CodeIgniter\Model;

class MsgPenolakanModel extends model
{
    protected $table      = 'msg_penolakan';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['kode_booking', 'msg'];


    public function getMsgPenolakan($kd = false)
    {
        if ($kd == false) {
            return $this->findAll();
        }

        return $this->where(['kode_booking' => $kd])->findAll();
    }
}
