-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 09, 2023 at 01:36 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stardarling`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Message` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `Name`, `Phone`, `Email`, `Message`) VALUES
(2, 'xcfvgbhnj', 'g@gmail.com', '23456798765', 'dfghjk;lmnbv'),
(10, 'Saw', 'saw@wf.asdf', '123423434', 'this is messaege'),
(11, 'Ko Ko', 'ko@gmail.com', '', 'Hello can i getmore!'),
(12, 'aaa', 'a@gmail.com', '123456789', 'sdfghjk'),
(13, 'bbb', 'b@gmail.com', '123456789', 'sdfhjklytdff'),
(14, 'ccc', '123456789', 'c@gmail.com', 'sdfghjkl');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Product_image` varchar(255) NOT NULL,
  `Product_name` varchar(255) NOT NULL,
  `Product_price` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`Id`, `Product_image`, `Product_name`, `Product_price`) VALUES
(2, 'brett-jordan-8xt8-HIFqc8-unsplash.jpg', 'egg', '1000'),
(3, 'american_breakfast.jpg', 'American breakfast', '20'),
(4, 'prawn_curry.jpg', 'Prawn curry', '30'),
(5, 'chicken_curry.jpg', 'Chicken curry', '30'),
(6, 'fried.jpg', ' chicken fried', '25'),
(8, 'Bacon_Pancakes_with_egg.jpg', 'Bacon Pancakes', '31'),
(9, 'sandwich.jpg', 'Sandwich', '10'),
(10, 'vegetable_soup.jpg', 'vegetable soup', '15'),
(11, 'salad_launch.jpg', 'salad launch', '20'),
(12, 'spicy_beef_curry.jpg', 'spicy beef', '20'),
(13, 'crab.jpg', 'Crab curry', '20'),
(14, 'f4604e05f6a9eaca99afddd69e849005_c02485d4-0841-4de6-b152-69deb38693f2.jpg', 'Egg tomato', '15');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `Id` int(100) NOT NULL AUTO_INCREMENT,
  `Product_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `Order_number` varchar(255) CHARACTER SET armscii8 NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Id`, `Product_name`, `Price`, `Name`, `Phone`, `Address`, `Order_number`) VALUES
(1, 'egg', '1000', 'gogo', '12', 'sav', '449'),
(2, 'Prawn curry', '30', 'Shrimp', '34567', 'sanch', '400');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Id`, `Name`, `Email`, `Phone`, `Password`) VALUES
(1, 'sdfghj', 'sawphawbar@gmail.com', '12345675667', '1234'),
(2, 'asdfgh', 'sawphawbar@gmail.com', '234567890', '1234'),
(3, 'Aye Aye', 'aye@gmail.com', '123456789', ''),
(4, 'gogo', 'go@gmail.com', '123456789', '123'),
(5, 'sdfghjkl', 's@gmail.com', '2345678', '1234567'),
(6, 'Ko Ko', 'koko@gmail.com', '09549333223', '123'),
(7, 'David', 'd@gmail.com', '0987654567', '555'),
(8, 'saw phaw bar', 'sawphawbar@gmail.com', '23456789', '123'),
(9, 'amuan', 'amuan@gamil.cp', '12345', ''),
(10, 'qqqqq', 'qqq@aa.qq', '9090999990', ''),
(11, 'oooooooo', 'ooooooo@s.d', '67890', ''),
(12, 'dfghj', 'dfghj@sz.sa', '234567', '00998'),
(13, '', '', '', ''),
(14, 'saw', 'saw@gmail.com', '09409139659', '1234'),
(15, 'mg', 'mg@gmail.com', '1234567890', '123'),
(16, '', '', '', ''),
(17, '', '', '', ''),
(18, '', '', '', ''),
(19, '', '', '', ''),
(20, '', '', '', ''),
(21, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Name` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `Password`) VALUES
('saw', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
