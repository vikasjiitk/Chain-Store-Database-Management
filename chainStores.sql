-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 10, 2016 at 07:26 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chainStores`
--

-- --------------------------------------------------------

--
-- Table structure for table `Item`
--

CREATE TABLE `Item` (
  `itemId` int(11) NOT NULL,
  `storeId` int(11) NOT NULL,
  `modelId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Model`
--

CREATE TABLE `Model` (
  `modelId` int(11) NOT NULL,
  `cp` int(11) NOT NULL,
  `mrp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Owners`
--

CREATE TABLE `Owners` (
  `ownderId` int(11) NOT NULL,
  `ownerName` varchar(50) NOT NULL,
  `storeId` int(11) NOT NULL,
  `ownerUsername` varchar(15) NOT NULL,
  `ownerPass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Owners`
--

INSERT INTO `Owners` (`ownderId`, `ownerName`, `storeId`, `ownerUsername`, `ownerPass`) VALUES
(1, 'krishna', 210, 'chkrish', 'chkrish');

-- --------------------------------------------------------

--
-- Table structure for table `Rcpts`
--

CREATE TABLE `Rcpts` (
  `recId` int(11) NOT NULL,
  `recUser` int(11) NOT NULL,
  `recPass` int(11) NOT NULL,
  `recName` int(11) NOT NULL,
  `storeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Sales`
--

CREATE TABLE `Sales` (
  `date` date NOT NULL,
  `itemId` int(11) NOT NULL,
  `storeId` int(11) NOT NULL,
  `sp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Stores`
--

CREATE TABLE `Stores` (
  `storeId` int(11) NOT NULL,
  `location` varchar(50) NOT NULL,
  `contactNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Item`
--
ALTER TABLE `Item`
  ADD PRIMARY KEY (`itemId`);

--
-- Indexes for table `Model`
--
ALTER TABLE `Model`
  ADD PRIMARY KEY (`modelId`);

--
-- Indexes for table `Owners`
--
ALTER TABLE `Owners`
  ADD PRIMARY KEY (`ownderId`),
  ADD UNIQUE KEY `ownerUsername` (`ownerUsername`);

--
-- Indexes for table `Rcpts`
--
ALTER TABLE `Rcpts`
  ADD PRIMARY KEY (`recId`),
  ADD UNIQUE KEY `RecUser` (`recUser`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
