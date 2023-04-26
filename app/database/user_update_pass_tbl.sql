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
-- Table structure for table `user_update_pass_tbl`
--

CREATE TABLE `user_update_pass_tbl` (
  `uupt_id` int(6) NOT NULL,
  `uupt_email` varchar(50) NOT NULL,
  `uupt_verification_link` varchar(255) NOT NULL,
  `uupt_create_time` varchar(20) NOT NULL,
  `uupt_create_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_update_pass_tbl`
--

INSERT INTO `user_update_pass_tbl` (`uupt_id`, `uupt_email`, `uupt_verification_link`, `uupt_create_time`, `uupt_create_date`) VALUES
(1, 'keyton.avari@aladeen.org', '', '', ''),
(2, 'rutger.kaemon@aladeen.org', '', '', ''),
(3, 'selah.zaahir@aladeen.org', '', '', ''),
(4, 'seth.torion@aladeen.org', '', '', ''),
(5, 'rhett.murat@aladeen.org', '', '', ''),
(6, 'efthimios.malachy@aladeen.org', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_update_pass_tbl`
--
ALTER TABLE `user_update_pass_tbl`
  ADD PRIMARY KEY (`uupt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_update_pass_tbl`
--
ALTER TABLE `user_update_pass_tbl`
  MODIFY `uupt_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
