-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2015 at 06:11 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `birthdaybash`
--

-- --------------------------------------------------------

--
-- Table structure for table `cakes`
--

DROP TABLE IF EXISTS `cakes`;
CREATE TABLE IF NOT EXISTS `cakes` (
`cakes_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `message` varchar(15) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cakes`
--

INSERT INTO `cakes` (`cakes_id`, `name`, `description`, `message`, `price`, `image`) VALUES
(6, 'Doll cake', ' nwddbcjecjec efc r cjr cc', 'nf cnfc fhce', 3455, 'uploads/doll1429477309.jpg'),
(7, '2 Tier Chocolate Cake', ' This 2 layer Chocolate cakes are all time favorite for any big party! This chocolate cream cake is an extreme indulgence of chocolate \r\n				as it is made up with fluffy chocolate sponge and abundance of chocolate creamy layers. The decoration is also simple yet elegant. \r\n				The splash of chocolate glaze is spread across the upper layer of the cake so as to feel the flavor of chocolate in every bite.', 'happy birthday ', 4000, 'uploads/2tier1429478140.jpg'),
(8, 'Car Cake', ' Description:Speed thrills and who does not like watching the 4 wheeled beauties at the Formula 1 racing circuits; now we recreate this same beauty for you in the form a Rich Chocolate Flavored Cake in it’s signature color of Red', 'happy birthday ', 1299, 'uploads/car1429478199.jpg'),
(9, 'Make Up Kit Cake', ' This cake is for all those gorgeous girls out there who like to use cosmetics and look good. This cake is especially designed for those who have fetish of cosmetics and wearing a makeup.This cake consists of exquisite chocolate layers and is coated with imported marzipan.', 'happy birthday ', 3200, 'uploads/makeup1429478247.jpg'),
(10, 'Alpine Chocolate Cake', '  If you have a strong urge of dark chocolate then Alpine Chocolate cake will appease your desires! Formed with soft chocolate sponge, the cake is smothered with layers of milk chocolate ganache to offer choco-delight in every bite! The cake is elegantly decorated with chocolate glaze and garnished with beautifully carved white chocolate plaques, sleek cigarette shaped chocolates, cream topping and extensive mix of white & dark chocolate vermicelli around the cake. This cake is an excellent gift', 'happy birthday ', 900, 'uploads/alpine1429478299.jpg'),
(11, '3 tier', ' dnk cd cd', 'happy birthday', 50000, 'uploads/cake3tier1430411735.jpg'),
(12, '3 tier', ' jdjedjnn', 'happy birthday ', 50000, 'uploads/cake3tier1430411880.jpg'),
(13, '3 tier', ' mdxjdj cedeed', 'happy birthday ', 344554, 'uploads/cake3tier1430412133.jpg'),
(14, '3 tier', ' md e jeje', 'djcnjdcne', 234213, 'uploads/cake3tier1430412458.jpg'),
(15, '3 tier', ' dwwdedc', 'wewede', 12313, 'uploads/cake3tier1430412572.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
`cart_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `cake_id` int(11) NOT NULL,
  `caterer_id` int(11) NOT NULL,
  `venue_id` int(11) NOT NULL,
  `videography_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `cust_id`, `cake_id`, `caterer_id`, `venue_id`, `videography_id`) VALUES
(9, 3, 7, 0, 0, 0),
(11, 1, 0, 0, 2, 2),
(13, 2, 11, 0, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `catering`
--

DROP TABLE IF EXISTS `catering`;
CREATE TABLE IF NOT EXISTS `catering` (
`catering_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
`customer_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `phone`, `email`, `address`, `password`) VALUES
(1, 'nm', 1213323, 'bhdce', 'wcece', 'asdc'),
(2, 'nam', 2233, 'ndnd@gmail.com', 'dd', 'dww'),
(3, 'nmd', 133, 'wdd@gmail.com', 'dxd', 'bhat');

-- --------------------------------------------------------

--
-- Table structure for table `decor`
--

DROP TABLE IF EXISTS `decor`;
CREATE TABLE IF NOT EXISTS `decor` (
`decor_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

DROP TABLE IF EXISTS `game`;
CREATE TABLE IF NOT EXISTS `game` (
`game_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
`id` int(11) NOT NULL,
  `name` text NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table_cart_data`
--

DROP TABLE IF EXISTS `table_cart_data`;
CREATE TABLE IF NOT EXISTS `table_cart_data` (
  `user_id` int(11) NOT NULL,
  `row_id` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_cart_data`
--

INSERT INTO `table_cart_data` (`user_id`, `row_id`, `product_id`, `name`, `price`, `qty`, `image`) VALUES
(2, 'c9f0f895fb98ab9159f51fd0297e236d', 8, 'Car Cake', 1299, 6, 'http://localhost/CodeIgniter-3.0.0/uploads/car1429478199.jpg'),
(1, 'c9f0f895fb98ab9159f51fd0297e236d', 8, 'Car Cake', 1299, 10, 'http://localhost/CodeIgniter-3.0.0/uploads/car1429478199.jpg'),
(1, '8f14e45fceea167a5a36dedd4bea2543', 7, '2 Tier Chocolate Cake', 4000, 1, 'http://localhost/CodeIgniter-3.0.0/uploads/2tier1429478140.jpg'),
(1, 'c81e728d9d4c2f636f067f89cc14862c', 2, 'trial', 12131, 3, 'http://localhost/CodeIgniter-3.0.0/uploads/videography/DSC_00021430665381.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

DROP TABLE IF EXISTS `venue`;
CREATE TABLE IF NOT EXISTS `venue` (
`venue_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` int(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `capacity` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`venue_id`, `name`, `description`, `price`, `address`, `capacity`, `image`) VALUES
(2, 'CAMROON KINGDOM', 'Facilities: Open Air, DJ, Alcohol, Dedicated Parking, Catering, Stage\r\n An Open air 3000 sqm venue that can Accomodate more than 1000 people will take your breath away..', 40000, 'mapusa', 1000, 'uploads/venuecamaroon kingdom1429986145.jpg'),
(3, 'THE CORAL', 'Air Conditioned, Alcohol, Dedicated Parking, Wi-Fi/Internet, Catering, Elevator. The Coral is a plush meeting room complete with state of the art audio- visual facilities. \r\nOur banquet hall have been the much-preferred venue by our clients for a series of occasions.\r\nBe it corporate conferences, company staff training session, birthdays. It has a capacity of 50 guests..', 8000, 'Baga Marina', 50, 'uploads/venuecoral1429986317.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `videography`
--

DROP TABLE IF EXISTS `videography`;
CREATE TABLE IF NOT EXISTS `videography` (
`videography_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videography`
--

INSERT INTO `videography` (`videography_id`, `name`, `description`, `price`, `image`) VALUES
(1, 'trial', 'xvsxbjkwbdjxwb', 12131, 'uploads/videography/DSC_00021430665125.jpg'),
(2, 'trial', 'xvsxbjkwbdjxwb', 12131, 'uploads/videography/DSC_00021430665381.jpg'),
(3, 'sbjws', 'jjsbxjwwn', 121313, 'uploads/videography/011430667009.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cakes`
--
ALTER TABLE `cakes`
 ADD PRIMARY KEY (`cakes_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
 ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `catering`
--
ALTER TABLE `catering`
 ADD PRIMARY KEY (`catering_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `decor`
--
ALTER TABLE `decor`
 ADD PRIMARY KEY (`decor_id`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
 ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
 ADD PRIMARY KEY (`venue_id`);

--
-- Indexes for table `videography`
--
ALTER TABLE `videography`
 ADD PRIMARY KEY (`videography_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cakes`
--
ALTER TABLE `cakes`
MODIFY `cakes_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `catering`
--
ALTER TABLE `catering`
MODIFY `catering_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `decor`
--
ALTER TABLE `decor`
MODIFY `decor_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
MODIFY `game_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
MODIFY `venue_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `videography`
--
ALTER TABLE `videography`
MODIFY `videography_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
