-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2020 at 09:40 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sih_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `aadhar`
--

CREATE TABLE `aadhar` (
  `adharno` bigint(12) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobileno` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aadhar`
--

INSERT INTO `aadhar` (`adharno`, `name`, `mobileno`) VALUES
(123456789123, 'tirlochan singh ', 9348209242);

-- --------------------------------------------------------

--
-- Table structure for table `crimerecord`
--

CREATE TABLE `crimerecord` (
  `firid` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `AadharNo` int(20) NOT NULL,
  `MobileNo` int(12) NOT NULL,
  `Address` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ZipCode` int(10) NOT NULL,
  `psid` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `dol` date NOT NULL,
  `LocationOfIncident` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Crime_If_Cognizable` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Crime_If_NonCognizable` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NameOfVictim` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NameOfSuspect` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `crimerecord`
--

INSERT INTO `crimerecord` (`firid`, `Name`, `AadharNo`, `MobileNo`, `Address`, `ZipCode`, `psid`, `dol`, `LocationOfIncident`, `Crime_If_Cognizable`, `Crime_If_NonCognizable`, `NameOfVictim`, `NameOfSuspect`, `status`) VALUES
('dfdf12', 'Ojas', 209363, 823759, '9 chowdwar,cuttack', 751022, 'chaul753003', '2019-10-10', 'bm9,chowdwar', 'murder', NULL, 'abef', 'Peter', 'unsolved'),
('gnhgjh232', 'tanu', 98754, 97864, '9,khordha,puri', 781002, 'infoc751024', '2020-01-21', 'bhawanipatna', 'NULL', 'bribery', 'john', 'hina', 'unsolved'),
('bnghy43', 'oji', 96745, 3947357, '9,vss,bbsr', 751007, 'patia751024', '2020-01-25', 'chowdwar', '', NULL, 'Peter', 'none', 'solved'),
('hjkujy34', 'jeet', 978640, 66345789, '9,chandigarh,punjab', 981002, 'sahee751007', '2019-09-02', 'chandigarh', 'NULL', '', 'pet', 'noone', 'unsolved');

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

CREATE TABLE `police` (
  `id` varchar(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` int(10) NOT NULL,
  `pin` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `police`
--

INSERT INTO `police` (`id`, `name`, `password`, `pin`) VALUES
('chaul753003', 'chauliaganj ps', 123456, 753003),
('infoc751024', 'infocity ps', 123456, 751024),
('patia751024', 'patia ps', 123456, 751024),
('sahee751007', 'saheed nagar ps', 123456, 751007);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aadhar`
--
ALTER TABLE `aadhar`
  ADD PRIMARY KEY (`adharno`);

--
-- Indexes for table `crimerecord`
--
ALTER TABLE `crimerecord`
  ADD PRIMARY KEY (`psid`);

--
-- Indexes for table `police`
--
ALTER TABLE `police`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
