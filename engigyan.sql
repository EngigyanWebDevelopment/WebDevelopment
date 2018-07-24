-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 22, 2018 at 07:51 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `engigyan`
--

-- --------------------------------------------------------

--
-- Table structure for table `ambassadors`
--

DROP TABLE IF EXISTS `ambassadors`;
CREATE TABLE IF NOT EXISTS `ambassadors` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `NAME` varchar(100) NOT NULL,
  `COLLEGE` varchar(100) NOT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `reg_date` varchar(40) DEFAULT NULL,
  `PHONE` varchar(10) DEFAULT NULL,
  `GENDER` varchar(10) DEFAULT NULL,
  `img_name` varchar(500) DEFAULT NULL,
  `img_path` varchar(500) DEFAULT NULL,
  `img_type` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ambassadors`
--

INSERT INTO `ambassadors` (`id`, `NAME`, `COLLEGE`, `EMAIL`, `reg_date`, `PHONE`, `GENDER`, `img_name`, `img_path`, `img_type`) VALUES
(1, 'Sisir Kumar Nanda', 'cvrce', 'aakash.nanda99@gmail.com', '2018/07/22', '8908979864', 'male', 'AssetManager.png', 'photo/AssetManager.png', 'image/png'),
(2, 'aakash', 'cvrce', 'aakash.nanda99@gmail.com', '2018/07/22', '8908979864', 'male', 'AssetManager.png', 'photo/AssetManager.png', 'image/png');

-- --------------------------------------------------------

--
-- Table structure for table `college_name`
--

DROP TABLE IF EXISTS `college_name`;
CREATE TABLE IF NOT EXISTS `college_name` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `NAME` varchar(100) NOT NULL,
  `ADDRESS` varchar(500) DEFAULT NULL,
  `PEOPLE` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_name`
--

INSERT INTO `college_name` (`id`, `NAME`, `ADDRESS`, `PEOPLE`) VALUES
(1, 'cvrce', NULL, 1),
(2, 'cvrce', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `course_fees`
--

DROP TABLE IF EXISTS `course_fees`;
CREATE TABLE IF NOT EXISTS `course_fees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(50) NOT NULL,
  `fees` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_fees`
--

INSERT INTO `course_fees` (`id`, `course_name`, `fees`) VALUES
(1, 'Java', 2200),
(2, 'Python', 2000),
(4, 'AI', 3500),
(5, 'Web Development', 5000),
(6, 'Ansys', 1800),
(7, 'Hyperworks', 2500),
(8, 'Machine Learning', 4000),
(9, 'Matlab', 3600),
(10, 'Iot', 5000),
(11, 'Autocad', 2500),
(12, 'VLSI', 2500),
(3, 'Big Data', 4000),
(14, 'MySql', 1800),
(13, 'C++', 1800),
(15, 'Catia', 2500),
(16, 'SolidWorks', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

DROP TABLE IF EXISTS `enrollment`;
CREATE TABLE IF NOT EXISTS `enrollment` (
  `e_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`e_id`, `s_id`, `name`, `course`, `phone_no`, `email_id`) VALUES
(6, 1, 'aakash', 'Java', '8908979864', 'aakash.nanda99@gmail.com'),
(7, 1, 'aakash', 'AI', '8908979864', 'aakash.nanda99@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

DROP TABLE IF EXISTS `search`;
CREATE TABLE IF NOT EXISTS `search` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(20000) NOT NULL,
  `details` varchar(20000) NOT NULL,
  `url` varchar(20000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id`, `name`, `details`, `url`) VALUES
(1, 'JAVA', 'JAVA a top contender in the race of programming languages that a programmer should consider learning: Lots of job opportunities.', 'https://engigyan.000webhostapp.com/includes/cs/java.html'),
(2, 'Python: Complete Course\r\n', 'EngiGyan train you in Python like a professional. Start from the basic & grow to develop own application & games.', 'https://engigyan.000webhostapp.com/includes/cs/python.html'),
(3, 'A.I', '', ''),
(4, 'Web Developement', '', ''),
(5, 'ANSYS', '', ''),
(6, 'HyperWorks', '', ''),
(7, 'AutoCad', '', ''),
(8, 'Machine Learning', '', ''),
(9, 'CDF Analysis', '', ''),
(10, 'CATIA', '', ''),
(11, '3D MAX', '', ''),
(12, 'Running Suits', '', ''),
(13, 'MATLAB', '', ''),
(14, 'IOT', '', ''),
(15, 'PLC', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`s_id`, `name`, `email`, `password`) VALUES
(1, 'aakash', 'aakash.nanda99@gmail.com', 'p');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
