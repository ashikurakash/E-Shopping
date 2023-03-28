-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2023 at 08:19 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_2`
--

CREATE TABLE `product_2` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_qty` int(11) NOT NULL DEFAULT 1,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_2`
--

INSERT INTO `product_2` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_code`) VALUES
(1, 'Google Pixel Watch', '48000', 1, 'image/watch/Google Pixel.jpg', 'p4000'),
(2, 'Apple Watch 7 Starlight', '43000', 1, 'image/watch/Apple Watch Series 7 Starlight.jpg', 'p4001'),
(3, 'Amazfit GTR 3', '15500', 1, 'image/watch/Amazfit GTR 3.jpg', 'p4002'),
(4, 'Zeblaze Neo 3', '2750', 1, 'image/watch/Zeblaze Neo 3.jpg', 'p4003'),
(5, 'Haylou Solar LS05', '2600', 1, 'image/watch/Haylou Solar LS05.jpg', 'p4004'),
(6, 'COTEetCI W3', '1000', 1, 'image/watch/COTEetCI W3.jpg', 'p4005'),
(7, 'Galaxy Watch5', '22000', 1, 'image/watch/Galaxy Watch5.jpg', 'p4006'),
(9, 'Apple Watch 7', '32000', 1, 'image/watch/Apple Watch Series 7.jpg', 'p4007');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_2`
--
ALTER TABLE `product_2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code_2` (`product_code`),
  ADD KEY `product_code` (`product_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_2`
--
ALTER TABLE `product_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
