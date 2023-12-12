-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2023 a las 19:15:39
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `objetos_perdidos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `Titulo` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Imagen` blob NOT NULL,
  `Descripcion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Categoria` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Subcategoria` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` int(11) NOT NULL,
  `Entregado` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images_`
--

CREATE TABLE `images_` (
  `id` int(11) NOT NULL,
  `Titulo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Imagen` blob NOT NULL,
  `Descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Categoria` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Subcategoria` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `status` int(11) NOT NULL,
  `Entregado` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `images_`
--

INSERT INTO `images_` (`id`, `Titulo`, `Imagen`, `Descripcion`, `Categoria`, `Subcategoria`, `status`, `Entregado`, `fecha`) VALUES
(6, 'sdsd', 0x3234323231343032355f3334333430353332343139373032345f383430383136343431363338313936373837345f6e2e6a7067, 'sdds', 'GAFAS', 'MARCAS', 2, 'samuel', '2021-12-17'),
(7, 'sdsd', 0x3234323231343032355f3334333430353332343139373032345f383430383136343431363338313936373837345f6e2e6a7067, 'sdds', 'GAFAS', 'MARCAS', 1, NULL, NULL),
(8, 'cargador', 0x6e61682e706e67, 'cargador', 'MOVIL', 'CARGADOR', 2, 'william9', '2021-12-18'),
(9, 'emoji', 0x656d6f6a692e6a7067, 'asdsadfasdfa', 'ACCESORIOS', 'BOLSO', 2, 'juanlopez', '2021-12-15'),
(10, 'Agenda 20121', 0x696d6167652e6a7067, 'Es una agenda pequeña con mariposas', 'LIBROS Y PAPELERIA', 'AGENDA', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `nombre`, `telefono`, `correo`, `password`, `rol`) VALUES
(22, 'admin', '1234567890', 'admin@gmail.com', 'admin', 1),
(23, 'gustavo', '1234567899', 'gustavo.gutierrez@udg.mx', '123456', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `images_`
--
ALTER TABLE `images_`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `images_`
--
ALTER TABLE `images_`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
