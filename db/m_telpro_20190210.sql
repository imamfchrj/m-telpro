-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 09, 2019 at 11:24 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `m_telpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_menu`
--

CREATE TABLE `admin_menu` (
  `id` smallint(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT '',
  `path` varchar(255) DEFAULT '',
  `level` tinyint(4) NOT NULL DEFAULT '1',
  `parent_id` smallint(6) DEFAULT NULL,
  `modified_by` smallint(6) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_menu`
--

INSERT INTO `admin_menu` (`id`, `name`, `icon`, `path`, `level`, `parent_id`, `modified_by`, `created_at`, `updated_at`) VALUES
(1, 'Dashboard', 'icon-Car-Wheel', 'mastermenu', 1, 0, NULL, '2019-02-05 12:53:27', '2019-02-05 12:53:27'),
(2, 'Halaman Utama', '', 'halamanutama', 2, 1, NULL, '2019-02-05 12:55:12', '2019-02-05 12:55:12'),
(3, 'Sewa Mobil', 'icon-Receipt-4', 'sewamobilm', 1, 0, NULL, '2019-02-05 12:58:46', '2019-02-05 12:58:46'),
(4, 'List Sewa Mobil', '', 'sewamobil', 2, 3, NULL, '2019-02-05 12:59:46', '2019-02-05 12:59:46'),
(5, 'E-Sales', 'icon-Receipt-3', 'esales', 1, 0, NULL, '2019-02-05 13:00:20', '2019-02-05 13:00:20'),
(6, 'Management Berita', 'icon-Sidebar-Window', 'managementberita', 1, 0, NULL, '2019-02-05 13:02:39', '2019-02-05 13:02:39'),
(7, 'Master', 'icon-Wrench', 'master', 1, 0, NULL, '2019-02-05 13:03:17', '2019-02-05 13:03:17'),
(8, 'Manajemen User', 'icon-Add-User', 'manajemenuser', 1, 0, NULL, '2019-02-05 13:03:53', '2019-02-05 13:04:48'),
(9, 'Manajemen Admin', 'icon-Eyeglasses-Smiley', 'manajemenadmin', 1, 0, NULL, '2019-02-05 13:04:14', '2019-02-05 13:04:14'),
(10, 'Report', 'icon-Line-Chart3', 'report', 1, 0, NULL, '2019-02-05 13:04:39', '2019-02-05 13:04:39'),
(11, 'Calculator', '', 'calculator', 2, 5, NULL, '2019-02-05 13:09:53', '2019-02-05 13:09:53'),
(12, 'List Berita', '', 'listberita', 2, 6, NULL, '2019-02-05 13:10:15', '2019-02-05 13:10:15'),
(14, 'List User', '', 'listuser', 2, 8, NULL, '2019-02-05 13:11:13', '2019-02-05 13:11:13'),
(15, 'List User Admin', '', 'adminlist', 2, 9, NULL, '2019-02-05 13:12:36', '2019-02-05 13:12:36'),
(16, 'Role Admin', '', 'adminrole', 2, 9, NULL, '2019-02-05 13:12:59', '2019-02-05 13:12:59'),
(17, 'Master Menu', '', 'mastermenu', 2, 9, NULL, '2019-02-05 13:13:54', '2019-02-05 13:13:54'),
(18, 'Jumlah Transaksi', '', 'jumlahtransaksi', 2, 10, NULL, '2019-02-05 13:14:26', '2019-02-05 13:14:26'),
(19, 'Jumlah Transaksi', '', 'jumlahuser', 2, 10, NULL, '2019-02-05 13:14:37', '2019-02-05 13:14:37'),
(20, 'Laporan Bulanan', '', 'laporanbulanan', 2, 10, NULL, '2019-02-05 13:14:49', '2019-02-05 13:14:49'),
(21, 'Kategori Berita', '', 'kategoriberita', 2, 7, NULL, '2019-02-09 03:09:34', '2019-02-09 03:12:00'),
(22, 'Master Area Service', '', 'areaservice', 2, 7, NULL, '2019-02-09 06:03:09', '2019-02-09 06:03:09'),
(23, 'Master Costumer', '', 'mastercostumer', 2, 7, NULL, '2019-02-09 07:31:57', '2019-02-09 07:31:57'),
(24, 'Kategori Mobil', '', 'mastercarcategory', 2, 7, NULL, '2019-02-09 08:35:46', '2019-02-09 08:35:46'),
(25, 'Master Brand Mobil', '', 'mastercarbrand', 2, 7, NULL, '2019-02-09 08:36:13', '2019-02-09 08:36:13'),
(26, 'Master Serie Mobil', '', 'mastercarseries', 2, 7, NULL, '2019-02-09 08:36:40', '2019-02-09 08:36:40');

-- --------------------------------------------------------

--
-- Table structure for table `admin_role`
--

CREATE TABLE `admin_role` (
  `id` smallint(6) NOT NULL,
  `role` varchar(50) NOT NULL,
  `modified_by` smallint(6) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_role`
--

INSERT INTO `admin_role` (`id`, `role`, `modified_by`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, '2019-02-05 09:39:22', '2019-02-05 09:39:22'),
(3, 'Staff', NULL, '2019-02-05 14:08:31', '2019-02-05 14:08:31');

-- --------------------------------------------------------

--
-- Table structure for table `admin_role_menu`
--

CREATE TABLE `admin_role_menu` (
  `id` smallint(6) NOT NULL,
  `role` smallint(6) NOT NULL,
  `menu` smallint(6) NOT NULL,
  `modified_by` smallint(6) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_role_menu`
--

INSERT INTO `admin_role_menu` (`id`, `role`, `menu`, `modified_by`, `created_at`, `updated_at`) VALUES
(15, 1, 4, NULL, '2019-02-05 11:14:25', '2019-02-05 11:14:25'),
(17, 1, 2, NULL, '2019-02-05 13:34:34', '2019-02-05 13:34:34'),
(18, 1, 3, NULL, '2019-02-05 13:34:35', '2019-02-05 13:34:35'),
(19, 1, 6, NULL, '2019-02-05 13:34:37', '2019-02-05 13:34:37'),
(20, 1, 7, NULL, '2019-02-05 13:34:38', '2019-02-05 13:34:38'),
(21, 1, 8, NULL, '2019-02-05 13:34:39', '2019-02-05 13:34:39'),
(22, 1, 9, NULL, '2019-02-05 13:34:39', '2019-02-05 13:34:39'),
(23, 1, 10, NULL, '2019-02-05 13:34:40', '2019-02-05 13:34:40'),
(25, 1, 12, NULL, '2019-02-05 13:34:42', '2019-02-05 13:34:42'),
(26, 1, 13, NULL, '2019-02-05 13:34:43', '2019-02-05 13:34:43'),
(27, 1, 14, NULL, '2019-02-05 13:34:43', '2019-02-05 13:34:43'),
(28, 1, 15, NULL, '2019-02-05 13:34:44', '2019-02-05 13:34:44'),
(29, 1, 16, NULL, '2019-02-05 13:34:44', '2019-02-05 13:34:44'),
(30, 1, 17, NULL, '2019-02-05 13:34:45', '2019-02-05 13:34:45'),
(31, 1, 19, NULL, '2019-02-05 13:34:47', '2019-02-05 13:34:47'),
(32, 1, 20, NULL, '2019-02-05 13:34:48', '2019-02-05 13:34:48'),
(33, 1, 18, NULL, '2019-02-05 13:34:49', '2019-02-05 13:34:49'),
(34, 1, 1, NULL, '2019-02-05 14:07:14', '2019-02-05 14:07:14'),
(36, 1, 5, NULL, '2019-02-05 14:07:35', '2019-02-05 14:07:35'),
(37, 1, 11, NULL, '2019-02-05 14:07:52', '2019-02-05 14:07:52'),
(38, 1, 21, NULL, '2019-02-09 03:14:00', '2019-02-09 03:14:00'),
(39, 1, 22, NULL, '2019-02-09 06:03:25', '2019-02-09 06:03:25'),
(40, 1, 23, NULL, '2019-02-09 07:32:09', '2019-02-09 07:32:09'),
(41, 1, 24, NULL, '2019-02-09 08:36:53', '2019-02-09 08:36:53'),
(42, 1, 25, NULL, '2019-02-09 08:36:53', '2019-02-09 08:36:53'),
(43, 1, 26, NULL, '2019-02-09 08:36:55', '2019-02-09 08:36:55');

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` smallint(6) NOT NULL DEFAULT '2',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `area_service`
--

CREATE TABLE `area_service` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `map_lat` decimal(30,8) NOT NULL,
  `map_long` decimal(30,8) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `costumer`
--

CREATE TABLE `costumer` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_brand_car`
--

CREATE TABLE `master_brand_car` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_car_series`
--

CREATE TABLE `master_car_series` (
  `id` int(11) NOT NULL,
  `name_series` varchar(200) NOT NULL,
  `category_car_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `is_manual` tinyint(4) NOT NULL,
  `seat` tinyint(2) NOT NULL,
  `is_airbags` tinyint(1) NOT NULL,
  `is_ac` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_category_brand`
--

CREATE TABLE `master_category_brand` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_category_car`
--

CREATE TABLE `master_category_car` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_news_category`
--

CREATE TABLE `master_news_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `thumbnail` text NOT NULL,
  `writer` varchar(200) NOT NULL,
  `category_id` tinyint(2) NOT NULL,
  `tag` varchar(200) NOT NULL,
  `is_publish` tinyint(1) NOT NULL,
  `news_text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_menu`
--
ALTER TABLE `admin_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level` (`level`,`parent_id`);

--
-- Indexes for table `admin_role`
--
ALTER TABLE `admin_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_role_menu`
--
ALTER TABLE `admin_role_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`(191));

--
-- Indexes for table `area_service`
--
ALTER TABLE `area_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `costumer`
--
ALTER TABLE `costumer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_brand_car`
--
ALTER TABLE `master_brand_car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_car_series`
--
ALTER TABLE `master_car_series`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_category_brand`
--
ALTER TABLE `master_category_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_category_car`
--
ALTER TABLE `master_category_car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_news_category`
--
ALTER TABLE `master_news_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_menu`
--
ALTER TABLE `admin_menu`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `admin_role`
--
ALTER TABLE `admin_role`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin_role_menu`
--
ALTER TABLE `admin_role_menu`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `area_service`
--
ALTER TABLE `area_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `costumer`
--
ALTER TABLE `costumer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_brand_car`
--
ALTER TABLE `master_brand_car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_car_series`
--
ALTER TABLE `master_car_series`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_category_brand`
--
ALTER TABLE `master_category_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_category_car`
--
ALTER TABLE `master_category_car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_news_category`
--
ALTER TABLE `master_news_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
