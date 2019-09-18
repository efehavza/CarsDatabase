-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 06, 2019 at 12:59 PM
-- Server version: 10.3.17-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `havzam_mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblCars`
--

CREATE TABLE `tblCars` (
  `Product ID` int(3) NOT NULL,
  `Brand` varchar(50) NOT NULL,
  `Year` int(4) NOT NULL,
  `Price` int(9) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblCars`
--

INSERT INTO `tblCars` (`Product ID`, `Brand`, `Year`, `Price`) VALUES
(1, 'Audiy', 1990, 1500),
(2, 'Volkswagen', 2010, 15000),
(3, 'Ford', 2000, 2500),
(4, 'Toyota', 2009, 4500),
(5, 'Honda', 1999, 3500),
(6, 'test', 1982, 20000),
(7, 'Toyota', 1993, 4500),
(8, 'Ford', 1980, 1500),
(9, 'Chevy', 1970, 2500),
(10, 'Mazda', 1999, 4500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblCars`
--
ALTER TABLE `tblCars`
  ADD PRIMARY KEY (`Product ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblCars`
--
ALTER TABLE `tblCars`
  MODIFY `Product ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
