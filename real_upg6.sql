-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2022 at 12:03 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_upg6`
--

-- --------------------------------------------------------

--
-- Table structure for table `bokningar`
--

CREATE TABLE `bokningar` (
  `Bokning_id` int(11) NOT NULL,
  `Datum` date NOT NULL,
  `Starttid` time NOT NULL,
  `Sluttid` time NOT NULL,
  `TypAvMassage` varchar(255) NOT NULL,
  `Fornamn` varchar(255) NOT NULL,
  `Efternamn` varchar(255) NOT NULL,
  `Telefonnummer` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bokningar`
--

INSERT INTO `bokningar` (`Bokning_id`, `Datum`, `Starttid`, `Sluttid`, `TypAvMassage`, `Fornamn`, `Efternamn`, `Telefonnummer`) VALUES
(1, '0000-00-00', '00:00:00', '00:00:00', '', 'Matheus', 'käld', 0),
(2, '0000-00-00', '00:00:00', '00:00:00', '', 'Matheus', 'käld', 0),
(3, '0000-00-00', '00:00:00', '00:00:00', '', 'Matheus', 'käld', 0),
(4, '2022-11-09', '15:40:00', '19:44:00', '', 'Matheus', 'käld', 2147483647),
(5, '2022-11-10', '00:28:00', '06:28:00', '', 'Kalle', 'Anka', 40),
(6, '0000-00-00', '00:00:00', '00:00:00', '', 'mickey', 'mouse', 450303030),
(7, '0000-00-00', '00:00:00', '00:00:00', '', 'mi', '', 0),
(8, '2022-12-02', '03:23:00', '06:06:00', 's', 'mickey', 'mouse', 2147483647),
(9, '2022-12-07', '07:40:00', '00:40:00', '2', 'MIMI', 'MOMO', 123456789),
(10, '2022-11-04', '01:47:00', '06:47:00', '3', 'PL', 'LP', 2147483647),
(11, '2022-10-31', '13:30:00', '03:00:00', '3', 'Matheus', 'Käld', 45870828),
(12, '2022-11-18', '08:28:00', '00:33:00', '', 'ami', 'whatever', 2147483647),
(13, '2022-11-10', '08:46:00', '09:46:00', 'Sport massage', 'Matheus', 'käld', 2147483647),
(14, '2022-11-10', '09:20:00', '09:22:00', 'Fysio therapi', 'ads', 'as', 0),
(15, '2022-11-11', '06:00:00', '23:59:00', 'Klassisk', 'ami', 'efterILivet', 123456789),
(16, '2022-11-11', '09:55:00', '00:55:00', 'Sport massage', 'Matheus', 'RAWR', 2147483647),
(17, '2022-11-11', '01:00:00', '14:00:00', 'Klassisk', 'PELLE', 'JOHANSON', 990909090);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bokningar`
--
ALTER TABLE `bokningar`
  ADD PRIMARY KEY (`Bokning_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bokningar`
--
ALTER TABLE `bokningar`
  MODIFY `Bokning_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
