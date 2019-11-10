-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2019 at 04:38 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usersloc`
--

-- --------------------------------------------------------

--
-- Table structure for table `a_t_gmessages`
--

CREATE TABLE `a_t_gmessages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `a_t_gmessages`
--

INSERT INTO `a_t_gmessages` (`id`, `name`, `location`, `created_at`, `updated_at`) VALUES
(1, 'chris', 'https://www.google.com/maps/@28.6007296,77.273911,12z', '2019-11-09 09:02:30', '2019-11-09 09:02:30'),
(2, 'pratt', 'https://www.google.com/maps/@28.6007296,77.274911,12z', '2019-11-09 09:03:24', '2019-11-09 09:03:24'),
(3, 'dfsfsf', 'https://www.google.com/maps/@28.6007296,77.27391', '2019-11-09 09:07:58', '2019-11-09 09:07:58'),
(4, 'dfsfldsfj', 'dfslfkjd', '2019-11-09 09:09:24', '2019-11-09 09:09:24'),
(5, 'xyz', 'groundzero', '2019-11-09 09:17:20', '2019-11-09 09:17:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a_t_gmessages`
--
ALTER TABLE `a_t_gmessages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `a_t_gmessages`
--
ALTER TABLE `a_t_gmessages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
