-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2020 at 02:21 AM
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
(5, '68728071112', 'STNK tidak sesuai', '2020-10-20 22:24:41', '2020-10-20 22:24:41');

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
  `img_stnkb_pkb` varchar(512) NOT NULL,
  `img_kir` mediumtext NOT NULL,
  `img_jasa_raharja` varchar(512) NOT NULL,
  `img_surat_pernyataan` varchar(512) NOT NULL,
  `img_pengantar_ptsp` text NOT NULL,
  `tgl_approve` text NOT NULL,
  `masa_berlaku` varchar(512) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permohonan`
--

INSERT INTO `permohonan` (`id`, `user_id`, `verificator_id`, `approver_id`, `slug`, `kode_booking`, `status`, `status_verifikasi`, `tgl_permohonan`, `nama_pemohon`, `alamat_pemohon`, `jenis_permohonan`, `trayek_dilayani`, `nomor_kendaraan`, `nama_pemilik`, `alamat_pemilik`, `jenis_kendaraan`, `tahun_pembuatan`, `nomor_kir`, `kapasitas_angkutan`, `uji_berkala_berlaku`, `stnkb_berlaku`, `pkb_berlaku`, `jasa_raharja_berlaku`, `img_surat_permohonan`, `img_akte_perusahaan`, `img_tdp`, `img_siup`, `img_npwp`, `img_ktp`, `img_trayek`, `img_stnkb_pkb`, `img_kir`, `img_jasa_raharja`, `img_surat_pernyataan`, `img_pengantar_ptsp`, `tgl_approve`, `masa_berlaku`, `created_at`, `updated_at`) VALUES
(1, '', '', '', 'ksu-tetap-setia-bhayangkara', '68728071111', '1', 0, '2020-10-16', 'KSU TETAP SETIA BHAYANGKARA', 'Desa Toto Selatan, Kec. Kabila, Kab. Bone Bolango', 'JP1233414', 'AA-01', 'DM1832EB', 'MUCHTAR SALEH', 'Desa Tinelo, Kec. Suwawa, Kab. Bone Bolango', 'Minibus / Mikrolet', '2015', 'DB. 051.001466', '09 orang  +  90 Kg  Barang', '2020-10-16', '2020-10-16', '2020-10-16', '2020-10-16', '1602803293_89e47d131b67d35edb71.jpg', '1602802844_e21face13c6c222ddddd.jpg', '1602802849_22d116bf5b2132e28188.jpg', '1602802854_82bbb80f696d97ad4d70.jpg', '1602802858_df3893e71069132fc94c.jpg', '1602802861_95579e69d751940e53a6.jpg', '1602803304_bfdfa4e5c0ba485d76fd.jpg', '1602803311_ba5e1d9a0793c19a313d.jpg', '1602803315_5592c1264e0bcd972832.jpg', '1602802872_ac52076602ace53af38d.jpg', '1602802865_0052a6e0f5da01f7f266.jpg', '0', '', '2020-10-06', '2020-10-11 22:37:46', '2020-10-20 19:39:12');

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
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permohonan_kabkota`
--

INSERT INTO `permohonan_kabkota` (`id`, `slug`, `koperasi_id`, `kabkota_id`, `status_asal`, `status_tujuan`, `trayek_dilayani`, `asal`, `tujuan`, `nomor_kendaraan`, `nama_pemilik`, `alamat_pemilik`, `jenis_kendaraan`, `nomor_kir`, `merk`, `tahun_pembuatan`, `nomor_chasis`, `nomor_mesin`, `nomor_regis_pkb`, `img_surat_permohonan_koperasi`, `img_ktp_pemilik`, `img_stnkb`, `img_jasa_raharja`, `img_kir`, `created_at`, `updated_at`) VALUES
(3, 'ajis-nihali', '6', '0', '0', '0', 'AB-13\r\n', '2', '3', 'DM 1832 DB', 'Ajis Nihali', 'tau', 'Minibus ', 'DB.041.001.427', 'Mitsubishi/Colt120ss', '2014', 'MHMU5WY2EEK003133 ', 'AG15-K40363 ', 'DB.041.001.427', '1603411805_151fcf13c5388f55fb09.jpg', '1603411805_81f8c346bfe26a3df553.jpg', '1603411805_55060e8ecec7a8dd9629.jpg', '1603411805_c3eabb1482be9d5cd559.jpg', '1603411805_490bce25e6e366279ec6.jpg', '2020-10-22 19:10:05', '2020-10-22 19:10:05'),
(6, 'abdul-musakir-radjak', '6', '', '2', '0', 'AA-01', '1', '2', 'DM1832EB', 'Abdul Musakir Radjak', 'batudaa', 'Minibus ', 'DB.041.001.427', 'Mitsubishi/Colt120ss', '2014', 'MHMU5WY2EEK003133 ', 'AG15-K40363 ', 'AB. ASK13123', '1603417263_36d23608fe3b0ca224df.jpg', '1603417263_3e55cea2e15efb5c3920.jpg', '1603417263_e4e4154a1806ba024e29.jpg', '1603417263_3d4797fd24d4e15c8390.jpg', '1603417263_0151548f698f3436dcd3.jpg', '2020-10-22 20:41:03', '2020-10-24 11:57:49'),
(7, 'abdul-musakir-radjak', '6', '', '0', '0', 'AA-02\r\n', '2', '0', 'DM1832EBa', 'Abdul Musakir Radjak', 'batudaa', 'aaasd', 'AB. ASK13123', 'Mitsubishi/Colt120ss', '2015', 'MHMU5WY2EEK003133 ', 'AG15-K40363 ', 'DB.041.001.427', '1603417559_5a7655d5875c1dec2c1f.jpg', '1603417559_c928db8b50eed94db239.jpg', '1603417559_2f332d1a0ff7386e86f8.jpg', '1603417559_8039f2bc40a17a621bc2.jpg', '1603417559_1a02313182cbe5ff6315.jpg', '2020-10-22 20:45:59', '2020-10-22 20:45:59'),
(8, 'pelniyanti-umar', '6', '', '2', '0', 'AB-05', '1', '1', 'DM1832EB', 'Pelniyanti Umar', 'batudaa', 'aaasd', 'DB.041.001.427', 'Mitsubishi/Colt120ss', '2014', 'MHMU5WY2EEK003133 ', 'AG15-K40363 ', 'DB.041.001.427', '1603461192_63d5058f5ddbd8a3becc.jpg', '1603461192_ae33c5b95a6ed031a488.jpg', '1603461192_69b8f23b4c51448597ff.jpg', '1603461192_b27d89d3d7f2262e7f44.jpg', '1603461192_97a3940f42f962a1a60e.jpg', '2020-10-23 08:53:12', '2020-10-23 08:53:12'),
(9, 'jack', '6', '', '2', '0', 'AB-07\r\n', '1', '5', 'Jack', 'Jack', 'Jack', 'Jack', 'Jack', 'Jack', 'Jack', 'Jack', 'Jack', 'Jack', '1603552836_485f357b6c85469b4a3c.jpeg', '1603552836_4089cb101c1ff718d483.jpeg', '1603552836_bd9ebe43c42e06ff4641.jpeg', '1603552836_796bc0ae5cc2ff5e74d2.jpeg', '1603552836_37da93099291634292ad.jpeg', '2020-10-24 10:20:36', '2020-10-24 12:11:18'),
(10, 'abdul-musakir-radjak-pelniyanti-umar-nggio', '6', '', '1', '0', 'AA-02\r\n', '1', '6', '$href ', 'abdul musakir radjak pelniyanti Umar nggio', '$href ', '$href ', '$href ', '$href ', '$href ', '$href ', '$href ', '$href ', '1603553234_dbb7ab3e3d79999f2bc1.jpeg', '1603553234_2820630df26795c9460e.jpeg', '1603553234_13d03bae0433f6085c59.jpeg', '1603553234_d6ad07a887df67ca80c7.jpeg', '1603553234_7f67b4a15db3b4c6cc5d.jpeg', '2020-10-24 10:27:14', '2020-10-24 12:06:39');

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
(2, 'AA-02\r\n', 'Terminal Dungingi Kota Gorontalo – Terminal Tilamuta, PPTerminal Pusat Kota Gorontalo - Tml. Telaga - Tml. Limboto, PP\r\n', 19, 22, NULL, NULL),
(7, 'AA-03\r\n', 'Terminal Pusat Kota Gorontalo - Bongo - Kayubulan, PP\r\n', 14, 1, NULL, NULL),
(8, 'AA-04', 'Terminal Pusat Kota Gorontalo - Kabila - Suwawa, PP\r\n', 13, 1, NULL, NULL),
(9, 'AA-05\r\n', 'Terminal Pusat Kota Gorontalo - Botupingge - Timbuolo - Bondawuna, PP\r\n', 8, 1, NULL, NULL),
(10, 'AA-06\r\n', 'Terminal Pusat Kota Gorontalo - Tml. Tapa - Tupa, PP\r\n', 24, 1, NULL, NULL),
(11, 'AB-01\r\n', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Tml. Molingkapoto - Pel. Kwandang, PP\r\n', 48, 1, NULL, NULL),
(12, 'AB-02\r\n', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Tml. Paguyaman - Tml. Tilamuta, PP\r\n', 45, 1, NULL, NULL),
(13, 'AB-03\r\n', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Kwandang - Tml. Atinggola, PP\r\n', 42, 1, NULL, NULL),
(14, 'AB-04\r\n', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Tml. Paguyaman, PP\r\n', 35, 1, NULL, NULL),
(15, 'AB-05', 'Terminal Dungingi Kota Gorontalo - Tml. Telaga - Tml. Isimu, PP\r\n', 25, 1, NULL, NULL),
(16, 'AB-06\r\n', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Tml. Paguyaman - Tml. Tilamuta - Paguat - Tml. Marisa, PP\r\n', 20, 1, NULL, NULL),
(17, 'AB-07\r\n', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Tml. Molingkapoto - Monano - Sumalata, PP\r\n', 19, 1, NULL, NULL),
(18, 'AB-08\r\n', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Tml. Molingkapoto - Sumalata - Tolinggula, PP\r\n', 11, 1, NULL, NULL),
(19, 'AB-09\r\n', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Lakeya, PP\r\n', 13, 1, NULL, NULL),
(20, 'AB-10\r\n', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Tml. Paguyaman - Bubaa, PP\r\n', 8, 1, NULL, NULL),
(21, 'AB-11\r\n', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Tml. Paguyaman - Tml. Tilamuta - Paguat - Tml. Marisa - Tml. Randangan - Tml. Lemito, PP\r\n', 21, 1, NULL, NULL),
(22, 'AB-12\r\n', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Tml. Paguyaman - Tml. Tilamuta - Paguat - Tml. Marisa - Tml. Randangan - Tml. Popayato - Tml. Molosifat, PP\r\n', 8, 1, NULL, NULL),
(23, 'AB-13\r\n', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Tml. Paguyaman - Tml. Tilamuta - Paguat - Tml. Marisa - Tml. Randangan - Tml. Popayato - Malango\r\n', 5, 1, NULL, NULL),
(24, 'AB-14\r\n', 'Terminal Dungingi Kota Gorontalo - Biluhu Timur - Ilomata, PP\r\n', 5, 1, NULL, NULL),
(25, 'AB-15\r\n', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Tml. Molingkapoto - Tolinggula - Papualangi\r\n', 5, 1, NULL, NULL),
(26, 'AB-16\r\n', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Parungi - Mohiyolo, PP\r\n', 21, 1, NULL, NULL),
(27, 'AB-17\r\n', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Wonosari, PP\r\n', 25, 1, NULL, NULL),
(28, 'AB-18\r\n', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Pulubala - Toyidito, PP\r\n', 8, 1, NULL, NULL),
(29, 'AB-19\r\n', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Pulubala - Satria, PP\r\n', 8, 1, NULL, NULL),
(30, 'AB-20\r\n', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Parungi, PP\r\n', 16, 1, NULL, NULL),
(31, 'AB-21\r\n', 'Terminal Dungingi Kota Gorontalo - Tml. Isimu - Bilato, PP\r\n', 26, 1, NULL, NULL),
(32, 'AC-01\r\n', 'Terminal Leato Kota Gorontalo - Molotabu - Bilungala - Taludaa, PP\r\n', 27, 1, NULL, NULL),
(33, 'B-01\r\n', 'Terminal Isimu - Tml. Paguyaman - Tml. Tilamuta - Tml. Marisa, PP\r\n', 20, 1, NULL, NULL),
(34, 'B-02\r\n', 'Terminal Isimu - Tml. Tilamuta - Tml. Marisa - Tml. Popayato\r\n', 11, 1, NULL, NULL),
(35, 'B-03\r\n', 'Terminal Isimu - Tml. Molingkapoto - Pel. Kwandang, PP\r\n', 21, 1, NULL, NULL),
(36, 'B-04\r\n', 'Terminal Isimu - Tml. Molingkapoto - Kwandang - Tml. Atinggola, PP\r\n', 32, NULL, NULL, NULL),
(37, 'B-05\r\n', 'Terminal Isimu - Tml. Molingkapoto - Sumalata - Tolinggula - Papualangi\r\n', 35, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
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

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `hp`, `role`, `nik_direktur`, `nama_direktur`, `nama_perusahaan`, `alamat`, `npwp`, `img_akte_perusahaan`, `img_izin_angkutan`, `img_tdp`, `img_npwp`, `img_ktp_direktur`, `img_siup`, `img_nib`, `created_at`, `updated_at`) VALUES
(3, 'Riansyah Inde', 'rian@gmail.com', '$2y$10$GQVZ0./65cQ5O2aeBpXrLOCT517fFOkL2pCBNDVUezln1TnYEgI2y', '0822878378278', '2', '', '', '', '', '', '', '', '', '', '', '', '', '2020-10-15 09:12:25', '2020-10-15 09:12:25'),
(4, 'Abdul Karim Rauf', 'abd@gmail.com', '$2y$10$S0CPKSP/kgoGIyw1knJM0uW.VTL5GokmfPEgacYBZ6JpdM2NdcmLe', '0822878378278', '3', '', '', '', '', '', '', '', '', '', '', '', '', '2020-10-15 09:12:48', '2020-10-15 09:12:48'),
(5, 'Zakir Radjak', 'z@gmail.com', '$2y$10$vBeyDO3Fy1p1OH8Fv4jnGOKiGKXtzsp9etWTpTDfIz9Sn17EM4ZVy', '123', '4', '', '', '', '', '', '', '', '', '', '', '', '', '2020-10-15 19:56:47', '2020-10-15 19:56:47'),
(6, 'Cece C.', 'ksu.tsb@gmail.com', '$2y$10$LutpR..sxvpiIs.7.1HQd.4qk.WX.5nOock4/rI.WGjJ1h7./0KC2', '082293728432', '0', '7501011908580001', 'K A R D I', 'KSU TETAP SETIA BHAYANGKARA', 'Jl.A.Wahab Nomor 18.Desa Bulila Kec. Telaga  Kab. Gorontalo', 'NPWP Koperasi A', '1603299094_67b6683112bb6decacbd.jpg', '1603299084_42d92a42655e88fc89a5.jpeg', '1603373304_209281e2241c0dfdd90d.jpg', '1603373324_d521da9a8b924c867570.jpg', '1603373324_1ea2b851a967a149f933.jpg', '1603373324_1b1b7d563efc5dd0b2ca.jpeg', '1603373324_ff2e320951dde85baa37.jpeg', '2020-10-20 10:16:27', '2020-10-22 19:07:12'),
(7, 'PTSP', 'ptsp', '$2y$10$OWxfDYGunVxybreXI/et7OkChKRYrrJA0OHgeZ4jYKVpRyJ4Qvu9C', '123', '1', '', '', '', '', '', '', '', '', '', '', '', '', '2020-10-20 10:16:50', '2020-10-20 10:16:50'),
(8, 'Verifikator', 'verifikator', '$2y$10$NthJomSaybwm1UNaiw.UXONO6Yiq66xhnJ/nlStVSBOHDnGb2slPC', '123', '2', '', '', '', '', '', '', '', '', '', '', '', '', '2020-10-20 10:17:16', '2020-10-20 10:17:16'),
(9, 'Kota', 'kotagtlo', '$2y$10$GkcXbl1Eq6GCVdM0CkSJo.8G6EG1F/8pf3PropjK3JHcWGz/mUCB6', '123', '5', '', '', 'Admin Dinas Perhubungan Kota Gorontalo', '', '', '', '', '', '', '', '', '', '2020-10-20 10:18:30', '2020-10-20 10:18:30'),
(10, 'Kabupaten', 'kabgtlo', '$2y$10$nUWFlm53u5RQbOscHBZUl.3RjIahpycxGJUC9u7zenQ3H2yA9Wqru', '123', '6', 'Admin Dinas Perhubungan Kabupaten Gorontalo', 'Admin Dinas Perhubungan Kabupaten Gorontalo', 'Admin Dinas Perhubungan Kabupaten Gorontalo', 'Admin Dinas Perhubungan Kabupaten Gorontalo', '', '', '', '', '', '', '', '', '2020-10-20 10:18:02', '2020-10-24 09:37:19'),
(11, 'BoneBol', 'kabbonebol', '$2y$10$.ulfU4lL6EK3SMLHQXD0EOkgXFvMKs3qAoNaHPrC7jGT7KvaTLZci', '08121312312323', '7', '', '', 'Admin Dinas Perhubungan Kabupaten Bone Bolango', '', '', '', '', '', '', '', '', '', '2020-10-24 09:29:41', '2020-10-24 09:29:41'),
(12, 'Gorut', 'kabgorut', '$2y$10$b7pHWWygsTwnGq8lUREsMuU9z7Pl8PoaXiBLU7UC/G2/8rUvGXOXG', '08121312312323', '8', '', '', 'Admin Dinas Perhubungan Kabupaten Gorontalo Utara', '', '', '', '', '', '', '', '', '', '2020-10-24 10:02:47', '2020-10-24 10:02:47'),
(13, 'Boalemo', 'kabboalemo', '$2y$10$/MYwtBVD7taFgDXiqhk9Lu8BXjklOVjXRvQrz9JmAhXA8sHSqCF8i', '08121312312323', '9', '', '', 'Admin Dinas Perhubungan Kabupaten Boalemo', '', '', '', '', '', '', '', '', '', '2020-10-24 10:03:29', '2020-10-24 10:03:29'),
(14, 'Pohuwato', 'kabpohuwato', '$2y$10$ovwxJcIHynt3AohGx418dOX1J/5PqZs/Imh7oG3rGl4XbxGn4Z3va', '08121312312323', '10', '', '', 'Admin Dinas Perhubungan Kabupaten Pohuwato', '', '', '', '', '', '', '', '', '', '2020-10-24 10:03:56', '2020-10-24 10:03:56');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nomor_surat`
--
ALTER TABLE `nomor_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permohonan`
--
ALTER TABLE `permohonan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `permohonan_kabkota`
--
ALTER TABLE `permohonan_kabkota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `trayek`
--
ALTER TABLE `trayek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `wilayah`
--
ALTER TABLE `wilayah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
