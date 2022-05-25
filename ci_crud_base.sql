-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 08:04 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_crud_base`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `inventory_nb` varchar(45) NOT NULL,
  `buying_date` date NOT NULL,
  `warranty_duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `name`, `inventory_nb`, `buying_date`, `warranty_duration`) VALUES
(1, 'test1', 'test1', '2021-12-01', 1),
(2, 'test2', 'test2', '2021-12-02', 2),
(3, 'test3', 'test3', '2021-12-03', 3),
(4, 'test4', 'test4', '2021-12-04', 4),
(5, 'test5', 'test5', '2021-12-05', 5),
(6, 'test6', 'test6', '2021-12-06', 6),
(7, 'test7', 'test7', '2021-12-07', 7),
(8, 'sfa', 'saf', '2021-12-09', 2),
(9, 'sfsa', 'afa', '2021-12-02', 2),
(10, 'sfa', 'sfa', '2021-12-14', 3),
(11, 'sfa', 'sfa', '2021-12-14', 3),
(12, 'haha', 'slafjl', '2021-12-25', 4),
(13, 'test13', 'test13', '2022-05-21', 14),
(14, 'test14', 'test14', '2022-05-21', 14),
(15, 'test15', 'test15', '2022-05-20', 34);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
