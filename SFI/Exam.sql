-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 21, 2019 at 09:27 AM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.15-0ubuntu0.18.04.1

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

--
-- Dumping data for table `catogery`
--

INSERT INTO `catogery` (`c_id`, `c_name`) VALUES
(1, 'my cat'),
(2, 'exam');

-- --------------------------------------------------------

--
-- Table structure for table `paper`
--

CREATE TABLE `paper` (
  `qp_id` int(11) NOT NULL,
  `q_name` varchar(255) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paper`
--

INSERT INTO `paper` (`qp_id`, `q_name`, `c_id`) VALUES
(2, 'sample test', 2);

-- --------------------------------------------------------

--
-- Table structure for table `passcode`
--

CREATE TABLE `passcode` (
  `pc_id` int(11) NOT NULL,
  `passcode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `q_id` int(11) NOT NULL,
  `q_name` varchar(255) NOT NULL,
  `opt1` varchar(255) NOT NULL,
  `opt2` varchar(255) NOT NULL,
  `opt3` varchar(255) NOT NULL,
  `opt4` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL,
  `qp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`q_id`, `q_name`, `opt1`, `opt2`, `opt3`, `opt4`, `ans`, `qp_id`) VALUES
(1, 'What was day on 24th may 1997?', 'Friday', 'Tuesday', 'Monday', 'Saturday', 'Saturday', 2),
(2, '30 women complete the 2/5th work in 40 days working 6 hours each day. If 10 women leave, in how many days the remaining work will get completed if now they work for 10 hours each day?', '62', '58', '54', '70', '54', 2),
(3, 'A group consists of 3 couples  in which each of the 3 men have one wife each. In how many ways could they arranged in a straight line so that the men and women occupy alternate position ?', '216', '125', '256', '72', '72', 2),
(4, 'In how many ways a group of 4 men and 3 women be made out of a total of 8 men and 5 women? ', '720', '140', '120', '360', '140', 2),
(5, 'In how many ways 5 African and five Indian can be seated along a circular table, so that they occupy alternate position.', '5!5', '4!5!', '5!6!', '4!4!', '4!5!', 2),
(6, 'How many 3 digit number can be formed with the digits 5, 6, 2, 3, 7 and 9 which are divisible by 5 and none of its digit is repeated?', '12', '16', '20', '24', '20', 2),
(7, 'A bag contains 6 white and 4 black balls .2 balls are drawn at random. Find the probability that they are of same colour', '1/2', '7/15', '8/15', '1/9', '7/15', 2),
(8, 'Two dice are tossed. The probability that the total score is a prime number is:', '5/12', '1/6', '1/2', '7/9', '5/12', 2),
(9, 'What is the probability of getting 53 Mondays in a leap year?', '1/7', '3/7', '2/7', '1', '2/7', 2),
(10, 'Find the angle between the hour hand and the minute hand of a clock when the time is 3.25', '47.5 degrees ', '57.5 degrees', '45.5 degrees ', '55.5 degrees', '57.5 degrees', 2),
(11, 'If 8 men can reap 40 hectares in 12 days, then how many hectares can 30 men reap in 20 days? ', '175 hectares', '225 hectares', '250 hectares', '275 hectares', '250 hectares', 2),
(12, '3 pumps, working 4 hours a day, can empty a tank in 2 days. How many hours a day must 4 pumps work, to empty the tank in one day? ', '7 hours', '8 hours', '6 hours', '5 hours', '6 hours', 2),
(13, 'In a mixture 60 litres, the ratio of milk and water 2 : 1. If the this ratio is to be 1 : 2, then the quanity of water to be further added is:', '20 litres', '30 litres', '40 litres', '60 litres', '60 litres', 2),
(14, 'In a bag, there are coins of 25 p, 10 p and 5 p in the ratio of 1 : 2 : 3. If there is Rs. 30 in all, how many 5 p coins are there?', '50', '100', '150', '200', '150', 2),
(15, 'A began a business with Rs. 85,000. He was joined afterwards by B with Rs. 42,500. For how much period does B join, if the profits at the end of the year are divided in the ratio of 3 : 1?', '4 months', '5 months', '6 months', '8 months', '8 months', 2),
(16, 'A, B and C can do a piece of work in 24 days, 30 days and 40 days respectively. They began the work together but C left 4 days before the completion of the work. In how many days was the work completed?', '11 days ', '12 days', '13 days', '14 days', '11 days', 2),
(17, 'A alone can do a piece of work in 6 days and B alone in 8 days. A and B undertook to do it for Rs. 3200. With the help of C, they completed the work in 3 days. How much is to be paid to C?', '375', '400', '600', '800', '400', 2),
(18, 'A is 30% more efficient than B. How much time will they, working together, take to complete a job which A alone could have done in 23 days?', '11 days ', '13 days', '15 days ', '20 days', '13 days', 2),
(19, 'Two pipes A and B can fill a cistern in 37(1/2) minutes and 45 minutes respectively. Both pipes are opened. The cistern will be filled in just half an hour, if the B is turned off after:', '5 min', '9 min', '10 min', '15 min ', '9 min', 2),
(20, 'One pipe can fill a tank three times as fast as another pipe. If together the two pipes can fill the tank in 36 minutes, then the slower pipe alone will be able to fill the tank in:', '81 min', '108 min', '144 min', '192 min', '144 min', 2),
(21, 'Peter can cover a certain distance in 1 hr. 24 min. by covering two third of the distance at 4 kmph and the rest at 5kmph . total distance of of the journey is:', '5 km', '6 km', '7 km', '8 km', '6 km ', 2),
(22, 'Excluding stoppages, the speed of a bus is 54 kmph and including stoppages, it is 45 kmph. For how many minutes does the bus stop per hour?', '10 min', '12 min', '18 min', '15 min', '10 min', 2),
(23, 'A person travels from P to Q at a speed of 40 kmph and returns by increasing his speed by 50%. What is his average speed for the both the trips?', '35 kmph', '40 Kmph', '48 Kmph', '55 Kmph', '48 Kmph', 2),
(24, 'Two trains are moving in opposite directions at 60 km/hr and 90 km/hr. Their lengths are 1.10 km and 0.9 km respectively. The time taken by the slower train to cross the faster train in seconds is:', '58 sec', '50 sec', '48 sec', '56 sec', '48 sec', 2),
(25, 'Ramu started from A towards B at a speed of 20Km/hr and Raju started from B towards A. They crossed each other after one hour. Raju reached his destination 5/6 hour earlier than Ramu reached his destination.Then what is the distance between A and B?', '40 Km', '50 Km', '60 km', '80 km', '50 km', 2),
(26, 'Sham can row a boat at 10kmph in still water. IF the speed of the stream is 6kmph, the time taken to row a distance of 80km down the stream is\r\n', '4 hours', '5 hours', '3 hours', '2 hours', '5 hours', 2),
(27, 'A man goes downstream 60 km and upstream 20 km, taking 4 hrs each. What is the velocity of current?', '4 km/hr', '8 km/hr', '6 km/hr', '5  km/hr', '5 km/hr', 2),
(28, 'A boat can travel 20 km downstream in 24 min. The ratio of the speed of the boat in still water to the speed of the stream is 4 : 1. How much time will the boat take to cover 15 km upstream?', '20 min', '22 min', '25 min', '30 min', '30 min', 2),
(29, 'Directions for 31-33Q\r\nA+B means â€˜A is the daughter of Bâ€™\r\nâ€˜A*Bâ€™ means â€˜A is the son of Bâ€™\r\nâ€˜A-Bâ€™ means â€˜A is the wife of Bâ€™\r\n\r\nIf P*Q-S, which of the following is true ?', 'S is wife of Q', 'S is father of P', 'P is daughter of Q', 'Q is father of P', 'S is father of P', 2),
(30, 'A+B means â€˜A is the daughter of Bâ€™\r\nâ€˜A*Bâ€™ means â€˜A is the son of Bâ€™\r\nâ€˜A-Bâ€™ means â€˜A is the wife of Bâ€™\r\n\r\nIf T-S*B-M, which of the following is not true ?', 'B is mother of S', 'M is husband of B', 'T is wife of S', 'S is daughter of B', 'M is husband of B', 2),
(31, 'A+B means â€˜A is the daughter of Bâ€™\r\nâ€˜A*Bâ€™ means â€˜A is the son of Bâ€™\r\nâ€˜A-Bâ€™ means â€˜A is the wife of Bâ€™\r\n\r\nIf  Z*T-S*U+P, what is U to Z?', 'Mother', 'Grandmother', 'Father', 'Cannot be determined', 'Cannot be determined', 2),
(32, 'A+B means â€˜A is the daughter of Bâ€™\r\nâ€˜A*Bâ€™ means â€˜A is the son of Bâ€™\r\nâ€˜A-Bâ€™ means â€˜A is the wife of Bâ€™\r\n\r\nIf â€˜P $ Qâ€™ means â€˜P is father of Qâ€™; â€˜P # Qâ€™ means â€˜P is mother of Qâ€™; â€˜P * Qâ€™ means â€˜P is sister of Qâ€™, t', 'Nephew', 'Grandson', 'Grand daughter', 'Data inadequate', 'Grand daughter', 2),
(33, 'Kunal walks 10 Kilometers towards North. From there, he walks 6 kilometres towards South. Then, he walks 3 kilometres towards East. How far and in which direction is he with reference to his starting point ?', '5 kilometres West                                                   ', '5 kilometres North-east', '7 kilometres East                                                      ', '7 kilometres West', '5 kilometres North-east', 2),
(34, 'A person starts from a point A and travels 3 km eastwards to B and then turns left and travels thrice that distance to reach C.He again turns left and travels five times the distance he covered between between A and B and reaches his destination D. The sh', '12 km                                                                            ', '15 km', '16 km', '18 km ', '12 km                                                                            ', 2),
(35, 'A man walks 1 km towards East and then he turns to South and walks 5 km. Again he turns to East and walks 2 km, after this he turns to North and walks 9 km. Now, how far is he from his starting point ?', '3 km', '4 km', '5 km ', 'None of these', 'None of these', 2),
(36, 'Laxman went 15 kms to the west from my house, then turned left and walked 20 kms. He then turned East and walked 25 kms and finally turning left covered 20 kms. How far was he from his house?', '5 km', '10 km', '40 km', '80 km', '40 km', 2),
(37, 'A walks 10 metres in front and 10 metres to the right. Then every time turning to his left, he walks 5, 15 and 15 metres respectively. How far is he now from his starting point ?', '5 meters', '10 meters', '15 meters', '20 meters', '20 meters', 2),
(38, ' In a group of 40 girls, when latha was shifted by 4 places towards her right, then she become 12th from the left end what was her earlier position from the right end of the row? ', '34', '32', '33', '35', '34', 2),
(39, 'In how many different ways can the letters of the word CORPORATION be arranged so that the vowels always come together?', '810', '1440', '2880', '50400', '50400', 2),
(40, 'If ‘P $ Q’ means ‘P is father of Q’; (P # Q) means (P is mother of Q) (P * Q) means (P is sister of Q), then how is D related to N in N#A$B*D  ?', 'Nephew', 'Grandson', 'Grand daughter', 'None of these', 'Grand daughter', 2);

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
-- Table structure for table `test`
--

CREATE TABLE `test` (
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
-- Indexes for table `paper`
--
ALTER TABLE `paper`
  ADD PRIMARY KEY (`qp_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `passcode`
--
ALTER TABLE `passcode`
  ADD PRIMARY KEY (`pc_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`q_id`),
  ADD KEY `qp_id` (`qp_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
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
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `paper`
--
ALTER TABLE `paper`
  MODIFY `qp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `passcode`
--
ALTER TABLE `passcode`
  MODIFY `pc_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
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
  ADD CONSTRAINT `qid` FOREIGN KEY (`qid`) REFERENCES `paper` (`qp_id`),
  ADD CONSTRAINT `uid` FOREIGN KEY (`uid`) REFERENCES `userinfo` (`uid`);

--
-- Constraints for table `paper`
--
ALTER TABLE `paper`
  ADD CONSTRAINT `Paper_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `catogery` (`c_id`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `Questions_ibfk_1` FOREIGN KEY (`qp_id`) REFERENCES `paper` (`qp_id`);

--
-- Constraints for table `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `Test_ibfk_1` FOREIGN KEY (`pc_id`) REFERENCES `passcode` (`pc_id`),
  ADD CONSTRAINT `Test_ibfk_2` FOREIGN KEY (`qp_id`) REFERENCES `paper` (`qp_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
