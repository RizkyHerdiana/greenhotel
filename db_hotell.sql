-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2022 at 05:36 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotell`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_identitas`
--

CREATE TABLE `tb_identitas` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `nik` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` enum('petugas','tamu','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_identitas`
--

INSERT INTO `tb_identitas` (`id_user`, `nama`, `nik`, `alamat`, `no_telp`, `username`, `password`, `level`) VALUES
(1, 'rizky herdiana', '327702823004', 'bandung barat', '12333', 'rizky', '3f8afa119a51363baea7cfc88bc22783', 'admin'),
(2, 'ayrania yara', '3277021039', 'jakarta selatan', '88214', 'yara', '6006605c2cfc6c453e3aac6c9193bd30', 'petugas'),
(3, 'tabi tabi', '3277748454188', 'kalimantan', '8255151', 'tabi', '31dcc2a8b886047aab76a6324f54199a', 'tamu'),
(5, 'jhon', '327701214121', 'london', '0502505', 'jon', '32f96b3220c08d39fa4c595b4195776d', 'tamu'),
(6, 'ahok', '666666666', 'jakarta', '02010405014', 'ohak', 'a043c08b5107f93f418918edd252c8fe', 'tamu'),
(7, 'habib', '3277021039', 'jakarta', '02121202', 'habib', '3573dd3c8f7fa2075538bb9c8a3a4d48', 'tamu'),
(8, 'bengal', '3277722', 'cimahi', '0212154', 'ngal', 'fcea920f7412b5da7be0cf42b8c93759', 'petugas'),
(9, 'tabi', '3277021039', 'bandung', '323232', 'tab', '31dcc2a8b886047aab76a6324f54199a', 'tamu'),
(10, 'tamu', '123456789', 'bandung', '02121412', 'tamu123', '26364ac030f3791242f334bc3749fe36', 'tamu'),
(11, 'virgi', '1212112121', 'jaksel', '000000', 'gi', 'e10adc3949ba59abbe56e057f20f883e', 'tamu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kamar`
--

CREATE TABLE `tb_kamar` (
  `id_kamar` int(11) NOT NULL,
  `tipe_kamar` enum('single','couple','family') NOT NULL,
  `harga` varchar(50) NOT NULL,
  `total_kamar` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kamar`
--

INSERT INTO `tb_kamar` (`id_kamar`, `tipe_kamar`, `harga`, `total_kamar`) VALUES
(1, 'single', 'Rp.500.000.00', 5),
(2, 'couple', 'Rp.750.000.00', 4),
(3, 'family', 'Rp.1.200.000.00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_bayar` int(11) NOT NULL,
  `id_pesan` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `total_bayar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id_pesan` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `jumlah_kamar` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pesan`
--

INSERT INTO `tb_pesan` (`id_pesan`, `id_kamar`, `id_user`, `check_in`, `check_out`, `jumlah_kamar`) VALUES
(1, 2, 10, '2022-03-07', '2022-03-09', 1);

--
-- Triggers `tb_pesan`
--
DELIMITER $$
CREATE TRIGGER `check_in` AFTER INSERT ON `tb_pesan` FOR EACH ROW BEGIN
UPDATE tb_kamar SET total_kamar=total_kamar-new.jumlah_kamar WHERE id_kamar=new.id_kamar;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_identitas`
--
ALTER TABLE `tb_identitas`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_kamar`
--
ALTER TABLE `tb_kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_bayar`),
  ADD KEY `id_pesan` (`id_pesan`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indexes for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `id_kamar` (`id_kamar`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_identitas`
--
ALTER TABLE `tb_identitas`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_kamar`
--
ALTER TABLE `tb_kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD CONSTRAINT `tb_pembayaran_ibfk_1` FOREIGN KEY (`id_pesan`) REFERENCES `tb_pesan` (`id_pesan`),
  ADD CONSTRAINT `tb_pembayaran_ibfk_2` FOREIGN KEY (`id_kamar`) REFERENCES `tb_kamar` (`id_kamar`);

--
-- Constraints for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD CONSTRAINT `tb_pesan_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `tb_kamar` (`id_kamar`),
  ADD CONSTRAINT `tb_pesan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_identitas` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
