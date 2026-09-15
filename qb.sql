-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2021 at 05:22 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qb`
--

-- --------------------------------------------------------

--
-- Table structure for table `blooms`
--

CREATE TABLE `blooms` (
  `id` int(11) NOT NULL,
  `blooms_name` varchar(255) NOT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blooms`
--

INSERT INTO `blooms` (`id`, `blooms_name`, `status`) VALUES
(1, 'Creative', 1),
(2, 'Evaluate', 1),
(3, 'Analyze', 1),
(4, 'Apply', 1),
(5, 'Remember', 1),
(6, 'Understand', 1),
(11, 'text ', 1),
(12, 'text ', 1),
(13, 'text ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blooms_value`
--

CREATE TABLE `blooms_value` (
  `id` int(11) NOT NULL,
  `bloomsid` int(11) NOT NULL,
  `blooms_value` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blooms_value`
--

INSERT INTO `blooms_value` (`id`, `bloomsid`, `blooms_value`, `status`) VALUES
(1, 1, 'Genarate', 1),
(2, 1, 'Produce', 1),
(3, 2, 'Judge', 1),
(4, 3, 'Breakdown', 1),
(5, 4, 'Show', 1),
(6, 6, 'Discuse', 1);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courseid` int(11) NOT NULL,
  `cousre_name` varchar(255) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_teacher` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseid`, `cousre_name`, `course_code`, `course_teacher`, `status`, `created_at`) VALUES
(6, 'Computer Fundamental', 'cse-43', 'Rafsan', 1, '2021-01-23 09:21:48'),
(8, 'BBA 6', 'BBA32', 'Al-Amin', 1, '2021-01-23 09:22:48');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `dept_name` varchar(255) NOT NULL,
  `dept_code` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `dept_name`, `dept_code`, `status`, `created_at`) VALUES
(1, 'Computer Science and Engineering', '245', 1, '2021-01-18 09:35:40'),
(2, 'Food Engineering and Techonology', '768', 1, '2021-01-18 09:35:40'),
(3, 'Architecture', '452', 1, '2021-01-18 09:35:40'),
(4, 'Business Studies', '678', 1, '2021-01-18 09:35:40'),
(5, 'English Studies', '258', 1, '2021-01-18 09:35:40'),
(6, 'Environmental Science', '263', 1, '2021-01-18 09:35:40'),
(7, 'Food Engineering and Techonology', '789', 1, '2021-01-18 09:35:40'),
(8, 'Journalism,Communication and Media Studies', '123', 1, '2021-01-18 09:35:40'),
(9, 'Law', '789', 1, '2021-01-18 09:35:40'),
(10, 'Pharmacy', '325', 1, '2021-01-18 09:35:40'),
(11, 'Public Health', '117', 1, '2021-01-18 09:35:40'),
(22, 'MSC', '890', 1, '2021-01-18 09:35:40');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `questionid` int(11) NOT NULL,
  `questiontopic` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `question_code` int(11) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`questionid`, `questiontopic`, `question`, `question_code`, `tag`, `status`, `created_at`) VALUES
(2, '', 'What are the advantages and disadvantages of multiple inheritance?', 234, '4', 1, '2021-01-18 09:36:43'),
(3, '', 'What is polymorphism?', 432, '2', 1, '2021-01-18 09:36:43'),
(4, '', 'What is an object?', 1, '6', 1, '2021-01-18 09:36:43'),
(5, '', 'What is the difference between overriding and overloading?', 2, '4', 1, '2021-01-18 09:36:43'),
(6, '', 'What is a class? What is a superclass?', 45, '1', 1, '2021-01-18 09:36:43'),
(7, '', 'What are the primary components of a computer system?', 23, '1', 1, '2021-01-18 09:36:43'),
(8, '', 'What is a constructor?', 87, '5', 1, '2021-01-18 09:36:43'),
(9, '', 'What is an interface?', 90, '1', 1, '2021-01-18 09:36:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `dept_name` varchar(255) DEFAULT NULL,
  `role` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `user_id`, `designation`, `dept_name`, `role`, `image`, `status`, `created_at`) VALUES
(57, 'Rafsan', 'rafsan@gmail.com', '202cb962ac59075b964b07152d234b70', '34', NULL, NULL, 2, '', 1, '2021-01-18 09:36:11'),
(71, 'Muhammad Masud Tarek', 'tarek@gmail.com', '202cb962ac59075b964b07152d234b70', '33', 'Associate Professor', 'Environmental Science', 3, '', 1, '2021-01-23 10:30:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blooms`
--
ALTER TABLE `blooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blooms_value`
--
ALTER TABLE `blooms_value`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courseid`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`questionid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blooms`
--
ALTER TABLE `blooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `blooms_value`
--
ALTER TABLE `blooms_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `courseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `questionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
