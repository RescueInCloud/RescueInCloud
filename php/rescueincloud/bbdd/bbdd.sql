-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Servidor: 127.5.175.2:3306
-- Tiempo de generación: 15-11-2013 a las 15:31:37
-- Versión del servidor: 5.1.69
-- Versión de PHP: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `rescueincloud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `farmacos`
--

CREATE TABLE IF NOT EXISTS `farmacos` (
  `id_farmaco` varchar(25) NOT NULL,
  `email_usuario` varchar(100) NOT NULL,
  `nombre_farmaco` varchar(100) NOT NULL,
  `nombre_fabricante` varchar(100) NOT NULL,
  `nombre_quimico` varchar(100) NOT NULL,
  `creado_en` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modificado_en` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `borrado` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_farmaco`,`email_usuario`),
  KEY `email_usuario` (`email_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `farmacos`
--

INSERT INTO `farmacos` (`id_farmaco`, `email_usuario`, `nombre_farmaco`, `nombre_fabricante`, `nombre_quimico`, `creado_en`, `modificado_en`, `borrado`) VALUES
('f1', 'ricardocb48@gmail.com', 'f1', 'Senosiain', 'f1', '2013-11-15 15:26:48', '0000-00-00 00:00:00', 0),
('f2', 'ricardocb48@gmail.com', 'f2', 'Senosiain', 'f2', '2013-11-15 15:27:20', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE IF NOT EXISTS `notas` (
  `nombre_nota` varchar(25) NOT NULL,
  `email_usuario` varchar(100) NOT NULL,
  `id_farmaco` varchar(25) DEFAULT '',
  `descripcion` text NOT NULL,
  `nota_creada_en` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nota_modificada_en` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `borrado` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`nombre_nota`,`email_usuario`),
  KEY `email_usuario` (`email_usuario`),
  KEY `id_farmaco` (`id_farmaco`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `protocolos`
--

CREATE TABLE IF NOT EXISTS `protocolos` (
  `nombre_protocolo` varchar(25) NOT NULL,
  `email_usuario` varchar(100) NOT NULL,
  `protocolo` text NOT NULL,
  `protocolo_creado_en` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `protocolo_modificado_en` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `borrado` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`nombre_protocolo`,`email_usuario`),
  KEY `email_usuario` (`email_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `protocolos`
--

INSERT INTO `protocolos` (`nombre_protocolo`, `email_usuario`, `protocolo`, `protocolo_creado_en`, `protocolo_modificado_en`, `borrado`) VALUES
('p1', 'ricardocb48@gmail.com', 'protocolo xaxi piruli codificado de alguna manera', '2013-11-15 15:29:22', '0000-00-00 00:00:00', 0),
('p2', 'ricardocb48@gmail.com', 'protocolo xaxi piruli codificado de alguna manera', '2013-11-15 15:29:36', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relNM_protocolos_farmacos`
--

CREATE TABLE IF NOT EXISTS `relNM_protocolos_farmacos` (
  `nombre_protocolo` varchar(25) NOT NULL,
  `id_farmaco` varchar(25) NOT NULL,
  `rel_creada_en` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `rel_actualizada_en` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`nombre_protocolo`,`id_farmaco`),
  KEY `id_farmaco` (`id_farmaco`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `relNM_protocolos_farmacos`
--

INSERT INTO `relNM_protocolos_farmacos` (`nombre_protocolo`, `id_farmaco`, `rel_creada_en`, `rel_actualizada_en`) VALUES
('p1', 'f1', '2013-11-15 15:30:49', '0000-00-00 00:00:00'),
('p1', 'f2', '2013-11-15 15:30:58', '0000-00-00 00:00:00'),
('p2', 'f1', '2013-11-15 15:31:06', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `email_usuario` varchar(100) NOT NULL,
  `dni` varchar(9) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `genero` tinyint(1) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `centro_trabajo` varchar(100) NOT NULL,
  `usuario_creado_en` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `usuario_actualizado_en` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `borrado` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`email_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`email_usuario`, `dni`, `nombre`, `apellidos`, `genero`, `fecha_nacimiento`, `centro_trabajo`, `usuario_creado_en`, `usuario_actualizado_en`, `borrado`) VALUES
('ricardocb48@gmail.com', '51716889Ñ', 'Ricardo', 'Champa', 1, '1988-04-04', 'REDK', '2013-11-15 15:02:42', '0000-00-00 00:00:00', 0);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `farmacos`
--
ALTER TABLE `farmacos`
  ADD CONSTRAINT `farmaco_ibfk_1` FOREIGN KEY (`email_usuario`) REFERENCES `usuarios` (`email_usuario`);

--
-- Filtros para la tabla `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `notas_ibfk_1` FOREIGN KEY (`email_usuario`) REFERENCES `usuarios` (`email_usuario`),
  ADD CONSTRAINT `notas_ibfk_2` FOREIGN KEY (`id_farmaco`) REFERENCES `farmacos` (`id_farmaco`);

--
-- Filtros para la tabla `protocolos`
--
ALTER TABLE `protocolos`
  ADD CONSTRAINT `protocolo_ibfk_1` FOREIGN KEY (`email_usuario`) REFERENCES `usuarios` (`email_usuario`);

--
-- Filtros para la tabla `relNM_protocolos_farmacos`
--
ALTER TABLE `relNM_protocolos_farmacos`
  ADD CONSTRAINT `relNM_protocolos_farmacos_ibfk_1` FOREIGN KEY (`nombre_protocolo`) REFERENCES `protocolos` (`nombre_protocolo`),
  ADD CONSTRAINT `relNM_protocolos_farmacos_ibfk_2` FOREIGN KEY (`id_farmaco`) REFERENCES `farmacos` (`id_farmaco`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
