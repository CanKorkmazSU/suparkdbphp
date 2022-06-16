-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2021 at 05:25 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suparkdb2`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `cid` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `plate_no` varchar(12) NOT NULL,
  `car_year` year(4) DEFAULT NULL,
  `car_brand` varchar(30) DEFAULT NULL,
  `car_model` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `car_sticker`
--

CREATE TABLE `car_sticker` (
  `sno` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `issue_date` date DEFAULT NULL,
  `due_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_members`
--

CREATE TABLE `faculty_members` (
  `uid` int(11) NOT NULL,
  `stays_in_campus` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `leaving_date_times`
--

CREATE TABLE `leaving_date_times` (
  `Date` datetime DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `tid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parked_by`
--

CREATE TABLE `parked_by` (
  `cid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `arrival_tid` int(11) NOT NULL,
  `departure_tid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parking_areas`
--

CREATE TABLE `parking_areas` (
  `pname` varchar(20) DEFAULT NULL,
  `curr_capacity` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parking_date_times`
--

CREATE TABLE `parking_date_times` (
  `Date` datetime DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `tid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `personnel`
--

CREATE TABLE `personnel` (
  `uid` int(11) NOT NULL,
  `department` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `uid` int(11) NOT NULL,
  `education` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `drivers_license` int(11) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `is_owner` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `plate_no` (`plate_no`),
  ADD KEY `driver_id` (`driver_id`);

--
-- Indexes for table `car_sticker`
--
ALTER TABLE `car_sticker`
  ADD UNIQUE KEY `sno` (`sno`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `faculty_members`
--
ALTER TABLE `faculty_members`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `leaving_date_times`
--
ALTER TABLE `leaving_date_times`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `parked_by`
--
ALTER TABLE `parked_by`
  ADD PRIMARY KEY (`cid`,`arrival_tid`),
  ADD KEY `uid` (`uid`),
  ADD KEY `pid` (`pid`),
  ADD KEY `arrival_tid` (`arrival_tid`),
  ADD KEY `departure_tid` (`departure_tid`);

--
-- Indexes for table `parking_areas`
--
ALTER TABLE `parking_areas`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `parking_date_times`
--
ALTER TABLE `parking_date_times`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculty_members`
--
ALTER TABLE `faculty_members`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leaving_date_times`
--
ALTER TABLE `leaving_date_times`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parking_areas`
--
ALTER TABLE `parking_areas`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parking_date_times`
--
ALTER TABLE `parking_date_times`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personnel`
--
ALTER TABLE `personnel`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_ibfk_1` FOREIGN KEY (`driver_id`) REFERENCES `users` (`uid`);

--
-- Constraints for table `car_sticker`
--
ALTER TABLE `car_sticker`
  ADD CONSTRAINT `car_sticker_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `cars` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `faculty_members`
--
ALTER TABLE `faculty_members`
  ADD CONSTRAINT `faculty_members_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `parked_by`
--
ALTER TABLE `parked_by`
  ADD CONSTRAINT `parked_by_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `cars` (`cid`),
  ADD CONSTRAINT `parked_by_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`),
  ADD CONSTRAINT `parked_by_ibfk_3` FOREIGN KEY (`pid`) REFERENCES `parking_areas` (`pid`),
  ADD CONSTRAINT `parked_by_ibfk_4` FOREIGN KEY (`arrival_tid`) REFERENCES `parking_date_times` (`tid`),
  ADD CONSTRAINT `parked_by_ibfk_5` FOREIGN KEY (`departure_tid`) REFERENCES `leaving_date_times` (`tid`);

--
-- Constraints for table `personnel`
--
ALTER TABLE `personnel`
  ADD CONSTRAINT `personnel_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
