-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2015 at 10:02 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `grannynanny`
--

-- --------------------------------------------------------

--
-- Table structure for table `parenuser`
--

CREATE TABLE IF NOT EXISTS `parenuser` (
  `userID` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `pid` varchar(255) NOT NULL,
  `workout` varchar(255) NOT NULL,
  `work_status` varchar(200) NOT NULL,
  `education` varchar(255) NOT NULL,
  `motivation` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `photoname` varchar(255) NOT NULL,
  `photo` blob NOT NULL,
  `tel` varchar(255) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parenuser`
--

INSERT INTO `parenuser` (`userID`, `firstname`, `lastname`, `email`, `city`, `address`, `pass`, `gender`, `pid`, `workout`, `work_status`, `education`, `motivation`, `status`, `photoname`, `photo`, `tel`, `age`) VALUES
(3, 'Carl', 'Cx', 'test30@abv.bg', '', '', 'test:1', '', '6010203010', '', '', '', '', 'admin', '', '', '1234567890', 0),
(4, 'Gancho', 'Gancho', 'testvaliduser@abv.bg', 'София', 'Banishora RullZ', 'test:11', 'жена', '1020304050', 'не', 'Половин', 'Средно специално', 'I am the most amazing nanny in the world!!!', 'nanny', '', 0x6e616e6e792e6a7067, '0882123123', 105);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parenuser`
--
ALTER TABLE `parenuser`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parenuser`
--
ALTER TABLE `parenuser`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
