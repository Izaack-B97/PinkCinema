-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 26-04-2020 a las 06:50:08
-- Versión del servidor: 5.7.28
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cine`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

DROP TABLE IF EXISTS `peliculas`;
CREATE TABLE IF NOT EXISTS `peliculas` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) DEFAULT NULL,
  `genero` varchar(20) DEFAULT NULL,
  `idioma` varchar(20) DEFAULT NULL,
  `duracion` varchar(20) DEFAULT NULL,
  `clasificacion` varchar(10) DEFAULT NULL,
  `funcion` varchar(15) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `nombre`, `genero`, `idioma`, `duracion`, `clasificacion`, `funcion`, `imagen`) VALUES
(22, 'Spiderman Far Home', 'Accion', 'Ingles', '120', 'A', '7:00', '../../images/spyder.jpg'),
(13, 'gfdgf', 'dgfdgfd', 'gdfgfdg', 'dfgdfgf', 'dgdfg', 'fdgfdgdf', '../../images/shapewater.png'),
(17, 'asdasd', 'dsadsadas', 'asdasdasd', 'dasdasd', 'dsadasds', 'asdasdas', '../../images/combo1.jpg'),
(18, 'asdasddsadsa', 'dsadsadasdsadsadsa', 'asdasdasdsadsadas', 'dasdasdsadasdas', 'dsada', 'asdasdasdsadsad', '../../images/pelicula2.jpg'),
(19, 'Avenger Endgame', 'Accion', 'EspaÃ±ol', '300min', 'A', '7:00pm', '../../images/endgame.jpg'),
(23, 'Black Widow', 'Accion', 'EspaÃ±ol', '120', 'B', '120', '../../images/blackwidow.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `contrasenia` varchar(20) DEFAULT NULL,
  `id_rol` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_rol` (`id_rol`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `contrasenia`, `id_rol`) VALUES
(1, 'admin', 'admin', 1),
(2, 'isaac', '1234', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
