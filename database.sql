-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23 سبتمبر 2020 الساعة 12:37
-- إصدار الخادم: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bhn`
--

-- --------------------------------------------------------

--
-- بنية الجدول `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `main` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL,
  `slider` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `details`, `image`, `category_id`, `user_id`, `main`, `created_at`, `updated_at`, `slider`) VALUES
(1, 'خبر تجريبي في أخبار البلدية', 'خبر تجريبي في أخبار البلدية خبر تجريبي في أخبار البلدية خبر تجريبي في أخبار البلدية خبر تجريبي في أخبار البلدية خبر تجريبي في أخبار البلدية', '', 1, 1, 1, '2020-09-23 09:29:32', '0000-00-00 00:00:00', 1),
(2, 'البلدية تستقبل الكورورنا', 'البلدية تستقبل الكورورنا البلدية تستقبل الكورورنا البلدية تستقبل الكورورنا البلدية تستقبل الكورورنا البلدية تستقبل الكورورنا البلدية تستقبل الكورورنا', '', 1, 1, 0, '2020-09-23 09:29:32', '0000-00-00 00:00:00', 0),
(3, 'طواقم البلدية تقوم بحملة تعقيم ', 'طواقم البلدية تقوم بحملة تعقيم طواقم البلدية تقوم بحملة تعقيم طواقم البلدية تقوم بحملة تعقيم طواقم البلدية تقوم بحملة تعقيم طواقم البلدية تقوم بحملة تعقيم طواقم البلدية تقوم بحملة تعقيم طواقم البلدية تقوم بحملة تعقيم ', '', 1, 1, 1, '2020-09-23 09:29:32', '0000-00-00 00:00:00', 1),
(4, 'السلام عليكم', '<p>asdaSDAsdasd</p>', 'images/blogs/1600856323.jpg', 2, 1, 0, '2020-09-23 07:18:43', '2020-09-23 10:18:43', 0),
(5, 'asdfasd', '<p>sdfasdfasdf</p>', 'images/blogs/1600857275.jpg', 2, 1, 1, '2020-09-23 07:34:35', '2020-09-23 10:34:35', 1),
(6, 'adfsdf', '<p>sadfasdfasdf</p>', 'images/blogs/1600857300.jpg', 2, 1, 0, '2020-09-23 07:35:00', '2020-09-23 10:35:00', 0);

-- --------------------------------------------------------

--
-- بنية الجدول `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main` int(11) NOT NULL,
  `valid` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent`, `main`, `valid`, `created_at`, `updated_at`) VALUES
(1, 'أخبار البلدية', '0', 1, 1, NULL, NULL),
(2, 'أخبار المشاريع', '0', 1, 1, NULL, NULL),
(3, 'إعلانات و عطاءات', '0', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_id` int(11) NOT NULL,
  `valid` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `comments`
--

INSERT INTO `comments` (`id`, `name`, `body`, `blog_id`, `valid`, `created_at`, `updated_at`) VALUES
(1, 'sharif naim', 'Hello wolrd', 3, 1, '2020-09-22 21:00:00', NULL),
(2, 'Mahmoud mrad', 'Hello wolrd test', 3, 1, '2020-09-22 21:00:00', NULL),
(3, 'dsdfsa', 'sdfsdf', 3, 0, '2020-09-23 03:42:26', '2020-09-23 03:42:26'),
(4, 'شريف نعيم', 'مرحبا بكم', 3, 0, '2020-09-23 03:43:03', '2020-09-23 03:43:03'),
(5, 'محمود', 'السلام عليكم', 3, 0, '2020-09-23 03:57:08', '2020-09-23 03:57:08'),
(6, 'محمود', 'السلام عليكم', 3, 0, '2020-09-23 03:57:19', '2020-09-23 03:57:19'),
(7, 'محمود', 'السلام عليكم', 3, 0, '2020-09-23 03:57:22', '2020-09-23 03:57:22'),
(8, 'dfdsf', 'sdfsdf', 3, 0, '2020-09-23 04:06:02', '2020-09-23 04:06:02'),
(9, 'شريف نعيم', 'السلام عليكم و رحمة الله وبركاته', 3, 0, '2020-09-23 04:06:22', '2020-09-23 04:06:22'),
(10, 'عبود مصلج', 'خدمات البلدية سيئة', 3, 0, '2020-09-23 04:07:02', '2020-09-23 04:07:02'),
(11, 'عبود مصلج', 'خدمات البلدية سيئة', 3, 0, '2020-09-23 04:08:21', '2020-09-23 04:08:21'),
(12, 'عبود مصلج', 'خدمات البلدية سيئة', 3, 0, '2020-09-23 04:08:30', '2020-09-23 04:08:30'),
(13, 'sdfasdf', 'sdfsdfsdf', 3, 0, '2020-09-23 04:08:40', '2020-09-23 04:08:40'),
(14, 'asdasd', 'asdasd', 3, 0, '2020-09-23 04:09:59', '2020-09-23 04:09:59'),
(15, 'dfsadf', 'sadfasdf', 3, 0, '2020-09-23 04:20:30', '2020-09-23 04:20:30'),
(16, 'xcvxc', 'xcvzxcv', 3, 0, '2020-09-23 04:29:02', '2020-09-23 04:29:02'),
(17, 'xcvxc', 'xcvzxcv', 3, 0, '2020-09-23 04:29:08', '2020-09-23 04:29:08'),
(18, 'xcvxcv', 'xcvxcv', 3, 0, '2020-09-23 04:31:31', '2020-09-23 04:31:31'),
(19, 'xcvxc', 'xcvxcv', 3, 0, '2020-09-23 04:32:10', '2020-09-23 04:32:10'),
(20, 'xcvxc', 'xcvxcv', 3, 0, '2020-09-23 04:32:13', '2020-09-23 04:32:13'),
(21, 'xcvxc', 'xcvxcv', 3, 0, '2020-09-23 04:32:14', '2020-09-23 04:32:14'),
(22, 'xcvxc', 'xcvxcv', 3, 0, '2020-09-23 04:32:16', '2020-09-23 04:32:16'),
(23, 'سيب', 'سيب', 3, 0, '2020-09-23 04:34:43', '2020-09-23 04:34:43'),
(24, 'dfsd', 'sdfsd', 3, 0, '2020-09-23 04:36:52', '2020-09-23 04:36:52'),
(25, 'dfsd', 'sdfsd', 3, 0, '2020-09-23 04:36:53', '2020-09-23 04:36:53'),
(26, 'ada', 'asdsd', 3, 0, '2020-09-23 04:37:07', '2020-09-23 04:37:07'),
(27, 'ada', 'asdsd', 3, 0, '2020-09-23 04:37:09', '2020-09-23 04:37:09'),
(28, 'asda', 'asdas', 3, 0, '2020-09-23 04:38:56', '2020-09-23 04:38:56'),
(29, 'asdasd', 'asdasd', 3, 0, '2020-09-23 04:40:26', '2020-09-23 04:40:26'),
(30, 'asdasd', 'asdasd', 3, 0, '2020-09-23 04:40:27', '2020-09-23 04:40:27'),
(31, 'aDSD', 'ASDASD', 3, 0, '2020-09-23 04:40:48', '2020-09-23 04:40:48'),
(32, 'aSA', 'ASDASD', 3, 0, '2020-09-23 04:41:49', '2020-09-23 04:41:49'),
(33, 'aSA', 'ASDASD', 3, 0, '2020-09-23 04:41:52', '2020-09-23 04:41:52'),
(34, 'aSA', 'ASDASD', 3, 0, '2020-09-23 04:41:54', '2020-09-23 04:41:54'),
(35, 'aSA', 'ASDASD', 3, 0, '2020-09-23 04:41:58', '2020-09-23 04:41:58'),
(36, 'شسيشس', 'شسيشسي', 3, 0, '2020-09-23 04:44:39', '2020-09-23 04:44:39'),
(37, 'شسيشس', 'شسيشسي', 3, 0, '2020-09-23 04:44:43', '2020-09-23 04:44:43'),
(38, 'شسيشس', 'شسيشسي', 3, 0, '2020-09-23 04:44:44', '2020-09-23 04:44:44'),
(39, 'شسيشس', 'شسيشسي', 3, 0, '2020-09-23 04:44:55', '2020-09-23 04:44:55'),
(40, 'شريف نعيم', 'السلام عليكم و رحمة الله وب ركاته', 3, 0, '2020-09-23 04:45:09', '2020-09-23 04:45:09');

-- --------------------------------------------------------

--
-- بنية الجدول `failed_jobs`
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
-- بنية الجدول `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_09_17_092552_create_blogs_table', 1),
(5, '2020_09_17_092617_create_comments_table', 1),
(6, '2020_09_17_092647_create_categories_table', 1),
(7, '2020_09_20_104621_create_photos_table', 2);

-- --------------------------------------------------------

--
-- بنية الجدول `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `photos`
--

INSERT INTO `photos` (`id`, `blog_id`, `image`, `created_at`, `updated_at`, `title`) VALUES
(1, 3, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'المرحلة الأولى من انشاء المشروع'),
(2, 3, '', '2020-09-23 07:56:08', '0000-00-00 00:00:00', 'مرحلة البدئ بصب القواعد');

-- --------------------------------------------------------

--
-- بنية الجدول `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `key` varchar(25) NOT NULL,
  `value` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'vision', 'نسعى الى تحقيق افضل خدمات للجمهور', '2020-09-20 10:08:05', '0000-00-00 00:00:00'),
(2, 'mission', 'تقديم الخدمات على اكمل وجه', '2020-09-20 10:26:09', '0000-00-00 00:00:00'),
(3, 'message', 'نحن معكم دوما', '2020-09-20 10:09:22', '0000-00-00 00:00:00'),
(4, 'employees', '115', '2020-09-20 10:37:05', '0000-00-00 00:00:00'),
(5, 'citizens', '60000', '2020-09-20 10:40:28', '0000-00-00 00:00:00'),
(6, 'projects', '45', '2020-09-20 10:39:51', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- بنية الجدول `users`
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
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sharif naim', 'sharif@gmail.com', NULL, '$2y$10$X3cYdVKK9NBuOR1WCNKVjeVD9SQPdJi9ib9Lel7ppdtuliLcV1DMe', NULL, '2020-09-23 05:23:02', '2020-09-23 05:23:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
