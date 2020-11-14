<?php

namespace App\Models;

use CodeIgniter\Model;

class RanmorModel extends model
{
    protected $table = 'ranmor';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'ask_kode_registrasi',
        'nomor_kendaraan',
        'nomor_uji',
        'kapasitas',
        'img_ranmor',
        'created_at',
        'uppdated_at'
    ];

    public function getRanmor($kode_registrasi = false)
    {
        if ($kode_registrasi == false) {
            $this->db->table('ranmor');
            $this->select('
            ranmor.id as idranmor,
            ranmor.ask_kode_registrasi,
            ranmor.nomor_kendaraan, 
            ranmor.nomor_uji, 
            ranmor.kapasitas, 
            ranmor.img_ranmor, 
            ranmor.created_at, 
            ranmor.updated_at');
            $this->join('ask', 'ask.kode_registrasi = ranmor.ask_kode_registrasi');
            $query = $this->findAll();
            return $query;
        } else {
            $this->db->table('ranmor');
            $this->select('
            ranmor.id as idranmor,
            ranmor.ask_kode_registrasi,
            ranmor.nomor_kendaraan, 
            ranmor.nomor_uji, 
            ranmor.kapasitas, 
            ranmor.img_ranmor, 
            ranmor.created_at, 
            ranmor.updated_at');
            $this->where(['ranmor.ask_kode_registrasi' => $kode_registrasi]);
            $this->join('ask', 'ask.kode_registrasi = ranmor.ask_kode_registrasi');
            $query = $this->first();
            return $query;
        }
    }

    public function getAllRanmor($kode_registrasi)
    {
        $this->db->table('ranmor');
        $this->select('
            ranmor.id as idranmor,
            ranmor.ask_kode_registrasi,
            ranmor.nomor_kendaraan, 
            ranmor.nomor_uji, 
            ranmor.kapasitas, 
            ranmor.img_ranmor, 
            ranmor.created_at, 
            ranmor.updated_at');
        $this->where(['ranmor.ask_kode_registrasi' => $kode_registrasi]);
        $this->join('ask', 'ask.kode_registrasi = ranmor.ask_kode_registrasi');
        $query = $this->findAll();
        return $query;
    }

    public function batalkanPengajuan($kode_registrasi)
    {
        $sql = 'DELETE FROM ranmor WHERE ask_kode_registrasi = ' . $kode_registrasi . ' ';
        $query = $this->db->query($sql);
        return $query;
    }
}
