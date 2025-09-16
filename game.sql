-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2025 at 04:00 AM
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
-- Database: `seria`
--

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `player` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `susah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id`, `nama`, `genre`, `player`, `foto`, `susah`) VALUES
(1, 'expediton 33', 'rpg', '3', 'game1.jpeg', 'sangat susah'),
(2, 'sss', 'rougelike', '1', 'game2.jpeg', 'tidak susah'),
(3, 'lost soul aside', 'souls-like', '1', 'game3.jpeg', 'tidak susah'),
(4, 'hotline miami', 'action', '1', 'game4.jpeg', 'sangat susah'),
(5, 'persona 5 royale', 'jrpg', '1', 'game5.jpeg', 'tidak susah'),
(6, 'cooking mama', 'simulasi', '1', 'game6.jpeg', 'tidak susah'),
(7, 'pokemon', 'survival', '2', 'game7.jpeg', 'tidak susah\r\n'),
(8, 'overwatch 2', 'FPS', '12', 'game8.jpeg', 'lumayan susah'),
(9, 'League of Legends', 'MOBA', '10', 'game9.jpeg', 'susah'),
(10, 'super mario', 'platformer', '1', 'game10.jpeg', 'tidak susah'),
(11, 'PUBG', 'battle royale', '100', 'game11.jpeg', 'tidak susah '),
(12, 'valorant', 'shooter', '10', 'game12.jpeg', 'tidak susah\r\n'),
(13, 'warframe', 'looter shooter', '4', 'game13.jpeg', 'susah'),
(14, 'counter strike', 'FPS', '10', 'game14.jpeg', 'susah'),
(15, 'genshin impact', 'crpg', '4', 'game15.jpeg', 'tidak susah\r\n'),
(16, 'the sims', 'life simulation', '1', 'game16.jpeg', 'tidak susah'),
(17, 'hades', 'rougelike', '1', 'game17.jpeg', 'lumayan susah'),
(18, 'dead by daylight', 'horror', '5', 'game18.jpeg', 'susah'),
(19, 'strafield', 'shooter', '4', 'game19.jpeg', 'lumayan susah'),
(20, 'dark soul ', 'soulslike', '2', 'game20.jpeg', 'tidak susah'),
(21, 'honkai star rail', 'jrpg', '1', 'game21.jpeg', 'tidak susah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
