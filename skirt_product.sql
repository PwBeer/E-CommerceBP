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
-- Table structure for table `skirt_product`
--

CREATE TABLE `skirt_product` (
  `id` varchar(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(4) NOT NULL,
  `IMG` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `skirt_product`
--

INSERT INTO `skirt_product` (`id`, `name`, `price`, `IMG`) VALUES
('01', 'กระโปรง(SK1)', 350, '../picture/skirt/sk1.jpg'),
('02', 'กระโปรง(SK2)', 350, '../picture/skirt/sk2.jpg'),
('03', 'กระโปรง(SK3)', 350, '../picture/skirt/sk3.jpg'),
('04', 'กระโปรง(SK4)', 350, '../picture/skirt/sk4.jpg'),
('05', 'กระโปรง(SK5)', 350, '../picture/skirt/sk5.jpg'),
('06', 'กระโปรง(SK6)', 350, '../picture/skirt/sk6.jpg'),
('07', 'กระโปรง(SK7)', 350, '../picture/skirt/sk7.jpg'),
('08', 'กระโปรง(SK8)', 350, '../picture/skirt/sk8.jpg'),
('09', 'กระโปรง(SK9)', 350, '../picture/skirt/sk9.jpg'),
('10', 'กระโปรง(SK10)', 350, '../picture/skirt/sk10.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `skirt_product`
--
ALTER TABLE `skirt_product`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
