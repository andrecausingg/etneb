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
-- Table structure for table `user_verification_tbl`
--

CREATE TABLE `user_verification_tbl` (
  `uvt_id` int(6) NOT NULL,
  `uvt_email` varchar(255) NOT NULL,
  `uvt_password` varchar(255) NOT NULL,
  `uvt_email_code` int(6) NOT NULL,
  `uvt_verified` tinyint(1) NOT NULL,
  `uvt_create_time` varchar(20) NOT NULL,
  `uvt_create_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_verification_tbl`
--

INSERT INTO `user_verification_tbl` (`uvt_id`, `uvt_email`, `uvt_password`, `uvt_email_code`, `uvt_verified`, `uvt_create_time`, `uvt_create_date`) VALUES
(1, 'keyton.avari@aladeen.org', 'keyton.avari@aladeen.org', 449078, 1, '9:41:27:am', '17/09/2022'),
(2, 'rutger.kaemon@aladeen.org', 'rutger.kaemon@aladeen.org', 867039, 1, '9:43:40:am', '17/09/2022'),
(3, 'selah.zaahir@aladeen.org', 'selah.zaahir@aladeen.org', 906962, 1, '10:32:03:am', '17/09/2022'),
(4, 'seth.torion@aladeen.org', 'seth.torion@aladeen.org', 451446, 1, '10:57:22:am', '18/09/2022'),
(5, 'rhett.murat@aladeen.org', 'rhett.murat@aladeen.org', 785874, 1, '10:58:37:am', '18/09/2022'),
(6, 'dayven.shariff@aladeen.org', 'dayven.shariff@aladeen.org', 995065, 0, '10:25:57:pm', '18/09/2022'),
(7, 'efthimios.malachy@aladeen.org', 'efthimios.malachy@aladeen.org', 159178, 1, '9:44:20:am', '22/09/2022');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_verification_tbl`
--
ALTER TABLE `user_verification_tbl`
  ADD PRIMARY KEY (`uvt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_verification_tbl`
--
ALTER TABLE `user_verification_tbl`
  MODIFY `uvt_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
