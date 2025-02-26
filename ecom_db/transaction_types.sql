-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2025 at 08:58 AM
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
-- Database: `project_pharmacy_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction_types`
--

CREATE TABLE `transaction_types` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `factor` int(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction_types`
--

INSERT INTO `transaction_types` (`id`, `name`, `factor`, `created_at`, `updated_at`) VALUES
(1, 'Purchase', 1, '2024-12-03 05:32:56', '2024-12-03 05:32:56'),
(2, 'Sale', -1, '2024-12-03 05:32:56', '2024-12-03 05:32:56'),
(3, 'Return to Supplier', -1, '2024-12-03 05:32:56', '2024-12-03 05:32:56'),
(4, 'Return from Customer', 1, '2024-12-03 05:32:56', '2024-12-03 05:32:56'),
(5, 'Stock Adjustment Increase', 1, '2024-12-03 05:32:56', '2024-12-03 05:32:56'),
(6, 'Stock Adjustment Decrease', -1, '2024-12-03 05:32:56', '2024-12-03 05:32:56'),
(7, 'Damage or Loss', -1, '2024-12-03 05:32:56', '2024-12-03 05:32:56'),
(8, 'Opening Balance', 1, '2024-12-03 05:32:56', '2024-12-03 05:32:56'),
(9, 'Internal Transfer In', 1, '2024-12-03 05:32:56', '2024-12-03 05:32:56'),
(10, 'Internal Transfer Out', -1, '2024-12-03 05:32:56', '2024-12-03 05:32:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction_types`
--
ALTER TABLE `transaction_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction_types`
--
ALTER TABLE `transaction_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
