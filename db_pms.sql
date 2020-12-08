-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2020 at 10:48 AM
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
-- Database: `db_pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_parking_entry`
--

CREATE TABLE `tbl_parking_entry` (
  `parking_entry_id` int(11) NOT NULL,
  `vehicle` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_parking_entry`
--

INSERT INTO `tbl_parking_entry` (`parking_entry_id`, `vehicle`, `price`, `date`) VALUES
(1, 'Van', 30, '2020-05-28 17:34:05'),
(2, 'Car', 25, '2020-12-04 14:15:38'),
(3, 'Motor', 15, '2020-12-04 14:16:36'),
(4, 'Van', 30, '2020-12-04 16:10:43'),
(5, 'Motor', 15, '2020-12-06 07:59:10'),
(6, 'Van', 100, '2020-12-06 08:15:19'),
(7, 'Car', 0, '2020-12-06 08:18:36'),
(8, 'Motor', 0, '2020-12-06 08:19:46'),
(9, 'Van', 35, '2020-12-06 08:23:53'),
(10, '', 45, '2020-12-06 08:24:49'),
(11, 'Van', 50, '2020-12-06 08:25:08'),
(12, 'Van', 45, '2020-12-06 08:26:31'),
(13, 'Car', 25, '2020-12-06 08:36:00'),
(14, 'Van', 30, '2020-12-06 08:37:36'),
(15, 'Van', 300, '2020-12-06 08:42:44'),
(16, 'Van', 40, '2020-12-06 08:48:36'),
(17, 'Van', 50, '2020-12-06 09:04:04'),
(18, 'Van', 60, '2020-12-06 09:05:02'),
(19, 'Van', 70, '2020-12-06 09:07:16'),
(20, 'Van', 30, '2020-12-06 09:10:52'),
(21, 'Car', 25, '2020-12-06 09:10:59'),
(22, 'Van', 30, '2020-12-08 03:55:41'),
(23, 'Motor', 15, '2020-12-08 04:36:44'),
(24, 'Motor', 15, '2020-12-08 04:36:49'),
(25, 'Car', 25, '2020-12-08 04:36:51'),
(26, 'Motor', 15, '2020-12-08 04:36:53'),
(27, 'Van', 30, '2020-12-08 04:36:56'),
(39, 'Motor', 15, '2020-12-08 04:56:19'),
(40, 'Car', 25, '2020-12-08 04:56:24'),
(41, 'Car', 25, '2020-12-08 04:56:31'),
(42, 'Motor', 15, '2020-12-08 04:59:06'),
(43, 'Motor', 15, '2020-12-08 06:12:04'),
(44, 'Van', 30, '2020-12-08 06:12:06'),
(45, 'Motor', 15, '2020-12-08 06:12:09'),
(46, 'Van', 30, '2020-12-08 06:12:11'),
(47, 'Motor', 15, '2020-12-08 09:09:10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_parking_slots`
--

CREATE TABLE `tbl_parking_slots` (
  `id` int(11) NOT NULL,
  `available_slots` int(20) NOT NULL,
  `total_parking_slots` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_parking_slots`
--

INSERT INTO `tbl_parking_slots` (`id`, `available_slots`, `total_parking_slots`) VALUES
(1, 3, 30);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `contact` int(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  `date` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `contact`, `role`, `date`) VALUES
(1, 'admin1', 'admin1', 'admin1', '123', 'admin1@g.com', 123123, 'admin', '20:19:58'),
(2, 'admin2', 'admin2', 'admin2', '123456', 'admin2test@g.com', 1232156, 'admin', '23:53:56'),
(3, 'staff1', 'staff1', 'stf1', '123', 'stf1test@g.com', 1234567, 'staff', '00:01:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vehicle_type`
--

CREATE TABLE `tbl_vehicle_type` (
  `vehicle_id` int(11) NOT NULL,
  `vehicle` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_vehicle_type`
--

INSERT INTO `tbl_vehicle_type` (`vehicle_id`, `vehicle`, `price`, `date`) VALUES
(1001, 'Van', 30, '2020-03-12 01:31:13'),
(1002, 'Car', 25, '2020-03-12 01:32:03'),
(1003, 'Motor', 15, '2020-03-12 06:19:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_parking_entry`
--
ALTER TABLE `tbl_parking_entry`
  ADD PRIMARY KEY (`parking_entry_id`);

--
-- Indexes for table `tbl_parking_slots`
--
ALTER TABLE `tbl_parking_slots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_vehicle_type`
--
ALTER TABLE `tbl_vehicle_type`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_parking_entry`
--
ALTER TABLE `tbl_parking_entry`
  MODIFY `parking_entry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tbl_parking_slots`
--
ALTER TABLE `tbl_parking_slots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_vehicle_type`
--
ALTER TABLE `tbl_vehicle_type`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
