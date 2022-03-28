-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 28, 2022 at 01:30 PM
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
-- Table structure for table `profile_website_template`
--

CREATE TABLE `profile_website_template` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `name` varchar(220) NOT NULL,
  `designation` longtext NOT NULL,
  `about` longtext NOT NULL,
  `link_1` longtext NOT NULL,
  `link_2` longtext NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_web_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_website_template`
--

INSERT INTO `profile_website_template` (`id`, `title`, `name`, `designation`, `about`, `link_1`, `link_2`, `user_id`, `user_web_id`) VALUES
(1, 'KARDSA', 'Bibith K Mathew', 'Front-end Developer | UI/UX Designer', '<p>Front-end Developer | UI/UX Designer</p>', 'http://127.0.0.1:8000/admin/template/edit/personal', 'http://127.0.0.1:8000/admin/template/edit/personal', 13, 11);

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
  `theme_id` int(11) DEFAULT NULL,
  `is_single_page` tinyint(1) DEFAULT NULL,
  `source_id` int(11) DEFAULT NULL COMMENT 'source of the template',
  `author_id` int(11) DEFAULT NULL COMMENT 'id of the template creator',
  `active` int(11) NOT NULL DEFAULT '1',
  `added_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `template_info`
--

INSERT INTO `template_info` (`id`, `template_name`, `template_layout`, `slug_url`, `cat_id`, `sub_id`, `theme_id`, `is_single_page`, `source_id`, `author_id`, `active`, `added_on`) VALUES
(1, 'Hotel website', NULL, 'hotel_website', 3, 1, 1, 1, 1, 1, 1, '2022-02-07 15:55:20'),
(8, 'Personal', NULL, 'templates.profile_website.profile', 3, 9, NULL, NULL, NULL, NULL, 1, '2022-03-27 21:45:55');

-- --------------------------------------------------------

--
-- Table structure for table `template_pages`
--

CREATE TABLE `template_pages` (
  `id` int(11) NOT NULL,
  `temp_id` int(11) NOT NULL,
  `page_name` varchar(50) NOT NULL,
  `slug_url` varchar(50) NOT NULL,
  `page_type` varchar(50) DEFAULT NULL,
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
(11, 'ffcgjfxjnx', 1, '2022-03-25 00:16:14'),
(10, 'Akshay', 1, '2022-03-25 00:13:14'),
(3, 'Hotel', 1, '2022-02-07 17:35:07'),
(4, 'Rajeena Najeeb', 1, '2022-02-07 17:47:03'),
(8, 'dfbdfBdB', 1, '2022-03-25 00:08:46'),
(9, 'Akshay', 1, '2022-03-25 00:10:00'),
(12, 'fjhgjj', 1, '2022-03-25 00:17:21'),
(13, 'gukgckh', 1, '2022-03-25 00:17:51');

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
(1, 'Restaurent', 3, NULL, 1, '2022-02-07 17:50:30'),
(2, 'bindhu', 1, NULL, 1, '2022-03-23 01:51:01'),
(3, 'fgfghf', 1, NULL, 1, '2022-03-23 01:53:59'),
(4, 'yhghyf', 1, NULL, 1, '2022-03-23 01:54:12'),
(5, '4rt', 1, NULL, 1, '2022-03-23 01:54:59'),
(6, 'efwr', 1, NULL, 1, '2022-03-23 01:55:21'),
(7, 'bvbbbvv', 4, NULL, 1, '2022-03-23 02:03:54'),
(8, 'bindhu', 5, NULL, 1, '2022-03-24 00:03:47'),
(9, 'fgsdvgdzzgbzd', 3, NULL, 1, '2022-03-25 00:08:24'),
(10, 'ehdhfhf', 12, NULL, 1, '2022-03-25 00:18:07'),
(11, 'Bibith K Mathew', 11, NULL, 1, '2022-03-27 14:55:24');

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
(2, 'Hariharakumar R', 'agate.biz.consulting@gmail.com', '085909602192', 'agatebc', NULL, 'user', '$2y$10$Fzvp.PL3cjULtokKLKvqOOSc8xStod4RbbGPom6GOYiN0bxsCRKT6', '2022-01-26 11:09:30', 1, NULL),
(3, 'Rajeena Najeeb', 'rajeena@cyberfowwwch.com', '9288127679', 'raju', NULL, 'user', '$2y$10$S2mARSwqTIaXF08pm9qQ8.PGdBuLm.rYqLBUyrcUkYy0mCcdOrnz6', '2022-02-04 11:39:12', 1, NULL),
(4, 'Jayakrishnan Thoppil', 'jayakrishnan@cyberforttech.com', '08281300882', 'jayakt97', NULL, 'user', '$2y$10$LSQNh4KptYvxhDzRBdrrxOnMnVL4SqgYhHnnHOR16IF71x.70NH.i', '2022-03-16 20:24:34', 1, NULL),
(6, 'rahul', 'rahul@gmail.com', '9847943562', 'rahul', NULL, 'user', '$2y$10$l5hgVPdgXH01OD53/lQJY.x4RWwRba5O/OFWKlqG/JEkbWHtk7raW', '2022-03-21 10:08:02', 1, NULL),
(7, 'akash', 'akash@gmail.com', '267384956', 'akash', NULL, 'user', '$2y$10$I.0PHIrb1O3pAZYqi.rlSu4kgj7QjOqz.PIgJjPWHYnccD3Ew9ol.', '2022-03-21 10:15:14', 1, NULL),
(8, 'josh', 'josh@gmail.com', '3456367', 'josh', NULL, 'user', '$2y$10$3QTz.ERG8pqQkpLwZBPeSOf2lHBGBvingL6y9m4.5neHa5xWEGwsW', '2022-03-21 10:26:43', 1, NULL),
(9, 'reju', 'reju@gmail.com', '1256794657', 'reju', NULL, 'user', '$2y$10$7emj2gxDQ.E8djevVYmsV.iA3v/dTB6zN1D.PCBguygrOY4EpgD/u', '2022-03-21 15:01:28', 1, NULL),
(10, 'hari', 'hari@gmail.com', '5906204233', 'hari', NULL, 'user', '$2y$10$8unwQW/9fGPXCmL74MAcyem6V4m4/icBWiKeGWsbrTHDWeVG5jpze', '2022-03-21 16:40:40', 1, NULL),
(11, 'Bibith K Mathew', 'bibith.mathew@gmail.com', '8281623083', 'techybibi', NULL, 'user', '$2y$10$7oT0SEuoCs56QhloWIUk3.0h55b8d/Ww3ETgksCGRkuztcpyoBJym', '2022-03-21 20:32:06', 1, NULL),
(12, 'midhun', 'midhun@gmail.com', '9625327367', NULL, NULL, 'admin', '$2y$10$socad8Kaj6zV.U91FGeW/.fXjOjvJSTSgbHEHHNJ/ViT8Wj7x0G26', '2022-03-23 19:44:47', 1, '2022-03-23 15:09:34'),
(13, 'Reuben Tom', 'reubentom@gmail.com', '1234567890', 'ruby', NULL, 'user', '$2y$10$bXuY46NLocEH..6VRqi3guI27PoF0pnk8VgQeJ3dUpaCibFSrQB0q', '2022-03-27 10:49:37', 1, NULL);

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
  `is_subdomain` tinyint(1) DEFAULT '0',
  `web_content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `added_on` datetime DEFAULT CURRENT_TIMESTAMP,
  `active` int(11) DEFAULT '1',
  `suspended` tinyint(1) DEFAULT '0' COMMENT 'If a website is suspended ',
  `suspend_reason_id` int(11) DEFAULT NULL,
  `suspended_on` datetime DEFAULT NULL,
  `inactive_from` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='This table contains website info added by the users';

--
-- Dumping data for table `user_websites`
--

INSERT INTO `user_websites` (`id`, `user_id`, `website_name`, `slug_url`, `theme_id`, `is_subdomain`, `web_content`, `added_on`, `active`, `suspended`, `suspend_reason_id`, `suspended_on`, `inactive_from`) VALUES
(11, 13, 'Testing', 'testing', 8, 0, NULL, '2022-03-27 14:56:01', 1, 0, NULL, NULL, NULL),
(12, 13, 'Testing Personal', 'testing-personal', 8, 0, NULL, '2022-03-28 08:22:53', 1, 0, NULL, NULL, NULL);

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
-- Indexes for dumped tables
--

--
-- Indexes for table `profile_website_template`
--
ALTER TABLE `profile_website_template`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `profile_website_template`
--
ALTER TABLE `profile_website_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `template_info`
--
ALTER TABLE `template_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `template_pages`
--
ALTER TABLE `template_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `theme_cat`
--
ALTER TABLE `theme_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `theme_sub`
--
ALTER TABLE `theme_sub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_websites`
--
ALTER TABLE `user_websites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_web_pages`
--
ALTER TABLE `user_web_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
