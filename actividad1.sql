-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-06-2023 a las 21:43:10
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `actividad1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monumento`
--

CREATE TABLE `monumento` (
  `id` int(20) NOT NULL,
  `Personaje` varchar(50) NOT NULL,
  `Material` varchar(50) NOT NULL,
  `Altura` int(50) NOT NULL,
  `Ciudad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `monumento`
--

INSERT INTO `monumento` (`id`, `Personaje`, `Material`, `Altura`, `Ciudad`) VALUES
(1, 'José Pizarro', 'Bronce', 172, 'San Isidro'),
(2, 'Bernardo Valdiviezo', 'Hormigón', 255, 'Celica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parque`
--

CREATE TABLE `parque` (
  `id` int(20) NOT NULL,
  `Dirección` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `Extensión` int(50) NOT NULL,
  `Ciudad` varchar(50) NOT NULL,
  `Inauguración` int(20) NOT NULL,
  `Barrio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `parque`
--

INSERT INTO `parque` (`id`, `Dirección`, `Extensión`, `Ciudad`, `Inauguración`, `Barrio`) VALUES
(1, 'Jose Maldona', 27, 'Catamayo', 1998, 'La Carolina'),
(2, 'Avenida Genral Villamil', 48, 'Manabi', 1995, 'La Concordia');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `monumento`
--
ALTER TABLE `monumento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `parque`
--
ALTER TABLE `parque`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `monumento`
--
ALTER TABLE `monumento`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `parque`
--
ALTER TABLE `parque`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
