-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3309
-- Generation Time: Aug 12, 2021 at 10:23 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uvtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `lecciones`
--

CREATE TABLE `lecciones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `leccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `id_modulo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lecciones`
--

INSERT INTO `lecciones` (`id`, `leccion`, `estado`, `id_modulo`) VALUES
(1, 'FF', 1, 1),
(2, 'FF', 1, 1),
(3, 'FA', 1, 1),
(4, 'FB', 1, 1),
(5, 'FC', 1, 1),
(6, 'WW', 1, 2),
(7, 'WA', 1, 2),
(8, 'WB', 1, 2),
(9, 'WC', 1, 2),
(10, 'RR', 1, 3),
(11, 'RA', 1, 3),
(12, 'RB', 1, 3),
(13, 'RC', 1, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lecciones`
--
ALTER TABLE `lecciones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lecciones`
--
ALTER TABLE `lecciones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
