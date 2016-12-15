-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2016 at 08:46 AM
-- Server version: 5.6.25-log
-- PHP Version: 7.0.2

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
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(10) UNSIGNED NOT NULL,
  `alat_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `komentar` varchar(200) CHARACTER SET latin1 NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `komentar`
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
(32, 75, 22, 'bagusbagus', '2016-12-13 12:57:05');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 NOT NULL,
  `nama` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `notelp` varchar(20) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `alamat` varchar(266) CHARACTER SET latin1 NOT NULL,
  `kota` varchar(20) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_user`, `username`, `nama`, `email`, `notelp`, `password`, `alamat`, `kota`) VALUES
(21, 'admin', 'admin', 'admin@gmail.com', '085746921137', '21232f297a57a5a743894a0e4a801fc3', 'dinoyo', 'Malang'),
(22, 'yudis', 'yudis', 'yudistira96@gmail.com', '085746921137', 'd7d17b035a7a428d8441c744710eda59', 'Gajayana Malang', 'Malang'),
(23, 'bondan', 'yudistira', 'sugandi031@gmail.com', '085746921137', 'b98f89b0d3875fc4249d1afb38dcf35a', 'gajayana 1', 'Malang');

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
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
-- Dumping data for table `sewa`
--

INSERT INTO `sewa` (`id_alat`, `user_id`, `nama_alat`, `jumlah`, `deskripsi`, `harga`, `foto`) VALUES
(75, 22, 'Alat Gendong Bayi', 4, 'alat gendong bayi masih bagus dab mulus', 100000, 'bayi18.jpg'),
(77, 22, 'jklkj', 8, 'nnnknklklnkln', 90000, 'bayi53.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_order` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `alat_id` int(20) UNSIGNED NOT NULL,
  `jumlah` int(10) UNSIGNED NOT NULL,
  `nama_alat` varchar(50) CHARACTER SET latin1 NOT NULL,
  `status` enum('0','1','2') CHARACTER SET latin1 NOT NULL,
  `lama` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_order`, `user_id`, `tanggal_mulai`, `tanggal_akhir`, `alat_id`, `jumlah`, `nama_alat`, `status`, `lama`) VALUES
(3, 22, '2016-12-26', '2016-12-31', 77, 1, 'jklkj', '0', 5),
(4, 22, '2016-12-27', '2016-12-31', 75, 1, 'Alat Gendong Bayi', '0', 4),
(5, 22, '2016-12-15', '2016-12-17', 77, 1, 'jklkj', '0', 2),
(6, 22, '2016-12-26', '2016-12-30', 77, 1, 'jklkj', '0', 4),
(7, 22, '2016-12-27', '2016-12-30', 77, 1, 'jklkj', '0', 3);

--
-- Indexes for dumped tables
--

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
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `alat_id` (`alat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `sewa`
--
ALTER TABLE `sewa`
  MODIFY `id_alat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_order` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `sewa`
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
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `pengguna` (`id_user`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`alat_id`) REFERENCES `sewa` (`id_alat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
