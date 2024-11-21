-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 21, 2024 at 08:10 PM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sellmate`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `feedback_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `ratings` tinyint(4) NOT NULL,
  `review` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `merchant_address`
--

CREATE TABLE `merchant_address` (
  `merchant_address_id` int(11) NOT NULL,
  `merchant_id` varchar(255) NOT NULL,
  `merchant_street_address_1` text NOT NULL,
  `merchant_street_address_2` text NOT NULL,
  `merchant_city_address` text NOT NULL,
  `merchant_state_address` text NOT NULL,
  `merchant_postcode_address` text NOT NULL,
  `merchant_country_address` text NOT NULL,
  `merchant_p_name_address` text NOT NULL,
  `merchant_p_phone_address` text NOT NULL,
  `default_address` tinyint(4) NOT NULL DEFAULT '0',
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `merchant_address`
--

INSERT INTO `merchant_address` (`merchant_address_id`, `merchant_id`, `merchant_street_address_1`, `merchant_street_address_2`, `merchant_city_address`, `merchant_state_address`, `merchant_postcode_address`, `merchant_country_address`, `merchant_p_name_address`, `merchant_p_phone_address`, `default_address`, `created_date`, `updated_date`) VALUES
(7, '36AADF20A41A', 'Mottambram', 'Puthiyangadi', 'Kannur', 'Kerala', '670304', 'India', 'Farshad', '0562364538', 1, '2024-10-22 12:18:11', '2024-11-05 11:10:55'),
(8, '36AADF20A41A', 'Mattool', 'Mattool', 'Kannur', 'Kerala', '670310', 'India', 'Farshad', '0562364538', 0, '2024-11-05 10:57:12', '2024-11-05 11:11:23'),
(11, 'F3849B8EFF61', 'Seevayi House', 'Mottambram', 'Kannur', 'Kerala', '670310', 'India', 'Farshad', '0562364538', 1, '2024-11-05 11:00:31', '2024-11-05 11:10:33'),
(12, 'F3849B8EFF61', 'Irfana\'s House', 'Puthiyangadi', 'Kannur', 'Kerala', '670304', 'India', 'Farshad', '0562364538', 0, '2024-11-05 11:09:25', '2024-11-05 11:11:27');

-- --------------------------------------------------------

--
-- Table structure for table `merchant_docs`
--

CREATE TABLE `merchant_docs` (
  `merchant_doc_id` int(11) NOT NULL,
  `merchant_file_id` varchar(255) NOT NULL,
  `merchant_doc_name` text NOT NULL,
  `merchant_doc_source` text NOT NULL,
  `merchant_doc_url` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `merchant_profiles`
--

CREATE TABLE `merchant_profiles` (
  `merchant_profile_id` int(11) NOT NULL,
  `merchant_id` varchar(255) NOT NULL,
  `merchant_name` varchar(255) NOT NULL,
  `merchant_email` varchar(255) NOT NULL,
  `merchant_country_code` varchar(5) NOT NULL,
  `merchant_number` varchar(10) NOT NULL,
  `merchant_type_id` int(11) NOT NULL,
  `merchant_role_id` int(11) NOT NULL,
  `merchant_doc_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `merchant_profiles`
--

INSERT INTO `merchant_profiles` (`merchant_profile_id`, `merchant_id`, `merchant_name`, `merchant_email`, `merchant_country_code`, `merchant_number`, `merchant_type_id`, `merchant_role_id`, `merchant_doc_id`, `created_date`, `updated_date`) VALUES
(4, 'A3407B37E54A', 'sellmate', 'sellmate@gmail.com', '971', '0562364538', 2, 3, 1, '2024-09-20 09:27:04', '2024-10-08 05:59:05'),
(5, 'F3849B8EFF61', 'Rak Bank', 'rakbank@gmail.com', '971', '0562364531', 2, 3, 1, '2024-09-20 21:40:31', '2024-10-08 05:59:02'),
(14, '36AADF20A41A', 'favtech L.L.C', 'info@favtech.com', '972', '0562541000', 2, 3, 1, '2024-10-08 06:01:50', '2024-10-08 06:01:50');

-- --------------------------------------------------------

--
-- Table structure for table `merchant_roles`
--

CREATE TABLE `merchant_roles` (
  `merchant_role_id` int(11) NOT NULL,
  `merchant_role` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `merchant_roles`
--

INSERT INTO `merchant_roles` (`merchant_role_id`, `merchant_role`, `created_date`, `updated_date`) VALUES
(1, 'Super Admin', '2024-08-21 06:50:07', '2024-08-21 06:50:07'),
(2, 'Administrator', '2024-08-21 06:50:07', '2024-08-21 06:50:07'),
(3, 'User', '2024-08-21 06:50:07', '2024-08-21 06:50:07');

-- --------------------------------------------------------

--
-- Table structure for table `merchant_types`
--

CREATE TABLE `merchant_types` (
  `merchant_type_id` int(11) NOT NULL,
  `merchant_type` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `merchant_types`
--

INSERT INTO `merchant_types` (`merchant_type_id`, `merchant_type`, `created_date`, `updated_date`) VALUES
(1, 'Buyer', '2024-08-29 11:09:46', '2024-10-14 21:15:00'),
(2, 'Seller', '2024-08-29 11:09:46', '2024-10-14 21:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_sold_price` double NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `package_id`, `product_id`, `product_qty`, `product_sold_price`, `created_date`, `updated_date`) VALUES
(225, 206, 2048, 30, 12.4, '2024-11-05 01:57:25', '2024-11-05 01:57:25'),
(226, 206, 2049, 50, 50.4, '2024-11-05 01:57:25', '2024-11-05 01:57:25'),
(227, 207, 2048, 30, 12.4, '2024-11-05 01:58:29', '2024-11-05 01:58:29'),
(228, 207, 2049, 50, 50.4, '2024-11-05 01:58:29', '2024-11-05 01:58:29'),
(229, 208, 2048, 30, 12.4, '2024-11-05 01:59:50', '2024-11-05 01:59:50'),
(230, 209, 2048, 1, 120.4, '2024-11-09 13:17:00', '2024-11-09 13:17:00'),
(231, 209, 2049, 20, 150, '2024-11-09 13:17:00', '2024-11-09 13:17:00'),
(232, 209, 2049, 30, 130.45, '2024-11-09 13:17:00', '2024-11-09 13:17:00'),
(233, 209, 2049, 5, 500, '2024-11-09 13:17:00', '2024-11-09 13:17:00');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `package_id` int(11) NOT NULL,
  `package_track_number` varchar(255) NOT NULL,
  `package_status_id` int(11) NOT NULL DEFAULT '343',
  `seller_id` varchar(255) NOT NULL,
  `buyer_id` varchar(255) NOT NULL,
  `order_date` date DEFAULT NULL,
  `delivery_date` date DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`package_id`, `package_track_number`, `package_status_id`, `seller_id`, `buyer_id`, `order_date`, `delivery_date`, `created_date`, `updated_date`) VALUES
(206, 'D35BC0FE4D2A95BF', 350, '36AADF20A41A', 'F3849B8EFF61', '2024-05-11', '2024-05-16', '2024-11-05 01:57:25', '2024-11-09 14:45:22'),
(207, '3F72E81A44C1DC22', 344, '36AADF20A41A', 'F3849B8EFF61', '2024-05-11', '2024-05-16', '2024-11-05 01:58:29', '2024-11-05 02:40:16'),
(208, 'AD53C7AD42F84566', 343, '36AADF20A41A', 'F3849B8EFF61', '2024-11-05', '2024-11-10', '2024-11-05 01:59:50', '2024-11-05 01:59:50'),
(209, '750626234EBBB054', 343, '36AADF20A41A', 'F3849B8EFF61', '2024-11-05', '2024-11-10', '2024-11-09 13:17:00', '2024-11-09 13:17:00');

-- --------------------------------------------------------

--
-- Table structure for table `package_status`
--

CREATE TABLE `package_status` (
  `package_status_id` int(11) NOT NULL,
  `package_status` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `package_status`
--

INSERT INTO `package_status` (`package_status_id`, `package_status`, `created_date`, `updated_date`) VALUES
(343, 'Pending', '2024-10-29 12:26:24', '2024-10-29 12:26:24'),
(344, 'Confirmed', '2024-10-29 12:26:24', '2024-10-29 12:26:24'),
(345, 'Processing', '2024-10-29 12:26:24', '2024-10-29 12:26:24'),
(346, 'Packing', '2024-10-29 12:26:24', '2024-10-29 12:26:24'),
(347, 'Shipped', '2024-10-29 12:26:24', '2024-10-29 12:26:24'),
(348, 'Delivering', '2024-10-29 12:26:24', '2024-10-29 12:26:24'),
(349, 'Delivered', '2024-10-29 12:26:24', '2024-10-29 12:26:24'),
(350, 'Cancelled', '2024-11-09 14:36:09', '2024-11-09 14:36:09');

-- --------------------------------------------------------

--
-- Table structure for table `package_tracking_logs`
--

CREATE TABLE `package_tracking_logs` (
  `package_track_id` int(11) NOT NULL,
  `package_track_number` varchar(255) NOT NULL,
  `package_track_commit` text NOT NULL,
  `package_track_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `merchant_id` varchar(255) NOT NULL,
  `product_name` text NOT NULL,
  `product_description` longtext NOT NULL,
  `product_sku` varchar(255) NOT NULL,
  `product_model_id` int(11) NOT NULL,
  `product_brand_id` int(11) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `product_color_id` int(11) NOT NULL,
  `product_image_id` text NOT NULL,
  `product_qty` int(11) NOT NULL DEFAULT '0',
  `min_order_qty` int(11) NOT NULL DEFAULT '0',
  `max_order_qty` int(11) NOT NULL DEFAULT '10',
  `product_orginal_price` double NOT NULL DEFAULT '0',
  `product_sale_price` double NOT NULL DEFAULT '0',
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `merchant_id`, `product_name`, `product_description`, `product_sku`, `product_model_id`, `product_brand_id`, `product_category_id`, `product_color_id`, `product_image_id`, `product_qty`, `min_order_qty`, `max_order_qty`, `product_orginal_price`, `product_sale_price`, `created_date`, `updated_date`) VALUES
(2048, '36AADF20A41A', 'Samsung A3', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', 'MOB-XIA-WHI-0000001', 4, 3, 1, 5, '[1,2,3]', 100, 0, 0, 15.2, 14.5, '2024-10-29 07:10:58', '2024-10-29 07:10:58'),
(2049, '36AADF20A41A', 'Samsung A3', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', 'MOB-XIA-WHI-0000002', 4, 3, 1, 5, '[1,2,3]', 100, 0, 0, 15.2, 14.5, '2024-10-29 18:07:09', '2024-10-29 18:07:09'),
(2050, '36AADF20A41A', 'Samsung A3', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', 'MOB-XIA-WHI-0000003', 4, 3, 1, 5, '[1,2,3]', 100, 0, 0, 15.2, 14.5, '2024-10-29 18:07:10', '2024-10-29 18:07:10');

-- --------------------------------------------------------

--
-- Table structure for table `product_brands`
--

CREATE TABLE `product_brands` (
  `product_brand_id` int(11) NOT NULL,
  `product_brand_name` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_brands`
--

INSERT INTO `product_brands` (`product_brand_id`, `product_brand_name`, `created_date`, `updated_date`) VALUES
(1, 'Apple', '2024-10-15 11:48:17', '2024-10-15 11:48:17'),
(2, 'Samsung', '2024-10-15 11:48:47', '2024-10-15 11:48:47'),
(3, 'Xiaomi', '2024-10-15 11:49:08', '2024-10-15 11:49:08'),
(4, 'Google Pixel', '2024-10-15 11:49:39', '2024-10-15 11:49:39'),
(5, 'Oppo', '2024-10-15 11:50:07', '2024-10-15 11:50:07'),
(6, 'Realme', '2024-10-15 11:50:21', '2024-10-15 11:50:21');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `product_category_id` int(11) NOT NULL,
  `product_category_name` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`product_category_id`, `product_category_name`, `created_date`, `updated_date`) VALUES
(1, 'Mobiles', '2024-10-17 11:03:45', '2024-10-17 20:03:38'),
(2, 'Laptops', '2024-10-17 20:02:43', '2024-10-17 20:06:57');

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

CREATE TABLE `product_colors` (
  `product_color_id` int(11) NOT NULL,
  `product_color_name` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_colors`
--

INSERT INTO `product_colors` (`product_color_id`, `product_color_name`, `created_date`, `updated_date`) VALUES
(1, 'Black', '2024-10-17 20:35:56', '2024-10-17 20:38:45'),
(5, 'White', '2024-10-20 22:10:39', '2024-10-20 22:10:39'),
(6, 'Blue', '2024-10-20 22:10:44', '2024-10-20 22:10:44'),
(7, 'Gray', '2024-10-20 22:10:49', '2024-10-20 22:10:49');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `product_image_id` int(11) NOT NULL,
  `product_image_name` text NOT NULL,
  `product_image_source` text NOT NULL,
  `product_image_url` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product_models`
--

CREATE TABLE `product_models` (
  `product_model_id` int(11) NOT NULL,
  `product_brand_id` int(11) NOT NULL,
  `product_model_name` varchar(255) NOT NULL,
  `product_model_number` varchar(255) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_models`
--

INSERT INTO `product_models` (`product_model_id`, `product_brand_id`, `product_model_name`, `product_model_number`, `created_date`, `updated_date`) VALUES
(2, 1, 'IPhone 15', '', '2024-10-17 21:04:29', '2024-10-17 21:05:52'),
(3, 1, 'IPhone 16 Pro', '', '2024-10-17 21:04:46', '2024-10-17 21:05:47'),
(4, 2, 'Samsung Galaxy S22 Ultra', 'SM-S908B', '2024-10-17 21:06:10', '2024-10-26 12:00:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_hash` text NOT NULL,
  `merchant_id` varchar(255) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_hash`, `merchant_id`, `active`, `created_date`, `updated_date`) VALUES
(1, 'sellmate', 'sellmate@gmail.com', '$2b$10$vV542J.tNOyNGhDgi5DtceyZeEBxn6V8XEwZZk/UeaUNEP.WhupYS', 'A3407B37E54A', 1, '2024-09-20 09:27:04', '2024-09-20 21:34:32'),
(2, 'rakbank', 'rakbank@gmail.com', '$2b$10$ljhW3rqkJbN3ney0u520dufaIQDr2wmT/yBOfnSx0qFfvEM36MTyW', 'F3849B8EFF61', 0, '2024-09-20 21:40:31', '2024-09-20 21:40:31'),
(7, 'info', 'info@favtech.com', '$2b$10$qqckD7B1N7ycsrEHrjIGJugrpN0gH9cmVK8fcOqDJ/OVobMzHwOPe', '36AADF20A41A', 0, '2024-10-08 06:01:50', '2024-10-17 20:18:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `merchant_address`
--
ALTER TABLE `merchant_address`
  ADD PRIMARY KEY (`merchant_address_id`);

--
-- Indexes for table `merchant_docs`
--
ALTER TABLE `merchant_docs`
  ADD PRIMARY KEY (`merchant_doc_id`),
  ADD UNIQUE KEY `merchant_file_id` (`merchant_file_id`);

--
-- Indexes for table `merchant_profiles`
--
ALTER TABLE `merchant_profiles`
  ADD PRIMARY KEY (`merchant_profile_id`),
  ADD UNIQUE KEY `merchant_email` (`merchant_email`),
  ADD UNIQUE KEY `merchant_number` (`merchant_number`);

--
-- Indexes for table `merchant_roles`
--
ALTER TABLE `merchant_roles`
  ADD PRIMARY KEY (`merchant_role_id`);

--
-- Indexes for table `merchant_types`
--
ALTER TABLE `merchant_types`
  ADD PRIMARY KEY (`merchant_type_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `package_status`
--
ALTER TABLE `package_status`
  ADD PRIMARY KEY (`package_status_id`);

--
-- Indexes for table `package_tracking_logs`
--
ALTER TABLE `package_tracking_logs`
  ADD PRIMARY KEY (`package_track_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `product_sku` (`product_sku`);

--
-- Indexes for table `product_brands`
--
ALTER TABLE `product_brands`
  ADD PRIMARY KEY (`product_brand_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`product_category_id`);

--
-- Indexes for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`product_color_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`product_image_id`);

--
-- Indexes for table `product_models`
--
ALTER TABLE `product_models`
  ADD PRIMARY KEY (`product_model_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `merchant_address`
--
ALTER TABLE `merchant_address`
  MODIFY `merchant_address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `merchant_docs`
--
ALTER TABLE `merchant_docs`
  MODIFY `merchant_doc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `merchant_profiles`
--
ALTER TABLE `merchant_profiles`
  MODIFY `merchant_profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `merchant_roles`
--
ALTER TABLE `merchant_roles`
  MODIFY `merchant_role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `merchant_types`
--
ALTER TABLE `merchant_types`
  MODIFY `merchant_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;

--
-- AUTO_INCREMENT for table `package_status`
--
ALTER TABLE `package_status`
  MODIFY `package_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=351;

--
-- AUTO_INCREMENT for table `package_tracking_logs`
--
ALTER TABLE `package_tracking_logs`
  MODIFY `package_track_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2051;

--
-- AUTO_INCREMENT for table `product_brands`
--
ALTER TABLE `product_brands`
  MODIFY `product_brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `product_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `product_color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `product_image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_models`
--
ALTER TABLE `product_models`
  MODIFY `product_model_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
