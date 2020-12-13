-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2020 at 12:37 PM
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
-- Database: `infosoft_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Baby Toy', 'Baby Toy', 1, '2020-10-25 05:12:28', '2020-10-28 10:34:25'),
(2, 'Medicine', 'Medicine', 1, '2020-10-25 05:12:43', '2020-10-28 10:33:34'),
(3, 'ShowPiece', 'ShowPiece', 1, '2020-10-25 05:12:55', '2020-10-25 05:12:55'),
(4, 'Honey', 'Honey', 1, '2020-10-28 10:34:51', '2020-10-28 10:34:51');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `pass`, `phone`, `address_1`, `address_2`, `postal`, `province`, `country`, `created_at`, `updated_at`) VALUES
(1, 'Md Al Mamun', 'Sohag', 'sohagjone@gmail.com', '$2y$10$QA.S6fZL.8tu/Pr6Ap9TpOp2TwpECS7lO3KfEW77kJNceK4uab2q6', '01911387550', 'Uttara, House Building', 'Nikunjo', '7841', 'Dhaka', 'Bangladesh', '2020-10-29 03:25:35', '2020-10-29 03:25:35'),
(2, 'Demo', 'Update', 'email@email.com', '$2y$10$xyJjGkW/rFDdeTzSVwio0eL6ZaxGUiuxZ3mk8uRM6ar6J8s/nUeN.', '012254554', 'Demo', 'Demo', '7845', 'Dhaka', 'Bangladesh', '2020-10-29 03:56:07', '2020-10-29 03:56:07'),
(3, 'Md Al Mamun', 'Sohag', 'sohagone@gmail.com', '$2y$10$F2dh8qEqc.AJQv9nB6vyj.E9QkxXMxg5/RT1jsjgL.g.2jwAaqubu', '41541454', 'DEMO', 'Demo', '7451', 'Dhaka', 'Bangldesh', '2020-10-29 04:06:16', '2020-10-29 04:06:16'),
(4, 'Demo', 'Test', 'demo@email.com', '$2y$10$hodA3atvPUq7T/B.A0RHLuIUJi6U73eJXQAoCbBL7y/.j9YmW7i4u', '123456', 'DEMO', 'Demo', '7451', 'Dhaka', 'Bangladesh', '2020-10-29 05:18:05', '2020-10-29 05:18:05'),
(5, 'Demo', 'Test', 'test@gmail.com', '$2y$10$KupEU8CM3PEk6eZ9ge5kPuzTg797tCrBTU/g6crNeVbzLpMVM3oNy', '01911387550', 'demo', 'Demo', '7451', 'Dhaka', 'Bangladesh', '2020-10-29 08:58:17', '2020-10-29 08:58:17');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(33, '2020_10_20_111423_create_customers_table', 3),
(35, '2014_10_12_000000_create_users_table', 4),
(36, '2014_10_12_100000_create_password_resets_table', 4),
(37, '2020_10_05_093515_create_categories_table', 4),
(38, '2020_10_07_041322_create_products_table', 4),
(39, '2020_10_20_114141_create_customers_table', 4),
(40, '2020_10_25_135919_create_shippings_table', 5),
(41, '2020_10_27_092147_create_orders_table', 6),
(42, '2020_10_27_092317_create_order_details_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `total_price` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `payment_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `shipping_id`, `total_price`, `payment_type`, `order_status`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 5, 5, '800', 'Cash', 'pending', 'pending', '2020-10-29 08:58:29', '2020-10-29 08:58:29'),
(2, 5, 5, '800', 'Cash', 'pending', 'pending', '2020-10-29 08:59:05', '2020-10-29 08:59:05'),
(3, 5, 5, '800', 'Cash', 'pending', 'pending', '2020-10-29 09:01:11', '2020-10-29 09:01:11'),
(4, 5, 5, '800', 'Cash', 'pending', 'pending', '2020-10-29 09:01:32', '2020-10-29 09:01:32'),
(5, 5, 5, '800', 'Cash', 'pending', 'pending', '2020-10-29 09:02:26', '2020-10-29 09:02:26'),
(6, 5, 5, '800', 'Cash', 'pending', 'pending', '2020-10-29 09:02:45', '2020-10-29 09:02:45'),
(7, 5, 5, '800', 'Cash', 'pending', 'pending', '2020-10-29 09:04:45', '2020-10-29 09:04:45'),
(8, 5, 5, '800', 'Cash', 'pending', 'pending', '2020-10-29 09:15:47', '2020-10-29 09:15:47'),
(9, 5, 5, '800', 'Cash', 'pending', 'pending', '2020-10-29 09:16:28', '2020-10-29 09:16:28'),
(10, 4, 6, '800', 'Cash', 'pending', 'pending', '2020-10-29 09:20:01', '2020-10-29 09:20:01'),
(11, 4, 7, '300', 'Cash', 'pending', 'pending', '2020-10-29 09:49:10', '2020-10-29 09:49:10');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_image`, `product_price`, `product_quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 18, 'Chatter Telephone', '18.png', 800, 1, '2020-10-29 08:58:29', '2020-10-29 08:58:29'),
(2, 11, 24, 'Bee Honey', '24.jpg', 300, 1, '2020-10-29 09:49:10', '2020-10-29 09:49:10');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('sohagjone@gmail.com', '$2y$10$TEf100yxbSP/V1ev4HzSuepeW3z1z/kYLVdm82mh.OVEj712YS8yO', '2020-10-27 11:03:23');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `category_id`, `product_short_description`, `product_long_description`, `product_price`, `product_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(8, 'Rocker Dolphy Red', '1', 'Rocker Dolphy Red\r\nItem code: 820660\r\nBrand: Playtime Toys\r\nType: Seesaw\r\nDimension (L x W x H): 750X310X460 mm\r\nProcess: Blow  Molding\r\nMaterial: HDPE\r\nToxicity: Non-Toxic\r\nGrade: Food grade\r\nDesign: Ergonomically design without sharp Edge\r\nSafety: Child safe\r\nPigment: Child safe\r\nAge group: 2-5 years\r\nDurable plastic\r\nExcellent quality\r\nColor: Red (As given picture).', '<span style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); font-size: 13.3333px; text-align: justify; font-family: verdana, geneva;\">Rocker Dolphy&nbsp;Red</span><br style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); font-family: verdana, geneva, sans-serif; font-size: 13.3333px; text-align: justify;\"><span style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); font-size: 13.3333px; text-align: justify; font-family: verdana, geneva;\">Item code: 820660</span><br style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); font-family: verdana, geneva, sans-serif; font-size: 13.3333px; text-align: justify;\"><span style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); font-size: 13.3333px; text-align: justify; font-family: verdana, geneva;\">Brand: Playtime Toys</span><br style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); font-family: verdana, geneva, sans-serif; font-size: 13.3333px; text-align: justify;\"><span style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); font-size: 13.3333px; text-align: justify; font-family: verdana, geneva;\">Type: Seesaw</span><br style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); font-family: verdana, geneva, sans-serif; font-size: 13.3333px; text-align: justify;\"><span style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); font-size: 13.3333px; text-align: justify; font-family: verdana, geneva;\">Dimension (L x W x H): 750X310X460 mm</span><br style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); font-family: verdana, geneva, sans-serif; font-size: 13.3333px; text-align: justify;\"><span style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); font-size: 13.3333px; text-align: justify; font-family: verdana, geneva;\">Process: Blow&nbsp; Molding</span><br style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); font-family: verdana, geneva, sans-serif; font-size: 13.3333px; text-align: justify;\"><span style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); font-size: 13.3333px; text-align: justify; font-family: verdana, geneva;\">Material: HDPE</span><br style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); font-family: verdana, geneva, sans-serif; font-size: 13.3333px; text-align: justify;\"><span style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); font-size: 13.3333px; text-align: justify; font-family: verdana, geneva;\">Toxicity: Non-Toxic</span><br style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); font-family: verdana, geneva, sans-serif; font-size: 13.3333px; text-align: justify;\"><span style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); font-size: 13.3333px; text-align: justify; font-family: verdana, geneva;\">Grade: Food grade</span><br style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); font-family: verdana, geneva, sans-serif; font-size: 13.3333px; text-align: justify;\"><span style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); font-size: 13.3333px; text-align: justify; font-family: verdana, geneva;\">Design: Ergonomically design without sharp Edge</span><br style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); font-family: verdana, geneva, sans-serif; font-size: 13.3333px; text-align: justify;\"><span style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); font-size: 13.3333px; text-align: justify; font-family: verdana, geneva;\">Safety: Child safe</span><br style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); font-family: verdana, geneva, sans-serif; font-size: 13.3333px; text-align: justify;\"><span style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); font-size: 13.3333px; text-align: justify; font-family: verdana, geneva;\">Pigment: Child safe</span><br style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); font-family: verdana, geneva, sans-serif; font-size: 13.3333px; text-align: justify;\"><span style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); font-size: 13.3333px; text-align: justify; font-family: verdana, geneva;\">Age group: 2-5 years</span><br style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); font-family: verdana, geneva, sans-serif; font-size: 13.3333px; text-align: justify;\"><span style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); font-size: 13.3333px; text-align: justify; font-family: verdana, geneva;\">Durable plastic</span><br style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); font-family: verdana, geneva, sans-serif; font-size: 13.3333px; text-align: justify;\"><span style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); font-size: 13.3333px; text-align: justify; font-family: verdana, geneva;\">Excellent quality</span><br style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); font-family: verdana, geneva, sans-serif; font-size: 13.3333px; text-align: justify;\"><span style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); font-size: 13.3333px; text-align: justify; font-family: verdana, geneva;\">Color: Red (As given picture).</span>', 1050, '8.jpg', 1, '2020-10-25 05:44:09', '2020-10-28 06:31:17'),
(9, 'Ashtray,Mobile and iPad Stand', '3', 'Size:18*14*9cm', '<span style=\"color: rgb(102, 102, 102); font-family: &quot;Work Sans&quot;, Arial, sans-serif; font-size: 14px;\">Size:18*14*9cm</span>', 250, '9.png', 1, '2020-10-25 10:10:14', NULL),
(10, 'Zozia Silver', '2', 'Each tablet contains: Vitamin A 3500 IU, Vitamin C 60 mg, Vitamin D 400 IU, Vitamin E 45 IU, Vitamin K 10 mcg, Thiamin 1.5 mg, Riboflavin 1.7 mg, Niacin 20 mg, Vitamin B6 3 mg, Folic acid 400 mcg, Vitamin B12 25 mcg, Biotin 30 mcg, Pantothenic acid 10 mg, Calcium 200 mg, Phosphorous 48 mg, Iodine 150 mcg, Magnesium 100 mg, Zinc 15 mg, Selenium 20 mcg, Copper 2 mg, Manganese 2 mg, Chromium 150 mcg, Molybdenum 75 mcg, Chloride 72 mg, Potassium 80 mg, Boron 150 mcg, Nickel 5 mcg, Silicon 2 mg, Vanadium 10 mcg, Lutein 250 mcg, Lycopene 300 mcg.', '<span style=\"font-weight: 600; color: rgb(0, 100, 0); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; background-color: rgb(245, 245, 245);\">Each tablet contains</span><span style=\"color: rgb(40, 56, 72); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; background-color: rgb(245, 245, 245);\">: Vitamin A 3500 IU, Vitamin C 60 mg, Vitamin D 400 IU, Vitamin E 45 IU, Vitamin K 10 mcg, Thiamin 1.5 mg, Riboflavin 1.7 mg, Niacin 20 mg, Vitamin B6 3 mg, Folic acid 400 mcg, Vitamin B12 25 mcg, Biotin 30 mcg, Pantothenic acid 10 mg, Calcium 200 mg, Phosphorous 48 mg, Iodine 150 mcg, Magnesium 100 mg, Zinc 15 mg, Selenium 20 mcg, Copper 2 mg, Manganese 2 mg, Chromium 150 mcg, Molybdenum 75 mcg, Chloride 72 mg, Potassium 80 mg, Boron 150 mcg, Nickel 5 mcg, Silicon 2 mg, Vanadium 10 mcg, Lutein 250 mcg, Lycopene 300 mcg.</span>', 50, '10.png', 0, '2020-10-25 10:40:05', '2020-10-25 11:10:39'),
(11, 'Lorix Plus', '2', 'This lotion is indicated for the treatment of scabies and pruritus.', '<span style=\"font-weight: 600; color: rgb(0, 100, 0); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; background-color: rgb(245, 245, 245);\">Permethrin</span><span style=\"color: rgb(40, 56, 72); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; background-color: rgb(245, 245, 245);\">&nbsp;is a pyrethroid pediculocide and scabicide. It causes paralysis and death of the pest by inhibiting sodium ion influx through nerve cell membrane channels delaying repolarisation.</span>', 100, '11.jpg', 1, '2020-10-25 10:43:20', NULL),
(12, 'Key Ring, Watch, Mobile, Glass Frame And Pen Organizer', '3', 'Key ring, Watch, Mobile, Glass frame And Pen Organizer\r\nProduct Type: Organizer\r\nDimension (L X W X H): (9.1 X 8 X 7.5) inch\r\nMade by Wood\r\nColor: As given picture.', '<span style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); text-align: justify; font-size: 10pt; font-family: verdana, geneva;\">Key ring, Watch, Mobile, Glass frame And Pen Organizer<br style=\"margin: 0px; outline: none; padding: 0px;\">Product Type: Organizer<br style=\"margin: 0px; outline: none; padding: 0px;\">Dimension (L X W X H): (9.1 X 8 X 7.5) inch<br style=\"margin: 0px; outline: none; padding: 0px;\">Made by Wood</span><br style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 12px; text-align: justify;\"><span style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); text-align: justify; font-size: 10pt; font-family: verdana, geneva;\">Color: As given picture.</span>', 1200, '12.jpg', 1, '2020-10-25 10:46:48', NULL),
(13, 'Wooden Candle Stand', '3', 'Wooden Candle Stand\r\nProduct Type: Showpiece\r\nDimension (L X W X H): (2.5 X 2.8 X 4.9) inch\r\nMade by Wood\r\nColor: As given picture.', '<span style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); text-align: justify; font-size: 10pt; font-family: verdana, geneva;\">Wooden Candle Stand<br style=\"margin: 0px; outline: none; padding: 0px;\">Product Type: Showpiece<br style=\"margin: 0px; outline: none; padding: 0px;\">Dimension (L X W X H): (2.5 X 2.8 X 4.9) inch<br style=\"margin: 0px; outline: none; padding: 0px;\">Made by Wood</span><br style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 12px; text-align: justify;\"><span style=\"margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); text-align: justify; font-size: 10pt; font-family: verdana, geneva;\">Color: As given picture.</span>', 350, '13.jpg', 1, '2020-10-25 10:49:32', NULL),
(14, 'Giant Rock-a-Stack', '1', 'Giant Rock-a-Stack® takes classic stacking play to new heights. Your baby can grasp and shake the six colorful rings, then stack \'em up high on the wibbly-wobbly base.', '<span style=\"color: rgb(0, 0, 0); font-family: Maax, Verdana, sans-serif; font-size: 18px;\">Giant Rock-a-Stack® takes classic stacking play to new heights. Your baby can grasp and shake the six colorful rings, then stack \'em up high on the wibbly-wobbly base.</span>', 1600, '14.png', 1, '2020-10-25 10:52:11', NULL),
(15, 'Light-up Learning Vacuum', '1', 'ots of learning and early role play is in store for baby as they push this toy vacuum along to activate lights, songs, sounds, and phrases', '<span style=\"color: rgb(0, 0, 0); font-family: Maax, Verdana, sans-serif; font-size: 18px;\">ots of learning and early role play is in store for baby as they push this toy vacuum along to activate lights, songs, sounds, and phrases</span>', 1600, '15.png', 1, '2020-10-25 10:53:22', NULL),
(16, 'Kick & Play Piano', '1', 'Your mini-Mozart can kick up loads of musical learning fun with the Fisher-Price® Smart Stages® Kick & Play Piano.', '<span style=\"color: rgb(0, 0, 0); font-family: Maax, Verdana, sans-serif; font-size: 18px;\">Your mini-Mozart can kick up loads of musical learning fun with the Fisher-Price® Smart Stages® Kick &amp; Play Piano.</span>', 2000, '16.png', 1, '2020-10-25 10:55:39', NULL),
(17, 'Learn With Puppy Walker', '1', 'Let\'s go for a stroll, baby! Puppy is the perfect pal for your growing baby, offering exciting hands-on activities for little sitters and tons of encouraging phrases and support for those first little steps.', '<span style=\"color: rgb(0, 0, 0); font-family: Maax, Verdana, sans-serif; font-size: 18px;\">Let\'s go for a stroll, baby! Puppy is the perfect pal for your growing baby, offering exciting hands-on activities for little sitters and tons of encouraging phrases and support for those first little steps.&nbsp;</span>', 2500, '17.png', 1, '2020-10-25 11:01:23', NULL),
(18, 'Chatter Telephone', '1', 'With its friendly face, spinning dial, fun ringing-phone sounds, and eyes that move up and down as you pull it along, the Fisher-Price® Chatter Telephone® helps get your baby chatting—and strolling—like a pro!', '<span style=\"color: rgb(0, 0, 0); font-family: Maax, Verdana, sans-serif; font-size: 18px; background-color: rgb(248, 246, 245);\">With its friendly face, spinning dial, fun ringing-phone sounds, and eyes that move up and down as you pull it along, the Fisher-Price® Chatter Telephone® helps get your baby chatting—and strolling—like a pro!</span>', 800, '18.png', 1, '2020-10-25 11:02:53', NULL),
(19, 'Savlon', '2', 'Cetrimide & Chlorhexidine Gluconate is indicated in disinfection, cleansing and irrigating the skin or dirty wounds', '<span style=\"color: rgb(40, 56, 72); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; background-color: rgb(245, 245, 245);\">Cetrimide &amp; Chlorhexidine Gluconate is indicated in disinfection, cleansing and irrigating the skin or dirty wounds</span>', 402, '19.jpg', 1, '2020-10-25 11:05:57', NULL),
(20, 'Detolac', '2', 'Ketorolac Tromethamine is indicated for the short-term management of moderate to severe acute post-operative pain.', '<span style=\"color: rgb(40, 56, 72); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; background-color: rgb(245, 245, 245);\">Ketorolac Tromethamine is indicated for the short-term management of moderate to severe acute post-operative pain.</span>', 20, '20.jpg', 1, '2020-10-25 11:07:25', NULL),
(24, 'Bee Honey', '4', 'There’s only one thing you’ll find in a bottle of Forever Bee Honey® and that’s pure mountain-harvested honey. Mountain bees may take a little longer to make their honey and like a fine wine, the added time lends our honey a more rich and refined flavor. It’s smooth, dark and delicious.', '<span style=\"color: rgb(0, 0, 0); font-family: helvetica-light; letter-spacing: 1px;\">There’s only one thing you’ll find in a bottle of Forever Bee Honey® and that’s pure mountain-harvested honey. Mountain bees may take a little longer to make their honey and like a fine wine, the added time lends our honey a more rich and refined flavor. It’s smooth, dark and delicious.</span>', 300, '24.jpg', 1, '2020-10-28 10:38:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `first_name`, `last_name`, `email`, `phone`, `address_1`, `address_2`, `postal`, `province`, `country`, `created_at`, `updated_at`) VALUES
(1, 'Demo', 'Test', 'demo@email.com', '123456', 'DEMO', 'Demo', '7451', 'Dhaka', 'Bangladesh', '2020-10-29 08:10:15', '2020-10-29 08:10:15'),
(2, 'Demo', 'Test', 'demo@email.com', '123456', 'DEMO', 'Demo', '7451', 'Dhaka', 'Bangladesh', '2020-10-29 08:10:34', '2020-10-29 08:10:34'),
(3, 'Demo', 'Test', 'demo@email.com', '123456', 'DEMO', 'Demo', '7451', 'Dhaka', 'Bangladesh', '2020-10-29 08:24:03', '2020-10-29 08:24:03'),
(4, 'Demo', 'Test', 'demo@email.com', '123456', 'DEMO', 'Demo', '7451', 'Dhaka', 'Bangladesh', '2020-10-29 08:49:21', '2020-10-29 08:49:21'),
(5, 'Demo', 'Test', 'test@gmail.com', '01911387550', 'demo', 'Demo', '7451', 'Dhaka', 'Bangladesh', '2020-10-29 08:58:22', '2020-10-29 08:58:22'),
(6, 'Demo', 'Test', 'demo@email.com', '123456', 'DEMO', 'Demo', '7451', 'Dhaka', 'Bangladesh', '2020-10-29 09:19:58', '2020-10-29 09:19:58'),
(7, 'Demo', 'Test', 'demo@email.com', '123456', 'DEMO', 'Demo', '7451', 'Dhaka', 'Bangladesh', '2020-10-29 09:49:09', '2020-10-29 09:49:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sohag', 'sohagjone@gmail.com', NULL, '$2y$10$Szr.sxnmbeyyg0eQpYY6oebBwAtijfKFYeIeRqUVJha3PnetG5CL2', NULL, '2020-10-25 05:12:13', '2020-10-25 05:12:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
