-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 20, 2019 at 10:41 PM
-- Server version: 5.6.37
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `afmsc`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `accountid` varchar(100) NOT NULL,
  `accountname` varchar(50) NOT NULL,
  `account_type` varchar(50) NOT NULL,
  `minbalance` decimal(15,0) NOT NULL DEFAULT '0',
  `userid` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `account_type`
--

CREATE TABLE IF NOT EXISTS `account_type` (
  `acct_id` int(30) NOT NULL,
  `acct_name` varchar(30) NOT NULL,
  `min_balance` decimal(50,0) NOT NULL,
  `fixcharge` decimal(50,0) NOT NULL,
  `dicrip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contribution`
--

CREATE TABLE IF NOT EXISTS `contribution` (
  `cid` int(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `amount` decimal(25,0) NOT NULL DEFAULT '0',
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `created_by` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE IF NOT EXISTS `deposits` (
  `did` int(30) NOT NULL,
  `date` timestamp(2) NOT NULL DEFAULT CURRENT_TIMESTAMP(2) ON UPDATE CURRENT_TIMESTAMP(2),
  `amount` double NOT NULL,
  `acct_type` varchar(10) NOT NULL,
  `discription` varchar(50) NOT NULL,
  `acc_number` int(50) NOT NULL,
  `freq` int(50) NOT NULL,
  `user_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE IF NOT EXISTS `loan` (
  `loan_id` int(10) NOT NULL,
  `loan_date` int(50) NOT NULL,
  `amount` decimal(55,0) NOT NULL,
  `discription` varchar(30) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `othernames` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `datecreated` date NOT NULL,
  `accesslevel` enum('inactive','disabled','admin','regular','super') NOT NULL DEFAULT 'inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `withdrawal`
--

CREATE TABLE IF NOT EXISTS `withdrawal` (
  `tid` int(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `acct_name` varchar(255) NOT NULL,
  `account_type` varchar(30) NOT NULL,
  `acct_number` int(30) NOT NULL,
  `date` date NOT NULL,
  `discript` varchar(255) NOT NULL,
  `recipent` varchar(255) NOT NULL,
  `payer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`accountid`);

--
-- Indexes for table `contribution`
--
ALTER TABLE `contribution`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`did`),
  ADD UNIQUE KEY `acc_number` (`acc_number`),
  ADD UNIQUE KEY `freq` (`freq`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `withdrawal`
--
ALTER TABLE `withdrawal`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contribution`
--
ALTER TABLE `contribution`
  MODIFY `cid` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `did` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `withdrawal`
--
ALTER TABLE `withdrawal`
  MODIFY `tid` int(255) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
