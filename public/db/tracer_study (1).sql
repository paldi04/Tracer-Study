-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 28, 2019 at 06:50 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tracer study`
--

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_user`
--

CREATE TABLE `jawaban_user` (
  `id` int(11) NOT NULL,
  `nim` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `prodi` varchar(128) NOT NULL,
  `status_setelah_lulus` varchar(128) NOT NULL,
  `sub_jawaban` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `prodi` varchar(128) NOT NULL,
  `nim` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `prodi`, `nim`, `password`) VALUES
(2, 'gagas', 's1 teknik informasi', '1818', 'rock');

-- --------------------------------------------------------

--
-- Table structure for table `user_complete_data`
--

CREATE TABLE `user_complete_data` (
  `id` int(11) NOT NULL,
  `nim` varchar(128) NOT NULL,
  `tanggal_lulus` varchar(128) NOT NULL,
  `tanggal_masuk` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `prodi` varchar(128) NOT NULL,
  `kelamin` varchar(128) NOT NULL,
  `tanggal_lahir` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `telepon` varchar(128) NOT NULL,
  `facebook` varchar(128) NOT NULL,
  `twitter` varchar(128) NOT NULL,
  `linkedIn` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_complete_data`
--

INSERT INTO `user_complete_data` (`id`, `nim`, `tanggal_lulus`, `tanggal_masuk`, `nama`, `prodi`, `kelamin`, `tanggal_lahir`, `email`, `telepon`, `facebook`, `twitter`, `linkedIn`) VALUES
(9, '1818', '1212-02-13', '1237-12-04', 'gagas', 's1 sistem informasi', 'laki-laki', '2521-12-05', 'gags@gmail.com', '8198', 'gagasss', 'mgagas', 'gagasm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jawaban_user`
--
ALTER TABLE `jawaban_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_complete_data`
--
ALTER TABLE `user_complete_data`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jawaban_user`
--
ALTER TABLE `jawaban_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_complete_data`
--
ALTER TABLE `user_complete_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
