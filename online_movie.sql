-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2020 at 08:27 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `addadmin`
--

CREATE TABLE `addadmin` (
  `a_id` int(100) NOT NULL,
  `a_name` varchar(100) NOT NULL,
  `a_branch` varchar(3000) NOT NULL,
  `a_access` varchar(300) NOT NULL,
  `a_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addadmin`
--

INSERT INTO `addadmin` (`a_id`, `a_name`, `a_branch`, `a_access`, `a_image`) VALUES
(1, 'Urmi', 'Bashundhara', 'Granted', '../storage/movie_image/95221342_686780968755040_5530974899998294016_n.png'),
(2, 'Rahman', 'Bashundhara', 'Denied', '../storage/movie_image/38071548_2236562906564942_3091987483701805056_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `addmovie`
--

CREATE TABLE `addmovie` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(300) NOT NULL,
  `m_description` varchar(3000) NOT NULL,
  `m_rate` int(3) NOT NULL,
  `thumbnail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addmovie`
--

INSERT INTO `addmovie` (`m_id`, `m_name`, `m_description`, `m_rate`, `thumbnail`) VALUES
(5, ' Game', 'wer', 5, '../storage/movie_image/1.png'),
(6, 'Godzilla', 'epic movie', 9, '../storage/movie_image/1.1.jpg'),
(7, 'Joker', 'phychological movie', 9, '../storage/movie_image/movie02New.jpg'),
(8, 'Dark knight', 'action movie', 10, '../storage/movie_image/movie03New.jpg'),
(9, 'Jumanji 2', 'funny & action movie', 8, '../storage/movie_image/slider3.jpg'),
(10, 'IT', 'horror movie', 8, '../storage/movie_image/slider4.jpg'),
(11, 'Jombie', 'jobies play around', 5, '../storage/movie_image/slider2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `addmovietiming`
--

CREATE TABLE `addmovietiming` (
  `m_id` int(100) NOT NULL,
  `m_name` varchar(300) NOT NULL,
  `m_branch` varchar(100) NOT NULL,
  `time_slot` varchar(50) NOT NULL,
  `m_date` varchar(100) NOT NULL,
  `m_ticket` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addmovietiming`
--

INSERT INTO `addmovietiming` (`m_id`, `m_name`, `m_branch`, `time_slot`, `m_date`, `m_ticket`) VALUES
(4, 'Godzilla', 'Panthopath', '7 pm to 10 pm', '2020-05-25', '269'),
(5, ' Game', 'Bashundhara', '3 pm - 5 pm', '2020-05-29', '330');

-- --------------------------------------------------------

--
-- Table structure for table `jobpost`
--

CREATE TABLE `jobpost` (
  `j_id` int(20) NOT NULL,
  `j_title` varchar(100) NOT NULL,
  `j_branch` varchar(100) NOT NULL,
  `j_description` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobpost`
--

INSERT INTO `jobpost` (`j_id`, `j_title`, `j_branch`, `j_description`) VALUES
(1, 'Admin', 'Mohakhali', 'Minimun Requirement '),
(2, 'data entry', 'Bashundhara', 'writing skill Requirement ');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `branch` varchar(300) NOT NULL,
  `mane` varchar(300) NOT NULL,
  `time` varchar(300) NOT NULL,
  `date` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name`, `branch`, `mane`, `time`, `date`) VALUES
(1, 'Dark knight', '', '', '', ''),
(2, 'Bashundhara', '', '', '', ''),
(3, '11.30 am - 2.30 pm', '', '', '', ''),
(7, '253', 'Bashundhara', '', '', ''),
(8, '255', 'Mohakhali', '', '', ''),
(9, '256', 'Mohakhali', '', '', ''),
(10, 'Jumanji 2', 'Panthopath', '', '', ''),
(11, 'Godzilla', '266', '', '', ''),
(12, 'IT', '266', 'Mohakhali', '', ''),
(13, 'Dark knight', '250', 'Bashundhara', '11.30 am - 2.30 pm', ''),
(14, 'Joker', '260', 'Panthopath', '7 pm to 10 pm', '2020-05-13'),
(15, '8', '268', 'Bashundhara', '11.30 am - 2.30 pm', '2020-05-27'),
(16, ' Game', '255', 'Bashundhara', '11.30 am - 2.30 pm', '2020-05-13'),
(17, ' Game', '250', 'Bashundhara', '11.30 am - 2.30 pm', '2020-05-27'),
(18, ' Game', '250', 'Bashundhara', '11.30 am - 2.30 pm', '2020-05-20'),
(19, ' Game', '250', 'Bashundhara', '11.30 am - 2.30 pm', '2020-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `test2`
--

CREATE TABLE `test2` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `time` varchar(300) NOT NULL,
  `date` varchar(200) NOT NULL,
  `seats` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addadmin`
--
ALTER TABLE `addadmin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `addmovie`
--
ALTER TABLE `addmovie`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `m_name` (`m_name`);

--
-- Indexes for table `addmovietiming`
--
ALTER TABLE `addmovietiming`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `jobpost`
--
ALTER TABLE `jobpost`
  ADD PRIMARY KEY (`j_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test2`
--
ALTER TABLE `test2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addadmin`
--
ALTER TABLE `addadmin`
  MODIFY `a_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `addmovie`
--
ALTER TABLE `addmovie`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `addmovietiming`
--
ALTER TABLE `addmovietiming`
  MODIFY `m_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobpost`
--
ALTER TABLE `jobpost`
  MODIFY `j_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
