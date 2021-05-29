-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2021 at 05:49 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opp1`
--

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `cell` varchar(30) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `c_time` varchar(20) NOT NULL DEFAULT current_timestamp(),
  `up_time` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `email`, `username`, `cell`, `photo`, `status`, `c_time`, `up_time`) VALUES
(1, 'Shuvo', 'shuvo9075@gmail.com', 'shuvo987', '01765876342', 'bf430ecc1e9b34378d8582a7c879bbb5.jfif', 1, '2021-05-29 21:22:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `cell` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `c_time` varchar(20) NOT NULL DEFAULT current_timestamp(),
  `up_time` varchar(29) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `cell`, `username`, `photo`, `status`, `c_time`, `up_time`) VALUES
(3, 'Moudut Ahmed Khondoker', 'moudut@gmail.com', '01789047897', 'moudut13', 'de9aaedee9d84d6647046643b7f20acd.jpg', 1, '2021-05-29 00:36:25', NULL),
(4, 'Md Shuvo Ahmed Khondoker', 'shuvo@gmail.com', '01303967776', 'shuvo908', '5425a6e1f24917170718acc29d289b59.jpg', 1, '2021-05-29 14:15:29', NULL),
(5, 'Lemon', 'lemon@gmail.com', '0989776', 'lee90', '8dc037ab845cbc1adc0b1b081844de39.jfif', 1, '2021-05-29 14:49:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `cell` varchar(30) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `c_time` varchar(20) NOT NULL DEFAULT current_timestamp(),
  `up_time` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `email`, `username`, `cell`, `photo`, `status`, `c_time`, `up_time`) VALUES
(4, 'Mr Moudut Ahmed', 'moudut@gmail.com', 'moudut90', '01789098564', '31f35b7e479c2b099c49e14797744c0e.png', 1, '2021-05-29 14:57:11', NULL),
(6, 'Mr Shuvo Ahmed', 'shuo987@gmail.com', 'shu8697', '01765890250', 'dec57479a8017794bb5fc8764da5d95f.jfif', 1, '2021-05-29 15:23:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(6) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cell` varchar(300) NOT NULL,
  `username` varchar(300) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `c_time` varchar(50) NOT NULL DEFAULT current_timestamp(),
  `u_time` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `cell`, `username`, `photo`, `status`, `c_time`, `u_time`) VALUES
(8, 'Shuvo Ahmed', 'shuvo09@gmail.com', '01764570150', 'shuvo13', '1.jpg', 1, '2021-05-28 21:15:57', NULL),
(11, 'Moudut Ahmed', 'moudut@gmail.com', '01766908765', 'moudut13', '1.jpg', 1, '2021-05-28 22:06:51', NULL),
(14, 'Md Lemon', 'lemon@gmail.com', '01894909890', 'lemon13', '1.jpg', 1, '2021-05-28 23:48:43', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
