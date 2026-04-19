-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2026 at 08:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission_form`
--

CREATE TABLE `admission_form` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `username` text NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `payment` text NOT NULL,
  `gender` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admission_form`
--

INSERT INTO `admission_form` (`id`, `name`, `username`, `phone`, `email`, `password`, `payment`, `gender`, `status`) VALUES
(1, 'Fletcher Houston', 'gyjepi', '+1 (566) 76', 'gawavoxon@mailinator.com', 'Pa$$w0rd!', 'Rocket', '2', 0),
(2, 'Fletcher Houston', 'gyjepi', '+1 (566) 76', 'gawavoxon@mailinator.com', 'Pa$$w0rd!', 'Rocket', '2', 0),
(3, 'Fletcher Houston', 'gyjepi', '+1 (566) 76', 'gawavoxon@mailinator.com', 'Pa$$w0rd!', 'Rocket', '2', 0),
(4, 'Hamish Wilder', 'fekeliru', '+1 (249) 56', 'qywiweru@mailinator.com', 'Pa$$w0rd!', 'Nagad', '1', 0),
(5, 'Hamish Wilder', 'fekeliru', '+1 (249) 56', 'qywiweru@mailinator.com', 'Pa$$w0rd!', 'Nagad', '1', 0),
(6, 'Hamish Wilder', 'fekeliru', '+1 (249) 56', 'qywiweru@mailinator.com', 'Pa$$w0rd!', 'Nagad', '1', 0),
(7, 'Macey Whitney', 'jeqyz', '+1 (719) 18', 'zuvad@mailinator.com', 'Pa$$w0rd!', 'Rocket', '2', 0),
(8, 'Gillian Wilkinson', 'suqug', '+1 (185) 96', 'puhari@mailinator.com', 'Pa$$w0rd!', 'Cash', '1', 0),
(9, 'Chava Rocha', 'pemih', '+1 (114) 70', 'beby@mailinator.com', 'Pa$$w0rd!', 'Nagad', '2', 0),
(10, 'Hasad Shelton', 'vexeqenace', '+1 (395) 76', 'copo@mailinator.com', 'Pa$$w0rd!', 'Rocket', '2', 0),
(11, 'Patrick Clarke', 'heqonyrebi', '+1 (331) 69', 'rymybygy@mailinator.com', 'Pa$$w0rd!', 'Cash', '1', 0),
(12, 'Reese Lynch', 'pemip', '+1 (635) 93', 'xubir@mailinator.com', 'Pa$$w0rd!', 'Nagad', '1', 0),
(13, 'Ronan Mccullough', 'mikohexo', '+1 (293) 16', 'vutijubehu@mailinator.com', 'Pa$$w0rd!', 'Rocket', '2', 0),
(14, 'Lyle Burnett', 'bazudawi', '+1 (323) 14', 'dujukagab@mailinator.com', 'Pa$$w0rd!', 'Bkash', '2', 0),
(15, 'Mufutau Vinson', 'vavopeziqe', '+1 (627) 60', 'zyhiqo@mailinator.com', 'Pa$$w0rd!', 'Rocket', '1', 0),
(16, 'Foyjur Rafee', 'foyjur.rafee', '01748838133', 'foyjurrafee99@gmail.com', 'code by Naib', 'Cash', '1', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission_form`
--
ALTER TABLE `admission_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission_form`
--
ALTER TABLE `admission_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
