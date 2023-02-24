-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 02:31 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE `registered` (
  `u_id` int(15) NOT NULL,
  `passwd` varchar(100) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` int(20) NOT NULL,
  `college` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `paid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`u_id`, `passwd`, `name`, `email`, `phone`, `college`, `branch`, `qualification`, `address`, `state`, `country`, `paid`) VALUES
(3, '$2y$10$tjf9fgwJNdO2BV7c4J2uuub9fp4r.p0WE6Gd0kWVOVQEXaMnHBSKa', 'Aditya Vardhan Gara', 'adityavardhan81109@gmail.com', 2147483647, 'IITG', 'kxHSX', 'M.Tech', 'HXBJB s', 'X JS ', 'xshbs', 0),
(4, '$2y$10$LYZbQx8mNh.Wq8c5nYwQne8T3SQApdWKQcAPzezNQMUD.A3fJC1vG', 'Aditya Vardhan Gara', 'adityavardhan81109@gmail.com', 2147483647, 'IITG', 'kxHSX', 'M.Tech', 'HXBJB s', 'X JS ', 'xshbs', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registered`
--
ALTER TABLE `registered`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registered`
--
ALTER TABLE `registered`
  MODIFY `u_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
