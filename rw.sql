-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2025 at 03:15 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rw`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin01', '$2y$10$A2AUtql1R.8slK8NfLgqVenDq2gFhQfyiAOi2qECuXhMj2NNzPg0m', '2025-06-20 21:23:45', '2025-06-20 21:23:45'),
(2, 'admin02', '$2y$10$Kwb3MHFB2q9w/c/B.XwAjudYJ2z0IV4GuRvBSSkjpmqrxT4JLlF3u', '2025-06-20 14:24:13', '2025-06-20 14:24:13');

-- --------------------------------------------------------

--
-- Table structure for table `iuran_sampah`
--

CREATE TABLE `iuran_sampah` (
  `id` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `bulan` varchar(10) DEFAULT NULL,
  `tahun` varchar(10) DEFAULT NULL,
  `total_pemasukan` varchar(50) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iuran_sampah`
--

INSERT INTO `iuran_sampah` (`id`, `id_admin`, `bulan`, `tahun`, `total_pemasukan`, `keterangan`, `created_at`) VALUES
(7, 2, '02', '2025', '5000500', '-', '2025-06-20 07:55:23');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_warga`
--

CREATE TABLE `laporan_warga` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `laporan` text NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan_warga`
--

INSERT INTO `laporan_warga` (`id`, `id_user`, `nama`, `laporan`, `tanggal`, `created_at`) VALUES
(5, 2, 'Asta', 'tes', '2025-06-20', '2025-06-20 13:43:48');

-- --------------------------------------------------------

--
-- Table structure for table `surat_pengantar`
--

CREATE TABLE `surat_pengantar` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `keperluan` text DEFAULT NULL,
  `rt` varchar(5) DEFAULT NULL,
  `rw` varchar(5) DEFAULT NULL,
  `nomor_surat` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('pending','disetujui','ditolak') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat_pengantar`
--

INSERT INTO `surat_pengantar` (`id`, `id_user`, `nama`, `nik`, `alamat`, `keperluan`, `rt`, `rw`, `nomor_surat`, `tanggal`, `created_at`, `status`) VALUES
(6, 2, 'Luffy Gear 5', '5425345345345', 'adsfasd', '-', '02', '6', '610/RT/RW/VI/2025', '2025-06-20', '2025-06-20 15:00:30', 'pending'),
(7, 2, 'Luffy Gear 5', '5425345345345', 'adsfasd', '-', '02', '6', '444/RT/RW/VI/2025', '2025-06-20', '2025-06-20 15:00:37', 'pending'),
(8, 2, 'Tes update surat', '1234567890', 'JL. Tes/2', 'Ngetes', '02', '6', '838/RT/RW/VII/2025', '2025-07-16', '2025-07-16 13:00:39', 'disetujui'),
(9, 2, 'coba lagi', '5425345345345', 'JL. Tes/2', 'Tes2', '01', '9', '872/RT/RW/VII/2025', '2025-07-16', '2025-07-16 13:11:12', 'ditolak'),
(10, 2, 'coba3', '39993950', 'JL. Tes/2', 'Tes3', '03', '4', '683/RT/RW/VII/2025', '2025-07-16', '2025-07-16 13:14:15', 'disetujui');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `foto_ktp` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nik`, `nama`, `username`, `password`, `telepon`, `foto_ktp`, `created_at`, `updated_at`) VALUES
(2, '5425345345345', 'Asta', 'warga01', '$2y$10$S5WRHMwp7umJBFdBoQbA9e78mvVU4f55R10SamfTU1uWTErC35ufa', '0811111111', '1748699683_191a26e9556c7932853e.png', '2025-05-31 13:54:44', '2025-05-31 13:54:44');

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `alamat_asal` varchar(255) DEFAULT NULL,
  `alamat_tujuan` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`id`, `nama_lengkap`, `nik`, `jenis_kelamin`, `status`, `alamat_asal`, `alamat_tujuan`, `tanggal`, `keterangan`, `created_at`) VALUES
(1, 'Budi', '5425345345345', NULL, 'pindah', 'Jl. Bandung', 'Jl. Jakarta', '2025-05-07', '', '2025-05-07 16:19:04'),
(2, 'swq', '5425345345345', 'laki-laki', 'tinggal', 'wswqs', '-', '2025-05-07', 'wsqwswqs', '2025-05-07 16:19:26'),
(3, '', '', NULL, NULL, '', '', '0000-00-00', '', '2025-05-07 16:19:36'),
(4, 'swq', '5425345345345', 'laki-laki', 'tinggal', 'wswqs', '-', '2025-05-07', 'wsqwswqs', '2025-05-07 16:21:39'),
(5, 'swq', '5425345345345', 'laki-laki', 'tinggal', 'wswqs', '-', '2025-05-07', 'wsqwswqs', '2025-05-07 16:21:55'),
(7, 'Ahmad Yani', '5425345345345', NULL, 'tinggal', '', '', '0000-00-00', '', '2025-05-07 16:23:10'),
(8, '', '', NULL, NULL, '', '', '0000-00-00', '', '2025-05-07 16:28:23'),
(9, '', '', NULL, NULL, '', '', '0000-00-00', '', '2025-05-15 05:15:12'),
(10, 'swq', '', 'perempuan', NULL, '', '', '0000-00-00', '', '2025-05-15 05:15:49'),
(11, 'swq', '', 'perempuan', NULL, '', '', '0000-00-00', '', '2025-05-15 05:17:00'),
(12, 'dgfdsfg', '3518200309030001', 'laki-laki', NULL, '', '', '0000-00-00', '', '2025-05-15 05:20:08'),
(13, 'jairo', '3518200309030001', 'Laki-laki', 'kawin', 'wswqs', 'jl.ir.rais', '2025-05-15', '', '2025-05-15 05:35:09'),
(14, 'jairo', '3518200309030001', 'Laki-laki', 'kawin', 'wswqs', 'jl.ir.rais', '2025-05-15', '', '2025-05-15 05:35:36'),
(15, 'swq', '3518200309030001', 'Laki-laki', 'kawin', 'wswqs', 'jl.ir.rais', '2025-05-15', '', '2025-05-15 05:38:07'),
(16, 'aewrtwr4t', '3520032401060002', 'Laki-laki', 'kawin', 'wswqs', 'jl.ir.rais', '2025-05-15', '', '2025-05-15 05:42:07'),
(17, 'Toha', '3520032401060002', 'Laki-laki', 'kawin', 'wswqs', 'jl.ir.rais', '2025-05-15', '', '2025-05-15 05:43:20'),
(18, 'Ahmad Yani', '39993950', 'Laki-laki', 'Menikah', 'Jl. Bandung', 'Jl. Jakarta', '2025-05-26', 'Pindah Tetap', '2025-05-26 04:52:56'),
(19, 'Ahmad Yani', '39993950', 'Perempuan', 'Menikah', 'Jl. Bandung', 'Jl. Jakarta', '2025-05-26', '', '2025-05-26 05:06:05'),
(20, 'Ahmad Yani', '39993950', 'Laki-laki', 'Menikah', 'Jl. Bandung', 'Jl. Jakarta', '2025-05-01', '', '2025-05-26 05:08:17'),
(21, 'Budi', '1234567890', 'Laki-laki', 'Menikah', 'Jl. Bandung', 'Jl. Jakarta', '2025-05-26', '', '2025-05-26 05:26:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `iuran_sampah`
--
ALTER TABLE `iuran_sampah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_iuran` (`id_admin`);

--
-- Indexes for table `laporan_warga`
--
ALTER TABLE `laporan_warga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_lapwarga` (`id_user`);

--
-- Indexes for table `surat_pengantar`
--
ALTER TABLE `surat_pengantar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_surat` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `iuran_sampah`
--
ALTER TABLE `iuran_sampah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `laporan_warga`
--
ALTER TABLE `laporan_warga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `surat_pengantar`
--
ALTER TABLE `surat_pengantar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `iuran_sampah`
--
ALTER TABLE `iuran_sampah`
  ADD CONSTRAINT `fk_iuran` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `laporan_warga`
--
ALTER TABLE `laporan_warga`
  ADD CONSTRAINT `fk_lapwarga` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `surat_pengantar`
--
ALTER TABLE `surat_pengantar`
  ADD CONSTRAINT `fk_surat` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
