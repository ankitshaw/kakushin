-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2017 at 06:53 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kakushin`
--

-- --------------------------------------------------------

--
-- Table structure for table `allocation`
--

CREATE TABLE `allocation` (
  `id` int(11) NOT NULL,
  `ngo_id` int(11) NOT NULL,
  `volunteer_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `accepted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allocation`
--

INSERT INTO `allocation` (`id`, `ngo_id`, `volunteer_id`, `event_id`, `accepted`) VALUES
(9, 19, 18, 14, '1');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `total_donation` int(11) NOT NULL,
  `tax_excemption` int(11) NOT NULL,
  `comp_csr_score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `total_donation`, `tax_excemption`, `comp_csr_score`) VALUES
(23, 'Google', 0, 0, 0),
(24, 'Apple', 0, 0, 0),
(25, 'Microsoft', 0, 0, 0),
(26, 'Hello', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `ngo_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `company_id`, `ngo_id`, `event_id`, `amount`, `date`) VALUES
(3, 24, 19, 14, 2000, '2017-08-09 00:00:00'),
(4, 23, 19, 14, 20000, '2017-08-17 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `ngo_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `fund_generated` int(11) NOT NULL,
  `total_spending` int(11) NOT NULL,
  `volunteers_req` int(11) NOT NULL,
  `min_profile_score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `name`, `ngo_id`, `date`, `fund_generated`, `total_spending`, `volunteers_req`, `min_profile_score`) VALUES
(14, 'arogya', 19, '2017-08-10 15:04:00', 1000, 0, 20, 80);

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `vol_id` int(11) NOT NULL,
  `sector_id` int(11) NOT NULL,
  `no_of_days` int(11) NOT NULL DEFAULT '0',
  `ngo_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `interested`
--

CREATE TABLE `interested` (
  `id` int(11) NOT NULL,
  `volunteer_id` int(11) NOT NULL,
  `ngo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interested`
--

INSERT INTO `interested` (`id`, `volunteer_id`, `ngo_id`) VALUES
(4, 18, 22),
(5, 18, 19);

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE `ngo` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `reg_no` int(11) NOT NULL,
  `current_fund` int(11) NOT NULL,
  `total_volunteers` int(11) NOT NULL DEFAULT '0',
  `events_organized` int(11) NOT NULL,
  `event_ids` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `state` varchar(20) NOT NULL,
  `district` varchar(30) NOT NULL,
  `sector` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`id`, `name`, `reg_no`, `current_fund`, `total_volunteers`, `events_organized`, `event_ids`, `address`, `state`, `district`, `sector`) VALUES
(19, 'drishti', 24514, 20000, 0, 0, 0, 'MG Road', 'Maharashtra', 'Thane', '1'),
(20, 'Nitra', 24514, 10000, 0, 0, 0, 'MG Road', 'Maharashtra', 'Thane', '2'),
(21, 'Tetra', 24513, 1000, 0, 0, 0, 'MG Road', 'Maharashtra', 'Mumbai', '4'),
(22, 'Petra', 24513, 1000, 0, 0, 0, 'MG Road', 'Maharashtra', 'Thane', '4');

-- --------------------------------------------------------

--
-- Table structure for table `sector`
--

CREATE TABLE `sector` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sector`
--

INSERT INTO `sector` (`id`, `name`) VALUES
(1, 'Education & Literacy'),
(2, 'Aged / Elderly '),
(3, 'Environment & Forest '),
(4, 'Orphanage');

-- --------------------------------------------------------

--
-- Table structure for table `spending`
--

CREATE TABLE `spending` (
  `id` int(11) NOT NULL,
  `ngo_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `reason` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_level` enum('0','1','2') NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_no` bigint(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_level`, `password`, `phone_no`) VALUES
(16, '1', '202cb962ac59075b964b07152d234b70', 9619674909),
(18, '1', '202cb962ac59075b964b07152d234b70', 8108252865),
(19, '0', '202cb962ac59075b964b07152d234b70', 99999999),
(20, '0', '202cb962ac59075b964b07152d234b70', 88888888),
(21, '0', '202cb962ac59075b964b07152d234b70', 77777777),
(22, '0', 'c20ad4d76fe97759aa27a0c99bff6710', 66666666),
(23, '2', '202cb962ac59075b964b07152d234b70', 11111111),
(24, '2', '202cb962ac59075b964b07152d234b70', 11111118),
(25, '2', '202cb962ac59075b964b07152d234b70', 11111119),
(26, '2', '202cb962ac59075b964b07152d234b70', 11111100),
(27, '1', '202cb962ac59075b964b07152d234b70', 1010101);

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `profile_score` int(11) NOT NULL,
  `experience` int(11) NOT NULL,
  `ngo_selected` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteers`
--

INSERT INTO `volunteers` (`id`, `name`, `profile_score`, `experience`, `ngo_selected`) VALUES
(16, 'Ankit', 0, 0, 0),
(18, 'Tanmay', 95, 0, 0),
(27, 'Ajay', 76, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allocation`
--
ALTER TABLE `allocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interested`
--
ALTER TABLE `interested`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngo`
--
ALTER TABLE `ngo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allocation`
--
ALTER TABLE `allocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `interested`
--
ALTER TABLE `interested`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sector`
--
ALTER TABLE `sector`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
