-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2019 at 08:29 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canteen`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `aname` varchar(90) NOT NULL,
  `apass` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `apass`) VALUES
(1, 'ad@g.com', 'ad');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `oname` varchar(90) NOT NULL,
  `oprice` varchar(90) NOT NULL,
  `otype` varchar(90) NOT NULL,
  `oby` varchar(90) NOT NULL,
  `odate` varchar(100) NOT NULL,
  `payment` varchar(90) NOT NULL DEFAULT 'Payment Due',
  `ostatus` varchar(90) NOT NULL DEFAULT 'Order Placed',
  `ocdate` varchar(90) NOT NULL DEFAULT '---'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `pid`, `oname`, `oprice`, `otype`, `oby`, `odate`, `payment`, `ostatus`, `ocdate`) VALUES
(23, 1, 'Bread', '10', 'breakfast', 'rit@g.com', '2019-04-05 00:04:03', 'Payment Done', 'Completed', '2019-04-12 20:35:35'),
(40, 1, 'Bread', '10', 'breakfast', 'rit@g.com', '2019-04-05 01:09:57', 'Payment Due', 'Canclled', '---'),
(41, 2, 'Omlet', '20', 'breakfast', 'rit@g.com', '2019-04-10 14:25:21', 'Payment Due', 'Order Placed', '---'),
(42, 2, 'Omlet', '20', 'breakfast', 'rit@g.com', '2019-04-17 00:04:45', 'Payment Due', 'Order Placed', '---'),
(43, 3, 'Maggie', '30', 'breakfast', 'aditya@gmail.com', '2019-04-17 15:00:52', 'Payment Due', 'Order Placed', '---'),
(44, 2, 'Omlet', '20', 'breakfast', 'ritwik@iiitmanipur.ac.in', '2019-04-18 09:37:31', 'Payment Due', 'Cancelled', '---'),
(45, 2, 'Omlet', '20', 'breakfast', 'singhritwik1998@gmail.com', '2019-04-18 09:39:20', 'Payment Due', 'Order Placed', '---'),
(46, 10, 'Fried Rice', '15', 'lunch', 'singhritwik1998@gmail.com', '2019-04-18 09:45:26', 'Payment Due', 'Order Placed', '---'),
(47, 8, 'Good Day Cookies', '18', 'snacks', 'singhritwik1998@gmail.com', '2019-04-18 09:45:47', 'Payment Due', 'Order Placed', '---'),
(48, 7, 'coke', '14', 'drinks', 'singhritwik1998@gmail.com', '2019-04-18 09:46:05', 'Payment Due', 'Order Placed', '---'),
(49, 14, 'Sandwich', '20', 'snacks', 'singhritwik1998@gmail.com', '2019-04-18 11:38:10', 'Payment Due', 'Order Placed', '---'),
(50, 2, 'Omlet', '20', 'breakfast', 'ritwik@iiitmanipur.ac.in', '2019-04-18 13:00:38', 'Payment Due', 'Order Placed', '---'),
(51, 3, 'Maggie', '30', 'breakfast', 'singhritwik1998@gmail.com', '2019-04-21 11:44:48', 'Payment Due', 'Order Placed', '---'),
(52, 11, 'Chicken Fried Rice', '30', 'lunch', 'singhritwik1998@gmail.com', '2019-04-21 11:47:56', 'Payment Due', 'Order Placed', '---'),
(53, 14, 'Sandwich', '20', 'snacks', 'singhritwik1998@gmail.com', '2019-04-21 11:48:17', 'Payment Due', 'Order Placed', '---'),
(54, 13, 'Appie Fizz', '10', 'drinks', 'singhritwik1998@gmail.com', '2019-04-21 11:48:49', 'Payment Due', 'Cancelled', '---'),
(55, 2, 'Omlet', '20', 'breakfast', 'ritwik@iiitmanipur.ac.in', '2019-04-22 20:00:51', 'Payment Due', 'Order Placed', '---');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `pname` varchar(70) NOT NULL,
  `ptype` varchar(80) NOT NULL,
  `price` varchar(70) NOT NULL,
  `avail` varchar(90) NOT NULL DEFAULT 'Available'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pname`, `ptype`, `price`, `avail`) VALUES
(1, 'Bread', 'breakfast', '10', 'NOT AVAILABLE'),
(2, 'Omlet', 'breakfast', '20', 'Available'),
(3, 'Maggie', 'breakfast', '30', 'Available'),
(7, 'coke', 'drinks', '14', 'Available'),
(8, 'Good Day Cookies', 'snacks', '18', 'Available'),
(10, 'Fried Rice', 'lunch', '15', 'Available'),
(11, 'Chicken Fried Rice', 'lunch', '30', 'Available'),
(13, 'Appie Fizz', 'drinks', '10', 'Available'),
(14, 'Sandwich', 'snacks', '20', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `name` varchar(90) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `username` varchar(90) NOT NULL,
  `password` varchar(90) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `name`, `gender`, `username`, `password`, `address`, `contact`) VALUES
(1, 'rit', 'Male', 'rit@g.com', 'rit', 'ghar', 456),
(2, 'Aditya Kumar', 'Male', 'aditya@gmail.com', 'adityakumar', 'Imphal', 2147483647),
(3, 'Ritwik Kumar', 'Male', 'ritwik@iiitmanipur.ac.in', 'ritwikkumar', 'Imphal', 2147483647),
(4, 'Mohit', 'Male', 'g.mohit@iiitmanipur.ac.in', 'mohitgupta', 'Imphal', 861983793),
(5, 'Ritwik Singh', 'Male', 'singhritwik1998@gmail.com', 'ritwiksingh', 'Patna', 943792322),
(6, 'ewwwae eww', 'Male', 'root@g.com', 'rootasfdsafawe', 'wewqr', 75757);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
