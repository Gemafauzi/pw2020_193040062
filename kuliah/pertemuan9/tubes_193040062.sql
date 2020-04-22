-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2020 at 11:30 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040062`
--

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `ID` int(10) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Harga` char(30) NOT NULL,
  `Jenis` varchar(30) NOT NULL,
  `Asal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`ID`, `foto`, `Nama`, `Harga`, `Jenis`, `Asal`) VALUES
(1, '1.png', 'Nasi Padang', 'Rp.12.000', 'Pokok', 'Padang'),
(2, '2.jpg', 'Karedok', 'Rp.15.000', 'Pokok', 'Bandung'),
(3, '3.jpg', 'Papeda', 'Rp.20.000', 'Pokok', 'Papua'),
(4, '4.jpg', 'Dodol', 'Rp.30.000', 'Cemilan', 'Garut'),
(5, '5.jpg', 'empek-empek', 'Rp.45.000', 'Pokok', 'Palembang'),
(6, '6.jpg', 'Baso Malang', 'Rp.15.000', 'pokok', 'Malang'),
(7, '7.jpg', 'Rendang', 'Rp.30.000', 'pokok', 'Sumatra Barat'),
(8, '8.jpg', 'Sate Madura', 'Rp.12.000', 'Pokok', 'Madura'),
(9, '9.jpg', 'Mi aceh', 'Rp.20.000', 'Pokok', 'aceh'),
(10, '10.jpg', 'Gado-gado', 'Rp.23.000', 'pokok', 'Jawa Barat,DKI Jakarta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
