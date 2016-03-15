-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2015 at 08:34 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pw1`
--

-- --------------------------------------------------------

--
-- Table structure for table `list_cleaner`
--

CREATE TABLE IF NOT EXISTS `list_cleaner` (
`id_cleaner` int(20) NOT NULL,
  `nama_cleaner` varchar(20) NOT NULL,
  `jeniskel_cleaner` varchar(20) NOT NULL,
  `tempat_cleaner` varchar(50) NOT NULL,
  `tanggal_cleaner` date NOT NULL,
  `kota_cleaner` varchar(150) NOT NULL,
  `kodepos_cleaner` varchar(30) NOT NULL,
  `nohp_cleaner` varchar(20) NOT NULL,
  `agama_cleaner` varchar(10) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_cleaner`
--

INSERT INTO `list_cleaner` (`id_cleaner`, `nama_cleaner`, `jeniskel_cleaner`, `tempat_cleaner`, `tanggal_cleaner`, `kota_cleaner`, `kodepos_cleaner`, `nohp_cleaner`, `agama_cleaner`, `foto`) VALUES
(16, 'cdcd;l', 'jdfeof', 'oker;v', '2015-06-17', 'cdjkh', 'kjiore', 'ojdojc', 'knji', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_cleaner`
--
ALTER TABLE `list_cleaner`
 ADD PRIMARY KEY (`id_cleaner`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_cleaner`
--
ALTER TABLE `list_cleaner`
MODIFY `id_cleaner` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
