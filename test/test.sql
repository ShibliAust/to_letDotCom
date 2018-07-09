-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2017 at 05:44 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `commercial_space`
--

CREATE TABLE `commercial_space` (
  `Post_ID` int(11) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `catagory` varchar(20) NOT NULL,
  `Division` varchar(200) NOT NULL,
  `District` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Rent` varchar(200) NOT NULL DEFAULT 'Negotiable',
  `Size` varchar(200) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Category_No` varchar(200) NOT NULL,
  `Contact_No` varchar(200) NOT NULL,
  `curdate` varchar(200) NOT NULL,
  `Status` varchar(200) NOT NULL DEFAULT 'UNVERIFIED'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commercial_space`
--

INSERT INTO `commercial_space` (`Post_ID`, `Title`, `catagory`, `Division`, `District`, `Address`, `Rent`, `Size`, `Description`, `Category_No`, `Contact_No`, `curdate`, `Status`) VALUES
(2, 'a', '', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', '2017-01-27', 'VERIFIED'),
(3, '', '', '', '', '', '', '', '', '', '', '2017-02-10', 'VERIFIED'),
(6, '', 'Office', '', '', '', '', '', '', '', '', '2017-02-10', 'UNVERIFIED');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `C_ID` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Contact` int(11) NOT NULL,
  `Sub` varchar(200) NOT NULL,
  `Message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`C_ID`, `Name`, `Email`, `Contact`, `Sub`, `Message`) VALUES
(4, '1', '1', 1, '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `name` varchar(55) NOT NULL,
  `Email` varchar(55) NOT NULL,
  `Password` varchar(55) NOT NULL,
  `Phone` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`name`, `Email`, `Password`, `Phone`) VALUES
('ali', 'abcde@gmail.com', '123456', 1478458569),
('shibli', 'abc@gmail.com', '1234', 1721898989),
('John', 'Dabc@yahoo.com', '123456', 1723017782),
('Swapnil', 'swapnilaustcse@gmail.com', '1234', 1723017788),
('Swapnil', 'swap@yahoo.com', '123456', 1756989898),
('ali', 'aser@gmail.com', '123589', 1789574861);

-- --------------------------------------------------------

--
-- Table structure for table `residential_house`
--

CREATE TABLE `residential_house` (
  `Post_ID` int(11) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `catagory` varchar(30) NOT NULL,
  `Division` varchar(200) NOT NULL,
  `District` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Rent` varchar(200) NOT NULL DEFAULT 'Negotiable',
  `Size` varchar(200) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Drawing_Room` varchar(200) NOT NULL,
  `Dining_Room` varchar(200) NOT NULL,
  `Car_Parking` varchar(200) NOT NULL,
  `Lift` varchar(200) NOT NULL,
  `Contact_No` varchar(200) NOT NULL,
  `curdate` varchar(200) NOT NULL,
  `Status` varchar(200) NOT NULL DEFAULT 'UNVERIFIED'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `residential_house`
--

INSERT INTO `residential_house` (`Post_ID`, `Title`, `catagory`, `Division`, `District`, `Address`, `Rent`, `Size`, `Description`, `Drawing_Room`, `Dining_Room`, `Car_Parking`, `Lift`, `Contact_No`, `curdate`, `Status`) VALUES
(1, '1', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2017-01-20', 'VERIFIED'),
(6, 'a1', '', 'a1', 'a1', '1a', 'a1', 'a1', 'a1', 'a1', '1a', 'a1', 'a1', 'a1', '2017-01-27', 'VERIFIED'),
(7, 'a', 'Bachelor Mess', 'a', 'sa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', '123968705', '2017-02-10', 'VERIFIED'),
(8, '', 'Bachelor Mess', '', '', '', '', '', '', '', '', '', '', '', '2017-02-10', 'VERIFIED'),
(9, '', 'Bachelor Mess', '', '', '', '', '', '', '', '', '', '', '', '2017-02-10', 'VERIFIED');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commercial_space`
--
ALTER TABLE `commercial_space`
  ADD PRIMARY KEY (`Post_ID`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Phone`);

--
-- Indexes for table `residential_house`
--
ALTER TABLE `residential_house`
  ADD PRIMARY KEY (`Post_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commercial_space`
--
ALTER TABLE `commercial_space`
  MODIFY `Post_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `C_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Phone` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1789574862;
--
-- AUTO_INCREMENT for table `residential_house`
--
ALTER TABLE `residential_house`
  MODIFY `Post_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
