-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2023 at 11:12 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dca`
--

-- --------------------------------------------------------

--
-- Table structure for table `adddrives`
--

CREATE TABLE `adddrives` (
  `id` int(11) NOT NULL,
  `company` varchar(100) NOT NULL,
  `jobprofile` varchar(100) NOT NULL,
  `stream` varchar(100) NOT NULL,
  `lastdate` varchar(50) NOT NULL,
  `joblocation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adddrives`
--

INSERT INTO `adddrives` (`id`, `company`, `jobprofile`, `stream`, `lastdate`, `joblocation`) VALUES
(1, 'TCS', 'Devoloper', 'BCS', '20/02/2022', 'pune'),
(3, 'wipro', 'tester', '', '20/02/2023', 'Pune'),
(4, 'HCL', 'FULL STACK', '', '20/02/2023', 'Mumbai'),
(5, 'HCL', 'FULL STACK', '', '20/02/2023', 'Mumbai'),
(6, 'Hexaware', 'it support', 'BCS', '20/02/2024', 'Banglore'),
(7, 'Hexaware', 'FULL STACK', 'BCS', '20/02/2024', 'Pune'),
(8, 'Hexaware', 'FULL STACK', 'BCS', '20/02/2024', 'Pune'),
(9, 'wipro', 'it support', 'BCS', '20/02/2023', 'Delhi'),
(11, 'amdos', 'tester', 'BCS', '12/03/2023', 'Pune'),
(12, 'AMDOCS', 'Devoloper', 'BCS', '12/03/2023', 'Pune');

-- --------------------------------------------------------

--
-- Table structure for table `addstudent`
--

CREATE TABLE `addstudent` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `prn` int(10) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `stream` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addstudent`
--

INSERT INTO `addstudent` (`id`, `name`, `email`, `contact`, `prn`, `dob`, `city`, `gender`, `stream`) VALUES
(11, 'Vidya  Chavan', 'vidya@gmail.com', '7777777777', 1234, '13/11/2002', 'Sambajinagar', 'Female', 'BCS'),
(7, 'sanjana agrawal', 'sanjana@gmail.com', '9689831211', 12345, '12/03/2002', 'Sambajinagar', 'Female', 'BCS'),
(3, 'sanket', 'sf@gmail.com', '9322782882', 22231706, '', 'jalna', 'Male', 'BCS'),
(5, 'om', 'om@gmail.com', '1234567890', 123456789, '15-06-2002', 'jalna', 'Male', 'BCS'),
(13, 'sapna surase', 'sapna@gmail.com', '7030433141', 987654321, '12/09/2002', 'Jalna', 'Female', 'BCS'),
(2, 'prashant', 'pp@gmail.com', '7833556723', 2021000021, '21/03/2002', 'buldhana', 'Male', 'BCS'),
(12, 'Renuka Patil', 'renuka@gmail.com', '9689831212', 2021000023, '12/87/2002', 'Sambajinagar', 'Female', 'BCS'),
(1, 'vishnu', 'vishnu@gmail.com', '7066477535', 2021002791, '15/12/2002', 'jalna', 'Male', 'BCS'),
(4, 'yogiraj', 'yogi@gmail.com', '7822835324', 2021002817, '15-06-2002', 'jalna', 'Male', 'BCS');

-- --------------------------------------------------------

--
-- Table structure for table `hodlogin`
--

CREATE TABLE `hodlogin` (
  `Id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hodlogin`
--

INSERT INTO `hodlogin` (`Id`, `username`, `password`) VALUES
(1, 'hod', 'dca@hod');

-- --------------------------------------------------------

--
-- Table structure for table `principallogin`
--

CREATE TABLE `principallogin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `principallogin`
--

INSERT INTO `principallogin` (`id`, `username`, `password`) VALUES
(1, 'principal', 'dca@principal');

-- --------------------------------------------------------

--
-- Table structure for table `studapplied`
--

CREATE TABLE `studapplied` (
  `id` int(11) NOT NULL,
  `studid` int(11) NOT NULL,
  `campusid` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studapplied`
--

INSERT INTO `studapplied` (`id`, `studid`, `campusid`, `status`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `studlogin`
--

CREATE TABLE `studlogin` (
  `Id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studlogin`
--

INSERT INTO `studlogin` (`Id`, `username`, `password`) VALUES
(1, 'abc', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `tpologin`
--

CREATE TABLE `tpologin` (
  `Id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tpologin`
--

INSERT INTO `tpologin` (`Id`, `username`, `password`) VALUES
(2, 'tpo', 'dca@tpo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adddrives`
--
ALTER TABLE `adddrives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addstudent`
--
ALTER TABLE `addstudent`
  ADD PRIMARY KEY (`prn`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `hodlogin`
--
ALTER TABLE `hodlogin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `principallogin`
--
ALTER TABLE `principallogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studapplied`
--
ALTER TABLE `studapplied`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studlogin`
--
ALTER TABLE `studlogin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tpologin`
--
ALTER TABLE `tpologin`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adddrives`
--
ALTER TABLE `adddrives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `addstudent`
--
ALTER TABLE `addstudent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `hodlogin`
--
ALTER TABLE `hodlogin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `principallogin`
--
ALTER TABLE `principallogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `studapplied`
--
ALTER TABLE `studapplied`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `studlogin`
--
ALTER TABLE `studlogin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tpologin`
--
ALTER TABLE `tpologin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
