-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 06, 2013 at 01:39 PM
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

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author` varchar(255) NOT NULL,
  `metadesc` text NOT NULL,
  `metakey` text NOT NULL,
  PRIMARY KEY (`blog_id`),
  FULLTEXT KEY `desc` (`desc`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `title`, `desc`, `timestamp`, `author`, `metadesc`, `metakey`) VALUES
(1, 'blog1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2013-08-02 16:53:05', 'adminBunty', 'blogmetadesc blogmetadesc blogmetadesc blogmetadesc ', 'blogmetakey blogmetakey blogmetakey'),
(2, 'blog2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset Bunty sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2013-08-06 12:45:43', 'adminBunty', '', ''),
(3, 'blog3', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2013-07-31 17:59:03', 'adminBunty', '', ''),
(4, 'Test Blog ', '<p>\r\n	It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search palash for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', '2013-08-06 12:46:51', 'admin', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
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

DROP TABLE IF EXISTS `cmspage`;
CREATE TABLE IF NOT EXISTS `cmspage` (
  `cid` int(100) NOT NULL AUTO_INCREMENT,
  `menutitle` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `type` enum('content','contact') NOT NULL,
  `metatitle` varchar(100) NOT NULL,
  `metadesc` text NOT NULL,
  `metakey` text NOT NULL,
  `status` enum('1','0') NOT NULL,
  `date` date NOT NULL,
  `pid` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `categories_id` int(11) NOT NULL,
  PRIMARY KEY (`cid`),
  FULLTEXT KEY `content` (`content`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `cmspage`
--

INSERT INTO `cmspage` (`cid`, `menutitle`, `content`, `type`, `metatitle`, `metadesc`, `metakey`, `status`, `date`, `pid`, `filename`, `categories_id`) VALUES
(11, 'About Us', '<p>\r\n	Ghuplu<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>\r\n	<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 'content', 'DD', 'DDDD\r\n', '<p>\r\n	DDD</p>\r\n', '1', '2013-07-22', 0, 'bf8c2-Lighthouse.jpg', 0),
(12, 'Career', '<p>\r\n	<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>\r\n	<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 'content', 'ee', '<p>\r\n	ee</p>\r\n', '<p>\r\n	ee</p>\r\n', '1', '2013-07-22', 0, '65f27-Chrysanthemum.jpg', 0),
(13, 'Team members', '<p>\r\n	<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>\r\n	<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 'content', 'dfdfd', '<p>\r\n	fdfdf</p>\r\n', '<p>\r\n	dfdfddfd</p>\r\n', '1', '2013-07-22', 0, '59717-Koala.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) NOT NULL,
  `comment_text` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `blog_id`, `comment_text`, `author`, `timestamp`, `status`) VALUES
(1, 1, '<p>\r\n	This is first commnt for blog 1</p>\r\n', 'adminBunty', '2013-08-01 12:51:39', '0'),
(2, 1, 'This is first commnt for blog 1 ', 'adminBunty', '2013-07-31 17:50:01', '1'),
(3, 2, 'This is anothr commnt', 'adminBunty', '2013-07-31 17:50:11', '1'),
(4, 2, 'This is anothr commnt', 'adminBunty', '2013-07-30 00:00:00', '0'),
(5, 1, 'This is comment . This is comment . This is comment . This is comment . ', 'adminBunty', '2013-07-31 17:41:56', '0'),
(6, 1, 'This is comment . This is comment . This is comment . This is comment . This is comment . ', 'adminBunty', '2013-07-31 17:21:52', '0'),
(7, 1, 'TEST INSERT', 'adminBunty', '2013-07-31 17:50:22', '1'),
(8, 1, 'TEST Comment insert 2', 'adminBunty', '2013-07-31 17:41:39', '0'),
(9, 2, 'Blog 2 comment test', 'adminBunty', '2013-07-31 17:50:38', '1'),
(10, 1, 'This is a blog 1 commnt from palash', 'adminBunty', '2013-07-31 17:51:59', '1'),
(11, 3, '<p>\r\n	test</p>\r\n', 'adminBunty', '2013-08-01 12:48:08', '0'),
(12, 4, '<p>\r\n	This is anothr test commnt</p>\r\n', 'Bunty', '2013-08-01 12:47:32', '1'),
(13, 0, '', 'adminBunty', '2013-08-02 18:27:41', '0'),
(14, 0, '', 'adminBunty', '2013-08-02 18:33:26', '0'),
(15, 0, '', 'adminBunty', '2013-08-02 18:34:25', '0'),
(16, 0, '', 'adminBunty', '2013-08-02 18:34:32', '0'),
(17, 0, '', 'adminBunty', '2013-08-02 18:42:21', '0'),
(18, 0, '', 'adminBunty', '2013-08-02 18:43:07', '0'),
(19, 0, '', 'adminBunty', '2013-08-02 18:43:09', '0'),
(20, 0, '', 'adminBunty', '2013-08-02 18:43:09', '0'),
(21, 0, '', 'adminBunty', '2013-08-02 18:43:09', '0'),
(22, 0, '', 'adminBunty', '2013-08-02 18:43:28', '0'),
(23, 3, 'This is my feb blog', 'adminBunty', '2013-08-05 15:35:01', '0'),
(24, 3, 'This is my feb blog', 'adminBunty', '2013-08-05 15:37:14', '0'),
(25, 1, 'BLOG 1 COMMENT', 'adminBunty', '2013-08-05 15:38:05', '0'),
(26, 1, 'HELLOO 123', 'adminBunty', '2013-08-05 15:39:08', '0'),
(27, 1, '<p>\r\n	hello123</p>\r\n', 'adminBunty', '2013-08-05 15:41:37', '1'),
(28, 0, '', 'adminBunty', '2013-08-06 12:58:47', '0'),
(29, 0, '', 'adminBunty', '2013-08-06 13:01:11', '0'),
(30, 0, '', 'adminBunty', '2013-08-06 13:01:14', '0'),
(31, 0, '', 'adminBunty', '2013-08-06 13:01:41', '0'),
(32, 0, '', 'adminBunty', '2013-08-06 13:01:57', '0');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `state`, `province`, `country`, `message`) VALUES
(2, 'TEST', 'sahani.bunty9@gmail.com', 'California', 'Tasmania', 'Togo', 'TEST TEST');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `news_meta_desc` text NOT NULL,
  `news_meta_key` text NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `description` (`description`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `date`, `image`, `status`, `news_meta_desc`, `news_meta_key`) VALUES
(3, 'News1', '<p class="media">\r\n	<strong>news123 &quot;Lorem ipsum dolor sit amet&quot;,</strong> consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>\r\n	<strong>&quot;Lorem ipsum dolor sit amet&quot;,</strong> consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n<p>\r\n	<strong>&quot;Lorem ipsum dolor sit amet&quot;,</strong> consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n<p>\r\n	Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n<p>\r\n	News1 News1 News1 News1 News1 News1 News1News1 News1 News1 News1</p>\r\n', '2013-07-22', '1965e-Penguins.jpg', '1', '', ''),
(4, 'New2', '<p class="media">\r\n	<strong>&quot;Lorem ipsum dolor sit amet&quot;,</strong> consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>\r\n	<strong>&quot;Lorem ipsum dolor sit amet&quot;,</strong> consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n<p>\r\n	<strong>&quot;Lorem ipsum dolor sit amet&quot;,</strong> consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n<p>\r\n	Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n', '2013-07-29', 'abef2-support.jpg', '1', '<p>\r\n	News meta Desc</p>\r\n', '<p>\r\n	News meta Key , News meta key</p>\r\n'),
(5, 'News3', '<p class="media">\r\n	<strong>&quot;Lorem ipsum dolor sit amet&quot;,</strong> consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>\r\n	<strong>&quot;Lorem ipsum dolor sit amet&quot;,</strong> consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n<p>\r\n	<strong>&quot;Lorem ipsum dolor sit amet&quot;,</strong> consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n<p>\r\n	Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n', '2013-07-29', '5703a-service_img3.png', '1', '', ''),
(6, 'News4', '<p class="media">\r\n	<strong>&quot;Lorem ipsum dolor sit amet&quot;,</strong> consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>\r\n	<strong>&quot;Lorem ipsum dolor sit amet&quot;,</strong> consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n<p>\r\n	<strong>&quot;Lorem ipsum dolor sit amet&quot;,</strong> consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n<p>\r\n	Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>\r\n', '2013-07-29', '793e0-product.jpg', '1', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `cat_id` int(11) NOT NULL,
  `price` double NOT NULL,
  `application` text NOT NULL,
  `specs` text NOT NULL,
  `cataloge` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `product_meta` text NOT NULL,
  `featured` enum('0','1') NOT NULL,
  `review` text NOT NULL,
  `stock` int(11) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `product_meta_key` text NOT NULL,
  PRIMARY KEY (`pid`),
  FULLTEXT KEY `desc` (`desc`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `name`, `desc`, `cat_id`, `price`, `application`, `specs`, `cataloge`, `image`, `status`, `product_meta`, `featured`, `review`, `stock`, `image2`, `image3`, `product_meta_key`) VALUES
(1, 'Product1', '<p>\r\n	<span style="font-size:14px;"><span style="font-family: trebuchet ms,helvetica,sans-serif;">product123 Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Donec id elit non mi\r\nrajendro porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</span></span></p>\r\n', 40, 2, '<p>\r\n	Product1 Product1 Product1 Product1 Product1</p>\r\n', '<p>\r\n	Product1 spec&nbsp; Product1 spec Product1 spec Product1 spec Product1 spec</p>\r\n', 'efa53-Lighthouse.jpg', '5ebb1-Lighthouse.jpg', '1', '<p>\r\n	Product1 Product1 Product1 Product1 Product1</p>\r\n', '1', '<p>\r\n	TEST REVIEW</p>\r\n', 10, 'ed819-Penguins.jpg', 'bbfa9-Tulips.jpg', '<p>\r\n	Product1 Product1 Product1 Product1 Product1KEy keyyyyyyyyyyy</p>\r\n'),
(2, 'Product2', '<p>\r\n	Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>\r\n', 40, 100, '<p>\r\n	Product2 Product2 Product2 Product2</p>\r\n<p>\r\n	Product2 Product2 Product2 Product2</p>\r\n', '<p>\r\n	Product2 Product2 Product2 Product2</p>\r\n<p>\r\n	Product2 Product2 Product2 Product2</p>\r\n', '3c50b-Penguins.jpg', '25e56-Hydrangeas.jpg', '1', '<p>\r\n	Product2 Product2 Product2 Product2</p>\r\n<p>\r\n	Product2 Product2 Product2 Product2</p>\r\n', '1', '', 0, '', '', ''),
(3, 'Product3', '<p>\r\n	Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>\r\n', 41, 100, '<p>\r\n	Product3 Product3 Product3 Product3</p>\r\n', '<p>\r\n	Product3 Product3 Product3 Product3</p>\r\n', 'e2004-product.jpg', 'c52f3-product.jpg', '1', '<p>\r\n	Product3 Product3 Product3 Product3</p>\r\n', '1', '', 0, '', '', ''),
(4, 'Product4', '<div class="modal-body">\r\n	<p>\r\n		Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>\r\n	<p>\r\n		Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>\r\n	<p>\r\n		Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', 41, 100, '<p>\r\n	Product4 Product4 Product4</p>\r\n', '<p>\r\n	Product4 Product4 Product4</p>\r\n', '48cff-service_img1.png', '2482f-service_img1.png', '1', '<p>\r\n	Product4 Product4 Product4</p>\r\n', '1', '', 0, '', '', ''),
(5, 'product5', '<p>\r\n	product5 product5 product5 product5</p>\r\n', 42, 100, '<p>\r\n	product5&nbsp; product5&nbsp;&nbsp; product5</p>\r\n', '<p>\r\n	product5&nbsp; product5&nbsp;&nbsp; product5</p>\r\n', '4b130-img_1.jpg', '6b044-product.jpg', '1', '<p>\r\n	product5&nbsp; product5&nbsp;&nbsp; product5</p>\r\n', '0', '', 0, '', '', ''),
(6, 'product6', '<p>\r\n	product6&nbsp; product6&nbsp; product6&nbsp; product6</p>\r\n', 42, 100, '<p>\r\n	product6&nbsp; product6&nbsp; product6&nbsp; product6</p>\r\n<p>\r\n	product6&nbsp; product6&nbsp; product6&nbsp; product6</p>\r\n', '<p>\r\n	product6&nbsp; product6&nbsp; product6&nbsp; product6</p>\r\n<p>\r\n	product6&nbsp; product6&nbsp; product6&nbsp; product6</p>\r\n', '69b7c-product.jpg', '879a6-service_img1.png', '1', '<p>\r\n	product6&nbsp; product6&nbsp; product6&nbsp; product6</p>\r\n<p>\r\n	product6&nbsp; product6&nbsp; product6&nbsp; product6</p>\r\n', '0', '', 0, '', '', ''),
(7, 'Product 77', '<p>\r\n	Product 7 Product 7 Product 7 Product 7</p>\r\n', 43, 100, '<p>\r\n	Product 7 Product 7 Product 7 Product 7</p>\r\n', '<p>\r\n	Product 7 Product 7 Product 7 Product 7</p>\r\n', '303a5-product.jpg', 'e4f59-service_img1.png', '1', '<p>\r\n	Product 7 Product 7 Product 7 Product 7</p>\r\n<p>\r\n	Product 7 Product 7 Product 7 Product 7</p>\r\n', '0', '', 0, 'a8216-support.jpg', '890bd-service_img3.png', ''),
(8, 'Product100', '<p>\r\n	Product100 Product100 Product100</p>\r\n', 44, 100, '<p>\r\n	Product100Product100</p>\r\n', '<p>\r\n	Product100Product100</p>\r\n', '6bcfa-product.jpg', '70659-service_img1.png', '1', '<p>\r\n	Product100Product100</p>\r\n', '0', '', 0, '', '', ''),
(9, 'Product200', '<p>\r\n	Product200 Product200 Product200 Product200</p>\r\n', 45, 100, '<p>\r\n	Product200 Product200 Product200 Product200</p>\r\n<p>\r\n	Product200 Product200 Product200 Product200</p>\r\n', '<p>\r\n	Product200 Product200 Product200 Product200</p>\r\n<p>\r\n	Product200 Product200 Product200 Product200</p>\r\n', '7c81a-product.jpg', '64ec5-service_img1.png', '1', '<p>\r\n	Product200 Product200 Product200 Product200</p>\r\n<p>\r\n	Product200 Product200 Product200 Product200</p>\r\n', '0', '', 0, '', '', ''),
(10, 'Product877', '<p>\r\n	Product200 Product200 Product200 Product200</p>\r\n', 46, 100, '<p>\r\n	Product200 Product200 Product200 Product200</p>\r\n<p>\r\n	Product200 Product200 Product200 Product200</p>\r\n', '<p>\r\n	Product200 Product200 Product200 Product200</p>\r\n<p>\r\n	Product200 Product200 Product200 Product200</p>\r\n', '7f8f2-product.jpg', '8a923-product.jpg', '1', '<p>\r\n	Product200 Product200 Product200 Product200</p>\r\n<p>\r\n	Product200 Product200 Product200 Product200</p>\r\n', '0', '', 0, '', '', ''),
(11, 'Product500', '<p>\r\n	Product500 Product500 Product500 Product500</p>\r\n', 47, 100, '<p>\r\n	Product500Product500</p>\r\n', '<p>\r\n	Product500Product500</p>\r\n', 'b0dbd-product.jpg', '7275d-img_2.jpg', '1', '<p>\r\n	Product500Product500Product500</p>\r\n', '0', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

DROP TABLE IF EXISTS `product_category`;
CREATE TABLE IF NOT EXISTS `product_category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(150) NOT NULL,
  `status` enum('1','0') NOT NULL,
  `cat_image` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`cat_id`, `cat_name`, `status`, `cat_image`) VALUES
(40, 'Ham Radio Products', '1', 'a51d6-Koala.jpg'),
(41, 'FPGA Development Boards', '1', '1a7c3-img_1.jpg'),
(42, 'MIL-STD Power Adapters', '1', '4aa33-service_img2.png'),
(43, 'PCB & SIGNAL INTEGRITY Training courseware kits', '1', 'a8161-service_img1.png'),
(44, 'Used Instruments', '1', '9579f-service_img3.png');

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

DROP TABLE IF EXISTS `product_image`;
CREATE TABLE IF NOT EXISTS `product_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `product_image`
--


-- --------------------------------------------------------

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(100) NOT NULL,
  `s_desc` text NOT NULL,
  `s_image` varchar(255) NOT NULL,
  `s_status` enum('0','1') NOT NULL,
  `s_meta_desc` text NOT NULL,
  `s_meta_key` text NOT NULL,
  PRIMARY KEY (`s_id`),
  FULLTEXT KEY `s_desc` (`s_desc`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`s_id`, `s_name`, `s_desc`, `s_image`, `s_status`, `s_meta_desc`, `s_meta_key`) VALUES
(1, 'PCB Reverse Engineering', '<p>\r\n	<strong>Paglu Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>\r\n	<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '5a281-Chrysanthemum.jpg', '1', 'Service meta desc', 'Service meta key'),
(2, 'PCB Layout Design', '<p>\r\n	<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '2638b-news_img.jpg', '1', '', ''),
(3, 'Digitization of your old pcb documents', '<p>\r\n	<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 'abb59-product.jpg', '1', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `siteconfig`
--

DROP TABLE IF EXISTS `siteconfig`;
CREATE TABLE IF NOT EXISTS `siteconfig` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `sitename` varchar(100) NOT NULL,
  `admin_phone` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_address` varchar(100) NOT NULL,
  `metadesc` text NOT NULL,
  `metakey` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `siteconfig`
--

INSERT INTO `siteconfig` (`id`, `sitename`, `admin_phone`, `admin_email`, `admin_address`, `metadesc`, `metakey`) VALUES
(2, 'Ceda', '4343434', 'admin@admin.com', 'Deep in the Hell ', '<p>\r\n	Test meta</p>\r\n', '<p>\r\n	Test meta,Test meta ,Test meta,Test meta ,Test meta,Test meta</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
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
