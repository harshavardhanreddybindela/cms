-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2023 at 11:52 PM
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
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(255) NOT NULL,
  `branch_code` varchar(500) NOT NULL,
  `branch_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `branch_code`, `branch_name`) VALUES
(2, 'CSCI-5090', 'Big Data Analytics'),
(3, 'CSCI-5030', 'PSD'),
(4, 'CSCI-5031', 'Artificial Intelligence');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(15) NOT NULL,
  `branch_name` varchar(500) NOT NULL,
  `qualification` varchar(500) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `country` varchar(25) NOT NULL,
  `hobbies` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `email`, `phone`, `branch_name`, `qualification`, `gender`, `dob`, `address`, `city`, `pincode`, `country`, `hobbies`) VALUES
(31, 'Sahasra', 'Reddy', 'sr@gmail.com', 2147483647, '', '2', 'female', '2005-01-01', 'Randolph,NJ', 'NJ', '05786', 'US', 'drawing, singing'),
(32, 'Shloka1', 'Reddy', 'sholka@gmail.com', 2147483647, '', 'highschool', 'female', '2023-01-01', 'NJ', 'NJ', '06785', 'USA', 'sketching'),
(35, 'Harsha', 'Reddy', 'hr@gmail.com', 2147483647, '', 'masters', 'male', '2001-02-27', 'N Vandeventer', 'St Louis', '63108', 'US', 'drawing, singing'),
(36, 'Nikhil', 'Reddy', 'nr@gmail.com', 2147483647, '', 'bachelors', 'male', '1997-02-02', 'Tadipatri', 'Anantapur', '515445', 'India', 'drawing, singing'),
(38, 'Venkat', 'Reddy', 'venkat@gmail.com', 2147483647, '', 'bachelors', 'male', '1975-10-02', 'Nijampet,\r\nHyderabad', 'Hyderabad', '515445', 'India', 'singing'),
(40, 'Janardhan', 'Reddy', 'janardhan@gmail.com', 987654321, 'cse', 'phd', 'male', '1975-03-01', 'Court Road,Anantapur', 'Anantapur', '515001', 'India', 'singing|sketching'),
(41, 'Janardhan', 'Reddy', 'janardhan@gmail.com', 987654321, 'select', 'phd', 'male', '1975-03-01', 'Court Road,Anantapur', 'Anantapur', '515001', 'India', 'singing|sketching'),
(42, 'Jyothi', 'Bindela', 'jyothibindela@gmail.com', 2147483647, 'select', 'select', 'male', '2023-01-02', 'Hyderabad', 'Hyderabad', '515001', 'India', 'drawing'),
(43, 'Sahasra', 'Reddy Sagi', 'sr@gmail.com', 2147483647, 'select', 'select', 'female', '2023-01-02', 'Randolph', 'NJ', '63107', 'US', 'singing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
