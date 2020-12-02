<?php

namespace App\Controllers;

use App\Models\VerifikasiModel;
use App\Models\LoginModel;
use App\Models\MsgPenolakanModel;
use App\Models\JenisPermohonanModel;
use App\Models\TrayekModel;
use App\Models\KoperasiModel;
use chillerlan\QRCode\QRCode;


class Verifikasi extends BaseController
{
    protected $verifikasiModel;
    protected $user;
    protected $loginModel;
    protected $msgPenolakanModel;
    protected $jenisPermohonanModel;
    protected $trayekModel;
    protected $koperasiModel;

    public function __construct()
    {
        $this->verifikasiModel = new VerifikasiModel();
        $this->msgPenolakanModel = new MsgPenolakanModel();
        $this->loginModel = new LoginModel();
        $this->jenisPermohonanModel = new JenisPermohonanModel();
        $this->trayekModel = new TrayekModel();
        $this->koperasiModel = new KoperasiModel();
        $this->session = session();
        $this->user = $this->loginModel->where('email', $this->session->get('email'))->first();
    }

    public function verifikasi()
    {
        $data = [
            'title' => 'Proses Verifikasi',
            'session' => $this->user
        ];
        return view('verifikasi/verifikasi', $data);
    }

    public function rekomendasi()
    {
        if ($this->user['role'] == 2) {
            $data = [
                'title' => 'Data Permohonan',
                'permohonan' => $this->verifikasiModel->getRekomendasiVerifikasiVerifikator(),
                'session' => $this->user
            ];
            return view('verifikasi/rekomendasi', $data);
        } else {
            return view('blank');
        }
    }

    public function verifikasiptsp()
    {
        if ($this->user) {
            $data = [
                'title' => 'Data Permohonan',
                'permohonan' => $this->verifikasiModel->getRekomendasiVerifikasiPtsp(),
                'session' => $this->user
            ];
            return view('verifikasi/verifikasiptsp', $data);
        } else {
            return view('blank');
        }
    }

    public function approverekomendasi()
    {
        if ($this->user) {
            $data = [
                'title' => 'Data Permohonan',
                'permohonan' => $this->verifikasiModel->getRekomendasiVerifikasi(),
                'session' => $this->user
            ];
            return view('verifikasi/approverekomendasi', $data);
        } else {
            return view('blank');
        }
    }

    public function terverifikasi()
    {
        if ($this->user['role'] == 4 or $this->user['role'] == 3) {
            $data = [
                'title' => 'Data Permohonan',
                'permohonan' => $this->verifikasiModel->getRekomendasiterVerifikasiApprover(),
                'session' => $this->user
            ];
            return view('verifikasi/terverifikasi', $data);
        } else {
            return view('blank');
        }
    }

    public function blank()
    {
        return view('blank');
    }

    public function uploadIzinTrayek($id, $kdp, $kdt)
    {
        session();

        $data = [
            'title' => 'Detail Data Permohonan',
            'detail' => $this->verifikasiModel->getRekomendasi($id),
            'trayek' => $this->trayekModel->getTrayek($kdt),
            'session' => $this->user,
            'validation' => \Config\Services::validation(),

        ];
        return view('rekomendasi/uploadIzinTrayek', $data);
    }

    public function uploadpengantarptsp($id, $ids)
    {
        session();
        $asal = $this->koperasiModel->where('id', $ids)->first();
        $kdt = $asal['trayek_dilayani'];
        $data = [
            'title' => 'Detail Data Permohonan',
            'detail' => $this->verifikasiModel->getRekomendasi($id),
            'trayek' => $this->trayekModel->getTrayek($kdt),
            'session' => $this->user,
            'validation' => \Config\Services::validation(),

        ];
        return view('verifikasi/uploadpengantarptsp', $data);
    }

    public function uploadpengantarptsp2($kdb, $ids)
    {
        session();

        $asal = $this->koperasiModel->where('id', $ids)->first();
        $kdt = $asal['trayek_dilayani'];
        $data = [
            'title' => 'Detail Data Permohonan',
            'detail' => $this->verifikasiModel->getRekomendasi($kdb),
            'trayek' => $this->trayekModel->getTrayek($kdt),
            'session' => $this->user,
            'validation' => \Config\Services::validation(),

        ];
        return view('verifikasi/uploadpengantarptsp', $data);
    }

    public function uploadizin($kdb, $ids)
    {
        session();

        $asal = $this->koperasiModel->where('id', $ids)->first();
        $kdt = $asal['trayek_dilayani'];
        $data = [
            'title' => 'Detail Data Permohonan',
            'detail' => $this->verifikasiModel->getRekomendasi($kdb),
            'trayek' => $this->trayekModel->getTrayek($kdt),
            'session' => $this->user,
            'validation' => \Config\Services::validation(),

        ];
        return view('verifikasi/uploadizin', $data);
    }

    public function cetakKP($id, $kdp, $kdt)
    {
        session();

        $no_regis = $this->verifikasiModel->getRekomendasi($id);

        $qr = $no_regis['kode_booking'];

        // quick and simple:
        $qrcode = '<img width="170" src="' . (new QRCode)->render($qr) . '" alt="QR Code" />';

        $data = [
            'title' => 'Detail Data Permohonan',
            'detail' => $this->verifikasiModel->getRekomendasi($id),
            // 'jenis' => $this->jenisPermohonanModel->getJenisPermohonan($kdp),
            'trayek' => $this->trayekModel->getTrayek($kdt),
            'session' => $this->user,
            'qr' => $qrcode
        ];
        return view('verifikasi/cetakKP', $data);
    }

    public function details($id, $tr)
    {
        $data = [
            'title' => 'Detail Data Permohonan',
            'detail' => $this->verifikasiModel->getRekomendasi($id),
            'at' => $this->koperasiModel->getKoperasiVer($tr),
            'session' => $this->user
        ];
        return view('verifikasi/detailRekomendasi', $data);
    }

    public function detailTerverifikasi($kd)
    {
        $data = [
            'title' => 'Detail Data Permohonan',
            'detail' => $this->verifikasiModel->getRekomendasi($kd),
            'session' => $this->user
        ];
        return view('verifikasi/detailTerverifikasi', $data);
    }

    public function cetak($kd,  $kdt)
    {
        $detail = $this->verifikasiModel->getRekomendasi($kd);
        $nama = $detail['nama_perusahaan'];
        $nomor = $detail['nomor_kendaraan'];
        $jenis = $detail['jenis_permohonan'];
        $masa_berlaku = $detail['masa_berlaku'];

        $qr = '' . $nama . ' - ' . $nomor . ' - ' . 'Izin Trayek Angkutan Sampai Dengan' . ' ' . $masa_berlaku;

        // quick and simple:
        $qrcode = '<img width="150" src="' . (new QRCode)->render($qr) . '" alt="QR Code" />';
        $at = $this->koperasiModel->getKoperasiVer($kdt);
        $kode_trayek = $at['trayek_dilayani'];

        $data = [
            'title' => 'Cetak Permohonan',
            'detail' => $this->verifikasiModel->getRekomendasi($kd),
            'count' => $this->verifikasiModel->getRekomendasi(),
            'trayek' => $this->trayekModel->getTrayek($kode_trayek),
            'session' => $this->user,
            'qrq' => $qrcode
        ];
        return view('verifikasi/cetak', $data);
    }

    public function cetaktolak($kd, $kdt)
    {
        $detail = $this->verifikasiModel->getRekomendasi($kd);
        $nama = $detail['nama_perusahaan'];
        $nomor = $detail['nomor_kendaraan'];
        $jenis = $detail['jenis_permohonan'];
        $masa_berlaku = $detail['masa_berlaku'];

        $qr = '' . $nama . ' - ' . $nomor . ' - ' . 'Izin Trayek Angkutan Sampai Dengan' . ' ' . $masa_berlaku;

        // quick and simple:
        $qrcode = '<img width="150" src="' . (new QRCode)->render($qr) . '" alt="QR Code" />';
        $at = $this->koperasiModel->getKoperasiVer($kdt);
        $kode_trayek = $at['trayek_dilayani'];

        $data = [
            'title' => 'Cetak Permohonan',
            'detail' => $this->verifikasiModel->getRekomendasi($kd),
            'count' => $this->verifikasiModel->getRekomendasi(),
            'trayek' => $this->trayekModel->getTrayek($kode_trayek),
            'session' => $this->user,
            'qrq' => $qrcode
        ];
        return view('verifikasi/cetaktolak', $data);
    }

    public function terima($id)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_verifikasi' => 1,
            'masa_berlaku' => $this->request->getVar('masa_berlaku_submit'),
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil dikirim, mengunngu verivikasi</div>');
        return redirect()->to('/verifikasi/rekomendasi/');
    }

    public function saveUploadIzinTrayek()
    {

        $img_izin_trayek = $this->request->getFile('img_izin_trayek');
        $kode_booking = $this->request->getVar('kode_booking');
        $jenis_permohonan = $this->request->getVar('jenis_permohonan');
        $trayek_dilayani = $this->request->getVar('trayek_dilayani');

        if (!$this->validate([
            'img_izin_trayek' => [
                'rules' => 'uploaded[img_izin_trayek]|max_size[img_izin_trayek,1024]|is_image[img_izin_trayek]|mime_in[img_izin_trayek,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                    'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                    'is_image' => 'Ini bukan gambar',
                    'mime_in' => 'Ini bukan gambar'
                ]
            ],
        ])) {
            return redirect()->to('/verifikasi/uploadIzinTrayek/' . $kode_booking . '/' . $jenis_permohonan . '/' . $trayek_dilayani . '')->withInput();
        }

        if ($img_izin_trayek) {

            if ($img_izin_trayek->getError() == 4) {
                $nama_img_izin_trayek = $this->request->getVar('img_izin_trayek_lama');
            } else {
                $nama_img_izin_trayek = $img_izin_trayek->getRandomName();
                $img_izin_trayek->move('img/img_izin_trayek', $nama_img_izin_trayek);
                if ($this->request->getVar('img_izin_trayek_lama')) {
                    unlink('img/img_izin_trayek/' . $this->request->getVar('img_izin_trayek_lama'));
                } else {
                }
            }
        }
        $this->verifikasiModel->save([
            'id' => $this->request->getVar('id'),
            'img_izin_trayek' => $nama_img_izin_trayek,
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Berhasil Di Upload</div>');
        return redirect()->to('/rekomendasi/rekomendasi/');
    }

    public function saveUploadIzin()
    {

        $img_izin_akdp = $this->request->getFile('img_izin_akdp');
        $kode_booking = $this->request->getVar('kode_booking');
        $jenis_permohonan = $this->request->getVar('jenis_permohonan');
        $trayek_dilayani = $this->request->getVar('trayek_dilayani');

        if (!$this->validate([
            'img_izin_akdp' => [
                'rules' => 'uploaded[img_izin_akdp]|max_size[img_izin_akdp,1024]|is_image[img_izin_akdp]|mime_in[img_izin_akdp,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                    'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                    'is_image' => 'Ini bukan gambar',
                    'mime_in' => 'Ini bukan gambar'
                ]
            ],
        ])) {
            return redirect()->to('/verifikasi/uploadIzinTrayek/' . $kode_booking . '/' . $jenis_permohonan . '/' . $trayek_dilayani . '')->withInput();
        }

        if ($img_izin_akdp) {

            if ($img_izin_akdp->getError() == 4) {
                $nama_img_izin_akdp = $this->request->getVar('img_izin_akdp_lama');
            } else {
                $nama_img_izin_akdp = $img_izin_akdp->getRandomName();
                $img_izin_akdp->move('img/img_izin_akdp', $nama_img_izin_akdp);
                if ($this->request->getVar('img_izin_akdp_lama')) {
                    unlink('img/img_izin_akdp/' . $this->request->getVar('img_izin_akdp_lama'));
                } else {
                }
            }
        }
        $this->verifikasiModel->save([
            'id' => $this->request->getVar('id'),
            'img_izin_akdp' => $nama_img_izin_akdp,
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Berhasil Di Upload</div>');
        return redirect()->to('/verifikasi/verifikasiptsp');
    }

    public function saveuploadpengantarptsp()
    {

        $img_pengantar_ptsp = $this->request->getFile('img_pengantar_ptsp');
        $kode_booking = $this->request->getVar('kode_booking');
        $jenis_permohonan = $this->request->getVar('jenis_permohonan');
        $trayek_dilayani = $this->request->getVar('trayek_dilayani');

        if (!$this->validate([
            'img_pengantar_ptsp' => [
                'rules' => 'uploaded[img_pengantar_ptsp]|max_size[img_pengantar_ptsp,1024]|is_image[img_pengantar_ptsp]|mime_in[img_pengantar_ptsp,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                    'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                    'is_image' => 'Ini bukan gambar',
                    'mime_in' => 'Ini bukan gambar'
                ]
            ],
        ])) {
            return redirect()->to('/verifikasi/uploadIzinTrayek/' . $kode_booking . '/' . $jenis_permohonan . '/' . $trayek_dilayani . '')->withInput();
        }

        if ($img_pengantar_ptsp) {

            if ($img_pengantar_ptsp->getError() == 4) {
                $nama_img_pengantar_ptsp = $this->request->getVar('img_pengantar_ptsp_lama');
            } else {
                $nama_img_pengantar_ptsp = $img_pengantar_ptsp->getRandomName();
                $img_pengantar_ptsp->move('img/img_pengantar_ptsp', $nama_img_pengantar_ptsp);
                if ($this->request->getVar('img_pengantar_ptsp_lama')) {
                    unlink('img/img_pengantar_ptsp/' . $this->request->getVar('img_pengantar_ptsp_lama'));
                } else {
                }
            }
        }
        $this->verifikasiModel->save([
            'id' => $this->request->getVar('id'),
            'img_pengantar_ptsp' => $nama_img_pengantar_ptsp,
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Berhasil Di Upload</div>');
        return redirect()->to('/verifikasi/verifikasiptsp/');
    }

    public function tolak($id)
    {
        $this->msgPenolakanModel->save([
            'kode_booking' => $this->request->getVar('kode_booking'),
            'msg' => $this->request->getVar('msg'),
        ]);

        $this->verifikasiModel->save([
            'id' => $id,
            'status_verifikasi' => 3,
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil dikirim, mengunngu verivikasi</div>');
        return redirect()->to('/verifikasi/rekomendasi/');
    }

    public function approve($kdb, $tr, $id)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_verifikasi' => 3,
            'tgl_approve' => date('Y-m-d'),
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil dikirim, mengunngu verivikasi</div>');
        return redirect()->to('/verifikasi/terverifikasi');
    }

    public function terimaptsp($id)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_verifikasi' => 1,
            'verifikator' => 1,
            'status_img_surat_permohonan' => 0,
            'status_img_stnkb_pkb' => 0,
            'status_img_kir' => 0,
            'status_img_jasa_raharja' => 0,
            'status_img_surat_pernyataan' => 0,
            'status_img_pengantar_ptsp' => 0,
            'status_img_izin_trayek' => 0,
            'status_img_akte_perusahaan' => 0,
            'status_img_tdp' => 1,
            'status_img_siup' => 0,
            'status_img_npwp' => 0,
            'status_img_ktp' => 0,
            'status_img_trayek' => 0,
            'status_img_trayek_tujuan' => 0,
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil dikirim, mengunngu verivikasi</div>');
        return redirect()->to('/verifikasi/verifikasiptsp/');
    }
    public function tolakptsp($id, $idasal)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_verifikasi' => 4,
        ]);

        $this->koperasiModel->save([
            'id' => $idasal,
            'used' => 0,
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil dikirim, mengunngu verivikasi</div>');
        return redirect()->to('/verifikasi/verifikasiptsp/');
    }

    public function terimaverifikator($id)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_verifikasi' => 2,
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil dikirim, mengunngu verivikasi</div>');
        return redirect()->to('/verifikasi/rekomendasi/');
    }
    public function tolakverifikator($id, $idasal)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_verifikasi' => 4,
        ]);

        $this->koperasiModel->save([
            'id' => $idasal,
            'used' => 0,
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil dikirim, mengunngu verivikasi</div>');
        return redirect()->to('/verifikasi/rekomendasi/');
    }

    public function saveapprove($id)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_verifikasi' => 3,
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil dikirim, mengunngu verivikasi</div>');
        return redirect()->to('/verifikasi/approverekomendasi/');
    }
    public function tolaksaveapprove($id, $idasal)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_verifikasi' => 4,
        ]);

        $this->koperasiModel->save([
            'id' => $idasal,
            'used' => 0,
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil dikirim, mengunngu verivikasi</div>');
        return redirect()->to('/verifikasi/approverekomendasi/');
    }

    public function terima0($kdb, $tr, $id)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_img_surat_permohonan' => 1,
        ]);
        return redirect()->to('/verifikasi/details/' . $kdb . '/' . $tr . '/' . $id . '');
    }
    public function tolak0($kdb, $tr, $id)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_img_surat_permohonan' => 2,
        ]);
        return redirect()->to('/verifikasi/details/' . $kdb . '/' . $tr . '/' . $id . '');
    }

    public function terima1($kdb, $tr, $id)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_img_stnkb_pkb' => 1,
        ]);
        return redirect()->to('/verifikasi/details/' . $kdb . '/' . $tr . '/' . $id . '');
    }
    public function tolak1($kdb, $tr, $id)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_img_stnkb_pkb' => 2,
        ]);
        return redirect()->to('/verifikasi/details/' . $kdb . '/' . $tr . '/' . $id . '');
    }

    public function terima2($kdb, $tr, $id)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_img_kir' => 1,
        ]);
        return redirect()->to('/verifikasi/details/' . $kdb . '/' . $tr . '/' . $id . '');
    }
    public function tolak2($kdb, $tr, $id)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_img_kir' => 2,
        ]);
        return redirect()->to('/verifikasi/details/' . $kdb . '/' . $tr . '/' . $id . '');
    }

    public function terima3($kdb, $tr, $id)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_img_jasa_raharja' => 1,
        ]);
        return redirect()->to('/verifikasi/details/' . $kdb . '/' . $tr . '/' . $id . '');
    }
    public function tolak3($kdb, $tr, $id)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_img_jasa_raharja' => 2,
        ]);
        return redirect()->to('/verifikasi/details/' . $kdb . '/' . $tr . '/' . $id . '');
    }

    public function terima4($kdb, $tr, $id)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_img_surat_pernyataan' => 1,
        ]);
        return redirect()->to('/verifikasi/details/' . $kdb . '/' . $tr . '/' . $id . '');
    }
    public function tolak4($kdb, $tr, $id)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_img_surat_pernyataan' => 2,
        ]);
        return redirect()->to('/verifikasi/details/' . $kdb . '/' . $tr . '/' . $id . '');
    }

    public function terimaa($kdb, $tr, $id)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_img_akte_perusahaan' => 1,
        ]);
        return redirect()->to('/verifikasi/details/' . $kdb . '/' . $tr . '/' . $id . '');
    }
    public function tolaka($kdb, $tr, $id)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_img_akte_perusahaan' => 2,
        ]);
        return redirect()->to('/verifikasi/details/' . $kdb . '/' . $tr . '/' . $id . '');
    }

    public function terimab($kdb, $tr, $id)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_img_tdp' => 1,
        ]);
        return redirect()->to('/verifikasi/details/' . $kdb . '/' . $tr . '/' . $id . '');
    }
    public function tolakb($kdb, $tr, $id)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_img_tdp' => 2,
        ]);
        return redirect()->to('/verifikasi/details/' . $kdb . '/' . $tr . '/' . $id . '');
    }

    public function terimac($kdb, $tr, $id)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_img_siup' => 1,
        ]);
        return redirect()->to('/verifikasi/details/' . $kdb . '/' . $tr . '/' . $id . '');
    }
    public function tolakc($kdb, $tr, $id)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_img_siup' => 2,
        ]);
        return redirect()->to('/verifikasi/details/' . $kdb . '/' . $tr . '/' . $id . '');
    }

    public function terimad($kdb, $tr, $id)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_img_npwp' => 1,
        ]);
        return redirect()->to('/verifikasi/details/' . $kdb . '/' . $tr . '/' . $id . '');
    }
    public function tolakd($kdb, $tr, $id)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_img_npwp' => 2,
        ]);
        return redirect()->to('/verifikasi/details/' . $kdb . '/' . $tr . '/' . $id . '');
    }

    public function terimae($kdb, $tr, $id)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_img_ktp' => 1,
        ]);
        return redirect()->to('/verifikasi/details/' . $kdb . '/' . $tr . '/' . $id . '');
    }
    public function tolake($kdb, $tr, $id)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_img_ktp' => 2,
        ]);
        return redirect()->to('/verifikasi/details/' . $kdb . '/' . $tr . '/' . $id . '');
    }

    public function terimaf($kdb, $tr, $id)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_img_trayek' => 1,
        ]);
        return redirect()->to('/verifikasi/details/' . $kdb . '/' . $tr . '/' . $id . '');
    }
    public function tolakf($kdb, $tr, $id)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_img_trayek' => 2,
        ]);
        return redirect()->to('/verifikasi/details/' . $kdb . '/' . $tr . '/' . $id . '');
    }

    public function terimag($kdb, $tr, $id)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_img_trayek_tujuan' => 1,
        ]);
        return redirect()->to('/verifikasi/details/' . $kdb . '/' . $tr . '/' . $id . '');
    }
    public function tolakg($kdb, $tr, $id)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_img_trayek_tujuan' => 2,
        ]);
        return redirect()->to('/verifikasi/details/' . $kdb . '/' . $tr . '/' . $id . '');
    }

    public function tolakpermohonan()
    {
        $img = $this->request->getFile('img');

        $kdb = $this->request->getVar('kode_booking');
        $tr = $this->request->getVar('trayek_dilayani');

        if ($img->getError() == 4) {
            $nama_img = "default.png";
        } else {
            $nama_img = $img->getRandomName();
            $img->move('img/img', $nama_img);
        }

        $this->verifikasiModel->save([
            'id' => $this->request->getVar('idpermohonan'),
            'status_verifikasi' => 4,
            'ptsp' => 0,
            'verifikator' => 0,
            'approver' => 0,
            'status_verifikasi' => 4,
            'tgl_approve' => date('Y-m-d'),
        ]);
        $this->koperasiModel->save([
            'id' => $tr,
            'used' => 0
        ]);

        $this->msgPenolakanModel->save([
            'kode_booking' => $this->request->getVar('kode_booking'),
            'msg' => $this->request->getVar('msg'),
            'img' => $nama_img,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);
        return redirect()->to('/verifikasi/details/' . $kdb . '/' . $tr . '/' . $this->request->getVar('idpermohonan') . '');
    }

    public function uploadPenolakan($id, $ids)
    {
        session();

        $permohonan = $this->koperasiModel->getPermohonan($ids);
        $kdt = $permohonan['trayek_dilayani'];

        $data = [
            'title' => 'Detail Data Permohonan',
            'detail' => $this->verifikasiModel->getRekomendasi($id),
            'trayek' => $this->trayekModel->getTrayek($kdt),
            'session' => $this->user,
            'validation' => \Config\Services::validation(),

        ];
        return view('verifikasi/uploadpenolakan', $data);
    }

    public function uploadrekomendasi($id, $ids)
    {
        session();

        $permohonan = $this->koperasiModel->getPermohonan($ids);
        $kdt = $permohonan['trayek_dilayani'];

        $data = [
            'title' => 'Detail Data Permohonan',
            'detail' => $this->verifikasiModel->getRekomendasi($id),
            'trayek' => $this->trayekModel->getTrayek($kdt),
            'session' => $this->user,
            'validation' => \Config\Services::validation(),

        ];
        return view('verifikasi/uploadrekomendasi', $data);
    }

    public function detailpenolakan($id, $ids)
    {
        session();

        $permohonan = $this->koperasiModel->getPermohonan($ids);
        $kdt = $permohonan['trayek_dilayani'];

        $data = [
            'title' => 'Detail Data Permohonan',
            'detail' => $this->verifikasiModel->getRekomendasi($id),
            'msg' => $this->msgPenolakanModel->getMsgPenolakans($id),
            'trayek' => $this->trayekModel->getTrayek($kdt),
            'session' => $this->user,
            'validation' => \Config\Services::validation(),

        ];
        return view('verifikasi/detailpenolakan', $data);
    }

    public function perbaiki($kdb, $id)
    {
        $this->verifikasiModel->save([
            'id' => $id,
            'status_verifikasi' => 5,
            'img_pengantar_ptsp' => "",
            'img_izin_trayek' => "",
            'img_penolakan' => "",
            'status_img_surat_permohonan' => 0,
            'status_img_stnkb_pkb' => 0,
            'status_img_kir' => 0,
            'status_img_jasa_raharja' => 0,
            'status_img_surat_pernyataan' => 0,
            'status_img_pengantar_ptsp' => 0,
            'status_img_izin_trayek' => 0,
            'status_img_akte_perusahaan' => 0,
            'status_img_tdp' => 1,
            'status_img_siup' => 0,
            'status_img_npwp' => 0,
            'status_img_ktp' => 0,
            'status_img_trayek' => 0,
            'status_img_trayek_tujuan' => 0,
        ]);
        return redirect()->to('/rekomendasi/step11/' . $kdb . '');
    }

    public function savepenolakan()
    {

        $img_penolakan = $this->request->getFile('img_penolakan');
        $kode_booking = $this->request->getVar('kode_booking');
        $trayek_dilayani = $this->request->getVar('trayek_dilayani');

        if (!$this->validate([
            'img_penolakan' => [
                'rules' => 'uploaded[img_penolakan]|max_size[img_penolakan,1024]|is_image[img_penolakan]|mime_in[img_penolakan,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                    'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                    'is_image' => 'Ini bukan gambar',
                    'mime_in' => 'Ini bukan gambar'
                ]
            ],
        ])) {
            return redirect()->to('/verifikasi/uploadpenolakan/' . $kode_booking . '/' . $trayek_dilayani . '')->withInput();
        }

        if ($img_penolakan) {

            if ($img_penolakan->getError() == 4) {
                $nama_img_penolakan = $this->request->getVar('img_penolakan_lama');
            } else {
                $nama_img_penolakan = $img_penolakan->getRandomName();
                $img_penolakan->move('img/img_penolakan', $nama_img_penolakan);
                if ($this->request->getVar('img_penolakan_lama')) {
                    unlink('img/img_penolakan/' . $this->request->getVar('img_penolakan_lama'));
                } else {
                }
            }
        }
        $this->verifikasiModel->save([
            'id' => $this->request->getVar('id'),
            'img_penolakan' => $nama_img_penolakan,
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Berhasil Di Upload</div>');
        return redirect()->to('/verifikasi/uploadpenolakan/' . $kode_booking . '/' . $trayek_dilayani . '');
    }

    public function saverekomendasi()
    {

        $img_penolakan = $this->request->getFile('img_penolakan');
        $kode_booking = $this->request->getVar('kode_booking');
        $trayek_dilayani = $this->request->getVar('trayek_dilayani');

        if (!$this->validate([
            'img_penolakan' => [
                'rules' => 'uploaded[img_penolakan]|max_size[img_penolakan,1024]|is_image[img_penolakan]|mime_in[img_penolakan,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar dokumen terlebih dahulu',
                    'max_size' => 'Ukuran gambar terlalu besar (Maksimal 1Mb)',
                    'is_image' => 'Ini bukan gambar',
                    'mime_in' => 'Ini bukan gambar'
                ]
            ],
        ])) {
            return redirect()->to('/verifikasi/uploadrekomendasi/' . $kode_booking . '/' . $trayek_dilayani . '')->withInput();
        }

        if ($img_penolakan) {

            if ($img_penolakan->getError() == 4) {
                $nama_img_penolakan = $this->request->getVar('img_penolakan_lama');
            } else {
                $nama_img_penolakan = $img_penolakan->getRandomName();
                $img_penolakan->move('img/img_penolakan', $nama_img_penolakan);
                if ($this->request->getVar('img_penolakan_lama')) {
                    unlink('img/img_penolakan/' . $this->request->getVar('img_penolakan_lama'));
                } else {
                }
            }
        }
        $this->verifikasiModel->save([
            'id' => $this->request->getVar('id'),
            'img_penolakan' => $nama_img_penolakan,
        ]);

        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Berhasil Di Upload</div>');
        return redirect()->to('/verifikasi/uploadrekomendasi/' . $kode_booking . '/' . $trayek_dilayani . '');
    }
}
