-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 29-Set-2023 às 16:36
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `scaem`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

DROP TABLE IF EXISTS `estoque`;
CREATE TABLE IF NOT EXISTS `estoque` (
  `idEstoque` int NOT NULL AUTO_INCREMENT,
  `dataRetirada` date NOT NULL,
  `dataEntrada` date NOT NULL,
  `quantidade` int NOT NULL,
  `finalidadeRetirda` text CHARACTER SET utf8mb3 NOT NULL,
  `id_Item` int NOT NULL,
  `id_Funcionario` int NOT NULL,
  PRIMARY KEY (`idEstoque`),
  KEY `id_Item` (`id_Item`),
  KEY `id_Funcionario` (`id_Funcionario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
CREATE TABLE IF NOT EXISTS `funcionario` (
  `idFuncionario` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `cpf` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `cargo` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `telefone` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idFuncionario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `idItem` int NOT NULL AUTO_INCREMENT,
  `nomeItem` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `descrição` text CHARACTER SET utf8mb3 NOT NULL,
  PRIMARY KEY (`idItem`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int NOT NULL AUTO_INCREMENT,
  `escola` varchar(100) CHARACTER SET utf8mb3 NOT NULL,
  `senha` varchar(50) CHARACTER SET utf8mb3 NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
