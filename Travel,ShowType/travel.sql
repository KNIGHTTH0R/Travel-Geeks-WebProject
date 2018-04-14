-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2018 at 05:02 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `Event_id` int(12) NOT NULL,
  `Event_name` varchar(250) NOT NULL,
  `Description` text NOT NULL,
  `pref_season_id` int(12) NOT NULL,
  `spot_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`Event_id`, `Event_name`, `Description`, `pref_season_id`, `spot_id`) VALUES
(1, 'Sakhrain', 'ghuri urai', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `post_content`
--

CREATE TABLE `post_content` (
  `POST_ID` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
  `season` varchar(20) NOT NULL,
  `content_type` varchar(20) NOT NULL,
  `similar_places` varchar(20) NOT NULL,
  `spot_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_content`
--

INSERT INTO `post_content` (`POST_ID`, `user_id`, `season`, `content_type`, `similar_places`, `spot_id`) VALUES
(1, 1, 'Spring', 'Review', '2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `preffered_season`
--

CREATE TABLE `preffered_season` (
  `Pref_season_id` int(12) NOT NULL,
  `spot_id` int(12) NOT NULL,
  `events_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `spot_types`
--

CREATE TABLE `spot_types` (
  `typeid` int(20) NOT NULL,
  `Type` varchar(250) NOT NULL,
  `imagelocation` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spot_types`
--

INSERT INTO `spot_types` (`typeid`, `Type`, `imagelocation`) VALUES
(1, 'Architecture', 'images/archi.jpg'),
(2, 'Natural', 'images/natural.jpg'),
(3, 'Religious', 'images/religion.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tourist_spot`
--

CREATE TABLE `tourist_spot` (
  `spot_id` int(12) NOT NULL,
  `name` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `type id` int(11) NOT NULL,
  `description` text NOT NULL,
  `address` text NOT NULL,
  `pref_season_id` int(12) NOT NULL,
  `imageloc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tourist_spot`
--

INSERT INTO `tourist_spot` (`spot_id`, `name`, `type`, `type id`, `description`, `address`, `pref_season_id`, `imageloc`) VALUES
(1, 'Puran Dhaka', 'City Architecture ', 0, 'bla bla bla', 'puran dhaka', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(12) NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(6) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Lastname` varchar(250) NOT NULL,
  `ImageAddress` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='this is user lul';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `password`, `email`, `address`, `dob`, `gender`, `Name`, `Lastname`, `ImageAddress`) VALUES
(1, 'alom', 'al@gmail.com', 'mirpur', '2000-01-08', 'male', 'Alom', '', ''),
(2, 'abc', 'abc@gmail.com', 'bd', NULL, 'male', 'Far', 'Ras', 'uploads/11-8-bit-pixel-character.jpg'),
(3, '234', 'qwe@g.com', 'ghana', NULL, 'female', 'qwe', 'asd', 'uploads/ffff.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `spot_types`
--
ALTER TABLE `spot_types`
  ADD PRIMARY KEY (`typeid`);

--
-- Indexes for table `tourist_spot`
--
ALTER TABLE `tourist_spot`
  ADD PRIMARY KEY (`spot_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `spot_types`
--
ALTER TABLE `spot_types`
  MODIFY `typeid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tourist_spot`
--
ALTER TABLE `tourist_spot`
  MODIFY `spot_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
