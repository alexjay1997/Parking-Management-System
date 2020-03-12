-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2020 at 10:45 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_parking_entry`
--

INSERT INTO `tbl_parking_entry` (`parking_entry_id`, `vehicle`, `price`, `date`) VALUES
(1, 'Van', 30, '2020-03-12 08:07:30'),
(2, 'Car', 25, '2020-03-12 08:07:42'),
(3, 'Motor', 15, '2020-03-12 08:07:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_parking_slots`
--

CREATE TABLE `tbl_parking_slots` (
  `id` int(11) NOT NULL,
  `available_slots` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_parking_slots`
--

INSERT INTO `tbl_parking_slots` (`id`, `available_slots`) VALUES
(1, 22);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `firstname` int(50) NOT NULL,
  `lastname` int(50) NOT NULL,
  `username` int(50) NOT NULL,
  `password` int(250) NOT NULL,
  `email` int(50) NOT NULL,
  `contact` int(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  `date` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vehicle_type`
--

CREATE TABLE `tbl_vehicle_type` (
  `vehicle_id` int(11) NOT NULL,
  `vehicle` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
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
  MODIFY `parking_entry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_parking_slots`
--
ALTER TABLE `tbl_parking_slots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_vehicle_type`
--
ALTER TABLE `tbl_vehicle_type`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
