-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2022 at 06:08 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keuangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `namaDepan` varchar(50) NOT NULL,
  `namaTengah` varchar(50) NOT NULL,
  `namaBelakang` varchar(50) NOT NULL,
  `tempatLahir` varchar(100) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `NIK` varchar(20) NOT NULL,
  `wargaNegara` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `noHP` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `kodePos` int(15) NOT NULL,
  `fotoProfile` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`namaDepan`, `namaTengah`, `namaBelakang`, `tempatLahir`, `tanggalLahir`, `NIK`, `wargaNegara`, `email`, `noHP`, `alamat`, `kodePos`, `fotoProfile`, `username`, `password`) VALUES
('Nata', 'Lili', 'Gabriel', 'Medan', '2007-06-19', '123456789', 'Indonesia', 'asf@gmail.com', '0865985425144', 'Jalan Kenanga No.98', 22156, '', 'nata', 'nata');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
