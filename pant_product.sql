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
-- Table structure for table `pant_product`
--

CREATE TABLE `pant_product` (
  `id` varchar(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(4) NOT NULL,
  `IMG` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pant_product`
--

INSERT INTO `pant_product` (`id`, `name`, `price`, `IMG`) VALUES
('01', 'กางเกง(P1)', 300, '../picture/pant/p1.jpg'),
('02', 'กางเกง(P2)', 300, '../picture/pant/p2.jpg'),
('03', 'กางเกง(P3)', 300, '../picture/pant/p3.jpg'),
('04', 'กางเกง(P4)', 300, '../picture/pant/p4.jpg'),
('05', 'กางเกง(P5)', 300, '../picture/pant/p5.jpg'),
('06', 'กางเกง(P6)', 300, '../picture/pant/p6.jpg'),
('07', 'กางเกง(P7)', 300, '../picture/pant/p7.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pant_product`
--
ALTER TABLE `pant_product`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
