-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2021 at 12:02 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flightreservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `allbookings`
--

CREATE TABLE `allbookings` (
  `sno.` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `FlightId` int(11) NOT NULL,
  `PassengerName` varchar(255) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allbookings`
--

INSERT INTO `allbookings` (`sno.`, `UserId`, `FlightId`, `PassengerName`, `Age`, `Gender`, `Phone`) VALUES
(1, 1, 1, 'abc', 30, 'transgender', 1234567890),
(2, 1, 3, 'kfc', 90, 'male', 67890453);

-- --------------------------------------------------------

--
-- Table structure for table `flightavailability`
--

CREATE TABLE `flightavailability` (
  `Id` int(11) NOT NULL,
  `PickUp` varchar(255) NOT NULL,
  `DropOff` varchar(255) NOT NULL,
  `FlightName` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `DepartureTime` time NOT NULL,
  `ArrivalTime` time NOT NULL,
  `SeatsAvailable` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flightavailability`
--

INSERT INTO `flightavailability` (`Id`, `PickUp`, `DropOff`, `FlightName`, `Date`, `DepartureTime`, `ArrivalTime`, `SeatsAvailable`) VALUES
(1, 'Delhi', 'Bangalore', 'AirIndia', '2022-01-05', '06:05:00', '08:40:00', 26),
(2, 'Delhi', 'Bangalore', 'IndiaGo', '2022-01-05', '09:05:00', '11:40:00', 27),
(3, 'Delhi', 'Bangalore', 'SpiceJet', '2022-01-05', '06:05:00', '08:40:00', 25);

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `Id` int(11) NOT NULL,
  `Firstname` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Mobile` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`Id`, `Firstname`, `LastName`, `Username`, `Password`, `Email`, `Mobile`) VALUES
(1, 'Mrinal', 'Khera', 'MrinalKhera', '123', 'm@gmail.com', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allbookings`
--
ALTER TABLE `allbookings`
  ADD PRIMARY KEY (`sno.`);

--
-- Indexes for table `flightavailability`
--
ALTER TABLE `flightavailability`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allbookings`
--
ALTER TABLE `allbookings`
  MODIFY `sno.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `flightavailability`
--
ALTER TABLE `flightavailability`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
