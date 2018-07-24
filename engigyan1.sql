-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 24, 2018 at 03:39 PM
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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ambassadors`
--

INSERT INTO `ambassadors` (`id`, `NAME`, `COLLEGE`, `EMAIL`, `reg_date`, `PHONE`, `GENDER`, `img_name`, `img_path`, `img_type`) VALUES
(1, 'Sisir Kumar Nanda', 'cvrce', 'aakash.nanda99@gmail.com', '2018/07/22', '8908979864', 'male', 'AssetManager.png', 'photo/AssetManager.png', 'image/png'),
(2, 'aakash', 'cvrce', 'aakash.nanda99@gmail.com', '2018/07/22', '8908979864', 'male', 'AssetManager.png', 'photo/AssetManager.png', 'image/png'),
(3, 'Sisir Kumar Nanda', 'cvrce', 'aakash.nanda99@gmail.com', '2018/07/23', '8908979864', 'male', 'AssetManager.png', 'photo/AssetManager.png', 'image/png');

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_name`
--

INSERT INTO `college_name` (`id`, `NAME`, `ADDRESS`, `PEOPLE`) VALUES
(1, 'cvrce', NULL, 1),
(2, 'cvrce', NULL, 1),
(3, 'cvrce', NULL, 1);

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
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

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
(16, 'SolidWorks', 2500),
(17, 'Android App Development', 3500),
(18, 'Digital Marketing', 2000);

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
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id`, `name`, `details`, `url`) VALUES
(1, 'JAVA', 'JAVA a top contender in the race of programming languages that a programmer should consider learning: Lots of job opportunities.', '../engigyan/includes/cs/java.php'),
(2, 'Python: Complete Course\r\n', 'EngiGyan train you in Python like a professional. Start from the basic & grow to develop own application & games.', '../engigyan/includes/cs/python.php'),
(3, 'A.I', '', '../engigyan/includes/cs/ai.php'),
(4, 'Web Developement', '', '../engigyan/includes/cs/webdev.php'),
(5, 'ANSYS', '', '../engigyan/includes/mechanical/ansys.php'),
(6, 'HyperWorks', '', '../engigyan/includes/mechanical/hyperworks.php'),
(7, 'AutoCad', '', '../engigyan/includes/cs/autocad.php'),
(8, 'Machine Learning', '', '../engigyan/includes/cs/webdev.php'),
(9, 'CDF Analysis', '', '../engigyan/includes/cs/appdev.php'),
(10, 'CATIA', '', '../engigyan/includes/mechanical/catia.php'),
(11, '3D MAX', '', '../engigyan/includes/cs/ai.php'),
(12, 'Running Suits', '', '../engigyan/includes/cs/webdev.php'),
(13, 'MATLAB', '', '../engigyan/includes/cs/matlab.php'),
(14, 'IOT', '', '../engigyan/includes/cs/webdev.php'),
(15, 'PLC', '', '../engigyan/includes/cs/ai.php'),
(16, 'Android App Development', '', '../engigyan/includes/cs/appdev.php'),
(17, 'C++', '', '../engigyan/includes/cs/cpp.php'),
(18, 'BigData', '', '../engigyan/includes/cs/bigdata.php'),
(19, 'Digital Marketing', '', '../engigyan/includes/cs/digimarket.php'),
(20, 'Linux: Os Administration', '', '../engigyan/includes/cs/linux.php'),
(21, 'MySql', '', '../engigyan/includes/cs/mysql.php'),
(22, 'PHP: Backend Development', '', '../engigyan/includes/cs/webdev.php');

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
