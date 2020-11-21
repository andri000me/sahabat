<?php

namespace App\Models;

use CodeIgniter\Model;

class MsgPenolakanModel extends model
{
    protected $table      = 'msg_penolakan';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['kode_booking', 'status', 'msg', 'img', 'created_at', 'updated_at'];


    public function getMsgPenolakan($asal, $id)
    {
        $this->db->table('msg_penolakan');
        $this->select('
            msg_penolakan.id,
            msg_penolakan.status,
            msg_penolakan.kode_booking,
            msg_penolakan.msg,
            msg_penolakan.img,
            msg_penolakan.created_at,
            msg_penolakan.updated_at');
        $this->where('kode_booking', $id);
        $this->where('status', $asal);
        $query = $this->first();
        return $query;
    }
}
