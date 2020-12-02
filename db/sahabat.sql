-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 04:29 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sahabat`
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
  `rekompersetujuan` text NOT NULL,
  `status_rekompersetujuan` text NOT NULL,
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
  `img_penolakan_ptsp` text DEFAULT NULL,
  `img_persetujuan_ptsp` text DEFAULT NULL,
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

INSERT INTO `ask` (`id`, `slug`, `kode_registrasi`, `id_koperasi`, `ptsp`, `status_ptsp`, `ptsp_approve`, `dishub`, `status_dishub`, `penerbitan`, `ptsp_penerbitan`, `status_penerbitan`, `dishub_approve`, `dishub_approvve`, `rekompersetujuan`, `status_rekompersetujuan`, `pelayanan_dimohon`, `jumlah_kendaraan`, `jenis_kendaraan`, `kapasitas_angkut`, `wilayah_operasi`, `pengaruh`, `kelas_jalan`, `fasilitas_pool`, `fasilitas_perawatan`, `img_surat_permohonan`, `img_bukti_pengesahan`, `img_domisili`, `img_pernyataan_kesanggupan`, `img_pernyataan_kerjasama`, `img_perjanjian`, `img_pemda`, `img_rencana_bisnis`, `img_penolakan_ptsp`, `img_persetujuan_ptsp`, `img_surat_persetujuan`, `img_permohonan`, `img_penolakan_permohonan`, `img_penerbitan`, `img_penolakan_penerbitan`, `img_izin`, `img_penolakan_izin`, `created_at`, `updated_at`) VALUES
(24, 'ksu-tetap-setia-bhayangkara', '20201124205628', '6', '1', '1', 0, '0', '0', '0', 0, '1', 0, 0, '1', '3', '', '1', 'Minibus / Mobil Penumpang', '2', 'Kota Gorontalo dan Sekitarnya', '', '', '', '', '1606273135_ba935a29e23766d3fe9b.jpg', '1606273135_bb48b820b407d1032fba.jpg', '1606273135_e36150a33743d27d846d.jpg', '1606273135_d4b0146da1774dd926fe.jpg', '1606273135_ccb00fcf663166654989.jpg', '1606273135_aec68172555dea8c35dc.jpg', '1606273135_91ec8919308cc48dba8f.jpg', '1606273135_8463eec2cc5757b383e0.jpg', NULL, '1606275302_a38b958dfdf69eb9d18e.jpg', '', '1606275267_d72c76d08e03bd44c970.jpg', '1606275626_9724c909dfc4f93fb0be.jpg', '', '', '', '', '2020-11-24 20:58:55', '2020-11-24 21:41:21');

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
  `status` text NOT NULL,
  `kode_booking` varchar(512) NOT NULL,
  `msg` text NOT NULL,
  `img` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `msg_penolakan`
--

INSERT INTO `msg_penolakan` (`id`, `status`, `kode_booking`, `msg`, `img`, `created_at`, `updated_at`) VALUES
(1, '', '20201130023454', 'masa berlaku KIR sudah habis', 'default.png', '2020-11-30 00:00:00', '2020-11-30 00:00:00');

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
(1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `permohonan`
--

CREATE TABLE `permohonan` (
  `id` int(11) NOT NULL,
  `user_id` varchar(512) NOT NULL,
  `verificator_id` varchar(512) NOT NULL,
  `approver_id` varchar(512) NOT NULL,
  `slug` text DEFAULT NULL,
  `kode_booking` varchar(512) DEFAULT NULL,
  `status` varchar(512) NOT NULL,
  `ptsp` int(11) NOT NULL,
  `verifikator` int(11) NOT NULL,
  `approver` int(11) NOT NULL,
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
  `img_penolakan` text NOT NULL,
  `img_izin_akdp` text NOT NULL,
  `status_img_surat_permohonan` text DEFAULT NULL,
  `status_img_akte_perusahaan` text DEFAULT NULL,
  `status_img_tdp` text DEFAULT NULL,
  `status_img_siup` text DEFAULT NULL,
  `status_img_npwp` text DEFAULT NULL,
  `status_img_ktp` text DEFAULT NULL,
  `status_img_trayek` text DEFAULT NULL,
  `status_img_trayek_tujuan` text DEFAULT NULL,
  `status_img_stnkb_pkb` text DEFAULT NULL,
  `status_img_kir` text DEFAULT NULL,
  `status_img_jasa_raharja` text DEFAULT NULL,
  `status_img_surat_pernyataan` text DEFAULT NULL,
  `status_img_pengantar_ptsp` text DEFAULT NULL,
  `status_img_izin_trayek` text DEFAULT NULL,
  `tgl_approve` text NOT NULL,
  `masa_berlaku` varchar(512) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permohonan`
--

INSERT INTO `permohonan` (`id`, `user_id`, `verificator_id`, `approver_id`, `slug`, `kode_booking`, `status`, `ptsp`, `verifikator`, `approver`, `status_verifikasi`, `tgl_permohonan`, `nama_pemohon`, `alamat_pemohon`, `jenis_permohonan`, `trayek_dilayani`, `nomor_kendaraan`, `nama_pemilik`, `alamat_pemilik`, `jenis_kendaraan`, `tahun_pembuatan`, `nomor_kir`, `kapasitas_angkutan`, `uji_berkala_berlaku`, `stnkb_berlaku`, `pkb_berlaku`, `jasa_raharja_berlaku`, `img_surat_permohonan`, `img_akte_perusahaan`, `img_tdp`, `img_siup`, `img_npwp`, `img_ktp`, `img_trayek`, `img_trayek_tujuan`, `img_stnkb_pkb`, `img_kir`, `img_jasa_raharja`, `img_surat_pernyataan`, `img_pengantar_ptsp`, `img_izin_trayek`, `img_penolakan`, `img_izin_akdp`, `status_img_surat_permohonan`, `status_img_akte_perusahaan`, `status_img_tdp`, `status_img_siup`, `status_img_npwp`, `status_img_ktp`, `status_img_trayek`, `status_img_trayek_tujuan`, `status_img_stnkb_pkb`, `status_img_kir`, `status_img_jasa_raharja`, `status_img_surat_pernyataan`, `status_img_pengantar_ptsp`, `status_img_izin_trayek`, `tgl_approve`, `masa_berlaku`, `created_at`, `updated_at`) VALUES
(102, '6', '', '', 'ksu-tetap-setia-bhayangkara', '20201125022741', '1', 1, 1, 0, 3, '2020-11-17', '6', '', '', '41', 'DM1830BA', 'AMIR MAHALIPA', 'KEC. TOLANGOHULA KAB. GORONTALO', 'Mikrolet', '2016', 'LBT.00227', '10 Orang +10 Kg Barang', '2021-05-11', '2024-12-21', '2020-12-21', '2020-12-29', '1606292966_d67f3a9e519c59670aa1.jpg', '', '', '', '', '', NULL, '', '1606293103_798291d4ae400bcd499b.jpg', '1606293163_dd3410c76cc3f2e4fb36.jpg', '1606293195_2e7aa34d62022c24bab3.jpg', '1606293247_f9aba534004e3751ab22.jpg', '1606294966_1eb056c31624cc402656.jpg', '', '1606295125_c497833933253381ae47.jpg', '1606295660_a7c132e311d9d6e5c09e.jpg', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '2020-11-25', '', '2020-11-25 00:00:00', '2020-11-25 03:14:20'),
(103, '6', '', '', 'ksu-tetap-setia-bhayangkara', '20201130023454', '2', 0, 0, 0, 4, '2020-11-23', '6', '', '', '42', 'DM1839AK', 'MOHAMAD DALANGGO', 'PERUM GRAHA 42 BLOK H/13  RT 04/RW KEC. SIPATANA KOTA GORONTALO', 'Mikrolet', '2010', 'DB 011008439', '10 Orang +10 Kg Barang', '2020-11-28', '2025-11-16', '2021-11-16', '2021-11-16', '1606725395_db4024e3254c47145ffc.jpg', '', '', '', '', '', NULL, '', '1606726058_de0c8798330d1f91e1ee.jpg', '1606726280_45f33602529f001403ff.jpg', '1606726318_c3d0fd6f098b44d96cf7.jpg', '1606726330_9b000dd5408d1a2fac2e.jpg', '', '1606725579_4d6fe0ebc8ad317a1f3f.jpg', '', '', '0', '0', '1', '0', '0', '0', '0', '0', '0', '2', '0', '0', '0', '0', '2020-11-30', '', '2020-11-30 02:36:35', '2020-11-30 18:38:03');

-- --------------------------------------------------------

--
-- Table structure for table `permohonan_kabkota`
--

CREATE TABLE `permohonan_kabkota` (
  `id` int(11) NOT NULL,
  `slug` text NOT NULL,
  `used` int(11) NOT NULL,
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
  `img_rekomendasi_asal` text DEFAULT NULL,
  `img_penolakan_tujuan` text NOT NULL,
  `img_rekomendasi_tujuan` text DEFAULT NULL,
  `foto_depan` text NOT NULL,
  `foto_belakang` text NOT NULL,
  `foto_kanan` text NOT NULL,
  `foto_kiri` text NOT NULL,
  `tgl_approve` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permohonan_kabkota`
--

INSERT INTO `permohonan_kabkota` (`id`, `slug`, `used`, `koperasi_id`, `kabkota_id`, `status_asal`, `status_tujuan`, `trayek_dilayani`, `asal`, `tujuan`, `nomor_kendaraan`, `nama_pemilik`, `alamat_pemilik`, `jenis_kendaraan`, `nomor_kir`, `merk`, `tahun_pembuatan`, `nomor_chasis`, `nomor_mesin`, `nomor_regis_pkb`, `img_surat_permohonan_koperasi`, `img_ktp_pemilik`, `img_stnkb`, `img_jasa_raharja`, `img_kir`, `img_penolakan_asal`, `img_rekomendasi_asal`, `img_penolakan_tujuan`, `img_rekomendasi_tujuan`, `foto_depan`, `foto_belakang`, `foto_kanan`, `foto_kiri`, `tgl_approve`, `created_at`, `updated_at`) VALUES
(41, 'amir-mahalipa', 1, '6', '', '2', '2', 'AB-01', '1', '4', 'DM1830BA', 'AMIR MAHALIPA', 'TOLANGOHULA KABUPATEN GORONTALO', 'Mikrolet', 'LBT.00227', 'SUZUKI', '2016', 'MHYESL415GJ-601564', 'G15AID-1032077', '19-0360929', '1606292681_a57733d329b3a6be177f.jpg', '1606292681_398dab38df7f51e0f601.jpg', '1606292681_3281f0257393d8f67d86.jpg', '1606292681_33b18599805cbf598ffe.jpg', '1606292681_9feb10c51332bed6bc1d.jpg', '', '1606292805_b604a5847c6fe4c4f14e.jpg', '', '1606292832_cdf938d74fcdef0bfd4f.jpg', '1606292681_d511fc98c708f31d795d.jpg', '1606292681_cfeeeb9a1aaabb8c23d0.jpg', '1606292681_42495dc89a125752999e.jpg', '1606292681_bef0b23e7adbb31bb29e.jpg', '2020-11-25', '2020-11-25 02:24:41', '2020-11-25 02:34:12'),
(43, '', 0, '', '', '', '', 'AB-03', '', '', 'DM1839AK', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', NULL, '', '', '', '', '', '2020-11-30 02:43:26', '2020-11-30 02:43:26');

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

-- --------------------------------------------------------

--
-- Table structure for table `trayek`
--

CREATE TABLE `trayek` (
  `id` int(11) NOT NULL,
  `kode_trayek` varchar(512) NOT NULL,
  `trayek` text NOT NULL,
  `asal` varchar(512) NOT NULL,
  `tujuan` varchar(512) NOT NULL,
  `kuota` int(11) NOT NULL,
  `terisi` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trayek`
--

INSERT INTO `trayek` (`id`, `kode_trayek`, `trayek`, `asal`, `tujuan`, `kuota`, `terisi`, `created_at`, `updated_at`) VALUES
(1, 'AA-01', 'Terminal Pusat Kota Gorontalo - Iluta - Batudaa - Terminal Bongomeme, PP\r\n', '1', '2', 34, 48, NULL, NULL),
(2, 'AA-02', 'Terminal Dungingi Kota Gorontalo – Terminal Tilamuta, PP', '1', '5', 19, 22, NULL, '2020-12-01 20:40:23'),
(7, 'AA-03', 'Terminal Pusat Kota Gorontalo - Bongo - Kayubulan, PP\r\n', '1', '2', 14, 1, NULL, NULL),
(8, 'AA-04', 'Terminal Pusat Kota Gorontalo - Kabila - Suwawa, PP\r\n', '1', '3', 13, 1, NULL, NULL),
(9, 'AA-05', 'Terminal Pusat Kota Gorontalo - Botupingge - Timbuolo - Bondawuna, PP\r\n', '1', '3', 8, 1, NULL, NULL),
(10, 'AA-06', 'Terminal Pusat Kota Gorontalo - Tml. Tapa - Tupa, PP\r\n', '1', '3', 24, 1, NULL, NULL),
(11, 'AB-01', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Tml. Molingkapoto - Pel. Kwandang, PP\r\n', '1', '4', 48, 1, NULL, NULL),
(12, 'AB-02', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Tml. Paguyaman - Tml. Tilamuta, PP', '1', '5', 45, 1, NULL, '2020-12-01 20:42:05'),
(13, 'AB-03', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Kwandang - Tml. Atinggola, PP\r\n', '1', '4', 42, 1, NULL, NULL),
(14, 'AB-04', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Tml. Paguyaman, PP\r\n', '1', '5', 35, 1, NULL, NULL),
(15, 'AB-05', 'Terminal Dungingi Kota Gorontalo - Tml. Telaga - Tml. Isimu, PP', '1', '2', 25, 1, NULL, '2020-12-01 20:43:04'),
(16, 'AB-06', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Tml. Paguyaman - Tml. Tilamuta - Paguat - Tml. Marisa, PP', '1', '6', 20, 1, NULL, '2020-12-01 20:43:18'),
(17, 'AB-07', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Tml. Molingkapoto - Monano - Sumalata, PP', '1', '4', 19, 1, NULL, '2020-12-01 20:43:41'),
(18, 'AB-08', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Tml. Molingkapoto - Sumalata - Tolinggula, PP', '1', '4', 11, 1, NULL, '2020-12-01 20:44:20'),
(19, 'AB-09', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Lakeya, PP', '1', '2', 13, 1, NULL, '2020-12-01 20:44:49'),
(20, 'AB-10', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Tml. Paguyaman - Bubaa, PP', '1', '5', 8, 1, NULL, '2020-12-01 20:45:08'),
(21, 'AB-11', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Tml. Paguyaman - Tml. Tilamuta - Paguat - Tml. Marisa - Tml. Randangan - Tml. Lemito, PP', '1', '6', 21, 1, NULL, '2020-12-01 20:45:44'),
(22, 'AB-12', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Tml. Paguyaman - Tml. Tilamuta - Paguat - Tml. Marisa - Tml. Randangan - Tml. Popayato - Tml. Molosifat, PP', '1', '6', 8, 1, NULL, '2020-12-01 20:46:02'),
(23, 'AB-13', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Tml. Paguyaman - Tml. Tilamuta - Paguat - Tml. Marisa - Tml. Randangan - Tml. Popayato - Malango', '1', '6', 5, 1, NULL, '2020-12-01 20:46:14'),
(24, 'AB-14', 'Terminal Dungingi Kota Gorontalo - Biluhu Timur - Ilomata, PP', '1', '2', 0, 1, NULL, '2020-12-01 20:46:53'),
(25, 'AB-15', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Tml. Molingkapoto - Tolinggula - Papualangi', '1', '4', 5, 1, NULL, '2020-12-01 20:47:04'),
(26, 'AB-16', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Parungi - Mohiyolo, PP', '1', '2', 21, 1, NULL, '2020-12-01 20:47:42'),
(27, 'AB-17', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Wonosari, PP', '1', '2', 25, 1, NULL, '2020-12-01 20:48:02'),
(28, 'AB-18', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Pulubala - Toyidito, PP', '1', '2', 8, 1, NULL, '2020-12-01 20:48:30'),
(29, 'AB-19', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Pulubala - Satria, PP', '2', '2', 8, 1, NULL, '2020-12-01 20:24:11'),
(30, 'AB-20', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Parungi, PP', '1', '2', 16, 1, NULL, '2020-12-01 20:48:43'),
(31, 'AB-21', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Bilato, PP', '1', '2', 26, 1, NULL, '2020-12-01 20:49:07'),
(32, 'AC-01', 'Terminal Leato Kota Gorontalo - Molotabu - Bilungala - Taludaa, PP', '1', '3', 27, 1, NULL, '2020-12-01 20:49:50'),
(33, 'B-01', 'Terminal Isimu - Tml. Paguyaman - Tml. Tilamuta - Tml. Marisa, PP\r\n', '2', '6', 20, 1, NULL, NULL),
(34, 'B-02', 'Terminal Isimu - Tml. Tilamuta - Tml. Marisa - Tml. Popayato\r\n', '2', '6', 11, 1, NULL, NULL),
(35, 'B-03', 'Terminal Isimu - Tml. Molingkapoto - Pel. Kwandang, PP\r\n', '2', '4', 21, 1, NULL, NULL),
(36, 'B-04', 'Terminal Isimu - Tml. Molingkapoto - Kwandang - Tml. Atinggola, PP\r\n', '2', '4', 32, NULL, NULL, NULL),
(37, 'B-05', 'Terminal Isimu - Tml. Molingkapoto - Sumalata - Tolinggula - Papualangi\r\n', '2', '4', 35, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `wilayah_id` int(11) NOT NULL,
  `nama` varchar(512) NOT NULL,
  `email` varchar(512) NOT NULL,
  `email_sent` text NOT NULL,
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

INSERT INTO `user` (`id`, `wilayah_id`, `nama`, `email`, `email_sent`, `password`, `hp`, `role`, `nik_direktur`, `nama_direktur`, `nama_perusahaan`, `alamat`, `npwp`, `img_akte_perusahaan`, `img_izin_angkutan`, `img_tdp`, `img_npwp`, `img_ktp_direktur`, `img_siup`, `img_nib`, `created_at`, `updated_at`) VALUES
(3, 0, 'Riansyah Inde', 'rian@gmail.com', '', '$2y$10$GQVZ0./65cQ5O2aeBpXrLOCT517fFOkL2pCBNDVUezln1TnYEgI2y', '0822878378278', '2', '', '', '', '', '', '', '', '', '', '', '', '', '2020-10-15 09:12:25', '2020-10-15 09:12:25'),
(4, 0, 'Abdul Karim Rauf', 'abd@gmail.com', '', '$2y$10$S0CPKSP/kgoGIyw1knJM0uW.VTL5GokmfPEgacYBZ6JpdM2NdcmLe', '0822878378278', '3', '', '', '', '', '', '', '', '', '', '', '', '', '2020-10-15 09:12:48', '2020-10-15 09:12:48'),
(5, 0, 'Zakir Radjak', 'z@gmail.com', '', '$2y$10$vBeyDO3Fy1p1OH8Fv4jnGOKiGKXtzsp9etWTpTDfIz9Sn17EM4ZVy', '123', '4', '', '', '', '', '', '', '', '', '', '', '', '', '2020-10-15 19:56:47', '2020-10-15 19:56:47'),
(6, 0, 'Cece C.', 'ksu.tsb@gmail.com', 'rasyidiam14@gmail.com', '$2y$10$LutpR..sxvpiIs.7.1HQd.4qk.WX.5nOock4/rI.WGjJ1h7./0KC2', '082293728432', '0', '7501011908580001', 'K A R D I', 'KSU TETAP SETIA BHAYANGKARA', 'Jl.A.Wahab Nomor 18.Desa Bulila Kec. Telaga  Kab. Gorontalo', 'NPWP Koperasi A', '1606292034_bf831168f5e80e00ad30.jpeg', '1606291958_e2e85ab2d458f982a556.jpg', '1606291958_1478a12d04039b56e8d2.jpg', '1606291958_1ed9d316fce48b896467.jpg', '1606291958_777774deeefeabbaacb4.jpg', '1606291958_f0bd17163b6aeeb1b2ab.jpg', '1606291958_c4b0f736aa25d4ea1b23.jpg', '2020-10-20 10:16:27', '2020-12-01 19:40:40'),
(7, 0, 'PTSP', 'ptsp', 'gibson.wife@yahoo.com', '$2y$10$OWxfDYGunVxybreXI/et7OkChKRYrrJA0OHgeZ4jYKVpRyJ4Qvu9C', '123', '1', '', '', 'Admin PTSP', '', '', '', '', '', '', '', '', '', '2020-10-20 10:16:50', '2020-10-20 10:16:50'),
(8, 0, 'Verifikator', 'verifikator', '', '$2y$10$NthJomSaybwm1UNaiw.UXONO6Yiq66xhnJ/nlStVSBOHDnGb2slPC', '123', '2', '', '', '', '', '', '', '', '', '', '', '', '', '2020-10-20 10:17:16', '2020-10-20 10:17:16'),
(9, 1, 'Kota', 'kotagtlo', 'hedytome77@gmail.com', '$2y$10$GkcXbl1Eq6GCVdM0CkSJo.8G6EG1F/8pf3PropjK3JHcWGz/mUCB6', '123', '5', '', '', 'Admin Dinas Perhubungan Kota Gorontalo', '', '', '', '', '', '', '', '', '', '2020-10-20 10:18:30', '2020-10-20 10:18:30'),
(10, 2, 'Kabupaten', 'kabgtlo', 'mohamadpayuhi78@gmail.com', '$2y$10$nUWFlm53u5RQbOscHBZUl.3RjIahpycxGJUC9u7zenQ3H2yA9Wqru', '123', '6', 'Admin Dinas Perhubungan Kabupaten Gorontalo', 'Admin Dinas Perhubungan Kabupaten Gorontalo', 'Admin Dinas Perhubungan Kabupaten Gorontalo', 'Admin Dinas Perhubungan Kabupaten Gorontalo', '', '', '', '', '', '', '', '', '2020-10-20 10:18:02', '2020-10-24 09:37:19'),
(11, 3, 'BoneBol', 'kabbonebol', '', '$2y$10$.ulfU4lL6EK3SMLHQXD0EOkgXFvMKs3qAoNaHPrC7jGT7KvaTLZci', '08121312312323', '7', '', '', 'Admin Dinas Perhubungan Kabupaten Bone Bolango', '', '', '', '', '', '', '', '', '', '2020-10-24 09:29:41', '2020-10-24 09:29:41'),
(12, 4, 'Gorut', 'kabgorut', '', '$2y$10$b7pHWWygsTwnGq8lUREsMuU9z7Pl8PoaXiBLU7UC/G2/8rUvGXOXG', '08121312312323', '8', '', '', 'Admin Dinas Perhubungan Kabupaten Gorontalo Utara', '', '', '', '', '', '', '', '', '', '2020-10-24 10:02:47', '2020-10-24 10:02:47'),
(13, 5, 'Boalemo', 'kabboalemo', 'dinasperkimhubtankab.boalemo@gmail.com', '$2y$10$/MYwtBVD7taFgDXiqhk9Lu8BXjklOVjXRvQrz9JmAhXA8sHSqCF8i', '08121312312323', '9', '', '', 'Admin Dinas Perhubungan Kabupaten Boalemo', '', '', '', '', '', '', '', '', '', '2020-10-24 10:03:29', '2020-10-24 10:03:29'),
(14, 6, 'Pohuwato', 'kabpohuwato', 'herdipoha43@gmail.com', '$2y$10$ovwxJcIHynt3AohGx418dOX1J/5PqZs/Imh7oG3rGl4XbxGn4Z3va', '08121312312323', '10', '', '', 'Admin Dinas Perhubungan Kabupaten Pohuwato', '', '', '', '', '', '', '', '', '', '2020-10-24 10:03:56', '2020-10-24 10:03:56'),
(19, 7, 'Mus Zakaria', 'krawangjayabersama', 'kja.krawangjayabersama@gmail.com', '$2y$10$LutpR..sxvpiIs.7.1HQd.4qk.WX.5nOock4/rI.WGjJ1h7./0KC2', '081340223678 ', '0', '7504042910560001', 'MUS ZAKARIA', 'KOPERASI KRAWANG JAYA BERSAMA', 'Dungingi, Kota Gorontalo', '', '', '', '', '', '', '', '', '2020-10-24 21:05:05', '2020-11-21 11:16:18'),
(20, 0, 'KOPERASI CITRA', 'ksucitra', 'dinasperkimhubtankab.boalemo@gmail.com', '$2y$10$90TZBSB0dH.Q/Fm1ERFxQu4f6aZqCef4u/DiynTAFF6qMw6xxHVF6', '082282828282', '0', '', '', 'KOPERASI CITRA', '', '', '', '', '', '', '', '', '', '2020-12-01 05:21:54', '2020-12-01 05:21:54'),
(21, 0, 'yghhgkj', 'ksu.tsb@gmail.com', '', '$2y$10$gx6nrDzitsA3.a0wa0HuWOrpsSKjPKfWqnxV0hFfDcltqU2VJUW92', '123123123', '0', '', '', '', '', '', '', '', '', '', '', '', '', '2020-12-01 20:02:51', '2020-12-01 20:02:51');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `jenis_permohonan`
--
ALTER TABLE `jenis_permohonan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `msg_penolakan`
--
ALTER TABLE `msg_penolakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nomor_surat`
--
ALTER TABLE `nomor_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permohonan`
--
ALTER TABLE `permohonan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `permohonan_kabkota`
--
ALTER TABLE `permohonan_kabkota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `ranmor`
--
ALTER TABLE `ranmor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trayek`
--
ALTER TABLE `trayek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `wilayah`
--
ALTER TABLE `wilayah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
