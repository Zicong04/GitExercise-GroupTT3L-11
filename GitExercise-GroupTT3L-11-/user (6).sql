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
-- Database: `user`
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
  `membership` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`, `clubjoin`, `membership`) VALUES
(5, '14', '12345', '123@gmail.com', 'photography', 'yes'),
(10, '16', '12345', '123@gmail.com', 'photography', NULL),
(13, '77777', 'qwert', '666@gmail.com', 'programming', NULL),
(14, '25', '12345', '123@gmail.com', 'soccer', NULL),
(15, 'user1', '1234', 'user1@gmail.com', 'photography', NULL),
(16, '14', '$2y$10$QzBkRFCtQhO0IoXV19zcauyFc7I8BziC1su5Uw3Ytjhi03Fb3iXq.', 'example@example.com', NULL, 'yes'),
(17, '11', '12345', 'example@example.com', NULL, 'yes'),
(19, 'freshie ', '12345', '123@gmail.com', NULL, NULL),
(20, 'user11', '12345', '123@gmail.com', NULL, NULL),
(21, 'user3', '123', 'user3@gmail.com', NULL, NULL),
(22, 'user4', 'user4', 'user4@gmail.com', NULL, NULL),
(23, 'user5', 'user5', 'user5@gmail.com', NULL, NULL),
(24, 'user6', 'user6', 'user6@gmail.com', NULL, NULL),
(25, 'user7', 'user7', 'user7@gmail.com', NULL, NULL),
(26, 'user9', 'user9', 'user9@gmail.com', NULL, NULL),
(27, 'user10', '10', 'user10@gmail.com', NULL, NULL),
(28, 'user13', '13', '13@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `message`, `timestamp`) VALUES
(3, '', '', '2024-06-04 13:45:51'),
(4, '1', '1', '2024-06-04 13:46:26'),
(5, '1', '1', '2024-06-04 14:05:11'),
(6, '', '', '2024-06-04 14:05:35'),
(7, 'yap', 'hallo', '2024-06-05 07:09:05'),
(8, '', '', '2024-06-05 07:13:40'),
(9, 'yap', '1', '2024-06-05 07:14:01'),
(10, '', '', '2024-06-05 07:15:26'),
(11, '', '', '2024-06-05 07:15:57'),
(12, 'yap', '1', '2024-06-05 07:16:35'),
(13, 'yap', '1', '2024-06-05 07:16:45'),
(14, 'user', '1', '2024-06-05 08:30:41'),
(15, '', '', '2024-06-10 14:02:24'),
(16, '', '', '2024-06-10 14:06:16'),
(17, 'user1', 'hello its me mario', '2024-06-10 14:15:47');

-- --------------------------------------------------------

--
-- Table structure for table `greetings`
--

CREATE TABLE `greetings` (
  `username` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `password` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `usertype`) VALUES
(1, 'admin', '1234', 'admin'),
(12, 'admin2', '1234', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(6) NOT NULL,
  `name` varchar(191) NOT NULL,
  `course` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `course`) VALUES
(17, 'user2', 'Art Club'),
(18, 'user', 'Sport Club'),
(20, 'user3', 'Programming Club'),
(21, 'user', 'OKAY'),
(23, 'user4', 'Swimming Club'),
(24, 'qwfwqf', 'qwfqf');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(6) NOT NULL,
  `name` varchar(191) NOT NULL,
  `announcement` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `announcement`) VALUES
(4, 'This is the first announcement. Here you can provide detailed information about the announcement, including any important dates, details, and relevant links.', '5 March 2024');

-- --------------------------------------------------------

--
-- Table structure for table `studentss`
--

CREATE TABLE `studentss` (
  `id` int(6) NOT NULL,
  `name` varchar(191) NOT NULL,
  `club` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentss`
--

INSERT INTO `studentss` (`id`, `name`, `club`) VALUES
(2, 'Basketball Club:', 'Join us for regular basketball games and tournaments. Meets every Monday and Wednesday at 6 PM.'),
(3, 'Swimming Club:', 'For swimming enthusiasts of all levels. Meets every Saturday at 10 AM.'),
(4, 'Math Club:', ' A club for math enthusiasts to solve problems and participate in competitions. Meets every Friday at 4 PM.'),
(5, 'Programming Club:', ' Learn and practice coding. Meets every Wednesday at 6 PM.'),
(6, 'Art Club:', ' Create and discuss art. Meets every Friday at 3 PM.'),
(7, 'Music Club:', 'For musicians and music lovers. Meets every Tuesday at 4 PM.'),
(8, 'qwfqw', 'qwfqwfwq');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE `tbl_attendance` (
  `tbl_attendance_id` int(11) NOT NULL,
  `tbl_student_id` int(11) NOT NULL,
  `time_in` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`tbl_attendance_id`, `tbl_student_id`, `time_in`) VALUES
(36, 1, '2024-05-27 06:31:36'),
(37, 1, '2024-05-27 07:35:56'),
(38, 1, '2024-05-27 07:36:25'),
(39, 17, '2024-06-04 02:56:55'),
(40, 20, '2024-06-10 06:35:40'),
(41, 20, '2024-06-10 06:36:00'),
(42, 19, '2024-06-10 06:36:08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `tbl_student_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `clubs` varchar(255) NOT NULL,
  `generated_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`tbl_student_id`, `student_name`, `clubs`, `generated_code`) VALUES
(11, 'user7', 'club7', 'ZKu6CVipvY'),
(12, 'user8', 'club8', 'V1gCPlaob1'),
(13, 'user9', 'club9', 'gk5ccZVx4A'),
(16, 'user10', 'club10', 'L97fWRxhYI'),
(18, 'user', 'Soccer', 'kBWvRh1X6N'),
(19, 'user2', 'Art', 'S4mu6lvOw6'),
(20, 'user3', 'Swimming', 'XZWf5LaaI3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'elias', '123', 'Elias'),
(2, 'john', 'abc', 'John'),
(3, 'seg', 'egw', ''),
(4, 'user6', 'user6', ''),
(5, 'user1', '1234567890', ''),
(6, 'user8', '8', ''),
(7, 'user11', '12345', ''),
(8, 'user12', '12', ''),
(9, 'user14', '14', ''),
(10, 'user20', '20', ''),
(11, 'user18', '18', ''),
(12, 'user2', '12', ''),
(13, 'hallo', '12345', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentss`
--
ALTER TABLE `studentss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  ADD PRIMARY KEY (`tbl_attendance_id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`tbl_student_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `studentss`
--
ALTER TABLE `studentss`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  MODIFY `tbl_attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `tbl_student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
