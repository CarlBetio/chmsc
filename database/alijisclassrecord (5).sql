-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2018 at 08:00 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alijisclassrecord`
--

-- --------------------------------------------------------

--
-- Table structure for table `classrecord`
--

CREATE TABLE `classrecord` (
  `id_entry` int(255) NOT NULL,
  `lrn` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_mid` varchar(255) NOT NULL,
  `student_last` varchar(255) NOT NULL,
  `teacher_id` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `sy` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `sec` varchar(255) NOT NULL,
  `w1` int(255) NOT NULL,
  `w2` int(255) NOT NULL,
  `w3` int(255) NOT NULL,
  `w4` int(255) NOT NULL,
  `w5` int(255) NOT NULL,
  `w6` int(255) NOT NULL,
  `w7` int(255) NOT NULL,
  `w8` int(255) NOT NULL,
  `w9` int(255) NOT NULL,
  `w10` int(255) NOT NULL,
  `wPS` varchar(255) NOT NULL,
  `wWS` varchar(255) NOT NULL,
  `p1` int(255) NOT NULL,
  `p2` int(255) NOT NULL,
  `p3` int(255) NOT NULL,
  `p4` int(255) NOT NULL,
  `p5` int(255) NOT NULL,
  `p6` int(255) NOT NULL,
  `p7` int(255) NOT NULL,
  `p8` int(255) NOT NULL,
  `p9` int(255) NOT NULL,
  `p10` int(255) NOT NULL,
  `pPS` varchar(255) NOT NULL,
  `pWS` int(255) NOT NULL,
  `qa` int(255) NOT NULL,
  `qPS` varchar(255) NOT NULL,
  `qWS` varchar(255) NOT NULL,
  `IG` varchar(255) NOT NULL,
  `QG` varchar(255) NOT NULL,
  `quarter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classrecord`
--

INSERT INTO `classrecord` (`id_entry`, `lrn`, `student_name`, `student_mid`, `student_last`, `teacher_id`, `gender`, `sub`, `sy`, `grade`, `sec`, `w1`, `w2`, `w3`, `w4`, `w5`, `w6`, `w7`, `w8`, `w9`, `w10`, `wPS`, `wWS`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `pPS`, `pWS`, `qa`, `qPS`, `qWS`, `IG`, `QG`, `quarter`) VALUES
(3, '1', 'Earl', 'a', 'Earl', '1', 'Male', 'Aral Pan', '2017-2018', 'I', '1', 1, 5, 0, 0, 0, 0, 0, 0, 0, 0, '20.00', '6.00', 5, 8, 0, 0, 0, 0, 0, 0, 0, 0, '65.00', 33, 7, '70.00', '14.00', '53.00', '73', ''),
(4, '2', 'Thalia', 'b', 'Thalia', '1', 'Female', 'Aral Pan', '2017-2018', 'I', '1', 4, 8, 0, 0, 0, 0, 0, 0, 0, 0, '40.00', '12.00', 7, 7, 0, 0, 0, 0, 0, 0, 0, 0, '70.00', 35, 8, '80.00', '16.00', '63.00', '80', ''),
(5, '123', 'mae', 'a', 'mae', '2', 'Female', 'Math', '2017-2018', 'I', '1', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, '60.00', '18.00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', ''),
(6, '1234', 'john', 'a', 'mae', '2', 'Male', 'Math', '2017-2018', 'I', '1', 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, '80.00', '24.00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `enrollstudent`
--

CREATE TABLE `enrollstudent` (
  `enroll_id` int(10) NOT NULL,
  `lrn` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `section` int(10) NOT NULL,
  `sy` varchar(20) NOT NULL,
  `teacher_id` int(10) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrollstudent`
--

INSERT INTO `enrollstudent` (`enroll_id`, `lrn`, `name`, `gender`, `subject_name`, `grade`, `section`, `sy`, `teacher_id`, `status`) VALUES
(50, 1000, 'Bethanie Cox', 'Female', 'Aral Pan', '1', 1, '2016-2017', 1, ''),
(51, 1001, 'Jacque Cooley', 'Male', 'Aral Pan', '1', 1, '2016-2017', 1, ''),
(52, 1002, 'Elwood Samuels', 'Female', 'Aral Pan', '1', 1, '2016-2017', 1, ''),
(53, 1003, 'Marina Collier', 'Male', 'Aral Pan', '1', 1, '2016-2017', 1, ''),
(54, 1004, 'Damian Conrad', 'Female', 'Aral Pan', '1', 1, '2016-2017', 1, ''),
(55, 1005, 'Isaac Mckinney', 'Male', 'Aral Pan', '1', 1, '2016-2017', 1, ''),
(56, 1006, 'Eshaan Hines', 'Female', 'Aral Pan', '1', 1, '2016-2017', 1, ''),
(57, 1007, 'Haroon Leon', 'Male', 'Aral Pan', '1', 1, '2016-2017', 1, ''),
(58, 1008, 'Monica Flower', 'Female', 'Math', '2', 1, '2016-2017', 1, ''),
(59, 1009, 'Kerry Petersen', 'Male', 'Math', '2', 1, '2016-2017', 1, ''),
(60, 1010, 'Wallace Rawlings', 'Female', 'Math', '2', 1, '2016-2017', 1, ''),
(61, 1011, 'Mark Bowes', 'Male', 'Math', '2', 1, '2016-2017', 1, ''),
(62, 1012, 'Ethan Lott', 'Female', 'Math', '2', 1, '2016-2017', 1, ''),
(63, 1013, 'Beulah Bate', 'Male', 'Math', '2', 1, '2016-2017', 1, ''),
(64, 1014, 'Taylan Medina', 'Female', 'Math', '2', 1, '2016-2017', 1, ''),
(65, 1015, 'Hina Mcconnell', 'Male', 'Math', '2', 1, '2016-2017', 1, ''),
(66, 1016, 'Zaina Donald', 'Female', 'English 101', '3', 1, '2016-2017', 1, ''),
(67, 1017, 'Lena Derrick', 'Male', 'English 101', '3', 1, '2016-2017', 1, ''),
(68, 1018, 'Jayden-Lee Riddle', 'Female', 'English 101', '3', 1, '2016-2017', 1, ''),
(69, 1019, 'Damon Short', 'Male', 'English 101', '3', 1, '2016-2017', 1, ''),
(70, 1020, 'Samira Zimmerman', 'Female', 'English 101', '3', 1, '2016-2017', 1, ''),
(71, 1021, 'Bruno Hawes', 'Male', 'Science1001', '4', 1, '2016-2017', 1, ''),
(72, 1022, 'Paloma Wu', 'Female', 'Science1001', '4', 1, '2016-2017', 1, ''),
(73, 1023, 'Ava-Mai Santana', 'Male', 'Science1001', '4', 1, '2016-2017', 1, ''),
(74, 1024, 'Bobbie Potts', 'Female', 'Science1001', '4', 1, '2016-2017', 1, ''),
(75, 1025, 'Jac Mac', 'Male', 'Science1001', '4', 1, '2016-2017', 1, ''),
(76, 1026, 'Heath Gutierrez', 'Female', 'Science1001', '4', 1, '2016-2017', 1, ''),
(77, 1027, 'Tala Phelps', 'Male', 'Science1001', '4', 1, '2016-2017', 1, ''),
(78, 1028, 'Donnell Goodman', 'Female', 'Science1001', '4', 1, '2016-2017', 1, ''),
(79, 1029, 'Zion Mckenna', 'Male', 'Science1001', '4', 1, '2016-2017', 1, ''),
(80, 1030, 'Krista Halliday', 'Female', 'Science1001', '4', 1, '2016-2017', 1, ''),
(81, 1031, 'Eloisa Griffith', 'Male', 'REED4', '5', 1, '2016-2017', 1, ''),
(82, 1032, 'Ashwin Roach', 'Female', 'REED4', '5', 1, '2016-2017', 1, ''),
(83, 1033, 'Ariella Mahoney', 'Male', 'REED4', '5', 1, '2016-2017', 1, ''),
(84, 1034, 'Asa Berry', 'Female', 'REED4', '5', 1, '2016-2017', 1, ''),
(85, 1035, 'Meadow Lee', 'Male', 'REED4', '5', 1, '2016-2017', 1, ''),
(86, 1036, 'Frankie Hutton', 'Female', 'REED4', '5', 1, '2016-2017', 1, ''),
(87, 1037, 'Haroon Villegas', 'Male', 'SPECOM', '6', 1, '2016-2017', 1, ''),
(88, 1038, 'Humairaa Hart', 'Female', 'SPECOM', '6', 1, '2016-2017', 1, ''),
(89, 1039, 'Ricardo Berger', 'Male', 'SPECOM', '6', 1, '2016-2017', 1, ''),
(90, 1040, 'Krystal Merritt', 'Female', 'SPECOM', '6', 1, '2016-2017', 1, ''),
(91, 1041, 'Ivor Erickson', 'Male', 'SPECOM', '6', 1, '2016-2017', 1, ''),
(92, 1042, 'Stanley Dyer', 'Female', 'SPECOM', '6', 1, '2016-2017', 1, ''),
(93, 1043, 'Breanna Lozano', 'Male', 'SPECOM', '6', 1, '2016-2017', 1, ''),
(94, 1044, 'Jana Rennie', 'Female', 'SPECOM', '6', 1, '2016-2017', 1, ''),
(95, 1045, 'Mai Schultz', 'Male', 'SPECOM', '6', 1, '2016-2017', 1, ''),
(96, 1046, 'Yaqub Whitehouse', 'Female', 'SPECOM', '6', 1, '2016-2017', 1, ''),
(97, 1047, 'Eileen Pate', 'Female', 'Aral Pan', '1', 1, '2017-2018', 1, ''),
(99, 1049, 'Anisha Sanders', 'Female', 'Aral Pan', '1', 1, '2017-2018', 1, ''),
(100, 1050, 'Beatrice Beltran', 'Male', 'Aral Pan', '1', 1, '2017-2018', 1, ''),
(101, 1051, 'Naomi Alfaro', 'Female', 'Math', '2', 1, '2017-2018', 1, ''),
(102, 1052, 'Shyla Hughes', 'Male', 'Math', '2', 1, '2017-2018', 1, ''),
(103, 1053, 'Kiefer Mendoza', 'Female', 'Math', '2', 1, '2017-2018', 1, ''),
(104, 1054, 'Sarah-Jayne Thomas', 'Male', 'Math', '2', 1, '2017-2018', 1, ''),
(105, 1055, 'Kaden Gordon', 'Female', 'Math', '2', 1, '2017-2018', 1, ''),
(106, 1056, 'Ace Ward', 'Male', 'Math', '2', 1, '2017-2018', 1, ''),
(107, 1057, 'Teegan Moss', 'Female', 'Math', '2', 1, '2017-2018', 1, ''),
(108, 1058, 'Jedd Greer', 'Male', 'Math', '2', 1, '2017-2018', 1, ''),
(109, 1059, 'Lucien Robin', 'Female', 'Math', '2', 1, '2017-2018', 1, ''),
(110, 1060, 'Mercedes Bob', 'Male', 'Math', '2', 1, '2017-2018', 1, ''),
(111, 1061, 'Jemma Riggs', 'Female', 'Math', '2', 1, '2017-2018', 1, ''),
(112, 1062, 'Sebastien Holding', 'Male', 'Math', '2', 1, '2017-2018', 1, ''),
(113, 1063, 'Kristie Mohamed', 'Female', 'English 101', '3', 1, '2017-2018', 1, ''),
(114, 1064, 'Madelyn Wainwright', 'Male', 'English 101', '3', 1, '2017-2018', 1, ''),
(115, 1065, 'Kelly Mcgregor', 'Female', 'English 101', '3', 1, '2017-2018', 1, ''),
(116, 1066, 'Gerrard Connolly', 'Male', 'English 101', '3', 1, '2017-2018', 1, ''),
(117, 1067, 'Stefan Davies', 'Female', 'English 101', '3', 1, '2017-2018', 1, ''),
(118, 1068, 'Muhammed Witt', 'Male', 'English 101', '3', 1, '2017-2018', 1, ''),
(119, 1069, 'Jim Neal', 'Female', 'English 101', '3', 1, '2017-2018', 1, ''),
(120, 1070, 'Aras Haworth', 'Male', 'English 101', '3', 1, '2017-2018', 1, ''),
(121, 1071, 'Amira Payne', 'Female', 'English 101', '3', 1, '2017-2018', 1, ''),
(122, 1072, 'Esmee Cartwright', 'Male', 'Science1001', '4', 1, '2017-2018', 1, ''),
(123, 1073, 'Lucy Conway', 'Female', 'Science1001', '4', 1, '2017-2018', 1, ''),
(124, 1074, 'Erik Sexton', 'Male', 'Science1001', '4', 1, '2017-2018', 1, ''),
(125, 1075, 'Moesha Schmitt', 'Female', 'Science1001', '4', 1, '2017-2018', 1, ''),
(126, 1076, 'Anees Grant', 'Male', 'Science1001', '4', 1, '2017-2018', 1, ''),
(127, 1077, 'Kendal Boyle', 'Female', 'Science1001', '4', 1, '2017-2018', 1, ''),
(128, 1078, 'Dillan Mcdaniel', 'Male', 'REED4', '5', 1, '2017-2018', 1, ''),
(129, 1079, 'Anas Ahmad', 'Female', 'REED4', '5', 1, '2017-2018', 1, ''),
(130, 1080, 'Alan Crowther', 'Male', 'REED4', '5', 1, '2017-2018', 1, ''),
(131, 1081, 'Layla-Mae Correa', 'Female', 'REED4', '5', 1, '2017-2018', 1, ''),
(132, 1082, 'Lilian Li', 'Male', 'REED4', '5', 1, '2017-2018', 1, ''),
(133, 1083, 'Hope Villalobos', 'Female', 'REED4', '5', 1, '2017-2018', 1, ''),
(134, 1084, 'Malaikah Mackay', 'Male', 'REED4', '5', 1, '2017-2018', 1, ''),
(135, 1085, 'Kalvin Rhodes', 'Female', 'REED4', '5', 1, '2017-2018', 1, ''),
(136, 1086, 'Tea Byers', 'Male', 'REED4', '5', 1, '2017-2018', 1, ''),
(137, 1087, 'Charlotte Burn', 'Female', 'REED4', '5', 1, '2017-2018', 1, ''),
(138, 1088, 'Ellie-Louise Underwood', 'Male', 'REED4', '5', 1, '2017-2018', 1, ''),
(139, 1089, 'Amara Hicks', 'Female', 'REED4', '5', 1, '2017-2018', 1, ''),
(140, 1090, 'Betty Costa', 'Male', 'SPECOM', '6', 1, '2017-2018', 1, ''),
(141, 1091, 'Madison Woods', 'Female', 'SPECOM', '6', 1, '2017-2018', 1, ''),
(142, 1092, 'Gianluca Gilmour', 'Male', 'SPECOM', '6', 1, '2017-2018', 1, ''),
(143, 1093, 'Pearl Church', 'Female', 'SPECOM', '6', 1, '2017-2018', 1, ''),
(144, 1094, 'Ronny Whitaker', 'Female', 'Aral Pan', '1', 1, '2018-2019', 1, ''),
(145, 1095, 'Riccardo Malone', 'Male', 'Aral Pan', '1', 1, '2018-2019', 1, ''),
(146, 1096, 'Tayla Plummer', 'Female', 'Aral Pan', '1', 1, '2018-2019', 1, ''),
(147, 1097, 'Nikolas Plant', 'Male', 'Aral Pan', '1', 1, '2018-2019', 1, ''),
(148, 1098, 'Sufyan Pierce', 'Female', 'Aral Pan', '1', 1, '2018-2019', 1, ''),
(149, 1099, 'Dilan Larson', 'Male', 'Aral Pan', '1', 1, '2018-2019', 1, ''),
(150, 1100, 'Leoni Mcdowell', 'Female', 'Aral Pan', '1', 1, '2018-2019', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `highestpossiblescores`
--

CREATE TABLE `highestpossiblescores` (
  `id` int(10) NOT NULL,
  `teacher_id` int(10) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `school_year` int(15) NOT NULL,
  `hpsw1` int(5) NOT NULL,
  `hpsw2` int(5) NOT NULL,
  `hpsw3` int(5) NOT NULL,
  `hpsw4` int(5) NOT NULL,
  `hpsw5` int(5) NOT NULL,
  `hpsw6` int(5) NOT NULL,
  `hpsw7` int(5) NOT NULL,
  `hpsw8` int(5) NOT NULL,
  `hpsw9` int(5) NOT NULL,
  `hpsw10` int(5) NOT NULL,
  `hpsp1` int(5) NOT NULL,
  `hpsp2` int(5) NOT NULL,
  `hpsp3` int(5) NOT NULL,
  `hpsp4` int(5) NOT NULL,
  `hpsp5` int(5) NOT NULL,
  `hpsp6` int(5) NOT NULL,
  `hpsp7` int(5) NOT NULL,
  `hpsp8` int(5) NOT NULL,
  `hpsp9` int(5) NOT NULL,
  `hpsp10` int(5) NOT NULL,
  `psqa` int(5) NOT NULL,
  `grading` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `highestpossiblescores`
--

INSERT INTO `highestpossiblescores` (`id`, `teacher_id`, `subject_name`, `school_year`, `hpsw1`, `hpsw2`, `hpsw3`, `hpsw4`, `hpsw5`, `hpsw6`, `hpsw7`, `hpsw8`, `hpsw9`, `hpsw10`, `hpsp1`, `hpsp2`, `hpsp3`, `hpsp4`, `hpsp5`, `hpsp6`, `hpsp7`, `hpsp8`, `hpsp9`, `hpsp10`, `psqa`, `grading`) VALUES
(7, 1, 'Aral Pan', 2018, 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `schoolyear`
--

CREATE TABLE `schoolyear` (
  `entry_id` int(10) NOT NULL,
  `school_year` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schoolyear`
--

INSERT INTO `schoolyear` (`entry_id`, `school_year`) VALUES
(4, '2018-2019'),
(5, '2017-2018'),
(6, '2016-2017'),
(7, '2015-2016');

-- --------------------------------------------------------

--
-- Table structure for table `sub_assign`
--

CREATE TABLE `sub_assign` (
  `assign_id` int(100) NOT NULL,
  `teacher_id` int(10) NOT NULL,
  `teacher_name` varchar(100) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `section` varchar(10) NOT NULL,
  `sy` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_assign`
--

INSERT INTO `sub_assign` (`assign_id`, `teacher_id`, `teacher_name`, `subject_name`, `grade`, `section`, `sy`) VALUES
(43, 1, 'Alvins', 'Aral Pan', '1', '1', '2016-2017'),
(44, 1, 'Alvins', 'Math', '2', '1', '2016-2017'),
(45, 1, 'Alvins', 'English101', '3', '1', '2016-2017'),
(46, 1, 'Alvins', 'Science1001', '4', '1', '2016-2017'),
(47, 1, 'Alvins', 'REED4', '5', '1', '2016-2017'),
(48, 1, 'Alvins', 'SPECOM', '6', '1', '2016-2017'),
(49, 1, 'Alvins', 'Aral Pan', '1', '1', '2017-2018'),
(50, 1, 'Alvins', 'Math', '2', '1', '2017-2018'),
(51, 1, 'Alvins', 'English101', '3', '1', '2017-2018'),
(52, 1, 'Alvins', 'Science1001', '4', '1', '2017-2018'),
(53, 1, 'Alvins', 'REED4', '5', '1', '2017-2018'),
(54, 1, 'Alvins', 'SPECOM', '6', '1', '2017-2018'),
(55, 1, 'Alvins', 'Aral Pan', '1', '1', '2018-2019'),
(56, 1, 'Alvins', 'Math', '2', '1', '2018-2019'),
(57, 1, 'Alvins', 'English101', '3', '1', '2018-2019'),
(58, 1, 'Alvins', 'Science1001', '4', '1', '2018-2019'),
(59, 1, 'Alvins', 'REED4', '5', '1', '2018-2019'),
(60, 1, 'Alvins', 'SPECOM', '6', '1', '2018-2019'),
(61, 5, 'Keir', 'English101', '6', '1', '2015-2016');

-- --------------------------------------------------------

--
-- Table structure for table `tblprincipal`
--

CREATE TABLE `tblprincipal` (
  `principal_id` int(100) NOT NULL,
  `principal_name` varchar(100) NOT NULL,
  `principal_designation` varchar(100) NOT NULL,
  `principal_years` varchar(100) NOT NULL,
  `principal_teacher` int(100) NOT NULL,
  `registration_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblprincipal`
--

INSERT INTO `tblprincipal` (`principal_id`, `principal_name`, `principal_designation`, `principal_years`, `principal_teacher`, `registration_status`) VALUES
(35, 'Principals', 'Principal 2', 'Array', 300, 'Registered'),
(36, 'Test Principal', 'Principal 3', '2015-2016', 400, 'Registered');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjects`
--

CREATE TABLE `tblsubjects` (
  `subject_id` int(10) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `subject_room` varchar(50) NOT NULL,
  `subject_schedule` varchar(50) NOT NULL,
  `subject_grade` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubjects`
--

INSERT INTO `tblsubjects` (`subject_id`, `subject_name`, `subject_room`, `subject_schedule`, `subject_grade`) VALUES
(2, 'Aral Pan', 'LC201', '8:30=9:30', 'Grade 1'),
(3, 'Math', 'SEL02', '8:30=9:30', 'Grade 2'),
(4, 'English101', 'SEL03', '10:00-11:00', 'Grade 3'),
(5, 'Science1001', 'SEL04', '11:00-12:00', 'Grade 4'),
(6, 'REED4', 'SEL05', '1:00-2:00', 'Grade 5'),
(7, 'SPECOM', 'SEL06', '2:00-3:00', 'Grade 6');

-- --------------------------------------------------------

--
-- Table structure for table `tblteacher`
--

CREATE TABLE `tblteacher` (
  `teacher_id` int(100) NOT NULL,
  `teacher_name` varchar(100) NOT NULL,
  `teacher_mid` varchar(100) NOT NULL,
  `teacher_last` varchar(100) NOT NULL,
  `teacher_bday` varchar(100) NOT NULL,
  `teacher_tin` varchar(100) NOT NULL,
  `teacher_position` varchar(100) NOT NULL,
  `teacher_plantilla` int(100) NOT NULL,
  `teacher_bp` int(100) NOT NULL,
  `teacher_attainment` varchar(100) NOT NULL,
  `registration_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblteacher`
--

INSERT INTO `tblteacher` (`teacher_id`, `teacher_name`, `teacher_mid`, `teacher_last`, `teacher_bday`, `teacher_tin`, `teacher_position`, `teacher_plantilla`, `teacher_bp`, `teacher_attainment`, `registration_status`) VALUES
(1, 'Alvins', 'Lapid', 'Yanson', 'July 30, 1996', '1009169696', 'Guidance', 10010, 69696969, 'MAED', 'Registered'),
(3, 'Alson John R. Bayon-on', '', '', '2018-06-06', '10012', 'Guidance Counselor', 10021, 1010121, 'MAED', 'Registered'),
(4, 'Steven', 'S', 'Saludares', 'May 28, 2018', '31-2312321', 'Adviser', 231231, 1231231, 'MAED', 'Registered'),
(5, 'Keir', 'S', 'Velez', 'June 03, 2018', '12-3124234', 'Adviser', 231231, 3213, 'MAED', 'Registered'),
(6, 'Leonel', 'C', 'Entes', 'June 03, 2018', '31-2321312', 'Adviser', 1232131, 131231, 'PhD', 'Registered'),
(7, 'Mark', 'S', 'Sombilla', 'June 03, 2018', '12-3123131', 'Adviser', 31231, 31231231, 'PhD', 'Registered');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `register_id` int(50) NOT NULL,
  `user_id` int(10) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`register_id`, `user_id`, `user_username`, `user_password`, `user_role`) VALUES
(8, 3, 'alsons', 'password123', 'Teacher'),
(14, 1, 'alvins', 'password789', 'Teacher'),
(18, 35, 'iamprincipal', 'iamprincipal', 'Principal'),
(19, 36, 'sample', 'sample', 'Principal'),
(20, 4, 'steven', 'steven', 'Teacher'),
(21, 5, 'keirve', 'keirve', 'Teacher'),
(22, 6, 'leonel', 'leonel', 'Teacher'),
(23, 7, 'markso', 'markso', 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `score` varchar(100) NOT NULL,
  `teacher_id` int(10) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `school_year` varchar(15) NOT NULL,
  `written_num` varchar(10) NOT NULL,
  `grading` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name`, `score`, `teacher_id`, `subject_name`, `school_year`, `written_num`, `grading`) VALUES
(1, 'Jacque Cooley', '21.00', 1, 'Aral Pan', '2018-2019', 'igrade', 1),
(2, 'Marina Collier', '0.00', 1, 'Aral Pan', '2018-2019', 'igrade', 1),
(3, 'Isaac Mckinney', '0.00', 1, 'Aral Pan', '2018-2019', 'igrade', 1),
(4, 'Haroon Leon', '0.00', 1, 'Aral Pan', '2018-2019', 'igrade', 1),
(5, 'Beatrice Beltran', '0.00', 1, 'Aral Pan', '2018-2019', 'igrade', 1),
(6, 'Riccardo Malone', '0.00', 1, 'Aral Pan', '2018-2019', 'igrade', 1),
(7, 'Nikolas Plant', '0.00', 1, 'Aral Pan', '2018-2019', 'igrade', 1),
(8, 'Dilan Larson', '0.00', 1, 'Aral Pan', '2018-2019', 'igrade', 1),
(9, 'Jacque Cooley', '25', 1, 'Aral Pan', '2018-2019', 'qgrade', 1),
(10, 'Marina Collier', '', 1, 'Aral Pan', '2018-2019', 'qgrade', 1),
(11, 'Isaac Mckinney', '', 1, 'Aral Pan', '2018-2019', 'qgrade', 1),
(12, 'Haroon Leon', '', 1, 'Aral Pan', '2018-2019', 'qgrade', 1),
(13, 'Beatrice Beltran', '', 1, 'Aral Pan', '2018-2019', 'qgrade', 1),
(14, 'Riccardo Malone', '', 1, 'Aral Pan', '2018-2019', 'qgrade', 1),
(15, 'Nikolas Plant', '', 1, 'Aral Pan', '2018-2019', 'qgrade', 1),
(16, 'Dilan Larson', '', 1, 'Aral Pan', '2018-2019', 'qgrade', 1),
(17, 'Bethanie Cox', '33.00', 1, 'Aral Pan', '2018-2019', 'igrade1', 1),
(18, 'Elwood Samuels', '0.00', 1, 'Aral Pan', '2018-2019', 'igrade1', 1),
(19, 'Damian Conrad', '0.00', 1, 'Aral Pan', '2018-2019', 'igrade1', 1),
(20, 'Eshaan Hines', '0.00', 1, 'Aral Pan', '2018-2019', 'igrade1', 1),
(21, 'Eileen Pate', '0.00', 1, 'Aral Pan', '2018-2019', 'igrade1', 1),
(22, 'Anisha Sanders', '0.00', 1, 'Aral Pan', '2018-2019', 'igrade1', 1),
(23, 'Ronny Whitaker', '0.00', 1, 'Aral Pan', '2018-2019', 'igrade1', 1),
(24, 'Tayla Plummer', '0.00', 1, 'Aral Pan', '2018-2019', 'igrade1', 1),
(25, 'Sufyan Pierce', '0.00', 1, 'Aral Pan', '2018-2019', 'igrade1', 1),
(26, 'Leoni Mcdowell', '0.00', 1, 'Aral Pan', '2018-2019', 'igrade1', 1),
(27, 'Bethanie Cox', '37', 1, 'Aral Pan', '2018-2019', 'qgrade1', 1),
(28, 'Elwood Samuels', '', 1, 'Aral Pan', '2018-2019', 'qgrade1', 1),
(29, 'Damian Conrad', '', 1, 'Aral Pan', '2018-2019', 'qgrade1', 1),
(30, 'Eshaan Hines', '', 1, 'Aral Pan', '2018-2019', 'qgrade1', 1),
(31, 'Eileen Pate', '', 1, 'Aral Pan', '2018-2019', 'qgrade1', 1),
(32, 'Anisha Sanders', '', 1, 'Aral Pan', '2018-2019', 'qgrade1', 1),
(33, 'Ronny Whitaker', '', 1, 'Aral Pan', '2018-2019', 'qgrade1', 1),
(34, 'Tayla Plummer', '', 1, 'Aral Pan', '2018-2019', 'qgrade1', 1),
(35, 'Sufyan Pierce', '', 1, 'Aral Pan', '2018-2019', 'qgrade1', 1),
(36, 'Leoni Mcdowell', '', 1, 'Aral Pan', '2018-2019', 'qgrade1', 1),
(37, 'Jacque Cooley', '20', 1, 'Aral Pan', '2018-2019', 'w1', 1),
(38, 'Marina Collier', '', 1, 'Aral Pan', '2018-2019', 'w1', 1),
(39, 'Isaac Mckinney', '', 1, 'Aral Pan', '2018-2019', 'w1', 1),
(40, 'Haroon Leon', '', 1, 'Aral Pan', '2018-2019', 'w1', 1),
(41, 'Beatrice Beltran', '', 1, 'Aral Pan', '2018-2019', 'w1', 1),
(42, 'Riccardo Malone', '', 1, 'Aral Pan', '2018-2019', 'w1', 1),
(43, 'Nikolas Plant', '', 1, 'Aral Pan', '2018-2019', 'w1', 1),
(44, 'Dilan Larson', '', 1, 'Aral Pan', '2018-2019', 'w1', 1),
(45, 'Jacque Cooley', '', 1, 'Aral Pan', '2018-2019', 'w2', 1),
(46, 'Marina Collier', '', 1, 'Aral Pan', '2018-2019', 'w2', 1),
(47, 'Isaac Mckinney', '', 1, 'Aral Pan', '2018-2019', 'w2', 1),
(48, 'Haroon Leon', '', 1, 'Aral Pan', '2018-2019', 'w2', 1),
(49, 'Beatrice Beltran', '', 1, 'Aral Pan', '2018-2019', 'w2', 1),
(50, 'Riccardo Malone', '', 1, 'Aral Pan', '2018-2019', 'w2', 1),
(51, 'Nikolas Plant', '', 1, 'Aral Pan', '2018-2019', 'w2', 1),
(52, 'Dilan Larson', '', 1, 'Aral Pan', '2018-2019', 'w2', 1),
(53, 'Jacque Cooley', '', 1, 'Aral Pan', '2018-2019', 'w3', 1),
(54, 'Marina Collier', '', 1, 'Aral Pan', '2018-2019', 'w3', 1),
(55, 'Isaac Mckinney', '', 1, 'Aral Pan', '2018-2019', 'w3', 1),
(56, 'Haroon Leon', '', 1, 'Aral Pan', '2018-2019', 'w3', 1),
(57, 'Beatrice Beltran', '', 1, 'Aral Pan', '2018-2019', 'w3', 1),
(58, 'Riccardo Malone', '', 1, 'Aral Pan', '2018-2019', 'w3', 1),
(59, 'Nikolas Plant', '', 1, 'Aral Pan', '2018-2019', 'w3', 1),
(60, 'Dilan Larson', '', 1, 'Aral Pan', '2018-2019', 'w3', 1),
(61, 'Jacque Cooley', '', 1, 'Aral Pan', '2018-2019', 'w4', 1),
(62, 'Marina Collier', '', 1, 'Aral Pan', '2018-2019', 'w4', 1),
(63, 'Isaac Mckinney', '', 1, 'Aral Pan', '2018-2019', 'w4', 1),
(64, 'Haroon Leon', '', 1, 'Aral Pan', '2018-2019', 'w4', 1),
(65, 'Beatrice Beltran', '', 1, 'Aral Pan', '2018-2019', 'w4', 1),
(66, 'Riccardo Malone', '', 1, 'Aral Pan', '2018-2019', 'w4', 1),
(67, 'Nikolas Plant', '', 1, 'Aral Pan', '2018-2019', 'w4', 1),
(68, 'Dilan Larson', '', 1, 'Aral Pan', '2018-2019', 'w4', 1),
(69, 'Jacque Cooley', '', 1, 'Aral Pan', '2018-2019', 'w5', 1),
(70, 'Marina Collier', '', 1, 'Aral Pan', '2018-2019', 'w5', 1),
(71, 'Isaac Mckinney', '', 1, 'Aral Pan', '2018-2019', 'w5', 1),
(72, 'Haroon Leon', '', 1, 'Aral Pan', '2018-2019', 'w5', 1),
(73, 'Beatrice Beltran', '', 1, 'Aral Pan', '2018-2019', 'w5', 1),
(74, 'Riccardo Malone', '', 1, 'Aral Pan', '2018-2019', 'w5', 1),
(75, 'Nikolas Plant', '', 1, 'Aral Pan', '2018-2019', 'w5', 1),
(76, 'Dilan Larson', '', 1, 'Aral Pan', '2018-2019', 'w5', 1),
(77, 'Jacque Cooley', '', 1, 'Aral Pan', '2018-2019', 'w6', 1),
(78, 'Marina Collier', '', 1, 'Aral Pan', '2018-2019', 'w6', 1),
(79, 'Isaac Mckinney', '', 1, 'Aral Pan', '2018-2019', 'w6', 1),
(80, 'Haroon Leon', '', 1, 'Aral Pan', '2018-2019', 'w6', 1),
(81, 'Beatrice Beltran', '', 1, 'Aral Pan', '2018-2019', 'w6', 1),
(82, 'Riccardo Malone', '', 1, 'Aral Pan', '2018-2019', 'w6', 1),
(83, 'Nikolas Plant', '', 1, 'Aral Pan', '2018-2019', 'w6', 1),
(84, 'Dilan Larson', '', 1, 'Aral Pan', '2018-2019', 'w6', 1),
(85, 'Jacque Cooley', '', 1, 'Aral Pan', '2018-2019', 'w7', 1),
(86, 'Marina Collier', '', 1, 'Aral Pan', '2018-2019', 'w7', 1),
(87, 'Isaac Mckinney', '', 1, 'Aral Pan', '2018-2019', 'w7', 1),
(88, 'Haroon Leon', '', 1, 'Aral Pan', '2018-2019', 'w7', 1),
(89, 'Beatrice Beltran', '', 1, 'Aral Pan', '2018-2019', 'w7', 1),
(90, 'Riccardo Malone', '', 1, 'Aral Pan', '2018-2019', 'w7', 1),
(91, 'Nikolas Plant', '', 1, 'Aral Pan', '2018-2019', 'w7', 1),
(92, 'Dilan Larson', '', 1, 'Aral Pan', '2018-2019', 'w7', 1),
(93, 'Jacque Cooley', '', 1, 'Aral Pan', '2018-2019', 'w8', 1),
(94, 'Marina Collier', '', 1, 'Aral Pan', '2018-2019', 'w8', 1),
(95, 'Isaac Mckinney', '', 1, 'Aral Pan', '2018-2019', 'w8', 1),
(96, 'Haroon Leon', '', 1, 'Aral Pan', '2018-2019', 'w8', 1),
(97, 'Beatrice Beltran', '', 1, 'Aral Pan', '2018-2019', 'w8', 1),
(98, 'Riccardo Malone', '', 1, 'Aral Pan', '2018-2019', 'w8', 1),
(99, 'Nikolas Plant', '', 1, 'Aral Pan', '2018-2019', 'w8', 1),
(100, 'Dilan Larson', '', 1, 'Aral Pan', '2018-2019', 'w8', 1),
(101, 'Jacque Cooley', '', 1, 'Aral Pan', '2018-2019', 'w9', 1),
(102, 'Marina Collier', '', 1, 'Aral Pan', '2018-2019', 'w9', 1),
(103, 'Isaac Mckinney', '', 1, 'Aral Pan', '2018-2019', 'w9', 1),
(104, 'Haroon Leon', '', 1, 'Aral Pan', '2018-2019', 'w9', 1),
(105, 'Beatrice Beltran', '', 1, 'Aral Pan', '2018-2019', 'w9', 1),
(106, 'Riccardo Malone', '', 1, 'Aral Pan', '2018-2019', 'w9', 1),
(107, 'Nikolas Plant', '', 1, 'Aral Pan', '2018-2019', 'w9', 1),
(108, 'Dilan Larson', '', 1, 'Aral Pan', '2018-2019', 'w9', 1),
(109, 'Jacque Cooley', '', 1, 'Aral Pan', '2018-2019', 'w10', 1),
(110, 'Marina Collier', '', 1, 'Aral Pan', '2018-2019', 'w10', 1),
(111, 'Isaac Mckinney', '', 1, 'Aral Pan', '2018-2019', 'w10', 1),
(112, 'Haroon Leon', '', 1, 'Aral Pan', '2018-2019', 'w10', 1),
(113, 'Beatrice Beltran', '', 1, 'Aral Pan', '2018-2019', 'w10', 1),
(114, 'Riccardo Malone', '', 1, 'Aral Pan', '2018-2019', 'w10', 1),
(115, 'Nikolas Plant', '', 1, 'Aral Pan', '2018-2019', 'w10', 1),
(116, 'Dilan Larson', '', 1, 'Aral Pan', '2018-2019', 'w10', 1),
(117, 'Jacque Cooley', '8', 1, 'Aral Pan', '2018-2019', 'qa1', 1),
(118, 'Marina Collier', '', 1, 'Aral Pan', '2018-2019', 'qa1', 1),
(119, 'Isaac Mckinney', '', 1, 'Aral Pan', '2018-2019', 'qa1', 1),
(120, 'Haroon Leon', '', 1, 'Aral Pan', '2018-2019', 'qa1', 1),
(121, 'Beatrice Beltran', '', 1, 'Aral Pan', '2018-2019', 'qa1', 1),
(122, 'Riccardo Malone', '', 1, 'Aral Pan', '2018-2019', 'qa1', 1),
(123, 'Nikolas Plant', '', 1, 'Aral Pan', '2018-2019', 'qa1', 1),
(124, 'Dilan Larson', '', 1, 'Aral Pan', '2018-2019', 'qa1', 1),
(125, 'Bethanie Cox', '10', 1, 'Aral Pan', '2018-2019', 'gw1', 1),
(126, 'Elwood Samuels', '', 1, 'Aral Pan', '2018-2019', 'gw1', 1),
(127, 'Damian Conrad', '', 1, 'Aral Pan', '2018-2019', 'gw1', 1),
(128, 'Eshaan Hines', '', 1, 'Aral Pan', '2018-2019', 'gw1', 1),
(129, 'Eileen Pate', '', 1, 'Aral Pan', '2018-2019', 'gw1', 1),
(130, 'Anisha Sanders', '', 1, 'Aral Pan', '2018-2019', 'gw1', 1),
(131, 'Ronny Whitaker', '', 1, 'Aral Pan', '2018-2019', 'gw1', 1),
(132, 'Tayla Plummer', '', 1, 'Aral Pan', '2018-2019', 'gw1', 1),
(133, 'Sufyan Pierce', '', 1, 'Aral Pan', '2018-2019', 'gw1', 1),
(134, 'Leoni Mcdowell', '', 1, 'Aral Pan', '2018-2019', 'gw1', 1),
(135, 'Bethanie Cox', '', 1, 'Aral Pan', '2018-2019', 'gw2', 1),
(136, 'Elwood Samuels', '', 1, 'Aral Pan', '2018-2019', 'gw2', 1),
(137, 'Damian Conrad', '', 1, 'Aral Pan', '2018-2019', 'gw2', 1),
(138, 'Eshaan Hines', '', 1, 'Aral Pan', '2018-2019', 'gw2', 1),
(139, 'Eileen Pate', '', 1, 'Aral Pan', '2018-2019', 'gw2', 1),
(140, 'Anisha Sanders', '', 1, 'Aral Pan', '2018-2019', 'gw2', 1),
(141, 'Ronny Whitaker', '', 1, 'Aral Pan', '2018-2019', 'gw2', 1),
(142, 'Tayla Plummer', '', 1, 'Aral Pan', '2018-2019', 'gw2', 1),
(143, 'Sufyan Pierce', '', 1, 'Aral Pan', '2018-2019', 'gw2', 1),
(144, 'Leoni Mcdowell', '', 1, 'Aral Pan', '2018-2019', 'gw2', 1),
(145, 'Bethanie Cox', '', 1, 'Aral Pan', '2018-2019', 'gw3', 1),
(146, 'Elwood Samuels', '', 1, 'Aral Pan', '2018-2019', 'gw3', 1),
(147, 'Damian Conrad', '', 1, 'Aral Pan', '2018-2019', 'gw3', 1),
(148, 'Eshaan Hines', '', 1, 'Aral Pan', '2018-2019', 'gw3', 1),
(149, 'Eileen Pate', '', 1, 'Aral Pan', '2018-2019', 'gw3', 1),
(150, 'Anisha Sanders', '', 1, 'Aral Pan', '2018-2019', 'gw3', 1),
(151, 'Ronny Whitaker', '', 1, 'Aral Pan', '2018-2019', 'gw3', 1),
(152, 'Tayla Plummer', '', 1, 'Aral Pan', '2018-2019', 'gw3', 1),
(153, 'Sufyan Pierce', '', 1, 'Aral Pan', '2018-2019', 'gw3', 1),
(154, 'Leoni Mcdowell', '', 1, 'Aral Pan', '2018-2019', 'gw3', 1),
(155, 'Bethanie Cox', '', 1, 'Aral Pan', '2018-2019', 'gw4', 1),
(156, 'Elwood Samuels', '', 1, 'Aral Pan', '2018-2019', 'gw4', 1),
(157, 'Damian Conrad', '', 1, 'Aral Pan', '2018-2019', 'gw4', 1),
(158, 'Eshaan Hines', '', 1, 'Aral Pan', '2018-2019', 'gw4', 1),
(159, 'Eileen Pate', '', 1, 'Aral Pan', '2018-2019', 'gw4', 1),
(160, 'Anisha Sanders', '', 1, 'Aral Pan', '2018-2019', 'gw4', 1),
(161, 'Ronny Whitaker', '', 1, 'Aral Pan', '2018-2019', 'gw4', 1),
(162, 'Tayla Plummer', '', 1, 'Aral Pan', '2018-2019', 'gw4', 1),
(163, 'Sufyan Pierce', '', 1, 'Aral Pan', '2018-2019', 'gw4', 1),
(164, 'Leoni Mcdowell', '', 1, 'Aral Pan', '2018-2019', 'gw4', 1),
(165, 'Bethanie Cox', '', 1, 'Aral Pan', '2018-2019', 'gw5', 1),
(166, 'Elwood Samuels', '', 1, 'Aral Pan', '2018-2019', 'gw5', 1),
(167, 'Damian Conrad', '', 1, 'Aral Pan', '2018-2019', 'gw5', 1),
(168, 'Eshaan Hines', '', 1, 'Aral Pan', '2018-2019', 'gw5', 1),
(169, 'Eileen Pate', '', 1, 'Aral Pan', '2018-2019', 'gw5', 1),
(170, 'Anisha Sanders', '', 1, 'Aral Pan', '2018-2019', 'gw5', 1),
(171, 'Ronny Whitaker', '', 1, 'Aral Pan', '2018-2019', 'gw5', 1),
(172, 'Tayla Plummer', '', 1, 'Aral Pan', '2018-2019', 'gw5', 1),
(173, 'Sufyan Pierce', '', 1, 'Aral Pan', '2018-2019', 'gw5', 1),
(174, 'Leoni Mcdowell', '', 1, 'Aral Pan', '2018-2019', 'gw5', 1),
(175, 'Bethanie Cox', '', 1, 'Aral Pan', '2018-2019', 'gw6', 1),
(176, 'Elwood Samuels', '', 1, 'Aral Pan', '2018-2019', 'gw6', 1),
(177, 'Damian Conrad', '', 1, 'Aral Pan', '2018-2019', 'gw6', 1),
(178, 'Eshaan Hines', '', 1, 'Aral Pan', '2018-2019', 'gw6', 1),
(179, 'Eileen Pate', '', 1, 'Aral Pan', '2018-2019', 'gw6', 1),
(180, 'Anisha Sanders', '', 1, 'Aral Pan', '2018-2019', 'gw6', 1),
(181, 'Ronny Whitaker', '', 1, 'Aral Pan', '2018-2019', 'gw6', 1),
(182, 'Tayla Plummer', '', 1, 'Aral Pan', '2018-2019', 'gw6', 1),
(183, 'Sufyan Pierce', '', 1, 'Aral Pan', '2018-2019', 'gw6', 1),
(184, 'Leoni Mcdowell', '', 1, 'Aral Pan', '2018-2019', 'gw6', 1),
(185, 'Bethanie Cox', '', 1, 'Aral Pan', '2018-2019', 'gw7', 1),
(186, 'Elwood Samuels', '', 1, 'Aral Pan', '2018-2019', 'gw7', 1),
(187, 'Damian Conrad', '', 1, 'Aral Pan', '2018-2019', 'gw7', 1),
(188, 'Eshaan Hines', '', 1, 'Aral Pan', '2018-2019', 'gw7', 1),
(189, 'Eileen Pate', '', 1, 'Aral Pan', '2018-2019', 'gw7', 1),
(190, 'Anisha Sanders', '', 1, 'Aral Pan', '2018-2019', 'gw7', 1),
(191, 'Ronny Whitaker', '', 1, 'Aral Pan', '2018-2019', 'gw7', 1),
(192, 'Tayla Plummer', '', 1, 'Aral Pan', '2018-2019', 'gw7', 1),
(193, 'Sufyan Pierce', '', 1, 'Aral Pan', '2018-2019', 'gw7', 1),
(194, 'Leoni Mcdowell', '', 1, 'Aral Pan', '2018-2019', 'gw7', 1),
(195, 'Bethanie Cox', '', 1, 'Aral Pan', '2018-2019', 'gw8', 1),
(196, 'Elwood Samuels', '', 1, 'Aral Pan', '2018-2019', 'gw8', 1),
(197, 'Damian Conrad', '', 1, 'Aral Pan', '2018-2019', 'gw8', 1),
(198, 'Eshaan Hines', '', 1, 'Aral Pan', '2018-2019', 'gw8', 1),
(199, 'Eileen Pate', '', 1, 'Aral Pan', '2018-2019', 'gw8', 1),
(200, 'Anisha Sanders', '', 1, 'Aral Pan', '2018-2019', 'gw8', 1),
(201, 'Ronny Whitaker', '', 1, 'Aral Pan', '2018-2019', 'gw8', 1),
(202, 'Tayla Plummer', '', 1, 'Aral Pan', '2018-2019', 'gw8', 1),
(203, 'Sufyan Pierce', '', 1, 'Aral Pan', '2018-2019', 'gw8', 1),
(204, 'Leoni Mcdowell', '', 1, 'Aral Pan', '2018-2019', 'gw8', 1),
(205, 'Bethanie Cox', '', 1, 'Aral Pan', '2018-2019', 'gw9', 1),
(206, 'Elwood Samuels', '', 1, 'Aral Pan', '2018-2019', 'gw9', 1),
(207, 'Damian Conrad', '', 1, 'Aral Pan', '2018-2019', 'gw9', 1),
(208, 'Eshaan Hines', '', 1, 'Aral Pan', '2018-2019', 'gw9', 1),
(209, 'Eileen Pate', '', 1, 'Aral Pan', '2018-2019', 'gw9', 1),
(210, 'Anisha Sanders', '', 1, 'Aral Pan', '2018-2019', 'gw9', 1),
(211, 'Ronny Whitaker', '', 1, 'Aral Pan', '2018-2019', 'gw9', 1),
(212, 'Tayla Plummer', '', 1, 'Aral Pan', '2018-2019', 'gw9', 1),
(213, 'Sufyan Pierce', '', 1, 'Aral Pan', '2018-2019', 'gw9', 1),
(214, 'Leoni Mcdowell', '', 1, 'Aral Pan', '2018-2019', 'gw9', 1),
(215, 'Bethanie Cox', '', 1, 'Aral Pan', '2018-2019', 'gw10', 1),
(216, 'Elwood Samuels', '', 1, 'Aral Pan', '2018-2019', 'gw10', 1),
(217, 'Damian Conrad', '', 1, 'Aral Pan', '2018-2019', 'gw10', 1),
(218, 'Eshaan Hines', '', 1, 'Aral Pan', '2018-2019', 'gw10', 1),
(219, 'Eileen Pate', '', 1, 'Aral Pan', '2018-2019', 'gw10', 1),
(220, 'Anisha Sanders', '', 1, 'Aral Pan', '2018-2019', 'gw10', 1),
(221, 'Ronny Whitaker', '', 1, 'Aral Pan', '2018-2019', 'gw10', 1),
(222, 'Tayla Plummer', '', 1, 'Aral Pan', '2018-2019', 'gw10', 1),
(223, 'Sufyan Pierce', '', 1, 'Aral Pan', '2018-2019', 'gw10', 1),
(224, 'Leoni Mcdowell', '', 1, 'Aral Pan', '2018-2019', 'gw10', 1),
(225, 'Bethanie Cox', '7', 1, 'Aral Pan', '2018-2019', 'gqa1', 1),
(226, 'Elwood Samuels', '', 1, 'Aral Pan', '2018-2019', 'gqa1', 1),
(227, 'Damian Conrad', '', 1, 'Aral Pan', '2018-2019', 'gqa1', 1),
(228, 'Eshaan Hines', '', 1, 'Aral Pan', '2018-2019', 'gqa1', 1),
(229, 'Eileen Pate', '', 1, 'Aral Pan', '2018-2019', 'gqa1', 1),
(230, 'Anisha Sanders', '', 1, 'Aral Pan', '2018-2019', 'gqa1', 1),
(231, 'Ronny Whitaker', '', 1, 'Aral Pan', '2018-2019', 'gqa1', 1),
(232, 'Tayla Plummer', '', 1, 'Aral Pan', '2018-2019', 'gqa1', 1),
(233, 'Sufyan Pierce', '', 1, 'Aral Pan', '2018-2019', 'gqa1', 1),
(234, 'Leoni Mcdowell', '', 1, 'Aral Pan', '2018-2019', 'gqa1', 1),
(235, 'Jacque Cooley', '8', 1, 'Aral Pan', '2018-2019', 'pt1', 1),
(236, 'Marina Collier', '', 1, 'Aral Pan', '2018-2019', 'pt1', 1),
(237, 'Isaac Mckinney', '', 1, 'Aral Pan', '2018-2019', 'pt1', 1),
(238, 'Haroon Leon', '', 1, 'Aral Pan', '2018-2019', 'pt1', 1),
(239, 'Beatrice Beltran', '', 1, 'Aral Pan', '2018-2019', 'pt1', 1),
(240, 'Riccardo Malone', '', 1, 'Aral Pan', '2018-2019', 'pt1', 1),
(241, 'Nikolas Plant', '', 1, 'Aral Pan', '2018-2019', 'pt1', 1),
(242, 'Dilan Larson', '', 1, 'Aral Pan', '2018-2019', 'pt1', 1),
(243, 'Jacque Cooley', '', 1, 'Aral Pan', '2018-2019', 'pt2', 1),
(244, 'Marina Collier', '', 1, 'Aral Pan', '2018-2019', 'pt2', 1),
(245, 'Isaac Mckinney', '', 1, 'Aral Pan', '2018-2019', 'pt2', 1),
(246, 'Haroon Leon', '', 1, 'Aral Pan', '2018-2019', 'pt2', 1),
(247, 'Beatrice Beltran', '', 1, 'Aral Pan', '2018-2019', 'pt2', 1),
(248, 'Riccardo Malone', '', 1, 'Aral Pan', '2018-2019', 'pt2', 1),
(249, 'Nikolas Plant', '', 1, 'Aral Pan', '2018-2019', 'pt2', 1),
(250, 'Dilan Larson', '', 1, 'Aral Pan', '2018-2019', 'pt2', 1),
(251, 'Jacque Cooley', '', 1, 'Aral Pan', '2018-2019', 'pt3', 1),
(252, 'Marina Collier', '', 1, 'Aral Pan', '2018-2019', 'pt3', 1),
(253, 'Isaac Mckinney', '', 1, 'Aral Pan', '2018-2019', 'pt3', 1),
(254, 'Haroon Leon', '', 1, 'Aral Pan', '2018-2019', 'pt3', 1),
(255, 'Beatrice Beltran', '', 1, 'Aral Pan', '2018-2019', 'pt3', 1),
(256, 'Riccardo Malone', '', 1, 'Aral Pan', '2018-2019', 'pt3', 1),
(257, 'Nikolas Plant', '', 1, 'Aral Pan', '2018-2019', 'pt3', 1),
(258, 'Dilan Larson', '', 1, 'Aral Pan', '2018-2019', 'pt3', 1),
(259, 'Jacque Cooley', '', 1, 'Aral Pan', '2018-2019', 'pt4', 1),
(260, 'Marina Collier', '', 1, 'Aral Pan', '2018-2019', 'pt4', 1),
(261, 'Isaac Mckinney', '', 1, 'Aral Pan', '2018-2019', 'pt4', 1),
(262, 'Haroon Leon', '', 1, 'Aral Pan', '2018-2019', 'pt4', 1),
(263, 'Beatrice Beltran', '', 1, 'Aral Pan', '2018-2019', 'pt4', 1),
(264, 'Riccardo Malone', '', 1, 'Aral Pan', '2018-2019', 'pt4', 1),
(265, 'Nikolas Plant', '', 1, 'Aral Pan', '2018-2019', 'pt4', 1),
(266, 'Dilan Larson', '', 1, 'Aral Pan', '2018-2019', 'pt4', 1),
(267, 'Jacque Cooley', '', 1, 'Aral Pan', '2018-2019', 'pt5', 1),
(268, 'Marina Collier', '', 1, 'Aral Pan', '2018-2019', 'pt5', 1),
(269, 'Isaac Mckinney', '', 1, 'Aral Pan', '2018-2019', 'pt5', 1),
(270, 'Haroon Leon', '', 1, 'Aral Pan', '2018-2019', 'pt5', 1),
(271, 'Beatrice Beltran', '', 1, 'Aral Pan', '2018-2019', 'pt5', 1),
(272, 'Riccardo Malone', '', 1, 'Aral Pan', '2018-2019', 'pt5', 1),
(273, 'Nikolas Plant', '', 1, 'Aral Pan', '2018-2019', 'pt5', 1),
(274, 'Dilan Larson', '', 1, 'Aral Pan', '2018-2019', 'pt5', 1),
(275, 'Jacque Cooley', '', 1, 'Aral Pan', '2018-2019', 'pt6', 1),
(276, 'Marina Collier', '', 1, 'Aral Pan', '2018-2019', 'pt6', 1),
(277, 'Isaac Mckinney', '', 1, 'Aral Pan', '2018-2019', 'pt6', 1),
(278, 'Haroon Leon', '', 1, 'Aral Pan', '2018-2019', 'pt6', 1),
(279, 'Beatrice Beltran', '', 1, 'Aral Pan', '2018-2019', 'pt6', 1),
(280, 'Riccardo Malone', '', 1, 'Aral Pan', '2018-2019', 'pt6', 1),
(281, 'Nikolas Plant', '', 1, 'Aral Pan', '2018-2019', 'pt6', 1),
(282, 'Dilan Larson', '', 1, 'Aral Pan', '2018-2019', 'pt6', 1),
(283, 'Jacque Cooley', '', 1, 'Aral Pan', '2018-2019', 'pt7', 1),
(284, 'Marina Collier', '', 1, 'Aral Pan', '2018-2019', 'pt7', 1),
(285, 'Isaac Mckinney', '', 1, 'Aral Pan', '2018-2019', 'pt7', 1),
(286, 'Haroon Leon', '', 1, 'Aral Pan', '2018-2019', 'pt7', 1),
(287, 'Beatrice Beltran', '', 1, 'Aral Pan', '2018-2019', 'pt7', 1),
(288, 'Riccardo Malone', '', 1, 'Aral Pan', '2018-2019', 'pt7', 1),
(289, 'Nikolas Plant', '', 1, 'Aral Pan', '2018-2019', 'pt7', 1),
(290, 'Dilan Larson', '', 1, 'Aral Pan', '2018-2019', 'pt7', 1),
(291, 'Jacque Cooley', '', 1, 'Aral Pan', '2018-2019', 'pt8', 1),
(292, 'Marina Collier', '', 1, 'Aral Pan', '2018-2019', 'pt8', 1),
(293, 'Isaac Mckinney', '', 1, 'Aral Pan', '2018-2019', 'pt8', 1),
(294, 'Haroon Leon', '', 1, 'Aral Pan', '2018-2019', 'pt8', 1),
(295, 'Beatrice Beltran', '', 1, 'Aral Pan', '2018-2019', 'pt8', 1),
(296, 'Riccardo Malone', '', 1, 'Aral Pan', '2018-2019', 'pt8', 1),
(297, 'Nikolas Plant', '', 1, 'Aral Pan', '2018-2019', 'pt8', 1),
(298, 'Dilan Larson', '', 1, 'Aral Pan', '2018-2019', 'pt8', 1),
(299, 'Jacque Cooley', '', 1, 'Aral Pan', '2018-2019', 'pt9', 1),
(300, 'Marina Collier', '', 1, 'Aral Pan', '2018-2019', 'pt9', 1),
(301, 'Isaac Mckinney', '', 1, 'Aral Pan', '2018-2019', 'pt9', 1),
(302, 'Haroon Leon', '', 1, 'Aral Pan', '2018-2019', 'pt9', 1),
(303, 'Beatrice Beltran', '', 1, 'Aral Pan', '2018-2019', 'pt9', 1),
(304, 'Riccardo Malone', '', 1, 'Aral Pan', '2018-2019', 'pt9', 1),
(305, 'Nikolas Plant', '', 1, 'Aral Pan', '2018-2019', 'pt9', 1),
(306, 'Dilan Larson', '', 1, 'Aral Pan', '2018-2019', 'pt9', 1),
(307, 'Jacque Cooley', '', 1, 'Aral Pan', '2018-2019', 'pt10', 1),
(308, 'Marina Collier', '', 1, 'Aral Pan', '2018-2019', 'pt10', 1),
(309, 'Isaac Mckinney', '', 1, 'Aral Pan', '2018-2019', 'pt10', 1),
(310, 'Haroon Leon', '', 1, 'Aral Pan', '2018-2019', 'pt10', 1),
(311, 'Beatrice Beltran', '', 1, 'Aral Pan', '2018-2019', 'pt10', 1),
(312, 'Riccardo Malone', '', 1, 'Aral Pan', '2018-2019', 'pt10', 1),
(313, 'Nikolas Plant', '', 1, 'Aral Pan', '2018-2019', 'pt10', 1),
(314, 'Dilan Larson', '', 1, 'Aral Pan', '2018-2019', 'pt10', 1),
(315, 'Bethanie Cox', '9', 1, 'Aral Pan', '2018-2019', 'gpt1', 1),
(316, 'Elwood Samuels', '', 1, 'Aral Pan', '2018-2019', 'gpt1', 1),
(317, 'Damian Conrad', '', 1, 'Aral Pan', '2018-2019', 'gpt1', 1),
(318, 'Eshaan Hines', '', 1, 'Aral Pan', '2018-2019', 'gpt1', 1),
(319, 'Eileen Pate', '', 1, 'Aral Pan', '2018-2019', 'gpt1', 1),
(320, 'Anisha Sanders', '', 1, 'Aral Pan', '2018-2019', 'gpt1', 1),
(321, 'Ronny Whitaker', '', 1, 'Aral Pan', '2018-2019', 'gpt1', 1),
(322, 'Tayla Plummer', '', 1, 'Aral Pan', '2018-2019', 'gpt1', 1),
(323, 'Sufyan Pierce', '', 1, 'Aral Pan', '2018-2019', 'gpt1', 1),
(324, 'Leoni Mcdowell', '', 1, 'Aral Pan', '2018-2019', 'gpt1', 1),
(325, 'Bethanie Cox', '', 1, 'Aral Pan', '2018-2019', 'gpt2', 1),
(326, 'Elwood Samuels', '', 1, 'Aral Pan', '2018-2019', 'gpt2', 1),
(327, 'Damian Conrad', '', 1, 'Aral Pan', '2018-2019', 'gpt2', 1),
(328, 'Eshaan Hines', '', 1, 'Aral Pan', '2018-2019', 'gpt2', 1),
(329, 'Eileen Pate', '', 1, 'Aral Pan', '2018-2019', 'gpt2', 1),
(330, 'Anisha Sanders', '', 1, 'Aral Pan', '2018-2019', 'gpt2', 1),
(331, 'Ronny Whitaker', '', 1, 'Aral Pan', '2018-2019', 'gpt2', 1),
(332, 'Tayla Plummer', '', 1, 'Aral Pan', '2018-2019', 'gpt2', 1),
(333, 'Sufyan Pierce', '', 1, 'Aral Pan', '2018-2019', 'gpt2', 1),
(334, 'Leoni Mcdowell', '', 1, 'Aral Pan', '2018-2019', 'gpt2', 1),
(335, 'Bethanie Cox', '', 1, 'Aral Pan', '2018-2019', 'gpt3', 1),
(336, 'Elwood Samuels', '', 1, 'Aral Pan', '2018-2019', 'gpt3', 1),
(337, 'Damian Conrad', '', 1, 'Aral Pan', '2018-2019', 'gpt3', 1),
(338, 'Eshaan Hines', '', 1, 'Aral Pan', '2018-2019', 'gpt3', 1),
(339, 'Eileen Pate', '', 1, 'Aral Pan', '2018-2019', 'gpt3', 1),
(340, 'Anisha Sanders', '', 1, 'Aral Pan', '2018-2019', 'gpt3', 1),
(341, 'Ronny Whitaker', '', 1, 'Aral Pan', '2018-2019', 'gpt3', 1),
(342, 'Tayla Plummer', '', 1, 'Aral Pan', '2018-2019', 'gpt3', 1),
(343, 'Sufyan Pierce', '', 1, 'Aral Pan', '2018-2019', 'gpt3', 1),
(344, 'Leoni Mcdowell', '', 1, 'Aral Pan', '2018-2019', 'gpt3', 1),
(345, 'Bethanie Cox', '', 1, 'Aral Pan', '2018-2019', 'gpt4', 1),
(346, 'Elwood Samuels', '', 1, 'Aral Pan', '2018-2019', 'gpt4', 1),
(347, 'Damian Conrad', '', 1, 'Aral Pan', '2018-2019', 'gpt4', 1),
(348, 'Eshaan Hines', '', 1, 'Aral Pan', '2018-2019', 'gpt4', 1),
(349, 'Eileen Pate', '', 1, 'Aral Pan', '2018-2019', 'gpt4', 1),
(350, 'Anisha Sanders', '', 1, 'Aral Pan', '2018-2019', 'gpt4', 1),
(351, 'Ronny Whitaker', '', 1, 'Aral Pan', '2018-2019', 'gpt4', 1),
(352, 'Tayla Plummer', '', 1, 'Aral Pan', '2018-2019', 'gpt4', 1),
(353, 'Sufyan Pierce', '', 1, 'Aral Pan', '2018-2019', 'gpt4', 1),
(354, 'Leoni Mcdowell', '', 1, 'Aral Pan', '2018-2019', 'gpt4', 1),
(355, 'Bethanie Cox', '', 1, 'Aral Pan', '2018-2019', 'gpt5', 1),
(356, 'Elwood Samuels', '', 1, 'Aral Pan', '2018-2019', 'gpt5', 1),
(357, 'Damian Conrad', '', 1, 'Aral Pan', '2018-2019', 'gpt5', 1),
(358, 'Eshaan Hines', '', 1, 'Aral Pan', '2018-2019', 'gpt5', 1),
(359, 'Eileen Pate', '', 1, 'Aral Pan', '2018-2019', 'gpt5', 1),
(360, 'Anisha Sanders', '', 1, 'Aral Pan', '2018-2019', 'gpt5', 1),
(361, 'Ronny Whitaker', '', 1, 'Aral Pan', '2018-2019', 'gpt5', 1),
(362, 'Tayla Plummer', '', 1, 'Aral Pan', '2018-2019', 'gpt5', 1),
(363, 'Sufyan Pierce', '', 1, 'Aral Pan', '2018-2019', 'gpt5', 1),
(364, 'Leoni Mcdowell', '', 1, 'Aral Pan', '2018-2019', 'gpt5', 1),
(365, 'Bethanie Cox', '', 1, 'Aral Pan', '2018-2019', 'gpt6', 1),
(366, 'Elwood Samuels', '', 1, 'Aral Pan', '2018-2019', 'gpt6', 1),
(367, 'Damian Conrad', '', 1, 'Aral Pan', '2018-2019', 'gpt6', 1),
(368, 'Eshaan Hines', '', 1, 'Aral Pan', '2018-2019', 'gpt6', 1),
(369, 'Eileen Pate', '', 1, 'Aral Pan', '2018-2019', 'gpt6', 1),
(370, 'Anisha Sanders', '', 1, 'Aral Pan', '2018-2019', 'gpt6', 1),
(371, 'Ronny Whitaker', '', 1, 'Aral Pan', '2018-2019', 'gpt6', 1),
(372, 'Tayla Plummer', '', 1, 'Aral Pan', '2018-2019', 'gpt6', 1),
(373, 'Sufyan Pierce', '', 1, 'Aral Pan', '2018-2019', 'gpt6', 1),
(374, 'Leoni Mcdowell', '', 1, 'Aral Pan', '2018-2019', 'gpt6', 1),
(375, 'Bethanie Cox', '', 1, 'Aral Pan', '2018-2019', 'gpt7', 1),
(376, 'Elwood Samuels', '', 1, 'Aral Pan', '2018-2019', 'gpt7', 1),
(377, 'Damian Conrad', '', 1, 'Aral Pan', '2018-2019', 'gpt7', 1),
(378, 'Eshaan Hines', '', 1, 'Aral Pan', '2018-2019', 'gpt7', 1),
(379, 'Eileen Pate', '', 1, 'Aral Pan', '2018-2019', 'gpt7', 1),
(380, 'Anisha Sanders', '', 1, 'Aral Pan', '2018-2019', 'gpt7', 1),
(381, 'Ronny Whitaker', '', 1, 'Aral Pan', '2018-2019', 'gpt7', 1),
(382, 'Tayla Plummer', '', 1, 'Aral Pan', '2018-2019', 'gpt7', 1),
(383, 'Sufyan Pierce', '', 1, 'Aral Pan', '2018-2019', 'gpt7', 1),
(384, 'Leoni Mcdowell', '', 1, 'Aral Pan', '2018-2019', 'gpt7', 1),
(385, 'Bethanie Cox', '', 1, 'Aral Pan', '2018-2019', 'gpt8', 1),
(386, 'Elwood Samuels', '', 1, 'Aral Pan', '2018-2019', 'gpt8', 1),
(387, 'Damian Conrad', '', 1, 'Aral Pan', '2018-2019', 'gpt8', 1),
(388, 'Eshaan Hines', '', 1, 'Aral Pan', '2018-2019', 'gpt8', 1),
(389, 'Eileen Pate', '', 1, 'Aral Pan', '2018-2019', 'gpt8', 1),
(390, 'Anisha Sanders', '', 1, 'Aral Pan', '2018-2019', 'gpt8', 1),
(391, 'Ronny Whitaker', '', 1, 'Aral Pan', '2018-2019', 'gpt8', 1),
(392, 'Tayla Plummer', '', 1, 'Aral Pan', '2018-2019', 'gpt8', 1),
(393, 'Sufyan Pierce', '', 1, 'Aral Pan', '2018-2019', 'gpt8', 1),
(394, 'Leoni Mcdowell', '', 1, 'Aral Pan', '2018-2019', 'gpt8', 1),
(395, 'Bethanie Cox', '', 1, 'Aral Pan', '2018-2019', 'gpt9', 1),
(396, 'Elwood Samuels', '', 1, 'Aral Pan', '2018-2019', 'gpt9', 1),
(397, 'Damian Conrad', '', 1, 'Aral Pan', '2018-2019', 'gpt9', 1),
(398, 'Eshaan Hines', '', 1, 'Aral Pan', '2018-2019', 'gpt9', 1),
(399, 'Eileen Pate', '', 1, 'Aral Pan', '2018-2019', 'gpt9', 1),
(400, 'Anisha Sanders', '', 1, 'Aral Pan', '2018-2019', 'gpt9', 1),
(401, 'Ronny Whitaker', '', 1, 'Aral Pan', '2018-2019', 'gpt9', 1),
(402, 'Tayla Plummer', '', 1, 'Aral Pan', '2018-2019', 'gpt9', 1),
(403, 'Sufyan Pierce', '', 1, 'Aral Pan', '2018-2019', 'gpt9', 1),
(404, 'Leoni Mcdowell', '', 1, 'Aral Pan', '2018-2019', 'gpt9', 1),
(405, 'Bethanie Cox', '', 1, 'Aral Pan', '2018-2019', 'gpt10', 1),
(406, 'Elwood Samuels', '', 1, 'Aral Pan', '2018-2019', 'gpt10', 1),
(407, 'Damian Conrad', '', 1, 'Aral Pan', '2018-2019', 'gpt10', 1),
(408, 'Eshaan Hines', '', 1, 'Aral Pan', '2018-2019', 'gpt10', 1),
(409, 'Eileen Pate', '', 1, 'Aral Pan', '2018-2019', 'gpt10', 1),
(410, 'Anisha Sanders', '', 1, 'Aral Pan', '2018-2019', 'gpt10', 1),
(411, 'Ronny Whitaker', '', 1, 'Aral Pan', '2018-2019', 'gpt10', 1),
(412, 'Tayla Plummer', '', 1, 'Aral Pan', '2018-2019', 'gpt10', 1),
(413, 'Sufyan Pierce', '', 1, 'Aral Pan', '2018-2019', 'gpt10', 1),
(414, 'Leoni Mcdowell', '', 1, 'Aral Pan', '2018-2019', 'gpt10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `writtenworks`
--

CREATE TABLE `writtenworks` (
  `entry_id` int(10) NOT NULL,
  `highest_score` varchar(10) NOT NULL,
  `number` varchar(10) NOT NULL,
  `teacher_id` varchar(10) NOT NULL,
  `subject_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `writtenworks`
--

INSERT INTO `writtenworks` (`entry_id`, `highest_score`, `number`, `teacher_id`, `subject_name`) VALUES
(11, '10', '1', '1', 'Math');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classrecord`
--
ALTER TABLE `classrecord`
  ADD PRIMARY KEY (`id_entry`);

--
-- Indexes for table `enrollstudent`
--
ALTER TABLE `enrollstudent`
  ADD PRIMARY KEY (`enroll_id`);

--
-- Indexes for table `highestpossiblescores`
--
ALTER TABLE `highestpossiblescores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schoolyear`
--
ALTER TABLE `schoolyear`
  ADD PRIMARY KEY (`entry_id`);

--
-- Indexes for table `sub_assign`
--
ALTER TABLE `sub_assign`
  ADD PRIMARY KEY (`assign_id`);

--
-- Indexes for table `tblprincipal`
--
ALTER TABLE `tblprincipal`
  ADD PRIMARY KEY (`principal_id`);

--
-- Indexes for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `tblteacher`
--
ALTER TABLE `tblteacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`register_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `writtenworks`
--
ALTER TABLE `writtenworks`
  ADD PRIMARY KEY (`entry_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classrecord`
--
ALTER TABLE `classrecord`
  MODIFY `id_entry` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `enrollstudent`
--
ALTER TABLE `enrollstudent`
  MODIFY `enroll_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `highestpossiblescores`
--
ALTER TABLE `highestpossiblescores`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `schoolyear`
--
ALTER TABLE `schoolyear`
  MODIFY `entry_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sub_assign`
--
ALTER TABLE `sub_assign`
  MODIFY `assign_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `tblprincipal`
--
ALTER TABLE `tblprincipal`
  MODIFY `principal_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  MODIFY `subject_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblteacher`
--
ALTER TABLE `tblteacher`
  MODIFY `teacher_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `register_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=415;

--
-- AUTO_INCREMENT for table `writtenworks`
--
ALTER TABLE `writtenworks`
  MODIFY `entry_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
