-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 29, 2022 at 08:01 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `eventdetail`
--

DROP TABLE IF EXISTS `eventdetail`;
CREATE TABLE IF NOT EXISTS `eventdetail` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `time` time NOT NULL,
  `capacity` varchar(1000) NOT NULL,
  `price` varchar(1000) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventdetail`
--

INSERT INTO `eventdetail` (`eid`, `time`, `capacity`, `price`) VALUES
(4, '16:00:00', 'sad', 'sad'),
(5, '16:59:00', 'g', 'g');

-- --------------------------------------------------------

--
-- Table structure for table `eventinfo`
--

DROP TABLE IF EXISTS `eventinfo`;
CREATE TABLE IF NOT EXISTS `eventinfo` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `location` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL,
  `organizers` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventinfo`
--

INSERT INTO `eventinfo` (`eid`, `name`, `location`, `date`, `description`, `organizers`, `logo`) VALUES
(25, 't', 't', '2022-09-30', 't', 't', 'upload/'),
(24, 'g', 'g', '2022-10-05', 'g', 'g', 'upload/'),
(4, 'Acefiesta', 'ChayaCenter,Thamel', '2022-10-27', 'sdasdadsad', 'Garage Entertainment in partnership with ncell nepal', 'upload/Opportunity.jpg'),
(18, 'a', 'a', '2022-10-06', 'a', 'a', 'upload/Opportunity.jpg'),
(19, 'Ryugu', '1', '2022-10-03', '2', 'wr', 'upload/'),
(20, 'à¤¸à¤¨à¤¿à¤œ', 'sadasd', '2022-10-06', 'sdadsad', 'asd', 'upload/289116620_910528979919751_1025787496671285894_n.png'),
(21, 'q', 'q', '2022-10-04', 'q', 'q', 'upload/289116620_910528979919751_1025787496671285894_n.png'),
(22, 'q', 'q', '2022-10-04', 'q', 'q', 'upload/289116620_910528979919751_1025787496671285894_n.png');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

DROP TABLE IF EXISTS `usertable`;
CREATE TABLE IF NOT EXISTS `usertable` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `usertype` varchar(100) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`uid`, `firstname`, `lastname`, `email`, `password`, `phone`, `usertype`) VALUES
(2, 'Sam', 'Rai', 'samrai@gmail.com', 'sam123', '2', 'user'),
(9, 'sanir', 'maharjan', 'sanirmaharjan123@gmail.com', 'sanir123', '5555555555', 'user'),
(8, 'Admin', 'admin', 'admin@gmail.com', 'admin123', '9841000000', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
