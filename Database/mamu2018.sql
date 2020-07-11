-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2018 at 09:50 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mamu2018`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accounts`
--

CREATE TABLE `tbl_accounts` (
  `id` int(11) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_accounts`
--

INSERT INTO `tbl_accounts` (`id`, `type`, `name`, `username`, `password`) VALUES
(1, 0, 'Paolo Cse', 'cse', '@r01nt17'),
(2, 0, 'Warren d', 'dvyra', 'dvyra'),
(22, 1, 'Ms. Ginny Garcia', 'Judge2', 'MAMU2019'),
(24, 1, 'Mr. Carlo Salaya', 'Judge1', 'MAMU2019'),
(25, 1, 'Mr. Chester Hans Tolentino', 'judge3', 'MAMU2019'),
(26, 1, 'Ms. Yen Lopena Padlan', 'Judge4', 'MAMU2019'),
(27, 1, 'Mr. Ian Dexter Labajoy', 'Judge5', 'MAMU2019'),
(28, 1, 'Mr. Nathan De Leon', 'Judge6', 'MAMU2019'),
(29, 1, 'Judge 7', 'Judge7', 'MAMU2019'),
(30, 1, 'Judge 8', 'Judge8', 'MAMU2019'),
(31, 1, 'Judge 9', 'Judge9', 'MAMU2019'),
(32, 1, 'Judge 10', 'Judge10', 'MAMU2019');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_candidates`
--

CREATE TABLE `tbl_candidates` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `candidate_number` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `college_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_candidates`
--

INSERT INTO `tbl_candidates` (`id`, `image`, `candidate_number`, `name`, `gender`, `college_id`) VALUES
(1, 'Hexter Vince V. Drillon.jpg', 1, 'Hexter Vince V. Drillon', '1', 2),
(6, 'Trisha Mae Delos Santos.jpg', 1, 'Trisha Mae Delos Santos', '0', 11),
(25, 'Desiree Paz R. Dasal.jpg', 2, 'Desiree Paz R. Dasal', '0', 9),
(26, 'Venneth Daquigan.jpg', 2, 'Venneth Daquigan', '1', 7),
(27, 'Are Jay Perlata.jpg', 3, 'Are Jay Perlata', '1', 8),
(28, 'Maurein Tepace.jpg', 3, 'Maurein Tepace', '0', 6),
(29, 'Millen S. Cueto.jpg', 4, 'Millen S. Cueto', '0', 10),
(30, 'Benedict John R. Lazo.jpg', 4, 'Benedict John R. Lazo', '1', 9),
(31, 'John Lerry Ostaco.jpg', 5, 'John Lerry Ostaco', '1', 8),
(32, 'Eunice Haide Barrios.jpg', 5, 'Eunice Haide Barrios', '0', 2),
(33, 'Diana Rose Santos.jpg', 6, 'Diana Rose Santos', '0', 12),
(34, 'Paulie Rubin D. Mize.jpg', 6, 'Paulie Rubin D. Mize', '1', 5),
(35, 'Miguel Angelo L jarillo.jpg', 7, 'Miguel Angelo L jarillo', '1', 12),
(36, 'Erika Mae Salvador.jpg', 7, 'Erika Mae Salvador', '0', 8),
(37, 'Roni Catherine Cruz.jpg', 8, 'Roni Catherine Cruz', '0', 7),
(38, 'Dexter V. Nicolas.jpg', 8, 'Dexter V. Nicolas', '1', 12),
(39, 'Carlloyd Tejada.jpg', 9, 'Carlloyd Tejada', '1', 4),
(40, 'Carla Mae De Guzman.jpg', 9, 'Carla Mae De Guzman', '0', 3),
(41, 'Josephine Olivien Jana.jpg', 10, 'Josephine Olivien Jana', '0', 9),
(42, 'Kurt Andrew Manabilang.jpg', 10, 'Kurt Andrew Manabilang', '1', 5),
(43, 'Gerald B.  Capil.jpg', 11, 'Gerald B.  Capil', '1', 12),
(44, 'Kauru Aseana Pimintel.jpg', 11, 'Kauru Aseana Pimintel', '0', 5),
(45, 'Xerlen Cara Gacias.jpg', 12, 'Xerlen Cara Gacias', '0', 3),
(46, 'Prince Yulan Punay.jpg', 12, 'Prince Yulan Punay', '1', 6),
(47, 'Shan Matthew Parane.jpg', 13, 'Shan Matthew Parane', '1', 5),
(48, 'Micah Beatrice Santos.jpg', 13, 'Micah Beatrice Santos', '0', 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(250) NOT NULL,
  `category_day` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `category_name`, `category_day`) VALUES
(1, 'Talent/Skills', ''),
(2, 'Performance', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_college`
--

CREATE TABLE `tbl_college` (
  `id` int(11) NOT NULL,
  `college_name` varchar(250) NOT NULL,
  `abbr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_college`
--

INSERT INTO `tbl_college` (`id`, `college_name`, `abbr`) VALUES
(2, 'CCS', 'CCS'),
(3, 'COS', 'COS'),
(4, 'CTM', 'CTM'),
(5, 'CTHM', 'CTHM'),
(6, 'COAHS', 'COAHS'),
(7, 'COE', 'COE'),
(8, 'CAL', 'CAL'),
(9, 'HSU', 'HSU'),
(10, 'CCSCE', 'CCSCE'),
(11, 'CGPP', 'CGPP'),
(12, 'CBFS', 'CBFS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_criteria`
--

CREATE TABLE `tbl_criteria` (
  `id` int(11) NOT NULL,
  `criteria_name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peoples_choice`
--

CREATE TABLE `tbl_peoples_choice` (
  `id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `day` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students`
--

CREATE TABLE `tbl_students` (
  `id` int(11) NOT NULL,
  `student_number` varchar(250) NOT NULL,
  `college_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `registered` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_students`
--

INSERT INTO `tbl_students` (`id`, `student_number`, `college_id`, `name`, `registered`) VALUES
(1, 'K1141279', 2, 'ESCOTIDO, PAOLO', 0),
(4, 'g', 4, 'g3', 0),
(6, 'k12', 4, 'g1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_votes`
--

CREATE TABLE `tbl_votes` (
  `id` int(11) NOT NULL,
  `category_id` int(15) NOT NULL,
  `candidate_id` int(20) NOT NULL,
  `judge_id` int(10) NOT NULL,
  `totalScore` double(6,2) NOT NULL,
  `talentScore` int(11) NOT NULL,
  `performanceScore` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_votes`
--

INSERT INTO `tbl_votes` (`id`, `category_id`, `candidate_id`, `judge_id`, `totalScore`, `talentScore`, `performanceScore`) VALUES
(1, 0, 1, 27, 80.00, 80, 80),
(2, 0, 6, 27, 80.00, 80, 80),
(3, 0, 1, 28, 55.00, 60, 50),
(4, 0, 6, 28, 45.00, 40, 50),
(5, 0, 1, 25, 50.00, 50, 50),
(6, 0, 6, 25, 50.00, 50, 50),
(7, 0, 1, 24, 80.00, 80, 80),
(8, 0, 6, 24, 80.00, 80, 80),
(9, 0, 1, 22, 60.00, 60, 60),
(10, 0, 6, 22, 60.00, 60, 60),
(11, 0, 26, 28, 75.00, 80, 70),
(12, 0, 25, 28, 82.50, 80, 85),
(13, 0, 26, 24, 89.50, 90, 89),
(14, 0, 25, 24, 88.50, 90, 87),
(15, 0, 26, 27, 95.00, 95, 95),
(16, 0, 25, 27, 95.00, 95, 95),
(17, 0, 26, 22, 84.50, 89, 80),
(18, 0, 25, 22, 82.50, 85, 80),
(19, 0, 27, 28, 77.50, 75, 80),
(20, 0, 28, 28, 76.00, 72, 80),
(21, 0, 30, 28, 75.00, 70, 80),
(22, 0, 29, 28, 67.50, 60, 75),
(23, 0, 30, 28, 75.00, 70, 80),
(24, 0, 29, 28, 67.50, 60, 75),
(25, 0, 30, 27, 97.50, 97, 98),
(26, 0, 29, 27, 99.50, 99, 100),
(27, 0, 30, 24, 92.50, 95, 90),
(28, 0, 29, 24, 95.00, 95, 95),
(29, 0, 30, 22, 95.00, 95, 95),
(30, 0, 29, 22, 98.00, 98, 98),
(31, 0, 26, 25, 60.00, 60, 60),
(32, 0, 25, 25, 60.00, 60, 60),
(33, 0, 31, 28, 60.00, 60, 60),
(34, 0, 32, 28, 67.50, 65, 70),
(35, 0, 27, 25, 50.00, 50, 50),
(36, 0, 28, 25, 50.00, 50, 50),
(37, 0, 31, 27, 80.00, 80, 80),
(38, 0, 32, 27, 80.00, 80, 80),
(39, 0, 31, 22, 72.50, 75, 70),
(40, 0, 32, 22, 75.00, 75, 75),
(41, 0, 31, 24, 80.00, 80, 80),
(42, 0, 32, 24, 84.00, 83, 85),
(43, 0, 34, 27, 95.50, 96, 95),
(44, 0, 33, 27, 95.50, 96, 95),
(45, 0, 34, 28, 80.00, 80, 80),
(46, 0, 33, 28, 80.50, 80, 81),
(47, 0, 34, 22, 73.00, 75, 71),
(48, 0, 33, 22, 73.00, 75, 71),
(49, 0, 34, 24, 87.50, 90, 85),
(50, 0, 33, 24, 90.00, 90, 90),
(51, 0, 30, 25, 50.00, 50, 50),
(52, 0, 29, 25, 60.00, 60, 60),
(53, 0, 35, 28, 60.00, 60, 60),
(54, 0, 36, 28, 57.50, 55, 60),
(55, 0, 31, 25, 60.00, 60, 60),
(56, 0, 32, 25, 60.00, 60, 60),
(57, 0, 35, 27, 77.50, 80, 75),
(58, 0, 36, 27, 77.50, 80, 75),
(59, 0, 35, 22, 73.00, 72, 74),
(60, 0, 36, 22, 73.00, 71, 75),
(61, 0, 35, 25, 50.00, 50, 50),
(62, 0, 36, 25, 60.00, 60, 60),
(63, 0, 35, 24, 84.50, 84, 85),
(64, 0, 36, 24, 81.00, 82, 80),
(65, 0, 38, 22, 76.00, 82, 70),
(66, 0, 37, 22, 75.00, 80, 70),
(67, 0, 38, 28, 89.50, 90, 89),
(68, 0, 37, 28, 92.50, 90, 95),
(69, 0, 38, 24, 86.00, 86, 86),
(70, 0, 37, 24, 89.00, 89, 89),
(71, 0, 34, 25, 60.00, 60, 60),
(72, 0, 33, 25, 70.00, 70, 70),
(73, 0, 38, 25, 80.00, 80, 80),
(74, 0, 37, 25, 80.00, 80, 80),
(75, 0, 39, 24, 95.00, 95, 95),
(76, 0, 40, 24, 92.50, 95, 90),
(77, 0, 39, 22, 88.00, 85, 91),
(78, 0, 40, 22, 87.50, 85, 90),
(79, 0, 39, 28, 90.00, 95, 85),
(80, 0, 40, 28, 95.00, 95, 95),
(81, 0, 42, 24, 87.50, 85, 90),
(82, 0, 41, 24, 83.00, 83, 83),
(83, 0, 42, 22, 77.00, 74, 80),
(84, 0, 41, 22, 71.50, 73, 70),
(85, 0, 42, 28, 92.50, 90, 95),
(86, 0, 41, 28, 82.50, 85, 80),
(87, 0, 43, 28, 90.00, 90, 90),
(88, 0, 44, 28, 92.50, 95, 90),
(89, 0, 43, 24, 90.00, 90, 90),
(90, 0, 44, 24, 90.00, 90, 90),
(91, 0, 43, 22, 78.00, 85, 71),
(92, 0, 44, 22, 78.00, 81, 75),
(93, 0, 39, 25, 90.00, 90, 90),
(94, 0, 40, 25, 90.00, 90, 90),
(95, 0, 42, 25, 70.00, 70, 70),
(96, 0, 41, 25, 50.00, 50, 50),
(97, 0, 46, 28, 95.00, 95, 95),
(98, 0, 45, 28, 95.00, 95, 95),
(99, 0, 46, 24, 95.50, 96, 95),
(100, 0, 45, 24, 95.50, 96, 95),
(101, 0, 46, 22, 79.00, 78, 80),
(102, 0, 45, 22, 76.50, 78, 75),
(103, 0, 43, 25, 98.00, 98, 98),
(104, 0, 44, 25, 98.00, 98, 98),
(105, 0, 46, 25, 70.00, 70, 70),
(106, 0, 45, 25, 70.00, 70, 70),
(107, 0, 47, 26, 88.00, 88, 88),
(108, 0, 48, 26, 87.00, 85, 89),
(109, 0, 47, 25, 75.00, 75, 75),
(110, 0, 48, 25, 75.00, 75, 75),
(111, 0, 47, 24, 89.00, 90, 88),
(112, 0, 48, 24, 89.50, 90, 89),
(113, 0, 47, 22, 77.50, 80, 75),
(114, 0, 48, 22, 82.00, 85, 79),
(115, 0, 46, 26, 91.50, 93, 90),
(116, 0, 45, 26, 88.00, 88, 88),
(117, 0, 43, 26, 87.00, 87, 87),
(118, 0, 44, 26, 92.50, 95, 90),
(119, 0, 47, 28, 87.50, 90, 85),
(120, 0, 48, 28, 87.00, 85, 89),
(121, 0, 42, 26, 100.00, 100, 100),
(122, 0, 41, 26, 85.00, 86, 84),
(123, 0, 39, 26, 92.50, 95, 90),
(124, 0, 40, 26, 87.00, 87, 87),
(125, 0, 38, 26, 87.50, 90, 85),
(126, 0, 37, 26, 90.00, 90, 90),
(127, 0, 35, 26, 85.00, 85, 85),
(128, 0, 36, 26, 82.50, 80, 85),
(129, 0, 34, 26, 85.00, 85, 85),
(130, 0, 33, 26, 87.00, 87, 87),
(131, 0, 31, 26, 80.00, 80, 80),
(132, 0, 32, 26, 83.00, 83, 83),
(133, 0, 30, 26, 88.00, 90, 86),
(134, 0, 29, 26, 100.00, 100, 100),
(135, 0, 27, 26, 82.50, 84, 81),
(136, 0, 28, 26, 86.50, 87, 86),
(137, 0, 27, 24, 85.00, 85, 85),
(138, 0, 28, 24, 85.00, 85, 85),
(139, 0, 27, 22, 82.50, 85, 80),
(140, 0, 28, 22, 82.50, 85, 80),
(141, 0, 26, 26, 94.00, 93, 95),
(142, 0, 25, 26, 86.50, 85, 88),
(143, 0, 1, 26, 80.00, 80, 80),
(144, 0, 6, 26, 80.00, 80, 80);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_candidates`
--
ALTER TABLE `tbl_candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_college`
--
ALTER TABLE `tbl_college`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_criteria`
--
ALTER TABLE `tbl_criteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_peoples_choice`
--
ALTER TABLE `tbl_peoples_choice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_students`
--
ALTER TABLE `tbl_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_votes`
--
ALTER TABLE `tbl_votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_candidates`
--
ALTER TABLE `tbl_candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_college`
--
ALTER TABLE `tbl_college`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_criteria`
--
ALTER TABLE `tbl_criteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_peoples_choice`
--
ALTER TABLE `tbl_peoples_choice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_students`
--
ALTER TABLE `tbl_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_votes`
--
ALTER TABLE `tbl_votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
