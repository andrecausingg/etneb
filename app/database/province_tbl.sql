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
-- Table structure for table `province_tbl`
--

CREATE TABLE `province_tbl` (
  `province_id` int(6) NOT NULL,
  `code` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `region_code` int(50) NOT NULL,
  `island_group_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `province_tbl`
--

INSERT INTO `province_tbl` (`province_id`, `code`, `name`, `region_code`, `island_group_code`) VALUES
(1, 12800000, 'Ilocos Norte', 10000000, 'luzon'),
(2, 12900000, 'Ilocos Sur', 10000000, 'luzon'),
(3, 13300000, 'La Union', 10000000, 'luzon'),
(4, 15500000, 'Pangasinan', 10000000, 'luzon'),
(5, 20900000, 'Batanes', 20000000, 'luzon'),
(6, 21500000, 'Cagayan', 20000000, 'luzon'),
(7, 23100000, 'Isabela', 20000000, 'luzon'),
(8, 25000000, 'Nueva Vizcaya', 20000000, 'luzon'),
(9, 25700000, 'Quirino', 20000000, 'luzon'),
(10, 30800000, 'Bataan', 30000000, 'luzon'),
(11, 31400000, 'Bulacan', 30000000, 'luzon'),
(12, 34900000, 'Nueva Ecija', 30000000, 'luzon'),
(13, 35400000, 'Pampanga', 30000000, 'luzon'),
(14, 36900000, 'Tarlac', 30000000, 'luzon'),
(15, 37100000, 'Zambales', 30000000, 'luzon'),
(16, 37700000, 'Aurora', 30000000, 'luzon'),
(17, 41000000, 'Batangas', 40000000, 'luzon'),
(18, 42100000, 'Cavite', 40000000, 'luzon'),
(19, 43400000, 'Laguna', 40000000, 'luzon'),
(20, 45600000, 'Quezon', 40000000, 'luzon'),
(21, 45800000, 'Rizal', 40000000, 'luzon'),
(22, 174000000, 'Marinduque', 170000000, 'luzon'),
(23, 175100000, 'Occidental Mindoro', 170000000, 'luzon'),
(24, 175200000, 'Oriental Mindoro', 170000000, 'luzon'),
(25, 175300000, 'Palawan', 170000000, 'luzon'),
(26, 175900000, 'Romblon', 170000000, 'luzon'),
(27, 50500000, 'Albay', 50000000, 'luzon'),
(28, 51600000, 'Camarines Norte', 50000000, 'luzon'),
(29, 51700000, 'Camarines Sur', 50000000, 'luzon'),
(30, 52000000, 'Catanduanes', 50000000, 'luzon'),
(31, 54100000, 'Masbate', 50000000, 'luzon'),
(32, 56200000, 'Sorsogon', 50000000, 'luzon'),
(33, 60400000, 'Aklan', 60000000, 'visayas'),
(34, 60600000, 'Antique', 60000000, 'visayas'),
(35, 61900000, 'Capiz', 60000000, 'visayas'),
(36, 63000000, 'Iloilo', 60000000, 'visayas'),
(37, 64500000, 'Negros Occidental', 60000000, 'visayas'),
(38, 67900000, 'Guimaras', 60000000, 'visayas'),
(39, 71200000, 'Bohol', 70000000, 'visayas'),
(40, 72200000, 'Cebu', 70000000, 'visayas'),
(41, 74600000, 'Negros Oriental', 70000000, 'visayas'),
(42, 76100000, 'Siquijor', 70000000, 'visayas'),
(43, 82600000, 'Eastern Samar', 80000000, 'visayas'),
(44, 83700000, 'Leyte', 80000000, 'visayas'),
(45, 84800000, 'Northern Samar', 80000000, 'visayas'),
(46, 86000000, 'Samar', 80000000, 'visayas'),
(47, 86400000, 'Southern Leyte', 80000000, 'visayas'),
(48, 87800000, 'Biliran', 80000000, 'visayas'),
(49, 97200000, 'Zamboanga Del Norte', 90000000, 'mindanao'),
(50, 97300000, 'Zamboanga Del Sur', 90000000, 'mindanao'),
(51, 98300000, 'Zamboanga Sibugay', 90000000, 'mindanao'),
(52, 101300000, 'Bukidnon', 100000000, 'mindanao'),
(53, 101800000, 'Camiguin', 100000000, 'mindanao'),
(54, 103500000, 'Lanao Del Norte', 100000000, 'mindanao'),
(55, 104200000, 'Misamis Occidental', 100000000, 'mindanao'),
(56, 104300000, 'Misamis Oriental', 100000000, 'mindanao'),
(57, 112300000, 'Davao Del Norte', 110000000, 'mindanao'),
(58, 112400000, 'Davao Del Sur', 110000000, 'mindanao'),
(59, 112500000, 'Davao Oriental', 110000000, 'mindanao'),
(60, 118200000, 'Davao De Oro', 110000000, 'mindanao'),
(61, 118600000, 'Davao Occidental', 110000000, 'mindanao'),
(62, 124700000, 'Cotabato', 120000000, 'mindanao'),
(63, 126300000, 'South Cotabato', 120000000, 'mindanao'),
(64, 126500000, 'Sultan Kudarat', 120000000, 'mindanao'),
(65, 128000000, 'Sarangani', 120000000, 'mindanao'),
(66, 140100000, 'Abra', 140000000, 'luzon'),
(67, 141100000, 'Benguet', 140000000, 'luzon'),
(68, 142700000, 'Ifugao', 140000000, 'luzon'),
(69, 143200000, 'Kalinga', 140000000, 'luzon'),
(70, 144400000, 'Mountain Province', 140000000, 'luzon'),
(71, 148100000, 'Apayao', 140000000, 'luzon'),
(72, 160200000, 'Agusan Del Norte', 160000000, 'mindanao'),
(73, 160300000, 'Agusan Del Sur', 160000000, 'mindanao'),
(74, 166700000, 'Surigao Del Norte', 160000000, 'mindanao'),
(75, 166800000, 'Surigao Del Sur', 160000000, 'mindanao'),
(76, 168500000, 'Dinagat Islands', 160000000, 'mindanao'),
(77, 150700000, 'Basilan', 150000000, 'mindanao'),
(78, 153600000, 'Lanao Del Sur', 150000000, 'mindanao'),
(79, 153800000, 'Maguindanao', 150000000, 'mindanao'),
(80, 156600000, 'Sulu', 150000000, 'mindanao'),
(81, 157000000, 'Tawi-Tawi', 150000000, 'mindanao');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `province_tbl`
--
ALTER TABLE `province_tbl`
  ADD PRIMARY KEY (`province_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `province_tbl`
--
ALTER TABLE `province_tbl`
  MODIFY `province_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
