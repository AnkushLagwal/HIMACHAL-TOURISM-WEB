-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2022 at 06:39 AM
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
-- Database: `tour_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `user_id` int(12) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(80) NOT NULL,
  `mobile` bigint(76) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`user_id`, `user_name`, `password`, `mobile`) VALUES
(1, 'admin', 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `dest_id` int(12) NOT NULL,
  `distt` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`dest_id`, `distt`, `state`, `name`) VALUES
(1, 'Shimla', 'Himachal pradesh', 'KOTKHAI'),
(2, 'Shimla', 'Himachal pradesh', 'theog'),
(3, 'Shimla', 'Himachal pradesh', 'kufri'),
(4, 'Shimla', 'Himachal pradesh', 'naldehra'),
(5, 'Shimla', 'Himachal pradesh', 'mashobra');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `HotelID` int(11) NOT NULL,
  `Rent` int(255) DEFAULT NULL,
  `dest_id` int(12) DEFAULT NULL,
  `hotel_name` varchar(30) NOT NULL,
  `description` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`HotelID`, `Rent`, `dest_id`, `hotel_name`, `description`) VALUES
(2, 1000, 1, 'himland', 'fdfdaf');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `pack_id` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `dest_id` int(11) DEFAULT NULL,
  `pack_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`pack_id`, `price`, `dest_id`, `pack_name`) VALUES
(5, 3000, 1, 'holiday Package');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `result_id` int(20) NOT NULL,
  `marks_obtained` varchar(40) DEFAULT NULL,
  `stu_id` int(40) DEFAULT NULL,
  `sub_id` int(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stu_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `branch` int(10) NOT NULL,
  `semester` int(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `roll_no` int(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_id`, `name`, `branch`, `semester`, `email`, `phone`, `roll_no`) VALUES
(1, 'adrash', 3, 5, 'amankurshal@gmail.com', 123456, 101),
(2, 'aman', 0, 4, 'amankurshal@gmail.com', 256889653695, 102),
(3, 'SHUBHAM CHANCEL', 0, 5, 'amankurshal@gmail.com', 123456, 102),
(4, 'SHUBHAM ', 0, 5, 'amankurshal@gmail.com', 123456, 104),
(5, 'SHUBHAM ', 0, 5, 'amankurshal@gmail.com', 123456, 105),
(6, 'SHUBHAM ', 0, 5, 'amankurshal@gmail.com', 123456, 106),
(7, 'vishal', 0, 5, 'vishal69@gmail.com', 987697696, 102),
(8, 'adarsh', 0, 5, 'amankurshal@gmail.com', 598585756, 110),
(9, 'Vikas', 0, 1, 'vikas.879@gmail.com', 1111222233, 106),
(10, 'shashank', 1, 1, 'shashank6@gmail.com', 212173314, 107),
(11, 'Aditi', 3, 1, 'aditi.879@gmail.com', 1111222233, 101),
(12, 'Aashish Kapila', 4, 5, 'Aashishtheboss@gmail.com', 8569741302, 286);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_id` int(11) NOT NULL,
  `code` varchar(20) NOT NULL,
  `max_marks` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `semester` int(10) NOT NULL,
  `Branch` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `code`, `max_marks`, `name`, `semester`, `Branch`) VALUES
(8, 'CS3.1', 200, 'DIGITAL SYTEM AND APPLICATONS', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tourism`
--

CREATE TABLE `tourism` (
  `user_id` int(12) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` bigint(76) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tourism`
--

INSERT INTO `tourism` (`user_id`, `user_name`, `password`, `mobile`) VALUES
(1, 'admin', 'admin', 9876543210),
(2, 'admin', 'admin', 9876543210);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(30) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_cat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `password`, `user_cat`) VALUES
(1, 'admin', 'admijn', 0),
(2, 'aman', 'aman', 1),
(3, 'adarsh', 'adarsh', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`dest_id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`HotelID`),
  ADD KEY `dest_id` (`dest_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`pack_id`),
  ADD KEY `dest_id` (`dest_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`result_id`),
  ADD KEY `stu_id` (`stu_id`),
  ADD KEY `sub_id` (`sub_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `tourism`
--
ALTER TABLE `tourism`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `user_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `dest_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `HotelID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `pack_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tourism`
--
ALTER TABLE `tourism`
  MODIFY `user_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `hotel_ibfk_1` FOREIGN KEY (`dest_id`) REFERENCES `destinations` (`dest_id`);

--
-- Constraints for table `packages`
--
ALTER TABLE `packages`
  ADD CONSTRAINT `packages_ibfk_1` FOREIGN KEY (`dest_id`) REFERENCES `destinations` (`dest_id`);

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `student` (`stu_id`),
  ADD CONSTRAINT `result_ibfk_2` FOREIGN KEY (`sub_id`) REFERENCES `subject` (`sub_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
