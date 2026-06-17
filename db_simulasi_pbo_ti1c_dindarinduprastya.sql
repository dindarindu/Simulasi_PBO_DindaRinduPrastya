-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2026 at 04:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simulasi_pbo_ti1c_dindarinduprastya`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pendaftaran`
--

CREATE TABLE `tabel_pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `nama_calon` varchar(100) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `nilai_ujian` decimal(5,2) NOT NULL,
  `biaya_pendaftaran_dasar` decimal(10,2) NOT NULL,
  `jalur_pendaftaran` enum('Reguler','Prestasi','Kedinasan') NOT NULL,
  `pilihan_prodi` varchar(100) DEFAULT NULL,
  `lokasi_kampus` varchar(100) DEFAULT NULL,
  `jenis_prestasi` varchar(100) DEFAULT NULL,
  `tingkat_prestasi` varchar(50) DEFAULT NULL,
  `sk_ikatan_dinas` varchar(100) DEFAULT NULL,
  `instansi_sponsor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_pendaftaran`
--

INSERT INTO `tabel_pendaftaran` (`id_pendaftaran`, `nama_calon`, `asal_sekolah`, `nilai_ujian`, `biaya_pendaftaran_dasar`, `jalur_pendaftaran`, `pilihan_prodi`, `lokasi_kampus`, `jenis_prestasi`, `tingkat_prestasi`, `sk_ikatan_dinas`, `instansi_sponsor`) VALUES
(1, 'Andi Pratama', 'SMAN 1 Jakarta', 85.50, 250000.00, 'Reguler', 'Teknik Informatika', 'Kampus A', NULL, NULL, NULL, NULL),
(2, 'Siti Nurhaliza', 'SMAN 2 Bandung', 88.75, 250000.00, 'Reguler', 'Sistem Informasi', 'Kampus A', NULL, NULL, NULL, NULL),
(3, 'Budi Santoso', 'SMKN 1 Semarang', 82.00, 250000.00, 'Reguler', 'Teknik Elektro', 'Kampus B', NULL, NULL, NULL, NULL),
(4, 'Rina Wulandari', 'SMAN 5 Surabaya', 90.25, 250000.00, 'Reguler', 'Manajemen', 'Kampus A', NULL, NULL, NULL, NULL),
(5, 'Dedi Kurniawan', 'SMAN 3 Yogyakarta', 84.50, 250000.00, 'Reguler', 'Akuntansi', 'Kampus B', NULL, NULL, NULL, NULL),
(6, 'Lina Marlina', 'SMKN 2 Cilacap', 87.00, 250000.00, 'Reguler', 'Teknik Informatika', 'Kampus A', NULL, NULL, NULL, NULL),
(7, 'Agus Saputra', 'SMAN 1 Purwokerto', 81.50, 250000.00, 'Reguler', 'Teknik Mesin', 'Kampus B', NULL, NULL, NULL, NULL),
(8, 'Nabila Putri', 'SMAN 4 Solo', 89.00, 250000.00, 'Reguler', 'Bisnis Digital', 'Kampus A', NULL, NULL, NULL, NULL),
(9, 'Rahmat Hidayat', 'SMAN 1 Bogor', 91.00, 250000.00, 'Prestasi', NULL, NULL, 'Olimpiade Matematika', 'Nasional', NULL, NULL),
(10, 'Dewi Lestari', 'SMAN 2 Malang', 92.50, 250000.00, 'Prestasi', NULL, NULL, 'Pencak Silat', 'Provinsi', NULL, NULL),
(11, 'Fajar Nugroho', 'SMKN 1 Solo', 89.50, 250000.00, 'Prestasi', NULL, NULL, 'Lomba Robotik', 'Nasional', NULL, NULL),
(12, 'Putri Ayu', 'SMAN 1 Cilacap', 93.25, 250000.00, 'Prestasi', NULL, NULL, 'Karya Ilmiah Remaja', 'Internasional', NULL, NULL),
(13, 'Yoga Prasetyo', 'SMAN 6 Semarang', 90.00, 250000.00, 'Prestasi', NULL, NULL, 'Bulu Tangkis', 'Nasional', NULL, NULL),
(14, 'Melati Sari', 'SMAN 8 Surabaya', 88.50, 250000.00, 'Prestasi', NULL, NULL, 'Tari Tradisional', 'Provinsi', NULL, NULL),
(15, 'Arif Setiawan', 'SMAN 1 Medan', 86.75, 250000.00, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-001/2026', 'Kementerian Perhubungan'),
(16, 'Fitri Handayani', 'SMAN 3 Makassar', 89.25, 250000.00, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-002/2026', 'Badan Meteorologi'),
(17, 'Hendra Wijaya', 'SMKN 2 Pekanbaru', 87.50, 250000.00, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-003/2026', 'Kementerian Keuangan'),
(18, 'Salsa Putri', 'SMAN 4 Padang', 90.50, 250000.00, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-004/2026', 'Badan Pusat Statistik'),
(19, 'Rizky Maulana', 'SMAN 2 Palembang', 88.00, 250000.00, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-005/2026', 'Kementerian Dalam Negeri'),
(20, 'Anisa Rahma', 'SMAN 5 Denpasar', 91.75, 250000.00, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-006/2026', 'Badan Siber dan Sandi Negara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_pendaftaran`
--
ALTER TABLE `tabel_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_pendaftaran`
--
ALTER TABLE `tabel_pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
