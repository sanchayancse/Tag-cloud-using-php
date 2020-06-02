-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2020 at 03:06 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tags`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `message`, `tag`) VALUES
(62, 'hello world', ''),
(63, 'hello how are you', ''),
(64, 'i am a student', ''),
(65, 'this is good time', ''),
(66, 'hello good morning', ''),
(67, 'hello what''s up', ''),
(68, 'he is a good developer', ''),
(69, 'he want a good job', ''),
(70, 'hello good evening', ''),
(73, 'time is but a window', ''),
(74, 'time and tide waits for none', ''),
(75, 'time is money', ''),
(76, 'time is efficient', ''),
(77, 'rajatav is a good boy', ''),
(78, 'that boy is sitting under the tree', ''),
(79, 'the boy fell into the river', ''),
(80, 'boy is curious', ''),
(81, 'himalaya is the largest mountain', ''),
(82, 'kiit is a good university', '');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(9) NOT NULL,
  `tagsss` varchar(255) NOT NULL,
  `tag_count` int(255) NOT NULL DEFAULT '5'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tagsss`, `tag_count`) VALUES
(150, 'time', 5),
(149, 'is', 10),
(148, 'a', 6),
(144, 'good', 5),
(143, 'hello', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tagsss` (`tagsss`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
