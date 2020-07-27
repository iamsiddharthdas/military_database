-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2017 at 08:38 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `military_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `corps`
--

CREATE TABLE `corps` (
  `corps_id` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `d_o_j` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `corps`
--

INSERT INTO `corps` (`corps_id`, `fname`, `lname`, `address`, `d_o_j`) VALUES
('INA006', 'Adarsh', 'Pujar', 'Hubli', '2017-11-18'),
('ina054', 'Harpreet', 'Singh', 'Ludhiyana', '1977-01-01'),
('INA099', 'Hanamanth', 'Madar', 'Belgaum', '2017-11-01'),
('ina349', 'Sandeep', 'Unnikrishnan', 'Mumbai', '1978-10-01');

--
-- Triggers `corps`
--
DELIMITER $$
CREATE TRIGGER `users_trig` BEFORE INSERT ON `corps` FOR EACH ROW INSERT into trigger_time VALUES(NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` varchar(20) NOT NULL,
  `dept_name` varchar(20) DEFAULT NULL,
  `dept_head_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`, `dept_head_id`) VALUES
('D101', 'Navy', 'INA006');

-- --------------------------------------------------------

--
-- Table structure for table `dependants`
--

CREATE TABLE `dependants` (
  `dname` varchar(20) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `corps_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dependants`
--

INSERT INTO `dependants` (`dname`, `address`, `corps_id`) VALUES
('Asha', 'Thirthahalli', 'INA006');

-- --------------------------------------------------------

--
-- Table structure for table `dept_loc`
--

CREATE TABLE `dept_loc` (
  `dept_id` varchar(20) NOT NULL,
  `dept_location` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sting_operations`
--

CREATE TABLE `sting_operations` (
  `oper_name` varchar(20) NOT NULL,
  `dept_id` varchar(20) DEFAULT NULL,
  `corps_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trigger_time`
--

CREATE TABLE `trigger_time` (
  `exec_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trigger_time`
--

INSERT INTO `trigger_time` (`exec_time`) VALUES
('2017-11-11 00:14:06'),
('2017-11-11 21:24:41'),
('2017-11-11 23:59:51'),
('2017-11-13 17:18:29'),
('2017-11-14 18:37:42'),
('2017-11-14 21:58:32'),
('2017-11-15 23:29:20'),
('2017-11-16 15:26:06');

-- --------------------------------------------------------

--
-- Table structure for table `weapons`
--

CREATE TABLE `weapons` (
  `weapon_id` varchar(20) NOT NULL,
  `weapon_name` varchar(20) DEFAULT NULL,
  `dept_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `corps`
--
ALTER TABLE `corps`
  ADD PRIMARY KEY (`corps_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`),
  ADD KEY `dept_head_id` (`dept_head_id`);

--
-- Indexes for table `dependants`
--
ALTER TABLE `dependants`
  ADD KEY `corps_id` (`corps_id`);

--
-- Indexes for table `dept_loc`
--
ALTER TABLE `dept_loc`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `sting_operations`
--
ALTER TABLE `sting_operations`
  ADD PRIMARY KEY (`oper_name`),
  ADD KEY `corps_id` (`corps_id`),
  ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `weapons`
--
ALTER TABLE `weapons`
  ADD PRIMARY KEY (`weapon_id`),
  ADD KEY `dept_id` (`dept_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`dept_head_id`) REFERENCES `corps` (`corps_id`) ON DELETE CASCADE;

--
-- Constraints for table `dependants`
--
ALTER TABLE `dependants`
  ADD CONSTRAINT `dependants_ibfk_1` FOREIGN KEY (`corps_id`) REFERENCES `corps` (`corps_id`) ON DELETE CASCADE;

--
-- Constraints for table `dept_loc`
--
ALTER TABLE `dept_loc`
  ADD CONSTRAINT `dept_loc_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`) ON DELETE CASCADE;

--
-- Constraints for table `sting_operations`
--
ALTER TABLE `sting_operations`
  ADD CONSTRAINT `sting_operations_ibfk_1` FOREIGN KEY (`corps_id`) REFERENCES `corps` (`corps_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sting_operations_ibfk_2` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`) ON DELETE CASCADE;

--
-- Constraints for table `weapons`
--
ALTER TABLE `weapons`
  ADD CONSTRAINT `weapons_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
