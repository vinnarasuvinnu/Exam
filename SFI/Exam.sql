-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 29, 2019 at 12:05 PM
-- Server version: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.13-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `aid` int(11) NOT NULL,
  `selectedanswer` text NOT NULL,
  `uid` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `allans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `catogery`
--

CREATE TABLE `catogery` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Paper`
--

CREATE TABLE `Paper` (
  `qp_id` int(11) NOT NULL,
  `q_name` varchar(255) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Passcode`
--

CREATE TABLE `Passcode` (
  `pc_id` int(11) NOT NULL,
  `passcode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Questions`
--

CREATE TABLE `Questions` (
  `q_id` int(11) NOT NULL,
  `q_name` varchar(255) NOT NULL,
  `opt1` varchar(255) NOT NULL,
  `opt2` varchar(255) NOT NULL,
  `opt3` varchar(255) NOT NULL,
  `opt4` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL,
  `qp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `u_id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`u_id`, `uname`, `password`) VALUES
(12, 'superadmin@gmail.com', 'b6d767d2f8ed5d21a44b0e5886680cb9');

-- --------------------------------------------------------

--
-- Table structure for table `Test`
--

CREATE TABLE `Test` (
  `tid` int(11) NOT NULL,
  `testname` varchar(255) NOT NULL,
  `dateofT` date NOT NULL,
  `etime` int(11) NOT NULL,
  `qp_id` int(11) NOT NULL,
  `pc_id` int(11) NOT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `uid` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(30) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `board` varchar(100) NOT NULL,
  `yearofpass` varchar(50) NOT NULL,
  `aggri` varchar(30) NOT NULL,
  `pboard` varchar(30) NOT NULL,
  `pyearofpass` varchar(30) NOT NULL,
  `pagri` varchar(30) NOT NULL,
  `universityregno` varchar(100) NOT NULL,
  `typeofdegree` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `stream` varchar(100) NOT NULL,
  `College` varchar(100) NOT NULL,
  `university` varchar(100) NOT NULL,
  `gyearofpass` varchar(100) NOT NULL,
  `Cgpa` varchar(100) NOT NULL,
  `gaggri` varchar(100) NOT NULL,
  `mdgeree` varchar(255) NOT NULL,
  `muniversityregno` varchar(100) NOT NULL,
  `mtypeofdegree` varchar(100) NOT NULL,
  `mdegree` varchar(100) NOT NULL,
  `mstream` varchar(100) NOT NULL,
  `mCollege` varchar(100) NOT NULL,
  `muniversity` varchar(100) NOT NULL,
  `myearofpass` varchar(100) NOT NULL,
  `mCgpa` varchar(100) NOT NULL,
  `maggri` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`uid`, `fname`, `lname`, `dob`, `gender`, `contact`, `email`, `board`, `yearofpass`, `aggri`, `pboard`, `pyearofpass`, `pagri`, `universityregno`, `typeofdegree`, `degree`, `stream`, `College`, `university`, `gyearofpass`, `Cgpa`, `gaggri`, `mdgeree`, `muniversityregno`, `mtypeofdegree`, `mdegree`, `mstream`, `mCollege`, `muniversity`, `myearofpass`, `mCgpa`, `maggri`) VALUES
(1, '', '', '2019-01-09', '', '', '', '', '', '85.55', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'vinnarasu', 'arasu', '2018-12-19', 'male', '9159414383', 'sam@sam.com', '', '', '86.34', 'None', '', '34.44', '', 'None', 'Bachelor of Architecture (BArch)', 'Science', '', '', '', '', '', 'No', '', 'None', 'Master of Accountancy (MAcc, MAc, or MAcy)', 'Science', '', '', '', '', ''),
(3, 'vinnarasu', 'dfsaf', '2018-12-19', 'male', '9159414383', 'vinarasu77@gmail.com', '', '', '99', 'None', '', '99', '', 'None', 'Bachelor of Architecture (BArch)', 'Science', '', '', '', '', '', 'No', '', 'None', 'Master of Accountancy (MAcc, MAc, or MAcy)', 'Science', '', '', '', '', ''),
(4, 'vinnarasu', 'dfsaf', '2018-12-19', 'male', '9159414383', 'vinarasu77@gmail.com', '', '', '99.9', 'None', '', '99.6', '', 'None', 'Bachelor of Architecture (BArch)', 'Science', '', '', '', '', '', 'No', '', 'None', 'Master of Accountancy (MAcc, MAc, or MAcy)', 'Science', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `qid` (`qid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `catogery`
--
ALTER TABLE `catogery`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `Paper`
--
ALTER TABLE `Paper`
  ADD PRIMARY KEY (`qp_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `Passcode`
--
ALTER TABLE `Passcode`
  ADD PRIMARY KEY (`pc_id`);

--
-- Indexes for table `Questions`
--
ALTER TABLE `Questions`
  ADD PRIMARY KEY (`q_id`),
  ADD KEY `qp_id` (`qp_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `Test`
--
ALTER TABLE `Test`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `pc_id` (`pc_id`),
  ADD KEY `qp_id` (`qp_id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `catogery`
--
ALTER TABLE `catogery`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Paper`
--
ALTER TABLE `Paper`
  MODIFY `qp_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Passcode`
--
ALTER TABLE `Passcode`
  MODIFY `pc_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Questions`
--
ALTER TABLE `Questions`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `Test`
--
ALTER TABLE `Test`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `qid` FOREIGN KEY (`qid`) REFERENCES `Paper` (`qp_id`),
  ADD CONSTRAINT `uid` FOREIGN KEY (`uid`) REFERENCES `userinfo` (`uid`);

--
-- Constraints for table `Paper`
--
ALTER TABLE `Paper`
  ADD CONSTRAINT `Paper_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `catogery` (`c_id`);

--
-- Constraints for table `Questions`
--
ALTER TABLE `Questions`
  ADD CONSTRAINT `Questions_ibfk_1` FOREIGN KEY (`qp_id`) REFERENCES `Paper` (`qp_id`);

--
-- Constraints for table `Test`
--
ALTER TABLE `Test`
  ADD CONSTRAINT `Test_ibfk_1` FOREIGN KEY (`pc_id`) REFERENCES `Passcode` (`pc_id`),
  ADD CONSTRAINT `Test_ibfk_2` FOREIGN KEY (`qp_id`) REFERENCES `Paper` (`qp_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
