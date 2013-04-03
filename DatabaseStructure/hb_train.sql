-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 03, 2013 at 05:38 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hb_train`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkin`
--

CREATE TABLE IF NOT EXISTS `checkin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `latitude` varchar(30) NOT NULL,
  `longitude` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `checkin`
--

INSERT INTO `checkin` (`id`, `name`, `latitude`, `longitude`, `date`, `time`) VALUES
(2, 'person2', '-37.7070', '144.9680', '2013-03-27', '15:16:43'),
(3, 'Stephanie', '-37.811367', '144.971829', '2013-03-26', '12:50:51'),
(4, 'Adam', '-37.8500', '145.1140', '2013-03-27', '13:14:50'),
(9, 'stephanie3', '-37.811367', '144.971829', '2013-03-27', '15:38:38'),
(10, 'anewperson', '-37.811367', '144.971829', '2013-03-27', '15:41:42'),
(12, 'Rosebug', '-38.3560', '144.9180', '2013-03-27', '15:46:09'),
(13, 'romeo', '-1', '-1', '2013-03-27', '18:58:08'),
(14, 'Romeo', '-37.7373942', '144.9551054', '2013-03-27', '18:59:15'),
(15, 'Teresa', '-37.7374602', '144.9550911', '2013-03-27', '19:04:39'),
(16, 'Marco', '-37.811367', '144.971829', '2013-03-28', '10:08:30');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `paid` tinyint(1) NOT NULL,
  `username` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `first_name`, `last_name`, `paid`, `username`) VALUES
(1, 'Stephanie', 'DeLorenzis', 1, 'sdelorenzis'),
(2, 'Vignes', 'Baarathi', 1, 'vbaarathi'),
(9, 'james', 'mcavoy', 0, 'jmcavoy'),
(10, 'simon', 'DeLorenzis', 0, 'sidelorenzis'),
(12, 'steph', 'delo', 0, 'sdelo');

-- --------------------------------------------------------

--
-- Table structure for table `ohschecklist`
--

CREATE TABLE IF NOT EXISTS `ohschecklist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `q1` varchar(3) NOT NULL,
  `q2` varchar(10) NOT NULL,
  `q3` varchar(3) NOT NULL,
  `q4` varchar(3) NOT NULL,
  `q5` varchar(3) NOT NULL,
  `q6` varchar(3) NOT NULL,
  `q7` varchar(3) NOT NULL,
  `q8` varchar(3) NOT NULL,
  `q9` varchar(3) NOT NULL,
  `q10` varchar(100) NOT NULL,
  `q11` varchar(3) NOT NULL,
  `q12` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `ohschecklist`
--

INSERT INTO `ohschecklist` (`id`, `date`, `time`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`) VALUES
(1, '2013-03-26', '09:53:18', 'Yes', 'P2', 'No', 'Yes', 'NA', 'No', 'Yes', 'Yes', 'Yes', 'This is some random text hi hi hi', 'Yes', 'NA'),
(2, '2013-03-26', '10:29:23', 'Yes', 'Select', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1'),
(3, '2013-03-26', '10:31:37', 'No', 'P1', 'NA', 'NA', 'NA', 'No', 'Yes', 'Yes', 'Yes', 'gfhjryer', 'Yes', 'NA'),
(4, '2013-03-26', '11:15:59', 'Yes', 'Select', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1'),
(5, '2013-03-26', '11:16:23', 'Yes', 'Select', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1'),
(6, '2013-03-26', '12:48:14', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, '2013-03-27', '19:06:22', 'Yes', 'Select', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1'),
(8, '2013-03-28', '10:07:52', 'Yes', 'Select', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL,
  `projectNumber` varchar(15) NOT NULL,
  `projectLocation` varchar(50) NOT NULL,
  `projectLat` varchar(30) NOT NULL,
  `projectLong` varchar(30) NOT NULL,
  `projectComplete` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(30) DEFAULT NULL,
  `lastName` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `firstName`, `lastName`, `username`) VALUES
(1, 'stephanie', 'delorenzis', 'stdelorenzis');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
