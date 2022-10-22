-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 20, 2022 at 11:43 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interiordesign`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `Id` bigint(10) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(40) NOT NULL,
  `Age` int(2) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address_living` varchar(150) NOT NULL,
  `Occupation` varchar(25) NOT NULL,
  `HomeType` varchar(11) NOT NULL,
  `PhoneNum` bigint(10) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Pass` varchar(15) NOT NULL,
  `datetoday` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Address` (`Address_living`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`Id`, `FirstName`, `Age`, `Gender`, `Address_living`, `Occupation`, `HomeType`, `PhoneNum`, `Email`, `Pass`, `datetoday`) VALUES
(1, 'Aisha', 12, 'Female', 'HOUSE NO.44 BLOCK-A/5 STREET NO.17 BISMILLAH CITY LATIFABAD UNIT NO.10', 'private', 'Own', 311125561, 'shaikhaisha081@gmail.com', 'aoao', '2022-07-01 20:28:55'),
(2, 'Taba', 20, 'Female', 'Kohesar house# 44 street #2', 'private', 'Own', 222333333, 'taba@gmail.com', 'tabaR', '2022-07-05 15:48:44'),
(3, 'Hafsa', 19, 'Female', 'Kohesar house#2 street#4', 'private', 'Rent', 222333444, 'hafsa@gmail.com', 'lihsfd', '2022-07-05 17:59:13'),
(4, 'Shahid', 23, 'Male', 'HOUSE NO.12 BLOCK-A/3 STREET NO.7 OLD TOWN LATIFABAD UNIT NO.10', 'private', 'Own', 9434245, 'shahidshaikh@gmail.com', 'ieru0923', '2022-07-18 13:13:27'),
(5, 'Shoyo Hinata', 20, 'Male', 'japan mybe', 'volleyball player', 'Rent', 798799, 'shoyo@gmail.com', 'setter', '2022-08-09 16:42:43'),
(6, 'klhd', 21, 'Male', 'kjsdhkjshd lsdlis', 'lkshfv', 'Rent', 9873987, 'kjahd@kjf.sldh', '8o3e098', '2022-08-11 15:31:44'),
(7, 'i', 32, 'Female', 'lhskhfla ehfqwod', 'ief', 'Rent', 7091327, 'shaikhais@gmail.com', '9709', '2022-08-15 10:56:30'),
(8, 'ti', 98, 'Male', 'lkfd dfjg; ja fa', 'oidfg', 'Own', 312341, 'ti@gmail.com', '090909', '2022-08-19 14:30:24');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

DROP TABLE IF EXISTS `details`;
CREATE TABLE IF NOT EXISTS `details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) NOT NULL,
  `q1` varchar(200) NOT NULL,
  `q2` varchar(200) NOT NULL,
  `q3` varchar(200) NOT NULL,
  `q4` varchar(200) NOT NULL,
  `q5` varchar(200) NOT NULL,
  `q6` varchar(200) NOT NULL,
  `q7` varchar(200) NOT NULL,
  `q8` varchar(200) NOT NULL,
  `q9` varchar(200) NOT NULL,
  `q10` varchar(200) NOT NULL,
  `q11` varchar(200) NOT NULL,
  `q12` varchar(200) NOT NULL,
  `q13` varchar(200) NOT NULL,
  `q14` varchar(200) NOT NULL,
  `q15` varchar(200) NOT NULL,
  `q16` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `email`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`) VALUES
(1, '', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sisteen', 'one'),
(2, '', 'ih', 'hil', 'hkl', 'klhhkl', 'kh', 'khlkl', 'hlkh', 'khllkh', 'ihlkljh', 'hlklkh', 'lk', 'lh', 'lhklh', 'klhkjhkjh ', 'lihj', 'iopuo'),
(3, '', 'eioh', 'h', 'h', 'ijj', 'jkh', 'h', 'kjh', 'kjh', 'khkj', 'k', 'hkj', 'hkj', 'hjk', 'hkj', 'hkj', 'hkj'),
(4, '', 'hkl', 'lkh', 'hkl', 'lkh', 'lkh', 'lkh', 'lh', 'lkh', 'lkh', 'lkh', 'lkh', 'hkl', 'lkh', 'lkh', 'lkh', 'lkh'),
(5, 'shaikhaisha081@gmail.com', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
