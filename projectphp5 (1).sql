-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2023 at 08:21 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectphp5`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(10) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `category_last_updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `category_pic` varchar(255) NOT NULL,
  `category_is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_created_at`, `category_last_updated_at`, `category_pic`, `category_is_deleted`) VALUES
(1, 'Standard', '2023-01-02 00:15:36', NULL, './img/categories/Standard-YamahaFZ-07.png', 0),
(2, 'Sport', '2023-01-02 00:19:38', '2023-01-01 22:24:00', './img/categories/Sport_kawasaki-ninja-zx.png', 1),
(3, 'Touring', '2023-01-02 00:20:25', '2023-01-01 22:25:44', './img/categories/Touring_harley-davidson-road-king.png', 0),
(4, 'Cruiser', '2023-01-02 00:29:47', '2023-01-01 22:31:16', './img/categories/Cruiser_Indian-Chief.png', 0),
(5, 'Dual-Sport', '2023-01-02 00:35:15', NULL, './img/categories/Dual-Sport_ktm-1090-adventure-r.jpg', 0),
(6, 'Scooter', '2023-01-02 00:39:27', NULL, './img/categories/Scooter_vespa.jpg', 0),
(7, 'Electric', '2023-01-02 00:39:58', NULL, './img/categories/Electric_K-Choper-2.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `ordered_at` datetime NOT NULL DEFAULT current_timestamp(),
  `order_total` int(10) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `order_phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_detail_id` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `model_year` year(4) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `pic_main` varchar(255) NOT NULL,
  `pic_sub` varchar(255) NOT NULL,
  `rate` int(1) NOT NULL DEFAULT 5,
  `in_stock` int(10) NOT NULL,
  `is_discount` tinyint(1) NOT NULL DEFAULT 0,
  `discount` int(2) NOT NULL,
  `product_create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `product_last_update` datetime DEFAULT NULL,
  `product_is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `description`, `model_year`, `brand`, `color`, `price`, `category_id`, `pic_main`, `pic_sub`, `rate`, `in_stock`, `is_discount`, `discount`, `product_create_at`, `product_last_update`, `product_is_deleted`) VALUES
(1, 'Suzuki GSX-R1000', 'Introducing the latest Suzuki GSX-R1000: the most powerful, hardest-accelerating, cleanest-running GSX-R ever built. Compact Engine', 2001, 'Suzuki', 'Red', 15000, 2, '', '', 5, 0, 0, 0, '2023-01-02 01:11:12', NULL, 0),
(2, 'suzuki gsx-r1000', 'Sports motorcycle', 2001, 'Suzuki', 'red', 15000, 2, '', '', 5, 10, 0, 0, '2023-01-02 01:13:03', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `review_text` varchar(255) NOT NULL,
  `rate` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `create_at` date NOT NULL DEFAULT current_timestamp(),
  `last_login` datetime DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT 0,
  `is_deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_detail_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
