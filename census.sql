-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2017 at 01:51 PM
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

--
-- Dumping data for table `certification`
--

INSERT INTO `certification` (`application_number`, `enumerator`, `enum_date_accomplished`, `team_supervisor`, `team_date_reviewed`, `cas_acas`, `cas_date_reviewed`, `co_ro_po_supervisor`, `co_ro_po_date_reviewed`) VALUES
('1C112413130217oP', '1', '0000-00-00', '213', '0000-00-00', '13', '0000-00-00', '213', '0000-00-00'),
('6c4132131302179h', '1', '0000-00-00', '213', '0000-00-00', '13', '0000-00-00', '213', '0000-00-00'),
('bm263713130217xX', '1', '0000-00-00', '213', '0000-00-00', '13', '0000-00-00', '213', '0000-00-00'),
('L5483413130217XN', '1', '0000-00-00', '213', '0000-00-00', '13', '0000-00-00', '213', '0000-00-00'),
('Y1102513130217vU', '1', '0000-00-00', '213', '0000-00-00', '13', '0000-00-00', '213', '0000-00-00'),
('Zd14191313021715', '1', '0000-00-00', '213', '0000-00-00', '13', '0000-00-00', '213', '0000-00-00'),
('Zm254313130217MG', '1', '0000-00-00', '213', '0000-00-00', '13', '0000-00-00', '213', '0000-00-00');

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

--
-- Dumping data for table `geographic_information`
--

INSERT INTO `geographic_information` (`application_number`, `province`, `city`, `barangay`, `enumeration_area_number`, `building_serial_number`, `housing_unit_serial_number`, `household_serial_number`, `line_number_of_respondent`, `name_of_household_head`, `address`) VALUES
('1C112413130217oP', 'Tondo', 'Manila', 'Longos', '123', '321', '321', '321', '5', 'Tenten', 'Malabon City'),
('6c4132131302179h', 'Tondo', 'Manila', 'Longos', '123', '321', '321', '321', '5', 'Tenten', 'Malabon City'),
('bm263713130217xX', 'Tondo', 'Manila', 'Longos', '123', '321', '321', '321', '5', 'Tenten', 'Malabon City'),
('L5483413130217XN', 'Tondo', 'Manila', 'Longos', '123', '321', '321', '321', '5', 'Tenten', 'Malabon City'),
('Y1102513130217vU', 'Tondo', 'Manila', 'Longos', '123', '321', '321', '321', '5', 'Tenten', 'Malabon City'),
('Zd14191313021715', 'Tondo', 'Manila', 'Longos', '123', '321', '321', '321', '5', 'Tenten', 'Malabon City'),
('Zm254313130217MG', 'Tondo', 'Manila', 'Longos', '123', '321', '321', '321', '5', 'Tenten', 'Malabon City');

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `application_number` varchar(255) NOT NULL,
  `house_type` int(2) NOT NULL,
  `construction` int(2) NOT NULL,
  `materials` int(2) NOT NULL,
  `repair` int(2) NOT NULL,
  `built_year` datetime NOT NULL,
  `floor_area` int(2) NOT NULL,
  `tenure` int(2) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`application_number`, `house_type`, `construction`, `materials`, `repair`, `built_year`, `floor_area`, `tenure`, `remarks`) VALUES
('1C112413130217oP', 1, 1, 1, 1, '1996-10-10 00:00:00', 1, 1, 'Remarking'),
('6c4132131302179h', 1, 1, 1, 1, '1996-10-10 00:00:00', 1, 1, 'Remarking'),
('bm263713130217xX', 1, 1, 1, 1, '1996-10-10 00:00:00', 1, 1, 'Remarking'),
('L5483413130217XN', 1, 1, 1, 1, '1996-10-10 00:00:00', 1, 1, 'Remarking'),
('Y1102513130217vU', 1, 1, 1, 1, '1996-10-10 00:00:00', 1, 1, 'Remarking'),
('Zd14191313021715', 1, 1, 1, 1, '1996-10-10 00:00:00', 1, 1, 'Remarking'),
('Zm254313130217MG', 1, 1, 1, 1, '1996-10-10 00:00:00', 1, 1, 'Remarking');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `application_number` varchar(255) NOT NULL,
  `member_name` varchar(255) NOT NULL,
  `member_relationship` int(2) DEFAULT NULL,
  `gender` int(1) DEFAULT NULL,
  `born_date` datetime DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `is_registered` int(1) DEFAULT NULL,
  `arrangement` int(2) DEFAULT NULL,
  `religious` varchar(255) DEFAULT NULL,
  `citizenship` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `ethnicity` int(2) DEFAULT NULL,
  `disability` int(1) DEFAULT NULL,
  `seeing` int(1) DEFAULT NULL,
  `hearing` int(1) DEFAULT NULL,
  `walking` int(1) DEFAULT NULL,
  `remembering` int(1) DEFAULT NULL,
  `self_caring` int(1) DEFAULT NULL,
  `communicating` int(1) DEFAULT NULL,
  `foreign_city` int(1) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `city_municipality` varchar(255) DEFAULT NULL,
  `grade_year` int(3) DEFAULT NULL,
  `course` varchar(255) DEFAULT NULL,
  `overseas` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`application_number`, `member_name`, `member_relationship`, `gender`, `born_date`, `age`, `is_registered`, `arrangement`, `religious`, `citizenship`, `country`, `ethnicity`, `disability`, `seeing`, `hearing`, `walking`, `remembering`, `self_caring`, `communicating`, `foreign_city`, `province`, `city_municipality`, `grade_year`, `course`, `overseas`) VALUES
('bm263713130217xX', 'Josua', 2, 1, '1999-01-25 00:00:00', 19, 1, 1, 'Methodist', '1', '', 1, 1, NULL, 1, 1, NULL, NULL, NULL, 1, '', '', 0, '', 1),
('bm263713130217xX', 'Tenten', 1, 1, '1996-10-10 00:00:00', 20, 1, 1, 'Methodist', '2', 'America', 1, 1, 1, 1, NULL, NULL, NULL, NULL, 2, 'Tondo', 'Manila', 900, 'BSIT', 1),
('Zm254313130217MG', 'Josua', 2, 1, '1999-01-25 00:00:00', 19, 1, 1, 'Methodist', '1', '', 1, 1, NULL, 1, 1, NULL, NULL, NULL, 1, '', '', 0, '', 1),
('Zm254313130217MG', 'Tenten', 1, 1, '1996-10-10 00:00:00', 20, 1, 1, 'Methodist', '2', 'America', 1, 1, 1, 1, NULL, NULL, NULL, NULL, 2, 'Tondo', 'Manila', 900, 'BSIT', 1);

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

--
-- Dumping data for table `summary_of_visit`
--

INSERT INTO `summary_of_visit` (`application_number`, `enumerator_code`, `number_of_visit`, `result_of_final_visit`, `number_of_household_members`, `number_of_males`, `number_of_females`) VALUES
('Zm254313130217MG', '231', 2, 5, 123, 5, 5);

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
-- Dumping data for table `visit`
--

INSERT INTO `visit` (`application_number`, `visit_1`, `visit_result_1`, `visit_2`, `visit_result_2`, `visit_3`, `visit_result_3`, `next_visit`) VALUES
('1C112413130217oP', '1996-10-10 10:10:00', 1, '1996-02-20 12:34:00', 1, '1886-06-05 22:10:00', 1, '2016-03-03 10:10:00'),
('6c4132131302179h', '1996-10-10 10:10:00', 1, '1996-02-20 12:34:00', 1, '1886-06-05 22:10:00', 1, '2016-03-03 10:10:00'),
('bm263713130217xX', '1996-10-10 10:10:00', 1, '1996-02-20 12:34:00', 1, '1886-06-05 22:10:00', 1, '2016-03-03 10:10:00'),
('L5483413130217XN', '1996-10-10 10:10:00', 1, '1996-02-20 12:34:00', 1, '1886-06-05 22:10:00', 1, '2016-03-03 10:10:00'),
('Y1102513130217vU', '1996-10-10 10:10:00', 1, '1996-02-20 12:34:00', 1, '1886-06-05 22:10:00', 1, '2016-03-03 10:10:00'),
('Zd14191313021715', '1996-10-10 10:10:00', 1, '1996-02-20 12:34:00', 1, '1886-06-05 22:10:00', 1, '2016-03-03 10:10:00'),
('Zm254313130217MG', '1996-10-10 10:10:00', 1, '1996-02-20 12:34:00', 1, '1886-06-05 22:10:00', 1, '2016-03-03 10:10:00');

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
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`application_number`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`application_number`,`member_name`);

--
-- Indexes for table `summary_of_visit`
--
ALTER TABLE `summary_of_visit`
  ADD PRIMARY KEY (`application_number`);

--
-- Indexes for table `visit`
--
ALTER TABLE `visit`
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
