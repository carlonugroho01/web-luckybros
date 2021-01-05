-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2021 at 07:33 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-luckybros`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id_message` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id_message`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Stefanus Lionel Carlo Nugroho', 'carlonugroho01@gmail.com', '081286056989', 'testing message'),
(2, 'yasykur rafii', 'rafi@its.ac.id', '0812164898012', 'Carlo hai carlo'),
(3, 'yasykur rafii', 'rafi@its.ac.id', '0812164898012', 'Carlo hai carlo'),
(4, 'yasykur rafii', 'rafi@its.ac.id', '0812164898012', 'Carlo hai carlo'),
(5, 'yasykur rafii', 'rafi@its.ac.id', '0812164898012', 'Carlo hai carlo'),
(6, 'yasykur rafii', 'rafi@its.ac.id', '0812164898012', 'Carlo hai carlo'),
(7, 'clae', 'clae@its.ac.id', '081594785465', 'Clae halo carlo semangat dari clae');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `bio` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `email`, `password`, `bio`, `description`, `image`) VALUES
(1, 'carlonugroho01', 'carlonugroho01@gmail.com', '$2y$10$Gg1slMHMmZzX9J79P4j7LeL3gW0mnzgufM9Hx9nrn6PXUubiba91a', 'M19, JKT', 'Penyuka sepatu baru, baju baru, kaos baru', ''),
(2, 'shavica013', 'shavica013@gmail.com', '$2y$10$Wn2ELQ7sm4bRKrNVq0JRc.mcHx/3mFZR5LFtXbJSh8iUsA/G2Y09O', 'F19, Bali', 'Penyuka sepatu baru, baju baru, kaos baru, orang bali', ''),
(3, 'imantnaufal', 'imant@its.ac.id', '$2y$10$KQMMBEtoNbL2VhrRREfUlOZdkYH2/mey9Flbi5NTUspDPIIX2o5Km', 'M19, PLG', 'Saya paling keren di dunia', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id_message`),
  ADD KEY `id_message` (`id_message`),
  ADD KEY `name` (`name`(768)),
  ADD KEY `email` (`email`(768)),
  ADD KEY `name_2` (`name`(768)),
  ADD KEY `name_3` (`name`(768));

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
