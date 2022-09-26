-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 26, 2022 at 05:47 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laraveltask`
--

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `annual_income` int(11) DEFAULT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manglik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expected_income` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `partnerOccupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Family` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `partnerManglik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_as` enum('user','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `google_id`, `date_of_birth`, `gender`, `annual_income`, `occupation`, `family_type`, `manglik`, `expected_income`, `partnerOccupation`, `Family`, `partnerManglik`, `role_as`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'anand sen', 'anand.sen.376@gmail.com', NULL, '$2y$10$Ylr3/coWVbyAZ.AjpdcXWeuIMCySt.Uf2OWzsB3tbSLS6ZHExdJY.', NULL, '09-13-2022', 'male', 800000, 'Government', 'Nuclear', 'no', '395065 - 1193608', '[\"Private\",\"Government\",\"Business\"]', '[\"Joint\",\"Nuclear\"]', '[\"Yes\",\"No\"]', 'user', NULL, '2022-09-25 20:19:56', '2022-09-25 20:20:14'),
(3, 'Maxine Grady', 'anand.sen.9237@gmail.com', NULL, '$2y$10$JNmRsOSE6lHFQKBHsSWuWOnbIfPRwGJrBLLVDTeZOt6D6/G.VGwVW', NULL, '2019-12-18 07:07:57', 'male', 934419, 'Business', 'Joint', 'no', '634237-598735', '[\"Government\",\"Government\",\"Business\"]', '[\"Nuclear\",\"Nuclear\"]', '[\"no\",\"no\"]', 'admin', NULL, '2022-09-25 20:26:47', '2022-09-25 20:26:47'),
(4, 'Dr. Bo Hirthe', 'emelia.ondricka@example.net', NULL, '$2y$10$UOvU4ZRpQv6cxR5N9qzRiuBq2pCQBRAY61Ix6TQ06qlSC45inR6mG', NULL, '2010-03-28 21:11:54', 'male', 1196366, 'Government', 'Joint', 'yes', '1207010-1339020', '[\"Government\",\"Government\",\"Private\"]', '[\"Joint\",\"Joint\"]', '[\"yes\",\"yes\"]', 'user', NULL, '2022-09-25 20:26:47', '2022-09-25 20:26:47'),
(5, 'Forrest Zemlak', 'dustin13@example.net', NULL, '$2y$10$buaODZ4ds81H.QIIR2VV..GpTvmeyf6ngra0Oy5ur8k47DsibPhwe', NULL, '1976-01-25 09:41:02', 'male', 1290674, 'Private', 'Joint', 'no', '707318-1473635', '[\"Government\",\"Government\",\"Business\"]', '[\"Joint\",\"Joint\"]', '[\"yes\",\"yes\"]', 'user', NULL, '2022-09-25 20:26:47', '2022-09-25 20:26:47'),
(6, 'Abdullah Weimann', 'gracie.durgan@example.com', NULL, '$2y$10$7inzB1pfz8bSJormyYcCSOuaL/mbsBv5pKvEVBYGlVLw3Z4Qdygru', NULL, '2001-08-05 08:36:42', 'male', 1282266, 'Business', 'Nuclear', 'no', '835589-544244', '[\"Government\",\"Private\",\"Business\"]', '[\"Joint\",\"Joint\"]', '[\"yes\",\"yes\"]', 'user', NULL, '2022-09-25 20:26:47', '2022-09-25 20:26:47'),
(7, 'Deion Anderson', 'sophia80@example.net', NULL, '$2y$10$FANDVvCkzvXGQqL57HXs2OFQNeVhZ7Hrsl0A9IYAXx6pyzU4TFy4S', NULL, '1999-08-09 13:37:42', 'male', 715832, 'Private', 'Nuclear', 'no', '882471-1118861', '[\"Government\",\"Government\",\"Business\"]', '[\"Nuclear\",\"Nuclear\"]', '[\"no\",\"no\"]', 'user', NULL, '2022-09-25 20:26:47', '2022-09-25 20:26:47'),
(8, 'Mrs. Juliet Gorczany I', 'kaley.konopelski@example.org', NULL, '$2y$10$M5gN/vEowEViNVadWHn68OliFrkk6jsue.5mP/jOAnBDQk9kMr56i', NULL, '2008-12-01 15:57:58', 'female', 502884, 'Private', 'Nuclear', 'no', '969091-833283', '[\"Business\",\"Government\",\"Private\"]', '[\"Joint\",\"Nuclear\"]', '[\"yes\",\"no\"]', 'user', NULL, '2022-09-25 20:26:47', '2022-09-25 20:26:47'),
(9, 'Giovanna Hermann I', 'madisyn.nicolas@example.net', NULL, '$2y$10$xwtCMrrXUWbpxTqzYeTzNO8EFij4U7.ATJkQ.Wee29JC6gXA156YO', NULL, '1983-02-22 00:23:21', 'female', 1187260, 'Private', 'Joint', 'no', '664623-512521', '[\"Private\",\"Private\",\"Private\"]', '[\"Joint\",\"Joint\"]', '[\"yes\",\"yes\"]', 'user', NULL, '2022-09-25 20:26:47', '2022-09-25 20:26:47'),
(10, 'Alf Vandervort', 'tjacobs@example.com', NULL, '$2y$10$1J/isN6Qa27z/gk.5tCUwuQcApsWZa469nmdpmMDhhtZZJA.uZjY2', NULL, '1974-02-25 08:05:53', 'female', 1228948, 'Private', 'Nuclear', 'no', '1194756-1331147', '[\"Private\",\"Private\",\"Private\"]', '[\"Nuclear\",\"Joint\"]', '[\"no\",\"yes\"]', 'user', NULL, '2022-09-25 20:26:47', '2022-09-25 20:26:47'),
(11, 'Abelardo Grady', 'alejandrin38@example.com', NULL, '$2y$10$igf7wAppKaQSUVjouklFj.qZPKHfQFdmSSYYhw0SSgUTlcUCPsgfa', NULL, '2004-11-03 05:39:24', 'female', 971332, 'Government', 'Nuclear', 'no', '1466809-1206261', '[\"Government\",\"Government\",\"Business\"]', '[\"Nuclear\",\"Nuclear\"]', '[\"no\",\"no\"]', 'user', NULL, '2022-09-25 20:26:47', '2022-09-25 20:26:47'),
(12, 'Cassidy Wisozk', 'shamill@example.net', NULL, '$2y$10$i9ZsEY7RI2Jh2GXDBDVspebFzUDABQzuYaQUWnm08dijQFTIeJGv.', NULL, '1999-03-15 18:40:00', 'female', 1361782, 'Business', 'Joint', 'no', '1076097-1098534', '[\"Private\",\"Business\",\"Private\"]', '[\"Nuclear\",\"Nuclear\"]', '[\"no\",\"no\"]', 'user', NULL, '2022-09-25 20:26:47', '2022-09-25 20:26:47'),
(13, 'Serenity Osinski', 'brooklyn.huels@example.net', NULL, '$2y$10$xC8u3L4ZwjD/jevfWWg/Pu66m04vJWRWQ/rhsX/1JPJf5r4EoUo1m', NULL, '1979-09-28 04:47:26', 'male', 1350023, 'Private', 'Joint', 'no', '1176845-1358821', '[\"Private\",\"Business\",\"Private\"]', '[\"Joint\",\"Joint\"]', '[\"yes\",\"yes\"]', 'user', NULL, '2022-09-25 20:26:47', '2022-09-25 20:26:47'),
(14, 'Dr. Leanna Spinka Sr.', 'dolly.herman@example.org', NULL, '$2y$10$TqPJpATp0g01TCKyaxwacOFH6rtaF3Jic3rDuM2iA3OPnuKNYU/hi', NULL, '1981-09-25 02:54:16', 'male', 505118, 'Business', 'Nuclear', 'yes', '1447906-1146381', '[\"Business\",\"Private\",\"Private\"]', '[\"Nuclear\",\"Joint\"]', '[\"no\",\"yes\"]', 'user', NULL, '2022-09-25 20:26:47', '2022-09-25 20:26:47'),
(15, 'Sweet Sleeping Music', 'sweetsleepingmusic9@gmail.com', NULL, 'eyJpdiI6IlpkdlNxaVdmSUJzUDk1aW5kOU1mbHc9PSIsInZhbHVlIjoid2lLdFY5ZHJnM01KQVBlQzJkSXJGZDc1c1ZsOGtOMUVPcG1kdGliMkNiTT0iLCJtYWMiOiI4NWEyMTYwMmZhMTVmODliYmRjZjliMzE5NjgyNzA1MGJmOWY5MjYyYTMwMzdhMWI4NDI1YTI0OWVhZDE2YzhiIiwidGFnIjoiIn0=', '110749288699369158954', '09-13-2022', 'male', 800000, 'Government', 'Nuclear', 'no', '476618 - 1173220', '[\"Private\",\"Government\",\"Business\"]', '[\"Joint\",\"Nuclear\"]', '[\"Yes\",\"No\"]', 'user', NULL, '2022-09-25 20:27:44', '2022-09-25 20:28:30');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
