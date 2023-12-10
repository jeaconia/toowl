-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2023 at 11:24 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_vast_laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_layanan`
--

CREATE TABLE `tb_layanan` (
  `id_layanan` int(10) NOT NULL,
  `jenis_layanan` enum('Reguler','Express','','') NOT NULL,
  `harga_layanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_layanan`
--

INSERT INTO `tb_layanan` (`id_layanan`, `jenis_layanan`, `harga_layanan`) VALUES
(22, 'Reguler', 7000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_nota`
--

CREATE TABLE `tb_nota` (
  `no_nota` int(10) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `id_pembayaran` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(10) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `hp_pelanggan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `hp_pelanggan`) VALUES
(20, 'Alexa', '0817200688');

-- --------------------------------------------------------

--
-- Table structure for table `tb_register`
--

CREATE TABLE `tb_register` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_register`
--

INSERT INTO `tb_register` (`id_admin`, `username`, `password`) VALUES
(1, 'aaa', '$2y$10$RejMvwVpjCsuGEQ.zmmfduwLnq6o1uzF8qEQxtRAH.pAPQ58Z74Om');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_pembayaran` int(10) NOT NULL,
  `jumlah_pakaian` int(255) NOT NULL,
  `harga_total` int(20) NOT NULL,
  `diskon_harga` int(20) NOT NULL,
  `harga_bayar` int(20) NOT NULL,
  `id_layanan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_pembayaran`, `jumlah_pakaian`, `harga_total`, `diskon_harga`, `harga_bayar`, `id_layanan`) VALUES
(22, 20, 18000, 0, 18000, 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `tb_nota`
--
ALTER TABLE `tb_nota`
  ADD PRIMARY KEY (`no_nota`),
  ADD KEY `fk_id_pelanggan` (`id_pelanggan`),
  ADD KEY `fk_id_pembayaran` (`id_pembayaran`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tb_register`
--
ALTER TABLE `tb_register`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `fk_id_layanan` (`id_layanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  MODIFY `id_layanan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_nota`
--
ALTER TABLE `tb_nota`
  MODIFY `no_nota` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id_pelanggan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_register`
--
ALTER TABLE `tb_register`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_pembayaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_nota`
--
ALTER TABLE `tb_nota`
  ADD CONSTRAINT `fk_id_pelanggan` FOREIGN KEY (`id_pelanggan`) REFERENCES `tb_pelanggan` (`id_pelanggan`),
  ADD CONSTRAINT `fk_id_pembayaran` FOREIGN KEY (`id_pembayaran`) REFERENCES `tb_transaksi` (`id_pembayaran`);

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `fk_id_layanan` FOREIGN KEY (`id_layanan`) REFERENCES `tb_layanan` (`id_layanan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
