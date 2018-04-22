-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2018 at 08:54 AM
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
  `Text` text NOT NULL,
  `season` varchar(20) NOT NULL,
  `content_type` varchar(20) NOT NULL,
  `similar_places` varchar(20) NOT NULL,
  `spot_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_content`
--

INSERT INTO `post_content` (`POST_ID`, `user_id`, `Text`, `season`, `content_type`, `similar_places`, `spot_id`) VALUES
(1, 1, '', 'Spring', 'Review', '2', 1);

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
(1, 'Puran Dhaka', 'Architecture ', 1, 'bla bla bla', 'puran dhaka', 2, 'images/purandhaka.jpg'),
(2, 'Louvre Museum', 'Architecture', 1, 'Museum of Art', 'Paris', 0, 'images/louvre.jpg'),
(3, 'Coxs Bazar', 'Natural', 2, 'Largest sea beach in the world', 'Bangladesh', 1, 'images/cox.jpg'),
(4, 'Pantheon', 'Religious', 3, 'Old Roman Temple currently a church.', 'Rome,Italy', 2, 'images/pantheon.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(12) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(12) NOT NULL,
  `dob` varchar(250) DEFAULT NULL,
  `gender` varchar(6) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Lastname` varchar(250) NOT NULL,
  `ImageAddress` varchar(250) DEFAULT NULL,
  `Role` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='this is user lul';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `password`, `email`, `address`, `dob`, `gender`, `Name`, `Lastname`, `ImageAddress`, `Role`) VALUES
(2, '900150983cd24fb0d6963f7d28e17f72', 'abc@gmail.com', 'bd', NULL, 'male', 'Far', 'Ras', 'uploads/11-8-bit-pixel-character.jpg', 'admin'),
(3, '289dff07669d7a23de0ef88d2f7129e7', 'qwe@g.com', 'ghana', NULL, 'female', 'qwe', 'asd', 'uploads/ffff.jpg', 'user'),
(6, '4d682ec4eed27c53849758bc13b6e179', 'ts@gmail.com', 'Dhaka ', NULL, 'male', 'Tanvir', 'Shuvo', 'uploads/30653007_2045268288822036_1675620596488077312_o.jpg', 'user'),
(9, '202cb962ac59075b964b07152d234b70', '123@c.com', '123', '2018-04-04', 'male', '123', '123', 'uploads/sfweweee.JPG', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post_content`
--
ALTER TABLE `post_content`
  ADD PRIMARY KEY (`POST_ID`);

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
  MODIFY `spot_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
