-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 26, 2013 at 12:50 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ohschecklist`
--

INSERT INTO `ohschecklist` (`id`, `date`, `time`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`) VALUES
(1, '2013-03-26', '09:53:18', 'Yes', 'P2', 'No', 'Yes', 'NA', 'No', 'Yes', 'Yes', 'Yes', 'This is some random text hi hi hi', 'Yes', 'NA'),
(2, '2013-03-26', '10:29:23', 'Yes', 'Select', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1'),
(3, '2013-03-26', '10:31:37', 'No', 'P1', 'NA', 'NA', 'NA', 'No', 'Yes', 'Yes', 'Yes', 'gfhjryer', 'Yes', 'NA'),
(4, '2013-03-26', '11:15:59', 'Yes', 'Select', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1'),
(5, '2013-03-26', '11:16:23', 'Yes', 'Select', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
