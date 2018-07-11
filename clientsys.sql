-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Jul-2018 às 03:07
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clientsys`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `name` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(40) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clients`
--

INSERT INTO `clients` (`id`, `email`, `name`, `city`, `state`, `phone`) VALUES
(12, 'rob.nettom@gmail.com', 'Roberto Maciel', 'Cruzeiro', 'São Paulo', '(12) 99145-1238'),
(14, 'antonio.carlos@hotmail.com', 'Antônio Carlos', 'Aragominas', 'Tocantins', '(12) 3133-3333'),
(15, 'cass.mar@gmail.com', 'Cassiano Maralto', 'Bom Jardim', 'Maranhão', '(12) 3142-5435'),
(16, 'mir.ant@bol.com', 'Mirabella Antonietta', 'Bom Jesus do Norte', 'Espírito Santo', '(42) 0398-0211'),
(17, 'baixinhosapenas@globoourecord.com', 'Meneghel, Xuxa', 'Lauro Muller', 'Santa Catarina', '(10) 2943-8650');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `password`) VALUES
(10, 'rob.nettom@gmail.com', 'Roberto', 'roberto'),
(11, 'furioso@gmail.com', 'Furioso', 'furioso'),
(12, 'mary.db@gmail.com', 'Maryane ', 'MARYANE'),
(13, 'asdasd.asd@asdasd', 'Antônio Mattos', 'antonio'),
(14, 'roberto_netinho2@hotmail.com', 'netinho', 'a483cd110bf7a7961c85e829b1149069ceba1f335edb0c4362'),
(15, 'asd.asd@asd', 'asd', '21865a68bb7f38aa7d1ed6b6fddcc177469463b5b2f3cbe69f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
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
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;