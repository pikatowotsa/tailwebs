-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2024 at 10:42 AM
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
-- Database: `teacherportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `marks_table`
--

CREATE TABLE `marks_table` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marks_table`
--

INSERT INTO `marks_table` (`id`, `student_id`, `subject`, `mark`) VALUES
(53, 1, 'English', 60),
(54, 4, 'English', 64),
(55, 7, 'English', 78),
(56, 10, 'English', 97),
(57, 13, 'English', 70),
(58, 16, 'English', 83),
(59, 19, 'English', 63),
(60, 1, 'Mathematics', 88),
(61, 4, 'Mathematics', 70),
(62, 7, 'Mathematics', 67),
(63, 10, 'Mathematics', 66),
(64, 13, 'Mathematics', 69),
(65, 16, 'Mathematics', 89),
(66, 19, 'Mathematics', 93),
(67, 1, 'C Programming', 100),
(68, 4, 'C Programming', 81),
(69, 7, 'C Programming', 84),
(70, 10, 'C Programming', 77),
(71, 13, 'C Programming', 73),
(72, 16, 'C Programming', 76),
(73, 19, 'C Programming', 99),
(74, 1, 'Computer Networks', 88),
(75, 4, 'Computer Networks', 80),
(76, 7, 'Computer Networks', 79),
(77, 10, 'Computer Networks', 93),
(78, 13, 'Computer Networks', 86),
(79, 16, 'Computer Networks', 93),
(80, 19, 'Computer Networks', 66),
(81, 1, 'Java', 73),
(82, 4, 'Java', 65),
(83, 7, 'Java', 89),
(84, 10, 'Java', 66),
(85, 13, 'Java', 87),
(86, 16, 'Java', 94),
(87, 19, 'Java', 70),
(88, 2, 'English', 90),
(89, 5, 'English', 97),
(90, 8, 'English', 73),
(91, 11, 'English', 96),
(92, 14, 'English', 78),
(93, 17, 'English', 85),
(94, 20, 'English', 92),
(95, 2, 'Mathematics', 61),
(96, 5, 'Mathematics', 95),
(97, 8, 'Mathematics', 69),
(98, 11, 'Mathematics', 82),
(99, 14, 'Mathematics', 61),
(100, 17, 'Mathematics', 82),
(101, 20, 'Mathematics', 83),
(102, 2, 'Java', 72),
(103, 5, 'Java', 90),
(104, 8, 'Java', 95),
(105, 11, 'Java', 64),
(106, 14, 'Java', 97),
(107, 17, 'Java', 71),
(108, 20, 'Java', 85),
(109, 2, 'Data Structures', 69),
(110, 5, 'Data Structures', 73),
(111, 8, 'Data Structures', 98),
(112, 11, 'Data Structures', 87),
(113, 14, 'Data Structures', 84),
(114, 17, 'Data Structures', 99),
(115, 20, 'Data Structures', 62),
(116, 2, 'Object Oriented Analysis and Design', 75),
(117, 5, 'Object Oriented Analysis and Design', 90),
(118, 8, 'Object Oriented Analysis and Design', 84),
(119, 11, 'Object Oriented Analysis and Design', 89),
(120, 14, 'Object Oriented Analysis and Design', 92),
(121, 17, 'Object Oriented Analysis and Design', 92),
(122, 20, 'Object Oriented Analysis and Design', 86),
(123, 2, 'Linux', 93),
(124, 5, 'Linux', 64),
(125, 8, 'Linux', 66),
(126, 11, 'Linux', 77),
(127, 14, 'Linux', 86),
(128, 17, 'Linux', 60),
(129, 20, 'Linux', 61),
(130, 3, 'English', 69),
(131, 6, 'English', 61),
(132, 9, 'English', 77),
(133, 12, 'English', 63),
(134, 15, 'English', 66),
(135, 18, 'English', 82),
(137, 3, 'Mathematics', 68),
(138, 6, 'Mathematics', 75),
(139, 9, 'Mathematics', 70),
(140, 12, 'Mathematics', 68),
(141, 15, 'Mathematics', 69),
(142, 18, 'Mathematics', 81),
(144, 3, 'Java', 99),
(145, 6, 'Java', 70),
(146, 9, 'Java', 75),
(147, 12, 'Java', 63),
(148, 15, 'Java', 74),
(149, 18, 'Java', 81),
(151, 3, 'DotNet', 80),
(152, 6, 'DotNet', 98),
(153, 9, 'DotNet', 67),
(154, 12, 'DotNet', 62),
(155, 15, 'DotNet', 93),
(156, 18, 'DotNet', 94),
(158, 3, 'Unix Operating System', 92),
(159, 6, 'Unix Operating System', 78),
(160, 9, 'Unix Operating System', 94),
(161, 12, 'Unix Operating System', 97),
(162, 15, 'Unix Operating System', 60),
(163, 18, 'Unix Operating System', 74);

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`id`, `name`, `course`) VALUES
(1, 'John Doe', 'BCA'),
(2, 'Jane Smith', 'BTECH'),
(3, 'Alice Johnson', 'MCA'),
(4, 'Bob Brown', 'BCA'),
(5, 'Charlie Davis', 'BTECH'),
(6, 'Diana Evans', 'MCA'),
(7, 'Frank Green', 'BCA'),
(8, 'Grace Hall', 'BTECH'),
(9, 'Henry James', 'MCA'),
(10, 'Ivy King', 'BCA'),
(11, 'Jack Lee', 'BTECH'),
(12, 'Karen Miller', 'MCA'),
(13, 'Leo Nelson', 'BCA'),
(14, 'Mia Owens', 'BTECH'),
(15, 'Noah Perez', 'MCA'),
(16, 'Olivia Quinn', 'BCA'),
(17, 'Paul Robinson', 'BTECH'),
(18, 'Quinn Scott', 'MCA'),
(19, 'Ruth Taylor', 'BCA'),
(20, 'Steve Wilson', 'BTECH');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@test.com', '$2y$10$W8PO4HF8I2RAIlLsrvkT/el.HE3Bkpf.7SAHh81drIsXUWWPmbeo.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marks_table`
--
ALTER TABLE `marks_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `marks_table_ibfk_1` (`student_id`);

--
-- Indexes for table `student_table`
--
ALTER TABLE `student_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marks_table`
--
ALTER TABLE `marks_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT for table `student_table`
--
ALTER TABLE `student_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `marks_table`
--
ALTER TABLE `marks_table`
  ADD CONSTRAINT `marks_table_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_table` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
