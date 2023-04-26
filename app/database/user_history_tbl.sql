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
-- Table structure for table `user_history_tbl`
--

CREATE TABLE `user_history_tbl` (
  `uht_id` int(6) NOT NULL,
  `uht_uat_sender_id` int(6) NOT NULL,
  `uht_uat_receiver_id` int(6) NOT NULL,
  `uht_sender_id` varchar(255) NOT NULL,
  `uht_receiver_id` varchar(255) NOT NULL,
  `uht_reference_no` varchar(255) NOT NULL,
  `uht_amount_to_send` double(23,2) NOT NULL,
  `uht_create_time` varchar(20) NOT NULL,
  `uht_create_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_history_tbl`
--

INSERT INTO `user_history_tbl` (`uht_id`, `uht_uat_sender_id`, `uht_uat_receiver_id`, `uht_sender_id`, `uht_receiver_id`, `uht_reference_no`, `uht_amount_to_send`, `uht_create_time`, `uht_create_date`) VALUES
(1, 1, 2, 'keytonavari1', 'rutgerkaemon2', '467626403741', 10.00, '10:16:07:am', '17/09/2022'),
(2, 1, 2, 'keytonavari1', 'rutgerkaemon2', '502757461163', 2.00, '10:16:18:am', '17/09/2022'),
(3, 2, 1, 'rutgerkaemon2', 'keytonavari1', '492154660494', 2.00, '10:21:30:am', '17/09/2022'),
(4, 2, 1, 'rutgerkaemon2', 'keytonavari1', '956050156128', 3.00, '10:21:38:am', '17/09/2022'),
(5, 2, 1, 'rutgerkaemon2', 'keytonavari1', '950909218544', 7.00, '10:21:46:am', '17/09/2022'),
(6, 1, 2, 'keytonavari1', 'rutgerkaemon2', '278409511482', 150.00, '10:26:06:am', '17/09/2022'),
(7, 3, 1, 'selahzaahir3', 'keytonavari1', '146682113708', 10.00, '10:33:23:am', '17/09/2022'),
(8, 1, 2, 'keytonavari1', 'rutgerkaemon2', '635140386300', 60.00, '11:02:41:am', '17/09/2022'),
(9, 1, 3, 'keytonavari1', 'selahzaahir3', '663806835029', 300.00, '11:14:20:am', '17/09/2022'),
(10, 3, 1, 'selahzaahir3', 'keytonavari1', '749196060184', 290.00, '11:16:24:am', '17/09/2022'),
(11, 2, 1, 'rutgerkaemon2', 'keytonavari1', '970869288856', 210.00, '10:22:23:am', '22/09/2022'),
(12, 1, 2, 'keytonavari1', 'rutgerkaemon2', '365094856882', 0.00, '3:56:32:pm', '22/09/2022');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_history_tbl`
--
ALTER TABLE `user_history_tbl`
  ADD PRIMARY KEY (`uht_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_history_tbl`
--
ALTER TABLE `user_history_tbl`
  MODIFY `uht_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
