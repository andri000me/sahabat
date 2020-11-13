-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2020 at 04:20 PM
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

--
-- Dumping data for table `msg_penolakan`
--

INSERT INTO `msg_penolakan` (`id`, `kode_booking`, `msg`, `created_at`, `updated_at`) VALUES
(1, '68728071114', 'Data KIR Di isi sesuai dengan dokumen !', NULL, NULL),
(2, '68728071114', 'File dokumen surat permohonan yang anda upload tidak sesuai', NULL, NULL),
(4, '68728071111', 'Ditolak men', '2020-10-18 09:18:47', '2020-10-18 09:18:47'),
(5, '68728071112', 'STNK tidak sesuai', '2020-10-20 22:24:41', '2020-10-20 22:24:41'),
(6, '68728071111', 'asdasd', '2020-10-25 03:34:50', '2020-10-25 03:34:50'),
(7, '68728071112', 'a', '2020-10-25 22:11:25', '2020-10-25 22:11:25');

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
  `slug` text DEFAULT NULL,
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

--
-- Dumping data for table `permohonan`
--

INSERT INTO `permohonan` (`id`, `user_id`, `verificator_id`, `approver_id`, `slug`, `kode_booking`, `status`, `status_verifikasi`, `tgl_permohonan`, `nama_pemohon`, `alamat_pemohon`, `jenis_permohonan`, `trayek_dilayani`, `nomor_kendaraan`, `nama_pemilik`, `alamat_pemilik`, `jenis_kendaraan`, `tahun_pembuatan`, `nomor_kir`, `kapasitas_angkutan`, `uji_berkala_berlaku`, `stnkb_berlaku`, `pkb_berlaku`, `jasa_raharja_berlaku`, `img_surat_permohonan`, `img_akte_perusahaan`, `img_tdp`, `img_siup`, `img_npwp`, `img_ktp`, `img_trayek`, `img_trayek_tujuan`, `img_stnkb_pkb`, `img_kir`, `img_jasa_raharja`, `img_surat_pernyataan`, `img_pengantar_ptsp`, `img_izin_trayek`, `tgl_approve`, `masa_berlaku`, `created_at`, `updated_at`) VALUES
(56, '', '', '', '6', '68728071111', '1', 2, '2020-10-30', '6', '', 'JP1233414', 'AA-01', 'DM 1832 DB', 'Ajis Nihali', 'Gorontalo', 'Minibus ', '2014', 'DB.041.001.427', '1 Orang +1 Kg Barang', '2020-10-25', '2020-10-25', '2020-10-25', '2020-10-25', '1603624096_83fee67bbefdac71ba85.jpg', '', '', '', '', '', '1604053164_bef88b2d95bc785476d3.png', '1604053164_14d352031eff4262c575.png', '1603624145_3a65037672033c2479ca.jpg', '1603624158_1ada5a92c9941a704ccf.jpg', '1603624165_ee156a3e29cbf830bae8.jpg', '1603624169_c2b6544db5f69b164ca0.jpg', '1604053153_8073154ed59b614d597c.png', '1604053019_de2f502cd935907ea1d2.png', '2020-10-30', '', '2020-10-25 05:53:21', '2020-10-30 05:19:56'),
(65, '', '', '', '6', '68728071112', '2', 2, '2020-10-26', '6', '', 'JP1233414', 'AA-01', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '12 Orang +12 Kg Barang', '2020-10-26', '2020-10-26', '2020-10-26', '2020-10-26', '1603687192_e5b5b917f7b1de070ae3.jpeg', '', '', '', '', '', '1603687208_04349655141525b6524a.jpeg', '1603687208_f4e1920fdd8697c044d7.jpeg', '1603687975_29723a614ad62cd1fe92.jpg', '1603688400_1b60919e3baa0bc58650.jpg', '1603688713_5ef6fad3e7b0079fbf91.png', '1603688831_8f2a6c4ca2e4ee68c23c.jpg', '1603687192_10decfd8ed9dc0d718e6.jpg', '1603699909_cb5dbe7e23acdbc84e24.jpg', '2020-10-26', '', '2020-10-25 23:39:52', '2020-10-26 03:11:49'),
(66, '', '', '', '6', '68728071113', '1', 2, '2020-10-26', '6', '', 'JP1233414', 'AA-01', '12', 'qw', 'qw', 'qw', 'qw', '12', '12 Orang +12 Kg Barang', '2020-10-26', '2020-10-26', '2020-10-27', '2020-10-26', '1603695281_944c592a1ac66015684c.jpg', '', '', '', '', '', '1603695665_afd9280277618612ced6.jpg', '1603695665_2044626bb9d43330d1cb.jpg', '1603695680_4fd6b7d41ae468c56f3b.jpg', '1603695703_d07fde623b908b0633a1.jpg', '1603695711_18b8089b527e4ef3c988.jpg', '1603695716_573fba94386c6c493568.jpg', '1603695281_a9dcf2ef509ae3dc4b76.jpg', '1603699789_6c574124f814002f2634.jpg', '2020-10-26', '', '2020-10-26 01:54:41', '2020-10-26 03:09:49');

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

--
-- Dumping data for table `permohonan_kabkota`
--

INSERT INTO `permohonan_kabkota` (`id`, `slug`, `koperasi_id`, `kabkota_id`, `status_asal`, `status_tujuan`, `trayek_dilayani`, `asal`, `tujuan`, `nomor_kendaraan`, `nama_pemilik`, `alamat_pemilik`, `jenis_kendaraan`, `nomor_kir`, `merk`, `tahun_pembuatan`, `nomor_chasis`, `nomor_mesin`, `nomor_regis_pkb`, `img_surat_permohonan_koperasi`, `img_ktp_pemilik`, `img_stnkb`, `img_jasa_raharja`, `img_kir`, `img_penolakan_asal`, `img_rekomendasi_asal`, `img_penolakan_tujuan`, `img_rekomendasi_tujuan`, `foto_depan`, `foto_belakang`, `foto_kanan`, `foto_kiri`, `tgl_approve`, `created_at`, `updated_at`) VALUES
(13, 'abdul-musakir', '6', '', '1', '0', 'AA-01', '1', '6', 'DM 1234 A', 'ABDUL MUSAKIR', 'BATUDAA', 'SEPEDA', 'KIRA', 'POLIGON', '2020', 'CHASIS', 'MESIN', 'PKB', '1603636647_eae29d139be67324527e.jpeg', '1603636647_bd90f5a084e87f8ea39b.jpeg', '1603636647_9841c7904a6362133e96.jpeg', '1603636647_ae6165791a4b3502a5be.jpeg', '1603636647_3505cf44a3f86089afe4.jpeg', '', '', '', '1603637408_b07d15361807502f89c0.jpeg', '', '', '', '', '2020-10-25', '2020-10-25 09:37:27', '2020-11-10 19:37:08'),
(15, 'asd', '6', '', '0', '0', 'AA-01', '1', '1', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '1605055220_d0b3df977ec009075a14.png', '1605055220_7859cfe302836385c830.png', '1605055220_ca95bcb66897271a1e33.png', '1605055220_d29ba0f8dbf1c639cb3a.png', '1605055220_a09f2bad393a41f9780b.png', '', '', '', '', '1605055220_5977b3dcd2b7e2e8c899.png', '1605055220_5276a4a9ab6c427f7dd8.png', '1605055220_2b244c6a9eab8c935632.png', '1605055220_dd9fbea211a94f0dff04.png', '', '2020-11-10 18:40:20', '2020-11-10 18:40:20'),
(16, 'abdul-musakir-radjak', '6', '', '2', '0', 'AA-01', '1', '2', 'asd', 'Abdul Musakir Radjak', 'asd', 'asd', 'asd', 'asdasd', 'asd', 'asd', 'asd', 'asd', '1605056406_397934c9848aa72e9fbe.jpeg', '1605056406_e1c474b71a23c4b90e6d.jpeg', '1605056406_2cbb93cc1a5c8b368958.jpeg', '1605056406_20a99f4db37328012177.jpeg', '1605056406_8a218984dbb26f0b8d1f.jpeg', '', '', '', '', '1605056406_5087a85bee86e86d500b.jpeg', '1603680216_899626fd54ff396a5e96.jpg', '1605056406_686b4202300ba7816061.jpeg', '1605056406_abc8846cd6c226ee4d6e.jpeg', '2020-11-10', '2020-11-10 19:00:06', '2020-11-10 19:31:18');

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
(19, 7, 'Mus Zakaria', 'kja.krawangjayabersama@gmail.com', '$2y$10$ovwxJcIHynt3AohGx418dOX1J/5PqZs/Imh7oG3rGl4XbxGn4Z3va', '081340223678 ', '0', '7504042910560001', 'MUS ZAKARIA', 'KOPERASI KRAWANG JAYA BERSAMA', 'Dungingi, Kota Gorontalo', '', '1603591745_15c3c837d8ea19b120c7.jpg', '1603591745_2ee7a5b48e4a11bda8fb.jpg', '1603591745_2235f6ccaf8c97addea3.jpg', '1603591745_e2e51b0a31d20cab7bef.jpg', '1603591745_8d16dc15a5963bb76a4d.jpg', '1603591745_11dbf003b0c8e29de235.jpg', '1603591745_6798f6f22351ceeb3d1f.jpg', '2020-10-24 21:05:05', '2020-10-24 21:15:26');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `trayek`
--
ALTER TABLE `trayek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `wilayah`
--
ALTER TABLE `wilayah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
