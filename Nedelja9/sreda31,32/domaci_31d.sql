-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2021 at 11:52 PM
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
-- Database: `domaci_31d`
--
CREATE DATABASE IF NOT EXISTS `3131_Zorana_Đaković` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_nopad_ci;
USE `3131_Zorana_Đaković`;

-- --------------------------------------------------------

--
-- Table structure for table `djaci`
--

CREATE TABLE `djaci` (
  `broj_knjizice` varchar(20) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `ime_prezime` varchar(20) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `razred` varchar(20) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `odeljenje` varchar(20) COLLATE utf8mb4_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `djaci`
--

INSERT INTO `djaci` (`broj_knjizice`, `ime_prezime`, `razred`, `odeljenje`) VALUES
('132020', 'Ranko Stojic', '3', '5'),
('142020', 'Janko Veselinovc', '2', '4');

-- --------------------------------------------------------

--
-- Table structure for table `ocene`
--

CREATE TABLE `ocene` (
  `id` int(10) NOT NULL,
  `broj_knjizice` varchar(20) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `id_predmet` int(10) NOT NULL,
  `ocena` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

-- --------------------------------------------------------

--
-- Table structure for table `predmeti`
--

CREATE TABLE `predmeti` (
  `id` int(10) NOT NULL,
  `naziv` varchar(20) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `profesor` varchar(20) COLLATE utf8mb4_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `predmeti`
--

INSERT INTO `predmeti` (`id`, `naziv`, `profesor`) VALUES
(1, 'Matematika', ' MT'),
(2, 'Srpski', 'SR'),
(3, 'Srpski', 'FF');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `djaci`
--
ALTER TABLE `djaci`
  ADD PRIMARY KEY (`broj_knjizice`);

--
-- Indexes for table `ocene`
--
ALTER TABLE `ocene`
  ADD PRIMARY KEY (`id`),
  ADD KEY `broj_knjizice` (`broj_knjizice`),
  ADD KEY `id_predmet` (`id_predmet`);

--
-- Indexes for table `predmeti`
--
ALTER TABLE `predmeti`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ocene`
--
ALTER TABLE `ocene`
  ADD CONSTRAINT `ocene_ibfk_1` FOREIGN KEY (`broj_knjizice`) REFERENCES `djaci` (`broj_knjizice`),
  ADD CONSTRAINT `ocene_ibfk_2` FOREIGN KEY (`id_predmet`) REFERENCES `predmeti` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
