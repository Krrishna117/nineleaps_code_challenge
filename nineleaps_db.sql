-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2017 at 02:37 PM
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
-- Database: `nineleaps_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `nineleaps_data_table`
--

CREATE TABLE `nineleaps_data_table` (
  `s_no` int(11) NOT NULL,
  `employee_name` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `reporting_manager` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nineleaps_data_table`
--

INSERT INTO `nineleaps_data_table` (`s_no`, `employee_name`, `designation`, `reporting_manager`) VALUES
(1, 'James Bond', 'CEO', NULL),
(2, 'James Watson', 'COO', 'James Bond'),
(3, 'Kevin Pieterson', 'VP Marketing', 'James Bond'),
(4, 'Yuvraj Singh', 'Developer', 'Kevin Pieterson'),
(5, 'Bradd Pitt', 'Mobile Tester', 'Yuvraj Singh'),
(6, 'Tony Stark', 'CTO', 'James Watson'),
(7, 'Chris Hemsworth', 'VP Marketing', 'James Watson'),
(8, 'Bradley Cooper', 'Head (Finance)', 'Bradd Pitt'),
(9, 'Jennifer Lawrence', 'Scrum Master', 'Bradley Cooper'),
(10, 'Ivanka Trumph', 'Recruitment Manager', 'Bradd Pitt'),
(11, 'Christopher Nolan', 'Facilities', 'Ivanka Trumph'),
(12, 'Raghava Lawrence', 'CEO', NULL),
(13, 'Donald Trumph', 'Business Analyst', 'Yuvraj Singh'),
(14, 'Adolf Hitler', 'Solution Architect', 'Kevin Pieterson'),
(15, 'Kamran Akmal', 'Scrum Master', 'Bradd Pitt'),
(16, 'James Faulkner', 'Manager Sales', 'Raghava Lawrence'),
(17, 'Stephen Hawkings', 'Head (Development)', 'James Bond'),
(18, 'Alexander Grahambel', 'Scrum Master', 'Stephen Hawkings'),
(19, 'Virat Kohli', 'L&D Manager', 'Ivanka Trumph');

-- --------------------------------------------------------

--
-- Table structure for table `nineleaps_designations`
--

CREATE TABLE `nineleaps_designations` (
  `s_no` int(11) NOT NULL,
  `designation_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nineleaps_designations`
--

INSERT INTO `nineleaps_designations` (`s_no`, `designation_name`) VALUES
(1, 'CEO'),
(2, 'COO'),
(3, 'VP Sales'),
(4, 'VP Marketing'),
(5, 'Head (HR)'),
(6, 'Head (Finance)'),
(7, 'CTO'),
(8, 'Accounts Manager'),
(9, 'Business Analyst'),
(10, 'Scrum Master'),
(11, 'Head (Quality)'),
(12, 'Quality Manager'),
(13, 'Tester'),
(14, 'Mobile Tester'),
(15, 'Head (Development)'),
(16, 'Developer'),
(17, 'Manager Sales'),
(18, 'Manager Marketing'),
(19, 'Recruitment Manager'),
(20, 'L&D Manager'),
(21, 'Facilities'),
(22, 'Solution Architect');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nineleaps_data_table`
--
ALTER TABLE `nineleaps_data_table`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `nineleaps_designations`
--
ALTER TABLE `nineleaps_designations`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nineleaps_data_table`
--
ALTER TABLE `nineleaps_data_table`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `nineleaps_designations`
--
ALTER TABLE `nineleaps_designations`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
