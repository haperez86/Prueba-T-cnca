-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-05-2019 a las 22:27:03
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `acme`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductor`
--

CREATE TABLE `conductor` (
  `idconductor` int(40) NOT NULL,
  `primernombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `segundonombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `primerapellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `segundoapellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(40) NOT NULL,
  `ciudad` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `conductor`
--

INSERT INTO `conductor` (`idconductor`, `primernombre`, `segundonombre`, `primerapellido`, `segundoapellido`, `direccion`, `telefono`, `ciudad`) VALUES
(1, 'Henry', 'Alexander ', 'Perez ', 'Valderrama ', 'calle123', 4658915, 'bogota'),
(2, 'Diego', 'Armando', 'Rojas', 'Marin', 'calle123', 234567, 'bogota'),
(6, 'Jeison', 'leonardo', 'perez ', 'valderrama', 'calle123', 23354, 'bogota'),
(10, 'Andres', 'Camilo', 'Perez', 'Valderrama', 'calle123', 123, 'bogota'),
(11, 'Omar', 'Hernan', 'Valderrama', 'Pedraza', 'carrera9823', 4658915, 'bogota');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietarios`
--

CREATE TABLE `propietarios` (
  `idpropietario` int(40) NOT NULL,
  `primernombrep` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `segundonombrep` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `primerapellidop` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `segundoapellidop` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `direccionp` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefonop` int(40) NOT NULL,
  `ciudadp` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `propietarios`
--

INSERT INTO `propietarios` (`idpropietario`, `primernombrep`, `segundonombrep`, `primerapellidop`, `segundoapellidop`, `direccionp`, `telefonop`, `ciudadp`) VALUES
(1, 'Yon', 'Arley', 'Briñes', 'Valderrama', '', 2345672, 'bogota'),
(8, 'Jeison', 'Leonardo', 'Perez', 'Valderrama', 'calle123', 123432, 'bogota'),
(10, 'Diego', 'Armando', 'Rojas', 'Marin', 'carrera9823', 4658915, 'bogota'),
(11, 'William', 'Ricardo', 'Cely', 'Valderrama', 'calle 146', 123467, 'bogota');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `id` int(20) NOT NULL,
  `marca` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `placa` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `color` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `tipovehiculo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `idconductor` int(40) NOT NULL,
  `idpropietario` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`id`, `marca`, `placa`, `color`, `tipovehiculo`, `idconductor`, `idpropietario`) VALUES
(1, 'bmw', 'bbe123', 'amarillo', 'particular', 1, 1),
(3, 'ferrari', 'dfk3', 'marron', 'particular', 2, 1),
(12, 'mercedes', 'brt123', 'blanco', 'publico', 1, 8),
(25, 'chevrolet', 'BRT234', 'negro', '1', 2, 8),
(26, 'chevrolet', 'BRT234', 'negro', '1', 2, 8),
(27, 'chevrolet', 'BRT234', 'negro', '0', 1, 1),
(28, 'FERRARI', 'JRT2345', 'gris', '1', 2, 8),
(29, 'Nizan', 'POT1456', 'Verde', '0', 11, 11),
(30, 'FERRARI', 'JRT2345', 'negro', '1', 6, 10),
(31, 'FERRARI', 'JRT2345', 'negro', '1', 6, 10),
(32, 'Mazda', 'QWE567', 'Marron', 'Publico', 1, 8);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `conductor`
--
ALTER TABLE `conductor`
  ADD PRIMARY KEY (`idconductor`);

--
-- Indices de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  ADD PRIMARY KEY (`idpropietario`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idconductor` (`idconductor`),
  ADD KEY `idpropietario` (`idpropietario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `conductor`
--
ALTER TABLE `conductor`
  MODIFY `idconductor` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  MODIFY `idpropietario` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `vehiculo_ibfk_1` FOREIGN KEY (`idconductor`) REFERENCES `conductor` (`idconductor`),
  ADD CONSTRAINT `vehiculo_ibfk_2` FOREIGN KEY (`idpropietario`) REFERENCES `propietarios` (`idpropietario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
