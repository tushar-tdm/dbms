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
  `book_id` int(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
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
  `desserts` int(1) DEFAULT NULL,
  `hindu` int(1) DEFAULT NULL,
  `christ` int(1) DEFAULT NULL,
  `muslim` int(1) DEFAULT NULL,

  `price_per_plate` int(5) DEFAULT NULL,
  `type` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat_food`
--

INSERT INTO `cat_food` (`cat_id`, `food_name`, `starters`, `main_course`, `appetizers`, `desserts`, `hindu`, `christ`, `muslim`, `all_food`, `price_per_plate`,`type`) VALUES
(1, 'rice', 0, 1, 0, 0, 1, 1, 1, 1, 60, 0),
(1, 'roti', 0, 1, 0, 0, 1, 0, 1, 1, 40, 0),
(1, 'dal', 0, 1, 0, 0, 1, 0, 1, 1, 50, 0),
(1, 'channa masala', 0, 1, 0, 0, 1, 0, 1, 1, 45, 0),
(1, 'rasam', 0, 1, 0, 0, 1, 0, 0, 0, 20, 0),
(1, 'vegetable curry', 0, 1, 0, 0, 1, 0, 0, 0, 30, 0),
(1, 'payasam', 0, 0, 0, 1, 1, 0, 1, 0, 35, 0),
(1, 'lemon rice', 0, 1, 0, 0, 1, 0, 0, 0, 30, 0),
(1, 'gheerice', 0, 1, 0, 0, 1, 1, 1, 0, 55, 0),
(1, 'tamarind rice', 0, 1, 0, 0, 1, 0, 0, 0, 30, 0),
(1, 'plain basmarti rice', 0, 1, 0, 0, 1, 1, 1, 0, 45, 0),
(1, 'veg fried rice', 0, 1, 0, 0, 1, 1, 1, 0, 50, 0),
(1, 'poori', 0, 1, 0, 0, 1, 1, 1, 1, 5, 0),
(1, 'lemon juice', 1, 0, 0, 0, 1, 1, 0, 0, 15, 0),
(1, 'strawberry arugula', 1, 0, 0, 0, 0, 1, 0, 0, 40, 0),
(1, 'spinach salad', 1, 0, 0, 0, 1, 1, 0, 0, 30, 0),
(1, 'tomato salad', 1, 0, 0, 0, 1, 1, 0, 0, 30, 0),
(1, 'roasted corn', 1, 0, 0, 0, 0, 1, 0, 0, 20, 0),
(1, 'baked herb rolls', 1, 0, 0, 0, 0, 1, 0, 0, 25, 0),
(1, 'spinach salad', 1, 0, 0, 0, 1, 1, 0, 0, 30, 0),
(1, 'fish tacos', 0, 1, 0, 0, 0, 1, 0, 0, 55, 1),
(1, 'chicken biriyani', 0, 1, 0, 0, 0, 1, 0, 0, 55, 1),
(1, 'fish tacos', 0, 1, 0, 0, 0, 1, 0, 0, 55, 1),


-- --------------------------------------------------------

--
-- Table structure for table `hall_booking`
--

CREATE TABLE `hall_booking` (
  `book_id` int(5) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `hall_id` int(5) DEFAULT NULL,
  `user_id` varchar(20) DEFAULT NULL,
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
  `contact` varchar(15) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `city` varchar(20) NOT NULL,
  `email` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wed_cat`
--

CREATE TABLE `wed_cat` (
  `cat_id` int(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `cat_name` varchar(40) DEFAULT NULL,
  `city` varchar(35) NOT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `rating` int(5) DEFAULT NULL,
  `desc` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `wed_cat`
--

CREATE TABLE `cat_review` (
  `cat_id` int(5) NOT NULL PRIMARY KEY,
  `rating` int(5) DEFAULT NULL,
  `review` varchar(3000) NOT NULL,
  `user_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wed_hall`
--

CREATE TABLE `wed_hall` (
  `ven_id` int(5) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `ven_type` varchar(30) DEFAULT NULL,
  `capacity` int(5) DEFAULT NULL,
  `cost1` int(5) DEFAULT NULL,
  `cost2` int(5) DEFAULT NULL,
  `cost3` int(5) DEFAULT NULL,
  `cost4` int(5) DEFAULT NULL,
  `rating` int(5) DEFAULT NULL,
  `hall_name` varchar(35) DEFAULT NULL,
  `desc` varchar(3000) NOT NULL,
  `day1` int(6) NOT NULL,
  `day2` int(6) NOT NULL,
  `day3` int(6) NOT NULL,
  `day4` int(6) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------------------------------------

--
-- Table structure for table `wed_hall`
--  name will be 'special+cat_id+food_name';

CREATE TABLE `special`(
  `cat_id` int(5) NOT NULL,
  `f1` varchar(20) NOT NULL,
  `f2` varchar(20) NOT NULL,
  `f3` varchar(20) NOT NULL,
  `f4` varchar(20) NOT NULL,
  `f5` varchar(20) NOT NULL,
  `f6` varchar(20) NOT NULL,
  `f7` varchar(20) NOT NULL,
  `f8` varchar(20) NOT NULL,
  `f9` varchar(20) NOT NULL,
  `f10` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------------------------------------


INSERT INTO `wed_cat` (`cat_name`,`cattype`,`city`,`contact`,`rating`,`desc`) VALUES 
('TECHFORK','both','bangalore','9611598344',4,'TechFork catering based out of Bangalore offer customised menus for any type of party/event
and wedding at a reasonable pricing. They can serve upto 2000 guests and have been a
customers delight for thier exclusive cuisines cooked and served with excellent hygiene
practices. They are very easy to work with and have built a relationship of trust with thier
customers in addition to providing a variety of options and timely services.'),
('SAGAR','veg','mumbai','9611587043',5,'For more than three decades now, Sagar Caterers has been at the peak of the catering and
hospitality industry in Bangalore. Having thousands of successful weddings and other events to
its name. Sagar has become an institution when it comes to throwing a party. And with
equipment, infrastructure to manage events that are exclusive and limited to a
few hundred guests, all the way up to managing events that have more than thousands of
guests.'),
('CATERING INN','both','delhi','8628937203',5,'Catering Inn is a venture for catering based in Bangalore .Mrs Bali as she started with supplying
6 lunches daily, operating from home. By the grace of God, the business grew due to word of
mouth recommendations and sheer hard work. Today Catering Inn has a self-owned well
equipped 6000 square foot kitchen in the heart of the city at Yeshwantpur.');

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
