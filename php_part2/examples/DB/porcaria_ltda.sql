-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Versão do servidor: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `porcaria_ltda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `createdAt`, `updatedAt`) VALUES
(1, 'Detergente Liquido', 3, '2014-12-12 07:20:04', NULL),
(2, 'Goiaba', 1.5, '2014-12-12 07:20:41', NULL),
(3, 'Passagem para ônibus', 1.5, '2014-12-12 07:21:00', NULL),
(4, 'RU', 2.5, '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `createdAt`, `updatedAt`) VALUES
(1, 'Gabriel Porcaria', 'gabriel@lixo.com', 'alooo', '2014-12-12 07:18:48', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
