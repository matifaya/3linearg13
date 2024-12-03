-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2024 a las 12:45:02
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `basepag`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precio` float(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `foto`, `tipo`, `descripcion`, `precio`) VALUES
(1, 'Nike Kobe proto 4', 'zapa2.webp', '1', 'Comodidad para tus entrenamientos diarios.', 159.99),
(2, 'Roberto Shoes', 'zapa3.webp', '1', 'Muy cómodas para el uso diario', 201.59),
(3, 'Harden vol.7 Adidas', 'zapa4.jpeg', '1', 'Zapatillas hiper livianas para correr a una hiper velocidad', 125.55),
(4, 'Zoowy 4zt Hyperflow', 'zapa10', '1', 'Zapatillas con la tecnología mas avanzada del mercado', 499.99),
(5, 'Camiseta jordan', 'remerajordan1.png', '2', 'Remera jordan basica negra y roja', 30.15),
(6, 'remera jordan demonio', 'remerajordan2.webp', '2', 'remera basica roja jordan que atrapa miradas', 22.10),
(7, 'Musculosa ALL-STAR 2024', 'remerajordan5.webp', '2', 'Remera especial del juego de estrellas de la NBA 2024', 89.99),
(8, 'Buzo jordan', 'remerajordan3.webp', '2', 'Buzo jordan especial para invierno', 58.99);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(10) NOT NULL,
  `gmail` varchar(150) NOT NULL,
  `clave` varchar(45) NOT NULL,
  `sesion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
