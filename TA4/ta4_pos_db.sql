-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2026 at 06:23 PM
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
-- Database: `ta4_pos_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `full_name`, `email`, `phone`, `created_at`) VALUES
(1, 'Lei Caabay', 'leicaabay@gmail.com', '09123456781', '2026-10-10 23:40:43'),
(2, 'Allyssa Kirsten Yasona', 'allyssayasona@gmail.com', '09123456782', '2026-10-10 23:40:43'),
(3, 'John Benedict Sazon', 'jbsazon@gmail.com', '09123456783', '2026-10-10 23:40:43'),
(4, 'Charles Miguel Martin', 'migsmartin@gmail.com', '09123456784', '2026-10-10 23:40:43'),
(5, 'Allison Grace See', 'allisonsee@gmail.com', '09123456785', '2026-10-10 23:40:43'),
(6, 'New User 123', 'newuser01@gmail.com', '09191919191', '2026-10-11 18:40:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `full_name`, `created_at`, `avatar`, `password`) VALUES
(1, 'admin01', 'AkosiAdmin', '2026-10-10 23:40:43', '1791743668_c65833d17a2721baab52.jpg', '$2y$10$H.OnrSIEgChzQe4HsDtIFe7cdjo6kq/OG.2tqt523yk.PePIvQmgO'),
(2, 'cashier01', 'CashierPerson1', '2026-10-10 23:40:43', NULL, '$2y$10$H.OnrSIEgChzQe4HsDtIFe7cdjo6kq/OG.2tqt523yk.PePIvQmgO'),
(3, 'cashier02', 'CashierPerson2', '2026-10-10 23:40:43', NULL, '$2y$10$H.OnrSIEgChzQe4HsDtIFe7cdjo6kq/OG.2tqt523yk.PePIvQmgO'),
(4, 'staff01', 'StaffPerson1', '2026-10-10 23:40:43', NULL, '$2y$10$H.OnrSIEgChzQe4HsDtIFe7cdjo6kq/OG.2tqt523yk.PePIvQmgO'),
(5, 'manager01', 'ManagerPerson1', '2026-10-10 23:40:43', NULL, '$2y$10$H.OnrSIEgChzQe4HsDtIFe7cdjo6kq/OG.2tqt523yk.PePIvQmgO'),
(6, 'akosinewuser0123', 'Another New User123', '2026-10-11 18:41:36', '1791744145_24cf426451e63d83f3aa.jpg', '$2y$10$H.OnrSIEgChzQe4HsDtIFe7cdjo6kq/OG.2tqt523yk.PePIvQmgO'),
(7, 'newsampleuserta41', 'New Sample User TA4', '2026-10-12 14:24:42', NULL, '$2y$10$AH8BjyMZzkn9oJG10gWOIONgKHayFV1P3I3O2BV67LpZLnp2BK1D6'),
(8, 'sampleusertest', 'Execution Sample User', '2026-10-12 14:35:49', '1791815782_32a204dab101de9c28c4.jpg', '$2y$10$x3lWd1oEPkHpr/GsR0Oj6etd3oIQapuXsf7J7ZaB/UaJciBOchS7i');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
