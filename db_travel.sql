-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2018 at 05:31 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `kode_cust` int(11) NOT NULL,
  `nama_cust` varchar(200) NOT NULL,
  `alamat_cust` varchar(200) NOT NULL,
  `no_telp_cust` varchar(15) NOT NULL,
  `paket` varchar(12) NOT NULL,
  `flag` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`kode_cust`, `nama_cust`, `alamat_cust`, `no_telp_cust`, `paket`, `flag`) VALUES
(14, 'Gili', 'Lombok', '0876543212345', '', '1'),
(15, 'Leni', 'Pasuruan', '0823346578987', '', '1'),
(16, 'Hesti', 'Kepanjen', '0876543212345', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cust_detail`
--

CREATE TABLE `tb_cust_detail` (
  `kode_cust` int(11) NOT NULL,
  `tujuan_cust` varchar(50) NOT NULL,
  `kode_pkt` varchar(50) NOT NULL,
  `no_trans` int(100) NOT NULL,
  `kode_hotel` varchar(50) NOT NULL,
  `kode_penerbangan` varchar(50) NOT NULL,
  `flag` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_cust_detail`
--

INSERT INTO `tb_cust_detail` (`kode_cust`, `tujuan_cust`, `kode_pkt`, `no_trans`, `kode_hotel`, `kode_penerbangan`, `flag`) VALUES
(14, 'AUS', 'A003', 5, 'AUH', 'GAR', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_email`
--

CREATE TABLE `tb_email` (
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_email`
--

INSERT INTO `tb_email` (`name`, `address`, `subject`, `message`) VALUES
('$name', '$email', '$subject', '$message');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hotel`
--

CREATE TABLE `tb_hotel` (
  `kode_hotel` varchar(50) NOT NULL,
  `nama_hotel` varchar(50) NOT NULL,
  `kode_tujuan` varchar(50) NOT NULL,
  `flag` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hotel`
--

INSERT INTO `tb_hotel` (`kode_hotel`, `nama_hotel`, `kode_tujuan`, `flag`) VALUES
('AHM', 'Amaris Hotel Margorejo', 'SBY', '1'),
('AUH', 'Australia Hotel', 'AUS', '1'),
('CHS', 'Carlton Hotel Singapore', 'SNG', '1'),
('HAR', 'HARRIS Hotel & Conventions Denpasar', 'BLI', '1'),
('HIM', 'Hotel Ibis Malioboro', 'DIY', '1'),
('HSM', 'Hotel Seri Malaysia Port Dickson', 'MAL', '1'),
('ITS', 'Ibis Trans Studio Hotel', 'BDG', '1'),
('LGH', 'Lombok Garden Hotel', 'LMK', '1'),
('RDP', 'RedDoorz Plus Hotel', 'JKT', '1'),
('SBH', 'Swiss - Belinn Hotel', 'MLG', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hotel_detail`
--

CREATE TABLE `tb_hotel_detail` (
  `tujuan_cust` varchar(50) NOT NULL,
  `jml_kamar` int(11) NOT NULL,
  `arrival_date` date NOT NULL,
  `leave_date` date NOT NULL,
  `adult` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `flag` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hotel_detail`
--

INSERT INTO `tb_hotel_detail` (`tujuan_cust`, `jml_kamar`, `arrival_date`, `leave_date`, `adult`, `children`, `flag`) VALUES
('AUS', 1, '2018-12-21', '2018-12-26', 2, 2, '1'),
('BLI', 1, '2019-01-01', '2019-01-06', 1, 0, '1'),
('JKT', 1, '2018-12-01', '2018-12-04', 1, 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_packages`
--

CREATE TABLE `tb_packages` (
  `kode_pkt` varchar(12) NOT NULL,
  `nama_pkt` varchar(100) NOT NULL,
  `hari` int(20) NOT NULL,
  `kode_tujuan` varchar(50) NOT NULL,
  `kode_hotel` varchar(100) NOT NULL,
  `kode_penerbangan` varchar(50) NOT NULL,
  `harga` int(50) NOT NULL,
  `flag` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_packages`
--

INSERT INTO `tb_packages` (`kode_pkt`, `nama_pkt`, `hari`, `kode_tujuan`, `kode_hotel`, `kode_penerbangan`, `harga`, `flag`) VALUES
('A001', 'Paket Aboard 1', 7, 'SNG', 'CHS', 'SRI', 15120000, '1'),
('A002', 'Paket Aboard 2', 7, 'MAL', 'HSM', 'GAR', 4920000, '1'),
('A003', 'Paket Aboard 3', 7, 'AUS', 'AUH', 'GAR', 6180000, '1'),
('H001', 'Paket Hemat 1', 3, 'JKT', 'RDP', 'LIO', 1976000, '1'),
('H002', 'Paket Hemat 2', 3, 'SBY', 'AHM', 'CIT', 1192000, '1'),
('H003', 'Paket Hemat 3', 3, 'MLG', 'SBH', 'CIT', 1158000, '1'),
('H004', 'Paket Hemat 4', 3, 'BDG', 'ITS', 'LIO', 1741000, '1'),
('P001', 'Paket Populer 1', 5, 'BLI', 'HAR', 'GAR', 2500000, '1'),
('P002', 'Paket Populer 2', 5, 'LMK', 'LGH', 'LIO', 2665000, '1'),
('P003', 'Paket Populer 3', 5, 'DIY', 'HIM', 'SRI', 3400000, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penerbangan`
--

CREATE TABLE `tb_penerbangan` (
  `kode_penerbangan` varchar(50) NOT NULL,
  `nama_maskapai` varchar(200) NOT NULL,
  `flag` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penerbangan`
--

INSERT INTO `tb_penerbangan` (`kode_penerbangan`, `nama_maskapai`, `flag`) VALUES
('BAT', 'Batik Air', '1'),
('CIT', 'Citilink', '1'),
('GAR', 'Garuda Indonesia', '1'),
('LIO', 'Lion Air', '1'),
('SRI', 'Sriwijaya Air', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penerbangan_detail`
--

CREATE TABLE `tb_penerbangan_detail` (
  `dari_bandara` varchar(100) NOT NULL,
  `ke_bandara` varchar(100) NOT NULL,
  `departure_date` date NOT NULL,
  `return_date` date NOT NULL,
  `jml_passenger` int(11) NOT NULL,
  `flag` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penerbangan_detail`
--

INSERT INTO `tb_penerbangan_detail` (`dari_bandara`, `ke_bandara`, `departure_date`, `return_date`, `jml_passenger`, `flag`) VALUES
('LMK', 'AUS', '2018-12-21', '2018-12-26', 1, '1'),
('MLG', 'BLI', '2019-01-01', '2019-01-06', 1, '1'),
('SBY', 'JKT', '2018-12-01', '2018-12-04', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `kode_cust` int(11) NOT NULL,
  `no_trans` int(11) NOT NULL,
  `kode_pkt` varchar(50) NOT NULL,
  `bukti_trans` varchar(200) NOT NULL,
  `flag` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`kode_cust`, `no_trans`, `kode_pkt`, `bukti_trans`, `flag`) VALUES
(14, 5, 'A003', '../upload/1476969779008.jpg', '1'),
(15, 6, 'H001', '../upload/1479896776101.jpg', '1'),
(16, 7, 'P001', '../upload/basket.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tujuan`
--

CREATE TABLE `tb_tujuan` (
  `kode_tujuan` varchar(50) NOT NULL,
  `nama_tujuan` varchar(200) NOT NULL,
  `flag` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tujuan`
--

INSERT INTO `tb_tujuan` (`kode_tujuan`, `nama_tujuan`, `flag`) VALUES
('AUS', 'Australia', '1'),
('BDG', 'Bandung', '1'),
('BLI', 'Bali', '1'),
('DIY', 'Jogja', '1'),
('JKT', 'Jakarta', '1'),
('LMK', 'Lombok', '1'),
('MAL', 'Malaysia', '1'),
('MLG', 'Malang', '1'),
('SBY', 'Surabaya', '1'),
('SNG', 'Singapura', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(11) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`, `level`) VALUES
('Septa', '12345678', 1),
('Tyas', '87654321', 2),
('yuhuuu', 'yuhuuu', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_lvl`
--

CREATE TABLE `tb_user_lvl` (
  `id` int(11) NOT NULL,
  `level_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user_lvl`
--

INSERT INTO `tb_user_lvl` (`id`, `level_name`) VALUES
(1, 'admin'),
(2, 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`kode_cust`);

--
-- Indexes for table `tb_cust_detail`
--
ALTER TABLE `tb_cust_detail`
  ADD KEY `kode_pkt` (`kode_pkt`),
  ADD KEY `kode_hotel` (`kode_hotel`),
  ADD KEY `kode_penerbangan` (`kode_penerbangan`),
  ADD KEY `tujuan_cust` (`tujuan_cust`),
  ADD KEY `kode_cust` (`kode_cust`),
  ADD KEY `no_trans` (`no_trans`);

--
-- Indexes for table `tb_email`
--
ALTER TABLE `tb_email`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `tb_hotel`
--
ALTER TABLE `tb_hotel`
  ADD PRIMARY KEY (`kode_hotel`),
  ADD KEY `kode_tujuan` (`kode_tujuan`);

--
-- Indexes for table `tb_hotel_detail`
--
ALTER TABLE `tb_hotel_detail`
  ADD PRIMARY KEY (`tujuan_cust`);

--
-- Indexes for table `tb_packages`
--
ALTER TABLE `tb_packages`
  ADD PRIMARY KEY (`kode_pkt`),
  ADD KEY `kode_hotel` (`kode_hotel`),
  ADD KEY `kode_penerbangan` (`kode_penerbangan`),
  ADD KEY `kode_tujuan` (`kode_tujuan`);

--
-- Indexes for table `tb_penerbangan`
--
ALTER TABLE `tb_penerbangan`
  ADD PRIMARY KEY (`kode_penerbangan`);

--
-- Indexes for table `tb_penerbangan_detail`
--
ALTER TABLE `tb_penerbangan_detail`
  ADD PRIMARY KEY (`dari_bandara`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`no_trans`),
  ADD KEY `kode_pkt` (`kode_pkt`),
  ADD KEY `nama_cust` (`kode_cust`);

--
-- Indexes for table `tb_tujuan`
--
ALTER TABLE `tb_tujuan`
  ADD PRIMARY KEY (`kode_tujuan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`),
  ADD KEY `level` (`level`);

--
-- Indexes for table `tb_user_lvl`
--
ALTER TABLE `tb_user_lvl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `kode_cust` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `no_trans` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_cust_detail`
--
ALTER TABLE `tb_cust_detail`
  ADD CONSTRAINT `fk_customer` FOREIGN KEY (`kode_cust`) REFERENCES `tb_customer` (`kode_cust`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_paket` FOREIGN KEY (`kode_pkt`) REFERENCES `tb_packages` (`kode_pkt`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_penginapan` FOREIGN KEY (`kode_hotel`) REFERENCES `tb_hotel` (`kode_hotel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_terbang` FOREIGN KEY (`kode_penerbangan`) REFERENCES `tb_penerbangan` (`kode_penerbangan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_transaksi` FOREIGN KEY (`no_trans`) REFERENCES `tb_transaksi` (`no_trans`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tujuan_cust` FOREIGN KEY (`tujuan_cust`) REFERENCES `tb_tujuan` (`kode_tujuan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_hotel`
--
ALTER TABLE `tb_hotel`
  ADD CONSTRAINT `fk_tujuan` FOREIGN KEY (`kode_tujuan`) REFERENCES `tb_tujuan` (`kode_tujuan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_packages`
--
ALTER TABLE `tb_packages`
  ADD CONSTRAINT `fk_hotel` FOREIGN KEY (`kode_hotel`) REFERENCES `tb_hotel` (`kode_hotel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_lokasi` FOREIGN KEY (`kode_tujuan`) REFERENCES `tb_tujuan` (`kode_tujuan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_penerbangan` FOREIGN KEY (`kode_penerbangan`) REFERENCES `tb_penerbangan` (`kode_penerbangan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `fk_pkt` FOREIGN KEY (`kode_pkt`) REFERENCES `tb_packages` (`kode_pkt`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `fk_lvl` FOREIGN KEY (`level`) REFERENCES `tb_user_lvl` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
