-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 21, 2022 at 03:59 AM
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
-- Database: `priscapr_Riders`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` int(11) NOT NULL,
  `incoming_msg_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `outgoing_msg_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `incoming_msg_id`, `outgoing_msg_id`, `message`) VALUES
(1, '76567890', '3', 'Hi Prisca'),
(2, '65432267', '2', 'Hello Testing Rider'),
(3, '76567890', '3', 'How are you'),
(4, '65432267', '2', 'I am fine'),
(5, '65432267', '2', 'hii'),
(6, '65432267', '2', 'Hello'),
(7, '76567890', '3', 'Yes I am here'),
(8, '65432267', '2', 'ok.'),
(9, '76567890', '3', 'good evening'),
(10, '65432267', '2', 'Good evening my dear'),
(11, '65432267', '2', 'Good evening my dear'),
(12, '433587331', '2', 'Emmy');

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE `Orders` (
  `id` int(255) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `price` varchar(255) DEFAULT NULL,
  `rider` varchar(255) NOT NULL,
  `customer` varchar(255) DEFAULT NULL,
  `pickup` varchar(255) NOT NULL,
  `dropoff` varchar(255) NOT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Orders`
--

INSERT INTO `Orders` (`id`, `package_name`, `price`, `rider`, `customer`, `pickup`, `dropoff`, `payment_method`, `date`) VALUES
(1, 'Jewelry', '1000', 'Uche', 'Prisca', 'Benin', 'City', 'Transfer', '2022-09-09'),
(2, 'Jewelry', '2000', 'Uche', 'Prisca', 'Benin', 'edo', 'Transfer', '2022-09-09'),
(3, 'Tam', '1500', 'Rider Testing', 'Prisca', 'Awkuzu', 'Umunya', 'Cash', '2022-09-19'),
(4, 'Shoe', '1000', 'Rider Testing', 'Prisca', 'Owerri', 'Umunya', 'Cash', '2022-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `Riders`
--

CREATE TABLE `Riders` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `routes` varchar(255) NOT NULL,
  `vehicle_type` varchar(255) NOT NULL,
  `type_of_delivery` varchar(255) NOT NULL,
  `days_of_work` varchar(255) NOT NULL,
  `time_of_work` varchar(255) NOT NULL,
  `price_range` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Rider_Details`
--

CREATE TABLE `Rider_Details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `routes` varchar(255) NOT NULL,
  `vehicle_type` varchar(255) NOT NULL,
  `type_of_delivery` varchar(255) NOT NULL,
  `days_of_work` varchar(255) NOT NULL,
  `time_of_work` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `filename` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Rider_Details`
--

INSERT INTO `Rider_Details` (`id`, `user_id`, `routes`, `vehicle_type`, `type_of_delivery`, `days_of_work`, `time_of_work`, `price`, `filename`) VALUES
(1, 10, 'Adamawa', 'motocyle', 'Documents', 'Monday', '6am', '2015', NULL),
(17, 3, 'Achalla', 'Motocycle', 'All', 'Sundays', '6am to 12noon', '1000-4999', 'dekkkk.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `routes` varchar(255) DEFAULT NULL,
  `type_of_delivery` varchar(255) DEFAULT NULL,
  `vehicle_type` varchar(255) DEFAULT NULL,
  `days_of_work` varchar(255) DEFAULT NULL,
  `time_of_work` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `username`, `email`, `phone`, `password`, `unique_id`, `status`, `role`, `fullname`, `location`, `routes`, `type_of_delivery`, `vehicle_type`, `days_of_work`, `time_of_work`, `price`, `filename`) VALUES
(11, 'rider', 'erikaclaire399@gmail.com', '+2348158331726', '$2y$10$QsJrj4Sf/GuxLWnSgMqGo.joZu1BC8zOJUlpKAuhM./tmAc6j5yKa', '', 'USER_ACTIVE', 'Rider', 'Prisca Maduka', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Prisca', 'Mprisca8083@gmail.com', '08158331728', '$2y$10$iaO9138hErTELCY6ZRpK4.ing0EnuCcWblZOYH2Oo0xy9EdCvWPzK', '76567890', 'active', 'User', 'Prisca Maduka', 'Anambra', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Rider Testing', 'onyenkem8@gmail.com', '09834567800', '$2y$10$iaO9138hErTELCY6ZRpK4.ing0EnuCcWblZOYH2Oo0xy9EdCvWPzK', '65432267', 'active', 'Rider', 'Testing testing', 'Edo', 'Achalla', 'All', 'Motocycle', 'Sundays', '6am to 12noon', '1000-4999', 'dekkkk.jpeg'),
(12, 'Emmy', 'mprisca808@gmail.com', '08158331726', '$2y$10$57//oYIKVT8jtsiqYWQV9O/.gmpA3WphpL8tJbwbsZJcu7Uxnc6Uq', '433587331', 'USER_ACTIVE', 'Rider', 'Rider Emeka', 'Awkuzu', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'User_testing', 'user@gmail.com', '09041220212', '$2y$10$stFvGQknwH/mF6AtgXWuQe224t7mQeVFs.5RHzPz4gFF70jg/xEaG', '707750815', 'USER_ACTIVE', 'User', 'Erika Claire', 'Upenekang', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Riders`
--
ALTER TABLE `Riders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `Rider_Details`
--
ALTER TABLE `Rider_Details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `Orders`
--
ALTER TABLE `Orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Riders`
--
ALTER TABLE `Riders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Rider_Details`
--
ALTER TABLE `Rider_Details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
