-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2022 at 01:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Mohibullah', 'mohibullahalokozay123@gmail.com', '25f9e794323b453885f5181f1b624d0b'),
(2, 'M Fardous', 'safi123@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(3, 'Shafiqullah', 'Alokozay1234567@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759'),
(4, 'M Yasir', 'yasir1234@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'Abdul Wakil Alam Sahak', 'wakil12345@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'Yasir', 'yasir.sahibzada90@gmail.com', '8d03ecfad755ab078ae3fd29c63c2d7d'),
(7, 'Sadatullah', 'sadat123@gmail.com', '202cb962ac59075b964b07152d234b70'),
(8, 'Raqibullah', 'raqib1234@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(9, 'ahmad', 'ahmad123@gmail.com', '202cb962ac59075b964b07152d234b70'),
(10, 'Aimal', 'aimal123@gmail.com', '202cb962ac59075b964b07152d234b70'),
(11, 'Akbar', 'akbar123@gmail.com', '202cb962ac59075b964b07152d234b70'),
(12, 'Omid', 'omid123@gmail.com', '202cb962ac59075b964b07152d234b70'),
(13, 'Anwar', 'anwar123@gmail.com', '202cb962ac59075b964b07152d234b70'),
(14, 'Fawad', 'fawad123@gmail.com', '202cb962ac59075b964b07152d234b70'),
(15, 'Jawad', 'jawad123@gmail.com', '202cb962ac59075b964b07152d234b70'),
(16, 'Mujibullah', 'mujib123@gmail.com', '202cb962ac59075b964b07152d234b70'),
(17, 'Azmatullah', 'azmat123@gmail.com', '202cb962ac59075b964b07152d234b70'),
(18, 'Shafiqullah', 'shafiq123@gmail.com', '202cb962ac59075b964b07152d234b70'),
(19, 'Hasibullah', 'hasib123@gmail.com', '202cb962ac59075b964b07152d234b70'),
(20, 'Raqibullah', 'raqib123@gmail.com', '202cb962ac59075b964b07152d234b70'),
(21, 'Amanullah', 'aman123@gmail.com', '202cb962ac59075b964b07152d234b70'),
(22, 'Sadatullah', 'sadat1234@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(23, 'Sadatullah', 'sadat12345@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(24, 'Azizullah', 'aziz123@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
