-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2018 at 11:57 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `house`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `img1` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(30) NOT NULL,
  `img1` varchar(40) NOT NULL,
  `img2` varchar(40) NOT NULL,
  `img3` varchar(40) NOT NULL,
  `img4` varchar(40) NOT NULL,
  `price` varchar(10) NOT NULL,
  `type` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `address` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `img1`, `img2`, `img3`, `img4`, `price`, `type`, `location`, `address`) VALUES
(1, 'home1/living.jpg', 'home1/bedroom.jpg', 'home1/dining.jpg', 'home1/bathroom.jpg', '5000', 'hostel', 'Udaipur', '110 -A Ganesh Nagar , Univercity ROAD,UDAIPUR,313001'),
(2, 'home2/livingroom.jpg', 'home2/bedroom.jpg', 'home2/diningroom.jpg', 'home2/bathroom.jpg', '6000', 'apartment', 'Jaipur', '56- C SHIVAJI NAGAR ,TANK ROAD ,JAIPUR 313001 '),
(3, 'home3/livingroom.jpg', 'home3/bedroom.jpg', 'home3/diningroom.jpg', 'home3/bathroom.jpg', '4000', 'apartment', 'Udaipur', '120 -B BOHRA GANESH CIRCLE, OPP MANGLAM VATIKA ,UDAIPUR'),
(4, 'hostel/livingroom.jpg', 'hostel/lib.jpg', 'hostel/hostel1/diningroom.jpg', 'hostel/bathroom.jpg', '7000', 'hostel', 'udaipur', 'OPP. B.N COLLAGE,100FT ROAD , UDAIPUR 313001');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `type` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `dob`, `gender`, `type`, `address`, `mobile`) VALUES
(1, 'ankur', '12345', 'ankur', '17/02/1995', 'male', 'student', 'udaipur', '9001782670'),
(2, '8769746066', 'rahul', 'arun', '1994-02-17', 'Male', 'student', 'agra', ''),
(3, '9001782670', '11111', 'khushwant', '1994-02-17', 'Male', 'student', 'udaipur', '0'),
(6, 'rahul', '1234', 'rahul', '1993-01-01', 'Male', 'student', 'kota', '0'),
(8, 'neha', '4567', 'neha', '1993-01-01', 'Male', 'student', 'kota', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
