-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-04-2023 a las 03:40:55
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
-- Base de datos: `usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `correo` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `fecha_registro` date NOT NULL,
  `fecha_modificacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `telefono` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`correo`, `id`, `nombres`, `apellidos`, `fecha_registro`, `fecha_modificacion`, `telefono`) VALUES
('usuario10@ejemplo.com', 1, 'Juan Esteban', 'Lopes Ortiz', '2022-01-10', '2023-04-12 00:57:11', '3116395614'),
('usuario11@ejemplo.com', 2, 'Sofía', 'Alonso', '2022-01-11', '2023-04-12 00:57:20', '3117203023'),
('usuario12@ejemplo.com', 3, 'Gabriel', 'Gómez', '2022-01-12', '2023-04-12 00:57:30', '3121576408'),
('usuario13@ejemplo.com', 4, 'Patricia', 'Jiménez', '2022-01-13', '2023-04-12 00:57:43', '3126818014'),
('usuario15@ejemplo.com', 5, 'Elena', 'García', '2022-01-15', '2023-04-12 00:58:05', '3137705634'),
('usuario16@ejemplo.com', 6, 'Antonio', 'López', '2022-01-16', '2023-04-12 00:58:16', '3131239892'),
('usuario17@ejemplo.com', 7, 'Lucía', 'Fernández', '2022-01-17', '2023-04-12 00:58:27', '3134477160'),
('usuario18@ejemplo.com', 8, 'Fernando', 'Sánchez', '2022-01-18', '2023-04-12 00:58:37', '3149548361'),
('usuario19@ejemplo.com', 9, 'Isabel', 'González', '2022-01-19', '2023-04-12 00:58:47', '3147220769'),
('usuario1@ejemplo.com', 10, 'Juan', 'Pérez', '2022-01-01', '2023-04-12 00:58:56', '3152195247'),
('usuario20@ejemplo.com', 11, 'Roberto', 'Martínez', '2022-01-20', '2023-04-12 00:59:09', '3155834678'),
('usuario2@ejemplo.com', 12, 'María', 'García', '2022-01-02', '2023-04-12 00:59:18', '3152887365'),
('usuario3@ejemplo.com', 13, 'Pedro', 'López', '2022-01-03', '2023-04-12 00:59:29', '3192461952'),
('usuario4@ejemplo.com', 14, 'Luis', 'Fernández', '2022-01-04', '2023-04-12 00:59:38', '3194320795'),
('usuario5@ejemplo.com', 15, 'Laura', 'Sánchez', '2022-01-05', '2023-04-12 00:59:48', '3196015346'),
('usuario7@ejemplo.com', 16, 'Javier', 'Martínez', '2022-01-07', '2023-04-12 01:00:07', '3124315543'),
('usuario8@ejemplo.com', 17, 'Marta', 'Romero', '2022-01-08', '2023-04-12 01:00:19', '3153234068'),
('usuario9@ejemplo.com', 18, 'Jorge', 'Ramírez', '2022-01-09', '2023-04-12 01:00:28', '3131846297');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`correo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
