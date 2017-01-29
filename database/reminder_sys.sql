-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 29, 2017 at 04:13 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reminder_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `reminder_events`
--

DROP TABLE IF EXISTS `reminder_events`;
CREATE TABLE IF NOT EXISTS `reminder_events` (
  `reminder_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `reminder_name` varchar(255) NOT NULL DEFAULT '',
  `reminder_desc` text,
  `reminder_date` varchar(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`reminder_id`),
  KEY `reminder_id` (`reminder_id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reminder_events`
--

INSERT INTO `reminder_events` (`reminder_id`, `reminder_name`, `reminder_desc`, `reminder_date`) VALUES
(34, 'asjgkuij', 'kaskdghkjlk', '20171101'),
(6, 'aaeagsg', 'ffaf', '20171218'),
(4, 'play ', 'gbjkhgncgvhbjnkmjbhg', '20170909'),
(5, 'fyvgbhnjs', 'sdfs', '20170301'),
(35, 'sdvdb', 'sfdgfdgff', '20171101'),
(11, 'jbskjasd', 'asdkknlaskdknadsklnjnadsl', '20170408'),
(12, 'jbskjasd', 'asdkknlaskdknadsklnjnadsl', '20170408'),
(13, 'asdvxzfd', 'asfafassfdsg', '20170401'),
(14, 'asdvxzfd', 'asfafassfdsg', '20170401'),
(15, 'jhabdnsdn,', 'sdakhbjlasdjkh', '20170401'),
(16, 'hsdukasdhh', 'sadhdaushdouhasod', '20170601'),
(17, 'sadjasdasd', 'asdadhsada', '20170701'),
(18, 'sadjasdasd', 'asdadhsada', '20170701'),
(19, 'sadjasdasd', 'asdadhsada', '20170701'),
(20, 'sadjasdasd', 'asdadhsada', '20170701'),
(21, 'jjdskjf', 'ffsdf', '20170601'),
(22, 'dfggdnfghd', 'affdffdgh', '20170301'),
(23, 'cadf', 'treytrutiult', '20170301'),
(24, 'cadf', 'treytrutiult', '20170301'),
(25, 'jdgfchgvjhkj', 'fcgvbhjnmk', '20170401'),
(26, 'jgvdgD', 'ASHDGHUILADS', '20170501'),
(27, 'JSDGFHKDSF', 'SDFHGSHFLJID', '20170401'),
(28, 'TDCFVGBUHJNMK,L', 'TDTFVGBHNJMK,L', '20170501'),
(29, 'DAFDFASFD', 'ASFASFF', '20170501'),
(30, 'DAFDFASFD', 'ASFASFF', '20170501'),
(31, 'gvhbkjlk;l', 'sdgfkjlk;;sdf', '20170301'),
(32, 'uatygdiuhiasd', 'sadytuagyihjik', '20170401'),
(33, 'cfvhbkmkl,;', 'dcfghjk;l''/', '20170418'),
(36, 'play', 'asdhasdjok', '20171101');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
