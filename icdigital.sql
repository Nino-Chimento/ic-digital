-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2020 at 02:06 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icdigital`
--

-- --------------------------------------------------------

--
-- Table structure for table `citta`
--

CREATE TABLE `citta` (
  `id` int(11) NOT NULL,
  `value` text NOT NULL,
  `citta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `citta`
--

INSERT INTO `citta` (`id`, `value`, `citta`) VALUES
(1, 'CE', 'Cefalu'),
(2, 'MI', 'Milano'),
(3, 'TO', 'Torino'),
(4, 'MA', 'Mantova');

-- --------------------------------------------------------

--
-- Table structure for table `provincia`
--

CREATE TABLE `provincia` (
  `Id` int(11) NOT NULL,
  `Value` text NOT NULL,
  `Provincia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `provincia`
--

INSERT INTO `provincia` (`Id`, `Value`, `Provincia`) VALUES
(1, 'MI', 'Milano'),
(2, 'RO', 'Roma'),
(3, 'PA', 'Palermo'),
(4, 'TO', 'Torino');

-- --------------------------------------------------------

--
-- Table structure for table `regione`
--

CREATE TABLE `regione` (
  `id` int(11) NOT NULL,
  `value` text NOT NULL,
  `regione` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `regione`
--

INSERT INTO `regione` (`id`, `value`, `regione`) VALUES
(1, 'LO', 'Lombardia'),
(2, 'SI', 'Sicilia'),
(3, 'PI', 'Piemonte'),
(4, 'LA', 'Lazio');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `date` text NOT NULL,
  `sesso` text NOT NULL,
  `email` text NOT NULL,
  `regione` text NOT NULL,
  `provincia` text NOT NULL,
  `citta` text NOT NULL,
  `sport` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `citta`
--
ALTER TABLE `citta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `regione`
--
ALTER TABLE `regione`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `citta`
--
ALTER TABLE `citta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `provincia`
--
ALTER TABLE `provincia`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `regione`
--
ALTER TABLE `regione`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
