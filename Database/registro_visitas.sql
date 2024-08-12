-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-08-2024 a las 15:49:49
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

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
(9, 'asd', 'asd', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `usuario`, `contra`, `nivel`) VALUES
(1, 'prueba', 'prueba', 'prueba', '123', 1),
(2, 'asd', 'asd', 'asd', 'asd', 2);

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
  `fecha` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `hora` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `detalle` varchar(1000) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `visitante`
--

INSERT INTO `visitante` (`id`, `dni`, `nombre`, `apellido`, `area`, `jefe`, `fecha`, `hora`, `detalle`, `estado`) VALUES
(25, 45645645, 'Keyla Estefania', 'Castro Espinoza', 'Recursos Humanos', 'ever', '09-08-2024', '12:35:00 pm', '45645', 1),
(26, 45645645, 'Keyla Estefania', 'Castro Espinoza', 'Informatica', 'erick huayta', '09-08-2024', '12:35:15 pm', '45645', 1),
(27, 45645645, 'Keyla Estefania', 'Castro Espinoza', 'Gerencia Municipal', 'waldo valenzuela', '09-08-2024', '12:42:02 pm', '34534534', 1),
(28, 76532458, 'Diogo Leonidas', 'Jauregui Aguero', 'Informatica', 'erick huayta', '09-08-2024', '09:30:58 pm', 'asdasdasd', 1),
(29, 76532458, 'Diogo Leonidas', 'Jauregui Aguero', 'Informatica', 'erick huayta', '09-08-2024', '09:31:14 pm', 'asdasdasd', 1),
(30, 76532458, 'Diogo Leonidas', 'Jauregui Aguero', 'Informatica', 'erick huayta', '09-08-2024', '09:32:14 pm', 'asdasdasd', 1),
(31, 76532458, 'Diogo Leonidas', 'Jauregui Aguero', 'Informatica', 'erick huayta', '09-08-2024', '09:32:54 pm', 'asdasdasd', 1),
(32, 76532458, 'Diogo Leonidas', 'Jauregui Aguero', 'Informatica', 'erick huayta', '09-08-2024', '09:33:15 pm', 'asdasdasd', 1),
(33, 76532458, 'Diogo Leonidas', 'Jauregui Aguero', 'Informatica', 'erick huayta', '09-08-2024', '09:35:24 pm', 'asdasdasd', 1),
(34, 76532458, 'Diogo Leonidas', 'Jauregui Aguero', 'Informatica', 'erick huayta', '09-08-2024', '09:36:04 pm', 'asdasdasd', 1),
(35, 76532458, 'Diogo Leonidas', 'Jauregui Aguero', 'Informatica', 'erick huayta', '09-08-2024', '09:36:09 pm', 'asdasdasd', 1),
(36, 76532458, 'Diogo Leonidas', 'Jauregui Aguero', 'Informatica', 'erick huayta', '09-08-2024', '09:36:11 pm', 'asdasdasd', 1),
(37, 76532458, 'Diogo Leonidas', 'Jauregui Aguero', 'Gerencia Municipal', 'waldo valenzuela', '09-08-2024', '09:37:55 pm', 'asdasdasdasdasdasd', 1),
(38, 45376596, 'Maria Julia', 'Carhuancho Ortiz', 'Gerencia Municipal', 'waldo valenzuela', '09-08-2024', '09:39:10 pm', 'asdasdasd', 1),
(39, 27685935, 'Dolores', 'Diaz Zabaleta', 'Recursos Humanos', 'ever', '09-08-2024', '09:39:34 pm', 'adsasda', 1),
(40, 25689452, 'Esther', 'Zapata Narro', 'Procuraduria Publica Municipal', 'Royer Ustua', '09-08-2024', '09:40:16 pm', 'dfasfsadas', 1),
(41, 75363235, 'Paola Lizbeth', 'Loayza Malca', 'Recursos Humanos', 'ever', '09-08-2024', '09:42:57 pm', 'fsdfsdfsdf', 1),
(42, 75323536, 'Cristian Jesus', 'Campos Rios', 'Gerencia Municipal', 'waldo valenzuela', '09-08-2024', '09:44:04 pm', '3454353', 1),
(43, 75363532, 'Vilca Armando Alejandro', 'La Rosa', 'Recursos Humanos', 'ever', '09-08-2024', '10:18:29 pm', '16545', 1),
(44, 75363532, 'Vilca Armando Alejandro', 'La Rosa', 'Procuraduria Publica Municipal', 'Royer Ustua', '09-08-2024', '10:19:02 pm', '16545', 1),
(45, 75363532, 'Vilca Armando Alejandro', 'La Rosa', 'Procuraduria Publica Municipal', 'Royer Ustua', '09-08-2024', '10:19:54 pm', '0621326', 1),
(46, 75363353, 'Armando Junior', 'Yovera More', 'Recursos Humanos', 'ever', '09-08-2024', '10:56:53 pm', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estÃ¡ndar de las industrias desde el aÃ±o 1500, cuando un impresor (anÃ³nimo) usÃ³ una galera de tipos y los mezclÃ³ de tal manera que logrÃ³ fabricar un libro de muestras tipogrÃ¡ficas. No sÃ³lo sobreviviÃ³ cinco siglos, sino que tambiÃ©n ingresÃ³ a la composiciÃ³n tipogrÃ¡fica electrÃ³nica, permaneciendo esencialmente inalterado. Se popularizÃ³ en la dÃ©cada de 1960 con la publicaciÃ³n de las hojas Letraset que contenÃ­an pasajes de Lorem Ipsum y, mÃ¡s recientemente, con el uso de software de autoediciÃ³n como Aldus PageMaker, que incluÃ­a versiones de Lorem Ipsum.Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estÃ¡ndar de las industrias desde el aÃ±o 1500, cuando un impresor (anÃ³nimo) usÃ³ una galera de tipos y los mezclÃ³ de tal manera que logrÃ³ fabricar un libro de muestras tipog', 0),
(47, 75363532, 'Vilca Armando Alejandro', 'La Rosa', 'Gerencia Municipal', 'waldo valenzuela', '09-08-2024', '11:01:37 pm', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estÃ¡ndar de las industrias desde el aÃ±o 1500, cuando un impresor (anÃ³nimo) usÃ³ una galera de tipos y los mezclÃ³ de tal manera que logrÃ³ fabricar un libro de muestras tipogrÃ¡ficas. No sÃ³lo sobreviviÃ³ cinco siglos, sino que tambiÃ©n ingresÃ³ a la composiciÃ³n tipogrÃ¡fica electrÃ³nica, permaneciendo esencialmente inalterado. Se popularizÃ³ en la dÃ©cada de 1960 con la publicaciÃ³n de las hojas Letraset que contenÃ­an pasajes de Lorem Ipsum y, mÃ¡s recientemente, con el uso de software de autoediciÃ³n como Aldus PageMaker, que incluÃ­a versiones de Lorem Ipsum.', 1),
(48, 45865963, 'Luz Fiorela', 'Feril Cahuana', 'Informatica', 'erick huayta', '11-08-2024', '09:48:15 pm', 'asdasddddddddd', 1),
(49, 28567953, 'Policarpo', 'Gozme Auccatoma', 'Gerencia Municipal', 'waldo valenzuela', '12-08-2024', '08:21:52 am', 'como minimo 20 caracteres ', 1),
(50, 24863529, 'Melchora', 'Casquino Huayhua', 'Procuraduria Publica Municipal', 'Royer Ustua', '12-08-2024', '08:22:39 am', 'caracteres minimo son 20 para que funcione', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `visitante`
--
ALTER TABLE `visitante`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
