-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 08, 2023 at 05:40 PM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mejola`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `itemcode` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `des` varchar(200) NOT NULL,
  `cat` varchar(50) NOT NULL,
  `upri` float NOT NULL,
  `dis` float NOT NULL,
  `stock` int(50) NOT NULL,
  `ratings` int(5) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `itemcode`, `name`, `des`, `cat`, `upri`, `dis`, `stock`, `ratings`, `image`) VALUES
(1, 'U94WI1SM2p', 'severy', 'very good product.tasty', 'food', 140, 0, 20, 100, 'https://random.imagecdn.app/500/500'),
(2, '0AB9HeCEDy', 'kaju snace', 'very spicey,good for summer', 'food', 100, 0, 10, 50, 'https://random.imagecdn.app/500/500'),
(3, 'qVHKxAAK2L', 'snacke gred', 'very sweet,good for new year celebrations', 'food', 200, 0, 0, 57, 'https://random.imagecdn.app/500/500'),
(4, 'vSSzZgihI3', 'Ice Kootu', 'very sweet,good for Hot Days', 'food', 250, 0, 24, 34, 'https://random.imagecdn.app/500/500');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
