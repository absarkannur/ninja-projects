-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 30, 2025 at 08:15 PM
-- Server version: 5.7.24
-- PHP Version: 8.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `planetplus`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `own_brand` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_slug`, `brand_logo`, `own_brand`, `created_at`, `updated_at`) VALUES
(1, 'Ubiquiti', 'ubiquiti', '01JWGAE87NW305AEVEBGDQW9ZK.png', 0, '2025-05-30 04:24:30', '2025-05-30 05:17:57'),
(2, 'LINKSYS', 'linksys', '01JWGAFSDW778NTPCCPBWNQHQC.png', 0, '2025-05-30 04:36:03', '2025-05-30 05:18:16'),
(3, 'Planet Plus', 'planet-plus', '01JWGBFGCWYKN3E8JK5NP5GS60.png', 1, '2025-05-30 04:53:23', '2025-05-30 05:19:11');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_slug`, `created_at`, `updated_at`) VALUES
(1, 'Networking & Connectivity', '', '2025-05-30 05:00:13', '2025-05-30 05:00:13'),
(2, 'Power Backup Solutions', '', '2025-05-30 05:00:18', '2025-05-30 05:00:18'),
(3, 'High-Performance Computing', '', '2025-05-30 05:00:22', '2025-05-30 05:00:22'),
(4, 'Storage Solutions', '', '2025-05-30 05:00:26', '2025-05-30 05:00:26'),
(5, 'Printing & Office Essentials', '', '2025-05-30 05:00:30', '2025-05-30 05:00:30');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_05_30_062854_create_site_infos_table', 2),
(6, '2025_05_30_091934_create_brands_table', 3),
(7, '2025_05_30_102557_create_categories_table', 4),
(8, '2025_05_30_102955_create_sub_categories_table', 5),
(9, '2025_05_30_115249_create_products_table', 6),
(10, '2025_05_30_162530_create_services_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brands_id` bigint(20) UNSIGNED NOT NULL,
  `sub_categories_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_item_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_model_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_short_descriptions` longtext COLLATE utf8mb4_unicode_ci,
  `product_descriptions` longtext COLLATE utf8mb4_unicode_ci,
  `product_content` longtext COLLATE utf8mb4_unicode_ci,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brands_id`, `sub_categories_id`, `product_name`, `product_slug`, `product_item_code`, `product_model_number`, `product_short_descriptions`, `product_descriptions`, `product_content`, `product_image`, `created_at`, `updated_at`) VALUES
(1, 3, 2, 'High speed HDMI cable with ethernet', 'high-speed-hdmi-cable-with-ethernet', '877', '1600044', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><ul><li>At vero eos et accusamus et iusto odio dignissimos</li><li>&nbsp;Et harum quidem rerum facilis est et&nbsp;</li><li>On the other hand, we denounce</li></ul>', '<div class=\"filament-tiptap-grid-builder\" data-type=\"responsive\" data-cols=\"2\" style=\"grid-template-columns: repeat(2, 1fr);\" data-stack-at=\"md\"><div class=\"filament-tiptap-grid-builder__column\" data-col-span=\"1\" style=\"grid-column: span 1;\"><h2>Test</h2></div><div class=\"filament-tiptap-grid-builder__column\" data-col-span=\"1\" style=\"grid-column: span 1;\"><h2>Test</h2></div></div>', '01JWGTM7S63QNNHC3E5GVFPPJR.jpeg', '2025-05-30 09:18:06', '2025-05-30 09:29:46'),
(2, 2, 3, 'NAS Storage System', 'nas-storage-system', '565', '210005', NULL, NULL, NULL, '01JWGZVYKQEW9X1H7TYTJ0Y76V.jpeg', '2025-05-30 10:42:23', '2025-05-30 10:49:42');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_short_description` longtext COLLATE utf8mb4_unicode_ci,
  `service_content` longtext COLLATE utf8mb4_unicode_ci,
  `service_brochure` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_title`, `service_slug`, `service_icon`, `service_short_description`, `service_content`, `service_brochure`, `created_at`, `updated_at`) VALUES
(1, 'IT Hardware & Accessories', 'it-hardware-accessories', '01JWH2PB5FVDN459F48PYK5S3Q.png', '<p>High-performance gaming laptops, desktops, printers, and storage solutions</p>', NULL, 'downloads/01JWH5XJ3NH89F3M6X1ES95CBT.pdf', '2025-05-30 11:37:54', '2025-05-30 13:21:41'),
(2, 'Networking Solutions', 'networking-solutions', '01JWH2QNT6TTFS83P6MH3K24EH.png', '<p>Routers, firewalls, access points, and cloud controllers for secure and seamless connectivity.</p>', NULL, '', '2025-05-30 11:39:47', '2025-05-30 11:39:47'),
(3, 'Power Solutions', 'power-solutions', '01JWH2SD83429W5BJDWXD7CSD1.png', '<p>Reliable UPS systems from top brands to keep your business running.</p>', NULL, '', '2025-05-30 11:40:44', '2025-05-30 11:40:44'),
(4, 'Printing & Office Solutions', 'printing-office-solutions', '01JWH2T3WBHZ0A2FEVHE6P7ECB.png', '<p>All-in-one printers, ink cartridges, and toners for your business needs.</p>', NULL, '', '2025-05-30 11:41:07', '2025-05-30 11:41:07');

-- --------------------------------------------------------

--
-- Table structure for table `site_infos`
--

CREATE TABLE `site_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `compnay_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `compnay_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `compnay_phone1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `compnay_phone2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customers` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_satisfaction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `established` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `compnay_fb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `compnay_insta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `compnay_x` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `compnay_linkd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_header_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_infos`
--

INSERT INTO `site_infos` (`id`, `compnay_address`, `compnay_email`, `compnay_phone1`, `compnay_phone2`, `year_experience`, `customers`, `client_satisfaction`, `established`, `compnay_fb`, `compnay_insta`, `compnay_x`, `compnay_linkd`, `header_logo`, `mobile_header_logo`, `footer_logo`, `created_at`, `updated_at`) VALUES
(1, 'Shop No#29, Abdul Wahed Fikree, Near Al Ghubaiba Bus Station, Bur dubai-UAE.', 'shafeeque@planetplusme.com', '+971 4 222 78 45', '+971 50 792 4946', '22+', '390 k+', '100%', '2015', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://x.com/', 'https://www.linkedin.com/', '01JWG0TB8ZCETYGBEQK4STJYSH.png', '01JWG0TB917ZSHSEB3ZD5938K3.png', '01JWG0TB93N0X28R76MV8W5PP6.png', '2025-05-30 01:09:30', '2025-05-30 03:42:35');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categories_id` bigint(20) UNSIGNED NOT NULL,
  `sub_category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `categories_id`, `sub_category_name`, `sub_category_slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'Patch Cords', 'patch-cords', '2025-05-30 06:13:38', '2025-05-30 06:13:38'),
(2, 1, 'HDMI Cables', 'hdmi-cables', '2025-05-30 06:13:48', '2025-05-30 06:13:48'),
(3, 1, 'NAS Storage', 'nas-storage', '2025-05-30 06:14:00', '2025-05-30 06:14:00'),
(4, 2, 'UPS Tower ', 'ups-tower', '2025-05-30 06:14:15', '2025-05-30 06:14:15'),
(5, 2, 'UPS Rack', 'ups-rack', '2025-05-30 06:14:22', '2025-05-30 06:14:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'absar', 'absarkannur@gmail.com', NULL, '$2y$12$wigBni/e2zFs2Dfo2/Ve6etwXmLHX7sia7Gts1knAOTszW55a2kzC', NULL, '2025-05-30 00:40:10', '2025-05-30 00:40:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_brands_id_foreign` (`brands_id`),
  ADD KEY `products_sub_categories_id_foreign` (`sub_categories_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_infos`
--
ALTER TABLE `site_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_categories_id_foreign` (`categories_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `site_infos`
--
ALTER TABLE `site_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brands_id_foreign` FOREIGN KEY (`brands_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_sub_categories_id_foreign` FOREIGN KEY (`sub_categories_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
