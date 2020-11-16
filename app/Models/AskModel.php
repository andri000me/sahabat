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
        'ptsp_approve',
        'dishub',
        'status_dishub',
        'dishub_approve',
        'penerbitan',
        'status_penerbitan',
        'pelayanan_dimohon',
        'jumlah_kendaraan',
        'jenis_kendaraan',
        'kapasitas_angkut',
        'wilayah_operasi',
        'pengaruh',
        'kelas_jalan',
        'fasilitas_pool',
        'fasilitas_perawatan',
        'img_surat_permohonan',
        'img_bukti_pengesahan',
        'img_domisili',
        'img_pernyataan_kesanggupan',
        'img_pernyataan_kerjasama',
        'img_perjanjian',
        'img_pemda',
        'img_rencana_bisnis',
        'img_penolakan_ptsp',
        'img_persetujuan_ptsp',
        'img_surat_persetujuan',
        'img_permohonan',
        'img_penolakan_permohonan',
        'img_penerbitan',
        'img_penolakan_penerbitan',
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
            ask.ptsp_approve, 
            ask.dishub_approve, 
            ask.penerbitan, 
            ask.status_penerbitan, 
            ask.pelayanan_dimohon, 
            ask.jumlah_kendaraan, 
            ask.jenis_kendaraan,
            ask.kapasitas_angkut,
            ask.wilayah_operasi,
            ask.pengaruh,
            ask.kelas_jalan,
            ask.fasilitas_pool,
            ask.fasilitas_perawatan,
            ask.img_surat_permohonan, 
            ask.img_bukti_pengesahan, 
            ask.img_domisili, 
            ask.img_pernyataan_kesanggupan, 
            ask.img_pernyataan_kerjasama, 
            ask.img_perjanjian, 
            ask.img_pemda, 
            ask.img_rencana_bisnis, 
            ask.img_penolakan_ptsp, 
            ask.img_persetujuan_ptsp, 
            ask.img_surat_persetujuan, 
            ask.img_permohonan, 
            ask.img_penolakan_permohonan, 
            ask.img_penerbitan, 
            ask.img_penolakan_penerbitan, 
            ask.created_at, 
            ask.updated_at,
            user.alamat,
            user.nama_perusahaan,
            user.nama_direktur');
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
            ask.ptsp_approve, 
            ask.dishub_approve,
            ask.penerbitan,
            ask.status_penerbitan,
            ask.pelayanan_dimohon, 
            ask.jumlah_kendaraan, 
            ask.jenis_kendaraan,
            ask.kapasitas_angkut,
            ask.wilayah_operasi,
            ask.pengaruh,
            ask.kelas_jalan,
            ask.fasilitas_pool,
            ask.fasilitas_perawatan,
            ask.img_surat_permohonan, 
            ask.img_bukti_pengesahan, 
            ask.img_domisili, 
            ask.img_pernyataan_kesanggupan, 
            ask.img_pernyataan_kerjasama, 
            ask.img_perjanjian, 
            ask.img_pemda, 
            ask.img_rencana_bisnis, 
            ask.img_penolakan_ptsp, 
            ask.img_persetujuan_ptsp, 
            ask.img_surat_persetujuan, 
            ask.img_permohonan, 
            ask.img_penolakan_permohonan, 
            ask.img_penerbitan, 
            ask.img_penolakan_penerbitan,
            ask.created_at, 
            ask.updated_at,
            user.alamat,
            user.nama_perusahaan,
            user.nama_direktur');
            $this->where(['ask.kode_registrasi' => $kode_registrasi]);
            $this->join('user', 'ask.id_koperasi = user.id');
            $query = $this->first();
            return $query;
        }
    }

    public function getAskSaya($id, $kode_registrasi = false)
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
            ask.ptsp_approve, 
            ask.dishub_approve,
            ask.penerbitan,
            ask.status_penerbitan,
            ask.pelayanan_dimohon, 
            ask.jumlah_kendaraan, 
            ask.jenis_kendaraan,
            ask.kapasitas_angkut,
            ask.wilayah_operasi,
            ask.pengaruh,
            ask.kelas_jalan,
            ask.fasilitas_pool,
            ask.fasilitas_perawatan,
            ask.img_surat_permohonan, 
            ask.img_bukti_pengesahan, 
            ask.img_domisili, 
            ask.img_pernyataan_kesanggupan, 
            ask.img_pernyataan_kerjasama, 
            ask.img_perjanjian, 
            ask.img_pemda, 
            ask.img_rencana_bisnis, 
            ask.img_penolakan_ptsp, 
            ask.img_persetujuan_ptsp, 
            ask.img_surat_persetujuan, 
            ask.img_permohonan, 
            ask.img_penolakan_permohonan, 
            ask.img_penerbitan, 
            ask.img_penolakan_penerbitan,
            ask.created_at, 
            ask.updated_at,
            user.alamat,
            user.nama_perusahaan,
            user.nama_direktur');
            $this->where(['ask.id_koperasi' => $id]);
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
            ask.ptsp_approve, 
            ask.dishub_approve,
            ask.penerbitan,
            ask.status_penerbitan,
            ask.pelayanan_dimohon, 
            ask.jumlah_kendaraan, 
            ask.jenis_kendaraan,
            ask.kapasitas_angkut,
            ask.wilayah_operasi,
            ask.pengaruh,
            ask.kelas_jalan,
            ask.fasilitas_pool,
            ask.fasilitas_perawatan,
            ask.img_surat_permohonan, 
            ask.img_bukti_pengesahan, 
            ask.img_domisili, 
            ask.img_pernyataan_kesanggupan, 
            ask.img_pernyataan_kerjasama, 
            ask.img_perjanjian, 
            ask.img_pemda, 
            ask.img_rencana_bisnis, 
            ask.img_penolakan_ptsp, 
            ask.img_persetujuan_ptsp, 
            ask.img_surat_persetujuan, 
            ask.img_permohonan, 
            ask.img_penolakan_permohonan, 
            ask.img_penerbitan, 
            ask.img_penolakan_penerbitan,
            ask.created_at, 
            ask.updated_at,
            user.alamat,
            user.nama_perusahaan,
            user.nama_direktur');
            $this->where(['ask.id_koperasi' => $id]);
            $this->where(['ask.kode_registrasi' => $kode_registrasi]);
            $this->join('user', 'ask.id_koperasi = user.id');
            $query = $this->first();
            return $query;
        }
    }

    public function getAskPTSP($kode_registrasi = false)
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
            ask.ptsp_approve, 
            ask.dishub_approve,
            ask.penerbitan,
            ask.status_penerbitan,
            ask.pelayanan_dimohon, 
            ask.jumlah_kendaraan, 
            ask.jenis_kendaraan,
            ask.kapasitas_angkut,
            ask.wilayah_operasi,
            ask.pengaruh,
            ask.kelas_jalan,
            ask.fasilitas_pool,
            ask.fasilitas_perawatan,
            ask.img_surat_permohonan, 
            ask.img_bukti_pengesahan, 
            ask.img_domisili, 
            ask.img_pernyataan_kesanggupan, 
            ask.img_pernyataan_kerjasama, 
            ask.img_perjanjian, 
            ask.img_pemda, 
            ask.img_rencana_bisnis, 
            ask.img_penolakan_ptsp, 
            ask.img_persetujuan_ptsp, 
            ask.img_surat_persetujuan, 
            ask.img_permohonan, 
            ask.img_penolakan_permohonan, 
            ask.img_penerbitan, 
            ask.img_penolakan_penerbitan,
            ask.created_at, 
            ask.updated_at,
            user.alamat,
            user.nama_perusahaan,
            user.nama_direktur');
            $this->where('ask.ptsp', 1);
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
            ask.ptsp_approve, 
            ask.dishub_approve,
            ask.penerbitan,
            ask.status_penerbitan,
            ask.pelayanan_dimohon, 
            ask.jumlah_kendaraan, 
            ask.jenis_kendaraan,
            ask.kapasitas_angkut,
            ask.wilayah_operasi,
            ask.pengaruh,
            ask.kelas_jalan,
            ask.fasilitas_pool,
            ask.fasilitas_perawatan,
            ask.img_surat_permohonan, 
            ask.img_bukti_pengesahan, 
            ask.img_domisili, 
            ask.img_pernyataan_kesanggupan, 
            ask.img_pernyataan_kerjasama, 
            ask.img_perjanjian, 
            ask.img_pemda, 
            ask.img_rencana_bisnis, 
            ask.img_penolakan_ptsp, 
            ask.img_persetujuan_ptsp, 
            ask.img_surat_persetujuan, 
            ask.img_permohonan, 
            ask.img_penolakan_permohonan, 
            ask.img_penerbitan, 
            ask.img_penolakan_penerbitan,
            ask.created_at, 
            ask.updated_at,
            user.alamat,
            user.nama_perusahaan,
            user.nama_direktur');
            $this->where('ask.ptsp', 1);
            $this->where(['ask.kode_registrasi' => $kode_registrasi]);
            $this->join('user', 'ask.id_koperasi = user.id');
            $query = $this->first();
            return $query;
        }
    }

    public function getAskDishub($id, $kode_registrasi = false)
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
            ask.ptsp_approve, 
            ask.dishub_approve,
            ask.penerbitan,
            ask.status_penerbitan,
            ask.pelayanan_dimohon, 
            ask.jumlah_kendaraan, 
            ask.jenis_kendaraan,
            ask.kapasitas_angkut,
            ask.wilayah_operasi,
            ask.pengaruh,
            ask.kelas_jalan,
            ask.fasilitas_pool,
            ask.fasilitas_perawatan,
            ask.img_surat_permohonan, 
            ask.img_bukti_pengesahan, 
            ask.img_domisili, 
            ask.img_pernyataan_kesanggupan, 
            ask.img_pernyataan_kerjasama, 
            ask.img_perjanjian, 
            ask.img_pemda, 
            ask.img_rencana_bisnis, 
            ask.img_penolakan_ptsp, 
            ask.img_persetujuan_ptsp, 
            ask.img_surat_persetujuan, 
            ask.img_surat_persetujuan, 
            ask.img_permohonan, 
            ask.img_penolakan_permohonan, 
            ask.img_penerbitan, 
            ask.img_penolakan_penerbitan,
            ask.created_at, 
            ask.updated_at,
            user.alamat,
            user.nama_perusahaan,
            user.nama_direktur');
            $this->where(['ask.id_koperasi' => $id]);
            $this->where('ask.status_ptsp', 2);
            $this->where('ask.img_persetujuan_ptsp IS NOT NULL');
            $this->where('ask.img_surat_persetujuan IS NOT NULL');
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
            ask.ptsp_approve, 
            ask.dishub_approve,
            ask.penerbitan,
            ask.status_penerbitan,
            ask.pelayanan_dimohon, 
            ask.jumlah_kendaraan, 
            ask.jenis_kendaraan,
            ask.kapasitas_angkut,
            ask.wilayah_operasi,
            ask.pengaruh,
            ask.kelas_jalan,
            ask.fasilitas_pool,
            ask.fasilitas_perawatan,
            ask.img_surat_permohonan, 
            ask.img_bukti_pengesahan, 
            ask.img_domisili, 
            ask.img_pernyataan_kesanggupan, 
            ask.img_pernyataan_kerjasama, 
            ask.img_perjanjian, 
            ask.img_pemda, 
            ask.img_rencana_bisnis, 
            ask.img_penolakan_ptsp, 
            ask.img_persetujuan_ptsp, 
            ask.img_surat_persetujuan, 
            ask.img_surat_persetujuan, 
            ask.img_permohonan, 
            ask.img_penolakan_permohonan, 
            ask.img_penerbitan, 
            ask.img_penolakan_penerbitan,
            ask.created_at, 
            ask.updated_at,
            user.alamat,
            user.nama_perusahaan,
            user.nama_direktur');
            $this->where(['ask.id_koperasi' => $id]);
            $this->where('ask.status_ptsp', 2);
            $this->where(['ask.kode_registrasi' => $kode_registrasi]);
            $this->join('user', 'ask.id_koperasi = user.id');
            $query = $this->first();
            return $query;
        }
    }

    public function getPermohonanDishub($kode_registrasi = false)
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
            ask.ptsp_approve, 
            ask.dishub_approve,
            ask.penerbitan,
            ask.status_penerbitan,
            ask.pelayanan_dimohon, 
            ask.jumlah_kendaraan, 
            ask.jenis_kendaraan,
            ask.kapasitas_angkut,
            ask.wilayah_operasi,
            ask.pengaruh,
            ask.kelas_jalan,
            ask.fasilitas_pool,
            ask.fasilitas_perawatan,
            ask.img_surat_permohonan, 
            ask.img_bukti_pengesahan, 
            ask.img_domisili, 
            ask.img_pernyataan_kesanggupan, 
            ask.img_pernyataan_kerjasama, 
            ask.img_perjanjian, 
            ask.img_pemda, 
            ask.img_rencana_bisnis, 
            ask.img_penolakan_ptsp, 
            ask.img_persetujuan_ptsp, 
            ask.img_surat_persetujuan, 
            ask.img_surat_persetujuan, 
            ask.img_permohonan, 
            ask.img_penolakan_permohonan, 
            ask.img_penerbitan, 
            ask.img_penolakan_penerbitan,
            ask.created_at, 
            ask.updated_at,
            user.alamat,
            user.nama_perusahaan,
            user.nama_direktur');
            $this->where('ask.dishub', 1);
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
            ask.ptsp_approve, 
            ask.dishub_approve,
            ask.penerbitan,
            ask.status_penerbitan,
            ask.pelayanan_dimohon, 
            ask.jumlah_kendaraan, 
            ask.jenis_kendaraan,
            ask.kapasitas_angkut,
            ask.wilayah_operasi,
            ask.pengaruh,
            ask.kelas_jalan,
            ask.fasilitas_pool,
            ask.fasilitas_perawatan,
            ask.img_surat_permohonan, 
            ask.img_bukti_pengesahan, 
            ask.img_domisili, 
            ask.img_pernyataan_kesanggupan, 
            ask.img_pernyataan_kerjasama, 
            ask.img_perjanjian, 
            ask.img_pemda, 
            ask.img_rencana_bisnis, 
            ask.img_penolakan_ptsp, 
            ask.img_persetujuan_ptsp, 
            ask.img_surat_persetujuan, 
            ask.img_surat_persetujuan, 
            ask.img_permohonan, 
            ask.img_penolakan_permohonan, 
            ask.img_penerbitan, 
            ask.img_penolakan_penerbitan,
            ask.created_at, 
            ask.updated_at,
            user.alamat,
            user.nama_perusahaan,
            user.nama_direktur');
            $this->where('ask.dishub', 1);
            $this->where(['ask.kode_registrasi' => $kode_registrasi]);
            $this->join('user', 'ask.id_koperasi = user.id');
            $query = $this->first();
            return $query;
        }
    }

    public function getPermohonanDishubApprove($kode_registrasi = false)
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
            ask.ptsp_approve, 
            ask.dishub_approve,
            ask.penerbitan,
            ask.status_penerbitan,
            ask.pelayanan_dimohon, 
            ask.jumlah_kendaraan, 
            ask.jenis_kendaraan,
            ask.kapasitas_angkut,
            ask.wilayah_operasi,
            ask.pengaruh,
            ask.kelas_jalan,
            ask.fasilitas_pool,
            ask.fasilitas_perawatan,
            ask.img_surat_permohonan, 
            ask.img_bukti_pengesahan, 
            ask.img_domisili, 
            ask.img_pernyataan_kesanggupan, 
            ask.img_pernyataan_kerjasama, 
            ask.img_perjanjian, 
            ask.img_pemda, 
            ask.img_rencana_bisnis, 
            ask.img_penolakan_ptsp, 
            ask.img_persetujuan_ptsp, 
            ask.img_surat_persetujuan, 
            ask.img_surat_persetujuan, 
            ask.img_permohonan, 
            ask.img_penolakan_permohonan, 
            ask.img_penerbitan, 
            ask.img_penolakan_penerbitan,
            ask.created_at, 
            ask.updated_at,
            user.alamat,
            user.nama_perusahaan,
            user.nama_direktur');
            $this->where('ask.dishub', 1);
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
            ask.ptsp_approve, 
            ask.dishub_approve,
            ask.penerbitan,
            ask.status_penerbitan,
            ask.pelayanan_dimohon, 
            ask.jumlah_kendaraan, 
            ask.jenis_kendaraan,
            ask.kapasitas_angkut,
            ask.wilayah_operasi,
            ask.pengaruh,
            ask.kelas_jalan,
            ask.fasilitas_pool,
            ask.fasilitas_perawatan,
            ask.img_surat_permohonan, 
            ask.img_bukti_pengesahan, 
            ask.img_domisili, 
            ask.img_pernyataan_kesanggupan, 
            ask.img_pernyataan_kerjasama, 
            ask.img_perjanjian, 
            ask.img_pemda, 
            ask.img_rencana_bisnis, 
            ask.img_penolakan_ptsp, 
            ask.img_persetujuan_ptsp, 
            ask.img_surat_persetujuan, 
            ask.img_surat_persetujuan, 
            ask.img_permohonan, 
            ask.img_penolakan_permohonan, 
            ask.img_penerbitan, 
            ask.img_penolakan_penerbitan,
            ask.created_at, 
            ask.updated_at,
            user.alamat,
            user.nama_perusahaan,
            user.nama_direktur');
            $this->where('ask.dishub', 1);
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
