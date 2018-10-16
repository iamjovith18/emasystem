-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2018 at 12:58 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emasystem_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `id` int(10) UNSIGNED NOT NULL,
  `accessory_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `model_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `batch_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `min_qty` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_qty` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`id`, `accessory_name`, `category_id`, `brand_id`, `model_no`, `serial_no`, `batch_no`, `quantity`, `min_qty`, `order_qty`, `created_at`, `updated_at`) VALUES
(1, 'plantonix', 3, 4, 'fefe4334', '2005', 'test', '1', '1', 1, '2018-10-03 21:48:51', '2018-10-15 21:29:39'),
(2, 'plantonix', 3, 4, 'fefe', 'fefe', NULL, '1', '1', 1, '2018-10-11 22:33:15', '2018-10-15 21:51:34');

-- --------------------------------------------------------

--
-- Table structure for table `accessory__users`
--

CREATE TABLE `accessory__users` (
  `id` int(10) UNSIGNED NOT NULL,
  `accessory_id` int(11) NOT NULL,
  `username_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accessory__users`
--

INSERT INTO `accessory__users` (`id`, `accessory_id`, `username_id`, `created_at`, `updated_at`) VALUES
(1, 1, 13, '2018-10-15 03:06:33', '2018-10-15 03:06:33'),
(2, 1, 13, '2018-10-15 19:59:27', '2018-10-15 19:59:27'),
(3, 1, 13, '2018-10-15 20:03:50', '2018-10-15 20:03:50'),
(4, 1, 13, '2018-10-15 20:05:10', '2018-10-15 20:05:10'),
(5, 1, 13, '2018-10-15 20:07:03', '2018-10-15 20:07:03'),
(6, 1, 13, '2018-10-15 21:23:05', '2018-10-15 21:23:05'),
(7, 1, 22, '2018-10-15 21:24:38', '2018-10-15 21:24:38'),
(8, 2, 29, '2018-10-15 21:25:08', '2018-10-15 21:25:08'),
(9, 2, 29, '2018-10-15 21:25:08', '2018-10-15 21:25:08'),
(10, 2, 13, '2018-10-15 21:25:23', '2018-10-15 21:25:23'),
(11, 1, 13, '2018-10-15 21:29:39', '2018-10-15 21:29:39'),
(12, 2, 13, '2018-10-15 21:51:34', '2018-10-15 21:51:34');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand`, `created_at`, `updated_at`) VALUES
(1, 'Dell', '2018-09-26 23:40:31', '2018-09-26 23:40:31'),
(2, 'Asus', '2018-09-26 23:40:34', '2018-09-26 23:40:34'),
(3, 'Acer', '2018-09-26 23:40:36', '2018-09-26 23:40:36'),
(4, 'a4tech', '2018-09-26 23:40:39', '2018-09-26 23:40:39'),
(5, 'plantronics', '2018-09-26 23:40:41', '2018-09-26 23:40:41'),
(6, 'Samsung', '2018-09-26 23:40:50', '2018-09-26 23:40:50'),
(7, 'western digital', '2018-09-26 23:44:31', '2018-09-26 23:44:31'),
(8, 'seagate', '2018-09-26 23:44:38', '2018-09-26 23:44:38'),
(9, 'Genuis', '2018-10-09 18:55:19', '2018-10-09 18:55:19');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `type`, `created_at`, `updated_at`) VALUES
(2, 'Mouse', 'Accessory', '2018-09-26 23:41:48', '2018-09-26 23:41:48'),
(3, 'Headset', 'Accessory', '2018-09-26 23:42:00', '2018-09-26 23:42:00'),
(4, 'Keyboard', 'Accessory', '2018-09-26 23:42:08', '2018-09-26 23:42:08'),
(5, 'HDD', 'Component', '2018-09-26 23:42:35', '2018-09-26 23:42:35'),
(6, 'SSD', 'Component', '2018-09-26 23:42:49', '2018-09-26 23:42:49'),
(7, 'UPS(Uninterruptible Power Supply)', 'Component', '2018-10-15 22:14:29', '2018-10-16 01:56:58'),
(8, 'Monitor', 'Asset', '2018-10-15 22:20:06', '2018-10-15 22:20:06'),
(9, 'HDMI', 'Accessory', '2018-10-15 22:21:27', '2018-10-15 22:21:27'),
(10, 'VGA Cable', 'Accessory', '2018-10-15 22:21:54', '2018-10-15 22:21:54'),
(11, 'System Unit', 'Asset', '2018-10-15 22:22:24', '2018-10-15 22:22:24');

-- --------------------------------------------------------

--
-- Table structure for table `components`
--

CREATE TABLE `components` (
  `id` int(10) UNSIGNED NOT NULL,
  `component_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `available` int(11) DEFAULT NULL,
  `order_qty` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `components`
--

INSERT INTO `components` (`id`, `component_name`, `serial_no`, `category_id`, `brand_id`, `total`, `available`, `order_qty`, `created_at`, `updated_at`) VALUES
(1, 'seagate 250gb', 'serialupdated', 5, 8, 100, NULL, 63, '2018-09-26 23:46:22', '2018-10-15 21:23:55'),
(2, 'ssd 120', 'serialsamsung', 6, 6, 150, NULL, 101, '2018-10-03 00:55:18', '2018-10-15 21:45:29');

-- --------------------------------------------------------

--
-- Table structure for table `component__users`
--

CREATE TABLE `component__users` (
  `id` int(10) UNSIGNED NOT NULL,
  `component_id` int(11) NOT NULL,
  `username_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `component__users`
--

INSERT INTO `component__users` (`id`, `component_id`, `username_id`, `created_at`, `updated_at`) VALUES
(1, 1, 13, '2018-10-03 00:51:34', '2018-10-03 00:51:34'),
(2, 1, 13, '2018-10-03 00:51:45', '2018-10-03 00:51:45'),
(3, 1, 24, '2018-10-03 00:52:29', '2018-10-03 00:52:29'),
(4, 2, 18, '2018-10-03 00:55:33', '2018-10-03 00:55:33'),
(5, 1, 15, '2018-10-03 01:03:18', '2018-10-03 01:03:18'),
(6, 1, 14, '2018-10-03 01:17:41', '2018-10-03 01:17:41'),
(7, 1, 13, '2018-10-03 01:17:50', '2018-10-03 01:17:50'),
(8, 1, 46, '2018-10-04 02:48:53', '2018-10-04 02:48:53'),
(9, 1, 17, '2018-10-04 19:54:31', '2018-10-04 19:54:31'),
(10, 2, 31, '2018-10-09 18:51:56', '2018-10-09 18:51:56'),
(11, 2, 13, '2018-10-09 18:53:17', '2018-10-09 18:53:17'),
(12, 1, 13, '2018-10-12 00:30:37', '2018-10-12 00:30:37'),
(13, 1, 13, '2018-10-15 21:23:39', '2018-10-15 21:23:39'),
(14, 1, 13, '2018-10-15 21:23:55', '2018-10-15 21:23:55'),
(15, 2, 13, '2018-10-15 21:45:29', '2018-10-15 21:45:29');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_08_18_064024_create_usercreds_table', 1),
(4, '2018_09_12_045244_create_brands_table', 1),
(5, '2018_09_14_085152_create_categories_table', 1),
(6, '2018_09_17_071114_create_accessories_table', 1),
(7, '2018_09_20_100255_create_components_table', 1),
(8, '2018_09_27_065814_create_component_user_table', 1),
(9, '2018_10_03_082152_create_component__users_table', 2),
(10, '2018_10_15_104029_create_accessory__users_table', 3),
(13, '2018_10_16_064037_create_system__units_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `system__units`
--

CREATE TABLE `system__units` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asset_tag` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` int(11) NOT NULL DEFAULT '1',
  `order_qty` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `system__units`
--

INSERT INTO `system__units` (`id`, `brand_id`, `category_id`, `model`, `serial_no`, `asset_tag`, `total`, `order_qty`, `created_at`, `updated_at`) VALUES
(1, 1, 11, 'test ste', 'fefefef', NULL, 1, 0, '2018-10-16 02:13:26', '2018-10-16 02:13:26'),
(2, 1, 11, 'mode system unit', 'serial', 'asset', 1, 0, '2018-10-16 02:20:07', '2018-10-16 02:20:07');

-- --------------------------------------------------------

--
-- Table structure for table `usercreds`
--

CREATE TABLE `usercreds` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_add` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extension_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usercreds`
--

INSERT INTO `usercreds` (`id`, `fname`, `lname`, `job_title`, `email_add`, `username`, `password`, `department`, `batch`, `extension_no`, `status`, `created_at`, `updated_at`) VALUES
(13, 'John Michael', 'Araneta', 'Customer Care Specialist', 'Joe.Araneta@dreamscapenetworks.com', 'Joe.Araneta', 'cf;t=]${RP#9', 'Customer Care', 'CCS Batch 63', 'tel:+61290372826;ext=303', 'Active', '2018-09-10 23:38:22', '2018-10-12 02:51:38'),
(14, 'Linn Nill', 'Abayon', 'Customer Care Specialist', 'Xylar.Abayon@dreamscapenetworks.com', 'Xylar.Abayon', 'H-{KJgchty-w', 'Customer Care', 'CCS Batch 63', 'tel:+61290372826;ext=421', 'active', '2018-09-10 23:45:37', '2018-09-10 23:45:37'),
(15, 'Cretchelle', 'Ferrer', 'Customer Care Specialist', 'Cretchelle.Ferrer@dreamscapenetworks.com', 'Cretchelle.Ferrer', '$%jg*T:Uq{E@', 'Customer Care', 'CCS Batch 63', 'tel:+61290372826;ext=422', 'active', '2018-09-10 23:48:51', '2018-09-10 23:48:51'),
(16, 'Jane Hanna', 'Caballero', 'Customer Care Specialist', 'Freya.Caballero@dreamscapenetworks.com', 'Freya.Caballero', 'ak0-:j]fc6(U', 'Customer Care', 'CCS Batch 63', 'tel:+61290372826;ext=423', 'active', '2018-09-10 23:51:45', '2018-09-10 23:51:45'),
(17, 'Ella Sophiya', 'Cañaveral', 'Customer Care Specialist', 'Ella.Canaveral@dreamscapenetworks.com', 'Ella.Canaveral', 'B|x6M+t6]DV^', 'Customer Care', 'CCS Batch 63', 'tel:+61290372826;ext=424', 'active', '2018-09-10 23:53:13', '2018-09-10 23:53:13'),
(18, 'Daveson', 'Cuizon', 'Customer Care Specialist', 'Dave.Cuizon@dreamscapenetworks.com', 'Dave.Cuizon', ')si8+Nn)G&X_', 'Customer Care', 'CCS Batch 63', 'tel:+61290372826;ext=425', 'active', '2018-09-10 23:54:28', '2018-09-27 21:04:56'),
(19, 'Arielle Ariane', 'Nacar', 'Customer Care Specialist', 'Arielle.Nacar@dreamscapenetworks.com', 'Arielle.Nacar', 'u&DA#D}UFCfO', 'Customer Care', 'CCS Batch 63', 'tel:+61290372826;ext=426', 'active', '2018-09-10 23:56:09', '2018-09-17 19:07:29'),
(20, 'Gwyneth Claire', 'Felisilda', 'Content Writer', 'Gwen.felisilda@dreamscapenetworks.com', 'Gwen.felisilda', 'z%a>7Ro[M}Ot', 'Marketing', 'Content Writer', NULL, 'active', '2018-09-17 00:01:08', '2018-09-18 19:18:36'),
(21, 'Arrah Camillia', 'Manticajon', 'Content Writer', 'Arrah.Manticajon@dreamscapenetworks.com', 'Arrah.Manticajon', '/9QZ54#G(dcs', 'Marketing', 'Content Writer', NULL, 'active', '2018-09-17 00:05:45', '2018-09-18 19:18:03'),
(22, 'Carl Christian', 'Torres', 'Logo Designer', 'Carl.Torres@crazydomains.com', 'Carl.Torres', 'l!{P%-mLHi$;', 'Developer', 'Logo Designer', NULL, 'active', '2018-09-17 00:08:07', '2018-09-17 17:50:43'),
(23, 'Ricmer', 'Transmonte', 'Customer Care Specialist', 'Mic.Trasmonte@crazydomains.com', 'Mic.Trasmonte', '.]M+H6raYl+G', 'Customer Care', 'CCS Batch 64', 'tel:+61290372826;ext=435', 'active', '2018-09-17 00:10:15', '2018-09-20 21:50:43'),
(24, 'Karen Marie', 'Salazar', 'Customer Care Specialist', 'Karie.Salazar@crazydomains.com', 'Karie.Salazar', 'yQBTu4zH&C%h', 'Customer Care', 'CCS Batch 64', 'tel:+61290372826;ext=431', 'active', '2018-09-17 00:11:37', '2018-09-20 21:51:14'),
(25, 'Mara Trisha', 'Ramas', 'Customer Care Specialist', 'Trish.Ramas@crazydomains.com', 'Trish.Ramas', '/Y=SAV#EDGX4', 'Customer Care', 'CCS Batch 64', 'tel:+61290372826;ext=432', 'active', '2018-09-17 00:13:55', '2018-09-17 19:09:26'),
(26, 'Genesa', 'Milan', 'Customer Care Specialist', 'Nessa.Milan@crazydomains.com', 'Nessa.Milan', ')7iM:8b#%MD4', 'Customer Care', 'CCS Batch 64', 'tel:+61290372826;ext=430', 'active', '2018-09-17 00:15:31', '2018-09-20 21:52:07'),
(27, 'Yesah Ley', 'Jacon', 'Customer Care Specialist', 'Shang.Jacon@crazydomains.com', 'Shang.Jacon', 'K#2O2Y@sI0l8', 'Customer Care', 'CCS Batch 64', 'tel:+61290372826;ext=436', 'active', '2018-09-17 00:16:32', '2018-09-17 19:11:09'),
(28, 'Aaron Lex', 'Gamelo', 'Customer Care Specialist', 'Aaron.Gamelo@crazydomains.com', 'Aaron.Gamelo', '-+^BhisSS[VC', 'Customer Care', 'CCS Batch 64', 'tel:+61290372826;ext=428', 'active', '2018-09-17 00:20:19', '2018-09-17 19:05:33'),
(29, 'Danielle Faith', 'Fernan', 'Customer Care Specialist', 'Dane.Fernan@crazydomains.com', 'Dane.Fernan', 'DPa%UT!9R1D^', 'Customer Care', 'CCS Batch 64', 'tel:+61290372826;ext=429', 'active', '2018-09-17 00:21:53', '2018-09-17 19:08:09'),
(30, 'Niña Marielle', 'Castellano', 'Customer Care Specialist', 'Violet.Castellano@crazydomains.com', 'Violet.Castellano', 'rDniNc58>p=$', 'Customer Care', 'CCS Batch 64', 'tel:+61290372826;ext=433', 'active', '2018-09-17 00:26:43', '2018-09-20 21:52:44'),
(31, 'Reselle', 'Berdin', 'Customer Care Specialist', 'Sel.Berdin@crazydomains.com', 'Sel.Berdin', '+FeO;AH;eLzW', 'Customer Care', 'CCS Batch 64', 'tel:+61290372826;ext=434', 'active', '2018-09-17 00:28:50', '2018-09-17 19:10:13'),
(32, 'Zarah Faye', 'Ancajas', 'Customer Care Specialist', 'Zara.Ancajas@crazydomains.com', 'Zara.Ancajas', 'HSS!GM%TwO!2', 'Customer Care', 'CCS Batch 64', 'tel:+61290372826;ext=437', 'active', '2018-09-17 00:30:30', '2018-09-17 19:11:28'),
(33, 'Meriam', 'Bagalanon', 'Business Development Specialist', 'Meriam.Bagalanon@dreamscapenetworks.com', 'Meriam.Bagalanon', '5zj@l2v:[P!B', 'Sales', 'BDS Batch 28', 'tel:+61892618201;ext=201', 'active', '2018-09-27 20:57:27', '2018-10-02 02:51:43'),
(34, 'Jewel Jane', 'Garong', 'Business Development Specialist', 'Jewel.Garong@dreamscapenetworks.com', 'Jewel.Garong', 'bry.uC_6x41g', 'Sales', 'BDS Batch 28', 'tel:+61892618206;ext=206', 'active', '2018-09-27 20:59:06', '2018-10-02 02:55:16'),
(35, 'JereicaAiko', 'Espinosa', 'Business Development Specialist', 'Aiko.Espinosa@dreamscapenetworks.com', 'Aiko.Espinosa', 'N2Bf@yP!hlO*', 'Sales', 'BDS Batch 28', 'tel:+61892618209;ext=209', 'active', '2018-09-27 21:00:24', '2018-10-02 02:56:02'),
(36, 'MaryRosette', 'Dela Peña', 'Business Development Specialist', 'Ross.DelaPena@dreamscapenetworks.com', 'Ross.DelaPena', 'pw[I[lF?%?Jn', 'Sales', 'BDS Batch 28', 'tel:+61892618212;ext=212', 'active', '2018-09-27 21:01:57', '2018-10-02 02:56:32'),
(37, 'Eduardo Antonio', 'Cahoy', 'Business Development Specialist', 'Eddie.Cahoy@dreamscapenetworks.com', 'Eddie.Cahoy', 'pw[I[lF?%?Jn', 'Sales', 'BDS Batch 28', 'tel:+61892618218;ext=218', 'active', '2018-09-27 21:03:11', '2018-10-02 02:57:11'),
(38, 'Timmy Gie', 'Atillo', 'Business Development Specialist', 'Timmy.Atillo@crazydomains.com', 'Timmy.Atillo', 'Dream1234!', 'Sales', 'BDS Batch 29', 'tel:+61282796137;ext=137', 'active', '2018-10-01 23:52:47', '2018-10-02 00:22:52'),
(39, 'Gabe-Ann', 'Baynosa', 'Business Development Specialist', 'Gab.Baynosa@crazydomains.com', 'Gab.Baynosa', 'Dream1234!', 'Sales', 'BDS Batch 29', 'tel:+61282796141;ext=141', 'active', '2018-10-01 23:54:06', '2018-10-02 00:23:41'),
(40, 'Ivy', 'Billings', 'Business Development Specialist', 'Trixie.Billings@crazydomains.com', 'Trixie.Billings', 'Dream1234!', 'Sales', 'BDS Batch 29', 'tel:+61282796143;ext=143', 'active', '2018-10-01 23:55:51', '2018-10-03 18:50:48'),
(41, 'Mary Benneth', 'Casia', 'Business Development Specialist', 'Benneth.Casia@crazydomains.com', 'Benneth.Casia', 'Dream1234!', 'Sales', 'BDS Batch 29', 'tel:+61282796144;ext=144', 'active', '2018-10-01 23:57:07', '2018-10-02 00:24:41'),
(42, 'Pinky Marie', 'Fariola', 'Business Development Specialist', 'Pinky.Fariola@crazydomains.com', 'Pinky.Fariola', 'Dream1234!', 'Sales', 'BDS Batch 29', 'tel:+61282796146;ext=146', 'active', '2018-10-01 23:59:16', '2018-10-02 00:32:50'),
(43, 'Chubasco', 'Lucero', 'Business Development Specialist', 'Vash.Lucero@crazydomains.com', 'Vash.Lucero', 'Dream1234!', 'Sales', 'BDS Batch 29', 'tel:+61282796147;ext=147', 'active', '2018-10-02 00:00:49', '2018-10-03 02:14:10'),
(44, 'Khris', 'Malatumbaga', 'Business Development Specialist', 'Khris.Malatumbaga@crazydomains.com', 'Khris.Malatumbaga', 'Dream1234!', 'Sales', 'BDS Batch 29', 'tel:+61282796148;ext=148', 'active', '2018-10-02 00:02:02', '2018-10-02 00:27:50'),
(45, 'John Gervic', 'Gasataya', 'Business Development Specialist', 'Gerv.Gasataya@crazydomains.com', 'Gerv.Gasataya', 'Dream1234!', 'Sales', 'BDS Batch 29', 'tel:+61282796149;ext=149', 'active', '2018-10-02 00:02:58', '2018-10-02 00:28:05'),
(46, 'Chad', 'Ceniza', 'Email Support', 'Shaun.C@crazydomains.com', 'Shaun.C', 'Dream1234!', 'Customer Care', 'none', 'tel:+61290372826;ext=439', 'active', '2018-10-02 01:16:24', '2018-10-04 02:57:32'),
(47, 'Vita', 'Law', 'Customer Care Specialist', 'vita.law@dreamscapenetworks.com', 'vita.law', 'Bu10Z7Vhip', 'Customer Care', NULL, NULL, 'active', '2018-10-09 22:21:04', '2018-10-09 22:21:04'),
(48, 'Keith', 'Wong', 'Customer Care Specialist', 'keith.wong@dreamscapenetworks.com', 'keith.wong', 'GswkPjEe1w', 'Customer Care', NULL, NULL, 'active', '2018-10-09 22:23:07', '2018-10-09 22:26:17'),
(49, 'Ka Ying', 'Ng', 'Customer Care Specialist', 'natalie.ng@dreamscapenetworks.com', 'natalie.ng', 'xnVTmTDZr5', 'Customer Care', NULL, NULL, 'active', '2018-10-09 22:55:16', '2018-10-09 22:55:16'),
(50, 'Wing Sum', 'Chan', 'Customer Care Specialist', 'wingsum.chan@dreamscapenetworks.com', 'wingsum.chan', 'ujt0kI83rh', 'Customer Care', NULL, NULL, 'active', '2018-10-09 22:57:46', '2018-10-09 23:08:33'),
(51, 'Wing Hong Dicky', 'Ip', 'Customer Care Specialist', 'dicky.ip@dreamscapenetworks.com', 'dicky.ip', '63RDjJUh9E', 'Customer Care', NULL, NULL, 'active', '2018-10-09 23:00:19', '2018-10-09 23:09:45'),
(52, 'Steven', 'SL', 'Customer Care Specialist', 'steven.sl@dreamscapenetworks.com', 'steven.sl', 'XM02CJhgkF', 'Customer Care', NULL, NULL, 'active', '2018-10-09 23:01:23', '2018-10-09 23:12:50'),
(53, 'Edward', 'SL', 'Customer Care Specialist', 'edward.sl@dreamscapenetworks.com', 'edward.sl', 'Hac5ke7uZ7', 'Customer Care', NULL, NULL, 'active', '2018-10-09 23:02:25', '2018-10-09 23:15:01'),
(54, 'Alan', 'SL', 'Customer Care Specialist', 'alan.sl@dreamscapenetworks.com', 'alan.sl', 'gBvwg0qMRc', 'Customer Care', NULL, NULL, 'active', '2018-10-09 23:03:43', '2018-10-09 23:17:42'),
(55, 'Tony', 'SL', 'Customer Care Specialist', 'tony.sl@dreamscapenetworks.com', 'tony.sl', 'rqh0AgryRH', 'Customer Care', NULL, NULL, 'active', '2018-10-09 23:04:45', '2018-10-09 23:19:36'),
(56, 'Olga', 'Kuznetsova', 'UI/UX Designer', 'Olga.Kuznetsova@dreamscapenetworks.com', 'Olga.Kuznetsova', 'vVfBAY6hAf', 'Designer', NULL, NULL, 'active', '2018-10-10 02:29:39', '2018-10-10 02:29:39'),
(57, 'Monica', 'Johan', 'Social Media, Sales & Support Specialist', 'Monica.Johan@dreamscapenetworks.com', 'Monica.Johan', 'BWIGEpZ0F4', 'Marketing', NULL, 'tel:+61894220802;ext=802', 'active', '2018-10-10 21:32:08', '2018-10-10 21:32:08'),
(58, 'Norman Patrick', 'Degamo', 'Customer Care Specialist', 'Patrick.Degamo@dreamscapenetworks.com', 'Patrick.Degamo', '&6t&A!Dm-;l7', 'Customer Care', 'CCS Batch 65 - Vodien', 'tel:+61290372826;ext=441', 'active', '2018-10-14 18:45:23', '2018-10-14 20:26:45'),
(59, 'Mabell', 'Diana', 'Customer Care Specialist', 'Mabz.Diana@dreamscapenetworks.com', 'Mabz.Diana', 'iLA!IS;m9%%y', 'Customer Care', 'CCS Batch 65 - Vodien', 'tel:+61290372826;ext=442', 'active', '2018-10-14 18:47:43', '2018-10-14 20:27:05'),
(60, 'Emily', 'Eborlas', 'Customer Care Specialist', 'Emily.Eborlas@dreamscapenetworks.com', 'Emily.Eborlas', 'C!QvzofXei-G', 'Customer Care', 'CCS Batch 65 - Vodien', 'tel:+61290372826;ext=443', 'active', '2018-10-14 18:49:09', '2018-10-14 20:27:22'),
(61, 'Josephine', 'Figuracion', 'Customer Care Specialist', 'Say.Figuracion@dreamscapenetworks.com', 'Say.Figuracion', '&{.m@rCZTh:_', 'Customer Care', 'CCS Batch 65 - Vodien', 'tel:+61290372826;ext=444', 'active', '2018-10-14 18:52:04', '2018-10-14 20:27:43'),
(62, 'Christian', 'Galdo', 'Customer Care Specialist', 'Lance.Galdo@dreamscapenetworks.com', 'Lance.Galdo', 'K1BM*8W5=u(v', 'Customer Care', 'CCS Batch 65 - Vodien', 'tel:+61290372826;ext=445', 'active', '2018-10-14 18:53:35', '2018-10-14 20:28:32'),
(63, 'Marlon', 'Juaton', 'Customer Care Specialist', 'Marco.Juaton@dreamscapenetworks.com', 'Marco.Juaton', 'qC3hS*)/@v8Z', 'Customer Care', 'CCS Batch 65 - Vodien', 'tel:+61290372826;ext=446', 'active', '2018-10-14 18:54:58', '2018-10-14 20:28:48'),
(64, 'Isidro', 'Micua', 'Customer Care Specialist', 'Syd.Micua@dreamscapenetworks.com', 'Syd.Micua', '@QxQypgQdz*H', 'Customer Care', 'CCS Batch 65 - Vodien', 'tel:+61290372826;ext=447', 'active', '2018-10-14 18:57:13', '2018-10-14 20:29:41'),
(65, 'Zoldy', 'Sugarol', 'Customer Care Specialist', 'Zee.Sugarol@dreamscapenetworks.com', 'Zee.Sugarol', '2hs#XRB-@vi7', 'Customer Care', 'CCS Batch 65 - Vodien', 'tel:+61290372826;ext=448', 'active', '2018-10-14 19:00:22', '2018-10-14 20:30:08'),
(66, 'Alnie', 'Pardinan', 'Customer Care Specialist', 'Alnie.Pardinan@dreamscapenetworks.com', 'Alnie.Pardinan', '(xoEB0_K}(&K', 'Customer Care', 'CCS Batch 65 - Vodien', 'tel:+61290372826;ext=449', 'active', '2018-10-14 19:01:53', '2018-10-14 20:30:30'),
(67, 'Leslie Anne Maye', 'Zayas', 'Customer Care Specialist', 'Yanmei.Zayas@crazydomains.com', 'Yanmei.Zayas', 'qmTd8OL*I77{', 'Customer Care', 'CCS Batch 65 - Vodien', 'tel:+61290372826;ext=450', 'active', '2018-10-14 19:06:23', '2018-10-14 20:30:46'),
(68, 'VincentJoseph', 'Sabello', 'Corporate Account Manager', 'Vaughn.Sabello@crazydomains.com', 'Vaughn.Sabello', ')QfU@O4KrmZF', 'Reseller', NULL, 'tel:+61290372826;ext=451', 'active', '2018-10-15 23:13:11', '2018-10-15 23:21:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'administrator@crazydomains.com', '$2y$10$A8npQzOAwp60zOQjIUfYV.ixffAxSw6pPZ3QFBxuqgTjuBYEtnBEm', NULL, '2018-09-26 23:39:37', '2018-09-26 23:39:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accessory__users`
--
ALTER TABLE `accessory__users`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `components`
--
ALTER TABLE `components`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `component__users`
--
ALTER TABLE `component__users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `system__units`
--
ALTER TABLE `system__units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usercreds`
--
ALTER TABLE `usercreds`
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
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `accessory__users`
--
ALTER TABLE `accessory__users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `components`
--
ALTER TABLE `components`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `component__users`
--
ALTER TABLE `component__users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `system__units`
--
ALTER TABLE `system__units`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usercreds`
--
ALTER TABLE `usercreds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
