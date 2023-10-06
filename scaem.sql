-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 06-Out-2023 às 21:09
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
  `finalidadeRetirda` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `id_Item` int NOT NULL,
  `id_Funcionario` int NOT NULL,
  PRIMARY KEY (`idEstoque`),
  KEY `id_Item` (`id_Item`),
  KEY `id_Funcionario` (`id_Funcionario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
CREATE TABLE IF NOT EXISTS `funcionario` (
  `idFuncionario` int NOT NULL AUTO_INCREMENT,
  `nome` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `cargo` varchar(300) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `telefone` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`idFuncionario`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`idFuncionario`, `nome`, `cpf`, `cargo`, `telefone`) VALUES
(7, 'Thiago', '22222222222', '´´pppppppppppp', '88888888888888'),
(2, 'Bernado', '1111111111', 'oooooooo', '5555555555555');

-- --------------------------------------------------------

--
-- Estrutura da tabela `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `idItem` int NOT NULL AUTO_INCREMENT,
  `tipo` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `descricao` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `almoxarifado` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`idItem`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `item`
--

INSERT INTO `item` (`idItem`, `tipo`, `descricao`, `almoxarifado`) VALUES
(11, 'papel', 'Bic', '1'),
(10, 'papel', 'Bic', '1'),
(9, 'caneta', 'Bic', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int NOT NULL AUTO_INCREMENT,
  `escola` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `senha` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `escola`, `senha`, `email`) VALUES
(1, '', '', ''),
(2, '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
