-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2025 at 07:41 AM
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
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `adjustment_types`
--

CREATE TABLE `adjustment_types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `created_at`) VALUES
(1, 'Orange', '2025-03-01 04:51:43'),
(2, 'Black', '2025-03-01 04:51:43'),
(3, 'White', '2025-03-01 04:53:30'),
(4, 'Pink', '2025-03-01 04:53:30'),
(5, 'Green', '2025-03-01 04:53:30'),
(6, 'Purple', '2025-03-01 04:53:30'),
(7, 'OffWhite', '2025-03-01 04:53:30');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `password`, `phone`, `photo`, `address`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'john@example.com', 'password123', '1234567890', 'john.jpg', '123 Main St, Dhaka', '2025-02-25 09:28:04', '2025-02-25 09:28:04'),
(2, 'Jane Smith', 'jane@example.com', 'password123', '0987654321', 'jane.jpg', '456 Oak St, Chittagong', '2025-02-25 09:28:04', '2025-02-25 09:28:04'),
(3, 'Alice Johnson', 'alice@example.com', 'password123', '1122334455', 'alice.jpg', '789 Pine St, Khulna', '2025-02-25 09:28:04', '2025-02-25 09:28:04'),
(26, 'Rafeed  Adnan', 'raqeebulfahim@gmail.com', NULL, '9185848759', NULL, 'Rangpur', '2025-03-11 12:11:27', '2025-03-11 12:11:27'),
(27, 'Rafeed  Adnan', 'raqeebulfahim@gmail.com', NULL, '9185848759', NULL, 'Rangpur', '2025-03-11 12:11:29', '2025-03-11 12:11:29'),
(28, 'Fahim  Abrar', 'fahim.rh2777@gmail.com', NULL, '1701005439', NULL, 'Roushon VIlla,  Zurilkh', '2025-03-12 11:08:24', '2025-03-12 11:08:24'),
(29, 'Fahim  Abrar', 'fahim.rh2777@gmail.com', NULL, '1701005439', NULL, 'Roushon VIlla,  Zurilkh', '2025-03-12 11:08:26', '2025-03-12 11:08:26'),
(30, 'Fahim  Abrar', 'fahim.rh2777@gmail.com', NULL, '1701005439', NULL, 'Roushon VIlla,  Zurilkh', '2025-03-12 11:08:26', '2025-03-12 11:08:26'),
(31, 'Fahim  Abrar', 'fahim.rh2777@gmail.com', NULL, '1701005439', NULL, 'Roushon VIlla,  Zurilkh', '2025-03-12 11:08:27', '2025-03-12 11:08:27'),
(32, 'Fahim  Abrar', 'fahim.rh2777@gmail.com', NULL, '1701005439', NULL, 'Roushon VIlla,  Zurilkh', '2025-03-12 11:08:27', '2025-03-12 11:08:27'),
(33, 'Fahim  Abrar', 'fahim.rh2777@gmail.com', NULL, '1701005439', NULL, 'Roushon VIlla,  Zurilkh', '2025-03-12 11:08:30', '2025-03-12 11:08:30'),
(34, 'Fahim  Abrar', 'fahim.rh2777@gmail.com', NULL, '1701005439', NULL, 'Roushon VIlla,  Zurilkh', '2025-03-12 11:08:30', '2025-03-12 11:08:30'),
(35, 'Fahim  Abrar', 'fahim.rh2777@gmail.com', NULL, '1701005439', NULL, 'Roushon VIlla,  Zurilkh', '2025-03-12 11:08:31', '2025-03-12 11:08:31'),
(36, 'Fahim  Abrar', 'fahim.rh2777@gmail.com', NULL, '1701005439', NULL, 'Roushon VIlla,  Zurilkh', '2025-03-12 11:08:40', '2025-03-12 11:08:40'),
(37, 'dfasdfa asdfasdf', NULL, NULL, '1701005439', NULL, 'sadfsad', '2025-03-12 11:22:10', '2025-03-12 11:22:10'),
(38, 'dfasdfa asdfasdf', NULL, NULL, '1701005439', NULL, 'sadfsad', '2025-03-12 11:23:25', '2025-03-12 11:23:25'),
(39, 'dsfsd sdfsd', 'sophia.akter@example.com', NULL, '01765432987', NULL, 'dsfsd', '2025-03-12 11:23:56', '2025-03-12 11:23:56'),
(40, 'rwer ewrwe', 'fahim.rh2777@gmail.com', NULL, '1701005439', NULL, 'sdf', '2025-03-12 11:27:40', '2025-03-12 11:27:40'),
(41, 'sadsad asdas', 'sophia.akter@example.com', NULL, '01765432987', NULL, 'sad', '2025-03-12 11:30:05', '2025-03-12 11:30:05'),
(42, 'awer werew', 'sophia.akter@example.com', NULL, '01713220000', NULL, 'sdf', '2025-03-12 11:33:09', '2025-03-12 11:33:09'),
(43, 'fahim sdf', 'mdrazib@gmail.com', NULL, '01701005439', NULL, 'asdfsda', '2025-03-12 11:39:43', '2025-03-12 11:39:43'),
(44, 'fahim sdf', 'mdrazib@gmail.com', NULL, '01701005439', NULL, 'asdfsda', '2025-03-12 11:39:46', '2025-03-12 11:39:46'),
(45, 'fahim sdf', 'mdrazib@gmail.com', NULL, '01701005439', NULL, 'asdfsda', '2025-03-12 11:39:49', '2025-03-12 11:39:49'),
(46, 'fahim sdf', 'mdrazib@gmail.com', NULL, '01701005439', NULL, 'asdfsda', '2025-03-12 11:40:42', '2025-03-12 11:40:42'),
(47, 'fahim sdf', 'mdrazib@gmail.com', NULL, '01701005439', NULL, 'asdfsda', '2025-03-12 11:41:35', '2025-03-12 11:41:35'),
(48, 'fahim sdf', 'mdrazib@gmail.com', NULL, '01701005439', NULL, 'asdfsda', '2025-03-12 11:42:19', '2025-03-12 11:42:19'),
(49, 'Rasel Bhuiyaa', 'sophia.akter@exampl2e.com', NULL, '01701005439', NULL, 'Bangung , Malaysia', '2025-03-12 11:57:17', '2025-03-12 11:57:17');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(100) UNSIGNED DEFAULT NULL,
  `total_price` decimal(10,2) DEFAULT NULL,
  `order_status_id` int(100) DEFAULT NULL,
  `payment_status_id` int(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `total_price`, `order_status_id`, `payment_status_id`, `created_at`, `updated_at`) VALUES
(23, 29, 76200.00, 1, 1, '2025-03-12 05:08:26', '2025-03-12 11:08:26'),
(24, 30, 76200.00, 1, 1, '2025-03-12 05:08:27', '2025-03-12 11:08:27'),
(25, 31, 76200.00, 1, 1, '2025-03-12 05:08:27', '2025-03-12 11:08:27'),
(26, 32, 76200.00, 1, 1, '2025-03-12 05:08:27', '2025-03-12 11:08:27'),
(27, 33, 76200.00, 1, 1, '2025-03-12 05:08:30', '2025-03-12 11:08:30'),
(28, 34, 76200.00, 1, 1, '2025-03-12 05:08:30', '2025-03-12 11:08:30'),
(29, 35, 76200.00, 1, 1, '2025-03-12 05:08:31', '2025-03-12 11:08:31'),
(30, 36, 76200.00, 1, 1, '2025-03-12 05:08:40', '2025-03-12 11:08:40'),
(31, 37, 76200.00, 1, 1, '2025-03-12 05:22:11', '2025-03-12 11:22:11'),
(32, 38, 76200.00, 1, 1, '2025-03-12 05:23:25', '2025-03-12 11:23:25'),
(33, 39, 76200.00, 1, 1, '2025-03-12 05:23:56', '2025-03-12 11:23:56'),
(34, 40, 76200.00, 1, 1, '2025-03-12 05:27:40', '2025-03-12 11:27:40'),
(35, 41, 76200.00, 1, 1, '2025-03-12 05:30:05', '2025-03-12 11:30:05'),
(36, 42, 4200.00, 1, 1, '2025-03-12 05:33:09', '2025-03-12 11:33:09'),
(37, 43, 12100.00, 1, 1, '2025-03-12 05:39:43', '2025-03-12 11:39:43'),
(38, 44, 12100.00, 1, 1, '2025-03-12 05:39:46', '2025-03-12 11:39:46'),
(39, 45, 12100.00, 1, 1, '2025-03-12 05:39:49', '2025-03-12 11:39:49'),
(40, 46, 12100.00, 1, 1, '2025-03-12 05:40:42', '2025-03-12 11:40:42'),
(41, 47, 12100.00, 1, 1, '2025-03-12 05:41:35', '2025-03-12 11:41:35'),
(42, 48, 12100.00, 1, 1, '2025-03-12 05:42:19', '2025-03-12 11:42:19'),
(43, 49, 7500.00, 1, 1, '2025-03-12 05:57:17', '2025-03-12 11:57:17');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `subtotal` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quantity`, `price`, `discount`, `subtotal`, `created_at`, `updated_at`) VALUES
(7, 20, 8, 6, 2000.00, 0.00, 12000.00, '2025-03-11 06:11:27', '2025-03-11 06:11:27'),
(8, 20, 10, 11, 3500.00, 0.00, 38500.00, '2025-03-11 06:11:27', '2025-03-11 06:11:27'),
(9, 20, 1, 12, 500.00, 0.00, 6000.00, '2025-03-11 06:11:27', '2025-03-11 06:11:27'),
(10, 20, 2, 6, 1200.00, 0.00, 7200.00, '2025-03-11 06:11:27', '2025-03-11 06:11:27'),
(11, 20, 3, 5, 2500.00, 0.00, 12500.00, '2025-03-11 06:11:27', '2025-03-11 06:11:27'),
(12, 20, 4, 5, 800.00, 0.00, 4000.00, '2025-03-11 06:11:27', '2025-03-11 06:11:27'),
(13, 20, 9, 5, 600.00, 0.00, 3000.00, '2025-03-11 06:11:27', '2025-03-11 06:11:27'),
(14, 21, 8, 6, 2000.00, 0.00, 12000.00, '2025-03-11 06:11:29', '2025-03-11 06:11:29'),
(15, 21, 10, 11, 3500.00, 0.00, 38500.00, '2025-03-11 06:11:29', '2025-03-11 06:11:29'),
(16, 21, 1, 12, 500.00, 0.00, 6000.00, '2025-03-11 06:11:29', '2025-03-11 06:11:29'),
(17, 21, 2, 6, 1200.00, 0.00, 7200.00, '2025-03-11 06:11:29', '2025-03-11 06:11:29'),
(18, 21, 3, 5, 2500.00, 0.00, 12500.00, '2025-03-11 06:11:29', '2025-03-11 06:11:29'),
(19, 21, 4, 5, 800.00, 0.00, 4000.00, '2025-03-11 06:11:29', '2025-03-11 06:11:29'),
(20, 21, 9, 5, 600.00, 0.00, 3000.00, '2025-03-11 06:11:29', '2025-03-11 06:11:29'),
(21, 22, 8, 6, 2000.00, 0.00, 12000.00, '2025-03-12 05:08:24', '2025-03-12 05:08:24'),
(22, 22, 10, 11, 3500.00, 0.00, 38500.00, '2025-03-12 05:08:24', '2025-03-12 05:08:24'),
(23, 22, 1, 12, 500.00, 0.00, 6000.00, '2025-03-12 05:08:24', '2025-03-12 05:08:24'),
(24, 22, 2, 6, 1200.00, 0.00, 7200.00, '2025-03-12 05:08:24', '2025-03-12 05:08:24'),
(25, 22, 3, 5, 2500.00, 0.00, 12500.00, '2025-03-12 05:08:24', '2025-03-12 05:08:24'),
(26, 23, 8, 6, 2000.00, 0.00, 12000.00, '2025-03-12 05:08:26', '2025-03-12 05:08:26'),
(27, 23, 10, 11, 3500.00, 0.00, 38500.00, '2025-03-12 05:08:26', '2025-03-12 05:08:26'),
(28, 23, 1, 12, 500.00, 0.00, 6000.00, '2025-03-12 05:08:26', '2025-03-12 05:08:26'),
(29, 23, 2, 6, 1200.00, 0.00, 7200.00, '2025-03-12 05:08:26', '2025-03-12 05:08:26'),
(30, 23, 3, 5, 2500.00, 0.00, 12500.00, '2025-03-12 05:08:26', '2025-03-12 05:08:26'),
(31, 24, 8, 6, 2000.00, 0.00, 12000.00, '2025-03-12 05:08:27', '2025-03-12 05:08:27'),
(32, 24, 10, 11, 3500.00, 0.00, 38500.00, '2025-03-12 05:08:27', '2025-03-12 05:08:27'),
(33, 24, 1, 12, 500.00, 0.00, 6000.00, '2025-03-12 05:08:27', '2025-03-12 05:08:27'),
(34, 24, 2, 6, 1200.00, 0.00, 7200.00, '2025-03-12 05:08:27', '2025-03-12 05:08:27'),
(35, 24, 3, 5, 2500.00, 0.00, 12500.00, '2025-03-12 05:08:27', '2025-03-12 05:08:27'),
(36, 25, 8, 6, 2000.00, 0.00, 12000.00, '2025-03-12 05:08:27', '2025-03-12 05:08:27'),
(37, 25, 10, 11, 3500.00, 0.00, 38500.00, '2025-03-12 05:08:27', '2025-03-12 05:08:27'),
(38, 25, 1, 12, 500.00, 0.00, 6000.00, '2025-03-12 05:08:27', '2025-03-12 05:08:27'),
(39, 25, 2, 6, 1200.00, 0.00, 7200.00, '2025-03-12 05:08:27', '2025-03-12 05:08:27'),
(40, 25, 3, 5, 2500.00, 0.00, 12500.00, '2025-03-12 05:08:27', '2025-03-12 05:08:27'),
(41, 26, 8, 6, 2000.00, 0.00, 12000.00, '2025-03-12 05:08:27', '2025-03-12 05:08:27'),
(42, 26, 10, 11, 3500.00, 0.00, 38500.00, '2025-03-12 05:08:27', '2025-03-12 05:08:27'),
(43, 26, 1, 12, 500.00, 0.00, 6000.00, '2025-03-12 05:08:27', '2025-03-12 05:08:27'),
(44, 26, 2, 6, 1200.00, 0.00, 7200.00, '2025-03-12 05:08:27', '2025-03-12 05:08:27'),
(45, 26, 3, 5, 2500.00, 0.00, 12500.00, '2025-03-12 05:08:27', '2025-03-12 05:08:27'),
(46, 27, 8, 6, 2000.00, 0.00, 12000.00, '2025-03-12 05:08:30', '2025-03-12 05:08:30'),
(47, 27, 10, 11, 3500.00, 0.00, 38500.00, '2025-03-12 05:08:30', '2025-03-12 05:08:30'),
(48, 27, 1, 12, 500.00, 0.00, 6000.00, '2025-03-12 05:08:30', '2025-03-12 05:08:30'),
(49, 27, 2, 6, 1200.00, 0.00, 7200.00, '2025-03-12 05:08:30', '2025-03-12 05:08:30'),
(50, 27, 3, 5, 2500.00, 0.00, 12500.00, '2025-03-12 05:08:30', '2025-03-12 05:08:30'),
(51, 28, 8, 6, 2000.00, 0.00, 12000.00, '2025-03-12 05:08:31', '2025-03-12 05:08:31'),
(52, 28, 10, 11, 3500.00, 0.00, 38500.00, '2025-03-12 05:08:31', '2025-03-12 05:08:31'),
(53, 28, 1, 12, 500.00, 0.00, 6000.00, '2025-03-12 05:08:31', '2025-03-12 05:08:31'),
(54, 28, 2, 6, 1200.00, 0.00, 7200.00, '2025-03-12 05:08:31', '2025-03-12 05:08:31'),
(55, 28, 3, 5, 2500.00, 0.00, 12500.00, '2025-03-12 05:08:31', '2025-03-12 05:08:31'),
(56, 29, 8, 6, 2000.00, 0.00, 12000.00, '2025-03-12 05:08:31', '2025-03-12 05:08:31'),
(57, 29, 10, 11, 3500.00, 0.00, 38500.00, '2025-03-12 05:08:31', '2025-03-12 05:08:31'),
(58, 29, 1, 12, 500.00, 0.00, 6000.00, '2025-03-12 05:08:31', '2025-03-12 05:08:31'),
(59, 29, 2, 6, 1200.00, 0.00, 7200.00, '2025-03-12 05:08:31', '2025-03-12 05:08:31'),
(60, 29, 3, 5, 2500.00, 0.00, 12500.00, '2025-03-12 05:08:31', '2025-03-12 05:08:31'),
(61, 30, 8, 6, 2000.00, 0.00, 12000.00, '2025-03-12 05:08:40', '2025-03-12 05:08:40'),
(62, 30, 10, 11, 3500.00, 0.00, 38500.00, '2025-03-12 05:08:40', '2025-03-12 05:08:40'),
(63, 30, 1, 12, 500.00, 0.00, 6000.00, '2025-03-12 05:08:40', '2025-03-12 05:08:40'),
(64, 30, 2, 6, 1200.00, 0.00, 7200.00, '2025-03-12 05:08:40', '2025-03-12 05:08:40'),
(65, 30, 3, 5, 2500.00, 0.00, 12500.00, '2025-03-12 05:08:40', '2025-03-12 05:08:40'),
(66, 31, 8, 6, 2000.00, 0.00, 12000.00, '2025-03-12 05:22:11', '2025-03-12 05:22:11'),
(67, 31, 10, 11, 3500.00, 0.00, 38500.00, '2025-03-12 05:22:11', '2025-03-12 05:22:11'),
(68, 31, 1, 12, 500.00, 0.00, 6000.00, '2025-03-12 05:22:11', '2025-03-12 05:22:11'),
(69, 31, 2, 6, 1200.00, 0.00, 7200.00, '2025-03-12 05:22:11', '2025-03-12 05:22:11'),
(70, 31, 3, 5, 2500.00, 0.00, 12500.00, '2025-03-12 05:22:11', '2025-03-12 05:22:11'),
(71, 32, 8, 6, 2000.00, 0.00, 12000.00, '2025-03-12 05:23:25', '2025-03-12 05:23:25'),
(72, 32, 10, 11, 3500.00, 0.00, 38500.00, '2025-03-12 05:23:25', '2025-03-12 05:23:25'),
(73, 32, 1, 12, 500.00, 0.00, 6000.00, '2025-03-12 05:23:25', '2025-03-12 05:23:25'),
(74, 32, 2, 6, 1200.00, 0.00, 7200.00, '2025-03-12 05:23:25', '2025-03-12 05:23:25'),
(75, 32, 3, 5, 2500.00, 0.00, 12500.00, '2025-03-12 05:23:25', '2025-03-12 05:23:25'),
(76, 33, 8, 6, 2000.00, 0.00, 12000.00, '2025-03-12 05:23:56', '2025-03-12 05:23:56'),
(77, 33, 10, 11, 3500.00, 0.00, 38500.00, '2025-03-12 05:23:56', '2025-03-12 05:23:56'),
(78, 33, 1, 12, 500.00, 0.00, 6000.00, '2025-03-12 05:23:56', '2025-03-12 05:23:56'),
(79, 33, 2, 6, 1200.00, 0.00, 7200.00, '2025-03-12 05:23:56', '2025-03-12 05:23:56'),
(80, 33, 3, 5, 2500.00, 0.00, 12500.00, '2025-03-12 05:23:57', '2025-03-12 05:23:57'),
(81, 34, 8, 6, 2000.00, 0.00, 12000.00, '2025-03-12 05:27:40', '2025-03-12 05:27:40'),
(82, 34, 10, 11, 3500.00, 0.00, 38500.00, '2025-03-12 05:27:40', '2025-03-12 05:27:40'),
(83, 34, 1, 12, 500.00, 0.00, 6000.00, '2025-03-12 05:27:40', '2025-03-12 05:27:40'),
(84, 34, 2, 6, 1200.00, 0.00, 7200.00, '2025-03-12 05:27:40', '2025-03-12 05:27:40'),
(85, 34, 3, 5, 2500.00, 0.00, 12500.00, '2025-03-12 05:27:40', '2025-03-12 05:27:40'),
(86, 35, 8, 6, 2000.00, 0.00, 12000.00, '2025-03-12 05:30:05', '2025-03-12 05:30:05'),
(87, 35, 10, 11, 3500.00, 0.00, 38500.00, '2025-03-12 05:30:05', '2025-03-12 05:30:05'),
(88, 35, 1, 12, 500.00, 0.00, 6000.00, '2025-03-12 05:30:05', '2025-03-12 05:30:05'),
(89, 35, 2, 6, 1200.00, 0.00, 7200.00, '2025-03-12 05:30:05', '2025-03-12 05:30:05'),
(90, 35, 3, 5, 2500.00, 0.00, 12500.00, '2025-03-12 05:30:05', '2025-03-12 05:30:05'),
(91, 36, 1, 1, 500.00, 0.00, 500.00, '2025-03-12 05:33:09', '2025-03-12 05:33:09'),
(92, 36, 2, 1, 1200.00, 0.00, 1200.00, '2025-03-12 05:33:09', '2025-03-12 05:33:09'),
(93, 36, 3, 1, 2500.00, 0.00, 2500.00, '2025-03-12 05:33:09', '2025-03-12 05:33:09'),
(94, 37, 1, 5, 500.00, 0.00, 2500.00, '2025-03-12 05:39:43', '2025-03-12 05:39:43'),
(95, 38, 1, 5, 500.00, 0.00, 2500.00, '2025-03-12 05:39:46', '2025-03-12 05:39:46'),
(96, 39, 1, 5, 500.00, 0.00, 2500.00, '2025-03-12 05:39:49', '2025-03-12 05:39:49'),
(97, 40, 1, 5, 500.00, 0.00, 2500.00, '2025-03-12 05:40:42', '2025-03-12 05:40:42'),
(98, 41, 1, 5, 500.00, 0.00, 2500.00, '2025-03-12 05:41:35', '2025-03-12 05:41:35'),
(99, 42, 1, 5, 500.00, 0.00, 2500.00, '2025-03-12 05:42:19', '2025-03-12 05:42:19'),
(100, 42, 2, 8, 1200.00, 0.00, 9600.00, '2025-03-12 05:42:19', '2025-03-12 05:42:19'),
(101, 43, 1, 3, 500.00, 0.00, 1500.00, '2025-03-12 05:57:17', '2025-03-12 05:57:17'),
(102, 43, 2, 5, 1200.00, 0.00, 6000.00, '2025-03-12 05:57:18', '2025-03-12 05:57:18');

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `payment_method_id` int(100) DEFAULT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_status`
--

CREATE TABLE `payment_status` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` float(10,2) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `brand_id` int(100) DEFAULT NULL,
  `color_id` varchar(100) DEFAULT NULL,
  `size_id` varchar(100) DEFAULT NULL,
  `product_image_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `offer_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `category_id`, `brand_id`, `color_id`, `size_id`, `product_image_id`, `created_at`, `updated_at`, `offer_price`) VALUES
(1, 'T-shirt', 'Comfortable cotton t-shirt', 500.00, 1, 1, '1', '1', 1, '2025-02-24 21:33:15', '2025-03-01 00:33:18', 200),
(2, 'Jeans', 'Slim fit blue jeans', 1200.00, 2, 2, '2', '2', 2, '2025-02-24 21:33:15', '2025-03-02 04:45:35', 210),
(3, 'Sneakers', 'Running shoes for men', 2500.00, 3, 3, '3', '3', 3, '2025-02-24 21:33:15', '2025-03-02 04:45:56', 178),
(4, 'Formal Shirt', 'White formal shirt', 800.00, 1, 1, '4', '1', 4, '2025-02-24 21:33:15', '2025-03-02 04:46:20', 325),
(5, 'Jacket', 'Winter jacket', 3000.00, 4, 4, '5', '5', 5, '2025-02-24 21:33:15', '2025-03-02 04:35:06', 210),
(6, 'Watch', 'Analog wrist watch', 4500.00, 5, 5, '6', '6', 6, '2025-02-24 21:33:15', '2025-03-02 04:35:36', 365),
(7, 'Sunglasses', 'Polarized sunglasses', 1500.00, 6, 6, '7', '7', 7, '2025-02-24 21:33:15', '2025-03-02 04:35:33', 125),
(8, 'Backpack', 'Stylish travel backpack', 2000.00, 7, 7, '8', '8', 8, '2025-02-24 21:33:15', '2025-03-02 04:48:22', 25),
(9, 'Hat', 'Baseball cap', 600.00, 8, 8, '9', '9', 9, '2025-02-24 21:33:15', '2025-03-02 04:38:49', 124),
(10, 'Perfume', 'Luxury perfume', 3500.00, 6, 6, '14', '14', 14, '2025-02-24 21:33:15', '2025-03-02 04:39:13', 236),
(11, 'Belt', 'Leather belt', 800.00, 8, 8, '15', '15', 15, '2025-02-24 21:33:15', '2025-03-02 04:38:36', 120),
(12, 'Blazer', 'Classic navy blazer', 4000.00, 4, 4, '12', '12', 12, '2025-02-24 21:33:15', '2025-03-02 04:38:19', 240),
(13, 'Wallet', 'Leather wallet', 1100.00, 5, 5, '13', '13', 13, '2025-02-24 21:33:15', '2025-03-02 04:35:10', 320);

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
(1, 1, 'orange-1.jpg', 1, '2025-02-28 13:35:50'),
(2, 1, 'white-1.jpg', 0, '2025-02-28 13:38:00'),
(3, 2, 'brown.jpg', 1, '2025-02-28 13:38:53'),
(4, 2, 'purple.jpg', 0, '2025-02-28 13:39:42'),
(5, 3, 'white-3.jpg', 1, '2025-02-28 13:41:48'),
(6, 3, 'white-4.jpg', 0, '2025-02-28 13:41:48'),
(7, 4, 'white-2.jpg', 1, '2025-02-28 13:42:52'),
(8, 4, 'pink-1.jpg', 0, '2025-02-28 13:42:52'),
(9, 5, 'brown-2.jpg', 1, '2025-02-28 13:43:58'),
(10, 5, 'brown-3.jpg', 0, '2025-02-28 13:43:58'),
(11, 6, 'light-green-1.jpg', 1, '2025-02-28 13:45:22'),
(12, 6, 'light-green-2.jpg', 0, '2025-02-28 13:45:22'),
(13, 7, 'black-4.jpg', 1, '2025-03-01 05:46:08'),
(14, 7, 'black-5.jpg', 0, '2025-03-01 05:46:08'),
(15, 8, 'white-8.jpg', 1, '2025-03-01 05:46:47'),
(16, 8, 'black-6.jpg', 0, '2025-03-01 05:46:47'),
(17, 9, 'brown-4.jpg', 1, '2025-03-01 05:49:04'),
(18, 9, 'black-8.jpg', 0, '2025-03-01 05:49:04'),
(19, 10, 'black-9.jpg', 1, '2025-03-01 05:49:48'),
(20, 10, 'black-10.jpg', 0, '2025-03-01 05:49:48'),
(21, 11, 'grey-2.jpg', 1, '2025-03-01 05:51:17'),
(22, 11, 'grey.jpg', 0, '2025-03-01 05:51:17'),
(23, 12, 'black-11.jpg', 1, '2025-03-01 05:51:52'),
(24, 12, 'black-12.jpg', 0, '2025-03-01 05:51:52');

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `id` int(11) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `discount_percentage` decimal(5,2) DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `promotion_status_id` int(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promotion_status`
--

CREATE TABLE `promotion_status` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int(11) NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_details`
--

CREATE TABLE `purchase_details` (
  `id` int(11) NOT NULL,
  `purchase_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `cost_price` decimal(10,2) DEFAULT NULL,
  `subtotal` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL CHECK (`rating` between 1 and 5),
  `comment` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `updated_at`, `created_at`) VALUES
(1, 'Admin', '2024-03-02 04:59:14', '2024-03-01 16:59:14'),
(2, 'Manager', '2024-02-28 12:10:59', '2024-02-27 18:10:59'),
(4, 'Guest', '2024-03-07 10:24:21', '2024-03-06 16:24:21'),
(5, 'Manager', '2024-03-07 12:25:34', '2024-03-06 18:25:34'),
(6, 'Manager', '2024-03-07 12:25:53', '2024-03-06 18:25:53');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `tracking_number` varchar(255) DEFAULT NULL,
  `carrier` varchar(255) DEFAULT NULL,
  `shipping_status_id` int(100) DEFAULT NULL,
  `estimated_delivery_date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_status`
--

CREATE TABLE `shipping_status` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `sz_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `created_at`, `sz_id`) VALUES
(1, 'S', '2025-03-01 06:56:27', 1),
(2, 'M', '2025-03-01 06:56:27', 1),
(3, 'L', '2025-03-01 06:56:27', 1),
(4, 'XL', '2025-03-01 06:56:27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `transaction_type` varchar(100) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `product_id`, `transaction_type`, `quantity`, `updated_at`, `created_at`) VALUES
(1, 1, '1', 100, '2025-02-25 03:36:01', NULL),
(2, 2, '1', 80, '2025-02-25 03:36:01', NULL),
(3, 3, '1', 60, '2025-02-25 03:36:01', NULL),
(4, 4, '1', 120, '2025-02-25 03:36:01', NULL),
(5, 5, '1', 50, '2025-02-25 03:36:01', NULL),
(6, 6, '1', 70, '2025-02-25 03:36:01', NULL),
(7, 7, '1', 90, '2025-02-25 03:36:01', NULL),
(8, 8, '1', 40, '2025-02-25 03:36:01', NULL),
(9, 9, '1', 110, '2025-02-25 03:36:01', NULL),
(10, 10, '1', 85, '2025-02-25 03:36:01', NULL),
(11, 11, '1', 55, '2025-02-25 03:36:01', NULL),
(12, 12, '1', 45, '2025-02-25 03:36:01', NULL),
(13, 13, '1', 75, '2025-02-25 03:36:01', NULL),
(14, 14, '1', 65, '2025-02-25 03:36:01', NULL),
(15, 15, '1', 95, '2025-02-25 03:36:01', NULL),
(16, 1, 'sales', -5, '2025-03-12 05:42:19', '2025-03-12 11:42:19'),
(17, 2, 'sales', -8, '2025-03-12 05:42:19', '2025-03-12 11:42:19'),
(18, 1, 'sales', -3, '2025-03-12 05:57:17', '2025-03-12 11:57:17'),
(19, 2, 'sales', -5, '2025-03-12 05:57:18', '2025-03-12 11:57:18');

-- --------------------------------------------------------

--
-- Table structure for table `stock_adjustments`
--

CREATE TABLE `stock_adjustments` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `adjustment_type_id` int(11) DEFAULT NULL,
  `quantity_adjusted` int(11) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `adjusted_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `email`, `phone`, `photo`, `address`, `created_at`) VALUES
(1, 'TechGear Ltd.', 'support@techgear.com', '+8801712345678', 'techgear_logo.jpg', '123 Tech Park, Dhaka, Bangladesh', '2025-03-12 03:48:25'),
(2, 'FashionHub', 'contact@fashionhub.com', '+8801812345678', 'fashionhub_logo.jpg', '45 Fashion Street, Chittagong, Bangladesh', '2025-03-12 03:48:25'),
(3, 'HomeEssentials', 'info@homeessentials.com', '+8801912345678', 'homeessentials_logo.jpg', '78 Comfort Avenue, Khulna, Bangladesh', '2025-03-12 03:48:25'),
(4, 'Gadget World', 'hello@gadgetworld.com', '+8801711122233', 'gadgetworld_logo.jpg', '56 Gadget Lane, Rajshahi, Bangladesh', '2025-03-12 03:48:25'),
(5, 'Beauty Bliss', 'sales@beautybliss.com', '+8801822233344', 'beautybliss_logo.jpg', '90 Beauty Road, Sylhet, Bangladesh', '2025-03-12 03:48:25'),
(6, 'SportsPro', 'info@sportspro.com', '+8801933344455', 'sportspro_logo.jpg', '101 Sports Complex, Dhaka, Bangladesh', '2025-03-12 03:48:25'),
(7, 'Kitchen Masters', 'contact@kitchenmasters.com', '+8801755566677', 'kitchenmasters_logo.jpg', '23 Culinary Street, Barisal, Bangladesh', '2025-03-12 03:48:25');

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `role_id` int(10) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `photo` varchar(50) DEFAULT NULL,
  `verify_code` varchar(50) DEFAULT NULL,
  `inactive` tinyint(1) UNSIGNED DEFAULT 0,
  `mobile` varchar(50) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `remember_token` varchar(145) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role_id`, `password`, `email`, `full_name`, `created_at`, `photo`, `verify_code`, `inactive`, `mobile`, `updated_at`, `ip`, `email_verified_at`, `remember_token`) VALUES
(127, 'admin', 1, '$2y$12$A6DA4XvbCCrmwjG94OgMIe.CFJFSCkkuNQieu9On1z1BDBdZyfx1m', 'admin@gmail.com', 'Mohammad Towhidul Islam', '2025-02-16 22:58:00', '127.jpg', '45354353', 0, '34324324', '2022-02-15 21:00:46', '192.168.150.29', NULL, NULL),
(192, 'naeem', 2, '$2y$12$A6DA4XvbCCrmwjG94OgMIe.CFJFSCkkuNQieu9On1z1BDBdZyfx1m', 'naymur@gmail.com', 'Naymur Rahman', '2025-02-16 22:58:11', NULL, NULL, 0, '01800000000', NULL, '192.168.150.25', NULL, NULL),
(194, 'jakaria', 2, '$2y$10$Zyt3rgYgF9vnDBhNRN/8lO1BirJFCCNr3rhTRiI.7W1aVIuriBJiS', 'jkp.jakaria@gmail.com', 'jkp', '2024-04-14 16:53:54', NULL, NULL, 0, '01642527454', NULL, '192.168.150.47', NULL, NULL),
(196, 'Aminur', 2, '$2y$10$u1Wku9Uh61adCVAPm6ToSOp.8EgdXkiXo/DGp3oD.i/8o9I6a/Dai', 'amiur@gmail.com', 'Aminur Rahman', '2024-04-03 17:45:19', NULL, NULL, 0, '01800000000', NULL, '192.168.150.25', NULL, NULL),
(197, 'Tanim', 2, '$2y$10$NcNFqz1p2N76l4NH96f4Y.KTU8s/e.CqZB.lD7lewc4rcBvMstgaK', 'tanim@gmail.com', 'Rifat Ahammed Tanim', '2024-04-03 17:54:06', NULL, NULL, 0, '01900000000', NULL, '192.168.150.34', NULL, NULL),
(199, 'midul', 2, '$2y$10$sUhLutkkEUOUTWY2yWi.C.B55DFNOhUrbfFnrzcKM2FK7xdDF6Rby', 'midul@yahoo.com', 'Midul Islam', '2024-04-03 17:50:50', NULL, NULL, 0, '0198748343', NULL, '192.168.150.5', NULL, NULL),
(200, 'Jabed ', 2, '$2y$10$mgdw/E0HYncsz1wZaxygKerTF9VAfiPMnq4TSLsscA5CVHSih/RbS', 'olba@gmail.com', 'Javed ', '2024-04-03 17:59:27', NULL, NULL, 0, '01869546555', NULL, '192.168.150.22', NULL, NULL),
(201, 'omar', 2, '$2y$10$GnOgIBKPRsNIeM3OJExotuuBjGqzgcYGnfQeZpz4pug/GNqiLCWwS', 'omar@gmail.com', 'Omar Faruk', '2024-04-14 16:57:44', NULL, NULL, 0, '343434', NULL, '192.168.150.11', NULL, NULL),
(204, 'Anni', 2, '$2y$10$JWg5tGwzGUwnFT/PZBT4wuqIKAw3Vb6X7kWs9zC3ueLSi1RMzi87W', 'jannatulneasa464@gmail.com', 'Jannatul Neasa', '2024-04-03 17:54:32', NULL, NULL, 0, '3254436756', NULL, '192.168.150.29', NULL, NULL),
(206, 'mir3', 4, '$2y$10$wYZrszbJ9LIadOof3PRIzuHQNnjAQuTanA.JBmsreow3nJm04hCRW', 'mir@gmail.com', 'Mizanur Rahman ', '2024-05-14 19:36:41', 'mir3.png', NULL, 0, '', '0000-00-00 00:00:00', '::1', '0000-00-00 00:00:00', ''),
(209, 'abc', 1, '$2y$10$M52jied3IiUeo/ke8QU5SO0tS5IrW3T7aXVEL3a7l7/HN/4l98XKO', 'abc@gmail.com', NULL, '2024-05-14 18:29:14', 'abc-gmail-com.jpg', NULL, 0, NULL, '2024-05-15 12:08:29', '::1', '0000-00-00 00:00:00', ''),
(213, 'sium', 2, '$2y$10$Ziq..GqX0z4Lf2H4tE62VOsSDmyq8BUhESIhHu4BEfLKvrJLUszOS', 'sium@gmail.com', NULL, '2024-05-14 19:43:08', 'sium.jpeg', NULL, 0, NULL, '0000-00-00 00:00:00', '192.168.150.18', '0000-00-00 00:00:00', ''),
(214, 'Raqeebul Fahim', 1, '$2y$12$A6DA4XvbCCrmwjG94OgMIe.CFJFSCkkuNQieu9On1z1BDBdZyfx1m', 'raqeebulfahim@gmail.com', NULL, '2025-02-16 23:23:01', NULL, NULL, 0, NULL, '2025-02-17 04:56:57', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adjustment_types`
--
ALTER TABLE `adjustment_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_status`
--
ALTER TABLE `payment_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `promotion_status`
--
ALTER TABLE `promotion_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_details`
--
ALTER TABLE `purchase_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_status`
--
ALTER TABLE `shipping_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_adjustments`
--
ALTER TABLE `stock_adjustments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_types`
--
ALTER TABLE `transaction_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adjustment_types`
--
ALTER TABLE `adjustment_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_status`
--
ALTER TABLE `payment_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promotion_status`
--
ALTER TABLE `promotion_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase_details`
--
ALTER TABLE `purchase_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipping_status`
--
ALTER TABLE `shipping_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `stock_adjustments`
--
ALTER TABLE `stock_adjustments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transaction_types`
--
ALTER TABLE `transaction_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
