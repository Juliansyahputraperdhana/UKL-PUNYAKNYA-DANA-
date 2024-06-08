-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2024 at 09:31 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bioteknologi`
--

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `Id_info` int(11) NOT NULL,
  `Nm_info` varchar(100) DEFAULT NULL,
  `Jumlah` int(11) DEFAULT NULL,
  `Penerima` varchar(100) DEFAULT NULL,
  `Tanggal` date DEFAULT NULL,
  `Informasi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`Id_info`, `Nm_info`, `Jumlah`, `Penerima`, `Tanggal`, `Informasi`) VALUES
(1, 'Pengumuman Rapat', 50, 'John Doe', '2024-05-01', 'Rapat bulanan akan diadakan pada tanggal 5 Mei 2024.'),
(2, 'Pembagian Bibit', 30, 'Jane Smith', '2024-05-02', 'Hari ini akan dilakukan pembagian bibit padi kepada anggota kelompok tani.'),
(3, 'Pemeliharaan Lahan', 40, 'Ahmad Abdullah', '2024-05-03', 'Mohon untuk seluruh anggota kelompok tani melakukan pemeliharaan lahan secara berkala.');

-- --------------------------------------------------------

--
-- Table structure for table `kelompoktani`
--

CREATE TABLE `kelompoktani` (
  `tanggal` date DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `anggota` int(11) DEFAULT NULL,
  `nm_k_tani` varchar(100) DEFAULT NULL,
  `id_k_tani` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelompoktani`
--

INSERT INTO `kelompoktani` (`tanggal`, `alamat`, `anggota`, `nm_k_tani`, `id_k_tani`) VALUES
('2024-05-01', 'Jalan Mawar No. 1', 3, 'Kelompok Tani Maju Bersama', 1),
('2024-05-02', 'Jalan Melati No. 2', 6, 'Kelompok Tani Berkah', 2),
('2024-05-03', 'Jalan Kenanga No. 3', 2, 'Kelompok Tani Sejahtera', 3);

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `Id_Laporan` int(11) NOT NULL,
  `Nm_laporan` varchar(100) DEFAULT NULL,
  `Jml_laporan` int(11) DEFAULT NULL,
  `penerima` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`Id_Laporan`, `Nm_laporan`, `Jml_laporan`, `penerima`, `tanggal`) VALUES
(1, 'Laporan Keuangan', 50, 'John Doe', '2024-05-01'),
(2, 'Laporan Produksi', 30, 'Jane Smith', '2024-05-02'),
(3, 'Laporan Penjualan', 40, 'Ahmad Abdullah', '2024-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `no_telepon` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama`, `alamat`, `no_telepon`, `email`) VALUES
(1, 'Budi Santoso', 'Jl. Merdeka No. 1', '081234567890', 'budi@example.com'),
(2, 'Ayu Lestari', 'Jl. Sudirman No. 23', '081234567891', 'ayu@example.com'),
(3, 'Rudi Hartono', 'Jl. Gatot Subroto No. 45', '081234567892', 'rudi@example.com'),
(4, 'Siti Aminah', 'Jl. Diponegoro No. 67', '081234567893', 'siti@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Juliansyah Putra Perdhana', 'danaega13@gmail.com', 'Citragarden13', 'admin'),
(2, 'EGA SEPTA KUSUMA WIJAYA', 'egakusumawijaya13@gmail.com', 'Citragarden13', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`Id_info`);

--
-- Indexes for table `kelompoktani`
--
ALTER TABLE `kelompoktani`
  ADD PRIMARY KEY (`id_k_tani`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`Id_Laporan`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id`) REFERENCES `petugas` (`id_petugas`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
