-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2023 at 05:52 PM
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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_name`, `product_price`, `product_image`, `qty`, `total_price`, `product_code`) VALUES
(104, 'MacBook-M2', '165000', 'image/popular/MacBook-M2.jpg', 1, '165000', 'p2003'),
(105, 'iphone 13 pro max', '105000', 'image/popular/13 pro max.jpg', 1, '105000', 'p1002'),
(106, 'ROG Phone 6', '80000', 'image/popular/ROG Phone 6.jpg', 1, '80000', 'p2001'),
(107, 'MacBook Pro M1', '130000', 'image/popular/MacBook Pro M1.jpg', 1, '130000', 'p2000'),
(108, 'Apple Watch 7 Starlight', '43000', 'image/popular/Apple Watch Series 7 Starlight.jpg', 1, '43000', 'p2007');

-- --------------------------------------------------------

--
-- Table structure for table `featured_products`
--

CREATE TABLE `featured_products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_qty` int(11) NOT NULL DEFAULT 1,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `featured_products`
--

INSERT INTO `featured_products` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_code`) VALUES
(1, 'Apple Watch Series 7', '32000', 1, 'image/popular/Apple Watch Series 7.jpg', 'p2006'),
(2, 'Galaxy S23 Ultra', '120000', 1, 'image/popular/S23ultra.jpg', 'p2004'),
(3, 'Apple Watch 7 Starlight', '43000', 1, 'image/popular/Apple Watch Series 7 Starlight.jpg', 'p2007'),
(4, 'MacBook-M2', '165000', 1, 'image/popular/MacBook-M2.jpg', 'p2003'),
(6, 'Xiaomi 11 Lite NE 5G', '26000', 1, 'image/popular/x-11.jpg', 'p2005'),
(8, 'MacBook Pro M1', '130000', 1, 'image/popular/MacBook Pro M1.jpg', 'p2000'),
(11, 'ROG Phone 6', '80000', 1, 'image/popular/ROG Phone 6.jpg', 'p2001'),
(12, 'iphone 13 pro max', '105000', 1, 'image/popular/13 pro max.jpg', 'p1002');

-- --------------------------------------------------------

--
-- Table structure for table `iphone`
--

CREATE TABLE `iphone` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_qty` int(11) NOT NULL DEFAULT 1,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iphone`
--

INSERT INTO `iphone` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_code`) VALUES
(1, 'iPhone 14 Pro Max', '190000', 1, 'image/smartphones/14 pro max.jpg', 'p1000');

-- --------------------------------------------------------

--
-- Table structure for table `macbook`
--

CREATE TABLE `macbook` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_qty` int(11) NOT NULL DEFAULT 1,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `macbook`
--

INSERT INTO `macbook` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_code`) VALUES
(1, 'Macbook M2', '165000', 1, 'image/popular/MacBook-M2.jpg', 'p2003');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL,
  `fno` varchar(11) NOT NULL,
  `trx` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `pmode`, `products`, `amount_paid`, `fno`, `trx`) VALUES
(16, 'Md', 'iamrony977@gmail.com', '01957822111', 'sda', 'cod', 'iPhone 14 Pro Max(1)', '190000', '01957822111', 'sadsad'),
(17, 'Md', 'iamrony977@gmail.com', '01957822111', 'sadad', 'cod', 'iPhone 14 Pro Max(1)', '190000', '', ''),
(18, 'Md', 'iamrony977@gmail.com', '01957822111', 'dgffdg', 'Bkash', 'iPhone 14 Pro Max(1)', '190000', '01957822111', 'dfgdsg'),
(19, 'Md', 'iamrony977@gmail.com', '01957822111', 'Madarbari', 'Bkash', 'iPhone 14 (1), iphone 13(1), iphone 13 pro max(1), iPhone 14 Pro Max(1), Redmi 10A(1), Redmi Note 10 Pro Max(1), Xiaomi 11 Lite NE 5G(1), iphone 12 pro max(1)', '738500', '01957822111', 'sadsad'),
(20, 'Md', 'iamrony977@gmail.com', '01957822111', 'agrabad', 'Bkash', 'iPhone 14 Pro Max(1)', '190000', '01957822111', 'qewrqw3eqw');

-- --------------------------------------------------------

--
-- Table structure for table `popular_product`
--

CREATE TABLE `popular_product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_qty` int(11) NOT NULL DEFAULT 1,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `popular_product`
--

INSERT INTO `popular_product` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_code`) VALUES
(1, 'Galaxy S22 Ultra', '86000', 1, 'image/popular/S22.png', 'p2004'),
(2, 'MacBook-M2', '165000', 1, 'image/popular/MacBook-M2.jpg', 'p2003'),
(3, 'iphone 13 pro max', '105000', 1, 'image/popular/13 pro max.jpg', 'p1002'),
(7, 'Apple Watch Series 7', '32000', 1, 'image/popular/Apple Watch Series 7.jpg', 'p2006'),
(8, 'MacBook Pro M1', '130000', 1, 'image/popular/MacBook Pro M1.jpg', 'p2000'),
(9, 'Apple Watch 7 Starlight', '43000', 1, 'image/popular/Apple Watch Series 7 Starlight.jpg', 'p2007'),
(12, 'ROG Phone 6', '80000', 1, 'image/popular/ROG Phone 6.jpg', 'p2001'),
(13, 'Xiaomi 11 Lite NE 5G', '26000', 1, 'image/popular/x-11.jpg', 'p2005');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_qty` int(11) NOT NULL DEFAULT 1,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_code`) VALUES
(1, 'iPhone 14 Pro Max', '190000', 1, 'image/smartphones/14 pro max.jpg', 'p1000'),
(2, 'iPhone 13 mini', '100000', 1, 'image/smartphones/13 mini.jpg', 'p1001'),
(3, 'iphone 13 pro max', '155000', 1, 'image/smartphones/13 pro max.jpg', 'p1002'),
(4, 'iphone 13', '85000', 1, 'image/smartphones/13.jpg', 'p1003'),
(5, 'iphone 12 pro max', '105000', 1, 'image/smartphones/12 pro max.jpg', 'p1004'),
(6, 'Xiaomi 11 Lite NE 5G', '26000', 1, 'image/smartphones/x-11.jpg', 'p1005'),
(7, 'Redmi Note 10 Pro Max', '25000', 1, 'image/smartphones/x-10 pro.jpg', 'p1006'),
(9, 'Redmi 10A', '12500', 1, 'image/smartphones/x-10a.jpg', 'p1007');

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

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `RFname` varchar(30) NOT NULL,
  `RLname` varchar(30) NOT NULL,
  `Remail` varchar(30) NOT NULL,
  `Rpass` varchar(20) NOT NULL,
  `Rphone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `RFname`, `RLname`, `Remail`, `Rpass`, `Rphone`) VALUES
(9, 'Fajlay', 'Rabbi', 'rony@gmail.com', '1111', 1714389721);

-- --------------------------------------------------------

--
-- Table structure for table `samsung`
--

CREATE TABLE `samsung` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_qty` int(11) NOT NULL DEFAULT 1,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `samsung`
--

INSERT INTO `samsung` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_code`) VALUES
(1, 'Samsung S23 Ultra', '130000', 1, 'image/smartphones/S23ultra.jpg', 'p3000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featured_products`
--
ALTER TABLE `featured_products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code_2` (`product_code`),
  ADD KEY `product_code` (`product_code`);

--
-- Indexes for table `iphone`
--
ALTER TABLE `iphone`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code_2` (`product_code`),
  ADD KEY `product_code` (`product_code`);

--
-- Indexes for table `macbook`
--
ALTER TABLE `macbook`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code_2` (`product_code`),
  ADD KEY `product_code` (`product_code`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `popular_product`
--
ALTER TABLE `popular_product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code_2` (`product_code`),
  ADD KEY `product_code` (`product_code`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code_2` (`product_code`),
  ADD KEY `product_code` (`product_code`);

--
-- Indexes for table `product_2`
--
ALTER TABLE `product_2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code_2` (`product_code`),
  ADD KEY `product_code` (`product_code`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `samsung`
--
ALTER TABLE `samsung`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code_2` (`product_code`),
  ADD KEY `product_code` (`product_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `featured_products`
--
ALTER TABLE `featured_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `iphone`
--
ALTER TABLE `iphone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `macbook`
--
ALTER TABLE `macbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `popular_product`
--
ALTER TABLE `popular_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_2`
--
ALTER TABLE `product_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `samsung`
--
ALTER TABLE `samsung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
