-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 17, 2021 at 09:43 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `symmetri_hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `farms`
--

CREATE TABLE `farms` (
  `farm_type` text NOT NULL,
  `farm_address` text NOT NULL,
  `city` text NOT NULL,
  `country` text NOT NULL,
  `postal_code` int(11) NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `farm_conditions`
--

CREATE TABLE `farm_conditions` (
  `temperature` float NOT NULL,
  `humidity` float NOT NULL,
  `light_intensity` float NOT NULL,
  `soil_moisture` float NOT NULL,
  `pressure` float NOT NULL,
  `created_at` date NOT NULL,
  `farm_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farm_conditions`
--

INSERT INTO `farm_conditions` (`temperature`, `humidity`, `light_intensity`, `soil_moisture`, `pressure`, `created_at`, `farm_id`, `id`) VALUES
(3, 4, 5, 2, 1, '0003-02-02', 2, 8),
(2, 3, 4, 5, 6, '0002-01-13', 2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `normal_enviromental_conditions`
--

CREATE TABLE `normal_enviromental_conditions` (
  `min_temperature` float NOT NULL,
  `max_temperature` float NOT NULL,
  `min_humidity` float NOT NULL,
  `max_humidity` float NOT NULL,
  `min_light_intensity` float NOT NULL,
  `max_light_intensity` float NOT NULL,
  `min_soil_moisture` float NOT NULL,
  `max_soil_moisture` float NOT NULL,
  `min_pressure` float NOT NULL,
  `max_pressure` float NOT NULL,
  `id` int(11) NOT NULL,
  `farm_id` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `company_name` varchar(100) NOT NULL,
  `company_email` text NOT NULL,
  `password` text NOT NULL,
  `company_address` text NOT NULL,
  `role` int(2) NOT NULL DEFAULT 1,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`company_name`, `company_email`, `password`, `company_address`, `role`, `id`) VALUES
('admin', 'admin@gmail.com', 'admin', 'admin@gmail.com', 2, 1),
('esther', 'esther@gmail.com', 'esther', 'esther@gmail.com', 1, 2),
('goodness', 'goodness@gmail.com', 'goodness', 'goodness@gmail.com', 1, 3),
('nelson', 'nelson@gmail.com', 'nelson', 'nelson@gmail.com', 1, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `farms`
--
ALTER TABLE `farms`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `farm_conditions`
--
ALTER TABLE `farm_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `normal_enviromental_conditions`
--
ALTER TABLE `normal_enviromental_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `farm_conditions`
--
ALTER TABLE `farm_conditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `normal_enviromental_conditions`
--
ALTER TABLE `normal_enviromental_conditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
