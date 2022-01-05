-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2021 at 02:20 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feather`
--

-- --------------------------------------------------------

--
-- Table structure for table `address_books`
--

CREATE TABLE `address_books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `address_books`
--

INSERT INTO `address_books` (`id`, `user_id`, `name`, `mobile_number`, `province`, `city`, `address`, `created_at`, `updated_at`) VALUES
(1, 2, 'Kamran Abrar', '', 'Punjab', 'Lahore', 'K1 Valencia Town Lahore', '2021-12-29 06:30:17', '2021-12-29 06:30:17'),
(2, 3, 'Asad Ali', '', 'Punjab', 'Lahore', 'Flat 7 118 Blackhorse Grave London', '2021-12-29 06:30:17', '2021-12-29 06:30:17'),
(3, 4, 'Uzma Amjad', '', 'Punjab', 'Lahore', 'Flat 7 118 Blackhorse Grave London', '2021-12-29 06:30:17', '2021-12-29 06:30:17'),
(4, 5, 'Waqar Saleem Mughal', '', 'Punjab', 'Lahore', 'Flat 7 118 Blackhorse Grave London', '2021-12-29 06:30:17', '2021-12-29 06:30:17');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `published` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'true',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner_image`, `published`, `created_at`, `updated_at`) VALUES
(1, 'banners/default.jpg', 'true', '2021-12-29 06:30:20', '2021-12-29 06:30:20'),
(2, 'banners/default1.jpg', 'true', '2021-12-29 06:30:20', '2021-12-29 06:30:20'),
(3, 'banners/default2.jpg', 'true', '2021-12-29 06:30:20', '2021-12-29 06:30:20'),
(4, 'banners/default3.jpg', 'true', '2021-12-29 06:30:20', '2021-12-29 06:30:20');

-- --------------------------------------------------------

--
-- Table structure for table `birds`
--

CREATE TABLE `birds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `store_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bird_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `bird_price` int(11) NOT NULL DEFAULT 0,
  `bird_price_currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '$',
  `average_rating` double(8,2) NOT NULL DEFAULT 0.00,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `breed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `hybrid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `clean_or_featheres_legs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `leg_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `top_knot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `muffs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `beared` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `no_of_toes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `skin_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comb_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `lobes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `purpose` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `broody` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `weekly_production` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `egg_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `egg_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `laying_maturity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `processing_age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `hardness` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `forager` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `personality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `livestock_conservency_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `apa_class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `delivery_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `delivery_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'home_delivery',
  `delivery_days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `delivery_charges` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `delivery_charges_currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '$',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `birds`
--

INSERT INTO `birds` (`id`, `category_id`, `store_id`, `bird_name`, `bird_price`, `bird_price_currency`, `average_rating`, `description`, `quantity`, `sku`, `tags`, `breed`, `hybrid`, `clean_or_featheres_legs`, `leg_color`, `top_knot`, `muffs`, `beared`, `no_of_toes`, `skin_color`, `comb_type`, `lobes`, `purpose`, `broody`, `weekly_production`, `egg_color`, `egg_size`, `laying_maturity`, `processing_age`, `hardness`, `forager`, `personality`, `livestock_conservency_status`, `apa_class`, `delivery_address`, `delivery_type`, `delivery_days`, `delivery_charges`, `delivery_charges_currency`, `created_at`, `updated_at`) VALUES
(1, 1, 6, 'Alaska', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(2, 1, 7, 'Blanco', 80, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(3, 1, 6, 'Charmin', 120, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(4, 1, 6, 'Cool Whip', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(5, 1, 6, 'Morticia', 98, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(6, 1, 6, 'Cocoa', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(7, 2, 6, 'Alaska', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(8, 2, 7, 'Blanco', 80, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(9, 2, 6, 'Charmin', 120, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(10, 2, 6, 'Cool Whip', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(11, 2, 6, 'Morticia', 98, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(12, 2, 6, 'Cocoa', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(13, 3, 6, 'Alaska', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(14, 3, 7, 'Blanco', 80, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(15, 3, 6, 'Charmin', 120, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(16, 3, 6, 'Cool Whip', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(17, 3, 6, 'Morticia', 98, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(18, 3, 6, 'Cocoa', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(19, 4, 6, 'Alaska', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(20, 4, 7, 'Blanco', 80, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(21, 4, 6, 'Charmin', 120, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(22, 4, 6, 'Cool Whip', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(23, 4, 6, 'Morticia', 98, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(24, 4, 6, 'Cocoa', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(25, 5, 6, 'Alaska', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(26, 5, 7, 'Blanco', 80, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(27, 5, 6, 'Charmin', 120, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(28, 5, 6, 'Cool Whip', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(29, 5, 6, 'Morticia', 98, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(30, 5, 6, 'Cocoa', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(31, 6, 6, 'Alaska', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(32, 6, 7, 'Blanco', 80, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(33, 6, 6, 'Charmin', 120, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(34, 6, 6, 'Cool Whip', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(35, 6, 6, 'Morticia', 98, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(36, 6, 6, 'Cocoa', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(37, 1, 7, 'Alaska', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(38, 1, 7, 'Blanco', 80, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(39, 1, 7, 'Charmin', 120, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(40, 1, 7, 'Cool Whip', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(41, 1, 7, 'Morticia', 98, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(42, 1, 7, 'Cocoa', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(43, 2, 7, 'Alaska', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(44, 2, 7, 'Blanco', 80, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(45, 2, 7, 'Charmin', 120, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(46, 2, 7, 'Cool Whip', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(47, 2, 7, 'Morticia', 98, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(48, 2, 7, 'Cocoa', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(49, 3, 7, 'Alaska', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(50, 3, 7, 'Blanco', 80, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(51, 3, 7, 'Charmin', 120, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(52, 3, 7, 'Cool Whip', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(53, 3, 7, 'Morticia', 98, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(54, 3, 7, 'Cocoa', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(55, 4, 7, 'Alaska', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(56, 4, 7, 'Blanco', 80, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(57, 4, 7, 'Charmin', 120, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(58, 4, 7, 'Cool Whip', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(59, 4, 7, 'Morticia', 98, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(60, 4, 7, 'Cocoa', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(61, 5, 7, 'Alaska', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(62, 5, 7, 'Blanco', 80, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(63, 5, 7, 'Charmin', 120, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(64, 5, 7, 'Cool Whip', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(65, 5, 7, 'Morticia', 98, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(66, 5, 7, 'Cocoa', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(67, 6, 7, 'Alaska', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(68, 6, 7, 'Blanco', 80, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(69, 6, 7, 'Charmin', 120, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(70, 6, 7, 'Cool Whip', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(71, 6, 7, 'Morticia', 98, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(72, 6, 7, 'Cocoa', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(73, 1, 8, 'Alaska', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(74, 1, 8, 'Blanco', 80, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(75, 1, 8, 'Charmin', 120, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(76, 1, 8, 'Cool Whip', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(77, 1, 8, 'Morticia', 98, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(78, 1, 8, 'Cocoa', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(79, 2, 8, 'Alaska', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(80, 2, 8, 'Blanco', 80, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(81, 2, 8, 'Charmin', 120, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(82, 2, 8, 'Cool Whip', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(83, 2, 8, 'Morticia', 98, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(84, 2, 8, 'Cocoa', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19');
INSERT INTO `birds` (`id`, `category_id`, `store_id`, `bird_name`, `bird_price`, `bird_price_currency`, `average_rating`, `description`, `quantity`, `sku`, `tags`, `breed`, `hybrid`, `clean_or_featheres_legs`, `leg_color`, `top_knot`, `muffs`, `beared`, `no_of_toes`, `skin_color`, `comb_type`, `lobes`, `purpose`, `broody`, `weekly_production`, `egg_color`, `egg_size`, `laying_maturity`, `processing_age`, `hardness`, `forager`, `personality`, `livestock_conservency_status`, `apa_class`, `delivery_address`, `delivery_type`, `delivery_days`, `delivery_charges`, `delivery_charges_currency`, `created_at`, `updated_at`) VALUES
(85, 3, 8, 'Alaska', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(86, 3, 8, 'Blanco', 80, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(87, 3, 8, 'Charmin', 120, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(88, 3, 8, 'Cool Whip', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(89, 3, 8, 'Morticia', 98, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(90, 3, 8, 'Cocoa', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(91, 4, 8, 'Alaska', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(92, 4, 8, 'Blanco', 80, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(93, 4, 8, 'Charmin', 120, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(94, 4, 8, 'Cool Whip', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(95, 4, 8, 'Morticia', 98, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(96, 4, 8, 'Cocoa', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(97, 5, 8, 'Alaska', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(98, 5, 8, 'Blanco', 80, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(99, 5, 8, 'Charmin', 120, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(100, 5, 8, 'Cool Whip', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(101, 5, 8, 'Morticia', 98, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:19', '2021-12-29 06:30:19'),
(102, 5, 8, 'Cocoa', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:20', '2021-12-29 06:30:20'),
(103, 6, 8, 'Alaska', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:20', '2021-12-29 06:30:20'),
(104, 6, 8, 'Blanco', 80, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:20', '2021-12-29 06:30:20'),
(105, 6, 8, 'Charmin', 120, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:20', '2021-12-29 06:30:20'),
(106, 6, 8, 'Cool Whip', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:20', '2021-12-29 06:30:20'),
(107, 6, 8, 'Morticia', 98, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:20', '2021-12-29 06:30:20'),
(108, 6, 8, 'Cocoa', 100, '$', 5.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 100, 'alaska-chicken', 'chicken, alaska, bird', 'Alaska', 'No', 'Clean', 'Yellow', 'Some', 'No', 'No', '4', 'Yellow', 'Single', 'White', 'Eggs', 'No', '3-5 Eggs', 'White', 'M/L', '22-24 weeks', '15-18 weeks', 'Hardy in all Climates', 'Yes', 'Friendly/Active', 'N/A', 'Not Recognized', 'Howard Street Oswego Norway, NY 13126 USA', 'Home Delivery', '5-8 Days', 'Free', '$', '2021-12-29 06:30:20', '2021-12-29 06:30:20');

-- --------------------------------------------------------

--
-- Table structure for table `bird_images`
--

CREATE TABLE `bird_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bird_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bird_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bird_inventories`
--

CREATE TABLE `bird_inventories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `inventory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bird_inventory_data`
--

CREATE TABLE `bird_inventory_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bird_id` bigint(20) UNSIGNED DEFAULT NULL,
  `inventory_id` bigint(20) UNSIGNED DEFAULT NULL,
  `inventory_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `inventory_data` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_image`, `created_at`, `updated_at`) VALUES
(1, 'Australorp', 'categories/australorps.png', '2021-12-29 06:30:17', '2021-12-29 06:30:17'),
(2, 'Barnvelder', 'categories/barnevelder.png', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(3, 'Bielefelder', 'categories/bielefelder.png', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(4, 'Red Star', 'categories/breed-star-red.png', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(5, 'Brahma', 'categories/breed-brahma.png', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(6, 'Chantecler', 'categories/breed-chantecler.png', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(7, 'Delaware', 'categories/breed-delaware.png', '2021-12-29 06:30:18', '2021-12-29 06:30:18'),
(8, 'Maran', 'categories/breed-maran.png', '2021-12-29 06:30:18', '2021-12-29 06:30:18');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_options`
--

CREATE TABLE `delivery_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_id` bigint(20) UNSIGNED DEFAULT NULL,
  `delivery_fee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `delivery_fee_currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `delivery_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `estimated_arrival_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delivery_options`
--

INSERT INTO `delivery_options` (`id`, `store_id`, `delivery_fee`, `delivery_fee_currency`, `delivery_type`, `estimated_arrival_time`, `created_at`, `updated_at`) VALUES
(1, 6, 'Free', '$', 'Local Pickup', '1640777420', '2021-12-29 06:30:20', '2021-12-29 06:30:20'),
(2, 6, '10', '$', 'Flat Rate Per Item', '1640777420', '2021-12-29 06:30:20', '2021-12-29 06:30:20'),
(3, 7, 'Free', '$', 'Local Pickup', '1640777420', '2021-12-29 06:30:20', '2021-12-29 06:30:20'),
(4, 7, '10', '$', 'Flat Rate Per Item', '1640777420', '2021-12-29 06:30:20', '2021-12-29 06:30:20'),
(5, 8, 'Free', '$', 'Local Pickup', '1640777420', '2021-12-29 06:30:20', '2021-12-29 06:30:20'),
(6, 8, '10', '$', 'Flat Rate Per Item', '1640777420', '2021-12-29 06:30:20', '2021-12-29 06:30:20'),
(7, 9, 'Free', '$', 'Local Pickup', '1640777420', '2021-12-29 06:30:20', '2021-12-29 06:30:20'),
(8, 9, '10', '$', 'Flat Rate Per Item', '1640777420', '2021-12-29 06:30:20', '2021-12-29 06:30:20');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bird_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `follows`
--

CREATE TABLE `follows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `follower_id` bigint(20) UNSIGNED DEFAULT NULL,
  `following_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_04_154740_create_jobs_table', 1),
(6, '2021_12_05_122501_create_address_books_table', 1),
(7, '2021_12_05_170101_create_categories_table', 1),
(8, '2021_12_05_170103_create_birds_table', 1),
(9, '2021_12_05_211126_create_bird_images_table', 1),
(10, '2021_12_09_103558_create_bird_inventories_table', 1),
(11, '2021_12_09_105007_create_bird_inventory_data_table', 1),
(12, '2021_12_09_105653_create_ratings_table', 1),
(13, '2021_12_15_103530_create_banners_table', 1),
(14, '2021_12_15_120046_create_favourites_table', 1),
(15, '2021_12_24_074456_create_follows_table', 1),
(16, '2021_12_28_075220_create_delivery_options_table', 1),
(17, '2021_12_28_076939_create_orders_table', 1),
(18, '2021_12_29_065545_create_order_products_table', 1),
(19, '2021_12_29_070615_create_order_product_inventories_table', 1),
(20, '2021_12_29_112355_create_notifications_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `notification_from` bigint(20) UNSIGNED DEFAULT NULL,
  `notification_to` bigint(20) UNSIGNED DEFAULT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bird_id` bigint(20) UNSIGNED DEFAULT NULL,
  `notification_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `notification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `notifimation_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1640777415',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `store_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `delivery_option_id` bigint(20) UNSIGNED DEFAULT NULL,
  `address_id` bigint(20) UNSIGNED DEFAULT NULL,
  `total_products` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `total_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `total_tax` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `total_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `subtotal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `shipping_fee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `grand_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `payment_method_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `is_paid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `is_scheduled` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `schedule_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bird_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bird_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `subtotal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_product_inventories`
--

CREATE TABLE `order_product_inventories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bird_inventory_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bird_inventory_data_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `subtotal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bird_id` bigint(20) UNSIGNED DEFAULT NULL,
  `rating_stars` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '5.0',
  `review` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1640777408',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `gmail_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `apple_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `verification_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'profile_images/default.png',
  `store_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `store_rating` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '5.0',
  `is_business_verified` int(11) NOT NULL DEFAULT 0,
  `wallet_balance` int(11) NOT NULL DEFAULT 0,
  `wallet_balance_currency` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '$',
  `credit_card_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `name_on_card` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `card_number` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `expiry_date` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `cvv` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `business_document` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `person_incharge` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `business_registration_number` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `business_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `bank_account_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `bank_account_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `branch_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `IBAN_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `cheque_copy_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `type` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `switched_role` int(11) NOT NULL DEFAULT 0,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `facebook_id`, `gmail_id`, `apple_id`, `name`, `email`, `email_verified_at`, `verification_code`, `phone`, `profile_image`, `store_name`, `store_rating`, `is_business_verified`, `wallet_balance`, `wallet_balance_currency`, `credit_card_type`, `name_on_card`, `card_number`, `expiry_date`, `cvv`, `business_document`, `person_incharge`, `business_registration_number`, `business_address`, `bank_account_name`, `bank_account_number`, `bank_name`, `branch_code`, `IBAN_number`, `cheque_copy_image`, `type`, `switched_role`, `password`, `token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '', '', '', 'Admin', 'admin@admin.com', NULL, '', '', 'profile_images/default.png', '', '5.0', 0, 0, '$', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 0, '$2y$10$6ECuqK3/UvGLIWGFgAm2IeR2nGWc.81BCjJjjyv/eYOO/WGV.j3u.', '', NULL, '2021-12-29 06:30:17', '2021-12-29 06:30:17'),
(2, '', '', '', 'Kamran Abrar', 'kamranabrar90@gmail.com', NULL, '', '+923236691890', 'profile_images/default.png', '', '5.0', 0, 1000, '$', 'visa', 'Kamran Abrar', '1234 1234 1234 1234', '09/25', '1234', '', '', '', '', '', '', '', '', '', '', '1', 0, '$2y$10$nqeL9q1JRXwPcNkXdSLMNudCX5mKzLhNNApWKVlPoKyGnoEIPvSdy', '', NULL, '2021-12-29 06:30:17', '2021-12-29 06:30:17'),
(3, '', '', '', 'Asad Ali', 'asad@gmail.com', NULL, '', '+923025258350', 'profile_images/default.png', '', '5.0', 0, 1000, '$', 'visa', 'Hafiz Asad Ali', '1234 1234 1234 1234', '09/25', '1234', '', '', '', '', '', '', '', '', '', '', '1', 0, '$2y$10$mshbR2YLeEGhGRxxQc.qvemWr/nuivre8Vr/IvrW7PfAnde4WDiq6', '', NULL, '2021-12-29 06:30:17', '2021-12-29 06:30:17'),
(4, '', '', '', 'Uzma Amjad', 'uzma11@hotmail.com', NULL, '', '+923044977995', 'profile_images/default.png', '', '5.0', 0, 1000, '$', 'visa', 'Uzma Amjad', '1234 1234 1234 1234', '09/25', '1234', '', '', '', '', '', '', '', '', '', '', '1', 0, '$2y$10$rh0kt.59B3bjtHKNM41igeBENBEquVIQ9FEV6Mgx3TwlMgWkDZHPy', '', NULL, '2021-12-29 06:30:17', '2021-12-29 06:30:17'),
(5, '', '', '', 'Waqar Mughal', 'waqar@gmail.com', NULL, '', '+923004990981', 'profile_images/default.png', '', '5.0', 0, 1000, '$', 'visa', 'Waqar Mughal', '1234 1234 1234 1234', '09/25', '1234', '', '', '', '', '', '', '', '', '', '', '1', 0, '$2y$10$9L01RZULeg.rFCeiwmvgQe61GIYqZvM1nUgb3NHU/DW2dXwhxzFYe', '', NULL, '2021-12-29 06:30:17', '2021-12-29 06:30:17'),
(6, '', '', '', 'Ahmad Ali', 'ahmad@gmail.com', NULL, '', '+923001292981', 'profile_images/default.png', 'Ahmad & Co.', '5.0', 1, 1000, '$', 'visa', 'Ahmad Ali', '1234 1234 1234 1234', '09/25', '1234', 'business_documents/default.png', 'Ahmad Ali', '12345678', 'K1 Valencia Town Lahore', 'Ahmad Ali', '1234 1234 1234 1234', 'ABC Bank', '12345', '12345', '', '2', 1, '$2y$10$T9QpB5FSJiDogJtC.qTuiuNgq44zAZRtcl.7BgL/s5KCl0QMCbBk.', '', NULL, '2021-12-29 06:30:17', '2021-12-29 06:30:17'),
(7, '', '', '', 'Saboor Ahmad', 'saboor@gmail.com', NULL, '', '+923023292981', 'profile_images/default.png', 'Saboor & Co.', '5.0', 1, 1000, '$', 'visa', 'Saboor Ahmad', '1234 1234 1234 1234', '09/25', '1234', 'business_documents/default.png', 'Saboor Ahmad', '12345678', 'K1 Valencia Town Lahore', 'Ahmad Ali', '1234 1234 1234 1234', 'ABC Bank', '12345', '12345', '', '2', 1, '$2y$10$PJkO3tniJJqJVIDZUsjWcu0sCkin1l.vIHbAod3gSjnC7r19JyIjm', '', NULL, '2021-12-29 06:30:17', '2021-12-29 06:30:17'),
(8, '', '', '', 'Azeem Ahmad', 'azeem@gmail.com', NULL, '', '+923001292981', 'profile_images/default.png', 'Azeem & Co.', '5.0', 1, 1000, '$', 'visa', 'Azeem Ahmad', '1234 1234 1234 1234', '09/25', '1234', 'business_documents/default.png', 'Azeem Ahmad', '12345678', 'K1 Valencia Town Lahore', 'Ahmad Ali', '1234 1234 1234 1234', 'ABC Bank', '12345', '12345', '', '2', 1, '$2y$10$Wcc6mTluJ9xwYfXfLxGuC.7RSrVI0vuznlp31/Frc.hMjXaWHjJaG', '', NULL, '2021-12-29 06:30:17', '2021-12-29 06:30:17'),
(9, '', '', '', 'Ali Hassan', 'ali@gmail.com', NULL, '', '+923001292981', 'profile_images/default.png', 'Hassan & Co.', '5.0', 1, 1000, '$', 'visa', 'Ali Hassan', '1234 1234 1234 1234', '09/25', '1234', 'business_documents/default.png', 'Hassan Ali', '12345678', 'K1 Valencia Town Lahore', 'Ahmad Ali', '1234 1234 1234 1234', 'ABC Bank', '12345', '12345', '', '2', 1, '$2y$10$H2Q0gXubIukNT1HBAYvvA.i/68kmTV.y6MRmIcRGoekJkcvNpfEf2', '', NULL, '2021-12-29 06:30:17', '2021-12-29 06:30:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_books`
--
ALTER TABLE `address_books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `address_books_user_id_foreign` (`user_id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `birds`
--
ALTER TABLE `birds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `birds_category_id_foreign` (`category_id`),
  ADD KEY `birds_store_id_foreign` (`store_id`);

--
-- Indexes for table `bird_images`
--
ALTER TABLE `bird_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bird_images_bird_id_foreign` (`bird_id`);

--
-- Indexes for table `bird_inventories`
--
ALTER TABLE `bird_inventories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bird_inventory_data`
--
ALTER TABLE `bird_inventory_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bird_inventory_data_bird_id_foreign` (`bird_id`),
  ADD KEY `bird_inventory_data_inventory_id_foreign` (`inventory_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_options`
--
ALTER TABLE `delivery_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `delivery_options_store_id_foreign` (`store_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favourites_user_id_foreign` (`user_id`),
  ADD KEY `favourites_bird_id_foreign` (`bird_id`);

--
-- Indexes for table `follows`
--
ALTER TABLE `follows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `follows_follower_id_foreign` (`follower_id`),
  ADD KEY `follows_following_id_foreign` (`following_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notification_from_foreign` (`notification_from`),
  ADD KEY `notifications_notification_to_foreign` (`notification_to`),
  ADD KEY `notifications_order_id_foreign` (`order_id`),
  ADD KEY `notifications_bird_id_foreign` (`bird_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_store_id_foreign` (`store_id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_delivery_option_id_foreign` (`delivery_option_id`),
  ADD KEY `orders_address_id_foreign` (`address_id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_products_order_id_foreign` (`order_id`),
  ADD KEY `order_products_bird_id_foreign` (`bird_id`);

--
-- Indexes for table `order_product_inventories`
--
ALTER TABLE `order_product_inventories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_product_inventories_order_product_id_foreign` (`order_product_id`),
  ADD KEY `order_product_inventories_bird_inventory_id_foreign` (`bird_inventory_id`),
  ADD KEY `order_product_inventories_bird_inventory_data_id_foreign` (`bird_inventory_data_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_user_id_foreign` (`user_id`),
  ADD KEY `ratings_bird_id_foreign` (`bird_id`);

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
-- AUTO_INCREMENT for table `address_books`
--
ALTER TABLE `address_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `birds`
--
ALTER TABLE `birds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `bird_images`
--
ALTER TABLE `bird_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bird_inventories`
--
ALTER TABLE `bird_inventories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bird_inventory_data`
--
ALTER TABLE `bird_inventory_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `delivery_options`
--
ALTER TABLE `delivery_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `follows`
--
ALTER TABLE `follows`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_product_inventories`
--
ALTER TABLE `order_product_inventories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address_books`
--
ALTER TABLE `address_books`
  ADD CONSTRAINT `address_books_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `birds`
--
ALTER TABLE `birds`
  ADD CONSTRAINT `birds_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `birds_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `bird_images`
--
ALTER TABLE `bird_images`
  ADD CONSTRAINT `bird_images_bird_id_foreign` FOREIGN KEY (`bird_id`) REFERENCES `birds` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `bird_inventory_data`
--
ALTER TABLE `bird_inventory_data`
  ADD CONSTRAINT `bird_inventory_data_bird_id_foreign` FOREIGN KEY (`bird_id`) REFERENCES `birds` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bird_inventory_data_inventory_id_foreign` FOREIGN KEY (`inventory_id`) REFERENCES `bird_inventories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `delivery_options`
--
ALTER TABLE `delivery_options`
  ADD CONSTRAINT `delivery_options_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `favourites`
--
ALTER TABLE `favourites`
  ADD CONSTRAINT `favourites_bird_id_foreign` FOREIGN KEY (`bird_id`) REFERENCES `birds` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `favourites_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `follows`
--
ALTER TABLE `follows`
  ADD CONSTRAINT `follows_follower_id_foreign` FOREIGN KEY (`follower_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `follows_following_id_foreign` FOREIGN KEY (`following_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_bird_id_foreign` FOREIGN KEY (`bird_id`) REFERENCES `birds` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `notifications_notification_from_foreign` FOREIGN KEY (`notification_from`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `notifications_notification_to_foreign` FOREIGN KEY (`notification_to`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `notifications_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `address_books` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_delivery_option_id_foreign` FOREIGN KEY (`delivery_option_id`) REFERENCES `delivery_options` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_products`
--
ALTER TABLE `order_products`
  ADD CONSTRAINT `order_products_bird_id_foreign` FOREIGN KEY (`bird_id`) REFERENCES `birds` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_products_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_product_inventories`
--
ALTER TABLE `order_product_inventories`
  ADD CONSTRAINT `order_product_inventories_bird_inventory_data_id_foreign` FOREIGN KEY (`bird_inventory_data_id`) REFERENCES `bird_inventory_data` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_product_inventories_bird_inventory_id_foreign` FOREIGN KEY (`bird_inventory_id`) REFERENCES `bird_inventories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_product_inventories_order_product_id_foreign` FOREIGN KEY (`order_product_id`) REFERENCES `order_products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_bird_id_foreign` FOREIGN KEY (`bird_id`) REFERENCES `birds` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
