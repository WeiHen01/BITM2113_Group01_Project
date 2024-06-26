-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2024 at 08:05 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bitm2113_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminId` int(11) NOT NULL,
  `AdminName` varchar(155) DEFAULT NULL,
  `AdminEmail` varchar(155) NOT NULL,
  `AdminPassword` varchar(155) NOT NULL,
  `AdminContact` varchar(155) DEFAULT NULL,
  `ProfileImage` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminId`, `AdminName`, `AdminEmail`, `AdminPassword`, `AdminContact`, `ProfileImage`) VALUES
(1, '', 'weihen@gmail.com', '202cb962ac59075b964b07152d234b70', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `ComplainId` int(11) NOT NULL,
  `Title` varchar(155) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `DateTime` datetime NOT NULL,
  `City` varchar(155) NOT NULL,
  `State` varchar(155) NOT NULL,
  `Country` varchar(155) NOT NULL,
  `Status` varchar(155) NOT NULL,
  `UserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`ComplainId`, `Title`, `Description`, `DateTime`, `City`, `State`, `Country`, `Status`, `UserId`) VALUES
(1, 'Water Pollution in Ayer Keroh', 'There is a factory that pour polluted oil to river.', '2024-05-31 01:56:47', 'Ayer Keroh', 'Melaka', 'Malaysia', 'Incomplete', 1),
(2, 'Report! A new pollution found!', 'I notice the river in Bukit Mertajam is very dirty. ', '2024-05-31 08:03:58', 'Bukit Mertajam', 'Pulau Pinang', 'Malaysia', 'Incomplete', 1),
(3, 'Water Pollution in Johor Bahru', 'There is a factory that pour polluted oil to river.', '2024-05-31 08:04:34', 'Johor Bahru', 'Johor', 'Malaysia', 'Done', 1),
(4, 'Pollution found in Batu Pahat', 'I notice the river in Batu Pahat is very dirty. ', '2024-05-31 08:05:00', 'Batu Pahat', 'Johor', 'Malaysia', 'Progressing', 1),
(5, 'Water Pollution in Kulim', 'There is a factory that pour polluted oil to river.', '2024-05-31 08:05:21', 'Kulim', 'Kedah', 'Malaysia', 'Done', 1),
(10, 'New pollution detected', ' Today, I feel mad as I notice the river near Kuala Terengganu is severely polluted.', '2024-05-31 09:54:46', 'Kuala Terengganu', 'Terengganu', 'Malaysia', 'Progressing', 1),
(11, 'New pollution detected', ' Today, I feel mad as I notice the river near Kuala Terengganu is severely polluted.', '2024-05-31 09:55:35', 'Kuala Terengganu', 'Terengganu', 'Malaysia', 'Done', 1),
(12, 'New pollution detected', ' Today, I feel mad as I notice the river near Kuala Terengganu is severely polluted.', '2024-05-31 09:56:11', 'Kuala Terengganu', 'Terengganu', 'Malaysia', 'Incomplete', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `EventId` int(11) NOT NULL,
  `Name` varchar(155) NOT NULL,
  `Description` varchar(155) NOT NULL,
  `DateTime` datetime NOT NULL,
  `Location` varchar(155) NOT NULL,
  `Category` varchar(155) NOT NULL,
  `OrgId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `OrgId` int(11) NOT NULL,
  `OrgName` varchar(155) DEFAULT NULL,
  `OrgEmail` varchar(155) NOT NULL,
  `OrgType` varchar(20) DEFAULT NULL,
  `OrgPassword` varchar(155) NOT NULL,
  `OrgContact` varchar(155) DEFAULT NULL,
  `OrgStatus` varchar(155) DEFAULT NULL,
  `OrgImage` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`OrgId`, `OrgName`, `OrgEmail`, `OrgType`, `OrgPassword`, `OrgContact`, `OrgStatus`, `OrgImage`) VALUES
(1, '', 'weihen@gmail.com', '', '202cb962ac59075b964b07152d234b70', '0', 'Registered', '');

-- --------------------------------------------------------

--
-- Table structure for table `participation`
--

CREATE TABLE `participation` (
  `EventId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `ParticipationDateTime` datetime NOT NULL,
  `ParticipationStatus` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserId` int(11) NOT NULL,
  `Username` varchar(155) DEFAULT NULL,
  `Email` varchar(155) NOT NULL,
  `Password` varchar(155) NOT NULL,
  `Contact` varchar(155) DEFAULT NULL,
  `ProfileImage` blob DEFAULT NULL,
  `Status` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserId`, `Username`, `Email`, `Password`, `Contact`, `ProfileImage`, `Status`) VALUES
(1, '', 'rolandng0001@gmail.com', '202cb962ac59075b964b07152d234b70', '', '', 'Registered'),
(2, '', 'weihen@gmail.com', '202cb962ac59075b964b07152d234b70', '', '', 'Registered');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminId`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`ComplainId`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`EventId`),
  ADD KEY `OrgId` (`OrgId`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`OrgId`);

--
-- Indexes for table `participation`
--
ALTER TABLE `participation`
  ADD PRIMARY KEY (`EventId`,`UserId`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `ComplainId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `EventId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `OrgId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `participation`
--
ALTER TABLE `participation`
  ADD CONSTRAINT `participation_ibfk_1` FOREIGN KEY (`EventId`) REFERENCES `event` (`EventId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
