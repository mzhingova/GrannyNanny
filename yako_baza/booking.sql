-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2015 at 02:59 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grannynanny`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `bookingID` int(11) NOT NULL,
  `nannyID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `city` varchar(255) CHARACTER SET utf8 NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `children` int(10) NOT NULL,
  `info` varchar(255) CHARACTER SET utf8 NOT NULL,
  `startDate` varchar(255) NOT NULL,
  `endDate` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingID`, `nannyID`, `userID`, `city`, `address`, `children`, `info`, `startDate`, `endDate`, `status`) VALUES
(1, 0, 0, 'Перник', 'fghf', 2, 'gfff', 'Fri Aug 28 2015', 'Mon Aug 31 2015', ''),
(2, 0, 0, 'София', 'Balsha 1', 5, 'momcheta', 'Fri Aug 28 2015', 'Mon Aug 31 2015', ''),
(3, 0, 0, 'София', 'knqjevo', 2, 'nqma', 'Fri Aug 28 2015', 'Mon Aug 31 2015', ''),
(4, 0, 0, 'София', 'Sofiq 100 kv Ivan Vazov', 4, 'nqma', 'Mon Aug 31 2015', 'Tue Sep 15 2015', ''),
(5, 0, 0, 'Ямбол', 'qmbol', 3, 'ne', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(6, 0, 0, 'Ямбол', 'qmbol', 3, 'ne', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(7, 0, 0, 'Ямбол', 'qmbol', 3, 'ne', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(8, 0, 0, 'Ямбол', 'qmbol', 3, 'ne', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(9, 54, 0, 'Ямбол', 'qmbol', 3, 'ne', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(10, 54, 0, 'Ямбол', 'qmbol', 3, 'ne', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(11, 54, 0, 'Ямбол', 'qmbol', 3, 'ne', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(12, 54, 0, 'Ямбол', 'qmbol', 3, 'ne', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(13, 54, 0, 'Ямбол', 'qmbol', 3, 'ne', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(14, 54, 0, 'Ямбол', 'qmbol', 3, 'ne', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(15, 54, 0, 'Ямбол', 'qmbol', 3, 'ne', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(16, 54, 0, 'София', 'tendjera', 1, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(17, 0, 54, 'София', 'нещо', 2, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(18, 0, 54, 'София', 'sadasd', 1, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(19, 0, 23, 'Перник', 'qwqe', 1, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(20, 0, 0, 'Перник', 'qwqe', 1, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(21, 0, 23, 'Перник', 'qwqe', 1, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(22, 0, 23, 'София', 'hgnfg', 3, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(23, 0, 23, 'София', 'hgnfg', 3, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(24, 0, 23, 'София', 'hgnfg', 3, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(25, 0, 23, 'Перник', 'gjmg', 1, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(26, 0, 23, 'Перник', 'gjmg', 1, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(27, 0, 23, 'Перник', 'gjmg', 1, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(28, 0, 23, 'Перник', 'gjmg', 1, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(29, 0, 23, 'София', 'qwq', 12, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(30, 0, 23, 'София', 'qwq', 12, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(31, 0, 23, 'София', 'qwq', 12, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(32, 0, 23, 'София', 'qwq', 12, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(33, 0, 23, 'София', 'qwq', 12, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(34, 0, 23, 'София', 'qwq', 12, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(35, 0, 23, 'София', 'qwq', 12, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(36, 0, 23, 'Ямбол', ';k', 4, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(37, 0, 23, 'Ямбол', ';k', 4, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(38, 0, 23, 'София', 'sdfs', 2, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(39, 0, 23, 'София', 'sdfs', 2, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(40, 0, 23, 'Перник', 'sdfs', 1, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(41, 0, 23, 'Перник', 'sdfs', 1, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(42, 0, 54, 'София', 'fged', 5, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(43, 0, 54, 'София', 'fged', 5, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(44, 0, 54, 'София', 'FDG', 6, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(45, 0, 54, 'София', 'FDG', 6, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', ''),
(46, 21, 54, 'София', 'FDG', 6, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', 'booked'),
(47, 20, 54, 'Русе', 'ruseto', 11, 'nqma', 'Mon Aug 31 2015', 'Mon Aug 31 2015', 'booked'),
(48, 0, 0, 'София', 'йъгх', 9, '', 'Tue Sep 01 2015', 'Thu Sep 03 2015', 'booked'),
(49, 0, 0, 'Варна', 'suseto', 85, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', 'booked'),
(50, 20, 54, 'Ямбол', 'sfds', 85, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', 'booked'),
(51, 21, 54, 'Перник', 'dsfds', 3, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', 'booked');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
