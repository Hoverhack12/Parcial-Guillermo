-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-03-2023 a las 18:38:31
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `papas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `papas`
--

CREATE TABLE `papas` (
  `idPapas` int(11) NOT NULL,
  `Provedor` varchar(60) NOT NULL,
  `Tipo` varchar(60) NOT NULL,
  `FechaIngreso` date NOT NULL,
  `Costo` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `papas`
--

INSERT INTO `papas` (`idPapas`, `Provedor`, `Tipo`, `FechaIngreso`, `Costo`) VALUES
(1, 'Comercial Mario Magnani Inostroza E.I.R.L', 'Papa Chola', '2023-03-02', '30.50');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `papas`
--
ALTER TABLE `papas`
  ADD PRIMARY KEY (`idPapas`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `papas`
--
ALTER TABLE `papas`
  MODIFY `idPapas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
