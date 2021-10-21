-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2021 at 06:52 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hienmau`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_recipient`
--

CREATE TABLE `blood_recipient` (
  `reci_id` int(11) NOT NULL,
  `reci_name` varchar(100) DEFAULT NULL,
  `reci_age` int(11) DEFAULT NULL,
  `reci_bgrp` char(10) DEFAULT NULL,
  `reci_bqnty` int(11) DEFAULT NULL,
  `reci_sex` varchar(20) DEFAULT NULL,
  `reci_reg_date` date DEFAULT NULL,
  `reci_phno` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_recipient`
--

INSERT INTO `blood_recipient` (`reci_id`, `reci_name`, `reci_age`, `reci_bgrp`, `reci_bqnty`, `reci_sex`, `reci_reg_date`, `reci_phno`) VALUES
(2, 'Nguyễn Yến Ngọc', 20, 'A', 250, 'Nữ', '2021-10-20', '0987752108'),
(3, ' Nguyễn Văn A', 20, 'O', 250, 'Nam', '0000-00-00', '0912929991'),
(5, ' Bùi Thị Trang', 20, 'AB', 250, 'Nữ', '2021-10-31', '094173731');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_recipient`
--
ALTER TABLE `blood_recipient`
  ADD PRIMARY KEY (`reci_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_recipient`
--
ALTER TABLE `blood_recipient`
  MODIFY `reci_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
