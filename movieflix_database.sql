-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2019 at 12:25 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movieflix_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `movieflix_table`
--

CREATE TABLE `movieflix_table` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `genre` text NOT NULL,
  `director` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movieflix_table`
--

INSERT INTO `movieflix_table` (`id`, `title`, `genre`, `director`) VALUES
(1, 'Titanic', 'Romance', 'James Cameron'),
(4, 'Pearl Harbour', 'Romance', 'Michael Bay'),
(5, 'Rush', 'Racing', 'Ron Howard'),
(6, 'Avengers: Endgame', 'Sci-fi', 'Anthony Russo'),
(7, 'Joker', 'Drama', 'Todd Phillips'),
(8, 'Jumanji: The Next Level', 'Fantasy', 'Chris Van Allsburg'),
(9, 'Frozen 2', 'Drama', 'Jennifer Lee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movieflix_table`
--
ALTER TABLE `movieflix_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movieflix_table`
--
ALTER TABLE `movieflix_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
