-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 2016 at 07:23 PM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.34-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `matrial`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kodekategori` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_barang` text COLLATE utf8_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stok` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diskon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `kodekategori`, `nama_barang`, `harga`, `stok`, `diskon`, `created_at`, `updated_at`) VALUES
(2, 'sasasasa', 'jdbjwbdjbqjbdsaasknk', '3232', '3232', '3232', '2016-04-13 08:57:32', '2016-04-13 09:10:50');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kodecategory` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_kategori` text COLLATE utf8_unicode_ci NOT NULL,
  `profit_margin` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kategori_kodecategory_unique` (`kodecategory`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_100000_create_password_resets_table', 1),
('2016_03_31_161136_create_bahan_bangunan_table', 1),
('2016_04_12_083301_create_posts_table', 2),
('2016_04_13_075534_CreatePostTable', 3),
('2016_04_13_081513_Create_barang_Table', 4),
('2016_04_13_082710_Create_kategori_Table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ali nurdin', 'alinur@gmail.com', '$2y$10$FNYi/06rgEHhWXg.qMBix.b15RFVCGVcqMXsejqCeC3RRxukUt2ka', 'vM8oxx0OTgdDn8EoNOA1kYJPUsf2qVnW13QAsaJkGafwTAqJUVTgLMbEtOrW', '2016-03-27 09:16:13', '2016-04-12 05:47:18'),
(4, 'admin', 'admin@tokobangunan.com', '$2y$10$Af47.KhM2g7O2v1MZXcjVOV2FbMH5NPKFxoGhf5ctM4qsPMBV/x1u', 'ab5gVcGpRfi35gLKeWIhUgWVFgAeL4LAvLxlM1wefmiQ5s3lrWV12CGR9bgh', '2016-04-09 06:25:08', '2016-04-09 06:26:03');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
