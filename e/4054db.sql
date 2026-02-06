-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2025 at 10:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4054db`
--
CREATE DATABASE IF NOT EXISTS `4054db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `4054db`;

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `a_id` int(7) NOT NULL,
  `a_position` text NOT NULL,
  `a_prefix` text NOT NULL,
  `a_fullname` varchar(255) NOT NULL,
  `a_birthday` varchar(255) NOT NULL,
  `a_education` text NOT NULL,
  `a_skills` varchar(255) NOT NULL,
  `a_experience` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`a_id`, `a_position`, `a_prefix`, `a_fullname`, `a_birthday`, `a_education`, `a_skills`, `a_experience`) VALUES
(1, 'HR Officer', 'นางสาว', 'สโนชา ชาวดอน', '2004-12-07', 'ปริญญาตรี', 'พูดภาษาอังกฤษ', 'ทำงานมานาน 5 ปี'),
(2, 'Software Developer', 'นาย', 'สรัลพร เบิกบาน', '2000-02-14', 'ปริญญาตรี', 'พูดภาษาอังกฤษ', 'ทำงานมานาน 5 ปี');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `r_id` int(7) NOT NULL,
  `r_name` varchar(255) NOT NULL,
  `r_phone` varchar(255) NOT NULL,
  `r_height` int(7) NOT NULL,
  `r_address` varchar(255) NOT NULL,
  `r_birthday` varchar(255) NOT NULL,
  `r_color` varchar(7) NOT NULL,
  `r_major` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`r_id`, `r_name`, `r_phone`, `r_height`, `r_address`, `r_birthday`, `r_color`, `r_major`) VALUES
(1, 'แพรวา ชาวดอน', '', 0, '', '', '0.00', ''),
(4, 'สมหญิง ใจงาม', '', 0, '', '', '0.00', ''),
(5, 'แก้วตา ดวงใจ', '', 0, '', '', '0.00', ''),
(6, 'สีสัน สวยงาม', '0634617460', 0, '', '', '0.00', ''),
(7, 'สโนชา ชาวดอน', '0953458076', 0, '', '', '0.00', ''),
(8, 'แก้วตา ดวงใจ', '01656622', 0, '', '', '0.00', ''),
(13, 'สรัลพร เบิกบาน', '0684819546', 165, '125/250', '2004-12-07', '#176bd9', 'คอมพิวเตอร์ธุรกิจ'),
(14, 'สรัลพร เบิกบาน', '0684819546', 165, '125/250', '2004-12-07', '#563d7c', 'การบัญชี');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `a_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `r_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
