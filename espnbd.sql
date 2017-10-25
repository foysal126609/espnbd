-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2017 at 03:37 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `espnbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `heading`, `message`, `publication_status`, `created_at`, `updated_at`) VALUES
(4, 'Our Mission', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.', 1, '2017-10-14 23:55:09', '2017-10-14 23:55:09'),
(5, 'Our vission', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.', 1, '2017-10-14 23:55:59', '2017-10-14 23:55:59');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_discription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_discription`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'BAKOLITE SERIES', 'BAKOLITE SERIES', 1, '2017-10-10 00:09:46', '2017-10-13 19:22:00'),
(2, 'PLASTIC SERIES', 'PLASTIC SERIES', 1, '2017-10-10 00:10:59', '2017-10-13 19:22:25'),
(3, 'BULB ITEMS', 'BULB ITEMS', 1, '2017-10-10 00:12:40', '2017-10-13 19:22:47'),
(4, 'MULTI PLUG SERIES', 'MULTI PLUG SERIES', 1, '2017-10-10 00:15:52', '2017-10-13 19:23:10'),
(5, '5 	GANG SERIES', '5 	GANG SERIES', 1, '2017-10-10 00:16:28', '2017-10-13 19:23:40'),
(6, 'dd', 'ss', 0, '2017-10-10 00:25:37', '2017-10-13 19:23:44');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_massage` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `client_name`, `client_designation`, `client_massage`, `client_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(4, 'Bernice Neumann', 'Designer', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', 'adminAssets/images/notice_image/testi2.jpg', 1, '2017-10-14 22:36:55', '2017-10-14 22:36:55'),
(5, 'John Dow', 'CEO', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', 'adminAssets/images/notice_image/testi3.jpg', 1, '2017-10-14 22:38:45', '2017-10-14 22:38:45'),
(6, 'Michel', 'Developer', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', 'adminAssets/images/notice_image/testi1.jpg', 1, '2017-10-14 22:40:48', '2017-10-14 22:40:48');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(10) UNSIGNED NOT NULL,
  `feature_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_discription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `feature_heading`, `feature_discription`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Price', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', 1, '2017-10-12 00:38:12', '2017-10-12 06:16:12'),
(3, 'Service', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', 1, '2017-10-12 00:39:15', '2017-10-12 00:39:15'),
(4, 'Quality', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', 1, '2017-10-12 06:19:10', '2017-10-12 06:19:10');

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
(3, '2017_10_10_035456_create_admins_table', 2),
(4, '2017_10_10_052829_create_categories_table', 2),
(5, '2017_10_10_095435_create_products_table', 3),
(6, '2017_10_12_040413_create_sliders_table', 4),
(7, '2017_10_12_053751_create_features_table', 5),
(8, '2017_10_12_124042_create_notices_table', 6),
(9, '2017_10_15_031730_create_clients_table', 7),
(10, '2017_10_15_044905_create_abouts_table', 8),
(11, '2017_10_15_061403_create_teams_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(10) UNSIGNED NOT NULL,
  `notice_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notice_short_discription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `notice_long_discription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `notice_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `notice_title`, `author_name`, `notice_short_discription`, `notice_long_discription`, `notice_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Personal Note Details', 'By John Powell', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since theLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since theLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since theLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since theLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since theLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since theLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since theLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since theLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the', 'adminAssets/images/notice_image/5.jpg', 1, '2017-10-12 07:20:03', '2017-10-15 01:57:36'),
(2, 'ssss', 'ssssssss', 'sssssssss', 'sss', 'adminAssets/images/notice_image/counter-bg.jpg', 1, '2017-10-12 21:59:33', '2017-10-15 19:16:15'),
(3, 'Personal Note Details', 'John Powell', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since theLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since theLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since theLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since theLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since theLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since theLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since theLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since theLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the', 'adminAssets/images/notice_image/blog-img-1.jpg', 1, '2017-10-15 07:23:20', '2017-10-15 07:23:20');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_discription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_name`, `product_code`, `product_price`, `product_discription`, `product_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'WALL LAMP HOLDER DIAMOND', '47', '390.00', 'PRICE PER DOZON/12 PC', 'adminAssets/product_image/3e7c7f299b57ad79e99260b239afafc5.jpg', 1, '2017-10-10 04:50:50', '2017-10-14 06:15:16'),
(4, 1, 'WALL LAMP HOLDER DIAMOND THRED', '48', '390', 'PRICE PER DOZON/12PC', 'adminAssets/product_image/ecbc59b5f355e2a6208013bee2ad3b34.jpg', 1, '2017-10-14 05:04:09', '2017-10-14 05:04:09'),
(5, 1, 'WALL LAMP HOLDER LILY', '55', '380', 'PRICE PER DOZON/12 PC', 'adminAssets/product_image/1eaf58b4d192f85ca70a698ab3c46527.jpg', 1, '2017-10-14 05:05:21', '2017-10-14 05:05:21'),
(6, 2, 'THREE PIN PLUG 16AMP', '30', '45', 'PRICE PER P.C', 'adminAssets/product_image/f8e824a9243b0410f4c703da088314e9.jpg', 1, '2017-10-14 05:06:50', '2017-10-14 05:06:50'),
(7, 4, 'MULTI PLUG MODEL NO.420', '115', '350', 'PRICE PER PC.CABLE 4 MITER', 'adminAssets/product_image/08e5f58e4426ad696cb7a1105df6066c.jpg', 1, '2017-10-14 05:08:09', '2017-10-14 05:08:09'),
(8, 3, 'COLOUR COTED-05 WATT', '105', '234', 'price per dozon/12pc', 'adminAssets/product_image/121d64bfcd7f1e9d2c1d316fba8563a4.jpg', 1, '2017-10-14 05:13:43', '2017-10-14 05:13:43');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `slider_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(5, 'adminAssets/images/slider_image/1.jpg', 1, '2017-10-11 23:23:34', '2017-10-11 23:23:34'),
(6, 'adminAssets/images/slider_image/2.jpg', 1, '2017-10-11 23:23:44', '2017-10-11 23:23:44'),
(7, 'adminAssets/images/slider_image/3.jpg', 1, '2017-10-11 23:23:53', '2017-10-11 23:23:53'),
(8, 'adminAssets/images/slider_image/4.jpg', 1, '2017-10-11 23:24:02', '2017-10-11 23:24:02'),
(9, 'adminAssets/images/slider_image/5.jpg', 1, '2017-10-11 23:24:11', '2017-10-11 23:24:11');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `designation`, `message`, `image`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, 'John Doe', 'CEO', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 'adminAssets/images/notice_image/team-member-2.png', 1, '2017-10-15 01:03:31', '2017-10-15 01:03:31'),
(3, 'Bernice Neumann', 'Designer', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 'adminAssets/images/notice_image/team-member-1.png', 1, '2017-10-15 01:04:09', '2017-10-15 01:04:09'),
(4, 'Dvid Cameron', 'Developer', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 'adminAssets/images/notice_image/team-member-3.png', 1, '2017-10-15 01:04:52', '2017-10-15 01:04:52'),
(6, 'Bernice Neumann', 'Designer', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 'adminAssets/images/notice_image/testi2.jpg', 1, '2017-10-15 08:58:31', '2017-10-15 08:58:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_level` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `access_level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Foysal Ahmad', 'foysal1208@gmail.com', '$2y$10$wCi2ShLm.yJQlxj8uyRzfuUaurU373qs49r57QBbdKO9QWt/HmdRi', 1, 'H8BTu2cyBwxCrJDzx94sOJ9r0rEk6u3HrIM9IVgJ8hSC4VaSC4i483HlFGuP', '2017-10-08 05:05:56', '2017-10-15 07:10:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
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
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
