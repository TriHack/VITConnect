-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 29, 2017 at 04:15 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `discussion_forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `forum_answer`
--

DROP TABLE IF EXISTS `forum_answer`;
CREATE TABLE IF NOT EXISTS `forum_answer` (
  `question_id` int(4) NOT NULL DEFAULT '0',
  `a_id` int(4) NOT NULL DEFAULT '0',
  `a_name` varchar(65) NOT NULL DEFAULT '',
  `a_email` varchar(65) NOT NULL DEFAULT '',
  `a_answer` longtext NOT NULL,
  `a_datetime` varchar(25) NOT NULL DEFAULT '',
  KEY `a_id` (`a_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_answer`
--

INSERT INTO `forum_answer` (`question_id`, `a_id`, `a_name`, `a_email`, `a_answer`, `a_datetime`) VALUES
(29, 1, 'nilesh', 'prasad@hm.com', 'you are sick', '19/11/16 17:28:20'),
(13, 1, 'nilesh', 'prasad@hm.comasd', 'alskd', '19/11/16 17:54:52'),
(13, 2, '', 'lsndl', '', '19/11/16 18:00:00'),
(13, 3, 'SANJAY PRASAD', 'SNAJAY@G.COM', 'JAHSKJDLAKSDKS;KDLKNDANDKJBAKSBDHBSDHJDSVJHSVDHDJHVSDJVJDVJSHVDJHSVDJVHJSDVJHSVDJVSJDVJSDVJHDJHVSJDVHJSVDJHVSDJVSJDVJSDVJVHDJHVSDJVHSJDVJVHDS', '19/11/16 18:40:12'),
(13, 4, 'hitesh', 'hitesg3$@hm.com', 'i was telling you that dont waste time . go to th doctor and have the treatment done. otherwise die!!!!', '19/11/16 18:47:38'),
(13, 5, '', '', 'i was telling you that dont waste time . go to th doctor and have the treatment done. otherwise die!!!! and also die i was telling you that dont waste time . go to th doctor and have the treatment done. otherwise die!!!!', '19/11/16 18:48:04'),
(13, 6, '', '', 'i was telling you that dont waste time . go to th doctor and have the treatment done. otherwise die!!!! and also die i was telling you that dont waste time . go to th doctor and have the treatment done. otherwise die!!!!i was telling you that dont waste time . go to th doctor and have the treatment done. otherwise die!!!! and also die i was telling you that dont waste time . go to th doctor and have the treatment done. otherwise die!!!!i was telling you that dont waste time . go to th doctor and have the treatment done. otherwise die!!!! and also die i was telling you that dont waste time . go to th doctor and have the treatment done. otherwise die!!!!i was telling you that dont waste time . go to th doctor and have the treatment done. otherwise die!!!! and also die i was telling you that dont waste time . go to th doctor and have the treatment done. otherwise die!!!!i was telling you that dont waste time . go to th doctor and have the treatment done. otherwise die!!!! and also die i was telling you that dont waste time . go to th doctor and have the treatment done. otherwise die!!!!i was telling you that dont waste time . go to th doctor and have the treatment done. otherwise die!!!! and also die i was telling you that dont waste time . go to th doctor and have the treatment done. otherwise die!!!!i was telling you that dont waste time . go to th doctor and have the treatment done. otherwise die!!!! and also die i was telling you that dont waste time . go to th doctor and have the treatment done. otherwise die!!!!i was telling you that dont waste time . go to th doctor and have the treatment done. otherwise die!!!! and also die i was telling you that dont waste time . go to th doctor and have the treatment done. otherwise die!!!!i was telling you that dont waste time . go to th doctor and have the treatment done. otherwise die!!!! and also die i was telling you that dont waste time . go to th doctor and have the treatment done. otherwise die!!!!i was telling you that dont waste time . go to th doctor and have the treatment done. otherwise die!!!! and also die i was telling you that dont waste time . go to th doctor and have the treatment done. otherwise die!!!!i was telling you that dont waste time . go to th doctor and have the treatment done. otherwise die!!!! and also die i was telling you that dont waste time . go to th doctor and have the treatment done. otherwise die!!!!i was telling you that dont waste time . go to th doctor and have the treatment done. otherwise die!!!! and also die i was telling you that dont waste time . go to th doctor and have the treatment done. otherwise die!!!!i was telling you that dont waste time . go to th doctor and have the treatment done. otherwise die!!!! and also die i was telling you that dont waste time . go to th doctor and have the treatment done. otherwise die!!!!i was telling you that dont waste time . go to th doctor and have the treatment done. otherwise die!!!! and also die i was telling you that dont waste time . go to th doctor and have the treatment done. otherwise die!!!!i was telling you that dont waste time . go to th doctor and have the treatment done. otherwise die!!!! and also die i was telling you that dont waste time . go to th doctor and have the treatment done. otherwise die!!!!', '19/11/16 18:48:36'),
(35, 1, 'nilesh', 'prasad@hm.coma', 'alsdjnlasjd', '21/11/16 08:28:14'),
(33, 1, 'nilesh', 'auhsuihd@.comams', 'ashdoashd', '21/11/16 14:22:20'),
(38, 1, 'nilesh', 'prasad@hm.com', 'asdksdjh', '22/11/16 10:50:33'),
(38, 2, 'kkdad', 'lkasdk', 'ajsdn', '22/11/16 10:56:44'),
(38, 3, 'kgshdgahs', 'asbkjadjkalkd', 'jadsnslkjdkjdaklj', '22/11/16 10:57:05'),
(38, 4, 'ljasdlj', 'aksjdkjd', 'lasdljadljd', '22/11/16 10:57:19'),
(38, 5, 'ljasdlj', 'aksjdkjd', 'lasdljadljd', '22/11/16 11:02:53'),
(38, 6, '', '', 'gggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg', '22/11/16 11:04:19'),
(40, 1, 'khk', 'askj', 'h', '22/11/16 11:20:51'),
(40, 2, 'j', 'j', 'j', '22/11/16 11:21:06'),
(42, 1, 'khjk', 'a@b.com', ',sajsljalskaks', '24/11/16 17:09:44'),
(42, 2, 'jkhal', 'qlwjh@', 'sljlakj', '24/11/16 17:10:32'),
(45, 1, 'Shubham Tapele', 'shubhamt123@gmail.com', 'Yes, it seems like you are suffering from dengue . consult doctor immediately .', '26/11/16 13:24:06'),
(46, 1, 'rd', 'si@.com', 'gfhg', '27/11/16 04:16:39am'),
(50, 1, 'dsgajld', 'ajsd@khksj.com', 'qwjhuowqd', '29/01/17 08:38:49');

-- --------------------------------------------------------

--
-- Table structure for table `forum_question`
--

DROP TABLE IF EXISTS `forum_question`;
CREATE TABLE IF NOT EXISTS `forum_question` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `topic` varchar(255) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL,
  `name` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL DEFAULT '',
  `datetime` varchar(25) NOT NULL DEFAULT '',
  `view` int(4) NOT NULL DEFAULT '0',
  `reply` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_question`
--

INSERT INTO `forum_question` (`id`, `topic`, `detail`, `name`, `email`, `datetime`, `view`, `reply`) VALUES
(53, 'gfchgjhkjkl', 'gfchghjkl;', 'asdfdsfdg', 'a@f.com', '29/01/17 02:55:20', 3, 0),
(51, 'qmdkhnjdasl', 'asdjdnaslk', 'iinnikn', 'p@g.c', '29/01/17 08:38:29', 0, 0),
(52, 'ahdgjskhljk;', 'vuyashdujiko;', 'Nilesh prasad', 'prasadnilesh96@gmail.com', '29/01/17 11:46:16', 2, 0),
(50, 'DS', 'what is o(n)?', 'Nilesh Prasad', 'prasadnilesh96@gmail.com', '28/01/17 03:53:52', 4, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
