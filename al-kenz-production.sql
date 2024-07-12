-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 11, 2024 at 06:01 PM
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
-- Database: `al-kenz`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('07a7615d1627d19425dbfe9a9479f505', 's:224:\"<p>| Column 1 | Column 2 | Column 3 |\n| -------- | -------- | -------- |\n| Text     | Text     | Text     |</p>\n<p>| Column 1 | Column 2 | Column 3 |\n| -------- | -------- | -------- |\n| Text     | Text     | Text     |</p>\n\";', 2036063349),
('2a44d88500d4ff42d33ef652539da724', 's:330:\"<pre class=\"shiki\" style=\"background-color: #fff\"><code><span class=\"line\"><span style=\"color: #24292E\">                </span><span style=\"color: #6A737D\"># Hello Absar</span></span>\n<span class=\"line\"></span>\n<span class=\"line\"><span style=\"color: #24292E\">                </span></span>\n<span class=\"line\"></span></code></pre>\n\";', 2036062871),
('356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1720703635),
('356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1720703635;', 1720703635),
('48d43b785fbe2c8257af29df074cf692', 's:236:\"<pre class=\"shiki\" style=\"background-color: #fff\"><code><span class=\"line\"><span style=\"color: #24292E\">                </span><span style=\"color: #6A737D\"># Test Hello</span></span>\n<span class=\"line\"></span></code></pre>\n<p>hi\nbi</p>\n\";', 2036062792),
('79dcec258fc97e4c8a053e643ee7eb68', 's:153:\"<ul>\n<li>absar</li>\n<li>hello</li>\n</ul>\n<p>| Column 1 | Column 2 | Column 3 |\n| -------- | -------- | -------- |\n| Text     | Text     | Text     |</p>\n\";', 2036063325),
('8009878b3b6e8a3b0435ed669f104dbd', 's:316:\"<p><strong>absar</strong>\n<img src=\"http://localhost:8000/storage/arhDPIYFbueInsafIIYY2R3monEn1pYocWlJq5dn.png\" alt=\"\" /><img src=\"http://localhost:8000/storage/OrIsEIZRhZo9sU6KsR6piWxoHJpxJ5NQGdVNXP4b.png\" alt=\"\" /><img src=\"http://localhost:8000/storage/FUyqoM6BAvjl1wSjHo6F67V1nqLQZlZKgaLYcj7P.png\" alt=\"\" /></p>\n\";', 2036063416),
('9253134e1136ead63f6633eb0e95268b', 's:141:\"<h1 id=\"hello-absar\">Hello Absar</h1>\n<p><img src=\"http://localhost:8000/storage/jaWMtjSvxfFOKyDiXnk5sMWrMERNJ0n18EZVxLei.png\" alt=\"\" /></p>\n\";', 2036062999),
('a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1720716853),
('a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1720716853;', 1720716853),
('b1c47a8efd6a343f8eec22e11f140f8e', 's:103:\"<p><img src=\"http://localhost:8000/storage/s9CUCdoI4ZpDBdGctfXY1UTzL6s8noM1VJy8779W.png\" alt=\"\" /></p>\n\";', 2036063018),
('b1cb1345d69547d91f5e6549084977b0', 's:38:\"<h1 id=\"hello-absar\">Hello Absar</h1>\n\";', 2036062946),
('b76e185f7e2cc09f89ea38db2b9ba80f', 's:112:\"<p>| Column 1 | Column 2 | Column 3 |\n| -------- | -------- | -------- |\n| Text     | Text     | Text     |</p>\n\";', 2036063263),
('d0a90e9a3eb35d7925d067cf9ba55ab4', 's:30:\"<p><strong>absar</strong></p>\n\";', 2036063361);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(6, 'other', 'other', '2024-07-10 17:17:08', '2024-07-10 17:17:08');

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drug_classes_id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`id`, `name`, `drug_classes_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Actinerve', 4, 'Vitamin B1, B6, B12 FC-Tablets', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(2, 'Amplifir Caps. №90', 4, 'Natural Laxative And Helps To Restore The Microflora.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(3, 'Artranov №90 Caps.', 4, 'Food Supplement, An Additional Source Of Glucosamine, Chondroitin, Collagen, Calcium, Vitamins And Minerals – A Real Help Your Joints And Prevention Of Osteoporosis.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(4, 'Artrosilax 60 Caps.', 4, 'Prevention Of Diseases Of The Musculoskeletal System, Auxiliary Remedy In Complex Therapy Of Locomotor Apparatus', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(5, 'Atrtopil 90 Caps.', 4, 'Contains Collagen, Vitamin C, Zinc And Selenium Which Contribute To The Regeneration Of Cartilage Tissue In The Joints And Ligaments. Recovery Of Musculoskeletal.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(6, 'Badan-Badan № 90 Caps.', 4, 'A Source Of Arbutin. Food Supplement For Prevention Of Diseases Of Urogenital And Urinary Systems.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(7, 'Berries Of Blackberries – Powder In Capsules №60', 4, 'Plant Insulin. Improves Your Vision.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(8, 'Berries Of Blueberries – Powder In Capsules №60', 4, 'Improves Memory, Clear Thinking And Concentration (Antisclerotic Effect), And Glucose-Lowering Remedy.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(9, 'Berries Of Cranberries – Powder In Capsules №60', 4, 'A Natural Antibiotic. Diuretic, Anti-Inflammatory Remedy.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(10, 'Burdock Root №60 Caps.', 4, 'Blood-Purifying Remedy. A Source Of Inulin. Improves The Function Of The Pancreas In Making Insulin.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(11, 'Calamus Rhizome № 60 Caps.', 4, 'Detoxifying, Antiviral, Antibacterial Remedy. Has Aphrodisiakum Effect (Increases Potency Of Men)', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(12, 'Cardicord 90 Caps.', 4, 'Prevention Of Cardiovascular Diseases.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(13, 'Cerebrilid Caps. № 60', 4, 'For Improving Cerebral Circulation.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(14, 'Chromium-Spirulina 60 Caps.', 4, 'Natural Plant Extracts Of The Spirulina Microalgae And Chromium In The Cell Structure. It Is A Unique In Digestibility, Safety And Availability Biological Chromium Compound And Of A Living Cell. Used To Control Appetite, Keeping Strong Muscles, Flexible Strong Body, While Other Methods Of Losing Weight Lead To A Weakening Of The Muscles.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(15, 'Cleanlife– Caps. № 60', 4, 'Antiparasitic Complex.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(16, 'Cuprum-Spirulina 60 Caps.', 4, 'Food Supplement That Has No Analogues In The World. Organic Available Form Of Copper Is Used In The Treatment Of Rheumatoid Arthritis, Candidiasis, Anemia, Bone Health, Joints, Immune System, Memory, To Prevent Early Gray Hair, Varicose Veins, Delayed Pubertal Development In Girls, Infertility, When Taking Contraceptives And Decrease Women Libido', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(17, 'Dandelion Root № 60 Caps. – Pomogun', 4, 'Life Elixir. A Source Of Inulin, Bitters. Supports The Biocenosis Of The Intestine, The Reproduction Of Beneficial Microflora. Cleanses The Liver, The Gallbladder. Laxative.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(18, 'Drops Based On Herbs With Vitamin C ANISE 60 G', 4, 'Anise Relieves Pain, Inflammation And High Temperature, Has A Bottomless And Antiseptic Effect.Ascorbic Acid Is A Powerful Antioxidant. Vitamin C Strengthens The Human Immune System And Protects It From Viruses And Bacteria.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(19, 'Drops Based On Herbs With Vitamin C EUCALYPTUS WITH MENTHOL 60g', 4, 'Vitamin C Strengthens The Human Immune System And Protects It From Viruses And Bacteria. Eucalyptus Increases The Body`s Defenses And Resistance To Disease. Menthol Has Irritating, Antiseptic, Analgesic, Soothing Effect.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(20, 'Drops Based On Herbs With Vitamin C GINSENG 60 G', 4, 'Vitamin C Strengthens The Human Immune System And Protects It From Viruses And Bacteria. Ginseng Improves Memory And Hematopoiesis, Normalizes Heart Function And Metabolic Processes.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(21, 'Drops Based On Herbs With Vitamin C LEMON MINT 60 G', 4, 'Lemon Balm Has A Calming Effect, Helps Relieve Pain In Many Diseases. Vitamin C Strengthens The Human Immune System And Protects It From Viruses And Bacteria.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(22, 'Drops Based On Herbs With Vitamin C LICORICE 60 G', 4, 'Vitamin C Strengthens The Human Immune System And Protects It From Viruses And Bacteria. Licorice Is Able To Improve The Condition Of Diseases Of The Heart And Blood Vessels, Low Blood Pressure, Thyroid Disease.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(23, 'Drops Based On Herbs With Vitamin C ROSEHIPS 60 G', 4, 'Vitamin C Strengthens The Human Immune System And Protects It From Viruses And Bacteria. Rosehip Fruits Increase The Overall Stability Of The Body, The Production Of Hormones, Stimulate Regeneration Processes, Have Anti-Inflammatory Properties.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(24, 'Drops Based On Herbs With Vitamin C SAGE WITH HONEY 60 G', 4, 'Vitamin C Strengthens The Human Immune System And Protects It From Viruses And Bacteria. Sage Has Astringent, Hemostatic, Anti-Inflammatory And Disinfectant Properties. Honey Has Bactericidal And Anti-Inflammatory Effects.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(25, 'Drops Based On Herbs With Vitamin C SEA BUCKTHORN WITH HONEY 60 G', 4, 'Vitamin C Strengthens The Human Immune System And Protects It From Viruses And Bacteria. Honey Has Bactericidal And Anti-Inflammatory Effects. Sea Buckthorn Reduces Cholesterol, Berries Gently And Effectively Cleanse The Intestine Of Harmful Substances, Restore Microflora.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(26, 'Drops Based On Herbs With Vitamin WITH HONEY 60 G', 4, 'Vitamin C Strengthens The Human Immune System And Protects It From Viruses And Bacteria. Honey Has Bactericidal And Anti-Inflammatory Effects.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(27, 'Field Horsetail № 60 Caps.', 4, 'Plant Biogenic Silicium Required For Strengthening The Connective Tissue, Mucous Membranes, Blood Vessel Walls, Bone Tissue. Diuretic, Hemostatic And Anti-Inflammatory Remedy.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(28, 'Flavopolisan 120 Caps.', 4, 'Prevention Of Herpes (Cold Sore), Is An Immune Stimulant', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(29, 'Fruits Of Cherry – Powder In Capsules № 60', 4, 'Nourishes Heart Muscle, Removes Cholesterol From The Body And Protects The Arteries From Atherosclerosis, Slows Blood Clotting.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(30, 'Ginzelakt 30 Caps', 4, 'Recovery Of The Intestinal Wall And Improve Digestion, Is A Mild Laxative', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(31, 'Ishemin 60 Caps.', 4, 'Vitamin C With Prolonged Effect With Vitamins, Minerals, Bioflavonoids.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(32, 'Izoflavons – Caps. №30', 4, 'Phytoestrogens To Maintain Hormonal Balance Of Women After 40 Years.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(33, 'Kariochi 60 Caps.', 4, 'Kariochi 60 Caps.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(34, 'Karnovita Caps. №30', 4, 'A Strong Antioxidant, A Remedy For Aging', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(35, 'Kovcheg 60 Caps.', 4, 'Is A Unique Complex – A Powerful Antioxidant That Scavenges Free Radicals, Microbial Infections And Prolonging The Life Of Other Antioxidants.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(36, 'Lactevia Caps. № 15', 4, 'Complex Of Symbiotic Micro-Organisms Of Beneficial Microflora Of The Gastrointestinal Tract.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(37, 'L-Carnitine Premium Caps. № 90', 4, 'Energy, Fat Burner For Weight Stabilization, Supports The Cardiovascular System', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(38, 'Likefood Caps. № 90', 4, 'Replacement Of Digestive Enzymes, Improve Digestion And Condition The Mucosa Of The Gastrointestinal Tract.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(39, 'Lollipop', 4, 'Vitamin C Strengthens The Human Immune System And Protects It From Viruses And Bacteria.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(40, 'Lollipop “Candy”, 17G With Vitamin C And Pear Flavour', 4, 'Vitamin C Strengthens The Human Immune System And Protects It From Viruses And Bacteria.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(41, 'Lollipop “Candy”, 17G With Vitamin C And Raspberries And Blackberries Flavour', 4, 'Vitamin C Strengthens The Human Immune System And Protects It From Viruses And Bacteria.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(42, 'Lollipop “Candy”, 17G With Vitamin C And Strawberry Flavour', 4, 'Vitamin C Strengthens The Human Immune System And Protects It From Viruses And Bacteria.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(43, 'Lollipop “Candy”, 17G With Vitamin C And Cherry Flavour', 4, 'Vitamin C Strengthens The Human Immune System And Protects It From Viruses And Bacteria.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(44, 'Lollipop “Candy”, 17G With Vitamin C And Lemon And Mint Flavour', 4, 'Vitamin C Strengthens The Human Immune System And Protects It From Viruses And Bacteria.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(45, 'Marganese-Spirulina 60 Caps.', 4, 'Plant Complex Of Manganese And Spirulina. It Is Recommended To Improve Process Of Thinking, Attention, Chronic Fatigue, Weakness, Irritability, When Predisposition To Diabetes And To Tumors, Improves The State Of Musculoskeletal System In Old Age, When Overweight, Delay Of Psychological And Speech Development Of Children, Tendency To Asthma, Allergies.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(46, 'MaxiOl - Caps. №90', 4, 'Prevention Of Diseases Of The Musculoskeletal Apparatus.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(47, 'Moving 250g.', 4, 'Prevention Of Diseases Of The Musculoskeletal System, A Source Of Hydroxyproline, Hydrolyzed Collagen, Additional Source Of Vitamin C, Calcium, Zinc And Manganese.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(48, 'Muira Puama Caps. № 30', 4, 'Prevention Of Atherosclerosis.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(49, 'Reishi Caps.', 4, 'Immunostimulating And Immunomodulating Remedy, Prevention Of Tumors.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(50, 'Salivitteline Caps. 60', 4, 'Herbal Aspirin.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(51, 'Selenium-Spirulina 60 Caps', 4, 'Natural Herbal Complex Derived Similarly Food Supplement `Chromium-Spirulina`. Live Organic Form Of Selenium Is A Powerful Antioxidant. It Is Used To Prevent Cardiovascular And Oncological Diseases, Osteochondrosis, Normalizes The Liver, Pancreas And Thyroid Glands, Removes Heavy Metals, Toxins, Radionuclides And Slows The Aging Process.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(52, 'Shambala 60 Caps.', 4, 'Plant Antimicotic (Candidiasis, Urogenital Infections, Vaginitis, Vulva, Yeast Infection)', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(53, 'Shishki Hmelya № 60 Caps.', 4, 'Hypnotic; An Anti-Inflammatory, Capillary Strengthening, Sedative And Analgesic Remedy.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(54, 'Silizimag 90 Caps.', 4, 'A Source Of Bioavailable Silicium.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(55, 'Stem - Caps. № 90', 4, 'Way To Lose Weight And Increase Energy.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(56, 'Sterostatin 60 Caps.', 4, 'Prevention Of Atherosclerosis.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(57, 'Taurine Forte Caps. №30', 4, 'Antioxidant Protection Of The Heart, Eyes, Bronchial Tubes, Reduces Blood Pressure, Blood Sugar, Total Cholesterol, Prevention Of Heart Rhythm Disorders, Restores The Power Of Nerve Cells', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(58, 'TauriNov №120 Caps.', 4, 'Food Supplement, An Additional Source Of Taurine, Vitamins B1, B6, B12, Taxifolin, Manganese, Manganese, Zinc And Magnesium To Normalize The Function Of The Cardiovascular System, Capillary Circulation, Including The Brain.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(59, 'Terapikar 60 Caps.', 4, 'Complex For The Prevention Of Cardiovascular Diseases.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(60, 'Very Low Calorie Diet program', 4, 'A balanced nutrition program for a week. About 500 kcal per day.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(61, 'Vitagor 60 Caps.', 4, 'Supercleaner From Parasites Of All Kinds.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(62, 'Vita-Magnesium 60 Caps.', 4, 'Organic And Available Form Of Magnesium That Affects Almost All Aspects Of Human Health. The Lack Of Magnesium Affects Such Common Conditions As Stress, Chronic Fatigue Syndrome, Hypertension, All Cardiovascular Disorders.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(63, 'Vita-Potassium 60 Caps.', 4, 'The Organic Form Of Potassium – Major Intracellular Electrolyte And Activator Of Functions Of Some Enzymes, Regulator Of Blood Pressure. Recommended For The Prevention Of Cardiovascular Disease And Cancer, Diabetes, And Neurosis.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(64, 'Yantifan Caps. № 60', 4, 'Natural Antidepressant (Against Depression).', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(65, 'Zinc-Spirulina. 60 Caps.', 4, 'The Organic Form Of Zinc, With Unique Digestibility And Availability To The Human Body. Recommended For Frequent Acute Respiratory Infections, Herpes, Allergies, Hair Problems (Hair Loss, Poor Growth), Skin (Acne, Psoriasis), Nails, Wound Healing, Impaired Function Of The Reproductive System Of Men (Prevention Of Prostatitis), Tendency To Alcohol Abuse, Elevated Blood Sugar, Memory Impairment, Hyperactivity.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(66, 'Viburnum Ordinary – Powder In Capsules № 60', 4, 'Strengthens The Heart Muscle And Blood Vessels, Has A Diuretic, Cholagogue And Diaphoretic Action.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(67, 'OVA FIT', 4, '', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(68, 'Lubegel', 5, 'FFS', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(69, 'Lubegel plus', 5, 'FFS', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(70, 'Endoprostheses of Large Joints with Nanostructured Porous Bioactive Coatings', 5, 'Endoprostheses of Large Joints with Nanostructured Porous Bioactive Coatings', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(71, 'Surgical Tools', 5, 'Surgical Tools', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(72, 'Installation for Metal Needles Destruction DS-S-1400', 5, 'Installation for Metal Needles Destruction DS-S-1400', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(73, 'Disposable Cardiographic Electrodes “EKO”', 5, 'Disposable Cardiographic Electrodes “EKO”', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(74, 'Photometer KFK 3-01', 5, 'Photometer KFK 3-01', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(75, 'Binocular Colposcopes KNB-01, KNB -02, KNB -04-01LED, KNB -04LED', 6, 'Binocular Colposcopes KNB-01, KNB -02, KNB -04-01LED, KNB -04LED', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(76, 'Apparatuses “Cascade A” and “Cascade A Synchro”', 6, 'Apparatuses “Cascade A” and “Cascade A Synchro”', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(77, 'Medical Chair №№-01, №№-01-01, №№-01-02', 6, 'Medical Chair №№-01, №№-01-01, №№-01-02', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(78, 'Neonatal Intensive Care Incubator IDN-03', 7, 'Neonatal Intensive Care Incubator IDN-03', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(79, 'Lungs Artificial Ventilation Device For the Adults and Newborn Babies SLE 5000', 7, 'Lungs Artificial Ventilation Device For the Adults and Newborn Babies SLE 5000', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(80, 'Neonatal Table with Automated Heating Temperature Maintenance SNO', 7, 'Neonatal Table with Automated Heating Temperature Maintenance SNO', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(81, 'Neonatal IR-Warmer «Radiant Warmth- BONO»', 7, 'Neonatal IR-Warmer «Radiant Warmth- BONO»', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(82, 'Neonatal Warmer ODN-01', 7, 'Neonatal Warmer ODN-01', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(83, 'Neonatal Breathing Support Apparatus APDN-01', 7, 'Neonatal Breathing Support Apparatus APDN-01', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(84, 'Neonatal Artificial Lungs Ventilation Apparatus SLE 2000', 7, 'Neonatal Artificial Lungs Ventilation Apparatus SLE 2000', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(85, 'Eyeglass Test Lenses Sets', 8, 'Eyeglass Test Lenses Sets', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(86, 'Refractor FA-01', 8, 'Refractor FA-01', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(87, 'Auto Ref/Keratometer', 8, 'Auto Ref/Keratometer', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(88, 'Signs Projector PZA-01', 8, 'Signs Projector PZA-01', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(89, 'Workplace of the Ophthalmologist RMO-01', 8, 'Workplace of the Ophthalmologist RMO-01', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(90, 'Workplace of the Ophthalmologist RM-200', 8, 'Workplace of the Ophthalmologist RM-200', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(91, 'High-class ventilator «Aventa»', 9, 'High-class ventilator «Aventa»', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(92, 'Lung ventilator «Faza-21»', 9, 'Lung ventilator «Faza-21»', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(93, 'Multifunctional Inhalation Anesthesia Device For the Adults and Children MAIA-01', 9, 'Multifunctional Inhalation Anesthesia Device For the Adults and Children MAIA-01', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(95, 'Lungs Artificial Ventilation Device For the Adults and Newborn Babies SLE 1000', 9, 'Lungs Artificial Ventilation Device For the Adults and Newborn Babies SLE 1000', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(96, 'Neonatal Transport Incubator ITN-01', 9, 'Neonatal Transport Incubator ITN-01', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(97, 'Defibrillator Monitor Synchronized DFR-02', 10, 'Defibrillator Monitor Synchronized DFR-02', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(98, 'Slit Lamp LS-04', 10, 'Slit Lamp LS-04', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(99, 'Slit Lamp SL-P-04', 10, 'Slit Lamp SL-P-04', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(100, 'Universal Manual Ophthalmoscope OP-3B', 10, 'Universal Manual Ophthalmoscope OP-3B', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(101, 'Automatic Perimeter PKA-01', 10, 'Automatic Perimeter PKA-01', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(102, 'Automatic Computing Perimeter PKA-02', 10, 'Automatic Computing Perimeter PKA-02', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(103, 'Fundus Camera FK-01', 10, 'Fundus Camera FK-01', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(105, 'Automatic Lens-meter LMA-01', 10, 'Automatic Lens-meter LMA-01', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(106, 'Binocular Headband Ophthalmoscope NBP-3-01', 10, 'Binocular Headband Ophthalmoscope NBP-3-01', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(107, 'Monobinoscope MBS-02', 10, 'Monobinoscope MBS-02', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(108, 'Optical Dioptermeter DO-3', 10, 'Optical Dioptermeter DO-3', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(109, 'Projection Analyzer of the Field of View APPZ-01', 10, 'Projection Analyzer of the Field of View APPZ-01', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(110, 'propranolol hydrochloride', 11, 'Tablets 10 Mg <br/> Tablets 40 Mg', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(111, 'Atorvastatin', 11, 'Tablets Film Coated 10mg <br/> Tablets Film Coated 20mg <br/> Tablets Film Coated 40mg', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(112, 'Betaxolol', 11, 'Betaxolol 20 Mg Film-Coated Tablets, Pack Of 30', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(113, 'Enalapril', 11, 'Tablets 0,01g №20<br/> Tablets 0,005g №20', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(114, 'Bisoprolol', 11, 'Tablets 10mg №50<br/> Tablets 5mg №30<br/> Tablets 2,5mg №30', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(115, 'Captopril', 11, 'Tablets 25 Mg №20', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(116, 'Verapamil', 11, 'Solution For Introvenous Injection 2,5 Mg/Ml 2 Ml №10', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(117, 'Dibazol', 11, 'Solution For Injections 0,5% 2 Ml №10, Solution For Injections 1% 5ml №10', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(118, 'Perindopril', 11, 'Tablets 4 Mg №30<br/> Tablets 8 Mg №30', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(119, 'Rosuvastatin', 11, 'Tablets Film Coated 5mg № 30<br/> Tablets Film Coated 10mg № 30<br/> Tablets Film Coated 20mg № 30', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(120, 'Torasemide', 11, 'Tablets 5mg<br/> Tablets 10mg', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(121, 'Epinephrine', 11, 'Adrenaline Solution For Injections 1mg/Ml, 1 Ml Ampules, Pack Of 5', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(122, 'Riboxinum', 11, 'Solution For Intravenous Injections 20mg/Ml 10ml №10, Ampules, Solution For Intravenous Injections 20mg/Ml 5ml №10, Ampules', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(123, 'Valsartan', 11, 'Film Coated Tablets 40 Mg №30<br/> Film Coated Tablets 80 Mg №30<br/> Film Coated Tablets 160 Mg', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(124, 'Nebivolol', 11, 'Tablets 5 Mg №28', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(125, 'Clopidogrel Plus', 11, 'Film Coated Tablets, 100 Mg+75 Mg №28', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(126, 'Lerkanidipin', 11, 'Film Coated Tablets 10 Mg №30<br/> Film Coated Tablets 20 Mg №30', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(127, 'Moxonidin№', 11, 'Film Coated Tablets 0,2 Mg №28<br/> Film Coated Tablets 0,4 Mg №28', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(128, 'Pentoxifylline', 11, 'Tablets 400 Mg №20', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(129, 'Regkirona', 12, 'CT – P59 REGDANVIMAB 960MG/16ML CONCENTRATE FOR SOLUTION FOR INFUSION', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(131, 'Betaxolol Eye Drops', 13, 'Betaxolol 0.5% Eye Drops, 5 Ml Polymer Tube Droppers, Pack Of 1', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(132, 'Timolol', 13, 'Timolol 0.5% Eye Drops, 5 Ml Polymer Tube Droppers, Pack Of 1', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(133, 'Tropicamide', 13, 'Tropicamide 0.1% Eye Drops, Pack Of 1<br/>Tropicamide 0.05% Eye Drops, Pack Of 1', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(134, 'Taurine', 13, 'Taufon 4% Eye Drops, 1,5 Ml Polymer Tube Droppers, Pack Of 5<br/>Taufon 4% Eye Drops, 10 Ml Bottle Droppers, Pack Of 1', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(135, 'Levofloxacin Eye Drop', 13, 'Levofloxacin 0,5% Eye Drops, 5 Ml Bottle Droppers, Pack Of 1', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(136, 'Sulfacetamide', 13, 'Sulfacyl Sodium 20% Eye Drops In 1,5 Tube Droppers, Pack Of 2', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(137, 'Atropine', 13, 'Atropine 1% Eye Drops, 5ml Bottle, Pack Of 1', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(138, 'Lidocaine', 13, 'Lidocaine 2% Eye Drops, 1,5 Ml Polymer Tube Droppers, Pack Of 5', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(139, 'Pilocarpine', 13, 'Pilocarpine 1 % Eye Drops. 1.5 Ml In Polymer Tube Droppers, Pack Of 5<br/>Pilocarpine 1 % Eye Drops. 5 Ml In Bottle Droppers, Pack Of 1', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(140, 'Proxofelin', 13, 'Proxofelin 1% Eye Drops, 1,5 Ml Polymer Tube Droppers, Pack Of 5', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(141, 'Itratop', 14, 'Itracanozole 100mg capsules', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(155, 'Ampicillin', 14, 'Powder For Solution For Introvenous And Intromuscular Injection 0,5 G', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(156, 'Ampicillin Trihydrate', 14, 'Tablets 0.25 G, №10\r\nTablets 0,25g №20', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(157, 'Clarithromycin', 14, 'Tab. 250mg 10\r\nTab. 500mg 10', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(158, 'Azithromycin', 14, 'Tablets 500mg №3', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(159, 'Biotaksim', 14, 'Powder For Solution For Introvenous And Intromuscular Injection 1,0 G.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(160, 'Cefazolin', 14, 'Powder For Solution For Introvenous And Intromuscular Injection 1,0 G.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(161, 'Cefoperazone', 14, 'Powder For Solution For Introvenous And Intromuscular Injection 1,0 G.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(162, 'Cefotaxime', 14, 'Powder For Solution For Introvenous And Intromuscular Injection 1,0 G For Hospitals\r\nPowder For Solution For Introvenous And Intromuscular Injection 1,0 G For Hospitals', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(163, 'Ceftazidime', 14, 'Powder For Preparation Of Solution For Intravenous And Intramuscular Introduction 1,0g №1 (Flacon)', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(164, 'Ceftriaxone', 14, 'Powder For Solution For Introvenous And Intromuscular Injection 1,0 G For Hospitals\r\nPowder For Solution For Introvenous And Intromuscular Injection 1,0 G For Hospitals\r\nPowder For Preparation Of Solution For Intravenous And Intramuscular Introduction 1g №1 (Flacon)', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(165, 'Cefuroxime', 14, 'Powder For Solution For Introvenous And Intromuscular Injection 0,75 G.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(166, 'Nystatin', 14, 'Rectal Suppositories 500,000 IU№ 10\r\nFilm-Coated Tablets, 250000 UI №20\r\nFilm-Coated Tablets, 500000 UI №20\r\nOintment For External Use 100000UI/G 30g\r\nVaginal Suppositories 250,000 IU №10\r\nVaginal Suppositories 500,000 IU №10\r\nRectal Suppositories 250,000 IU № 10', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(167, 'Levofloxacin', 14, 'Tab. 500mg №10', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(168, 'Erythromycin', 14, 'Enteric-Coated Tablets, 100 Mg №10\r\nTablets, Enteric-Coated Tablets, 250 Mg №10\r\nOintment For External Use Of 10,000UI /G 15g', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(169, 'Tetracycline', 14, 'Film-Coated Tablets, 100 Mg №20\r\nOintment For External Use 3% 15g', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(170, 'Tetracycline With Nystatin', 14, 'Coated Tablets, 100 Mg + 22,2 Mg №10', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(171, 'Benzylpenicillin', 14, 'Powder For Solution For Introvenous And Intromuscular Injection1 000 000 UI', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(172, 'Biokson', 14, 'Powder For Solution For Introvenous And Intromuscular Injection 1,0 G.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(173, 'Co-Trimoxazole', 14, 'Tablets 480 Mg №20', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(174, 'Ftalazol (Sulfonamides)', 14, 'Tablets 500 Mg №10', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(175, 'Fuzidin-Sodium', 14, 'Enteric-Coated Tablets 250 Mg №20\r\nEnteric-Coated Tablets, 125 Mg №20', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(176, 'Griseofulvin', 14, 'Tablets 125mg №20', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(177, 'Soniazid', 14, 'Solution For Injections 10% 5 Ml №10\r\nTablets 300 Mg №100', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(178, 'Ofloxacin', 14, 'Tab. 400mg', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(179, 'Meropenem', 14, 'Powder For Preparation Of Solution For Intravenous Administration 0,5g №1 (Flacon)', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(180, 'Buprenorphine', 15, 'Bupranal Solution For Injections 0.3 Mg/Ml, 1 Ml Ampules, Pack Of 10', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(181, 'Buprenorphine + Naloxone', 15, 'Bupraxone Sublingual Tablets, Pack Of 20', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(182, 'Diazepam', 15, 'Sibazon Solution For Intravenous Or Intramuscular Injection 5 Mg/Ml In 2-Ml Ampules, Pack Of 5\r\nSibazon 5 Mg Tablets, Pack Of 20', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(183, 'Clonazepam', 15, 'Clonazepam 0.5 Mg Tablets, Pack Of 30\r\nClonazepam 2.0 Mg Tablets, Pack Of 30', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(184, 'Clozapine', 15, 'Clozapine 25 Mg Tablets, Pack Of 50\r\nClozapine 100 Mg Tablets, Pack Of 50', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(185, 'Naloxone', 15, 'Naloxone Soluttion For Injections 0.4 Mg/Ml, 1ml Ampules, Pack Of 10', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(186, 'Naltrexone', 15, 'Naloxone Soluttion For Injections 0.4 Mg/Ml, 1ml Ampules, Pack Of 10', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(187, 'Fentanyl', 15, 'Fentanyl Transdermal Therapeutic System (TTS) 12,5 Mcg/H, Pack Of 5\r\nFentanyl Transdermal Therapeutic System (TTS) 25 Mcg/H, Pack Of 5\r\nFentanyl Transdermal Therapeutic System (TTS) 50 Mcg/H, Pack Of 5\r\nFentanyl Transdermal Therapeutic System (TTS) 75 Mcg/H, Pack Of 5\r\nFentanyl Transdermal Therapeutic System (TTS) 100 Mcg/H, Pack Of 5\r\nFentanyl Solution For Intravenous Or Intramuscular Injection 50 Âµg/Ml, 1ml Ampules, Pack Of 5\r\nFentanyl Solution For Intravenous Or Intramuscular Injection', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(188, 'Ketamine', 15, 'etamine Solution For Intravenous Or Intramuscular Injection 50 Mg/Ml, 2ml Ampules, Pack Of 5', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(189, 'Morphine', 15, 'Morphine Solution For Injections 10 Mg/Ml, 1ml Ampules, Pack Of 10', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(190, 'Midazolam', 15, 'Midazolam Solution For Intravenous And Intramuscular Injection, 5 Mg/Ml In 3-Ml Ampules, Pack Of 5\r\nMidazolam Solution For Intravenous And Intramuscular Injection, 5 Mg/Ml In 1-Ml Ampules, Pack Of 10', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(191, 'Nitrazepam', 15, 'Nitrazepam 5 Mg Tablets, Pack Of 20', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(192, 'Sodium Oxybate', 15, 'Sodium Oxybate Solution For Intravenous Or Intramuscular Injection 200 Mg/Ml, 5ml Ampules, Pack Of 5', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(193, 'Nalbuphine', 15, 'Nalbuphine Solution For Injections, 20 Mg/Ml, 1ml Ampules, Pack Of 5', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(194, 'Morphine - Codeine - Noscapine - Papaverine - Thebaine', 15, 'Omnopon Solution For Subcutaneous Injection 0.72+5.75+2.7+0.36 +0.05 Mg/Ml, 1ml Ampules, Pack Of 5\r\nOmnopon Solution For Subcutaneous Injection 1.44+11.5+5.4+0.72+0.1 Mg/Ml, 1ml Ampules, Pack Of 5', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(195, 'Trimeperidine', 15, 'Promedol Solution For Injections 10 Mg/Ml, 1 Ml Ampules, Pack Of 10\r\nPromedol Solution For Injections 20 Mg/Ml, 1ml Ampules\r\nPromedol Solution For Injections 20 Mg/Ml 1-Ml Syrettes, Pack Of 100', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(196, 'Phenobarbital', 15, 'Phenobarbital 100 Mg Tablets, Pack Of 10', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(197, 'Benzobarbital', 15, 'Benzonal 100 Mg Tablets, Pack Of 50', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(198, 'Amitriptyline', 15, 'Amitriptyline Solutions For Intravenous And Intramuscular Injections 10mg/Ml, 2ml Ampules, Pack Of 10\r\nAmitriptyline 25 Mg Tablets, Pack Of 50', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(199, 'Droperidol', 15, 'Droperidol Solution For Injections 2.5 Mg/Ml, 2ml Ampules, Pack Of 5\r\nDroperidol Solution For Injections 2.5 Mg/Ml, 5ml Bottles, Pack Of 5', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(200, 'Trihexyphenidyl', 15, 'Trihexyphenidyl 2 Mg Tablets, Pack Of 50', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(201, 'Aminophenyl Butyric Acid', 15, 'Phenibut 250 Mg Tablets, Pack Of 20', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(202, 'Tramadol', 15, 'Tramadol Solution For Injections 50 Mg/Ml In 1-Ml Ampules, Pack Of 5\r\nTramadol Solution For Injections 50 Mg/Ml In 2-Ml Ampules, Pack Of 5\r\nTramadol 50 Mg Capsules, Pack Of 20', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(203, 'Risperidone', 15, 'RISPERIDONE Tab. 2mg №20', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(204, 'Enixum', 16, 'Solution For Introduction 10 000 Anti-№№ M№/Ml 1,0 Ml №10 AmpoulesSolution For Introduction 10 000 Anti-№№ M№/Ml 0,3 Ml №10\r\nSolution For Introduction 10 000 Anti-№№ M№/Ml 0,5 Ml №10\r\nSolution For Introduction 10 000 Anti-№№ M№/Ml 0,2 Ml №10 Ampoules\r\nSolution For Introduction 10 000 Anti-№№ M№/Ml 0,3 Ml №10 Ampoules\r\nSolution For Introduction 10 000 Anti-№№ M№/Ml 0,4 Ml №10 Ampoules\r\nSolution For Introduction 10 000 Anti-№№ M№/Ml 0,5 Ml №10 Ampoules\r\nSolution For Introduction 10 000', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(205, 'Heparin', 16, 'Ointment For External Use 25 G\r\nHeparin Solution For Intravenous And Subcutaneous Administration 5000 ME/Ml, 5ml Bottles, Pack Of 5', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(206, 'Haemodesum-8000', 16, 'Solution For Infusion 200 Ml\r\nSolution For Infusion 400 Ml', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(207, 'Vikasol', 16, 'Solution For Intromuscular Injection 10 Mg/Ml 2 Ml №10\r\nTablets 15 Mg №30', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(208, 'Bemevax', 17, 'Bupivacaine 5mg/ml Ampule', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(209, 'Amelotex', 17, '1% Gel Tube 30g\r\n1% Gel Tube 50\r\nSolution For Intramuscular Introduction 15 Mg №Mp. 1,5ml №5\r\nSolution For Intramuscular Introduction 15 Mg №Mp. 1,5ml №3\r\nSolution For Intramuscular Introduction 15 Mg №Mp. 1,5ml №10\r\nSupp. Rectal 15mg №6Supp. Rectal 7,5mg №6Tablets 15mg №10\r\nTablets 7,5mg №20', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(210, 'Artrum', 17, 'Gel For External Use 2,5% 30 G, Ointment\r\nGel For External Use 5% 30 G, Ointment', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(211, 'Diclofenac', 17, 'Solution For Intromuscular Injection 75 Mg/Ml 3 Ml №10\r\nTablets, Coated With Enteric Shell 25 Mg №30\r\nOintment For External Application Of 1% 30 G\r\nRectal Suppositories 50 Mg №10Amp. 25mg/Ml 3ml. №5', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(212, 'Flamadex', 17, 'Solution For Introduction 25mg/Ml, 2ml №5\r\nTablets 25mg №10', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(213, 'Flamax', 17, 'Amp. 50mg/Ml 2ml №10\r\nAmp. 50mg/Ml 2ml №5\r\nCapsule 50mg №25', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(214, 'Flamax Forte', 17, 'Tablets100 Mg. №20', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(215, 'Ibuprofen', 17, 'Film-Coated Tablets, 0.2 G №20\r\nFilm-Coated Tablets 0,2g №50\r\nSupp. Rectal Rese (For Kids) 60mg №10', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(216, 'Indomethacin', 17, 'Rectal Suppositories 100 Mg №10\r\nIndomethacin-Biosynthesis\r\nCoated Tablets, 0,025g №30\r\nOintment For External Use 10% 30g', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(217, 'Belladonna Extract', 17, 'Rectal Suppositories 0.015 G №10', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(218, 'Citramon P', 17, '(Aspirin 220 Mg + Acetaminophen 200 Mg +Caffeine 27mg)', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(219, 'Dolomine', 17, 'Amp. 30mg/Ml 1ml №5', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(220, 'Drotaverinum', 17, 'Tablets 40 Mg №20', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(221, 'Grinterol', 18, 'Ursodeoxycholic acid 250mg Capsules', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(222, 'Kofambrol', 19, 'Ambroxol hydrochloride 60mg Dis-tablets', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(223, 'Anvimax', 19, 'The Composition Of 1 Packet Includes 360 Mg Of Paracetamol, 300 Mg Of Ascorbic Acid, 100 Mg Of Calcium Gluconate Monohydrate, 50 Mg Of Rimantadine Hydrochloride, 20 Mg Of Rutoside Trihydrate, 3 Mg Of Loratadine.', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(224, 'Anvifen', 19, 'Capsules 50mg №20\r\nCapsules 250mg №20\r\nCapsules 250mg №20', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(225, 'Ofost', 20, 'Oxytocin 10IU Ampule', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(226, 'Imagrix', 21, 'Imatinib mesylate 100mg Capsules (Oncology)', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(227, 'Provita', 22, 'Dexpanthenol 5% Cream', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(228, 'Furosemide', 23, 'Solution For Injection 1% 2ml №10, Ampules\r\nTablets 40 Mg №50', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(229, 'Eufillin', 23, 'Tablets 150 Mg №30\r\nSolution For Intravenous Injections 24 Mg/Ml 10 Ml №10, Ampules', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(230, 'Bromhexin', 23, 'Tablets 0,008g №50\r\nSolution For Infusion 200 Ml\r\nSolution For Infusion 400 Ml', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(231, 'Dimedrol', 23, 'Solution For Introvenous And Intromuscular Injection 10 Mg/Ml 1 Ml №10', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(232, 'Rabeprazol', 23, 'Capsules 10mg №14\r\nCapsules 20mg №14\r\nCapsules 10mg №28\r\nCapsules 20mg №28', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(233, 'Cholenzim', 23, 'Film-Coated Tablets, №50', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(234, 'Oxytocin', 23, 'Oxytocin-MEZ Solution For Intravenous And Intramuscular Administration, 5 №№/Ml, 1ml Ampules, Pack Of 10', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(235, 'Naphazoline', 23, 'Naphthyzine Nasal Drops 0.1% 10 Ml Bottle Droppers, Pack Of 1', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(236, 'Sildenafil', 23, 'Film Coated Tablets 50 Mg №4\r\nFilm Coated Tablets 50 Mg №10\r\nFilm Coated Tablets 50 Mg №20\r\nFilm Coated Tablets 100 Mg №4\r\nFilm Coated Tablets 100 Mg №10\r\nFilm Coated Tablets 100 Mg №20', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(237, 'Ursodez', 23, 'Capsules 250 Mg №50\r\nFentanyl Transdermal Therapeutic System (TTS) 50 Mcg/H, Pack Of 5', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(238, 'Tadalafil', 23, 'Film Coated Tablets 5 Mg №30\r\nFilm Coated Tablets 20 Mg №4\r\nFilm Coated Tablets 20 Mg №10\r\nFilm Coated Tablets 20 Mg №20', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(239, 'Chorionic Gonadotropin', 23, 'Lyophilisate For Preparing The Solution For Intramuscular Administration 500 №№/Ml, 5ml Glass Vials, Pack Of 5 With 5 Ampules Of 1ml Solvent\r\nLyophilisate For Preparing The Solution For Intramuscular Administration 1000 №№/Ml, 5ml Glass Vials, Pack Of 5 With 5 Ampules Of 1ml Solvent\r\nLyophilisate For Preparing The Solution For Intramuscular Administration 1500 №№/Ml, 5ml Glass Vials, Pack Of 5 With 5 Ampules Of 1ml Solvent\r\nLyophilisate For Preparing The Solution For Intramuscular Administration 50', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(240, 'Metoclopramide', 23, 'Metoclopramide 10 Mg Tablets, Pack Of 50\r\nMetoclopramide Solution For Intravenous Or Intramuscular Injection 5 Mg/Ml, 2ml Ampules, Pack Of 10', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(241, 'Bifisteam', 23, 'Powder №10', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(242, 'Compligam', 23, '№Mp.2ml', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(243, 'Ketoaminol', 23, 'Tablets Coated №100', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(244, 'Hepaguard', 23, 'Active № 30/4 Mini-Box (BIOS)\r\nActive Capsules № 30', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(245, 'Idrinol', 23, 'Solution 100mg/1ml Amp. 5ml №5\r\nCapsule 250mg №40', '2024-07-10 01:43:16', '2024-07-10 01:43:16'),
(246, 'Metformin', 23, 'Tab. 850mg №60\r\nTab. 500mg №60\r\nTab. 1000mg №60', '2024-07-10 01:43:16', '2024-07-10 01:43:16');

-- --------------------------------------------------------

--
-- Table structure for table `drug_classes`
--

CREATE TABLE `drug_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_categories_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drug_classes`
--

INSERT INTO `drug_classes` (`id`, `name`, `product_categories_id`, `created_at`, `updated_at`) VALUES
(4, 'FOOT SUPPLEMENTS', 2, '2024-07-10 00:56:27', '2024-07-10 00:56:27'),
(5, 'ADDITIONAL MEDICAL EQUIPMENT', 3, '2024-07-10 00:57:38', '2024-07-10 00:57:38'),
(6, 'GYNECOLOGY AND DIAGNOSTICS', 3, '2024-07-10 00:58:00', '2024-07-10 00:58:00'),
(7, 'NEONATAL EQUIPMENT', 3, '2024-07-10 00:58:49', '2024-07-10 00:58:49'),
(8, 'OPHTHALMOLOGY', 3, '2024-07-10 00:59:05', '2024-07-10 00:59:05'),
(9, 'RESPIRATORY EQUIPMENT', 3, '2024-07-10 00:59:13', '2024-07-10 00:59:13'),
(10, 'RESUSCITATION EQUIPMENT', 3, '2024-07-10 00:59:22', '2024-07-10 00:59:22'),
(11, 'CARDIOVASCULAR DRUGS', 1, '2024-07-10 00:59:47', '2024-07-10 00:59:47'),
(12, 'VACCINES', 1, '2024-07-10 00:59:57', '2024-07-10 00:59:57'),
(13, 'EYE DROPS', 1, '2024-07-10 01:00:05', '2024-07-10 01:00:05'),
(14, 'ANTIBIOTIC', 1, '2024-07-10 01:00:13', '2024-07-10 01:00:13'),
(15, 'NEUROLOGICAL AND PSYCHOLOGICAL DRUGS', 1, '2024-07-10 01:00:22', '2024-07-10 01:00:22'),
(16, 'ANTICOAGULANTS', 1, '2024-07-10 01:00:32', '2024-07-10 01:00:32'),
(17, 'PAIN MANAGEMENT', 1, '2024-07-10 01:00:38', '2024-07-10 01:00:38'),
(18, 'GASTRO', 1, '2024-07-10 01:00:45', '2024-07-10 01:00:45'),
(19, 'AGAINST INFLUENZA', 1, '2024-07-10 01:00:55', '2024-07-10 01:00:55'),
(20, 'HORMONES', 1, '2024-07-10 01:01:03', '2024-07-10 01:01:03'),
(21, 'ONCOLOGY', 1, '2024-07-10 01:01:16', '2024-07-10 01:01:16'),
(22, 'CREAMS AND OINTMENTS', 1, '2024-07-10 01:01:24', '2024-07-10 01:01:24'),
(23, 'OTHERS', 1, '2024-07-10 01:01:34', '2024-07-10 01:01:34');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(5, '2024_07_09_204136_create_categories_table', 2),
(6, '2024_07_09_205851_create_posts_table', 3),
(8, '2024_07_09_211424_create_teams_table', 4),
(9, '2024_07_09_215913_create_partners_table', 5),
(10, '2024_07_10_043621_create_product_categories_table', 6),
(11, '2024_07_10_051743_create_drug_classes_table', 7),
(12, '2024_07_10_053601_create_drugs_table', 8),
(13, '2024_07_10_060157_create_news_table', 9),
(14, '2024_07_10_144905_create_services_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news`, `created_at`, `updated_at`) VALUES
(1, 'As proud partners with world-leading manufacturers, we ensure access to essential, high-quality medicines.', '2024-07-10 00:35:56', '2024-07-10 00:36:55');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `partner_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `partner_image`, `created_at`, `updated_at`) VALUES
(1, '01J2CRJFYAT3SFCG8QFHTTCN1R.png', '2024-07-09 16:37:07', '2024-07-09 16:37:07'),
(2, '01J2CRJW22ZHWBWPFDXB2P7JKD.png', '2024-07-09 16:37:10', '2024-07-09 16:37:19'),
(3, '01J2CRK91D4XNQNR8QRRCQ3GR5.png', '2024-07-09 16:37:32', '2024-07-09 16:37:32'),
(4, '01J2CRMFEH771N24XP4XT93A7X.png', '2024-07-09 16:38:12', '2024-07-09 16:38:12'),
(5, '01J2CRMS8CBGAH1VY63RKT8X13.png', '2024-07-09 16:38:22', '2024-07-09 16:38:22'),
(6, '01J2CRN8T14EW8VK87HHA3GJSE.png', '2024-07-09 16:38:38', '2024-07-09 16:38:38'),
(7, '01J2CRNHHJXBG1YS0CBM5937RJ.png', '2024-07-09 16:38:47', '2024-07-09 16:38:47'),
(8, '01J2CRNSN9Z3P1RJ8BZBXXY97P.png', '2024-07-09 16:38:55', '2024-07-09 16:38:55'),
(9, '01J2CRP1RQRZW5A1BVSWDP5P18.png', '2024-07-09 16:39:03', '2024-07-09 16:39:03'),
(10, '01J2CRPAFSC6Z0MGQVJEZZ5WXW.png', '2024-07-09 16:39:12', '2024-07-09 16:39:12'),
(11, '01J2CRPKNVCK9AJYTAPFWCMPPM.png', '2024-07-09 16:39:22', '2024-07-09 16:39:22');

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories_id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `tags` json DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `thumbnail`, `title`, `slug`, `categories_id`, `content`, `tags`, `published`, `created_at`, `updated_at`) VALUES
(1, 'thumbnails/01J2FDGZ33GZWV0EGCTVC2PGH2.png', 'Patient-Centered Medication Labs Start', 'patient-centered-medication-labs-start', 6, NULL, '[]', 0, '2024-07-10 17:21:46', '2024-07-10 17:21:46'),
(2, 'thumbnails/01J2FDHTRDF57B3HFZJKHW4JE9.png', '5 Nutrients To Help Manage Eczema', '5-nutrients-to-help-manage-eczema', 6, NULL, '[]', 0, '2024-07-10 17:22:14', '2024-07-10 17:22:14'),
(3, 'thumbnails/01J2FDJHCEK97GW7A3CE0FMWHV.png', 'An important message from Al Kenz pharmaceuticals CEO', 'an-important-message-from-al-kenz-pharmaceuticals-ceo', 6, NULL, '[]', 0, '2024-07-10 17:22:37', '2024-07-11 11:23:53');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `banner_image`, `created_at`, `updated_at`) VALUES
(1, 'Medication', '01J2DFVD7D1V038VRW0VH2MSWJ.png', '2024-07-09 23:23:56', '2024-07-09 23:23:56'),
(2, 'Food Supplement', '01J2DFWH1SJ87D21029SG3KYXA.png', '2024-07-09 23:24:33', '2024-07-09 23:24:33'),
(3, 'Medical Equipment', '01J2DFXM366D3SJ476VPZCZDHA.png', '2024-07-09 23:25:09', '2024-07-09 23:25:09');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `component` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `short_description`, `description`, `content`, `thumbnail`, `component`, `created_at`, `updated_at`) VALUES
(1, 'Market Research', 'We provide comprehensive market research to ensure informed decision-making and success in the U.A.E. market.', 'Our business-development team will analyse the suitability of each product particularly for the U.A.E. market. The team has an experience of more than 25 years in the U.A.E market.', '    <section class=\"ak-container ak-inner-market-research-content\">\n        <div class=\"container\">\n            <div class=\"row\">\n                <div class=\"col-12\">\n\n                    <h2>Market Research</h2>\n                    <p>Before entering a new market, it is crucial to thoroughly understand it. Our business-development team will analyze the suitability of each product specifically for the U.A.E. market, leveraging their extensive experience of more than 25 years in the region. This deep market knowledge is essential to making informed decisions and achieving success.</p>\n                    <p>To successfully enter a new market, it is important to consider various factors such as market conditions, competitors, SWOT analysis of the product, active players in the market, and their pricing strategies. Conducting appropriate market research allows you to enter the market with the most suitable proposal and strategy, tailored to the unique dynamics of the market.</p>\n                    <p>Our expertise ensures that you can choose the most profitable areas for your business and development. A business without market study is a business without vision and success. Trusting our experienced team will help you navigate the complexities of the U.A.E. market and position your products for maximum profitability.</p>\n\n                </div>\n            </div>\n        </div>\n    </section>', '01J2EKVPQVB13NC2N0NGPHSBB4.jpeg', '    <section class=\"ak-container ak-inner-market-research-process\">\n\n        <h2 style=\"margin-bottom: 50px;\">Our Market Research Process</h2>\n\n        <ul class=\"process-list six\">\n            <li class=\"item\">\n                <span class=\"value\">01</span>\n                <span class=\"text\">Problem Definition</span>\n            </li>\n            <li class=\"item\">\n                <span class=\"value\">02</span>\n                <span class=\"text\">Approach Formulation</span>\n            </li>\n            <li class=\"item\">\n                <span class=\"value\">03</span>\n                <span class=\"text\">Research Design Selection</span>\n            </li>\n            <li class=\"item\">\n                <span class=\"value\">04</span>\n                <span class=\"text\">Data Collection</span>\n            </li>\n            <li class=\"item\">\n                <span class=\"value\">05</span>\n                <span class=\"text\">Data Processing</span>\n            </li>\n            <li class=\"item\">\n                <span class=\"value\">06</span>\n                <span class=\"text\">Analysis & Reporting</span>\n            </li>\n        </ul>\n\n    </section>', '2024-07-10 09:40:51', '2024-07-10 13:21:27'),
(2, 'Registration of Products', 'We ensure seamless registration and regulatory compliance for a wide range of essential healthcare products.', 'Registration of different core categories of hospital-products like anti-cancer, anti-biotics, anti-fungals, mucolytics etc. registered on fast-track basis. ', '    <section class=\"ak-container ak-inner-market-research-content\">\n        <div class=\"container\">\n            <div class=\"row\">\n                <div class=\"col-12\">\n\n                    <h2>Registration of Products</h2>\n                    <p>The registration of over 40 general sales products has been successfully completed. Additionally, various core categories of hospital products, including anti-cancer, antibiotics, antifungals, and mucolytics, have been registered on a fast-track basis. This ensures that essential medications are readily available to healthcare providers and patients.</p>\n                    <p>Efforts have been made to streamline the regulatory process by preparing electronic Common Technical Document (eCTD) submissions for products, making it easier for manufacturers to comply with regulatory requirements. Finely curated regulatory plans are developed based on the product type and its specific documentation, ensuring a smooth and efficient approval process.</p>\n                    <p>Moreover, the preparation of artworks and the renewal of registrations are managed meticulously. Comprehensive scientific literature is prepared for the market launch of new products, providing healthcare professionals with the necessary information to make informed decisions about their use.</p>\n\n                </div>\n            </div>\n\n            <br/>\n\n            <div class=\"row\">\n                <div class=\"col-12\">\n\n                    <h3>CORE CATEGORIES</h3>\n\n                    <ul class=\"categories-list\">\n                        <li class=\"item\">ANTI-DIABETICS</li>\n                        <li class=\"item\">ANTI-ARTHRITIS</li>\n                        <li class=\"item\">ANTI-INFECTIVES</li>\n                        <li class=\"item\">ANTI-CANCER</li>\n                        <li class=\"item\">SURGICAL ANAESTHESIA</li>\n                        <li class=\"item\">FERTILITY & VIGOR </li>\n                        <li class=\"item\">HORMONAL THERAPY</li>\n                        <li class=\"item\">OBSTETRICS & GYNECOLOGICAL</li>\n                        <li class=\"item\">VITAMINS & SUPPLEMENTS</li>\n                    </ul>\n\n                </div>\n            </div>\n\n        </div>\n    </section>', '01J2EKWJ280V6T6T946CHF8HB1.jpeg', '    <section class=\"ak-container ak-inner-market-research-process\">\n\n        <h2 style=\"margin-bottom: 50px;\">Regulatory Affairs</h2>\n\n        <ul class=\"process-list seven\">\n            <li class=\"item\">\n                <span class=\"value\">01</span>\n                <span class=\"text\">Artwork & Labelling</span>\n            </li>\n            <li class=\"item\">\n                <span class=\"value\">02</span>\n                <span class=\"text\">eCTD Submissions</span>\n            </li>\n            <li class=\"item\">\n                <span class=\"value\">03</span>\n                <span class=\"text\">Market Authorization</span>\n            </li>\n            <li class=\"item\">\n                <span class=\"value\">04</span>\n                <span class=\"text\">Investigational Filings</span>\n            </li>\n            <li class=\"item\">\n                <span class=\"value\">05</span>\n                <span class=\"text\">Document Services</span>\n            </li>\n            <li class=\"item\">\n                <span class=\"value\">06</span>\n                <span class=\"text\">Regulatory Dossier</span>\n            </li>\n            <li class=\"item\">\n                <span class=\"value\">07</span>\n                <span class=\"text\">Regulatory Compliance</span>\n            </li>\n        </ul>\n\n    </section>', '2024-07-10 09:42:28', '2024-07-10 13:23:14'),
(3, 'Third party manufacturing', 'We specialize in custom manufacturing and strategic collaborations to bring high-quality pharmaceutical products to the MENA region', 'We are one of the very few scientific offices licensed in the U.A.E. to perform custom manufacturing.', '    <section class=\"ak-container ak-inner-market-research-content\">\n        <div class=\"container\">\n            <div class=\"row\">\n                <div class=\"col-12\">\n\n                    <h2>Custom/Third Party Manufacturing</h2>\n\n                    <p>We collaborate with manufacturers to custom manufacture goods, making us one of the very few scientific offices licensed in the U.A.E. to perform such specialized tasks. This collaboration provides a beneficial platform for foreign products that are not registered in standard reference countries, allowing them to enter the market efficiently. Currently, we have partnerships with over five manufacturers in the U.A.E., enhancing our production capabilities and market reach.</p>\n                    <p>One of our main collaborations is with LIFE PHARMA FZE, a US FDA-approved facility, which underscores our commitment to quality and regulatory compliance. In 2022, we successfully launched our first contract-manufactured product, Itraconazole 100mg, an antifungal medication, under the brand name ITRATOP. This milestone marked a significant achievement in our custom manufacturing endeavors.</p>\n                    <p>The attractiveness of UAE-manufactured products in the MENA region is evident, as these products gain recognition for their quality and reliability. Our strategic collaborations and the successful launch of ITRATOP demonstrate our capability to meet the growing demand for high-quality pharmaceutical products in the region.</p>\n\n                </div>\n            </div>\n        </div>\n    </section>', '01J2EKX520H4982EY339HZ58MM.jpeg', '    <section class=\"ak-container ak-inner-market-research-process\">\n\n        <h2 class=\"dot\">Contract Manufacturing</h2>\n\n        <ul class=\"process-model\">\n            <li class=\"item left\">\n                <h4>Secondary Packing Model</h4>\n                <p>Bulk products incoming from foreign countries are put into the final packs in our factories in the U.A.E. and the batch is locally released through the U.A.E. manufacturer </p>\n            </li>\n            <li class=\"item right\">\n                <h4>Full Manufacturing Model</h4>\n                <p>The technology of manufacturing is transferred to the manufacturer in U.A.E. and the full manufacturing from scratch is done here with a benefit in price of the product.</p>\n            </li>\n        </ul>\n\n    </section>', '2024-07-10 09:43:31', '2024-07-10 14:13:11'),
(4, 'Import export', 'We expertly manage the entire import and export process to ensure seamless and efficient delivery of pharmaceutical products.', 'Imports and Exports of registered products are swiftly handled by our teams of experts starting from freight, import/export permit, government approved, customs’ clearance and land transportation to warehouses.', '    <section class=\"ak-container ak-inner-market-research-content\">\n        <div class=\"container\">\n            <div class=\"row\">\n                <div class=\"col-12\">\n\n                    <h2>Import & Export</h2>\n                    \n                    <p>Our teams of experts efficiently manage the imports and exports of registered products, ensuring smooth operations from freight handling and import/export permits to government approvals, customs clearance, and land transportation to warehouses. This comprehensive approach ensures that all logistical aspects are covered, facilitating timely and reliable delivery of products.</p>\n                    <p>We strategically plan exports by collaborating with our agents outside the U.A.E., targeting international markets as a significant revenue source and a means to expand our business by increasing sales volumes. For foreign manufacturers, we assist in exporting their products to markets beyond the U.A.E., thereby enhancing their product sales and market presence.</p>\n                    <p>Additionally, we focus on importing non-registered products (NRP). One of our most successful NRP imports involved narcotic products like Fentanyl and Remifentanyl from Russia (Moscow Endocrine Plant), India (Triokka Pharmaceuticals), and China (Yichang Pharmaceuticals). These orders were supplied to both government and private hospitals, demonstrating our capability to handle specialized and sensitive pharmaceutical products effectively.</p>\n\n                </div>\n            </div>\n        </div>\n    </section>', '01J2EKY1S0SHSENY4CV98FCK8Z.jpeg', '    <section class=\"ak-container ak-inner-market-research-process\">\n        <div class=\"container\">\n            <div class=\"row\">\n                <div class=\"col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6\">\n                    <div class=\"content-box\">\n                        <h3>IMPORT OF NON-REGISTERED PRODUCTS</h3>\n                        <h2>The import of Non-Registered Products is an area that remains inaccessible to many drugstore companies in the U.A.E.</h2>\n                        <p>Al KenzPharmaceuticals is among the very few companies in the U.A.E. getting the approvals for the import of Non-Registered Products.</p>\n                        <p>In this sector high noise level and success is always for the ones who ensure fast delivery sourcing of such drugs and fast shipment and ex-stock plays an important roles in this. For this we need an equally strong relationship with the buyers and the sellers.</p>\n                        <p>Special government approvals are required as well. </p>\n                    </div>\n                </div>\n                <div class=\"col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6\">\n                    <div class=\"content-box\">\n                        <img src=\"./../kenz-assets/assets/images/import-export-contenct-img.png\" alt=\"\">\n                    </div>\n                </div>\n            </div>\n        </div>\n    </section>', '2024-07-10 09:44:16', '2024-07-10 13:27:46'),
(5, 'Distribution', 'We serve diverse healthcare customers, ensuring comprehensive pharmaceutical care across communities.', 'With a robust distribution network, we ensure that our products are readily available across the entire UAE', '<section class=\"ak-container ak-inner-market-research-content\">\n		<div class=\"container\">\n				<div class=\"row\">\n						<div class=\"col-12\">\n\n								<h2>Distribution</h2>\n								<p>We cater to a diverse range of customers, including 850 major groups of pharmacies. Among these, prominent names such as Aster, Life Pharmacy, Boots, Supercare, Al Manara, Thumbay, Burjeel, NMC, Marina, United, Ibn Sina, Medicina, and Planet stand out. These pharmacy groups are key players in the market, contributing significantly to the healthcare ecosystem. Additionally, we support 100 major hospitals, including private hospitals like Mediclinic, Aster, Medeor Hospital, Thumbay, Zulekha, NMC, Saudi German Hospital, and Canadian Hospital, which are among our main customers.</p>\n								<p>In addition to these, we serve 250 pharmacies that operate under group structures with multiple owners. Notable among these are the Med 7 Group, Medex, and several smaller entities. These groups play a crucial role in providing accessible healthcare solutions across various regions, offering a wide range of products and services. Our government customers include the Ministry of Health & Prevention (MOHAP), Dubai Health Authority, SEHA, Sheikh Khalifa Hospital, Tawam, and Tadawi, further diversifying our customer base.</p>\n								<p>In the individual segment, we have a substantial presence with around 200 pharmacies. These individual pharmacies, numbering over 200, are essential in serving local communities, ensuring that pharmaceutical care is readily available to all. We also support about 500 small clinics, including notable names like Health Hub and Aster Clinic. Together, these diverse customer segments enable us to maintain a robust and comprehensive market presence.</p>\n\n						</div>\n				</div>\n		</div>\n</section>', '01J2EKZQNC0YEP9JFYRW2Y0Z04.jpeg', ' <section class=\"ak-container ak-inner-market-research-steps\">\n        <div class=\"container\">\n            <div class=\"row\">\n                <div class=\"col-12\">\n                    <ul class=\"steps-list\">\n                        <li class=\"item\">\n                            <img src=\"./../kenz-assets/assets/services/store-managers.png\" alt=\"\">\n                            <span>3+ Store Managers</span>\n                        </li>\n                        <li class=\"item\">\n                            <img src=\"./../kenz-assets/assets/services/local-accounts.png\" alt=\"\">\n                            <span>700+ Local Accounts</span>\n                        </li>\n                        <li class=\"item\">\n                            <img src=\"./../kenz-assets/assets/services/store-workers.png\" alt=\"\">\n                            <span>8+ Store Workers</span>\n                        </li>\n                        <li class=\"item\">\n                            <img src=\"./../kenz-assets/assets/services/delivery-vehicles.png\" alt=\"\">\n                            <span>10+ Delivery Vehicles</span>\n                        </li>\n                        <li class=\"item\">\n                            <img src=\"./../kenz-assets/assets/services/cold-storage.png\" alt=\"\">\n                            <span>Cold Storage</span>\n                        </li>\n                        <li class=\"item\">\n                            <img src=\"./../kenz-assets/assets/services/global-markets-export.png\" alt=\"\">\n                            <span>7+ Global Markets Export</span>\n                        </li>\n                    </ul>\n                </div>\n            </div>\n        </div>\n    </section>', '2024-07-10 09:55:27', '2024-07-10 13:30:03'),
(6, 'Marketing', 'We are one of the very few scientific offices licensed in the U.A.E. to perform custom manufacturing.', 'We are one of the very few scientific offices licensed in the U.A.E. to perform custom manufacturing.', '<section class=\"ak-container ak-inner-market-research-content\">\n		<div class=\"container\">\n				<div class=\"row\">\n						<div class=\"col-12\">\n\n								<h2>Offline Marketing Services</h2>\n\n								<ul class=\"marketing-list\">\n										<li class=\"item\">\n												<img src=\"./../kenz-assets/assets/services/marketing-1.png\" alt=\"\">\n												<h2>Digital & Print Material</h2>\n												<p>We design brochures and provide digital tablets, product monographs, scientific references and training manuals.</p>\n										</li>\n										<li class=\"item\">\n												<img src=\"./../kenz-assets/assets/services/marketing-2.png\" alt=\"\">\n												<h2>Discussions & Training</h2>\n												<p>Group Discussions and training of the staff for new products and conducting examinations and interactive sessions. </p>\n										</li>\n										<li class=\"item\">\n												<img src=\"./../kenz-assets/assets/services/marketing-3.png\" alt=\"\">\n												<h2>Product Launch Events</h2>\n												<p>Product launch events with doctors and other eminent professionals and speakers.</p>\n										</li>\n								</ul>\n\n\n						</div>\n				</div>\n		</div>\n</section>', '01J2EM2VQBBERJ5TCC7HGNWDYX.jpeg', '\n<section class=\"ak-container ak-inner-market-research-content bg-color\">\n		<div class=\"container\">\n				<div class=\"row\">\n						<div class=\"col-12\">\n\n								<h2 style=\"color: var(--color-white);padding-top: 60px;padding-bottom: 20px;\">Online Marketing Services</h2>\n\n								<ul class=\"marketing-list\">\n										<li class=\"item\">\n												<img src=\"./../kenz-assets/assets/services/marketing-4.png\" alt=\"\">\n												<h2>Online Selling</h2>\n												<p>Most of our products are accessible online via Health First Pharmacy, Amazon, Desertcart, and Noon.</p>\n										</li>\n										<li class=\"item\">\n												<img src=\"./../kenz-assets/assets/services/marketing-5.png\" alt=\"\">\n												<h2>Social Media Marketing</h2>\n												<p>Group Discussions and training of the staff for new products and conducting examinations and interactive sessions. </p>\n										</li>\n										<li class=\"item\">\n												<img src=\"./../kenz-assets/assets/services/marketing-6.png\" alt=\"\">\n												<h2>Product Launch Events</h2>\n												<p>Product launch events with doctors and other eminent professionals and speakers.</p>\n										</li>\n								</ul>\n\n\n						</div>\n				</div>\n		</div>\n</section>', '2024-07-10 09:57:09', '2024-07-10 13:41:00');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('iwpDmkxJrnTLBd2JLj0UPALYKP4TEfXOJh961A4A', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiYnRoaVV2ZE1HemR3OThka1JUTXZLUHkwbFhMNHIzNWZFdTZBM2hHbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9wb3N0cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkeWtiVW1QMXRpdWhtOVVEUkNsVzFxT21jcWs1V244Vy42UzRuRFBNWk9nZm9kZnQySWg4YVciO3M6ODoiZmlsYW1lbnQiO2E6MDp7fX0=', 1720718658),
('Lpan2zY7foxyt3pgKoHpH5p0KmFFyi6JAkAO2rO1', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoicUJvSW1kcXRqUXFtZlFXSXZQRWw2M1hXMmJ0R2ZtbU1QUnRYaHlyNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9pbnNpZ2h0LzMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJHlrYlVtUDF0aXVobTlVRFJDbFcxcU9tY3FrNVduOFcuNlM0bkRQTVpPZ2ZvZGZ0MkloOGFXIjtzOjg6ImZpbGFtZW50IjthOjA6e319', 1720704344);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hierarchy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `email`, `designation`, `image`, `hierarchy`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Mustafa Khalaf', NULL, 'CEO', 'teams/01J2CQ4DXG9MMG67YHWNTACHY0.png', 'a', '2024-07-09 16:11:57', '2024-07-09 16:11:57'),
(2, 'Dr. Victoria Kurzanteseva', NULL, 'Regulatory Affairs and Drugs Safety Manager', 'teams/01J2CQ59THH4PPN5QD6YS550Q3.png', 'b', '2024-07-09 16:12:26', '2024-07-09 16:12:26'),
(3, 'Dr. Margarita Khalaf', NULL, 'Business Development Manager', 'teams/01J2CQ6EZ7EDPXVCB8ZVJR2J8Y.png', 'b', '2024-07-09 16:13:04', '2024-07-09 16:21:45'),
(4, 'Dr. Krishna Priya Ashok', NULL, 'Regulatory Affairs and Drugs Safety Officer', 'teams/01J2CQ72Z5ZQ7QNARWZCEAEHKQ.png', 'b', '2024-07-09 16:13:24', '2024-07-09 16:21:51'),
(5, 'Dr. Ali Al Houri', NULL, 'Pharmacist & Sales Manager', 'teams/01J2CQ7VA91SFQG2ZM6JWQB8KB.png', 'b', '2024-07-09 16:13:49', '2024-07-09 16:21:58'),
(6, 'Reem Hassan', NULL, 'Finance Manager', 'teams/01J2CQ8F24C2YPPR1VWHA0C6H8.png', 'c', '2024-07-09 16:14:10', '2024-07-09 16:22:07'),
(7, 'Aya Al Khatib', NULL, 'Strategy Manager', 'teams/01J2CQ94YN6NWECZKH2SJG23T0.png', 'c', '2024-07-09 16:14:32', '2024-07-10 14:37:14');

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
(1, 'admin', 'absarkannur@gmail.com', NULL, '$2y$12$ykbUmP1tiuhm9UDRClW1qOmcqk5Wn8W.6S4nDPMZOgfodft2Ih8aW', NULL, '2024-07-09 15:07:02', '2024-07-09 15:07:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `drugs_name_unique` (`name`),
  ADD KEY `drugs_drug_classes_id_foreign` (`drug_classes_id`);

--
-- Indexes for table `drug_classes`
--
ALTER TABLE `drug_classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `drug_classes_product_categories_id_foreign` (`product_categories_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_categories_id_foreign` (`categories_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `drugs`
--
ALTER TABLE `drugs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;

--
-- AUTO_INCREMENT for table `drug_classes`
--
ALTER TABLE `drug_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `drugs`
--
ALTER TABLE `drugs`
  ADD CONSTRAINT `drugs_drug_classes_id_foreign` FOREIGN KEY (`drug_classes_id`) REFERENCES `drug_classes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `drug_classes`
--
ALTER TABLE `drug_classes`
  ADD CONSTRAINT `drug_classes_product_categories_id_foreign` FOREIGN KEY (`product_categories_id`) REFERENCES `product_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
