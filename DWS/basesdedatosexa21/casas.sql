-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-02-2021 a las 11:54:00
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
-- Base de datos: `casas`
--
CREATE DATABASE IF NOT EXISTS `casas` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `casas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casarural`
--

CREATE TABLE `casarural` (
  `cod_casa` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `habitaciones` int(11) NOT NULL,
  `precio` double(5,2) NOT NULL,
  `cod_pob` int(11) NOT NULL,
  `nota_media` double(3,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `casarural`
--

INSERT INTO `casarural` (`cod_casa`, `habitaciones`, `precio`, `cod_pob`, `nota_media`) VALUES
('c1', 5, 180.00, 44, 6.0),
('c2', 4, 100.00, 44, 10.0),
('c3', 2, 60.00, 45, 8.0),
('c4', 8, 250.00, 50, 0.0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `haestado`
--

CREATE TABLE `haestado` (
  `cod_casa` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `dni` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `veces` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opinion`
--

CREATE TABLE `opinion` (
  `num` int(11) NOT NULL,
  `nota` double(3,1) NOT NULL,
  `cod_casa` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `dni` varchar(9) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `opinion`
--

INSERT INTO `opinion` (`num`, `nota`, `cod_casa`, `dni`) VALUES
(1, 6.0, 'c1', '1'),
(2, 7.0, 'c1', '2'),
(3, 5.0, 'c1', '1'),
(4, 10.0, 'c2', '1'),
(5, 10.0, 'c2', '1'),
(6, 8.0, 'c3', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poblacion`
--

CREATE TABLE `poblacion` (
  `cod_pob` int(11) NOT NULL,
  `nombre` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `habitantes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `poblacion`
--

INSERT INTO `poblacion` (`cod_pob`, `nombre`, `habitantes`) VALUES
(43, 'Cuenca', 35000),
(44, 'Teruel', 32000),
(45, 'Toledo', 68000),
(50, 'C?ceres', 82000),
(54, 'Guadalajara', 45000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `dni` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `edad` int(11) DEFAULT NULL,
  `cod_pob` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`dni`, `nombre`, `edad`, `cod_pob`) VALUES
('1', 'luis', 48, 44),
('2', 'pepe', 40, 43),
('3', 'juan', 52, 54),
('4', 'jose', 49, 44);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
