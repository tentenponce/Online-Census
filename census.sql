-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2017 at 10:33 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `census`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `tag`) VALUES
(1, 'admin', 'admin', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `certification`
--

CREATE TABLE `certification` (
  `application_number` varchar(255) NOT NULL,
  `enumerator` varchar(255) NOT NULL,
  `enum_date_accomplished` date NOT NULL,
  `team_supervisor` varchar(255) NOT NULL,
  `team_date_reviewed` date NOT NULL,
  `cas_acas` varchar(255) NOT NULL,
  `cas_date_reviewed` date NOT NULL,
  `co_ro_po_supervisor` varchar(255) NOT NULL,
  `co_ro_po_date_reviewed` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `geographic_information`
--

CREATE TABLE `geographic_information` (
  `application_number` varchar(30) NOT NULL,
  `province` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `enumeration_area_number` varchar(50) NOT NULL,
  `building_serial_number` varchar(50) NOT NULL,
  `housing_unit_serial_number` varchar(50) NOT NULL,
  `household_serial_number` varchar(50) NOT NULL,
  `line_number_of_respondent` varchar(50) NOT NULL,
  `name_of_household_head` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `summary_of_visit`
--

CREATE TABLE `summary_of_visit` (
  `application_number` varchar(255) NOT NULL,
  `enumerator_code` varchar(255) NOT NULL,
  `number_of_visit` int(11) NOT NULL,
  `result_of_final_visit` int(11) NOT NULL,
  `number_of_household_members` int(11) NOT NULL,
  `number_of_males` int(11) NOT NULL,
  `number_of_females` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visit`
--

CREATE TABLE `visit` (
  `application_number` varchar(255) NOT NULL,
  `visit_1` datetime NOT NULL,
  `visit_result_1` int(1) NOT NULL,
  `visit_2` datetime NOT NULL,
  `visit_result_2` int(1) NOT NULL,
  `visit_3` datetime NOT NULL,
  `visit_result_3` int(1) NOT NULL,
  `next_visit` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certification`
--
ALTER TABLE `certification`
  ADD PRIMARY KEY (`application_number`);

--
-- Indexes for table `geographic_information`
--
ALTER TABLE `geographic_information`
  ADD PRIMARY KEY (`application_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
