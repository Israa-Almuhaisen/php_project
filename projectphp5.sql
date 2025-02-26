-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2023 at 10:43 AM
-- Server version: 10.4.27-xMariaDB
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
  `category_price` varchar(255) NOT NULL,
  `category_created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `category_last_updated_at` datetime DEFAULT NULL,
  `category_pic` varchar(255) NOT NULL,
  `category_is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_price`, `category_created_at`, `category_last_updated_at`, `category_pic`, `category_is_deleted`) VALUES
(1, 'Standard', '1,999$ - 6,499$', '2023-01-02 00:15:36', NULL, '../images/categorypic/standard.png', 0),
(2, 'Sport', '2,199$ - 8,499$', '2023-01-02 00:19:38', '2023-01-01 22:24:00', '../images/categorypic/sport.png', 0),
(4, 'Cruiser', '6,499$ - 18,799$', '2023-01-02 00:29:47', '2023-01-01 22:31:16', '../images/categorypic/[removal.ai]_tmp-63b68dc69a910.png', 0),
(5, 'Dual-Sport', '3,399$ - 9,000$', '2023-01-02 00:35:15', NULL, '../images/categorypic/dual-sport-removebg-preview (1).png', 0),
(6, 'Scooter', '1,349$ - 7,499$', '2023-01-02 00:39:27', NULL, '../images/categorypic/scooterAdventure.png', 0),
(7, 'Electric', '2,399$ - 6,499$', '2023-01-02 00:39:58', NULL, '../images/categorypic/electric.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `ordered_at` datetime NOT NULL DEFAULT current_timestamp(),
  `order_total` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `order_phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `ordered_at`, `order_total`, `address`, `order_phone`) VALUES
(5, 1, '2023-01-02 14:25:03', 198000, 'AQABA', '00962777777777'),
(6, 1, '2023-01-02 14:25:16', 198000, 'AQABA', '00962777777777'),
(7, 1, '2023-01-02 14:25:18', 198000, '', ''),
(8, 1, '2023-01-02 14:25:56', 198000, '', ''),
(9, 1, '2023-01-02 14:26:08', 198000, '', ''),
(10, 1, '2023-01-02 14:28:54', 198000, '', ''),
(11, 1, '2023-01-02 14:29:08', 198000, 'fwsdfasd', '1234567890'),
(12, 1, '2023-01-02 14:42:52', 198000, 'AQABA', '00962777777777'),
(13, 1, '2023-01-02 14:43:14', 198000, 'AQABA', '00962777777777'),
(14, 1, '2023-01-02 14:44:54', 198000, '', ''),
(15, 1, '2023-01-02 14:47:33', 198000, '', ''),
(16, 1, '2023-01-02 14:48:50', 198000, '', ''),
(17, 1, '2023-01-02 14:49:12', 198000, '', ''),
(18, 1, '2023-01-02 14:49:46', 198000, '', ''),
(19, 1, '2023-01-02 14:49:48', 198000, '', ''),
(20, 1, '2023-01-02 14:50:16', 198000, '', ''),
(21, 1, '2023-01-02 14:50:25', 198000, '', ''),
(22, 1, '2023-01-02 14:59:34', 198000, '', ''),
(23, 1, '2023-01-02 15:01:09', 198000, '', ''),
(24, 1, '2023-01-02 18:43:20', 18000, '', ''),
(25, 1, '2023-01-02 19:02:54', 18000, '', ''),
(26, 1, '2023-01-02 19:02:55', 0, '', ''),
(27, 1, '2023-01-02 19:04:16', 0, '', ''),
(28, 1, '2023-01-02 19:04:52', 0, '', ''),
(29, 1, '2023-01-02 19:05:26', 0, '', ''),
(30, 1, '2023-01-02 19:05:29', 0, '', ''),
(31, 1, '2023-01-02 22:47:33', 0, '', ''),
(32, 1, '2023-01-02 22:54:07', 0, '', ''),
(33, 1, '2023-01-02 22:54:44', 0, '', ''),
(34, 1, '2023-01-02 23:03:48', 0, '', ''),
(35, 1, '2023-01-02 23:03:51', 0, '', ''),
(36, 1, '2023-01-02 23:03:53', 0, '', ''),
(37, 1, '2023-01-02 23:07:52', 0, '', ''),
(38, 1, '2023-01-03 03:10:09', 234000, '', ''),
(39, 1, '2023-01-03 03:10:15', 0, '', ''),
(40, 1, '2023-01-05 15:55:32', 199000, 'da', 'das'),
(41, 0, '2023-01-11 03:07:41', 271100, 'AQABA', 'asd'),
(42, 4, '2023-01-11 03:39:50', 18000, 'AQABA', '123'),
(43, 4, '2023-01-11 03:40:52', 0, 'AQABA', '123'),
(44, 4, '2023-01-11 03:41:55', 18000, 'amman', '00962777777777'),
(45, 4, '2023-01-11 05:33:40', 152500, 'AQABA', '12345678912345'),
(46, 4, '2023-01-11 15:52:31', 32800, 'amman', '1234567890'),
(47, 4, '2023-01-12 07:25:31', 29700, 'AQABA', '12345678912345');

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

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_detail_id`, `order_id`, `product_id`, `quantity`, `total`) VALUES
(1, 0, 1, 1, 18000),
(2, 0, 1, 3, 54000),
(3, 0, 1, 6, 108000),
(4, 0, 1, 1, 18000),
(5, 0, 1, 1, 18000),
(6, 0, 1, 3, 54000),
(7, 0, 1, 6, 108000),
(8, 0, 1, 1, 18000),
(9, 0, 1, 1, 18000),
(10, 0, 1, 3, 54000),
(11, 0, 1, 6, 108000),
(12, 0, 1, 1, 18000),
(13, 18, 1, 1, 18000),
(14, 18, 1, 3, 54000),
(15, 18, 1, 6, 108000),
(16, 18, 1, 1, 18000),
(17, 19, 1, 1, 18000),
(18, 19, 1, 3, 54000),
(19, 19, 1, 6, 108000),
(20, 19, 1, 1, 18000),
(21, 20, 1, 1, 18000),
(22, 20, 1, 3, 54000),
(23, 20, 1, 6, 108000),
(24, 20, 1, 1, 18000),
(25, 21, 1, 1, 18000),
(26, 21, 1, 3, 54000),
(27, 21, 1, 6, 108000),
(28, 21, 1, 1, 18000),
(29, 22, 1, 1, 18000),
(30, 22, 1, 3, 54000),
(31, 22, 1, 6, 108000),
(32, 22, 1, 1, 18000),
(33, 23, 1, 1, 18000),
(34, 23, 1, 3, 54000),
(35, 23, 1, 6, 108000),
(36, 23, 1, 1, 18000),
(37, 24, 1, 1, 18000),
(38, 25, 1, 1, 18000),
(39, 31, 2, 1, 0),
(40, 38, 1, 1, 18000),
(41, 38, 1, 4, 72000),
(42, 38, 1, 4, 72000),
(43, 38, 1, 4, 72000),
(44, 40, 1, 1, 18000),
(45, 40, 1, 3, 54000),
(46, 40, 2, 4, 72000),
(47, 40, 42, 1, 3000),
(48, 40, 1, 1, 18000),
(49, 40, 41, 4, 34000),
(50, 41, 2, 1, 18000),
(51, 41, 44, 52, 145600),
(52, 41, 2, 4, 72000),
(53, 41, 42, 5, 15000),
(54, 41, 42, 1, 3000),
(55, 41, 42, 3, 9000),
(56, 41, 43, 1, 8500),
(57, 42, 2, 1, 18000),
(58, 44, 2, 1, 18000),
(59, 45, 2, 1, 18000),
(60, 45, 2, 4, 72000),
(61, 45, 2, 3, 54000),
(62, 45, 41, 1, 8500),
(63, 46, 2, 1, 18000),
(64, 46, 67, 1, 6300),
(65, 46, 43, 1, 8500),
(66, 47, 41, 1, 8500),
(67, 47, 38, 4, 10000),
(68, 47, 44, 4, 11200);

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
(1, 'HONDA ADV150', 'SPECIFICATIONS\nENGINE TYPE — 149cc liquid-cooled 80º single-cylinder four-stroke\nBORE AND STROKE — 57.3mm x 57.9mm\nCOMPRESSION RATIO — 10.6:1\nVALVE TRAIN — SOHC; two valves per cylinder\nINDUCTION — PGM-FI; 26mm throttle body\nTRANSMISSION — Automatic', 2023, 'HONDA', 'black', 18000, 2, '2021-pcx-pearl_white-650x380.webp', '', 5, 50, 1, 10, '2023-01-01 22:11:59', NULL, 1),
(2, 'HONDA ADV150', 'SPECIFICATIONS\nENGINE TYPE — 149cc liquid-cooled 80º single-cylinder four-stroke\nBORE AND STROKE — 57.3mm x 57.9mm\nCOMPRESSION RATIO — 10.6:1\nVALVE TRAIN — SOHC; two valves per cylinder\nINDUCTION — PGM-FI; 26mm throttle body\nTRANSMISSION — Automatic', 2023, 'HONDA', 'black', 18000, 2, '2021-pcx-pearl_white-650x380.webp', '', 5, 50, 1, 5, '2023-01-01 22:12:49', NULL, 1),
(38, 'Aprilia', '300cc', 2022, '', '', 2500, 0, 'handsome-motorbiker-with-helmet-hands-motorcycle.jpg', '', 5, 25, 0, 10, '2023-01-02 21:03:27', NULL, 0),
(39, 'suzuki', '125cc', 2022, '', '', 2200, 0, '', '', 5, 30, 0, 10, '2023-01-02 21:06:39', NULL, 0),
(40, 'KTM', '400cc', 2022, '', '', 4000, 4, 'handsome-motorbiker-with-helmet-hands-motorcycle.jpg', '', 5, 25, 0, 10, '2023-01-02 21:07:45', NULL, 1),
(41, 'cruiser', '750cc', 2018, '', '', 8500, 7, 'handsome-motorbiker-with-helmet-hands-motorcycle.jpg', '', 5, 200, 1, 12, '2023-01-02 21:08:57', NULL, 1),
(42, 'electric', '30w', 2020, '', '', 3000, 4, 'CBR.png', '', 5, 25, 1, 12, '2023-01-02 21:11:30', NULL, 0),
(43, 'cruiser', '900cc', 2021, '', '', 8500, 2, 'cruiser.png', '', 5, 25, 1, 12, '2023-01-02 21:13:17', NULL, 0),
(44, 'standard_motorcycle', '250cc', 2019, '', '', 2800, 5, 'standard.png', '', 5, 25, 0, 10, '2023-01-02 21:14:43', NULL, 1),
(45, 'sport_motorcycle', '300cc', 2019, '', '', 5400, 5, 'sport.png', '', 5, 30, 0, 10, '2023-01-02 21:16:02', NULL, 0),
(50, 'kawasaki500', '500cc', 2021, '', '', 5400, 1, 'kawasaki500.png', '', 5, 25, 0, 10, '2023-01-02 21:55:00', NULL, 0),
(51, 'scooterAdventure', '300cc', 2022, '', '', 3000, 2, 'scooterAdventure.png', '', 5, 25, 0, 10, '2023-01-02 21:56:31', NULL, 0),
(52, 'hunda250', '250cc', 2021, '', '', 2450, 2, 'hunda250.png', '', 5, 25, 1, 2, '2023-01-02 21:57:40', NULL, 0),
(53, 'kawasaki_Adventure599', '599cc', 2022, '', '', 6000, 6, 'kawasakiAdventure599.png', '', 5, 25, 0, 5, '2023-01-02 22:01:20', NULL, 0),
(54, 'kawasaki499', '499cc', 2020, '', '', 4500, 7, 'kawasaki499.png', '', 5, 20, 0, 15, '2023-01-02 22:05:24', NULL, 0),
(55, 'KLX', '400cc', 2019, '', '', 4200, 7, 'KLX.png', '', 5, 30, 0, 0, '2023-01-02 22:08:13', NULL, 0),
(56, 'kawasaki550', '550cc', 2020, '', '', 7400, 7, 'kawasaki550.png', '', 5, 35, 0, 10, '2023-01-02 22:10:56', NULL, 0),
(57, 'suzuki150', '150cc', 2022, '', '', 1800, 1, 'suzuki150.png', '', 5, 40, 0, 15, '2023-01-02 22:13:07', NULL, 0),
(58, 'agusta', '850cc', 2020, '', '', 7900, 6, 'agusta.png', '', 5, 15, 0, 0, '2023-01-02 22:23:38', NULL, 0),
(59, 'dWkty', '700cc', 2016, '', '', 6900, 7, 'dwkty.png', '', 5, 18, 0, 0, '2023-01-02 22:26:19', NULL, 0),
(60, 'turbo', '1000cc', 2015, '', '', 8600, 7, 'turbo.png', '', 5, 13, 0, 0, '2023-01-02 22:29:08', NULL, 0),
(61, 'ZXR', '1000cc', 2014, '', '', 8900, 4, 'ZXR.png', '', 5, 15, 0, 0, '2023-01-02 22:33:21', NULL, 0),
(62, 'R6', '750cc', 2018, '', '', 8000, 1, 'R6.png', '', 5, 20, 0, 0, '2023-01-02 22:36:14', NULL, 0),
(63, 'GT', '1000cc', 2017, '', '', 8800, 7, 'GT.png', '', 5, 20, 0, 0, '2023-01-02 22:43:58', NULL, 0),
(64, 'ZLM', '800cc', 2014, '', '', 7000, 2, 'ZLM.png', '', 5, 20, 0, 0, '2023-01-02 23:17:16', NULL, 0),
(65, 'Aprilia', '450cc', 2021, '', '', 5000, 4, 'aprilia.png', '', 5, 20, 0, 0, '2023-01-02 23:21:51', NULL, 0),
(66, 'SuzukiDR', '350cc', 2021, '', '', 3900, 5, 'SuzukiDR.png', '', 5, 28, 0, 10, '2023-01-02 23:24:58', NULL, 0),
(67, 'Ninga', '600cc', 2018, '', '', 6300, 7, 'Ninga.png', '', 5, 20, 0, 0, '2023-01-02 23:27:58', NULL, 0),
(68, 'CBR', '750cc', 2013, '', '', 6300, 4, 'CBR.png', '', 5, 15, 0, 0, '2023-01-02 23:36:10', NULL, 0),
(69, 'Ducati', '500cc', 2020, '', '', 450, 6, 'Ducati.png', '', 5, 14, 0, 0, '2023-01-02 23:41:08', NULL, 0),
(70, 'yamaha_R3', '599cc', 2021, '', '', 5400, 7, 'yamaha_r3.png', '', 5, 20, 0, 0, '2023-01-02 23:45:27', NULL, 0),
(71, '420R', '850cc', 2019, '', '', 6700, 5, '420R.png', '', 5, 18, 0, 0, '2023-01-02 23:50:08', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `review_text` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `product_id`, `user_id`, `review_text`, `state`) VALUES
(1, 0, 0, 'jkfahdkjf', '0'),
(2, 0, 0, 'dsdcas', '0'),
(3, 0, 0, 'dsdcas', '0'),
(4, 0, 0, 'asdasd', '0'),
(8, 42, 0, 'asdasd', '0'),
(9, 42, 0, 'asdasd', '0'),
(10, 42, 0, 'asdasd', '0'),
(11, 42, 0, '', '0'),
(12, 42, 0, '', '0'),
(13, 42, 0, '', '0'),
(14, 41, 0, 'dasdas', '0'),
(15, 41, 0, 'dasdas', '0'),
(16, 41, 0, 'jklfsjdfklsdf', '0'),
(17, 42, 0, '1111111111111111111111111', '0'),
(18, 42, 0, '1111111111111111111111111', '0'),
(19, 42, 0, '222222222222222222222222', '0'),
(20, 42, 0, '222222222222222222222222', '0'),
(21, 41, 1, '33333333333333333333333', '0'),
(22, 0, 1, '33333333333333333333333', '0'),
(23, 41, 1, '4444444444444444', '0'),
(24, 41, 1, '4444444444444444', '0'),
(25, 41, 1, '4444444444444444', '0'),
(26, 41, 1, '', '0'),
(27, 41, 1, '', '0'),
(28, 41, 1, '', '0'),
(29, 41, 1, '', '0'),
(30, 41, 1, '', '0'),
(31, 40, 1, 'good iteam', '0'),
(32, 40, 1, 'good iteam', '0'),
(33, 2, 4, 'good product', 'Confirmed'),
(34, 2, 4, 'good product', 'Deleted'),
(35, 2, 4, 'good product', 'Confirmed'),
(36, 2, 4, 'good product', 'Confirmed'),
(37, 42, 4, 'good bike', 'Confirmed'),
(38, 41, 4, 'best service ', 'Confirmed'),
(39, 41, 0, 'rrrrrrrrrrrrr', ''),
(40, 41, 0, 'rrrrrrrrrrrrrrrrrrr', ''),
(41, 41, 0, 'nice', ''),
(42, 41, 0, 'nice', ''),
(43, 41, 4, 'nice', 'Deleted'),
(44, 41, 4, 'good\r\n', 'Confirmed'),
(45, 41, 4, 'bad bick', 'Deleted'),
(46, 41, 4, 'nice', 'Pending'),
(47, 41, 4, 'good product', 'Pending');

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
  `is_deleted` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `phone`, `email`, `password`, `address`, `pic`, `create_at`, `last_login`, `is_admin`, `is_deleted`) VALUES
(4, 'walaa', '0795546546456', 'walaa@gmail.com', 'Walaa.@1', ' aqaba', 'Untitled design (38).png', '2022-12-31', '2023-01-04 08:01:02', 1, 0),
(17, 'talab', '00962777777777', 'talab@gmail.com', 'Aa.@1234', NULL, NULL, '2023-01-03', NULL, 0, 0);

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
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_detail_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
