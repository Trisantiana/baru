-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2017 at 01:00 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
`id` int(15) NOT NULL,
  `nama` varchar(65) DEFAULT NULL,
  `kategori` varchar(45) DEFAULT NULL,
  `vendor` varchar(65) DEFAULT NULL,
  `tipe` varchar(65) DEFAULT NULL,
  `stok` double DEFAULT NULL,
  `harga_beli` decimal(22,2) DEFAULT NULL,
  `harga_jual` decimal(22,2) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `kategori`, `vendor`, `tipe`, `stok`, `harga_beli`, `harga_jual`) VALUES
(1, 'samsung j7', 'smartphone', 'samsung', 'j7', 65, '2000000.00', '3000000.00'),
(3, 'EVERCOSS J4B', 'SMARTHPHONE', 'EVERCOSS', 'J4B', 76, '500000.00', '550000.00');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
`id_kategori` int(15) NOT NULL,
  `kategori` varchar(65) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'smartphone'),
(23, 'android');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(45) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `suplier`
--

CREATE TABLE IF NOT EXISTS `suplier` (
`id_suplier` int(15) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `vendor` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `no_hp` int(20) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `suplier`
--

INSERT INTO `suplier` (`id_suplier`, `nama`, `vendor`, `alamat`, `email`, `no_hp`) VALUES
(44, 'AHMAD', 'SAMSUNG', 'SURABAYA', 'ahmad@gmail.com', 987657645);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(15) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(3, 'ahmad', 'ahmad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `suplier`
--
ALTER TABLE `suplier`
 ADD PRIMARY KEY (`id_suplier`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `id_kategori` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `suplier`
--
ALTER TABLE `suplier`
MODIFY `id_suplier` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
