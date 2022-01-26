-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2019 at 11:29 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inventaris`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_pinjam`
--

CREATE TABLE `tb_detail_pinjam` (
  `id_detail_pinjam` varchar(35) NOT NULL,
  `id_peminjaman` varchar(35) DEFAULT NULL,
  `id_inventaris` varchar(35) DEFAULT NULL,
  `jumlah_pinjam` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail_pinjam`
--

INSERT INTO `tb_detail_pinjam` (`id_detail_pinjam`, `id_peminjaman`, `id_inventaris`, `jumlah_pinjam`) VALUES
('5cbfa3a8c4d14', '5cbfa3a894f68', '23545', 5),
('5cbfa630f0c6f', '5cbfa630db4aa', '23545', 5),
('5cbfabc9018ec', '5cbfabc8d7e95', '23545', 5),
('5cbfbf8077b4c', '5cbfbf80671a8', '6345', 5),
('5cbfbf97a1fa6', '5cbfabc8d7e95', '5cbfacd875e9b', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tb_inventaris`
--

CREATE TABLE `tb_inventaris` (
  `id_inventaris` varchar(35) NOT NULL,
  `id_petugas` varchar(35) DEFAULT NULL,
  `id_ruang` varchar(35) DEFAULT NULL,
  `id_jenis` varchar(35) DEFAULT NULL,
  `nama_barang` varchar(15) DEFAULT NULL,
  `kondisi` varchar(15) DEFAULT NULL,
  `keterangan_barang` varchar(15) DEFAULT NULL,
  `tanggal_register` date DEFAULT NULL,
  `kode_inventaris` int(11) DEFAULT NULL,
  `jumlah_barang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_inventaris`
--

INSERT INTO `tb_inventaris` (`id_inventaris`, `id_petugas`, `id_ruang`, `id_jenis`, `nama_barang`, `kondisi`, `keterangan_barang`, `tanggal_register`, `kode_inventaris`, `jumlah_barang`) VALUES
('23545', '1234', '1', '2', 'Sony Alpha 7', 'Sangat Baik', NULL, '2019-04-22', 555, 5),
('5cbfacd875e9b', '1234', '1', '1', 'Nikon D3200', 'Sangat Baik', 'Praktek', '2019-04-24', 24523, 3),
('6345', '12345', '1', '1', 'ROG Strix', 'sangat Baik', NULL, '2019-04-22', 673546, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis`
--

CREATE TABLE `tb_jenis` (
  `id_jenis` varchar(35) NOT NULL,
  `nama_jenis` varchar(15) DEFAULT NULL,
  `kode_jenis` varchar(15) DEFAULT NULL,
  `keterangan_jenis` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenis`
--

INSERT INTO `tb_jenis` (`id_jenis`, `nama_jenis`, `kode_jenis`, `keterangan_jenis`) VALUES
('1', 'Komputer', '0001', NULL),
('2', 'Multimedia', '0002', NULL),
('3', 'Mebel', '003', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_level`
--

CREATE TABLE `tb_level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_level`
--

INSERT INTO `tb_level` (`id_level`, `nama_level`) VALUES
(1, 'Admin'),
(2, 'Operator');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` varchar(35) NOT NULL,
  `nama_pegawai` varchar(15) DEFAULT NULL,
  `nip` int(11) DEFAULT NULL,
  `alamat` varchar(15) DEFAULT NULL,
  `username_pgw` varchar(35) DEFAULT NULL,
  `password_pgw` varchar(35) DEFAULT NULL,
  `level` int(11) DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `nama_pegawai`, `nip`, `alamat`, `username_pgw`, `password_pgw`, `level`) VALUES
('5cbe697dad984', 'Yustiawan ', 5656456, 'Sumberpucung', 'hadi', 'hadi', 3),
('5cbeb33ecd28a', 'Rudi', 3456345, 'Selorejo', 'rudi', 'rudi', 3),
('5cbfbbc2bd367', 'Robert', 5656456, 'Sumberpucung', 'oeee', 'oeee', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_peminjaman`
--

CREATE TABLE `tb_peminjaman` (
  `id_peminjaman` varchar(35) NOT NULL,
  `id_pegawai` varchar(35) DEFAULT NULL,
  `tanggal_pinjam` date DEFAULT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `status_peminjaman` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_peminjaman`
--

INSERT INTO `tb_peminjaman` (`id_peminjaman`, `id_pegawai`, `tanggal_pinjam`, `tanggal_kembali`, `status_peminjaman`) VALUES
('5cbfa3a894f68', '5cbeb33ecd28a', '2019-04-16', '2019-05-01', 1),
('5cbfa630db4aa', '5cbeb33ecd28a', '2019-04-30', '2019-04-25', 1),
('5cbfabc8d7e95', '5cbe697dad984', '2019-04-22', '2019-04-10', 1),
('5cbfbf80671a8', '5cbe697dad984', '2019-04-30', NULL, 0),
('5cbfbfb17e1be', '5cbfbbc2bd367', '2019-04-30', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id_petugas` varchar(35) NOT NULL,
  `id_level` int(11) DEFAULT NULL,
  `nama_petugas` varchar(15) DEFAULT NULL,
  `username` varchar(35) DEFAULT NULL,
  `password` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_petugas`, `id_level`, `nama_petugas`, `username`, `password`) VALUES
('1234', 1, 'Candybear', 'candy', 'c48ba993d35c3abe0380f91738fe2a34'),
('12345', 2, 'Andreas', 'andreas', 'e024f9589c1e9d64b34cb1257d9c9dfc'),
('5cbfb3959fc3b', 2, 'Robinho', 'robi', 'robi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ruang`
--

CREATE TABLE `tb_ruang` (
  `id_ruang` varchar(35) NOT NULL,
  `nama_ruang` varchar(15) DEFAULT NULL,
  `kode_ruang` varchar(15) DEFAULT NULL,
  `keterangan_ruang` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ruang`
--

INSERT INTO `tb_ruang` (`id_ruang`, `nama_ruang`, `kode_ruang`, `keterangan_ruang`) VALUES
('1', 'Lab Komputer', '001', NULL),
('2', 'Lab Bahasa', '002', NULL),
('3', 'Lab Ekonomi', '003', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_detail_pinjam`
--
ALTER TABLE `tb_detail_pinjam`
  ADD PRIMARY KEY (`id_detail_pinjam`),
  ADD KEY `id_inventaris` (`id_inventaris`),
  ADD KEY `id_peminjaman` (`id_peminjaman`);

--
-- Indexes for table `tb_inventaris`
--
ALTER TABLE `tb_inventaris`
  ADD PRIMARY KEY (`id_inventaris`),
  ADD KEY `fk_relationship_1` (`id_ruang`),
  ADD KEY `fk_relationship_2` (`id_jenis`),
  ADD KEY `fk_relationship_7` (`id_petugas`);

--
-- Indexes for table `tb_jenis`
--
ALTER TABLE `tb_jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `tb_level`
--
ALTER TABLE `tb_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD UNIQUE KEY `username_pgw` (`username_pgw`);

--
-- Indexes for table `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `id_level` (`id_level`);

--
-- Indexes for table `tb_ruang`
--
ALTER TABLE `tb_ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_detail_pinjam`
--
ALTER TABLE `tb_detail_pinjam`
  ADD CONSTRAINT `tb_detail_pinjam_ibfk_1` FOREIGN KEY (`id_inventaris`) REFERENCES `tb_inventaris` (`id_inventaris`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_detail_pinjam_ibfk_2` FOREIGN KEY (`id_peminjaman`) REFERENCES `tb_peminjaman` (`id_peminjaman`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_inventaris`
--
ALTER TABLE `tb_inventaris`
  ADD CONSTRAINT `fk_relationship_1` FOREIGN KEY (`id_ruang`) REFERENCES `tb_ruang` (`id_ruang`),
  ADD CONSTRAINT `fk_relationship_2` FOREIGN KEY (`id_jenis`) REFERENCES `tb_jenis` (`id_jenis`),
  ADD CONSTRAINT `fk_relationship_7` FOREIGN KEY (`id_petugas`) REFERENCES `tb_petugas` (`id_petugas`);

--
-- Constraints for table `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  ADD CONSTRAINT `tb_peminjaman_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `tb_pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD CONSTRAINT `tb_petugas_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `tb_level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
