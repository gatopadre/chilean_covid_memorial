-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 29-06-2020 a las 06:40:45
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
  `telefono` varchar(12) DEFAULT NULL,
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
(3, 'Sebastian', '16.519.854', 'sebastianzunigasaavedra@gmail.com', '949880129', 'familiar', 'mensaje del recuerdo', '2020-06-28 20:17:45'),
(4, 'Sebastian', '16.519.854', 'sebastianzunigasaavedra@gmail.com', '949880129', 'familiar', 'mensaje del recuerdo', '2020-06-28 20:17:53'),
(5, 'asdasd', '', '', '0', '', '', '2020-06-28 23:27:24'),
(6, 'asdasd', '', '', '0', '', '', '2020-06-28 23:34:07'),
(7, 'xzczxc', '', '', '0', '', '', '2020-06-28 23:38:48'),
(8, 'Pepito', '', '', '0', '', '', '2020-06-28 23:43:30'),
(9, 'Pepito', '', '', '0', '', '', '2020-06-28 23:44:07'),
(10, 'asdasd', '', '', '0', '', '', '2020-06-28 23:44:15'),
(11, 'Sebastian', '', '', '0', '', '', '2020-06-28 23:44:55'),
(12, 'Sebastian', '', '', '0', '', '', '2020-06-28 23:46:05'),
(13, 'Sebastian', '', '', '0', '', '', '2020-06-28 23:46:07'),
(14, 'Sebastian', '', '', '0', '', '', '2020-06-28 23:47:08'),
(15, 'juanita', '', '', '0', '', '', '2020-06-28 23:47:21'),
(16, 'Sebastian', '5779370-8', 'sebastianzunigasaavedra@gmail.com', '949880129', 'familiar', 'mensaje', '2020-06-29 00:35:58'),
(17, 'Sebastian', '5779370-8', 'sebastianzunigasaavedra@gmail.com', '949880129', 'familiar', 'mensaje', '2020-06-29 00:36:44'),
(18, 'Sebastian', '5779370-8', 'sebastianzunigasaavedra@gmail.com', '949880129', 'familiar', 'mensaje', '2020-06-29 00:37:30'),
(19, 'Sebastian', '5779370-8', 'sebastianzunigasaavedra@gmail.com', '949880129', 'familiar', 'mensaje', '2020-06-29 00:37:58');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
