-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 06, 2025 at 03:49 PM
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
-- Database: `mycart`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customers_id` bigint(20) UNSIGNED NOT NULL,
  `countries_id` bigint(20) UNSIGNED NOT NULL,
  `address_line_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landmark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_address` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `customers_id`, `countries_id`, `address_line_1`, `address_line_2`, `city`, `postal_code`, `landmark`, `phone_number`, `default_address`, `created_at`, `updated_at`) VALUES
(3, 1, 398, 'Media City, GBS Building, 101, 102', 'GBS Building, 101, 102', 'Dubai', '000000', 'Costa Cafe , GBS Building', '0562364538', 0, '2025-04-03 23:47:04', '2025-04-03 23:47:04'),
(4, 6, 398, 'Media City, GBS Building, 101, 102', 'GBS Building, 101, 102', 'Dubai', '870304', 'Costa Cafe , GBS Building', '0562364538', 0, '2025-04-04 13:41:50', '2025-04-04 13:41:50');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_ref` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_slug`, `brand_ref`, `brand_description`, `created_at`, `updated_at`) VALUES
(3, 'Gifts By Anum', 'gifts-by-anum', 'GBA', 'Gifts By Anum', '2025-03-20 00:58:21', '2025-03-24 03:38:30');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_ref` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_slug`, `category_ref`, `category_description`, `created_at`, `updated_at`) VALUES
(1, 'Cake', 'cake', 'CK', NULL, '2025-03-20 03:40:06', '2025-03-24 03:39:43'),
(2, 'Flower', 'flower', 'FW', NULL, '2025-03-20 04:54:36', '2025-03-24 03:40:08');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_name`, `country_code`, `created_at`, `updated_at`) VALUES
(171, 'Afghanistan', 'AF', NULL, NULL),
(172, 'Åland Islands', 'AX', NULL, NULL),
(173, 'Albania', 'AL', NULL, NULL),
(174, 'Algeria', 'DZ', NULL, NULL),
(175, 'American Samoa', 'AS', NULL, NULL),
(176, 'AndorrA', 'AD', NULL, NULL),
(177, 'Angola', 'AO', NULL, NULL),
(178, 'Anguilla', 'AI', NULL, NULL),
(179, 'Antarctica', 'AQ', NULL, NULL),
(180, 'Antigua and Barbuda', 'AG', NULL, NULL),
(181, 'Argentina', 'AR', NULL, NULL),
(182, 'Armenia', 'AM', NULL, NULL),
(183, 'Aruba', 'AW', NULL, NULL),
(184, 'Australia', 'AU', NULL, NULL),
(185, 'Austria', 'AT', NULL, NULL),
(186, 'Azerbaijan', 'AZ', NULL, NULL),
(187, 'Bahamas', 'BS', NULL, NULL),
(188, 'Bahrain', 'BH', NULL, NULL),
(189, 'Bangladesh', 'BD', NULL, NULL),
(190, 'Barbados', 'BB', NULL, NULL),
(191, 'Belarus', 'BY', NULL, NULL),
(192, 'Belgium', 'BE', NULL, NULL),
(193, 'Belize', 'BZ', NULL, NULL),
(194, 'Benin', 'BJ', NULL, NULL),
(195, 'Bermuda', 'BM', NULL, NULL),
(196, 'Bhutan', 'BT', NULL, NULL),
(197, 'Bolivia', 'BO', NULL, NULL),
(198, 'Bosnia and Herzegovina', 'BA', NULL, NULL),
(199, 'Botswana', 'BW', NULL, NULL),
(200, 'Bouvet Island', 'BV', NULL, NULL),
(201, 'Brazil', 'BR', NULL, NULL),
(202, 'British Indian Ocean Territory', 'IO', NULL, NULL),
(203, 'Brunei Darussalam', 'BN', NULL, NULL),
(204, 'Bulgaria', 'BG', NULL, NULL),
(205, 'Burkina Faso', 'BF', NULL, NULL),
(206, 'Burundi', 'BI', NULL, NULL),
(207, 'Cambodia', 'KH', NULL, NULL),
(208, 'Cameroon', 'CM', NULL, NULL),
(209, 'Canada', 'CA', NULL, NULL),
(210, 'Cape Verde', 'CV', NULL, NULL),
(211, 'Cayman Islands', 'KY', NULL, NULL),
(212, 'Central African Republic', 'CF', NULL, NULL),
(213, 'Chad', 'TD', NULL, NULL),
(214, 'Chile', 'CL', NULL, NULL),
(215, 'China', 'CN', NULL, NULL),
(216, 'Christmas Island', 'CX', NULL, NULL),
(217, 'Cocos (Keeling) Islands', 'CC', NULL, NULL),
(218, 'Colombia', 'CO', NULL, NULL),
(219, 'Comoros', 'KM', NULL, NULL),
(220, 'Congo', 'CG', NULL, NULL),
(221, 'Congo, The Democratic Republic of the', 'CD', NULL, NULL),
(222, 'Cook Islands', 'CK', NULL, NULL),
(223, 'Costa Rica', 'CR', NULL, NULL),
(224, 'Cote D`Ivoire', 'CI', NULL, NULL),
(225, 'Croatia', 'HR', NULL, NULL),
(226, 'Cuba', 'CU', NULL, NULL),
(227, 'Cyprus', 'CY', NULL, NULL),
(228, 'Czech Republic', 'CZ', NULL, NULL),
(229, 'Denmark', 'DK', NULL, NULL),
(230, 'Djibouti', 'DJ', NULL, NULL),
(231, 'Dominica', 'DM', NULL, NULL),
(232, 'Dominican Republic', 'DO', NULL, NULL),
(233, 'Ecuador', 'EC', NULL, NULL),
(234, 'Egypt', 'EG', NULL, NULL),
(235, 'El Salvador', 'SV', NULL, NULL),
(236, 'Equatorial Guinea', 'GQ', NULL, NULL),
(237, 'Eritrea', 'ER', NULL, NULL),
(238, 'Estonia', 'EE', NULL, NULL),
(239, 'Ethiopia', 'ET', NULL, NULL),
(240, 'Falkland Islands (Malvinas)', 'FK', NULL, NULL),
(241, 'Faroe Islands', 'FO', NULL, NULL),
(242, 'Fiji', 'FJ', NULL, NULL),
(243, 'Finland', 'FI', NULL, NULL),
(244, 'France', 'FR', NULL, NULL),
(245, 'French Guiana', 'GF', NULL, NULL),
(246, 'French Polynesia', 'PF', NULL, NULL),
(247, 'French Southern Territories', 'TF', NULL, NULL),
(248, 'Gabon', 'GA', NULL, NULL),
(249, 'Gambia', 'GM', NULL, NULL),
(250, 'Georgia', 'GE', NULL, NULL),
(251, 'Germany', 'DE', NULL, NULL),
(252, 'Ghana', 'GH', NULL, NULL),
(253, 'Gibraltar', 'GI', NULL, NULL),
(254, 'Greece', 'GR', NULL, NULL),
(255, 'Greenland', 'GL', NULL, NULL),
(256, 'Grenada', 'GD', NULL, NULL),
(257, 'Guadeloupe', 'GP', NULL, NULL),
(258, 'Guam', 'GU', NULL, NULL),
(259, 'Guatemala', 'GT', NULL, NULL),
(260, 'Guernsey', 'GG', NULL, NULL),
(261, 'Guinea', 'GN', NULL, NULL),
(262, 'Guinea-Bissau', 'GW', NULL, NULL),
(263, 'Guyana', 'GY', NULL, NULL),
(264, 'Haiti', 'HT', NULL, NULL),
(265, 'Heard Island and Mcdonald Islands', 'HM', NULL, NULL),
(266, 'Holy See (Vatican City State)', 'VA', NULL, NULL),
(267, 'Honduras', 'HN', NULL, NULL),
(268, 'Hong Kong', 'HK', NULL, NULL),
(269, 'Hungary', 'HU', NULL, NULL),
(270, 'Iceland', 'IS', NULL, NULL),
(271, 'India', 'IN', NULL, NULL),
(272, 'Indonesia', 'code', NULL, NULL),
(273, 'Iran, Islamic Republic Of', 'IR', NULL, NULL),
(274, 'Iraq', 'IQ', NULL, NULL),
(275, 'Ireland', 'IE', NULL, NULL),
(276, 'Isle of Man', 'IM', NULL, NULL),
(277, 'Israel', 'IL', NULL, NULL),
(278, 'Italy', 'IT', NULL, NULL),
(279, 'Jamaica', 'JM', NULL, NULL),
(280, 'Japan', 'JP', NULL, NULL),
(281, 'Jersey', 'JE', NULL, NULL),
(282, 'Jordan', 'JO', NULL, NULL),
(283, 'Kazakhstan', 'KZ', NULL, NULL),
(284, 'Kenya', 'KE', NULL, NULL),
(285, 'Kiribati', 'KI', NULL, NULL),
(286, 'Korea, Democratic People`s Republic of', 'KP', NULL, NULL),
(287, 'Korea, Republic of', 'KR', NULL, NULL),
(288, 'Kuwait', 'KW', NULL, NULL),
(289, 'Kyrgyzstan', 'KG', NULL, NULL),
(290, 'Lao People`s Democratic Republic', 'LA', NULL, NULL),
(291, 'Latvia', 'LV', NULL, NULL),
(292, 'Lebanon', 'LB', NULL, NULL),
(293, 'Lesotho', 'LS', NULL, NULL),
(294, 'Liberia', 'LR', NULL, NULL),
(295, 'Libyan Arab Jamahiriya', 'LY', NULL, NULL),
(296, 'Liechtenstein', 'LI', NULL, NULL),
(297, 'Lithuania', 'LT', NULL, NULL),
(298, 'Luxembourg', 'LU', NULL, NULL),
(299, 'Macao', 'MO', NULL, NULL),
(300, 'Macedonia, The Former Yugoslav Republic of', 'MK', NULL, NULL),
(301, 'Madagascar', 'MG', NULL, NULL),
(302, 'Malawi', 'MW', NULL, NULL),
(303, 'Malaysia', 'MY', NULL, NULL),
(304, 'Maldives', 'MV', NULL, NULL),
(305, 'Mali', 'ML', NULL, NULL),
(306, 'Malta', 'MT', NULL, NULL),
(307, 'Marshall Islands', 'MH', NULL, NULL),
(308, 'Martinique', 'MQ', NULL, NULL),
(309, 'Mauritania', 'MR', NULL, NULL),
(310, 'Mauritius', 'MU', NULL, NULL),
(311, 'Mayotte', 'YT', NULL, NULL),
(312, 'Mexico', 'MX', NULL, NULL),
(313, 'Micronesia, Federated States of', 'FM', NULL, NULL),
(314, 'Moldova, Republic of', 'MD', NULL, NULL),
(315, 'Monaco', 'MC', NULL, NULL),
(316, 'Mongolia', 'MN', NULL, NULL),
(317, 'Montserrat', 'MS', NULL, NULL),
(318, 'Morocco', 'MA', NULL, NULL),
(319, 'Mozambique', 'MZ', NULL, NULL),
(320, 'Myanmar', 'MM', NULL, NULL),
(321, 'Namibia', 'NA', NULL, NULL),
(322, 'Nauru', 'NR', NULL, NULL),
(323, 'Nepal', 'NP', NULL, NULL),
(324, 'Netherlands', 'NL', NULL, NULL),
(325, 'Netherlands Antilles', 'AN', NULL, NULL),
(326, 'New Caledonia', 'NC', NULL, NULL),
(327, 'New Zealand', 'NZ', NULL, NULL),
(328, 'Nicaragua', 'NI', NULL, NULL),
(329, 'Niger', 'NE', NULL, NULL),
(330, 'Nigeria', 'NG', NULL, NULL),
(331, 'Niue', 'NU', NULL, NULL),
(332, 'Norfolk Island', 'NF', NULL, NULL),
(333, 'Northern Mariana Islands', 'MP', NULL, NULL),
(334, 'Norway', 'NO', NULL, NULL),
(335, 'Oman', 'OM', NULL, NULL),
(336, 'Pakistan', 'PK', NULL, NULL),
(337, 'Palau', 'PW', NULL, NULL),
(338, 'Palestinian Territory, Occupied', 'PS', NULL, NULL),
(339, 'Panama', 'PA', NULL, NULL),
(340, 'Papua New Guinea', 'PG', NULL, NULL),
(341, 'Paraguay', 'PY', NULL, NULL),
(342, 'Peru', 'PE', NULL, NULL),
(343, 'Philippines', 'PH', NULL, NULL),
(344, 'Pitcairn', 'PN', NULL, NULL),
(345, 'Poland', 'PL', NULL, NULL),
(346, 'Portugal', 'PT', NULL, NULL),
(347, 'Puerto Rico', 'PR', NULL, NULL),
(348, 'Qatar', 'QA', NULL, NULL),
(349, 'Reunion', 'RE', NULL, NULL),
(350, 'Romania', 'RO', NULL, NULL),
(351, 'Russian Federation', 'RU', NULL, NULL),
(352, 'RWANDA', 'RW', NULL, NULL),
(353, 'Saint Helena', 'SH', NULL, NULL),
(354, 'Saint Kitts and Nevis', 'KN', NULL, NULL),
(355, 'Saint Lucia', 'LC', NULL, NULL),
(356, 'Saint Pierre and Miquelon', 'PM', NULL, NULL),
(357, 'Saint Vincent and the Grenadines', 'VC', NULL, NULL),
(358, 'Samoa', 'WS', NULL, NULL),
(359, 'San Marino', 'SM', NULL, NULL),
(360, 'Sao Tome and Principe', 'ST', NULL, NULL),
(361, 'Saudi Arabia', 'SA', NULL, NULL),
(362, 'Senegal', 'SN', NULL, NULL),
(363, 'Serbia and Montenegro', 'CS', NULL, NULL),
(364, 'Seychelles', 'SC', NULL, NULL),
(365, 'Sierra Leone', 'SL', NULL, NULL),
(366, 'Singapore', 'SG', NULL, NULL),
(367, 'Slovakia', 'SK', NULL, NULL),
(368, 'Slovenia', 'SI', NULL, NULL),
(369, 'Solomon Islands', 'SB', NULL, NULL),
(370, 'Somalia', 'SO', NULL, NULL),
(371, 'South Africa', 'ZA', NULL, NULL),
(372, 'South Georgia and the South Sandwich Islands', 'GS', NULL, NULL),
(373, 'Spain', 'ES', NULL, NULL),
(374, 'Sri Lanka', 'LK', NULL, NULL),
(375, 'Sudan', 'SD', NULL, NULL),
(376, 'Suriname', 'SR', NULL, NULL),
(377, 'Svalbard and Jan Mayen', 'SJ', NULL, NULL),
(378, 'Swaziland', 'SZ', NULL, NULL),
(379, 'Sweden', 'SE', NULL, NULL),
(380, 'Switzerland', 'CH', NULL, NULL),
(381, 'Syrian Arab Republic', 'SY', NULL, NULL),
(382, 'Taiwan, Province of China', 'TW', NULL, NULL),
(383, 'Tajikistan', 'TJ', NULL, NULL),
(384, 'Tanzania, United Republic of', 'TZ', NULL, NULL),
(385, 'Thailand', 'TH', NULL, NULL),
(386, 'Timor-Leste', 'TL', NULL, NULL),
(387, 'Togo', 'TG', NULL, NULL),
(388, 'Tokelau', 'TK', NULL, NULL),
(389, 'Tonga', 'TO', NULL, NULL),
(390, 'Trinidad and Tobago', 'TT', NULL, NULL),
(391, 'Tunisia', 'TN', NULL, NULL),
(392, 'Turkey', 'TR', NULL, NULL),
(393, 'Turkmenistan', 'TM', NULL, NULL),
(394, 'Turks and Caicos Islands', 'TC', NULL, NULL),
(395, 'Tuvalu', 'TV', NULL, NULL),
(396, 'Uganda', 'UG', NULL, NULL),
(397, 'Ukraine', 'UA', NULL, NULL),
(398, 'United Arab Emirates', 'AE', NULL, NULL),
(399, 'United Kingdom', 'GB', NULL, NULL),
(400, 'United States', 'US', NULL, NULL),
(401, 'United States Minor Outlying Islands', 'UM', NULL, NULL),
(402, 'Uruguay', 'UY', NULL, NULL),
(403, 'Uzbekistan', 'UZ', NULL, NULL),
(404, 'Vanuatu', 'VU', NULL, NULL),
(405, 'Venezuela', 'VE', NULL, NULL),
(406, 'Viet Nam', 'VN', NULL, NULL),
(407, 'Virgin Islands, British', 'VG', NULL, NULL),
(408, 'Virgin Islands, U.S.', 'VI', NULL, NULL),
(409, 'Wallis and Futuna', 'WF', NULL, NULL),
(410, 'Western Sahara', 'EH', NULL, NULL),
(411, 'Yemen', 'YE', NULL, NULL),
(412, 'Zambia', 'ZM', NULL, NULL),
(413, 'Zimbabwe', 'ZW', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Muhammed Absar Seeavyi', 'absar.design@gmail.com', NULL, '$2y$12$u84qxWoEwkWNqUpJWk0DIu1wCc1WZ7a9A5YnHrKIeMIickAeESGQa', 'Ksif8mK3bdycoM3v3QUxmCP0slGtUOtHMBMtxv6uDL7Zygf4Eqh1cxODX07B', '2025-03-19 03:10:16', '2025-04-02 11:48:07'),
(4, 'Irfana Absar', 'absarkannur@gmail.com', NULL, '$2y$12$ymmi5NIBp2mvCfMnDCqAsuk4BwOrltTZCkWI49agggptfDkMguqYO', NULL, '2025-03-22 23:07:18', '2025-03-25 02:57:00'),
(6, 'Emin Omer', 'emin@gmail.com', NULL, '$2y$12$wwJqNuxiY/Zv7QZWKpYyx.6vHy.6K6mAmNWsa9.8K9fJOlN8HbsDu', 'fPHwu9ufDJYvCJFPV514mOsh7YRw7MBRthOE8XxwqN0AKrY8KWoGfsklJUsd', '2025-03-27 03:10:30', '2025-04-02 12:02:40');

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
(6, '2025_03_19_080041_create_customers_table', 2),
(7, '2025_03_19_085013_create_brands_table', 3),
(8, '2025_03_19_090139_create_categories_table', 4),
(10, '2025_03_20_090628_create_sub_categories_table', 6),
(13, '2025_03_21_090022_create_countries_table', 9),
(14, '2025_03_20_102920_create_addresses_table', 10),
(15, '2025_03_21_093727_create_payment_types_table', 11),
(16, '2025_03_21_055637_create_payment_information_table', 12),
(17, '2025_03_21_095622_create_offers_table', 13),
(22, '2025_03_22_113658_create_taxes_table', 16),
(28, '2025_03_20_073358_create_products_table', 19),
(29, '2025_03_23_061259_create_shipping_methods_table', 20),
(32, '2025_03_21_105717_create_orders_table', 23),
(33, '2025_03_22_121743_create_order_items_table', 24),
(34, '2025_03_25_090407_create_payments_transactions_table', 25);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `offer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `offer_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_discount_percent` double NOT NULL,
  `offer_end_date` date DEFAULT NULL,
  `offer_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `offer_name`, `offer_description`, `offer_discount_percent`, `offer_end_date`, `offer_status`, `created_at`, `updated_at`) VALUES
(1, '10% Offer', '10% Offers for all users', 10, '2025-03-31', 'active', '2025-03-22 01:33:41', '2025-03-22 07:05:21');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customers_id` bigint(20) UNSIGNED NOT NULL,
  `shipping_methods_id` bigint(20) UNSIGNED DEFAULT NULL,
  `payment_types_id` bigint(20) UNSIGNED NOT NULL,
  `addresses_id` bigint(20) UNSIGNED DEFAULT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_number`, `customers_id`, `shipping_methods_id`, `payment_types_id`, `addresses_id`, `order_status`, `order_date`, `created_at`, `updated_at`) VALUES
(21, 'ORD-000001', 6, NULL, 3, 4, 'new', '2025-04-04', '2025-04-04 13:47:37', '2025-04-04 13:47:37'),
(22, 'ORD-000002', 6, NULL, 4, 4, 'new', '2025-04-04', '2025-04-04 13:49:11', '2025-04-04 13:49:11'),
(24, 'ORD-000003', 1, NULL, 3, 3, 'new', '2025-04-04', '2025-04-04 16:14:25', '2025-04-04 16:14:25'),
(25, 'ORD-000004', 1, NULL, 4, 3, 'new', '2025-04-04', '2025-04-04 16:26:16', '2025-04-04 16:26:16');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orders_id` bigint(20) UNSIGNED NOT NULL,
  `products_id` bigint(20) UNSIGNED NOT NULL,
  `order_qty` int(11) NOT NULL DEFAULT '0',
  `order_price` double NOT NULL DEFAULT '0',
  `order_discount_percent` double NOT NULL DEFAULT '0',
  `order_tax_percent` double NOT NULL DEFAULT '0',
  `order_shipping_charge` double DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `orders_id`, `products_id`, `order_qty`, `order_price`, `order_discount_percent`, `order_tax_percent`, `order_shipping_charge`, `created_at`, `updated_at`) VALUES
(18, 21, 1, 2, 160, 0, 0, 0, '2025-04-04 13:47:37', '2025-04-04 13:47:37'),
(19, 21, 2, 1, 450, 0, 0, 0, '2025-04-04 13:47:37', '2025-04-04 13:47:37'),
(20, 21, 3, 1, 410, 0, 0, 0, '2025-04-04 13:47:37', '2025-04-04 13:47:37'),
(21, 21, 4, 1, 600, 0, 0, 0, '2025-04-04 13:47:37', '2025-04-04 13:47:37'),
(22, 22, 1, 2, 160, 0, 0, 0, '2025-04-04 13:49:11', '2025-04-04 13:49:11'),
(23, 22, 2, 1, 450, 0, 0, 0, '2025-04-04 13:49:11', '2025-04-04 13:49:11'),
(24, 22, 3, 1, 410, 0, 0, 0, '2025-04-04 13:49:11', '2025-04-04 13:49:11'),
(25, 22, 4, 1, 600, 0, 0, 0, '2025-04-04 13:49:11', '2025-04-04 13:49:11'),
(27, 24, 2, 1, 450, 0, 0, 0, '2025-04-04 16:14:25', '2025-04-04 16:14:25'),
(28, 25, 2, 1, 450, 0, 0, 0, '2025-04-04 16:26:16', '2025-04-04 16:26:16');

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
-- Table structure for table `payments_transactions`
--

CREATE TABLE `payments_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orders_id` bigint(20) UNSIGNED NOT NULL,
  `payment_types_id` bigint(20) UNSIGNED NOT NULL,
  `payment_informations_id` bigint(20) UNSIGNED DEFAULT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments_transactions`
--

INSERT INTO `payments_transactions` (`id`, `orders_id`, `payment_types_id`, `payment_informations_id`, `payment_status`, `created_at`, `updated_at`) VALUES
(11, 21, 3, NULL, 'pending', '2025-04-04 13:47:37', '2025-04-04 13:47:37'),
(12, 22, 4, 3, 'complete', '2025-04-04 13:49:11', '2025-04-04 13:49:11'),
(14, 24, 3, NULL, 'pending', '2025-04-04 16:14:25', '2025-04-04 16:14:25'),
(15, 25, 4, 2, 'complete', '2025-04-04 16:26:16', '2025-04-04 16:26:16');

-- --------------------------------------------------------

--
-- Table structure for table `payment_informations`
--

CREATE TABLE `payment_informations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customers_id` bigint(20) UNSIGNED NOT NULL,
  `payment_types_id` bigint(20) UNSIGNED NOT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_holder_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expiry_month` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expiry_year` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_informations`
--

INSERT INTO `payment_informations` (`id`, `customers_id`, `payment_types_id`, `provider`, `card_holder_name`, `card_type`, `card_no`, `expiry_month`, `expiry_year`, `created_at`, `updated_at`) VALUES
(2, 1, 4, 'Federal Bank PVT LTD', 'MUHAMMED ABSAR SEEVAY', 'Master', '4242-4242-4242-4242', '02', '29', '2025-04-03 22:27:48', '2025-04-04 13:40:38'),
(3, 6, 4, 'HSBC Bank LTD', 'EMIN OMER', 'Master', '3457-3452-2343-3343', '04', '25', '2025-04-04 13:35:08', '2025-04-04 13:41:17');

-- --------------------------------------------------------

--
-- Table structure for table `payment_types`
--

CREATE TABLE `payment_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type_short` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type_visible` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_types`
--

INSERT INTO `payment_types` (`id`, `payment_type`, `payment_type_short`, `payment_type_visible`, `created_at`, `updated_at`) VALUES
(3, 'Cash On Delivery', 'COD', 1, '2025-03-21 04:14:14', '2025-04-03 22:13:41'),
(4, 'Credit Card', 'CAD', 1, '2025-03-21 04:14:26', '2025-04-03 22:13:35');

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
  `offers_id` bigint(20) UNSIGNED DEFAULT NULL,
  `taxes_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_description` longtext COLLATE utf8mb4_unicode_ci,
  `product_content` longtext COLLATE utf8mb4_unicode_ci,
  `product_images` longtext COLLATE utf8mb4_unicode_ci,
  `product_original_price` double DEFAULT NULL,
  `product_sales_price` double DEFAULT NULL,
  `product_qty_in_stock` double DEFAULT NULL,
  `product_sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brands_id`, `sub_categories_id`, `offers_id`, `taxes_id`, `product_name`, `product_slug`, `product_description`, `product_content`, `product_images`, `product_original_price`, `product_sales_price`, `product_qty_in_stock`, `product_sku`, `product_status`, `created_at`, `updated_at`) VALUES
(1, 3, 3, NULL, NULL, 'Product 1', 'product-1', 'Nulla tincidunt erat lacus, a tempor est semper in. Proin ut ligula nulla.', NULL, '[\"01JQA4WVRTW9VMX1J0GH86BB16.jpg\",\"cdn-products\\/01JQA5PQR353XWAN9WJC14M6NG.png\"]', 100, 160, 4, 'SKU-GBA-CK-1', 1, '2025-03-23 03:58:37', '2025-03-28 03:11:24'),
(2, 3, 2, 1, 1, 'Product 2', 'product-2', 'Test', NULL, '[\"cdn-products\\/01JQA4SBYJ4F821CRD9PP0JM0T.png\"]', 290, 450, 10, 'SKU-GBA-CK-2', 0, '2025-03-24 04:11:12', '2025-03-26 15:56:24'),
(3, 3, 4, 1, 1, 'Product 3', 'product-3', 'Chees Cake', NULL, '[\"cdn-products\\/01JQG4D61YGSTTR5RY28NH4B0E.jpeg\"]', 230, 410, 10, 'SKU-GBA-CK-3', 1, '2025-03-28 23:31:17', '2025-03-28 23:32:48'),
(4, 3, 4, NULL, NULL, 'Product 4', 'product-4', 'Blueberry Lemon Cake', NULL, '[\"cdn-products\\/01JQG4K3YC8SJSBBG1GJVP1277.jpg\"]', 300, 600, 3, 'SKU-GBA-CK-4', 1, '2025-03-28 23:34:32', '2025-03-28 23:34:32');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_methods`
--

CREATE TABLE `shipping_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipping_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_charge` double NOT NULL DEFAULT '0',
  `shipping_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_methods`
--

INSERT INTO `shipping_methods` (`id`, `shipping_title`, `shipping_charge`, `shipping_description`, `created_at`, `updated_at`) VALUES
(1, 'Free Delivery', 0, 'Free Delivery', '2025-03-23 01:22:51', '2025-03-23 01:22:51'),
(2, 'FedX', 20, 'FedX Global Services', '2025-03-23 01:25:13', '2025-03-23 01:25:13'),
(3, 'DHL', 50, 'DHL World wide', '2025-04-04 14:13:50', '2025-04-04 14:13:50');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categories_id` bigint(20) UNSIGNED NOT NULL,
  `sub_category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `categories_id`, `sub_category_name`, `sub_category_slug`, `sub_category_description`, `created_at`, `updated_at`) VALUES
(2, 1, 'Red velvet cake', 'red-velvet-cake', NULL, '2025-03-21 03:23:17', '2025-03-21 03:23:17'),
(3, 1, 'Black Forest', 'black-forest', NULL, '2025-03-22 01:06:07', '2025-03-22 01:06:07'),
(4, 1, 'Chees Cake', 'chees-cake', NULL, '2025-03-28 23:32:26', '2025-03-28 23:32:26');

-- --------------------------------------------------------

--
-- Table structure for table `taxes`
--

CREATE TABLE `taxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tax_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax_percent` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taxes`
--

INSERT INTO `taxes` (`id`, `tax_title`, `tax_percent`, `created_at`, `updated_at`) VALUES
(1, 'UAE 5% TAX', 5, '2025-03-22 06:13:10', '2025-03-22 06:14:03');

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
(1, 'Muhammed Absar', 'absarkannur@gmail.com', NULL, '$2y$12$UnjyFAsb/C0GcIRqqcQIJubQcCXsg5C1X5mVDNFOPtGACSlHPT3OK', NULL, '2025-03-19 02:17:26', '2025-03-25 02:57:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_customers_id_foreign` (`customers_id`),
  ADD KEY `addresses_countries_id_foreign` (`countries_id`);

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
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

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
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_order_number_unique` (`order_number`),
  ADD KEY `orders_customers_id_foreign` (`customers_id`),
  ADD KEY `orders_shipping_methods_id_foreign` (`shipping_methods_id`),
  ADD KEY `orders_payment_types_id_foreign` (`payment_types_id`),
  ADD KEY `addresses_id` (`addresses_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_orders_id_foreign` (`orders_id`),
  ADD KEY `order_items_products_id_foreign` (`products_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments_transactions`
--
ALTER TABLE `payments_transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_transactions_orders_id_foreign` (`orders_id`),
  ADD KEY `payments_transactions_payment_types_id_foreign` (`payment_types_id`),
  ADD KEY `payments_transactions_payment_informations_id_foreign` (`payment_informations_id`);

--
-- Indexes for table `payment_informations`
--
ALTER TABLE `payment_informations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_information_customers_id_foreign` (`customers_id`),
  ADD KEY `payment_information_payment_types_id_foreign` (`payment_types_id`);

--
-- Indexes for table `payment_types`
--
ALTER TABLE `payment_types`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `products_sub_categories_id_foreign` (`sub_categories_id`),
  ADD KEY `products_offers_id_foreign` (`offers_id`),
  ADD KEY `products_taxes_id_foreign` (`taxes_id`);

--
-- Indexes for table `shipping_methods`
--
ALTER TABLE `shipping_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_categories_id_foreign` (`categories_id`);

--
-- Indexes for table `taxes`
--
ALTER TABLE `taxes`
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
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=414;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `payments_transactions`
--
ALTER TABLE `payments_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `payment_informations`
--
ALTER TABLE `payment_informations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment_types`
--
ALTER TABLE `payment_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shipping_methods`
--
ALTER TABLE `shipping_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `taxes`
--
ALTER TABLE `taxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_countries_id_foreign` FOREIGN KEY (`countries_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `addresses_customers_id_foreign` FOREIGN KEY (`customers_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_customers_id_foreign` FOREIGN KEY (`customers_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`addresses_id`) REFERENCES `addresses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_payment_types_id_foreign` FOREIGN KEY (`payment_types_id`) REFERENCES `payment_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_shipping_methods_id_foreign` FOREIGN KEY (`shipping_methods_id`) REFERENCES `shipping_methods` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_orders_id_foreign` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_products_id_foreign` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments_transactions`
--
ALTER TABLE `payments_transactions`
  ADD CONSTRAINT `payments_transactions_orders_id_foreign` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payments_transactions_payment_informations_id_foreign` FOREIGN KEY (`payment_informations_id`) REFERENCES `payment_informations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payments_transactions_payment_types_id_foreign` FOREIGN KEY (`payment_types_id`) REFERENCES `payment_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payment_informations`
--
ALTER TABLE `payment_informations`
  ADD CONSTRAINT `payment_information_customers_id_foreign` FOREIGN KEY (`customers_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payment_information_payment_types_id_foreign` FOREIGN KEY (`payment_types_id`) REFERENCES `payment_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brands_id_foreign` FOREIGN KEY (`brands_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_offers_id_foreign` FOREIGN KEY (`offers_id`) REFERENCES `offers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_sub_categories_id_foreign` FOREIGN KEY (`sub_categories_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_taxes_id_foreign` FOREIGN KEY (`taxes_id`) REFERENCES `taxes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
