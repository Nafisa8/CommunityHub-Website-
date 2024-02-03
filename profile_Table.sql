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
-- Table structure for table `profile_Table`
--

CREATE TABLE `profile_Table` (
  `P_edit_ID` int(11) NOT NULL,
  `Name` varchar(11) NOT NULL,
  `About` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `profile_Table`
--

INSERT INTO `profile_Table` (`P_edit_ID`, `Name`, `About`) VALUES
(4, 'Andrea', 'I like my universe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile_Table`
--
ALTER TABLE `profile_Table`
  ADD PRIMARY KEY (`P_edit_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profile_Table`
--
ALTER TABLE `profile_Table`
  MODIFY `P_edit_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
