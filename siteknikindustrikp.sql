-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2019 at 10:18 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siteknikindustrikp`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(20) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `nip` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nama_dosen`, `nip`) VALUES
(1, 'Dr. Aries Susanty, ST.MT', 197103271999032000),
(2, 'Dyah Ika Rinawati, ST.MT', 198403262006042000),
(3, 'Dr. Hery Suliantoro, ST.MT', 196904292002121000),
(4, 'Dr. Purnawan Adi Wicaksono, ST. MT', 197710032000031000),
(5, 'Sri Hartini, ST.MT', 197006252002122000),
(6, 'Dr. Ing. Novie Susanto, ST, M. Eng', 198211072005012000),
(7, 'Dr.Ir. Heru Prastawa, DEA', 196904292002121000),
(8, '	 Dr. Purnawan Adi Wicaksono, ST. MT', 197710032000031000),
(9, 'Dr. Ratna Purwaningsih, ST,MT', 197212311998022000),
(10, 'Dr. Naniek Handayani S.Si M.T', 197305072002122000),
(11, 'Dr.Denny Nurkertamanda,ST.MT', 197312211999031000);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(20) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `temakp` varchar(50) NOT NULL,
  `ipk` varchar(50) NOT NULL,
  `jumlahsks` varchar(50) NOT NULL,
  `tempatkp` varchar(50) NOT NULL,
  `id_dosen` varchar(20) NOT NULL,
  `id_dosen2` varchar(20) NOT NULL,
  `id_dosen3` varchar(20) NOT NULL,
  `dosbing` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `temakp`, `ipk`, `jumlahsks`, `tempatkp`, `id_dosen`, `id_dosen2`, `id_dosen3`, `dosbing`) VALUES
(19, '211201023', 'Farhan Mazario', 'Sistem Kerja dan Ergonomi', '3.0', '88', 'PT. MUTU GADING', '7', '4', '1', '1'),
(20, '21070117120056', 'Arum Sekar Aprina Danis', 'SCM', '3.4', '86', 'PT Amerta Indah Otsuka', '1', '11', '3', '3'),
(21, '21070117120043', 'Evita Gallantry', 'Sistem Kerja dan Ergonomi', '3.8', '90', 'PT. Dua Kelinci', '5', '4', '7', '7');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(30) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'mahasiswa', 'mahasiswa', 'mahasiswa'),
(2, 'dosen', 'dosen', 'dosen'),
(3, 'koorkp', 'koorkp', 'koorkp'),
(4, '197103271999032000', 'buaries', 'dosen'),
(4, '197103271999032000', 'buaries', 'dosen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
