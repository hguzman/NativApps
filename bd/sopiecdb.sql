-- phpMyAdmin SQL Dump
<<<<<<< HEAD
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-07-2020 a las 21:50:17
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
=======
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-07-2020 a las 03:27:12
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
>>>>>>> b2069c4422d8f7740f1416b5e14c27db9a2adde1
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
<<<<<<< HEAD
/*!40101 SET NAMES utf8 */;
=======
/*!40101 SET NAMES utf8mb4 */;
>>>>>>> b2069c4422d8f7740f1416b5e14c27db9a2adde1

--
-- Base de datos: `sopiecdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

<<<<<<< HEAD
CREATE TABLE IF NOT EXISTS `departamento` (
  `dep-id` int(11) NOT NULL,
  `dep-nombre` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`dep-id`)
=======
CREATE TABLE `departamento` (
  `dep-id` int(11) NOT NULL,
  `dep-nombre` varchar(45) COLLATE utf8_spanish2_ci NOT NULL
>>>>>>> b2069c4422d8f7740f1416b5e14c27db9a2adde1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

<<<<<<< HEAD
CREATE TABLE IF NOT EXISTS `equipos` (
=======
CREATE TABLE `equipos` (
>>>>>>> b2069c4422d8f7740f1416b5e14c27db9a2adde1
  `serial` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `marca` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo-equipo` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `modelo-equipo` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `pocesador` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `ram` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `disco-duro` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
<<<<<<< HEAD
  `lic-windows` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`serial`)
=======
  `lic-windows` varchar(45) COLLATE utf8_spanish2_ci NOT NULL
>>>>>>> b2069c4422d8f7740f1416b5e14c27db9a2adde1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

<<<<<<< HEAD
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
=======
CREATE TABLE `usuarios` (
  `cedula` int(12) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `area` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `dep_id1` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`serial`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cedula`);
COMMIT;
>>>>>>> b2069c4422d8f7740f1416b5e14c27db9a2adde1

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
