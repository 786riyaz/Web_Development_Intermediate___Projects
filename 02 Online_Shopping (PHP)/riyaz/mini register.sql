-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost:3307
-- Generation Time: May 05, 2020 at 10:53 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mini`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `uid` int(15) NOT NULL AUTO_INCREMENT,
  `signup_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(25) NOT NULL,
  `password` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `isblocked` tinyint(1) NOT NULL DEFAULT '0',
  `isdeleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `username_2` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `mobile` (`mobile`),
  UNIQUE KEY `uid` (`uid`,`username`,`email`,`mobile`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`uid`, `signup_date_time`, `username`, `password`, `dob`, `email`, `mobile`, `isblocked`, `isdeleted`) VALUES
(1, '2018-03-04 19:40:08', 'Riyaz Khan', 'riyaz786', '1999-12-11', 'moh.riyazpathan@gmail.com', '9909221451', 0, 0),
(2, '2018-03-04 19:40:10', 'Nilesh Rana', 'nilesh086', '2000-07-13', 'nileshranaj013@gmail.com', '8140153221', 0, 0),
(3, '2018-03-04 19:40:12', 'Pranav Poriya', 'pranav077', '2000-06-09', 'poriyapranav@gmail.com', '7383397942', 0, 0),
(4, '2018-03-04 19:40:14', 'Nilkanth Rangani', 'nilu087', '1997-07-17', 'nilkanthrangani1008@gmail.com', '9924630068', 0, 0),
(5, '2018-03-04 19:41:43', 'Ajay Pateliya', 'ajay073', '1997-11-27', 'ajaypatel8218@gmail.com', '7016344734', 0, 0),
(35, '2020-05-02 10:17:36', 'g2', 'g', '2019-12-11', 'g1@gmail.com', '5', 0, 0),
(39, '2020-05-02 10:19:50', 'fbb', 'sdvs', '2020-01-01', 'xcv@com', '34', 0, 0),
(40, '2020-05-02 11:36:52', 'd', 's', '0000-00-00', '', '', 0, 0),
(41, '2020-05-04 21:15:45', 'dfdb', 'dbdb', '2020-05-04', 'dcvddc@gmail.com', '3', 0, 0),
(44, '2020-05-04 21:22:16', 'df', 'sv', '2020-05-14', 'aman@gmail.com', '344', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
