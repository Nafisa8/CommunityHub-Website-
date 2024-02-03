-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: studentdb-maria.gl.umbc.edu
-- Generation Time: Nov 15, 2023 at 08:13 PM
-- Server version: 10.6.15-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nafisae1`
--

-- --------------------------------------------------------

--
-- Table structure for table `commentTable`
--

CREATE TABLE `commentTable` (
  `comment_id` int(11) NOT NULL,
  `comment` char(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `commentTable`
--

INSERT INTO `commentTable` (`comment_id`, `comment`) VALUES
(1, 'Great'),
(2, 'Good work'),
(8, 'I like your profile'),
(9, ''),
(10, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commentTable`
--
ALTER TABLE `commentTable`
  ADD PRIMARY KEY (`comment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commentTable`
--
ALTER TABLE `commentTable`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
