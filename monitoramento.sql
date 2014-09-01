-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 27-Ago-2014 às 16:13
-- Versão do servidor: 5.6.12-log
-- versão do PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `monitoramento`
--
CREATE DATABASE IF NOT EXISTS `monitoramento` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `monitoramento`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `cod` int(2) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `login` varchar(10) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`cod`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`cod`, `nome`, `sobrenome`, `login`, `senha`, `email`, `data`) VALUES
(1, 'antonio', 'roberto', 'antonio', '123456', 'robertoneves92@gmail.com', '1992-01-24'),
(2, 'gilberto', 'lobo', 'lobinho', '12345', 'lobinho@gmail.com', '1994-05-08'),
(4, 'Gleidson', 'Sousa', 'gleiglei', '12345', 'alysson.vinagre', '2014-08-24'),
(5, 'teste1', 'testando', 'teste', '12345', 'teste@gmail', '2014-08-24'),
(7, 'teste2', 'teste', 'teste2', '12345', 'teste2@', '2014-08-19');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
