-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Bulan Mei 2019 pada 16.49
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `user_admin` varchar(50) NOT NULL,
  `pass_admin` varchar(50) NOT NULL,
  `id_admin` int(200) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `notelp_admin` varchar(50) NOT NULL,
  `jabatan_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`user_admin`, `pass_admin`, `id_admin`, `nama_admin`, `email_admin`, `notelp_admin`, `jabatan_admin`) VALUES
('sysadmin', '1234', 1, 'Fauziah Rizky', 'kiki.fauziah@gmail.com', '081555476301', 'System Administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_sewa`
--

CREATE TABLE `daftar_sewa` (
  `id_daftarsewa` int(100) NOT NULL,
  `id_kam` int(11) NOT NULL,
  `nama_penyewa` varchar(100) NOT NULL,
  `email_penyewa` varchar(50) NOT NULL,
  `notelp_penyewa` varchar(50) NOT NULL,
  `noktp_penyewa` varchar(50) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `tanggal_mulai_sewa` date NOT NULL,
  `tanggal_selesai_sewa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_sewa`
--

INSERT INTO `daftar_sewa` (`id_daftarsewa`, `id_kam`, `nama_penyewa`, `email_penyewa`, `notelp_penyewa`, `noktp_penyewa`, `nama_pemilik`, `tanggal_mulai_sewa`, `tanggal_selesai_sewa`) VALUES
(9, 2, 'Muhammad Firmansyah', 'firmansyahm9@gmail.com', '6281333152944', '3507141604990001', 'Muhammad Firmansyah', '2019-05-23', '2019-05-24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamera`
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
-- Dumping data untuk tabel `kamera`
--

INSERT INTO `kamera` (`id_kamera`, `id_pemilik`, `merek_kamera`, `seri_kamera`, `spesifikasi_kamera`, `kondisi_kamera`, `harga_sewa`, `gambar_kamera`, `status_kamera`) VALUES
(1, 2, 'Canon', 'EOS 5D Mark IV', '30.4MP Full-Frame CMOS Sensor, DIGIC 6+ Image Processor, 3.2 1.62m-Dot Touchscreen LCD Monitor,', 'Kondisi barang mulus tanpa lecet', '100.000', 'kamera-1.jpg', 'Tersedia'),
(2, 2, 'Nikon', 'D5100', 'Sensor: CMOS DX 16 MP,\r\nISO normal 100-6400, bisa dinaikkan ke ISO 25600,\r\nfull HD movie 1080p, 30 f', 'Kondisi Barang Agak Lecet, fungsi normal', '40.000', 'kamera-2.jpg', 'Tidak Tersedia'),
(3, 2, 'Canon', '600D', 'Warna Hitam, Resolusi 18MP', 'Mulus dan terawat', '50.000', 'Canon_EOS_600D.jpg', 'Tersedia'),
(5, 2, 'Nikon', 'D5200', 'Warna Hitam,Resolusi 18 MP,\r\nLayar bisa flip ke depan', 'Mulus terawat', '50.000', 'Nikon-D5200-KIT-AF-S-18-55mm-VR-h.jpg', 'Tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilik_kamera`
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
-- Dumping data untuk tabel `pemilik_kamera`
--

INSERT INTO `pemilik_kamera` (`username`, `password`, `id_pemilik`, `nama_pemilik`, `email_pemilik`, `notelp_pemilik`, `noktp_pemilik`, `gamktp_pemilik`, `gamselfie_pemilik`) VALUES
('reef16', 'reef', 2, 'Muhammad Firmansyah', 'firmansyahm9@gmail.com', '6281333152944', '3507141604990001', 'IMG20190520230647.jpg', 'IMG20190520230735.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyewa`
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
-- Dumping data untuk tabel `penyewa`
--

INSERT INTO `penyewa` (`username`, `password`, `id_penyewa`, `nama_penyewa`, `email_penyewa`, `notelp_penyewa`, `noktp_penyewa`, `gamktp_penyewa`, `gamselfie_penyewa`) VALUES
('mfr414', 'mfr414', 3, 'Muhammad Firmansyah', 'firmansyahm9@gmail.com', '6281333152944', '3507141604990001', 'IMG20190520230647.jpg', 'IMG20190520230735.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekap_sewa`
--

CREATE TABLE `rekap_sewa` (
  `id_rekap` int(50) NOT NULL,
  `id_kam` int(11) NOT NULL,
  `nama_penyewa` varchar(100) NOT NULL,
  `email_penyewa` varchar(50) NOT NULL,
  `notelp_penyewa` varchar(50) NOT NULL,
  `noktp_penyewa` varchar(50) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `tanggal_mulai_sewa` date NOT NULL,
  `tanggal_selesai_sewa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rekap_sewa`
--

INSERT INTO `rekap_sewa` (`id_rekap`, `id_kam`, `nama_penyewa`, `email_penyewa`, `notelp_penyewa`, `noktp_penyewa`, `nama_pemilik`, `tanggal_mulai_sewa`, `tanggal_selesai_sewa`) VALUES
(4, 2, 'Muhammad Firmansyah', 'firmansyahm9@gmail.com', '6281333152944', '3507141604990001', 'Muhammad Firmansyah', '2019-05-23', '2019-05-24'),
(5, 2, 'Muhammad Firmansyah', 'firmansyahm9@gmail.com', '6281333152944', '3507141604990001', 'Muhammad Firmansyah', '2019-05-23', '2019-05-24'),
(7, 2, 'Muhammad Firmansyah', 'firmansyahm9@gmail.com', '6281333152944', '3507141604990001', 'Muhammad Firmansyah', '2019-05-23', '2019-05-24'),
(8, 2, 'Muhammad Firmansyah', 'firmansyahm9@gmail.com', '6281333152944', '3507141604990001', 'Muhammad Firmansyah', '2019-05-23', '2019-05-24');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `daftar_sewa`
--
ALTER TABLE `daftar_sewa`
  ADD PRIMARY KEY (`id_daftarsewa`),
  ADD KEY `fk_kamera_daftarsewa` (`id_kam`);

--
-- Indeks untuk tabel `kamera`
--
ALTER TABLE `kamera`
  ADD PRIMARY KEY (`id_kamera`),
  ADD KEY `fk_kamera_pemilik` (`id_pemilik`);

--
-- Indeks untuk tabel `pemilik_kamera`
--
ALTER TABLE `pemilik_kamera`
  ADD PRIMARY KEY (`id_pemilik`);

--
-- Indeks untuk tabel `penyewa`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`id_penyewa`);

--
-- Indeks untuk tabel `rekap_sewa`
--
ALTER TABLE `rekap_sewa`
  ADD PRIMARY KEY (`id_rekap`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `daftar_sewa`
--
ALTER TABLE `daftar_sewa`
  MODIFY `id_daftarsewa` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `kamera`
--
ALTER TABLE `kamera`
  MODIFY `id_kamera` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pemilik_kamera`
--
ALTER TABLE `pemilik_kamera`
  MODIFY `id_pemilik` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `penyewa`
--
ALTER TABLE `penyewa`
  MODIFY `id_penyewa` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `daftar_sewa`
--
ALTER TABLE `daftar_sewa`
  ADD CONSTRAINT `fk_kamera_daftarsewa` FOREIGN KEY (`id_kam`) REFERENCES `kamera` (`id_kamera`);

--
-- Ketidakleluasaan untuk tabel `kamera`
--
ALTER TABLE `kamera`
  ADD CONSTRAINT `fk_kamera_pemilik` FOREIGN KEY (`id_pemilik`) REFERENCES `pemilik_kamera` (`id_pemilik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
