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
-- Database: `odysseus`
--

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
(5, '2024_11_20_181129_teams', 2),
(6, '2024_11_21_042539_services', 3),
(7, '2024_11_21_184823_services_categories', 4),
(8, '2024_11_21_190645_services_categories_content', 5);

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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_list_header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_list_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_list_description` longtext COLLATE utf8mb4_unicode_ci,
  `service_short_image` longtext COLLATE utf8mb4_unicode_ci,
  `service_short_description` longtext COLLATE utf8mb4_unicode_ci,
  `service_inner_page` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_slug`, `service_list_header`, `service_list_image`, `service_list_description`, `service_short_image`, `service_short_description`, `service_inner_page`, `created_at`, `updated_at`) VALUES
(1, 'brand-building', 'Brand Building', '01JD6J8WWZ9VW8RV911MCACC8S.jpeg', '<ul><li>The problem to solve</li><li>Mission &amp; vision</li><li>Brand essence &amp; unique selling proposition</li><li>Brand visual identity</li><li>Communication standards &amp; architecture</li></ul>', '01JD6K0ETXDEEFHNDQBWQAHG02.png', 'We believe every powerful brand begins with a purpose. We make sure it’s sharp & develop or refresh the brand essence and we bring it to life via brand identity, portfolio architecture and communication standards.', '<h2>We believe every powerful brand begins with a purpose—a problem to solve, a way to enhance people’s lives.</h2><p>We help our clients crystalize or refresh their proposition, by ensuring we address the right CONSUMER &amp; MARKET definition, with a sharp vision &amp; a relevant SUSTAINABLE COMPETITIVE ADVANTAGE .&nbsp;</p>', '2024-11-20 23:30:58', '2024-11-21 12:47:50'),
(2, 'growth-hacking', 'Growth Hacking', '01JD6JB44WTHGHYENTHQDRY4ED.jpeg', '<ul><li>Consumer deep dive</li><li>Competitive analysis</li><li>Market &amp; trends assessment</li><li>Opportunity Areas</li><li>Concept development</li><li>Craft the winning value<br>propositions</li></ul>', '01JD7KMRN1FC1M44RTC2ZBQGGA.png', 'Based on consumer deep dive, markets & trends understanding, we identify the growth pockets most fitting our clients’ brands and with high ability to win.', '<h2>Based on consumer deep dive, markets &amp; trends understanding, we identify the growth pockets most fitting our clients’ brands and with high ability to win.</h2>', '2024-11-20 23:45:27', '2024-11-21 12:53:57'),
(3, 'growth-accelerators', 'Growth Accelerators', '01JD6JD1DZDR44N3HT21PTVZ1C.jpeg', '<ul><li>Portfolio strategy Making choices</li><li>Delight with the core</li><li>Agile consumer centric innovation</li><li>Geographical expansion and prioritization</li></ul>', '01JD7KM8Q0W9EX8DMK89VZVM76.png', 'We define the must win battles, put in place a portfolio strategy that delivers on the client’s needs and activate the pockets of growth via innovation, renovation or expanding the footprint.', '<h2>We define the must win battles, put in place a portfolio strategy that delivers on the client’s needs and activate the pockets of growth via innovation, renovation or expanding the footprint.</h2>', '2024-11-20 23:46:30', '2024-11-21 12:54:12'),
(4, 'cost-optimization', 'Cost Optimization', '01JD6JGM0CN8YHF4MGCVEFBVS3.jpeg', '<ul><li>Key success criteria for consumers</li><li>Identify diluters</li><li>End to end cost structure assessment</li><li>End to end savings</li></ul>', '01JD7KJR41N41XK7Y8ZPXCKSMW.png', 'Together with our clients’ teams, we scan the value chain end to end to identify the areas that could lead to most impactful cost savings, valuing what the consumers values and creating efficiencies for the rest.', '<h2>Together with our clients’ teams, we scan the value chain end to end to identify the areas that could lead to most impactful cost savings, valuing what the consumers values and creating efficiencies for the rest.</h2>', '2024-11-20 23:48:27', '2024-11-21 12:54:41'),
(5, 'brand-experience', 'Brand Experience', '01JD6JNA946RA1PJGRK9497R5A.jpeg', '<ul><li>Big Idea</li><li>Campaign Idea</li><li>Trade story telling - playbooks</li><li>Consumer Touchpoints</li><li>Messaging Matrix</li></ul>', '01JD7KN5QJ3NK05Z1FPETGVBZY.png', '....', NULL, '2024-11-20 23:51:01', '2024-11-21 09:27:40');

-- --------------------------------------------------------

--
-- Table structure for table `services_categories`
--

CREATE TABLE `services_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `services_id` bigint(20) UNSIGNED NOT NULL,
  `service_category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services_categories`
--

INSERT INTO `services_categories` (`id`, `services_id`, `service_category_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'We can support our clients to build or refresh', '2024-11-21 13:30:00', '2024-11-21 13:32:26'),
(3, 2, 'THE CONTEXT', '2024-11-21 14:12:15', '2024-11-21 14:13:52'),
(4, 2, 'Opportunity identification', '2024-11-21 14:12:32', '2024-11-21 14:13:58'),
(5, 2, 'Crafting the winning solution', '2024-11-21 14:12:45', '2024-11-21 14:14:05'),
(6, 3, 'Making choices', '2024-11-21 14:14:26', '2024-11-21 14:14:26'),
(7, 3, 'ACTIVATING GROWTH POCKETS', '2024-11-21 14:14:42', '2024-11-21 14:14:42'),
(8, 4, 'The problem to solve', '2024-11-21 14:15:50', '2024-11-21 14:15:50');

-- --------------------------------------------------------

--
-- Table structure for table `services_categories_contents`
--

CREATE TABLE `services_categories_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `services_categories_id` bigint(20) UNSIGNED NOT NULL,
  `service_category_contect_image` longtext COLLATE utf8mb4_unicode_ci,
  `service_category_contect_description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services_categories_contents`
--

INSERT INTO `services_categories_contents` (`id`, `services_categories_id`, `service_category_contect_image`, `service_category_contect_description`, `created_at`, `updated_at`) VALUES
(1, 1, '\"01JD83H5DBEFWP31D4P37DWQSQ.png\"', '<h3>Brand essence</h3>', '2024-11-21 14:05:05', '2024-11-21 14:05:05'),
(2, 1, '\"01JD83S84AVDA8VN65MV02HKG3.png\"', '<h3>Brand identity</h3>', '2024-11-21 14:09:30', '2024-11-21 14:09:30'),
(3, 1, '\"01JD83T6PBF0P6DTPQPN0G4EGX.png\"', '<h3>Portfolio architecture</h3>', '2024-11-21 14:10:02', '2024-11-21 14:10:02'),
(4, 1, '\"01JD83V3J3FSFJZ89BR57M7QAN.png\"', '<h3>Communication standards</h3>', '2024-11-21 14:10:31', '2024-11-21 14:10:31'),
(5, 3, '\"01JD84EHCY2J4XPP5TY9Q1XTN6.png\"', '<h3>Consumer Deep Dive</h3><ul><li>Consumer typologies / segmentation</li><li>Demographics &amp; their affinity with the brand</li><li>Needs, motivations, tensions</li><li>Usage &amp; attitude. Frequency &amp; penetration</li><li>Demand moments</li></ul>', '2024-11-21 14:21:08', '2024-11-21 14:21:08'),
(6, 3, '\"01JD84PD4R1Q0WF0KPQZQBG2H8.png\"', '<h3>Market &amp; Trends Understanding</h3><ul><li>Market definition</li><li>Segmentation, sizing, evolution</li><li>Geographical &amp; segment deep dive</li><li>Macro- trends &amp; manifestation</li></ul>', '2024-11-21 14:25:26', '2024-11-21 14:25:26'),
(7, 4, '\"01JD84TMP996R8Y0PE0Q3JPVNH.png\"', '<h3>Competitive Analysis</h3><ul><li>Competitors sizing &amp; evolution</li><li>Retail data deep dive, diagnosis</li><li>Portfolio architecture, Segmentations</li><li>Communication analysis (spent, message)</li><li>Brand perception</li></ul>', '2024-11-21 14:27:45', '2024-11-21 14:27:45'),
(8, 4, '\"01JD84WXBYFRVB5AH5PD35WV3W.png\"', '<h3>Prioritize Opportunity Areas</h3><ul><li>Identify Ownable territories</li><li>Sizing Opportunity Areas</li><li>Assessing fit with Brand and make choices</li></ul>', '2024-11-21 14:28:59', '2024-11-21 14:28:59'),
(9, 5, '\"01JD850530BCFWST2SFPX0164A.gif\"', '<h3>Ideate on Concepts, Test &amp; Refine</h3><ul><li>deation on priority Opportunity Areas</li><li>Co-creation with Consumers</li><li>Agile testing. Refine &amp; validate</li></ul>', '2024-11-21 14:30:45', '2024-11-21 14:30:45'),
(10, 5, '\"01JD852S59C1E1FH776VR72PEX.png\"', '<h3>Create Winning Value Proposition</h3><ul><li>Sustainable competitive advantage</li><li>Relevant claims, benefits</li><li>Format, technology</li><li>Packaging (design, structural material)</li><li>Pricing, size</li></ul>', '2024-11-21 14:32:11', '2024-11-21 14:32:11'),
(11, 6, '\"01JD855AXNPC0X2CCQMG4PQAK2.png\"', '<h3>Building portfolio strategy</h3>', '2024-11-21 14:33:35', '2024-11-21 14:33:35'),
(12, 6, '\"01JD856BZK0ZETYVPKJKN3YXYM.png\"', '<h3>Driving premiumization</h3>', '2024-11-21 14:34:09', '2024-11-21 14:34:09'),
(13, 7, '\"01JD858H6WG5KMWB9J51PQ3G14.png\"', '<h3>Own-able Brand Territories</h3>', '2024-11-21 14:35:20', '2024-11-21 14:35:20'),
(14, 7, '\"01JD859HPR3GK7VXDQ88X97D1Y.png\"', '<h3>Target Touch-points</h3>', '2024-11-21 14:35:53', '2024-11-21 14:35:53'),
(15, 7, '\"01JD85B0DSGWNPXCXJW7MYYAFX.png\"', '<h3>Expand footprint&nbsp;</h3>', '2024-11-21 14:36:41', '2024-11-21 14:36:41'),
(16, 8, '\"01JD85CBJZNEBM0V1MJ0F3ZKJT.png\"', '<h3>Identify diluters</h3>', '2024-11-21 14:37:25', '2024-11-21 14:37:25'),
(17, 8, '\"01JD85F7EHXJKCBRPH3SBBA77X.png\"', '<h3>Key success criteria for consumers</h3>', '2024-11-21 14:38:59', '2024-11-21 14:38:59'),
(18, 8, '\"01JD85GDMQJNZENXCKSHAT88W9.png\"', '<h3>Focus optimization where it matters</h3>', '2024-11-21 14:39:38', '2024-11-21 14:39:38');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `companies` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `image`, `companies`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Anca Beta', '01JD5EH33RFQHAD9PX8JGPSB4X.jpeg', '[\"01JD5H0AGSC06MSVAAVVEZZ4Q3.png\",\"01JD5GH61GEPPEMBJPVRBQHXPZ.jpeg\",\"01JD5GH61EYNPSJBKAPSZJ67CA.png\"]', '<ul><li>25+ years in Global, Zone (Europe / MENA), regional (Adriatic) and country roles</li><li>Leadership roles in the largest FMCG &amp; Global Advertising Companies</li><li>Global role as Market Consultant</li><li>Business Strategy, Innovation Platforms, Margin Management, Brand Rejuvenation, Regional Marketing campaigns</li><li>Proven success in business turnarounds: return to growth &amp; profit ( businesses&nbsp; &nbsp; ranging from 20 up to 800M USD)</li><li>Work aside, Anca is passionate about&nbsp; &nbsp; history, fitness and nutrition</li></ul>', '2024-11-20 13:19:34', '2024-11-20 14:47:21'),
(3, 'Karim Al Bitar', '01JD5H96GRQVQADJ10PEAXW0VD.jpeg', '[\"01JD5H96GTYQP9GZJQYBSDMKKE.png\",\"01JD5H96GV0BHX410DFZEDR2P8.png\",\"01JD5H96GV0BHX410DFZEDR2P9.png\",\"01JD5H96GW87C0WHPZHDY8NRBF.png\"]', '<ul><li>18+ years of experience in Brand Building, Consumer Insights and Market Intelligence across 34 countries, with a focus on MENA</li><li>Leadership roles across the largest FMCG and top 2 Market Research Companies in the world</li><li>Market Business Strategies, Brand Building Strategies, Innovation/Renovation Strategies, Market/Consumer/Shopper Research activation, Behavioural Research</li><li>Work aside, Karim is passionate about automotives, literature and trading. Having started as a qualitative researcher, his interest in human behaviour is never fading!</li></ul>', '2024-11-20 14:07:41', '2024-11-20 14:07:41');

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
(1, 'Absar', 'absarkannur@gmail.com', NULL, '$2y$12$yvktPNLXwTWSdwLg0DGFiu/ke3SCSlTe2ZOIYQif6Mw2UqxGOtotq', NULL, '2024-11-19 11:06:27', '2024-11-19 11:06:27');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_categories`
--
ALTER TABLE `services_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_categories_services_id_foreign` (`services_id`);

--
-- Indexes for table `services_categories_contents`
--
ALTER TABLE `services_categories_contents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_categories_contect_services_categories_id_foreign` (`services_categories_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services_categories`
--
ALTER TABLE `services_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `services_categories_contents`
--
ALTER TABLE `services_categories_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `services_categories`
--
ALTER TABLE `services_categories`
  ADD CONSTRAINT `services_categories_services_id_foreign` FOREIGN KEY (`services_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `services_categories_contents`
--
ALTER TABLE `services_categories_contents`
  ADD CONSTRAINT `services_categories_contect_services_categories_id_foreign` FOREIGN KEY (`services_categories_id`) REFERENCES `services_categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
