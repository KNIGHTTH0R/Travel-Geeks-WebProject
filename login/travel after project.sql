-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2018 at 10:05 PM
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
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(20) NOT NULL,
  `country_name` varchar(200) NOT NULL,
  `country_flag_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`, `country_flag_image`) VALUES
(1, 'Bangladesh', 'images/flags/bangladesh.jpg'),
(2, 'France', 'images/flags/france.jpg'),
(3, 'Italy', 'images/flags/italy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `Event_id` int(12) NOT NULL,
  `Event_name` varchar(250) NOT NULL,
  `Description` text NOT NULL,
  `suggested_season` varchar(50) DEFAULT NULL,
  `spot_name` varchar(250) NOT NULL,
  `event_imageloc` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`Event_id`, `Event_name`, `Description`, `suggested_season`, `spot_name`, `event_imageloc`) VALUES
(1, 'Sakhrain', 'ghuri urai', 'Summer', 'Puran Dhaka', 'images/sakhrain.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `post_content`
--

CREATE TABLE `post_content` (
  `POST_ID` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
  `Text` varchar(500) NOT NULL,
  `season` varchar(20) NOT NULL,
  `content_type` varchar(20) NOT NULL,
  `similar_places` varchar(20) NOT NULL,
  `postimage` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_content`
--

INSERT INTO `post_content` (`POST_ID`, `user_id`, `Text`, `season`, `content_type`, `similar_places`, `postimage`) VALUES
(5, 2, 'Had fun at coxs bazar, pretty nice.', 'Summer', 'Review', ' Coxs Bazar', 'uploads/cox.jpg'),
(6, 2, 'dhaka is puran', 'Summer', 'Review', ' Puran Dhaka', 'uploads/purandhaka.jpg'),
(7, 2, 'very nyc lagva', 'Summer', 'Review', ' Coxs Bazar', 'uploads/cox.jpg'),
(8, 2, 'very nyc lagva2', 'Summer', 'Review', ' Coxs Bazar', 'uploads/cox.jpg'),
(9, 2, 'very nyc lagca na?~!!?~ 21', 'Summer', 'Review', ' Coxs Bazar', 'uploads/cox.jpg'),
(10, 10, 'I love strawberries ', 'Summer', 'shitposting', ' Louvre Museum', 'uploads/jerry.jpg'),
(11, 10, 'xdfrtdfgdfg', 'Summer', 'cvvbhcvbcvf', ' Coxs Bazar', 'uploads/back2.jpg'),
(12, 2, 'Hi all test', 'Summer', 'Cityscape', ' Puran Dhaka', 'uploads/back4.jpg'),
(13, 6, 'Hi everyone. pls pack your bag.', 'Fall', 'TIPS', ' Puran Dhaka', 'uploads/19424373_10213116131439585_2503950857052617730_n.jpg'),
(14, 6, 'Hi everyone this is my first post, hope every one is fine. please dont forget to take your bus tickets lol', 'Summer', 'TIPS', ' Puran Dhaka', 'uploads/26239123_10155977006264666_7776418516219798162_n.jpg'),
(15, 6, 'Nothing At all', 'N/A', 'None', 'None', 'uploads/qwwa.JPG'),
(16, 2, 'ggwp', 'N/A', 'abstract', 'None', 'uploads/xfsss.JPG'),
(17, 2, 'hi', 'N/A', 'post', 'None', 'uploads/unity.JPG');

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
  `description` text NOT NULL,
  `address` text NOT NULL,
  `country` varchar(250) DEFAULT NULL,
  `suggested_season` varchar(50) DEFAULT NULL,
  `imageloc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tourist_spot`
--

INSERT INTO `tourist_spot` (`spot_id`, `name`, `type`, `description`, `address`, `country`, `suggested_season`, `imageloc`) VALUES
(1, 'Puran Dhaka', 'Architecture ', '                      Oldest dhaka in dhaka new img                                                                        ', 'puran dhaka', 'Bangladesh', 'Summer', 'uploads/purandhaka.jpg'),
(2, 'Louvre Museum', 'Architecture', '  Museum of Art        2', 'Paris', 'France', 'Spring', 'images/louvre.jpg'),
(3, 'Coxs Bazar', 'Natural', '  Largest sea beach in the world        ', 'Bangladesh', 'Bangladesh', 'Summer', 'images/cox.jpg'),
(4, 'Pantheon', 'Religious', 'Old Roman Temple currently a church.', 'Rome,Italy', 'Italy', 'Winter', 'images/pantheon.jpg'),
(5, 'Bandarban', 'Natural', ' nyc place', 'Chittagong', 'Bangladesh', 'Winter', 'uploads/back2.jpg'),
(6, 'Colloseum', 'Architecture', 'Incredible place to visit, historical place.', 'Rome,Italy', 'Italy', 'Winter', 'uploads/Colloseum.jpg'),
(7, 'Eiffel Tower', 'Architecture', 'Beautiful place, romantic place....       ', 'France', 'France', 'Summer', 'uploads/Eiffel.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(12) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(12) NOT NULL,
  `country` varchar(50) DEFAULT NULL,
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

INSERT INTO `users` (`user_id`, `password`, `email`, `address`, `country`, `dob`, `gender`, `Name`, `Lastname`, `ImageAddress`, `Role`) VALUES
(2, '900150983cd24fb0d6963f7d28e17f72', 'abc@gmail.com', 'Bangladesh', 'Bangladesh', '2018-04-03', 'male', 'Far', 'Ras', 'uploads/11-8-bit-pixel-character.jpg', 'admin'),
(3, 'd41d8cd98f00b204e9800998ecf8427e', 'qwe@g.com', 'wakanda', 'Lothric', '2018-05-01', 'female', 'qwe', 'asd', 'uploads/ffff.jpg', 'user'),
(6, '4d682ec4eed27c53849758bc13b6e179', 'ts@gmail.com', 'Dhaka ', 'Bangladesh', '2018-04-04', 'male', 'Tanvir', 'Shuvo', 'uploads/30653007_2045268288822036_1675620596488077312_o.jpg', 'user'),
(9, '202cb962ac59075b964b07152d234b70', '123@c.com', '123', 'Naboo', '2018-04-04', 'male', '123', '123', 'uploads/sfweweee.JPG', 'user'),
(10, '900150983cd24fb0d6963f7d28e17f72', 'Abacus@gmail.com', 'Italy', 'Italy', '2018-04-04', 'male', 'Abacus', 'cc', 'uploads/sz2my9jlzcr01.jpg', 'user'),
(11, '0cc175b9c0f1b6a831c399e269772661', 'Abacus2@gmail.com', 'Mirpur', 'Noxus', '2014-06-17', 'male', 'Abacus', 'KingTwo', 'uploads/041.jpg', 'user'),
(12, 'd41d8cd98f00b204e9800998ecf8427e', 'Abacus3@gmail.com', 'uk', 'malaysia', '2018-04-01', 'male', 'Abacus', 'three', 'uploads/oldswain.JPG', 'user'),
(14, '74d5ee8d9e9c1659bf3ee0c3b9838adb', 'kz@gmail.com', 'abc', 'abc', '2018-04-03', 'male', 'mahin', 'kazi', 'uploads/sgsdd.JPG', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`Event_id`);

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
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `Event_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post_content`
--
ALTER TABLE `post_content`
  MODIFY `POST_ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `spot_types`
--
ALTER TABLE `spot_types`
  MODIFY `typeid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tourist_spot`
--
ALTER TABLE `tourist_spot`
  MODIFY `spot_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
