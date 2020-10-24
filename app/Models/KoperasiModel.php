<?php

namespace App\Models;

use CodeIgniter\Model;

class KoperasiModel extends model
{
    protected $table = 'permohonan_kabkota';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['slug', 'status_asal', 'status_tujuan', 'koperasi_id', 'kabkota_id', 'status', 'trayek_dilayani', 'asal', 'tujuan', 'nomor_kendaraan', 'nama_pemilik', 'alamat_pemilik', 'jenis_kendaraan', 'nomor_kir', 'merk', 'tahun_pembuatan', 'nomor_chasis', 'nomor_mesin', 'nomor_regis_pkb', 'img_surat_permohonan_koperasi', 'img_ktp_pemilik', 'img_stnkb', 'img_jasa_raharja', 'img_kir'];

    public function getPermohonan($id = false)
    {
        if ($id == false) {
            $this->db->table('permohonan_kabkota');
            $this->select('permohonan_kabkota.alamat_pemilik, permohonan_kabkota.id as idpermohonan, permohonan_kabkota.koperasi_id, permohonan_kabkota.kabkota_id, permohonan_kabkota.status_asal, permohonan_kabkota.status_tujuan, permohonan_kabkota.trayek_dilayani, permohonan_kabkota.asal, permohonan_kabkota.tujuan, permohonan_kabkota.nomor_kendaraan, permohonan_kabkota.nama_pemilik, permohonan_kabkota.jenis_kendaraan, permohonan_kabkota.nomor_kir, permohonan_kabkota.merk, permohonan_kabkota.tahun_pembuatan, permohonan_kabkota.nomor_chasis, permohonan_kabkota.nomor_mesin, permohonan_kabkota.nomor_regis_pkb, permohonan_kabkota.img_surat_permohonan_koperasi, permohonan_kabkota.img_ktp_pemilik, permohonan_kabkota.img_stnkb, permohonan_kabkota.img_jasa_raharja, permohonan_kabkota.img_kir, permohonan_kabkota.created_at, permohonan_kabkota.updated_at, trayek.id as idtrayek, trayek.kode_trayek, trayek.trayek');
            $this->join('trayek', 'permohonan_kabkota.trayek_dilayani = trayek.kode_trayek');
            $query = $this->findAll();
            return $query;
        } else {
            $this->db->table('permohonan_kabkota');
            $this->select('permohonan_kabkota.alamat_pemilik, permohonan_kabkota.id as idpermohonan, permohonan_kabkota.koperasi_id, permohonan_kabkota.kabkota_id, permohonan_kabkota.status_asal, permohonan_kabkota.status_tujuan, permohonan_kabkota.trayek_dilayani, permohonan_kabkota.asal, permohonan_kabkota.tujuan, permohonan_kabkota.nomor_kendaraan, permohonan_kabkota.nama_pemilik, permohonan_kabkota.jenis_kendaraan, permohonan_kabkota.nomor_kir, permohonan_kabkota.merk, permohonan_kabkota.tahun_pembuatan, permohonan_kabkota.nomor_chasis, permohonan_kabkota.nomor_mesin, permohonan_kabkota.nomor_regis_pkb, permohonan_kabkota.img_surat_permohonan_koperasi, permohonan_kabkota.img_ktp_pemilik, permohonan_kabkota.img_stnkb, permohonan_kabkota.img_jasa_raharja, permohonan_kabkota.img_kir, permohonan_kabkota.created_at, permohonan_kabkota.updated_at, trayek.id as idtrayek, trayek.kode_trayek, trayek.trayek');
            $this->where(['permohonan_kabkota.id' => $id]);
            $this->join('trayek', 'permohonan_kabkota.trayek_dilayani = trayek.kode_trayek');
            $query = $this->first();
            return $query;
        }
    }

    public function getPermohonanKota($slug = false, $id = false)
    {
        if ($slug == false && $id == false) {
            $this->db->table('permohonan_kabkota');
            $this->select('permohonan_kabkota.alamat_pemilik, permohonan_kabkota.slug, permohonan_kabkota.id as idpermohonan, permohonan_kabkota.koperasi_id, permohonan_kabkota.kabkota_id, permohonan_kabkota.status_asal, permohonan_kabkota.status_tujuan, permohonan_kabkota.trayek_dilayani, permohonan_kabkota.asal, permohonan_kabkota.tujuan, permohonan_kabkota.nomor_kendaraan, permohonan_kabkota.nama_pemilik, permohonan_kabkota.jenis_kendaraan, permohonan_kabkota.nomor_kir, permohonan_kabkota.merk, permohonan_kabkota.tahun_pembuatan, permohonan_kabkota.nomor_chasis, permohonan_kabkota.nomor_mesin, permohonan_kabkota.nomor_regis_pkb, permohonan_kabkota.img_surat_permohonan_koperasi, permohonan_kabkota.img_ktp_pemilik, permohonan_kabkota.img_stnkb, permohonan_kabkota.img_jasa_raharja, permohonan_kabkota.img_kir, permohonan_kabkota.created_at, permohonan_kabkota.updated_at, trayek.id as idtrayek, trayek.kode_trayek, trayek.trayek, user.nama_perusahaan');

            $this->where(['permohonan_kabkota.asal' => 1]);
            $this->orWhere(['permohonan_kabkota.tujuan' => 1]);

            $this->join('trayek', 'permohonan_kabkota.trayek_dilayani = trayek.kode_trayek');
            $this->join('user', 'permohonan_kabkota.koperasi_id = user.id');

            $query = $this->findAll();
            return $query;
        } else {
            $this->db->table('permohonan_kabkota');
            $this->select('permohonan_kabkota.alamat_pemilik, permohonan_kabkota.slug, permohonan_kabkota.id as idpermohonan, permohonan_kabkota.koperasi_id, permohonan_kabkota.kabkota_id, permohonan_kabkota.status_asal, permohonan_kabkota.status_tujuan, permohonan_kabkota.trayek_dilayani, permohonan_kabkota.asal, permohonan_kabkota.tujuan, permohonan_kabkota.nomor_kendaraan, permohonan_kabkota.nama_pemilik, permohonan_kabkota.jenis_kendaraan, permohonan_kabkota.nomor_kir, permohonan_kabkota.merk, permohonan_kabkota.tahun_pembuatan, permohonan_kabkota.nomor_chasis, permohonan_kabkota.nomor_mesin, permohonan_kabkota.nomor_regis_pkb, permohonan_kabkota.img_surat_permohonan_koperasi, permohonan_kabkota.img_ktp_pemilik, permohonan_kabkota.img_stnkb, permohonan_kabkota.img_jasa_raharja, permohonan_kabkota.img_kir, permohonan_kabkota.created_at, permohonan_kabkota.updated_at, trayek.id as idtrayek, trayek.kode_trayek, trayek.trayek');

            $this->where(['permohonan_kabkota.slug' => $slug]);
            $this->where(['permohonan_kabkota.id' => $id]);

            $this->join('trayek', 'permohonan_kabkota.trayek_dilayani = trayek.kode_trayek');
            $query = $this->first();
            return $query;
        }
    }

    public function getPermohonanKab($slug = false, $id = false)
    {
        if ($slug == false && $id == false) {
            $this->db->table('permohonan_kabkota');
            $this->select('permohonan_kabkota.alamat_pemilik, permohonan_kabkota.slug, permohonan_kabkota.id as idpermohonan, permohonan_kabkota.koperasi_id, permohonan_kabkota.kabkota_id, permohonan_kabkota.status_asal, permohonan_kabkota.status_tujuan, permohonan_kabkota.trayek_dilayani, permohonan_kabkota.asal, permohonan_kabkota.tujuan, permohonan_kabkota.nomor_kendaraan, permohonan_kabkota.nama_pemilik, permohonan_kabkota.jenis_kendaraan, permohonan_kabkota.nomor_kir, permohonan_kabkota.merk, permohonan_kabkota.tahun_pembuatan, permohonan_kabkota.nomor_chasis, permohonan_kabkota.nomor_mesin, permohonan_kabkota.nomor_regis_pkb, permohonan_kabkota.img_surat_permohonan_koperasi, permohonan_kabkota.img_ktp_pemilik, permohonan_kabkota.img_stnkb, permohonan_kabkota.img_jasa_raharja, permohonan_kabkota.img_kir, permohonan_kabkota.created_at, permohonan_kabkota.updated_at, trayek.id as idtrayek, trayek.kode_trayek, trayek.trayek, user.nama_perusahaan');

            $this->where(['permohonan_kabkota.asal' => 2]);
            $this->orWhere(['permohonan_kabkota.tujuan' => 2]);

            $this->join('trayek', 'permohonan_kabkota.trayek_dilayani = trayek.kode_trayek');
            $this->join('user', 'permohonan_kabkota.koperasi_id = user.id');

            $query = $this->findAll();
            return $query;
        } else {
            $this->db->table('permohonan_kabkota');
            $this->select('permohonan_kabkota.alamat_pemilik, permohonan_kabkota.slug, permohonan_kabkota.id as idpermohonan, permohonan_kabkota.koperasi_id, permohonan_kabkota.kabkota_id, permohonan_kabkota.status_asal, permohonan_kabkota.status_tujuan, permohonan_kabkota.trayek_dilayani, permohonan_kabkota.asal, permohonan_kabkota.tujuan, permohonan_kabkota.nomor_kendaraan, permohonan_kabkota.nama_pemilik, permohonan_kabkota.jenis_kendaraan, permohonan_kabkota.nomor_kir, permohonan_kabkota.merk, permohonan_kabkota.tahun_pembuatan, permohonan_kabkota.nomor_chasis, permohonan_kabkota.nomor_mesin, permohonan_kabkota.nomor_regis_pkb, permohonan_kabkota.img_surat_permohonan_koperasi, permohonan_kabkota.img_ktp_pemilik, permohonan_kabkota.img_stnkb, permohonan_kabkota.img_jasa_raharja, permohonan_kabkota.img_kir, permohonan_kabkota.created_at, permohonan_kabkota.updated_at, trayek.id as idtrayek, trayek.kode_trayek, trayek.trayek');

            $this->where(['permohonan_kabkota.slug' => $slug]);
            $this->where(['permohonan_kabkota.id' => $id]);

            $this->join('trayek', 'permohonan_kabkota.trayek_dilayani = trayek.kode_trayek');
            $query = $this->first();
            return $query;
        }
    }

    public function getPermohonanBoneBol($slug = false, $id = false)
    {
        if ($slug == false && $id == false) {
            $this->db->table('permohonan_kabkota');
            $this->select('permohonan_kabkota.alamat_pemilik, permohonan_kabkota.slug, permohonan_kabkota.id as idpermohonan, permohonan_kabkota.koperasi_id, permohonan_kabkota.kabkota_id, permohonan_kabkota.status_asal, permohonan_kabkota.status_tujuan, permohonan_kabkota.trayek_dilayani, permohonan_kabkota.asal, permohonan_kabkota.tujuan, permohonan_kabkota.nomor_kendaraan, permohonan_kabkota.nama_pemilik, permohonan_kabkota.jenis_kendaraan, permohonan_kabkota.nomor_kir, permohonan_kabkota.merk, permohonan_kabkota.tahun_pembuatan, permohonan_kabkota.nomor_chasis, permohonan_kabkota.nomor_mesin, permohonan_kabkota.nomor_regis_pkb, permohonan_kabkota.img_surat_permohonan_koperasi, permohonan_kabkota.img_ktp_pemilik, permohonan_kabkota.img_stnkb, permohonan_kabkota.img_jasa_raharja, permohonan_kabkota.img_kir, permohonan_kabkota.created_at, permohonan_kabkota.updated_at, trayek.id as idtrayek, trayek.kode_trayek, trayek.trayek, user.nama_perusahaan');

            $this->where(['permohonan_kabkota.asal' => 3]);
            $this->orWhere(['permohonan_kabkota.tujuan' => 3]);

            $this->join('trayek', 'permohonan_kabkota.trayek_dilayani = trayek.kode_trayek');
            $this->join('user', 'permohonan_kabkota.koperasi_id = user.id');

            $query = $this->findAll();
            return $query;
        } else {
            $this->db->table('permohonan_kabkota');
            $this->select('permohonan_kabkota.alamat_pemilik, permohonan_kabkota.slug, permohonan_kabkota.id as idpermohonan, permohonan_kabkota.koperasi_id, permohonan_kabkota.kabkota_id, permohonan_kabkota.status_asal, permohonan_kabkota.status_tujuan, permohonan_kabkota.trayek_dilayani, permohonan_kabkota.asal, permohonan_kabkota.tujuan, permohonan_kabkota.nomor_kendaraan, permohonan_kabkota.nama_pemilik, permohonan_kabkota.jenis_kendaraan, permohonan_kabkota.nomor_kir, permohonan_kabkota.merk, permohonan_kabkota.tahun_pembuatan, permohonan_kabkota.nomor_chasis, permohonan_kabkota.nomor_mesin, permohonan_kabkota.nomor_regis_pkb, permohonan_kabkota.img_surat_permohonan_koperasi, permohonan_kabkota.img_ktp_pemilik, permohonan_kabkota.img_stnkb, permohonan_kabkota.img_jasa_raharja, permohonan_kabkota.img_kir, permohonan_kabkota.created_at, permohonan_kabkota.updated_at, trayek.id as idtrayek, trayek.kode_trayek, trayek.trayek');

            $this->where(['permohonan_kabkota.slug' => $slug]);
            $this->where(['permohonan_kabkota.id' => $id]);

            $this->join('trayek', 'permohonan_kabkota.trayek_dilayani = trayek.kode_trayek');
            $query = $this->first();
            return $query;
        }
    }


    public function getPermohonanGorut($slug = false, $id = false)
    {
        if ($slug == false && $id == false) {
            $this->db->table('permohonan_kabkota');
            $this->select('permohonan_kabkota.alamat_pemilik, permohonan_kabkota.slug, permohonan_kabkota.id as idpermohonan, permohonan_kabkota.koperasi_id, permohonan_kabkota.kabkota_id, permohonan_kabkota.status_asal, permohonan_kabkota.status_tujuan, permohonan_kabkota.trayek_dilayani, permohonan_kabkota.asal, permohonan_kabkota.tujuan, permohonan_kabkota.nomor_kendaraan, permohonan_kabkota.nama_pemilik, permohonan_kabkota.jenis_kendaraan, permohonan_kabkota.nomor_kir, permohonan_kabkota.merk, permohonan_kabkota.tahun_pembuatan, permohonan_kabkota.nomor_chasis, permohonan_kabkota.nomor_mesin, permohonan_kabkota.nomor_regis_pkb, permohonan_kabkota.img_surat_permohonan_koperasi, permohonan_kabkota.img_ktp_pemilik, permohonan_kabkota.img_stnkb, permohonan_kabkota.img_jasa_raharja, permohonan_kabkota.img_kir, permohonan_kabkota.created_at, permohonan_kabkota.updated_at, trayek.id as idtrayek, trayek.kode_trayek, trayek.trayek, user.nama_perusahaan');

            $this->where(['permohonan_kabkota.asal' => 4]);
            $this->orWhere(['permohonan_kabkota.tujuan' => 4]);

            $this->join('trayek', 'permohonan_kabkota.trayek_dilayani = trayek.kode_trayek');
            $this->join('user', 'permohonan_kabkota.koperasi_id = user.id');

            $query = $this->findAll();
            return $query;
        } else {
            $this->db->table('permohonan_kabkota');
            $this->select('permohonan_kabkota.alamat_pemilik, permohonan_kabkota.slug, permohonan_kabkota.id as idpermohonan, permohonan_kabkota.koperasi_id, permohonan_kabkota.kabkota_id, permohonan_kabkota.status_asal, permohonan_kabkota.status_tujuan, permohonan_kabkota.trayek_dilayani, permohonan_kabkota.asal, permohonan_kabkota.tujuan, permohonan_kabkota.nomor_kendaraan, permohonan_kabkota.nama_pemilik, permohonan_kabkota.jenis_kendaraan, permohonan_kabkota.nomor_kir, permohonan_kabkota.merk, permohonan_kabkota.tahun_pembuatan, permohonan_kabkota.nomor_chasis, permohonan_kabkota.nomor_mesin, permohonan_kabkota.nomor_regis_pkb, permohonan_kabkota.img_surat_permohonan_koperasi, permohonan_kabkota.img_ktp_pemilik, permohonan_kabkota.img_stnkb, permohonan_kabkota.img_jasa_raharja, permohonan_kabkota.img_kir, permohonan_kabkota.created_at, permohonan_kabkota.updated_at, trayek.id as idtrayek, trayek.kode_trayek, trayek.trayek');

            $this->where(['permohonan_kabkota.slug' => $slug]);
            $this->where(['permohonan_kabkota.id' => $id]);

            $this->join('trayek', 'permohonan_kabkota.trayek_dilayani = trayek.kode_trayek');
            $query = $this->first();
            return $query;
        }
    }
    public function getPermohonanBoalemo($slug = false, $id = false)
    {
        if ($slug == false && $id == false) {
            $this->db->table('permohonan_kabkota');
            $this->select('permohonan_kabkota.alamat_pemilik, permohonan_kabkota.slug, permohonan_kabkota.id as idpermohonan, permohonan_kabkota.koperasi_id, permohonan_kabkota.kabkota_id, permohonan_kabkota.status_asal, permohonan_kabkota.status_tujuan, permohonan_kabkota.trayek_dilayani, permohonan_kabkota.asal, permohonan_kabkota.tujuan, permohonan_kabkota.nomor_kendaraan, permohonan_kabkota.nama_pemilik, permohonan_kabkota.jenis_kendaraan, permohonan_kabkota.nomor_kir, permohonan_kabkota.merk, permohonan_kabkota.tahun_pembuatan, permohonan_kabkota.nomor_chasis, permohonan_kabkota.nomor_mesin, permohonan_kabkota.nomor_regis_pkb, permohonan_kabkota.img_surat_permohonan_koperasi, permohonan_kabkota.img_ktp_pemilik, permohonan_kabkota.img_stnkb, permohonan_kabkota.img_jasa_raharja, permohonan_kabkota.img_kir, permohonan_kabkota.created_at, permohonan_kabkota.updated_at, trayek.id as idtrayek, trayek.kode_trayek, trayek.trayek, user.nama_perusahaan');

            $this->where(['permohonan_kabkota.asal' => 5]);
            $this->orWhere(['permohonan_kabkota.tujuan' => 5]);

            $this->join('trayek', 'permohonan_kabkota.trayek_dilayani = trayek.kode_trayek');
            $this->join('user', 'permohonan_kabkota.koperasi_id = user.id');

            $query = $this->findAll();
            return $query;
        } else {
            $this->db->table('permohonan_kabkota');
            $this->select('permohonan_kabkota.alamat_pemilik, permohonan_kabkota.slug, permohonan_kabkota.id as idpermohonan, permohonan_kabkota.koperasi_id, permohonan_kabkota.kabkota_id, permohonan_kabkota.status_asal, permohonan_kabkota.status_tujuan, permohonan_kabkota.trayek_dilayani, permohonan_kabkota.asal, permohonan_kabkota.tujuan, permohonan_kabkota.nomor_kendaraan, permohonan_kabkota.nama_pemilik, permohonan_kabkota.jenis_kendaraan, permohonan_kabkota.nomor_kir, permohonan_kabkota.merk, permohonan_kabkota.tahun_pembuatan, permohonan_kabkota.nomor_chasis, permohonan_kabkota.nomor_mesin, permohonan_kabkota.nomor_regis_pkb, permohonan_kabkota.img_surat_permohonan_koperasi, permohonan_kabkota.img_ktp_pemilik, permohonan_kabkota.img_stnkb, permohonan_kabkota.img_jasa_raharja, permohonan_kabkota.img_kir, permohonan_kabkota.created_at, permohonan_kabkota.updated_at, trayek.id as idtrayek, trayek.kode_trayek, trayek.trayek');

            $this->where(['permohonan_kabkota.slug' => $slug]);
            $this->where(['permohonan_kabkota.id' => $id]);

            $this->join('trayek', 'permohonan_kabkota.trayek_dilayani = trayek.kode_trayek');
            $query = $this->first();
            return $query;
        }
    }
    public function getPermohonanPohuwato($slug = false, $id = false)
    {
        if ($slug == false && $id == false) {
            $this->db->table('permohonan_kabkota');
            $this->select('permohonan_kabkota.alamat_pemilik, permohonan_kabkota.slug, permohonan_kabkota.id as idpermohonan, permohonan_kabkota.koperasi_id, permohonan_kabkota.kabkota_id, permohonan_kabkota.status_asal, permohonan_kabkota.status_tujuan, permohonan_kabkota.trayek_dilayani, permohonan_kabkota.asal, permohonan_kabkota.tujuan, permohonan_kabkota.nomor_kendaraan, permohonan_kabkota.nama_pemilik, permohonan_kabkota.jenis_kendaraan, permohonan_kabkota.nomor_kir, permohonan_kabkota.merk, permohonan_kabkota.tahun_pembuatan, permohonan_kabkota.nomor_chasis, permohonan_kabkota.nomor_mesin, permohonan_kabkota.nomor_regis_pkb, permohonan_kabkota.img_surat_permohonan_koperasi, permohonan_kabkota.img_ktp_pemilik, permohonan_kabkota.img_stnkb, permohonan_kabkota.img_jasa_raharja, permohonan_kabkota.img_kir, permohonan_kabkota.created_at, permohonan_kabkota.updated_at, trayek.id as idtrayek, trayek.kode_trayek, trayek.trayek, user.nama_perusahaan');

            $this->where(['permohonan_kabkota.asal' => 6]);
            $this->orWhere(['permohonan_kabkota.tujuan' => 6]);

            $this->join('trayek', 'permohonan_kabkota.trayek_dilayani = trayek.kode_trayek');
            $this->join('user', 'permohonan_kabkota.koperasi_id = user.id');

            $query = $this->findAll();
            return $query;
        } else {
            $this->db->table('permohonan_kabkota');
            $this->select('permohonan_kabkota.alamat_pemilik, permohonan_kabkota.slug, permohonan_kabkota.id as idpermohonan, permohonan_kabkota.koperasi_id, permohonan_kabkota.kabkota_id, permohonan_kabkota.status_asal, permohonan_kabkota.status_tujuan, permohonan_kabkota.trayek_dilayani, permohonan_kabkota.asal, permohonan_kabkota.tujuan, permohonan_kabkota.nomor_kendaraan, permohonan_kabkota.nama_pemilik, permohonan_kabkota.jenis_kendaraan, permohonan_kabkota.nomor_kir, permohonan_kabkota.merk, permohonan_kabkota.tahun_pembuatan, permohonan_kabkota.nomor_chasis, permohonan_kabkota.nomor_mesin, permohonan_kabkota.nomor_regis_pkb, permohonan_kabkota.img_surat_permohonan_koperasi, permohonan_kabkota.img_ktp_pemilik, permohonan_kabkota.img_stnkb, permohonan_kabkota.img_jasa_raharja, permohonan_kabkota.img_kir, permohonan_kabkota.created_at, permohonan_kabkota.updated_at, trayek.id as idtrayek, trayek.kode_trayek, trayek.trayek');

            $this->where(['permohonan_kabkota.slug' => $slug]);
            $this->where(['permohonan_kabkota.id' => $id]);

            $this->join('trayek', 'permohonan_kabkota.trayek_dilayani = trayek.kode_trayek');
            $query = $this->first();
            return $query;
        }
    }

    public function getDataKoperasi($id = false)
    {
        if ($id == false) {
            $this->db->table('user');
            $this->select('*');
            $query = $this->findAll();
            return $query;
        } else {
            $this->db->table('permohonan_kabkota');
            $this->select('*');

            $this->join('user', 'permohonan_kabkota.koperasi_id = user.id');
            $this->where(['permohonan_kabkota.id' => $id]);
            $query = $this->first();
            return $query;
        }
    }
}
