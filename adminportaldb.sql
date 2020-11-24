-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 24, 2020 at 02:11 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminportaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `adminID` int(6) NOT NULL AUTO_INCREMENT,
  `userName` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `isSupportAdmin` varchar(1) DEFAULT 'N',
  `isFinanceAdmin` varchar(1) DEFAULT 'N',
  `isSalesAdmin` varchar(1) DEFAULT 'N',
  `isHRAdmin` varchar(1) DEFAULT 'N',
  `isTechAdmin` varchar(1) DEFAULT 'N',
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=InnoDB AUTO_INCREMENT=100001 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `userName`, `password`, `isSupportAdmin`, `isFinanceAdmin`, `isSalesAdmin`, `isHRAdmin`, `isTechAdmin`, `email`, `name`) VALUES
(2, 'Zanky', '123', 'Y', 'Y', 'Y', 'N', 'N', 'zanky@gmail.com', 'Zankar'),
(3, 'Jonah', '123', 'N', 'N', 'Y', 'Y', 'Y', 'jonah@gmail.com', 'Jonah'),
(4, 'Jeff', '123', 'N', 'N', 'N', 'Y', 'Y', 'jeff@gmail.com', 'Jonah'),
(5, 'Jack', '123', 'N', 'N', 'N', 'Y', 'N', 'sarah@gmail.com', 'Jack'),
(100000, 'user1', 'pwd', 'Y', 'Y', 'Y', 'Y', 'Y', 'user1@gmail.com', 'Elvis ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
