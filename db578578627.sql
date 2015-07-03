-- phpMyAdmin SQL Dump
-- version 4.1.14.8
-- http://www.phpmyadmin.net
--
-- Servidor: db578578627.db.1and1.com
-- Tiempo de generación: 02-07-2015 a las 21:43:39
-- Versión del servidor: 5.1.73-log
-- Versión de PHP: 5.4.41-0+deb7u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db578578627`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matches`
--

CREATE TABLE IF NOT EXISTS `matches` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `submit` date NOT NULL,
  `team_1` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `team_2` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `place` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `time` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `done` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `matches`
--

INSERT INTO `matches` (`id`, `submit`, `team_1`, `team_2`, `place`, `time`, `done`) VALUES
(10, '2015-07-01', '7', '6', 'Tom Benson, Ohio', '2015-07-09 12:00', 1),
(11, '2015-07-01', '5', '8', 'Tom Benson, Ohio', '2015-07-09 15:30', 0),
(12, '2015-07-01', '1', '3', 'Tom Benson, Ohio', '2015-07-09 19:00', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
