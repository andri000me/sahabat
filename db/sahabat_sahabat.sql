-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 17, 2020 at 02:01 PM
-- Server version: 10.0.38-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sahabat_sahabat`
--

-- --------------------------------------------------------

--
-- Table structure for table `ask`
--

CREATE TABLE `ask` (
  `id` int(11) NOT NULL,
  `slug` text NOT NULL,
  `kode_registrasi` varchar(512) NOT NULL,
  `id_koperasi` text NOT NULL,
  `ptsp` text NOT NULL,
  `status_ptsp` varchar(512) NOT NULL,
  `ptsp_approve` int(11) NOT NULL,
  `dishub` text NOT NULL,
  `status_dishub` varchar(512) NOT NULL,
  `penerbitan` text NOT NULL,
  `ptsp_penerbitan` int(11) NOT NULL,
  `status_penerbitan` text NOT NULL,
  `dishub_approve` int(11) NOT NULL,
  `dishub_approvve` int(11) NOT NULL,
  `pelayanan_dimohon` text NOT NULL,
  `jumlah_kendaraan` varchar(512) NOT NULL,
  `jenis_kendaraan` text NOT NULL,
  `kapasitas_angkut` text NOT NULL,
  `wilayah_operasi` text NOT NULL,
  `pengaruh` text NOT NULL,
  `kelas_jalan` text NOT NULL,
  `fasilitas_pool` text NOT NULL,
  `fasilitas_perawatan` text NOT NULL,
  `img_surat_permohonan` text NOT NULL,
  `img_bukti_pengesahan` text NOT NULL,
  `img_domisili` text NOT NULL,
  `img_pernyataan_kesanggupan` text NOT NULL,
  `img_pernyataan_kerjasama` text NOT NULL,
  `img_perjanjian` text NOT NULL,
  `img_pemda` text NOT NULL,
  `img_rencana_bisnis` text NOT NULL,
  `img_penolakan_ptsp` text,
  `img_persetujuan_ptsp` text,
  `img_surat_persetujuan` text NOT NULL,
  `img_permohonan` text NOT NULL,
  `img_penolakan_permohonan` text NOT NULL,
  `img_penerbitan` text NOT NULL,
  `img_penolakan_penerbitan` text NOT NULL,
  `img_izin` text NOT NULL,
  `img_penolakan_izin` text NOT NULL,
  `created_at` text NOT NULL,
  `updated_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ask`
--

INSERT INTO `ask` (`id`, `slug`, `kode_registrasi`, `id_koperasi`, `ptsp`, `status_ptsp`, `ptsp_approve`, `dishub`, `status_dishub`, `penerbitan`, `ptsp_penerbitan`, `status_penerbitan`, `dishub_approve`, `dishub_approvve`, `pelayanan_dimohon`, `jumlah_kendaraan`, `jenis_kendaraan`, `kapasitas_angkut`, `wilayah_operasi`, `pengaruh`, `kelas_jalan`, `fasilitas_pool`, `fasilitas_perawatan`, `img_surat_permohonan`, `img_bukti_pengesahan`, `img_domisili`, `img_pernyataan_kesanggupan`, `img_pernyataan_kerjasama`, `img_perjanjian`, `img_pemda`, `img_rencana_bisnis`, `img_penolakan_ptsp`, `img_persetujuan_ptsp`, `img_surat_persetujuan`, `img_permohonan`, `img_penolakan_permohonan`, `img_penerbitan`, `img_penolakan_penerbitan`, `img_izin`, `img_penolakan_izin`, `created_at`, `updated_at`) VALUES
(18, 'ksu-tetap-setia-bhayangkara', '20201116233228', '6', '1', '2', 0, '1', '2', '1', 0, '1', 1, 0, 'Angkutan Sewa Khusus yang bekerjasama dengan Perusahaan Aplikasi di Bidang Transportasi Darat PT. Solusi Transportasi Indonesia (Grab)\r\n', '2', 'Minibus/Mobil Penumpang', '4', 'Kota Gorontalo', 'Mendukung Pelayanan Angkutan', 'Jalan Arteri dan Jalan Kolektor', 'Ada', ' Ada', '1605591260_0f3be27c3e6623c24ecb.jpeg', '1605591260_e4ebb31e1a1dce763e8e.jpeg', '1605591260_c402ac42d7a47f08ce41.jpeg', '1605591260_356a72373fc4171bf94f.jpeg', '1605591260_78893d8e9e0f05a1622d.jpeg', '1605591260_d11366f80c1f3d0e7874.jpeg', '1605591260_d5a7466cd59c42b7f1c6.jpeg', '1605591260_5a66d64d4ca9344f8c6a.jpeg', NULL, '1605591318_388fd97a428980a43539.jpeg', '', '', '', '', '', '', '', '2020-11-16 23:34:20', '2020-11-16 23:45:23');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_permohonan`
--

CREATE TABLE `jenis_permohonan` (
  `id` int(11) NOT NULL,
  `kode` varchar(512) NOT NULL,
  `nama` varchar(512) NOT NULL,
  `kuota` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_permohonan`
--

INSERT INTO `jenis_permohonan` (`id`, `kode`, `nama`, `kuota`, `created_at`, `updated_at`) VALUES
(1, 'JP1233414', 'Pertimbangan Teknis Izin Trayek AKDP', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `msg_penolakan`
--

CREATE TABLE `msg_penolakan` (
  `id` int(11) NOT NULL,
  `kode_booking` varchar(512) NOT NULL,
  `msg` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nomor_surat`
--

CREATE TABLE `nomor_surat` (
  `id` int(11) NOT NULL,
  `nomor` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nomor_surat`
--

INSERT INTO `nomor_surat` (`id`, `nomor`, `created_at`, `updated_at`) VALUES
(1, 46, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `permohonan`
--

CREATE TABLE `permohonan` (
  `id` int(11) NOT NULL,
  `user_id` varchar(512) NOT NULL,
  `verificator_id` varchar(512) NOT NULL,
  `approver_id` varchar(512) NOT NULL,
  `slug` text,
  `kode_booking` varchar(512) DEFAULT NULL,
  `status` varchar(512) NOT NULL,
  `status_verifikasi` int(11) DEFAULT NULL,
  `tgl_permohonan` varchar(512) NOT NULL,
  `nama_pemohon` varchar(512) NOT NULL,
  `alamat_pemohon` text NOT NULL,
  `jenis_permohonan` varchar(512) NOT NULL,
  `trayek_dilayani` varchar(512) NOT NULL,
  `nomor_kendaraan` varchar(512) NOT NULL,
  `nama_pemilik` varchar(512) NOT NULL,
  `alamat_pemilik` varchar(512) NOT NULL,
  `jenis_kendaraan` varchar(512) NOT NULL,
  `tahun_pembuatan` varchar(512) NOT NULL,
  `nomor_kir` varchar(512) NOT NULL,
  `kapasitas_angkutan` varchar(512) NOT NULL,
  `uji_berkala_berlaku` varchar(512) NOT NULL,
  `stnkb_berlaku` varchar(512) NOT NULL,
  `pkb_berlaku` varchar(512) NOT NULL,
  `jasa_raharja_berlaku` varchar(512) NOT NULL,
  `img_surat_permohonan` varchar(512) NOT NULL,
  `img_akte_perusahaan` varchar(512) NOT NULL,
  `img_tdp` varchar(512) NOT NULL,
  `img_siup` varchar(512) NOT NULL,
  `img_npwp` varchar(512) NOT NULL,
  `img_ktp` varchar(512) NOT NULL,
  `img_trayek` varchar(512) DEFAULT NULL,
  `img_trayek_tujuan` text NOT NULL,
  `img_stnkb_pkb` varchar(512) NOT NULL,
  `img_kir` mediumtext NOT NULL,
  `img_jasa_raharja` varchar(512) NOT NULL,
  `img_surat_pernyataan` varchar(512) NOT NULL,
  `img_pengantar_ptsp` text NOT NULL,
  `img_izin_trayek` text NOT NULL,
  `tgl_approve` text NOT NULL,
  `masa_berlaku` varchar(512) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `permohonan_kabkota`
--

CREATE TABLE `permohonan_kabkota` (
  `id` int(11) NOT NULL,
  `slug` text NOT NULL,
  `koperasi_id` varchar(512) NOT NULL,
  `kabkota_id` varchar(512) NOT NULL,
  `status_asal` varchar(512) NOT NULL,
  `status_tujuan` varchar(512) NOT NULL,
  `trayek_dilayani` varchar(512) NOT NULL,
  `asal` varchar(512) NOT NULL,
  `tujuan` varchar(512) NOT NULL,
  `nomor_kendaraan` varchar(512) NOT NULL,
  `nama_pemilik` varchar(512) NOT NULL,
  `alamat_pemilik` text NOT NULL,
  `jenis_kendaraan` varchar(512) NOT NULL,
  `nomor_kir` varchar(512) NOT NULL,
  `merk` text NOT NULL,
  `tahun_pembuatan` text NOT NULL,
  `nomor_chasis` text NOT NULL,
  `nomor_mesin` text NOT NULL,
  `nomor_regis_pkb` text NOT NULL,
  `img_surat_permohonan_koperasi` text NOT NULL,
  `img_ktp_pemilik` text NOT NULL,
  `img_stnkb` varchar(512) NOT NULL,
  `img_jasa_raharja` varchar(512) NOT NULL,
  `img_kir` varchar(512) NOT NULL,
  `img_penolakan_asal` text NOT NULL,
  `img_rekomendasi_asal` text NOT NULL,
  `img_penolakan_tujuan` text NOT NULL,
  `img_rekomendasi_tujuan` text NOT NULL,
  `foto_depan` text NOT NULL,
  `foto_belakang` text NOT NULL,
  `foto_kanan` text NOT NULL,
  `foto_kiri` text NOT NULL,
  `tgl_approve` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ranmor`
--

CREATE TABLE `ranmor` (
  `id` int(11) NOT NULL,
  `ask_kode_registrasi` varchar(512) NOT NULL,
  `nomor_kendaraan` varchar(512) NOT NULL,
  `nomor_uji` varchar(512) NOT NULL,
  `kapasitas` varchar(512) NOT NULL,
  `img_ranmor` text NOT NULL,
  `created_at` varchar(512) NOT NULL,
  `updated_at` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ranmor`
--

INSERT INTO `ranmor` (`id`, `ask_kode_registrasi`, `nomor_kendaraan`, `nomor_uji`, `kapasitas`, `img_ranmor`, `created_at`, `updated_at`) VALUES
(30, '20201116233228', 'DM1234AS', 'DB.123.SDS.12', '4', '1605591709_fb196e8d6c4c9a1c8fdb.jpeg', '2020-11-16 23:41:49', '2020-11-16 23:41:49'),
(31, '20201116233228', 'DM1234AS', 'DB.123.SDS.12', '4', '1605591815_b978127193063cc192a7.jpeg', '2020-11-16 23:43:35', '2020-11-16 23:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `trayek`
--

CREATE TABLE `trayek` (
  `id` int(11) NOT NULL,
  `kode_trayek` varchar(512) NOT NULL,
  `trayek` text NOT NULL,
  `kuota` int(11) NOT NULL,
  `terisi` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trayek`
--

INSERT INTO `trayek` (`id`, `kode_trayek`, `trayek`, `kuota`, `terisi`, `created_at`, `updated_at`) VALUES
(1, 'AA-01', 'Terminal Pusat Kota Gorontalo - Iluta - Batudaa - Terminal Bongomeme, PP\r\n', 34, 48, NULL, NULL),
(2, 'AA-02', 'Terminal Dungingi Kota Gorontalo – Terminal Tilamuta, PPTerminal Pusat Kota Gorontalo - Tml. Telaga - Tml. Limboto, PP\r\n', 19, 22, NULL, NULL),
(7, 'AA-03', 'Terminal Pusat Kota Gorontalo - Bongo - Kayubulan, PP\r\n', 14, 1, NULL, NULL),
(8, 'AA-04', 'Terminal Pusat Kota Gorontalo - Kabila - Suwawa, PP\r\n', 13, 1, NULL, NULL),
(9, 'AA-05', 'Terminal Pusat Kota Gorontalo - Botupingge - Timbuolo - Bondawuna, PP\r\n', 8, 1, NULL, NULL),
(10, 'AA-06', 'Terminal Pusat Kota Gorontalo - Tml. Tapa - Tupa, PP\r\n', 24, 1, NULL, NULL),
(11, 'AB-01', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Tml. Molingkapoto - Pel. Kwandang, PP\r\n', 48, 1, NULL, NULL),
(12, 'AB-02', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Tml. Paguyaman - Tml. Tilamuta, PP\r\n', 45, 1, NULL, NULL),
(13, 'AB-03', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Kwandang - Tml. Atinggola, PP\r\n', 42, 1, NULL, NULL),
(14, 'AB-04', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Tml. Paguyaman, PP\r\n', 35, 1, NULL, NULL),
(15, 'AB-05', 'Terminal Dungingi Kota Gorontalo - Tml. Telaga - Tml. Isimu, PP\r\n', 25, 1, NULL, NULL),
(16, 'AB-06', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Tml. Paguyaman - Tml. Tilamuta - Paguat - Tml. Marisa, PP\r\n', 20, 1, NULL, NULL),
(17, 'AB-07', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Tml. Molingkapoto - Monano - Sumalata, PP\r\n', 19, 1, NULL, NULL),
(18, 'AB-08', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Tml. Molingkapoto - Sumalata - Tolinggula, PP\r\n', 11, 1, NULL, NULL),
(19, 'AB-09', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Lakeya, PP\r\n', 13, 1, NULL, NULL),
(20, 'AB-10', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Tml. Paguyaman - Bubaa, PP\r\n', 8, 1, NULL, NULL),
(21, 'AB-11', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Tml. Paguyaman - Tml. Tilamuta - Paguat - Tml. Marisa - Tml. Randangan - Tml. Lemito, PP\r\n', 21, 1, NULL, NULL),
(22, 'AB-12', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Tml. Paguyaman - Tml. Tilamuta - Paguat - Tml. Marisa - Tml. Randangan - Tml. Popayato - Tml. Molosifat, PP\r\n', 8, 1, NULL, NULL),
(23, 'AB-13', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Tml. Paguyaman - Tml. Tilamuta - Paguat - Tml. Marisa - Tml. Randangan - Tml. Popayato - Malango\r\n', 5, 1, NULL, NULL),
(24, 'AB-14', 'Terminal Dungingi Kota Gorontalo - Biluhu Timur - Ilomata, PP\r\n', 0, 1, NULL, NULL),
(25, 'AB-15', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Tml. Molingkapoto - Tolinggula - Papualangi\r\n', 5, 1, NULL, NULL),
(26, 'AB-16', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Parungi - Mohiyolo, PP\r\n', 21, 1, NULL, NULL),
(27, 'AB-17', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Wonosari, PP\r\n', 25, 1, NULL, NULL),
(28, 'AB-18', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Pulubala - Toyidito, PP\r\n', 8, 1, NULL, NULL),
(29, 'AB-19', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Pulubala - Satria, PP\r\n', 8, 1, NULL, NULL),
(30, 'AB-20', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Parungi, PP\r\n', 16, 1, NULL, NULL),
(31, 'AB-21', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Bilato, PP\r\n', 26, 1, NULL, NULL),
(32, 'AC-01', 'Terminal Leato Kota Gorontalo - Molotabu - Bilungala - Taludaa, PP\r\n', 27, 1, NULL, NULL),
(33, 'B-01', 'Terminal Isimu - Tml. Paguyaman - Tml. Tilamuta - Tml. Marisa, PP\r\n', 20, 1, NULL, NULL),
(34, 'B-02', 'Terminal Isimu - Tml. Tilamuta - Tml. Marisa - Tml. Popayato\r\n', 11, 1, NULL, NULL),
(35, 'B-03', 'Terminal Isimu - Tml. Molingkapoto - Pel. Kwandang, PP\r\n', 21, 1, NULL, NULL),
(36, 'B-04', 'Terminal Isimu - Tml. Molingkapoto - Kwandang - Tml. Atinggola, PP\r\n', 32, NULL, NULL, NULL),
(37, 'B-05', 'Terminal Isimu - Tml. Molingkapoto - Sumalata - Tolinggula - Papualangi\r\n', 35, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `wilayah_id` int(11) NOT NULL,
  `nama` varchar(512) NOT NULL,
  `email` varchar(512) NOT NULL,
  `password` text NOT NULL,
  `hp` varchar(512) NOT NULL,
  `role` varchar(512) NOT NULL,
  `nik_direktur` text NOT NULL,
  `nama_direktur` text NOT NULL,
  `nama_perusahaan` text NOT NULL,
  `alamat` text NOT NULL,
  `npwp` text NOT NULL,
  `img_akte_perusahaan` text NOT NULL,
  `img_izin_angkutan` text NOT NULL,
  `img_tdp` text NOT NULL,
  `img_npwp` text NOT NULL,
  `img_ktp_direktur` text NOT NULL,
  `img_siup` text NOT NULL,
  `img_nib` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `wilayah_id`, `nama`, `email`, `password`, `hp`, `role`, `nik_direktur`, `nama_direktur`, `nama_perusahaan`, `alamat`, `npwp`, `img_akte_perusahaan`, `img_izin_angkutan`, `img_tdp`, `img_npwp`, `img_ktp_direktur`, `img_siup`, `img_nib`, `created_at`, `updated_at`) VALUES
(3, 0, 'Riansyah Inde', 'rian@gmail.com', '$2y$10$GQVZ0./65cQ5O2aeBpXrLOCT517fFOkL2pCBNDVUezln1TnYEgI2y', '0822878378278', '2', '', '', '', '', '', '', '', '', '', '', '', '', '2020-10-15 09:12:25', '2020-10-15 09:12:25'),
(4, 0, 'Abdul Karim Rauf', 'abd@gmail.com', '$2y$10$S0CPKSP/kgoGIyw1knJM0uW.VTL5GokmfPEgacYBZ6JpdM2NdcmLe', '0822878378278', '3', '', '', '', '', '', '', '', '', '', '', '', '', '2020-10-15 09:12:48', '2020-10-15 09:12:48'),
(5, 0, 'Zakir Radjak', 'z@gmail.com', '$2y$10$vBeyDO3Fy1p1OH8Fv4jnGOKiGKXtzsp9etWTpTDfIz9Sn17EM4ZVy', '123', '4', '', '', '', '', '', '', '', '', '', '', '', '', '2020-10-15 19:56:47', '2020-10-15 19:56:47'),
(6, 0, 'Cece C.', 'ksu.tsb@gmail.com', '$2y$10$LutpR..sxvpiIs.7.1HQd.4qk.WX.5nOock4/rI.WGjJ1h7./0KC2', '082293728432', '0', '7501011908580001', 'K A R D I', 'KSU TETAP SETIA BHAYANGKARA', 'Jl.A.Wahab Nomor 18.Desa Bulila Kec. Telaga  Kab. Gorontalo', 'NPWP Koperasi A', '1603633419_5dd9602a9e85137155a0.jpeg', '1603633419_6a7a337c4d6356edccaf.jpeg', '1603633419_7df70d6f6f742bef7faf.jpeg', '1603633419_3f1104b9d89551ead0a5.jpeg', '1603633419_ac11b9a34199d04212ae.jpeg', '1603633419_2b9b4241ae9164e08a11.jpeg', '1603633419_acd96d6732e684eb85fb.jpeg', '2020-10-20 10:16:27', '2020-10-25 08:43:39'),
(7, 0, 'PTSP', 'ptsp', '$2y$10$OWxfDYGunVxybreXI/et7OkChKRYrrJA0OHgeZ4jYKVpRyJ4Qvu9C', '123', '1', '', '', '', '', '', '', '', '', '', '', '', '', '2020-10-20 10:16:50', '2020-10-20 10:16:50'),
(8, 0, 'Verifikator', 'verifikator', '$2y$10$NthJomSaybwm1UNaiw.UXONO6Yiq66xhnJ/nlStVSBOHDnGb2slPC', '123', '2', '', '', '', '', '', '', '', '', '', '', '', '', '2020-10-20 10:17:16', '2020-10-20 10:17:16'),
(9, 1, 'Kota', 'kotagtlo', '$2y$10$GkcXbl1Eq6GCVdM0CkSJo.8G6EG1F/8pf3PropjK3JHcWGz/mUCB6', '123', '5', '', '', 'Admin Dinas Perhubungan Kota Gorontalo', '', '', '', '', '', '', '', '', '', '2020-10-20 10:18:30', '2020-10-20 10:18:30'),
(10, 2, 'Kabupaten', 'kabgtlo', '$2y$10$nUWFlm53u5RQbOscHBZUl.3RjIahpycxGJUC9u7zenQ3H2yA9Wqru', '123', '6', 'Admin Dinas Perhubungan Kabupaten Gorontalo', 'Admin Dinas Perhubungan Kabupaten Gorontalo', 'Admin Dinas Perhubungan Kabupaten Gorontalo', 'Admin Dinas Perhubungan Kabupaten Gorontalo', '', '', '', '', '', '', '', '', '2020-10-20 10:18:02', '2020-10-24 09:37:19'),
(11, 3, 'BoneBol', 'kabbonebol', '$2y$10$.ulfU4lL6EK3SMLHQXD0EOkgXFvMKs3qAoNaHPrC7jGT7KvaTLZci', '08121312312323', '7', '', '', 'Admin Dinas Perhubungan Kabupaten Bone Bolango', '', '', '', '', '', '', '', '', '', '2020-10-24 09:29:41', '2020-10-24 09:29:41'),
(12, 4, 'Gorut', 'kabgorut', '$2y$10$b7pHWWygsTwnGq8lUREsMuU9z7Pl8PoaXiBLU7UC/G2/8rUvGXOXG', '08121312312323', '8', '', '', 'Admin Dinas Perhubungan Kabupaten Gorontalo Utara', '', '', '', '', '', '', '', '', '', '2020-10-24 10:02:47', '2020-10-24 10:02:47'),
(13, 5, 'Boalemo', 'kabboalemo', '$2y$10$/MYwtBVD7taFgDXiqhk9Lu8BXjklOVjXRvQrz9JmAhXA8sHSqCF8i', '08121312312323', '9', '', '', 'Admin Dinas Perhubungan Kabupaten Boalemo', '', '', '', '', '', '', '', '', '', '2020-10-24 10:03:29', '2020-10-24 10:03:29'),
(14, 6, 'Pohuwato', 'kabpohuwato', '$2y$10$ovwxJcIHynt3AohGx418dOX1J/5PqZs/Imh7oG3rGl4XbxGn4Z3va', '08121312312323', '10', '', '', 'Admin Dinas Perhubungan Kabupaten Pohuwato', '', '', '', '', '', '', '', '', '', '2020-10-24 10:03:56', '2020-10-24 10:03:56'),
(19, 7, 'Mus Zakaria', 'kja.krawangjayabersama@gmail.com', '$2y$10$LutpR..sxvpiIs.7.1HQd.4qk.WX.5nOock4/rI.WGjJ1h7./0KC2', '081340223678 ', '0', '7504042910560001', 'MUS ZAKARIA', 'KOPERASI KRAWANG JAYA BERSAMA', 'Dungingi, Kota Gorontalo', '', '1603591745_15c3c837d8ea19b120c7.jpg', '1603591745_2ee7a5b48e4a11bda8fb.jpg', '1603591745_2235f6ccaf8c97addea3.jpg', '1603591745_e2e51b0a31d20cab7bef.jpg', '1603591745_8d16dc15a5963bb76a4d.jpg', '1603591745_11dbf003b0c8e29de235.jpg', '1603591745_6798f6f22351ceeb3d1f.jpg', '2020-10-24 21:05:05', '2020-10-24 21:15:26'),
(20, 0, 'Zakir', 'Z', '$2y$10$LutpR..sxvpiIs.7.1HQd.4qk.WX.5nOock4/rI.WGjJ1h7./0KC2', '123546456', '0', '', '', '', '', '', '', '', '', '', '', '', '', '2020-11-14 09:24:36', '2020-11-14 09:24:36');

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `id` int(11) NOT NULL,
  `wilayah` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`id`, `wilayah`, `created_at`, `updated_at`) VALUES
(1, 'Kota Gorontalo', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Kabupaten Gorontalo', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Kabupaten Bone Bolango', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Kabupaten Gorontalo Utara', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Kabupaten Boalemo', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Kabupaten Pohuwato', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ask`
--
ALTER TABLE `ask`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_permohonan`
--
ALTER TABLE `jenis_permohonan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msg_penolakan`
--
ALTER TABLE `msg_penolakan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nomor_surat`
--
ALTER TABLE `nomor_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permohonan`
--
ALTER TABLE `permohonan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permohonan_kabkota`
--
ALTER TABLE `permohonan_kabkota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ranmor`
--
ALTER TABLE `ranmor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trayek`
--
ALTER TABLE `trayek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ask`
--
ALTER TABLE `ask`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `jenis_permohonan`
--
ALTER TABLE `jenis_permohonan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `msg_penolakan`
--
ALTER TABLE `msg_penolakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nomor_surat`
--
ALTER TABLE `nomor_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permohonan`
--
ALTER TABLE `permohonan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `permohonan_kabkota`
--
ALTER TABLE `permohonan_kabkota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `ranmor`
--
ALTER TABLE `ranmor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `trayek`
--
ALTER TABLE `trayek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `wilayah`
--
ALTER TABLE `wilayah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
