-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2025 at 08:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `firdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `complainttable`
--

CREATE TABLE `complainttable` (
  `id` int(11) NOT NULL,
  `firno` varchar(15) NOT NULL,
  `areaname` varchar(80) NOT NULL,
  `namee` varchar(50) NOT NULL,
  `gen` varchar(20) NOT NULL,
  `fname` varchar(80) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `adress` varchar(25) NOT NULL,
  `mob` varchar(15) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `date1` varchar(20) NOT NULL,
  `date2` varchar(20) NOT NULL,
  `descr` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `complainttable`
--

INSERT INTO `complainttable` (`id`, `firno`, `areaname`, `namee`, `gen`, `fname`, `dob`, `adress`, `mob`, `mail`, `subject`, `date1`, `date2`, `descr`) VALUES
(1, '10001', 'ARIYALUR', 'Mani', 'Male', 'manikkam', '1987-12-12', 'dindigul', '9898989898', 'mani@gmail.om', 'PERSON MISSING', '2025-09-13', 'DIndigul Bus stand', 'blue color shirt age : 10\r\ngreen color bant \r\nmormal color '),
(2, '10002', 'DINDIGUL', 'siva', 'Male', 'Muthumanikkam', '2000-09-13', 'dindigul', '8696562345', 'mani@gmail.om', 'VEHICLE MISSING / THEFT', '2025-09-13', 'mvm nagar', 'scooty missing tn57-6789'),
(3, '10003', 'DINDIGUL', 'Kanmani', 'Male', 'Subbaiah', '1998-11-13', 'Mottanampatti,Dindigul', '9994865221', 'kanmanidgl@gmail.com', 'VEHICLE MISSING / THEFT', '2025-09-13', 'Near Dindigul Bus st', 'Near Bus stand Photo Shop my two wheeler is missing'),
(4, '10004', 'KARUR', 'Kanaguraj', 'Male', 'Deva', '1986-12-11', 'Main Street, Karur', '9865986598', 'kanagu@gmail.com', 'PERSON MISSING', '2025-09-13', 'Karur Bus Stand', 'Red Shirt - White Dhoti '),
(5, '10005', 'MADURAI', 'Devan', 'Male', 'Francis', '1985-02-12', 'Karimedu', '7785964561', 'devan@gmail.com', 'CELL PHONE MISSING / THEFT', '2025-09-13', ' Arapalayam Bus Stan', 'Samsung New Model Phone Missing'),
(6, '10006', 'DINDIGUL', 'sai', 'Male', 'dharani', '1990-09-11', 'dindigul', '9854715632', 'sai123@gmail.com', 'VEHICLE MISSING / THEFT', '2025-09-13', 'dindigul', 'i was miss the vehicle in bus stand');

-- --------------------------------------------------------

--
-- Table structure for table `criminaltable`
--

CREATE TABLE `criminaltable` (
  `id1` int(11) NOT NULL,
  `ID` varchar(10) DEFAULT NULL,
  `AreaName` varchar(50) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `IdentificationMark` varchar(100) DEFAULT NULL,
  `Photo` varchar(150) DEFAULT NULL,
  `acc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `criminaltable`
--

INSERT INTO `criminaltable` (`id1`, `ID`, `AreaName`, `Name`, `Gender`, `IdentificationMark`, `Photo`, `acc`) VALUES
(1, '1003', 'DINDIGUL', 'kannan', 'Male', 'left hand a mole', 'uploads/1.gif', 'vehicle theft'),
(2, '1004', 'DINDIGUL', 'raffic', 'Male', 'white color shirt', 'uploads/2.jpg', 'murder'),
(3, '1005', 'DINDIGUL', 'lawrance', 'Male', 'one hand ', 'uploads/3.gif', 'chain theft'),
(4, '1006', 'DINDIGUL', 'kabali', 'Male', 'brown hair', 'uploads/4.jpg', 'kidnap'),
(5, '1007', 'DINDIGUL', 'karthi', 'Male', 'leg a mole', 'uploads/5.jpg', 'vehicle theft'),
(6, '1008', 'DINDIGUL', 'gandhi', 'Male', 'one eye ', 'uploads/6.gif', 'chain theft'),
(7, '1009', 'DINDIGUL', 'dinesh', 'Male', 'beard', 'uploads/7.jpg', 'murder'),
(8, '1010', 'DINDIGUL', 'siva', 'Male', 'curling hair', 'uploads/9.jpg', 'murder'),
(9, '1011', 'MADURAI', 'Kanagu', 'Male', 'Mole On Fore Head', 'uploads/011.PNG', 'Theft'),
(10, '1012', 'CHENNAI CITY', 'Mathi', 'Male', 'Scarp on Left Leg', 'uploads/021.PNG', 'Murder');

-- --------------------------------------------------------

--
-- Table structure for table `feedtable`
--

CREATE TABLE `feedtable` (
  `feedid` int(11) NOT NULL,
  `areaname` varchar(80) NOT NULL,
  `namee` varchar(50) NOT NULL,
  `gen` varchar(20) NOT NULL,
  `fname` varchar(80) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `mob` varchar(15) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `descr` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedtable`
--

INSERT INTO `feedtable` (`feedid`, `areaname`, `namee`, `gen`, `fname`, `dob`, `mob`, `mail`, `descr`) VALUES
(1, 'DINDIGUL', 'senthil', 'Male', 'ramkumar', '1985-09-14', '9876543210', 'senthilsai2k9@gmail.com', 'Invigilation is good'),
(2, 'DINDIGUL', 'sai', 'Male', 'dharani', '2025-09-11', '9854715632', 'sai123@gmail.com', 'good investigation'),
(3, 'DINDIGUL', 'mani', 'Male', 'kandhasami', '1990-05-16', '7458756982', 'mani123@gmail.com', 'good'),
(4, 'DINDIGUL', 'kavitha', 'Female', 'subramani', '2000-09-05', '7458965872', 'kavitha123@gmail.com', 'very good'),
(5, 'DINDIGUL', 'ramya', 'Female', 'kalaiyarasu', '2000-07-08', '9854757855', 'ramya123@gmail.com', 'investigation is good');

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `add` varchar(100) NOT NULL,
  `mno` double NOT NULL,
  `mail` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`id`, `name`, `age`, `gender`, `add`, `mno`, `mail`, `uname`, `pword`) VALUES
(1, 'Ranjith', 24, 'Male', 'Dindigul North', 9854711234, 'senthilsai2k9@gmail.com', 'bb', 'bb'),
(2, 'Kumar', 34, 'Male', 'dindigul', 7374990722, 'kumar123@gmail.com', 'kumar', 'kumar'),
(3, 'gopal', 26, 'Male', 'dindigul', 7414758265, 'gopal123@gmail.com', 'gopal', 'gopal'),
(4, 'ramasamy', 50, 'Male', 'dindigul', 9854757586, 'ramasamy123@gmail.com', 'rama', 'rama'),
(5, 'Pradeep', 25, 'Male', 'dindigul', 7412587451, 'pradeep123@gmail.com', 'pradeep', 'pradeep');

-- --------------------------------------------------------

--
-- Table structure for table `reg1`
--

CREATE TABLE `reg1` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `add` varchar(100) NOT NULL,
  `mno` double NOT NULL,
  `mail` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `reg1`
--

INSERT INTO `reg1` (`id`, `name`, `age`, `gender`, `add`, `mno`, `mail`, `uname`, `pword`) VALUES
(1, 'Prakash', 25, 'Male', 'dindigul', 8974512036, 'kannan@gmail.com', 'kannan', 'kannan'),
(2, 'sangee', 30, 'FeMale', 'dindigul', 8745120369, 'ishwarya@gmail.com', 'sangee', 'sangee'),
(3, 'Abirami', 30, 'Female', 'dindigul', 9874512036, 'ishwarya@gmail.com', 'abirami', 'abirami'),
(4, 'Kavitha', 25, 'Female', 'dindigul', 9562301487, 'kavitha@gmail.com', 'kavitha', 'kavitha'),
(5, 'Ramya', 25, 'Female', 'dgl', 9876543210, 'kannan@gmail.com', 'ss', 'ss'),
(6, 'Prakash', 25, 'Male', 'Vadipatti, Dindigul', 9865422057, 'prakash@gmail.com', 'sis', 'sis'),
(7, 'Ambuja Kamatchi', 23, 'Female', 'Dindigul', 9635582365, 'ambuja@gmail.com', 'ambuja', 'ambuja'),
(8, 'sridevi', 25, 'Female', 'round road,dindigul', 9854712563, 'devi12@gmail.com', 'devi', 'devi'),
(9, 'kathir', 25, 'Male', 'dindigul', 9854712563, 'kathir1@gmail.com', 'kathir', 'kathir'),
(10, 'karthika', 23, 'Female', 'dindigul', 9874563210, 'karthika123@gmail.com', 'karthi', 'karthi'),
(11, 'Ram kumar', 23, 'Male', 'NO 56, Mela masi Street,Madurai', 9874563210, 'kumari@gmail.com', 'ram', 'ram'),
(12, 'Sana', 23, 'Female', 'Dindigul', 9865986598, 'sana@gmail.com', 'sana', 'sana'),
(13, 'ram', 24, 'Male', 'rm colony, Dindigul', 9638527410, 'ss@gmail.com', 'vv', 'vv'),
(14, 'david', 35, 'Male', 'dindigul', 7458296530, 'david123@gmail.com', 'david', 'david'),
(15, 'rr', 24, 'Male', 'rr', 9854715147, 'kanimozhi@gmail.com', 'rr', 'rr'),
(16, 'raja', 24, 'Male', 'DGL', 7789512345, 'ff@gmail.com', 'nn', 'nn'),
(22, 'sai', 34, 'Male', 'dindigul', 9854753652, 'sai123@gmail.com', 'sai', 'sai');

-- --------------------------------------------------------

--
-- Table structure for table `statustable`
--

CREATE TABLE `statustable` (
  `id` int(11) NOT NULL,
  `firno` varchar(10) DEFAULT NULL,
  `date` varchar(10) DEFAULT NULL,
  `status` varchar(40) DEFAULT NULL,
  `inves` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `statustable`
--

INSERT INTO `statustable` (`id`, `firno`, `date`, `status`, `inves`) VALUES
(1, '10001', '2025-09-13', 'Pending', 'Kumar'),
(2, '10002', '2025-09-13', 'Processing', 'gopal'),
(3, '10001', '2025-09-13', 'Processing', 'ramasamy'),
(4, '10001', '2025-09-13', 'Processing', 'Kumar'),
(5, '10004', '2025-09-13', 'Processing', 'Pradeep'),
(6, '10005', '2025-09-13', 'Investigated', 'Kalanithi'),
(7, '10005', '2025-09-13', 'Completed', 'Pradeep Kumar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complainttable`
--
ALTER TABLE `complainttable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `criminaltable`
--
ALTER TABLE `criminaltable`
  ADD PRIMARY KEY (`id1`);

--
-- Indexes for table `feedtable`
--
ALTER TABLE `feedtable`
  ADD PRIMARY KEY (`feedid`);

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg1`
--
ALTER TABLE `reg1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statustable`
--
ALTER TABLE `statustable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complainttable`
--
ALTER TABLE `complainttable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `criminaltable`
--
ALTER TABLE `criminaltable`
  MODIFY `id1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `feedtable`
--
ALTER TABLE `feedtable`
  MODIFY `feedid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `officer`
--
ALTER TABLE `officer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reg1`
--
ALTER TABLE `reg1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `statustable`
--
ALTER TABLE `statustable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
