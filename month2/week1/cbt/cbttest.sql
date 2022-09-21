-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 21, 2022 at 04:01 AM
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
-- Database: `priscapr_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `ComputerScience`
--

CREATE TABLE `ComputerScience` (
  `id` int(11) NOT NULL,
  `category` varchar(30) DEFAULT NULL,
  `types` varchar(30) DEFAULT NULL,
  `difficulty` varchar(30) DEFAULT NULL,
  `question` mediumtext,
  `correct_answer` varchar(30) DEFAULT NULL,
  `incorrect_answers0` varchar(30) DEFAULT NULL,
  `incorrect_answers1` varchar(30) DEFAULT NULL,
  `incorrect_answers2` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ComputerScience`
--

INSERT INTO `ComputerScience` (`id`, `category`, `types`, `difficulty`, `question`, `correct_answer`, `incorrect_answers0`, `incorrect_answers1`, `incorrect_answers2`) VALUES
(6, 'General Knowledge', 'multiple', 'medium', 'Where does water from Poland Spring water bottles come from?', 'Maine, United States', 'Hesse, Germany', 'Masovia, Poland', 'Bavaria, Poland'),
(5, 'General Knowledge', 'multiple', 'medium', 'What character was once considered to be the 27th letter of the alphabet?', 'Ampersand', 'Interrobang', 'Tilde', 'Pilcrow'),
(4, 'General Knowledge', 'multiple', 'medium', 'What is the romanized Russian word for &quot;winter&quot;?', 'Zima', 'Leto', 'Vesna', 'Osen&#039;'),
(3, 'General Knowledge', 'multiple', 'easy', 'Red Vines is a brand of what types of candy?', 'Licorice', 'Lollipop', 'Chocolate', 'Bubblegum'),
(2, 'General Knowledge', 'boolean', 'medium', 'There are 86400 seconds in a day.', 'True', 'False', '', ''),
(1, 'General Knowledge', 'multiple', 'medium', 'Which language is NOT Indo-European?', 'Hungarian', 'Russian', 'Greek', 'Latvian'),
(7, 'General Knowledge', 'multiple', 'hard', 'If someone said &quot;you are olid&quot;, what would they mean?', 'You smell extremely unpleasant', 'You are out of shape/weak.', 'Your appearance is repulsive.', 'You are incomprehensible/an id'),
(8, 'General Knowledge', 'multiple', 'easy', 'What is the name of NASA&rsquo;s most famous space telescope?', 'Hubble Space Telescope', 'Big Eye', 'Death Star', 'Millenium Falcon'),
(9, 'General Knowledge', 'multiple', 'medium', 'The architect known as Le Corbusier was an important figure in what style of architecture?', 'Modernism', 'Neoclassical', 'Baroque', 'Gothic Revival'),
(10, 'General Knowledge', 'multiple', 'hard', 'What type of dog is &#039;Handsome Dan&#039;, the mascot of Yale University?', 'Bulldog', 'Yorkshire Terrier', 'Boxer', 'Pug');

-- --------------------------------------------------------

--
-- Table structure for table `General_Knowledge`
--

CREATE TABLE `General_Knowledge` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `types` varchar(255) NOT NULL,
  `difficulty` varchar(255) NOT NULL,
  `question` mediumtext NOT NULL,
  `correct_answer` varchar(255) NOT NULL,
  `incorrect_answers0` varchar(255) NOT NULL,
  `incorrect_answers1` varchar(255) DEFAULT NULL,
  `incorrect_answers2` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `General_Knowledge`
--

INSERT INTO `General_Knowledge` (`id`, `category`, `types`, `difficulty`, `question`, `correct_answer`, `incorrect_answers0`, `incorrect_answers1`, `incorrect_answers2`) VALUES
(1, 'Science: Computers', 'multiple', 'easy', 'According to the International System of Units, how many bytes are in a kilobyte of RAM?', '1000', '512', '1024', '500'),
(2, 'Science: Computers', 'multiple', 'easy', 'The programming language &#039;Swift&#039; was created to replace what other programming language?', 'Objective-C', 'C#', 'Ruby', 'C++'),
(3, 'Science: Computers', 'multiple', 'medium', 'All of the following programs are classified as raster graphics editors EXCEPT:', 'Inkscape', 'Paint.NET', 'GIMP', 'Adobe Photoshop'),
(4, 'Science: Computers', 'multiple', 'medium', 'Nvidia&#039;s headquarters are based in which Silicon Valley city?', 'Santa Clara', 'Palo Alto', 'Cupertino', 'Mountain View'),
(5, 'Science: Computers', 'multiple', 'medium', 'What does the acronym CDN stand for in terms of networking?', 'Content Delivery Network', 'Content Distribution Network', 'Computational Data Network', 'Compressed Data Network'),
(6, 'Science: Computers', 'multiple', 'medium', 'In programming, the ternary operator is mostly defined with what symbol(s)?', '?:', '??', 'if then', '?'),
(7, 'Science: Computers', 'boolean', 'medium', 'Early RAM was directly seated onto the motherboard and could not be easily removed.', 'True', 'False', NULL, NULL),
(8, 'Science: Computers', 'multiple', 'hard', 'What internet protocol was documented in RFC 1459?', 'IRC', 'HTTP', 'HTTPS', 'FTP'),
(9, 'Science: Computers', 'multiple', 'hard', 'What vulnerability ranked #1 on the OWASP Top 10 in 2013?', 'Injection', 'Broken Authentication', 'Cross-Site Scripting', 'Insecure Direct Object References'),
(10, 'Science: Computers', 'multiple', 'medium', 'The teapot often seen in many 3D modeling applications is called what?', 'Utah Teapot', 'Pixar Teapot', '3D Teapot', 'Tennessee Teapot');

-- --------------------------------------------------------

--
-- Table structure for table `Results`
--

CREATE TABLE `Results` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `scores` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Results`
--

INSERT INTO `Results` (`id`, `username`, `subject`, `scores`) VALUES
(1, 'Prisca11', 'Computer Science', '100'),
(2, 'Prisca11', 'General Knowledge', '80'),
(3, 'Prisca11', 'Computer Science', '50'),
(4, 'Prisca', 'Computer Science', '0'),
(5, 'Prisca', 'Computer Science', '20'),
(6, 'Prisca', 'Computer Science', '20'),
(7, 'Prisca', 'Computer Science', '20'),
(8, 'Prisca', 'Computer Science', '20'),
(9, 'Prisca', 'Computer Science', '20'),
(10, 'Prisca', 'Science and Nature', '0'),
(11, 'Prisca', 'Science and Nature', '0'),
(12, 'Prisca', 'Science and Nature', '80'),
(13, 'Prisca', 'Computer Science', '30');

-- --------------------------------------------------------

--
-- Table structure for table `Science`
--

CREATE TABLE `Science` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `types` varchar(255) NOT NULL,
  `difficulty` varchar(255) NOT NULL,
  `question` mediumtext NOT NULL,
  `correct_answer` varchar(255) NOT NULL,
  `incorrect_answers0` varchar(255) NOT NULL,
  `incorrect_answers1` varchar(255) DEFAULT NULL,
  `incorrect_answers2` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Science`
--

INSERT INTO `Science` (`id`, `category`, `types`, `difficulty`, `question`, `correct_answer`, `incorrect_answers0`, `incorrect_answers1`, `incorrect_answers2`) VALUES
(1, 'Science & Nature', 'boolean', 'medium', 'A person can get sunburned on a cloudy day.', 'True', 'False', NULL, NULL),
(2, 'Science & Nature', 'boolean', 'hard', 'It was once believed that injecting shark cartilage into people would prevent them from contracting cancer.', 'True', 'False', NULL, NULL),
(3, 'Science & Nature', 'multiple', 'easy', 'Alzheimer&#039;s disease primarily affects which part of the human body?', 'Brain', 'Lungs', 'Skin', 'Heart'),
(4, 'Science & Nature', 'multiple', 'medium', 'Where did the dog breed &quot;Chihuahua&quot; originate?', 'Mexico', 'France', 'Spain', 'Russia'),
(5, 'Science & Nature', 'multiple', 'easy', 'How many chromosomes are in your body cells?', '23', '21', '22', '24'),
(6, 'Science & Nature', 'multiple', 'medium', 'What is the unit of electrical capacitance?', 'Farad', 'Gauss', 'Henry', 'Watt'),
(7, 'Science & Nature', 'multiple', 'medium', 'Which of the following men does not have a chemical element named after him?', 'Sir Isaac Newton', 'Albert Einstein', 'Niels Bohr', 'Enrico Fermi'),
(8, 'Science & Nature', 'multiple', 'hard', 'Which scientific unit is named after an Italian nobleman?', 'Volt', 'Pascal', 'Ohm', 'Hertz'),
(9, 'Science & Nature', 'multiple', 'medium', 'Which of the following spacecraft never touched the moon?', 'Mariner 4', 'Apollo 11', 'Luna 2', 'SMART-1'),
(10, 'Science & Nature', 'multiple', 'hard', 'Which of the following elements is typically used in the doping of the semiconductor silicon?', 'Boron', 'Oxygen', 'Carbon', 'Iron');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `scores` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `email`, `username`, `password`, `subject`, `scores`) VALUES
(2, 'Mprisca8083@gmail.com', 'Prisca', '$2y$10$nWf5xFfQCoCV6sGeVrlqRO7SQ5Hk9Yh3oUxyTwoRI66wdyJ20nhL6', NULL, NULL),
(3, 'erikaclaire399@gmail.com', 'Prisca11', '$2y$10$GAfaK/KJWwNab8FHNPbPmuDn33UqzeybhTTgaVyOOj2sIP8OF5kra', 'Science and Nature', '110');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ComputerScience`
--
ALTER TABLE `ComputerScience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `General_Knowledge`
--
ALTER TABLE `General_Knowledge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Results`
--
ALTER TABLE `Results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Science`
--
ALTER TABLE `Science`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Results`
--
ALTER TABLE `Results`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
