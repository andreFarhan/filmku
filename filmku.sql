-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2021 at 11:28 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filmku`
--

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `id_website` int(11) NOT NULL,
  `status_website` enum('active','inactive') NOT NULL,
  `nama_website` varchar(200) NOT NULL,
  `link_website` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`id_website`, `status_website`, `nama_website`, `link_website`) VALUES
(1, 'active', 'DutaFilm', 'http://103.194.171.75/'),
(2, 'active', 'BlurayUFR', 'https://blurayufr.com/'),
(3, 'active', 'FilmApik', 'http://103.194.171.18/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id_website`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `website`
--
ALTER TABLE `website`
  MODIFY `id_website` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
