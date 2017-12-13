-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 16, 2016 at 06:24 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `outpass`
--

-- --------------------------------------------------------

--
-- Table structure for table `circulars`
--

CREATE TABLE IF NOT EXISTS `circulars` (
  `circularid` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `sub` varchar(25) NOT NULL,
  `content` longtext NOT NULL,
  PRIMARY KEY (`circularid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `circulars`
--

INSERT INTO `circulars` (`circularid`, `date`, `sub`, `content`) VALUES
(1, '2016-05-16', 'CIRCULAR 1', 'CIRCULAR DETAILS');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE IF NOT EXISTS `complaint` (
  `admno` int(11) NOT NULL,
  `complaintid` int(11) NOT NULL AUTO_INCREMENT,
  `curdate` date NOT NULL,
  `wname` varchar(25) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `content` varchar(300) NOT NULL,
  PRIMARY KEY (`complaintid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`admno`, `complaintid`, `curdate`, `wname`, `sub`, `content`) VALUES
(50005, 1, '2016-05-16', 'Fr Varghese Chirackal', 'complaint', 'complaint');

-- --------------------------------------------------------

--
-- Table structure for table `requestwarden`
--

CREATE TABLE IF NOT EXISTS `requestwarden` (
  `outpassid` int(11) NOT NULL AUTO_INCREMENT,
  `admno` int(11) NOT NULL,
  `curdate` date NOT NULL,
  `dest` varchar(25) NOT NULL,
  `purpose` varchar(25) NOT NULL,
  `departure` datetime NOT NULL,
  `arrival` datetime NOT NULL,
  `type` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `hodapproval` int(11) NOT NULL DEFAULT '0',
  `returntime` datetime DEFAULT NULL,
  PRIMARY KEY (`outpassid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `requestwarden`
--

INSERT INTO `requestwarden` (`outpassid`, `admno`, `curdate`, `dest`, `purpose`, `departure`, `arrival`, `type`, `status`, `hodapproval`, `returntime`) VALUES
(1, 50002, '2016-05-16', 'KOCHI', 'WEDDING', '2016-05-17 12:00:00', '2016-05-18 10:00:00', 0, 1, 0, '2016-05-16 09:51:45'),
(2, 50002, '2016-05-16', 'KOTTAYAM', 'WEDDING', '2016-05-20 12:12:00', '2016-05-17 23:11:00', 1, 1, 1, '2016-05-16 09:52:26');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `admno` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `branch` varchar(5) NOT NULL,
  `batch` varchar(15) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `mother` varchar(20) NOT NULL,
  `mjog` varchar(25) NOT NULL,
  `mphone` bigint(10) NOT NULL,
  `father` varchar(25) NOT NULL,
  `fjob` varchar(25) NOT NULL,
  `fmobno` varchar(10) NOT NULL,
  `hname` varchar(30) NOT NULL,
  `city` varchar(25) NOT NULL,
  `dist` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `country` varchar(25) NOT NULL,
  `zip` int(10) NOT NULL,
  `studentphone` bigint(10) NOT NULL,
  `dob` date NOT NULL,
  `studentemail` varchar(50) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `lg` varchar(25) NOT NULL,
  `lgaddress` varchar(150) NOT NULL,
  `lgmob` varchar(10) NOT NULL,
  `room` varchar(25) NOT NULL,
  `discipline` varchar(2000) NOT NULL DEFAULT 'Good As Of Now',
  PRIMARY KEY (`admno`),
  KEY `admno` (`admno`),
  KEY `admno_2` (`admno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50005 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`admno`, `name`, `branch`, `batch`, `sem`, `mother`, `mjog`, `mphone`, `father`, `fjob`, `fmobno`, `hname`, `city`, `dist`, `state`, `country`, `zip`, `studentphone`, `dob`, `studentemail`, `religion`, `lg`, `lgaddress`, `lgmob`, `room`, `discipline`) VALUES
(50002, 'NAME OF STUDENT', 'IT', '2013-2017', 'S2', 'MOTHER NAME', 'OCCUPATION', 9632587411, 'FATHER NAME', 'OCCUPATION', '9632587410', 'HOUSE NAME', 'CITY', 'Alappuzha', 'Andaman and Nicobar Islan', 'India', 123654, 1236987450, '2016-11-30', 'mail@ail.com', 'Chirstian', 'local', 'address', '9632587411', 'single', 'Good As Of Now'),
(50004, 'NAME OF STUDENT 2', 'CSE', '2014-2018', 'S4', 'MOTHER NAME 2', 'OCCUPATION', 9632587411, 'FATHER NAME 2 ', 'OCCUPATION', '9632587410', 'HOUSE NAME', 'CITY', 'Alappuzha', 'Andaman and Nicobar Islan', 'India', 123654, 1236987450, '2016-11-30', 'mail@ail.com', 'Chirstian', 'local', 'address', '9632587411', 'single', 'Good As Of Now');

-- --------------------------------------------------------

--
-- Table structure for table `studentapp`
--

CREATE TABLE IF NOT EXISTS `studentapp` (
  `applicationno` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `branch` varchar(5) NOT NULL,
  `batch` varchar(15) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `father` varchar(25) NOT NULL,
  `fjob` varchar(25) NOT NULL,
  `fmobno` bigint(10) NOT NULL,
  `mother` varchar(25) NOT NULL,
  `mjob` varchar(25) NOT NULL,
  `mphone` bigint(10) NOT NULL,
  `hname` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `dist` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `country` varchar(25) NOT NULL,
  `zip` int(10) NOT NULL,
  `studentphone` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `studentemail` varchar(50) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `lg` varchar(25) NOT NULL,
  `lgaddress` varchar(150) NOT NULL,
  `lgmob` varchar(15) NOT NULL,
  `room` varchar(25) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`applicationno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `studentapp`
--

INSERT INTO `studentapp` (`applicationno`, `name`, `branch`, `batch`, `sem`, `father`, `fjob`, `fmobno`, `mother`, `mjob`, `mphone`, `hname`, `city`, `dist`, `state`, `country`, `zip`, `studentphone`, `dob`, `studentemail`, `religion`, `lg`, `lgaddress`, `lgmob`, `room`, `status`) VALUES
(1, 'NAME OF STUDENT', 'AUE', '2013-2017', 'S2', 'FATHER NAME', 'OCCUPATION', 9632587410, 'MOTHER NAME', 'OCCUPATION', 9632587411, 'HOUSE NAME', 'CITY', 'Alappuzha', 'Andaman and Nicobar Islan', 'India', 123654, '1236987450', '2016-11-30', 'mail@ail.com', 'Chirstian', 'local', 'address', '9632587411', 'single', 1),
(2, 'NAME OF STUDENT 2', 'CSE', '2014-2018', 'S4', 'FATHER NAME 2 ', 'OCCUPATION', 9632587410, 'MOTHER NAME 2', 'OCCUPATION', 9632587411, 'HOUSE NAME', 'CITY', 'Alappuzha', 'Andaman and Nicobar Islan', 'India', 123654, '1236987450', '2016-11-30', 'mail@ail.com', 'Chirstian', 'local', 'address', '9632587411', 'single', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(20) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50006 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `password`, `type`) VALUES
(50000, 'warden', 1),
(50001, '1111', 1),
(50002, '1111', 0),
(50003, '1111', 1),
(50004, '1111', 0),
(50005, 'hod', 2);

-- --------------------------------------------------------

--
-- Table structure for table `warden`
--

CREATE TABLE IF NOT EXISTS `warden` (
  `name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `uname` int(11) NOT NULL,
  `phone` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warden`
--

INSERT INTO `warden` (`name`, `email`, `uname`, `phone`) VALUES
('NAME OF WARDEN', 'EMAIL@MAIL.COM', 50001, 1236547899),
('NAME OF WARDEN 2', 'EMAIL@MAIL.COM', 50003, 1236547899);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
