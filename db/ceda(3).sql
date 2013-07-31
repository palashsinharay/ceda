-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 31, 2013 at 02:43 PM
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
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `desc`, `timestamp`, `author`) VALUES
(1, 'blog1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2013-07-31 17:58:52', 'adminBunty'),
(2, 'blog2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2013-07-31 17:58:57', 'adminBunty'),
(3, 'blog3', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2013-07-31 17:59:03', 'adminBunty');

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
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) NOT NULL,
  `comment_text` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `blog_id`, `comment_text`, `author`, `timestamp`, `status`) VALUES
(1, 1, 'This is first commnt for blog 1 ', 'adminBunty', '2013-07-31 00:00:00', '0'),
(2, 1, 'This is first commnt for blog 1 ', 'adminBunty', '2013-07-31 17:50:01', '1'),
(3, 2, 'This is anothr commnt', 'adminBunty', '2013-07-31 17:50:11', '1'),
(4, 2, 'This is anothr commnt', 'adminBunty', '2013-07-30 00:00:00', '0'),
(5, 1, 'This is comment . This is comment . This is comment . This is comment . ', 'adminBunty', '2013-07-31 17:41:56', '0'),
(6, 1, 'This is comment . This is comment . This is comment . This is comment . This is comment . ', 'adminBunty', '2013-07-31 17:21:52', '0'),
(7, 1, 'TEST INSERT', 'adminBunty', '2013-07-31 17:50:22', '1'),
(8, 1, 'TEST Comment insert 2', 'adminBunty', '2013-07-31 17:41:39', '0'),
(9, 2, 'Blog 2 comment test', 'adminBunty', '2013-07-31 17:50:38', '1'),
(10, 1, 'This is a blog 1 commnt from palash', 'adminBunty', '2013-07-31 17:51:59', '1');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `date`, `image`, `status`) VALUES
(3, 'News1', '<p>\r\n	News1 News1 News1 News1 News1 News1 News1 News1News1 News1 News1 News1</p>\r\n', '2013-07-22', '1965e-Penguins.jpg', '1'),
(4, 'New2', '<p>\r\n	Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo.</p>\r\n', '2013-07-29', 'd4601-img_1.jpg', '1'),
(5, 'News3', '<p>\r\n	Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo.</p>\r\n', '2013-07-29', '50011-1101281484C89ekB.jpg', '1'),
(6, 'News4', '<p>\r\n	Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo.</p>\r\n', '2013-07-29', '793e0-product.jpg', '1');

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
  `featured` enum('0','1') NOT NULL,
  `review` text NOT NULL,
  `stock` int(11) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `name`, `desc`, `cat_id`, `price`, `application`, `specs`, `cataloge`, `image`, `status`, `product_meta`, `featured`, `review`, `stock`) VALUES
(1, 'Product1', '<p>\r\n	<span style="font-size:14px;"><span style="font-family: trebuchet ms,helvetica,sans-serif;">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</span></span></p>\r\n', 40, 'Rs 100', '<p>\r\n	Product1 Product1 Product1 Product1 Product1</p>\r\n', '<p>\r\n	Product1 Product1 Product1 Product1 Product1</p>\r\n', 'efa53-Lighthouse.jpg', '5ebb1-Lighthouse.jpg', '1', '<p>\r\n	Product1 Product1 Product1 Product1 Product1</p>\r\n', '1', '<p>\r\n	TEST REVIEW</p>\r\n', 10),
(2, 'Product2', '<p>\r\n	Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>\r\n', 40, 'Rs. 200', '<p>\r\n	Product2 Product2 Product2 Product2</p>\r\n<p>\r\n	Product2 Product2 Product2 Product2</p>\r\n', '<p>\r\n	Product2 Product2 Product2 Product2</p>\r\n<p>\r\n	Product2 Product2 Product2 Product2</p>\r\n', '3c50b-Penguins.jpg', '25e56-Hydrangeas.jpg', '1', '<p>\r\n	Product2 Product2 Product2 Product2</p>\r\n<p>\r\n	Product2 Product2 Product2 Product2</p>\r\n', '1', '', 0),
(3, 'Product3', '<p>\r\n	Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>\r\n', 41, '100', '<p>\r\n	Product3 Product3 Product3 Product3</p>\r\n', '<p>\r\n	Product3 Product3 Product3 Product3</p>\r\n', 'e2004-product.jpg', 'c52f3-product.jpg', '1', '<p>\r\n	Product3 Product3 Product3 Product3</p>\r\n', '1', '', 0),
(4, 'Product4', '<div class="modal-body">\r\n	<p>\r\n		Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>\r\n	<p>\r\n		Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>\r\n	<p>\r\n		Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', 41, '100', '<p>\r\n	Product4 Product4 Product4</p>\r\n', '<p>\r\n	Product4 Product4 Product4</p>\r\n', '48cff-service_img1.png', '2482f-service_img1.png', '1', '<p>\r\n	Product4 Product4 Product4</p>\r\n', '1', '', 0),
(5, 'product5', '<p>\r\n	product5 product5 product5 product5</p>\r\n', 42, 'Rs. 200', '<p>\r\n	product5&nbsp; product5&nbsp;&nbsp; product5</p>\r\n', '<p>\r\n	product5&nbsp; product5&nbsp;&nbsp; product5</p>\r\n', '4b130-img_1.jpg', '6b044-product.jpg', '1', '<p>\r\n	product5&nbsp; product5&nbsp;&nbsp; product5</p>\r\n', '0', '', 0),
(6, 'product6', '<p>\r\n	product6&nbsp; product6&nbsp; product6&nbsp; product6</p>\r\n', 42, 'Rs.400', '<p>\r\n	product6&nbsp; product6&nbsp; product6&nbsp; product6</p>\r\n<p>\r\n	product6&nbsp; product6&nbsp; product6&nbsp; product6</p>\r\n', '<p>\r\n	product6&nbsp; product6&nbsp; product6&nbsp; product6</p>\r\n<p>\r\n	product6&nbsp; product6&nbsp; product6&nbsp; product6</p>\r\n', '69b7c-product.jpg', '879a6-service_img1.png', '1', '<p>\r\n	product6&nbsp; product6&nbsp; product6&nbsp; product6</p>\r\n<p>\r\n	product6&nbsp; product6&nbsp; product6&nbsp; product6</p>\r\n', '0', '', 0),
(7, 'Product 7', '<p>\r\n	Product 7 Product 7 Product 7 Product 7</p>\r\n', 43, 'Rs . 500', '<p>\r\n	Product 7 Product 7 Product 7 Product 7</p>\r\n', '<p>\r\n	Product 7 Product 7 Product 7 Product 7</p>\r\n', '303a5-product.jpg', 'e4f59-service_img1.png', '1', '<p>\r\n	Product 7 Product 7 Product 7 Product 7</p>\r\n<p>\r\n	Product 7 Product 7 Product 7 Product 7</p>\r\n', '0', '', 0),
(8, 'Product100', '<p>\r\n	Product100 Product100 Product100</p>\r\n', 44, 'Rs. 800', '<p>\r\n	Product100Product100</p>\r\n', '<p>\r\n	Product100Product100</p>\r\n', '6bcfa-product.jpg', '70659-service_img1.png', '1', '<p>\r\n	Product100Product100</p>\r\n', '0', '', 0),
(9, 'Product200', '<p>\r\n	Product200 Product200 Product200 Product200</p>\r\n', 45, 'Rs. 900', '<p>\r\n	Product200 Product200 Product200 Product200</p>\r\n<p>\r\n	Product200 Product200 Product200 Product200</p>\r\n', '<p>\r\n	Product200 Product200 Product200 Product200</p>\r\n<p>\r\n	Product200 Product200 Product200 Product200</p>\r\n', '7c81a-product.jpg', '64ec5-service_img1.png', '1', '<p>\r\n	Product200 Product200 Product200 Product200</p>\r\n<p>\r\n	Product200 Product200 Product200 Product200</p>\r\n', '0', '', 0),
(10, 'Product877', '<p>\r\n	Product200 Product200 Product200 Product200</p>\r\n', 46, 'Rs. 200', '<p>\r\n	Product200 Product200 Product200 Product200</p>\r\n<p>\r\n	Product200 Product200 Product200 Product200</p>\r\n', '<p>\r\n	Product200 Product200 Product200 Product200</p>\r\n<p>\r\n	Product200 Product200 Product200 Product200</p>\r\n', '7f8f2-product.jpg', '8a923-product.jpg', '1', '<p>\r\n	Product200 Product200 Product200 Product200</p>\r\n<p>\r\n	Product200 Product200 Product200 Product200</p>\r\n', '0', '', 0),
(11, 'Product500', '<p>\r\n	Product500 Product500 Product500 Product500</p>\r\n', 47, 'Rs . 50', '<p>\r\n	Product500Product500</p>\r\n', '<p>\r\n	Product500Product500</p>\r\n', 'b0dbd-product.jpg', '7275d-img_2.jpg', '1', '<p>\r\n	Product500Product500Product500</p>\r\n', '0', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE IF NOT EXISTS `product_category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(150) NOT NULL,
  `status` enum('1','0') NOT NULL,
  `cat_image` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`cat_id`, `cat_name`, `status`, `cat_image`) VALUES
(40, 'cat1', '1', 'a51d6-Koala.jpg'),
(41, 'cat2', '1', '1a7c3-img_1.jpg'),
(42, 'cat3', '1', '4aa33-service_img2.png'),
(43, 'cat4', '1', 'a8161-service_img1.png'),
(44, 'cat5', '1', '9579f-service_img3.png'),
(45, 'cat6', '1', 'b5e43-service_img1.png'),
(46, 'cat7', '1', '8d509-service_img1.png'),
(47, 'cat8', '1', 'cae49-service_img2.png');

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
