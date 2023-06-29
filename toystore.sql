-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 05:21 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `addnew`
--

CREATE TABLE `addnew` (
  `id` int(11) NOT NULL,
  `toypic` varchar(200) NOT NULL,
  `toyname` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addnew`
--

INSERT INTO `addnew` (`id`, `toypic`, `toyname`, `price`, `quantity`) VALUES
(1, 'aeroplane.jpg', 'Aeroplane Toy', 300, 8),
(2, 'balloon.jpg', 'Balloon', 8, 90),
(3, 'balls.jpg', 'Ball', 59, 30),
(4, 'JCB toy.jpg', 'JCB Toy', 499, 10),
(5, 'Teddy.jpg', 'Teddy', 199, 18),
(6, 'toy car.jpg', 'Toy Car', 100, 25),
(7, 'Toy Train.gif', 'Toy Train', 230, 15),
(8, 'Toy truck.jpg', 'Toy Truck', 180, 15),
(9, 'Building Blocks.jpg', 'Building Blocks', 359, 18);

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `id` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `tprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`id`, `uname`, `phone`, `quantity`, `tprice`) VALUES
(1, 'Muthu', '6379443875', 8, 898);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(25) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(10) NOT NULL,
  `enquiry` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `phone`, `enquiry`) VALUES
('sample', 'example@gmail.com', 2147483647, 'No enquiry');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(25) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`) VALUES
('admin@gmail.com', 'suresh');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `toyname` varchar(25) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `tprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addnew`
--
ALTER TABLE `addnew`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addnew`
--
ALTER TABLE `addnew`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
