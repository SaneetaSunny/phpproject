-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2020 at 01:46 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendencedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

CREATE TABLE `assessment` (
  `Id` int(11) NOT NULL,
  `Assessment_No` int(11) NOT NULL,
  `Sid` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Batch` varchar(20) NOT NULL,
  `Sub_1` int(11) NOT NULL,
  `Sub_2` int(11) NOT NULL,
  `Sub_3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assessment`
--

INSERT INTO `assessment` (`Id`, `Assessment_No`, `Sid`, `Name`, `Batch`, `Sub_1`, `Sub_2`, `Sub_3`) VALUES
(1, 1, 1, 'Saneeta', 'JSD2', 8, 5, 9);

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `Id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Sid` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Batch` varchar(20) NOT NULL,
  `Status_h1` varchar(20) NOT NULL,
  `Status_h2` varchar(20) NOT NULL,
  `Status_h3` varchar(20) NOT NULL,
  `Status_h4` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`Id`, `Date`, `Sid`, `Name`, `Batch`, `Status_h1`, `Status_h2`, `Status_h3`, `Status_h4`) VALUES
(1, '2020-01-17', 1, 'Saneeta', 'JSD2', 'present', 'present', 'present', 'present'),
(2, '2020-01-17', 2, 'Jeseena', 'JSD2', 'present', 'present', 'present', 'present');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `Fid` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `Dob` date NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Qaulification` varchar(20) NOT NULL,
  `Mobileno` bigint(20) NOT NULL,
  `BatchInCharge` varchar(20) DEFAULT NULL,
  `Email` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`Fid`, `Name`, `Address`, `Dob`, `Gender`, `Qaulification`, `Mobileno`, `BatchInCharge`, `Email`, `Username`, `Password`) VALUES
(1, 'Amitha', 'Kollam', '1994-09-02', 'Female', 'BCA', 9876543244, 'JSD2', 'amitha@gmail.com', 'amitha', 'amitha'),
(5, 'Vijith', 'Kozhikode', '1994-05-10', 'Male', 'BCA', 9876543210, 'UI', 'vijith@gmail.com', 'vijith', 'vijith');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `Id` int(11) NOT NULL,
  `Sid` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Batch` varchar(30) NOT NULL,
  `Fromdate` date NOT NULL,
  `Todate` date NOT NULL,
  `Reason` varchar(30) NOT NULL,
  `Status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`Id`, `Sid`, `Name`, `Batch`, `Fromdate`, `Todate`, `Reason`, `Status`) VALUES
(1, 1, 'Saneeta', 'JSD2', '2020-01-18', '2020-01-20', 'exam', 'Rejected'),
(2, 1, 'Saneeta', 'JSD2', '2020-01-08', '2020-01-23', 'fever', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Sid` int(11) NOT NULL,
  `Admno` int(11) NOT NULL,
  `Admdate` date NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Dob` date NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Guardian` varchar(20) NOT NULL,
  `Batch` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Sid`, `Admno`, `Admdate`, `Name`, `Address`, `Dob`, `Gender`, `Mobile`, `Guardian`, `Batch`, `Email`, `Username`, `Password`) VALUES
(1, 54678, '2019-09-27', 'Saneeta', 'Kollam', '1996-03-12', 'Female', 7034677960, 'Mother', 'JSD2', 'saneeta@gmail.com', 'saneeta', 'saneeta'),
(2, 9876, '2019-08-16', 'Jeseena', 'Kollam', '1995-03-28', 'Female', 1234567890, 'Husband', 'JSD2', 'jeseena@gmail.com', 'jeseena', 'jeseena');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assessment`
--
ALTER TABLE `assessment`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`Fid`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assessment`
--
ALTER TABLE `assessment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `Fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
