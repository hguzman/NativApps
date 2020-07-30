-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-07-2020 a las 19:20:10
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
  `tipo_equipo` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `modelo_equipo` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `procesador` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `ram` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `disco_duro` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `sistema_operativo` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`serial`, `marca`, `nombre`, `tipo_equipo`, `modelo_equipo`, `procesador`, `ram`, `disco_duro`, `sistema_operativo`) VALUES
('0000000', 'sdfas', 'safasdfas', 'safadsfsaf', 'safsadfsadf', 'sdfasfsadf', 'sdfasdfasf', '1sdafsadfsadf', 'scfsadfasf'),
('1231321', 'probando', 'Kelvin', 'probando', 'probando', 'probando', 'probando', 'probando', 'probandoo'),
('23254234', 'asjfasdjf', 'sajfsadjkf', 'sjfklas', 'fasfksdakljf', 'sfksjlf', 'fsakfskljf', 'fjskfklj', 'skfsldjk');

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
(145454, 1, 'AndrÃ©s ', 'JosÃ©', 'Salas ', 'Casas', 'kmr19972015@gmail.com', 'sdsadasdsfs'),
(214541, 1, 'AndrÃ©s ', 'JosÃ©', 'Salas ', 'apellido', 'kmr19972015@gmail.com', '21212122121212'),
(234232, 5, 'Josefa', 'andrea', 'perez', 'vaccaqs', 'corre_143@corre.com', '21212212121212'),
(123564987, 3, 'sdfsadf', 'sfsfa', 'wwww', 'Casas', 'sdafasdf@dfjasdfa.com', '165465498'),
(1124512648, 1, 'Mario', 'jose', 'salas', 'segundo', 'dsadasda@pepe.com', '1524541545414');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
