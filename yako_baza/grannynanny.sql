-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2015 at 09:35 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingID`, `nannyID`, `userID`, `city`, `address`, `children`, `info`, `startDate`, `endDate`, `status`, `book_firstname`, `book_lastname`, `book_email`, `book_tel`) VALUES
(27, 20, 23, 'Перник', 'gjmg', 1, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', '', '', '', '', '0'),
(28, 0, 20, 'Перник', 'gjmg', 1, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', 'request', '', '', '', '0'),
(29, 0, 20, 'София', 'qwq', 12, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', 'request', '', '', '', '0'),
(30, 0, 20, 'София', 'qwq', 12, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', 'request', '', '', '', '0'),
(31, 20, 23, 'София', 'qwq', 12, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', '', '', '', '', '0'),
(32, 20, 23, 'София', 'qwq', 12, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', '', '', '', '', '0'),
(33, 20, 23, 'София', 'qwq', 12, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', '', '', '', '', '0'),
(34, 20, 23, 'София', 'qwq', 12, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', 'accepted', '', '', '', '0'),
(35, 20, 23, 'София', 'qwq', 12, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', 'accepted', '', '', '', '0'),
(36, 20, 23, 'Ямбол', ';k', 4, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', '', '', '', '', '0'),
(46, 21, 54, 'София', 'FDG', 6, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', 'booked', '', '', '', '0'),
(48, 17, 0, 'София', 'йъгх', 9, '', 'Tue Sep 01 2015', 'Thu Sep 03 2015', 'rejected', '', '', '', '0'),
(49, 0, 0, 'Варна', 'suseto', 85, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', 'booked', '', '', '', '0'),
(50, 17, 54, 'Ямбол', 'sfds', 85, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', 'rejected', '', '', '', '0'),
(51, 20, 54, 'Перник', 'dsfds', 3, '', 'Mon Aug 31 2015', 'Mon Aug 31 2015', 'accepted', '', '', '', '0'),
(52, 17, 3, 'София', 'na machu pichu', 0, '', '', '', 'rejected', '', '', '', '0'),
(53, 2, 3, 'София', 'dsadsa', 0, '', '', '', 'booked', '', '', '', '0'),
(54, 2, 7, 'Русе', '', 0, '', '', '', 'booked', '', '', '', '0'),
(55, 2, 7, 'Ямбол', '', 0, '', '', '', 'booked', '', '', '', '0'),
(56, 20, 7, 'София', '', 0, '', '', '', 'rejected', '', '', '', '0'),
(57, 17, 7, 'София', 'CarBoris', 3, '', 'Tue Sep 01 2015', 'Fri Sep 04 2015', 'rejected', '', '', '', '0'),
(58, 20, 7, 'Русе', 'dasdas', 2147483647, '', 'Tue Sep 01 2015', 'Thu Sep 03 2015', 'rejected', '', '', '', '0'),
(59, 17, 7, 'София', 'dfgdfg dfgdgdfgdf', 5, '', 'Tue Sep 01 2015', 'Sat Sep 05 2015', 'rejected', '', '', '', '0'),
(60, 20, 7, 'Русе', 'сс', 5, '', 'Tue Sep 01 2015', 'Sat Sep 26 2015', 'rejected', '', '', '', '0'),
(73, 20, 8, 'Перник', 'ul. Golf 4', 9, 'Hello take care of my children for these days', 'Fri Sep 11 2015', 'Thu Sep 24 2015', 'rejected', 'GanchoToWe', 'VladigerovToWe', 'ganchovlad@abv.bg', '0895682224'),
(74, 21, 23, 'София', '<img />', 2, '', 'Tue Sep 08 2015', 'Wed Sep 23 2015', 'accepted', 'asd', 'FirefoxTest', 'mail_@abv.bg', '0997637801'),
(75, 21, 23, 'Русе', 'qko trolll', 2, 'dasdsa', 'Tue Sep 08 2015', 'Wed Sep 09 2015', 'request', 'testFirefox', 'FirefoxTest', 'mail_@abv.bg', '0997637801'),
(76, 20, 23, 'София', 'dsfsdf', 3, '', 'Wed Sep 23 2015', 'Mon Sep 28 2015', 'rejected', 'jk', 'QQ', 'mail_@abv.bg', '1254789666'),
(77, 20, 23, 'Ямбол', 'dsada', 3, '', 'Fri Sep 25 2015', 'Tue Sep 29 2015', 'rejected', 'jk', 'QQ', 'mail_@abv.bg', '1254789666');

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
  `age` varchar(60) DEFAULT NULL,
  `workout` varchar(255) NOT NULL,
  `work_status` varchar(200) NOT NULL,
  `education` varchar(255) NOT NULL,
  `motivation` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `photoname` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `usernum` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `average` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parenuser`
--

INSERT INTO `parenuser` (`userID`, `firstname`, `lastname`, `email`, `city`, `address`, `pass`, `gender`, `pid`, `age`, `workout`, `work_status`, `education`, `motivation`, `status`, `photoname`, `photo`, `tel`, `usernum`, `rating`, `average`) VALUES
(1, 'admin', 'adminski', 'admin@abv.bg', 'София', '', 'qwe123.', '', '', NULL, '', '', '', '', 'admin', '', '', '0997658941', '', '', ''),
(20, 'penisima', 'nezemna', 'nanny1@abv.bg', 'Перник', 'sveta na feite', 'QWE123.', 'мъж', '8963345892', NULL, 'Да', 'Половин работен ден', 'Средно', 'носа носа ракич и салата искам да си ходч  винаги на йар4ета', 'nanny', '', 'logo.phn.png', '123564', '13', '4', '0.30769230769231'),
(21, 'testChrome', 'test', 'hbdha@huieueiw.bg', 'Ямбол', '', 'test123.', '', '6598743561', NULL, '', '', '', 'sdjfwhfjkshfklewrjfkrejfecdw', 'nanny', '', '', '02397614', '1', '4', '4'),
(22, 'testFirefox', 'FirefoxTest', 'new_ff@abv.bg', 'София', 'Sofiq 100 kv Ivan Vazov ', 'pass123.', '', '', NULL, '', '', '', '', 'nanny', '', '', '0997637801', '', '', ''),
(23, 'jk', 'QQ', 'mail_@abv.bg', 'Ямбол', 'gorno nanadolo v kuliBkata', 'qwe123.', '', '', NULL, '', '', '', '', 'user', '', '', '1254789666', '', '', ''),
(24, 'testFirefox', 'FirefoxTest', 'mail_.@abv.bg', 'Ямбол', 'Sofiq 100 kv Ivan Vazov ', 'test_11', '', '', NULL, '', '', '', '', 'user', '', '', '0997637801', '', '', ''),
(25, 'testFirefox', 'FirefoxTest', 'mail_BB@abv.bg', 'Перник', 'Sofiq 100 kv Ivan Vazov ', 'qwe123.', '', '', NULL, '', '', '', '', 'user', '', '', '0997637801', '', '', ''),
(26, 'jkldss', 'hg', 'wedew@asfd.vgdr', 'Перник', 'hghgh', 'qwe123.', '', '', NULL, '', '', '', '', 'nanny', '', '', '45455', '', '', ''),
(27, 'jkldss', 'hg', 'wedew@asfd.vgdrcdvgdf', 'Перник', 'hghgh', 'q123!!!', '', '', NULL, '', '', '', '', 'user', '', '', '45455', '', '', ''),
(28, 'Chrome', 'Chrome', 'chrome@mail.bg', 'Перник', '', 'qwe123.', '', '', NULL, '', '', '', '', 'user', '', '', '0966384752', '', '', ''),
(29, 'pencho', 'ivanov', 'pivanov@gogo.do', 'Ямбол', 'ul. Gorno Nanadolnishte 101', '!pesho1', '', '', NULL, '', '', '', '', 'user', '', '', '0889235130', '', '', ''),
(30, 'testChrome', 'testChrome', 'mail@yahoo.com', 'Бургас', '', 'test_11', '', '', NULL, '', '', '', '', 'user', '', '', '0697356987', '', '', ''),
(31, 'tester', 'tester', 'tester@abv.bg', 'Бургас', 'test adress', 'tester123.', '', '', NULL, '', '', '', '', 'user', '', '', '0997637801', '', '', ''),
(32, 'wefws', 'sdf', 'sfds@dsafsa.bgfbd', 'Перник', '', 'qwer.123', '', '', NULL, '', '', '', '', 'user', '', '', '0397637905', '', '', ''),
(33, 'testChrome', 'test', 'qq@abv.bg', 'Перник', 'Sofiq 100 ivan vazov#$%^*&&(*))(', 'pass123.', '', '', NULL, '', '', '', '', 'user', '', '', '02397614', '', '', ''),
(34, 'dgd', 'dfgd', 'sda@abv.bg', 'Перник', '', 'test*123', '', '', NULL, '', '', '', '', 'user', '', '', '0784545454', '', '', ''),
(35, 'dgd', 'dfgd', 'sdda@abv.bg', 'Перник', '', 'test?123', '', '', NULL, '', '', '', '', 'user', '', '', '0784545454', '', '', ''),
(36, 'dgd', 'dfgd', 'sdddsdca@abv.bg', 'Перник', '', 'test^123', '', '', NULL, '', '', '', '', 'user', '', '', '0784545454', '', '', ''),
(37, 'dgd', 'dfgd', 'sdddsddadca@abv.bg', 'Перник', '', 'test~123', '', '', NULL, '', '', '', '', 'user', '', '', '0784545454', '', '', ''),
(38, 'wejdes', 'wefwsf', 'fwerfr@vdsfvd.vev', 'Русе', 'fwdsdfsdfs', 'test123*', '', '', NULL, '', '', '', '', 'user', '', '', '02397614', '', '', ''),
(39, 'wejdes', 'wefwsf', 'dedfwerfr@vdsfvd.vev', 'Русе', 'fwdsdfsdfs', 'test123?', '', '', NULL, '', '', '', '', 'user', '', '', '02397614', '', '', ''),
(40, 'wejdes', 'wefwsf', 'dedfwerfr@vdsedwfvd.vev', 'Русе', 'fwdsdfsdfs', 'test123^', '', '', NULL, '', '', '', '', 'user', '', '', '02397614', '', '', ''),
(41, 'wejdes', 'wefwsf', 'rfr@vdsedwfvd.vev', 'Русе', 'fwdsdfsdfs', 'test123~', '', '', NULL, '', '', '', '', 'user', '', '', '02397614', '', '', ''),
(42, 'wejdescdwcw', 'wefwsf', 'edwe@vd.vev', 'Русе', 'fwdsdfsdfs', '///123a', '', '', NULL, '', '', '', '', 'user', '', '', '02397614', '', '', ''),
(43, 'testChrome', 'testChrome', 'mail@ygr.bgfgdg', 'Бургас', '', '123//q', '', '', NULL, '', '', '', '', 'user', '', '', '0697356987', '', '', ''),
(44, 'srfs', 'frefes', 'per4em@abv.bg', 'София', '', 'qwe/123', '', '', NULL, '', '', '', '', 'user', '', '', '0397637905', '', '', ''),
(45, 'bvhmv', 'hvbjmhv', 'bva@bv.bgj', 'Русе', '', '///123qqq', '', '', NULL, '', '', '', '', 'user', '', '', '0997637801', '', '', ''),
(46, 'dgdf', 'dfgfd', 'qq@abv.tghrh', 'София', '', 'qwe///123', '', '', NULL, '', '', '', '', 'user', '', '', '02397614', '', '', ''),
(47, 'dgdf', 'dfgfd', 'qq@abbb.bb', 'София', '', 'qwe///123', '', '', NULL, '', '', '', '', 'user', '', '', '02397614', '', '', ''),
(48, 'mimeto', 'test', 'pendel@abv.bg', 'Ямбол', '', '///111qqq', '', '', NULL, '', '', '', '', 'user', '', '', '89654', '', '', ''),
(49, 'cat', 'cat', 'cat@abn.bg', 'София', '', 'asd//12', '', '', NULL, '', '', '', '', 'user', '', '', '02397614', '', '', ''),
(50, 'test', 'zhingova', 'test2@abv.bg', 'Ямбол', '', 'test"11', '', '', NULL, '', '', '', '', 'user', '', '', '0784545454', '', '', ''),
(51, 'testChrome', 'testChrome', 'qq@abv.rthyr', 'Ямбол', '', 'test//1', '', '', NULL, '', '', '', '', 'user', '', '', '0784545454', '', '', ''),
(52, 'fdgdg', 'gdfgdf', 'gfd@sdgsf.ngf', 'Русе', '', '\\aaa1', '', '', NULL, '', '', '', '', 'user', '', '', '0997637801', '', '', ''),
(53, 'Nanny', 'Granny', 'nanny@abv.bg', 'Ямбол', 'Ямбоооол е гръдъ', 'qwe123.', 'жена', '8003010569', NULL, 'да', 'Безработен', 'Висше', 'искам да пипам деца!!!', 'nanny', '', '', '0397637905', '', '', ''),
(54, 'user', 'user', 'user@abv.bg', 'Бургас', '', 'qwe123.', '', '', NULL, '', '', '', '', 'user', '', '', '0784545454', '', '', ''),
(55, 'БабаЦвети', 'Кифличка', 'nanny2@abv.bg', 'Перник', '@ home предимно', 'qwe123.', 'жена', '9003046851', NULL, 'да', 'Пълен', 'Висше', 'обичам деца и много се разбирам с тях', 'nanny', '', '', '0397637905', '', '', ''),
(56, 'Мария', 'ЕСМЕРАЛДА', 'nanny3@abv.bg', 'Варна', 'ПЕТРИЧ', 'qwe123.', 'жена', '9306479800', NULL, 'да', 'Пълен', 'Висше', 'ДЕЦАТА СА МНОГО ВКУСНИ НА СУПИЧКА', 'nanny', '', '', '0997637801', '', '', ''),
(57, 'nanisnimka', 'nanisnimka', 'nanny4@abv.bg', 'София', 'Dolno selo', 'qwe123.', 'жена', '6639540274', NULL, 'да', 'Безработен', 'Средно специално', 'Търся си смисъл в живота...', 'nanny', '', 'bellatrix-black.jpg', '0997637801', '', '', ''),
(58, 'testFirefox', 'testi', 'nanny5@abv.bg', 'Русе', 'ruseto', 'qwe123.', 'жена', '6781369584', NULL, 'да', 'Пълен', 'Средно', 'nqmam mnogo motivaciq we', 'nanny', '', 'enchantress.jpg', '09687114', '', '', ''),
(59, 'penisima', 'nezemna', 'penisima@asl.pls', 'София', 'vzriv v gorata', 'qwe123@', 'жена', '6987451230', '45.1254877', '', 'Половин', 'Средно', 'qko sym motivirana da  plqskam deca po zadnicite ', 'nanny', '', 'qq-pony.jpg', '215452315', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingID`);

--
-- Indexes for table `parenuser`
--
ALTER TABLE `parenuser`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `parenuser`
--
ALTER TABLE `parenuser`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
