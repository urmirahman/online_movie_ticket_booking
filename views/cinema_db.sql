-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2020 at 10:01 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingtable`
--

CREATE TABLE `bookingtable` (
  `bookingID` int(11) NOT NULL,
  `movieName` varchar(100) DEFAULT NULL,
  `bookingTheatre` varchar(100) NOT NULL,
  `bookingType` varchar(100) DEFAULT NULL,
  `bookingDate` varchar(50) NOT NULL,
  `bookingTime` varchar(50) NOT NULL,
  `bookingPNumber` varchar(12) NOT NULL,
  `seat` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `movietable`
--

CREATE TABLE `movietable` (
  `movieID` int(11) NOT NULL,
  `movieImg` varchar(150) NOT NULL,
  `movieTitle` varchar(100) NOT NULL,
  `movieGenre` varchar(50) NOT NULL,
  `movieDuration` int(11) NOT NULL,
  `movieRelDate` date NOT NULL,
  `movieDirector` varchar(50) NOT NULL,
  `movieActors` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movietable`
--

INSERT INTO `movietable` (`movieID`, `movieImg`, `movieTitle`, `movieGenre`, `movieDuration`, `movieRelDate`, `movieDirector`, `movieActors`) VALUES
(1, 'img/movie-poster-1.jpg', 'Aguner Poroshmoni', 'History', 132, '1994-05-10', 'Humayun Ahmed', 'Asaduzzaman Noor, Bipasha Hayat, Shila Ahmed, Abul Hayat, Doli Johur, Dilara Zaman'),
(2, 'img/movie-poster-2.jpg', 'Joyjatra', 'History', 119, '2004-11-15', 'Touqir Ahmed', 'Mahfuz Ahmed, Azizul Hakim, Bipasha Hayat'),
(3, 'img/movie-poster-3.jpg', 'Shyamol Chhaya', 'History', 110, '2005-12-16', 'Humayun Ahmed', 'Humayun Faridi, Tania Ahmed, Shimul, Riaz, Shaon, Shadhin Khasru'),
(4, 'img/movie-poster-4.jpg', 'Srabon Megher Din', 'History', 150, '2000-01-01', 'Humayun Ahmed', 'Zahid Hasan, Mahfuz Ahmed, Meher Afroz Shaon, Mukti, Anwara, Golam Mustafa, Saleh Ahmed'),
(5, 'img/movie-poster-5.jpg', 'Amar Bondhu Rashed', 'History', 132, '2011-04-01', 'Morshedul Islam', 'Raisul Islam Asad, Chowdhury Zawata Afnan, Rayan Ibtesham Chowdhury, Reafaet Zinnat'),
(6, 'img/movie-poster-6.jpg', 'Guerrilla', 'History', 140, '2011-04-14', 'Nasiruddin Yousuff', 'Joya Ahsan, Ferdous Ahmed, Shampa Reza, Ahmed Rubel, A.T.M. Shamsuzzaman');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`) VALUES
('', '', ''),
('abc', 'learnx@yahoo.com', '123'),
('assikuzzaman', 'assikuzzaman@yahoo.com', '123'),
('xyz', 'learnx@yahoo.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingtable`
--
ALTER TABLE `bookingtable`
  ADD UNIQUE KEY `bookingID` (`bookingID`),
  ADD KEY `bookingID_2` (`bookingID`),
  ADD KEY `bookingID_3` (`bookingID`),
  ADD KEY `bookingID_4` (`bookingID`);

--
-- Indexes for table `movietable`
--
ALTER TABLE `movietable`
  ADD PRIMARY KEY (`movieID`),
  ADD UNIQUE KEY `movieID` (`movieID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingtable`
--
ALTER TABLE `bookingtable`
  MODIFY `bookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `movietable`
--
ALTER TABLE `movietable`
  MODIFY `movieID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
