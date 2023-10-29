-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 06, 2022 at 04:32 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoping`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

DROP TABLE IF EXISTS `tbl_cart`;
CREATE TABLE IF NOT EXISTS `tbl_cart` (
  `cart_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `cat_id` int DEFAULT NULL,
  `pro_id` int DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `date` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE IF NOT EXISTS `tbl_category` (
  `cat_id` int NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(60) DEFAULT NULL,
  `dnt` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_name`, `dnt`) VALUES
(1, 'Vinegar', '2022-08-28 02:02:24'),
(2, 'Pickle', '2022-08-28 02:02:40'),
(3, 'Jaggery', '2022-08-28 02:03:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

DROP TABLE IF EXISTS `tbl_contact`;
CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `can_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(60) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL,
  `date` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`can_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notification`
--

DROP TABLE IF EXISTS `tbl_notification`;
CREATE TABLE IF NOT EXISTS `tbl_notification` (
  `noti_id` int NOT NULL AUTO_INCREMENT,
  `notification` varchar(200) DEFAULT NULL,
  `noti_date` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`noti_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_notification`
--

INSERT INTO `tbl_notification` (`noti_id`, `notification`, `noti_date`) VALUES
(1, 'Today 50% Discount. Hurry up Now!', '2022-08-29 08:07:10'),
(2, 'At Vinegar 70%off .... Buy Now!', '2022-08-29 08:10:43'),
(3, 'Summer Sale Discount offers... Visit Now ', '2022-08-29 08:12:26'),
(4, 'Winter Discount*. At Jaggery 75%off. ', '2022-08-29 08:13:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

DROP TABLE IF EXISTS `tbl_order`;
CREATE TABLE IF NOT EXISTS `tbl_order` (
  `order_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `cat_id` int DEFAULT NULL,
  `pro_id` int DEFAULT NULL,
  `quantity` varchar(8) DEFAULT NULL,
  `amount` varchar(10) DEFAULT NULL,
  `order_date` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
CREATE TABLE IF NOT EXISTS `tbl_product` (
  `pro_id` int NOT NULL AUTO_INCREMENT,
  `pro_name` varchar(100) NOT NULL,
  `cat_id` int NOT NULL,
  `filename` varchar(200) NOT NULL,
  `unit` int NOT NULL,
  `c_price` varchar(4) NOT NULL,
  `s_price` varchar(4) NOT NULL,
  `o_price` varchar(6) DEFAULT NULL,
  `expiry` varchar(10) NOT NULL,
  `description` varchar(200) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`pro_id`, `pro_name`, `cat_id`, `filename`, `unit`, `c_price`, `s_price`, `o_price`, `expiry`, `description`, `date`) VALUES
(1, 'Mango Pickle ', 2, 'pik2.jpeg', 19, '25', '35', '45', '2022-09-28', 'Very Good Product', '2022-08-28 02:09:21'),
(2, 'Fruits Vinegar', 1, 'v1.jpeg', 49, '50', '75', '85', '2022-09-28', 'This Is Fresh And Pure', '2022-08-28 02:12:08'),
(3, 'Sugarcane ', 3, 'jag2.jpg', 25, '40', '60', '70', '2022-09-28', 'This Is a fresh Items', '2022-08-28 02:14:32'),
(4, 'Chilli Pickle', 2, 'pik1.jpg', 29, '25', '35', '45', '2022-09-28', 'This is Testi and Pure', '2022-08-28 02:17:31'),
(5, 'Mixed Pickle', 2, 'pik5.jpg', 40, '25', '35', '45', '2022-09-28', 'Fresh ,Pure and Testy', '2022-08-28 02:19:01'),
(6, 'Chillies Vinegar', 1, 'v9.jpg', 60, '50', '75', '85', '2022-09-28', 'good Product', '2022-08-28 02:21:58'),
(7, 'Black Grapes Vinegar', 1, 'v6.jpg', 35, '50', '75', '85', '2022-09-28', 'good and fresh', '2022-08-28 02:23:37'),
(8, 'Sugarfree', 3, 'jag3.jpg', 60, '45', '60', '70', '2022-09-28', 'Sugar free product', '2022-08-28 02:25:35'),
(9, 'Chukandar', 3, 'jag1.jpg', 70, '42', '65', '79', '2022-09-28', 'fresh and pure', '2022-08-28 02:27:32'),
(10, 'Apple flavor ', 1, 'v2.jpg', 30, '50', '75', '89', '2022-09-28', 'this is a Apple flavor vinegar', '2022-08-28 15:41:38'),
(12, 'Chili pickle', 2, 'pick.jpg', 20, '25', '35', '45', '2022-10-30', 'Good Product', '2022-08-30 09:56:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscribe`
--

DROP TABLE IF EXISTS `tbl_subscribe`;
CREATE TABLE IF NOT EXISTS `tbl_subscribe` (
  `sub_id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(30) DEFAULT NULL,
  `sub_date` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subscribe`
--

INSERT INTO `tbl_subscribe` (`sub_id`, `email`, `sub_date`) VALUES
(1, 'jaivishwakarma@gmail.com', NULL),
(2, 'shiva@gmail.com', '2022-08-29 14:23:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(60) DEFAULT NULL,
  `user_img` varchar(200) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `dor` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
