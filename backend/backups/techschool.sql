-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2022 at 09:49 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_desc` varchar(255) NOT NULL,
  `course_price` varchar(255) NOT NULL,
  `course_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_desc`, `course_price`, `course_image`) VALUES
(1, 'BS Software Engineering', 'As computers only continue to become more necessary in our society, those equipped with skills to spur this growth onward will be prepared for high-demand careers.', '$45000', 'assets/course_image/1.jpg'),
(2, 'BS Computer Science ', 'As computers only continue to become more necessary in our society, those equipped with skills to spur this growth onward will be prepared for high-demand careers.', '$39000', 'assets/course_image/2.jpg'),
(3, 'BS Media Studies', 'As computers only continue to become more necessary in our society, those equipped with skills to spur this growth onward will be prepared for high-demand careers.', '$27000', 'assets/course_image/3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `enrollments`
--

CREATE TABLE `enrollments` (
  `enr_id` int(255) NOT NULL,
  `enr_course_id` varchar(255) NOT NULL,
  `enr_user_id` varchar(255) NOT NULL,
  `enr_completed` int(255) NOT NULL DEFAULT 0,
  `enr_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrollments`
--

INSERT INTO `enrollments` (`enr_id`, `enr_course_id`, `enr_user_id`, `enr_completed`, `enr_created`) VALUES
(1, '1', '10', 0, '2022-06-07'),
(2, '3', '10', 0, '2022-06-07'),
(3, '2', '10', 0, '2022-06-07'),
(4, '1', '11', 0, '2022-06-07'),
(5, '3', '11', 0, '2022-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_role` int(255) NOT NULL,
  `user_created` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_role`, `user_created`) VALUES
(6, 'Mohsin  ul Mulk', 'nawab1@mail.com', '$2y$10$mBe1P/xUYK9VWG0RL/JLm.LaXWGmezoFUS2V3938LHkfUU2z74U3y', 0, '0000-00-00 00:00:00.000000'),
(7, 'Shahzad Farooq', 'crindalwalt@mail.com', '$2y$10$Gz2HKlJWNQKtjrUlRMIQC.o5D/n5g/ahUQHkaCkPiFN1Yg2vMjnaG', 0, '0000-00-00 00:00:00.000000'),
(8, 'Rana SanaUllah', 'sanaullah@mail.com', '$2y$10$QN49VjEMZWO9V5t/IaH8buvzViJhem3qb6kQ7CjT55YRcPToRlFYG', 0, '0000-00-00 00:00:00.000000'),
(9, 'Syed Ali Hassan', 'alihassan@mail.com', '$2y$10$pMCsEyNxaS9HdLjR0l3DBeao72rmF7LrnGUGkOyrvlo7YlhDoV1Ha', 0, '0000-00-00 00:00:00.000000'),
(10, 'John Doe', 'john@mail.com', '$2y$10$Slqt3wgpKH5AxWp245kvPOdskjmtxUdI2tZ8NuK7YRJ2rXmCE5Ym.', 0, '0000-00-00 00:00:00.000000'),
(11, 'John Elia', 'elia@mail.com', '$2y$10$bxvF6Ge9QOmPVnbfNifRse0K9Q3bOnAvfjeGT1TjP4LJ8aL525ncu', 0, '0000-00-00 00:00:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD PRIMARY KEY (`enr_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enrollments`
--
ALTER TABLE `enrollments`
  MODIFY `enr_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
