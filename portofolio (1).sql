-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2025 at 04:47 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_elysa`
--

CREATE TABLE `db_elysa` (
  `No` int(10) NOT NULL,
  `NamaKegiatan` varchar(1000) NOT NULL,
  `WaktuKegiatan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_elysa`
--

INSERT INTO `db_elysa` (`No`, `NamaKegiatan`, `WaktuKegiatan`) VALUES
(1, 'Admin Freelancer di Aviara Group', 2024),
(2, 'Karya Akhir terbaik ke-4 Bidang Desain grafis dengan judul Desain Interior and Eksterior Rumah Minimalis Type 45 menggunakan sketch up pro 2019', 2023),
(3, 'Finalis Robot Cerdas V12 PROCOMMIT ITS Surabaya', 2022),
(4, 'Promosi produk menggunakan facebook ads manager', 2025);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_elysa`
--
ALTER TABLE `db_elysa`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_elysa`
--
ALTER TABLE `db_elysa`
  MODIFY `No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
