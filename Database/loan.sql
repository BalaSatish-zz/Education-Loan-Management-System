-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2018 at 01:42 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loan`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountcreation`
--

CREATE TABLE `accountcreation` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `permanentaddress` varchar(255) NOT NULL,
  `mobno` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accountcreation`
--

INSERT INTO `accountcreation` (`email`, `password`, `name`, `fname`, `dob`, `address`, `permanentaddress`, `mobno`, `city`, `state`) VALUES
('chinnayadav951@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Bala Satish', 'Bala', '03/09/1997', '#5/2, Sarvashakthi nilaya, opposite to railway station,', '#5/2, Sarvashakthi nilaya, opposite to railway station,', '7996945627', 'Bangalore', 'Karnataka');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`, `value`) VALUES
('admin', 'e10adc3949ba59abbe56e057f20f883e', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `bankaccount`
--

CREATE TABLE `bankaccount` (
  `mobileno` varchar(255) NOT NULL,
  `Balance` varchar(255) NOT NULL,
  `InterestRate` varchar(255) NOT NULL,
  `Time` varchar(255) NOT NULL,
  `ApprovedLoanAmount` varchar(255) NOT NULL,
  `GivenLoanAmount` varchar(255) NOT NULL,
  `InterestAmount` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bankaccount`
--

INSERT INTO `bankaccount` (`mobileno`, `Balance`, `InterestRate`, `Time`, `ApprovedLoanAmount`, `GivenLoanAmount`, `InterestAmount`) VALUES
('7996945627', '10000', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `mobileno` varchar(255) NOT NULL,
  `uploadstatus1` varchar(255) NOT NULL,
  `uploadstatus2` varchar(255) NOT NULL,
  `uploadstatus3` varchar(255) NOT NULL,
  `verificationstatus` varchar(255) NOT NULL,
  `approvalstatus` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`mobileno`, `uploadstatus1`, `uploadstatus2`, `uploadstatus3`, `verificationstatus`, `approvalstatus`) VALUES
('7996945627', 'true', 'false', 'false', 'processing', 'verification pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `bankaccount`
--
ALTER TABLE `bankaccount`
  ADD UNIQUE KEY `mobileno` (`mobileno`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD UNIQUE KEY `mobileno` (`mobileno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
