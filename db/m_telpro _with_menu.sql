-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 05, 2019 at 11:21 PM
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
(13, 'Kategori Mobil', '', 'kategorimobil', 2, 7, NULL, '2019-02-05 13:10:45', '2019-02-05 13:10:45'),
(14, 'List User', '', 'listuser', 2, 8, NULL, '2019-02-05 13:11:13', '2019-02-05 13:11:13'),
(15, 'List User Admin', '', 'adminlist', 2, 9, NULL, '2019-02-05 13:12:36', '2019-02-05 13:12:36'),
(16, 'Role Admin', '', 'adminrole', 2, 9, NULL, '2019-02-05 13:12:59', '2019-02-05 13:12:59'),
(17, 'Master Menu', '', 'mastermenu', 2, 9, NULL, '2019-02-05 13:13:54', '2019-02-05 13:13:54'),
(18, 'Jumlah Transaksi', '', 'jumlahtransaksi', 2, 10, NULL, '2019-02-05 13:14:26', '2019-02-05 13:14:26'),
(19, 'Jumlah Transaksi', '', 'jumlahuser', 2, 10, NULL, '2019-02-05 13:14:37', '2019-02-05 13:14:37'),
(20, 'Laporan Bulanan', '', 'laporanbulanan', 2, 10, NULL, '2019-02-05 13:14:49', '2019-02-05 13:14:49');

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
(37, 1, 11, NULL, '2019-02-05 14:07:52', '2019-02-05 14:07:52');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_menu`
--
ALTER TABLE `admin_menu`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `admin_role`
--
ALTER TABLE `admin_role`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_role_menu`
--
ALTER TABLE `admin_role_menu`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
