-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2021 at 07:57 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecping`
--

-- --------------------------------------------------------

--
-- Table structure for table `ac_product`
--

CREATE TABLE `ac_product` (
  `id` varchar(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(4) NOT NULL,
  `IMG` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ac_product`
--

INSERT INTO `ac_product` (`id`, `name`, `price`, `IMG`) VALUES
('01', 'Accessory(AC1)', 199, '../picture/Acc/s1.jpg'),
('02', 'Accessory(AC2)', 199, '../picture/Acc/s2.jpg'),
('03', 'Accessory(AC3)', 199, '../picture/Acc/s3.jpg'),
('04', 'Accessory(AC4)', 199, '../picture/Acc/s4.jpg'),
('05', 'Accessory(AC5)', 199, '../picture/Acc/s5.jpg'),
('06', 'Accessory(AC6)', 199, '../picture/Acc/s6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ac_product`
--
ALTER TABLE `ac_product`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
