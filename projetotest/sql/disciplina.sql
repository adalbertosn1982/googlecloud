-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Dez-2016 às 23:18
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_test_unicesumar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `iddisc` int(11) NOT NULL,
  `aluno` varchar(250) NOT NULL,
  `turma` int(11) NOT NULL,
  `ano` year(4) NOT NULL,
  `semestre` int(11) NOT NULL,
  `sit_detalhe` varchar(20) NOT NULL,
  `NOME_DISCIPLINA` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE utf8_general_ci;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`iddisc`, `aluno`, `turma`, `ano`, `semestre`, `sit_detalhe`, `NOME_DISCIPLINA`) VALUES
(1, 'A', 1, 2016, 1, 'Adaptação', 'Disciplina 1'),
(2, 'A', 1, 2016, 1, 'Adaptação', 'Disciplina 2'),
(3, 'B', 1, 2016, 1, 'Adaptação', 'Disciplina 1'),
(4, 'B', 1, 2016, 1, 'Adaptação', 'Disciplina 2'),
(5, 'B', 2, 2016, 2, 'Adaptação', 'Disciplina 1'),
(6, 'B', 2, 2016, 2, 'Adaptação', 'Disciplina 2'),
(7, 'B', 2, 2016, 2, 'Curricular', 'Disciplina 3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`iddisc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `iddisc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
