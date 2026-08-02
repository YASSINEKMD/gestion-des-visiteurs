-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2025 at 07:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toursmorocco`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `travel_date` date DEFAULT NULL,
  `passengers` int(11) DEFAULT NULL,
  `days` int(11) DEFAULT NULL,
  `tour_interest` varchar(50) DEFAULT NULL,
  `message` text NOT NULL,
  `agree_terms` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `phone`, `country`, `travel_date`, `passengers`, `days`, `tour_interest`, `message`, `agree_terms`, `created_at`, `updated_at`) VALUES
(1, 'Yassine Aqarmoudi', 'yassinekmmd@gmail.com', '0641127781', 'Morocco', '2025-05-21', 2, 2, NULL, 'bein', 1, '2025-05-23 21:37:59', '2025-05-23 21:37:59'),
(34, 'Yassine', 'yassinekmd@gmail.com', '0641127781', 'Morocco', '2025-06-05', 2, 3, NULL, 'bein sur', 1, '2025-05-23 21:47:00', '2025-05-23 21:47:00'),
(36, 'Yassine', 'yassinekmdd@gmail.com', '0641127781', 'Morocco', '2025-06-05', 2, 3, NULL, 'bein sur b', 1, '2025-05-23 21:48:27', '2025-05-23 21:48:27'),
(37, 'Yassine', 'yassinekmd1d@gmail.com', '0641127781', 'Morocco', '2025-06-05', 2, 3, NULL, 'bein sur b', 1, '2025-05-23 21:56:22', '2025-05-23 21:56:22'),
(38, 'Yassine', 'yassinekmd11d@gmail.com', '0641127781', 'Morocco', '2025-06-05', 2, 3, NULL, 'bein sur b', 1, '2025-05-23 21:56:31', '2025-05-23 21:56:31'),
(42, 'Yassine Aqarmoudi', 'yassinekmm4d@gmail.com', '0641127781', 'Morocco', '2025-05-21', 2, 2, NULL, 'bein', 1, '2025-05-23 22:06:26', '2025-05-23 22:06:26'),
(43, 'Yassine Aqarmoudi', 'yassinekmmd77@gmail.com', '0641127781', 'Morocco', '2025-05-21', 2, 2, NULL, 'bein', 1, '2025-05-23 22:44:13', '2025-05-23 22:44:13'),
(44, 'Yassine Aqarmoudi', 'yassinekmmd99@gmail.com', '0641127781', 'Morocco', '2025-05-21', 2, 2, NULL, 'bein', 1, '2025-05-23 22:44:29', '2025-05-23 22:44:29'),
(46, 'Yassine', 'yassinekmm776d@gmail.com', '0641127781', 'Morocco', '2025-05-21', 2, 23, NULL, 'bein', 1, '2025-05-23 22:49:53', '2025-05-23 22:49:53'),
(47, 'Yassine Aqarmoudi', 'yassinekmm888d@gmail.com', '0641127781', 'Morocco', '2025-05-21', 2, 2, NULL, 'bein', 1, '2025-05-23 23:15:05', '2025-05-23 23:15:05'),
(50, 'moha', 'yassinekmmd00@gmail.com', '0641127781', 'Morocco', '2025-06-05', 4, 3, NULL, 'sa marche', 1, '2025-05-23 23:46:20', '2025-05-23 23:46:20'),
(53, 'Yassine Aqarmoudi', 'yassinekmm987d@gmail.com', '0641127781', 'Morocco', '2025-05-28', 3, 7, NULL, 'bien', 1, '2025-05-24 00:16:16', '2025-05-24 00:16:16'),
(54, 'Yassine Aqarmoudi', 'yassinekmmd23@gmail.com', '0641127781', 'Morocco', '2025-06-06', 2, 1, NULL, 'rr', 1, '2025-05-24 00:19:49', '2025-05-24 00:19:49'),
(56, 'Yassine Aqarmoudi', 'yassinekm22md@gmail.com', '0641127781', 'Morocco', '2025-05-23', 21, 1, NULL, 'ss', 1, '2025-05-24 01:05:55', '2025-05-24 01:05:55'),
(57, 'Yassine Aqarmoudi', 'yassinek211mmd@gmail.com', '0641127781', 'Morocco', '2025-05-10', 31, 5, NULL, 'ff', 1, '2025-05-24 01:07:41', '2025-05-24 01:07:41'),
(58, 'Yassine Aqarmoudi', 'yassinekmm78787d@gmail.com', '0641127781', 'Morocco', '2025-06-07', 3, 2, NULL, 'vcvcvc', 1, '2025-05-25 01:23:55', '2025-05-25 01:23:55'),
(59, 'Yassine Aqarmoudi', 'yassinekmmdff@gmail.com', '0641127781', 'Morocco', '2025-05-22', 3, 2, NULL, 'rrr', 1, '2025-05-25 22:01:24', '2025-05-25 22:01:24'),
(60, 'Yassine Aqarmoudi', 'yassinekmmdss@gmail.com', '0641127781', 'Morocco', '2025-04-30', 4, 3, NULL, 'mm', 1, '2025-05-25 23:02:47', '2025-05-25 23:02:47'),
(65, 'Yassine Aqarmoudi', 'yassinekmtmd@gmail.com', '0641127781', 'Morocco', '2025-04-30', 4, 4, NULL, 'cxcx', 1, '2025-05-27 23:46:38', '2025-05-27 23:46:38'),
(66, 'Yassine Aqarmoudi', 'yassinekfmmd@gmail.com', '0641127781', 'Morocco', '0000-00-00', 7, 7, NULL, 'vcvc', 1, '2025-05-28 00:47:04', '2025-05-28 00:47:04'),
(70, 'Yassine Aqarmoudi', 'yassinedkmmd@gmail.com', '0641127781', 'Morocco', '2025-06-06', 5, 3, NULL, 'hhh', 1, '2025-05-28 21:39:11', '2025-05-28 21:39:11'),
(71, 'Yassine Aqarmoudi', 'yassinekmymd@gmail.com', '0641127781', 'Morocco', '2025-06-06', 4, 2, NULL, 'nmnmn', 1, '2025-05-29 22:32:11', '2025-05-29 22:32:11');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `tour_interest` varchar(50) DEFAULT NULL,
  `message` text NOT NULL,
  `agree_terms` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `tour_interest`, `message`, `agree_terms`, `created_at`, `updated_at`) VALUES
(1, 'Yassine Aqarmoudi', 'yassinekmmd@gmail.com', '0641127781', 'cities', 'nknkkmn nm ', 1, '2025-05-21 20:49:33', '2025-05-21 20:49:33'),
(2, 'Yassine Aqarmoudi', 'yassinekmmd@gmail.com', '0641127781', 'cities', 'njjnjnnj', 1, '2025-05-21 20:50:54', '2025-05-21 20:50:54'),
(3, 'Yassine Aqarmoudi', 'yassinekmmd@gmail.com', '0641127781', 'mountains', 'bonjour', 1, '2025-05-21 20:53:22', '2025-05-21 20:53:22'),
(4, 'Yassine Aqarmoudi', 'yassinekmmd@gmail.com', '0641127781', 'custom', 'cv', 1, '2025-05-21 21:15:06', '2025-05-21 21:15:06'),
(5, 'Yassine Aqarmoudi', 'yassinekmmd@gmail.com', '0641127781', 'mountains', 'cv bien', 1, '2025-05-21 21:27:57', '2025-05-21 21:27:57'),
(6, 'Yassine Aqarmoudi', 'yassinekmmd@gmail.com', '0641127781', 'desert', 'cv bien t', 1, '2025-05-21 21:34:33', '2025-05-21 21:34:33'),
(7, 'Yassine Aqarmoudi', 'yassinekmmd@gmail.com', '0641127781', 'mountains', 'vv', 1, '2025-05-21 21:51:51', '2025-05-21 21:51:51'),
(8, 'Yassine Aqarmoudi', 'yassinekmmd@gmail.com', '0641127781', 'custom', 'bonsoir', 1, '2025-05-21 21:54:04', '2025-05-21 21:54:04'),
(9, 'Yassine Aqarmoudi', 'yassinekmmd@gmail.com', '0641127781', 'desert', 'sa  marche', 1, '2025-05-21 21:56:50', '2025-05-21 21:56:50'),
(10, 'Yassine Aqarmoudi', 'yassinekmmd@gmail.com', '0641127781', 'desert', 'yasssine', 1, '2025-05-21 22:02:57', '2025-05-21 22:02:57'),
(11, 'Yassine Aqarmoudi', 'yassinekmmd@gmail.com', '0641127781', 'desert', 'cv cv cv cv ', 1, '2025-05-21 22:07:06', '2025-05-21 22:07:06'),
(12, 'Yassine Aqarmoudi', 'yassinekmmd@gmail.com', '0641127781', 'mountains', 'cv ta', 1, '2025-05-21 22:07:23', '2025-05-21 22:07:23'),
(13, 'Yassine Aqarmoudi', 'yassinekmmd@gmail.com', '0641127781', 'desert', 'cv yassine', 1, '2025-05-21 22:17:04', '2025-05-21 22:17:04'),
(14, 'Yassine Aqarmoudi', 'yassinekmmd@gmail.com', '0641127781', 'desert', 'BONJOUR CV COMMENT VA TU BIEN ', 1, '2025-05-22 16:20:40', '2025-05-22 16:20:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_email` (`email`),
  ADD KEY `idx_tour_interest` (`tour_interest`),
  ADD KEY `idx_created_at` (`created_at`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
