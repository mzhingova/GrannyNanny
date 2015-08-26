-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2015 at 04:12 PM
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
  `tel` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parenuser`
--

INSERT INTO `parenuser` (`userID`, `firstname`, `lastname`, `email`, `city`, `address`, `pass`, `gender`, `pid`, `workout`, `work_status`, `education`, `motivation`, `status`, `photoname`, `photo`, `tel`) VALUES
(1, 'gosho', 'goshev', 'goshko@qq.gg', 'София', '', 'qwe123@', '', '', '', '', '', '', 'admin', '', '', '12487465'),
(2, 'ewqe', 'gdfg', 'qq@qq.gg', 'Перник', 'eqweqw', 'qwe123@', 'жена', '1234567890', '', 'Половин', 'Средно специално', 'ssssssssssssewfgddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'nanny', '', '', '215452315'),
(3, 'ewqe', 'ewqe', 'rrr@dd.dd', 'Русе', 'rwerwe', 'qwe123@', 'жена', '1234567890', '', 'Половин', 'Средно специално', 'rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr                           rrrrrrrrrrrrrrrrrrr', 'nanny', '', '', '215452315'),
(4, 'wqewq', 'eqwe', 'goshko@qq.ggf', 'София', 'ewqe', 'qwe123@', 'жена', '1234567890', '', 'Половин', 'Средно', 'fdsffffffffffffffffffff         dssssssssssssssssssssssssssssssss', 'nanny', '', '', '231312'),
(5, 'ewqe', 'ewqe', 'goshko@qq.ggy', 'Ямбол', 'weqwe', 'qwe123@', 'жена', '123456789', '', 'Половин', 'Средно', 'hbrtyujnuikyuniuy        yunimuymniun              ', 'nanny', '', 0x746f746f7269616c2e706e67, '0896222819');

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
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
