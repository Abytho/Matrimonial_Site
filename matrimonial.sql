-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 12, 2021 at 03:25 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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

DROP TABLE IF EXISTS `division`;
CREATE TABLE IF NOT EXISTS `division` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `domination_id` int(11) NOT NULL,
  `division` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `division_ibfk_1` (`domination_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

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

DROP TABLE IF EXISTS `domination`;
CREATE TABLE IF NOT EXISTS `domination` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `domination` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `domination`
--

INSERT INTO `domination` (`id`, `domination`) VALUES
(3, 'Hindu'),
(4, 'Christian '),
(5, 'Muslim');

-- --------------------------------------------------------

--
-- Table structure for table `family_details`
--

DROP TABLE IF EXISTS `family_details`;
CREATE TABLE IF NOT EXISTS `family_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `foccupation` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `moccupation` varchar(50) NOT NULL,
  `siblings` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family_details`
--

INSERT INTO `family_details` (`id`, `user_id`, `fname`, `foccupation`, `mname`, `moccupation`, `siblings`) VALUES
(5, 16, 'Madhavan', 'Plumber', 'Rani', 'House Wife', 6),
(4, 15, 'Manu', 'Bussiness', 'Ammini', 'House Wife', 0),
(6, 17, 'Mohan', 'Farmer', 'Ammu', 'House Wife', 5),
(7, 21, 'Rajan', 'Bussiness', 'Lalli', 'House Wife', 3),
(8, 18, 'Varier', 'Bussiness', 'Anna', 'House Wife', 4),
(9, 20, 'Kumar', 'Farmer', 'Ammu', 'House Wife', 2),
(10, 22, 'Ram', 'Painter', 'Radha', 'House Wife', 2),
(11, 23, 'Nair', 'Farmer', 'Minmini', 'House Wife', 2),
(12, 24, 'Geo', 'Farmer', 'Kathrina', 'Nurse', 1),
(13, 19, 'Nazer', 'Plumber', 'Rani', 'House Wife', 1),
(14, 25, 'dayal', 'carpenter', 'Lakshmi', 'House Wife', 2),
(15, 26, 'Madhavan', 'Painter', 'Ammu', 'House Wife', 1),
(16, 33, 'Mathew', 'Painter', 'Anna', 'Nurse', 2),
(17, 34, 'Rajan', 'carpenter', 'Ammini', 'Nurse', 6),
(18, 35, 'Hari', 'Farmer', 'mariyam', 'House Wife', 2),
(19, 36, 'Rajan', 'Farmer', 'Rani', 'House Wife', 6);

-- --------------------------------------------------------

--
-- Table structure for table `info_table`
--

DROP TABLE IF EXISTS `info_table`;
CREATE TABLE IF NOT EXISTS `info_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `marital_status` varchar(20) NOT NULL,
  `created_by` varchar(20) NOT NULL,
  `denomination_id` int(11) NOT NULL,
  `division_id` int(11) NOT NULL,
  `subcast` varchar(20) NOT NULL,
  `education` varchar(20) NOT NULL,
  `mother_tounge` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `info_table_ibfk_1` (`denomination_id`),
  KEY `info_table_ibfk_2` (`division_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_table`
--

INSERT INTO `info_table` (`id`, `user_id`, `gender`, `dob`, `marital_status`, `created_by`, `denomination_id`, `division_id`, `subcast`, `education`, `mother_tounge`, `country`, `mobile`) VALUES
(16, 15, 'Male', '1994-02-16', '0', 'Self', 3, 2, 'sndp', 'BBA', 'malayalam', 'India', '8689785987'),
(17, 16, 'Female', '1998-02-12', 'Unmarried', 'Parents', 4, 1, 'Knanaya', 'nursing', 'malayalam', 'India', '8798789878'),
(18, 17, 'Male', '1996-02-12', 'Divorced', 'Parents', 5, 3, 'none', 'MCA', 'malayalam', 'India', '9745658989'),
(19, 21, 'Female', '1992-03-12', 'Unmarried', 'Parents', 3, 2, 'Brahmin', 'Mtech', 'malayalam', 'India', '7898989878'),
(20, 18, 'Female', '1997-02-05', 'Unmarried', 'Relative', 3, 2, 'sndp', 'nursing', 'malayalam', 'India', '98456589'),
(21, 20, 'Female', '1998-12-19', 'Unmarried', 'Self', 4, 1, 'Knanaya', 'Mcom', 'malayalam', 'India', '9447592582'),
(22, 22, 'Male', '1990-02-25', 'Unmarried', 'Self', 3, 2, 'sndp', '12th', 'malayalam', 'India', '898565878'),
(23, 23, 'Female', '1996-03-25', 'Unmarried', 'Self', 3, 2, 'none', 'Mcom', 'malayalam', 'India', '8978989878'),
(24, 24, 'Male', '1998-02-02', 'Unmarried', 'Self', 4, 1, 'Knanaya', 'MCA', 'malayalam', 'India', '9745658987'),
(25, 19, 'Male', '1998-02-25', 'Unmarried', 'Self', 5, 3, 'none', 'MCA', 'malayalam', 'India', '9447592582'),
(26, 25, 'Female', '1998-02-20', 'Unmarried', 'Self', 3, 2, 'sndp', 'MCA', 'malayalam', 'India', '9447592582'),
(27, 26, 'Male', '1992-05-19', 'Unmarried', 'Self', 3, 2, 'none', 'MCA', 'malayalam', 'India', '9447592582'),
(28, 33, 'Male', '1998-02-19', 'Unmarried', 'Self', 3, 2, '', '', 'malayalam', 'India', '89998898'),
(29, 33, 'Male', '1995-02-19', 'Unmarried', 'Self', 3, 2, 'sndp', 'MCA', 'malayalam', 'India', '8592876337'),
(30, 34, 'Male', '1998-02-15', 'Unmarried', 'Self', 3, 2, 'sndp', 'MCA', 'malayalam', 'India', '8606867242'),
(31, 35, 'Male', '1998-02-22', 'Unmarried', 'Parents', 4, 1, 'none', 'MCA', 'malayalam', 'India', '8606867242'),
(32, 36, 'Male', '2018-02-25', 'Unmarried', 'Parents', 3, 2, 'none', 'MCA', 'malayalam', 'India', '8606867242');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `notification_message` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `notification_message`, `status`) VALUES
(9, 25, 'lal Rejected your request', 1),
(10, 34, 'sheela Rejected your request', 1),
(11, 24, 'sheela Rejected your request', 1),
(12, 35, 'bhama Rejected your request', 0);

-- --------------------------------------------------------

--
-- Table structure for table `partner_details`
--

DROP TABLE IF EXISTS `partner_details`;
CREATE TABLE IF NOT EXISTS `partner_details` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `user_id` int(50) NOT NULL,
  `education` varchar(50) NOT NULL,
  `cast` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partner_details`
--

INSERT INTO `partner_details` (`id`, `user_id`, `education`, `cast`, `age`) VALUES
(2, 15, 'Nursing', 'sndp', '25'),
(3, 16, 'BBA', 'Knanaya', '28'),
(4, 17, 'Mtech', 'none', '25'),
(5, 21, 'MCA', 'none', '25'),
(6, 18, 'MCA', 'nine', '25'),
(7, 20, 'BBA', 'Knanaya', '28'),
(8, 22, 'Nursing', 'sndp', '25'),
(9, 23, 'MCA', 'none', '28'),
(10, 24, 'Doctor', 'Knanaya', '25'),
(11, 19, 'BBA', 'none', '26'),
(12, 25, 'MCA', 'sndp', '28'),
(13, 26, 'MCA', 'sndp', '25'),
(14, 33, '12th', 'sndp', '25'),
(15, 34, 'MCA', 'sndp', '26'),
(16, 35, 'MCA', 'none', '25'),
(17, 36, 'MCA', 'sndp', '25');

-- --------------------------------------------------------

--
-- Table structure for table `send_request`
--

DROP TABLE IF EXISTS `send_request`;
CREATE TABLE IF NOT EXISTS `send_request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `request_status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `to_id` (`to_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `send_request`
--

INSERT INTO `send_request` (`id`, `user_id`, `to_id`, `request_status`) VALUES
(14, 25, 17, 1),
(15, 34, 21, 1),
(16, 24, 21, 1),
(17, 35, 23, 1),
(18, 36, 18, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(15, 'dileep', 'dileep@gmail.com', '$2y$10$g2g9TfoSJKkbiAjLC8jLV.MO5oqYGmHzyvnabrA0zpEY900Vflf5a'),
(16, 'Nithya', 'nithya@gmail.com', '$2y$10$Y/b7AWUGEql8YudIZoasxOkejPNK0WmRRnjqVRNo64/VygIZev9Ey'),
(17, 'lal', 'lal@gmail.com', '$2y$10$bgt.gZP9CtMARKP/2iqKC.58B4wVKLgzTTEFMUc2muvoAskbnWn9y'),
(18, 'manju', 'manju@gmail.com', '$2y$10$XNQIb0AWQf3l0hY4X5zQre/QsfzMUswUK0DWWdSoehkk/gman23AK'),
(19, 'reniz', 'reniz@gmail.com', '$2y$10$t2eSrgLKY4AK9X20GjE6BuXpU2u2j6a6NOOZsO6J8hsRaMJbiOqTa'),
(20, 'ann', 'ann@gmail.com', '$2y$10$1Cxyt8IYOkXQcw6vDRm08.64qxbHgA5lNWz3AwlZ4lhNwwGbiQvDi'),
(21, 'sheela', 'sheela@gmail.com', '$2y$10$4z/uPfRlo7YCplNCoymKl.Akog1j8SQ4pEvIrqnNMaqwDG0UI3nvG'),
(22, 'vinayakan', 'vinayakan@gmail.com', '$2y$10$ocgdeQOBZXzPKPtIB/7YPO4FMXlxd841M2dDLgmDADWReIwMGcSVK'),
(23, 'bhama', 'bhama@gmail.com', '$2y$10$DV0089DMs0JPromEwCTLweeG9QKViynilLrSWYvgOhMIJ8aBOL9YO'),
(24, 'sachin', 'sachin@gmail.com', '$2y$10$HBq6fKS6YpWvWtj4SDYyde5Y4qsRyxDkH6ckwRG6K7oBW/xznKpo2'),
(25, 'Arya', 'arya@gmail.com', '$2y$10$69prajWwHCNkh7WzO0LxDuOepYc2olsy9CLimd3mLB1Im1JgXi0fq'),
(26, 'rahul', 'rahul', '$2y$10$eZ52E6zxEP6CnsV0f/NFy.I/6sJQLdIACS1KY68zZ/zjA4hFOZjG6'),
(33, 'arun', 'arun@gmail.com', '$2y$10$XJBiMOv0Nd/5Sek.6Z4sc.DkDkQHkNLUhHznUIwqqgCO5zpiPV51S'),
(34, 'alen', 'alen@gmail.com', '$2y$10$mYSPGLhRMvH1mPPqo2uSg.PE45erw9hQuVbrBg7er54XV3Djhj0SK'),
(35, 'deepu', 'deepu@gmail.com', '$2y$10$l0qnfn/4kc3E9HqXOsOL1.DQuKh1lIEKCSR.uWtBmtld5aH5pbGY.'),
(36, 'ramu', 'ramu@gmail.com', '$2y$10$8oJlJdG/VRExuzYiihilDOsBuwgOX2auNdZ/aEQ7BqVhgCaU.ialq');

-- --------------------------------------------------------

--
-- Table structure for table `user_images`
--

DROP TABLE IF EXISTS `user_images`;
CREATE TABLE IF NOT EXISTS `user_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `image_path` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_images`
--

INSERT INTO `user_images` (`id`, `user_id`, `image_path`) VALUES
(58, 15, 'uploads/download.jpg'),
(59, 15, 'uploads/1oad.jpg'),
(60, 16, 'uploads/8.jpg'),
(61, 17, 'uploads/3.jpg'),
(62, 17, 'uploads/23.jpg'),
(63, 21, 'uploads/5.jpg'),
(64, 18, 'uploads/64.jpg'),
(65, 20, 'uploads/65.jpg'),
(66, 22, 'uploads/58.jpg'),
(67, 24, 'uploads/6.jpg'),
(68, 19, 'uploads/29.jpg'),
(69, 23, 'uploads/24.jpg'),
(70, 25, 'uploads/96.jpg'),
(71, 26, 'uploads/86.jpg'),
(72, 33, 'uploads/images.jpg'),
(73, 34, 'uploads/98.jpg'),
(74, 34, 'uploads/244.jpg'),
(75, 35, 'uploads/images.jpg');

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
