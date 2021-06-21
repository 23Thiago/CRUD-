-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Jun-2021 às 13:27
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `biblioteca_mario_de_andrade`
--
CREATE DATABASE IF NOT EXISTS `biblioteca_mario_de_andrade` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `biblioteca_mario_de_andrade`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `acervo`
--
-- Criação: 19-Jun-2021 às 19:11
--

CREATE TABLE IF NOT EXISTS `acervo` (
  `id_livro` bigint(20) NOT NULL AUTO_INCREMENT,
  `tituloLivro` varchar(30) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `tema` varchar(15) NOT NULL,
  `dataPub` date NOT NULL,
  `categoria` varchar(10) NOT NULL,
  `quantCop` int(11) NOT NULL,
  PRIMARY KEY (`id_livro`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `acervo`
--

INSERT INTO `acervo` (`id_livro`, `tituloLivro`, `autor`, `tema`, `dataPub`, `categoria`, `quantCop`) VALUES
(6, 'Dona Flor e Seus Dois Maridos ', 'Jorge Amado', 'Romance', '1966-01-01', 'Astronomia', 9),
(17, '', '', '', '0000-00-00', '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--
-- Criação: 20-Jun-2021 às 21:49
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` bigint(20) NOT NULL AUTO_INCREMENT,
  `nome_categoria` varchar(60) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nome_categoria`) VALUES
(1, 'Games'),
(2, 'Ciências '),
(3, 'Literatura Brasileira'),
(4, 'Literatura Francesa'),
(5, 'Medicina'),
(6, 'Direito'),
(7, 'Infantis'),
(8, 'Religião'),
(9, 'Astronômia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_solicit`
--
-- Criação: 21-Jun-2021 às 08:34
--

CREATE TABLE IF NOT EXISTS `user_solicit` (
  `id_user` bigint(20) NOT NULL AUTO_INCREMENT,
  `Solicitnome` varchar(60) NOT NULL,
  `dataNasc` date NOT NULL,
  `escolaridade` varchar(80) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `tel` varchar(13) NOT NULL,
  `genero` varchar(15) NOT NULL,
  `email` varchar(60) NOT NULL,
  `nome_user` varchar(100) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `user_solicit`
--

INSERT INTO `user_solicit` (`id_user`, `Solicitnome`, `dataNasc`, `escolaridade`, `endereco`, `tel`, `genero`, `email`, `nome_user`) VALUES
(2, 'THIAGO CICOLO', '1996-11-23', 'Ensino Médio Completo', 'Rua Canhembora', '11968460325', 'Masculino', 'thiagocicolo19@gmail.com', ''),
(3, 'THIAGO CICOLO', '1996-11-23', 'Ensino Superior Cursando', 'Av. Guapira 1930 Apto 6', '11947932598', 'Masculino', 'thiagocicolo19@gmail.com', ''),
(4, 'THIAGO CICOLO', '1996-11-23', 'Ensino Superior Cursando', 'Av conselheiro moreira de barros 1228', '11968460325', 'Masculino', 'thiagocicolo19@gmail.com', ''),
(5, 'THIAGO CICOLO', '1996-11-23', 'Ensino Fundamental Incompleto', 'Rua Canhembora', '11968460325', 'Masculino', 'thiagocicolo19@gmail.com', ''),
(6, 'THIAGO CICOLO', '1996-11-23', 'Ensino Fundamental Incompleto', 'Av conselheiro moreira de barros 1228', '11968460325', 'Masculino', 'thiagocicolo19@gmail.com', ''),
(7, 'THIAGO CICOLO', '1996-11-23', 'Ensino Fundamental Incompleto', 'Rua Canhembora', '11968460325', 'Masculino', 'thiagocicolo19@gmail.com', ''),
(8, 'THIAGO CICOLO', '1996-11-23', 'Ensino Fundamental Incompleto', 'Rua Canhembora', '11968460325', 'Masculino', 'thiagocicolo19@gmail.com', ''),
(29, '', '0000-00-00', 'Ensimo Fundamental Incompleto', 'Rua Canhembora', '11968460325', 'Feminino', 'thiagocicolo19@gmail.com', 'THIAGO CICOLO');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
