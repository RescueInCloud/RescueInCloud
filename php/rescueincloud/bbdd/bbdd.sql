-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-11-2013 a las 22:37:23
-- Versión del servidor: 5.1.41
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `rescueincloud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `farmacos_tmp`
--

CREATE TABLE IF NOT EXISTS `farmacos_tmp` (
  `id_farmaco` int(11) NOT NULL AUTO_INCREMENT,
  `email_usuario` varchar(100) NOT NULL,
  `nombre_farmaco` varchar(100) NOT NULL,
  `nombre_fabricante` varchar(100) NOT NULL,
  `presentacion_farmaco` varchar(100) NOT NULL,
  `tipo_administracion` varchar(100) NOT NULL,
  `creado_en` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modificado_en` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `descripcion_farmaco` varchar(500) NOT NULL,
  `borrado` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_farmaco`),
  UNIQUE KEY `id_farmaco` (`id_farmaco`),
  UNIQUE KEY `nombre_farmaco` (`nombre_farmaco`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;
--
-- Volcar la base de datos para la tabla `farmacos_tmp`
--

INSERT INTO `farmacos_tmp` (`id_farmaco`, `email_usuario`, `nombre_farmaco`, `nombre_fabricante`, `presentacion_farmaco`, `tipo_administracion`, `creado_en`, `modificado_en`, `descripcion_farmaco`, `borrado`) VALUES
(1, 'ale7jandra.89@gmail.com', 'Aspirina', 'Bayer', '500mg', 'comprimidos', '2014-01-13 23:46:18', '0000-00-00 00:00:00', '', 0),
(2, 'ale7jandra.89@gmail.com', 'Diazepam', 'Bayer', 'sobres', 'oral', '2014-01-14 00:27:03', '0000-00-00 00:00:00', '', 0),
(3, 'ale7jandra.89@gmail.com', 'Paracetamol', 'Cinfa', 'Comprimidos', 'oral', '2014-01-22 23:07:31', '0000-00-00 00:00:00', '', 0),
(4, 'ale7jandra.89@gmail.com', 'Gelocatil', 'Bayer', 'Comprimidos', 'oral', '2014-01-22 23:31:51', '0000-00-00 00:00:00', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `farmacos`
--
/*
--1. modificar tabla farmacos_V3 a farmacos sin campo email_usuario.
2. crear relacion nm farmacos y usuarios.
3. modificar el tipo del campo id_farmaco de la relacion protocolos-farmacos 

---definir la posibilidad de la modificacion de un farmaco: cuanto afecta a un usuario que comparte dicho farmaco.

*/
CREATE TABLE IF NOT EXISTS `farmacos` (
  `id_farmaco` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_farmaco` varchar(100) NOT NULL,
  `nombre_fabricante` varchar(100) NOT NULL,
  `presentacion_farmaco` varchar(100) NOT NULL,
  `tipo_administracion` varchar(100) NOT NULL,
  `creado_en` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modificado_en` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `descripcion_farmaco` varchar(500) NOT NULL,
  `borrado` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_farmaco`),
  UNIQUE KEY `id_farmaco` (`id_farmaco`),
  UNIQUE KEY `nombre_farmaco` (`nombre_farmaco`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `farmacos`
--

INSERT INTO `farmacos` (`id_farmaco`, `nombre_farmaco`, `nombre_fabricante`, `presentacion_farmaco`, `tipo_administracion`, `creado_en`, `modificado_en`, `descripcion_farmaco`, `borrado`) VALUES
(1, 'Aspirina', 'Bayer', '500mg', 'comprimidos', '2014-01-13 23:46:18', '0000-00-00 00:00:00', '', 0),
(2, 'Diazepam', 'Bayer', 'sobres', 'oral', '2014-01-14 00:27:03', '0000-00-00 00:00:00', '', 0),
(3, 'Paracetamol', 'Cinfa', 'Comprimidos', 'oral', '2014-01-22 23:07:31', '0000-00-00 00:00:00', '', 0),
(4, 'Gelocatil', 'Bayer', 'Comprimidos', 'oral', '2014-01-22 23:31:51', '0000-00-00 00:00:00', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE IF NOT EXISTS `notas` (
  `nombre_nota` varchar(25) NOT NULL,
  `email_usuario` varchar(100) NOT NULL,
  `id_farmaco` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `nota_creada_en` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nota_modificada_en` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `borrado` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`nombre_nota`,`email_usuario`),
  KEY `email_usuario` (`email_usuario`),
  KEY `id_farmaco` (`id_farmaco`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `notas`
--


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
-- Volcar la base de datos para la tabla `protocolos`
--

INSERT INTO `protocolos` (`nombre_protocolo`, `email_usuario`, `protocolo`, `protocolo_creado_en`, `protocolo_modificado_en`, `borrado`) VALUES
('p1', 'ricardocb48@gmail.com', 'protocolo xaxi piruli codificado de alguna manera', '2013-11-15 16:28:58', '0000-00-00 00:00:00', 0),
('p2', 'ricardocb48@gmail.com', 'protocolo xaxi piruli codificado de alguna manera', '2013-11-15 16:29:12', '0000-00-00 00:00:00', 0),
('p3', 'ale7jandra.89@gmail.com', 'Protocolo para fracturas de extremidades superiores.', '2013-11-18 22:36:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relnm_protocolos_farmacos`
--

CREATE TABLE IF NOT EXISTS `relnm_protocolos_farmacos` (
  `nombre_protocolo` varchar(25) NOT NULL,
  `id_farmaco` int(11) NOT NULL,
  `rel_creada_en` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `rel_actualizada_en` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`nombre_protocolo`,`id_farmaco`),
  KEY `id_farmaco` (`id_farmaco`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `relnm_protocolos_farmacos`
--

INSERT INTO `relnm_protocolos_farmacos` (`nombre_protocolo`, `id_farmaco`, `rel_creada_en`, `rel_actualizada_en`) VALUES
('p1', '1', '2013-11-15 16:30:25', '0000-00-00 00:00:00'),
('p1', '2', '2013-11-15 16:30:34', '0000-00-00 00:00:00'),
('p2', '1', '2013-11-15 16:30:42', '0000-00-00 00:00:00');

-- --------------------------------------------------------

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relnm_farmacos_usuarios`
--

CREATE TABLE IF NOT EXISTS `relnm_farmacos_usuarios` (
  `email_usuario` varchar(100) NOT NULL,
  `id_farmaco` int(11) NOT NULL,
  `rel_creada_en` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `rel_actualizada_en` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`email_usuario`,`id_farmaco`),
  KEY `id_farmaco` (`id_farmaco`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `relnm_farmacos_usuarios`
--

INSERT INTO `relnm_farmacos_usuarios` (`email_usuario`, `id_farmaco`, `rel_creada_en`, `rel_actualizada_en`) VALUES
('ale7jandra.89@gmail.com', '1', '2013-11-15 16:30:25', '0000-00-00 00:00:00'),
('ale7jandra.89@gmail.com', '2', '2013-11-15 16:30:34', '0000-00-00 00:00:00');

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
-- Volcar la base de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`email_usuario`, `dni`, `nombre`, `apellidos`, `genero`, `fecha_nacimiento`, `centro_trabajo`, `usuario_creado_en`, `usuario_actualizado_en`, `borrado`) VALUES
('ale7jandra.89@gmail.com', '09135127X', 'Alejandra', 'González ', 2, '1989-08-03', 'Bayes', '2013-11-18 00:00:00', '0000-00-00 00:00:00', 0),
('ricardocb48@gmail.com', '51716889Ñ', 'Ricardo', 'Champa', 1, '1988-04-04', 'REDK', '2013-11-15 16:02:18', '0000-00-00 00:00:00', 0);

--
-- Filtros para las tablas descargadas (dump)
--

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
-- Filtros para la tabla `relnm_protocolos_farmacos`
--
ALTER TABLE `relnm_protocolos_farmacos`
  ADD CONSTRAINT `relNM_protocolos_farmacos_ibfk_1` FOREIGN KEY (`nombre_protocolo`) REFERENCES `protocolos` (`nombre_protocolo`),
  ADD CONSTRAINT `relNM_protocolos_farmacos_ibfk_2` FOREIGN KEY (`id_farmaco`) REFERENCES `farmacos` (`id_farmaco`);

--
-- Filtros para la tabla `relnm_farmacos_usuarios`
--
ALTER TABLE `relnm_farmacos_usuarios`
  ADD CONSTRAINT `relNM_farmacos_usuarios_ibfk_1` FOREIGN KEY (`email_usuario`) REFERENCES `usuarios` (`email_usuario`),
  ADD CONSTRAINT `relNM_farmacos_usuarios` FOREIGN KEY (`id_farmaco`) REFERENCES `farmacos` (`id_farmaco`);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
