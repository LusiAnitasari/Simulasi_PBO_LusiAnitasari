-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 17, 2026 at 02:48 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simulasi_pbo_ti1c_lusianitasari`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pendaftaran`
--

CREATE TABLE `tabel_pendaftaran` (
  `id_pendaftaran` int NOT NULL,
  `nama_calon` varchar(100) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `nilai_ujian` decimal(5,2) NOT NULL,
  `biaya_pendaftaran_dasar` int NOT NULL,
  `jalur_pendaftaran` enum('Reguler','Prestasi','Kedinasan') NOT NULL,
  `pilihan_prodi` varchar(100) DEFAULT NULL,
  `lokasi_kampus` varchar(100) DEFAULT NULL,
  `jenis_prestasi` varchar(100) DEFAULT NULL,
  `tingkat_prestasi` varchar(50) DEFAULT NULL,
  `sk_ikatan_dinas` varchar(100) DEFAULT NULL,
  `instansi_sponsor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_pendaftaran`
--

INSERT INTO `tabel_pendaftaran` (`id_pendaftaran`, `nama_calon`, `asal_sekolah`, `nilai_ujian`, `biaya_pendaftaran_dasar`, `jalur_pendaftaran`, `pilihan_prodi`, `lokasi_kampus`, `jenis_prestasi`, `tingkat_prestasi`, `sk_ikatan_dinas`, `instansi_sponsor`) VALUES
(1, 'Ahmad Fauzi', 'SMAN 1 Jakarta', '85.50', 250000, 'Reguler', 'Teknik Informatika', 'Kampus Utama', NULL, NULL, NULL, NULL),
(2, 'Budi Santoso', 'SMKN 2 Bandung', '78.00', 250000, 'Reguler', 'Sistem Informasi', 'Kampus Utama', NULL, NULL, NULL, NULL),
(3, 'Citra Dewi', 'SMAN 3 Surabaya', '92.25', 250000, 'Reguler', 'Teknik Elektro', 'Kampus B', NULL, NULL, NULL, NULL),
(4, 'Dedi Kurniawan', 'SMAN 1 Yogyakarta', '80.00', 250000, 'Reguler', 'Manajemen Informatika', 'Kampus Utama', NULL, NULL, NULL, NULL),
(5, 'Eka Putri', 'SMAN 5 Semarang', '88.75', 250000, 'Reguler', 'Teknik Informatika', 'Kampus B', NULL, NULL, NULL, NULL),
(6, 'Fajar Ramadhan', 'SMAN 2 Medan', '75.50', 250000, 'Reguler', 'Sistem Informasi', 'Kampus Utama', NULL, NULL, NULL, NULL),
(7, 'Gita Lestari', 'SMAN 1 Makassar', '83.40', 250000, 'Reguler', 'Teknik Komputer', 'Kampus B', NULL, NULL, NULL, NULL),
(8, 'Hendra Wijaya', 'SMAN 1 Malang', '95.00', 200000, 'Prestasi', NULL, NULL, 'Olimpiade Matematika', 'Nasional', NULL, NULL),
(9, 'Indah Permata', 'SMAN 8 Jakarta', '91.00', 200000, 'Prestasi', NULL, NULL, 'Futsal Putri', 'Provinsi', NULL, NULL),
(10, 'Joko Susilo', 'SMAN 1 Surakarta', '89.50', 200000, 'Prestasi', NULL, NULL, 'Karya Ilmiah Remaja', 'Nasional', NULL, NULL),
(11, 'Kartika Sari', 'SMAN 2 Padang', '93.00', 200000, 'Prestasi', NULL, NULL, 'Penyanyi Solo', 'Kabupaten', NULL, NULL),
(12, 'Lutfi Hakim', 'SMAN 4 Denpasar', '87.80', 200000, 'Prestasi', NULL, NULL, 'Bulutangkis', 'Provinsi', NULL, NULL),
(13, 'Mega Utami', 'SMAN 1 Palembang', '96.00', 200000, 'Prestasi', NULL, NULL, 'Debat Bahasa Inggris', 'Internasional', NULL, NULL),
(14, 'Naufal Abdi', 'SMAN 3 Aceh', '90.20', 200000, 'Prestasi', NULL, NULL, 'Tahfidz 10 Juz', 'Nasional', NULL, NULL),
(15, 'Oki Setiawan', 'SMAN 1 Balikpapan', '86.00', 300000, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-990/KEDINASAN/2026', 'Kementerian Kominfo'),
(16, 'Putri Ayu', 'SMAN 7 Banjarmasin', '84.50', 300000, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-112/IKATAN-DINAS/2026', 'Badan Siber Sandi Negara'),
(17, 'Qori Sandi', 'SMAN 1 Pontianak', '89.00', 300000, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-404/DISKOMINFO/2026', 'Diskominfo Provinsi'),
(18, 'Rian Hidayat', 'SMAN 2 Manado', '81.20', 300000, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-881/KEDINASAN/2026', 'Kementerian Perhubungan'),
(19, 'Siti Aminah', 'SMAN 1 Ambon', '94.10', 300000, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-302/IKATAN-DINAS/2026', 'Kementerian Dalam Negeri'),
(20, 'Taufik Hidayat', 'SMAN 1 Jayapura', '79.90', 300000, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-752/DISKOMINFO/2026', 'Diskominfo Kabupaten');

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
  MODIFY `id_pendaftaran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
