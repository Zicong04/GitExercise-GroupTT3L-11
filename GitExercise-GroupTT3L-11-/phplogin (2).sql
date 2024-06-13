-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 02:14 PM
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
-- Database: `phplogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `clubjoin` varchar(255) DEFAULT NULL,
  `membership` varchar(255) DEFAULT NULL,
  `points` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`, `clubjoin`, `membership`, `points`) VALUES
(5, '14', '12345', '123@gmail.com', 'photography', 'yes', 0),
(7, '155', '12345', '123@gmail.com', 'basketball', NULL, 0),
(8, '123', '123', '123@gmail.com', NULL, NULL, 0),
(9, '144', '12345', '123@gmail.com', NULL, NULL, 0),
(10, '16', '12345', '123@gmail.com', 'photography', NULL, 0),
(13, '77777', 'qwert', '666@gmail.com', 'programming', NULL, 0),
(14, '25', '12345', '123@gmail.com', 'soccer', NULL, 0),
(15, 'user1', '1234', '123@gmail.com', 'photography', NULL, 0),
(16, '14', '$2y$10$QzBkRFCtQhO0IoXV19zcauyFc7I8BziC1su5Uw3Ytjhi03Fb3iXq.', 'example@example.com', NULL, 'yes', 0),
(17, '11', '12345', 'example@example.com', NULL, 'yes', 0),
(18, 'a', 'a', 'example@example.com', NULL, 'yes', 0),
(19, 'freshie', '12345', '123@gmail.com', NULL, NULL, 0),
(20, 'user11', '12345', '123@gmail.com', NULL, NULL, 0),
(21, 'hallo', '12345', '123@g.com', NULL, 'yes', 0),
(24, 'gang', '123', '123@gma.com', NULL, NULL, 0),
(26, 'user20', '20', 'user20@gmail.com', NULL, NULL, 0),
(27, 'user2', '12', 'user2@gmail.com', NULL, 'yes', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vouchers`
--

CREATE TABLE `vouchers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `voucher_name` varchar(255) NOT NULL,
  `redeemed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vouchers`
--

INSERT INTO `vouchers` (`id`, `user_id`, `voucher_name`, `redeemed_at`) VALUES
(2, 27, 'Voucher $10', '2024-06-12 07:23:01'),
(3, 27, 'Voucher $50', '2024-06-12 07:51:48'),
(4, 21, 'Voucher $10', '2024-06-12 07:56:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vouchers`
--
ALTER TABLE `vouchers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `vouchers`
--
ALTER TABLE `vouchers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `vouchers`
--
ALTER TABLE `vouchers`
  ADD CONSTRAINT `vouchers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `accounts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
