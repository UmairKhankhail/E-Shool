-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2021 at 02:09 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `phone`, `comment`, `created_at`) VALUES
(1, 'Raamiz', 'test@gmail.com', '03400000000', 'Testing', '2021-07-10 07:30:02'),
(2, 'Ali', 'test@gmail.com', '03000000000', 'Testing', '2021-07-10 07:32:19'),
(3, 'Asif', 'test2@gmail.com', '03000000000', 'random', '2021-07-10 07:41:55'),
(4, 'Raamiz', 'sidd@gmail.com', '03000000000', 'test 4', '2021-07-10 09:40:17'),
(5, 'Anonymous', 'test@gmail.com', '03000000000', 'test', '2021-07-10 11:13:49'),
(6, 'TestUser1', 'test1@gmail.com', '03000000001', '', '2021-07-19 16:47:42'),
(7, 'TestUser1', 'test1@gmail.com', '03000000001', 'test 7', '2021-07-19 17:13:30'),
(8, 'TestUser1', 'test1@gmail.com', '03000000001', 'hello', '2021-07-19 17:15:19'),
(9, 'TestUser1', 'test1@gmail.com', '03000000001', 'hello', '2021-07-19 17:15:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(16) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `designation`, `phone`, `password`, `created_at`) VALUES
(1, 'Raamiz', 'sidRamiz@gmail.com', 'Admin', '03456788911', '12345678', '2021-07-21 08:22:37'),
(3, 'Ali', 'test@gmail.com', 'Student', '03456788911', '1234567890', '2021-07-21 10:32:09'),
(4, 'Asad', 'asad@gmail.com', 'Student', '03456788911', 'asad12345', '2021-07-21 10:50:14'),
(5, 'Saif', 'saif@gmail.com', 'Teacher', '03121212121', 'saif123456', '2021-07-24 09:50:58'),
(6, 'Khan', 'khan123@gmail.com', 'Student', '03456789101', 'khan12345', '2021-07-24 09:53:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
