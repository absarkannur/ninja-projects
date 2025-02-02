-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 02, 2025 at 09:18 PM
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
-- Database: `ozonpharma`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `tags` json DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `thumbnail`, `title`, `slug`, `content`, `tags`, `published`, `created_at`, `updated_at`) VALUES
(1, 'articles/01JJABC88YPDMEN0G7TT5DQ9EF.png', 'New age of biological research that changed the', 'new-age-of-biological-research-that-changed-the', '<h2>Test The Articles</h2>', '[\"NEWS\", \"MEDICINE\"]', 1, '2025-01-23 14:09:45', '2025-01-26 22:37:37'),
(2, 'articles/01JK3VPKPR4CWEY43XCV6V9D3R.png', 'The role of new research medicine in gut health cure', 'the-role-of-new-research-medicine-in-gut-health-cure', '<h2>The role of new research medicine in gut health cure</h2><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/png&quot;,&quot;filename&quot;:&quot;about.png&quot;,&quot;filesize&quot;:231372,&quot;height&quot;:466,&quot;href&quot;:&quot;http://localhost:8000/storage/LwWv0NaBcGW5VLQSgm1vbaqmi3O0J3EnPahnuMFo.png&quot;,&quot;url&quot;:&quot;http://localhost:8000/storage/LwWv0NaBcGW5VLQSgm1vbaqmi3O0J3EnPahnuMFo.png&quot;,&quot;width&quot;:810}\" data-trix-content-type=\"image/png\" data-trix-attributes=\"{&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--png\"><a href=\"http://localhost:8000/storage/LwWv0NaBcGW5VLQSgm1vbaqmi3O0J3EnPahnuMFo.png\"><img src=\"http://localhost:8000/storage/LwWv0NaBcGW5VLQSgm1vbaqmi3O0J3EnPahnuMFo.png\" width=\"810\" height=\"466\"><figcaption class=\"attachment__caption\"><span class=\"attachment__name\">about.png</span> <span class=\"attachment__size\">225.95 KB</span></figcaption></a></figure></p><p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '[\"MEDICINE\", \"TECHNOLOGY\"]', 0, '2025-01-23 14:30:50', '2025-02-02 12:07:30'),
(6, 'articles/01JK3VKPPTSYR6P82SQC58GY21.png', 'Getting AI to Reason: Using Neuro-Symbolic Question', 'getting-ai-to-reason-using-neuro-symbolic-question', NULL, '[\"MEDICINE\", \"NEWS\"]', 0, '2025-01-26 23:35:07', '2025-02-02 12:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facilities_categories_id` bigint(20) UNSIGNED NOT NULL,
  `facilities_inner_banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facilities_content` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `facilities_categories_id`, `facilities_inner_banner`, `facilities_content`, `created_at`, `updated_at`) VALUES
(3, 1, '01JJE0MXZN8C4PQ7GJWR57MDVG.png', '<h2>State of the art manufacturing facility</h2><h3>Strategic Asset</h3><p>Jamjoom Pharma considers the manufacturing facilities, systems and people as its core assets. The mission has been and will continue to focus on the manufacturing of high quality, safe and effective products comparable to the best in the Pharma industry worldwide. Prime focus is given to keeping the manufacturing facilities updated and abreast of the latest innovations and advances in the relevant technologies.</p><h3>Location</h3><p>The manufacturing facilities and head office are located at Jeddah, Saudi Arabia.</p><p>&nbsp;</p>', '2025-01-25 00:08:50', '2025-02-02 12:54:47'),
(5, 6, NULL, '<p>Test</p>', '2025-01-25 00:49:23', '2025-01-25 00:49:23'),
(6, 4, NULL, NULL, '2025-01-25 00:49:38', '2025-01-25 00:49:38'),
(7, 2, NULL, NULL, '2025-01-25 00:49:46', '2025-01-25 00:49:46'),
(8, 5, NULL, NULL, '2025-01-25 00:49:55', '2025-01-25 00:49:55'),
(9, 3, NULL, NULL, '2025-01-25 00:50:32', '2025-01-25 00:50:32');

-- --------------------------------------------------------

--
-- Table structure for table `facilities_categories`
--

CREATE TABLE `facilities_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facility_category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facility_category_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facility_category_description` text COLLATE utf8mb4_unicode_ci,
  `facility_category_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facility_category_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facilities_categories`
--

INSERT INTO `facilities_categories` (`id`, `facility_category_name`, `facility_category_slug`, `facility_category_description`, `facility_category_icon`, `facility_category_image`, `created_at`, `updated_at`) VALUES
(1, 'Manufacturing Technology', 'manufacturing-technology', 'We consider the manufacturing facilities, systems and people as its core assets.', '01JJ2DJY3BJ4W6ZKZEK96CQFY2.png', '01JJ2DJY3GVD8XDB44PSQRJ10F.png', '2025-01-20 10:23:32', '2025-01-20 12:23:52'),
(2, 'Research & Development', 'research-development', 'We consider the manufacturing facilities, systems and people as its core assets.', '01JJ2DWVDTHMGYTZ7QKCJB7VMG.png', '01JJ2DRWS9PJD3814EEA7TYEZ5.png', '2025-01-20 12:02:47', '2025-01-20 12:31:10'),
(3, 'Quality System', 'quality-system', 'The stability program ranges from comprehensive storage and testing capabilities', '01JJ2DYDDWM09G4ZKG5BJATSM9.png', '01JJ2DYDDX32TNED7JAJBSJ65K.png', '2025-01-20 12:02:55', '2025-01-20 12:31:33'),
(4, 'Environmental Health & Safety', 'environmental-health-safety', NULL, NULL, '01JJ2E581MMEEPX6V5K0CHF4N4.png', '2025-01-20 12:03:21', '2025-01-20 12:33:52'),
(5, 'Product Development', 'product-development', 'Product development at OZON Pharma is carried out by highly qualified team of professionals', '01JJ2DTW540KDFD9D8Z9VWD8QP.png', '01JJ2DTW56FZ13XHGC3TPJVR5Q.png', '2025-01-20 12:03:35', '2025-01-20 12:28:12'),
(6, 'Business Development', 'business-development', NULL, NULL, '01JJ2E3RSWYKHQ4M3Q4GXYAC9B.png', '2025-01-20 12:03:51', '2025-01-20 12:33:03');

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
(5, '2025_01_20_045515_create_facilities_categories_table', 2),
(6, '2025_01_20_174151_create_therapeutic_categories_table', 3),
(7, '2025_01_21_032255_create_products_table', 4),
(8, '2025_01_23_191855_create_articles_table', 5),
(9, '2025_01_25_050239_create_facilities_table', 6),
(10, '2025_02_02_175653_create_site_infos_table', 7);

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
  `therapeutic_categories_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_description` text COLLATE utf8mb4_unicode_ci,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `therapeutic_categories_id`, `product_name`, `product_description`, `product_image`, `created_at`, `updated_at`) VALUES
(1, 4, 'Amvasc', 'Amvasc is indicated for the first line treatment of', '01JJ3GRQ5MPDAKKTZ69F7FC10E.png', '2025-01-20 22:17:40', '2025-01-20 22:38:41'),
(2, 1, 'Alendro TM', 'Amvasc is indicated for the first line treatment of', '01JJ3GTGZ0TRR69GJ2WSEYY1B0.png', '2025-01-20 22:39:41', '2025-01-20 22:40:57'),
(3, 1, 'Acertin', NULL, '01JJ3GVF737H0SMT7QS17YZ684.png', '2025-01-20 22:40:12', '2025-01-20 22:40:12'),
(4, 3, 'Acilco', 'Test', '01JJ3GWC95J0C4ET7WXT4M1E00.png', '2025-01-20 22:40:41', '2025-01-20 22:40:41');

-- --------------------------------------------------------

--
-- Table structure for table `site_infos`
--

CREATE TABLE `site_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `compnay_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `compnay_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `compnay_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `compnay_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `compnay_fb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `compnay_insta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `compnay_linkd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_infos`
--

INSERT INTO `site_infos` (`id`, `compnay_address`, `compnay_email`, `compnay_phone`, `compnay_time`, `compnay_fb`, `compnay_insta`, `compnay_linkd`, `created_at`, `updated_at`) VALUES
(1, 'Dubai Industrial City, Dubai, UAE', 'info@ozonpharma.ae', '+971 428 2230', 'Mon - Sat 8:00-1800, Sun - Closed', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/', '2025-02-02 12:47:39', '2025-02-02 14:20:14');

-- --------------------------------------------------------

--
-- Table structure for table `therapeutic_categories`
--

CREATE TABLE `therapeutic_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `therapeutic_category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `therapeutic_category_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `therapeutic_category_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `therapeutic_categories`
--

INSERT INTO `therapeutic_categories` (`id`, `therapeutic_category_name`, `therapeutic_category_slug`, `therapeutic_category_image`, `created_at`, `updated_at`) VALUES
(1, 'Cardiovascular', 'cardiovasculara', '01JJ2F370TE5V7W11JN1P6201A.png', '2025-01-20 12:50:14', '2025-01-20 12:50:14'),
(2, 'Dermatology', 'dermatology', '01JJ2F44T8SRW0HJ89C42KNMM5.png', '2025-01-20 12:50:44', '2025-01-20 12:50:44'),
(3, 'Gastrointestinal', 'gastrointestinal', '01JJ2F4Y6DERZ7NR3Z3BXB9DC4.png', '2025-01-20 12:51:10', '2025-01-20 12:51:10'),
(4, 'General Medicine', 'general-medicine', '01JJ2F5WFCNK0A7JF0EQBDAPJX.png', '2025-01-20 12:51:41', '2025-01-20 12:51:41');

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
(1, 'Absar', 'absarkannur@gmail.com', NULL, '$2y$12$SAeYJPNcYypJIOAGmpug0OpixFOv3ui7qrwYi/PhS09Klh84S2W7e', 'pfjdRhkaRnjwidKusk0Cio6ETz9dlB6C1Y0S6PbWtckdOPD4ToChl4wQDoBk', '2024-10-31 06:51:47', '2025-01-20 10:00:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_slug_unique` (`slug`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `facilities_facilities_categories_id_foreign` (`facilities_categories_id`);

--
-- Indexes for table `facilities_categories`
--
ALTER TABLE `facilities_categories`
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
  ADD KEY `products_therapeutic_categories_id_foreign` (`therapeutic_categories_id`);

--
-- Indexes for table `site_infos`
--
ALTER TABLE `site_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `therapeutic_categories`
--
ALTER TABLE `therapeutic_categories`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `facilities_categories`
--
ALTER TABLE `facilities_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `site_infos`
--
ALTER TABLE `site_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `therapeutic_categories`
--
ALTER TABLE `therapeutic_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `facilities`
--
ALTER TABLE `facilities`
  ADD CONSTRAINT `facilities_facilities_categories_id_foreign` FOREIGN KEY (`facilities_categories_id`) REFERENCES `facilities_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_therapeutic_categories_id_foreign` FOREIGN KEY (`therapeutic_categories_id`) REFERENCES `therapeutic_categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
