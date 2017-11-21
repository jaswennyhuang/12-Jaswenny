-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 20 Nov 2017 pada 16.20
-- Versi Server: 5.7.15-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id3687636_mua`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin123', 'admin123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`nama`, `alamat`, `nohp`, `username`, `password`) VALUES
('ana amelia', 'Lokomotif', '087898989889', 'ana', 'ana'),
('barbara borburas', 'rumbai atas', '0821989888999', 'barbara', 'barbara'),
('jaswenny chyantique', 'kuantan raya', '082173138888', 'jw', 'jw');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `username` varchar(20) NOT NULL,
  `id_pesan` int(20) NOT NULL,
  `tgl_pesan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isi_pesan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`username`, `id_pesan`, `tgl_pesan`, `isi_pesan`) VALUES
('barbara', 30, '2017-11-20 10:04:10', 'Kak Ratna, aku suka banget sama make up looknya!! Kalau bisa kapan-kapan buat promo kelas make up ya kak hehe'),
('ana', 31, '2017-11-20 15:54:53', 'Hi, i\'m so excited with your make up art! Great Job!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `id_workshop` int(10) NOT NULL,
  `bukti_transfer` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'belum valid',
  `tgl_transaksi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `username`, `id_workshop`, `bukti_transfer`, `status`, `tgl_transaksi`) VALUES
(42, 'barbara', 6, 'Buktitransfer_1511172722.jpg', 'valid', '2017-11-20 15:58:43'),
(43, 'ana', 8, 'Buktitransfer_1511193257.jpg', 'belum valid', '2017-11-20 15:58:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `workshop`
--

CREATE TABLE `workshop` (
  `nama_workshop` varchar(50) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `id_workshop` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `workshop`
--

INSERT INTO `workshop` (`nama_workshop`, `deskripsi`, `tempat`, `tanggal`, `waktu`, `harga`, `id_workshop`) VALUES
('Teen Look Make Up', 'You will learn how to make a soft make up look with the young and fresh inner beauty', 'Gaja Hotel, Diamond Room', '5 November 2017', '2:00 p.m. - 4:30 p.m.', 'Rp 750.000/person', 3),
('Bridal Make Up Look', 'You will learn how to make up for a bridal and also handle the hairdo', 'Furaya Hotel, Ballroom 1st floor', '15 November 2017', '2:00 p.m. - 4:30 p.m.', 'Rp 1.000.000/person', 6),
('Flawless Make Up Look', 'You will learn how to apply all the make up stuff in one action', 'Gaja Hotel, Rose Room', '29 November 2017', '2:00 p.m. - 4:30 p.m.', 'Rp 1.000.000/person', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`id_workshop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `id_workshop` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
