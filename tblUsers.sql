-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 06, 2019 at 01:00 PM
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
-- Table structure for table `tblUsers`
--

CREATE TABLE `tblUsers` (
  `userid` int(3) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblUsers`
--

INSERT INTO `tblUsers` (`userid`, `username`, `password`) VALUES
(1, 'abc', 'efe'),
(2, '', ''),
(3, 'wefwef', 'wefwe'),
(4, '', ''),
(5, 'abc', 'efe'),
(6, '', '$2y$10$LKU5MGoERIy4MU1n3GRihu45Ke6gRLRrdTaUiUvkOyFEBNmYL4q4S'),
(7, '', '$2y$10$2UK8SiM.lVB/82lB1xHb4eHI19GuDbUhGw4UtGaKpaneji4IvqssS'),
(8, 'havzam', '$2y$10$z.AoCHUMr4vs6IJ1YLafMOb38l3IMs2pNbHq5JJMEQ5suHmE.ajqy'),
(9, 'test', '$2y$10$2LI4fLkegHhYVpEEfnj76.BNrVSjRyJ6FpCruw1rsVP.OmKUKNxgC'),
(10, 'hebele', '$2y$10$KRcefpF1jChgF/zKcgu3muQ96Ig2eBs0WYwfv9e1zTeQuYIepRYh.'),
(11, 'pinto', '$2y$10$OjFscwdnAhZxyY4yIGUxAOk.cBN57FAgMNXyIes59fwa.2RBX.ux6'),
(12, 'hebele', '$2y$10$FSwJSr2cAh4uAAYIQeHul.AtesRZtsGSaERCimaMuNpPZz9hTZNNy'),
(13, 'efe', '$2y$10$3otRJQnExoDccdh0FRGFMOjk/C/c1YZNgEAKaf7XPSg4M4zUbWaoe'),
(14, 'efe', '$2y$10$fMsnGQdAGWrO2iN4396tf.KKo6Jzaw9x0JtacbwOBXWLEa5TiKdDO'),
(15, 'test', '$2y$10$YsjlL3RnNqrrizHcEcw6w.7i4Sg3kaiVd5xFJKfiamManXCdofJWG'),
(16, 'gotefe', '$2y$10$w0uRoQGXi6IT4ZtjGUTKpORPQ6o55QK9Vco1KAJQZNR6Gk9P4vD0S'),
(17, 'Kunjan', '$2y$10$GUc3KLTuXQkiFuC7izSbs.1G/YaPVUuM8eXSohyf4k/OMSfspHzK2'),
(18, 'efe', '$2y$10$USAw2uSfdulRxEzTIuYy3.oexBAwSj5myKOfkNaY.Nay2oSTq3wTC'),
(19, 'janhvi', '$2y$10$9UuTDgR2Vq59nrXdTfm9B.wAnV8W116EjgY.LocIZarelzKR7LAy6'),
(20, 'tester', '$2y$10$iBNx/ZZFhuR2R4bYULbA6.RNGhjl5LYiFNqIYLh3xSTTu1957yRd.'),
(21, 'tester', '$2y$10$XPWVHGElZihqX3kPJCGPpePSPyFVjB/mWUt4G2QCeaMTNRfFMB1wu'),
(22, 'abbb', '$2y$10$62yMk3oY/9jpRobq0WC79evHmzypjLcw7ED.yxg03hP1j1qJA2O9C'),
(23, 'havza', '$2y$10$2RxmaHQ6A2XG7Y9VS7kqKOXtavzvvh6CH62gkA3DV4m8zHac6yfJm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblUsers`
--
ALTER TABLE `tblUsers`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblUsers`
--
ALTER TABLE `tblUsers`
  MODIFY `userid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
