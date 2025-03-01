-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 01, 2025 at 03:31 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `is_primary` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image_name`, `is_primary`, `created_at`) VALUES
(1, 1, 'orange-1.jpg', 1, '2025-02-28 19:35:50'),
(2, 1, 'white-1.jpg', 0, '2025-02-28 19:38:00'),
(3, 2, 'brown.jpg', 1, '2025-02-28 19:38:53'),
(4, 2, 'purple.jpg', 0, '2025-02-28 19:39:42'),
(5, 3, 'white-3.jpg', 1, '2025-02-28 19:41:48'),
(6, 3, 'white-4.jpg', 0, '2025-02-28 19:41:48'),
(7, 4, 'white-2.jpg', 1, '2025-02-28 19:42:52'),
(8, 4, 'pink-1.jpg', 0, '2025-02-28 19:42:52'),
(9, 5, 'brown-2.jpg', 1, '2025-02-28 19:43:58'),
(10, 5, 'brown-3.jpg', 0, '2025-02-28 19:43:58'),
(11, 6, 'light-green-1.jpg', 1, '2025-02-28 19:45:22'),
(12, 6, 'light-green-2.jpg', 0, '2025-02-28 19:45:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
