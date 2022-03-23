-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 22, 2022 at 04:28 PM
-- Server version: 5.7.33
-- PHP Version: 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cyberfort_onweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `template_info`
--

CREATE TABLE `template_info` (
  `id` int(11) NOT NULL,
  `template_name` varchar(50) NOT NULL,
  `template_layout` varchar(50) DEFAULT NULL,
  `slug_url` varchar(50) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `theme_id` int(11) NOT NULL,
  `is_single_page` tinyint(1) NOT NULL,
  `source_id` int(11) NOT NULL COMMENT 'source of the template',
  `author_id` int(11) NOT NULL COMMENT 'id of the template creator',
  `active` int(11) NOT NULL DEFAULT '1',
  `added_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `template_info`
--

INSERT INTO `template_info` (`id`, `template_name`, `template_layout`, `slug_url`, `cat_id`, `sub_id`, `theme_id`, `is_single_page`, `source_id`, `author_id`, `active`, `added_on`) VALUES
(1, 'Hotel website', NULL, 'hotel_website', 1, 1, 1, 1, 1, 1, 1, '2022-02-07 15:55:20');

-- --------------------------------------------------------

--
-- Table structure for table `template_pages`
--

CREATE TABLE `template_pages` (
  `id` int(11) NOT NULL,
  `temp_id` int(11) NOT NULL,
  `page_name` varchar(50) NOT NULL,
  `slug_url` varchar(50) NOT NULL,
  `page_type` varchar(50) NOT NULL,
  `page_fields` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `page_data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `active` int(11) NOT NULL DEFAULT '1',
  `added_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `template_pages`
--

INSERT INTO `template_pages` (`id`, `temp_id`, `page_name`, `slug_url`, `page_type`, `page_fields`, `page_data`, `active`, `added_on`) VALUES
(1, 1, 'Home', 'home', '', '{\"ad_1\": {\"image\": \"Image\", \"title\": \"Title\", \"sub_title\": \"Sub Title\", \"button_link\": \"Button Link\", \"button_text\": \"Button Text\", \"description\": \"Description\"}, \"about\": {\"image\": \"Image\", \"title\": \"Title\", \"description\": \"Description\"}, \"sliders\": [{\"image\": \"Image\", \"title\": \"Title\", \"button_link\": \"Button Link\", \"button_text\": \"Button Text\", \"description\": \"Description\"}], \"discover\": {\"button_link\": \"Button Link\", \"button_text\": \"Button Text\", \"description\": \"Description\"}, \"features\": {\"feature_1\": {\"image\": \"Image\", \"title\": \"Title\"}, \"feature_2\": {\"image\": \"Image\", \"title\": \"Title\"}, \"feature_3\": {\"image\": \"Image\", \"title\": \"Title\"}}, \"page_title\": \"Page_Title\"}', '{\"ad_1\": {\"image\": \"images/about/signature2.png\", \"title\": \"Pull Up A Chair. Take A Taste & Come Join Us\", \"sub_title\": \"We Create Delicious Memories\", \"button_link\": \"/reservation\", \"button_text\": \"Book A Table\", \"description\": \"We have awesome recipes and the most talented chefs in town!\"}, \"about\": {\"image\": \"images/shapes/shape2.png\", \"title\": \"Welcome To The El Royale\", \"description\": \"Delicious Food, Friendly Staff, Cozy Atmosphere & Positive Emotions!\"}, \"sliders\": [{\"image\": \"images/backgrounds/16.jpg\", \"title\": \"Offering The Best Tasting Experience!\", \"button_link\": \"/menu-main\", \"button_text\": \"view Menu\", \"description\": \"Fresh Ingredient, Tasty Meals, And Creative Chefs\"}], \"discover\": {\"button_link\": \"/our-story\", \"button_text\": \"Discover Our Story\", \"description\": \"El Royale was the first restaurant to open in Egypt, the resturant designed with the history in mind we have created a soft industrial dining room.\"}, \"features\": [{\"image\": \"images/features/1.jpg\", \"title\": \"Start Eating Better\"}, {\"image\": \"images/features/3.jpg\", \"title\": \"Quality Is The Heart\"}, {\"image\": \"images/features/2.jpg\", \"title\": \"Hot & Ready To Serve\"}], \"page_title\": \"Elroyale Restaurant and Cafe\"}', 1, '2022-02-17 11:15:03');

-- --------------------------------------------------------

--
-- Table structure for table `theme_cat`
--

CREATE TABLE `theme_cat` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `added_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theme_cat`
--

INSERT INTO `theme_cat` (`id`, `name`, `active`, `added_on`) VALUES
(1, 'Hotel', 1, '2022-02-07 17:31:51'),
(2, 'Photography', 1, '2022-02-07 17:33:32'),
(3, 'film', 1, '2022-02-07 17:35:07'),
(4, 'Rajeena Najeeb', 1, '2022-02-07 17:47:03'),
(5, 'NIDHIN', 1, '2022-03-21 15:41:09'),
(6, 'education', 1, '2022-03-21 15:55:29');

-- --------------------------------------------------------

--
-- Table structure for table `theme_sub`
--

CREATE TABLE `theme_sub` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `added_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theme_sub`
--

INSERT INTO `theme_sub` (`id`, `name`, `cat_id`, `sort`, `active`, `added_on`) VALUES
(1, 'Restaurent', 1, NULL, 1, '2022-02-07 17:50:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `user_id` varchar(6) DEFAULT NULL,
  `user_type` varchar(5) NOT NULL DEFAULT 'user',
  `password` varchar(100) NOT NULL,
  `registration_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL DEFAULT '1',
  `inactive_from` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `username`, `user_id`, `user_type`, `password`, `registration_time`, `active`, `inactive_from`) VALUES
(1, 'rajeena', 'rajeena@cyberforttech.com', '9288657679', 'rajeena', NULL, 'admin', '$2y$10$LSQNh4KptYvxhDzRBdrrxOnMnVL4SqgYhHnnHOR16IF71x.70NH.i', '2022-01-26 10:40:46', 1, NULL),
(2, 'Hariharakumar R', 'agate.biz.consulting@gmail.com', '085909602192', 'agatebc', NULL, 'user', '$2y$10$Fzvp.PL3cjULtokKLKvqOOSc8xStod4RbbGPom6GOYiN0bxsCRKT6', '2022-01-26 11:09:30', 1, NULL),
(3, 'Rajeena Najeeb', 'rajeena@cyberfowwwch.com', '9288127679', 'raju', NULL, 'user', '$2y$10$S2mARSwqTIaXF08pm9qQ8.PGdBuLm.rYqLBUyrcUkYy0mCcdOrnz6', '2022-02-04 11:39:12', 1, NULL),
(4, 'Jayakrishnan Thoppil', 'jayakrishnan@cyberforttech.com', '08281300882', 'jayakt97', NULL, 'user', '$2y$10$LSQNh4KptYvxhDzRBdrrxOnMnVL4SqgYhHnnHOR16IF71x.70NH.i', '2022-03-16 20:24:34', 1, NULL),
(6, 'rahul', 'rahul@gmail.com', '9847943562', 'rahul', NULL, 'user', '$2y$10$l5hgVPdgXH01OD53/lQJY.x4RWwRba5O/OFWKlqG/JEkbWHtk7raW', '2022-03-21 10:08:02', 1, NULL),
(7, 'akash', 'akash@gmail.com', '267384956', 'akash', NULL, 'user', '$2y$10$I.0PHIrb1O3pAZYqi.rlSu4kgj7QjOqz.PIgJjPWHYnccD3Ew9ol.', '2022-03-21 10:15:14', 1, NULL),
(8, 'josh', 'josh@gmail.com', '3456367', 'josh', NULL, 'user', '$2y$10$3QTz.ERG8pqQkpLwZBPeSOf2lHBGBvingL6y9m4.5neHa5xWEGwsW', '2022-03-21 10:26:43', 1, NULL),
(9, 'reju', 'reju@gmail.com', '1256794657', 'reju', NULL, 'user', '$2y$10$7emj2gxDQ.E8djevVYmsV.iA3v/dTB6zN1D.PCBguygrOY4EpgD/u', '2022-03-21 15:01:28', 1, NULL),
(10, 'hari', 'hari@gmail.com', '5906204233', 'hari', NULL, 'user', '$2y$10$8unwQW/9fGPXCmL74MAcyem6V4m4/icBWiKeGWsbrTHDWeVG5jpze', '2022-03-21 16:40:40', 1, NULL),
(11, 'Bibith K Mathew', 'bibith.mathew@gmail.com', '8281623083', 'techybibi', NULL, 'user', '$2y$10$7oT0SEuoCs56QhloWIUk3.0h55b8d/Ww3ETgksCGRkuztcpyoBJym', '2022-03-21 20:32:06', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_websites`
--

CREATE TABLE `user_websites` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `website_name` varchar(50) NOT NULL,
  `slug_url` varchar(50) NOT NULL,
  `theme_id` int(11) NOT NULL,
  `is_subdomain` tinyint(1) NOT NULL DEFAULT '0',
  `web_content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `added_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL DEFAULT '1',
  `suspended` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'If a website is suspended ',
  `suspend_reason_id` int(11) DEFAULT NULL,
  `suspended_on` datetime DEFAULT NULL,
  `inactive_from` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='This table contains website info added by the users';

--
-- Dumping data for table `user_websites`
--

INSERT INTO `user_websites` (`id`, `user_id`, `website_name`, `slug_url`, `theme_id`, `is_subdomain`, `web_content`, `added_on`, `active`, `suspended`, `suspend_reason_id`, `suspended_on`, `inactive_from`) VALUES
(1, 1, 'dddd', 'dsfsddfdsf', 1, 1, NULL, '2022-02-07 16:58:07', 1, 1, NULL, NULL, NULL),
(2, 1, 'Demo Website', 'demo-website', 1, 0, NULL, '2022-03-21 03:39:26', 1, 0, NULL, NULL, NULL),
(3, 1, 'Nidhin Demo', 'nidhin-demo', 1, 0, NULL, '2022-03-21 04:38:41', 1, 0, NULL, NULL, NULL),
(4, 11, 'cafe mamre', 'cafe-mamre', 1, 0, NULL, '2022-03-21 15:03:29', 1, 0, NULL, NULL, NULL),
(5, 1, 'cafe mangos', 'cafe-mangos', 1, 0, NULL, '2022-03-21 15:53:10', 1, 0, NULL, NULL, NULL),
(6, 11, 'cafe galaxy', 'cafe-galaxy', 1, 0, NULL, '2022-03-21 16:42:09', 1, 0, NULL, NULL, NULL),
(7, 1, 'sdsdsd', 'sdsdsdsdsdsd', 1, 0, NULL, '2022-03-21 23:40:08', 1, 0, NULL, NULL, NULL),
(8, 1, 'edt', 'edt', 1, 0, NULL, '2022-03-21 23:41:20', 1, 0, NULL, NULL, NULL),
(9, 1, 'as s asd sas dsa ds', 'as-s-asd-sas-dsa-ds', 1, 0, NULL, '2022-03-21 23:44:01', 1, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_web_pages`
--

CREATE TABLE `user_web_pages` (
  `id` int(11) NOT NULL,
  `web_id` int(11) NOT NULL,
  `page_name` varchar(50) NOT NULL,
  `slug_url` varchar(50) NOT NULL,
  `page_type` varchar(50) NOT NULL,
  `page_data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `active` int(11) NOT NULL DEFAULT '1',
  `added_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_web_pages`
--

INSERT INTO `user_web_pages` (`id`, `web_id`, `page_name`, `slug_url`, `page_type`, `page_data`, `active`, `added_on`) VALUES
(1, 1, 'Home', 'index', '', NULL, 1, '2022-02-17 11:15:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `template_info`
--
ALTER TABLE `template_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template_pages`
--
ALTER TABLE `template_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theme_cat`
--
ALTER TABLE `theme_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theme_sub`
--
ALTER TABLE `theme_sub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_websites`
--
ALTER TABLE `user_websites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_web_pages`
--
ALTER TABLE `user_web_pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `template_info`
--
ALTER TABLE `template_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `template_pages`
--
ALTER TABLE `template_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `theme_cat`
--
ALTER TABLE `theme_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `theme_sub`
--
ALTER TABLE `theme_sub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_websites`
--
ALTER TABLE `user_websites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_web_pages`
--
ALTER TABLE `user_web_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
