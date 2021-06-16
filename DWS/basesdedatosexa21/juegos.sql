-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-02-2021 a las 12:33:54
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
-- Base de datos: `juegos`
--
CREATE DATABASE IF NOT EXISTS `juegos` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `juegos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE `jugadores` (
  `idJugador` int(5) NOT NULL,
  `Nombre` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `Apellido` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`idJugador`, `Nombre`, `Apellido`, `Email`, `Activo`) VALUES
(501, 'RUBEN', 'GEARY', 'RUBEN.GEARY@sakilacustomer.org', 1),
(502, 'BRETT', 'CORNWELL', 'BRETT.CORNWELL@sakilacustomer.org', 0),
(503, 'ANGEL', 'BARCLAY', 'ANGEL.BARCLAY@sakilacustomer.org', 1),
(504, 'NATHANIEL', 'ADAM', 'NATHANIEL.ADAM@sakilacustomer.org', 0),
(506, 'LESLIE', 'SEWARD', 'LESLIE.SEWARD@sakilacustomer.org', 0),
(507, 'EDGAR', 'RHOADS', 'EDGAR.RHOADS@sakilacustomer.org', 0),
(509, 'RAUL', 'FORTIER', 'RAUL.FORTIER@sakilacustomer.org', 1),
(510, 'BEN', 'EASTER', 'BEN.EASTER@sakilacustomer.org', 0),
(511, 'CHESTER', 'BENNER', 'CHESTER.BENNER@sakilacustomer.org', 1),
(513, 'DUANE', 'TUBBS', 'DUANE.TUBBS@sakilacustomer.org', 0),
(514, 'FRANKLIN', 'TROUTMAN', 'FRANKLIN.TROUTMAN@sakilacustomer.org', 1),
(516, 'ELMER', 'NOE', 'ELMER.NOE@sakilacustomer.org', 0),
(517, 'BRAD', 'MCCURDY', 'BRAD.MCCURDY@sakilacustomer.org', 0),
(519, 'RON', 'DELUCA', 'RON.DELUCA@sakilacustomer.org', 0),
(520, 'MITCHELL', 'WESTMORELAND', 'MITCHELL.WESTMORELAND@sakilacustomer.org', 0),
(522, 'ARNOLD', 'HAVENS', 'ARNOLD.HAVENS@sakilacustomer.org', 1),
(523, 'HARVEY', 'GUAJARDO', 'HARVEY.GUAJARDO@sakilacustomer.org', 0),
(525, 'ADRIAN', 'CLARY', 'ADRIAN.CLARY@sakilacustomer.org', 1),
(526, 'KARL', 'SEAL', 'KARL.SEAL@sakilacustomer.org', 0),
(528, 'CLAUDE', 'HERZOG', 'CLAUDE.HERZOG@sakilacustomer.org', 0),
(530, 'DARRYL', 'ASHCRAFT', 'DARRYL.ASHCRAFT@sakilacustomer.org', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partidas`
--

CREATE TABLE `partidas` (
  `idPartida` int(11) NOT NULL,
  `Titulo` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `partidas`
--

INSERT INTO `partidas` (`idPartida`, `Titulo`, `Fecha`) VALUES
(1, 'Monopoli', '2020-02-23'),
(2, 'Ruleta', '2020-02-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partidasjugadores`
--

CREATE TABLE `partidasjugadores` (
  `id` int(11) NOT NULL,
  `idJugador` int(5) NOT NULL,
  `idPartida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`idJugador`);

--
-- Indices de la tabla `partidas`
--
ALTER TABLE `partidas`
  ADD PRIMARY KEY (`idPartida`) USING BTREE;

--
-- Indices de la tabla `partidasjugadores`
--
ALTER TABLE `partidasjugadores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id jugador` (`idJugador`),
  ADD KEY `id partida` (`idPartida`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `idJugador` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=531;

--
-- AUTO_INCREMENT de la tabla `partidas`
--
ALTER TABLE `partidas`
  MODIFY `idPartida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `partidasjugadores`
--
ALTER TABLE `partidasjugadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `partidasjugadores`
--
ALTER TABLE `partidasjugadores`
  ADD CONSTRAINT `partidasjugadores_ibfk_1` FOREIGN KEY (`idPartida`) REFERENCES `partidas` (`idPartida`),
  ADD CONSTRAINT `partidasjugadores_ibfk_2` FOREIGN KEY (`idJugador`) REFERENCES `jugadores` (`idJugador`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
