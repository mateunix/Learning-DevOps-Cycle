-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 26, 2021 at 06:13 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CoisasEmprestadas`
--
CREATE DATABASE IF NOT EXISTS `CoisasEmprestadas` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `CoisasEmprestadas`;

-- --------------------------------------------------------

--
-- Table structure for table `emprestimos`
--

DROP TABLE IF EXISTS `emprestimos`;
CREATE TABLE `emprestimos` (
  `id` int(11) NOT NULL,
  `eday` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_users` int(11) NOT NULL,
  `id_itens` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emprestimos`
--

INSERT INTO `emprestimos` (`id`, `eday`, `id_users`, `id_itens`) VALUES
(1, '2021-11-26 00:10:31', 5, 1),
(2, '2021-11-26 02:44:14', 5, 2),
(3, '2021-11-26 05:07:00', 5, 2),
(4, '2021-11-26 05:07:45', 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `itens`
--

DROP TABLE IF EXISTS `itens`;
CREATE TABLE `itens` (
  `id` int(11) NOT NULL,
  `iname` varchar(30) NOT NULL,
  `itype` varchar(30) NOT NULL,
  `iemail` varchar(100) NOT NULL,
  `iphone` varchar(16) NOT NULL,
  `icity` varchar(100) NOT NULL,
  `iday` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itens`
--

INSERT INTO `itens` (`id`, `iname`, `itype`, `iemail`, `iphone`, `icity`, `iday`) VALUES
(1, 'Controle de Xbox', 'Controle', 'joazinhogameplay@hotmail.com', '+5541999999999', 'Florianopolis', '2021-11-22 03:00:00'),
(2, 'XBOX ONE', 'Video-game', 'marcelo13@gmail.com', '+5541999999993', 'Curitiba', '2021-11-24 12:51:37'),
(3, 'Guerra e Paz', 'Livro', 'kowalski@outlook.com', '+5514999998888', 'São Paulo', '2021-11-25 18:08:40'),
(4, 'War', 'Jogo de Tabuleiro', 'kowalski@outlook.com', '+5514999998888', 'São Paulo', '2021-11-25 18:09:30'),
(5, 'PLAYSTATION 2', 'Video-Game', 'kowalski@outlook.com', '+5514999998888', 'São Paulo', '2021-11-26 05:09:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `nasc` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `city` varchar(100) NOT NULL,
  `psswd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `nasc`, `email`, `phone`, `city`, `psswd`) VALUES
(1, 'Joao', 'Almeida', '1995-12-04', 'joazinhogameplay@hotmail.com', '+5541999999999', 'Florianopolis', '1234'),
(2, 'Mateus', 'Garcia', '1998-11-26', 'mateus@gmail.com', '+5541999999998', 'Curitiba', '9876'),
(5, 'Svletana', 'Kowalski', '1996-12-21', 'kowalski@outlook.com', '+5514999998888', 'São Paulo', '2121'),
(6, 'antonio', 'silveira', '1969-11-02', 'antonio@gmail.com', '+5541999369999', 'Curitiba', '2323'),
(7, 'Lucas', 'Silvestre', '1991-10-24', 'silvestrelucas@yahoo.com', '+5514999998877', 'São Paulo', '5678'),
(8, 'Maria', 'da Glória', '1983-08-08', 'maria@globo.com', '+5514999996655', 'Santo André', '9999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emprestimos`
--
ALTER TABLE `emprestimos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itens`
--
ALTER TABLE `itens`
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
-- AUTO_INCREMENT for table `emprestimos`
--
ALTER TABLE `emprestimos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `itens`
--
ALTER TABLE `itens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `emprestimos`
--
ALTER TABLE `emprestimos`
  ADD CONSTRAINT `emprestimos_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `emprestimos_ibfk_2` FOREIGN KEY (`id_itens`) REFERENCES `itens` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
