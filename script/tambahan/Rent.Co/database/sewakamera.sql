-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2019 at 01:31 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sewakamera`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `status_id` int(10) NOT NULL,
  `telp_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `alamat`
--

CREATE TABLE `alamat` (
  `id_alamat` int(150) NOT NULL,
  `id_user` int(150) NOT NULL,
  `jalan` varchar(100) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `kode_pos` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_cust` int(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status_id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tmpt_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `profil_cust` varchar(100) NOT NULL,
  `ktp_cust` varchar(100) NOT NULL,
  `Telp1` varchar(100) NOT NULL,
  `Telp2` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `no_ktp` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_alamat` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kamera`
--

CREATE TABLE `kamera` (
  `id_kam` int(200) NOT NULL,
  `nama_kam` varchar(100) NOT NULL,
  `merk_kam` varchar(100) NOT NULL,
  `thn_kam` varchar(100) NOT NULL,
  `Desc_kam` varchar(150) NOT NULL,
  `Spek_kam` varchar(150) NOT NULL,
  `Gam_kam` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penyewa`
--

CREATE TABLE `penyewa` (
  `id_pen` int(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status_id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `Tmpt_lahir` varchar(50) NOT NULL,
  `Tgl_lahir` date NOT NULL,
  `Telp1` varchar(100) NOT NULL,
  `Telp2` varchar(100) NOT NULL,
  `No_KTP` varchar(100) NOT NULL,
  `Profil_pen` varchar(100) NOT NULL,
  `Ktp_pen` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `id_kamera` int(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_alamat` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`id_alamat`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_cust`),
  ADD KEY `id_alamat` (`id_alamat`);

--
-- Indexes for table `kamera`
--
ALTER TABLE `kamera`
  ADD PRIMARY KEY (`id_kam`);

--
-- Indexes for table `penyewa`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`id_pen`),
  ADD KEY `id_kamera` (`id_kamera`),
  ADD KEY `id_alamat` (`id_alamat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alamat`
--
ALTER TABLE `alamat`
  MODIFY `id_alamat` int(150) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_cust` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kamera`
--
ALTER TABLE `kamera`
  MODIFY `id_kam` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penyewa`
--
ALTER TABLE `penyewa`
  MODIFY `id_pen` int(200) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`id_alamat`) REFERENCES `alamat` (`id_alamat`);

--
-- Constraints for table `penyewa`
--
ALTER TABLE `penyewa`
  ADD CONSTRAINT `penyewa_ibfk_1` FOREIGN KEY (`id_kamera`) REFERENCES `kamera` (`id_kam`),
  ADD CONSTRAINT `penyewa_ibfk_2` FOREIGN KEY (`id_alamat`) REFERENCES `alamat` (`id_alamat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
