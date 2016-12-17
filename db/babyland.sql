-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Des 2016 pada 05.16
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `babyland`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_transaksi`
--

CREATE TABLE `data_transaksi` (
  `id_order` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `tanggal` datetime NOT NULL,
  `total` int(20) UNSIGNED NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `data_transaksi`
--

INSERT INTO `data_transaksi` (`id_order`, `user_id`, `tanggal`, `total`, `status`) VALUES
(71, 24, '0000-00-00 00:00:00', 360000, 0),
(72, 24, '0000-00-00 00:00:00', 1260000, 0),
(73, 24, '0000-00-00 00:00:00', 200000, 0),
(74, 24, '0000-00-00 00:00:00', 200000, 0),
(75, 24, '0000-00-00 00:00:00', 800000, 0),
(76, 24, '0000-00-00 00:00:00', 630000, 0),
(77, 25, '0000-00-00 00:00:00', 1090000, 0),
(78, 21, '0000-00-00 00:00:00', 330000, 0),
(79, 21, '0000-00-00 00:00:00', 720000, 0),
(80, 21, '2016-12-17 08:21:45', 10000, 0),
(81, 25, '2016-12-17 09:54:29', 40000, 0),
(82, 25, '2016-12-17 09:55:06', 40000, 0),
(83, 25, '2016-12-17 09:57:46', 800000, 0),
(84, 25, '2016-12-17 10:01:25', 100000, 0),
(85, 25, '2016-12-17 10:03:54', 200000, 0),
(86, 25, '2016-12-17 10:04:34', 200000, 0),
(87, 25, '2016-12-17 10:09:35', 200000, 0),
(88, 25, '2016-12-17 10:18:14', 180000, 0),
(89, 25, '2016-12-17 10:26:19', 180000, 0),
(90, 25, '2016-12-17 10:26:57', 10000, 0),
(91, 25, '2016-12-17 10:29:36', 20000, 0),
(92, 25, '2016-12-17 10:31:44', 200000, 0),
(93, 25, '2016-12-17 10:32:12', 200000, 0),
(94, 25, '2016-12-17 10:32:13', 200000, 0),
(95, 25, '2016-12-17 10:32:26', 200000, 0),
(96, 25, '2016-12-17 10:50:09', 500000, 0),
(97, 25, '2016-12-17 10:50:33', 500000, 0),
(98, 25, '2016-12-17 10:58:51', 400000, 0),
(99, 25, '2016-12-17 11:03:30', 600000, 0),
(100, 25, '2016-12-17 11:05:21', 100000, 0),
(101, 25, '2016-12-17 11:06:00', 400000, 0),
(102, 25, '2016-12-17 11:09:02', 200000, 0),
(103, 25, '2016-12-17 11:14:03', 2800000, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(10) UNSIGNED NOT NULL,
  `alat_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `komentar` varchar(200) CHARACTER SET latin1 NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `alat_id`, `user_id`, `komentar`, `tanggal`) VALUES
(1, 72, 20, 'hahahaha', '2016-12-08 02:11:28'),
(3, 72, 20, 'aaaaa', '2016-12-08 07:41:00'),
(4, 72, 20, 'hkjhh', '2016-12-08 07:45:47'),
(5, 72, 20, 'hkjhh', '2016-12-08 07:46:32'),
(6, 72, 20, 'suree??', '2016-12-08 07:48:58'),
(7, 72, 20, 'kjhjhjh', '2016-12-08 07:49:12'),
(28, 75, 22, 'such a good thing', '2016-12-09 12:40:17'),
(29, 75, 22, '????', '2016-12-09 12:40:31'),
(30, 75, 22, 'haloo', '2016-12-13 12:41:22'),
(31, 75, 22, 'a?', '2016-12-13 12:41:48'),
(32, 75, 22, 'bagusbagus', '2016-12-13 12:57:05'),
(33, 78, 24, 'hahaha', '2016-12-17 12:16:09'),
(34, 79, 24, 'haloo', '2016-12-17 06:04:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 NOT NULL,
  `nama` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `notelp` varchar(20) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `alamat` varchar(266) CHARACTER SET latin1 NOT NULL,
  `kota` varchar(20) CHARACTER SET latin1 NOT NULL,
  `fotoprofil` varchar(20) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_user`, `username`, `nama`, `email`, `notelp`, `password`, `alamat`, `kota`, `fotoprofil`) VALUES
(21, 'admin', 'admin', 'admin@gmail.com', '085746921137', '21232f297a57a5a743894a0e4a801fc3', 'dinoyo', 'Malang', NULL),
(22, 'yudis', 'yudis', 'yudistira96@gmail.com', '085746921137', 'd7d17b035a7a428d8441c744710eda59', 'Gajayana Malang', 'jepang', 'tokyo22.jpg'),
(23, 'bondan', 'yudistira', 'sugandi031@gmail.com', '085746921137', 'b98f89b0d3875fc4249d1afb38dcf35a', 'gajayana 1', 'Malang', NULL),
(24, 'ochi', 'ochi', 'ochi@gmail.com', '085746927986', '1c9953396f24eeea2f8f1d387388cd5b', 'sumbersari', 'malang', 'tokyo23.jpg'),
(25, 'daneswara', 'Dhaneswara Jauhari', 'daneswarajauhari@gmail.com', '085730595101', '8678fb1c3e7d1c695ea4c7102bcf53e1', 'Sepanjang Asri Blok B/36', 'Kota Malang', '123.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sewa`
--

CREATE TABLE `sewa` (
  `id_alat` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `nama_alat` varchar(100) CHARACTER SET latin1 NOT NULL,
  `jumlah` int(10) UNSIGNED NOT NULL,
  `deskripsi` varchar(255) CHARACTER SET latin1 NOT NULL,
  `harga` int(20) UNSIGNED NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `sewa`
--

INSERT INTO `sewa` (`id_alat`, `user_id`, `nama_alat`, `jumlah`, `deskripsi`, `harga`, `foto`) VALUES
(75, 22, 'Alat Gendong', 100, 'alat gendong bayi masih bagus dab mulus', 100000, 'erikasawajiri2.png'),
(78, 22, 'barang', 0, 'bagus banget', 90000, 'tokyo21.jpg'),
(79, 24, 'alat', 0, 'barang bagus', 90000, 'tokyo24.jpg'),
(80, 25, 'Celana', 0, 'Celana Panjang', 10000, 'WhatsApp_Image_2016-11-12_at_20_24_01.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_data_transaksi` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `alat_id` int(20) UNSIGNED NOT NULL,
  `jumlah` int(10) UNSIGNED NOT NULL,
  `status` enum('0','1','2') CHARACTER SET latin1 NOT NULL,
  `lama` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_data_transaksi`, `order_id`, `tanggal_mulai`, `tanggal_akhir`, `alat_id`, `jumlah`, `status`, `lama`) VALUES
(22, 71, '2016-12-18', '2016-12-21', 78, 1, '0', 4),
(23, 72, '2016-12-28', '2017-01-03', 78, 2, '0', 7),
(24, 73, '2016-12-20', '2016-12-20', 75, 2, '0', 1),
(25, 74, '2016-12-21', '2016-12-22', 75, 1, '0', 2),
(26, 75, '2016-12-23', '2016-12-26', 75, 2, '0', 4),
(27, 76, '2016-12-18', '2016-12-24', 79, 1, '0', 7),
(28, 77, '2016-12-27', '2016-12-31', 75, 2, '0', 5),
(29, 77, '2016-12-17', '2016-12-17', 79, 1, '0', 1),
(30, 78, '2016-12-17', '2016-12-19', 80, 1, '0', 3),
(31, 78, '2016-12-17', '2016-12-19', 75, 1, '0', 3),
(32, 79, '2017-01-19', '2017-01-26', 79, 1, '0', 8),
(33, 80, '2016-12-20', '2016-12-20', 80, 1, '0', 1),
(34, 82, '2016-12-21', '2016-12-22', 80, 2, '0', 2),
(35, 83, '2017-01-04', '2017-01-11', 75, 1, '0', 8),
(36, 84, '2017-01-19', '2017-01-19', 75, 1, '0', 1),
(37, 85, '2017-01-20', '2017-01-20', 75, 2, '0', 1),
(38, 86, '2017-01-21', '2017-01-21', 75, 2, '0', 1),
(39, 87, '2017-01-12', '2017-01-12', 75, 2, '0', 1),
(40, 88, '2016-12-22', '2016-12-22', 78, 2, '0', 1),
(41, 89, '2016-12-25', '2016-12-25', 79, 2, '0', 1),
(42, 90, '2016-12-23', '2016-12-23', 80, 1, '0', 1),
(43, 91, '2016-12-24', '2016-12-24', 80, 2, '0', 1),
(44, 95, '2017-01-13', '2017-01-13', 75, 2, '0', 1),
(45, 97, '2017-01-14', '2017-01-18', 75, 1, '0', 5),
(46, 98, '2017-01-26', '2017-01-27', 75, 2, '0', 2),
(47, 99, '2017-01-01', '2017-01-03', 75, 2, '0', 3),
(48, 100, '2017-01-22', '2017-01-22', 75, 1, '0', 1),
(49, 101, '2017-01-23', '2017-01-24', 75, 2, '0', 2),
(50, 102, '2017-01-25', '2017-01-25', 75, 2, '0', 1),
(51, 103, '2017-01-28', '2017-01-31', 75, 7, '0', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `alat_id` (`alat_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `alat_id_2` (`alat_id`),
  ADD KEY `user_id_2` (`user_id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`id_alat`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_data_transaksi`),
  ADD KEY `alat_id` (`alat_id`),
  ADD KEY `order_id` (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
  MODIFY `id_order` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `sewa`
--
ALTER TABLE `sewa`
  MODIFY `id_alat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_data_transaksi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `sewa`
--
ALTER TABLE `sewa`
  ADD CONSTRAINT `sewa_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `pengguna` (`id_user`),
  ADD CONSTRAINT `sewa_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `pengguna` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sewa_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `pengguna` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sewa_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `pengguna` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sewa_ibfk_5` FOREIGN KEY (`user_id`) REFERENCES `pengguna` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sewa_ibfk_6` FOREIGN KEY (`user_id`) REFERENCES `pengguna` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sewa_ibfk_7` FOREIGN KEY (`user_id`) REFERENCES `pengguna` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `data_transaksi` (`id_order`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
