-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2024 at 06:47 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(40) DEFAULT NULL,
  `email` varchar(25) NOT NULL,
  `feedback` varchar(50) NOT NULL,
  `category` varchar(10) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`username`, `password`) VALUES
('staff0', 'staff0'),
('staff1', 'staff1'),
('staff2', 'staff2'),
('staff3', 'staff3'),
('staff4', 'staff4'),
('staff6', 'staff6');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`username`, `password`) VALUES
('arun', 'arun'),
('bala', 'bala'),
('mohan', 'mohan'),
('loki', 'loki'),
('muthu', 'muthu'),
('rahul', 'rahul'),
('sathish', 'sathish'),
('saravana', 'saravana'),
('surya', 'surya'),
('sri', 'sri'),
('vishva', 'vishva'),
('jeeva', 'jeeva'),
('prasanth', 'prasanth'),
('111', '111'),
('ram', 'ram'),
('tmp', 'tmp'),
('tmp', 'tmp'),
('aaa', 'aaa'),
('sathishbabu', 'sathishbabu');

-- --------------------------------------------------------

--
-- Table structure for table `students_details`
--

CREATE TABLE `students_details` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_details`
--

INSERT INTO `students_details` (`id`, `name`, `email`, `password`, `gender`, `dob`, `address`, `phone`, `created_at`) VALUES
(1, 'arun', 'arun@example.com', 'arun', 'male', '2000-01-01', '123 Main St', '555-1234', '2023-03-12 16:37:13'),
(2, 'bala', 'bala@example.com', 'bala', 'male', '1998-03-15', '456 Oak St', '555-5678', '2023-03-12 16:37:13'),
(3, 'mohan', 'mohan@example.com', 'mohan', 'male', '1999-12-31', '789 Maple Ave', '555-9012', '2023-03-12 16:37:13'),
(4, 'loki', 'loki@example.com', 'loki', 'male', '1998-03-15', '456 Oak St', '555-5678', '2023-03-12 16:37:13'),
(5, 'muthu', 'muthu@example.com', 'muthu', 'male', '1998-03-15', '456 Oak St', '555-5678', '2023-03-12 16:37:13'),
(6, 'rahul', 'rahul@example.com', 'rahul', 'male', '1998-03-15', '456 Oak St', '555-5678', '2023-03-12 16:37:13'),
(7, 'sathish', 'sathish@example.com', 'sathish', 'male', '1998-03-15', '456 Oak St', '555-5678', '2023-03-12 16:37:13'),
(8, 'saravana', 'saravana@example.com', 'saravana', 'male', '1998-03-15', '456 Oak St', '555-5678', '2023-03-12 16:37:13'),
(9, 'surya', 'surya@example.com', 'surya', 'male', '1998-03-15', '456 Oak St', '555-5678', '2023-03-12 16:37:13'),
(10, 'sri', 'sri@example.com', 'sri', 'male', '1998-03-15', '456 Oak St', '555-5678', '2023-03-12 16:37:13'),
(11, 'vishva', 'vishva@example.com', 'vishva', 'male', '1998-03-15', '456 Oak St', '555-5678', '2023-03-12 16:37:13'),
(12, 'jeeva', 'jeeva@example.com', 'jeeva', 'male', '1998-03-15', '456 Oak St', '555-5678', '2023-03-12 16:37:13'),
(14, 'aaa', '', 'aaa', 'male', '0000-00-00', '', '', '2023-04-08 06:33:53'),
(15, 'sathishbabu', '', 'sathishbabu', 'male', '0000-00-00', '', '', '2023-04-26 10:21:48');

-- --------------------------------------------------------

--
-- Table structure for table `study_materials`
--

CREATE TABLE `study_materials` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `file_path` varchar(255) NOT NULL,
  `uploaded_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `study_materials`
--

INSERT INTO `study_materials` (`id`, `title`, `description`, `file_path`, `uploaded_date`) VALUES
(1, 'Introduction to Computer Science', 'This course covers the basics of computer science', 'https://openlibrary.org/', '2022-01-01'),
(2, 'Data Structures and Algorithms', 'This course covers data structures and algorithms', 'https://openlibrary.org/', '2022-01-02'),
(3, 'Programming in Java', 'This course covers Java programming language', 'https://openlibrary.org/', '2022-01-03'),
(4, 'Web Development', 'This course covers web development using HTML, CSS, and JavaScript', 'https://openlibrary.org/', '2022-01-04'),
(5, 'Artificial Intelligence', 'This course covers AI and machine learning', 'https://openlibrary.org/', '2022-01-05'),
(6, 'Database Management', 'This course covers database management', 'https://openlibrary.org/', '2022-01-06'),
(7, 'Operating Systems', 'This course covers operating systems', 'https://openlibrary.org/', '2022-01-07'),
(8, 'Computer Networks', 'This course covers computer networks', 'https://openlibrary.org/', '2022-01-08'),
(9, 'Software Engineering', 'This course covers software engineering', 'https://openlibrary.org/', '2022-01-09'),
(10, 'Computer Graphics', 'This course covers computer graphics', 'https://openlibrary.org/', '2022-01-10'),
(11, 'Calculus I', 'This course covers the fundamentals of calculus', 'https://openlibrary.org/', '2022-02-01'),
(12, 'Calculus II', 'This course covers advanced topics in calculus', 'https://openlibrary.org/', '2022-02-02'),
(13, 'Linear Algebra', 'This course covers linear algebra', 'https://openlibrary.org/', '2022-02-03'),
(14, 'Abstract Algebra', 'This course covers abstract algebra', 'https://openlibrary.org/', '2022-02-04'),
(15, 'Real Analysis', 'This course covers real analysis', 'https://openlibrary.org/', '2022-02-05'),
(16, 'Numerical Analysis', 'This course covers numerical analysis', 'https://openlibrary.org/', '2022-02-06'),
(17, 'Probability Theory', 'This course covers probability theory', 'https://openlibrary.org/', '2022-02-07'),
(18, 'Statistics', 'This course covers statistics', 'https://openlibrary.org/', '2022-02-08'),
(19, 'Topology', 'This course covers topology', 'https://openlibrary.org/', '2022-02-09'),
(20, 'Differential Equations', 'This course covers differential equations', 'https://openlibrary.org/', '2022-02-10'),
(21, 'Classical Mechanics', 'This course covers classical mechanics', 'https://openlibrary.org/', '2022-03-01'),
(22, 'Electromagnetism', 'This course covers electromagnetism', 'https://openlibrary.org/', '2022-03-02'),
(23, 'Thermodynamics', 'This course covers thermodynamics', 'https://openlibrary.org/', '2022-03-03'),
(24, 'Quantum Mechanics', 'This course covers quantum mechanics', 'https://openlibrary.org/', '2022-03-04'),
(25, 'Relativity', 'This course covers relativity', 'https://openlibrary.org/', '2022-03-05'),
(26, 'Nuclear Physics', 'This course covers nuclear physics', 'https://openlibrary.org/', '2022-03-06'),
(27, 'Astrophysics', 'This course covers astrophysics', 'https://openlibrary.org/', '2022-03-07'),
(28, 'Optics', 'This course covers optics', 'https://openlibrary.org/', '2022-03-08'),
(29, 'Particle Physics', 'This course covers particle physics', 'https://openlibrary.org/', '2022-03-09'),
(30, 'Condensed Matter Physics', 'This course covers condensed matter physics', 'https://openlibrary.org/', '2022-03-10'),
(31, 'Organic Chemistry I', 'This course covers the fundamentals of organic chemistry', 'https://openlibrary.org/', '2022-04-01'),
(32, 'Organic Chemistry II', 'This course covers advanced topics in organic chemistry', 'https://openlibrary.org/', '2022-04-02'),
(33, 'Physical Chemistry I', 'This course covers the fundamentals of physical chemistry', 'https://openlibrary.org/', '2022-04-03'),
(34, 'Physical Chemistry II', 'This course covers advanced topics in physical chemistry', 'https://openlibrary.org/', '2022-04-04'),
(35, 'Inorganic Chemistry', 'This course covers inorganic chemistry', 'https://openlibrary.org/', '2022-04-05'),
(36, 'Analytical Chemistry', 'This course covers analytical chemistry', 'https://openlibrary.org/', '2022-04-06'),
(37, 'Biochemistry', 'This course covers biochemistry', 'https://openlibrary.org/', '2022-04-07'),
(38, 'Polymer Chemistry', 'This course covers polymer chemistry', 'https://openlibrary.org/', '2022-04-08'),
(39, 'Environmental Chemistry', 'This course covers environmental chemistry', 'https://openlibrary.org/', '2022-04-09'),
(40, 'Forensic Chemistry', 'This course covers forensic chemistry', 'https://openlibrary.org/', '2022-04-10'),
(41, 'Tamil Literature I', 'This course covers the fundamentals of Tamil literature', 'https://openlibrary.org/', '2022-05-01'),
(42, 'Tamil Literature II', 'This course covers advanced topics in Tamil literature', 'https://openlibrary.org/', '2022-05-02'),
(43, 'Tamil Grammar I', 'This course covers the fundamentals of Tamil grammar', 'https://openlibrary.org/', '2022-05-03'),
(44, 'Tamil Grammar II', 'This course covers advanced topics in Tamil grammar', 'https://openlibrary.org/', '2022-05-04'),
(45, 'Tamil Poetry', 'This course covers Tamil poetry', 'https://openlibrary.org/', '2022-05-05'),
(46, 'Tamil Prose', 'This course covers Tamil prose', 'https://openlibrary.org/', '2022-05-06'),
(47, 'Tamil Culture', 'This course covers Tamil culture', 'https://openlibrary.org/', '2022-05-07'),
(48, 'Tamil Cinema', 'This course covers Tamil cinema', 'https://openlibrary.org/', '2022-05-08'),
(49, 'Tamil Folklore', 'This course covers Tamil folklore', 'https://openlibrary.org/', '2022-05-09'),
(50, 'Tamil History', 'This course covers Tamil history', 'https://openlibrary.org/', '2022-05-10'),
(51, 'English Literature I', 'This course covers the fundamentals of English literature', 'https://openlibrary.org/', '2022-06-01'),
(52, 'English Literature II', 'This course covers advanced topics in English literature', 'https://openlibrary.org/', '2022-06-02'),
(53, 'English Grammar I', 'This course covers the fundamentals of English grammar', 'https://openlibrary.org/', '2022-06-03'),
(54, 'English Grammar II', 'This course covers advanced topics in English grammar', 'https://openlibrary.org/', '2022-06-04'),
(55, 'Shakespearean Studies', 'This course covers Shakespearean literature', 'https://openlibrary.org/', '2022-06-05'),
(56, 'Modern Literature', 'This course covers modern literature', 'https://openlibrary.org/', '2022-06-06'),
(57, 'American Literature', 'This course covers American literature', 'https://openlibrary.org/', '2022-06-07'),
(58, 'English Language Teaching', 'This course covers English language teaching', 'https://openlibrary.org/', '2022-06-08'),
(59, 'Linguistics', 'This course covers linguistic theories', 'https://openlibrary.org/', '2022-06-09'),
(60, 'Creative Writing', 'This course covers creative writing', 'https://openlibrary.org/', '2022-06-10'),
(61, 'Cell Biology', 'This course covers the basics of cell biology', 'https://openlibrary.org/', '2022-07-01'),
(62, 'Molecular Biology', 'This course covers the fundamentals of molecular biology', 'https://openlibrary.org/', '2022-07-02'),
(63, 'Genetics', 'This course covers basic and advanced concepts in genetics', 'https://openlibrary.org/', '2022-07-03'),
(64, 'Ecology', 'This course covers ecological concepts and principles', 'https://openlibrary.org/', '2022-07-04'),
(65, 'Evolutionary Biology', 'This course covers evolutionary theory and mechanisms', 'https://openlibrary.org/', '2022-07-05'),
(66, 'Human Anatomy and Physiology', 'This course covers the structure and function of the human body', 'https://openlibrary.org/', '2022-07-06'),
(67, 'Microbiology', 'This course covers the fundamentals of microbiology', 'https://openlibrary.org/', '2022-07-07'),
(68, 'Immunology', 'This course covers the principles of immunology', 'https://openlibrary.org/', '2022-07-08'),
(69, 'Biostatistics', 'This course covers statistical methods used in biology', 'https://openlibrary.org/', '2022-07-09'),
(81, 'Principles of Accounting', 'This course covers the basic principles of accounting', 'https://openlibrary.org/', '2022-08-01'),
(82, 'Financial Management', 'This course covers the principles of financial management', 'https://openlibrary.org/', '2022-08-02'),
(83, 'Marketing Management', 'This course covers the principles of marketing management', 'https://openlibrary.org/', '2022-08-03'),
(84, 'Business Statistics', 'This course covers statistical methods used in business', 'https://openlibrary.org/', '2022-08-04'),
(85, 'Business Law', 'This course covers the legal framework for businesses', 'https://openlibrary.org/', '2022-08-05'),
(86, 'International Business', 'This course covers the basics of international business', 'https://openlibrary.org/', '2022-08-06'),
(87, 'Microeconomics', 'This course covers microeconomic theory and principles', 'https://openlibrary.org/', '2022-08-07'),
(88, 'Macroeconomics', 'This course covers macroeconomic theory and principles', 'https://openlibrary.org/', '2022-08-08'),
(89, 'Econometrics', 'This course covers statistical methods used in economics', 'https://openlibrary.org/', '2022-08-09'),
(90, 'Development Economics', 'This course covers theories of economic development', 'https://openlibrary.org/', '2022-08-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_details`
--
ALTER TABLE `students_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `study_materials`
--
ALTER TABLE `study_materials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1405;

--
-- AUTO_INCREMENT for table `students_details`
--
ALTER TABLE `students_details`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `study_materials`
--
ALTER TABLE `study_materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
