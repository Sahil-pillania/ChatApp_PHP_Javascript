-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 06:43 AM
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
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 139911464, 1624658540, 'Hello'),
(2, 139911464, 1624658540, 'Hello'),
(3, 139911464, 1624658540, 'Hello'),
(4, 139911464, 1624658540, 'hlo.'),
(5, 139911464, 1624658540, 'hlo.'),
(6, 139911464, 1624658540, 'hi.'),
(7, 139911464, 1624658540, 'hi..'),
(8, 209434633, 1624658540, 'hi Ashish'),
(9, 1624658540, 209434633, 'Hi Sahil'),
(10, 209434633, 1624658540, 'Whats up'),
(11, 1624658540, 209434633, 'hello sahil'),
(12, 1624658540, 209434633, 'hacoona matata'),
(13, 209434633, 1624658540, 'hahahhaha'),
(14, 209434633, 209434633, 'Hi'),
(15, 209434633, 209434633, 'hlo'),
(16, 1624658540, 209434633, 'hi'),
(17, 209434633, 1624658540, 'how are you'),
(18, 1624658540, 209434633, 'fine and you'),
(19, 209434633, 1624658540, 'hij'),
(20, 1624658540, 209434633, 'hello'),
(21, 209434633, 1624658540, 'How are you?');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(1, 1624658540, 'Sahil', 'Pillania', 'sahil@gmail.com', '123456', '1648660899download (1).jpg', 'Active now'),
(2, 1534004255, 'Rahul', 'Pillania', 'rahul@gmail.com', '123456', '1648661064download.jpg', 'Active now'),
(3, 139911464, 'Rishi', 'Ram', 'rishi@gmail.com', '123456', '1648661231wp2523648-mustang-car-wallpapers.jpg', 'Active now'),
(4, 159098372, 'RishiRam', 'Sharma', 'rishi1@gmail.com', '123456', '1648661353wp2523648-mustang-car-wallpapers.jpg', 'Active now'),
(5, 209434633, 'Ashish', 'Ashish', 'ashish@gmail.com', '123456', '1648700858white-ford-shelby-sports-car-4z59mzuk8darwxd5 (1).jpg', 'Active now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
