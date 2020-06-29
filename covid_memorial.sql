-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 29-06-2020 a las 02:33:46
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `covid_memorial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `form_data`
--

CREATE TABLE `form_data` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `rut` varchar(10) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `relacion` varchar(100) DEFAULT NULL,
  `mensaje` varchar(3000) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `form_data`
--

INSERT INTO `form_data` (`id`, `nombre`, `rut`, `email`, `telefono`, `relacion`, `mensaje`, `created_at`) VALUES
(1, 'Sebastian', NULL, NULL, NULL, NULL, NULL, '2020-06-28 20:12:23'),
(2, 'Dbeaver', NULL, NULL, NULL, NULL, NULL, '2020-06-28 20:14:21'),
(3, 'Sebastian', '16.519.854', 'sebastianzunigasaavedra@gmail.com', 949880129, 'familiar', 'mensaje del recuerdo', '2020-06-28 20:17:45'),
(4, 'Sebastian', '16.519.854', 'sebastianzunigasaavedra@gmail.com', 949880129, 'familiar', 'mensaje del recuerdo', '2020-06-28 20:17:53');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `form_data`
--
ALTER TABLE `form_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `form_data`
--
ALTER TABLE `form_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
