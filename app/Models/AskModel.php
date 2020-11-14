<?php

namespace App\Models;

use CodeIgniter\Model;

class AskModel extends model
{
    protected $table = 'ask';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'slug',
        'kode_registrasi',
        'id_koperasi',
        'ptsp',
        'status_ptsp',
        'dishub',
        'status_dishub',
        'pelayanan_dimohon',
        'jumlah_kendaraan',
        'img_surat_permohonan',
        'img_bukti_pengesahan',
        'img_domisili',
        'img_pernyataan_kesanggupan',
        'img_pernyataan_kerjasama',
        'img_perjanjian',
        'img_pemda',
        'img_rencana_bisnis',
        'created_at',
        'updated_at'
    ];

    public function getAsk($kode_registrasi = false)
    {
        if ($kode_registrasi == false) {
            $this->db->table('ask');
            $this->select('
            ask.id as idask,
            ask.slug as slugask,
            ask.kode_registrasi, 
            ask.ptsp, 
            ask.status_ptsp, 
            ask.dishub, 
            ask.status_dishub, 
            ask.pelayanan_dimohon, 
            ask.jumlah_kendaraan, 
            ask.img_surat_permohonan, 
            ask.img_bukti_pengesahan, 
            ask.img_domisili, 
            ask.img_pernyataan_kesanggupan, 
            ask.img_pernyataan_kerjasama, 
            ask.img_perjanjian, 
            ask.img_pemda, 
            ask.img_rencana_bisnis, 
            ask.created_at, 
            ask.updated_at');
            $this->join('user', 'ask.id_koperasi = user.id');
            $query = $this->findAll();
            return $query;
        } else {
            $this->db->table('ask');
            $this->select('
            ask.id as idask,
            ask.slug,
            ask.kode_registrasi, 
            ask.ptsp, 
            ask.status_ptsp, 
            ask.dishub, 
            ask.status_dishub, 
            ask.pelayanan_dimohon, 
            ask.jumlah_kendaraan, 
            ask.img_surat_permohonan, 
            ask.img_bukti_pengesahan, 
            ask.img_domisili, 
            ask.img_pernyataan_kesanggupan, 
            ask.img_pernyataan_kerjasama, 
            ask.img_perjanjian, 
            ask.img_pemda, 
            ask.img_rencana_bisnis, 
            ask.created_at, 
            ask.updated_at');
            $this->where(['ask.kode_registrasi' => $kode_registrasi]);
            $this->join('user', 'ask.id_koperasi = user.id');
            $query = $this->first();
            return $query;
        }
    }

    public function getAskSaya($kode_registrasi = false)
    {
        if ($kode_registrasi == false) {
            $this->db->table('ask');
            $this->select('
            ask.id as idask,
            ask.slug,
            ask.kode_registrasi, 
            ask.ptsp, 
            ask.status_ptsp, 
            ask.dishub, 
            ask.status_dishub, 
            ask.pelayanan_dimohon, 
            ask.jumlah_kendaraan, 
            ask.img_surat_permohonan, 
            ask.img_bukti_pengesahan, 
            ask.img_domisili, 
            ask.img_pernyataan_kesanggupan, 
            ask.img_pernyataan_kerjasama, 
            ask.img_perjanjian, 
            ask.img_pemda, 
            ask.img_rencana_bisnis, 
            ask.created_at, 
            ask.updated_at,
            user.nama_perusahaan');
            $this->join('user', 'ask.id_koperasi = user.id');
            $query = $this->findAll();
            return $query;
        } else {
            $this->db->table('ask');
            $this->select('
            ask.id as idask,
            ask.slug,
            ask.kode_registrasi, 
            ask.ptsp, 
            ask.status_ptsp, 
            ask.dishub, 
            ask.status_dishub, 
            ask.pelayanan_dimohon, 
            ask.jumlah_kendaraan, 
            ask.img_surat_permohonan, 
            ask.img_bukti_pengesahan, 
            ask.img_domisili, 
            ask.img_pernyataan_kesanggupan, 
            ask.img_pernyataan_kerjasama, 
            ask.img_perjanjian, 
            ask.img_pemda, 
            ask.img_rencana_bisnis, 
            ask.created_at, 
            ask.updated_at');
            $this->where(['ask.kode_registrasi' => $kode_registrasi]);
            $this->join('user', 'ask.id_koperasi = user.id');
            $query = $this->first();
            return $query;
        }
    }

    public function batalkanPengajuan($kode_registrasi)
    {
        $sql = 'DELETE FROM ask WHERE kode_registrasi = ' . $kode_registrasi . ' ';
        $query = $this->db->query($sql);
        return $query;
    }
}
