-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost:3307
-- Generation Time: May 05, 2020 at 10:52 AM
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
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `itemname` varchar(30) NOT NULL,
  `price` bigint(8) NOT NULL,
  `company` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `des` varchar(100) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `brand` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `itemname`, `price`, `company`, `category`, `des`, `photo`, `brand`) VALUES
(1, 'Ideapad s145', 18000, 'Lenovo', 'electronics', 'Ram:4GB<br>HDD:1TB<BR>Operating System:Windos OS<BR>Screnn size:15.6''''<BR>Color:Gray', 'mini photo/1.png', 'Laptop'),
(2, 'Galaxy Grand Prime', 8250, 'Samsung', 'electronics', 'RAM:4GB<BR>ROM:8GB<br>Front Camera:5MP<BR>Rear Camera:8MP<BR>Battery:2600mAh', 'mini photo/1.png', 'Mobile Phone'),
(3, 'Centrix-R30035712', 151200, 'Rado', 'fashion', 'Color:Golden Black', 'mini photo/1.png', 'Wrist Watch'),
(4, 'Green Aviator Sunglasses', 1999, 'Ray-Ban', 'fashion', 'Color:Lime Green', 'mini photo/1.png', 'Goggle'),
(5, 'Pop Nxt 04 Blue Rust ', 1299, 'American Tourister', 'accessories', 'Color:Dark Blue', 'mini photo/1.png', 'BachPack'),
(6, 'Runallday Running Shoes', 2399, 'Nick', 'fashion', 'Color:Black/White-Anthracite', 'mini photo/1.png', 'Shoes'),
(7, 'R12413314-648', 75800, 'Rado', 'fashion', 'Color:Golden', 'mini photo/1.png', 'Wrist Watch'),
(8, 'TRUE R27014152', 165700, 'Rado', 'fashion', 'Color:Navy Blue', 'mini photo/1.png', 'Wrist Watch'),
(9, 'Black UV Protection Aviator', 6390, 'Ray-Ban', 'fashion', 'Color:Mate Black', 'mini photo/1.png', 'Goggle'),
(10, '4C Pro HD', 12499, 'Mi', 'electronics', 'Color:Black<br>Screen Size:32 inch', 'mini photo/1.png', 'LED TV'),
(11, 'Racer 1200', 1600, 'Usha', 'electronics', 'Color:Rich Brown<BR>High Speed:400RPM<BR>Air Delivery:210m<sup>3</sup>/min', 'mini photo/1.png', 'Ceiling Fan'),
(12, 'Office Clock AQ-2147', 170, 'Ajanta Quartz', 'households', 'Color:Black<br>Dialer:White', 'mini photo/1.png', 'Wall Clock'),
(13, 'RS Speed Cube 3x3x3', 180, 'Negi', 'toys', 'Type:3x3x3', 'mini photo/1.png', 'Rubik''s Cube');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
