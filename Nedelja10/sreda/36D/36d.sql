-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 12:00 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `36d`
--
CREATE DATABASE IF NOT EXISTS `3131_zdj` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_nopad_ci;
USE `3131_zdj`;

-- --------------------------------------------------------

--
-- Table structure for table `korpa`
--

CREATE TABLE `korpa` (
  `id` int(10) NOT NULL,
  `datum_vreme` datetime NOT NULL,
  `ukupno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proizvodii`
--

CREATE TABLE `proizvodii` (
  `id` int(10) NOT NULL,
  `naziv` varchar(30) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `cena` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `proizvodii`
--

INSERT INTO `proizvodii` (`id`, `naziv`, `cena`) VALUES
(1, 'Monitor', '311.00'),
(4, 'Tastatura', '400.00'),
(9, 'Mis', '555.00');

-- --------------------------------------------------------

--
-- Table structure for table `stavke_korpee`
--

CREATE TABLE `stavke_korpee` (
  `id` int(10) NOT NULL,
  `korpa_id` int(10) NOT NULL,
  `proizvod_id` int(10) NOT NULL,
  `cena` decimal(9,2) NOT NULL,
  `kolicina` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korpa`
--
ALTER TABLE `korpa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proizvodii`
--
ALTER TABLE `proizvodii`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stavke_korpee`
--
ALTER TABLE `stavke_korpee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `korpa_id` (`korpa_id`),
  ADD KEY `proizvod_id` (`proizvod_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korpa`
--
ALTER TABLE `korpa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proizvodii`
--
ALTER TABLE `proizvodii`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `stavke_korpee`
--
ALTER TABLE `stavke_korpee`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stavke_korpee`
--
ALTER TABLE `stavke_korpee`
  ADD CONSTRAINT `stavke_korpee_ibfk_1` FOREIGN KEY (`korpa_id`) REFERENCES `korpa` (`id`),
  ADD CONSTRAINT `stavke_korpee_ibfk_2` FOREIGN KEY (`proizvod_id`) REFERENCES `proizvodii` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
