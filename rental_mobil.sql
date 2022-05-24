-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 03:42 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `Tipe_Harga` int(2) NOT NULL,
  `Waktu` int(2) DEFAULT NULL,
  `Harga` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`Tipe_Harga`, `Waktu`, `Harga`) VALUES
(1, 1, 300000),
(2, 2, 500000),
(3, 3, 700000),
(4, 4, 1000000),
(5, 5, 1300000);

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `ID_Mobil` int(3) NOT NULL,
  `Merk` varchar(20) DEFAULT NULL,
  `Warna` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`ID_Mobil`, `Merk`, `Warna`) VALUES
(1, 'Honda', 'Hitam'),
(2, 'Mitsubishi', 'Putih'),
(3, 'Xenia', 'Hitam'),
(4, 'Toyota', 'Hitam'),
(5, 'daihatsu', 'Putih'),
(6, 'Xenia', 'Merah');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `ID_Pelanggan` int(3) NOT NULL,
  `Nama_Pelanggan` varchar(30) DEFAULT NULL,
  `Alamat` text DEFAULT NULL,
  `No_Telpon` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`ID_Pelanggan`, `Nama_Pelanggan`, `Alamat`, `No_Telpon`) VALUES
(1, 'Virgo ', 'Bali', 510223422),
(2, 'Gemini', 'Klaten', 813527730),
(3, 'Sagitarius', 'Semarang', 810342130),
(4, 'Leo', 'Yogyakarta', 811488702);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `No_Transaksi` int(3) NOT NULL,
  `ID_Pelanggan` int(3) DEFAULT NULL,
  `ID_Mobil` int(3) DEFAULT NULL,
  `Tanggal_Pinjam` date DEFAULT NULL,
  `Tanggal_Kembali` date DEFAULT NULL,
  `Tipe_Harga` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`No_Transaksi`, `ID_Pelanggan`, `ID_Mobil`, `Tanggal_Pinjam`, `Tanggal_Kembali`, `Tipe_Harga`) VALUES
(4, 2, 1, '2022-05-19', '2022-05-21', 2),
(5, 2, 3, '2022-05-19', '2022-05-23', 4),
(7, 3, 5, '2022-05-22', '2022-05-25', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`Tipe_Harga`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`ID_Mobil`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`ID_Pelanggan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`No_Transaksi`),
  ADD KEY `ID_Mobil` (`ID_Mobil`),
  ADD KEY `ID_Pelanggan` (`ID_Pelanggan`),
  ADD KEY `Tipe_Harga` (`Tipe_Harga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `No_Transaksi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`ID_Mobil`) REFERENCES `mobil` (`ID_Mobil`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`ID_Pelanggan`) REFERENCES `pelanggan` (`ID_pelanggan`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`Tipe_Harga`) REFERENCES `harga` (`Tipe_Harga`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
