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
-- Table structure for table `user_balance_tbl`
--

CREATE TABLE `user_balance_tbl` (
  `ubt_id` int(6) NOT NULL,
  `ubt_uat_id` int(6) NOT NULL,
  `ubt_balance` double(23,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_balance_tbl`
--

INSERT INTO `user_balance_tbl` (`ubt_id`, `ubt_uat_id`, `ubt_balance`) VALUES
(1, 1, 500.00),
(2, 2, 500.00),
(3, 3, 500.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_balance_tbl`
--
ALTER TABLE `user_balance_tbl`
  ADD PRIMARY KEY (`ubt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_balance_tbl`
--
ALTER TABLE `user_balance_tbl`
  MODIFY `ubt_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
