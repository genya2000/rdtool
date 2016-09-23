-- phpMyAdmin SQL Dump
-- version 4.3.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015 年 4 月 24 日 18:54
-- サーバのバージョン： 5.5.42
-- PHP Version: 5.5.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `RDTOOL_DB`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `at_pointback`
--

CREATE TABLE IF NOT EXISTS `at_pointback` (
  `pback_id` int(11) NOT NULL,
  `pback_add` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pback_mid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pback_status` int(11) DEFAULT NULL,
  `pback_hdate` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pback_kdate` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pback_count` int(11) DEFAULT NULL,
  `pback_price` int(11) DEFAULT NULL,
  `pback_totalprice` int(11) DEFAULT NULL,
  `pback_reward` int(255) DEFAULT NULL,
  `pback_linkcode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pback_uniq` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pback_diffkey` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pback_pid` int(11) DEFAULT NULL,
  `parameterNo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pback_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `at_pointback`
--

INSERT INTO `at_pointback` (`pback_id`, `pback_add`, `pback_mid`, `pback_status`, `pback_hdate`, `pback_kdate`, `pback_count`, `pback_price`, `pback_totalprice`, `pback_reward`, `pback_linkcode`, `pback_uniq`, `pback_diffkey`, `pback_pid`, `parameterNo`, `pback_created_at`) VALUES
(40, 'BCr2BMfmw74mSo', '123', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'BCr2BMfmw74mSo', NULL, NULL, NULL, NULL, '2015-04-03 02:41:00'),
(41, 'BCr2BMfmw74mSo', '123', 1, NULL, NULL, NULL, NULL, NULL, NULL, 'BCr2BMfmw74mSo', NULL, NULL, NULL, NULL, '2015-04-03 02:41:06'),
(42, 'BCr2BMfmw74mSo', '123', 2, NULL, NULL, NULL, NULL, NULL, NULL, 'BCr2BMfmw74mSo', NULL, NULL, NULL, NULL, '2015-04-03 02:41:11'),
(43, 'A37WgkdptR3Zzg', '00', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'A37WgkdptR3Zzg', NULL, NULL, NULL, NULL, '2015-04-03 02:41:31'),
(44, 'A37WgkdptR3Zzg', '00', 1, NULL, NULL, NULL, NULL, NULL, NULL, 'A37WgkdptR3Zzg', NULL, NULL, NULL, NULL, '2015-04-03 02:41:35'),
(45, 'A37WgkdptR3Zzg', '00', 2, NULL, NULL, NULL, NULL, NULL, NULL, 'A37WgkdptR3Zzg', NULL, NULL, NULL, NULL, '2015-04-03 02:41:37'),
(46, 'dzTRKfpt3M0JUf', '00', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'dzTRKfpt3M0JUf', NULL, NULL, NULL, NULL, '2015-04-03 02:41:48'),
(47, 'dzTRKfpt3M0JUf', '00', 1, NULL, NULL, NULL, NULL, NULL, NULL, 'dzTRKfpt3M0JUf', NULL, NULL, NULL, NULL, '2015-04-03 02:41:51'),
(48, 'dzTRKfpt3M0JUf', '00', 2, NULL, NULL, NULL, NULL, NULL, NULL, 'dzTRKfpt3M0JUf', NULL, NULL, NULL, NULL, '2015-04-03 02:41:54'),
(49, 'Isp7E0zMA5XtwA', '00', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'Isp7E0zMA5XtwA', NULL, NULL, NULL, NULL, '2015-04-03 02:41:59'),
(50, 'Isp7E0zMA5XtwA', '00', 1, NULL, NULL, NULL, NULL, NULL, NULL, 'Isp7E0zMA5XtwA', NULL, NULL, NULL, NULL, '2015-04-03 02:42:02'),
(51, 'Isp7E0zMA5XtwA', '00', 2, NULL, NULL, NULL, NULL, NULL, NULL, 'Isp7E0zMA5XtwA', NULL, NULL, NULL, NULL, '2015-04-03 02:42:05'),
(52, 'YFlvO4wQrLElRh', '00', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'YFlvO4wQrLElRh', NULL, NULL, NULL, NULL, '2015-04-03 02:42:11'),
(53, 'YFlvO4wQrLElRh', '00', 1, NULL, NULL, NULL, NULL, NULL, NULL, 'YFlvO4wQrLElRh', NULL, NULL, NULL, NULL, '2015-04-03 02:42:15'),
(54, 'YFlvO4wQrLElRh', '00', 2, NULL, NULL, NULL, NULL, NULL, NULL, 'YFlvO4wQrLElRh', NULL, NULL, NULL, NULL, '2015-04-03 02:42:19'),
(55, 'enBTkQDDbRIxIe', '00', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'enBTkQDDbRIxIe', NULL, NULL, NULL, NULL, '2015-04-03 02:42:23'),
(56, 'enBTkQDDbRIxIe', '00', 1, NULL, NULL, NULL, NULL, NULL, NULL, 'enBTkQDDbRIxIe', NULL, NULL, NULL, NULL, '2015-04-03 02:42:26'),
(57, 'enBTkQDDbRIxIe', '00', 2, NULL, NULL, NULL, NULL, NULL, NULL, 'enBTkQDDbRIxIe', NULL, NULL, NULL, NULL, '2015-04-03 02:42:29');

-- --------------------------------------------------------

--
-- テーブルの構造 `ccounter`
--

CREATE TABLE IF NOT EXISTS `ccounter` (
  `counter` int(11) NOT NULL,
  `mediaid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parameterNo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `ccounter`
--

INSERT INTO `ccounter` (`counter`, `mediaid`, `parameterNo`, `created_at`) VALUES
(12, 'Yahoo', 'BCr2BMfmw74mSo', '2015-04-03 01:44:00'),
(13, 'Yahoo', 'BCr2BMfmw74mSo', '2015-04-03 01:44:15'),
(14, 'Yahoo', 'BCr2BMfmw74mSo', '2015-04-03 01:44:20'),
(15, 'Yahoo', 'BCr2BMfmw74mSo', '2015-04-03 01:44:27'),
(16, 'Yahoo', 'BCr2BMfmw74mSo', '2015-04-03 01:44:32'),
(17, 'Yahoo', 'BCr2BMfmw74mSo', '2015-04-03 01:44:37'),
(18, 'gl', 'A37WgkdptR3Zzg', '2015-04-03 01:45:33'),
(19, 'gl', 'A37WgkdptR3Zzg', '2015-04-03 01:45:39'),
(20, 'gl', 'A37WgkdptR3Zzg', '2015-04-03 01:45:50'),
(21, 'gl', 'A37WgkdptR3Zzg', '2015-04-03 01:46:01'),
(22, 'gl', 'dzTRKfpt3M0JUf', '2015-04-03 01:46:30'),
(23, 'gl', 'dzTRKfpt3M0JUf', '2015-04-03 01:46:36'),
(24, 'gl', 'dzTRKfpt3M0JUf', '2015-04-03 01:46:41'),
(25, 'gl', 'dzTRKfpt3M0JUf', '2015-04-03 01:46:46'),
(26, 'iij', 'Isp7E0zMA5XtwA', '2015-04-03 01:47:29'),
(27, 'iij', 'Isp7E0zMA5XtwA', '2015-04-03 01:47:34'),
(28, 'iij', 'Isp7E0zMA5XtwA', '2015-04-03 01:47:40'),
(29, 'iij', 'Isp7E0zMA5XtwA', '2015-04-03 01:47:47'),
(30, 'iij', 'Isp7E0zMA5XtwA', '2015-04-03 01:47:53'),
(31, 'iij', 'Isp7E0zMA5XtwA', '2015-04-03 01:47:58'),
(32, 'Yahoo', 'YFlvO4wQrLElRh', '2015-04-03 01:48:29'),
(33, 'Yahoo', 'YFlvO4wQrLElRh', '2015-04-03 01:48:35'),
(34, 'Yahoo', 'YFlvO4wQrLElRh', '2015-04-03 01:48:41'),
(35, 'Yahoo', 'enBTkQDDbRIxIe', '2015-04-03 01:49:49'),
(36, 'Yahoo', 'enBTkQDDbRIxIe', '2015-04-03 01:49:55'),
(37, 'Yahoo', 'enBTkQDDbRIxIe', '2015-04-03 01:50:00'),
(38, 'Yahoo', 'enBTkQDDbRIxIe', '2015-04-03 01:50:06'),
(39, 'Yahoo', 'enBTkQDDbRIxIe', '2015-04-03 01:50:11'),
(40, 'iij', '4qP227mDY2K7u5', '2015-04-03 04:45:11'),
(41, 'iij', '4qP227mDY2K7u5', '2015-04-03 04:45:19'),
(42, 'iij', '4qP227mDY2K7u5', '2015-04-03 04:45:24'),
(43, 'Yahoo', 'BCr2BMfmw74mSo', '2015-04-20 07:20:45'),
(44, 'gl', 'pK3e9Q2xANOZ64', '2015-04-20 07:57:26');

-- --------------------------------------------------------

--
-- テーブルの構造 `mst_campaign`
--

CREATE TABLE IF NOT EXISTS `mst_campaign` (
  `id` int(11) NOT NULL,
  `medianame` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parameterid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `campname` text COLLATE utf8_unicode_ci NOT NULL,
  `linkurl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `mst_campaign`
--

INSERT INTO `mst_campaign` (`id`, `medianame`, `parameterid`, `campname`, `linkurl`, `created_at`, `update_at`) VALUES
(20, 'Yahoo', 'BCr2BMfmw74mSo', 'ヤフー_20150403001', 'http://www.yahoo.co.jp', '2015-04-03 10:43:41', '2015-04-03 01:43:41'),
(21, 'gl', 'A37WgkdptR3Zzg', 'グーグル_20150403001', 'http://www.google.co.jp', '2015-04-03 10:45:26', '2015-04-03 01:45:26'),
(22, 'gl', 'dzTRKfpt3M0JUf', 'グーグル_20150403002', 'http://www.google.co.jp', '2015-04-03 10:46:22', '2015-04-03 01:46:22'),
(23, 'iij', 'Isp7E0zMA5XtwA', 'IIJ_20150403001', 'http://www.iij.ad.jp', '2015-04-03 10:47:23', '2015-04-03 01:47:23'),
(24, 'Yahoo', 'YFlvO4wQrLElRh', 'ヤフー_20150403002', 'http://www.yahoo.co.jp', '2015-04-03 10:48:22', '2015-04-03 01:48:22'),
(25, 'Yahoo', 'enBTkQDDbRIxIe', 'ヤフー_20150403003', 'http://www.yahoo.co.jp', '2015-04-03 10:49:40', '2015-04-03 01:49:40'),
(26, 'iij', '4qP227mDY2K7u5', 'IIJ_20150403003', 'http://www.iij.ad.jp/?=03', '2015-04-03 13:45:03', '2015-04-03 04:45:03'),
(27, 'gl', 'DfvTOq5QOaL8ZG', 'グーグル_20150420', 'http://google.co.jp', '2015-04-18 22:36:41', '2015-04-18 13:36:41'),
(28, 'gl', 'zEaxH6H5YhSNc4', 'グーグル_20150420', 'http://google.co.jp', '2015-04-18 22:48:27', '2015-04-18 13:48:27'),
(29, 'gl', '6jnqy5urlCaGxY', 'グーグル_20150420', 'http://google.co.jp', '2015-04-18 22:50:43', '2015-04-18 13:50:43'),
(30, 'gl', 'zXwZhqEMd3Y93d', 'グーグル_20150420002', 'http://google.co.jp', '2015-04-18 22:51:08', '2015-04-18 13:51:08'),
(31, 'gl', 'hAz1VV88BVW5Pb', 'グーグル_20150420002', 'http://google.co.jp', '2015-04-18 23:21:20', '2015-04-18 14:21:20'),
(32, 'gl', 'pK3e9Q2xANOZ64', 'google_20150420001', 'https://www.google.co.jp/?gws_rd=ssl', '2015-04-20 16:57:17', '2015-04-20 07:57:17'),
(33, 'gl', 'cKR53K6F9Rsbkx', 'グーグル_20150424001', 'http://google.co.jp', '2015-04-24 16:03:27', '2015-04-24 07:03:27'),
(34, 'gl', 'c4JXTz022Y7v4Z', 'グーグル_20150424001', 'http://google.co.jp', '2015-04-24 16:05:05', '2015-04-24 07:05:05'),
(35, 'gl', 'jwhpTHTdHO2Wrb', 'グーグル_20150424001', 'http://google.co.jp', '2015-04-24 16:12:26', '2015-04-24 07:12:26'),
(36, 'gl', 'b54yCvT9KElPVA', 'グーグル_20150424001', 'http://google.co.jp', '2015-04-24 16:14:09', '2015-04-24 07:14:09'),
(37, 'gl', 'FThowng3QiLu7T', 'グーグル_20150424001', 'http://google.co.jp', '2015-04-24 16:14:15', '2015-04-24 07:14:15'),
(38, 'gl', 'iAhJk0NwoBWsi1', 'グーグル_20150424001', 'http://google.co.jp', '2015-04-24 16:20:18', '2015-04-24 07:20:18'),
(39, 'gl', 'ogvUHWDj2pFGqF', 'グーグル_20150424001', 'http://google.co.jp', '2015-04-24 16:21:40', '2015-04-24 07:21:40'),
(40, 'gl', '1VGY7gTOtxggLH', 'グーグル_20150424002', 'http://google.co.jp', '2015-04-24 16:24:44', '2015-04-24 07:24:44'),
(41, 'gl', 'nbGitwYdWw6pyi', 'グーグル_20150424002', 'http://google.co.jp', '2015-04-24 16:25:17', '2015-04-24 07:25:17'),
(42, 'gl', 'cxgbcIXUs6bVpU', 'グーグル_20150424002', 'http://google.co.jp', '2015-04-24 16:26:55', '2015-04-24 07:26:55'),
(43, 'gl', '8myEKI0U1FHBDM', 'グーグル_20150420002', 'http://google.co.jp', '2015-04-24 16:27:28', '2015-04-24 07:27:28'),
(44, 'gl', 'UFaeSOl0W2hgUm', 'グーグル_20150420002', 'http://google.co.jp', '2015-04-24 16:28:39', '2015-04-24 07:28:39'),
(45, 'gl', '1FFkyZyVYbJVyd', 'グーグル_20150420002', 'http://google.co.jp', '2015-04-24 16:29:56', '2015-04-24 07:29:56'),
(46, 'gl', 'rljJmwTHwzH8z3', 'グーグル_20150420002', 'http://google.co.jp', '2015-04-24 16:30:22', '2015-04-24 07:30:22'),
(47, 'gl', 'om8lwyHKxBgSDZ', 'グーグル_20150420002', 'http://google.co.jp', '2015-04-24 16:32:10', '2015-04-24 07:32:10');

-- --------------------------------------------------------

--
-- テーブルの構造 `tr_clickcounter`
--

CREATE TABLE IF NOT EXISTS `tr_clickcounter` (
  `counter` int(11) NOT NULL,
  `medianame` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parameterid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mid_encrypt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pid_encrypt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `tr_clickcounter`
--

INSERT INTO `tr_clickcounter` (`counter`, `medianame`, `parameterid`, `mid_encrypt`, `pid_encrypt`, `created_at`) VALUES
(12, 'Yahoo', 'BCr2BMfmw74mSo', NULL, NULL, '2015-04-02 16:44:00'),
(13, 'Yahoo', 'BCr2BMfmw74mSo', NULL, NULL, '2015-04-02 16:44:15'),
(14, 'Yahoo', 'BCr2BMfmw74mSo', NULL, NULL, '2015-04-02 16:44:20'),
(15, 'Yahoo', 'BCr2BMfmw74mSo', NULL, NULL, '2015-04-02 16:44:27'),
(16, 'Yahoo', 'BCr2BMfmw74mSo', NULL, NULL, '2015-04-02 16:44:32'),
(17, 'Yahoo', 'BCr2BMfmw74mSo', NULL, NULL, '2015-04-02 16:44:37'),
(18, 'gl', 'A37WgkdptR3Zzg', NULL, NULL, '2015-04-02 16:45:33'),
(19, 'gl', 'A37WgkdptR3Zzg', NULL, NULL, '2015-04-02 16:45:39'),
(20, 'gl', 'A37WgkdptR3Zzg', NULL, NULL, '2015-04-02 16:45:50'),
(21, 'gl', 'A37WgkdptR3Zzg', NULL, NULL, '2015-04-02 16:46:01'),
(22, 'gl', 'dzTRKfpt3M0JUf', NULL, NULL, '2015-04-02 16:46:30'),
(23, 'gl', 'dzTRKfpt3M0JUf', NULL, NULL, '2015-04-02 16:46:36'),
(24, 'gl', 'dzTRKfpt3M0JUf', NULL, NULL, '2015-04-02 16:46:41'),
(25, 'gl', 'dzTRKfpt3M0JUf', NULL, NULL, '2015-04-02 16:46:46'),
(26, 'iij', 'Isp7E0zMA5XtwA', NULL, NULL, '2015-04-02 16:47:29'),
(27, 'iij', 'Isp7E0zMA5XtwA', NULL, NULL, '2015-04-02 16:47:34'),
(28, 'iij', 'Isp7E0zMA5XtwA', NULL, NULL, '2015-04-02 16:47:40'),
(29, 'iij', 'Isp7E0zMA5XtwA', NULL, NULL, '2015-04-02 16:47:47'),
(30, 'iij', 'Isp7E0zMA5XtwA', NULL, NULL, '2015-04-02 16:47:53'),
(31, 'iij', 'Isp7E0zMA5XtwA', NULL, NULL, '2015-04-02 16:47:58'),
(32, 'Yahoo', 'YFlvO4wQrLElRh', NULL, NULL, '2015-04-02 16:48:29'),
(33, 'Yahoo', 'YFlvO4wQrLElRh', NULL, NULL, '2015-04-02 16:48:35'),
(34, 'Yahoo', 'YFlvO4wQrLElRh', NULL, NULL, '2015-04-02 16:48:41'),
(35, 'Yahoo', 'enBTkQDDbRIxIe', NULL, NULL, '2015-04-02 16:49:49'),
(36, 'Yahoo', 'enBTkQDDbRIxIe', NULL, NULL, '2015-04-02 16:49:55'),
(37, 'Yahoo', 'enBTkQDDbRIxIe', NULL, NULL, '2015-04-02 16:50:00'),
(38, 'Yahoo', 'enBTkQDDbRIxIe', NULL, NULL, '2015-04-02 16:50:06'),
(39, 'Yahoo', 'enBTkQDDbRIxIe', NULL, NULL, '2015-04-02 16:50:11'),
(40, 'gl', 'dzTRKfpt3M0JUf', 'NFyr+0jXYcFc19ZTNKUc+Q==', '7E8lMuduw0NqZcwsa0xR8Q==', '2015-04-24 06:12:03');

-- --------------------------------------------------------

--
-- テーブルの構造 `tr_cvcount`
--

CREATE TABLE IF NOT EXISTS `tr_cvcount` (
  `id` int(11) NOT NULL,
  `medianame` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parameterid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mid_encrypt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pid_encrypt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `complete_date` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `countstart_date` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `totalprice` int(11) DEFAULT NULL,
  `reward` int(255) DEFAULT NULL,
  `linkcode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uniq` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diffkey` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `tr_cvcount`
--

INSERT INTO `tr_cvcount` (`id`, `medianame`, `parameterid`, `mid_encrypt`, `pid_encrypt`, `status`, `complete_date`, `countstart_date`, `count`, `price`, `totalprice`, `reward`, `linkcode`, `uniq`, `diffkey`, `created_at`) VALUES
(1, 'Yahoo', 'BCr2BMfmw74mSo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-04-24 05:42:44'),
(40, 'Yahoo', 'BCr2BMfmw74mSo', NULL, '123', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'BCr2BMfmw74mSo', NULL, NULL, '2015-04-24 08:20:26'),
(41, 'Yahoo', 'BCr2BMfmw74mSo', NULL, '123', 1, NULL, NULL, NULL, NULL, NULL, NULL, 'BCr2BMfmw74mSo', NULL, NULL, '2015-04-24 08:20:42'),
(42, 'Yahoo', 'BCr2BMfmw74mSo', NULL, '123', 2, NULL, NULL, NULL, NULL, NULL, NULL, 'BCr2BMfmw74mSo', NULL, NULL, '2015-04-24 08:20:56'),
(43, 'gl', 'A37WgkdptR3Zzg', NULL, '00', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'A37WgkdptR3Zzg', NULL, NULL, '2015-04-24 08:21:14'),
(44, 'gl', 'A37WgkdptR3Zzg', NULL, '00', 1, NULL, NULL, NULL, NULL, NULL, NULL, 'A37WgkdptR3Zzg', NULL, NULL, '2015-04-24 08:21:27'),
(45, 'gl', 'A37WgkdptR3Zzg', NULL, '00', 2, NULL, NULL, NULL, NULL, NULL, NULL, 'A37WgkdptR3Zzg', NULL, NULL, '2015-04-24 08:21:38'),
(46, 'gl', 'dzTRKfpt3M0JUf', NULL, '00', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'dzTRKfpt3M0JUf', NULL, NULL, '2015-04-24 08:21:53'),
(47, 'gl', 'dzTRKfpt3M0JUf', NULL, '00', 1, NULL, NULL, NULL, NULL, NULL, NULL, 'dzTRKfpt3M0JUf', NULL, NULL, '2015-04-24 08:22:05'),
(48, 'gl', 'dzTRKfpt3M0JUf', NULL, '00', 2, NULL, NULL, NULL, NULL, NULL, NULL, 'dzTRKfpt3M0JUf', NULL, NULL, '2015-04-24 08:22:17'),
(49, 'iij', 'Isp7E0zMA5XtwA', NULL, '00', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'Isp7E0zMA5XtwA', NULL, NULL, '2015-04-24 08:22:36'),
(50, 'iij', 'Isp7E0zMA5XtwA', NULL, '00', 1, NULL, NULL, NULL, NULL, NULL, NULL, 'Isp7E0zMA5XtwA', NULL, NULL, '2015-04-24 08:22:46'),
(51, 'iij', 'Isp7E0zMA5XtwA', NULL, '00', 2, NULL, NULL, NULL, NULL, NULL, NULL, 'Isp7E0zMA5XtwA', NULL, NULL, '2015-04-24 08:22:58'),
(52, 'Yahoo', 'YFlvO4wQrLElRh', NULL, '00', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'YFlvO4wQrLElRh', NULL, NULL, '2015-04-24 08:23:23'),
(53, 'Yahoo', 'YFlvO4wQrLElRh', NULL, '00', 1, NULL, NULL, NULL, NULL, NULL, NULL, 'YFlvO4wQrLElRh', NULL, NULL, '2015-04-24 08:23:33'),
(54, 'Yahoo', 'YFlvO4wQrLElRh', NULL, '00', 2, NULL, NULL, NULL, NULL, NULL, NULL, 'YFlvO4wQrLElRh', NULL, NULL, '2015-04-24 08:23:43'),
(55, 'Yahoo', 'enBTkQDDbRIxIe', NULL, '00', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'enBTkQDDbRIxIe', NULL, NULL, '2015-04-24 08:23:54'),
(56, 'Yahoo', 'enBTkQDDbRIxIe', NULL, '00', 1, NULL, NULL, NULL, NULL, NULL, NULL, 'enBTkQDDbRIxIe', NULL, NULL, '2015-04-24 08:24:06'),
(57, 'Yahoo', 'enBTkQDDbRIxIe', NULL, '00', 2, NULL, NULL, NULL, NULL, NULL, NULL, 'enBTkQDDbRIxIe', NULL, NULL, '2015-04-24 08:24:15');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group` int(11) NOT NULL DEFAULT '1',
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` varchar(25) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `login_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_fields` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `group`, `email`, `last_login`, `login_hash`, `profile_fields`, `created_at`) VALUES
(6, 'infolab', '0qwBRY6wAD45JjZCkisS/eWXHwyrt7P/c/fQBOExAgE=', 1, 'a@info-lab.jp', '1429861474', '90ad17e302e1759815bf14e03262f331c369cfa8', 'a:2:{s:9:"usergroup";s:5:"media";s:9:"medianame";s:7:"infolab";}', 1429689505),
(7, 'infolab2', 'Q5tsmYTu/hTSZH1PdfKgdrYxnCmKkjvOA8fTl6pR9Rw=', 1, 'b@info-lab.jp', '1429690753', '38c1267fd060096c63e8bcfa2d6eb067014f514f', 'a:2:{s:9:"usergroup";s:5:"media";s:9:"medianame";s:8:"infolab2";}', 1429689526),
(8, 'admin', 'E9ikG4pCh/OSb9zxlALOAvgC7atiAh3MDh9NM29i/gU=', 1, 'admin@info-lab.jp', '1429866998', 'dd3bdbd15bf6718d7c0610880739d5960871651b', 'a:2:{s:9:"usergroup";s:5:"admin";s:9:"medianame";s:5:"admin";}', 1429691653),
(9, 'manager', 'Ep/T+EpSUNcKadU3fImJN+/y4u8CjfgOU9K0Y/PQM4o=', 1, 'manager@info-lab.jp', '1429867095', 'b19face397ede7e982407f34ae1d5f5dcb17a35b', 'a:2:{s:9:"usergroup";s:7:"manager";s:9:"medianame";s:7:"manager";}', 1429691684),
(10, 'agency', 'rQcXxoKqSTRoGnQ32M1TpZmKtMWuKQzhQQpFwkEgS80=', 1, 'agency@info-lab.jp', '1429867171', '8ed32971848a8c29d798002670b909af3d8f0090', 'a:2:{s:9:"usergroup";s:6:"agency";s:9:"medianame";s:6:"agency";}', 1429691710),
(11, 'sony', '+ZqWpwEIuUDIF1FPNAaYaLqFLRELA9vUFm7xDgtlecs=', 1, 'sony@sony.jp', '0', '', 'a:2:{s:9:"usergroup";s:5:"media";s:9:"medianame";s:4:"sony";}', 1429861079),
(12, 'google', 'gOKio6XIgO0CNSLKkv+F866LCwHxh/kQaxZRKD/sdtc=', 1, 'gl@gl.jp', '1429861995', '2a8c326ec532966b2f3a2588e76ebb9af4e55c27', 'a:2:{s:9:"usergroup";s:5:"media";s:9:"medianame";s:2:"gl";}', 1429861915),
(13, 'iij', '+lgqPJFedBXkPO8lvmFZqPfKoR3Cfqhe0hJ+mKj6dcY=', 1, 'iij@iij.jp', '1429862321', '3187a292581abd70135802964f1449fb00bdd355', 'a:2:{s:9:"usergroup";s:5:"media";s:9:"medianame";s:3:"iij";}', 1429861931),
(14, 'yahoo', 'h1t7OqrJFXbAEvZ829O5dbuODC7m8xiz1KcLgK4b6WU=', 1, 'y@yahoo.jp', '0', '', 'a:2:{s:9:"usergroup";s:5:"media";s:9:"medianame";s:5:"Yahoo";}', 1429861960);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `at_pointback`
--
ALTER TABLE `at_pointback`
  ADD PRIMARY KEY (`pback_id`);

--
-- Indexes for table `ccounter`
--
ALTER TABLE `ccounter`
  ADD PRIMARY KEY (`counter`);

--
-- Indexes for table `mst_campaign`
--
ALTER TABLE `mst_campaign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tr_clickcounter`
--
ALTER TABLE `tr_clickcounter`
  ADD PRIMARY KEY (`counter`), ADD UNIQUE KEY `counter` (`counter`);

--
-- Indexes for table `tr_cvcount`
--
ALTER TABLE `tr_cvcount`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `at_pointback`
--
ALTER TABLE `at_pointback`
  MODIFY `pback_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `ccounter`
--
ALTER TABLE `ccounter`
  MODIFY `counter` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `mst_campaign`
--
ALTER TABLE `mst_campaign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `tr_clickcounter`
--
ALTER TABLE `tr_clickcounter`
  MODIFY `counter` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `tr_cvcount`
--
ALTER TABLE `tr_cvcount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
