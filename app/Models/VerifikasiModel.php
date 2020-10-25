<?php

namespace App\Models;

use CodeIgniter\Model;

class VerifikasiModel extends model
{
    protected $table = 'permohonan';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['tgl_approve', 'masa_berlaku', 'slug', 'kode_booking', 'status', 'status_verifikasi', 'tgl_permohonan', 'nama_pemohon', 'alamat_pemohon', 'jenis_permohonan', 'trayek_dilayani', 'nomor_kendaraan', 'nama_pemilik', 'alamat_pemilik', 'jenis_kendaraan', 'tahun_pembuatan', 'nomor_kir', 'kapasitas_angkutan', 'uji_berkala_berlaku', 'stnkb_berlaku', 'pkb_berlaku', 'jasa_raharja_berlaku', 'img_surat_permohonan', 'img_akte_perusahaan', 'img_tdp', 'img_siup', 'img_npwp', 'img_ktp', 'img_trayek', 'img_stnkb_pkb', 'img_kir', 'img_jasa_raharja', 'img_surat_pernyataan', 'img_pengantar_ptsp', 'terima', 'created_at', 'updated_at'];

    public function getRekomendasi($kd = false)
    {
        if ($kd == false) {
            return $this->findAll();
        }

        $this->db->table('permohonan');
        $this->select('
        permohonan.id as idpermohonan,
        permohonan.user_id,
        permohonan.slug,
        permohonan.kode_booking,
        permohonan.status,
        permohonan.status_verifikasi,
        permohonan.tgl_permohonan,
        permohonan.nama_pemohon,
        permohonan.alamat_pemohon,
        permohonan.jenis_permohonan,
        permohonan.trayek_dilayani,
        permohonan.nomor_kendaraan,
        permohonan.nama_pemilik,
        permohonan.alamat_pemilik,
        permohonan.jenis_kendaraan,
        permohonan.tahun_pembuatan,
        permohonan.nomor_kir,
        permohonan.kapasitas_angkutan,
        permohonan.uji_berkala_berlaku,
        permohonan.stnkb_berlaku,
        permohonan.pkb_berlaku,
        permohonan.jasa_raharja_berlaku,
        permohonan.img_surat_permohonan,
        permohonan.img_ktp,
        permohonan.img_trayek,
        permohonan.img_stnkb_pkb,
        permohonan.img_kir,
        permohonan.img_jasa_raharja,
        permohonan.img_surat_pernyataan,
        permohonan.img_pengantar_ptsp,
        permohonan.tgl_approve,
        permohonan.masa_berlaku,
        user.id as iduser,
        user.wilayah_id,
        user.nama,
        user.email,
        user.hp,
        user.role,
        user.nik_direktur,
        user.nama_direktur,
        user.nama_perusahaan,
        user.alamat,
        user.npwp,
        user.img_akte_perusahaan,
        user.img_izin_angkutan,
        user.img_tdp,
        user.img_npwp,
        user.img_ktp_direktur,
        user.img_siup,
        user.img_nib');
        $this->where('permohonan.kode_booking', $kd);
        $this->where('status_verifikasi != 4');
        $this->where('status_verifikasi != 3');
        $this->join('user', 'user.id = permohonan.nama_pemohon');
        $this->orderBy('kode_booking', 'DESC');
        return $this->first();
    }

    public function getRekomendasiLimit()
    {
        $this->orderBy('kode_booking', 'DESC');
        $this->limit(1);
        return $this->find();
    }

    public function getRekomendasiVerifikasi()
    {
        $this->db->table('permohonan');
        $this->select('
        permohonan.id as idpermohonan,
        permohonan.user_id,
        permohonan.slug,
        permohonan.kode_booking,
        permohonan.status,
        permohonan.status_verifikasi,
        permohonan.tgl_permohonan,
        permohonan.nama_pemohon,
        permohonan.alamat_pemohon,
        permohonan.jenis_permohonan,
        permohonan.trayek_dilayani,
        permohonan.nomor_kendaraan,
        permohonan.nama_pemilik,
        permohonan.alamat_pemilik,
        permohonan.jenis_kendaraan,
        permohonan.tahun_pembuatan,
        permohonan.nomor_kir,
        permohonan.kapasitas_angkutan,
        permohonan.uji_berkala_berlaku,
        permohonan.stnkb_berlaku,
        permohonan.pkb_berlaku,
        permohonan.jasa_raharja_berlaku,
        permohonan.img_surat_permohonan,
        permohonan.img_ktp,
        permohonan.img_trayek,
        permohonan.img_stnkb_pkb,
        permohonan.img_kir,
        permohonan.img_jasa_raharja,
        permohonan.img_surat_pernyataan,
        permohonan.img_pengantar_ptsp,
        permohonan.tgl_approve,
        permohonan.masa_berlaku,
        user.id as iduser,
        user.wilayah_id,
        user.nama,
        user.email,
        user.hp,
        user.role,
        user.nik_direktur,
        user.nama_direktur,
        user.nama_perusahaan,
        user.alamat,
        user.npwp,
        user.img_akte_perusahaan,
        user.img_izin_angkutan,
        user.img_tdp,
        user.img_npwp,
        user.img_ktp_direktur,
        user.img_siup,
        user.img_nib');
        $this->join('user', 'user.id = permohonan.nama_pemohon');
        $this->where('status_verifikasi != 4');
        $this->where('status_verifikasi != 3');
        $this->orderBy('kode_booking', 'DESC');
        return $this->find();
    }

    public function getRekomendasiterVerifikasi()
    {
        $this->db->table('permohonan');
        $this->select('
        permohonan.id as idpermohonan,
        permohonan.user_id,
        permohonan.slug,
        permohonan.kode_booking,
        permohonan.status,
        permohonan.status_verifikasi,
        permohonan.tgl_permohonan,
        permohonan.nama_pemohon,
        permohonan.alamat_pemohon,
        permohonan.jenis_permohonan,
        permohonan.trayek_dilayani,
        permohonan.nomor_kendaraan,
        permohonan.nama_pemilik,
        permohonan.alamat_pemilik,
        permohonan.jenis_kendaraan,
        permohonan.tahun_pembuatan,
        permohonan.nomor_kir,
        permohonan.kapasitas_angkutan,
        permohonan.uji_berkala_berlaku,
        permohonan.stnkb_berlaku,
        permohonan.pkb_berlaku,
        permohonan.jasa_raharja_berlaku,
        permohonan.img_surat_permohonan,
        permohonan.img_ktp,
        permohonan.img_trayek,
        permohonan.img_stnkb_pkb,
        permohonan.img_kir,
        permohonan.img_jasa_raharja,
        permohonan.img_surat_pernyataan,
        permohonan.img_pengantar_ptsp,
        permohonan.tgl_approve,
        permohonan.masa_berlaku,
        user.id as iduser,
        user.wilayah_id,
        user.nama,
        user.email,
        user.hp,
        user.role,
        user.nik_direktur,
        user.nama_direktur,
        user.nama_perusahaan,
        user.alamat,
        user.npwp,
        user.img_akte_perusahaan,
        user.img_izin_angkutan,
        user.img_tdp,
        user.img_npwp,
        user.img_ktp_direktur,
        user.img_siup,
        user.img_nib');
        $this->join('user', 'user.id = permohonan.nama_pemohon');
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
