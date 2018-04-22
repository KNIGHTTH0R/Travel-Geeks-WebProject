-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2018 at 08:25 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `record`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `cgpa` float(3,2) NOT NULL,
  `dept` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `cgpa`, `dept`) VALUES
(1, 'abc', 3.90, 'CS'),
(2, 'xyz', 3.99, 'EEE'),
(3, 'asad', 4.00, 'CS'),
(4, 'raju', 4.00, 'BBA'),
(12, 'axyz', 2.55, 'CS'),
(13, '', 2.55, 'CS'),
(14, 'xyzaq', 2.55, 'CS'),
(9000, 'abc', 3.90, 'CS'),
(9001, 'abc', 3.90, 'CS'),
(9002, 'abc', 3.90, 'CS'),
(9003, 'abc', 3.90, 'CS'),
(9004, '', 3.40, 'CS'),
(9005, 'xyz', 3.99, 'EEE'),
(9006, '', 0.00, ''),
(9007, '', 0.00, ''),
(9008, 'SOS', 3.98, 'BBA'),
(9009, 'SOS', 3.98, 'BBA'),
(9010, 'SOS2', 3.99, 'CS'),
(9011, 'abacus', 3.99, 'EEE'),
(9012, 'abacus2', 3.99, 'EEE'),
(9013, '', 0.00, 'EEE'),
(9014, '', 0.00, 'EEE'),
(9015, '', 0.00, 'EEE'),
(9016, '', 0.00, 'EEE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9017;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
