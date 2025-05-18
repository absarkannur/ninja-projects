-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 18, 2025 at 09:28 PM
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
-- Database: `giftsbyanum`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customers_id` bigint(20) UNSIGNED NOT NULL,
  `countries_id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `addresses` (`id`, `customers_id`, `countries_id`, `full_name`, `address_line_1`, `address_line_2`, `city`, `postal_code`, `landmark`, `phone_number`, `default_address`, `created_at`, `updated_at`) VALUES
(3, 1, 398, NULL, 'Media City, GBS Building, 101, 102', 'GBS Building, 101, 102', 'Dubai', '000001', 'Costa Cafe , GBS Building', '0562364538', 0, '2025-04-03 23:47:04', '2025-04-06 10:44:00'),
(4, 6, 398, 'Emin Omer', 'Media City, GBS Building, 101, 102', 'GBS Building, 101, 102', 'Dubai', '870304', 'Costa Cafe , GBS Building', '0562364538', 0, '2025-04-04 13:41:50', '2025-05-14 14:31:33'),
(6, 6, 398, 'Emin Absar', 'Seevayi House, Mottambram', 'P.O Madayi, Kannur, Kerala', 'Dubai', '670304', 'Noor Masjid', '971 562364538', 0, '2025-05-15 00:54:29', '2025-05-15 00:54:29'),
(7, 6, 398, 'Muhammed Absar', 'asas', 'asas', 'Dubai', '', '', '0562364538', 0, '2025-05-15 01:07:51', '2025-05-15 01:07:51'),
(8, 6, 398, 'Emin Omer', 'Media City, GBS Building, 101, 102', 'GBS Building, 101, 102', 'Dubai', '', '', '0562364538', 0, '2025-05-15 12:09:40', '2025-05-15 12:09:40');

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
  `active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_name`, `country_code`, `active`, `created_at`, `updated_at`) VALUES
(171, 'Afghanistan', 'AF', 0, NULL, NULL),
(172, 'Åland Islands', 'AX', 0, NULL, NULL),
(173, 'Albania', 'AL', 0, NULL, NULL),
(174, 'Algeria', 'DZ', 0, NULL, NULL),
(175, 'American Samoa', 'AS', 0, NULL, NULL),
(176, 'AndorrA', 'AD', 0, NULL, NULL),
(177, 'Angola', 'AO', 0, NULL, NULL),
(178, 'Anguilla', 'AI', 0, NULL, NULL),
(179, 'Antarctica', 'AQ', 0, NULL, NULL),
(180, 'Antigua and Barbuda', 'AG', 0, NULL, NULL),
(181, 'Argentina', 'AR', 0, NULL, NULL),
(182, 'Armenia', 'AM', 0, NULL, NULL),
(183, 'Aruba', 'AW', 0, NULL, NULL),
(184, 'Australia', 'AU', 0, NULL, NULL),
(185, 'Austria', 'AT', 0, NULL, NULL),
(186, 'Azerbaijan', 'AZ', 0, NULL, NULL),
(187, 'Bahamas', 'BS', 0, NULL, NULL),
(188, 'Bahrain', 'BH', 0, NULL, NULL),
(189, 'Bangladesh', 'BD', 0, NULL, NULL),
(190, 'Barbados', 'BB', 0, NULL, NULL),
(191, 'Belarus', 'BY', 0, NULL, NULL),
(192, 'Belgium', 'BE', 0, NULL, NULL),
(193, 'Belize', 'BZ', 0, NULL, NULL),
(194, 'Benin', 'BJ', 0, NULL, NULL),
(195, 'Bermuda', 'BM', 0, NULL, NULL),
(196, 'Bhutan', 'BT', 0, NULL, NULL),
(197, 'Bolivia', 'BO', 0, NULL, NULL),
(198, 'Bosnia and Herzegovina', 'BA', 0, NULL, NULL),
(199, 'Botswana', 'BW', 0, NULL, NULL),
(200, 'Bouvet Island', 'BV', 0, NULL, NULL),
(201, 'Brazil', 'BR', 0, NULL, NULL),
(202, 'British Indian Ocean Territory', 'IO', 0, NULL, NULL),
(203, 'Brunei Darussalam', 'BN', 0, NULL, NULL),
(204, 'Bulgaria', 'BG', 0, NULL, NULL),
(205, 'Burkina Faso', 'BF', 0, NULL, NULL),
(206, 'Burundi', 'BI', 0, NULL, NULL),
(207, 'Cambodia', 'KH', 0, NULL, NULL),
(208, 'Cameroon', 'CM', 0, NULL, NULL),
(209, 'Canada', 'CA', 0, NULL, NULL),
(210, 'Cape Verde', 'CV', 0, NULL, NULL),
(211, 'Cayman Islands', 'KY', 0, NULL, NULL),
(212, 'Central African Republic', 'CF', 0, NULL, NULL),
(213, 'Chad', 'TD', 0, NULL, NULL),
(214, 'Chile', 'CL', 0, NULL, NULL),
(215, 'China', 'CN', 0, NULL, NULL),
(216, 'Christmas Island', 'CX', 0, NULL, NULL),
(217, 'Cocos (Keeling) Islands', 'CC', 0, NULL, NULL),
(218, 'Colombia', 'CO', 0, NULL, NULL),
(219, 'Comoros', 'KM', 0, NULL, NULL),
(220, 'Congo', 'CG', 0, NULL, NULL),
(221, 'Congo, The Democratic Republic of the', 'CD', 0, NULL, NULL),
(222, 'Cook Islands', 'CK', 0, NULL, NULL),
(223, 'Costa Rica', 'CR', 0, NULL, NULL),
(224, 'Cote D`Ivoire', 'CI', 0, NULL, NULL),
(225, 'Croatia', 'HR', 0, NULL, NULL),
(226, 'Cuba', 'CU', 0, NULL, NULL),
(227, 'Cyprus', 'CY', 0, NULL, NULL),
(228, 'Czech Republic', 'CZ', 0, NULL, NULL),
(229, 'Denmark', 'DK', 0, NULL, NULL),
(230, 'Djibouti', 'DJ', 0, NULL, NULL),
(231, 'Dominica', 'DM', 0, NULL, NULL),
(232, 'Dominican Republic', 'DO', 0, NULL, NULL),
(233, 'Ecuador', 'EC', 0, NULL, NULL),
(234, 'Egypt', 'EG', 0, NULL, NULL),
(235, 'El Salvador', 'SV', 0, NULL, NULL),
(236, 'Equatorial Guinea', 'GQ', 0, NULL, NULL),
(237, 'Eritrea', 'ER', 0, NULL, NULL),
(238, 'Estonia', 'EE', 0, NULL, NULL),
(239, 'Ethiopia', 'ET', 0, NULL, NULL),
(240, 'Falkland Islands (Malvinas)', 'FK', 0, NULL, NULL),
(241, 'Faroe Islands', 'FO', 0, NULL, NULL),
(242, 'Fiji', 'FJ', 0, NULL, NULL),
(243, 'Finland', 'FI', 0, NULL, NULL),
(244, 'France', 'FR', 0, NULL, NULL),
(245, 'French Guiana', 'GF', 0, NULL, NULL),
(246, 'French Polynesia', 'PF', 0, NULL, NULL),
(247, 'French Southern Territories', 'TF', 0, NULL, NULL),
(248, 'Gabon', 'GA', 0, NULL, NULL),
(249, 'Gambia', 'GM', 0, NULL, NULL),
(250, 'Georgia', 'GE', 0, NULL, NULL),
(251, 'Germany', 'DE', 0, NULL, NULL),
(252, 'Ghana', 'GH', 0, NULL, NULL),
(253, 'Gibraltar', 'GI', 0, NULL, NULL),
(254, 'Greece', 'GR', 0, NULL, NULL),
(255, 'Greenland', 'GL', 0, NULL, NULL),
(256, 'Grenada', 'GD', 0, NULL, NULL),
(257, 'Guadeloupe', 'GP', 0, NULL, NULL),
(258, 'Guam', 'GU', 0, NULL, NULL),
(259, 'Guatemala', 'GT', 0, NULL, NULL),
(260, 'Guernsey', 'GG', 0, NULL, NULL),
(261, 'Guinea', 'GN', 0, NULL, NULL),
(262, 'Guinea-Bissau', 'GW', 0, NULL, NULL),
(263, 'Guyana', 'GY', 0, NULL, NULL),
(264, 'Haiti', 'HT', 0, NULL, NULL),
(265, 'Heard Island and Mcdonald Islands', 'HM', 0, NULL, NULL),
(266, 'Holy See (Vatican City State)', 'VA', 0, NULL, NULL),
(267, 'Honduras', 'HN', 0, NULL, NULL),
(268, 'Hong Kong', 'HK', 0, NULL, NULL),
(269, 'Hungary', 'HU', 0, NULL, NULL),
(270, 'Iceland', 'IS', 0, NULL, NULL),
(271, 'India', 'IN', 0, NULL, NULL),
(272, 'Indonesia', 'code', 0, NULL, NULL),
(273, 'Iran, Islamic Republic Of', 'IR', 0, NULL, NULL),
(274, 'Iraq', 'IQ', 0, NULL, NULL),
(275, 'Ireland', 'IE', 0, NULL, NULL),
(276, 'Isle of Man', 'IM', 0, NULL, NULL),
(277, 'Israel', 'IL', 0, NULL, NULL),
(278, 'Italy', 'IT', 0, NULL, NULL),
(279, 'Jamaica', 'JM', 0, NULL, NULL),
(280, 'Japan', 'JP', 0, NULL, NULL),
(281, 'Jersey', 'JE', 0, NULL, NULL),
(282, 'Jordan', 'JO', 0, NULL, NULL),
(283, 'Kazakhstan', 'KZ', 0, NULL, NULL),
(284, 'Kenya', 'KE', 0, NULL, NULL),
(285, 'Kiribati', 'KI', 0, NULL, NULL),
(286, 'Korea, Democratic People`s Republic of', 'KP', 0, NULL, NULL),
(287, 'Korea, Republic of', 'KR', 0, NULL, NULL),
(288, 'Kuwait', 'KW', 0, NULL, NULL),
(289, 'Kyrgyzstan', 'KG', 0, NULL, NULL),
(290, 'Lao People`s Democratic Republic', 'LA', 0, NULL, NULL),
(291, 'Latvia', 'LV', 0, NULL, NULL),
(292, 'Lebanon', 'LB', 0, NULL, NULL),
(293, 'Lesotho', 'LS', 0, NULL, NULL),
(294, 'Liberia', 'LR', 0, NULL, NULL),
(295, 'Libyan Arab Jamahiriya', 'LY', 0, NULL, NULL),
(296, 'Liechtenstein', 'LI', 0, NULL, NULL),
(297, 'Lithuania', 'LT', 0, NULL, NULL),
(298, 'Luxembourg', 'LU', 0, NULL, NULL),
(299, 'Macao', 'MO', 0, NULL, NULL),
(300, 'Macedonia, The Former Yugoslav Republic of', 'MK', 0, NULL, NULL),
(301, 'Madagascar', 'MG', 0, NULL, NULL),
(302, 'Malawi', 'MW', 0, NULL, NULL),
(303, 'Malaysia', 'MY', 0, NULL, NULL),
(304, 'Maldives', 'MV', 0, NULL, NULL),
(305, 'Mali', 'ML', 0, NULL, NULL),
(306, 'Malta', 'MT', 0, NULL, NULL),
(307, 'Marshall Islands', 'MH', 0, NULL, NULL),
(308, 'Martinique', 'MQ', 0, NULL, NULL),
(309, 'Mauritania', 'MR', 0, NULL, NULL),
(310, 'Mauritius', 'MU', 0, NULL, NULL),
(311, 'Mayotte', 'YT', 0, NULL, NULL),
(312, 'Mexico', 'MX', 0, NULL, NULL),
(313, 'Micronesia, Federated States of', 'FM', 0, NULL, NULL),
(314, 'Moldova, Republic of', 'MD', 0, NULL, NULL),
(315, 'Monaco', 'MC', 0, NULL, NULL),
(316, 'Mongolia', 'MN', 0, NULL, NULL),
(317, 'Montserrat', 'MS', 0, NULL, NULL),
(318, 'Morocco', 'MA', 0, NULL, NULL),
(319, 'Mozambique', 'MZ', 0, NULL, NULL),
(320, 'Myanmar', 'MM', 0, NULL, NULL),
(321, 'Namibia', 'NA', 0, NULL, NULL),
(322, 'Nauru', 'NR', 0, NULL, NULL),
(323, 'Nepal', 'NP', 0, NULL, NULL),
(324, 'Netherlands', 'NL', 0, NULL, NULL),
(325, 'Netherlands Antilles', 'AN', 0, NULL, NULL),
(326, 'New Caledonia', 'NC', 0, NULL, NULL),
(327, 'New Zealand', 'NZ', 0, NULL, NULL),
(328, 'Nicaragua', 'NI', 0, NULL, NULL),
(329, 'Niger', 'NE', 0, NULL, NULL),
(330, 'Nigeria', 'NG', 0, NULL, NULL),
(331, 'Niue', 'NU', 0, NULL, NULL),
(332, 'Norfolk Island', 'NF', 0, NULL, NULL),
(333, 'Northern Mariana Islands', 'MP', 0, NULL, NULL),
(334, 'Norway', 'NO', 0, NULL, NULL),
(335, 'Oman', 'OM', 0, NULL, NULL),
(336, 'Pakistan', 'PK', 0, NULL, NULL),
(337, 'Palau', 'PW', 0, NULL, NULL),
(338, 'Palestinian Territory, Occupied', 'PS', 0, NULL, NULL),
(339, 'Panama', 'PA', 0, NULL, NULL),
(340, 'Papua New Guinea', 'PG', 0, NULL, NULL),
(341, 'Paraguay', 'PY', 0, NULL, NULL),
(342, 'Peru', 'PE', 0, NULL, NULL),
(343, 'Philippines', 'PH', 0, NULL, NULL),
(344, 'Pitcairn', 'PN', 0, NULL, NULL),
(345, 'Poland', 'PL', 0, NULL, NULL),
(346, 'Portugal', 'PT', 0, NULL, NULL),
(347, 'Puerto Rico', 'PR', 0, NULL, NULL),
(348, 'Qatar', 'QA', 0, NULL, NULL),
(349, 'Reunion', 'RE', 0, NULL, NULL),
(350, 'Romania', 'RO', 0, NULL, NULL),
(351, 'Russian Federation', 'RU', 0, NULL, NULL),
(352, 'RWANDA', 'RW', 0, NULL, NULL),
(353, 'Saint Helena', 'SH', 0, NULL, NULL),
(354, 'Saint Kitts and Nevis', 'KN', 0, NULL, NULL),
(355, 'Saint Lucia', 'LC', 0, NULL, NULL),
(356, 'Saint Pierre and Miquelon', 'PM', 0, NULL, NULL),
(357, 'Saint Vincent and the Grenadines', 'VC', 0, NULL, NULL),
(358, 'Samoa', 'WS', 0, NULL, NULL),
(359, 'San Marino', 'SM', 0, NULL, NULL),
(360, 'Sao Tome and Principe', 'ST', 0, NULL, NULL),
(361, 'Saudi Arabia', 'SA', 1, NULL, NULL),
(362, 'Senegal', 'SN', 0, NULL, NULL),
(363, 'Serbia and Montenegro', 'CS', 0, NULL, NULL),
(364, 'Seychelles', 'SC', 0, NULL, NULL),
(365, 'Sierra Leone', 'SL', 0, NULL, NULL),
(366, 'Singapore', 'SG', 0, NULL, NULL),
(367, 'Slovakia', 'SK', 0, NULL, NULL),
(368, 'Slovenia', 'SI', 0, NULL, NULL),
(369, 'Solomon Islands', 'SB', 0, NULL, NULL),
(370, 'Somalia', 'SO', 0, NULL, NULL),
(371, 'South Africa', 'ZA', 0, NULL, NULL),
(372, 'South Georgia and the South Sandwich Islands', 'GS', 0, NULL, NULL),
(373, 'Spain', 'ES', 0, NULL, NULL),
(374, 'Sri Lanka', 'LK', 0, NULL, NULL),
(375, 'Sudan', 'SD', 0, NULL, NULL),
(376, 'Suriname', 'SR', 0, NULL, NULL),
(377, 'Svalbard and Jan Mayen', 'SJ', 0, NULL, NULL),
(378, 'Swaziland', 'SZ', 0, NULL, NULL),
(379, 'Sweden', 'SE', 0, NULL, NULL),
(380, 'Switzerland', 'CH', 0, NULL, NULL),
(381, 'Syrian Arab Republic', 'SY', 0, NULL, NULL),
(382, 'Taiwan, Province of China', 'TW', 0, NULL, NULL),
(383, 'Tajikistan', 'TJ', 0, NULL, NULL),
(384, 'Tanzania, United Republic of', 'TZ', 0, NULL, NULL),
(385, 'Thailand', 'TH', 0, NULL, NULL),
(386, 'Timor-Leste', 'TL', 0, NULL, NULL),
(387, 'Togo', 'TG', 0, NULL, NULL),
(388, 'Tokelau', 'TK', 0, NULL, NULL),
(389, 'Tonga', 'TO', 0, NULL, NULL),
(390, 'Trinidad and Tobago', 'TT', 0, NULL, NULL),
(391, 'Tunisia', 'TN', 0, NULL, NULL),
(392, 'Turkey', 'TR', 0, NULL, NULL),
(393, 'Turkmenistan', 'TM', 0, NULL, NULL),
(394, 'Turks and Caicos Islands', 'TC', 0, NULL, NULL),
(395, 'Tuvalu', 'TV', 0, NULL, NULL),
(396, 'Uganda', 'UG', 0, NULL, NULL),
(397, 'Ukraine', 'UA', 0, NULL, NULL),
(398, 'United Arab Emirates', 'AE', 1, NULL, NULL),
(399, 'United Kingdom', 'GB', 0, NULL, NULL),
(400, 'United States', 'US', 0, NULL, NULL),
(401, 'United States Minor Outlying Islands', 'UM', 0, NULL, NULL),
(402, 'Uruguay', 'UY', 0, NULL, NULL),
(403, 'Uzbekistan', 'UZ', 0, NULL, NULL),
(404, 'Vanuatu', 'VU', 0, NULL, NULL),
(405, 'Venezuela', 'VE', 0, NULL, NULL),
(406, 'Viet Nam', 'VN', 0, NULL, NULL),
(407, 'Virgin Islands, British', 'VG', 0, NULL, NULL),
(408, 'Virgin Islands, U.S.', 'VI', 0, NULL, NULL),
(409, 'Wallis and Futuna', 'WF', 0, NULL, NULL),
(410, 'Western Sahara', 'EH', 0, NULL, NULL),
(411, 'Yemen', 'YE', 0, NULL, NULL),
(412, 'Zambia', 'ZM', 0, NULL, NULL),
(413, 'Zimbabwe', 'ZW', 0, NULL, NULL);

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
(6, 'Emin Omer', 'emin@gmail.com', NULL, '$2y$12$UnjyFAsb/C0GcIRqqcQIJubQcCXsg5C1X5mVDNFOPtGACSlHPT3OK', 'fPHwu9ufDJYvCJFPV514mOsh7YRw7MBRthOE8XxwqN0AKrY8KWoGfsklJUsd', '2025-03-27 03:10:30', '2025-04-02 12:02:40');

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
(36, '2025_03_25_090407_create_payments_transactions_table', 25);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `offer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `offer_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_discount_percent` double NOT NULL DEFAULT '0',
  `offer_end_date` date DEFAULT NULL,
  `offer_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `offer_name`, `offer_description`, `offer_discount_percent`, `offer_end_date`, `offer_status`, `created_at`, `updated_at`) VALUES
(1, '10% Offer', '10% Offers for all users', 12, '2025-06-17', 'active', '2025-03-22 01:33:41', '2025-04-10 06:52:40'),
(2, 'Deal Of the Day', NULL, 50, '2025-05-13', 'active', '2025-05-17 21:45:01', '2025-05-17 21:45:01');

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
  `grand_total` double NOT NULL DEFAULT '0',
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `order_price_total` double NOT NULL DEFAULT '0',
  `order_discount_percent` double NOT NULL DEFAULT '0',
  `order_tax_percent` double NOT NULL DEFAULT '0',
  `order_shipping_charge` double DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orders_id` bigint(20) UNSIGNED NOT NULL,
  `payment_types_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_amount` double NOT NULL DEFAULT '0',
  `transaction_date` date NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_informations`
--

CREATE TABLE `payment_informations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customers_id` bigint(20) UNSIGNED NOT NULL,
  `payment_types_id` bigint(20) UNSIGNED NOT NULL,
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

INSERT INTO `payment_informations` (`id`, `customers_id`, `payment_types_id`, `card_holder_name`, `card_type`, `card_no`, `expiry_month`, `expiry_year`, `created_at`, `updated_at`) VALUES
(3, 6, 4, 'EMIN OMER ABSAR', 'VISA', '5124-4678-2102-2444', '04', '2024', '2025-05-16 01:27:33', '2025-05-16 13:49:16');

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
(4, 'Credit Card', 'CCD', 1, '2025-03-21 04:14:26', '2025-05-15 01:47:18');

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
  `product_discount_price` double DEFAULT NULL,
  `product_tax_price` double DEFAULT NULL,
  `product_qty_in_stock` int(11) DEFAULT NULL,
  `product_sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brands_id`, `sub_categories_id`, `offers_id`, `taxes_id`, `product_name`, `product_slug`, `product_description`, `product_content`, `product_images`, `product_original_price`, `product_sales_price`, `product_discount_price`, `product_tax_price`, `product_qty_in_stock`, `product_sku`, `product_status`, `created_at`, `updated_at`) VALUES
(1, 3, 3, NULL, 1, 'Product 1', 'product-1', 'Nulla tincidunt erat lacus, a tempor est semper in. Proin ut ligula nulla.', NULL, '[\"cdn-products\\/01JV5H64R6SK1NKX7XN2QBHPPN.png\"]', 100, 160, 0, 8, 4, 'SKU-GBA-CK-1', 1, '2025-03-23 03:58:37', '2025-05-18 12:25:18'),
(2, 3, 2, 2, 1, 'Product 2', 'product-2', 'Test', NULL, '[\"cdn-products\\/01JV5H8WM1CJW28G09B6PAFJF4.jpg\"]', 290, 450, 225, 22.5, 10, 'SKU-GBA-CK-2', 0, '2025-03-24 04:11:12', '2025-05-18 00:39:15'),
(3, 3, 4, 1, 1, 'Product 3', 'product-3', 'Chees Cake', NULL, '[\"cdn-products\\/01JV5HBSKY938EB42NDTST6ZD9.png\"]', 230, 410, 49.2, 18.04, 10, 'SKU-GBA-CK-3', 1, '2025-03-28 23:31:17', '2025-05-18 13:58:48'),
(4, 3, 4, 2, 1, 'Product 4', 'product-4', 'Blueberry Lemon Cake', NULL, '[\"cdn-products\\/01JV5HCMZYT1H5KPW43F36F1M9.png\"]', 300, 600, 300, 30, 3, 'SKU-GBA-CK-4', 1, '2025-03-28 23:34:32', '2025-05-17 21:45:53'),
(5, 3, 2, 1, 1, 'werty', 'werty', 'wert', NULL, '[\"cdn-products\\/01JVJMNVPG2XG866E39W4DVQXP.png\"]', 100, 150, 18, 6.6, 96, 'SKU-GBA-CK-5', 0, '2025-05-18 15:56:29', '2025-05-18 15:56:58');

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
  ADD KEY `payments_transactions_payment_types_id_foreign` (`payment_types_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=414;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments_transactions`
--
ALTER TABLE `payments_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_informations`
--
ALTER TABLE `payment_informations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment_types`
--
ALTER TABLE `payment_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
