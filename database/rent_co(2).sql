-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2019 at 04:42 AM
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
-- Database: `rent.co`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamera`
--

CREATE TABLE `kamera` (
  `id_kamera` int(100) NOT NULL,
  `id_pemilik` int(100) NOT NULL,
  `merek_kamera` varchar(20) NOT NULL,
  `seri_kamera` varchar(20) NOT NULL,
  `spesifikasi_kamera` varchar(100) NOT NULL,
  `kondisi_kamera` varchar(100) NOT NULL,
  `harga_sewa` varchar(50) NOT NULL,
  `gambar_kamera` varchar(100) NOT NULL,
  `status_kamera` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamera`
--

INSERT INTO `kamera` (`id_kamera`, `id_pemilik`, `merek_kamera`, `seri_kamera`, `spesifikasi_kamera`, `kondisi_kamera`, `harga_sewa`, `gambar_kamera`, `status_kamera`) VALUES
(1, 1, 'Canon', 'EOS 5D Mark IV', '30.4MP Full-Frame CMOS Sensor, DIGIC 6+ Image Processor, 3.2 1.62m-Dot Touchscreen LCD Monitor,', 'Kondisi barang mulus tanpa lecet', '100.000', 'kamera-1.jpg', 'Tersedia'),
(2, 1, 'Nikon', 'D5100', 'Sensor: CMOS DX 16 MP,\r\nISO normal 100-6400, bisa dinaikkan ke ISO 25600,\r\nfull HD movie 1080p, 30 f', 'Kondisi Barang Agak Lecet, fungsi normal', '40.000', 'kamera-2.jpg', 'Tidak Tersedia'),
(3, 1, 'Canon', '600D', 'Warna Hitam, Resolusi 18MP', 'Mulus dan terawat', '50.000', 'Canon_EOS_600D.jpg', 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `pemilik_kamera`
--

CREATE TABLE `pemilik_kamera` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id_pemilik` int(100) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `email_pemilik` varchar(50) NOT NULL,
  `notelp_pemilik` varchar(20) NOT NULL,
  `noktp_pemilik` varchar(20) NOT NULL,
  `gamktp_pemilik` varchar(100) NOT NULL,
  `gamselfie_pemilik` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemilik_kamera`
--

INSERT INTO `pemilik_kamera` (`username`, `password`, `id_pemilik`, `nama_pemilik`, `email_pemilik`, `notelp_pemilik`, `noktp_pemilik`, `gamktp_pemilik`, `gamselfie_pemilik`) VALUES
('mfr414', 'mfr414', 1, 'Muhammad Firmansyah Rifai', 'gameswarriorz.mfr@gmail.com', '628125247841', '3507141604980001', '', ''),
('reef16', 'reef', 2, 'Muhammad Firmansyah', 'firmansyahm9@gmail.com', '6281333152944', '3507141604990001', 'IMG20190520230647.jpg', 'IMG20190520230735.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `penyewa`
--

CREATE TABLE `penyewa` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id_penyewa` int(100) NOT NULL,
  `nama_penyewa` varchar(100) NOT NULL,
  `email_penyewa` varchar(50) NOT NULL,
  `notelp_penyewa` varchar(20) NOT NULL,
  `noktp_penyewa` varchar(20) NOT NULL,
  `gamktp_penyewa` varchar(100) NOT NULL,
  `gamselfie_penyewa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyewa`
--

INSERT INTO `penyewa` (`username`, `password`, `id_penyewa`, `nama_penyewa`, `email_penyewa`, `notelp_penyewa`, `noktp_penyewa`, `gamktp_penyewa`, `gamselfie_penyewa`) VALUES
('mfr414', 'mfr414', 3, 'Muhammad Firmansyah', 'firmansyahm9@gmail.com', '6281333152944', '3507141604990001', 'IMG20190520230647.jpg', 'IMG20190520230735.jpg'),
('kiki98', 'kiki', 4, 'Fauziah Rizky', 'kiki.fauziah@gmail.com', '6282337734028', '5455612156151', '1e3af69c4296931c365e9b527323cacc.png', '5a2fcb9e3700d4.9524253015130817582253.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamera`
--
ALTER TABLE `kamera`
  ADD PRIMARY KEY (`id_kamera`),
  ADD KEY `fk_kamera_pemilik` (`id_pemilik`);

--
-- Indexes for table `pemilik_kamera`
--
ALTER TABLE `pemilik_kamera`
  ADD PRIMARY KEY (`id_pemilik`);

--
-- Indexes for table `penyewa`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`id_penyewa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kamera`
--
ALTER TABLE `kamera`
  MODIFY `id_kamera` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pemilik_kamera`
--
ALTER TABLE `pemilik_kamera`
  MODIFY `id_pemilik` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penyewa`
--
ALTER TABLE `penyewa`
  MODIFY `id_penyewa` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kamera`
--
ALTER TABLE `kamera`
  ADD CONSTRAINT `fk_kamera_pemilik` FOREIGN KEY (`id_pemilik`) REFERENCES `pemilik_kamera` (`id_pemilik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
