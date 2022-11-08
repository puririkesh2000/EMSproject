-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 08, 2022 at 10:45 AM
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
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventdetail`
--

INSERT INTO `eventdetail` (`eid`, `time`, `capacity`, `price`) VALUES
(8, '23:46:00', '1000', '300'),
(10, '11:00:00', '500', '100'),
(11, '13:00:00', '200', '500'),
(12, '16:09:00', '5000', '200'),
(13, '13:00:00', '2000', '100');

-- --------------------------------------------------------

--
-- Table structure for table `eventinfo`
--

DROP TABLE IF EXISTS `eventinfo`;
CREATE TABLE IF NOT EXISTS `eventinfo` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL,
  `organizers` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventinfo`
--

INSERT INTO `eventinfo` (`eid`, `uid`, `name`, `location`, `date`, `description`, `organizers`, `logo`) VALUES
(10, 30, 'IT FEST', 'NCIT,Balkumari', '2022-11-23', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit magnam sapiente dolor quos expedita quis, ad perspiciatis hic nihil laboriosam at eius.', 'BEIT 5th SEM', 'upload/blog1.png'),
(11, 29, 'The Next', 'Hotel Everest', '2022-11-16', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit magnam sapiente dolor quos expedita quis, ad perspiciatis hic nihil laboriosam at eius.', 'InfoTech', 'upload/blog2.png'),
(8, 8, 'November Festival', 'Khokana,lalitpur', '2022-11-30', 'lorem ipsum', 'Gyanodaya School', 'upload/1.jpg'),
(12, 31, 'Musical Night', 'Dashrath Rangasala', '2022-11-19', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit magnam sapiente dolor quos expedita quis, ad perspiciatis hic nihil laboriosam at eius.', 'Tourism Board', 'upload/blog3.png'),
(13, 32, 'Economics Seminar', 'National Hall', '2022-11-22', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit magnam sapiente dolor quos expedita quis, ad perspiciatis hic nihil laboriosam at eius.', 'Rams Team', 'upload/Opportunity.jpg');

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
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`uid`, `firstname`, `lastname`, `email`, `password`, `phone`, `usertype`) VALUES
(8, 'Admin', 'admin', 'admin@gmail.com', 'admin123', '9841000000', 'admin'),
(32, 'Ram', 'karki', 'ram@gmail.com', 'ramkarki123', '9812221921', 'user'),
(30, 'Sanij', 'Maharjan', 'sanij@gmail.com', 'Sanij123', '9841429087', 'user'),
(31, 'Rikesh', 'Puri', 'rikesh@gmail.com', 'rikesh123', '9801372898', 'user'),
(29, 'samyog', 'adhikari', 'samyog@gmail.com', 'samyog123', '9861587954', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
