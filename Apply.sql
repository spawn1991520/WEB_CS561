-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: classmysql.engr.oregonstate.edu:3306
-- Generation Time: 2017-11-02 15:41:56
-- 服务器版本： 10.1.22-MariaDB
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs340_yanghaox`
--

-- --------------------------------------------------------

--
-- 表的结构 `Apply`
--

CREATE TABLE `Apply` (
  `sID` char(6) NOT NULL,
  `cName` char(20) NOT NULL,
  `major` char(20) NOT NULL,
  `decision` char(1) DEFAULT NULL,
  `applyDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `Apply`
--

INSERT INTO `Apply` (`sID`, `cName`, `major`, `decision`, `applyDate`) VALUES
('123', 'Cornell', 'EE', 'Y', NULL),
('123', 'MIT', 'CS', 'N', NULL),
('123', 'OSU', 'CS', 'Y', NULL),
('123', 'OSU', 'EE', 'N', NULL),
('123', 'U of O', 'CS', 'Y', NULL),
('234', 'U of O', 'biology', 'N', NULL),
('345', 'Cornell', 'bioengineering', 'N', NULL),
('345', 'Cornell', 'CS', 'Y', NULL),
('345', 'Cornell', 'EE', 'N', NULL),
('345', 'MIT', 'bioengineering', 'Y', NULL),
('543', 'MIT', 'CS', 'N', NULL),
('678', 'Cornell', 'history', 'N', NULL),
('678', 'Cornell', 'psychology', 'Y', NULL),
('678', 'OSU', 'history', 'Y', NULL),
('765', 'OSU', 'history', 'Y', NULL),
('876', 'MIT', 'biology', 'Y', NULL),
('876', 'MIT', 'marine biology', 'N', NULL),
('876', 'OSU', 'CS', 'N', NULL),
('987', 'OSU', 'CS', 'Y', NULL),
('987', 'U of O', 'CS', 'Y', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Apply`
--
ALTER TABLE `Apply`
  ADD PRIMARY KEY (`sID`,`cName`,`major`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
