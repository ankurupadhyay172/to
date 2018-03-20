-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2018 at 09:48 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marker`
--

-- --------------------------------------------------------

--
-- Table structure for table `markers`
--

CREATE TABLE `markers` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(60) NOT NULL,
  `Contact` varchar(30) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `type` varchar(30) NOT NULL,
  `link` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `Contact`, `lat`, `lng`, `type`, `link`) VALUES
(1, 'Nayan Singh', '32,Bohra ganesh chouraha,Udaipur,India', '8009856897', 24.571270, 73.691544, 'room', 'google.com'),
(2, 'ankur', '78, Rao ji ka hata,Udaipur,India', '7568981263', 24.578600, 73.686401, 'room', 'upadhyay'),
(3, 'Hunter Gatherer', '32, Shivaji nagar,Jaipur,India', '9768746066', 26.901875, 75.738869, 'hostel', 'the'),
(4, 'The Potting Shed', '8A, Vaishali Nagar,Jaipur,India', '8250987645', 26.851801, 75.786201, 'room', 'great'),
(5, 'Three Blue Ducks', '56B,Subhash Nagar,Udiyapole,Udaipur,India', '8769456298', 24.571276, 73.691559, 'office', 'la'),
(6, 'Single Origin Roasters', '92A,Opp. Durgapura Station,Jaipur,India', '9874562345', 26.922070, 75.778885, 'hostel', ''),
(7, 'Red Lantern', 'Malda street,Jaipur,India', '9845627845', 26.912399, 75.787300, 'office', 'kur'),
(8, 'bohra ganesh', 'Bohra Ganesh Rd, Ganapati Nagar, Udaipur, Rajasthan 313001', '9845621945', 24.589771, 73.725616, 'office', 'google.com'),
(9, 'Shubham', 'Rao Ji Ka Bagh, Bhagwati Nagar, Gopal Pura Mode, Jaipur, Raj', '9001782670', 26.885023, 75.787132, 'room', ''),
(10, 'rahul', 'Bohra Ganesh Road, Jai Shree Colony, Ganapati Nagar, Udaipur', '9874560987', 24.588657, 73.724335, 'room', ''),
(11, 'bhushan jadhav', 'Soma Talav, Pratap Nagar, Soma Talav, Vadodara, Gujarat', '8735933770', 22.279116, 73.230682, 'room', ''),
(12, 'shyam', 'Shyam Nagar Metro Station, Sanganer Road, Ramnagar Extension', '8735933770', 26.896618, 75.770706, 'office', ''),
(16, 'Shubham', 'Shubham Vihar, Mahesh Nagar, Gopal Pura Mode, Jaipur, Rajast', '7875643789', 26.875975, 75.783844, 'room', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `markers`
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `markers`
--
ALTER TABLE `markers`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
