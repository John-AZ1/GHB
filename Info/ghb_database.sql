-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 08, 2016 at 09:26 AM
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ghb_database`
--
CREATE DATABASE IF NOT EXISTS `ghb_database` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ghb_database`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(128) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cid`, `uid`, `date`, `message`) VALUES
(1, 'Anonymous', '2016-09-03 18:33:34', 'Hello\r\n'),
(2, 'Anonymous', '2016-09-03 18:44:18', 'Hi'),
(3, 'John', '2016-09-03 18:46:09', 'Yello'),
(4, 'John', '2016-09-03 18:46:09', 'Yello'),
(5, 'Anonymous', '2016-09-03 19:09:26', 'Go power rangers yeah go other stuff and irrelevant cool stuff sedation should be tabed'),
(6, 'Anonymous', '2016-09-03 19:16:28', 'ye harr'),
(24, 'Anonymous', '2016-09-03 19:33:26', 'ddsad'),
(25, 'Anonymous', '2016-09-03 19:33:26', 'ddsad'),
(26, 'Anonymous', '2016-09-03 19:33:26', 'ddsad'),
(27, 'Anonymous', '2016-09-03 19:33:26', 'ddsad'),
(28, 'Anonymous', '2016-09-03 19:33:26', 'ddsad'),
(29, 'Anonymous', '2016-09-03 19:33:26', 'ddsad'),
(30, 'Anonymous', '2016-09-03 19:33:26', 'ddsad'),
(31, 'Anonymous', '2016-09-03 19:33:26', 'ddsad'),
(32, 'Anonymous', '2016-09-03 19:33:26', 'ddsad'),
(33, 'Anonymous', '2016-09-03 19:33:26', 'ddsad'),
(34, 'Anonymous', '2016-09-03 19:33:26', 'ddsad'),
(35, 'Anonymous', '2016-09-03 19:33:26', 'ddsad'),
(36, 'Anonymous', '2016-09-03 19:33:26', 'ddsad'),
(37, 'Anonymous', '2016-09-03 19:33:26', 'ddsad'),
(38, 'Anonymous', '2016-09-03 19:33:26', 'ddsad'),
(39, 'Anonymous', '2016-09-03 19:33:26', 'ddsad'),
(40, 'Anonymous', '2016-09-03 19:33:26', 'ddsad'),
(41, 'Anonymous', '2016-09-03 19:33:26', 'ddsad'),
(42, 'Anonymous', '2016-09-03 19:33:26', 'ddsad'),
(43, 'Anonymous', '2016-09-03 19:33:26', 'ddsad'),
(44, 'Anonymous', '2016-09-03 19:33:26', 'ddsad'),
(45, 'Anonymous', '2016-09-03 20:16:00', 'sdjkfhzsdkjf\r\n\r\n\r\ndsfsdhfjs'),
(46, 'Anonymous', '2016-09-03 20:16:00', 'sdjkfhzsdkjf\r\n\r\n\r\ndsfsdhfjs'),
(47, 'John', '2016-09-04 18:52:57', 'Yello Francis'),
(48, 'John', '2016-09-30 13:24:00', 'Hi\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `qa`
--

CREATE TABLE IF NOT EXISTS `qa` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `Q` varchar(128) NOT NULL,
  `A` varchar(128) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `username`, `password`) VALUES
(3, 'Jeremy', 'Spedding', 'Jo', '1234'),
(4, 'John', 'Mars', 'Don', '2345'),
(5, 'Cameron', 'Spedding', 'Older_Brother', '31632'),
(6, 'Robert', 'Calso', 'Bobbo', 'Sacredheart'),
(7, 'monty', 'cows', 'b', 'en'),
(8, 'monty', 'bob', 'bob', 'dylan'),
(9, 'kol', 'loganstonkaboloiton', 'ben', '38308'),
(10, 'Gold', 'Silver', 'Copper', 'lead'),
(11, 'Sadie', 'Kane', 'Saddog', 'qwerty');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
