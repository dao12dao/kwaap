-- phpMyAdmin SQL Dump
-- version 3.4.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 28, 2011 at 03:33 PM
-- Server version: 5.5.15
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `local_bbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post` text NOT NULL,
  `post_title` text NOT NULL,
  `l1` varchar(20) DEFAULT NULL,
  `l2` varchar(20) DEFAULT NULL,
  `l3` varchar(20) DEFAULT NULL,
  `posted_by` varchar(20) NOT NULL,
  `comments` int(11) DEFAULT NULL,
  `upvotes` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post`, `post_title`, `l1`, `l2`, `l3`, `posted_by`, `comments`, `upvotes`, `date`) VALUES
(1, 'sdf<br />\r\nasdf<br />\r\nas<br />\r\ndf<br />\r\nasf<br />\r\nsaf<br />\r\nsa<br />\r\ndf<br />\r\nsadf<br />\r\n<br />\r\ns', 'Hello', 'x', 'y', 'z', 'test', 0, 0, '2011-08-28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `email_id` text,
  `posts` int(11) DEFAULT NULL,
  `comments` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email_id`, `posts`, `comments`) VALUES
(10, 'test', 'test123', 'test@localhost', 0, 0),
(11, 'atm', 'atmxxx', 'atm@localhost', 0, 0),
(12, 'test_again', 'testtest', 'test_again@localhost', 0, 0),
(13, 'baalooga', 'green', 'nishantjr@hotmail.com', 0, 0),
(14, 'ext', 'ext', 'ext@ext.ext', 0, 0),
(15, 'ashayb9', 'anujmore', 'ashayb9@hotmail.com', 0, 0),
(16, '; TRUNCATE table use', 'green', '', 0, 0);
