-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2018 at 12:14 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat_booking`
--

CREATE TABLE `cat_booking` (
  `book_id` int(5) NOT NULL,
  `user_id` varchar(20) DEFAULT NULL,
  `capacity` int(5) DEFAULT NULL,
  `cat_id` int(5) DEFAULT NULL,
  `s_date` date DEFAULT NULL,
  `e_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cat_food`
--

CREATE TABLE `cat_food` (
  `cat_id` int(5) NOT NULL,
  `food_name` varchar(20) NOT NULL,
  `starters` int(1) DEFAULT NULL,
  `main_course` int(1) DEFAULT NULL,
  `appetizers` int(1) DEFAULT NULL,
  `desserts` int(1) DEFAULT NULL,
  `hindu` int(1) DEFAULT NULL,
  `christ` int(1) DEFAULT NULL,
  `muslim` int(1) DEFAULT NULL,
  `all_food` int(1) DEFAULT NULL,
  `price_per_plate` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat_food`
--

INSERT INTO `cat_food` (`cat_id`, `food_name`, `starters`, `main_course`, `appetizers`, `desserts`, `hindu`, `christ`, `muslim`, `all_food`, `price_per_plate`) VALUES
(1, 'rice', 0, 1, 0, 0, 1, 1, 1, 0, 60),
(2, 'roti', 0, 1, 0, 0, 1, 0, 1, 1, 40),
(3, 'dal', 0, 1, 0, 0, 1, 0, 1, 1, 50),
(4, 'channa masala', 0, 1, 0, 0, 1, 0, 1, 1, 45),
(5, 'rasam', 0, 1, 0, 0, 1, 0, 0, 0, 20),
(6, 'vegetable curry', 0, 1, 0, 0, 1, 0, 0, 0, 30),
(7, 'payasam', 0, 0, 0, 1, 1, 0, 1, 0, 35),
(8, 'lemon rice', 0, 1, 0, 0, 1, 0, 0, 0, 30),
(9, 'gheerice', 0, 1, 0, 0, 1, 1, 1, 0, 55),
(10, 'tamarind rice', 0, 1, 0, 0, 1, 0, 0, 0, 30),
(11, 'plain basmarti rice', 0, 1, 0, 0, 1, 1, 1, 0, 45),
(12, 'veg fried rice', 0, 1, 0, 0, 1, 1, 1, 0, 50),
(13, 'poori', 0, 1, 0, 0, 1, 1, 1, 1, 5),
(14, 'lemon juice', 1, 0, 0, 0, 1, 1, 0, 0, 15),
(15, 'strawberry arugula', 1, 0, 0, 0, 0, 1, 0, 0, 40),
(16, 'spinach salad', 1, 0, 0, 0, 1, 1, 0, 0, 30),
(17, 'tomato salad', 1, 0, 0, 0, 1, 1, 0, 0, 30),
(18, 'roasted corn', 1, 0, 0, 0, 0, 1, 0, 0, 20),
(19, 'baked herb rolls', 1, 0, 0, 0, 0, 1, 0, 0, 25),
(20, 'spinach salad', 1, 0, 0, 0, 1, 1, 0, 0, 30),
(21, 'fish tacos', 0, 1, 0, 0, 0, 1, 0, 0, 55);

-- --------------------------------------------------------

--
-- Table structure for table `hall_booking`
--

CREATE TABLE `hall_booking` (
  `book_id` int(5) PRIMARY KEY AUTO_INCREMENT,
  `days` int(2) NOT NULL,
  `hall_id` int(5) DEFAULT NULL,
  `user_id` varchar(20) DEFAULT NULL,
  `phone` varchar(13) NOT NULL,
  `s_date` date DEFAULT NULL,
  `e_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(20) NOT NULL,
  `name` varchar(15) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wed_cat`
--

CREATE TABLE `wed_cat` (
  `cat_id` int(5) NOT NULL,
  `cat_name` varchar(30) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `reviews` varchar(270) DEFAULT NULL,
  `rating` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wed_hall`
--

CREATE TABLE `wed_hall` (
  `ven_id` int(5) NOT NULL,
  `ven_types` varchar(20) DEFAULT NULL,
  `capacity` int(5) DEFAULT NULL,
  `cost` int(5) DEFAULT NULL,
  `reviews` varchar(270) DEFAULT NULL,
  `rating` int(5) DEFAULT NULL,
  `hall_name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat_booking`
--
ALTER TABLE `cat_booking`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cat_food`
--
ALTER TABLE `cat_food`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `hall_booking`
--
ALTER TABLE `hall_booking`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wed_cat`
--
ALTER TABLE `wed_cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `wed_hall`
--
ALTER TABLE `wed_hall`
  ADD PRIMARY KEY (`ven_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat_booking`
--
ALTER TABLE `cat_booking`
  MODIFY `book_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hall_booking`
--
ALTER TABLE `hall_booking`
  MODIFY `book_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wed_cat`
--
ALTER TABLE `wed_cat`
  MODIFY `cat_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wed_hall`
--
ALTER TABLE `wed_hall`
  MODIFY `ven_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cat_booking`
--
ALTER TABLE `cat_booking`
  ADD CONSTRAINT `cat_booking_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `hall_booking`
--
ALTER TABLE `hall_booking`
  ADD CONSTRAINT `hall_booking_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
