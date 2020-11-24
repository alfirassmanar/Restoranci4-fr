-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2020 at 02:14 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbrestoran`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblidentitas`
--

CREATE TABLE `tblidentitas` (
  `idtoko` int(11) NOT NULL,
  `namatoko` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `alamattoko` varchar(255) NOT NULL,
  `emailtoko` varchar(255) NOT NULL,
  `nomortoko` varchar(255) NOT NULL,
  `deskripsitoko` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `hero` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblidentitas`
--

INSERT INTO `tblidentitas` (`idtoko`, `namatoko`, `title`, `alamattoko`, `emailtoko`, `nomortoko`, `deskripsitoko`, `icon`, `logo`, `hero`) VALUES
(1, '', 'Suka-Maju', 'Suka-Maju', 'Suka_Maju@gmail.co.id', '0821-3244-2828', 'Makanan Tradisional Khas Sidoarjo', 'icon.icon', 'logo.png', 'tes.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblkategori`
--

CREATE TABLE `tblkategori` (
  `idkategori` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblkategori`
--

INSERT INTO `tblkategori` (`idkategori`, `kategori`, `keterangan`) VALUES
(52, 'Makanan', 'Semua Makanan di Restoran Suka-Maju Terkenal dengan Kemawahan Makanan Tradisional '),
(54, 'Minuman', 'Semua Minuman di Restoran Suka-Maju Terkenal dengan Kemawahan Minuman Tradisional '),
(55, 'kue', 'Semua Kue di Restoran Suka-Maju Terkenal dengan Kemawahan Kue Tradisional ');

-- --------------------------------------------------------

--
-- Table structure for table `tblmenu`
--

CREATE TABLE `tblmenu` (
  `idmenu` int(11) NOT NULL,
  `idkategori` int(11) NOT NULL,
  `menu` varchar(100) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `harga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblmenu`
--

INSERT INTO `tblmenu` (`idmenu`, `idkategori`, `menu`, `gambar`, `harga`) VALUES
(20, 52, 'Pecel Madiun', 'pecel.jpg', 12000),
(21, 52, 'Soto Daging', 'Soto.jpg', 13000),
(22, 52, 'Rawon', 'rawon.jpg', 20000),
(23, 52, 'Gudeg Jogja', 'gudeg.jpg', 20000),
(24, 55, 'Rangin Sidoarjo', 'rangin.jpg', 10000),
(25, 52, 'Siomay Sidoarjo', 'siomay.jpg', 12000),
(26, 54, 'Es Jeruk', 'esjeruk.jpg', 7000),
(27, 54, 'Es Pisang Ijo', 'espisangijo.jpg', 15000),
(28, 54, 'Es Teh Manis', 'esteh.jpg', 5000),
(29, 52, 'Rujak Cingur', 'rujak.jpg', 12000);

-- --------------------------------------------------------

--
-- Table structure for table `tblorder`
--

CREATE TABLE `tblorder` (
  `idorder` int(11) NOT NULL,
  `idpelanggan` int(11) NOT NULL,
  `tglorder` date NOT NULL,
  `total` float NOT NULL DEFAULT 0,
  `bayar` float NOT NULL DEFAULT 0,
  `kembali` float NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblorder`
--

INSERT INTO `tblorder` (`idorder`, `idpelanggan`, `tglorder`, `total`, `bayar`, `kembali`, `status`) VALUES
(1, 2, '2020-01-13', 33000, 33000, 0, 1),
(2, 3, '2020-01-13', 30000, 100000, 70000, 1),
(3, 3, '2020-01-13', 43000, 50000, 7000, 1),
(4, 3, '2020-01-14', 28000, 30000, 2000, 1),
(9, 5, '2020-11-17', 14000, 20000, 6000, 1),
(10, 5, '2020-11-17', 13000, 0, 0, 0),
(11, 5, '2020-11-17', 88000, 100000, 12000, 1),
(12, 5, '2020-11-23', 26000, 0, 0, 0),
(13, 8, '2020-11-24', 84000, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblorderdetail`
--

CREATE TABLE `tblorderdetail` (
  `idorderdetail` int(11) NOT NULL,
  `idorder` int(11) NOT NULL,
  `idmenu` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `hargajual` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblorderdetail`
--

INSERT INTO `tblorderdetail` (`idorderdetail`, `idorder`, `idmenu`, `jumlah`, `hargajual`) VALUES
(7, 1, 10, 1, 10000),
(8, 1, 7, 1, 16000),
(9, 1, 9, 1, 7000),
(10, 2, 9, 2, 7000),
(11, 2, 7, 1, 16000),
(12, 3, 6, 1, 20000),
(13, 3, 9, 1, 7000),
(14, 3, 7, 1, 16000),
(15, 4, 9, 4, 7000),
(16, 0, 18, 1, 15000),
(17, 0, 17, 1, 14000),
(18, 0, 19, 1, 20000),
(19, 5, 17, 1, 14000),
(20, 5, 18, 1, 15000),
(21, 5, 19, 1, 20000),
(22, 6, 17, 1, 14000),
(23, 7, 18, 2, 15000),
(24, 8, 17, 1, 14000),
(25, 9, 26, 2, 7000),
(26, 10, 21, 1, 13000),
(27, 11, 22, 2, 20000),
(28, 11, 29, 4, 12000),
(29, 12, 21, 2, 13000),
(30, 13, 22, 3, 20000),
(31, 13, 29, 2, 12000);

-- --------------------------------------------------------

--
-- Table structure for table `tblpelanggan`
--

CREATE TABLE `tblpelanggan` (
  `idpelanggan` int(11) NOT NULL,
  `pelanggan` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `telp` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `aktif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpelanggan`
--

INSERT INTO `tblpelanggan` (`idpelanggan`, `pelanggan`, `alamat`, `telp`, `email`, `password`, `aktif`) VALUES
(2, 'Joni', 'Sidoarjo', '081238198', 'joni@gmail.com', '12345678', 1),
(3, 'DIlan', 'buduran', '08123193', 'dilan@gmail.com', '12345', 1),
(5, 'Amin', 'sukorejo', '08125812581', 'amin@gmail.com', '123', 1),
(6, 'Kirman', 'Sidoarjo', '082132442828', 'kirman@gmail.com', '123', 1),
(7, 'Kirun', 'Sidoarjo', '082132442828', 'kirun@gmail.com', '123', 1),
(8, 'Rafie', 'Sidoarjo', '0821231231', 'rafie@gmail.com', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `iduser` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(50) NOT NULL,
  `aktif` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`iduser`, `user`, `email`, `password`, `level`, `aktif`) VALUES
(12, 'Admin', 'firas@gmail.co.id', 'admin', 'Admin', 1),
(14, 'kasir', 'kasir@gmail.com', 'kasir', 'Kasir', 1),
(15, 'koki', 'koki@gmail.com', 'koki', 'Koki', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vorder`
-- (See below for the actual view)
--
CREATE TABLE `vorder` (
`idorder` int(11)
,`idpelanggan` int(11)
,`tglorder` date
,`total` float
,`bayar` float
,`kembali` float
,`status` int(11)
,`pelanggan` varchar(100)
,`alamat` varchar(200)
,`telp` varchar(100)
,`email` varchar(150)
,`password` varchar(255)
,`aktif` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vorderdetail`
-- (See below for the actual view)
--
CREATE TABLE `vorderdetail` (
`idorderdetail` int(11)
,`idorder` int(11)
,`idmenu` int(11)
,`jumlah` int(11)
,`hargajual` float
,`idkategori` int(11)
,`menu` varchar(100)
,`gambar` varchar(200)
,`harga` float
,`kategori` varchar(100)
,`idpelanggan` int(11)
,`tglorder` date
,`total` float
,`bayar` float
,`kembali` float
,`status` int(11)
,`pelanggan` varchar(100)
,`alamat` varchar(200)
,`telp` varchar(100)
,`email` varchar(150)
,`password` varchar(255)
,`aktif` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `vorder`
--
DROP TABLE IF EXISTS `vorder`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vorder`  AS SELECT `tblorder`.`idorder` AS `idorder`, `tblorder`.`idpelanggan` AS `idpelanggan`, `tblorder`.`tglorder` AS `tglorder`, `tblorder`.`total` AS `total`, `tblorder`.`bayar` AS `bayar`, `tblorder`.`kembali` AS `kembali`, `tblorder`.`status` AS `status`, `tblpelanggan`.`pelanggan` AS `pelanggan`, `tblpelanggan`.`alamat` AS `alamat`, `tblpelanggan`.`telp` AS `telp`, `tblpelanggan`.`email` AS `email`, `tblpelanggan`.`password` AS `password`, `tblpelanggan`.`aktif` AS `aktif` FROM (`tblpelanggan` join `tblorder` on(`tblpelanggan`.`idpelanggan` = `tblorder`.`idpelanggan`)) ;

-- --------------------------------------------------------

--
-- Structure for view `vorderdetail`
--
DROP TABLE IF EXISTS `vorderdetail`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vorderdetail`  AS SELECT `tblorderdetail`.`idorderdetail` AS `idorderdetail`, `tblorderdetail`.`idorder` AS `idorder`, `tblorderdetail`.`idmenu` AS `idmenu`, `tblorderdetail`.`jumlah` AS `jumlah`, `tblorderdetail`.`hargajual` AS `hargajual`, `tblmenu`.`idkategori` AS `idkategori`, `tblmenu`.`menu` AS `menu`, `tblmenu`.`gambar` AS `gambar`, `tblmenu`.`harga` AS `harga`, `tblkategori`.`kategori` AS `kategori`, `tblorder`.`idpelanggan` AS `idpelanggan`, `tblorder`.`tglorder` AS `tglorder`, `tblorder`.`total` AS `total`, `tblorder`.`bayar` AS `bayar`, `tblorder`.`kembali` AS `kembali`, `tblorder`.`status` AS `status`, `tblpelanggan`.`pelanggan` AS `pelanggan`, `tblpelanggan`.`alamat` AS `alamat`, `tblpelanggan`.`telp` AS `telp`, `tblpelanggan`.`email` AS `email`, `tblpelanggan`.`password` AS `password`, `tblpelanggan`.`aktif` AS `aktif` FROM ((((`tblorderdetail` join `tblorder` on(`tblorderdetail`.`idorder` = `tblorder`.`idorder`)) join `tblpelanggan` on(`tblorder`.`idpelanggan` = `tblpelanggan`.`idpelanggan`)) join `tblmenu` on(`tblorderdetail`.`idmenu` = `tblmenu`.`idmenu`)) join `tblkategori` on(`tblmenu`.`idkategori` = `tblkategori`.`idkategori`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblidentitas`
--
ALTER TABLE `tblidentitas`
  ADD PRIMARY KEY (`idtoko`);

--
-- Indexes for table `tblkategori`
--
ALTER TABLE `tblkategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `tblmenu`
--
ALTER TABLE `tblmenu`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indexes for table `tblorder`
--
ALTER TABLE `tblorder`
  ADD PRIMARY KEY (`idorder`);

--
-- Indexes for table `tblorderdetail`
--
ALTER TABLE `tblorderdetail`
  ADD PRIMARY KEY (`idorderdetail`);

--
-- Indexes for table `tblpelanggan`
--
ALTER TABLE `tblpelanggan`
  ADD PRIMARY KEY (`idpelanggan`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblidentitas`
--
ALTER TABLE `tblidentitas`
  MODIFY `idtoko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblkategori`
--
ALTER TABLE `tblkategori`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tblmenu`
--
ALTER TABLE `tblmenu`
  MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tblorder`
--
ALTER TABLE `tblorder`
  MODIFY `idorder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblorderdetail`
--
ALTER TABLE `tblorderdetail`
  MODIFY `idorderdetail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tblpelanggan`
--
ALTER TABLE `tblpelanggan`
  MODIFY `idpelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
