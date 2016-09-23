-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2016 at 01:38 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yogadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `yogatable`
--

CREATE TABLE `yogatable` (
  `Name` varchar(50) NOT NULL,
  `Score` varchar(50) NOT NULL,
  `Date` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yogatable`
--

INSERT INTO `yogatable` (`Name`, `Score`, `Date`) VALUES
('Brian Boru', '3/5', 1461832560),
('dick smith', '3/5', 1461834057),
('eric cantona', '5/5', 1461841134),
('frank dunne', '0/5', 1461843481),
('frank tone', '2/5', 1461843329),
('john heavey', '2/5', 1461841900),
('Mark Walberg', '3/5', 1461843121),
('mick dundee', '5/5', 1461840078),
('mick murphy', '4/5', 1461834208),
('Mickey Mouse', '4/5', 1461832720),
('Owen Cummins', '3/5', 1461840390),
('ryan giggs', '5/5', 1461840775),
('Shane Byrne', '4/5', 1461838831),
('tom jones', '1/5', 1461832822),
('tom lundy', '4/5', 1461832046);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `yogatable`
--
ALTER TABLE `yogatable`
  ADD PRIMARY KEY (`Name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
