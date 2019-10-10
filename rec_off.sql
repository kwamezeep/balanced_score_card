-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 10, 2019 at 07:17 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rec_off`
--

-- --------------------------------------------------------

--
-- Table structure for table `feb19`
--

CREATE TABLE `feb19` (
  `id` int(11) NOT NULL,
  `value` float DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feb19`
--

INSERT INTO `feb19` (`id`, `value`, `time`) VALUES
(1, 1, '2019-10-02 17:06:12'),
(2, 23, '2019-10-02 16:22:26'),
(3, 1, '2019-10-01 16:59:49'),
(4, NULL, '2019-10-01 16:58:48'),
(5, NULL, '2019-10-01 16:58:48'),
(6, NULL, '2019-10-01 16:58:48'),
(7, NULL, '2019-10-01 16:58:48'),
(8, NULL, '2019-10-01 16:58:48'),
(9, NULL, '2019-10-01 16:58:48'),
(10, NULL, '2019-10-01 16:58:48'),
(11, NULL, '2019-10-01 16:58:48'),
(12, NULL, '2019-10-01 16:58:48'),
(13, NULL, '2019-10-01 16:58:48'),
(14, NULL, '2019-10-01 16:58:48'),
(15, NULL, '2019-10-01 16:58:48'),
(16, NULL, '2019-10-01 16:58:48'),
(17, NULL, '2019-10-01 16:58:48'),
(18, NULL, '2019-10-01 16:58:48'),
(19, NULL, '2019-10-01 16:58:48'),
(20, NULL, '2019-10-01 16:58:48'),
(21, NULL, '2019-10-01 16:58:48');

-- --------------------------------------------------------

--
-- Table structure for table `recon_off_bsc`
--

CREATE TABLE `recon_off_bsc` (
  `id` int(255) NOT NULL,
  `save_cost` float DEFAULT NULL,
  `hourly_recon` float DEFAULT NULL,
  `trans_input` float DEFAULT NULL,
  `comp_reverse` float DEFAULT NULL,
  `comp_retries` float DEFAULT NULL,
  `approve_sla` float DEFAULT NULL,
  `ensure_accounts` float DEFAULT NULL,
  `ensure_wallets` float DEFAULT NULL,
  `ensure_system` float DEFAULT NULL,
  `achieve_service` float DEFAULT NULL,
  `intro_methods` float DEFAULT NULL,
  `provide_daily` float DEFAULT NULL,
  `offjob_training` float DEFAULT NULL,
  `onjob_training` float DEFAULT NULL,
  `staff_briefs` float DEFAULT NULL,
  `staff_cert` float DEFAULT NULL,
  `int_serv` float DEFAULT NULL,
  `employ_sat` float DEFAULT NULL,
  `retention` float DEFAULT NULL,
  `embed_CV` float DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `comments` varchar(1000) DEFAULT NULL,
  `date_created` date DEFAULT current_timestamp(),
  `time_created` datetime(6) DEFAULT current_timestamp(6),
  `extra` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recon_off_bsc`
--

INSERT INTO `recon_off_bsc` (`id`, `save_cost`, `hourly_recon`, `trans_input`, `comp_reverse`, `comp_retries`, `approve_sla`, `ensure_accounts`, `ensure_wallets`, `ensure_system`, `achieve_service`, `intro_methods`, `provide_daily`, `offjob_training`, `onjob_training`, `staff_briefs`, `staff_cert`, `int_serv`, `employ_sat`, `retention`, `embed_CV`, `user_name`, `comments`, `date_created`, `time_created`, `extra`) VALUES
(1, 9, 3, 3, 6, 7, 7, 76, 7, 7, 7, 7, 7, 2, 2, 2, 2, 2, 2, 2, 2, 'aasdfad', 'Just testing', NULL, NULL, NULL),
(2, 12, 231, 1231, NULL, 121, 12, NULL, 12, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `created_at`) VALUES
(1, 'testuser1@admin.com', 'testing', '2019-10-03 10:14:54'),
(2, 'admin1', '$2y$10$nmThdy6HB6kbaSLbDXLhRum..uLHbOMEAlnQsCLk3NHyiOkGd9oIS', '2019-10-03 11:08:46');

-- --------------------------------------------------------

--
-- Table structure for table `year_19`
--

CREATE TABLE `year_19` (
  `id` int(11) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year_19`
--

INSERT INTO `year_19` (`id`, `value`) VALUES
(46, 5),
(47, 5),
(48, 5),
(49, 5),
(50, 5),
(51, 5),
(52, 5),
(53, 5),
(54, 5),
(55, 5),
(56, 5),
(57, 5),
(58, 5),
(59, 5),
(60, 5),
(61, 5),
(62, 5),
(63, 5),
(64, 5),
(65, 5),
(66, 5),
(67, 12),
(68, 5),
(69, 3),
(70, 3),
(71, 3),
(72, 3),
(73, 3),
(74, 3),
(75, 3),
(76, 3),
(77, 3),
(78, 3),
(79, 3),
(80, 3),
(81, 3),
(82, 3),
(83, 3),
(84, 3),
(85, 3),
(86, 3),
(87, 3),
(88, 23),
(89, 23),
(90, 23),
(91, 23);

-- --------------------------------------------------------

--
-- Table structure for table `year_2019`
--

CREATE TABLE `year_2019` (
  `id` int(11) NOT NULL,
  `month` int(11) DEFAULT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year_2019`
--

INSERT INTO `year_2019` (`id`, `month`, `value`) VALUES
(2, 2, 12);

-- --------------------------------------------------------

--
-- Table structure for table `yr2019`
--

CREATE TABLE `yr2019` (
  `id` int(11) NOT NULL,
  `value` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yr2019`
--

INSERT INTO `yr2019` (`id`, `value`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 121),
(5, 7),
(6, 5),
(7, 6),
(8, 1.3),
(9, 4),
(10, 2),
(11, 3),
(12, 5),
(13, 5),
(14, 2),
(15, 2),
(16, 2),
(17, 3),
(18, 2),
(19, 1),
(20, 12),
(21, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feb19`
--
ALTER TABLE `feb19`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recon_off_bsc`
--
ALTER TABLE `recon_off_bsc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `year_19`
--
ALTER TABLE `year_19`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `year_2019`
--
ALTER TABLE `year_2019`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yr2019`
--
ALTER TABLE `yr2019`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recon_off_bsc`
--
ALTER TABLE `recon_off_bsc`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `year_19`
--
ALTER TABLE `year_19`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `year_2019`
--
ALTER TABLE `year_2019`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
