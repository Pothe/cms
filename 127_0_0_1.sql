-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2020 at 07:19 AM
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
-- Database: `bilal`
--
CREATE DATABASE IF NOT EXISTS `bilal` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bilal`;

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `activity_log_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `date` varchar(25) NOT NULL,
  `action` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`activity_log_id`, `username`, `date`, `action`) VALUES
(1, 'noel.titus', '2016-10-24 09:12:05', 'Add Class Form 6'),
(2, 'noel.titus', '2016-10-24 09:12:58', 'Edit Class Form 6'),
(3, 'noel.titus', '2016-10-24 09:15:07', 'Add Student aaa bbb'),
(4, 'noel.titus', '2016-10-24 09:15:36', 'Updated Student aaa bbb'),
(5, 'noel.titus', '2016-10-24 09:17:50', 'Add Student buel bol'),
(6, 'noel.titus', '2016-10-24 09:23:17', 'Add User abdul.hemedy');

-- --------------------------------------------------------

--
-- Table structure for table `aprjun`
--

CREATE TABLE `aprjun` (
  `aprjun_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class` varchar(25) NOT NULL,
  `class_fee` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `status_fee` int(11) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aprjun`
--

INSERT INTO `aprjun` (`aprjun_id`, `student_id`, `class`, `class_fee`, `status`, `status_fee`, `fee`) VALUES
(1, 1, 'Form 6', 250000, 'half', 125000, 0),
(2, 2, 'Form 6', 250000, 'paying', 250000, 250000);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `fee` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`, `category`, `fee`) VALUES
(1, 'Form 6', 'Secondary', 250000);

-- --------------------------------------------------------

--
-- Table structure for table `janmar`
--

CREATE TABLE `janmar` (
  `janmar_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class` varchar(25) NOT NULL,
  `class_fee` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `status_fee` int(11) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `janmar`
--

INSERT INTO `janmar` (`janmar_id`, `student_id`, `class`, `class_fee`, `status`, `status_fee`, `fee`) VALUES
(1, 1, 'Form 6', 250000, 'half', 125000, 0),
(2, 2, 'Form 6', 250000, 'paying', 250000, 250000);

-- --------------------------------------------------------

--
-- Table structure for table `julsep`
--

CREATE TABLE `julsep` (
  `julsep_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class` varchar(25) NOT NULL,
  `class_fee` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `status_fee` int(11) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `julsep`
--

INSERT INTO `julsep` (`julsep_id`, `student_id`, `class`, `class_fee`, `status`, `status_fee`, `fee`) VALUES
(1, 1, 'Form 6', 250000, 'half', 125000, 0),
(2, 2, 'Form 6', 250000, 'paying', 250000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `octdec`
--

CREATE TABLE `octdec` (
  `octdec_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class` varchar(25) NOT NULL,
  `class_fee` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `status_fee` int(11) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `octdec`
--

INSERT INTO `octdec` (`octdec_id`, `student_id`, `class`, `class_fee`, `status`, `status_fee`, `fee`) VALUES
(1, 1, 'Form 6', 250000, 'half', 125000, 0),
(2, 2, 'Form 6', 250000, 'paying', 250000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment_made`
--

CREATE TABLE `payment_made` (
  `pay_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `period` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL,
  `date_of_payment` date NOT NULL,
  `receipt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_made`
--

INSERT INTO `payment_made` (`pay_id`, `student_id`, `period`, `amount`, `date_of_payment`, `receipt`) VALUES
(1, 2, 'janmar', 250000, '2016-10-24', 23444),
(2, 2, 'aprjun', 250000, '2016-10-24', 90909887);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `class` varchar(30) NOT NULL,
  `gfirstname` varchar(25) NOT NULL,
  `gmiddlename` varchar(25) NOT NULL,
  `glastname` varchar(25) NOT NULL,
  `rship` varchar(30) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `status` varchar(50) NOT NULL,
  `transport` varchar(60) NOT NULL,
  `route` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `firstname`, `middlename`, `lastname`, `gender`, `dob`, `address`, `class`, `gfirstname`, `gmiddlename`, `glastname`, `rship`, `tel`, `status`, `transport`, `route`) VALUES
(1, 'aaa', 'bbb', 'cvvv', 'Male', '2016-10-25', 'bububu', 'Form 6', 'oplkk', 'jjj', 'rfrf', 'father', '0789554433', 'half', 'yes', 'kijichi'),
(2, 'buel', 'bol', 'buel', 'Female', '2016-10-26', 'stonetown', 'Form 6', 'bun', 'bol', 'buel', 'mother', '0717884452', 'paying', 'no', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `firstname`, `lastname`, `status`) VALUES
(3, 'noel.titus', '54321', 'noel', 'titus', 'administrator'),
(4, 'abdul.hemedy', '12345', 'abdul', 'hemedy', 'normal');

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE `user_log` (
  `user_log_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `login_date` varchar(50) NOT NULL,
  `logout_date` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`user_log_id`, `username`, `login_date`, `logout_date`, `user_id`) VALUES
(1, 'noel.titus', '2016-10-24 09:10:07', '2016-10-24 09:23:20', 3),
(2, 'noel.titus', '2016-10-24 09:11:10', '2016-10-24 09:23:20', 3),
(3, 'noel.titus', '2016-10-24 09:23:04', '2016-10-24 09:23:20', 3),
(4, 'abdul.hemedy', '2016-10-24 09:23:30', '2016-10-24 09:36:55', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`activity_log_id`);

--
-- Indexes for table `aprjun`
--
ALTER TABLE `aprjun`
  ADD PRIMARY KEY (`aprjun_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `janmar`
--
ALTER TABLE `janmar`
  ADD PRIMARY KEY (`janmar_id`);

--
-- Indexes for table `julsep`
--
ALTER TABLE `julsep`
  ADD PRIMARY KEY (`julsep_id`);

--
-- Indexes for table `octdec`
--
ALTER TABLE `octdec`
  ADD PRIMARY KEY (`octdec_id`);

--
-- Indexes for table `payment_made`
--
ALTER TABLE `payment_made`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`user_log_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `activity_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `aprjun`
--
ALTER TABLE `aprjun`
  MODIFY `aprjun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `janmar`
--
ALTER TABLE `janmar`
  MODIFY `janmar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `julsep`
--
ALTER TABLE `julsep`
  MODIFY `julsep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `octdec`
--
ALTER TABLE `octdec`
  MODIFY `octdec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment_made`
--
ALTER TABLE `payment_made`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_log`
--
ALTER TABLE `user_log`
  MODIFY `user_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Database: `cms`
--
CREATE DATABASE IF NOT EXISTS `cms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cms`;

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

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(1, 225, 'pothea', 'sreysomdara@gmail.com', 'sdfsadfsadf', 'approved', '2020-09-24');

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
(221, 32, 'Start from basic to advance level php', '', 'demo', '', '2020-10-23', '24.1.JPG', '<p>hghjgjhuyt</p>    ', 'php', '', 'published', 33),
(225, 32, 'Microsoft Excel 2016', '', 'student', '', '2020-10-17', '24.JPG', '<p>sdfsdfasdfsdf</p>', 'Excel', '', 'published', 9),
(226, 32, 'What is Lorem Ipsum?', '', 'student', '', '2020-09-25', '24.1.JPG', '<p>ccbvbcvb</p>', 'php', '', 'published', 17),
(227, 32, 'What is Lorem Ipsum?', '', 'student', '', '2020-09-25', '24.1.JPG', '<p>ccbvbcvb</p>', 'php', '', 'draft', 7),
(228, 33, 'Microsoft Excel 2016', '', 'student', '', '2020-10-17', '24.JPG', '<p>sdfsdfasdfsdf</p>', 'Excel', '', 'draft', 9);

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
(89, 'student', '$2y$12$tWM3.AoMcLoTHqBvjMlj5OlZ4l0s/vfoUzIXp5euXAXG9jjS.bqGy', 'pothea', 'keo', 'sreysomdara@gmail.com', '', 'student', '1f3870be274f6c49b3e31a0c6728957f'),
(90, 'layheng', '$2y$12$U2mpAp/1jKYsYfNHNnMp5.XG/pZNnjoBRTDIA9ySxfpSOklE9HJMK', 'layheng', 'seoun', 'demo@gmail.com', '', 'subscribe', '1f3870be274f6c49b3e31a0c6728957f'),
(91, 'demo', '$2y$12$0BQEMw5czpAMItWGUS8nnukLEMI0HjXNX9jhZUKJdIKHOcYEMvdKe', 'demo', 'demo', 'sreysomdara@gmail.com', '', 'administrator', '1f3870be274f6c49b3e31a0c6728957f'),
(109, 'pich', '$2y$12$Y751oihDZ.uZJdc0IP.VquyFWfPYnMi7koRPFVRgHCF/GYaSY/vg.', '', '', 'pich@gmail.com', '', 'subscribe', '1f3870be274f6c49b3e31a0c6728957f'),
(110, 'pich', '$2y$12$KSpa2lwqTfTewhnB.SgS5.asejDdtZuOleqWxeI8PftE0L7SIID1a', '', '', 'pich@gmail.com', '', 'subscribe', '1f3870be274f6c49b3e31a0c6728957f'),
(111, 'pich', '$2y$12$z.x0csm.s9s2aXYse..NHOF7tkt7PyJVDKf7jlZIJTZKBBMoe/QQy', '', '', 'pich@gmail.com', '', 'subscribe', '1f3870be274f6c49b3e31a0c6728957f');

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
(25, 'me0lg8rpe3laknkiefu05rhjq2', 1600171032),
(26, 't2ipqei50a2gcbmvokfbm2o842', 1600182240),
(27, 'soljhq3qnu7pfhgo1ihfoiatcg', 1600224500),
(28, 'ejnf13ikavhpbm8bsajvgo95pi', 1600305919),
(29, '9jdgi835cksrl5o7ei491h82jd', 1600425990),
(30, '4brke9dg511303bguavvm9lg25', 1600578474),
(31, 'hhfgnb38qciduh71qlmlebrq03', 1600583472),
(32, 'gr4mqlm83jl2tplebcks3rl5t8', 1600584817),
(33, '2u5krr77ntd0398tsj1ldg8430', 1600613114),
(34, 'hmrevo26jj6uks8l0fjd4494m2', 1600789027),
(35, 'pucejk73g8c23us9p70m15a7n8', 1600791847),
(36, 'j7fiegol038keq4bglv4jfgpug', 1600869825),
(37, 'vheahq5enan4eniuer063epctk', 1600907920),
(38, 'p7a0cqfmjo83hjvvgekjtt5o7h', 1600954816),
(39, 'tgeo6lka7qh9olc84ook00mcg9', 1600987412),
(40, 'cb6tv2rcnaddai450l8k4ccqqv', 1600992294),
(41, 'm5ks2ergjpiff9p44ssr2d7542', 1601391608),
(42, '713a9dmc3r5tq5e9gkpa5atpl0', 1601391501),
(43, 'k4plo4okdgms0bnnc25svdsjpo', 1601473214),
(44, 'g1o82kd55rt2ihmkd591vge1jb', 1601565561),
(45, 'q49tv75t8jftbf7iahjc15f4qp', 1601649945),
(46, 'fuero6pl6ml17rpd41eb4m4tqe', 1601658603),
(47, 'm004oo8q8m93345bj70hkagmi8', 1601659759),
(48, 'udiq1qb5mdscnbcrs04l5ifk0h', 1601659441),
(49, 'l7h96c0o66kjsl0r2l7n9oeekn', 1601659998),
(50, 'e5i30apusfb76k9u70ekdfvfvr', 1601824146),
(51, 'ilr4vi5hdqgf4ujbqeq6im79rc', 1601910325),
(52, '9dq3oj4u9bd8ubnu9kflp8halr', 1601999333),
(53, '9p29um355oc1n91de0bhucve2t', 1602422944),
(54, 'dkqfggtkto9dc72fsas5a1shf7', 1602422991),
(55, 'obu89dni13ms9v8bhcm95332ek', 1602426189),
(56, 'nf3g8o2pdt0bm0ku0u22vn1u0h', 1602598190),
(57, 'vaee3l2aqg2v26mt93rdmkr4sk', 1602740431),
(58, 'iutg8fqlererf4jmpp062pqnbq', 1602855407),
(59, 'hjpkmck5i5fir82s364qo0ivgd', 1602856786),
(60, 'e2i21iamdeo4ghr7ulcrknipp8', 1602918008),
(61, 'tgglh0ag7u2neu9r7lvdn2o4lg', 1602915553),
(62, '1ggsjgqs2jc21ga1sr7b7dfgfj', 1602933487),
(63, 'dvli3ndmeua2lg00knns5kmr5c', 1603033266),
(64, '9h7anb3kug1vqghinnos0nrepb', 1603293358),
(65, 'ohhi75edocrbltj7slk5t6suui', 1603463044),
(66, 'fric9tdudd873hd8chknkgoa4s', 1603500139),
(67, 'b30k5ror070urfcubehinge684', 1603542772),
(68, 'fgh0p9o1g16ne62f35es528a0l', 1603546236),
(69, '8e03btma78vveo6eq4rmfbnckp', 1603546040),
(70, '6kg01bj2fm0ou52kkf2plhdlnr', 1603718457),
(71, 'g9ltha6ba9059ibju1i7pb1pd7', 1603961460),
(72, 'nsa1518vhs2td46sc8inbfhgd7', 1604062736),
(73, 'jf03usg36p1704vutugotcod0r', 1604109875),
(74, '7ehnh0ojdkmukhb4on6lahm9ii', 1604124439);

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
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `Post_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `users_online`
--
ALTER TABLE `users_online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- Database: `hr`
--
CREATE DATABASE IF NOT EXISTS `hr` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hr`;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Database: `laravel`
--
CREATE DATABASE IF NOT EXISTS `laravel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `laravel`;

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
(19, 'English'),
(30, 'PHP'),
(31, 'Photoshop');

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

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(76, 100, 'layheng', 'sreysomdara@gmail.com', 'sdfsdf', 'unapprove', '2020-08-10'),
(79, 101, 'pothea', 'abc@gmail.com', 'safsf', 'unapprove', '2020-08-10');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `Post_Id` int(11) NOT NULL,
  `Post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(30) NOT NULL,
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

INSERT INTO `posts` (`Post_Id`, `Post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `Post_comment_count`, `Post_status`, `post_view_count`) VALUES
(88, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-04', '4 cats.png', '', 'published', '', 'published', 4),
(89, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-04', '4 cats.png', '', 'published', '', 'published', 0),
(90, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-04', '4 cats.png', '', 'published', '', 'published', 1),
(94, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-04', '4 cats.png', '', 'published', '', 'published', 0),
(95, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-04', '4 cats.png', '', 'published', '', 'published', 0),
(96, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-04', '4 cats.png', '', 'published', '', 'published', 0),
(97, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-04', '4 cats.png', '', 'published', '', 'published', 0),
(98, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-04', '4 cats.png', '', 'published', '', 'published', 0),
(99, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-04', '4 cats.png', '', 'published', '', 'published', 0),
(100, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-04', '4 cats.png', '', 'published', '1', 'published', 0),
(101, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-04', '4 cats.png', '', 'published', '1', 'published', 0),
(103, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-14', '4 cats.png', '', 'published', '', 'published', 0),
(104, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-14', '4 cats.png', '', 'published', '', 'published', 0),
(105, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-14', '4 cats.png', '', 'published', '', 'published', 0),
(106, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-14', '4 cats.png', '', 'published', '', 'published', 0),
(107, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-14', '4 cats.png', '', 'published', '', 'published', 0),
(108, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-14', '4 cats.png', '', 'published', '', 'published', 1),
(109, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-14', '4 cats.png', '', 'published', '', 'published', 0),
(110, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-14', '4 cats.png', '', 'published', '', 'published', 0),
(111, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-14', '4 cats.png', '', 'published', '', 'published', 0),
(112, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-14', '4 cats.png', '', 'published', '', 'published', 0),
(113, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-14', '4 cats.png', '', 'published', '', 'published', 0),
(114, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(115, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(116, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(117, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(118, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(119, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(120, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(121, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(122, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(123, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(124, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(125, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(126, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(127, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(128, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(129, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(130, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(131, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(132, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(133, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(134, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(135, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(136, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(137, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(138, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(139, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(140, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(141, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(142, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(143, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(144, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(145, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(146, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(147, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(148, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(149, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(150, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(151, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(152, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(153, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(154, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(155, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(156, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(157, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(158, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(159, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(160, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(161, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(162, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(163, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(164, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(165, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(166, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(167, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(168, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(169, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(170, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(171, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(172, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(173, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(174, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(175, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(176, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(177, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(178, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0),
(179, 19, 'What is Lorem Ipsum?', 'pothea', '2020-08-17', '4 cats.png', '', 'published', '', 'published', 0);

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
(71, 'demo', '1fW7ralid1r8k', 'pothea', 'Nan', 'sreysomdara@gmail.com', '', 'administrator', '1f3870be274f6c49b3e31a0c6728957f'),
(79, 'demo02', '$2y$12$5lZhGl971XPZvChC9Rnzue5C596gELxczvfbQl2IDuc.T61qoGx16', '', '', 'demo02@gmail.com', '', 'administrator', '1f3870be274f6c49b3e31a0c6728957f'),
(82, 'demo12', '$2y$12$9NNl.xvisbshDnv5ccqiMO5WrHv91NxT2JsPXuLRAYZxnRxETLrxa', 'demo12', 'demo', 'sreysomdara@gmail.com', '', 'administrator', '1f3870be274f6c49b3e31a0c6728957f');

-- --------------------------------------------------------

--
-- Table structure for table `users_online`
--

CREATE TABLE `users_online` (
  `id` int(11) NOT NULL,
  `session` varchar(255) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_online`
--

INSERT INTO `users_online` (`id`, `session`, `time`) VALUES
(1, 'e57tn9q1sniieiuu70g31v81ha', 1597679600),
(2, '465h96ccqh495bjjjudt3iuv5m', 1597678386),
(3, 'c9kr7orijj8s3ej7cobapsvvso', 1597678271),
(4, '5i83fmmeabg8op3ehnhbiopsgu', 1597679592),
(5, 'kurghirpnfea0mdbs1vbqd0ifr', 1597722828),
(6, 'j622unhguigcvdp0g9qvrkvsf3', 1597723639),
(7, 'hg1cevl6pfdm7icd3m4jdtp70e', 1597723593),
(8, 't7u9e6spticvpuajecakqld2g0', 1597745153),
(9, '', 1597756193),
(10, '74d82fttg027jau8vuuetgga60', 1597745083),
(11, 't796c2dg6092ch97ggt6ms6t2c', 1597745125),
(12, 'otlpseclf5v33s0a2mmf598pcm', 1597756871),
(13, '8siqh558rgp0uts7prvl56tf84', 1597757659),
(14, 'bugeh818qdntqu8tv7g2g93ac8', 1597756342),
(15, '91992s7vc7438l1jgnrqvorf1o', 1597828200),
(16, 'drbounjphb9vbnu32qdv2fekfn', 1597834093),
(17, '7noc3363umi6b23806sgib7nt5', 1597833723),
(18, 'q47er0in15tsstk9d2tnan55vc', 1597852071),
(19, 'q4v5pjmtuqdvu28hr05kttv9cg', 1597852176),
(20, 'v2j2kcechp03r98n7hhs65kjso', 1597890870),
(21, '5h0q6hhaes3225h4lvpj92fgai', 1597895911);

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
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `Post_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `users_online`
--
ALTER TABLE `users_online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Database: `learning_laravel`
--
CREATE DATABASE IF NOT EXISTS `learning_laravel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `learning_laravel`;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Dumping data for table `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'database', 'cms', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"structure_or_data_forced\":\"0\",\"table_select[]\":[\"categories\",\"comments\",\"posts\",\"users\",\"users_online\"],\"table_structure[]\":[\"categories\",\"comments\",\"posts\",\"users\",\"users_online\"],\"table_data[]\":[\"categories\",\"comments\",\"posts\",\"users\",\"users_online\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@DATABASE@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"structure_and_data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"structure_and_data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_procedure_function\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"xml_structure_or_data\":\"data\",\"xml_export_events\":\"something\",\"xml_export_functions\":\"something\",\"xml_export_procedures\":\"something\",\"xml_export_tables\":\"something\",\"xml_export_triggers\":\"something\",\"xml_export_views\":\"something\",\"xml_export_contents\":\"something\",\"yaml_structure_or_data\":\"data\",\"\":null,\"lock_tables\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_create_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}'),
(2, 'root', 'server', 'cms', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"db_select[]\":[\"bilal\",\"cms\",\"hr\",\"laravel\",\"learning_laravel\",\"phpmyadmin\",\"system\",\"test\",\"todo_app\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@SERVER@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"yaml_structure_or_data\":\"data\",\"\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_drop_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_procedure_function\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"cms\",\"table\":\"users\"},{\"db\":\"cms\",\"table\":\"posts\"},{\"db\":\"cms\",\"table\":\"categories\"},{\"db\":\"bilal\",\"table\":\"users\"},{\"db\":\"cms\",\"table\":\"users_online\"},{\"db\":\"hr\",\"table\":\"employee\"},{\"db\":\"laravel\",\"table\":\"users_online\"},{\"db\":\"cms\",\"table\":\"comments\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'cms', 'users', '{\"CREATE_TIME\":\"2020-08-30 18:57:24\",\"col_order\":[0,1,2,4,5,3,6,7,8],\"col_visib\":[1,1,1,1,1,1,1,1,1],\"sorted_col\":\"`user_password` ASC\"}', '2020-09-24 13:14:48');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2020-10-31 06:17:51', '{\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `system`
--
CREATE DATABASE IF NOT EXISTS `system` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `system`;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Database: `todo_app`
--
CREATE DATABASE IF NOT EXISTS `todo_app` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `todo_app`;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
