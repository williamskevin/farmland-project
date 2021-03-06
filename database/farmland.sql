-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 28, 2017 at 01:30 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmland`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
CREATE TABLE IF NOT EXISTS `addresses` (
  `address_id` int(5) NOT NULL AUTO_INCREMENT,
  `lot_number` varchar(10) NOT NULL,
  `address_line` varchar(1000) NOT NULL,
  `town` varchar(100) NOT NULL,
  `region` varchar(10) NOT NULL,
  PRIMARY KEY (`address_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`address_id`, `lot_number`, `address_line`, `town`, `region`) VALUES
(22, '2b', 'Grant Scheme', 'Georgetown', '1');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `name`) VALUES
(1, 'Fruits'),
(2, 'Meat/Seafood'),
(3, 'Dairy/Cheese'),
(4, 'Legumes/Nuts/Seeds'),
(5, 'Green Leafy Vegetables'),
(6, 'Fruit Vegetables'),
(7, 'Root Vegetables'),
(8, 'Onion/Shallots/Garlic'),
(9, 'Beverages'),
(10, 'Herbs/Spices'),
(11, 'Ground Provision');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(5) NOT NULL AUTO_INCREMENT,
  `likes` int(5) NOT NULL,
  `dislikes` int(5) NOT NULL,
  `body` varchar(3000) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `makes_comment`
--

DROP TABLE IF EXISTS `makes_comment`;
CREATE TABLE IF NOT EXISTS `makes_comment` (
  `makes_comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `date_posted` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`makes_comment_id`),
  KEY `user_id` (`user_id`),
  KEY `comment_id` (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `category_id` int(5) NOT NULL,
  `image` varchar(3000) NOT NULL,
  PRIMARY KEY (`product_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `category_id`, `image`) VALUES
(39, 'carrots', 6, 'img/product_pics/3ab1468ecca6b4dbde0feabf4299834b18806082.jpg'),
(40, 'potatoes', 6, 'img/product_pics/c81d25a4c9120a136b6c18fdbf1fc5ad9bc6fa46.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products_for_sale`
--

DROP TABLE IF EXISTS `products_for_sale`;
CREATE TABLE IF NOT EXISTS `products_for_sale` (
  `product_for_sale_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date_listed` date NOT NULL,
  `price` decimal(65,2) NOT NULL,
  PRIMARY KEY (`product_for_sale_id`),
  KEY `product_id` (`product_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_for_sale`
--

INSERT INTO `products_for_sale` (`product_for_sale_id`, `user_id`, `product_id`, `amount`, `date_listed`, `price`) VALUES
(12, 9, 39, 22, '2017-11-27', '222.00'),
(13, 9, 40, 2323, '2017-11-27', '2323.00');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_product`
--

DROP TABLE IF EXISTS `purchase_product`;
CREATE TABLE IF NOT EXISTS `purchase_product` (
  `purchase_product_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `date_purchased` datetime NOT NULL,
  `amount` int(11) NOT NULL,
  `total` decimal(64,2) NOT NULL,
  PRIMARY KEY (`purchase_product_id`),
  KEY `product_id` (`product_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sell_product`
--

DROP TABLE IF EXISTS `sell_product`;
CREATE TABLE IF NOT EXISTS `sell_product` (
  `sell_product_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `date_sold` datetime NOT NULL,
  `amount` int(11) NOT NULL,
  `total` decimal(64,2) NOT NULL,
  PRIMARY KEY (`sell_product_id`),
  KEY `product_id` (`product_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(500) NOT NULL,
  `cash` decimal(65,2) UNSIGNED NOT NULL,
  `profile_picture` varchar(5000) NOT NULL,
  `address_id` int(5) NOT NULL,
  `account_type` varchar(10) NOT NULL DEFAULT 'customer',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`),
  KEY `address_id` (`address_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COMMENT='This table stores the user data ';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `phone`, `username`, `password`, `email`, `cash`, `profile_picture`, `address_id`, `account_type`) VALUES
(9, 'Sean', 'Singh', '592-648-7886', 'sean', '2alSlJaAzeyyk', 'seanmsingh7@yahoo.com', '1000000.00', 'img/profilePics/chappie.jpg', 22, 'customer');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `makes_comment`
--
ALTER TABLE `makes_comment`
  ADD CONSTRAINT `makes_comment_ibfk_1` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`comment_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `makes_comment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON UPDATE CASCADE;

--
-- Constraints for table `products_for_sale`
--
ALTER TABLE `products_for_sale`
  ADD CONSTRAINT `products_for_sale_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `products_for_sale_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `purchase_product`
--
ALTER TABLE `purchase_product`
  ADD CONSTRAINT `purchase_product_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `purchase_product_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sell_product`
--
ALTER TABLE `sell_product`
  ADD CONSTRAINT `sell_product_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sell_product_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`address_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
