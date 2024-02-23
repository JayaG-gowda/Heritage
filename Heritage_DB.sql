-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2021 at 08:20 AM
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
-- Database: `heritage`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) COLLATE utf16_bin NOT NULL,
  `name` varchar(50) COLLATE utf16_bin NOT NULL,
  `gender` varchar(50) COLLATE utf16_bin NOT NULL,
  `dob` varchar(50) COLLATE utf16_bin NOT NULL,
  `phone` varchar(50) COLLATE utf16_bin NOT NULL,
  `collagename` varchar(50) COLLATE utf16_bin NOT NULL,
  `course` varchar(50) COLLATE utf16_bin NOT NULL,
  `email` varchar(50) COLLATE utf16_bin NOT NULL,
  `password` varchar(50) COLLATE utf16_bin NOT NULL,
  `userid` varchar(50) COLLATE utf16_bin NOT NULL,
  `score` varchar(50) COLLATE utf16_bin NOT NULL,
  `rm` varchar(50) COLLATE utf16_bin NOT NULL,
  `events` varchar(50) COLLATE utf16_bin NOT NULL,
  `sevents` varchar(50) COLLATE utf16_bin NOT NULL,
  `gevents` varchar(50) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `gender`, `dob`, `phone`, `collagename`, `cource`, `email`, `password`, `userid`, `score`, `rm`, `events`, `sevents`, `gevents`) VALUES
('Jay', 'male', '2003-07-14', '1234567890', 'NDRK FGC','BCA', 'abc123@gmail.com', '123', '123', '0', '', '', '', '');

-- --------------------------------------------------------
--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
--

-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
