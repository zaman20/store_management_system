-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2024 at 12:57 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `sprice` int(11) NOT NULL,
  `pprice` int(11) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT 1,
  `total` int(11) NOT NULL,
  `c_stock` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `sprice`, `pprice`, `qty`, `total`, `c_stock`, `p_id`, `image`) VALUES
(36, 'Seven Up Can 500ml', 50, 30, 1, 50, 100, 10, '../assets/upload/7can.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(25) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(3, 'Cold Drinks'),
(4, 'Launch'),
(5, 'Set Menu'),
(6, 'Chineese');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(25) NOT NULL,
  `user` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL DEFAULT '1',
  `length` int(11) NOT NULL DEFAULT 1,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `user`, `p_name`, `img`, `price`, `qty`, `length`, `total`) VALUES
(19, 'zaman', 1904532370, 'zaman', '', ' ../assets/upload/chaomin.jfif,../assets/upload/noodles.jfif', '', '', 0, 1050),
(20, 'Zaman', 1751018490, 'zaman', '', ' ../assets/upload/chaomin.jfif,../assets/upload/noodles.jfif', '', '', 0, 1050),
(22, 'ador', 1904532370, 'zaman', ' Chaomin ,Sandwich,Noodles', ' ../assets/upload/chaomin.jfif,../assets/upload/sandwich.jfif,../assets/upload/noodles.jfif', ' 500,40,50', ' 1,1,1', 3, 590);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pprice` int(11) NOT NULL,
  `sprice` int(11) NOT NULL,
  `tax` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `details` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `dprice` int(25) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `pprice`, `sprice`, `tax`, `qty`, `details`, `type`, `company`, `image`, `dprice`) VALUES
(2, 'Chaomin ', 400, 500, 70, 0, 'Product details', 'Chineese', 'No', '../assets/upload/chaomin.jfif', 0),
(3, 'Sandwich', 30, 40, 10, 96, 'Product details', 'Chineese', 'No', '../assets/upload/sandwich.jfif', 0),
(10, 'Seven Up Can 500ml', 30, 50, 0, 100, 'Product details', 'Cold Drinks', 'No', '../assets/upload/7can.jfif', 0),
(11, 'Seven Up Combo Pack', 150, 250, 0, 95, 'Product details', 'Cold Drinks', 'Yes', '../assets/upload/7combo.jfif', 200),
(12, 'Seven Up 250 ml', 20, 25, 0, 50, 'Product details', 'Cold Drinks', 'No', '../assets/upload/7ml.jfif', 0),
(13, 'Coca cola 500 ml', 35, 50, 10, 50, 'Product details', 'Cold Drinks', 'No', '../assets/upload/cok.jfif', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(25) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `password`, `address`, `email`, `details`, `image`, `type`) VALUES
(2, 'ador', '01751018490', '1234', 'Rangpur', 'adorzaman18@gmail.com', 'User details', '../assets/upload/download.png', 'Admin'),
(4, 'iram', '01751018490', '1234', 'Rangpur', 'nafis@gmail.com', 'User details', '../assets/upload/download.png', 'Sales');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
