-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 09:33 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kisaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `postcode` int(11) NOT NULL,
  `city` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `order_notes` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `phone`, `address`, `postcode`, `city`, `state`, `country`, `order_notes`, `created`, `modified`, `status`) VALUES
(1, 'Tanmay ', 'Patil', 'brahmandnayakofficial@gmail.com', '07021499225', 'Station Road', 0, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(2, 'Tanmay ', 'Maharashtra', 'Tanmay', '07021499225', 'Shree Yashwant', 0, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(3, 'Tanmay ', 'Patil', 'brahmandnayakofficial@gmail.com', '9987272576', 'Thane', 0, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(4, 'Tanmay', 'Patil', 'brahmandnayakofficial@gmail.com', '09987272576', 'Thane', 0, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(5, 'Tanmay', 'Patil', 'brahmandnayakofficial@gmail.com', '09987272576', 'Thane', 0, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(6, 'Tanmay', 'Patil', 'brahmandnayakofficial@gmail.com', '09987272576', 'Thane', 400601, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(7, 'Tanmay', 'Patil', 'brahmandnayakofficial@gmail.com', '09987272576', 'Thane', 400601, 'Thane', 'Maharashtra', 'India', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(8, 'Tanmay', 'Patil', 'brahmandnayakofficial@gmail.com', '09987272576', 'Thane', 400601, 'Thane', 'Maharashtra', 'India', 'Extra Coriander', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(9, 'Code', 'Grapher', 'patiltanmay033@gmail.com', '09987272576', 'Thane', 400601, 'Thane', 'Maharashtra', 'India', 'Thank you for your service!!', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(10, 'Manasi', 'Sheramkar', 'manasisheramkar@gmail.com', '09987272576', 'Alibhaug', 400601, 'Raigad', 'Maharashtra', 'India', 'Extra Lemons and Coriander', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(11, 'Dhanashri', 'Dhuri', 'patiltanmay033@gmail.com', '09987272576', 'Thane', 400601, 'Thane', 'Maharashtra', 'India', 'Urgent Delivery required', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(12, 'Manasi', 'Sheramkar', 'manasisheramkar@gmail.com', '09987272576', 'Alibhaug', 400601, 'Raigad', 'Maharashtra', 'India', 'extra', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(13, 'Tanmay', 'Patil', 'tanmaypatil@gmail.com', '09987272576', 'Thane', 400601, 'Thane', 'Maharashtra', 'India', 'Thank you!!', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(14, 'Manasi', 'Sheramkar', 'manasisheramkar@gmail.com', '09987272576', 'Alibhaug', 400601, 'Raigad', 'Maharashtra', 'India', 'Extra Coriander', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT 0.00,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`, `date_added`) VALUES
(1, 'Green Pepper', '', '29.99', '0.00', 10, 'organic-pro-9.jpg', '2019-03-13 17:55:22'),
(2, 'Strawberry', '', '14.99', '19.99', 34, 'organic-pro-10.jpg', '2019-03-13 18:52:49'),
(3, 'Carrot', '', '19.99', '0.00', 23, 'organic-pro-11.jpg', '2019-03-13 18:47:56'),
(4, 'Ladyfinger', '', '69.99', '0.00', 7, 'organic-pro-12.jpg', '2019-03-13 17:42:04');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `grand_total` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `status` enum('Pending','Completed','Cancelled') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `grand_total`, `created`, `status`) VALUES
(1, 1, 29.99, '2020-12-08 05:39:57', 'Pending'),
(2, 2, 29.99, '2020-12-08 11:08:55', 'Pending'),
(3, 3, 29.99, '2020-12-08 11:44:05', 'Pending'),
(4, 4, 29.99, '2020-12-08 12:46:52', 'Pending'),
(5, 5, 14.99, '2020-12-08 12:48:30', 'Pending'),
(6, 6, 29.99, '2020-12-08 12:53:55', 'Pending'),
(7, 7, 14.99, '2020-12-08 12:55:49', 'Pending'),
(8, 8, 29.99, '2020-12-08 13:01:46', 'Pending'),
(9, 9, 339.98, '2020-12-09 02:59:08', 'Pending'),
(10, 10, 269.99, '2020-12-09 14:37:40', 'Completed'),
(11, 11, 79.99, '2020-12-09 18:37:10', 'Pending'),
(12, 12, 29.99, '2020-12-09 20:05:47', 'Pending'),
(13, 13, 29.99, '2020-12-09 20:07:04', 'Pending'),
(14, 14, 89.97, '2020-12-09 20:23:15', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(1, 1, 1, 1),
(2, 2, 1, 1),
(3, 3, 1, 1),
(4, 4, 1, 1),
(5, 5, 2, 1),
(6, 6, 1, 1),
(7, 7, 2, 1),
(8, 8, 1, 1),
(9, 9, 6, 3),
(10, 9, 4, 1),
(11, 9, 9, 1),
(12, 10, 6, 3),
(13, 10, 1, 1),
(14, 11, 5, 1),
(15, 11, 1, 1),
(16, 12, 1, 1),
(17, 13, 1, 1),
(18, 14, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=Active | 0=Inactive',
  `img` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `created`, `modified`, `status`, `img`) VALUES
(1, 'Watermelon', '', 29.99, '2020-12-16 22:15:50', '2020-12-17 22:15:50', '1', 'organic-pro-1.jpg'),
(2, 'Mangoes', '', 14.99, '2020-12-07 12:51:49', '2020-12-07 12:51:56', '1', 'organic-pro-2.jpg'),
(3, 'Coriander', '', 19.99, '2020-12-01 01:33:28', '2020-12-07 01:34:44', '1', 'organic-pro-3.jpg'),
(4, 'Red Apples', '', 69.99, '2020-12-07 02:30:38', '2020-12-07 02:30:38', '1', 'organic-pro-4.jpg'),
(5, 'Black Grapes', '', 50.00, '2020-12-07 01:34:14', '2020-12-07 01:34:51', '1', 'organic-pro-5.jpg'),
(6, 'Juicy Lemons', '', 80.00, '2020-12-07 01:34:18', '2020-12-07 01:35:18', '1', 'organic-pro-6.jpg'),
(7, 'Ginger', '', 20.00, '2020-12-07 01:34:21', '2020-12-15 01:35:22', '1', 'organic-pro-7.jpg'),
(8, 'Tomato', '', 50.00, '2020-12-03 01:34:26', '2020-12-07 01:35:36', '1', 'organic-pro-8.jpg'),
(9, 'Green Pepper', '', 29.99, '2020-12-08 01:34:31', '2020-12-07 01:35:39', '1', 'organic-pro-9.jpg'),
(10, 'Strawberry', '', 14.99, '2020-12-07 01:34:34', '2020-12-07 01:35:42', '1', 'organic-pro-10.jpg'),
(11, 'Carrot', '', 19.99, '2020-12-07 01:34:37', '2020-12-07 01:35:45', '1', 'organic-pro-11.jpg'),
(12, 'Ladyfinger', '', 69.99, '2020-12-07 01:34:41', '2020-12-07 01:35:48', '1', 'organic-pro-12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`, `created_at`) VALUES
(1, 'Tanmay', '', '', '1234', '2020-12-08 02:12:52'),
(2, 'vishwa05', '', '', '$2y$10$95/ksuF1wG30UJSEzI748eOLfdzoe1oOlSR0T.gB1ipO585US2qvG', '2020-12-08 03:07:54'),
(3, 'Tanmay05', '', '', '$2y$10$dSkOL16/GAakUTXCNHwa8.2f1CBqgrHcnSUtE0CklvnUO8Z4t9mjC', '2020-12-08 03:08:48'),
(4, 'codegrapher', '', '', '$2y$10$A0jmp9lD3pxm7O9jC1Slh.o3IUArW91t6REIAzt4FVbuQZgpuSYmO', '2020-12-08 03:12:52'),
(6, 'rockstar', 'patiltanmay033@gmail.com', 'user', '593425dd36687e343b2b3b279b3999a9', '2020-12-09 12:10:43'),
(7, 'Manasi', 'manasisheramkar@gmail.com', 'user', '25f9e794323b453885f5181f1b624d0b', '2020-12-09 14:39:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
