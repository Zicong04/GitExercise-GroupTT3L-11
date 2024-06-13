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
-- Database: `club_program`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `club` varchar(50) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `name`, `club`, `registration_date`) VALUES
(1, 'John Doe', 'Photography Club', '2024-06-01 10:00:00'),
(2, 'Jane Smith', 'Robotics Club', '2024-06-01 11:00:00'),
(3, 'user', 'photography', '2024-06-01 11:47:06'),
(4, 'user', 'robotics', '2024-06-01 12:08:07'),
(5, 'user', 'photography', '2024-06-04 12:56:27'),
(6, 'user', 'photography', '2024-06-04 14:30:46'),
(7, 'yap', 'photography', '2024-06-05 07:50:48'),
(8, 'user', 'robotics', '2024-06-05 08:22:26'),
(9, 'hallo', 'photography', '2024-06-12 08:07:20'),
(10, 'hallo', 'photography', '2024-06-12 08:07:48'),
(11, 'hallo', 'robotics', '2024-06-12 08:08:39'),
(12, 'user12345', 'photography', '2024-06-12 08:28:22'),
(13, 'user2', 'photography', '2024-06-12 08:55:55'),
(14, 'user2', 'photography', '2024-06-12 08:57:33'),
(15, 'user2', 'photography', '2024-06-12 08:57:58'),
(16, 'user2', 'photography', '2024-06-12 08:58:16'),
(17, 'user2', 'photography', '2024-06-12 08:59:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
