-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2015 at 10:10 AM
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
  `status` varchar(255) NOT NULL,
  `book_firstname` varchar(255) NOT NULL,
  `book_lastname` varchar(255) NOT NULL,
  `book_email` varchar(255) NOT NULL,
  `book_tel` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingID`, `nannyID`, `userID`, `city`, `address`, `children`, `info`, `startDate`, `endDate`, `status`, `book_firstname`, `book_lastname`, `book_email`, `book_tel`) VALUES
(27, 0, 23, 'Перник', 'gjmg', 1, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', '', '', '', '', '0'),
(28, 0, 23, 'Перник', 'gjmg', 1, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', '', '', '', '', '0'),
(29, 0, 23, 'София', 'qwq', 12, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', '', '', '', '', '0'),
(30, 0, 23, 'София', 'qwq', 12, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', '', '', '', '', '0'),
(31, 0, 23, 'София', 'qwq', 12, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', '', '', '', '', '0'),
(32, 0, 23, 'София', 'qwq', 12, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', '', '', '', '', '0'),
(33, 0, 23, 'София', 'qwq', 12, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', '', '', '', '', '0'),
(34, 0, 23, 'София', 'qwq', 12, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', '', '', '', '', '0'),
(35, 0, 23, 'София', 'qwq', 12, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', '', '', '', '', '0'),
(36, 0, 23, 'Ямбол', ';k', 4, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', '', '', '', '', '0'),
(37, 0, 23, 'Ямбол', ';k', 4, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', '', '', '', '', '0'),
(38, 0, 23, 'София', 'sdfs', 2, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', '', '', '', '', '0'),
(39, 0, 23, 'София', 'sdfs', 2, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', '', '', '', '', '0'),
(40, 0, 23, 'Перник', 'sdfs', 1, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', '', '', '', '', '0'),
(41, 0, 23, 'Перник', 'sdfs', 1, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', '', '', '', '', '0'),
(42, 0, 54, 'София', 'fged', 5, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', '', '', '', '', '0'),
(43, 0, 54, 'София', 'fged', 5, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', '', '', '', '', '0'),
(44, 0, 54, 'София', 'FDG', 6, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', '', '', '', '', '0'),
(45, 0, 54, 'София', 'FDG', 6, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', '', '', '', '', '0'),
(46, 21, 54, 'София', 'FDG', 6, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', 'booked', '', '', '', '0'),
(47, 20, 54, 'Русе', 'ruseto', 11, 'nqma', 'Mon Aug 31 2015', 'Mon Aug 31 2015', 'booked', '', '', '', '0'),
(48, 0, 0, 'София', 'йъгх', 9, '', 'Tue Sep 01 2015', 'Thu Sep 03 2015', 'booked', '', '', '', '0'),
(49, 0, 0, 'Варна', 'suseto', 85, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', 'booked', '', '', '', '0'),
(50, 20, 54, 'Ямбол', 'sfds', 85, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', 'booked', '', '', '', '0'),
(51, 21, 54, 'Перник', 'dsfds', 3, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', 'booked', '', '', '', '0'),
(52, 2, 3, 'София', 'na machu pichu', 0, '', '', '', 'booked', '', '', '', '0'),
(53, 2, 3, 'София', 'dsadsa', 0, '', '', '', 'booked', '', '', '', '0'),
(54, 2, 7, 'Русе', '', 0, '', '', '', 'booked', '', '', '', '0'),
(55, 2, 7, 'Ямбол', '', 0, '', '', '', 'booked', '', '', '', '0'),
(56, 11, 7, 'София', '', 0, '', '', '', 'booked', '', '', '', '0'),
(57, 11, 7, 'София', 'CarBoris', 3, '', 'Tue Sep 01 2015', 'Fri Sep 04 2015', 'request', '', '', '', '0'),
(58, 11, 7, 'Русе', 'dasdas', 2147483647, '', 'Tue Sep 01 2015', 'Thu Sep 03 2015', 'request', '', '', '', '0'),
(59, 11, 7, 'София', 'dfgdfg dfgdgdfgdf', 5, '', 'Tue Sep 01 2015', 'Sat Sep 05 2015', 'request', '', '', '', '0'),
(60, 11, 7, 'Русе', 'сс', 5, '', 'Tue Sep 01 2015', 'Sat Sep 26 2015', 'request', '', '', '', '0'),
(61, 2, 8, 'София', 'dasads', 5, '', 'Thu Sep 03 2015', 'Sat Sep 19 2015', 'request', '', '', '', '0'),
(62, 2, 8, 'София', 'livadata', 5, 'nqmam kakvo da kaja', 'Thu Sep 10 2015', 'Fri Sep 25 2015', 'request', '', '', '', '0'),
(69, 3, 2, 'София', 'Carevica', 3, '', 'Wed Sep 02 2015', 'Tue Sep 22 2015', 'request', '', '', '', '0'),
(70, 3, 2, 'Ямбол', 'Fags', 2, '', 'Wed Sep 02 2015', 'Tue Sep 22 2015', 'request', '', '', '', '0'),
(71, 3, 2, 'Перник', 'fes', 2, '', 'Wed Sep 02 2015', 'Thu Sep 24 2015', 'request', '', '', '', '0'),
(72, 3, 8, 'София', 'dfsdfs fdsfdsdfs', 4, '', 'Thu Sep 03 2015', 'Thu Sep 24 2015', 'request', 'Pencho', 'Stamatov', 'g', '2147483647'),
(73, 3, 8, 'Перник', 'ul. Golf 4', 9, 'Hello take care of my children for these days', 'Fri Sep 11 2015', 'Thu Sep 24 2015', 'request', 'GanchoToWe', 'VladigerovToWe', 'ganchovlad@abv.bg', '0895682224');

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
  MODIFY `bookingID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=74;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
