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
-- Table structure for table `user_personal_details_tbl`
--

CREATE TABLE `user_personal_details_tbl` (
  `updt_id` int(6) NOT NULL,
  `updt_uat_id` int(6) NOT NULL,
  `updt_first_name` varchar(50) NOT NULL,
  `updt_middle_name` varchar(50) NOT NULL,
  `updt_last_name` varchar(50) NOT NULL,
  `updt_birthdate` varchar(20) NOT NULL,
  `updt_gender` varchar(20) NOT NULL,
  `updt_address1` varchar(255) NOT NULL,
  `updt_address2` varchar(255) NOT NULL,
  `updt_baranggay` varchar(255) NOT NULL,
  `updt_region` varchar(50) NOT NULL,
  `updt_province` varchar(50) NOT NULL,
  `updt_municipalities` varchar(50) NOT NULL,
  `updt_postal` int(6) NOT NULL,
  `updt_country` varchar(50) NOT NULL,
  `updt_gift` tinyint(1) NOT NULL,
  `updt_etnebID` varchar(50) NOT NULL,
  `updt_front_id` varchar(255) NOT NULL,
  `updt_back_id` varchar(255) NOT NULL,
  `updt_create_time` varchar(20) NOT NULL,
  `updt_create_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_personal_details_tbl`
--

INSERT INTO `user_personal_details_tbl` (`updt_id`, `updt_uat_id`, `updt_first_name`, `updt_middle_name`, `updt_last_name`, `updt_birthdate`, `updt_gender`, `updt_address1`, `updt_address2`, `updt_baranggay`, `updt_region`, `updt_province`, `updt_municipalities`, `updt_postal`, `updt_country`, `updt_gift`, `updt_etnebID`, `updt_front_id`, `updt_back_id`, `updt_create_time`, `updt_create_date`) VALUES
(1, 1, 'keyton', 'weak', 'avari', '2000-01-01', 'Male', 'blk 1 lot 1', 'N/A', 'Kaypian', 'Region III', 'Bulacan', 'City of San Jose Del Monte', 3023, 'Philippines', 1, 'keytonavari1', '', '', '9:43:09:am', '17/09/2022'),
(2, 2, 'rutger', 'grey', 'kaemon', '1999-06-10', 'Male', 'blk 2 lot 2', 'N/A', 'Kaypian', 'Region III', 'Bulacan', 'City of San Jose Del Monte', 3023, 'Philippines', 1, 'rutgerkaemon2', '', '', '9:45:01:am', '17/09/2022'),
(3, 3, 'selah', 'scott', 'zaahir', '1998-06-05', 'Male', 'blk 3 lot 3', 'N/A', 'Kaypian', 'Region III', 'Bulacan', 'City of San Jose Del Monte', 3023, 'Philippines', 1, 'selahzaahir3', '', '', '10:33:14:am', '17/09/2022');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_personal_details_tbl`
--
ALTER TABLE `user_personal_details_tbl`
  ADD PRIMARY KEY (`updt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_personal_details_tbl`
--
ALTER TABLE `user_personal_details_tbl`
  MODIFY `updt_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
