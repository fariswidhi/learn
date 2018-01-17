-- phpMyAdmin SQL Dump
-- version 4.6.6deb1+deb.cihar.com~xenial.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 17, 2018 at 07:34 AM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.1.12-3+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learn_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id_activity` int(10) UNSIGNED NOT NULL,
  `id_children` int(11) NOT NULL,
  `activity` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id_activity`, `id_children`, `activity`, `type`, `id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, 18, 'Mengerjakan Soal', '2', 1, NULL, '2018-01-16 08:33:06', '2018-01-16 08:33:06');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `true` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `answer`, `id_question`, `true`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, '2', '6', '0', NULL, '2018-01-13 09:31:35', '2018-01-13 09:31:35'),
(5, '3', '6', '1', NULL, '2018-01-13 09:31:35', '2018-01-13 09:31:35'),
(6, '4', '6', '0', NULL, '2018-01-13 09:31:35', '2018-01-13 09:31:35'),
(7, '1', '7', '0', NULL, '2018-01-14 18:38:55', '2018-01-14 18:38:55'),
(8, '4', '7', '1', NULL, '2018-01-14 18:38:55', '2018-01-14 18:38:55'),
(9, '5', '7', '0', NULL, '2018-01-14 18:38:55', '2018-01-14 18:38:55'),
(10, '6', '7', '0', NULL, '2018-01-14 18:38:55', '2018-01-14 18:38:55'),
(11, '4', '8', '1', NULL, '2018-01-16 08:30:19', '2018-01-16 08:30:19'),
(12, '5', '8', '0', NULL, '2018-01-16 08:30:19', '2018-01-16 08:30:19'),
(13, '6', '8', '0', NULL, '2018-01-16 08:30:20', '2018-01-16 08:30:20'),
(14, '7', '8', '0', NULL, '2018-01-16 08:30:20', '2018-01-16 08:30:20'),
(15, '3', '9', '0', NULL, '2018-01-16 08:31:10', '2018-01-16 08:31:10'),
(16, '4', '9', '0', NULL, '2018-01-16 08:31:10', '2018-01-16 08:31:10'),
(17, '5', '9', '0', NULL, '2018-01-16 08:31:10', '2018-01-16 08:31:10'),
(18, '1', '9', '0', NULL, '2018-01-16 08:31:10', '2018-01-16 08:31:10');

-- --------------------------------------------------------

--
-- Table structure for table `childrens`
--

CREATE TABLE `childrens` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `childrens`
--

INSERT INTO `childrens` (`id`, `name`, `username`, `password`, `id_user`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '', 'bagus', 'bagus', 12, NULL, NULL, NULL),
(3, 'Bagus F', 'bagusf', '$2y$10$eHQWYXILwSbAtRuwTzZB2OsVOgT.RAxK.51UVZ0wUSSjX.ztxKI3G', 3, NULL, '2018-01-14 07:19:16', '2018-01-14 07:19:16'),
(4, 'Ronian', 'roni19', '$2y$10$yXTomTE5./noBLU/SpWA2uV2xJx1zIBF76/I1R9IJsVzREPBZ0CGW', 4, NULL, '2018-01-14 17:34:30', '2018-01-14 17:44:44'),
(5, 'ahmad', 'ahmadin', '$2y$10$t.Tmwj3YqiVvSzuPRzRqmuKnO6Sz68PMTdE2rUs2JNS5wG9YsJfKO', 7, NULL, '2018-01-15 17:06:37', '2018-01-15 17:06:37');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_subject` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `name`, `content`, `id_subject`, `id_user`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Materi Trigonometri Bab 1', 'Ini adalah Materi', 4, NULL, NULL, '2018-01-13 06:54:33', '2018-01-13 07:02:00');

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
(3, '2018_01_13_081106_create_childrens_table', 1),
(4, '2018_01_13_081119_create_admins_table', 1),
(5, '2018_01_13_081134_create_subjects_table', 1),
(6, '2018_01_13_081148_create_materials_table', 1),
(7, '2018_01_13_081201_create_modules_table', 1),
(8, '2018_01_13_081215_create_questions_table', 1),
(9, '2018_01_13_081231_create_answers_table', 1),
(10, '2018_01_13_081255_create_users_answers_table', 1),
(11, '2018_01_13_081304_create_points_table', 1),
(12, '2018_01_13_081327_create_activities_table', 1),
(13, '2018_01_13_082622_create_news_table', 1),
(14, '2018_01_13_083211_create_verifications_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `id_subjects` int(11) NOT NULL,
  `subject_number` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `name`, `time`, `description`, `id_subjects`, `subject_number`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Matematika Kelas 10', '90', NULL, 4, 3, NULL, '2018-01-13 07:24:06', '2018-01-13 07:24:06');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Berita 112', 'skljd', NULL, '2018-01-13 07:07:34', '2018-01-13 07:10:43');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE `points` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_module` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `point` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_module` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `name`, `id_module`, `deleted_at`, `created_at`, `updated_at`) VALUES
(6, '1+1=', '1', NULL, '2018-01-13 09:31:35', '2018-01-13 09:31:35'),
(7, 'Pangkat 2 =...', '1', NULL, '2018-01-14 18:38:54', '2018-01-14 18:38:54'),
(8, '2+2 = ...', '1', NULL, '2018-01-16 08:30:19', '2018-01-16 08:30:19'),
(9, '1+4=', '1', NULL, '2018-01-16 08:31:10', '2018-01-16 08:31:10');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'Matematika', '2018-01-13 05:49:11', '2018-01-13 05:49:08', '2018-01-13 05:49:11'),
(3, 'Ipa', '2018-01-13 06:22:33', '2018-01-13 05:55:31', '2018-01-13 06:22:33'),
(4, 'Matematika', NULL, '2018-01-13 06:22:44', '2018-01-13 06:22:44'),
(5, 'Bahasa Indonesia', NULL, '2018-01-14 18:16:53', '2018-01-14 18:16:53'),
(6, 'Ilmu Pengetahuan Alam', NULL, '2018-01-14 18:17:07', '2018-01-14 18:17:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_parent` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `type`, `phone`, `address`, `gender`, `active`, `id_parent`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ahmad@ahmad.com', 'ahmad.barjo@gmail.com', '', '$2y$10$.KUBYb5JkYdPtrFnse1mRepMfdq42WacTu7yhOKpFKwQl8QBrAZAu', '2', '0895322931444', NULL, 'laki-laki', '0', NULL, NULL, '2018-01-13 02:28:18', '2018-01-13 02:28:18'),
(2, 'Ahmad', 'Ahmadbarjo@gmail.com', '', '$2y$10$K2d6PLB.yXJLgmXbCUiYVu/Cb6BBbYeWRx/g9FUClhORf8D5r9CCq', '2', '0895322931444', NULL, 'laki-laki', '0', NULL, NULL, '2018-01-14 01:11:09', '2018-01-14 01:11:09'),
(3, 'faris', 'fariswidhi@gmail.com', '', '$2y$10$E/gtUwlI7.wR2UOvb07iKO5J62zVuwCWRum8CJjHAm5Y5rw1khqtO', '2', '0895322931444', NULL, 'laki-laki', '0', NULL, NULL, '2018-01-14 06:54:42', '2018-01-14 06:54:42'),
(4, 'Bambang', 'bambang@gmail.com', '', '$2y$10$3QqfvgYNaiUZMYGXbuDlquPDJiavfL9L9TRot8qeaDG731Qcvvzg.', '2', '0895322931444', NULL, 'laki-laki', '0', NULL, 'zWhMKAaxtZgT1kcBeVjDrtn4mQXREaGPPTKusbm0QHpOJeERD6pRCz4zZ4IU', '2018-01-14 17:31:27', '2018-01-14 17:31:27'),
(5, 'budi', 'budi12@gmail.com', '', '$2y$10$aBXtT.UF..O7jMP0ccvlTuctx1390O3gzkmv7F3zO8yVVZsdywQXm', '2', '0895322931444', NULL, 'laki-laki', '0', NULL, 'BJaOk9GsVznyHJ9xF7Qw9XOmkn3HP9ijDV0OIIashVrdSLnnbyDJeFJnWbqr', '2018-01-14 18:10:10', '2018-01-14 18:10:10'),
(6, 'Ahmad Budiawan', 'ahmadbudi123@gmail.com', '', '$2y$10$ylsPixS29xDRm/J/FglqrukjKFR/4G8g2UnAweW/y1fL.bhOfw7/u', '2', '0895322931444', NULL, 'laki-laki', '0', NULL, NULL, '2018-01-14 19:05:47', '2018-01-14 19:05:47'),
(7, 'Yanto', 'suyanto@gmail.com', '', '$2y$10$CuE2kVZCvt9BWB4UZ4dP2ezfrXHePnkNQnhpSqmvEFv0lnUfPqRZG', '2', '0895322931444', NULL, 'laki-laki', '0', NULL, 'zlqF3DZPo519xqzsvnaC7Cc2kJTvWw7KvUttkz0u0xjaXHbk05zwylQ2tepz', '2018-01-15 17:05:23', '2018-01-15 17:05:23'),
(8, 'yanto', 'yanto@gmail.com', 'yanto', '$2y$10$BccOfsmYI2S9PwNJk/nJx./MD7OopFhHcZwlJ7rmdDfHj3APZfc5y', '2', '08211233423', NULL, 'laki-laki', '0', NULL, 'pTIYU60jVwPj8OGWSdIbghxwcYtwRoioYM5xHsOsc4Oapw8AfCWEga8TzAQb', '2018-01-15 17:40:16', '2018-01-15 17:40:16'),
(9, 'Toni', NULL, 'toni', '$2y$10$9nm2k.wQZob.xt1rj7V28OXaJw7kwDUenec19vSY0Pwhg0x74czvK', '3', NULL, NULL, NULL, '1', 8, NULL, '2018-01-15 20:39:12', '2018-01-15 20:39:49'),
(10, 'yanto', 'yanto@yahoo.com', 'yanto12', '$2y$10$OL6b9.ZeaP7ba0INSO6hJ.Sl6SW6pPKWkZEXiY52tfWYTADSiRV2K', '2', '018276543', NULL, 'laki-laki', '0', NULL, 'c3K2MPJrdPYPaxrPPTryuO9m98rUjfQjhANnFjqHwhU9jUhPP06NVWhzu1aD', '2018-01-15 21:02:29', '2018-01-15 21:02:29'),
(11, 'toni abdullah', NULL, 'tonia', '$2y$10$bf05phynlovD2mCdisv9sOdCmS5sCBkFOqsLN.l1E27YKIBygrALS', '3', NULL, NULL, NULL, '1', 10, NULL, '2018-01-15 21:02:56', '2018-01-15 21:02:56'),
(12, 'budi', 'budi@mail.com', 'budiawan', '$2y$10$DhVKfR4ZhrrfwK4IAniUE.NMdVcgxg/f5f.HigDht3u4Yhs4dPjGW', '2', '0812712', NULL, 'laki-laki', '0', NULL, 'A6tTGcrrfmnZG379tZgjWrzawNoDvB2hRMR1mZ6dBQvS0xNwWTefSmGtch0R', '2018-01-15 21:09:23', '2018-01-15 21:09:23'),
(14, 'ahmad budiawan', 'budiawan@mail.com', 'budiawan19', '$2y$10$6oxYUzhCxOrv99AVsd6vv.vWrJHrqqGj3SbNXRLKGVdJfMDBFTOtK', '3', NULL, NULL, NULL, '1', 12, 'eoMmIj5A90m24dlvIYocFvPToFBnizmmtzaIdNgAdzJs0AYxdrxMjzoeL16e', '2018-01-15 21:19:08', '2018-01-15 21:19:08'),
(15, 'jjj', 'jjj@gmail.com', 'username', '$2y$10$4HiTSEr459ggeW9sdUhzWOseyrISz0oIcei0RDVsT.URWoe0Ec.0.', '2', '9929929299', NULL, 'laki-laki', '0', NULL, 'V5f5uuECg3e4kbMEVx1swiua4742TTmu8YijMBmskOLxgoXrksr9xb3dAMFr', '2018-01-15 21:47:46', '2018-01-15 21:47:46'),
(16, 'faris', 'fariswidhiarta123@gmail.com', 'faris', '$2y$10$T3yURq0j9Boi/578vRcNUu/M2D3uP2f22z7Qb1cFhZywDSoX6HUAi', '3', NULL, NULL, NULL, '1', 15, 'BmY2MDkNw509x54JSJR3Z5Ku22mp4pXOT3Zw843jxCKgdOA6fcMRcxOcMl9W', '2018-01-15 21:49:01', '2018-01-15 21:49:01'),
(17, 'adam', 'adam@adam.com', 'admin', '$2y$10$k5LTN7hEsvYDu0GtjnsAG.KfvPe2VD2S.Rh7JAtG5p2J1MbC0k5ce', '2', '08182812', NULL, 'laki-laki', '0', NULL, 'QDGDayIg0GnjhhIYYKV8myTeNJiPgyyjQ0BPPmr8KMvP5SMUJjGEJM1Qebvy', '2018-01-15 22:27:51', '2018-01-15 22:27:51'),
(18, 'maryono', 'maryono@gmail.com', 'maryono', '$2y$10$M9PyJV3FHZ..HKN1r7Tm1eAWd9VVCo10GuJT0NPZshEQfrjWzP1s6', '3', NULL, NULL, NULL, '1', 8, 'Zl89HgHf8deRCmqd9p9TcmXAg8gYP2xpz8BBUoGnTccqI2NizuJ4Podo2REa', '2018-01-16 06:50:56', '2018-01-16 06:52:08');

-- --------------------------------------------------------

--
-- Table structure for table `users_answers`
--

CREATE TABLE `users_answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_children` int(11) NOT NULL,
  `id_question` int(11) NOT NULL,
  `id_answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sessid` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `verifications`
--

CREATE TABLE `verifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `verification_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id_activity`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `childrens`
--
ALTER TABLE `childrens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_answers`
--
ALTER TABLE `users_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verifications`
--
ALTER TABLE `verifications`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id_activity` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `childrens`
--
ALTER TABLE `childrens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `points`
--
ALTER TABLE `points`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users_answers`
--
ALTER TABLE `users_answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `verifications`
--
ALTER TABLE `verifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
