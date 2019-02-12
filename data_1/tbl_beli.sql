-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Feb 2018 pada 04.38
-- Versi Server: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mini_quick_book`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_beli`
--

CREATE TABLE IF NOT EXISTS `tbl_beli` (
  `kd_barang` int(20) NOT NULL,
  `deskripsi_barang` text NOT NULL,
  `spesifikasi_barang` text NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `harga_satuan` decimal(30,0) NOT NULL,
  `harga_total` decimal(30,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_beli`
--
ALTER TABLE `tbl_beli`
  ADD PRIMARY KEY (`kd_barang`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
