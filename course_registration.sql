-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 21, 2023 at 07:45 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_registration`
--

CREATE TABLE `course_registration` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `certificate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_registration`
--

INSERT INTO `course_registration` (`id`, `name`, `email`, `course`, `startdate`, `enddate`, `certificate`) VALUES
(1, 'Ash', 'rahmanif799@gmail.com', 'ai', '2023-05-13', '2023-05-26', 'certificates/8fe41d77-02e3-4ea2-8770-ffff9c17693e.png'),
(2, 'test1', 'rahmanif799@gmail.com', 'test', '2023-05-10', '2023-05-14', 'certificates/IMG_5264.JPG'),
(3, 'Ash', 'rahmanif799@gmail.com', 'ai', '2023-05-13', '2023-05-26', 'certificates/8fe41d77-02e3-4ea2-8770-ffff9c17693e.png'),
(4, 'Ash again', 'rahmanif799@gmail.com', 'ai', '2023-05-13', '2023-05-26', 'certificates/microsoft-certified-azure-ai-fundamentals.png'),
(5, 'mass', 'mass3015@gmail.com', 'Blockchain', '2023-04-07', '2023-05-19', 'certificates/IMG_5263.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_registration`
--
ALTER TABLE `course_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_registration`
--
ALTER TABLE `course_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
