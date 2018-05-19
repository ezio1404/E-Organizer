-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2018 at 07:22 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalsdb`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `displaytbl_event` ()  select * from tbl_event$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attend`
--

CREATE TABLE `tbl_attend` (
  `attend_no` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `stud_idno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_attend`
--

INSERT INTO `tbl_attend` (`attend_no`, `event_id`, `stud_idno`) VALUES
(1, 12, 15387467),
(2, 13, 15387467),
(3, 12, 15387467),
(4, 12, 15382054);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `event_desc` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `event_start_time` time NOT NULL,
  `event_end_time` time NOT NULL,
  `event_venue` varchar(255) NOT NULL,
  `event_guest` int(11) NOT NULL,
  `org_idno` int(11) NOT NULL,
  `event_avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`event_id`, `event_title`, `event_desc`, `event_date`, `event_start_time`, `event_end_time`, `event_venue`, `event_guest`, `org_idno`, `event_avatar`) VALUES
(12, 'ICT COngress', 'ICT COngressICT COngress', '2018-05-14', '11:09:00', '16:09:00', 'ICT COngressICT COngress', 20, 1, 'view/image/1526306937Chrysanthemum.jpg'),
(13, 'first aid trainging', 'first aid traingingfirst aid trainging', '2018-05-14', '12:16:00', '15:15:00', 'first aid traingingfirst aid trainging', 11, 1, 'view/image/1526307187Desert.jpg'),
(14, 'asdasda', 'asdasd', '2018-05-14', '11:21:00', '15:21:00', 'asdasdasd', 1, 1, 'view/image/1526307655Tulips.jpg'),
(15, 'asdasd', 'asdasd', '2018-05-14', '12:24:00', '11:24:00', 'asdasd', 4, 2, 'view/image/1526307841Jellyfish.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logs`
--

CREATE TABLE `tbl_logs` (
  `log_id` int(11) NOT NULL,
  `stud_idno` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_logs`
--

INSERT INTO `tbl_logs` (`log_id`, `stud_idno`, `date_created`) VALUES
(1, 12345, '2018-05-15 16:29:02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_organizer`
--

CREATE TABLE `tbl_organizer` (
  `org_idno` int(11) NOT NULL,
  `org_fname` varchar(255) NOT NULL,
  `org_lname` varchar(255) NOT NULL,
  `org_email` varchar(255) NOT NULL,
  `org_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_organizer`
--

INSERT INTO `tbl_organizer` (`org_idno`, `org_fname`, `org_lname`, `org_email`, `org_password`) VALUES
(1, 'Carri', 'Yu', 'cy@gmail.com', '123'),
(2, 'Chad', 'coyoca', 'ca@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `stud_idno` int(11) NOT NULL,
  `stud_fname` varchar(255) NOT NULL,
  `stud_lname` varchar(255) NOT NULL,
  `stud_email` varchar(255) NOT NULL,
  `stud_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`stud_idno`, `stud_fname`, `stud_lname`, `stud_email`, `stud_password`) VALUES
(12345, 'SHIT ', 'SHIT ', 'SHIT ', 'SHIT '),
(122333, 'test', 'test', 'test@gmail.com', '123'),
(123456, 'test', 'test', 'test@gmail.com', 'test'),
(15382054, 'Chad Andrie', 'Coyoca', 'ca@gmail.com', '123'),
(15387467, 'EJ ANTON', 'POTOT', 'zuming1404@gmail.com', '123');

--
-- Triggers `tbl_student`
--
DELIMITER $$
CREATE TRIGGER `student_created` AFTER INSERT ON `tbl_student` FOR EACH ROW insert into tbl_logs(stud_idno) values(NEW.stud_idno)
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_attend`
--
ALTER TABLE `tbl_attend`
  ADD PRIMARY KEY (`attend_no`),
  ADD KEY `event_id` (`event_id`),
  ADD KEY `stud_idno` (`stud_idno`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `tbl_logs`
--
ALTER TABLE `tbl_logs`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `stud_id` (`stud_idno`);

--
-- Indexes for table `tbl_organizer`
--
ALTER TABLE `tbl_organizer`
  ADD PRIMARY KEY (`org_idno`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`stud_idno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_attend`
--
ALTER TABLE `tbl_attend`
  MODIFY `attend_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_logs`
--
ALTER TABLE `tbl_logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_organizer`
--
ALTER TABLE `tbl_organizer`
  MODIFY `org_idno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_attend`
--
ALTER TABLE `tbl_attend`
  ADD CONSTRAINT `tbl_attend_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `tbl_event` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_attend_ibfk_2` FOREIGN KEY (`stud_idno`) REFERENCES `tbl_student` (`stud_idno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_logs`
--
ALTER TABLE `tbl_logs`
  ADD CONSTRAINT `tbl_logs_ibfk_1` FOREIGN KEY (`stud_idno`) REFERENCES `tbl_student` (`stud_idno`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
