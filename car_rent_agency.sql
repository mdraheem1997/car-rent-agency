-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2022 at 08:12 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rent_agency`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book_cars`
--

CREATE TABLE `tbl_book_cars` (
  `id` int(11) NOT NULL,
  `vehicle_model` varchar(255) NOT NULL,
  `vehicle_number` varchar(255) NOT NULL,
  `seating_capacity` varchar(20) NOT NULL,
  `rent_per_day` varchar(100) NOT NULL,
  `no_of_days` varchar(50) NOT NULL,
  `start_date` date DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_book_cars`
--

INSERT INTO `tbl_book_cars` (`id`, `vehicle_model`, `vehicle_number`, `seating_capacity`, `rent_per_day`, `no_of_days`, `start_date`, `user_id`, `date_created`) VALUES
(1, 'Honda City', 'DL-01 AK 7890', '4', '500', '3', '2022-04-29', 1, '2022-04-27 23:38:02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cars`
--

CREATE TABLE `tbl_cars` (
  `id` int(11) NOT NULL,
  `vehicle_model` varchar(255) NOT NULL,
  `vehicle_number` varchar(255) NOT NULL,
  `seating_capacity` varchar(255) NOT NULL,
  `rent_per_day` varchar(100) NOT NULL,
  `del_action` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cars`
--

INSERT INTO `tbl_cars` (`id`, `vehicle_model`, `vehicle_number`, `seating_capacity`, `rent_per_day`, `del_action`, `date_created`, `date_modified`) VALUES
(1, 'Honda City', 'DL-01 AK 7890', '4', '500', 0, '2022-04-27 18:04:35', '2022-04-27 18:04:54');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `agency_name` varchar(255) NOT NULL,
  `agency_address` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `email`, `password`, `role`, `firstname`, `lastname`, `mobile`, `agency_name`, `agency_address`, `status`, `date_created`, `date_modified`) VALUES
(1, 'raheem123@gmail.com', '202cb962ac59075b964b07152d234b70', 'Customer', 'MOHAMMAD', 'RAHEEMULLAH', '9999887767', '', '', 1, '2022-04-27 18:02:14', '2022-04-27 18:02:14'),
(2, 'agency1234@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Car Rent Agency', '', '', '8899898989', 'Car On Rent', 'delhi', 1, '2022-04-27 18:03:29', '2022-04-27 18:03:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_book_cars`
--
ALTER TABLE `tbl_book_cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cars`
--
ALTER TABLE `tbl_cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_book_cars`
--
ALTER TABLE `tbl_book_cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_cars`
--
ALTER TABLE `tbl_cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
