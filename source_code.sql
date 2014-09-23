-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2014 at 04:22 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `source_code`
--

-- --------------------------------------------------------

--
-- Table structure for table `ordering`
--

CREATE TABLE IF NOT EXISTS `ordering` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `order` varchar(256) NOT NULL,
  `qty` varchar(256) NOT NULL,
  `price` varchar(256) NOT NULL,
  `total` varchar(256) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=282 ;

--
-- Dumping data for table `ordering`
--

INSERT INTO `ordering` (`id`, `name`, `order`, `qty`, `price`, `total`, `date`) VALUES
(278, 'Rongie', 'Beer', '2', '190', '190', '2014-09-17 04:45:34'),
(279, 'Jane', 'Porkchop', '4', '60', '240', '2014-09-22 09:20:30'),
(280, 'John', 'Pizza', '3', '189', '567', '2014-09-22 09:20:23'),
(281, 'Mike', 'Rice', '10', '15', '150', '2014-09-22 12:25:12');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE IF NOT EXISTS `position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `name`) VALUES
(1, 'user'),
(2, 'staff'),
(3, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `image`) VALUES
(22, 'asdas1.png'),
(23, 'asdas2.png'),
(24, 'asdas3.png'),
(25, 'asdas4.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `type` enum('user','admin','staff','') NOT NULL,
  `picture` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `type`, `picture`) VALUES
(1, 'rrongie', 'rrongie@gmail.com', 'user', 'default'),
(2, 'test', 'test@test.com', 'staff', 'staff'),
(3, 'admin', 'admin@test.com', 'admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
