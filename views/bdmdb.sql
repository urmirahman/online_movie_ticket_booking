-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2020 at 08:49 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdmdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `food_post`
--

CREATE TABLE `food_post` (
  `f_id` int(5) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `f_branch` varchar(50) NOT NULL,
  `f_offer` varchar(250) NOT NULL,
  `f_description` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_post`
--

INSERT INTO `food_post` (`f_id`, `f_name`, `f_branch`, `f_offer`, `f_description`) VALUES
(2, 'Pizza', 'Kuril', '825', 'SDfghjkl\r\nSdfghjkl\r\nRTYuiop');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `m_id` int(5) NOT NULL,
  `m_name` varchar(60) NOT NULL,
  `m_desc` text NOT NULL,
  `m_rating` float NOT NULL DEFAULT '0',
  `m_thumb` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`m_id`, `m_name`, `m_desc`, `m_rating`, `m_thumb`) VALUES
(3, 'Avengers Endgame', 'gfhbjkmllfdhgfcvghbnmklh sdgsdjgskjdgsjdf dfasfsfdafa', 8.4, 'uploads/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_UX182_CR0,0,182,268_AL_.jpg'),
(5, 'Avengers Infinity War', 'The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation and ruin puts an end to the universe.', 8.5, 'uploads/MV5BMjMxNjY2MDU1OV5BMl5BanBnXkFtZTgwNzY1MTUwNTM@._V1_SY1000_CR0,0,674,1000_AL_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `movie_time`
--

CREATE TABLE `movie_time` (
  `mt_id` int(5) NOT NULL,
  `m_id` int(5) NOT NULL,
  `mt_date` varchar(20) NOT NULL,
  `mt_time` varchar(15) NOT NULL,
  `mt_tickets` int(3) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie_time`
--

INSERT INTO `movie_time` (`mt_id`, `m_id`, `mt_date`, `mt_time`, `mt_tickets`) VALUES
(1, 3, '2020-04-21', '13:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food_post`
--
ALTER TABLE `food_post`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `movie_time`
--
ALTER TABLE `movie_time`
  ADD PRIMARY KEY (`mt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food_post`
--
ALTER TABLE `food_post`
  MODIFY `f_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `m_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
