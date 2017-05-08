-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-05-2017 a las 18:53:52
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tuita`
--
CREATE DATABASE IF NOT EXISTS `tuita` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tuita`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estilosmusica`
--

CREATE TABLE `estilosmusica` (
  `estilo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estilosmusica`
--

INSERT INTO `estilosmusica` (`estilo`) VALUES
('Flamenco'),
('Pop'),
('Rap'),
('Rock');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estilosusuarios`
--

CREATE TABLE `estilosusuarios` (
  `usuario` varchar(10) NOT NULL,
  `estilousuario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `nombre` varchar(30) NOT NULL,
  `edadMinima` int(11) NOT NULL,
  `edadMaxima` int(11) NOT NULL,
  `estiloMusical` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id` int(11) NOT NULL,
  `mensaje` varchar(130) NOT NULL,
  `destinatarioGrupo` varchar(30) DEFAULT NULL,
  `destinatariousuario` varchar(10) DEFAULT NULL,
  `emisor` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pertenecen`
--

CREATE TABLE `pertenecen` (
  `usuario` varchar(10) NOT NULL,
  `grupo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombreUSuario` varchar(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `administrador` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombreUSuario`, `nombre`, `apellidos`, `pass`, `fechaNacimiento`, `administrador`) VALUES
('prueba', 'prueba', 'prueba', 'prueba', '2017-05-18', 0),
('prueba2', 'prueba2', 'prueba2', 'prueba2', '2015-11-11', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estilosmusica`
--
ALTER TABLE `estilosmusica`
  ADD PRIMARY KEY (`estilo`);

--
-- Indices de la tabla `estilosusuarios`
--
ALTER TABLE `estilosusuarios`
  ADD PRIMARY KEY (`usuario`,`estilousuario`),
  ADD KEY `estilosusuarios_fk_1` (`estilousuario`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`nombre`),
  ADD KEY `estiloMusical` (`estiloMusical`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destinatarioGrupo` (`destinatarioGrupo`),
  ADD KEY `destinatariousuario` (`destinatariousuario`),
  ADD KEY `emisor` (`emisor`);

--
-- Indices de la tabla `pertenecen`
--
ALTER TABLE `pertenecen`
  ADD PRIMARY KEY (`usuario`,`grupo`),
  ADD KEY `grupo` (`grupo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`nombreUSuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estilosusuarios`
--
ALTER TABLE `estilosusuarios`
  ADD CONSTRAINT `estilosusuarios_fk_1` FOREIGN KEY (`estilousuario`) REFERENCES `estilosmusica` (`estilo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD CONSTRAINT `grupos_ibfk_1` FOREIGN KEY (`estiloMusical`) REFERENCES `estilosmusica` (`estilo`);

--
-- Filtros para la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD CONSTRAINT `mensajes_ibfk_1` FOREIGN KEY (`destinatarioGrupo`) REFERENCES `grupos` (`nombre`),
  ADD CONSTRAINT `mensajes_ibfk_2` FOREIGN KEY (`destinatariousuario`) REFERENCES `usuarios` (`nombreUSuario`),
  ADD CONSTRAINT `mensajes_ibfk_3` FOREIGN KEY (`emisor`) REFERENCES `usuarios` (`nombreUSuario`);

--
-- Filtros para la tabla `pertenecen`
--
ALTER TABLE `pertenecen`
  ADD CONSTRAINT `pertenecen_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`nombreUSuario`),
  ADD CONSTRAINT `pertenecen_ibfk_2` FOREIGN KEY (`grupo`) REFERENCES `grupos` (`nombre`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
