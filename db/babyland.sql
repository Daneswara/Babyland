-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2016 at 05:51 AM
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
(8, 72, 20, 'ini idnya beda??', '2016-12-08 07:49:56'),
(15, 72, 20, '', '2016-12-08 10:26:17'),
(18, 74, 20, '', '2016-12-09 04:44:17'),
(19, 0, 20, '', '2016-12-09 04:44:34'),
(20, 0, 20, 'bisa??', '2016-12-09 05:31:12'),
(21, 0, 20, '', '2016-12-09 05:31:46'),
(22, 0, 20, 'jlkjljk', '2016-12-09 05:32:38'),
(23, 0, 20, 'j', '2016-12-09 05:33:36'),
(24, 0, 20, '', '2016-12-09 05:40:27'),
(25, 0, 20, 'jkjljlk', '2016-12-09 05:41:49'),
(26, 0, 20, 'hjkhjhkjh', '2016-12-09 05:46:11'),
(27, 75, 20, 'hahaha???', '2016-12-09 05:58:23'),
(28, 75, 22, 'such a good thing', '2016-12-09 12:40:17'),
(29, 75, 22, '????', '2016-12-09 12:40:31');

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
