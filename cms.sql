-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2020 at 04:48 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(32, 'Microsoft offices'),
(33, 'Hotels'),
(34, 'Tours');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL,
  `comment_post_id` int(3) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `Post_Id` int(11) NOT NULL,
  `Post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(30) NOT NULL,
  `post_user` varchar(255) NOT NULL,
  `post_user_session` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `Post_comment_count` varchar(255) NOT NULL,
  `Post_status` varchar(255) NOT NULL,
  `post_view_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`Post_Id`, `Post_category_id`, `post_title`, `post_author`, `post_user`, `post_user_session`, `post_date`, `post_image`, `post_content`, `post_tags`, `Post_comment_count`, `Post_status`, `post_view_count`) VALUES
(194, 32, 'What is Lorem Ipsum?', 'pothea', 'demo', '', '2020-09-15', 'Final_Golden Lion Tour Agency.jpg', '\r\n            ', 'published', '', 'published ', 2),
(205, 32, 'What is Lorem Ipsum?', 'pothea', 'demo', '', '2020-09-15', 'Final_Golden Lion Tour Agency.jpg', '\r\n        \r\n                ', 'published', '', 'published  ', 3),
(206, 32, 'What is Lorem Ipsum?', 'pothea', 'demo', '', '2020-09-15', 'Final_Golden Lion Tour Agency.jpg', '\r\n        \r\n                ', 'published', '', 'published  ', 2),
(207, 32, 'What is Lorem Ipsum?', '', 'student', '', '2020-09-15', '24.JPG', 'bnbvnbvnvnvnbvnv', 'php', '', 'published', 2),
(208, 33, 'Start from basic to advance level php', '', 'demo', '', '2020-09-15', '24.1.JPG', '\r\n        hghjgjhuyt     ', 'php', '', 'published ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_images` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randsalt` varchar(255) NOT NULL DEFAULT '1f3870be274f6c49b3e31a0c6728957f'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_images`, `user_role`, `randsalt`) VALUES
(86, 'demo', '$2y$12$QMi60829lC4pxcFq98zK/O2yNLMhmcCfULUDFzKK76yw/vaewWBkq', 'kert', 'Pothea', 'sreysomdara@gmail.com', '', 'administrator', '1f3870be274f6c49b3e31a0c6728957f'),
(89, 'student', '$2y$12$Z0YEVlK1MKiUasKQvlu3YOPWdUqXyTftUXX6M7THwuopY8ajeNsN6', '', '', 'sreysomdara@gmail.com', '', 'student', '1f3870be274f6c49b3e31a0c6728957f');

-- --------------------------------------------------------

--
-- Table structure for table `users_online`
--

CREATE TABLE `users_online` (
  `id` int(11) NOT NULL,
  `session` varchar(255) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_online`
--

INSERT INTO `users_online` (`id`, `session`, `time`) VALUES
(1, 'p0tcg1h16t4c0sk57sv24ktjfv', 1598789266),
(2, 'gmdtfck0la64gmrb2i1f0a8mhc', 1598796975),
(3, 'hqebsj59k66jse8jduachreq6b', 1598972439),
(4, '68q1u0764vhsnbik0p9cbk728c', 1599053918),
(5, '5b3qvkg237a3v17jkogft05gm6', 1599054043),
(6, 'ia9hacfcnrd1hne3aqvrogd4b8', 1599138826),
(7, 'e16iq4818t10f8o16fmb506k8f', 1599232296),
(8, '45is38nprm31a31qq5fr4hl55m', 1599270134),
(9, 'd6uteb9u7196u6rdl36n62h8h2', 1599264878),
(10, 'pgb03ttumthnieg4qhvqdt3u1s', 1599378004),
(11, 'pelobmk8vg3op4n4oapa564vh0', 1599398573),
(12, '4a8apk2268lel1ftbj75r9b027', 1599486270),
(13, 'r84bd01nrlslo1u86o6fuvarrh', 1599574930),
(14, '7ei7mlsjbbr67p0co8gv6oku43', 1599833313),
(15, '6cklim4f2lplsd75nn0fr7nhdd', 1599741926),
(16, 'qt420o1pchcbo9g5p2f62at8io', 1599918980),
(17, 'hjbrtsb71bbvofqtbj6ua262ss', 1599921010),
(18, '04beqoaqft92p8pj7bd4f303qt', 1599925843),
(19, 'inn6pbni2guh4ufab5hdj3ecic', 1600014514),
(20, 'hn95cauidudcen409hpp0ps0uj', 1600014343),
(21, 'sl42gjm4npupkn74obu4cvgggc', 1600013414),
(22, 'g1pea79qf449g04o3aeiqd0a4j', 1600084051),
(23, '99ajhcbhcm65deqtm0s2gbkstp', 1600084054),
(24, '2k9vfculcf0t8j4ikojjmmq9vu', 1600170106),
(25, 'me0lg8rpe3laknkiefu05rhjq2', 1600171032);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`Post_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_online`
--
ALTER TABLE `users_online`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `Post_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `users_online`
--
ALTER TABLE `users_online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
