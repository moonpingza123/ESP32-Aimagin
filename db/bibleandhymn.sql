-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2019 at 07:13 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bibleandhymn`
--

-- --------------------------------------------------------

--
-- Table structure for table `bible`
--

CREATE TABLE `bible` (
  `bibleid` int(11) NOT NULL,
  `biblethname` varchar(45) DEFAULT NULL,
  `biblethinitialsname` varchar(45) DEFAULT NULL,
  `biblecninitialsname` varchar(45) DEFAULT NULL,
  `bibleeninitialsname` varchar(45) DEFAULT NULL,
  `bibleperiod` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bible`
--

INSERT INTO `bible` (`bibleid`, `biblethname`, `biblethinitialsname`, `biblecninitialsname`, `bibleeninitialsname`, `bibleperiod`) VALUES
(1, 'เยเนซิศ', 'ยนซ.', '创', 'Gen', 1),
(2, 'เอ็กโซโด', 'อซด.', '出', 'Exo', 1),
(3, 'เลวีติโก', 'ลวต.', '利', 'Lev', 1),
(4, 'อาฤธโม', 'อฤธ.', '民', 'Num', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bible`
--
ALTER TABLE `bible`
  ADD PRIMARY KEY (`bibleid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
