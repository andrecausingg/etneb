-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 02:29 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etneb_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `region_tbl`
--

CREATE TABLE `region_tbl` (
  `region_id` int(6) NOT NULL,
  `code` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `region_name` varchar(50) NOT NULL,
  `island_group_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `region_tbl`
--

INSERT INTO `region_tbl` (`region_id`, `code`, `name`, `region_name`, `island_group_code`) VALUES
(1, 10000000, 'Ilocos Region', 'Region I', 'luzon'),
(2, 20000000, 'Cagayan Valley', 'Region II', 'luzon'),
(3, 30000000, 'Central Luzon', 'Region III', 'luzon'),
(4, 40000000, 'CALABARZON', 'Region IV-A', 'luzon'),
(5, 170000000, 'MIMAROPA Region', 'MIMAROPA Region', 'luzon'),
(6, 50000000, 'Bicol Region', 'Region V', 'luzon'),
(7, 60000000, 'Western Visayas', 'Region VI', 'visayas'),
(8, 70000000, 'Central Visayas', 'Region VII', 'visayas'),
(9, 80000000, 'Eastern Visayas', 'Region VIII', 'visayas'),
(10, 90000000, 'Zamboanga Peninsula', 'Region IX', 'mindanao'),
(11, 100000000, 'Northern Mindanao', 'Region X', 'mindanao'),
(12, 110000000, 'Davao Region', 'Region XI', 'mindanao'),
(13, 120000000, 'SOCCSKSARGEN', 'Region XII', 'mindanao'),
(14, 130000000, 'NCR', 'National Capital Region', 'luzon'),
(15, 140000000, 'CAR', 'Cordillera Administrative Region', 'luzon'),
(16, 160000000, 'Caraga', 'Region XIII', 'mindanao'),
(17, 150000000, 'BARMM', 'Bangsamoro Autonomous Region in Muslim Mindanao', 'mindanao');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `region_tbl`
--
ALTER TABLE `region_tbl`
  ADD PRIMARY KEY (`region_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `region_tbl`
--
ALTER TABLE `region_tbl`
  MODIFY `region_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
