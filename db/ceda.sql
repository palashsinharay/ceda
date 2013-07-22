-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 22, 2013 at 01:41 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ceda`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(255) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--


-- --------------------------------------------------------

--
-- Table structure for table `cmspage`
--

CREATE TABLE IF NOT EXISTS `cmspage` (
  `cid` int(100) NOT NULL AUTO_INCREMENT,
  `menutitle` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `type` enum('content','product','contact','enquiry') NOT NULL,
  `metatitle` varchar(100) NOT NULL,
  `metadesc` text NOT NULL,
  `metakey` text NOT NULL,
  `status` enum('1','0') NOT NULL,
  `date` date NOT NULL,
  `pid` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `categories_id` int(11) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `cmspage`
--

INSERT INTO `cmspage` (`cid`, `menutitle`, `content`, `type`, `metatitle`, `metadesc`, `metakey`, `status`, `date`, `pid`, `filename`, `categories_id`) VALUES
(12, 'ee', '<p>\r\n	ee</p>\r\n', 'content', 'ee', '<p>\r\n	ee</p>\r\n', '<p>\r\n	ee</p>\r\n', '1', '2013-07-22', 0, '65f27-Chrysanthemum.jpg', 0),
(13, 'fdfdfd', '<p>\r\n	fdfdfd</p>\r\n', 'content', 'dfdfd', '<p>\r\n	fdfdf</p>\r\n', '<p>\r\n	dfdfddfd</p>\r\n', '1', '2013-07-22', 0, '59717-Koala.jpg', 0),
(14, 'DDDDD', '<p>\r\n	DDDDDDDDDD</p>\r\n', 'content', 'DD', '<p>\r\n	DDDD</p>\r\n', '<p>\r\n	DDD</p>\r\n', '1', '2013-07-22', 0, 'bf8c2-Lighthouse.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `content`, `image`, `status`) VALUES
(1, '<p>\r\n	Contact Us .........</p>\r\n<p>\r\n	Contact Us .........</p>\r\n<p>\r\n	Contact Us .........</p>\r\n<p>\r\n	Contact Us .........</p>\r\n', '3aabf-Tulips.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `date`, `image`, `status`) VALUES
(3, 'News1', '<p>\r\n	News1 News1 News1 News1 News1 News1 News1 News1News1 News1 News1 News1</p>\r\n', '2013-07-22', '1965e-Penguins.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `cat_id` int(11) NOT NULL,
  `price` varchar(100) NOT NULL,
  `application` text NOT NULL,
  `specs` text NOT NULL,
  `cataloge` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `product_meta` text NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `name`, `desc`, `cat_id`, `price`, `application`, `specs`, `cataloge`, `image`, `status`, `product_meta`) VALUES
(1, 'Product1', '<p>\r\n	Product1 Product1 Product1 Product1 Product1</p>\r\n', 1, 'Rs 100', '<p>\r\n	Product1 Product1 Product1 Product1 Product1</p>\r\n', '<p>\r\n	Product1 Product1 Product1 Product1 Product1</p>\r\n', 'efa53-Lighthouse.jpg', '5ebb1-Lighthouse.jpg', '1', '<p>\r\n	Product1 Product1 Product1 Product1 Product1</p>\r\n'),
(2, 'Product2', '<p>\r\n	Product2 Product2 Product2 Product2</p>\r\n<p>\r\n	Product2 Product2 Product2 Product2</p>\r\n', 2, 'Rs. 200', '<p>\r\n	Product2 Product2 Product2 Product2</p>\r\n<p>\r\n	Product2 Product2 Product2 Product2</p>\r\n', '<p>\r\n	Product2 Product2 Product2 Product2</p>\r\n<p>\r\n	Product2 Product2 Product2 Product2</p>\r\n', '3c50b-Penguins.jpg', '25e56-Hydrangeas.jpg', '1', '<p>\r\n	Product2 Product2 Product2 Product2</p>\r\n<p>\r\n	Product2 Product2 Product2 Product2</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE IF NOT EXISTS `product_category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(150) NOT NULL,
  `status` enum('1','0') NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`cat_id`, `cat_name`, `status`) VALUES
(1, 'Pcat1', '1'),
(2, 'pcat2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(100) NOT NULL,
  `s_desc` text NOT NULL,
  `s_image` varchar(255) NOT NULL,
  `s_status` enum('0','1') NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`s_id`, `s_name`, `s_desc`, `s_image`, `s_status`) VALUES
(1, 'Service1', '<p>\r\n	Service1 Service1 Service1 Service1</p>\r\n', '5a281-Chrysanthemum.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `siteconfig`
--

CREATE TABLE IF NOT EXISTS `siteconfig` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `sitename` varchar(100) NOT NULL,
  `admin_phone` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_address` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `siteconfig`
--

INSERT INTO `siteconfig` (`id`, `sitename`, `admin_phone`, `admin_email`, `admin_address`) VALUES
(2, 'Ceda', '4343434', 'admin@admin.com', 'Deep in the Hell ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL DEFAULT '100',
  `token` varchar(255) NOT NULL,
  `identifier` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `group_id`, `token`, `identifier`) VALUES
(2, 'admin@admin.com', 'admin@admin.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '', '');
