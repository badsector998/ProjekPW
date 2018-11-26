-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 26, 2018 at 09:14 
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projekps`
--

-- --------------------------------------------------------

--
-- Table structure for table `adm`
--

CREATE TABLE IF NOT EXISTS `adm` (
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adm`
--

INSERT INTO `adm` (`user`, `pass`) VALUES
('dadangrokes', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `rental_ps`
--

CREATE TABLE IF NOT EXISTS `rental_ps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `no_tlp` varchar(50) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `durasi` int(11) NOT NULL,
  `barang` varchar(5) NOT NULL,
  `harga` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `no_ktp` (`no_ktp`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `rental_ps`
--

INSERT INTO `rental_ps` (`id`, `nama`, `no_ktp`, `no_tlp`, `alamat`, `durasi`, `barang`, `harga`) VALUES
(1, 'Dadang', '3208182311980001', '089687775493', 'Kuningan', 3, 'PS 2', 60000),
(17, '\0', '123123123', '124124213', 'Citangtu', 1, 'PS 3', 22000),
(16, 'Fathan', '12312321', '123414213213', 'Maguwoharjo', 3, 'PS 2', 60000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
