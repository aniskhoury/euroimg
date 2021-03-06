-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-11-2019 a las 11:52:06
-- Versión del servidor: 5.7.11
-- Versión de PHP: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `euroimg`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imatges`
--

CREATE TABLE `imatges` (
  `id` bigint(11) NOT NULL,
  `idusuari` int(11) NOT NULL,
  `ubicacio` varchar(512) CHARACTER SET latin1 NOT NULL,
  `descripcio` varchar(512) CHARACTER SET latin1 NOT NULL,
  `datacreacio` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `imatges`
--

INSERT INTO `imatges` (`id`, `idusuari`, `ubicacio`, `descripcio`, `datacreacio`) VALUES
(6, -1, 'imatges/20191128/cake.png', 'Imatge d\'un pastÃ­s							', '2019-11-28 09:49:35'),
(7, -1, 'imatges/20191128/cake.png', 'PastÃ­s Ã²la							', '2019-11-28 09:53:50'),
(8, -1, 'imatges/20191128/circus.png', 'Imagen de felicidad							', '2019-11-28 11:57:04'),
(9, -1, 'imatges/20191128/game.png', 'imatge relacionada amb el joc i la diversiÃ³							', '2019-11-28 12:45:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags`
--

CREATE TABLE `tags` (
  `id` bigint(11) NOT NULL,
  `nom` varchar(64) CHARACTER SET latin1 NOT NULL,
  `idimatge` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tags`
--

INSERT INTO `tags` (`id`, `nom`, `idimatge`) VALUES
(10, ' celebraciÃ³', 6),
(9, ' aniversari', 6),
(8, 'pastÃ­s', 6),
(11, 'pastÃ­s', 7),
(12, ' xocolata', 7),
(13, ' aniversari', 7),
(14, ' postre', 7),
(15, 'circo', 8),
(16, ' diversiÃ³n', 8),
(17, ' alegrÃ­a', 8),
(18, ' fiesta', 8),
(19, 'juego', 9),
(20, ' ilustraciÃ³n', 9),
(21, ' diversiÃ³n', 9),
(22, 'joc', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuaris`
--

CREATE TABLE `usuaris` (
  `id` bigint(20) NOT NULL,
  `nick` int(11) NOT NULL,
  `email` varchar(64) CHARACTER SET latin1 NOT NULL,
  `clau` char(64) CHARACTER SET latin1 NOT NULL,
  `salt` char(12) CHARACTER SET latin1 NOT NULL,
  `datacreacio` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `imatges`
--
ALTER TABLE `imatges`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuaris`
--
ALTER TABLE `usuaris`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `imatges`
--
ALTER TABLE `imatges`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `usuaris`
--
ALTER TABLE `usuaris`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
