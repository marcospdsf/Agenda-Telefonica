-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 15-Fev-2018 às 15:14
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agenda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

DROP TABLE IF EXISTS `cadastro`;
CREATE TABLE IF NOT EXISTS `cadastro` (
  `nome` varchar(40) NOT NULL,
  `rua` varchar(40) DEFAULT NULL,
  `numero` varchar(11) DEFAULT NULL,
  `bairro` varchar(40) DEFAULT NULL,
  `cidade` varchar(40) DEFAULT NULL,
  `estado` varchar(40) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `email` varchar(40) NOT NULL,
  `sexo` varchar(40) DEFAULT NULL,
  `dataNasc` varchar(40) DEFAULT NULL,
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`nome`, `rua`, `numero`, `bairro`, `cidade`, `estado`, `telefone`, `email`, `sexo`, `dataNasc`, `id`) VALUES
('Marcos Paulo', 'Jorge Ribeiro', '127', 'Centro', 'Gurinhem', 'pb', '999248486', 'marcospdsf@gmail.com', 'homem', '1998-04-22', 1),
('Mykaella', 'Jorge Ribeiro', '127', 'Centro', 'Gurinhém', 'pb', '995632659', 'mariamykaella@gmail.com', 'mulher', '1999-04-04', 2),
('Miguel', 'Jorge Ribeiro', '127', 'Centro', 'Gurinhém', 'pb', '994581526', 'miguelViado@gmail.com', 'homem', '1997-05-23', 3),
('Paçoca', 'Gurara', '125', 'Centro', 'Imazau', 'ac', '65983560', 'loran@hotmail.com', 'homem', '1999-02-25', 8);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
