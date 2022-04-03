-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2022 at 02:59 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keuangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `name` varchar(100) NOT NULL,
  `tl` varchar(100) NOT NULL,
  `wn` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(30) NOT NULL,
  `ttl` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `pos` varchar(10) NOT NULL,
  `nik` text NOT NULL,
  `hp` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `image` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`name`, `tl`, `wn`, `alamat`, `username`, `ttl`, `email`, `pos`, `nik`, `hp`, `password`, `image`) VALUES
('Kurniawan Rachmat K', 'Surabaya', 'Indonesia', 'Madiun', 'rach.matkur', '2022-04-07', 'kurachmat276@gmail.com', '12345', '5435343543541234', '082232644048', '12345', '624996d2e9bfc.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`nik`(40)),
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
