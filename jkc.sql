-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 06, 2022 at 01:41 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jkc`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `area_population` varchar(255) NOT NULL,
  `total_properties` varchar(255) NOT NULL,
  `average_house` varchar(255) NOT NULL,
  `total_branches` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `area_population`, `total_properties`, `average_house`, `total_branches`) VALUES
(1, '22222', '22222', '3332', '3');

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `role`, `email`, `mobile`, `status`) VALUES
(1, 'admin', 'admin', 0, '', '', 1),
(2, 'vishal', 'vishal', 1, 'vishal@gmail.com', '1234567890', 1),
(6, 'Tarun', '1234444', 1, 'tarunshori801@gmail.com', '07000127893', 1);

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `name`, `image`, `location`, `status`) VALUES
(1, 'Yashwant Jangade', '254565932_team-2.jpg', 'Bhatagaon', 1),
(3, 'Tarun Kumar', '960158108_team-6.jpg', 'Santoshi Nagar', 1),
(4, 'Sheela', '822863595_team-3.jpg', 'Pachpedi Naka', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `heading1` varchar(255) NOT NULL,
  `heading2` varchar(255) NOT NULL,
  `btn_txt` varchar(255) DEFAULT NULL,
  `btn_link` varchar(55) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `order_no` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `heading1`, `heading2`, `btn_txt`, `btn_link`, `image`, `order_no`, `status`) VALUES
(19, 'Find Perfect House From Your Area.', 'From as low as  A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'Contact Us', 'contact.php', '177229976_bg_1.jpg', 1, 1),
(20, 'Best Deals For You...', 'Offer Closes  Soon', 'View All Properties', 'categories.php', '903599806_place-4.jpg', 2, 1),
(21, 'Make Your Dream Home With Us', 'We Are Perfect For Best home plans', 'Contact Us', 'contact.php', '889625204_place-3.jpg', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `name`, `description`, `image`, `status`, `added_on`) VALUES
(28, 'Tarun Kumar', 'Find a few of the most recent events in your industry and blog about them. You can even link to news articles if you feel it is appropriate.', '329172237_person_4.jpg', 1, '2005-06-21 18:30:00'),
(29, 'Tarun Kumar', 'This type of blog post can be really fun to write, but remember to be wise. Controversy is always newsworthy  just look at the local news, they’re always reporting on different controversies!', '307493664_person_1.jpg', 1, '2022-06-04 18:30:00'),
(30, 'Swaraj Hirwani', 'Since controversies are highly emotional, you want to be careful and choose your words wisely.', '481923004_person_3.jpg', 1, '2022-06-05 13:44:21'),
(31, 'Yashwant Jangade', 'If you are in photography, write down your engagement session checklist to make sure you have all that you need for the perfect engagement session.', '476320406_person_1.jpg', 1, '2022-06-06 11:14:45');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories`, `status`) VALUES
(4, 'Properties', 1);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `image`, `status`) VALUES
(2, 'Raipur', '708892809_place-1.jpg', 1),
(3, 'Bilaspur', '864957915_place-2.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(75) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `comment` text NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `mobile`, `comment`, `added_on`) VALUES
(31, 'Tarun shori', 'tarunshori801@gmail.com', '07000127893', 'home', '2022-05-30 08:08:06'),
(32, 'Tarun shori', 'tarunshori801@gmail.com', '07000127893', 'contact', '2022-05-30 08:08:20'),
(33, 'Tarun shori', 'tarunshori801@gmail.com', '07000127893', 'qqqaaaa', '2022-06-03 02:30:40');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `status`, `added_on`) VALUES
(10, '832157954_work-7.jpg', 1, '2022-06-06 11:18:17'),
(11, '691282362_work-8.jpg', 1, '2022-06-06 11:18:24'),
(12, '744147994_work-9.jpg', 1, '2022-06-06 11:18:32'),
(13, '232304617_work-6.jpg', 1, '2022-06-06 11:18:39');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `sub_categories_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mrp` float NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_desc` varchar(2000) NOT NULL,
  `description` text NOT NULL,
  `best_seller` int(11) NOT NULL,
  `meta_title` varchar(2000) NOT NULL,
  `meta_desc` varchar(2000) NOT NULL,
  `meta_keyword` varchar(2000) NOT NULL,
  `added_by` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `project_size` varchar(225) NOT NULL,
  `project_type` varchar(255) NOT NULL,
  `pricesq` float NOT NULL,
  `project_ameneties` varchar(255) NOT NULL,
  `rera_no` int(255) NOT NULL,
  `rera` int(255) NOT NULL,
  `construction_status` varchar(255) NOT NULL,
  `possession_start` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `categories_id`, `sub_categories_id`, `name`, `mrp`, `image`, `short_desc`, `description`, `best_seller`, `meta_title`, `meta_desc`, `meta_keyword`, `added_by`, `status`, `project_size`, `project_type`, `pricesq`, `project_ameneties`, `rera_no`, `rera`, `construction_status`, `possession_start`, `location`) VALUES
(27, 4, 3, 'manish', 80000, '956851989_pexels-pixabay-265152.jpg', 'qq', 'qqq', 1, 'qq', 'qq', 'qq', 0, 1, 'qqq', 'Sale', 0, 'qqq', 0, 0, 'qqq', 'qq', 'santoshi'),
(28, 4, 3, 'swaraj', 250000, '875085236_about.jpg', 'qq', 'qq', 1, 'qq', 'qq', 'qq', 0, 1, 'qq', 'Rent', 0, 'qq', 0, 0, 'qq', 'qq', 'bhatagaon'),
(29, 4, 3, 'raju', 150000, '933095911_pexels-pixabay-265152.jpg', 'qq', 'qq', 1, 'qq', 'qq', 'qq', 22, 1, 'qq', 'Sale', 0, '111', 11, 0, '11', 'bhatagaon', 'santoshi nagar'),
(30, 4, 10, 'house and hall', 70000, '644698916_about.jpg', 'hfh', 'fhg', 0, 'fff', 'ffhg', 'fhg', 0, 1, 'qqqq', 'Sale', 0, '111', 0, 0, 'hvvjj', 'hnfhgh', 'bhatagaon'),
(31, 4, 11, 'tarun', 6000, '769785858_chaos-soccer-gear-Cjfl8r_eYxY-unsplash.jpg', 'short desc', 'description', 1, 'qq', 'qq', 'qq', 0, 1, 'ddd', 'Rent', 0, '1bhk,2bhk', 0, 0, 'sgds', 'sd', 'bhatagaon'),
(32, 4, 3, 'Ambuja mall', 10000, '936771920_image_4.jpg', 'ww', 'ww', 1, 'ww', 'www', 'wwww', 11, 1, 'www', 'Office', 0, 'ww', 0, 0, 'ww', 'ww', 'motinagar'),
(33, 4, 3, 'Dawada Colony', 70000, '572945789_image_3.jpg', 'qq', 'qq', 1, 'qq', 'qq', 'qq', 11, 1, '1111', 'Sale', 0, '11', 11, 111, '11', '2022', 'motinagar'),
(34, 4, 3, 'Pujari Park', 70000, '863881967_image_6.jpg', 'To perfect the checklist, take a common task and break it down into short, actionable items.', 'To perfect the checklist, take a common task and break it down into short, actionable items.', 1, 'qqq', 'qqq', 'qqq', 111, 1, '111', 'Sale', 1, '11', 111, 0, 'Ready', '2022', 'Bhatagaon'),
(37, 4, 3, 'Tarun Kumar', 111111000, '847887184_image_5.jpg', '11', '111', 1, '11', '11', '111', 2, 1, '111', 'Sale', 0, '111', 111, 111, '111', '1111', 'Motinagar'),
(38, 4, 3, 'Ashoka park', 100000, '307530366_bg_2.jpg', 'To perfect the checklist, take a common task and break it down into short, actionable items.', 'To perfect the checklist, take a common task and break it down into short, actionable items.', 1, '11', '11', '11', 6, 1, '11', 'Commercial', 0, 'hdfgbhd', 2147483647, 0, 'Ready To Move', '2022', 'Bhatagaon');

-- --------------------------------------------------------

--
-- Table structure for table `product_attributes`
--

CREATE TABLE `product_attributes` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `mrp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_attributes`
--

INSERT INTO `product_attributes` (`id`, `product_id`, `mrp`) VALUES
(1, 8, 1900),
(2, 8, 1900),
(3, 8, 1900),
(4, 8, 1800),
(5, 7, 1900),
(6, 7, 1900),
(7, 7, 1900),
(8, 6, 1999),
(9, 6, 1989),
(10, 5, 2799),
(11, 18, 44);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_images` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `product_images`) VALUES
(2, 8, '301120849_309027777_Floral-Print-Polo-T-shirt.jpg'),
(4, 5, '544478275_jazmin-quaynor-CXjp1ycr5Vw-unsplash.jpg'),
(5, 12, '853301946_nandha-kumar-pj-jTRRhLw8MJc-unsplash.jpg'),
(6, 15, '906896884_pexels-pixabay-265152.jpg'),
(7, 15, '639538403_about.jpg'),
(8, 25, '640714807_soviet-artefacts-uwTARWZfuqc-unsplash.jpg'),
(9, 25, '272987915_jess-bailey-l3N9Q27zULw-unsplash.jpg'),
(10, 25, '364505429_emilio-garcia-AWdCgDDedH0-unsplash.jpg'),
(11, 28, '766317874_alexander-shatov-71Qk8ODIBko-unsplash.jpg'),
(12, 28, '691689923_disinfecting-home.jpg'),
(13, 28, '912208621_chaos-soccer-gear-Cjfl8r_eYxY-unsplash.jpg'),
(14, 28, '451275990_tiplada-m-LcClptBMDSo-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `sub_categories` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `categories_id`, `sub_categories`, `status`) VALUES
(1, 2, 'T-Shirt', 1),
(2, 2, 'Trouser', 1),
(3, 4, 'Apartments', 1),
(10, 4, 'Rent', 1),
(11, 4, 'Houses', 1),
(12, 4, 'Sale', 1),
(13, 4, 'Office', 1),
(14, 4, 'Commercial', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `comment` text NOT NULL,
  `profession` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `comment`, `profession`, `image`, `status`, `added_on`) VALUES
(8, 'Tarun Kumar', 'To perfect the checklist, take a common task and break it down into short, actionable items.', 'Developer', '847858086_person_4.jpg', 1, '2022-06-05 18:16:09'),
(9, 'Swaraj Hirwani', 'To perfect the checklist, take a common task and break it down into short, actionable items.', 'Manager', '256557448_person_3.jpg', 1, '2022-06-05 18:19:48'),
(10, 'Yashwant Jangade', 'To perfect the checklist, take a common task and break it down into short, actionable items.', 'Designer', '955658307_person_1.jpg', 1, '2022-06-06 16:46:44'),
(11, 'Mahendra', 'To perfect the checklist, take a common task and break it down into short, actionable items.', 'Student', '562408511_person_2.jpg', 1, '2022-06-06 16:47:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `added_on`) VALUES
(24, 'tarunshori801@gmail.com', '2022-06-04 11:37:16'),
(30, 'tarunshori801@gmail.com', '2022-06-05 01:28:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `product_attributes`
--
ALTER TABLE `product_attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
