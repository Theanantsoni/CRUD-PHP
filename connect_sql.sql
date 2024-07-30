-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:1111
-- Generation Time: Oct 04, 2023 at 09:26 PM
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
-- Database: `org`
--

-- --------------------------------------------------------

--
-- Table structure for table `connect_sql`
--

CREATE TABLE `connect_sql` (
  `emp_id` int(11) NOT NULL,
  `emp_fname` varchar(30) NOT NULL,
  `emp_lname` varchar(30) NOT NULL,
  `emp_email` varchar(30) NOT NULL,
  `emp_contact` bigint(11) NOT NULL,
  `emp_year` int(11) NOT NULL,
  `emp_password` int(30) NOT NULL,
  `emp_gender` varchar(30) NOT NULL,
  `emp_hobby` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `connect_sql`
--

INSERT INTO `connect_sql` (`emp_id`, `emp_fname`, `emp_lname`, `emp_email`, `emp_contact`, `emp_year`, `emp_password`, `emp_gender`, `emp_hobby`) VALUES
(13, 'Anant', 'Soni', 'anantsoni204@gmail.com', 8595986589, 2021, 1234567890, 'Male', 'Cricket,Driving');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `connect_sql`
--
ALTER TABLE `connect_sql`
  ADD PRIMARY KEY (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `connect_sql`
--
ALTER TABLE `connect_sql`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
