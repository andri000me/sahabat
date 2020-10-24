<?php

namespace App\Models;

use CodeIgniter\Model;

class VerifikasiModel extends model
{
    protected $table = 'permohonan';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['masa_berlaku', 'slug', 'kode_booking', 'status', 'status_verifikasi', 'tgl_permohonan', 'nama_pemohon', 'alamat_pemohon', 'jenis_permohonan', 'trayek_dilayani', 'nomor_kendaraan', 'nama_pemilik', 'alamat_pemilik', 'jenis_kendaraan', 'tahun_pembuatan', 'nomor_kir', 'kapasitas_angkutan', 'uji_berkala_berlaku', 'stnkb_berlaku', 'pkb_berlaku', 'jasa_raharja_berlaku', 'img_surat_permohonan', 'img_akte_perusahaan', 'img_tdp', 'img_siup', 'img_npwp', 'img_ktp', 'img_trayek', 'img_stnkb_pkb', 'img_kir', 'img_jasa_raharja', 'img_surat_pernyataan', 'terima', 'created_at', 'updated_at'];

    public function getRekomendasi($kd = false)
    {
        if ($kd == false) {
            return $this->findAll();
        }

        return $this->where(['kode_booking' => $kd])->first();
    }

    public function getRekomendasiLimit()
    {
        $this->orderBy('kode_booking', 'DESC');
        $this->limit(1);
        return $this->find();
    }

    public function getRekomendasiVerifikasi()
    {
        $this->where('status_verifikasi != 4');
        $this->where('status_verifikasi != 2');
        $this->orderBy('kode_booking', 'DESC');
        return $this->find();
    }

    public function getRekomendasiterVerifikasi()
    {
        $this->where('status_verifikasi != 4');
        $this->where('status_verifikasi != 3');
        $this->orderBy('kode_booking', 'DESC');
        return $this->find();
    }

    public function getrekomuser()
    {
        // $this->where('status_verifikasi', 1);
        $this->orderBy('kode_booking', 'DESC');
        return $this->find();
    }
}
