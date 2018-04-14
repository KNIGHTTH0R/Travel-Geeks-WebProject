-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2018 at 10:54 PM
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
(2, 'abc', 'abc@gmail.com', 'bd', NULL, 'male', 'Far', 'Ras', 'uploads/11-8-bit-pixel-character.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
