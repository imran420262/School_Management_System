-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2023 at 04:03 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_employee_salaries`
--

CREATE TABLE `account_employee_salaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL COMMENT 'employee_id=user_id',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `bonous_amount` double DEFAULT NULL,
  `bonous_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_employee_salaries`
--

INSERT INTO `account_employee_salaries` (`id`, `employee_id`, `date`, `amount`, `bonous_amount`, `bonous_name`, `created_at`, `updated_at`) VALUES
(77, 44, '2022-08', 30000, NULL, NULL, '2022-08-12 09:23:17', '2022-08-12 09:23:17'),
(78, 45, '2022-08', 50000, NULL, NULL, '2022-08-12 09:23:17', '2022-08-12 09:23:17'),
(79, 46, '2022-08', 20000, 20000, 'Actavity bonus', '2022-08-12 09:23:17', '2022-08-12 09:23:17'),
(80, 47, '2022-08', 15000, NULL, NULL, '2022-08-12 09:23:17', '2022-08-12 09:23:17');

-- --------------------------------------------------------

--
-- Table structure for table `account_other_costs`
--

CREATE TABLE `account_other_costs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_other_costs`
--

INSERT INTO `account_other_costs` (`id`, `date`, `amount`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, '2022-08-10', 1000, 'Internet Bill', NULL, '2022-08-12 09:29:06', '2022-08-12 09:29:06');

-- --------------------------------------------------------

--
-- Table structure for table `account_student_fees`
--

CREATE TABLE `account_student_fees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `fee_category_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `medium` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trx_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_student_fees`
--

INSERT INTO `account_student_fees` (`id`, `year_id`, `class_id`, `student_id`, `fee_category_id`, `date`, `amount`, `medium`, `trx_no`, `created_at`, `updated_at`) VALUES
(158, 6, 6, 48, 1, '2022-01-02', 15000, NULL, NULL, '2022-07-22 14:08:57', '2022-07-22 14:08:57'),
(159, 6, 6, 49, 1, '2022-01-02', 15000, NULL, NULL, '2022-07-22 14:08:57', '2022-07-22 14:08:57'),
(160, 6, 6, 50, 1, '2022-01-02', 15000, NULL, NULL, '2022-07-22 14:08:57', '2022-07-22 14:08:57'),
(161, 6, 6, 52, 1, '2022-01-02', 15000, NULL, NULL, '2022-07-22 14:08:57', '2022-07-22 14:08:57'),
(162, 6, 6, 60, 1, '2022-01-02', 15000, NULL, NULL, '2022-07-22 14:08:57', '2022-07-22 14:08:57'),
(163, 6, 6, 63, 1, '2022-01-02', 15000, NULL, NULL, '2022-07-22 14:08:57', '2022-07-22 14:08:57'),
(164, 6, 6, 72, 1, '2022-01-02', 15000, NULL, NULL, '2022-07-22 14:08:57', '2022-07-22 14:08:57'),
(165, 6, 6, 73, 1, '2022-01-02', 15000, NULL, NULL, '2022-07-22 14:08:57', '2022-07-22 14:08:57'),
(166, 6, 6, 74, 1, '2022-01-02', 15000, NULL, NULL, '2022-07-22 14:08:57', '2022-07-22 14:08:57'),
(167, 6, 6, 81, 1, '2022-01-02', 15000, NULL, NULL, '2022-07-22 14:08:57', '2022-07-22 14:08:57'),
(168, 6, 8, 53, 1, '2022-01-01', 15000, NULL, NULL, '2022-07-22 14:09:41', '2022-07-22 14:09:41'),
(169, 6, 8, 54, 1, '2022-01-01', 15000, NULL, NULL, '2022-07-22 14:09:41', '2022-07-22 14:09:41'),
(170, 6, 8, 55, 1, '2022-01-01', 15000, NULL, NULL, '2022-07-22 14:09:41', '2022-07-22 14:09:41'),
(171, 6, 8, 56, 1, '2022-01-01', 15000, NULL, NULL, '2022-07-22 14:09:41', '2022-07-22 14:09:41'),
(172, 6, 8, 62, 1, '2022-01-01', 15000, NULL, NULL, '2022-07-22 14:09:41', '2022-07-22 14:09:41'),
(173, 6, 8, 64, 1, '2022-01-01', 15000, NULL, NULL, '2022-07-22 14:09:41', '2022-07-22 14:09:41'),
(174, 6, 8, 66, 1, '2022-01-01', 15000, NULL, NULL, '2022-07-22 14:09:41', '2022-07-22 14:09:41'),
(175, 6, 8, 69, 1, '2022-01-01', 15000, NULL, NULL, '2022-07-22 14:09:41', '2022-07-22 14:09:41'),
(176, 6, 8, 70, 1, '2022-01-01', 15000, NULL, NULL, '2022-07-22 14:09:41', '2022-07-22 14:09:41'),
(177, 6, 8, 77, 1, '2022-01-01', 15000, NULL, NULL, '2022-07-22 14:09:41', '2022-07-22 14:09:41'),
(178, 6, 8, 78, 1, '2022-01-01', 15000, NULL, NULL, '2022-07-22 14:09:41', '2022-07-22 14:09:41'),
(179, 6, 8, 79, 1, '2022-01-01', 15000, NULL, NULL, '2022-07-22 14:09:41', '2022-07-22 14:09:41'),
(180, 6, 8, 83, 1, '2022-01-01', 15000, NULL, NULL, '2022-07-22 14:09:41', '2022-07-22 14:09:41'),
(181, 6, 8, 53, 2, '2022-07-21', 9750, 'cash', NULL, '2022-07-22 14:49:13', '2022-07-22 14:49:13'),
(182, 6, 8, 54, 2, '2022-07-21', 6000, 'cash', NULL, '2022-07-22 14:49:13', '2022-07-22 14:49:13'),
(183, 6, 8, 55, 2, '2022-07-21', 10500, 'cash', NULL, '2022-07-22 14:49:13', '2022-07-22 14:49:13'),
(184, 6, 8, 56, 2, '2022-07-21', 9000, 'cash', NULL, '2022-07-22 14:49:13', '2022-07-22 14:49:13'),
(185, 6, 8, 62, 2, '2022-07-21', 8250, 'cash', NULL, '2022-07-22 14:49:13', '2022-07-22 14:49:13'),
(186, 6, 8, 64, 2, '2022-07-21', 12600, 'cash', NULL, '2022-07-22 14:49:13', '2022-07-22 14:49:13'),
(187, 6, 8, 66, 2, '2022-07-21', 10500, 'cash', NULL, '2022-07-22 14:49:13', '2022-07-22 14:49:13'),
(188, 6, 8, 69, 2, '2022-07-21', 11250, 'cash', NULL, '2022-07-22 14:49:13', '2022-07-22 14:49:13'),
(189, 6, 8, 70, 2, '2022-07-21', 14100, 'cash', NULL, '2022-07-22 14:49:13', '2022-07-22 14:49:13'),
(190, 6, 8, 77, 2, '2022-07-21', 10500, 'cash', NULL, '2022-07-22 14:49:13', '2022-07-22 14:49:13'),
(191, 6, 8, 78, 2, '2022-07-21', 12600, 'cash', NULL, '2022-07-22 14:49:13', '2022-07-22 14:49:13'),
(192, 6, 8, 79, 2, '2022-07-21', 10500, 'cash', NULL, '2022-07-22 14:49:13', '2022-07-22 14:49:13'),
(193, 6, 8, 83, 2, '2022-07-21', 10500, 'cash', NULL, '2022-07-22 14:49:13', '2022-07-22 14:49:13'),
(194, 6, 9, 51, 1, '2022-01-01', 11000, 'cash', NULL, '2022-07-22 14:50:26', '2022-07-22 14:50:26'),
(195, 6, 9, 58, 1, '2022-01-01', 11000, 'cash', NULL, '2022-07-22 14:50:26', '2022-07-22 14:50:26'),
(196, 6, 9, 59, 1, '2022-01-01', 11000, 'cash', NULL, '2022-07-22 14:50:26', '2022-07-22 14:50:26'),
(197, 6, 9, 68, 1, '2022-01-01', 11000, 'cash', NULL, '2022-07-22 14:50:26', '2022-07-22 14:50:26'),
(198, 6, 9, 76, 1, '2022-01-01', 11000, 'cash', NULL, '2022-07-22 14:50:26', '2022-07-22 14:50:26'),
(199, 6, 9, 80, 1, '2022-01-01', 11000, 'cash', NULL, '2022-07-22 14:50:26', '2022-07-22 14:50:26'),
(200, 6, 9, 84, 1, '2022-01-01', 11000, 'cash', NULL, '2022-07-22 14:50:26', '2022-07-22 14:50:26'),
(201, 6, 6, 48, 2, '2022-01-01', 4000, 'cash', NULL, '2022-07-22 14:51:45', '2022-07-22 14:51:45'),
(202, 6, 6, 49, 2, '2022-01-01', 4250, 'cash', NULL, '2022-07-22 14:51:45', '2022-07-22 14:51:45'),
(203, 6, 6, 50, 2, '2022-01-01', 4250, 'cash', NULL, '2022-07-22 14:51:45', '2022-07-22 14:51:45'),
(204, 6, 6, 52, 2, '2022-01-01', 4100, 'cash', NULL, '2022-07-22 14:51:45', '2022-07-22 14:51:45'),
(205, 6, 6, 60, 2, '2022-01-01', 4200, 'cash', NULL, '2022-07-22 14:51:45', '2022-07-22 14:51:45'),
(206, 6, 6, 63, 2, '2022-01-01', 4200, 'cash', NULL, '2022-07-22 14:51:45', '2022-07-22 14:51:45'),
(207, 6, 6, 72, 2, '2022-01-01', 3500, 'cash', NULL, '2022-07-22 14:51:45', '2022-07-22 14:51:45'),
(208, 6, 6, 73, 2, '2022-01-01', 3500, 'cash', NULL, '2022-07-22 14:51:45', '2022-07-22 14:51:45'),
(209, 6, 6, 74, 2, '2022-01-01', 4400, 'cash', NULL, '2022-07-22 14:51:45', '2022-07-22 14:51:45'),
(210, 6, 6, 81, 2, '2022-01-01', 3500, 'cash', NULL, '2022-07-22 14:51:45', '2022-07-22 14:51:45'),
(211, 6, 6, 48, 2, '2022-02-01', 4000, 'cash', NULL, '2022-07-22 14:52:51', '2022-07-22 14:52:51'),
(212, 6, 6, 49, 2, '2022-02-01', 4250, 'cash', NULL, '2022-07-22 14:52:51', '2022-07-22 14:52:51'),
(213, 6, 6, 50, 2, '2022-02-01', 4250, 'cash', NULL, '2022-07-22 14:52:51', '2022-07-22 14:52:51'),
(214, 6, 6, 52, 2, '2022-02-01', 4100, 'cash', NULL, '2022-07-22 14:52:51', '2022-07-22 14:52:51'),
(215, 6, 6, 60, 2, '2022-02-01', 4200, 'cash', NULL, '2022-07-22 14:52:51', '2022-07-22 14:52:51'),
(216, 6, 6, 72, 2, '2022-02-01', 3500, 'cash', NULL, '2022-07-22 14:52:51', '2022-07-22 14:52:51'),
(217, 6, 6, 73, 2, '2022-02-01', 3500, 'cash', NULL, '2022-07-22 14:52:51', '2022-07-22 14:52:51'),
(218, 6, 6, 74, 2, '2022-02-01', 4400, 'cash', NULL, '2022-07-22 14:52:51', '2022-07-22 14:52:51'),
(219, 6, 6, 81, 2, '2022-02-01', 3500, 'cash', NULL, '2022-07-22 14:52:51', '2022-07-22 14:52:51'),
(220, 6, 6, 48, 2, '2022-08-01', 4000, 'cash', NULL, '2022-08-12 09:26:46', '2022-08-12 09:26:46'),
(221, 6, 6, 49, 2, '2022-08-01', 4250, 'cash', NULL, '2022-08-12 09:26:46', '2022-08-12 09:26:46'),
(222, 6, 6, 50, 2, '2022-08-01', 4250, 'cash', NULL, '2022-08-12 09:26:46', '2022-08-12 09:26:46'),
(223, 6, 6, 52, 2, '2022-08-01', 4100, 'cash', NULL, '2022-08-12 09:26:46', '2022-08-12 09:26:46'),
(224, 6, 6, 60, 2, '2022-08-01', 4200, 'cash', NULL, '2022-08-12 09:26:46', '2022-08-12 09:26:46'),
(225, 6, 6, 63, 2, '2022-08-01', 4200, 'cash', NULL, '2022-08-12 09:26:46', '2022-08-12 09:26:46'),
(226, 6, 6, 72, 2, '2022-08-01', 3500, 'cash', NULL, '2022-08-12 09:26:46', '2022-08-12 09:26:46'),
(227, 6, 6, 73, 2, '2022-08-01', 3500, 'cash', NULL, '2022-08-12 09:26:46', '2022-08-12 09:26:46'),
(228, 6, 6, 74, 2, '2022-08-01', 4400, 'cash', NULL, '2022-08-12 09:26:46', '2022-08-12 09:26:46'),
(229, 6, 6, 81, 2, '2022-08-01', 3500, 'cash', NULL, '2022-08-12 09:26:46', '2022-08-12 09:26:46');

-- --------------------------------------------------------

--
-- Table structure for table `admission_forms`
--

CREATE TABLE `admission_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shift_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_document_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `action_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admission_forms`
--

INSERT INTO `admission_forms` (`id`, `name`, `email`, `mobile`, `address`, `gender`, `fname`, `mname`, `religion`, `dob`, `image`, `student_document`, `class_id`, `group_id`, `shift_id`, `id_document_no`, `status`, `action_by`, `created_at`, `updated_at`) VALUES
(11, 'Madaline Bruen', 'your.email+fakedata43397@gmail.com', '297-029-4086', '29021 Koss Park', 'female', 'Caden Fritsch', 'Alexzander Rippin', 'Christan', '2021-10-26', '54919.png', '37823.pdf', '6', '3', '1', '325', 'pending', NULL, '2022-07-22 13:01:44', '2022-07-22 13:01:44'),
(12, 'Imogene Dare', 'your.email+fakedata56760@gmail.com', '01750089881', '57862 Chyna Rapid', 'male', 'Jared Pouros', 'Gabrielle Hermann', 'Islam', '2022-09-01', '91948.png', '55893.pdf', '8', '2', '1', '592', 'pending', NULL, '2022-07-23 07:46:52', '2022-07-23 07:46:52');

-- --------------------------------------------------------

--
-- Table structure for table `assign_students`
--

CREATE TABLE `assign_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL COMMENT 'user_id=student_id',
  `roll` int(11) DEFAULT NULL,
  `class_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `shift_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign_students`
--

INSERT INTO `assign_students` (`id`, `student_id`, `roll`, `class_id`, `year_id`, `group_id`, `shift_id`, `created_at`, `updated_at`) VALUES
(27, 48, 1, 6, 6, 3, 1, '2022-07-22 12:17:37', '2022-07-22 13:31:12'),
(28, 49, NULL, 6, 6, 3, 1, '2022-07-22 12:21:31', '2022-07-22 12:21:31'),
(29, 50, 1, 6, 6, 3, 2, '2022-07-22 12:23:39', '2022-07-22 13:57:35'),
(30, 51, 2, 9, 6, 3, 2, '2022-07-22 12:25:51', '2022-07-22 13:57:10'),
(31, 52, NULL, 6, 6, 3, 1, '2022-07-22 12:27:57', '2022-07-22 12:44:51'),
(32, 53, 1, 8, 6, 2, 2, '2022-07-22 12:29:33', '2022-07-22 14:00:11'),
(33, 54, 1, 8, 6, 1, 1, '2022-07-22 12:31:11', '2022-07-22 13:59:22'),
(34, 55, NULL, 8, 6, 2, 1, '2022-07-22 12:32:45', '2022-07-22 12:32:45'),
(35, 56, NULL, 8, 6, 2, 1, '2022-07-22 12:34:19', '2022-07-22 12:34:19'),
(37, 58, 3, 9, 6, 3, 2, '2022-07-22 12:35:53', '2022-07-22 13:57:10'),
(38, 59, 4, 9, 6, 3, 2, '2022-07-22 12:36:54', '2022-07-22 13:57:10'),
(39, 60, 5, 6, 6, 3, 2, '2022-07-22 12:37:34', '2022-07-22 13:57:35'),
(41, 62, NULL, 8, 6, 2, 1, '2022-07-22 12:38:25', '2022-07-22 12:38:25'),
(42, 63, 6, 6, 6, 3, 2, '2022-07-22 12:39:09', '2022-07-22 13:57:35'),
(43, 64, 1, 8, 6, 1, 2, '2022-07-22 12:39:48', '2022-07-22 13:59:40'),
(45, 66, 2, 8, 6, 2, 2, '2022-07-22 12:40:35', '2022-07-22 14:00:11'),
(47, 68, 4, 9, 6, 3, 1, '2022-07-22 12:41:33', '2022-07-22 13:59:00'),
(48, 69, NULL, 8, 6, 2, 1, '2022-07-22 12:43:11', '2022-07-22 12:43:11'),
(49, 70, 2, 8, 6, 1, 2, '2022-07-22 12:46:05', '2022-07-22 13:59:40'),
(51, 72, 7, 6, 6, 3, 2, '2022-07-22 12:46:45', '2022-07-22 13:57:35'),
(52, 73, NULL, 6, 6, 3, 1, '2022-07-22 12:47:20', '2022-07-22 12:47:20'),
(53, 74, NULL, 6, 6, 3, 1, '2022-07-22 12:47:54', '2022-07-22 12:47:54'),
(55, 76, 7, 9, 6, 3, 1, '2022-07-22 12:48:54', '2022-07-22 13:59:00'),
(56, 77, 3, 8, 6, 1, 2, '2022-07-22 12:51:40', '2022-07-22 13:59:40'),
(57, 78, 3, 8, 6, 2, 2, '2022-07-22 13:00:16', '2022-07-22 14:00:11'),
(58, 79, 4, 8, 6, 2, 2, '2022-07-22 13:08:09', '2022-07-22 14:00:11'),
(59, 80, 8, 9, 6, 3, 1, '2022-07-22 13:08:45', '2022-07-22 13:59:00'),
(60, 81, NULL, 6, 6, 3, 1, '2022-07-22 13:09:26', '2022-07-22 13:09:26'),
(62, 83, 2, 8, 6, 1, 1, '2022-07-22 13:10:15', '2022-07-22 13:59:22'),
(63, 84, 8, 9, 6, 3, 2, '2022-07-22 13:11:29', '2022-07-22 13:57:10');

-- --------------------------------------------------------

--
-- Table structure for table `assign_subjects`
--

CREATE TABLE `assign_subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `full_mark` double NOT NULL,
  `pass_mark` double NOT NULL,
  `subjective_mark` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign_subjects`
--

INSERT INTO `assign_subjects` (`id`, `group_id`, `class_id`, `subject_id`, `full_mark`, `pass_mark`, `subjective_mark`, `created_at`, `updated_at`) VALUES
(53, 3, 9, 30, 100, 35, 0, '2022-07-23 02:42:14', '2022-07-23 02:42:14'),
(54, 3, 9, 30, 100, 35, 0, '2022-07-23 02:42:14', '2022-07-23 02:42:14'),
(55, 3, 9, 30, 100, 35, 0, '2022-07-23 02:42:14', '2022-07-23 02:42:14'),
(56, 3, 9, 31, 100, 35, 0, '2022-07-23 02:42:14', '2022-07-23 02:42:14'),
(57, 1, 8, 34, 100, 30, 0, '2022-07-23 02:42:54', '2022-07-23 02:42:54'),
(58, 1, 8, 35, 100, 30, 0, '2022-07-23 02:42:54', '2022-07-23 02:42:54'),
(59, 2, 8, 36, 100, 35, 0, '2022-07-23 02:43:34', '2022-07-23 02:43:34'),
(60, 2, 8, 37, 100, 35, 0, '2022-07-23 02:43:34', '2022-07-23 02:43:34'),
(61, 3, 6, 32, 100, 35, 0, '2022-07-23 02:44:14', '2022-07-23 02:44:14'),
(62, 3, 6, 33, 100, 35, 0, '2022-07-23 02:44:14', '2022-07-23 02:44:14');

-- --------------------------------------------------------

--
-- Table structure for table `assign_teacher_subjects`
--

CREATE TABLE `assign_teacher_subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `shift_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign_teacher_subjects`
--

INSERT INTO `assign_teacher_subjects` (`id`, `teacher_id`, `subject_id`, `shift_id`, `created_at`, `updated_at`) VALUES
(51, 44, 30, 1, '2022-07-23 03:15:36', '2022-07-23 03:15:36'),
(52, 44, 31, 1, '2022-07-23 03:15:36', '2022-07-23 03:15:36'),
(53, 44, 30, 2, '2022-07-23 03:15:36', '2022-07-23 03:15:36'),
(54, 44, 31, 2, '2022-07-23 03:15:36', '2022-07-23 03:15:36'),
(55, 44, 32, 1, '2022-07-23 03:15:36', '2022-07-23 03:15:36'),
(56, 44, 33, 1, '2022-07-23 03:15:36', '2022-07-23 03:15:36'),
(57, 45, 32, 2, '2022-07-23 03:16:36', '2022-07-23 03:16:36'),
(58, 45, 33, 2, '2022-07-23 03:16:36', '2022-07-23 03:16:36'),
(59, 45, 34, 1, '2022-07-23 03:16:36', '2022-07-23 03:16:36'),
(60, 45, 35, 1, '2022-07-23 03:16:36', '2022-07-23 03:16:36'),
(61, 45, 34, 2, '2022-07-23 03:16:36', '2022-07-23 03:16:36'),
(62, 45, 35, 2, '2022-07-23 03:16:36', '2022-07-23 03:16:36'),
(63, 46, 36, 1, '2022-07-23 03:18:06', '2022-07-23 03:18:06'),
(64, 46, 37, 1, '2022-07-23 03:18:06', '2022-07-23 03:18:06'),
(65, 46, 36, 2, '2022-07-23 03:18:06', '2022-07-23 03:18:06'),
(66, 46, 37, 2, '2022-07-23 03:18:06', '2022-07-23 03:18:06');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Head Teacher', '2021-12-09 05:49:08', '2021-12-10 07:50:21'),
(2, 'Assistant Teacher', '2021-12-09 05:49:25', '2021-12-09 05:49:25'),
(3, 'Teacher', '2021-12-09 05:49:39', '2021-12-09 05:50:17');

-- --------------------------------------------------------

--
-- Table structure for table `discount_students`
--

CREATE TABLE `discount_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `assign_student_id` int(11) NOT NULL,
  `fee_category_id` int(11) DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discount_students`
--

INSERT INTO `discount_students` (`id`, `assign_student_id`, `fee_category_id`, `discount`, `created_at`, `updated_at`) VALUES
(27, 27, 1, 20, '2022-07-22 12:17:37', '2022-07-22 12:17:37'),
(28, 28, 1, 15, '2022-07-22 12:21:31', '2022-07-22 12:21:31'),
(29, 29, 1, 15, '2022-07-22 12:23:39', '2022-07-22 12:23:39'),
(30, 30, 1, 12, '2022-07-22 12:25:51', '2022-07-22 12:25:51'),
(31, 31, 1, 18, '2022-07-22 12:27:57', '2022-07-22 12:27:57'),
(32, 32, 1, 35, '2022-07-22 12:29:33', '2022-07-22 12:29:33'),
(33, 33, 1, 60, '2022-07-22 12:31:11', '2022-07-22 12:31:11'),
(34, 34, 1, 30, '2022-07-22 12:32:45', '2022-07-22 12:32:45'),
(35, 35, 1, 40, '2022-07-22 12:34:19', '2022-07-22 12:34:19'),
(36, 37, 1, 45, '2022-07-22 12:35:53', '2022-07-22 12:35:53'),
(37, 38, 1, 13, '2022-07-22 12:36:55', '2022-07-22 12:36:55'),
(38, 39, 1, 16, '2022-07-22 12:37:34', '2022-07-22 12:37:34'),
(39, 41, 1, 45, '2022-07-22 12:38:25', '2022-07-22 12:38:25'),
(40, 42, 1, 16, '2022-07-22 12:39:09', '2022-07-22 12:39:09'),
(41, 43, 1, 16, '2022-07-22 12:39:48', '2022-07-22 12:39:48'),
(42, 45, 1, 30, '2022-07-22 12:40:35', '2022-07-22 12:40:35'),
(43, 47, 1, 20, '2022-07-22 12:41:33', '2022-07-22 12:41:33'),
(44, 48, 1, 25, '2022-07-22 12:43:11', '2022-07-22 12:43:11'),
(45, 49, 1, 6, '2022-07-22 12:46:05', '2022-07-22 12:46:05'),
(46, 51, 1, 30, '2022-07-22 12:46:45', '2022-07-22 12:46:45'),
(47, 52, 1, 30, '2022-07-22 12:47:20', '2022-07-22 12:47:20'),
(48, 53, 1, 12, '2022-07-22 12:47:54', '2022-07-22 12:47:54'),
(49, 55, 1, 12, '2022-07-22 12:48:54', '2022-07-22 12:48:54'),
(50, 56, 1, 30, '2022-07-22 12:51:40', '2022-07-22 12:51:40'),
(51, 57, 1, 16, '2022-07-22 13:00:16', '2022-07-22 13:00:16'),
(52, 58, 1, 30, '2022-07-22 13:08:09', '2022-07-22 13:08:09'),
(53, 59, 1, 75, '2022-07-22 13:08:45', '2022-07-22 13:08:45'),
(54, 60, 1, 30, '2022-07-22 13:09:26', '2022-07-22 13:09:26'),
(55, 62, 1, 30, '2022-07-22 13:10:15', '2022-07-22 13:10:15'),
(56, 63, 1, 20, '2022-07-22 13:11:29', '2022-07-22 13:11:29');

-- --------------------------------------------------------

--
-- Table structure for table `employee_attendances`
--

CREATE TABLE `employee_attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL COMMENT 'employee_id=user_id',
  `date` date NOT NULL,
  `attend_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_attendances`
--

INSERT INTO `employee_attendances` (`id`, `employee_id`, `date`, `attend_status`, `created_at`, `updated_at`) VALUES
(92, 44, '2022-08-11', 'Present', '2022-08-12 09:19:26', '2022-08-12 09:19:26'),
(93, 45, '2022-08-11', 'Present', '2022-08-12 09:19:26', '2022-08-12 09:19:26'),
(94, 46, '2022-08-11', 'Present', '2022-08-12 09:19:26', '2022-08-12 09:19:26'),
(95, 47, '2022-08-11', 'Present', '2022-08-12 09:19:26', '2022-08-12 09:19:26'),
(96, 44, '2022-08-12', 'Present', '2022-08-12 09:19:36', '2022-08-12 09:19:36'),
(97, 45, '2022-08-12', 'Leave', '2022-08-12 09:19:36', '2022-08-12 09:19:36'),
(98, 46, '2022-08-12', 'Present', '2022-08-12 09:19:36', '2022-08-12 09:19:36'),
(99, 47, '2022-08-12', 'Present', '2022-08-12 09:19:36', '2022-08-12 09:19:36');

-- --------------------------------------------------------

--
-- Table structure for table `employee_leaves`
--

CREATE TABLE `employee_leaves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL COMMENT 'employee_id=user_id',
  `leave_purpose_id` int(11) NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `status_action_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_leaves`
--

INSERT INTO `employee_leaves` (`id`, `employee_id`, `leave_purpose_id`, `status`, `status_action_by`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(10, 46, 1, 'Pending', NULL, '2022-07-25', '2022-07-29', '2022-07-23 05:10:18', '2022-07-23 05:10:18'),
(11, 44, 1, 'Pending', NULL, '2022-08-14', '2022-08-15', '2022-08-12 15:51:49', '2022-08-12 15:51:49');

-- --------------------------------------------------------

--
-- Table structure for table `employee_sallary_logs`
--

CREATE TABLE `employee_sallary_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL COMMENT 'employee_id=User_id',
  `previous_salary` int(11) DEFAULT NULL,
  `present_salary` int(11) DEFAULT NULL,
  `increment_salary` int(11) DEFAULT NULL,
  `effected_salary` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_sallary_logs`
--

INSERT INTO `employee_sallary_logs` (`id`, `employee_id`, `previous_salary`, `present_salary`, `increment_salary`, `effected_salary`, `created_at`, `updated_at`) VALUES
(10, 44, 30000, 30000, 0, '2022-01-01', '2022-07-22 11:41:48', '2022-07-22 11:41:48'),
(11, 45, 50000, 50000, 0, '2022-01-01', '2022-07-22 11:44:17', '2022-07-22 11:44:17'),
(12, 46, 20000, 20000, 0, '2022-01-01', '2022-07-22 11:49:34', '2022-07-22 11:49:34'),
(13, 47, 15000, 15000, 0, '2022-01-01', '2022-07-22 12:12:20', '2022-07-22 12:12:20');

-- --------------------------------------------------------

--
-- Table structure for table `exam_schedules`
--

CREATE TABLE `exam_schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_id` int(11) NOT NULL,
  `exam_type_id` int(11) NOT NULL,
  `exam_date` date NOT NULL,
  `exam_year` year(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_schedules`
--

INSERT INTO `exam_schedules` (`id`, `class_id`, `exam_type_id`, `exam_date`, `exam_year`, `created_at`, `updated_at`) VALUES
(9, 6, 1, '2022-04-01', NULL, '2022-07-22 15:01:55', '2022-07-22 15:01:55'),
(10, 8, 1, '2022-04-01', NULL, '2022-07-22 15:01:55', '2022-07-22 15:01:55'),
(11, 9, 1, '2022-04-01', NULL, '2022-07-22 15:01:55', '2022-07-22 15:01:55'),
(12, 6, 2, '2022-08-01', NULL, '2022-07-22 15:04:44', '2022-07-22 15:04:44'),
(13, 8, 2, '2022-08-01', NULL, '2022-07-22 15:04:44', '2022-07-22 15:04:44'),
(14, 9, 2, '2022-08-01', NULL, '2022-07-22 15:04:44', '2022-07-22 15:04:44');

-- --------------------------------------------------------

--
-- Table structure for table `exam_types`
--

CREATE TABLE `exam_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_types`
--

INSERT INTO `exam_types` (`id`, `name`, `exam_date`, `created_at`, `updated_at`) VALUES
(1, '1st Terminal Exam', '2022-03-01', '2021-12-08 07:09:29', '2021-12-08 07:09:29'),
(2, '2nd Terminal Exam', NULL, '2021-12-08 07:09:48', '2021-12-08 07:10:41'),
(3, '3rd Terminal Exam', NULL, '2021-12-08 07:10:05', '2021-12-08 07:10:05');

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
-- Table structure for table `fee_categories`
--

CREATE TABLE `fee_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fee_categories`
--

INSERT INTO `fee_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Registration Fee', '2021-12-07 06:33:03', '2021-12-07 06:33:03'),
(2, 'Monthly Fee', '2021-12-07 06:33:18', '2021-12-07 06:33:18'),
(3, 'Exam Fee', '2021-12-07 06:33:34', '2021-12-07 06:33:34'),
(5, 'Other Fee', '2021-12-18 23:22:09', '2021-12-18 23:22:09');

-- --------------------------------------------------------

--
-- Table structure for table `fee_category_amounts`
--

CREATE TABLE `fee_category_amounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fee_category_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fee_category_amounts`
--

INSERT INTO `fee_category_amounts` (`id`, `fee_category_id`, `class_id`, `amount`, `created_at`, `updated_at`) VALUES
(52, 1, 6, 15000, '2022-07-22 14:13:13', '2022-07-22 14:13:13'),
(53, 1, 8, 15000, '2022-07-22 14:13:13', '2022-07-22 14:13:13'),
(54, 1, 9, 11000, '2022-07-22 14:13:13', '2022-07-22 14:13:13'),
(55, 2, 6, 5000, '2022-07-22 14:13:39', '2022-07-22 14:13:39'),
(56, 2, 9, 10000, '2022-07-22 14:13:39', '2022-07-22 14:13:39'),
(57, 2, 8, 15000, '2022-07-22 14:13:39', '2022-07-22 14:13:39'),
(58, 3, 6, 12000, '2022-07-22 14:13:54', '2022-07-22 14:13:54'),
(59, 3, 9, 21000, '2022-07-22 14:13:54', '2022-07-22 14:13:54'),
(60, 3, 8, 20000, '2022-07-22 14:13:54', '2022-07-22 14:13:54'),
(61, 5, 6, 200, '2022-07-22 14:14:14', '2022-07-22 14:14:14'),
(62, 5, 9, 300, '2022-07-22 14:14:14', '2022-07-22 14:14:14'),
(63, 5, 8, 400, '2022-07-22 14:14:14', '2022-07-22 14:14:14');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `description`, `serial`, `created_at`, `updated_at`) VALUES
(6, 'image6.jpg', 'The beautiful country', '6', NULL, '2022-07-23 07:40:44'),
(9, 'slider_image1.jpg', 'Ready your book, diary, pencil. Exam is coming', '1', '2022-06-28 17:08:36', '2022-07-23 07:41:30'),
(10, 'slider_image2.jpg', 'asdfasdfasdf', '2', '2022-06-28 17:08:36', '2022-06-28 17:08:36'),
(18, '7358.jpg', 'Read->Write->Repeat', NULL, '2022-07-17 13:52:56', '2022-07-17 13:52:56'),
(19, '91454.jpg', 'We are the best', NULL, '2022-07-17 14:08:28', '2022-07-17 14:08:28'),
(20, '15220.jpg', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages', NULL, '2022-07-19 16:25:23', '2022-07-19 16:25:23'),
(21, '33401.jpg', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', NULL, '2022-07-19 16:25:55', '2022-07-19 16:25:55');

-- --------------------------------------------------------

--
-- Table structure for table `leave_purposes`
--

CREATE TABLE `leave_purposes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leave_purposes`
--

INSERT INTO `leave_purposes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Family Problem', NULL, NULL),
(2, 'Personal Problem', NULL, NULL),
(3, 'Test Test Test', '2022-01-02 10:57:33', '2022-01-02 10:57:33'),
(4, 'For toor', '2022-01-02 11:30:27', '2022-01-02 11:30:27');

-- --------------------------------------------------------

--
-- Table structure for table `marks_grades`
--

CREATE TABLE `marks_grades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `grade_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade_point` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_marks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_marks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_point` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_point` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marks_grades`
--

INSERT INTO `marks_grades` (`id`, `grade_name`, `grade_point`, `start_marks`, `end_marks`, `start_point`, `end_point`, `remarks`, `created_at`, `updated_at`) VALUES
(1, 'A+', '5.00', '80', '100', '5', '5', 'Excellent', '2022-01-09 08:56:27', '2022-01-09 08:56:27'),
(2, 'A', '4.00', '70', '79', '4.0', '4.99', 'Very Good', '2022-01-09 08:57:28', '2022-01-09 08:57:28'),
(3, 'A-', '3.50', '60', '69', '3.5', '3.99', 'Good', '2022-01-09 08:58:03', '2022-01-09 08:58:03'),
(4, 'B', '3.00', '50', '59', '3.00', '3.49', 'Average', '2022-01-09 08:58:38', '2022-01-09 08:58:38'),
(5, 'C', '2.00', '40', '49', '2.00', '2.99', 'Disappoint', '2022-01-09 08:59:13', '2022-01-09 08:59:13'),
(6, 'D', '1.00', '33', '39', '1.00', '1.99', 'Bad', '2022-01-09 09:00:21', '2022-01-09 09:00:21'),
(7, 'F', '0.00', '00', '32', '0.00', '0.99', 'Fail', '2022-01-09 09:00:57', '2022-01-09 09:00:57');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_by` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `route`, `parent_id`, `slug`, `order_by`, `created_at`, `updated_at`) VALUES
(1, 'Manage User', NULL, NULL, 'manage-user', 1, NULL, NULL),
(2, 'View User', 'user.view', 1, 'view-user', 1, NULL, NULL),
(3, 'Add User', 'users.add', 1, 'add-user', 2, NULL, NULL),
(4, 'Manage Profile', '', NULL, 'manage-profile', 2, NULL, NULL),
(5, 'Your Profile', 'profile.view', 4, 'your-profile', 1, NULL, NULL),
(1, 'Manage User', NULL, NULL, 'manage-user', 1, NULL, NULL),
(2, 'View User', 'user.view', 1, 'view-user', 1, NULL, NULL),
(3, 'Add User', 'users.add', 1, 'add-user', 2, NULL, NULL),
(4, 'Manage Profile', '', NULL, 'manage-profile', 2, NULL, NULL),
(5, 'Your Profile', 'profile.view', 4, 'your-profile', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu_permissions`
--

CREATE TABLE `menu_permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_permissions`
--

INSERT INTO `menu_permissions` (`id`, `menu_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 1, NULL, NULL),
(4, 4, 1, NULL, NULL),
(5, 5, 1, NULL, NULL),
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 1, NULL, NULL),
(4, 4, 1, NULL, NULL),
(5, 5, 1, NULL, NULL);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_11_30_132202_create_sessions_table', 1),
(8, '2021_12_05_132105_create_student_classes_table', 3),
(9, '2021_12_05_141631_create_student_years_table', 4),
(10, '2021_12_07_120251_create_student_groups_table', 5),
(11, '2021_12_07_121907_create_student_shifts_table', 6),
(12, '2021_12_07_122919_create_fee_categories_table', 7),
(13, '2021_12_07_124354_create_fee_category_amounts_table', 8),
(14, '2021_12_08_130113_create_exam_types_table', 9),
(15, '2021_12_08_131357_create_school_subjects_table', 10),
(16, '2021_12_08_132450_create_assign_subjects_table', 11),
(17, '2021_12_09_114332_create_designations_table', 12),
(18, '2014_10_12_000000_create_users_table', 13),
(19, '2021_12_09_121630_create_assign_students_table', 14),
(20, '2021_12_09_121934_create_discount_students_table', 14),
(21, '2021_12_10_160347_create_employee_sallary_logs_table', 15),
(22, '2021_12_10_171729_create_employee_leaves_table', 16),
(23, '2021_12_10_171757_create_leave_purposes_table', 16),
(24, '2021_12_10_174634_create_employee_attendances_table', 17),
(25, '2021_12_11_161319_create_student_marks_table', 18),
(26, '2021_12_11_165345_create_marks_grades_table', 19),
(27, '2021_12_11_171521_create_account_student_fees_table', 20),
(28, '2021_12_11_172514_create_account_employee_salaries_table', 21),
(29, '2021_12_11_173832_create_account_other_costs_table', 22),
(30, '2022_01_15_150202_create_assign_teacher_subjects_table', 23),
(31, '2022_01_16_171959_create_student_attendances_table', 24),
(32, '2022_02_10_141054_create_school_details_table', 25),
(33, '2022_02_11_140758_create_public_messages_table', 26),
(34, '2022_02_13_065342_create_school_events_table', 27),
(35, '2022_02_13_180340_create_school_notices_table', 28),
(36, '2022_02_23_140222_create_exam_schedules_table', 29),
(37, '2022_02_26_011227_create_slider_images_table', 30),
(38, '2022_02_28_013019_create_principal_messages_table', 31),
(39, '2022_06_28_144838_create_admission_forms_table', 32),
(40, '2022_06_28_211834_create_galleries_table', 33);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('omarfaruk.likhon@gmail.com', '$2y$10$bO/qXuYE5bjsbvkwFS.m3.w4kWZ97uqxF8omHpwsypoKn6cx3iOUi', '2022-07-23 04:40:13');

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
-- Table structure for table `principal_messages`
--

CREATE TABLE `principal_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `principal_messages`
--

INSERT INTO `principal_messages` (`id`, `photo`, `message`, `created_at`, `updated_at`) VALUES
(4, 'principal.jpg', 'I take the privilege to welcome all of you to the official website of Adamjee Cantonment College which is meticulously designed to offer you vivid glimpses of the history, tradition, achievements and ongoing activities of the college. The combination of long-cherished heritage and enviable academic excellence has created a unique brand value for the institution, making it one of the top ranking colleges of the country.\r\n\r\nFounded in 1960, Adamjee Cantonment College is pledge-bound to create worthy citizens for the nation. The institution was established following the ideology and curricular activities of original renowned public school of England—Eton and Harrow. The motto of this college is to inculcate in the students the synthesis of education, discipline and morality. Adamjee Cantonment College is always keen to incorporate advanced technology in traditional educational system and has brought revolutionary changes in the education management of the college through installing multi-media classrooms, website, digital messaging system, digital result system etc that have made the institution a truly digitalized college and will go a long way in making our students the capable  citizens of the 21 Century’s world. Our dedicated and potential teaching staff are equipped enough to make the students well-prepared for the challenges of the ever-changing world.', '2022-02-27 20:03:05', '2022-02-27 20:03:05');

-- --------------------------------------------------------

--
-- Table structure for table `public_messages`
--

CREATE TABLE `public_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `read` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'no',
  `read_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `public_messages`
--

INSERT INTO `public_messages` (`id`, `name`, `email`, `phone`, `subject`, `message`, `read`, `read_by`, `created_at`, `updated_at`) VALUES
(12, 'MD OMAR FARUK', 'omarfaruk.likhon@gmail.com', '017500789881', 'the subject', 'My message', 'no', NULL, '2022-07-23 07:45:50', '2022-07-23 07:45:50');

-- --------------------------------------------------------

--
-- Table structure for table `school_details`
--

CREATE TABLE `school_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map_coordinate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_est` date NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_cover` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mission` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `school_details`
--

INSERT INTO `school_details` (`id`, `school_name`, `school_phone`, `school_email`, `school_address`, `map_coordinate`, `school_est`, `image`, `image_cover`, `about_title`, `about_description`, `school_youtube`, `school_twitter`, `school_instagram`, `school_facebook`, `video_title`, `video_description`, `video_url`, `mission`, `created_at`, `updated_at`) VALUES
(72, 'N International School', '01750089881', 'mail@nub.ac.bd', 'Banani, Dhaka, Bangladesh', '23.7934896,90.4015967', '2000-01-15', 'school_logo.png', NULL, 'Why we are better', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'https://www.youtube.com', 'https://www.twitter.com', 'https://www.instagram.com', 'https://www.facebook.com', 'Learn More About Us From Video', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '6sa1G_9jCb0', 'Our vision and mission is very simple:\r\n\r\n“ Come here to seek knowledge and Go back to serve the country”\r\n\r\nWe impart quality education according to the prescribed syllabus of Education Board, Dhaka and National University, Bangladesh. We revolutionized our classroom practice through the introduction of Multimedia Central Classes which integrate the traditional syllabus with the outside tech world .Our vision is to inculcate the sense of discipline, morality , tradition and patriotism and modern world by providing quality education. Traditional and technological opportunities are provided to express and develop our students with a view to making them 21st century ideal citizens of the entire world .\r\n\r\nRich traditional heritage encapsulated with the opportunity of technology made our students aware about a changing world outside and led them to understand about the 21st century environment and world’s demand.', '2022-07-22 11:39:44', '2022-07-22 11:39:44');

-- --------------------------------------------------------

--
-- Table structure for table `school_events`
--

CREATE TABLE `school_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_date` date NOT NULL,
  `event_time` time NOT NULL,
  `event_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `event_description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by_user_id` int(11) NOT NULL,
  `updated_by_user_id` int(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `school_events`
--

INSERT INTO `school_events` (`id`, `event_name`, `event_date`, `event_time`, `event_photo`, `event_description`, `created_by_user_id`, `updated_by_user_id`, `created_at`, `updated_at`) VALUES
(13, 'The Good Event', '2022-07-25', '10:00:00', '202207230935chris-becker-jYYpTndzopI-unsplash.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, NULL, '2022-07-23 03:35:28', '2022-07-23 03:35:28');

-- --------------------------------------------------------

--
-- Table structure for table `school_notices`
--

CREATE TABLE `school_notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `notice_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notice_date` date NOT NULL,
  `notice_description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notice_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by_user_id` int(11) NOT NULL,
  `updated_by_user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `school_notices`
--

INSERT INTO `school_notices` (`id`, `notice_name`, `notice_date`, `notice_description`, `notice_pdf`, `created_by_user_id`, `updated_by_user_id`, `created_at`, `updated_at`) VALUES
(10, 'Important Notice', '2022-07-22', 'On Tuesday, 28 June 2022, The Honorable Chairman of Northern University Bangladesh Trust, Professor Dr. Abu Yousuf Md. Abdullah paid a courtesy call on H.E. Md. Abdul Hamid, Honorable President of the People’s Republic of Bangladesh. They discussed about NUB\'s higher education opportunities, focusing on creating career bridges, expanding applied learning and work-based learning experiences, and giving students coaching and mentorship to help them make career decisions.', '80276.pdf', 1, NULL, '2022-07-22 12:55:22', '2022-07-22 12:55:22'),
(11, 'Chairman Notice', '2022-07-22', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '41646.pdf', 1, NULL, '2022-07-22 12:56:54', '2022-07-22 12:56:54'),
(12, 'Notice from md rony', '2022-07-22', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '29655.pdf', 45, NULL, '2022-07-22 12:58:52', '2022-07-22 12:58:52');

-- --------------------------------------------------------

--
-- Table structure for table `school_subjects`
--

CREATE TABLE `school_subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `school_subjects`
--

INSERT INTO `school_subjects` (`id`, `name`, `created_at`, `updated_at`) VALUES
(30, 'class-seven-subject-1', '2022-07-22 14:02:06', '2022-07-22 14:02:06'),
(31, 'class-seven-subject-2', '2022-07-22 14:02:24', '2022-07-22 14:02:24'),
(32, 'class-eight-subject-1', '2022-07-22 14:02:41', '2022-07-22 14:02:41'),
(33, 'class-eight-subject-2', '2022-07-22 14:03:03', '2022-07-22 14:03:03'),
(34, 'class-nine-ten-arts-subject-1', '2022-07-22 14:03:22', '2022-07-22 15:27:42'),
(35, 'class-nine-ten-arts-subject-2', '2022-07-22 14:03:40', '2022-07-22 15:28:18'),
(36, 'class-nine-ten-science-subject-1', '2022-07-22 15:28:45', '2022-07-22 15:28:45'),
(37, 'class-nine-ten-science-subject-2', '2022-07-22 15:29:10', '2022-07-22 15:29:10');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('AdGNnAyiHHoIB4mceZ8ofuzgnusYUiOZZcHUcO2j', 44, '192.168.187.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'YTo3OntzOjM6InVybCI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjQ6Imh0dHA6Ly8xOTIuMTY4LjE4Ny4xMjkvc2Nob29sLW1hbmFnZW1lbnQtc3lzdGVtL3B1YmxpYy9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoiNjE4d1pBUzhtVVd5aFBhQ0xDcTBhOVFhcGU0Z3RmVXdueDdMaUNmTiI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NDQ7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCR3RS5oTloxemJnd3IxTUtVVlNMQy91V1BEOFZ4UGN6UXFGWFlKTzE4UEMyaTFZL1BLanVNbSI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkd0UuaE5aMXpiZ3dyMU1LVVZTTEMvdVdQRDhWeFBjelFxRlhZSk8xOFBDMmkxWS9QS2p1TW0iO30=', 1660297855),
('Az7bpGl7cBNgFQ25NmaBiVKc3r7v4mNm63RSq932', 48, '192.168.187.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'YTo3OntzOjM6InVybCI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTQyOiJodHRwOi8vMTkyLjE2OC4xODcuMTI5L3NjaG9vbC1tYW5hZ2VtZW50LXN5c3RlbS9wdWJsaWMvc3R1ZGVudHBvcnRhbC9yZXN1bHRpbmZvP190b2tlbj1kNmJUemR1dVl4T1ptQ1lPNGtkNWNtUzhRZDRqNHJBVVE4Ym9rbkl0JmV4YW1fdHlwZV9pZD0xIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo2OiJfdG9rZW4iO3M6NDA6ImQ2YlR6ZHV1WXhPWm1DWU80a2Q1Y21TOFFkNGo0ckFVUThib2tuSXQiO3M6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjQ4O3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAka2FqVnUybW1yN0pEcGJyU3VVRWN5ZVU2dXRreVN2ZlBvREl4Y0pNTjRyS3VtYzlRRDlYR1ciO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJGthalZ1Mm1tcjdKRHBiclN1VUVjeWVVNnV0a3lTdmZQb0RJeGNKTU40ckt1bWM5UUQ5WEdXIjt9', 1660322089),
('cStmmWY7zYmR5iZMxsKRWyU2rqmoxoriv15SFmpW', 46, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiTEZRWE1ESFlWRGllbkxBRHNmd3daczB1MGRHak5wYmpNdzg5eUpLeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9wcm9maWxlcy9lZGl0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NDY7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRSVlAzVGZiM1J4MFRTLzlxcWd2QkJPOTh3U3p3Q3JHcWlEakk4YzNmNEd5dWVKREVTa3NmZSI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkUlZQM1RmYjNSeDBUUy85cXFndkJCTzk4d1N6d0NyR3FpRGpJOGMzZjRHeXVlSkRFU2tzZmUiO30=', 1694279423),
('iugQfWFPTZxMPCdyfcZWvJSShvTiRpgOms8oTTDB', 48, '192.168.187.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiRUVwSGxpZUZPNnNXUllZekN2eXM0MEJUaXFwZHhWMUtvSEtIZk9KQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTQyOiJodHRwOi8vMTkyLjE2OC4xODcuMTI5L3NjaG9vbC1tYW5hZ2VtZW50LXN5c3RlbS9wdWJsaWMvc3R1ZGVudHBvcnRhbC9yZXN1bHRpbmZvP190b2tlbj1FRXBIbGllRk82c1dSWVl6Q3Z5czQwQlRpcXBkeFYxS29IS0hmT0pDJmV4YW1fdHlwZV9pZD0xIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NDg7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRrYWpWdTJtbXI3SkRwYnJTdVVFY3llVTZ1dGt5U3ZmUG9ESXhjSk1ONHJLdW1jOVFEOVhHVyI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAka2FqVnUybW1yN0pEcGJyU3VVRWN5ZVU2dXRreVN2ZlBvREl4Y0pNTjRyS3VtYzlRRDlYR1ciO30=', 1660297558),
('jGhiftgSvnMYyoZeJSofXR5k9zYT8ZUXdGczhQ2s', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiem02V1hmd3dXMjc4amhoVHdyejc1aTJ1VkxTR1N4T1ZOTXFWSnl3TiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1694279347),
('tesrKVIvBh6X4uGXHJMUcQPynErooTFnVzrS51fW', NULL, '192.168.187.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicGVPR0tXYzY2cUtxTlNSMkQwTGFMcFlESjdqQnIxNTFsYnRSQ25HWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTQ6Imh0dHA6Ly8xOTIuMTY4LjE4Ny4xMjkvc2Nob29sLW1hbmFnZW1lbnQtc3lzdGVtL3B1YmxpYyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1660503534),
('UN5U91SgNDvDR6NWApeyj9uOk1SWvImwkfBQ3tCs', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN2xGZWwwOENXVnNMTXNLTGFzUG1QSlQweGVEbXBtSW02VlZITWFuSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1699887761),
('Y9C9SHOojF8eME7x5QPy5gk3upH6JfA0EDjWNsW5', 46, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiNmNua1dsRHJXTjQ1VDJ6b056WFpHYlZqRVNVQUt5eTNhMG9wVTNPeSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM1OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvcHJvZmlsZXMvZWRpdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjQ2O3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkUlZQM1RmYjNSeDBUUy85cXFndkJCTzk4d1N6d0NyR3FpRGpJOGMzZjRHeXVlSkRFU2tzZmUiO30=', 1695048942);

-- --------------------------------------------------------

--
-- Table structure for table `slider_images`
--

CREATE TABLE `slider_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_images`
--

INSERT INTO `slider_images` (`id`, `name`, `serial`, `created_at`, `updated_at`) VALUES
(24, 'slider_image4.jpg', 7, NULL, NULL),
(26, 'slider_image2.jpg', 2, '2022-07-19 16:21:41', '2022-07-19 16:21:41'),
(27, 'slider_image3.jpg', 3, '2022-07-19 16:21:41', '2022-07-19 16:21:41'),
(28, 'slider_image5.jpg', 5, '2022-07-19 16:21:41', '2022-07-19 16:21:41'),
(30, 'slider_image1.jpg', 1, '2022-07-19 16:42:39', '2022-07-19 16:42:39'),
(31, 'slider_image4.webp', 4, '2022-07-19 16:42:39', '2022-07-19 16:42:39'),
(32, 'slider_image6.jpg', 6, '2022-07-19 16:42:55', '2022-07-19 16:42:55');

-- --------------------------------------------------------

--
-- Table structure for table `student_attendances`
--

CREATE TABLE `student_attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL COMMENT 'student_id=user_id',
  `student_school_id` int(255) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `shift_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `attend_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_attendances`
--

INSERT INTO `student_attendances` (`id`, `student_id`, `student_school_id`, `subject_id`, `shift_id`, `date`, `attend_status`, `created_at`, `updated_at`) VALUES
(340, 55, 20220055, 36, 1, '2022-07-23', 'Absent', '2022-07-23 05:19:42', '2022-07-23 05:19:42'),
(341, 56, 20220056, 36, 1, '2022-07-23', 'Present', '2022-07-23 05:19:42', '2022-07-23 05:19:42'),
(342, 62, 20220061, 36, 1, '2022-07-23', 'Present', '2022-07-23 05:19:42', '2022-07-23 05:19:42'),
(343, 69, 20220069, 36, 1, '2022-07-23', 'Present', '2022-07-23 05:19:42', '2022-07-23 05:19:42'),
(344, 68, 20220067, 30, 1, '2022-08-11', 'Present', '2022-08-12 15:49:06', '2022-08-12 15:49:06'),
(345, 76, 20220075, 30, 1, '2022-08-11', 'Present', '2022-08-12 15:49:06', '2022-08-12 15:49:06'),
(346, 80, 20220080, 30, 1, '2022-08-11', 'Present', '2022-08-12 15:49:06', '2022-08-12 15:49:06');

-- --------------------------------------------------------

--
-- Table structure for table `student_classes`
--

CREATE TABLE `student_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_classes`
--

INSERT INTO `student_classes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(6, 'Eight', '2022-01-04 11:09:04', '2022-01-04 11:09:04'),
(8, 'Nine-Ten', '2022-01-04 11:09:45', '2022-02-25 06:36:35'),
(9, 'Seven', '2022-07-19 16:45:13', '2022-07-19 16:45:13');

-- --------------------------------------------------------

--
-- Table structure for table `student_groups`
--

CREATE TABLE `student_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_groups`
--

INSERT INTO `student_groups` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Art', '2021-12-07 06:12:21', '2021-12-07 06:12:21'),
(2, 'Science', '2021-12-07 06:12:36', '2021-12-07 06:12:36'),
(3, 'No Group', '2021-12-07 06:12:50', '2022-01-07 06:57:05');

-- --------------------------------------------------------

--
-- Table structure for table `student_marks`
--

CREATE TABLE `student_marks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL COMMENT 'student_id=user_id',
  `id_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shift_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `year_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `assign_subject_id` int(11) DEFAULT NULL,
  `exam_type_id` int(11) DEFAULT NULL,
  `marks` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_marks`
--

INSERT INTO `student_marks` (`id`, `student_id`, `id_no`, `shift_id`, `group_id`, `year_id`, `class_id`, `assign_subject_id`, `exam_type_id`, `marks`, `created_at`, `updated_at`) VALUES
(454, 48, '20220001', 1, 3, 6, 6, 32, 1, 80, '2022-07-23 03:18:47', '2022-07-23 03:18:47'),
(455, 49, '20220049', 1, 3, 6, 6, 32, 1, 90, '2022-07-23 03:18:47', '2022-07-23 03:18:47'),
(456, 52, '20220052', 1, 3, 6, 6, 32, 1, 60, '2022-07-23 03:18:47', '2022-07-23 03:18:47'),
(457, 73, '20220073', 1, 3, 6, 6, 32, 1, 85, '2022-07-23 03:18:47', '2022-07-23 03:18:47'),
(458, 74, '20220074', 1, 3, 6, 6, 32, 1, 75, '2022-07-23 03:18:47', '2022-07-23 03:18:47'),
(459, 81, '20220081', 1, 3, 6, 6, 32, 1, 45, '2022-07-23 03:18:47', '2022-07-23 03:18:47'),
(460, 50, '20220050', 2, 3, 6, 6, 32, 1, 95, '2022-07-23 03:19:11', '2022-07-23 03:19:11'),
(461, 60, '20220060', 2, 3, 6, 6, 32, 1, 75, '2022-07-23 03:19:11', '2022-07-23 03:19:11'),
(462, 63, '20220063', 2, 3, 6, 6, 32, 1, 50, '2022-07-23 03:19:11', '2022-07-23 03:19:11'),
(463, 72, '20220071', 2, 3, 6, 6, 32, 1, 30, '2022-07-23 03:19:11', '2022-07-23 03:19:11'),
(464, 48, '20220001', 1, 3, 6, 6, 33, 1, 60, '2022-07-23 03:19:48', '2022-07-23 03:19:48'),
(465, 49, '20220049', 1, 3, 6, 6, 33, 1, 75, '2022-07-23 03:19:48', '2022-07-23 03:19:48'),
(466, 52, '20220052', 1, 3, 6, 6, 33, 1, 90, '2022-07-23 03:19:48', '2022-07-23 03:19:48'),
(467, 73, '20220073', 1, 3, 6, 6, 33, 1, 45, '2022-07-23 03:19:48', '2022-07-23 03:19:48'),
(468, 74, '20220074', 1, 3, 6, 6, 33, 1, 65, '2022-07-23 03:19:48', '2022-07-23 03:19:48'),
(469, 81, '20220081', 1, 3, 6, 6, 33, 1, 55, '2022-07-23 03:19:48', '2022-07-23 03:19:48'),
(470, 50, '20220050', 2, 3, 6, 6, 33, 1, 60, '2022-07-23 03:20:11', '2022-07-23 03:20:11'),
(471, 60, '20220060', 2, 3, 6, 6, 33, 1, 80, '2022-07-23 03:20:11', '2022-07-23 03:20:11'),
(472, 63, '20220063', 2, 3, 6, 6, 33, 1, 75, '2022-07-23 03:20:11', '2022-07-23 03:20:11'),
(473, 72, '20220071', 2, 3, 6, 6, 33, 1, 46, '2022-07-23 03:20:11', '2022-07-23 03:20:11'),
(474, 54, '20220054', 1, 1, 6, 8, 34, 1, 65, '2022-07-23 03:20:44', '2022-07-23 03:20:44'),
(475, 83, '20220082', 1, 1, 6, 8, 34, 1, 80, '2022-07-23 03:20:44', '2022-07-23 03:20:44'),
(476, 64, '20220064', 2, 1, 6, 8, 34, 1, 50, '2022-07-23 03:21:06', '2022-07-23 03:21:06'),
(477, 70, '20220070', 2, 1, 6, 8, 34, 1, 80, '2022-07-23 03:21:06', '2022-07-23 03:21:06'),
(478, 77, '20220077', 2, 1, 6, 8, 34, 1, 92, '2022-07-23 03:21:06', '2022-07-23 03:21:06'),
(479, 54, '20220054', 1, 1, 6, 8, 35, 1, 95, '2022-07-23 03:21:26', '2022-07-23 03:21:26'),
(480, 83, '20220082', 1, 1, 6, 8, 35, 1, 80, '2022-07-23 03:21:26', '2022-07-23 03:21:26'),
(481, 64, '20220064', 2, 1, 6, 8, 35, 1, 95, '2022-07-23 03:21:47', '2022-07-23 03:21:47'),
(482, 70, '20220070', 2, 1, 6, 8, 35, 1, 75, '2022-07-23 03:21:47', '2022-07-23 03:21:47'),
(483, 77, '20220077', 2, 1, 6, 8, 35, 1, 60, '2022-07-23 03:21:47', '2022-07-23 03:21:47'),
(484, 55, '20220055', 1, 2, 6, 8, 36, 1, 45, '2022-07-23 03:23:34', '2022-07-23 03:23:34'),
(485, 56, '20220056', 1, 2, 6, 8, 36, 1, 75, '2022-07-23 03:23:34', '2022-07-23 03:23:34'),
(486, 62, '20220061', 1, 2, 6, 8, 36, 1, 65, '2022-07-23 03:23:34', '2022-07-23 03:23:34'),
(487, 69, '20220069', 1, 2, 6, 8, 36, 1, 38, '2022-07-23 03:23:34', '2022-07-23 03:23:34'),
(488, 53, '20220053', 2, 2, 6, 8, 36, 1, 65, '2022-07-23 03:23:57', '2022-07-23 03:23:57'),
(489, 66, '20220065', 2, 2, 6, 8, 36, 1, 85, '2022-07-23 03:23:57', '2022-07-23 03:23:57'),
(490, 78, '20220078', 2, 2, 6, 8, 36, 1, 65, '2022-07-23 03:23:57', '2022-07-23 03:23:57'),
(491, 79, '20220079', 2, 2, 6, 8, 36, 1, 75, '2022-07-23 03:23:57', '2022-07-23 03:23:57'),
(492, 55, '20220055', 1, 2, 6, 8, 37, 1, 65, '2022-07-23 03:26:07', '2022-07-23 03:26:07'),
(493, 56, '20220056', 1, 2, 6, 8, 37, 1, 80, '2022-07-23 03:26:07', '2022-07-23 03:26:07'),
(494, 62, '20220061', 1, 2, 6, 8, 37, 1, 45, '2022-07-23 03:26:07', '2022-07-23 03:26:07'),
(495, 69, '20220069', 1, 2, 6, 8, 37, 1, 36, '2022-07-23 03:26:07', '2022-07-23 03:26:07'),
(496, 53, '20220053', 2, 2, 6, 8, 37, 1, 65, '2022-07-23 03:26:57', '2022-07-23 03:26:57'),
(497, 66, '20220065', 2, 2, 6, 8, 37, 1, 85, '2022-07-23 03:26:57', '2022-07-23 03:26:57'),
(498, 78, '20220078', 2, 2, 6, 8, 37, 1, 78, '2022-07-23 03:26:57', '2022-07-23 03:26:57'),
(499, 79, '20220079', 2, 2, 6, 8, 37, 1, 48, '2022-07-23 03:26:57', '2022-07-23 03:26:57'),
(500, 48, '20220001', 1, 3, 6, 6, 30, 1, 60, '2022-08-12 15:53:53', '2022-08-12 15:53:53'),
(501, 49, '20220049', 1, 3, 6, 6, 30, 1, 80, '2022-08-12 15:53:53', '2022-08-12 15:53:53'),
(502, 52, '20220052', 1, 3, 6, 6, 30, 1, 70, '2022-08-12 15:53:53', '2022-08-12 15:53:53'),
(503, 73, '20220073', 1, 3, 6, 6, 30, 1, 100, '2022-08-12 15:53:53', '2022-08-12 15:53:53'),
(504, 74, '20220074', 1, 3, 6, 6, 30, 1, 80, '2022-08-12 15:53:53', '2022-08-12 15:53:53'),
(505, 81, '20220081', 1, 3, 6, 6, 30, 1, 50, '2022-08-12 15:53:53', '2022-08-12 15:53:53');

-- --------------------------------------------------------

--
-- Table structure for table `student_shifts`
--

CREATE TABLE `student_shifts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_time` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_shifts`
--

INSERT INTO `student_shifts` (`id`, `name`, `class_time`, `created_at`, `updated_at`) VALUES
(1, 'Shift A', '10 AM TO 4 PM', '2021-12-07 06:23:49', '2021-12-07 06:23:49'),
(2, 'Shift B', '10 AM TO 4 PM', '2021-12-07 06:24:03', '2021-12-07 06:24:03');

-- --------------------------------------------------------

--
-- Table structure for table `student_years`
--

CREATE TABLE `student_years` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_years`
--

INSERT INTO `student_years` (`id`, `name`, `created_at`, `updated_at`) VALUES
(6, '2022', '2022-01-07 06:56:26', '2022-01-07 06:56:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Student,Employee,Admin',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'admin=head of sotware,operator=computer operator,user=employee',
  `join_date` date DEFAULT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `salary` double DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive,1=active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `theme` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'dark',
  `edu_qualification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edu_institute` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_monthly_fee_paid` int(255) DEFAULT NULL,
  `total_registration_fee_paid` int(255) DEFAULT NULL,
  `total_exam_fee_paid` int(255) DEFAULT NULL,
  `id_document_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usertype`, `name`, `email`, `email_verified_at`, `password`, `mobile`, `address`, `gender`, `image`, `fname`, `mname`, `religion`, `id_no`, `dob`, `code`, `role`, `join_date`, `designation_id`, `salary`, `status`, `remember_token`, `current_team_id`, `profile_photo_path`, `theme`, `edu_qualification`, `edu_institute`, `facebook_link`, `instagram_link`, `twitter_link`, `total_monthly_fee_paid`, `total_registration_fee_paid`, `total_exam_fee_paid`, `id_document_no`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin', 'admin@gmail.com', NULL, '$2y$10$Pwq6tOHGIQShu9qdSAUeXu.9jxjzedBoCxsqwk9/MapzqtTRFeNgO', '01750089881', 'Dhaka Bangladesh', 'Male', '202207221719American-actor-Leonardo-DiCaprio-2016.jpg', 'MD REZAUL KARIM', 'MST KOMOLA BEGUM', 'ISLAM', NULL, '1996-01-01', NULL, 'Admin', NULL, NULL, NULL, 1, NULL, NULL, NULL, 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-22 11:19:02'),
(44, 'employee', 'MD ABID HASAN', 'abid@gmail.com', NULL, '$2y$10$wE.hNZ1zbgwr1MKUVSLC/uWPD8VxPczQqFXYJO18PC2i1Y/PKjuMm', '01', 'Uttar badda dhaka bangladesh', 'Male', '2022072217507d1a3f77eee9f34782c6f88e97a6c888.jpg', 'MD FATHER', 'MST MOTHER', 'Islam', '2022010001', '1996-01-01', '1234', NULL, '2022-01-01', 1, 30000, 1, NULL, NULL, NULL, 'dark', 'Bsc In CSE', 'Northern University Bangladesh', 'https://www.facebook.com', 'https://www.instagram.com', 'https://www.twitter.com', NULL, NULL, NULL, NULL, '2022-07-22 11:41:48', '2022-07-22 11:50:02'),
(45, 'employee', 'MD RONY HOSSAIN', 'rony@gmail.com', NULL, '$2y$10$Zd1321wLUvy6h1jUYWOWmO.HsZmakBmqC9dpoMCBbzGSPR.tNeq5q', '01752089882', 'Khilkhet, Uttara, Dhaka', 'Male', '202207222154images.png', 'MD FATHER', 'MST MOTHER', 'Islam', '2022010045', '1996-01-01', '1234', NULL, '2022-01-01', 2, 50000, 1, NULL, NULL, NULL, 'dark', 'Bsc in CSE', 'Northern University Bangladesh', 'https://www.facebook.com', 'https://www.instagram.com', 'https://www.twitter.com', NULL, NULL, NULL, NULL, '2022-07-22 11:44:17', '2022-07-22 15:54:56'),
(46, 'employee', 'MD OMAR FARUK', 'omarfaruk.likhon@gmail.com', NULL, '$2y$10$RVP3Tfb3Rx0TS/9qqgvBBO98wSzwCrGqiDjI8c3f4GyueJDESksfe', '01750089881', 'Uttar Badda, Dhaka, Bangladesh', 'Male', '202207221749photo-1594751543129-6701ad444259.jpg', 'MD ABDUR RAZZAK', 'MST NILUFAR YEASMIN', 'Islam', '2022010046', '1996-09-15', '1234', NULL, '2022-01-01', 3, 20000, 1, NULL, NULL, NULL, 'dark', 'BSC', 'Northern University Bangladesh', 'https://www.facebook.com/omarfaruk.likhon', 'https://www.instagram.com', 'https://www.twitter.com', NULL, NULL, NULL, NULL, '2022-07-22 11:49:34', '2022-07-22 11:49:34'),
(47, 'employee', 'MD SAROWARE KHAN', 'saworare@gmail.com', NULL, '$2y$10$5V6RRYv0qyIpA7df/tpJfOJEX/ti5YbHPZ16tyXKgrqxPf2tksqaG', '01750089881', '287 Uttar Badda, Dhaka, Bangladesh', 'Male', '202207221812photo-1511367461989-f85a21fda167.jpg', 'MD FATHER', 'MST MOTHER', 'Islam', '2022010047', '1996-01-01', '1234', NULL, '2022-01-01', 3, 15000, 1, NULL, NULL, NULL, 'dark', 'Bsc In CSE', 'Northern University Bangladesh', 'https://www.facebook.com', 'https://www.instagram.com', 'https://www.twitter.com', NULL, NULL, NULL, NULL, '2022-07-22 12:12:20', '2022-07-22 12:12:20'),
(48, 'Student', 'MD MARUF AHMED', 'maruf@gmail.com', NULL, '$2y$10$kajVu2mmr7JDpbrSuUEcyeU6utkySvfPoDIxcJMN4rKumc9QD9XGW', '01896623665', 'Uttar Badda, Dhaka', 'Male', '202207221817download.jpg', 'MD FATHER', 'MST MOTHER', 'Islam', '20220001', '2000-01-22', '1234', NULL, '2022-01-01', NULL, NULL, 1, NULL, NULL, NULL, 'dark', NULL, NULL, NULL, NULL, NULL, 12000, 15000, NULL, NULL, '2022-07-22 12:17:37', '2022-08-12 09:26:46'),
(49, 'Student', 'MD MEHEDI HASAN', 'mehedi@gmail.com', NULL, '$2y$10$e88Iuqqu/./t9aHWdrUCcud7DJwtjIZSGse1txP.XvqJ3wD1wT5YG', '01789965332', 'Badda, Dhaka Bangladesh', 'Male', '202207221821istockphoto-157681821-170667a.jpg', 'MD FATHER', 'MST MOTHER', 'Islam', '20220049', '2000-01-22', '1234', NULL, '2022-01-01', NULL, NULL, 1, NULL, NULL, NULL, 'dark', NULL, NULL, NULL, NULL, NULL, 12750, 15000, NULL, NULL, '2022-07-22 12:21:31', '2022-08-12 09:26:46'),
(50, 'Student', 'MD KAZI', 'kazi@gmail.com', NULL, '$2y$10$ptnGCJ4FFsFNK.z1imb/V.DhRTho4.Sjqy9B.SX0aOEl2pbyFuibu', '01789965442', 'Uttar Badda, Dhaka, Bangladesh', 'Male', '202207221823Male.webp', 'MD FATHER', 'MST MOTHER', 'Islam', '20220050', '2000-01-22', '1234', NULL, '2022-01-01', NULL, NULL, 1, NULL, NULL, NULL, 'dark', NULL, NULL, NULL, NULL, NULL, 12750, 15000, NULL, NULL, '2022-07-22 12:23:39', '2022-08-12 09:26:46'),
(51, 'Student', 'Karley O\'Conner', 'your.email+fakedata45211@gmail.com', NULL, '$2y$10$R5UixzYd.T/5RvQ7RCGZDuPijbAc7kigJ.rpjI.b.hGQBbyrzTKXS', 'Principal Identity Officer', '2460 Cremin Course', 'Male', NULL, 'Anderson Rodriguez', 'Axel Fahey', 'Islam', '20220051', '2022-02-03', '1234', NULL, '2022-01-01', NULL, NULL, 1, NULL, NULL, NULL, 'dark', NULL, NULL, NULL, NULL, NULL, NULL, 11000, NULL, NULL, '2022-07-22 12:25:51', '2022-07-22 14:50:26'),
(52, 'Student', 'Mable Ferry', 'your.email+fakedata13433@gmail.com', NULL, '$2y$10$jyy8SSlX8msmdUwQruhzjeRJeyatMUDBePoqgIIUe8rKwZjHfIh8C', 'Direct Group Supervisor', '209 Wisozk Ramp', 'Male', '2022072218277d1a3f77eee9f34782c6f88e97a6c888.jpg', 'Arne Kuhn', 'Dorothy Moen', 'Islam', '20220052', '2000-01-01', '1234', NULL, '2022-01-01', NULL, NULL, 1, NULL, NULL, NULL, 'dark', NULL, NULL, NULL, NULL, NULL, 12300, 15000, NULL, NULL, '2022-07-22 12:27:57', '2022-08-12 09:26:46'),
(53, 'Student', 'Cassandra Emmerich', 'your.email+fakedata48228@gmail.com', NULL, '$2y$10$9qPcqWE2syEI49jXuko2futlT8c1TBrzTg3Re9eeqSQIcv1HDK5a.', 'National Infrastructure Supervisor', '2229 Reba Glens', 'Male', '202207221829download.jpg', 'Tyrel Boyer', 'Georgianna Treutel', 'Hindu', '20220053', '2000-01-19', '1234', NULL, '2022-01-01', NULL, NULL, 1, NULL, NULL, NULL, 'dark', NULL, NULL, NULL, NULL, NULL, 9750, 15000, NULL, NULL, '2022-07-22 12:29:33', '2022-07-22 14:49:13'),
(54, 'Student', 'Glenda Jones', 'your.email+fakedata64364@gmail.com', NULL, '$2y$10$GKVECfYHqcXFnR04plFb4.TL9Lm5WaPVjXIq1caiJAGCvd1/9i5vC', '01456698772', '8489 Legros Hills', 'Female', '202207221831afdhal-n-afM30A5F-44-unsplash.jpg', 'Hope Casper', 'Verda Kemmer', 'Hindu', '20220054', '2000-01-01', '1234', NULL, '2022-01-01', NULL, NULL, 1, NULL, NULL, NULL, 'dark', NULL, NULL, NULL, NULL, NULL, 6000, 15000, NULL, NULL, '2022-07-22 12:31:11', '2022-07-22 14:49:13'),
(55, 'Student', 'Sofia Hettinger', 'your.email+fakedata10170@gmail.com', NULL, '$2y$10$QbQq9SyZndB3hlZoE1ZaMeETLBL4DNIT0UheEOSlF3HsNIQnyF3s6', 'Lead Optimization Architect', '980 Bernadette Road', 'Female', NULL, 'Dangelo West', 'Ryann Schroeder', 'Hindu', '20220055', '2000-01-17', '1234', NULL, '2022-01-01', NULL, NULL, 1, NULL, NULL, NULL, 'dark', NULL, NULL, NULL, NULL, NULL, 10500, 15000, NULL, NULL, '2022-07-22 12:32:45', '2022-07-22 14:49:13'),
(56, 'Student', 'Craig Harris', 'your.email+fakedata89486@gmail.com', NULL, '$2y$10$rxVG/UBKaGkuy351YuwT2ebYb20xcp0buZghbxn9.OXuNXmFWt28i', 'Dynamic Operations Agent', '1732 Champlin Port', 'Female', '202207221834download.jpg', 'Caroline Dickens', 'Ariel Waelchi', 'Islam', '20220056', '2000-01-21', '1234', NULL, '2022-01-01', NULL, NULL, 1, NULL, NULL, NULL, 'dark', NULL, NULL, NULL, NULL, NULL, 9000, 15000, NULL, NULL, '2022-07-22 12:34:19', '2022-07-22 14:49:13'),
(58, 'Student', 'Rossie Zboncak', 'your.email+fakedata41952@gmail.com', NULL, '$2y$10$hBiT4ePyygg6t0IppHbOhubBuJgk3evz9RFUVxr2ZEC0CqVJgtk7y', 'Direct Functionality Engineer', '6170 Elizabeth Fall', 'Female', '202207221835alone-Best-Dp-Profile-Images-For-Instagram-photo.gif', 'Demond Hyatt', 'Kasey Roob', 'Hindu', '20220057', '2000-01-01', '1234', NULL, '2022-01-01', NULL, NULL, 1, NULL, NULL, NULL, 'dark', NULL, NULL, NULL, NULL, NULL, NULL, 11000, NULL, NULL, '2022-07-22 12:35:53', '2022-07-22 14:50:26'),
(59, 'Student', 'Melisa Gibson', 'your.email+fakedata87244@gmail.com', NULL, '$2y$10$YBM2935sPZBzyXhQy1sluuy.5Z.XwtrLOu9MkeabbdF2r6HTyWgee', 'Investor Configuration Specialist', '1667 Ed Place', 'Male', '202207221836download.jpg', 'Rusty Ryan', 'Tia Bauch', 'Christan', '20220059', '2000-01-01', '1234', NULL, '2022-01-01', NULL, NULL, 1, NULL, NULL, NULL, 'dark', NULL, NULL, NULL, NULL, NULL, NULL, 11000, NULL, NULL, '2022-07-22 12:36:54', '2022-07-22 14:50:26'),
(60, 'Student', 'Piper Keeling', 'your.email+fakedata43154@gmail.com', NULL, '$2y$10$cS4wys6PHcuwv4FeEDIfFeFPjFXS8/QyN.W/6xeefzDeVjk.LVmbS', 'Investor Accounts Architect', '2452 Joy Highway', 'Female', '202207221837images.png', 'Jeffry Morar', 'Corrine Lockman', 'Hindu', '20220060', '2000-01-01', '1234', NULL, '2022-01-01', NULL, NULL, 1, NULL, NULL, NULL, 'dark', NULL, NULL, NULL, NULL, NULL, 12600, 15000, NULL, NULL, '2022-07-22 12:37:34', '2022-08-12 09:26:46'),
(62, 'Student', 'Marcos Hirthe', 'your.email+fakedata14315@gmail.com', NULL, '$2y$10$dfPvjlchoWEsmxA9CfpUcuWrO.h/S4TP1UX.V.J7KpOvjul6DMfBe', 'Forward Applications Technician', '1641 Durgan Cliffs', 'Female', '202207221838alone-Best-Dp-Profile-Images-For-Instagram-photo.gif', 'Reagan Jaskolski', 'Jacinto Gleason', 'Christan', '20220061', '1996-01-01', '1234', NULL, '2022-01-01', NULL, NULL, 1, NULL, NULL, NULL, 'dark', NULL, NULL, NULL, NULL, NULL, 8250, 15000, NULL, NULL, '2022-07-22 12:38:25', '2022-07-22 14:49:13'),
(63, 'Student', 'Savanah Schroeder', 'your.email+fakedata71832@gmail.com', NULL, '$2y$10$fP5kHrM.G7iv94WgFc/Pi.VSqpKtq/T7XphUdBoUSU0U0CLEixJDK', 'Senior Marketing Specialist', '6302 Nat Center', 'Male', NULL, 'Annabelle Schuster', 'Carmen McKenzie', 'Hindu', '20220063', '1998-01-01', '1234', NULL, '2022-01-01', NULL, NULL, 1, NULL, NULL, NULL, 'dark', NULL, NULL, NULL, NULL, NULL, 8400, 15000, NULL, NULL, '2022-07-22 12:39:09', '2022-08-12 09:26:46'),
(64, 'Student', 'Karelle Rice', 'your.email+fakedata51406@gmail.com', NULL, '$2y$10$LZBzSC3EJsaRU99q2D0TQeH2ZDpWHcQCuKAqWpPuwf0XqFerV2kd.', 'Direct Implementation Technician', '125 Kovacek Valleys', 'Female', '202207221839afdhal-n-afM30A5F-44-unsplash.jpg', 'Anabelle Medhurst', 'Novella Kihn', 'Islam', '20220064', '2002-01-01', '1234', NULL, '2022-01-01', NULL, NULL, 1, NULL, NULL, NULL, 'dark', NULL, NULL, NULL, NULL, NULL, 12600, 15000, NULL, NULL, '2022-07-22 12:39:48', '2022-07-22 14:49:13'),
(66, 'Student', 'Samir Heaney', 'your.email+fakedata39832@gmail.com', NULL, '$2y$10$xMw4ovMV0FMjQKxGWvUGE.0S.ul8KOT3MLlOP/3IPR5RlAyG9nhxG', 'Chief Solutions Producer', '54761 Schamberger Crescent', 'Male', '202207221840Male.webp', 'Ladarius Beier', 'Maryjane Kilback', 'Hindu', '20220065', '2003-01-01', '1234', NULL, '2022-01-01', NULL, NULL, 1, NULL, NULL, NULL, 'dark', NULL, NULL, NULL, NULL, NULL, 10500, 15000, NULL, NULL, '2022-07-22 12:40:35', '2022-07-22 14:49:13'),
(68, 'Student', 'Emilie Kshlerin', 'your.email+fakedata93439@gmail.com', NULL, '$2y$10$yM7a1pfSS28iFZabVPXwWO4Q4.JoUEhbgqB.u8X0N5Zk5BPUk5Ziy', 'Principal Creative Director', '39591 Hand Pass', 'Female', '202207221841Graduation-stock-photo.jpg', 'Maiya Heidenreich', 'Leanne D\'Amore', 'Hindu', '20220067', '2009-03-03', '1234', NULL, '2022-01-01', NULL, NULL, 1, NULL, NULL, NULL, 'dark', NULL, NULL, NULL, NULL, NULL, NULL, 11000, NULL, NULL, '2022-07-22 12:41:33', '2022-07-22 14:50:26'),
(69, 'Student', 'Sarina Lynch', 'your.email+fakedata25281@gmail.com', NULL, '$2y$10$VAzUTa.03W/PiL/EzlY9aup3BiJhhqjedmsGyhbhOd1C69PCnMiwa', 'Principal Accountability Administrator', '48948 Keebler View', 'Male', '202207221843afdhal-n-afM30A5F-44-unsplash.jpg', 'Golden Quigley', 'Annamarie Herman', 'Islam', '20220069', '2002-01-01', '1234', NULL, '2022-01-01', NULL, NULL, 1, NULL, NULL, NULL, 'dark', NULL, NULL, NULL, NULL, NULL, 11250, 15000, NULL, NULL, '2022-07-22 12:43:11', '2022-07-22 14:49:13'),
(70, 'Student', 'Karlee Funk', 'your.email+fakedata20419@gmail.com', NULL, '$2y$10$Brq3Hmls4KM9yBhYHz.kY.FujhKsl3WyRRaW9gYR6Z8MEnOEbPlwy', 'Future Interactions Coordinator', '581 Pierre Cape', 'Female', '202207221846alone-Best-Dp-Profile-Images-For-Instagram-photo.gif', 'Austyn Johnson', 'Wyman Jerde', 'Christan', '20220070', '2004-01-01', '1234', NULL, '2022-01-01', NULL, NULL, 1, NULL, NULL, NULL, 'dark', NULL, NULL, NULL, NULL, NULL, 14100, 15000, NULL, NULL, '2022-07-22 12:46:05', '2022-07-22 14:49:13'),
(72, 'Student', 'Roma Douglas', 'your.email+fakedata40439@gmail.com', NULL, '$2y$10$3kxSr7R1FFwhC0gAxqLFPe0eUFDgMyoPZzgwYz9ZpLtVxfx1u.Hgq', 'Human Directives Supervisor', '124 Bartell Locks', 'Male', '202207221846images.png', 'Kiarra Crist', 'Audie Pacocha', 'Islam', '20220071', '2003-01-01', '1234', NULL, '2022-01-01', NULL, NULL, 1, NULL, NULL, NULL, 'dark', NULL, NULL, NULL, NULL, NULL, 10500, 15000, NULL, NULL, '2022-07-22 12:46:45', '2022-08-12 09:26:46'),
(73, 'Student', 'Eloisa Kassulke', 'your.email+fakedata47218@gmail.com', NULL, '$2y$10$9S1zBfDC.F3.IIw5h0jv5eKC5Eul33JXGWmolgvECJXQis.wLcOwW', 'Human Data Producer', '74746 Favian Parkway', 'Female', '202207221847Male.webp', 'Theo Little', 'Jamal Kemmer', 'Islam', '20220073', '2006-01-01', '1234', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'dark', NULL, NULL, NULL, NULL, NULL, 10500, 15000, NULL, NULL, '2022-07-22 12:47:20', '2022-08-12 09:26:46'),
(74, 'Student', 'Chance Konopelski', 'your.email+fakedata96809@gmail.com', NULL, '$2y$10$rqNggNIufK0gBiVLfbrv4u2gRdsR0sjvkLnVSl3hjcwm8Cbo6oSRq', 'Future Infrastructure Designer', '586 Colby Isle', 'Female', NULL, 'Camryn Bashirian', 'Brenda Ondricka', 'Christan', '20220074', '2005-01-01', '1234', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'dark', NULL, NULL, NULL, NULL, NULL, 13200, 15000, NULL, NULL, '2022-07-22 12:47:54', '2022-08-12 09:26:46'),
(76, 'Student', 'Leonor Fritsch', 'your.email+fakedata38302@gmail.com', NULL, '$2y$10$/imzPW8dnCyWzcaU/ytPLuodj0q0D7pV5sbkGR0oEJbTq7gmkm6Ca', 'Dynamic Identity Specialist', '1632 Lindgren Trace', 'Male', '2022072218487d1a3f77eee9f34782c6f88e97a6c888.jpg', 'Margarette Koepp', 'Mose VonRueden', 'Hindu', '20220075', '2009-01-01', '1234', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'dark', NULL, NULL, NULL, NULL, NULL, NULL, 11000, NULL, NULL, '2022-07-22 12:48:54', '2022-07-22 14:50:26'),
(77, 'Student', 'Erwin Barton', 'your.email+fakedata96921@gmail.com', NULL, '$2y$10$IR2NwoYplWRCe4r9pd5Cee.qU3cdoKkqfz82RnIB8.t.1eyrYwIrO', 'International Metrics Director', '33826 Nader Locks', 'Female', '202207221851images.jpg', 'Joyce Connelly', 'Daren Rutherford', 'Islam', '20220077', '2005-01-01', '1234', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'dark', NULL, NULL, NULL, NULL, NULL, 10500, 15000, NULL, NULL, '2022-07-22 12:51:40', '2022-07-22 14:49:13'),
(78, 'Student', 'Amy Dietrich', 'your.email+fakedata91035@gmail.com', NULL, '$2y$10$bA.mtt02lrwu3EDT3wi3UuLkOd45pR5ViJtPs3jPJevxBom6d9K2m', 'National Identity Developer', '54741 Gianni Parks', 'Male', '202207221900head-shot-portrait-close-smiling-260nw-1714666150.webp', 'Garland Wintheiser', 'Summer Stamm', 'Islam', '20220078', '2004-01-01', '1234', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'dark', NULL, NULL, NULL, NULL, NULL, 12600, 15000, NULL, NULL, '2022-07-22 13:00:16', '2022-07-22 14:49:13'),
(79, 'Student', 'Bernadine Lowe', 'your.email+fakedata20035@gmail.com', NULL, '$2y$10$61ziG33dl7W37OvLH.v8be76dUU4RkJBMbFfsPzVCaEUJD2etw1F.', 'Human Implementation Orchestrator', '881 Huel Drive', 'Male', '202207221908portrait-smiling-african-american-student-260nw-1194497215.webp', 'Graham Ledner', 'Cesar Kuvalis', 'Hindu', '20220079', '2005-01-01', '1234', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'dark', NULL, NULL, NULL, NULL, NULL, 10500, 15000, NULL, '360022222222', '2022-07-22 13:08:09', '2022-07-22 14:49:13'),
(80, 'Student', 'Earlene Greenholt', 'your.email+fakedata60423@gmail.com', NULL, '$2y$10$d9Uu9em.C8pPNbzTqR95y.GzKSUPtonA48uHi3.g.jrMO6awinFF6', 'Corporate Security Officer', '654 Alyson Stravenue', 'Male', '202207221908portrait-smiling-red-haired-millennial-260nw-1194497251.webp', 'Ellen O\'Kon', 'Annalise Grant', 'Christan', '20220080', '2004-01-01', '1234', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'dark', NULL, NULL, NULL, NULL, NULL, NULL, 11000, NULL, '176', '2022-07-22 13:08:45', '2022-07-22 14:50:26'),
(81, 'Student', 'Michelle Dooley', 'your.email+fakedata38464@gmail.com', NULL, '$2y$10$OnO.Qvfep8DyN74ls8Bspu53u.F4jbi1X1qbUXZJxrRhLrFthT/Zu', 'Global Operations Coordinator', '41158 Javier Estates', 'Female', '202207221909images.jpg', 'Alexandrea Glover', 'Mortimer Kilback', 'Hindu', '20220081', '2008-01-01', '1234', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'dark', NULL, NULL, NULL, NULL, NULL, 10500, 15000, NULL, '326234121224', '2022-07-22 13:09:26', '2022-08-12 09:26:46'),
(83, 'Student', 'Ila Wuckert', 'your.email+fakedata77724@gmail.com', NULL, '$2y$10$lEgdfmYuru2mXnsDN6pFxOCSd6BBXUAqJ7ytlPX32.LKt4B79MSJi', 'Product Factors Technician', '56808 Kaycee Manor', 'Male', '202207221910alone-Best-Dp-Profile-Images-For-Instagram-photo.gif', 'David Ernser', 'Iliana Weber', 'Islam', '20220082', '2008-01-01', '1234', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'dark', NULL, NULL, NULL, NULL, NULL, 10500, 15000, NULL, '3422342343434', '2022-07-22 13:10:15', '2022-07-22 14:49:13'),
(84, 'Student', 'Lelia Gleason', 'your.email+fakedata60114@gmail.com', NULL, '$2y$10$zTqzC2Se6zjExHFlvziWHuvL4kheIUnxCOuQWetZfoNNDgQhtCfx2', 'Forward Identity Analyst', '939 Welch Lights', 'Female', '202207221911alone-Best-Dp-Profile-Images-For-Instagram-photo.gif', 'Carroll Predovic', 'Demarcus Jakubowski', 'Hindu', '20220084', '2004-01-01', '1234', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'dark', NULL, NULL, NULL, NULL, NULL, NULL, 11000, NULL, '646', '2022-07-22 13:11:29', '2022-07-22 14:50:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_employee_salaries`
--
ALTER TABLE `account_employee_salaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account_other_costs`
--
ALTER TABLE `account_other_costs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account_student_fees`
--
ALTER TABLE `account_student_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_forms`
--
ALTER TABLE `admission_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_students`
--
ALTER TABLE `assign_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_subjects`
--
ALTER TABLE `assign_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_teacher_subjects`
--
ALTER TABLE `assign_teacher_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `designations_name_unique` (`name`);

--
-- Indexes for table `discount_students`
--
ALTER TABLE `discount_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_attendances`
--
ALTER TABLE `employee_attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_leaves`
--
ALTER TABLE `employee_leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_sallary_logs`
--
ALTER TABLE `employee_sallary_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_schedules`
--
ALTER TABLE `exam_schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_types`
--
ALTER TABLE `exam_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `exam_types_name_unique` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fee_categories`
--
ALTER TABLE `fee_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fee_categories_name_unique` (`name`);

--
-- Indexes for table `fee_category_amounts`
--
ALTER TABLE `fee_category_amounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_purposes`
--
ALTER TABLE `leave_purposes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `leave_purposes_name_unique` (`name`);

--
-- Indexes for table `marks_grades`
--
ALTER TABLE `marks_grades`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `principal_messages`
--
ALTER TABLE `principal_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `public_messages`
--
ALTER TABLE `public_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_details`
--
ALTER TABLE `school_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_events`
--
ALTER TABLE `school_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_notices`
--
ALTER TABLE `school_notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_subjects`
--
ALTER TABLE `school_subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `school_subjects_name_unique` (`name`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `slider_images`
--
ALTER TABLE `slider_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_attendances`
--
ALTER TABLE `student_attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_classes`
--
ALTER TABLE `student_classes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_classes_name_unique` (`name`);

--
-- Indexes for table `student_groups`
--
ALTER TABLE `student_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_groups_name_unique` (`name`);

--
-- Indexes for table `student_marks`
--
ALTER TABLE `student_marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_shifts`
--
ALTER TABLE `student_shifts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_shifts_name_unique` (`name`);

--
-- Indexes for table `student_years`
--
ALTER TABLE `student_years`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_years_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_employee_salaries`
--
ALTER TABLE `account_employee_salaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `account_other_costs`
--
ALTER TABLE `account_other_costs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `account_student_fees`
--
ALTER TABLE `account_student_fees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;

--
-- AUTO_INCREMENT for table `admission_forms`
--
ALTER TABLE `admission_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `assign_students`
--
ALTER TABLE `assign_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `assign_subjects`
--
ALTER TABLE `assign_subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `assign_teacher_subjects`
--
ALTER TABLE `assign_teacher_subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `discount_students`
--
ALTER TABLE `discount_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `employee_attendances`
--
ALTER TABLE `employee_attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `employee_leaves`
--
ALTER TABLE `employee_leaves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employee_sallary_logs`
--
ALTER TABLE `employee_sallary_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `exam_schedules`
--
ALTER TABLE `exam_schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `exam_types`
--
ALTER TABLE `exam_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fee_categories`
--
ALTER TABLE `fee_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fee_category_amounts`
--
ALTER TABLE `fee_category_amounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `leave_purposes`
--
ALTER TABLE `leave_purposes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `marks_grades`
--
ALTER TABLE `marks_grades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `principal_messages`
--
ALTER TABLE `principal_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `public_messages`
--
ALTER TABLE `public_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `school_details`
--
ALTER TABLE `school_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `school_events`
--
ALTER TABLE `school_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `school_notices`
--
ALTER TABLE `school_notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `school_subjects`
--
ALTER TABLE `school_subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `slider_images`
--
ALTER TABLE `slider_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `student_attendances`
--
ALTER TABLE `student_attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=347;

--
-- AUTO_INCREMENT for table `student_classes`
--
ALTER TABLE `student_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student_groups`
--
ALTER TABLE `student_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_marks`
--
ALTER TABLE `student_marks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=506;

--
-- AUTO_INCREMENT for table `student_shifts`
--
ALTER TABLE `student_shifts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_years`
--
ALTER TABLE `student_years`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
