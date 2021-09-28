-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2021 at 02:30 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `talent_centric`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_information`
--

CREATE TABLE `employee_information` (
  `id` int(10) UNSIGNED NOT NULL,
  `employee_id` varchar(30) DEFAULT NULL,
  `employee_name` varchar(25) DEFAULT NULL,
  `position_name` varchar(50) DEFAULT NULL,
  `mobile_no` varchar(15) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `father_name` varchar(150) DEFAULT NULL,
  `mother_name` varchar(150) DEFAULT NULL,
  `present_address` varchar(250) DEFAULT NULL,
  `permanent_address` varchar(250) DEFAULT NULL,
  `nid` varchar(20) DEFAULT NULL,
  `bank_name` varchar(150) DEFAULT NULL,
  `ac_no` varchar(30) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_information`
--

INSERT INTO `employee_information` (`id`, `employee_id`, `employee_name`, `position_name`, `mobile_no`, `email`, `dob`, `father_name`, `mother_name`, `present_address`, `permanent_address`, `nid`, `bank_name`, `ac_no`, `status`) VALUES
(6, '4365345634', 'asdasd', 'aseqwe', '+8801677521763', 'csomitalukder@gmail.com', '2021-09-15', '112', 'asdad', 'ssaaa', 'dasda', '1231', 'adas', '12312', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_information`
--
ALTER TABLE `employee_information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_information`
--
ALTER TABLE `employee_information`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
