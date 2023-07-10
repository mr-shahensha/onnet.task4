-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2023 at 02:26 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task3`
--

-- --------------------------------------------------------

--
-- Table structure for table `stud_details`
--

CREATE TABLE `stud_details` (
  `sl` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `class` int(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `roll` int(11) NOT NULL,
  `current_year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stud_details`
--

INSERT INTO `stud_details` (`sl`, `name`, `class`, `section`, `roll`, `current_year`) VALUES
(1, 'dhoni', 8, 'a', 1, 2021),
(2, 'shahensha', 13, 'a', 5, 2022),
(3, 'rima', 7, 'c', 11, 2022);

-- --------------------------------------------------------

--
-- Table structure for table `stud_history`
--

CREATE TABLE `stud_history` (
  `sl` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `section` varchar(255) NOT NULL,
  `roll` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stud_history`
--

INSERT INTO `stud_history` (`sl`, `sid`, `class`, `section`, `roll`, `year`) VALUES
(1, 1, 7, 'a', 7, 2020),
(2, 1, 8, 'a', 1, 2021),
(3, 2, 12, 'd', 50, 2021),
(4, 2, 13, 'a', 5, 2022),
(5, 3, 6, 'd', 14, 2021),
(6, 3, 7, 'c', 11, 2022);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stud_details`
--
ALTER TABLE `stud_details`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `stud_history`
--
ALTER TABLE `stud_history`
  ADD PRIMARY KEY (`sl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stud_details`
--
ALTER TABLE `stud_details`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stud_history`
--
ALTER TABLE `stud_history`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
