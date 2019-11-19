-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2019 at 06:37 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ashirali`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `username` varchar(35) NOT NULL,
  `proj` varchar(10) NOT NULL,
  `mic` varchar(10) NOT NULL,
  `echo` varchar(10) NOT NULL,
  `message` varchar(5000) NOT NULL,
  `fdate` varchar(100) NOT NULL,
  `todate` varchar(100) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `roomid` varchar(15) NOT NULL,
  `bookingid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`username`, `proj`, `mic`, `echo`, `message`, `fdate`, `todate`, `semester`, `roomid`, `bookingid`) VALUES
('ashirali', 'yes', 'yes', 'yes', 'sldkjf', '2019-09-19', '1982', 'yes', '39', 1),
('ashirali', 'yes', 'yes', 'yes', 'sldkjf', '2019-09-19', '1982', 'yes', '15', 2),
('ashirali', 'yes', 'yes', 'yes', 'sldkjf', '2019-09-19', '1982', 'yes', 'room-26', 3),
('usama', 'yes', 'yes', 'yes', 'ashir ali', '2019-09-07', '2002', 'yes', 'Room-17', 4),
('usama', 'yes', 'yes', 'yes', 'dflgkj', '2019-09-07', '2019-09-07', 'yes', 'Room-97', 5),
('usama', 'yes', 'yes', 'yes', 'sldkjf', '2019-09-09', '2019-09-12', 'yes', 'Room-47', 6),
('tabs', 'yes', '', '', 'asdadawd', '2019-09-11', '2019-09-19', '', 'Room-72', 7);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `username` int(11) NOT NULL,
  `projector` int(11) NOT NULL,
  `mic` int(11) NOT NULL,
  `echo` int(11) NOT NULL,
  `message` int(11) NOT NULL,
  `fdate` int(11) NOT NULL,
  `todate` int(11) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `roomid` varchar(100) NOT NULL,
  `username` varchar(150) NOT NULL,
  `feedback` varchar(5000) NOT NULL,
  `feedbackid` int(11) NOT NULL,
  `reply` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`roomid`, `username`, `feedback`, `feedbackid`, `reply`) VALUES
('ROom20', ' Ashir_Ali', 'Greater behold whales saw is divide under image you him saying have sea rule multiply earth gathered gathering third he.', 6, 'hvguvuk'),
('Room 55', ' Saqib_ Ali', 'Gathering fish morning winged be replenish whales deep yielding ', 7, 'askldfjalsdk'),
('Room 65', ' Saqib_ Ali', 'Gathering fish morning winged be replenish whales deep yielding ', 8, ''),
('Room 75', ' Saqib_ Ali', 'Gathering fish morning winged be replenish whales deep yielding ', 9, ''),
('Room 95', ' Saqib_ Ali', 'Gathering fish morning winged be replenish whales deep yielding ', 10, '10'),
('Room 25', ' Saqib_ Ali', 'Gathering fish morning winged be replenish whales deep yielding ', 11, ''),
('', '', '', 12, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(14) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `org` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'unverified'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `fname`, `lname`, `org`, `email`, `mobile`, `password`, `status`) VALUES
(1, 'ashirali', 'ashir', 'ali', 'askdfj', 'ashirali@gmail.com', '3006568113', 'bdf3ec5a8eebbecdc0fbf13bdf7f67d1', 'verified'),
(2, 'ashirali', 'ashir', 'ali', 'aklsdfj', 'ashirali@gmail.com', '23423423', '202cb962ac59075b964b07152d234b70', 'unverified'),
(3, 'usama', 'asdk', 'lkjas', 'lkafjsd', 'alskdjf@gmail.com', '2323423', '202cb962ac59075b964b07152d234b70', 'unverified'),
(4, 'tabs', 'qwdqd', 'dqwdqd', 'dqwdqwd', 'lislife946@gmail.com', '2323423', 'bcbe3365e6ac95ea2c0343a2395834dd', 'unverified'),
(5, 'ooo', 'dededfew', 'efwefwf', 'ewfwefwf', 'admin@admin.com', '56456456', '202cb962ac59075b964b07152d234b70', 'unverified'),
(6, 'last', 'fewwef', 'wfefwe', 'fwefwf', 'admin@admin.com', '234424', '202cb962ac59075b964b07152d234b70', 'unverified'),
(7, 'ashirali44', 'ashir', 'ali', 'askdfj', 'ashirali4444@gmail.com', '2342342', '202cb962ac59075b964b07152d234b70', 'unverified'),
(8, 'ASHIRALI444', 'lkdfj', 'lkasjdf', 'alsdkfj', 'alskdfjlk@gmail.com', '2342342', '202cb962ac59075b964b07152d234b70', 'unverified'),
(9, 'uuuuuuuuuuuu', 'ashir', 'fgbdf', 'aklsdfj', 'usama9823@gmail.com', '2323423', '202cb962ac59075b964b07152d234b70', 'unverified'),
(10, 'ewhuiw', 'ashir', 'ali', 'lkafjsd', 'admin@admin.com', '3006568113', '202cb962ac59075b964b07152d234b70', 'unverified'),
(11, 'last', 'ashir', 'ali', 'lkafjsd', 'admin@admin.com', '3006568113', '202cb962ac59075b964b07152d234b70', 'unverified'),
(12, 'last', 'ashir', 'ali', 'lkafjsd', 'admin@admin.com', '3006568113', '202cb962ac59075b964b07152d234b70', 'unverified'),
(13, 'wjknfw', 'wcew', 'cew', 'dwwddwe', 'alskdjf@gmail.com', '2323423', '202cb962ac59075b964b07152d234b70', 'unverified'),
(14, 'admin', 'lllllllll', 'lllllllll', 'lkafjsd', 'usama9823@gmail.com', '56456456', '202cb962ac59075b964b07152d234b70', 'unverified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedbackid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedbackid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
