-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2020 at 11:08 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `memner`
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
('1162108060176', 'Siwadol', 'Malisorn', 'Si', 'M', 'armsiwadol2543@gmail.com', 20, '2000-05-12', 'plzkillme69', 'si.jpg'),
('1162108060450', 'Siwadol', 'Malisorn', 'dasda', 'F', 'armsiwadol2543@gmail.com', 20, '2102-02-05', 'dswdfef', ''),
('1162108060520', 'PonZA', 'KillThisLove', 'POPza', 'F', 'lopodlow410@gmail.com', 17, '1996-01-25', 'ilikeCAT', 'tjum12.jpg'),
('1162108060985', 'John', 'Serv', 'O', 'M', 'asdasd@ghmao1.com', 85, '1895-12-05', 'POWER555', 'tjum12.jpg'),
('1162108060989', 'John', 'Serv', 'Opp', 'M', 'asdasd@ghmao1.com', 85, '1895-12-05', 'POWER555', 'tjum12.jpg'),
('1165250125145', 'NutLoveMom', 'IlikeCat', 'Nutz', 'M', 'nutza007@hotmail.com', 69, '1999-02-16', 'LoveRedGuiter', 'farvo.png'),
('9162108060989', 'Johny', 'Serv', 'Opp', 'M', 'asdasd@ghmao1.com', 85, '1895-12-05', 'POWER555', 'tjum12.jpg');

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
