-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2020 at 03:42 AM
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
(1, 'JP1233414', 'Pertimbangan Teknis Untuk Izin Trayek AKDP', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'JP783453', 'Pertimbangan Teknis Untuk Izin Trayek AKDP2', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
(4, '68728071111', 'Ditolak men', '2020-10-18 09:18:47', '2020-10-18 09:18:47');

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
  `terima` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permohonan`
--

INSERT INTO `permohonan` (`id`, `user_id`, `verificator_id`, `approver_id`, `slug`, `kode_booking`, `status`, `status_verifikasi`, `tgl_permohonan`, `nama_pemohon`, `alamat_pemohon`, `jenis_permohonan`, `trayek_dilayani`, `nomor_kendaraan`, `nama_pemilik`, `alamat_pemilik`, `jenis_kendaraan`, `tahun_pembuatan`, `nomor_kir`, `kapasitas_angkutan`, `uji_berkala_berlaku`, `stnkb_berlaku`, `pkb_berlaku`, `jasa_raharja_berlaku`, `img_surat_permohonan`, `img_akte_perusahaan`, `img_tdp`, `img_siup`, `img_npwp`, `img_ktp`, `img_trayek`, `img_stnkb_pkb`, `img_kir`, `img_jasa_raharja`, `img_surat_pernyataan`, `terima`, `created_at`, `updated_at`) VALUES
(1, '', '', '', 'ksu-tetap-setia-bhayangkara', '68728071111', '1', 2, '2020-10-16', 'KSU TETAP SETIA BHAYANGKARA', 'Desa Toto Selatan, Kec. Kabila, Kab. Bone Bolango', 'JP1233414', 'TR001', 'DM1832EB', 'MUCHTAR SALEH', 'Desa Tinelo, Kec. Suwawa, Kab. Bone Bolango', 'Minibus / Mikrolet', '2015', 'DB. 051.001466', '09 orang  +  90 Kg  Barang', '2020-10-16', '2020-10-16', '2020-10-16', '2020-10-16', '1602803293_89e47d131b67d35edb71.jpg', '1602802844_e21face13c6c222ddddd.jpg', '1602802849_22d116bf5b2132e28188.jpg', '1602802854_82bbb80f696d97ad4d70.jpg', '1602802858_df3893e71069132fc94c.jpg', '1602802861_95579e69d751940e53a6.jpg', '1602803304_bfdfa4e5c0ba485d76fd.jpg', '1602803311_ba5e1d9a0793c19a313d.jpg', '1602803315_5592c1264e0bcd972832.jpg', '1602802872_ac52076602ace53af38d.jpg', '1602802865_0052a6e0f5da01f7f266.jpg', 0, '2020-10-11 22:37:46', '2020-10-18 09:18:47'),
(22, '', '', '', 'abdul-musakir-radjak', '68728071112', '1', 1, '2020-10-12', 'KSU TETAP SETIA BHAYANGKARA 4', 'BATUDAA', 'JP783453', 'TR002', 'DM1832EB', 'aa', 'aa', 'aaasd', '2019', 'asdsad', '123 ', '2020-10-13', '2020-10-13', '2020-10-13', '2020-10-13', '1602480960_f5b1c9c442f4eb94604b.png', '1602630531_bbfc32099b8342ab6272.png', '1602631185_49fa7d4cc668e841edf6.jpg', '1602631251_4a02a448f489789eb509.jpg', '1602631255_23398eed90080d672a7d.jpg', '1602631260_afa2dec641ca2a73e8a0.png', '1602486605_dafd40287bcf60382809.jpg', '1602596631_25336e578703191520ac.png', '1602598032_0956d6c8fa5396b5328f.jpg', '1602598808_3135a331e478cc6410c3.png', '1602631264_ff051d0f80a64e9a0873.png', 0, '2020-10-11 22:37:46', '2020-10-15 18:29:36'),
(35, '', '', '', 'ksu-tetap-setia-bhayangkara-1', '68728071113', '1', 2, '2020-10-16', 'KSU TETAP SETIA BHAYANGKARA 1', 'KSU TETAP SETIA BHAYANGKARA 1', 'JP783453', '', 'DM1832EB	', '', '', '', '', '', '', '', '', '', '', '1602832978_3cccfd193038c75e4cb5.jpg', '', '', '', '', '', NULL, '', '', '', '', NULL, '2020-10-16 02:22:58', '2020-10-16 02:22:58'),
(36, '', '', '', 'ksu-tetap-setia-bhayangkara-2', '68728071114', '2', 3, '2020-10-16', 'KSU TETAP SETIA BHAYANGKARA 2', 'KSU TETAP SETIA BHAYANGKARA 2', 'JP783453', '', 'DM1832EB	', '', '', '', '', '', '', '', '', '', '', '1602833003_295ada59b179ef35235e.jpg', '', '', '', '', '', NULL, '', '', '', '', NULL, '2020-10-16 02:23:23', '2020-10-16 02:23:23'),
(37, '', '', '', 'ksu-tetap-setia-bhayangkara-3', '68728071115', '1', 4, '2020-10-07', 'KSU TETAP SETIA BHAYANGKARA 3', 'KSU TETAP SETIA BHAYANGKARA 3', 'JP1233414', '', 'DM1832EB	', '', '', '', '', '', '', '', '', '', '', '1602833034_8cc113f4531dd18af55e.jpg', '', '', '', '', '', NULL, '', '', '', '', NULL, '2020-10-16 02:23:54', '2020-10-16 02:23:54');

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
(1, 'AA-01\r\n', 'Terminal Pusat Kota Gorontalo - Iluta - Batudaa - Terminal Bongomeme, PP\r\n', 34, 48, NULL, NULL),
(2, 'AA-02\r\n', 'Terminal Dungingi Kota Gorontalo – Terminal Tilamuta, PPTerminal Pusat Kota Gorontalo - Tml. Telaga - Tml. Limboto, PP\r\n', 19, 22, NULL, NULL),
(7, 'AA-03\r\n', 'Terminal Pusat Kota Gorontalo - Bongo - Kayubulan, PP\r\n', 14, 1, NULL, NULL),
(8, 'AA-04\r\n', 'Terminal Pusat Kota Gorontalo - Kabila - Suwawa, PP\r\n', 13, 1, NULL, NULL),
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
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `hp`, `role`, `created_at`, `updated_at`) VALUES
(2, 'Rezha Bokings', 'rezha@gmail.com', '$2y$10$zc7mRhA466ClspB9hQrTlumfwE0utmcmQRXbq0vmiFweaR6ONuxxK', '123456', '1', '2020-10-15 09:11:33', '2020-10-15 09:11:33'),
(3, 'Riansyah Inde', 'rian@gmail.com', '$2y$10$GQVZ0./65cQ5O2aeBpXrLOCT517fFOkL2pCBNDVUezln1TnYEgI2y', '0822878378278', '2', '2020-10-15 09:12:25', '2020-10-15 09:12:25'),
(4, 'Abdul Karim Rauf', 'abd@gmail.com', '$2y$10$S0CPKSP/kgoGIyw1knJM0uW.VTL5GokmfPEgacYBZ6JpdM2NdcmLe', '082287837827asd', '3', '2020-10-15 09:12:48', '2020-10-15 09:12:48'),
(5, 'Zakir Radjak', 'z@gmail.com', '$2y$10$vBeyDO3Fy1p1OH8Fv4jnGOKiGKXtzsp9etWTpTDfIz9Sn17EM4ZVy', '123', '4', '2020-10-15 19:56:47', '2020-10-15 19:56:47');

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
-- Indexes for table `permohonan`
--
ALTER TABLE `permohonan`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `permohonan`
--
ALTER TABLE `permohonan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `trayek`
--
ALTER TABLE `trayek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
