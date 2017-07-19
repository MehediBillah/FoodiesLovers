-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2016 at 06:58 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `foodies_lovers`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `sl` int(11) NOT NULL AUTO_INCREMENT,
  `restaurant` varchar(50) NOT NULL,
  `place` varchar(30) NOT NULL,
  `location` varchar(100) NOT NULL,
  `rv` varchar(20) NOT NULL,
  `pv` varchar(20) NOT NULL,
  `link` varchar(30) NOT NULL,
  PRIMARY KEY (`sl`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`sl`, `restaurant`, `place`, `location`, `rv`, `pv`, `link`) VALUES
(1, 'Chili''s Fast Food', 'Shaheb Bazar', 'Zeropoint, Shaheb Bazar, Rajshahi.\r\nTelephone: 01711-364141\r\nWebsite: chilisbd.com', 'chilis', 'bazar', 'chilis.php'),
(2, 'Route 6', 'Kazla', 'Kajla Gate, Dhaka Highway, I B S, RU, Rajshahi.\r\nTelephone: 01707-768836', 'route6', 'kazla', 'route6.php');

-- --------------------------------------------------------

--
-- Table structure for table `chilis`
--

CREATE TABLE IF NOT EXISTS `chilis` (
  `sl` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `restaurant` varchar(50) NOT NULL,
  `place` varchar(20) NOT NULL,
  `link` varchar(20) NOT NULL,
  PRIMARY KEY (`sl`),
  UNIQUE KEY `item_name` (`item_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `chilis`
--

INSERT INTO `chilis` (`sl`, `category`, `item_name`, `price`, `restaurant`, `place`, `link`) VALUES
(1, 'juice', 'Orange', 80, 'Chilis', 'bazar', 'chilis.php'),
(2, 'juice', 'Malta', 80, 'Chilis', 'bazar', 'chilis.php'),
(3, 'juice', 'Kamranga', 50, 'Chilis', 'bazar', 'chilis.php'),
(4, 'juice', 'Pine-Apple', 50, 'Chilis', 'bazar', 'chilis.php'),
(5, 'juice', 'Grape', 100, 'Chilis', 'bazar', 'chilis.php'),
(6, 'juice', 'Papaya', 50, 'Chilis', 'bazar', 'chilis.php'),
(7, 'juice', 'Mango', 50, 'Chilis', 'bazar', 'chilis.php'),
(8, 'juice', 'Green Mango', 60, 'Chilis', 'bazar', 'chilis.php'),
(9, 'milk_shake', 'Milk Shake(flavour)', 100, 'Chilis', 'bazar', 'chilis.php'),
(10, 'milk_shake', 'Milk Shake', 50, 'Chilis', 'bazar', 'chilis.php'),
(11, 'ice_cream', 'Single flavor Cone', 80, 'Chilis', 'bazar', 'chilis.php'),
(12, 'ice_cream', 'Single flavor Cup', 65, 'Chilis', 'bazar', 'chilis.php'),
(13, 'ice_cream', 'Mixed Cone ', 140, 'Chilis', 'bazar', 'chilis.php'),
(14, 'ice_cream', 'Mixed Cup', 130, 'Chilis', 'bazar', 'chilis.php'),
(15, 'coffee', 'Espresso Coffee', 40, 'Chilis', 'bazar', 'chilis.php'),
(16, 'coffee', 'Cold Coffee', 60, 'Chilis', 'bazar', 'chilis.php'),
(17, 'coffee', 'Black Coffee', 30, 'Chilis', 'bazar', 'chilis.php');

-- --------------------------------------------------------

--
-- Table structure for table `route_6`
--

CREATE TABLE IF NOT EXISTS `route_6` (
  `sl` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `restaurant` varchar(50) NOT NULL,
  `place` varchar(30) NOT NULL,
  `link` varchar(20) NOT NULL,
  UNIQUE KEY `sl` (`sl`),
  UNIQUE KEY `item_name` (`item_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `route_6`
--

INSERT INTO `route_6` (`sl`, `category`, `item_name`, `price`, `restaurant`, `place`, `link`) VALUES
(1, 'juice', 'Strawberry Smoothie Big', 80, 'Route 6', 'kazla', 'route6.php'),
(2, 'juice', 'Strawberry Smoothie Mid', 60, 'Route 6', 'kazla', 'route6.php'),
(3, 'juice', 'Mulberry Smoothie Big', 80, 'Route 6', 'kazla', 'route6.php'),
(4, 'juice', 'Mulberry Smoothie Mid', 60, 'Route 6', 'kazla', 'route6.php'),
(5, 'juice', 'Orange Smoothie Big', 80, 'Route 6', 'kazla', 'route6.php'),
(6, 'juice', 'Orange Smoothie Mid', 60, 'Route 6', 'kazla', 'route6.php'),
(7, 'juice', 'Mixed Smoothie Big', 80, 'Route 6', 'kazla', 'route6.php'),
(8, 'juice', 'Mixed Smoothie Mid', 60, 'Route 6', 'kazla', 'route6.php'),
(9, 'milk_shake', 'Strawberry Milkshake Big', 120, 'Route 6', 'kazla', 'route6.php'),
(10, 'milk_shake', 'Strawberry Milkshake Mid', 100, 'Route 6', 'kazla', 'route6.php'),
(11, 'milk_shake', 'Chocolate Milkshake Big', 120, 'Route 6', 'kazla', 'route6.php'),
(12, 'milk_shake', 'Chocolate Milkshake Mid', 100, 'Route 6', 'kazla', 'route6.php'),
(13, 'ice_cream', 'Strawberry Almond', 80, 'Route 6', 'kazla', 'route6.php'),
(14, 'ice_cream', 'Toffee Almond', 80, 'Route 6', 'kazla', 'route6.php'),
(15, 'ice_cream', 'Pistachio ', 80, 'Route 6', 'kazla', 'route6.php'),
(16, 'ice_cream', 'Butter Crotch', 80, 'Route 6', 'kazla', 'route6.php'),
(17, 'ice_cream', 'Chocolate Chips', 80, 'Route 6', 'kazla', 'route6.php'),
(18, 'ice_cream', 'Caramel Crunch', 80, 'Route 6', 'kazla', 'route6.php'),
(19, 'ice_cream', 'Mango Mania', 80, 'Route 6', 'kazla', 'route6.php'),
(20, 'juice', 'Mango Smoothie Big', 90, 'Route 6', 'kazla', 'route6.php'),
(21, 'juice', 'Mango Smoothie Mid', 70, 'Route 6', 'kazla', 'route6.php'),
(22, 'juice', 'Kiwi Smoothie Big', 90, 'Route 6', 'kazla', 'route6.php'),
(23, 'juice', 'Kiwi Smoothie Mid', 70, 'Route 6', 'kazla', 'route6.php'),
(24, 'milk_shake', 'Mango Milk Shake Big', 120, 'Route 6', 'kazla', 'route6.php'),
(25, 'milk_shake', 'Mango Milk Shake Mid', 100, 'Route 6', 'kazla', 'route6.php'),
(26, 'coffee', 'Cold Coffee Large', 70, 'Route 6', 'kazla', 'route6.php');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
