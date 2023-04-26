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
-- Table structure for table `cities_tbl`
--

CREATE TABLE `cities_tbl` (
  `cities_id` int(6) NOT NULL,
  `code` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `old_name` varchar(50) NOT NULL,
  `is_capital` tinyint(1) NOT NULL,
  `district_code` int(50) NOT NULL,
  `province_code` int(20) NOT NULL,
  `region_code` int(50) NOT NULL,
  `island_group_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities_tbl`
--

INSERT INTO `cities_tbl` (`cities_id`, `code`, `name`, `old_name`, `is_capital`, `district_code`, `province_code`, `region_code`, `island_group_code`) VALUES
(1, 12805000, 'City of Batac', '', 0, 0, 12800000, 10000000, 'luzon'),
(2, 12812000, 'City of Laoag', '', 1, 0, 12800000, 10000000, 'luzon'),
(3, 12906000, 'City of Candon', '', 0, 0, 12900000, 10000000, 'luzon'),
(4, 12934000, 'City of Vigan', '', 1, 0, 12900000, 10000000, 'luzon'),
(5, 13314000, 'City of San Fernando', '', 1, 0, 13300000, 10000000, 'luzon'),
(6, 15503000, 'City of Alaminos', '', 0, 0, 15500000, 10000000, 'luzon'),
(7, 15518000, 'City of Dagupan', '', 0, 0, 15500000, 10000000, 'luzon'),
(8, 15532000, 'City of San Carlos', '', 0, 0, 15500000, 10000000, 'luzon'),
(9, 15546000, 'City of Urdaneta', '', 0, 0, 15500000, 10000000, 'luzon'),
(10, 21529000, 'Tuguegarao City', '', 1, 0, 21500000, 20000000, 'luzon'),
(11, 23108000, 'City of Cauayan', '', 0, 0, 23100000, 20000000, 'luzon'),
(12, 23114000, 'City of Ilagan', '', 1, 0, 23100000, 20000000, 'luzon'),
(13, 23135000, 'City of Santiago', '', 0, 0, 23100000, 20000000, 'luzon'),
(14, 30803000, 'City of Balanga', '', 1, 0, 30800000, 30000000, 'luzon'),
(15, 31410000, 'City of Malolos', '', 1, 0, 31400000, 30000000, 'luzon'),
(16, 31412000, 'City of Meycauayan', '', 0, 0, 31400000, 30000000, 'luzon'),
(17, 31420000, 'City of San Jose Del Monte', '', 0, 0, 31400000, 30000000, 'luzon'),
(18, 34903000, 'City of Cabanatuan', '', 0, 0, 34900000, 30000000, 'luzon'),
(19, 34908000, 'City of Gapan', '', 0, 0, 34900000, 30000000, 'luzon'),
(20, 34917000, 'Science City of Muñoz', '', 0, 0, 34900000, 30000000, 'luzon'),
(21, 34919000, 'City of Palayan', '', 1, 0, 34900000, 30000000, 'luzon'),
(22, 34926000, 'San Jose City', '', 0, 0, 34900000, 30000000, 'luzon'),
(23, 35401000, 'City of Angeles', '', 0, 0, 35400000, 30000000, 'luzon'),
(24, 35409000, 'Mabalacat City', '', 0, 0, 35400000, 30000000, 'luzon'),
(25, 35416000, 'City of San Fernando', '', 1, 0, 35400000, 30000000, 'luzon'),
(26, 36916000, 'City of Tarlac', '', 1, 0, 36900000, 30000000, 'luzon'),
(27, 37107000, 'City of Olongapo', '', 0, 0, 37100000, 30000000, 'luzon'),
(28, 41005000, 'Batangas City', '', 1, 0, 41000000, 40000000, 'luzon'),
(29, 41014000, 'City of Lipa', '', 0, 0, 41000000, 40000000, 'luzon'),
(30, 41028000, 'City of Sto. Tomas', '', 0, 0, 41000000, 40000000, 'luzon'),
(31, 41031000, 'City of Tanauan', '', 0, 0, 41000000, 40000000, 'luzon'),
(32, 42103000, 'City of Bacoor', '', 0, 0, 42100000, 40000000, 'luzon'),
(33, 42105000, 'City of Cavite', '', 0, 0, 42100000, 40000000, 'luzon'),
(34, 42106000, 'City of Dasmariñas', '', 0, 0, 42100000, 40000000, 'luzon'),
(35, 42108000, 'City of General Trias', '', 0, 0, 42100000, 40000000, 'luzon'),
(36, 42109000, 'City of Imus', '', 0, 0, 42100000, 40000000, 'luzon'),
(37, 42119000, 'City of Tagaytay', '', 0, 0, 42100000, 40000000, 'luzon'),
(38, 42122000, 'City of Trece Martires', '', 1, 0, 42100000, 40000000, 'luzon'),
(39, 43403000, 'City of Biñan', '', 0, 0, 43400000, 40000000, 'luzon'),
(40, 43404000, 'City of Cabuyao', '', 0, 0, 43400000, 40000000, 'luzon'),
(41, 43405000, 'City of Calamba', '', 0, 0, 43400000, 40000000, 'luzon'),
(42, 43424000, 'City of San Pablo', '', 0, 0, 43400000, 40000000, 'luzon'),
(43, 43425000, 'City of San Pedro', '', 0, 0, 43400000, 40000000, 'luzon'),
(44, 43428000, 'City of Santa Rosa', '', 0, 0, 43400000, 40000000, 'luzon'),
(45, 45624000, 'City of Lucena', '', 1, 0, 45600000, 40000000, 'luzon'),
(46, 45647000, 'City of Tayabas', '', 0, 0, 45600000, 40000000, 'luzon'),
(47, 45802000, 'City of Antipolo', '', 1, 0, 45800000, 40000000, 'luzon'),
(48, 175205000, 'City of Calapan', '', 1, 0, 175200000, 170000000, 'luzon'),
(49, 175316000, 'City of Puerto Princesa', '', 1, 0, 175300000, 170000000, 'luzon'),
(50, 50506000, 'City of Legazpi', '', 1, 0, 50500000, 50000000, 'luzon'),
(51, 50508000, 'City of Ligao', '', 0, 0, 50500000, 50000000, 'luzon'),
(52, 50517000, 'City of Tabaco', '', 0, 0, 50500000, 50000000, 'luzon'),
(53, 51716000, 'City of Iriga', '', 0, 0, 51700000, 50000000, 'luzon'),
(54, 51724000, 'City of Naga', '', 0, 0, 51700000, 50000000, 'luzon'),
(55, 54111000, 'City of Masbate', '', 1, 0, 54100000, 50000000, 'luzon'),
(56, 56216000, 'City of Sorsogon', '', 1, 0, 56200000, 50000000, 'luzon'),
(57, 61914000, 'City of Roxas', '', 1, 0, 61900000, 60000000, 'visayas'),
(58, 63022000, 'City of Iloilo', '', 1, 0, 63000000, 60000000, 'visayas'),
(59, 63035000, 'City of Passi', '', 0, 0, 63000000, 60000000, 'visayas'),
(60, 64501000, 'City of Bacolod', '', 1, 0, 64500000, 60000000, 'visayas'),
(61, 64502000, 'City of Bago', '', 0, 0, 64500000, 60000000, 'visayas'),
(62, 64504000, 'City of Cadiz', '', 0, 0, 64500000, 60000000, 'visayas'),
(63, 64509000, 'City of Escalante', '', 0, 0, 64500000, 60000000, 'visayas'),
(64, 64510000, 'City of Himamaylan', '', 0, 0, 64500000, 60000000, 'visayas'),
(65, 64515000, 'City of Kabankalan', '', 0, 0, 64500000, 60000000, 'visayas'),
(66, 64516000, 'City of La Carlota', '', 0, 0, 64500000, 60000000, 'visayas'),
(67, 64523000, 'City of Sagay', '', 0, 0, 64500000, 60000000, 'visayas'),
(68, 64524000, 'City of San Carlos', '', 0, 0, 64500000, 60000000, 'visayas'),
(69, 64526000, 'City of Silay', '', 0, 0, 64500000, 60000000, 'visayas'),
(70, 64527000, 'City of Sipalay', '', 0, 0, 64500000, 60000000, 'visayas'),
(71, 64528000, 'City of Talisay', '', 0, 0, 64500000, 60000000, 'visayas'),
(72, 64531000, 'City of Victorias', '', 0, 0, 64500000, 60000000, 'visayas'),
(73, 71242000, 'City of Tagbilaran', '', 1, 0, 71200000, 70000000, 'visayas'),
(74, 72211000, 'City of Bogo', '', 0, 0, 72200000, 70000000, 'visayas'),
(75, 72214000, 'City of Carcar', '', 0, 0, 72200000, 70000000, 'visayas'),
(76, 72217000, 'City of Cebu', '', 1, 0, 72200000, 70000000, 'visayas'),
(77, 72223000, 'Danao City', '', 0, 0, 72200000, 70000000, 'visayas'),
(78, 72226000, 'City of Lapu-Lapu', 'Opon', 0, 0, 72200000, 70000000, 'visayas'),
(79, 72230000, 'City of Mandaue', '', 0, 0, 72200000, 70000000, 'visayas'),
(80, 72234000, 'City of Naga', '', 0, 0, 72200000, 70000000, 'visayas'),
(81, 72250000, 'City of Talisay', '', 0, 0, 72200000, 70000000, 'visayas'),
(82, 72251000, 'City of Toledo', '', 0, 0, 72200000, 70000000, 'visayas'),
(83, 74604000, 'City of Bais', '', 0, 0, 74600000, 70000000, 'visayas'),
(84, 74606000, 'City of Bayawan', 'Tulong', 0, 0, 74600000, 70000000, 'visayas'),
(85, 74608000, 'City of Canlaon', '', 0, 0, 74600000, 70000000, 'visayas'),
(86, 74610000, 'City of Dumaguete', '', 1, 0, 74600000, 70000000, 'visayas'),
(87, 74611000, 'City of Guihulngan', '', 0, 0, 74600000, 70000000, 'visayas'),
(88, 74621000, 'City of Tanjay', '', 0, 0, 74600000, 70000000, 'visayas'),
(89, 82604000, 'City of Borongan', '', 1, 0, 82600000, 80000000, 'visayas'),
(90, 83708000, 'City of Baybay', '', 0, 0, 83700000, 80000000, 'visayas'),
(91, 83738000, 'Ormoc City', '', 0, 0, 83700000, 80000000, 'visayas'),
(92, 83747000, 'City of Tacloban', '', 1, 0, 83700000, 80000000, 'visayas'),
(93, 86003000, 'City of Calbayog', '', 0, 0, 86000000, 80000000, 'visayas'),
(94, 86005000, 'City of Catbalogan', '', 1, 0, 86000000, 80000000, 'visayas'),
(95, 86407000, 'City of Maasin', '', 1, 0, 86400000, 80000000, 'visayas'),
(96, 97201000, 'City of Dapitan', '', 0, 0, 97200000, 90000000, 'mindanao'),
(97, 97202000, 'City of Dipolog', '', 1, 0, 97200000, 90000000, 'mindanao'),
(98, 97322000, 'City of Pagadian', '', 1, 0, 97300000, 90000000, 'mindanao'),
(99, 97332000, 'City of Zamboanga', '', 0, 0, 97300000, 90000000, 'mindanao'),
(100, 99701000, 'City of Isabela', '', 0, 0, 0, 90000000, 'mindanao'),
(101, 101312000, 'City of Malaybalay', '', 1, 0, 101300000, 100000000, 'mindanao'),
(102, 101321000, 'City of Valencia', '', 0, 0, 101300000, 100000000, 'mindanao'),
(103, 103504000, 'City of Iligan', '', 0, 0, 103500000, 100000000, 'mindanao'),
(104, 104209000, 'City of Oroquieta', '', 1, 0, 104200000, 100000000, 'mindanao'),
(105, 104210000, 'City of Ozamiz', '', 0, 0, 104200000, 100000000, 'mindanao'),
(106, 104215000, 'City of Tangub', '', 0, 0, 104200000, 100000000, 'mindanao'),
(107, 104305000, 'City of Cagayan De Oro', '', 1, 0, 104300000, 100000000, 'mindanao'),
(108, 104307000, 'City of El Salvador', '', 0, 0, 104300000, 100000000, 'mindanao'),
(109, 104308000, 'City of Gingoog', '', 0, 0, 104300000, 100000000, 'mindanao'),
(110, 112315000, 'City of Panabo', '', 0, 0, 112300000, 110000000, 'mindanao'),
(111, 112317000, 'Island Garden City of Samal', '', 0, 0, 112300000, 110000000, 'mindanao'),
(112, 112319000, 'City of Tagum', '', 1, 0, 112300000, 110000000, 'mindanao'),
(113, 112402000, 'City of Davao', '', 0, 0, 112400000, 110000000, 'mindanao'),
(114, 112403000, 'City of Digos', '', 1, 0, 112400000, 110000000, 'mindanao'),
(115, 112509000, 'City of Mati', '', 1, 0, 112500000, 110000000, 'mindanao'),
(116, 124704000, 'City of Kidapawan', '', 1, 0, 124700000, 120000000, 'mindanao'),
(117, 126303000, 'City of General Santos', 'Dadiangas', 0, 0, 126300000, 120000000, 'mindanao'),
(118, 126306000, 'City of Koronadal', '', 1, 0, 126300000, 120000000, 'mindanao'),
(119, 126511000, 'City of Tacurong', '', 0, 0, 126500000, 120000000, 'mindanao'),
(120, 133900000, 'City of Manila', '', 0, 133900000, 0, 130000000, 'luzon'),
(121, 137401000, 'City of Mandaluyong', '', 0, 137400000, 0, 130000000, 'luzon'),
(122, 137402000, 'City of Marikina', '', 0, 137400000, 0, 130000000, 'luzon'),
(123, 137403000, 'City of Pasig', '', 0, 137400000, 0, 130000000, 'luzon'),
(124, 137404000, 'Quezon City', '', 0, 137400000, 0, 130000000, 'luzon'),
(125, 137405000, 'City of San Juan', '', 0, 137400000, 0, 130000000, 'luzon'),
(126, 137501000, 'City of Caloocan', '', 0, 137500000, 0, 130000000, 'luzon'),
(127, 137502000, 'City of Malabon', '', 0, 137500000, 0, 130000000, 'luzon'),
(128, 137503000, 'City of Navotas', '', 0, 137500000, 0, 130000000, 'luzon'),
(129, 137504000, 'City of Valenzuela', '', 0, 137500000, 0, 130000000, 'luzon'),
(130, 137601000, 'City of Las Piñas', '', 0, 137600000, 0, 130000000, 'luzon'),
(131, 137602000, 'City of Makati', '', 0, 137600000, 0, 130000000, 'luzon'),
(132, 137603000, 'City of Muntinlupa', '', 0, 137600000, 0, 130000000, 'luzon'),
(133, 137604000, 'City of Parañaque', '', 0, 137600000, 0, 130000000, 'luzon'),
(134, 137605000, 'Pasay City', '', 0, 137600000, 0, 130000000, 'luzon'),
(135, 137607000, 'City of Taguig', '', 0, 137600000, 0, 130000000, 'luzon'),
(136, 141102000, 'City of Baguio', '', 0, 0, 141100000, 140000000, 'luzon'),
(137, 143213000, 'City of Tabuk', '', 1, 0, 143200000, 140000000, 'luzon'),
(138, 160202000, 'City of Butuan', '', 1, 0, 160200000, 160000000, 'mindanao'),
(139, 160203000, 'City of Cabadbaran', '', 0, 0, 160200000, 160000000, 'mindanao'),
(140, 160301000, 'City of Bayugan', '', 0, 0, 160300000, 160000000, 'mindanao'),
(141, 166724000, 'City of Surigao', '', 1, 0, 166700000, 160000000, 'mindanao'),
(142, 166803000, 'City of Bislig', '', 0, 0, 166800000, 160000000, 'mindanao'),
(143, 166819000, 'City of Tandag', '', 1, 0, 166800000, 160000000, 'mindanao'),
(144, 150702000, 'City of Lamitan', '', 1, 0, 150700000, 150000000, 'mindanao'),
(145, 153617000, 'City of Marawi', '', 1, 0, 153600000, 150000000, 'mindanao'),
(146, 129804000, 'City of Cotabato', '', 0, 0, 0, 120000000, 'mindanao');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities_tbl`
--
ALTER TABLE `cities_tbl`
  ADD PRIMARY KEY (`cities_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities_tbl`
--
ALTER TABLE `cities_tbl`
  MODIFY `cities_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
