-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2020 at 05:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_taj`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_information`
--

CREATE TABLE `customer_information` (
  `customer_id` int(100) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_address` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `room_no` int(100) DEFAULT NULL,
  `payment_status` varchar(100) NOT NULL,
  `customer_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_information`
--

INSERT INTO `customer_information` (`customer_id`, `customer_name`, `customer_address`, `email_address`, `contact_no`, `room_no`, `payment_status`, `customer_image`) VALUES
(31, 'Mr ABC', 'Newyork,USA', 'abc@gmail.com', '+880-17XXXXXX', 0, '', '../storage/Customer_Image/customer_1.jpg'),
(32, 'Ms CDE', 'London,England', 'cde@gmail.com', '+880-18XXXXXX', 0, '', '../storage/Customer_Image/customer_2.jpg'),
(33, 'Mr EFG', 'Capetown,SouthAfrica', 'efg@gmail.com', '+880-19XXXXXX', 0, '', '../storage/Customer_Image/customer_3.jpg'),
(34, 'Ms GHI', 'Newyork,USA', 'ghi@gmail.com', '+880-13XXXXXX', 0, '', '../storage/Customer_Image/customer_4.jpg'),
(35, 'Mr IJK', 'Sydne,Australia', 'ijk@gmail.com', '+880-14XXXXXX', 0, '', '../storage/Customer_Image/customer_5.jpg'),
(36, 'Mrs KLM', 'London,England', 'klm@gmail.com', '+880-15XXXXXX', 0, '', '../storage/Customer_Image/customer_6.jpg'),
(37, 'Mr MNO', 'Wellington,New Zealand', 'mno@gmail.com', '+880-15XXXXXX', 0, '', '../storage/Customer_Image/customer_7.jpg'),
(38, 'Ms OPQ', 'Tokyo,Japan', 'opq@gmail.com', '+880-15XXXXXX', 0, '', '../storage/Customer_Image/customer_8.jpg'),
(39, 'Mr QRS', 'London,England', 'qrs@gmail.com', '+880-15XXXXXX', 0, '', '../storage/Customer_Image/customer_9.jpg'),
(40, 'Mr STR', 'Capetown,SouthAfrica', 'str@gmail.com', '+880-14XXXXXX', 0, '', '../storage/Customer_Image/customer_15.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `employee_information`
--

CREATE TABLE `employee_information` (
  `employee_id` int(100) NOT NULL,
  `employee_name` varchar(100) DEFAULT NULL,
  `employee_address` varchar(100) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `contact_no` varchar(100) DEFAULT NULL,
  `employee_position` varchar(100) NOT NULL,
  `salary` int(100) DEFAULT NULL,
  `payment_status` varchar(100) DEFAULT NULL,
  `employee_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_information`
--

INSERT INTO `employee_information` (`employee_id`, `employee_name`, `employee_address`, `email_address`, `contact_no`, `employee_position`, `salary`, `payment_status`, `employee_image`) VALUES
(2, 'Mr AAA', 'Newyork,USA', 'aaa@gmail.com', '+880-17XXXX', 'HR', 90000, 'Complete', '../storage/Employee_Image/HR_1.jpg'),
(3, 'Mr BBB', 'Newyork,USA', 'bbb@gmail.com', '+880-15XXXX', 'IT_Specialist', 90000, 'Complete', '../storage/Employee_Image/IT_Specialist.jpg'),
(4, 'Mr CCC', 'London,UK', 'ccc@gmail.com', '+880-17XXXX', 'IT_Specialist', 70000, 'Complete', '../storage/Employee_Image/IT_Specialist_2.jpg'),
(5, 'Mr DDD', 'CapeTown,SouthAfrica', 'ccc@gmail.com', '+880-18XXXX', 'Chef', 40000, '(partial)', '../storage/Employee_Image/Chef_1.jpg'),
(6, 'Ms EEE', 'Newyork,USA', 'eee@gmail.com', '+880-17XXXX', 'Environmental_Specialist', 70099, 'Complete', '../storage/Employee_Image/Environmental_Specialist_1.jpg'),
(7, 'Mrs GGG', 'Tokyo,Japan', 'ggg@gmail.com', '+880-18XXXX', 'Receptionist', 80000, 'Complete', '../storage/Employee_Image/Receptionist_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login_panel`
--

CREATE TABLE `login_panel` (
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `customer_id` int(100) DEFAULT NULL,
  `employee_id` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_panel`
--

INSERT INTO `login_panel` (`user_name`, `password`, `title`, `customer_id`, `employee_id`) VALUES
('Manager1', '1111', 'manager', NULL, NULL),
('Receptionist1', '2222', 'receptionist', NULL, NULL),
('Customer1', '3333', 'customer', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `room_information`
--

CREATE TABLE `room_information` (
  `room_no` int(100) NOT NULL,
  `size` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `num_of_bed` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `room_type` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `rent_price` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `room_status` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `room_image` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `customer_id` int(100) DEFAULT NULL,
  `customer_name` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `payment_status` varchar(100) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_information`
--

INSERT INTO `room_information` (`room_no`, `size`, `num_of_bed`, `room_type`, `rent_price`, `room_status`, `room_image`, `customer_id`, `customer_name`, `payment_status`) VALUES
(20, '500 sqr ', '1', 'Small', '1000 /-bdt ', '(available)', '../storage/Room_Image/small_1.jpg', 0, '', ''),
(21, '500 sqr ', '1', 'Small', ' 1000/-bdt ', '(available)', '../storage/Room_Image/small_2.jpg', 0, '', ''),
(22, ' 600sqr ', '1', 'Small', ' 1200/-bdt ', '(available)', '../storage/Room_Image/small_3.jpg', 0, '', ''),
(23, '700 sqr ', '1', 'Small', '1500 /-bdt ', '(available)', '../storage/Room_Image/small_4.jpg', 0, '', ''),
(24, '700 sqr ', '1', 'Small', '1500 /-bdt ', '(available)', '../storage/Room_Image/small_5.jpg', 0, '', ''),
(25, ' 800sqr ', '2', 'Medium', '2000 /-bdt ', '(available)', '../storage/Room_Image/medium_1.jpg', 0, '', ''),
(26, ' 800sqr ', '2', 'Medium', ' 2000/-bdt ', '(available)', '../storage/Room_Image/medium_2.jpg', 0, '', ''),
(27, ' 900sqr ', '2', 'Medium', ' 2500/-bdt ', '(available)', '../storage/Room_Image/medium_3.jpg', 0, '', ''),
(28, ' 1000sqr ', '2', 'Medium', '3000 /-bdt ', '(available)', '../storage/Room_Image/medium_4.jpg', 0, '', ''),
(29, ' 1000sqr ', '2', 'Medium', '3000 /-bdt ', '(available)', '../storage/Room_Image/medium_5.jpg', 0, '', ''),
(30, '1200 sqr ', '3', 'Large', ' 5000/-bdt ', '(available)', '../storage/Room_Image/large_1.jpg', 0, '', ''),
(31, ' 1200sqr ', '3', 'Large', ' 5000/-bdt ', '(available)', '../storage/Room_Image/large_2.jpg', 0, '', ''),
(32, '1200 sqr ', '3', 'Large', '5000 /-bdt ', '(available)', '../storage/Room_Image/large_3.jpg', 0, '', ''),
(33, ' 1400sqr ', '3', 'Large', '10000 /-bdt ', '(available)', '../storage/Room_Image/large_4.jpg', 0, '', ''),
(34, ' 1400sqr ', '3', 'Large', '10000 /-bdt ', '(available)', '../storage/Room_Image/large_5.jpg', 0, '', ''),
(35, '1500 sqr ', '3', 'VIP', '15000 /-bdt ', '(available)', '../storage/Room_Image/VIP_1.jpg', 0, '', ''),
(36, ' 1500sqr ', '3', 'VIP', '15000 /-bdt ', '(available)', '../storage/Room_Image/VIP_2.jpg', 0, '', ''),
(37, ' 1500sqr ', '3', 'VIP', ' 17000/-bdt ', '(available)', '../storage/Room_Image/VIP_3.jpg', 0, '', ''),
(38, '1500 sqr ', '3', 'VIP', '17000 /-bdt ', '(available)', '../storage/Room_Image/large_4.jpg', 0, '', ''),
(39, '1500 sqr ', '3', 'VIP', '15000 /-bdt ', '(available)', '../storage/Room_Image/VIP_5.jpg', 0, '', ''),
(40, ' 1800sqr ', '3', 'Deluxe', '20000 /-bdt ', '(available)', '../storage/Room_Image/deluxe_1.jpg', 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_information`
--
ALTER TABLE `customer_information`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `room_no` (`room_no`);

--
-- Indexes for table `employee_information`
--
ALTER TABLE `employee_information`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `login_panel`
--
ALTER TABLE `login_panel`
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `room_information`
--
ALTER TABLE `room_information`
  ADD PRIMARY KEY (`room_no`),
  ADD KEY `customer_id` (`customer_id`,`customer_name`,`payment_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_information`
--
ALTER TABLE `customer_information`
  MODIFY `customer_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `employee_information`
--
ALTER TABLE `employee_information`
  MODIFY `employee_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `room_information`
--
ALTER TABLE `room_information`
  MODIFY `room_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
