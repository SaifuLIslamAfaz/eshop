-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2021 at 11:05 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ctg_address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `dhaka_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `main_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hotline_number` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'opening & closing time',
  `footer_cover` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `fb_link` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `google_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'instragram',
  `youtube_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Rss link',
  `linked_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `whatsapp_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `about_us` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `privacy_policy` text COLLATE utf8_unicode_ci NOT NULL,
  `terms_condition` text COLLATE utf8_unicode_ci NOT NULL,
  `year` year(4) NOT NULL,
  `msg_notify` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_notify` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `allow_popup` tinyint(1) NOT NULL DEFAULT 0,
  `popup_image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `login_id`, `name`, `logo`, `website`, `ctg_address`, `dhaka_address`, `phone`, `email`, `main_image`, `hotline_number`, `time`, `footer_cover`, `details`, `fb_link`, `twitter_link`, `google_link`, `youtube_link`, `linked_link`, `whatsapp_link`, `about_us`, `privacy_policy`, `terms_condition`, `year`, `msg_notify`, `email_notify`, `allow_popup`, `popup_image`, `created_at`, `updated_at`) VALUES
(1, 0, 'cmart', NULL, 'cmart.com.bd', '                                                                                                      297/38 North Suritola (Opposit Suritola School) Nawabpur Road, Dhaka 1206                                                                                                      ', NULL, '+8809639177929', 'care@cmart.com.bd', NULL, '+8809639177929', '', NULL, '                                                                                                                                                                                                            ', 'http://www.facebook.com/', 'http://www.twitter.com/', 'http://www.instagram.com/', 'http://www.rss.com/', 'http://www.linkedin.com/', NULL, NULL, '', '', 0000, NULL, NULL, 0, NULL, '0000-00-00 00:00:00', '2020-11-28 08:05:04');

-- --------------------------------------------------------

--
-- Table structure for table `email_notify_api`
--

CREATE TABLE `email_notify_api` (
  `id` int(11) NOT NULL,
  `title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `login_id` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `user_name` varchar(250) DEFAULT NULL,
  `phone_number` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `user_type` tinyint(10) DEFAULT 1 COMMENT '1=admin,2=sub_admin,3=user',
  `verfiy_status` tinyint(5) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`login_id`, `f_name`, `l_name`, `email`, `user_name`, `phone_number`, `password`, `user_type`, `verfiy_status`, `created_at`, `updated_at`) VALUES
(3, '', '', 'admin@gmail.com', NULL, NULL, 'bVlYZE03YXZScnZaZnBhaDJPQml0Zz09', 1, 1, NULL, NULL),
(25, 'user', '1', 'user1@gmail.com', NULL, '98374983', 'bVlYZE03YXZScnZaZnBhaDJPQml0Zz09', 3, NULL, '2021-02-20 10:44:40', NULL),
(38, 'user', '2', 'user2@gmail.com', NULL, '9834759', 'bVlYZE03YXZScnZaZnBhaDJPQml0Zz09', 3, NULL, '2021-02-22 06:58:51', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_notify_api`
--
ALTER TABLE `email_notify_api`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `email_notify_api`
--
ALTER TABLE `email_notify_api`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
