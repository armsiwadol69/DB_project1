-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2020 at 03:51 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `member`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `idstd` varchar(13) COLLATE utf8mb4_bin NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `sname` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `nickname` varchar(10) COLLATE utf8mb4_bin DEFAULT NULL,
  `sex` varchar(1) COLLATE utf8mb4_bin DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `age` int(3) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `password` varchar(15) COLLATE utf8mb4_bin NOT NULL,
  `picture` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`idstd`, `name`, `sname`, `nickname`, `sex`, `email`, `age`, `birthday`, `password`, `picture`) VALUES
('', '', '', '', 'C', '', 0, '0000-00-00', '', ''),
('1162108060176', 'Siwa', 'Ma', 'ko', 'O', 'armsiwadol2000@gmail.com', 69, '1854-12-21', 'dsdasd', '110.jpg'),
('1162108060450', 'Siwadol', 'Malisorn', 'dasda', 'F', 'armsiwadol2543@gmail.com', 20, '2102-02-05', 'dswdfef', ''),
('1162108060989', 'John', 'Serv', 'Opp', 'M', 'asdasd@ghmao1.com', 85, '1895-12-05', 'POWER555', 'tjum12.jpg'),
('1234567891023', 'manop', 'isruy', 'ray', 'F', 'jiraratym@gmail.com', 12, '1581-01-19', 'dsdsdsdsdasdfas', '118932016_1029572874');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`idstd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
