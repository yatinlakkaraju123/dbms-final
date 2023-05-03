-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2023 at 07:24 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `a_id` int(11) NOT NULL,
  `faculty_reg_no` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `student_reg_no` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `a_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`a_id`, `faculty_reg_no`, `class_id`, `student_reg_no`, `status`, `a_date`) VALUES
(34, 1234567891, 2, 215891100, 'present', '2023-03-21 02:55:47'),
(35, 1234567891, 2, 215897415, 'present', '2023-03-21 02:55:47'),
(37, 1234567891, 1, 215891100, 'present', '2023-03-21 03:23:47'),
(38, 1234567891, 3, 215891100, 'present', '2023-03-23 03:25:34'),
(39, 1234567891, 3, 215897415, 'present', '2023-03-23 03:25:34'),
(40, 1234567891, 1, 215891100, 'present', '2023-03-23 04:57:31'),
(41, 1234567891, 1, 2147483647, 'present', '2023-03-23 04:57:31'),
(42, 1234567891, 1, 2134567890, 'present', '2023-03-23 05:20:43'),
(43, 1234567891, 1, 215891100, 'present', '2023-03-26 16:26:24'),
(44, 1234567891, 1, 2147483647, 'present', '2023-03-26 16:26:24'),
(45, 1234567891, 1, 2134567890, 'present', '2023-03-26 16:26:24'),
(46, 1234567891, 1, 1234657890, 'present', '2023-03-26 16:26:24'),
(47, 1234567891, 2, 215891100, 'present', '2023-03-26 16:27:02'),
(48, 1234567891, 2, 215897415, 'present', '2023-03-26 16:27:02'),
(49, 1234567891, 2, 2147483647, 'present', '2023-03-26 16:27:02'),
(50, 1234567891, 2, 2134567890, 'present', '2023-03-26 16:27:02'),
(51, 1234567891, 2, 1234657890, 'present', '2023-03-26 16:27:02'),
(52, 1234567891, 1, 215891100, 'present', '2023-03-29 17:14:06'),
(53, 1234567891, 1, 2147483647, 'present', '2023-03-29 17:14:06'),
(54, 1234567891, 1, 2134567890, 'present', '2023-03-29 17:14:06'),
(55, 1234567891, 1, 1234657890, 'present', '2023-03-29 17:14:06'),
(56, 1234567891, 1, 215891100, 'present', '2023-03-30 03:54:53'),
(57, 1234567891, 1, 2147483647, 'present', '2023-03-30 03:54:53'),
(58, 1234567891, 1, 2134567890, 'present', '2023-03-30 03:54:53'),
(59, 1234567891, 1, 1234657890, 'present', '2023-03-30 03:54:53'),
(60, 1234567891, 1, 215123456, 'present', '2023-03-30 03:54:53'),
(61, 1234567891, 2, 215891100, 'present', '2023-03-30 03:55:02'),
(62, 1234567891, 2, 215897415, 'present', '2023-03-30 03:55:02'),
(63, 1234567891, 2, 2147483647, 'present', '2023-03-30 03:55:02'),
(64, 1234567891, 2, 2134567890, 'present', '2023-03-30 03:55:02'),
(65, 1234567891, 2, 1234657890, 'present', '2023-03-30 03:55:02'),
(66, 1234567891, 2, 215123456, 'present', '2023-03-30 03:55:02'),
(67, 1234567891, 1, 215123456, 'present', '2023-04-12 17:35:06'),
(68, 1234567891, 1, 215891100, 'present', '2023-04-12 17:35:06'),
(69, 1234567891, 1, 215897415, 'present', '2023-04-12 17:35:06'),
(70, 1234567891, 1, 1234657890, 'present', '2023-04-12 17:35:06'),
(71, 1234567891, 1, 2134567890, 'present', '2023-04-12 17:35:06'),
(72, 1234567891, 1, 2147483647, 'present', '2023-04-12 17:35:06'),
(73, 1234567891, 1, 315891060, 'present', '2023-04-12 17:35:06'),
(74, 1234567891, 2, 215123456, 'present', '2023-04-12 17:38:03'),
(75, 1234567891, 2, 215891100, 'present', '2023-04-12 17:38:03'),
(76, 1234567891, 2, 215897415, 'present', '2023-04-12 17:38:03'),
(77, 1234567891, 2, 1234657890, 'present', '2023-04-12 17:38:03'),
(78, 1234567891, 2, 2134567890, 'present', '2023-04-12 17:38:03'),
(79, 1234567891, 2, 2147483647, 'present', '2023-04-12 17:38:03'),
(80, 1234567891, 2, 315891060, 'present', '2023-04-12 17:38:03'),
(81, 1234567891, 2, 215123456, 'present', '2023-05-03 16:19:33'),
(82, 1234567891, 2, 215891100, 'present', '2023-05-03 16:19:33'),
(83, 1234567891, 2, 987654321, 'present', '2023-05-03 16:19:33'),
(84, 1234567891, 2, 2134567890, 'present', '2023-05-03 16:22:55'),
(85, 1234567891, 2, 2147483647, 'present', '2023-05-03 16:22:55'),
(86, 1234567891, 2, 215123456, 'present', '2023-05-03 16:31:06'),
(87, 1234567891, 2, 215891100, 'present', '2023-05-03 16:31:06'),
(88, 1234567891, 2, 215897415, 'present', '2023-05-03 16:31:06'),
(89, 1234567891, 2, 215123456, 'present', '2023-05-03 16:31:21'),
(90, 1234567891, 2, 215891100, 'present', '2023-05-03 16:31:21'),
(91, 1234567891, 2, 215897415, 'present', '2023-05-03 16:31:21'),
(92, 1234567891, 2, 1234657890, 'present', '2023-05-03 16:31:21'),
(93, 1234567891, 2, 215123456, 'present', '2023-05-03 16:31:51'),
(94, 1234567891, 2, 215891100, 'present', '2023-05-03 16:31:51'),
(95, 1234567891, 2, 987654321, 'present', '2023-05-03 16:32:20'),
(96, 1234567891, 2, 215123456, 'present', '2023-05-03 16:33:11'),
(97, 1234567891, 2, 215891100, 'present', '2023-05-03 16:33:11'),
(98, 1234567891, 2, 215123456, 'present', '2023-05-03 16:33:32'),
(99, 1234567891, 2, 215123456, 'present', '2023-05-03 16:34:22'),
(100, 1234567891, 2, 215891100, 'present', '2023-05-03 16:34:22'),
(101, 1234567891, 1, 215123456, 'present', '2023-05-03 17:15:36'),
(102, 1234567891, 1, 215891100, 'present', '2023-05-03 17:15:36');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `class_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_id`, `name`) VALUES
(1, 'DSD'),
(2, 'DSA'),
(3, 'DAA');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `enrollment_id` int(11) NOT NULL,
  `student_reg_no` int(11) NOT NULL,
  `faculty_reg_no` int(11) NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`enrollment_id`, `student_reg_no`, `faculty_reg_no`, `class_id`) VALUES
(20, 215123456, 1234567891, 1),
(21, 215891100, 1234567891, 1),
(22, 215897415, 1234567891, 1),
(23, 1234657890, 1234567891, 1),
(24, 2134567890, 1234567891, 1),
(25, 2147483647, 1234567891, 1),
(26, 215123456, 1234567891, 2),
(27, 215891100, 1234567891, 2),
(28, 215897415, 1234567891, 2),
(29, 1234657890, 1234567891, 2),
(30, 2134567890, 1234567891, 2),
(31, 2147483647, 1234567891, 2),
(32, 215123456, 1234567891, 3),
(33, 215891100, 1234567891, 3),
(34, 215897415, 1234567891, 3),
(35, 1234657890, 1234567891, 3),
(36, 2134567890, 1234567891, 3),
(37, 2147483647, 1234567891, 3),
(38, 315891060, 1234567891, 1),
(39, 315891060, 1234567891, 2),
(40, 315891060, 1234567891, 3),
(41, 987654321, 1234567891, 1),
(42, 987654321, 1234567891, 2),
(43, 987654321, 1234567891, 3);

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `eq_id` int(11) NOT NULL,
  `eq_name` varchar(255) NOT NULL,
  `student_reg_no` int(11) NOT NULL,
  `faculty_reg_no` int(11) DEFAULT NULL,
  `borrowed_time` timestamp NULL DEFAULT NULL,
  `returned_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`eq_id`, `eq_name`, `student_reg_no`, `faculty_reg_no`, `borrowed_time`, `returned_time`) VALUES
(1, 'microcontroller', 215891100, NULL, '2023-03-23 04:57:54', '2023-03-23 04:58:06'),
(2, 'wires', 2147483647, NULL, '2023-05-03 16:54:39', '2023-03-23 04:59:46'),
(3, 'arm microcontroller', 2134567890, NULL, '2023-03-23 05:21:11', '2023-03-23 05:21:43'),
(4, 'wires', 1234657890, NULL, '2023-03-26 16:27:21', '2023-03-26 16:27:42'),
(5, 'arm wires', 2147483647, NULL, '2023-03-29 17:14:32', '2023-03-29 17:14:44'),
(6, 'lpc', 987654321, NULL, '2023-05-03 16:55:05', '2023-05-03 16:55:13');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_reg_no` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_reg_no`, `name`, `phone`, `email`) VALUES
(1234567891, 'yatin', '9885298032', 'lakkaraju.yatin@learner.manipal.edu');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `marks_id` int(11) NOT NULL,
  `enrollment_id` int(11) NOT NULL,
  `student_reg_no` int(11) NOT NULL,
  `faculty_reg_no` int(11) DEFAULT NULL,
  `class_id` int(11) NOT NULL,
  `evaluation1_marks` int(11) DEFAULT NULL,
  `evaluation2_marks` int(11) DEFAULT NULL,
  `evaluation3_marks` int(11) DEFAULT NULL,
  `evaluation4_marks` int(11) DEFAULT NULL,
  `insem1_marks` int(11) DEFAULT NULL,
  `endsem_marks` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`marks_id`, `enrollment_id`, `student_reg_no`, `faculty_reg_no`, `class_id`, `evaluation1_marks`, `evaluation2_marks`, `evaluation3_marks`, `evaluation4_marks`, `insem1_marks`, `endsem_marks`) VALUES
(8, 20, 215123456, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 21, 215891100, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 22, 215897415, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 23, 1234657890, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 24, 2134567890, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 25, 2147483647, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 26, 215123456, NULL, 2, 12, 23, NULL, NULL, NULL, NULL),
(15, 27, 215891100, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 28, 215897415, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 29, 1234657890, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 30, 2134567890, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 31, 2147483647, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 32, 215123456, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 33, 215891100, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 34, 215897415, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 35, 1234657890, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 36, 2134567890, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 37, 2147483647, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 38, 315891060, NULL, 1, 12, NULL, NULL, NULL, NULL, NULL),
(27, 39, 315891060, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 40, 315891060, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 41, 987654321, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 42, 987654321, NULL, 2, 23, NULL, 34, NULL, NULL, NULL),
(31, 43, 987654321, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pc`
--

CREATE TABLE `pc` (
  `pc_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `student_reg_no` int(11) NOT NULL,
  `pc_no` varchar(255) NOT NULL,
  `pc_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pc`
--

INSERT INTO `pc` (`pc_id`, `class_id`, `student_reg_no`, `pc_no`, `pc_timestamp`) VALUES
(1, 2, 215891100, '03', '2023-03-21 14:11:41'),
(2, 3, 215891100, '03', '2023-03-23 03:23:27'),
(3, 2, 215891100, '05', '2023-03-23 04:33:08'),
(4, 2, 2147483647, '1', '2023-03-23 04:56:00'),
(5, 1, 2147483647, '012', '2023-03-23 04:58:33'),
(6, 2, 2134567890, '12', '2023-03-23 05:19:50'),
(7, 2, 2147483647, '12', '2023-03-26 16:23:03'),
(8, 3, 1234657890, '45', '2023-03-26 16:24:51'),
(9, 3, 2147483647, '67', '2023-03-29 17:11:54'),
(10, 2, 987654321, '123', '2023-05-03 12:13:06');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_reg_no` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_reg_no`, `name`, `phone`, `email`, `user_id`) VALUES
(215123456, 'sainidhya', '9885298032', 'lakkaraju.yatin@learner.manipal.edu', NULL),
(215891060, 'yatinbot123', '9885298032', 'lakkaraju.yatin@learner.manipal.edu', 17),
(215891100, 'yatin', '9885298032', 'lakkaraju.yatin@learner.manipal.edu', NULL),
(215897415, 'sachin lakkaraju', '2345678901', 'sachinlakkaraju@gmail.com', NULL),
(315891060, 'yatin', '9885298032', 'lakkaraju.yatin@learner.manipal.edu', 18),
(987654321, 'demo', '1234567890', 'lakkaraju.yatin@learner.manipal.edu', 19),
(1234657890, 'ritik', '9885298032', 'lakkaraju.yatin@learner.manipal.edu', NULL),
(2134567890, 'test2', '1234567890', 'lrvmsp@yahoo.co.uk', NULL),
(2147483647, 'test1', '9885298032', 'lakkaraju.yatin@learner.manipal.edu', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `role` varchar(255) NOT NULL DEFAULT 'student',
  `reg_no` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `role`, `reg_no`) VALUES
(1, 'lakkarajuyatin123', '$2y$10$M0D8VR2tI7fOb2Yzrr4X.eCQU4SxIWA0rdEwGx6w..gIcVFwpoB6u', '2023-03-18 22:21:03', 'student', 215891100),
(2, 'lakkarajuyatin1234', '$2y$10$YGmuXQJ6fcHzySosSED6CuIRpCZl6tw1T6D9ZCpLrHsVDUGA2tCkO', '2023-03-18 23:35:05', 'admin', 1234567890),
(6, 'testteacher', '$2y$10$xWcQi5t2KRpQ96a.0wGyk.1KfEWvAx5pPtOGYbdtUcf8u0DmZ0OJi', '2023-03-20 17:50:30', 'faculty', 1234567891),
(7, 'teststudent', '$2y$10$MTgrBCneU3pABoiG8ZKZ.uD2/KZN0HMP3PAS7SNXDkiQJozgDrJlC', '2023-03-23 10:24:11', 'student', 2147483647),
(8, 'teststudent2', '$2y$10$AqIkS0Ey4C.O2AOysiibquoO4PpNHSfAG6wLb2PhHhlTP/KCX5vXy', '2023-03-23 10:46:27', 'student', 2134567890),
(9, 'teststudent3', '$2y$10$OTMWwmJeOAb6sV/gPoxc6eKBHs0lF5iVtVPSqq9JwxIc/fdoO1I6O', '2023-03-26 21:48:41', 'student', 2147483647),
(10, 'teststudent4', '$2y$10$9eeKpsWyBBTX7wbykUUdEOiAKrtFTgtUICWHqbg01OP77h8aa39Au', '2023-03-26 21:53:52', 'student', 1234657890),
(11, 'teststudent5', '$2y$10$XA83p7OSXboYRXGm3K4hoOqvH7QvlVQuVDZpRdiqpnYOBzh/FBiSy', '2023-03-29 22:36:00', 'student', 2147483647),
(12, 'teststudent6', '$2y$10$GdkIYmesMFx/3hR0jAY0M.6MZ3Rge7fDaUD.xUpur4FQpX1GvCdqK', '2023-03-30 09:23:12', 'student', 215123456),
(17, 'teststudent8', '$2y$10$IRHWneaK93UMpkJgzQHiku8qdiZfYwPSbkL4qBKeZwGQxysc9O.P2', '2023-04-06 15:31:53', 'student', 0),
(18, 'teststudent9', '$2y$10$nXiLhs5lii8hjehWw4iO0eu1Cl8WNGxOetlivsanlj8i8pVO1fNtm', '2023-04-12 22:59:21', 'student', 315891060),
(19, 'teststudent10', '$2y$10$tqgfVMOsvyD.zFadVnK.1.LY/lQvE0ydbcfGwVzvPqwN0AVqsVRga', '2023-05-03 17:00:25', 'student', 987654321);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`a_id`),
  ADD KEY `faculty_reg_no` (`faculty_reg_no`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `student_reg_no` (`student_reg_no`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`enrollment_id`),
  ADD KEY `student_reg_no` (`student_reg_no`),
  ADD KEY `faculty_reg_no` (`faculty_reg_no`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`eq_id`),
  ADD KEY `student_reg_no` (`student_reg_no`),
  ADD KEY `faculty_reg_no` (`faculty_reg_no`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_reg_no`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`marks_id`),
  ADD KEY `enrollment_id` (`enrollment_id`),
  ADD KEY `student_reg_no` (`student_reg_no`),
  ADD KEY `faculty_reg_no` (`faculty_reg_no`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `pc`
--
ALTER TABLE `pc`
  ADD PRIMARY KEY (`pc_id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `student_reg_no` (`student_reg_no`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_reg_no`);

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
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `enrollment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `eq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `marks_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `pc`
--
ALTER TABLE `pc`
  MODIFY `pc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`faculty_reg_no`) REFERENCES `faculty` (`faculty_reg_no`),
  ADD CONSTRAINT `attendance_ibfk_3` FOREIGN KEY (`class_id`) REFERENCES `classes` (`class_id`),
  ADD CONSTRAINT `attendance_ibfk_4` FOREIGN KEY (`student_reg_no`) REFERENCES `students` (`student_reg_no`);

--
-- Constraints for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD CONSTRAINT `class_id` FOREIGN KEY (`class_id`) REFERENCES `classes` (`class_id`),
  ADD CONSTRAINT `faculty_reg_no` FOREIGN KEY (`faculty_reg_no`) REFERENCES `faculty` (`faculty_reg_no`),
  ADD CONSTRAINT `student_reg_no` FOREIGN KEY (`student_reg_no`) REFERENCES `students` (`student_reg_no`);

--
-- Constraints for table `equipment`
--
ALTER TABLE `equipment`
  ADD CONSTRAINT `equipment_ibfk_1` FOREIGN KEY (`student_reg_no`) REFERENCES `students` (`student_reg_no`),
  ADD CONSTRAINT `equipment_ibfk_2` FOREIGN KEY (`faculty_reg_no`) REFERENCES `faculty` (`faculty_reg_no`);

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`enrollment_id`) REFERENCES `enrollment` (`enrollment_id`),
  ADD CONSTRAINT `marks_ibfk_2` FOREIGN KEY (`student_reg_no`) REFERENCES `students` (`student_reg_no`),
  ADD CONSTRAINT `marks_ibfk_3` FOREIGN KEY (`faculty_reg_no`) REFERENCES `faculty` (`faculty_reg_no`),
  ADD CONSTRAINT `marks_ibfk_4` FOREIGN KEY (`class_id`) REFERENCES `classes` (`class_id`);

--
-- Constraints for table `pc`
--
ALTER TABLE `pc`
  ADD CONSTRAINT `pc_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `classes` (`class_id`),
  ADD CONSTRAINT `pc_ibfk_2` FOREIGN KEY (`student_reg_no`) REFERENCES `students` (`student_reg_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
