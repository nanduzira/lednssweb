-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2017 at 04:14 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ledkerala`
--

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE `houses` (
  `ward` varchar(2) NOT NULL,
  `house_no` varchar(5) NOT NULL,
  `head` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `ration_no` varchar(15) NOT NULL,
  `caste` set('General','OBC','SC','ST','Others','') NOT NULL,
  `own_land` set('Yes','No','') NOT NULL,
  `land` varchar(10) NOT NULL,
  `income` varchar(10) NOT NULL,
  `electricity_no` varchar(15) NOT NULL,
  `landline_no` varchar(11) NOT NULL,
  `gas_agency` varchar(20) NOT NULL,
  `drinking_water` varchar(20) NOT NULL,
  `laterine_facility` set('Yes','No','') NOT NULL,
  `vehicle_type` varchar(1) NOT NULL,
  `literacy_count` varchar(2) NOT NULL,
  `update_status` set('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `ward` varchar(2) NOT NULL,
  `house_no` varchar(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` varchar(3) NOT NULL,
  `sex` set('MALE','FEMALE','') NOT NULL,
  `edu_qualifications` varchar(30) NOT NULL,
  `job` varchar(20) NOT NULL,
  `uid_no` varchar(12) NOT NULL,
  `election_id` varchar(30) NOT NULL,
  `govt_aids` varchar(40) NOT NULL,
  `mob_no` varchar(15) NOT NULL,
  `any_traits` varchar(40) NOT NULL,
  `update_status` set('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `userpass` varchar(50) NOT NULL,
  `usertype` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `userpass`, `usertype`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '1'),
(2, 'test', '098f6bcd4621d373cade4e832627b4f6', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`ward`,`house_no`),
  ADD UNIQUE KEY `landline_no` (`landline_no`),
  ADD UNIQUE KEY `electricity_no` (`electricity_no`),
  ADD UNIQUE KEY `ration_no` (`ration_no`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`ward`,`house_no`),
  ADD UNIQUE KEY `uid_no` (`uid_no`),
  ADD UNIQUE KEY `election_id` (`election_id`),
  ADD UNIQUE KEY `mob_no` (`mob_no`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_ibfk_1` FOREIGN KEY (`ward`) REFERENCES `houses` (`ward`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
