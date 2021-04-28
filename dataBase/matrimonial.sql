-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2020 at 04:57 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matrimonial`
--

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `id` int(11) NOT NULL,
  `domination_id` int(11) NOT NULL,
  `division` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`id`, `domination_id`, `division`) VALUES
(1, 4, 'Knanaya'),
(2, 3, 'Ezhava'),
(3, 5, 'Ashrafs');

-- --------------------------------------------------------

--
-- Table structure for table `domination`
--

CREATE TABLE `domination` (
  `id` int(11) NOT NULL,
  `domination` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `domination`
--

INSERT INTO `domination` (`id`, `domination`) VALUES
(3, 'Hindu'),
(4, 'Christian '),
(5, 'Muslim');

-- --------------------------------------------------------

--
-- Table structure for table `info_table`
--

CREATE TABLE `info_table` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `marital_status` varchar(20) NOT NULL,
  `created_by` varchar(20) NOT NULL,
  `denomination_id` int(11) NOT NULL,
  `division_id` int(11) NOT NULL,
  `subcast` varchar(20) NOT NULL,
  `mother_tounge` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `mobile` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_table`
--

INSERT INTO `info_table` (`id`, `user_id`, `gender`, `dob`, `marital_status`, `created_by`, `denomination_id`, `division_id`, `subcast`, `mother_tounge`, `country`, `mobile`) VALUES
(4, 3, 'Male', '2020-10-22', 'Divorced', 'Sibling', 3, 1, 'asdf', 'English', 'India', 234234),
(5, 4, 'Male', '2020-10-21', 'Unmarried', 'Self', 3, 2, 'asdf', '0', '0', 2147483647),
(6, 5, 'Male', '1998-06-24', 'Widow', 'Parents', 3, 2, 'asdf', '0', '0', 234234234),
(7, 6, 'Male', '1996-11-21', 'Unmarried', 'Self', 4, 1, 'yuyu', '0', '0', 34231234),
(8, 7, 'Female', '1999-07-15', 'Unmarried', 'Self', 4, 1, 'dfg', 'Malayalam', 'India', 23232323),
(9, 8, 'Female', '2015-06-26', 'Unmarried', 'Parents', 4, 1, 'asd', 'asdf', 'asf', 234234234),
(10, 9, 'Female', '1990-07-18', 'Separated', 'Self', 4, 1, 'asdf', 'English', 'India', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `notification_message` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `notification_message`, `status`) VALUES
(1, 4, 'Kamal E J Rejected your request', 1),
(2, 5, 'Kamal E J Rejected your request', 1),
(3, 5, 'Athoy Rejected your request', 1),
(4, 3, 'Athoy Rejected your request', 0),
(5, 6, 'Athoy Rejected your request', 1),
(6, 4, 'Athoy Rejected your request', 1);

-- --------------------------------------------------------

--
-- Table structure for table `send_request`
--

CREATE TABLE `send_request` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `request_status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `send_request`
--

INSERT INTO `send_request` (`id`, `user_id`, `to_id`, `request_status`) VALUES
(1, 5, 3, 0),
(2, 5, 4, 1),
(3, 4, 6, 1),
(4, 4, 3, 0),
(5, 3, 7, 1),
(6, 6, 7, 1),
(7, 7, 6, 0),
(8, 5, 7, 1),
(9, 4, 8, 0),
(10, 4, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(3, 'Aby Thomas', 'aby@gmail.com', '$2y$10$ZVsnp1C2cvXsI7Wi9b8xYONN8yS5jlg9s0l9pIboMD9dJCgaWXyci'),
(4, 'Kamal E J', 'kamal@gmail.com', '$2y$10$GSePlaPY6SpBXTKWxq.VKezYgOroxs4KCxFjKJnJFNARcI5nTud4K'),
(5, 'Sachin', 'sachin@gmail.com', '$2y$10$9hUef0p7JP9LwZG7nBJ.GuZA0ZDro5P8ybJhyfH2iFFCk7Otw8EMO'),
(6, 'Don Mathew', 'don@gmail.com', '$2y$10$DxgbHVeMCYw3h0lYa10sTeIbNEENIS/SmQr7ViXKydpAsrfFDHqZC'),
(7, 'Athoy', 'athoy@gmail.com', '$2y$10$V6BHOXJHCi3.ungv76V7S.tIKoaEfgfjiyAL6ybNJOWfJvgMa6Mou'),
(8, 'Abby', 'abyy@gmail.com', '$2y$10$DfwT6cU/QhLGhAFO7jHIAuX8nfXXZ0gNCXQms6RlKsExPKqcn41Km'),
(9, 'Reniz Nazar', 'reniz@gmail.com', '$2y$10$DxTiVNxtjpe6MTQPeBUwTO9hw0IjLZGs9yNpAr.IMg.deT9GkREeK');

-- --------------------------------------------------------

--
-- Table structure for table `user_images`
--

CREATE TABLE `user_images` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image_path` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_images`
--

INSERT INTO `user_images` (`id`, `user_id`, `image_path`) VALUES
(32, 3, 'uploads/download.jpg'),
(33, 3, 'uploads/20200302_080042.jpg'),
(34, 3, 'uploads/Screenshot_2.png'),
(35, 3, 'uploads/image_processing20200214-14391-13mprup.png'),
(36, 3, 'uploads/image_processing20201002-27373-19ur27e.png'),
(37, 3, 'uploads/image_processing20200615-30602-1fh9nih.png'),
(38, 3, 'uploads/image_processing20200727-16826-j1ns83.png'),
(39, 3, 'uploads/image_processing20201014-7504-1ghcf3b.png'),
(43, 3, 'uploads/image_processing20201011-5825-eaaudi.png'),
(44, 3, 'uploads/image_processing20201006-6667-1tyy4va.jpg'),
(45, 4, 'uploads/china-town-illustration-vector.jpg'),
(46, 5, 'uploads/20200302_080042.jpg'),
(47, 5, 'uploads/ezgif.com-webp-to-jpg.jpg'),
(48, 6, 'uploads/148841-clraytzonv-1602133322.jpg'),
(49, 7, 'uploads/319096.jpg'),
(50, 8, 'uploads/Anonymous-Behind-Scenes-1000x576.jpg'),
(51, 9, 'uploads/download.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`id`),
  ADD KEY `division_ibfk_1` (`domination_id`);

--
-- Indexes for table `domination`
--
ALTER TABLE `domination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_table`
--
ALTER TABLE `info_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `info_table_ibfk_1` (`denomination_id`),
  ADD KEY `info_table_ibfk_2` (`division_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `send_request`
--
ALTER TABLE `send_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `to_id` (`to_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_images`
--
ALTER TABLE `user_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `domination`
--
ALTER TABLE `domination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `info_table`
--
ALTER TABLE `info_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `send_request`
--
ALTER TABLE `send_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_images`
--
ALTER TABLE `user_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `division`
--
ALTER TABLE `division`
  ADD CONSTRAINT `division_ibfk_1` FOREIGN KEY (`domination_id`) REFERENCES `domination` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `info_table`
--
ALTER TABLE `info_table`
  ADD CONSTRAINT `info_table_ibfk_1` FOREIGN KEY (`denomination_id`) REFERENCES `domination` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `info_table_ibfk_2` FOREIGN KEY (`division_id`) REFERENCES `division` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `info_table_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `send_request`
--
ALTER TABLE `send_request`
  ADD CONSTRAINT `send_request_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `send_request_ibfk_2` FOREIGN KEY (`to_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_images`
--
ALTER TABLE `user_images`
  ADD CONSTRAINT `user_images_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
