-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04-Out-2017 às 05:26
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projetophp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE IF NOT EXISTS `alunos` (
  `id_alunos` int(11) NOT NULL AUTO_INCREMENT,
  `matricula_alunos` varchar(30) NOT NULL,
  `nome_alunos` varchar(50) NOT NULL,
  `endereco_alunos` varchar(60) NOT NULL,
  `cidade_alunos` varchar(50) NOT NULL,
  `codigo_curso_alunos` varchar(30) NOT NULL,
  PRIMARY KEY (`id_alunos`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id_alunos`, `matricula_alunos`, `nome_alunos`, `endereco_alunos`, `cidade_alunos`, `codigo_curso_alunos`) VALUES
(1, '05016', 'Gabriela Gonçalves Taccari', 'abcde', 'Novo Horizonte', '212');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `id_cursos` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_cursos` varchar(30) NOT NULL,
  `nome_cursos` varchar(50) NOT NULL,
  `disciplina1_cursos` varchar(50) NOT NULL,
  `disciplina2_cursos` varchar(50) NOT NULL,
  `disciplina3_cursos` varchar(50) NOT NULL,
  PRIMARY KEY (`id_cursos`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id_cursos`, `codigo_cursos`, `nome_cursos`, `disciplina1_cursos`, `disciplina2_cursos`, `disciplina3_cursos`) VALUES
(2, '212', 'Informática', '123', '321', '556');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

CREATE TABLE IF NOT EXISTS `disciplinas` (
  `id_disciplinas` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_disciplinas` varchar(50) NOT NULL,
  `nome_disciplinas` varchar(50) NOT NULL,
  PRIMARY KEY (`id_disciplinas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `disciplinas`
--

INSERT INTO `disciplinas` (`id_disciplinas`, `codigo_disciplinas`, `nome_disciplinas`) VALUES
(1, '123', 'filosofia');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
