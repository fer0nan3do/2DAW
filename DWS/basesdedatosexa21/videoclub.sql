-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-02-2021 a las 11:56:00
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `videoclub`
--
CREATE DATABASE IF NOT EXISTS `videoclub` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `videoclub`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquileres`
--

CREATE TABLE `alquileres` (
  `IdAlquiler` int(11) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Pelicula` int(11) NOT NULL,
  `Cliente` int(5) NOT NULL,
  `Empleado` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alquileres`
--

INSERT INTO `alquileres` (`IdAlquiler`, `Fecha`, `Pelicula`, `Cliente`, `Empleado`) VALUES
(1, '2019-11-22 00:00:00', 6, 522, 2),
(3, '2019-11-22 00:00:00', 260, 506, 2),
(4, '2019-11-22 00:00:00', 79, 504, 2),
(5, '2019-11-22 00:00:00', 153, 507, 2),
(17, '2019-11-22 00:00:00', 970, 530, 2),
(18, '2019-11-22 00:00:00', 970, 530, 2),
(19, '2019-11-22 00:00:00', 79, 507, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `IdCliente` int(5) NOT NULL,
  `Nombre` varchar(45) CHARACTER SET latin1 NOT NULL,
  `Apellido` varchar(45) CHARACTER SET latin1 NOT NULL,
  `Email` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Activo` tinyint(1) NOT NULL DEFAULT '1',
  `FCreacion` datetime NOT NULL,
  `foto` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`IdCliente`, `Nombre`, `Apellido`, `Email`, `Activo`, `FCreacion`, `foto`) VALUES
(501, 'RUBEN', 'GEARY', 'RUBEN.GEARY@sakilacustomer.org', 1, '2006-02-14 22:04:37', ''),
(502, 'BRETT', 'CORNWELL', 'BRETT.CORNWELL@sakilacustomer.org', 1, '2006-02-14 22:04:37', ''),
(503, 'ANGEL', 'BARCLAY', 'ANGEL.BARCLAY@sakilacustomer.org', 1, '2006-02-14 22:04:37', ''),
(504, 'NATHANIEL', 'ADAM', 'NATHANIEL.ADAM@sakilacustomer.org', 1, '2006-02-14 22:04:37', ''),
(506, 'LESLIE', 'SEWARD', 'LESLIE.SEWARD@sakilacustomer.org', 1, '2006-02-14 22:04:37', ''),
(507, 'EDGAR', 'RHOADS', 'EDGAR.RHOADS@sakilacustomer.org', 1, '2006-02-14 22:04:37', ''),
(509, 'RAUL', 'FORTIER', 'RAUL.FORTIER@sakilacustomer.org', 1, '2006-02-14 22:04:37', ''),
(510, 'BEN', 'EASTER', 'BEN.EASTER@sakilacustomer.org', 0, '2006-02-14 22:04:37', ''),
(522, 'ARNOLD', 'HAVENS', 'ARNOLD.HAVENS@sakilacustomer.org', 1, '2006-02-14 22:04:37', ''),
(530, 'DARRYL', 'ASHCRAFT', 'DARRYL.ASHCRAFT@sakilacustomer.org', 1, '2006-02-14 22:04:37', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `IdEmpleado` int(3) NOT NULL,
  `Nombre` varchar(45) CHARACTER SET latin1 NOT NULL,
  `Apellido` varchar(45) CHARACTER SET latin1 NOT NULL,
  `Email` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`IdEmpleado`, `Nombre`, `Apellido`, `Email`, `foto`) VALUES
(1, 'Mike', 'Hillyer', 'Mike.Hillyer@sakilastaff.com', ''),
(2, 'Jon', 'Stephens', 'Jon.Stephens@sakilastaff.com', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `IdPelicula` int(11) NOT NULL,
  `Titulo` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Descripcion` text CHARACTER SET latin1,
  `FechaEstreno` int(4) DEFAULT NULL,
  `DuracionAlquiler` tinyint(3) UNSIGNED NOT NULL DEFAULT '3',
  `Duracion` int(5) UNSIGNED DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`IdPelicula`, `Titulo`, `Descripcion`, `FechaEstreno`, `DuracionAlquiler`, `Duracion`, `foto`) VALUES
(3, 'ADAPTATION HOLES', 'A Astounding Reflection of a Lumberjack And a Car who must Sink a Lumberjack in A Baloon Factory', 2006, 7, 50, ''),
(5, 'AFRICAN EGG', 'A Fast-Paced Documentary of a Pastry Chef And a Dentist who must Pursue a Forensic Psychologist in The Gulf of Mexico', 2006, 6, 130, ''),
(6, 'AGENT TRUMAN', 'A Intrepid Panorama of a Robot And a Boy who must Escape a Sumo Wrestler in Ancient China', 2006, 3, 169, ''),
(77, 'BIRDS PERDITION', 'A Boring Story of a Womanizer And a Pioneer who must Face a Dog in California', 2006, 5, 61, ''),
(79, 'BLADE POLISH', 'A Thoughtful Character Study of a Frisbee And a Pastry Chef who must Fight a Dentist in The First Manned Space Station', 2006, 5, 114, ''),
(150, 'CIDER DESIRE', 'A Stunning Character Study of a Composer And a Mad Cow who must Succumb a Cat in Soviet Georgia', 2006, 7, 101, ''),
(153, 'CITIZEN SHREK', 'A Fanciful Character Study of a Technical Writer And a Husband who must Redeem a Robot in The Outback', 2006, 7, 165, ''),
(260, 'DUDE BLINDNESS', 'A Stunning Reflection of a Husband And a Lumberjack who must Face a Frisbee in An Abandoned Fun House', 2006, 3, 132, ''),
(265, 'DYING MAKER', 'A Intrepid Tale of a Boat And a Monkey who must Kill a Cat in California', 2006, 5, 168, ''),
(266, 'DYNAMITE TARZAN', 'A Intrepid Documentary of a Forensic Psychologist And a Mad Scientist who must Face a Explorer in A U-Boat', 2006, 4, 141, ''),
(965, 'WATERSHIP FRONTIER', 'A Emotional Yarn of a Boat And a Crocodile who must Meet a Moose in Soviet Georgia', 2006, 6, 112, ''),
(967, 'WEEKEND PERSONAL', 'A Fast-Paced Documentary of a Car And a Butler who must Find a Frisbee in A Jet Boat', 2006, 5, 134, ''),
(969, 'WEST LION', 'A Intrepid Drama of a Butler And a Lumberjack who must Challenge a Database Administrator in A Manhattan Penthouse', 2006, 4, 159, ''),
(970, 'WESTWARD SEABISCUIT', 'A Lacklusture Tale of a Butler And a Husband who must Face a Boy in Ancient China', 2006, 7, 52, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alquileres`
--
ALTER TABLE `alquileres`
  ADD PRIMARY KEY (`IdAlquiler`),
  ADD KEY `fk_alquiler_cliente` (`Cliente`),
  ADD KEY `fk_alquiler_Copia` (`Pelicula`),
  ADD KEY `fk_alquiler_empleado` (`Empleado`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`IdCliente`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`IdEmpleado`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`IdPelicula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `IdCliente` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=531;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `IdEmpleado` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `IdPelicula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=971;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alquileres`
--
ALTER TABLE `alquileres`
  ADD CONSTRAINT `alquileres_ibfk_1` FOREIGN KEY (`Pelicula`) REFERENCES `peliculas` (`IdPelicula`),
  ADD CONSTRAINT `fk_alquiler_cliente` FOREIGN KEY (`Cliente`) REFERENCES `clientes` (`IdCliente`),
  ADD CONSTRAINT `fk_alquiler_empleado` FOREIGN KEY (`Empleado`) REFERENCES `empleados` (`IdEmpleado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
