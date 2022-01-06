-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 06, 2022 at 09:32 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1951061127_university`
--

-- --------------------------------------------------------

--
-- Table structure for table `GIANGVIEN`
--

CREATE TABLE `GIANGVIEN` (
  `magv` int(11) NOT NULL,
  `hovaten` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date DEFAULT NULL,
  `gioitinh` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trinhdo` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chuyenmon` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hocham` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hocvi` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `coquan` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `GIANGVIEN`
--

INSERT INTO `GIANGVIEN` (`magv`, `hovaten`, `ngaysinh`, `gioitinh`, `trinhdo`, `chuyenmon`, `hocham`, `hocvi`, `coquan`) VALUES
(4, '                            asdafsadf', '1990-01-01', 'nam', '                                                        ádfsasdfsdf                                                        ', '                                                        sdaf                                                        ', '                                                        sdfa                                                        ', '                                                        ádf                                                        ', '                                                        sadf                                                        '),
(5, 'asd', '1990-01-01', 'nu', 'ádfa', 'dfasadf', 'sdaf', 'sadfasadfsa', 'adfsadf'),
(6, 'sadsfasfd', '1990-01-01', 'nu', 'asdasdasda', 'asdasd', 'ádasd', 'sadasd', 'ád');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `GIANGVIEN`
--
ALTER TABLE `GIANGVIEN`
  ADD PRIMARY KEY (`magv`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `GIANGVIEN`
--
ALTER TABLE `GIANGVIEN`
  MODIFY `magv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
