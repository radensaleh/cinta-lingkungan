-- phpMyAdmin SQL Dump
-- version 4.6.6deb1+deb.cihar.com~xenial.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 02, 2018 at 11:51 AM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.2.4-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tubesOOP`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin', 'admin', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `complaint_trash`
--

CREATE TABLE `complaint_trash` (
  `id_complaint` int(10) NOT NULL,
  `no_ktp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_trash` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_complaint` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_complaint` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_complaint` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(23, '2014_10_12_000000_create_users_table', 1),
(24, '2014_10_12_100000_create_password_resets_table', 1),
(25, '2018_02_18_135421_create_type_sampah_table', 1),
(26, '2018_02_18_135440_create_report_sampah_table', 1),
(27, '2018_03_14_140807_create_admin_table', 1);

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
-- Table structure for table `type_trash`
--

CREATE TABLE `type_trash` (
  `id_trash` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_trash`
--

INSERT INTO `type_trash` (`id_trash`, `type`, `created_at`, `updated_at`) VALUES
('T001', 'Sampah Industri', '2018-04-24 20:23:54', '2018-04-24 20:25:22'),
('T002', 'Sampah Alam', '2018-04-24 20:25:43', '2018-04-24 20:25:43'),
('T003', 'Sampah Manusia', '2018-04-24 20:27:20', '2018-04-24 20:27:20'),
('T004', 'Sampah Perkantoran', '2018-04-24 20:27:52', '2018-04-24 20:27:52'),
('T005', 'Sampah Nuklir', '2018-04-24 20:28:34', '2018-04-24 20:28:34'),
('T006', 'Sampah Konsumsi', '2018-04-24 20:29:06', '2018-04-24 20:29:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `no_ktp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_users` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`no_ktp`, `name_users`, `email`, `password`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
('3274051307980001', 'Raden Muhammad Saleh Idris', 'm.salehidris13@gmail.com', '$2y$10$xZ7l6L8OVuHViy2zeyudiuzFZz7B3kAMJm/6Ig4sm0aRR5O8xJ06K', 'Desa Kepongpongan Rt 04 Rw 01 Block Jurang No.08 Kecamatan Talun Kabupaten Cirebon', NULL, '2018-04-25 08:32:27', '2018-04-25 08:32:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaint_trash`
--
ALTER TABLE `complaint_trash`
  ADD PRIMARY KEY (`id_complaint`),
  ADD KEY `no_ktp` (`no_ktp`),
  ADD KEY `id_trash` (`id_trash`);

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
-- Indexes for table `type_trash`
--
ALTER TABLE `type_trash`
  ADD PRIMARY KEY (`id_trash`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`no_ktp`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `complaint_trash`
--
ALTER TABLE `complaint_trash`
  MODIFY `id_complaint` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `complaint_trash`
--
ALTER TABLE `complaint_trash`
  ADD CONSTRAINT `complaint_trash_ibfk_1` FOREIGN KEY (`no_ktp`) REFERENCES `users` (`no_ktp`),
  ADD CONSTRAINT `complaint_trash_ibfk_2` FOREIGN KEY (`id_trash`) REFERENCES `type_trash` (`id_trash`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
