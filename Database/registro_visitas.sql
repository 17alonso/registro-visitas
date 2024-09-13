-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-09-2024 a las 16:40:25
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `registro_visitas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `id` int(11) NOT NULL,
  `jefe` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `estado` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`id`, `jefe`, `nombre`, `estado`) VALUES
(1, 'eber challco', 'Contabilidad', 1),
(2, 'erick huayta', 'Informatica', 1),
(3, 'ever', 'Recursos Humanos', 1),
(4, 'waldo valenzuela', 'Gerencia Municipal', 1),
(5, 'Royer Ustua', 'Procuraduria Publica Municipal', 1),
(6, 'nelio villafuerte', 'Gerencia de Desarrollo Social y Servicios Publicos', 1),
(7, 'pepito', 'perez', 1),
(8, 'dasda', 'sdasda', 1),
(9, 'asd', 'asd', 1),
(10, 'asd', 'asd', 1),
(11, 'dsfgsfd', 'fsdgsdfg', 1),
(12, '4', '2', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `usuario` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `contra` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nivel` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `usuario`, `contra`, `nivel`) VALUES
(1, 'prueba', 'prueba', 'prueba', '123', 1),
(2, 'asd', 'asd', 'asd', 'asd', 2),
(5, 'd', 'd', 'd', 'd', 2),
(6, 'a', 'a', 'a', 'a', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitante`
--

CREATE TABLE IF NOT EXISTS `visitante` (
  `id` int(10) NOT NULL,
  `dni` int(8) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `jefe` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `detalle` varchar(1000) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `visitante`
--

INSERT INTO `visitante` (`id`, `dni`, `nombre`, `apellido`, `area`, `jefe`, `fecha`, `hora`, `detalle`, `estado`) VALUES
(21, 71651189, 'John Pedro', 'Maquera Ajrota', 'Procuraduria Publica Municipal', 'Royer Ustua', '2024-09-02', '09:31:51 am', 'FHSAUHFIUHASEIUPFHPOIAHSOIEFHOIhoihdsogijs\r\nodifjgiosdjfgoijdsfoigjdsiofjgoidmsfbiodsiboihdrog\r\ningdorisgnoidspnogrindsirhghdsproighdosihfgdsr\r\ngdr', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `visitante`
--
ALTER TABLE `visitante`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `visitante`
--
ALTER TABLE `visitante`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
