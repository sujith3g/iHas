-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 01, 2013 at 12:26 PM
-- Server version: 5.5.32
-- PHP Version: 5.3.10-1ubuntu3.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `has`
--

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE IF NOT EXISTS `devices` (
  `dev_id` varchar(30) CHARACTER SET utf8 NOT NULL,
  `dev_ip` varchar(30) CHARACTER SET ucs2 NOT NULL,
  `dev_passwd` varchar(30) CHARACTER SET utf8 NOT NULL,
  `status` varchar(30) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`dev_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`dev_id`, `dev_ip`, `dev_passwd`, `status`) VALUES
('dev_123', '192.168.43.66', '12345', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `dev_id` varchar(50) CHARACTER SET utf8 NOT NULL,
  `on_time` varchar(50) CHARACTER SET utf8 NOT NULL,
  `off_time` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`dev_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
