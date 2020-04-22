-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2020 at 11:27 AM
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
-- Database: `pw_193040062`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `ID` int(11) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`ID`, `Nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Aji nuansa', '193040046', 'ajinuansa@gmail.com', 'Informatika', ''),
(2, 'Rifki gema f', '193040062', 'bangkigem23@gmail.com', 'Informatika', ''),
(3, 'Sahid jafar', '193040056', 'sahid@gmail.com', 'Informatika', ''),
(4, 'Devi ayu lestari', '193040055', 'devi@gmail.com', 'Informatika', ''),
(5, 'Sultan jihad', '193040048', 'sultan@gmail.com', 'Informatika', ''),
(6, 'Hanna', '193040073', 'hannan@gmail.com', 'Informatika', ''),
(7, 'aldi agenng', '193040054', 'aldi@gmail.com', 'Informatika', ''),
(8, 'herlan nurachaman', '193040043', 'herln@gmail.com', 'Informatika', ''),
(9, 'Fikri aditya  nugraha', '193040066', 'fikri@gmail.com', 'Informatika', ''),
(10, 'Rayhan Abduhuda', '193040044', 'ryhan@gmail.com', 'Informatika', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
