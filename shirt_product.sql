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
-- Table structure for table `shirt_product`
--

CREATE TABLE `shirt_product` (
  `id` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(4) NOT NULL,
  `IMG` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shirt_product`
--

INSERT INTO `shirt_product` (`id`, `name`, `price`, `IMG`) VALUES
('01', 'เสื้อ(S1)', 200, '../picture/shirt/s1.jpg'),
('02', 'เสื้อ(S2)', 200, '../picture/shirt/s2.jpg'),
('03', 'เสื้อ(S3)', 200, '../picture/shirt/s3.jpg'),
('04', 'เสื้อ(S4)', 200, '../picture/shirt/s4.jpg'),
('05', 'เสื้อ(S5)', 200, '../picture/shirt/s5.jpg'),
('06', 'เสื้อ(S6)', 200, '../picture/shirt/s6.jpg'),
('07', 'เสื้อ(S7)', 200, '../picture/shirt/s7.jpg'),
('08', 'เสื้อ(S8)', 200, '../picture/shirt/s8.jpg'),
('09', 'เสื้อ(S9)', 200, '../picture/shirt/s9.jpg'),
('10', 'เสื้อ(S10)', 200, '../picture/shirt/s10.jpg'),
('11', 'เสื้อ(S11)', 200, '../picture/shirt/s11.jpg'),
('12', 'เสื้อ(S12)', 200, '../picture/shirt/s12.jpg'),
('13', 'เสื้อ(S13)', 200, '../picture/shirt/s13.jpg'),
('14', 'เสื้อ(S14)', 200, '../picture/shirt/s14.jpg'),
('15', 'เสื้อ(S15)', 200, '../picture/shirt/s15.jpg'),
('16', 'เสื้อ(S16)', 200, '../picture/shirt/s16.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shirt_product`
--
ALTER TABLE `shirt_product`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
