-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 21, 2022 at 04:00 AM
-- Server version: 5.7.39-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `priscapr_catalogue`
--

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `product_id` int(11) NOT NULL,
  `SKU` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL DEFAULT '1',
  `weight` varchar(100) NOT NULL DEFAULT '1',
  `length` varchar(100) NOT NULL DEFAULT '1',
  `width` varchar(100) NOT NULL DEFAULT '1',
  `height` varchar(100) NOT NULL DEFAULT '1',
  `filename` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`product_id`, `SKU`, `name`, `price`, `type`, `model`, `weight`, `length`, `width`, `height`, `filename`) VALUES
(231, 'Sku7979944', 'Laptop', '2000', 'Gadget', 'Apple', '', '', '', '', 'laptop.jpeg'),
(232, 'SKU4578927', 'Female Shoes', '100', 'Book', '', '56', '', '', '', 'femaleshoes.jpeg'),
(233, 'SKU457892730', 'Table', '560', 'Furniture', '', '', '10', '12', '5', '86BA03C3-25CF-48BC-9FD6-BE7DE61123BD.png'),
(235, 'SKU457892700', 'Earphone', '200', 'Gadget', 'Great', '', '', '', '', 'earphone2.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `email`, `username`, `password`) VALUES
(1, 'Mprisca8083@gmail.com', 'Prisca', '$2y$10$5KUMlvJ1QevYd.VdZ1BY0.QEJEVLAwOzzHIzkSmaotOtRssXzadv2'),
(2, 'onyenkem8@gmail.com', 'Onye', '$2y$10$3d60PbzdBk.4Z0Ixmjqjzey7E7NA.4KbtOZhOGZQ9UcMzClj2vrau');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `SKU` (`SKU`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Products`
--
ALTER TABLE `Products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
