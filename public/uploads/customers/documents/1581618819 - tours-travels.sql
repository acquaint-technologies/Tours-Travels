-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2020 at 01:50 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tours-travels`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial_no` bigint(20) DEFAULT NULL,
  `tracking_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `resident_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` tinyint(4) NOT NULL COMMENT '1=Male | 2=Female',
  `type` tinyint(4) NOT NULL COMMENT '1=Individual | 2=Group',
  `group_id` bigint(20) DEFAULT NULL,
  `management` tinyint(4) NOT NULL COMMENT '1=Private | 2=Government',
  `identity` tinyint(4) NOT NULL COMMENT '1=NID | 2=Birth Certificate',
  `nid_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_certificate_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` tinyint(4) NOT NULL COMMENT '1=Single | 2=Married | 3=Others',
  `current_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_police_station` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_postcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_police_station` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_postcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spouse_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dependent_id` bigint(20) DEFAULT NULL,
  `maharam_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `serial_no`, `tracking_no`, `full_name`, `father_name`, `mother_name`, `date_of_birth`, `resident_type`, `gender`, `type`, `group_id`, `management`, `identity`, `nid_number`, `birth_certificate_number`, `occupation`, `company_name`, `email`, `passport_id`, `mobile`, `marital_status`, `current_address`, `current_police_station`, `current_district`, `current_postcode`, `permanent_address`, `permanent_police_station`, `permanent_district`, `permanent_postcode`, `photo`, `spouse_name`, `dependent_id`, `maharam_id`, `created_at`, `updated_at`) VALUES
(1, 40991671, '1233465', 'Ferdous Anam', 'Md. Raihan', 'Mst. Khujista Akhter Banu', '1995-12-29', 'NRB', 1, 2, 5, 1, 1, '19950000000004', NULL, 'Private Job', 'Acquaint technologies', 'ferdous.anam@gmail.com', '1', '01738238012', 1, 'House #26, Road #2, PC Culture Housing (Shekhertek), Adabar, Dhaka', '365', '47', '1207', 'Setabganj', '409', '54', '5216', '1580517528 - Anam.png', NULL, NULL, 2, '2020-01-31 18:38:48', '2020-02-08 23:42:06'),
(2, 94574124, NULL, 'Hasan Ahmed', NULL, NULL, '2020-02-02', 'Bangladeshi', 1, 1, 5, 1, 1, 'Ferdous', NULL, 'Govt. Job', NULL, 'ferdous.anam@gmail.com', '2', '01738238012', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1580550124 - Anam.png', NULL, NULL, NULL, '2020-02-01 03:42:04', '2020-02-01 19:04:41'),
(3, NULL, NULL, 'Md. Ferdous Anam', NULL, NULL, '2020-02-02', 'Bangladeshi', 1, 1, 5, 1, 1, '00000000000000000000', NULL, 'Govt. Job', NULL, 'ferdous.anam@gmail.com', '5', '01738238012', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1580584838 - IMG20191216100726.jpg', NULL, NULL, NULL, '2020-02-01 19:20:38', '2020-02-01 19:20:38'),
(4, NULL, NULL, 'Md. Ferdous Anam', NULL, NULL, '2020-02-02', 'Bangladeshi', 1, 1, NULL, 1, 1, '00000000000000000000', NULL, 'Govt. Job', NULL, 'ferdous.anam@gmail.com', '6', '01738238012', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1580584909 - IMG20191216100726.jpg', NULL, NULL, NULL, '2020-02-01 19:21:49', '2020-02-01 19:21:49'),
(5, NULL, NULL, 'Md. Ferdous Anam', NULL, NULL, '2020-02-02', 'Bangladeshi', 1, 1, NULL, 1, 1, '00000000000000000000', NULL, 'Govt. Job', NULL, 'ferdous.anam@gmail.com', '7', '01738238012', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1580585016 - IMG20191216100726.jpg', NULL, NULL, NULL, '2020-02-01 19:23:36', '2020-02-01 19:23:36'),
(6, 1006, NULL, 'Md. Ferdous Anam', NULL, NULL, '2020-02-02', 'Bangladeshi', 1, 1, NULL, 1, 1, '00000000000000000000', NULL, 'Govt. Job', NULL, 'ferdous.anam@gmail.com', '8', '01738238012', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1580585064 - IMG20191216100726.jpg', NULL, NULL, NULL, '2020-02-01 19:24:24', '2020-02-01 19:24:24');

-- --------------------------------------------------------

--
-- Table structure for table `customer_passports`
--

CREATE TABLE `customer_passports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `passport_type` tinyint(4) NOT NULL COMMENT '1=General | 2=Government | 3=Others',
  `issue_date` date DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `issue_location` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_passports`
--

INSERT INTO `customer_passports` (`id`, `full_name`, `passport_no`, `date_of_birth`, `passport_type`, `issue_date`, `expiry_date`, `issue_location`, `created_at`, `updated_at`) VALUES
(1, 'Ferdous Anam', '8888444455555', '1995-12-29', 1, '2019-12-01', '2020-09-01', 'Dhaka, Bangladesh', '2020-02-01 15:00:04', '2020-02-02 14:21:51'),
(2, NULL, '9999555556666', NULL, 1, '2019-12-01', '2020-09-01', 'Dhaka, Bangladesh', '2020-02-01 15:00:04', '2020-02-01 15:00:04'),
(3, 'Md. Ferdous Anam', '11122223333', '2020-02-02', 3, '2017-02-01', '2022-02-10', 'Dinajpur', '2020-02-01 19:10:28', '2020-02-02 14:34:14'),
(4, NULL, '11122223333', NULL, 2, '2017-02-01', '2022-02-10', 'Dinajpur', '2020-02-01 19:18:56', '2020-02-01 19:18:56'),
(5, NULL, '11122223333', NULL, 2, '2017-02-01', '2022-02-10', 'Dinajpur', '2020-02-01 19:20:38', '2020-02-01 19:20:38'),
(6, NULL, '11122223333', NULL, 2, '2017-02-01', '2022-02-10', 'Dinajpur', '2020-02-01 19:21:49', '2020-02-01 19:21:49'),
(7, NULL, '11122223333', NULL, 2, '2017-02-01', '2022-02-10', 'Dinajpur', '2020-02-01 19:23:36', '2020-02-01 19:23:36'),
(8, NULL, '11122223333', NULL, 2, '2017-02-01', '2022-02-10', 'Dinajpur', '2020-02-01 19:24:24', '2020-02-01 19:24:24');

-- --------------------------------------------------------

--
-- Table structure for table `dev_app_details`
--

CREATE TABLE `dev_app_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `app_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'logo.png',
  `brand_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'brand.png',
  `app_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'favicon.ico',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dev_app_details`
--

INSERT INTO `dev_app_details` (`id`, `app_name`, `company_name`, `company_address`, `company_contact`, `company_logo`, `brand_logo`, `app_icon`, `created_at`, `updated_at`) VALUES
(1, 'Tours & Travels', 'Hajj & Omrah Travels', 'Dhaka - 1207, Bangladesh', '09638048849', 'logo.png', 'brand.png', 'favicon.ico', '2020-01-27 10:11:05', '2020-01-27 10:14:15');

-- --------------------------------------------------------

--
-- Table structure for table `dev_developer_details`
--

CREATE TABLE `dev_developer_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dev_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dev_website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dev_footer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dev_developer_details`
--

INSERT INTO `dev_developer_details` (`id`, `dev_name`, `dev_website`, `dev_footer`, `created_at`, `updated_at`) VALUES
(1, 'Ferdous Anam', 'https://ferdousanam.com', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dev_mode_setup`
--

CREATE TABLE `dev_mode_setup` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `developer_mode` int(11) NOT NULL DEFAULT 1 COMMENT '1 = On & 0 = off',
  `attendance_type` int(11) NOT NULL DEFAULT 1,
  `developer` int(11) NOT NULL DEFAULT 100,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dev_mode_setup`
--

INSERT INTO `dev_mode_setup` (`id`, `developer_mode`, `attendance_type`, `developer`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 100, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(2) NOT NULL,
  `name` varchar(25) NOT NULL,
  `bn_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `bn_name`) VALUES
(1, 'Comilla', 'কুমিল্লা'),
(2, 'Feni', 'ফেনী'),
(3, 'Brahmanbaria', 'ব্রাহ্মণবাড়িয়া'),
(4, 'Rangamati', 'রাঙ্গামাটি'),
(5, 'Noakhali', 'নোয়াখালী'),
(6, 'Chandpur', 'চাঁদপুর'),
(7, 'Lakshmipur', 'লক্ষ্মীপুর'),
(8, 'Chattogram', 'চট্টগ্রাম'),
(9, 'Coxsbazar', 'কক্সবাজার'),
(10, 'Khagrachhari', 'খাগড়াছড়ি'),
(11, 'Bandarban', 'বান্দরবান'),
(12, 'Sirajganj', 'সিরাজগঞ্জ'),
(13, 'Pabna', 'পাবনা'),
(14, 'Bogura', 'বগুড়া'),
(15, 'Rajshahi', 'রাজশাহী'),
(16, 'Natore', 'নাটোর'),
(17, 'Joypurhat', 'জয়পুরহাট'),
(18, 'Chapainawabganj', 'চাঁপাইনবাবগঞ্জ'),
(19, 'Naogaon', 'নওগাঁ'),
(20, 'Jashore', 'যশোর'),
(21, 'Satkhira', 'সাতক্ষীরা'),
(22, 'Meherpur', 'মেহেরপুর'),
(23, 'Narail', 'নড়াইল'),
(24, 'Chuadanga', 'চুয়াডাঙ্গা'),
(25, 'Kushtia', 'কুষ্টিয়া'),
(26, 'Magura', 'মাগুরা'),
(27, 'Khulna', 'খুলনা'),
(28, 'Bagerhat', 'বাগেরহাট'),
(29, 'Jhenaidah', 'ঝিনাইদহ'),
(30, 'Jhalakathi', 'ঝালকাঠি'),
(31, 'Patuakhali', 'পটুয়াখালী'),
(32, 'Pirojpur', 'পিরোজপুর'),
(33, 'Barisal', 'বরিশাল'),
(34, 'Bhola', 'ভোলা'),
(35, 'Barguna', 'বরগুনা'),
(36, 'Sylhet', 'সিলেট'),
(37, 'Moulvibazar', 'মৌলভীবাজার'),
(38, 'Habiganj', 'হবিগঞ্জ'),
(39, 'Sunamganj', 'সুনামগঞ্জ'),
(40, 'Narsingdi', 'নরসিংদী'),
(41, 'Gazipur', 'গাজীপুর'),
(42, 'Shariatpur', 'শরীয়তপুর'),
(43, 'Narayanganj', 'নারায়ণগঞ্জ'),
(44, 'Tangail', 'টাঙ্গাইল'),
(45, 'Kishoreganj', 'কিশোরগঞ্জ'),
(46, 'Manikganj', 'মানিকগঞ্জ'),
(47, 'Dhaka', 'ঢাকা'),
(48, 'Munshiganj', 'মুন্সিগঞ্জ'),
(49, 'Rajbari', 'রাজবাড়ী'),
(50, 'Madaripur', 'মাদারীপুর'),
(51, 'Gopalganj', 'গোপালগঞ্জ'),
(52, 'Faridpur', 'ফরিদপুর'),
(53, 'Panchagarh', 'পঞ্চগড়'),
(54, 'Dinajpur', 'দিনাজপুর'),
(55, 'Lalmonirhat', 'লালমনিরহাট'),
(56, 'Nilphamari', 'নীলফামারী'),
(57, 'Gaibandha', 'গাইবান্ধা'),
(58, 'Thakurgaon', 'ঠাকুরগাঁও'),
(59, 'Rangpur', 'রংপুর'),
(60, 'Kurigram', 'কুড়িগ্রাম'),
(61, 'Sherpur', 'শেরপুর'),
(62, 'Mymensingh', 'ময়মনসিংহ'),
(63, 'Jamalpur', 'জামালপুর'),
(64, 'Netrokona', 'নেত্রকোণা');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leader_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `management_type` tinyint(4) NOT NULL COMMENT '0=Public | 1=Private',
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `group_name`, `leader_name`, `management_type`, `address`, `contact_no`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Group 1', 'Mosh Hamedani', 0, 'Dhaka\n', '4654874132468', 'group1@mail.com', '2020-01-30 15:59:59', '2020-01-30 16:00:04'),
(2, 'Group 2', 'Leader 2', 0, 'Dhaka\n', '01744444444', 'group2@mail.com', '2020-01-30 15:59:59', '2020-01-30 16:00:04'),
(3, 'Group 3', 'Leader 3', 1, 'Dhaka\n', '01755555555', 'group3@mail.com', '2020-01-30 15:59:59', '2020-01-30 16:00:04'),
(4, 'Group 4', 'Group 4 Leader', 1, 'House #26, Road #2, PC Culture Housing (Shekhertek), Adabar, Dhaka', '01738238012', 'anamwap@gmail.com', '2020-01-30 11:45:07', '2020-01-30 11:45:07'),
(5, 'Group 5', 'Group 5 Leader', 0, 'House #26, Road #2, PC Culture Housing (Shekhertek), Adabar, Dhaka', '01738238012', 'group5@gmail.com', '2020-01-30 11:45:35', '2020-01-30 12:09:00'),
(6, 'Group 6', 'Leader 6', 1, 'House #26, Road #2, PC Culture Housing (Shekhertek), Adabar, Dhaka', '01738238012', 'ferdous.anam@gmail.com', '2020-01-30 11:46:54', '2020-01-30 11:46:54'),
(7, 'Group 7', 'Group 7 Leader', 1, 'House #26, Road #2, PC Culture Housing (Shekhertek), Adabar, Dhaka', '01738238012', 'anamwap@gmail.com', '2020-01-30 12:01:51', '2020-01-30 12:08:37');

-- --------------------------------------------------------

--
-- Table structure for table `hajjs`
--

CREATE TABLE `hajjs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=Hajj | 2=Omra Hajj',
  `serial_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` year(4) DEFAULT NULL,
  `hijri` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `package_id` bigint(20) DEFAULT NULL,
  `departure_status` bigint(20) DEFAULT NULL,
  `payment_status` bigint(20) NOT NULL DEFAULT 0 COMMENT '0=Partially Paid | 1=Paid',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hajjs`
--

INSERT INTO `hajjs` (`id`, `type`, `serial_no`, `year`, `hijri`, `start_date`, `end_date`, `description`, `customer_id`, `package_id`, `departure_status`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Haji-1001', 2020, '1700', '2020-03-01', '2020-03-15', NULL, 1, 1, 0, 0, '2020-02-04 17:26:27', '2020-02-04 17:26:27'),
(2, 1, 'Haji-1002', 2020, '1700', '2020-03-01', '2020-03-16', 'Desc', 2, 1, 0, 0, '2020-02-04 17:49:05', '2020-02-04 17:49:05'),
(3, 1, 'Haji-1003', 2020, '1700', '2020-03-01', '2020-03-17', 'Updated', 3, 1, 1, 0, '2020-02-04 17:49:05', '2020-02-04 18:48:13'),
(4, 2, 'Omra Haji-1001', 2020, NULL, '2020-03-01', '2019-03-10', 'Paid', 6, 4, 1, 1, '2020-02-04 18:55:27', '2020-02-04 18:57:04');

-- --------------------------------------------------------

--
-- Table structure for table `hajj_payments`
--

CREATE TABLE `hajj_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hajj_id` bigint(20) DEFAULT NULL,
  `voucher_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=Cash | 2=Bank/Cheque',
  `depositor_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_branch_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposit_date` date DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=Pending | 1=Paid',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hajj_payments`
--

INSERT INTO `hajj_payments` (`id`, `hajj_id`, `voucher_name`, `type`, `depositor_name`, `bank_name`, `bank_branch_name`, `deposit_date`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '123654', 2, 'Kamran Hossain', 'DBBL', 'Adabar', '2020-02-08', '50000.00', 1, '2020-02-07 19:20:16', '2020-02-07 20:10:54'),
(4, 4, '123655', 2, 'Kamran Hossain', 'DBBL', 'Adabar', '2020-02-14', '20000.00', 1, '2020-02-07 20:20:41', '2020-02-07 20:20:41'),
(5, 4, '123656', 1, 'Kamran Hossain', 'DBBL', 'Adabar', '2020-02-16', '20000.00', 1, '2020-02-07 20:26:57', '2020-02-07 20:37:02');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `selector` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint(20) NOT NULL,
  `serial_no` int(11) NOT NULL,
  `menu_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sidebar_visibility` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 = On & 0 = Off',
  `status` int(11) NOT NULL COMMENT '1 = Active & 0 = Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `selector`, `parent_id`, `serial_no`, `menu_name`, `route_name`, `icon`, `sidebar_visibility`, `status`, `created_at`, `updated_at`) VALUES
(1, 'dashboard', 0, 1, 'Dashboard', 'dashboard', 'fa fa-home', 1, 1, '2020-01-31 06:10:21', '2020-02-08 19:22:23'),
(2, 'groups', 0, 2, 'Groups', '#', 'flaticon2-group\r\n', 1, 1, '2020-01-31 06:10:21', '2020-02-08 19:22:23'),
(3, 'create-groups', 2, 1, 'Add New Group', 'groups/create', NULL, 0, 1, '2020-01-31 06:10:21', '2020-02-08 19:22:23'),
(4, 'groups', 2, 2, 'All Group List', 'groups', NULL, 1, 1, '2020-01-31 06:10:21', '2020-02-08 19:22:23'),
(5, 'services-3', 2, 3, 'Services 3', 'services-3', 'fa fa-hand-o-right', 0, 0, '2020-01-31 06:10:21', '2020-02-08 19:22:23'),
(6, 'services-4', 2, 4, 'Services 4', 'services-4', 'fa fa-hand-o-right', 0, 0, '2020-01-31 06:10:21', '2020-02-08 19:22:23'),
(7, 'services-5', 2, 5, 'Services 5', 'services-5', 'fa fa-hand-o-right', 0, 0, '2020-01-31 06:10:21', '2020-02-08 19:22:23'),
(8, 'services-1-1', 3, 1, 'Services 1.1', 'services-1-1', 'fa fa-check', 0, 0, '2020-01-31 06:10:21', '2020-02-08 19:22:23'),
(9, 'services-1-2', 3, 2, 'Services 1.2', 'services-1-2', 'fa fa-check', 0, 0, '2020-01-31 06:10:21', '2020-02-08 19:22:23'),
(10, 'services-1-3', 3, 3, 'Services 1.3', 'services-1-3', 'fa fa-check', 0, 0, '2020-01-31 06:10:21', '2020-02-08 19:22:23'),
(11, 'Customer-management', 0, 3, 'Customer Management', '#', 'fa fa-user', 1, 1, '2020-01-31 06:10:21', '2020-02-08 19:22:23'),
(12, 'add-new-customer', 11, 1, 'Add New Customer', 'customer/create', NULL, 0, 1, '2020-01-31 06:13:33', '2020-02-08 19:22:23'),
(13, 'all-customer-list', 11, 2, 'All Customer List', 'customer', NULL, 1, 1, '2020-01-31 06:15:56', '2020-02-08 19:22:23'),
(14, 'hajj-management', 0, 4, 'Hajj Management', '#', 'fa fa-building', 1, 1, '2020-01-31 06:24:09', '2020-02-08 19:22:23'),
(15, 'omra-hajj-management', 0, 5, 'Omra Hajj Management', '#', 'fa fa-home', 1, 1, '2020-01-31 06:25:45', '2020-02-08 19:22:23'),
(16, 'passport-management', 0, 7, 'Passport Management', '#', 'fa fa-book', 1, 1, '2020-01-31 06:26:34', '2020-02-08 19:22:23'),
(17, 'package-management', 0, 6, 'Package Management', '#', 'fa fa-box', 1, 1, '2020-01-31 06:28:44', '2020-02-08 19:22:23'),
(18, 'add-haji-information', 14, 1, 'Add Haji Information', 'haji/create', NULL, 0, 1, '2020-01-31 06:34:37', '2020-02-08 19:22:23'),
(19, 'all-haji-information', 14, 2, 'All Haji Information', 'haji', NULL, 1, 1, '2020-01-31 06:36:47', '2020-02-08 19:22:23'),
(20, 'add-new-omra-haji-information', 15, 1, 'Add New Omra Haji Information', 'omra-haji/create', NULL, 0, 1, '2020-01-31 06:38:09', '2020-02-08 19:22:23'),
(21, 'all-omra-haji-information', 15, 2, 'All Omra Haji Information', 'omra-haji', NULL, 1, 1, '2020-01-31 06:39:00', '2020-02-08 19:22:23'),
(22, 'add-hajj-package', 17, 1, 'Add Hajj Package', 'hajj-package/create', NULL, 0, 1, '2020-01-31 06:53:50', '2020-02-08 19:22:23'),
(23, 'all-hajj-package', 17, 2, 'All Hajj Packages', 'hajj-package', NULL, 1, 1, '2020-01-31 06:55:22', '2020-02-08 19:22:23'),
(24, 'add-omra-hajj-package', 17, 3, 'Add Omra Hajj Package', 'omra-hajj-package/create', NULL, 0, 1, '2020-01-31 06:57:17', '2020-02-08 19:22:23'),
(25, 'all-omra-hajj-packages', 17, 4, 'All Omra Hajj Packages', 'omra-hajj-package', NULL, 1, 1, '2020-01-31 06:58:06', '2020-02-08 19:22:23'),
(26, 'add-passport-information', 16, 1, 'Add Passport Information', 'passport-info/create', NULL, 1, 1, '2020-01-31 07:13:32', '2020-02-08 19:22:23'),
(27, 'all-passport-list', 16, 2, 'All Passport List', 'passport-info', NULL, 1, 1, '2020-01-31 07:15:26', '2020-02-08 19:22:23'),
(28, 'check-passport-history', 16, 3, 'Check Passport History', 'passport-history', NULL, 1, 1, '2020-01-31 07:21:30', '2020-02-08 19:22:23'),
(29, 'reports', 0, 8, 'Reports', '#', 'fa fa-home', 1, 1, '2020-01-31 07:26:08', '2020-02-08 19:22:23'),
(30, 'sms-sending-system', 0, 9, 'SMS Sending System', 'sms-sending-system', 'fa fa-mobile', 1, 1, '2020-01-31 07:29:10', '2020-02-08 19:22:23'),
(31, 'customer-payment-details', 11, 3, 'Customer Payment Details', 'customer-payment', 'fa', 1, 1, '2020-02-03 10:01:18', '2020-02-08 19:22:23'),
(32, 'haji-payment-details', 14, 3, 'Haji Payment Details', 'haji-payment-details', 'fa', 1, 1, '2020-02-03 10:03:06', '2020-02-08 19:22:23'),
(33, 'omra-haji-payment-details', 15, 3, 'Omra Haji Payment Details', 'omra-haji-payment-details', 'fa', 1, 1, '2020-02-03 10:05:07', '2020-02-08 19:22:23'),
(34, 'makka-madina-management', 0, 6, 'Makka Madina Management', '#', 'fa fa-star', 1, 1, '2020-02-03 10:09:18', '2020-02-08 19:22:23'),
(35, 'hotel-rate-list', 34, 1, 'Hotel Rate List', 'hotel-rate', 'fa', 1, 1, '2020-02-03 10:11:52', '2020-02-08 19:22:23'),
(36, 'vehicle-rate-list', 34, 2, 'Vehicle Rate List', 'vehicle-rate', 'fa', 1, 1, '2020-02-03 10:12:50', '2020-02-08 19:22:23'),
(37, 'customer-report', 29, 1, 'Customer Report', 'customer-report', 'fa', 1, 1, '2020-02-03 10:17:31', '2020-02-08 19:22:23'),
(38, 'haji-report', 29, 2, 'Haji Report', 'haji-report', 'fa', 1, 1, '2020-02-03 10:18:00', '2020-02-08 19:22:23'),
(39, 'omra-haji-report', 29, 3, 'Omra Haji Report', 'omra-haji-report', 'fa', 1, 1, '2020-02-03 10:18:53', '2020-02-08 19:22:23'),
(40, 'passport-report', 29, 4, 'Passport Report', 'passport-report', 'fa', 1, 1, '2020-02-03 10:19:50', '2020-02-08 19:22:23');

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
(4, '2019_09_03_139999_add_new_columns_to_users_table', 2),
(5, '2019_09_03_141000_create_dev_developer_details_table', 2),
(6, '2019_09_03_141001_create_priorities_table', 2),
(7, '2019_09_03_154934_create_menus_table', 2),
(8, '2019_09_03_183043_create_priority_menu_table', 2),
(9, '2019_09_03_185154_create_dev_mode_setup_table', 2),
(10, '2019_09_03_185527_create_dev_app_details_table', 2),
(11, '2019_10_17_080139_create_profiles_table', 2),
(12, '2020_01_27_173921_create_groups_table', 3),
(13, '2020_01_27_173950_create_customers_table', 3),
(14, '2020_01_27_174200_create_customer_passports_table', 3),
(15, '2020_01_27_174241_create_payments_table', 3),
(16, '2020_01_27_174255_create_packages_table', 3),
(20, '2020_02_04_201221_create_hajjs_table', 4),
(21, '2020_02_04_214425_create_hajj_payments_table', 4),
(22, '2020_02_04_215037_create_passport_statuses_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_type` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=Hajj | 2=Omra Hajj',
  `package_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pack_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_days` int(11) NOT NULL DEFAULT 0,
  `total_price` double NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=Inactive | 1=Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `package_type`, `package_name`, `pack_code`, `no_of_days`, `total_price`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Package 1', '555X221', 29, 500000, 1, '2020-02-03 16:53:27', '2020-02-03 17:21:40'),
(2, 2, 'Package 1', '555X222', 15, 200000, 1, '2020-02-03 17:53:59', '2020-02-03 17:53:59'),
(3, 2, 'Package 2', '555X223', 12, 180000, 1, '2020-02-03 17:59:40', '2020-02-03 17:59:40'),
(4, 2, 'Package 3', '555X224', 13, 190000, 1, '2020-02-03 18:00:44', '2020-02-03 18:01:13');

-- --------------------------------------------------------

--
-- Table structure for table `passport_statuses`
--

CREATE TABLE `passport_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_id` bigint(20) DEFAULT NULL,
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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `package_id` bigint(20) NOT NULL,
  `voucher_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_type` tinyint(4) NOT NULL COMMENT '1=Cash | 2=Bank',
  `depositor_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposit_date` datetime DEFAULT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_branch_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paid_amount` double NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `priorities`
--

CREATE TABLE `priorities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `priority_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `priorities`
--

INSERT INTO `priorities` (`id`, `priority_name`, `priority_description`, `priority_status`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'Super Admin. This user has complete control in the application.', '1', '2020-01-27 10:11:05', '2020-01-27 10:11:05'),
(2, 'Admin', 'Project Admin', '1', '2020-02-08 17:09:25', '2020-02-08 17:09:25');

-- --------------------------------------------------------

--
-- Table structure for table `priority_menu`
--

CREATE TABLE `priority_menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `priority_id` bigint(20) NOT NULL,
  `menu_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `priority_menu`
--

INSERT INTO `priority_menu` (`id`, `priority_id`, `menu_id`, `created_at`, `updated_at`) VALUES
(95, 1, 1, NULL, NULL),
(96, 1, 2, NULL, NULL),
(97, 1, 4, NULL, NULL),
(98, 1, 11, NULL, NULL),
(99, 1, 12, NULL, NULL),
(100, 1, 13, NULL, NULL),
(101, 1, 31, NULL, NULL),
(102, 1, 14, NULL, NULL),
(103, 1, 18, NULL, NULL),
(104, 1, 19, NULL, NULL),
(105, 1, 32, NULL, NULL),
(106, 1, 15, NULL, NULL),
(107, 1, 20, NULL, NULL),
(108, 1, 21, NULL, NULL),
(109, 1, 33, NULL, NULL),
(110, 1, 17, NULL, NULL),
(111, 1, 22, NULL, NULL),
(112, 1, 23, NULL, NULL),
(113, 1, 24, NULL, NULL),
(114, 1, 25, NULL, NULL),
(115, 1, 34, NULL, NULL),
(116, 1, 35, NULL, NULL),
(117, 1, 36, NULL, NULL),
(118, 1, 16, NULL, NULL),
(119, 1, 26, NULL, NULL),
(120, 1, 27, NULL, NULL),
(121, 1, 28, NULL, NULL),
(122, 1, 29, NULL, NULL),
(123, 1, 37, NULL, NULL),
(124, 1, 38, NULL, NULL),
(125, 1, 39, NULL, NULL),
(126, 1, 40, NULL, NULL),
(127, 1, 30, NULL, NULL),
(128, 2, 1, NULL, NULL),
(129, 2, 2, NULL, NULL),
(130, 2, 4, NULL, NULL),
(131, 2, 11, NULL, NULL),
(132, 2, 14, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `phone`, `company_name`, `address`, `created_at`, `updated_at`) VALUES
(1, 1, '01738238012', 'United International University', 'House #26, Road #2, PC Culture Housing (Shekhertek), Adabar, Dhaka', '2020-01-30 09:07:19', '2020-01-30 09:07:19');

-- --------------------------------------------------------

--
-- Table structure for table `upazilas`
--

CREATE TABLE `upazilas` (
  `id` int(3) NOT NULL,
  `district_id` int(2) NOT NULL,
  `name` varchar(25) NOT NULL,
  `bn_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `upazilas`
--

INSERT INTO `upazilas` (`id`, `district_id`, `name`, `bn_name`) VALUES
(1, 1, 'Debidwar', 'দেবিদ্বার'),
(2, 1, 'Barura', 'বরুড়া'),
(3, 1, 'Brahmanpara', 'ব্রাহ্মণপাড়া'),
(4, 1, 'Chandina', 'চান্দিনা'),
(5, 1, 'Chauddagram', 'চৌদ্দগ্রাম'),
(6, 1, 'Daudkandi', 'দাউদকান্দি'),
(7, 1, 'Homna', 'হোমনা'),
(8, 1, 'Laksam', 'লাকসাম'),
(9, 1, 'Muradnagar', 'মুরাদনগর'),
(10, 1, 'Nangalkot', 'নাঙ্গলকোট'),
(11, 1, 'Comilla Sadar', 'কুমিল্লা সদর'),
(12, 1, 'Meghna', 'মেঘনা'),
(13, 1, 'Monohargonj', 'মনোহরগঞ্জ'),
(14, 1, 'Sadarsouth', 'সদর দক্ষিণ'),
(15, 1, 'Titas', 'তিতাস'),
(16, 1, 'Burichang', 'বুড়িচং'),
(17, 1, 'Lalmai', 'লালমাই'),
(18, 2, 'Chhagalnaiya', 'ছাগলনাইয়া'),
(19, 2, 'Feni Sadar', 'ফেনী সদর'),
(20, 2, 'Sonagazi', 'সোনাগাজী'),
(21, 2, 'Fulgazi', 'ফুলগাজী'),
(22, 2, 'Parshuram', 'পরশুরাম'),
(23, 2, 'Daganbhuiyan', 'দাগনভূঞা'),
(24, 3, 'Brahmanbaria Sadar', 'ব্রাহ্মণবাড়িয়া সদর'),
(25, 3, 'Kasba', 'কসবা'),
(26, 3, 'Nasirnagar', 'নাসিরনগর'),
(27, 3, 'Sarail', 'সরাইল'),
(28, 3, 'Ashuganj', 'আশুগঞ্জ'),
(29, 3, 'Akhaura', 'আখাউড়া'),
(30, 3, 'Nabinagar', 'নবীনগর'),
(31, 3, 'Bancharampur', 'বাঞ্ছারামপুর'),
(32, 3, 'Bijoynagar', 'বিজয়নগর'),
(33, 4, 'Rangamati Sadar', 'রাঙ্গামাটি সদর'),
(34, 4, 'Kaptai', 'কাপ্তাই'),
(35, 4, 'Kawkhali', 'কাউখালী'),
(36, 4, 'Baghaichari', 'বাঘাইছড়ি'),
(37, 4, 'Barkal', 'বরকল'),
(38, 4, 'Langadu', 'লংগদু'),
(39, 4, 'Rajasthali', 'রাজস্থলী'),
(40, 4, 'Belaichari', 'বিলাইছড়ি'),
(41, 4, 'Juraichari', 'জুরাছড়ি'),
(42, 4, 'Naniarchar', 'নানিয়ারচর'),
(43, 5, 'Noakhali Sadar', 'নোয়াখালী সদর'),
(44, 5, 'Companiganj', 'কোম্পানীগঞ্জ'),
(45, 5, 'Begumganj', 'বেগমগঞ্জ'),
(46, 5, 'Hatia', 'হাতিয়া'),
(47, 5, 'Subarnachar', 'সুবর্ণচর'),
(48, 5, 'Kabirhat', 'কবিরহাট'),
(49, 5, 'Senbug', 'সেনবাগ'),
(50, 5, 'Chatkhil', 'চাটখিল'),
(51, 5, 'Sonaimori', 'সোনাইমুড়ী'),
(52, 6, 'Haimchar', 'হাইমচর'),
(53, 6, 'Kachua', 'কচুয়া'),
(54, 6, 'Shahrasti', 'শাহরাস্তি	'),
(55, 6, 'Chandpur Sadar', 'চাঁদপুর সদর'),
(56, 6, 'Matlab South', 'মতলব দক্ষিণ'),
(57, 6, 'Hajiganj', 'হাজীগঞ্জ'),
(58, 6, 'Matlab North', 'মতলব উত্তর'),
(59, 6, 'Faridgonj', 'ফরিদগঞ্জ'),
(60, 7, 'Lakshmipur Sadar', 'লক্ষ্মীপুর সদর'),
(61, 7, 'Kamalnagar', 'কমলনগর'),
(62, 7, 'Raipur', 'রায়পুর'),
(63, 7, 'Ramgati', 'রামগতি'),
(64, 7, 'Ramganj', 'রামগঞ্জ'),
(65, 8, 'Rangunia', 'রাঙ্গুনিয়া'),
(66, 8, 'Sitakunda', 'সীতাকুন্ড'),
(67, 8, 'Mirsharai', 'মীরসরাই'),
(68, 8, 'Patiya', 'পটিয়া'),
(69, 8, 'Sandwip', 'সন্দ্বীপ'),
(70, 8, 'Banshkhali', 'বাঁশখালী'),
(71, 8, 'Boalkhali', 'বোয়ালখালী'),
(72, 8, 'Anwara', 'আনোয়ারা'),
(73, 8, 'Chandanaish', 'চন্দনাইশ'),
(74, 8, 'Satkania', 'সাতকানিয়া'),
(75, 8, 'Lohagara', 'লোহাগাড়া'),
(76, 8, 'Hathazari', 'হাটহাজারী'),
(77, 8, 'Fatikchhari', 'ফটিকছড়ি'),
(78, 8, 'Raozan', 'রাউজান'),
(79, 8, 'Karnafuli', 'কর্ণফুলী'),
(80, 9, 'Coxsbazar Sadar', 'কক্সবাজার সদর'),
(81, 9, 'Chakaria', 'চকরিয়া'),
(82, 9, 'Kutubdia', 'কুতুবদিয়া'),
(83, 9, 'Ukhiya', 'উখিয়া'),
(84, 9, 'Moheshkhali', 'মহেশখালী'),
(85, 9, 'Pekua', 'পেকুয়া'),
(86, 9, 'Ramu', 'রামু'),
(87, 9, 'Teknaf', 'টেকনাফ'),
(88, 10, 'Khagrachhari Sadar', 'খাগড়াছড়ি সদর'),
(89, 10, 'Dighinala', 'দিঘীনালা'),
(90, 10, 'Panchari', 'পানছড়ি'),
(91, 10, 'Laxmichhari', 'লক্ষীছড়ি'),
(92, 10, 'Mohalchari', 'মহালছড়ি'),
(93, 10, 'Manikchari', 'মানিকছড়ি'),
(94, 10, 'Ramgarh', 'রামগড়'),
(95, 10, 'Matiranga', 'মাটিরাঙ্গা'),
(96, 10, 'Guimara', 'গুইমারা'),
(97, 11, 'Bandarban Sadar', 'বান্দরবান সদর'),
(98, 11, 'Alikadam', 'আলীকদম'),
(99, 11, 'Naikhongchhari', 'নাইক্ষ্যংছড়ি'),
(100, 11, 'Rowangchhari', 'রোয়াংছড়ি'),
(101, 11, 'Lama', 'লামা'),
(102, 11, 'Ruma', 'রুমা'),
(103, 11, 'Thanchi', 'থানচি'),
(104, 12, 'Belkuchi', 'বেলকুচি'),
(105, 12, 'Chauhali', 'চৌহালি'),
(106, 12, 'Kamarkhand', 'কামারখন্দ'),
(107, 12, 'Kazipur', 'কাজীপুর'),
(108, 12, 'Raigonj', 'রায়গঞ্জ'),
(109, 12, 'Shahjadpur', 'শাহজাদপুর'),
(110, 12, 'Sirajganj Sadar', 'সিরাজগঞ্জ সদর'),
(111, 12, 'Tarash', 'তাড়াশ'),
(112, 12, 'Ullapara', 'উল্লাপাড়া'),
(113, 13, 'Sujanagar', 'সুজানগর'),
(114, 13, 'Ishurdi', 'ঈশ্বরদী'),
(115, 13, 'Bhangura', 'ভাঙ্গুড়া'),
(116, 13, 'Pabna Sadar', 'পাবনা সদর'),
(117, 13, 'Bera', 'বেড়া'),
(118, 13, 'Atghoria', 'আটঘরিয়া'),
(119, 13, 'Chatmohar', 'চাটমোহর'),
(120, 13, 'Santhia', 'সাঁথিয়া'),
(121, 13, 'Faridpur', 'ফরিদপুর'),
(122, 14, 'Kahaloo', 'কাহালু'),
(123, 14, 'Bogra Sadar', 'বগুড়া সদর'),
(124, 14, 'Shariakandi', 'সারিয়াকান্দি'),
(125, 14, 'Shajahanpur', 'শাজাহানপুর'),
(126, 14, 'Dupchanchia', 'দুপচাচিঁয়া'),
(127, 14, 'Adamdighi', 'আদমদিঘি'),
(128, 14, 'Nondigram', 'নন্দিগ্রাম'),
(129, 14, 'Sonatala', 'সোনাতলা'),
(130, 14, 'Dhunot', 'ধুনট'),
(131, 14, 'Gabtali', 'গাবতলী'),
(132, 14, 'Sherpur', 'শেরপুর'),
(133, 14, 'Shibganj', 'শিবগঞ্জ'),
(134, 15, 'Paba', 'পবা'),
(135, 15, 'Durgapur', 'দুর্গাপুর'),
(136, 15, 'Mohonpur', 'মোহনপুর'),
(137, 15, 'Charghat', 'চারঘাট'),
(138, 15, 'Puthia', 'পুঠিয়া'),
(139, 15, 'Bagha', 'বাঘা'),
(140, 15, 'Godagari', 'গোদাগাড়ী'),
(141, 15, 'Tanore', 'তানোর'),
(142, 15, 'Bagmara', 'বাগমারা'),
(143, 16, 'Natore Sadar', 'নাটোর সদর'),
(144, 16, 'Singra', 'সিংড়া'),
(145, 16, 'Baraigram', 'বড়াইগ্রাম'),
(146, 16, 'Bagatipara', 'বাগাতিপাড়া'),
(147, 16, 'Lalpur', 'লালপুর'),
(148, 16, 'Gurudaspur', 'গুরুদাসপুর'),
(149, 16, 'Naldanga', 'নলডাঙ্গা'),
(150, 17, 'Akkelpur', 'আক্কেলপুর'),
(151, 17, 'Kalai', 'কালাই'),
(152, 17, 'Khetlal', 'ক্ষেতলাল'),
(153, 17, 'Panchbibi', 'পাঁচবিবি'),
(154, 17, 'Joypurhat Sadar', 'জয়পুরহাট সদর'),
(155, 18, 'Chapainawabganj Sadar', 'চাঁপাইনবাবগঞ্জ সদর'),
(156, 18, 'Gomostapur', 'গোমস্তাপুর'),
(157, 18, 'Nachol', 'নাচোল'),
(158, 18, 'Bholahat', 'ভোলাহাট'),
(159, 18, 'Shibganj', 'শিবগঞ্জ'),
(160, 19, 'Mohadevpur', 'মহাদেবপুর'),
(161, 19, 'Badalgachi', 'বদলগাছী'),
(162, 19, 'Patnitala', 'পত্নিতলা'),
(163, 19, 'Dhamoirhat', 'ধামইরহাট'),
(164, 19, 'Niamatpur', 'নিয়ামতপুর'),
(165, 19, 'Manda', 'মান্দা'),
(166, 19, 'Atrai', 'আত্রাই'),
(167, 19, 'Raninagar', 'রাণীনগর'),
(168, 19, 'Naogaon Sadar', 'নওগাঁ সদর'),
(169, 19, 'Porsha', 'পোরশা'),
(170, 19, 'Sapahar', 'সাপাহার'),
(171, 20, 'Manirampur', 'মণিরামপুর'),
(172, 20, 'Abhaynagar', 'অভয়নগর'),
(173, 20, 'Bagherpara', 'বাঘারপাড়া'),
(174, 20, 'Chougachha', 'চৌগাছা'),
(175, 20, 'Jhikargacha', 'ঝিকরগাছা'),
(176, 20, 'Keshabpur', 'কেশবপুর'),
(177, 20, 'Jessore Sadar', 'যশোর সদর'),
(178, 20, 'Sharsha', 'শার্শা'),
(179, 21, 'Assasuni', 'আশাশুনি'),
(180, 21, 'Debhata', 'দেবহাটা'),
(181, 21, 'Kalaroa', 'কলারোয়া'),
(182, 21, 'Satkhira Sadar', 'সাতক্ষীরা সদর'),
(183, 21, 'Shyamnagar', 'শ্যামনগর'),
(184, 21, 'Tala', 'তালা'),
(185, 21, 'Kaliganj', 'কালিগঞ্জ'),
(186, 22, 'Mujibnagar', 'মুজিবনগর'),
(187, 22, 'Meherpur Sadar', 'মেহেরপুর সদর'),
(188, 22, 'Gangni', 'গাংনী'),
(189, 23, 'Narail Sadar', 'নড়াইল সদর'),
(190, 23, 'Lohagara', 'লোহাগড়া'),
(191, 23, 'Kalia', 'কালিয়া'),
(192, 24, 'Chuadanga Sadar', 'চুয়াডাঙ্গা সদর'),
(193, 24, 'Alamdanga', 'আলমডাঙ্গা'),
(194, 24, 'Damurhuda', 'দামুড়হুদা'),
(195, 24, 'Jibannagar', 'জীবননগর'),
(196, 25, 'Kushtia Sadar', 'কুষ্টিয়া সদর'),
(197, 25, 'Kumarkhali', 'কুমারখালী'),
(198, 25, 'Khoksa', 'খোকসা'),
(199, 25, 'Mirpur', 'মিরপুর'),
(200, 25, 'Daulatpur', 'দৌলতপুর'),
(201, 25, 'Bheramara', 'ভেড়ামারা'),
(202, 26, 'Shalikha', 'শালিখা'),
(203, 26, 'Sreepur', 'শ্রীপুর'),
(204, 26, 'Magura Sadar', 'মাগুরা সদর'),
(205, 26, 'Mohammadpur', 'মহম্মদপুর'),
(206, 27, 'Paikgasa', 'পাইকগাছা'),
(207, 27, 'Fultola', 'ফুলতলা'),
(208, 27, 'Digholia', 'দিঘলিয়া'),
(209, 27, 'Rupsha', 'রূপসা'),
(210, 27, 'Terokhada', 'তেরখাদা'),
(211, 27, 'Dumuria', 'ডুমুরিয়া'),
(212, 27, 'Botiaghata', 'বটিয়াঘাটা'),
(213, 27, 'Dakop', 'দাকোপ'),
(214, 27, 'Koyra', 'কয়রা'),
(215, 28, 'Fakirhat', 'ফকিরহাট'),
(216, 28, 'Bagerhat Sadar', 'বাগেরহাট সদর'),
(217, 28, 'Mollahat', 'মোল্লাহাট'),
(218, 28, 'Sarankhola', 'শরণখোলা'),
(219, 28, 'Rampal', 'রামপাল'),
(220, 28, 'Morrelganj', 'মোড়েলগঞ্জ'),
(221, 28, 'Kachua', 'কচুয়া'),
(222, 28, 'Mongla', 'মোংলা'),
(223, 28, 'Chitalmari', 'চিতলমারী'),
(224, 29, 'Jhenaidah Sadar', 'ঝিনাইদহ সদর'),
(225, 29, 'Shailkupa', 'শৈলকুপা'),
(226, 29, 'Harinakundu', 'হরিণাকুন্ডু'),
(227, 29, 'Kaliganj', 'কালীগঞ্জ'),
(228, 29, 'Kotchandpur', 'কোটচাঁদপুর'),
(229, 29, 'Moheshpur', 'মহেশপুর'),
(230, 30, 'Jhalakathi Sadar', 'ঝালকাঠি সদর'),
(231, 30, 'Kathalia', 'কাঠালিয়া'),
(232, 30, 'Nalchity', 'নলছিটি'),
(233, 30, 'Rajapur', 'রাজাপুর'),
(234, 31, 'Bauphal', 'বাউফল'),
(235, 31, 'Patuakhali Sadar', 'পটুয়াখালী সদর'),
(236, 31, 'Dumki', 'দুমকি'),
(237, 31, 'Dashmina', 'দশমিনা'),
(238, 31, 'Kalapara', 'কলাপাড়া'),
(239, 31, 'Mirzaganj', 'মির্জাগঞ্জ'),
(240, 31, 'Galachipa', 'গলাচিপা'),
(241, 31, 'Rangabali', 'রাঙ্গাবালী'),
(242, 32, 'Pirojpur Sadar', 'পিরোজপুর সদর'),
(243, 32, 'Nazirpur', 'নাজিরপুর'),
(244, 32, 'Kawkhali', 'কাউখালী'),
(245, 32, 'Zianagar', 'জিয়ানগর'),
(246, 32, 'Bhandaria', 'ভান্ডারিয়া'),
(247, 32, 'Mathbaria', 'মঠবাড়ীয়া'),
(248, 32, 'Nesarabad', 'নেছারাবাদ'),
(249, 33, 'Barisal Sadar', 'বরিশাল সদর'),
(250, 33, 'Bakerganj', 'বাকেরগঞ্জ'),
(251, 33, 'Babuganj', 'বাবুগঞ্জ'),
(252, 33, 'Wazirpur', 'উজিরপুর'),
(253, 33, 'Banaripara', 'বানারীপাড়া'),
(254, 33, 'Gournadi', 'গৌরনদী'),
(255, 33, 'Agailjhara', 'আগৈলঝাড়া'),
(256, 33, 'Mehendiganj', 'মেহেন্দিগঞ্জ'),
(257, 33, 'Muladi', 'মুলাদী'),
(258, 33, 'Hizla', 'হিজলা'),
(259, 34, 'Bhola Sadar', 'ভোলা সদর'),
(260, 34, 'Borhan Sddin', 'বোরহান উদ্দিন'),
(261, 34, 'Charfesson', 'চরফ্যাশন'),
(262, 34, 'Doulatkhan', 'দৌলতখান'),
(263, 34, 'Monpura', 'মনপুরা'),
(264, 34, 'Tazumuddin', 'তজুমদ্দিন'),
(265, 34, 'Lalmohan', 'লালমোহন'),
(266, 35, 'Amtali', 'আমতলী'),
(267, 35, 'Barguna Sadar', 'বরগুনা সদর'),
(268, 35, 'Betagi', 'বেতাগী'),
(269, 35, 'Bamna', 'বামনা'),
(270, 35, 'Pathorghata', 'পাথরঘাটা'),
(271, 35, 'Taltali', 'তালতলি'),
(272, 36, 'Balaganj', 'বালাগঞ্জ'),
(273, 36, 'Beanibazar', 'বিয়ানীবাজার'),
(274, 36, 'Bishwanath', 'বিশ্বনাথ'),
(275, 36, 'Companiganj', 'কোম্পানীগঞ্জ'),
(276, 36, 'Fenchuganj', 'ফেঞ্চুগঞ্জ'),
(277, 36, 'Golapganj', 'গোলাপগঞ্জ'),
(278, 36, 'Gowainghat', 'গোয়াইনঘাট'),
(279, 36, 'Jaintiapur', 'জৈন্তাপুর'),
(280, 36, 'Kanaighat', 'কানাইঘাট'),
(281, 36, 'Sylhet Sadar', 'সিলেট সদর'),
(282, 36, 'Zakiganj', 'জকিগঞ্জ'),
(283, 36, 'Dakshinsurma', 'দক্ষিণ সুরমা'),
(284, 36, 'Osmaninagar', 'ওসমানী নগর'),
(285, 37, 'Barlekha', 'বড়লেখা'),
(286, 37, 'Kamolganj', 'কমলগঞ্জ'),
(287, 37, 'Kulaura', 'কুলাউড়া'),
(288, 37, 'Moulvibazar Sadar', 'মৌলভীবাজার সদর'),
(289, 37, 'Rajnagar', 'রাজনগর'),
(290, 37, 'Sreemangal', 'শ্রীমঙ্গল'),
(291, 37, 'Juri', 'জুড়ী'),
(292, 38, 'Nabiganj', 'নবীগঞ্জ'),
(293, 38, 'Bahubal', 'বাহুবল'),
(294, 38, 'Ajmiriganj', 'আজমিরীগঞ্জ'),
(295, 38, 'Baniachong', 'বানিয়াচং'),
(296, 38, 'Lakhai', 'লাখাই'),
(297, 38, 'Chunarughat', 'চুনারুঘাট'),
(298, 38, 'Habiganj Sadar', 'হবিগঞ্জ সদর'),
(299, 38, 'Madhabpur', 'মাধবপুর'),
(300, 39, 'Sunamganj Sadar', 'সুনামগঞ্জ সদর'),
(301, 39, 'South Sunamganj', 'দক্ষিণ সুনামগঞ্জ'),
(302, 39, 'Bishwambarpur', 'বিশ্বম্ভরপুর'),
(303, 39, 'Chhatak', 'ছাতক'),
(304, 39, 'Jagannathpur', 'জগন্নাথপুর'),
(305, 39, 'Dowarabazar', 'দোয়ারাবাজার'),
(306, 39, 'Tahirpur', 'তাহিরপুর'),
(307, 39, 'Dharmapasha', 'ধর্মপাশা'),
(308, 39, 'Jamalganj', 'জামালগঞ্জ'),
(309, 39, 'Shalla', 'শাল্লা'),
(310, 39, 'Derai', 'দিরাই'),
(311, 40, 'Belabo', 'বেলাবো'),
(312, 40, 'Monohardi', 'মনোহরদী'),
(313, 40, 'Narsingdi Sadar', 'নরসিংদী সদর'),
(314, 40, 'Palash', 'পলাশ'),
(315, 40, 'Raipura', 'রায়পুরা'),
(316, 40, 'Shibpur', 'শিবপুর'),
(317, 41, 'Kaliganj', 'কালীগঞ্জ'),
(318, 41, 'Kaliakair', 'কালিয়াকৈর'),
(319, 41, 'Kapasia', 'কাপাসিয়া'),
(320, 41, 'Gazipur Sadar', 'গাজীপুর সদর'),
(321, 41, 'Sreepur', 'শ্রীপুর'),
(322, 42, 'Shariatpur Sadar', 'শরিয়তপুর সদর'),
(323, 42, 'Naria', 'নড়িয়া'),
(324, 42, 'Zajira', 'জাজিরা'),
(325, 42, 'Gosairhat', 'গোসাইরহাট'),
(326, 42, 'Bhedarganj', 'ভেদরগঞ্জ'),
(327, 42, 'Damudya', 'ডামুড্যা'),
(328, 43, 'Araihazar', 'আড়াইহাজার'),
(329, 43, 'Bandar', 'বন্দর'),
(330, 43, 'Narayanganj Sadar', 'নারায়নগঞ্জ সদর'),
(331, 43, 'Rupganj', 'রূপগঞ্জ'),
(332, 43, 'Sonargaon', 'সোনারগাঁ'),
(333, 44, 'Basail', 'বাসাইল'),
(334, 44, 'Bhuapur', 'ভুয়াপুর'),
(335, 44, 'Delduar', 'দেলদুয়ার'),
(336, 44, 'Ghatail', 'ঘাটাইল'),
(337, 44, 'Gopalpur', 'গোপালপুর'),
(338, 44, 'Madhupur', 'মধুপুর'),
(339, 44, 'Mirzapur', 'মির্জাপুর'),
(340, 44, 'Nagarpur', 'নাগরপুর'),
(341, 44, 'Sakhipur', 'সখিপুর'),
(342, 44, 'Tangail Sadar', 'টাঙ্গাইল সদর'),
(343, 44, 'Kalihati', 'কালিহাতী'),
(344, 44, 'Dhanbari', 'ধনবাড়ী'),
(345, 45, 'Itna', 'ইটনা'),
(346, 45, 'Katiadi', 'কটিয়াদী'),
(347, 45, 'Bhairab', 'ভৈরব'),
(348, 45, 'Tarail', 'তাড়াইল'),
(349, 45, 'Hossainpur', 'হোসেনপুর'),
(350, 45, 'Pakundia', 'পাকুন্দিয়া'),
(351, 45, 'Kuliarchar', 'কুলিয়ারচর'),
(352, 45, 'Kishoreganj Sadar', 'কিশোরগঞ্জ সদর'),
(353, 45, 'Karimgonj', 'করিমগঞ্জ'),
(354, 45, 'Bajitpur', 'বাজিতপুর'),
(355, 45, 'Austagram', 'অষ্টগ্রাম'),
(356, 45, 'Mithamoin', 'মিঠামইন'),
(357, 45, 'Nikli', 'নিকলী'),
(358, 46, 'Harirampur', 'হরিরামপুর'),
(359, 46, 'Saturia', 'সাটুরিয়া'),
(360, 46, 'Manikganj Sadar', 'মানিকগঞ্জ সদর'),
(361, 46, 'Gior', 'ঘিওর'),
(362, 46, 'Shibaloy', 'শিবালয়'),
(363, 46, 'Doulatpur', 'দৌলতপুর'),
(364, 46, 'Singiar', 'সিংগাইর'),
(365, 47, 'Savar', 'সাভার'),
(366, 47, 'Dhamrai', 'ধামরাই'),
(367, 47, 'Keraniganj', 'কেরাণীগঞ্জ'),
(368, 47, 'Nawabganj', 'নবাবগঞ্জ'),
(369, 47, 'Dohar', 'দোহার'),
(370, 48, 'Munshiganj Sadar', 'মুন্সিগঞ্জ সদর'),
(371, 48, 'Sreenagar', 'শ্রীনগর'),
(372, 48, 'Sirajdikhan', 'সিরাজদিখান'),
(373, 48, 'Louhajanj', 'লৌহজং'),
(374, 48, 'Gajaria', 'গজারিয়া'),
(375, 48, 'Tongibari', 'টংগীবাড়ি'),
(376, 49, 'Rajbari Sadar', 'রাজবাড়ী সদর'),
(377, 49, 'Goalanda', 'গোয়ালন্দ'),
(378, 49, 'Pangsa', 'পাংশা'),
(379, 49, 'Baliakandi', 'বালিয়াকান্দি'),
(380, 49, 'Kalukhali', 'কালুখালী'),
(381, 50, 'Madaripur Sadar', 'মাদারীপুর সদর'),
(382, 50, 'Shibchar', 'শিবচর'),
(383, 50, 'Kalkini', 'কালকিনি'),
(384, 50, 'Rajoir', 'রাজৈর'),
(385, 51, 'Gopalganj Sadar', 'গোপালগঞ্জ সদর'),
(386, 51, 'Kashiani', 'কাশিয়ানী'),
(387, 51, 'Tungipara', 'টুংগীপাড়া'),
(388, 51, 'Kotalipara', 'কোটালীপাড়া'),
(389, 51, 'Muksudpur', 'মুকসুদপুর'),
(390, 52, 'Faridpur Sadar', 'ফরিদপুর সদর'),
(391, 52, 'Alfadanga', 'আলফাডাঙ্গা'),
(392, 52, 'Boalmari', 'বোয়ালমারী'),
(393, 52, 'Sadarpur', 'সদরপুর'),
(394, 52, 'Nagarkanda', 'নগরকান্দা'),
(395, 52, 'Bhanga', 'ভাঙ্গা'),
(396, 52, 'Charbhadrasan', 'চরভদ্রাসন'),
(397, 52, 'Madhukhali', 'মধুখালী'),
(398, 52, 'Saltha', 'সালথা'),
(399, 53, 'Panchagarh Sadar', 'পঞ্চগড় সদর'),
(400, 53, 'Debiganj', 'দেবীগঞ্জ'),
(401, 53, 'Boda', 'বোদা'),
(402, 53, 'Atwari', 'আটোয়ারী'),
(403, 53, 'Tetulia', 'তেতুলিয়া'),
(404, 54, 'Nawabganj', 'নবাবগঞ্জ'),
(405, 54, 'Birganj', 'বীরগঞ্জ'),
(406, 54, 'Ghoraghat', 'ঘোড়াঘাট'),
(407, 54, 'Birampur', 'বিরামপুর'),
(408, 54, 'Parbatipur', 'পার্বতীপুর'),
(409, 54, 'Bochaganj', 'বোচাগঞ্জ'),
(410, 54, 'Kaharol', 'কাহারোল'),
(411, 54, 'Fulbari', 'ফুলবাড়ী'),
(412, 54, 'Dinajpur Sadar', 'দিনাজপুর সদর'),
(413, 54, 'Hakimpur', 'হাকিমপুর'),
(414, 54, 'Khansama', 'খানসামা'),
(415, 54, 'Birol', 'বিরল'),
(416, 54, 'Chirirbandar', 'চিরিরবন্দর'),
(417, 55, 'Lalmonirhat Sadar', 'লালমনিরহাট সদর'),
(418, 55, 'Kaliganj', 'কালীগঞ্জ'),
(419, 55, 'Hatibandha', 'হাতীবান্ধা'),
(420, 55, 'Patgram', 'পাটগ্রাম'),
(421, 55, 'Aditmari', 'আদিতমারী'),
(422, 56, 'Syedpur', 'সৈয়দপুর'),
(423, 56, 'Domar', 'ডোমার'),
(424, 56, 'Dimla', 'ডিমলা'),
(425, 56, 'Jaldhaka', 'জলঢাকা'),
(426, 56, 'Kishorganj', 'কিশোরগঞ্জ'),
(427, 56, 'Nilphamari Sadar', 'নীলফামারী সদর'),
(428, 57, 'Sadullapur', 'সাদুল্লাপুর'),
(429, 57, 'Gaibandha Sadar', 'গাইবান্ধা সদর'),
(430, 57, 'Palashbari', 'পলাশবাড়ী'),
(431, 57, 'Saghata', 'সাঘাটা'),
(432, 57, 'Gobindaganj', 'গোবিন্দগঞ্জ'),
(433, 57, 'Sundarganj', 'সুন্দরগঞ্জ'),
(434, 57, 'Phulchari', 'ফুলছড়ি'),
(435, 58, 'Thakurgaon Sadar', 'ঠাকুরগাঁও সদর'),
(436, 58, 'Pirganj', 'পীরগঞ্জ'),
(437, 58, 'Ranisankail', 'রাণীশংকৈল'),
(438, 58, 'Haripur', 'হরিপুর'),
(439, 58, 'Baliadangi', 'বালিয়াডাঙ্গী'),
(440, 59, 'Rangpur Sadar', 'রংপুর সদর'),
(441, 59, 'Gangachara', 'গংগাচড়া'),
(442, 59, 'Taragonj', 'তারাগঞ্জ'),
(443, 59, 'Badargonj', 'বদরগঞ্জ'),
(444, 59, 'Mithapukur', 'মিঠাপুকুর'),
(445, 59, 'Pirgonj', 'পীরগঞ্জ'),
(446, 59, 'Kaunia', 'কাউনিয়া'),
(447, 59, 'Pirgacha', 'পীরগাছা'),
(448, 60, 'Kurigram Sadar', 'কুড়িগ্রাম সদর'),
(449, 60, 'Nageshwari', 'নাগেশ্বরী'),
(450, 60, 'Bhurungamari', 'ভুরুঙ্গামারী'),
(451, 60, 'Phulbari', 'ফুলবাড়ী'),
(452, 60, 'Rajarhat', 'রাজারহাট'),
(453, 60, 'Ulipur', 'উলিপুর'),
(454, 60, 'Chilmari', 'চিলমারী'),
(455, 60, 'Rowmari', 'রৌমারী'),
(456, 60, 'Charrajibpur', 'চর রাজিবপুর'),
(457, 61, 'Sherpur Sadar', 'শেরপুর সদর'),
(458, 61, 'Nalitabari', 'নালিতাবাড়ী'),
(459, 61, 'Sreebordi', 'শ্রীবরদী'),
(460, 61, 'Nokla', 'নকলা'),
(461, 61, 'Jhenaigati', 'ঝিনাইগাতী'),
(462, 62, 'Fulbaria', 'ফুলবাড়ীয়া'),
(463, 62, 'Trishal', 'ত্রিশাল'),
(464, 62, 'Bhaluka', 'ভালুকা'),
(465, 62, 'Muktagacha', 'মুক্তাগাছা'),
(466, 62, 'Mymensingh Sadar', 'ময়মনসিংহ সদর'),
(467, 62, 'Dhobaura', 'ধোবাউড়া'),
(468, 62, 'Phulpur', 'ফুলপুর'),
(469, 62, 'Haluaghat', 'হালুয়াঘাট'),
(470, 62, 'Gouripur', 'গৌরীপুর'),
(471, 62, 'Gafargaon', 'গফরগাঁও'),
(472, 62, 'Iswarganj', 'ঈশ্বরগঞ্জ'),
(473, 62, 'Nandail', 'নান্দাইল'),
(474, 62, 'Tarakanda', 'তারাকান্দা'),
(475, 63, 'Jamalpur Sadar', 'জামালপুর সদর'),
(476, 63, 'Melandah', 'মেলান্দহ'),
(477, 63, 'Islampur', 'ইসলামপুর'),
(478, 63, 'Dewangonj', 'দেওয়ানগঞ্জ'),
(479, 63, 'Sarishabari', 'সরিষাবাড়ী'),
(480, 63, 'Madarganj', 'মাদারগঞ্জ'),
(481, 63, 'Bokshiganj', 'বকশীগঞ্জ'),
(482, 64, 'Barhatta', 'বারহাট্টা'),
(483, 64, 'Durgapur', 'দুর্গাপুর'),
(484, 64, 'Kendua', 'কেন্দুয়া'),
(485, 64, 'Atpara', 'আটপাড়া'),
(486, 64, 'Madan', 'মদন'),
(487, 64, 'Khaliajuri', 'খালিয়াজুরী'),
(488, 64, 'Kalmakanda', 'কলমাকান্দা'),
(489, 64, 'Mohongonj', 'মোহনগঞ্জ'),
(490, 64, 'Purbadhala', 'পূর্বধলা'),
(491, 64, 'Netrokona Sadar', 'নেত্রকোণা সদর');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_level` int(11) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1 = Active & 0 = Inactive',
  `last_login_at` datetime DEFAULT NULL,
  `last_login_ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_failed_login_at` datetime DEFAULT NULL,
  `last_failed_login_ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `profile_image`, `email_verified_at`, `password`, `remember_token`, `user_level`, `status`, `last_login_at`, `last_login_ip`, `last_failed_login_at`, `last_failed_login_ip`, `created_at`, `updated_at`) VALUES
(1, 'Ferdous Anam', 'ferdous.anam@gmail.com', NULL, NULL, '$2y$10$DWW8SD7OztVljW0sRGR.1emM2R1EVyDGVjmgwFjzceMbbxy/NUKe.', NULL, 1, 1, '2020-02-09 01:53:49', '127.0.0.1', '2020-02-02 20:05:15', '127.0.0.1', '2020-01-27 10:11:05', '2020-02-08 19:53:49'),
(2, 'Admin', 'admin@gmail.com', NULL, NULL, '$2y$10$55dlVIBn6ZBZoTVAFpCTN.EYidB/92aTIOAym7eYYCQvjW/32qUPC', NULL, 2, 1, '2020-02-09 01:52:03', '127.0.0.1', '2020-01-29 15:59:13', '::1', '2020-01-27 10:11:05', '2020-02-08 19:52:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_passports`
--
ALTER TABLE `customer_passports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dev_app_details`
--
ALTER TABLE `dev_app_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dev_developer_details`
--
ALTER TABLE `dev_developer_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dev_mode_setup`
--
ALTER TABLE `dev_mode_setup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hajjs`
--
ALTER TABLE `hajjs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hajjs_serial_no_unique` (`serial_no`);

--
-- Indexes for table `hajj_payments`
--
ALTER TABLE `hajj_payments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hajj_payments_voucher_name_unique` (`voucher_name`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passport_statuses`
--
ALTER TABLE `passport_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `priorities`
--
ALTER TABLE `priorities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `priority_menu`
--
ALTER TABLE `priority_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upazilas`
--
ALTER TABLE `upazilas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `district_id` (`district_id`);

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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer_passports`
--
ALTER TABLE `customer_passports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dev_app_details`
--
ALTER TABLE `dev_app_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dev_developer_details`
--
ALTER TABLE `dev_developer_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dev_mode_setup`
--
ALTER TABLE `dev_mode_setup`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hajjs`
--
ALTER TABLE `hajjs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hajj_payments`
--
ALTER TABLE `hajj_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `passport_statuses`
--
ALTER TABLE `passport_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `priorities`
--
ALTER TABLE `priorities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `priority_menu`
--
ALTER TABLE `priority_menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `upazilas`
--
ALTER TABLE `upazilas`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=492;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `upazilas`
--
ALTER TABLE `upazilas`
  ADD CONSTRAINT `upazilas_ibfk_2` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
