-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Oct 09, 2024 at 12:47 PM
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
-- Database: `dbrkt`
--
CREATE DATABASE IF NOT EXISTS `dbrkt` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dbrkt`;

-- --------------------------------------------------------

--
-- Table structure for table `rkt`
--

CREATE TABLE `rkt` (
  `id_transaksi` int(10) NOT NULL,
  `nama_pembeli` varchar(50) NOT NULL,
  `produk` enum('Axforce JR','Axforce Cannon Pro - 4U','Axforce 40 - 4U','Axforce Big Bang - 4U') NOT NULL,
  `jumlah` int(10) NOT NULL,
  `payment` enum('Cash On Delivery','BCA','BRI','GOPAY') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rkt`
--

INSERT INTO `rkt` (`id_transaksi`, `nama_pembeli`, `produk`, `jumlah`, `payment`) VALUES
(4, 'demoza', 'Axforce 40 - 4U', 3, 'BRI'),
(5, 'ceceli', 'Axforce Cannon Pro - 4U', 2, 'BCA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rkt`
--
ALTER TABLE `rkt`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rkt`
--
ALTER TABLE `rkt`
  MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
