-- phpMyAdmin SQL Dump
-- version 4.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 03, 2014 at 07:53 AM
-- Server version: 5.5.28
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `retn`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bank`
--

DROP TABLE IF EXISTS `tbl_bank`;
CREATE TABLE IF NOT EXISTS `tbl_bank` (
  `id_bank` int(11) NOT NULL AUTO_INCREMENT,
  `nama_bank` varchar(128) NOT NULL,
  `cabang` varchar(128) NOT NULL,
  `no_rek` varchar(32) NOT NULL,
  PRIMARY KEY (`id_bank`),
  UNIQUE KEY `id_bank` (`id_bank`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_proyek`
--

DROP TABLE IF EXISTS `tbl_detail_proyek`;
CREATE TABLE IF NOT EXISTS `tbl_detail_proyek` (
  `id_detail_proyek` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_jatuh_tempo` date NOT NULL,
  `no_detail_invoice` varchar(128) NOT NULL,
  `keterangan` varchar(512) NOT NULL,
  `waktu_terselesaikan` datetime NOT NULL,
  `status_pengerjaan` smallint(6) NOT NULL,
  `harga_detail` bigint(20) NOT NULL,
  `id_proyek` int(11) NOT NULL,
  PRIMARY KEY (`id_detail_proyek`),
  KEY `id_proyek` (`id_proyek`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan`
--

DROP TABLE IF EXISTS `tbl_pelanggan`;
CREATE TABLE IF NOT EXISTS `tbl_pelanggan` (
  `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pelanggan` varchar(255) NOT NULL,
  `nama_institusi_pelanggan` varchar(128) NOT NULL,
  `alamat_pelanggan` varchar(512) NOT NULL,
  `tipe_pelanggan` varchar(9) NOT NULL,
  `no_rekening` varchar(32) NOT NULL,
  `nama_bank` varchar(128) NOT NULL,
  `no_telp_pelanggan` varchar(32) NOT NULL,
  `fax_pelanggan` varchar(32) NOT NULL,
  `email_pelanggan` varchar(128) NOT NULL,
  `kode_pelanggan` varchar(9) NOT NULL,
  PRIMARY KEY (`id_pelanggan`),
  UNIQUE KEY `id_pelanggan` (`id_pelanggan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembayaran`
--

DROP TABLE IF EXISTS `tbl_pembayaran`;
CREATE TABLE IF NOT EXISTS `tbl_pembayaran` (
  `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT,
  `id_detail_proyek` int(11) NOT NULL,
  `jumlah_transfer` bigint(20) NOT NULL,
  `waktu_transfer` datetime NOT NULL,
  `id_bank` int(11) NOT NULL,
  PRIMARY KEY (`id_pembayaran`),
  UNIQUE KEY `id_detail_pembayaran_detail_proyek_ind` (`id_detail_proyek`),
  UNIQUE KEY `id_bank` (`id_bank`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_proyek`
--

DROP TABLE IF EXISTS `tbl_proyek`;
CREATE TABLE IF NOT EXISTS `tbl_proyek` (
  `id_proyek` int(11) NOT NULL AUTO_INCREMENT,
  `nama_proyek` varchar(255) NOT NULL,
  `tanggal_proyek` date NOT NULL,
  `no_po` varchar(128) NOT NULL,
  `no_piutang` varchar(128) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `biaya_proyek` bigint(20) NOT NULL,
  `aktif` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_proyek`),
  UNIQUE KEY `id_pelanggan_proyek_ind` (`id_pelanggan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(8) NOT NULL,
  `sandi` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(512) NOT NULL,
  `status_pengguna` char(5) NOT NULL,
  `email` varchar(64) NOT NULL,
  `telepon` varchar(24) NOT NULL,
  `mobile` varchar(24) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_role`
--

DROP TABLE IF EXISTS `tbl_user_role`;
CREATE TABLE IF NOT EXISTS `tbl_user_role` (
  `id_user_role` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_user_role`),
  UNIQUE KEY `index_id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD CONSTRAINT `tbl_pembayaran_ibfk_1` FOREIGN KEY (`id_detail_proyek`) REFERENCES `tbl_detail_proyek` (`id_detail_proyek`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_proyek`
--
ALTER TABLE `tbl_proyek`
  ADD CONSTRAINT `tbl_proyek_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `tbl_pelanggan` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  ADD CONSTRAINT `tbl_user_role_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
