-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-07-2020 a las 21:50:17
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sopiecdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE IF NOT EXISTS `departamento` (
  `dep-id` int(11) NOT NULL,
  `dep-nombre` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`dep-id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE IF NOT EXISTS `equipos` (
  `serial` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `marca` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo-equipo` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `modelo-equipo` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `pocesador` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `ram` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `disco-duro` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `lic-windows` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `cedula` int(12) NOT NULL,
  `area` int(11) NOT NULL,
  `primer_nombre` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `segundo_nombre` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `primer_apellido` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `segundo_apellido` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `contrasena` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`cedula`, `area`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `email`, `contrasena`) VALUES
(0, 0, '', '', '', '', '', ''),
(1, 0, '', '', '', '', '', ''),
(145454, 1, 'AndrÃ©s ', 'JosÃ©', 'Salas ', 'Casas', 'kmr19972015@gmail.com', 'sdsadasdsfs'),
(1241314, 3, 'prebaf', 'prieba', 'prueba', 'prueba', 'prueba@prueba.com.co', 'sdafllkj3rfdf'),
(4158451, 0, '', '', '', '', '', ''),
(45445454, 1, '154578', '48548', '4848', '4848', 'kmr19972015@gmail.com', '1'),
(123456789, 2, 'Kelvin', '', 'Martinez', 'Ramos', 'corre_143@corre.com', '23213123123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
