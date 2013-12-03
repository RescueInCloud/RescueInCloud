-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-12-2013 a las 16:33:19
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
-- Estructura de tabla para la tabla `Farmacos`
--

CREATE TABLE IF NOT EXISTS `Farmacos` (
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
-- Volcar la base de datos para la tabla `Farmacos`
--

INSERT INTO `Farmacos` (`id_farmaco`, `email_usuario`, `nombre_farmaco`, `nombre_fabricante`, `nombre_quimico`, `creado_en`, `modificado_en`, `borrado`) VALUES
('f1', 'ricardocb48@gmail.com', 'f1', 'Senosiain', 'f1', '2013-11-15 16:26:24', '0000-00-00 00:00:00', 0),
('f2', 'ricardocb48@gmail.com', 'f2', 'Senosiain', 'f2', '2013-11-15 16:26:56', '0000-00-00 00:00:00', 0),
('f3', 'ale7jandra.89@gmail.com', 'Paracetamol', 'Cinfa', 'Acetaminofén', '2013-11-18 21:03:00', '0000-00-00 00:00:00', 0),
('f4', 'ale7jandra.89@gmail.com', 'Aspirina', 'Bayer', 'Ácido acetilsalicílico', '2013-11-18 21:05:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Notas`
--

CREATE TABLE IF NOT EXISTS `Notas` (
  `nombre_nota` varchar(25) NOT NULL,
  `email_usuario` varchar(100) NOT NULL,
  `id_farmaco` varchar(25) DEFAULT NULL,
  `descripcion` text NOT NULL,
  `nota_creada_en` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nota_modificada_en` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `borrado` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`nombre_nota`,`email_usuario`),
  KEY `email_usuario` (`email_usuario`),
  KEY `id_farmaco` (`id_farmaco`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `Notas`
--

INSERT INTO `Notas` (`nombre_nota`, `email_usuario`, `id_farmaco`, `descripcion`, `nota_creada_en`, `nota_modificada_en`, `borrado`) VALUES
('nota1', 'ricardocb48@gmail.com', 'f1', 'Una nota de prueba', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
('nota2', 'ricardocb48@gmail.com', 'f2', 'Una nota de prueba2', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
('nota3', 'ricardocb48@gmail.com', 'f1', 'Una nota de prueba3 con fármaco f1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
('nota4', 'ricardocb48@gmail.com', NULL, 'Una nota de prueba4', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
('nota5', 'ricardocb48@gmail.com', NULL, 'Una nota de prueba5', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Protocolos`
--

CREATE TABLE IF NOT EXISTS `Protocolos` (
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
-- Volcar la base de datos para la tabla `Protocolos`
--

INSERT INTO `Protocolos` (`nombre_protocolo`, `email_usuario`, `protocolo`, `protocolo_creado_en`, `protocolo_modificado_en`, `borrado`) VALUES
('p1', 'ricardocb48@gmail.com', 'protocolo xaxi piruli codificado de alguna manera', '2013-11-15 16:28:58', '0000-00-00 00:00:00', 0),
('p2', 'ricardocb48@gmail.com', 'protocolo xaxi piruli codificado de alguna manera', '2013-11-15 16:29:12', '0000-00-00 00:00:00', 0),
('p3', 'ale7jandra.89@gmail.com', 'Protocolo para fracturas de extremidades superiores.', '2013-11-18 22:36:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Relnm_Protocolos_Farmacos`
--

CREATE TABLE IF NOT EXISTS `Relnm_Protocolos_Farmacos` (
  `nombre_protocolo` varchar(25) NOT NULL,
  `id_farmaco` varchar(25) NOT NULL,
  `rel_creada_en` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `rel_actualizada_en` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`nombre_protocolo`,`id_farmaco`),
  KEY `id_farmaco` (`id_farmaco`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `Relnm_Protocolos_Farmacos`
--

INSERT INTO `Relnm_Protocolos_Farmacos` (`nombre_protocolo`, `id_farmaco`, `rel_creada_en`, `rel_actualizada_en`) VALUES
('p1', 'f1', '2013-11-15 16:30:25', '0000-00-00 00:00:00'),
('p1', 'f2', '2013-11-15 16:30:34', '0000-00-00 00:00:00'),
('p2', 'f1', '2013-11-15 16:30:42', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE IF NOT EXISTS `Usuarios` (
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
-- Volcar la base de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`email_usuario`, `dni`, `nombre`, `apellidos`, `genero`, `fecha_nacimiento`, `centro_trabajo`, `usuario_creado_en`, `usuario_actualizado_en`, `borrado`) VALUES
('ale7jandra.89@gmail.com', '09135127X', 'Alejandra', 'González ', 2, '1989-08-03', 'Bayes', '2013-11-18 00:00:00', '0000-00-00 00:00:00', 0),
('ricardocb48@gmail.com', '51716889Ñ', 'Ricardo', 'Champa', 1, '1988-04-04', 'REDK', '2013-11-15 16:02:18', '0000-00-00 00:00:00', 0);

--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `Farmacos`
--
ALTER TABLE `Farmacos`
  ADD CONSTRAINT `farmaco_ibfk_1` FOREIGN KEY (`email_usuario`) REFERENCES `Usuarios` (`email_usuario`);

--
-- Filtros para la tabla `Notas`
--
ALTER TABLE `Notas`
  ADD CONSTRAINT `Notas_ibfk_1` FOREIGN KEY (`email_usuario`) REFERENCES `Usuarios` (`email_usuario`),
  ADD CONSTRAINT `Notas_ibfk_2` FOREIGN KEY (`id_farmaco`) REFERENCES `Farmacos` (`id_farmaco`);

--
-- Filtros para la tabla `Protocolos`
--
ALTER TABLE `Protocolos`
  ADD CONSTRAINT `protocolo_ibfk_1` FOREIGN KEY (`email_usuario`) REFERENCES `Usuarios` (`email_usuario`);

--
-- Filtros para la tabla `Relnm_Protocolos_Farmacos`
--
ALTER TABLE `Relnm_Protocolos_Farmacos`
  ADD CONSTRAINT `Relnm_Protocolos_Farmacos_ibfk_1` FOREIGN KEY (`nombre_protocolo`) REFERENCES `Protocolos` (`nombre_protocolo`),
  ADD CONSTRAINT `Relnm_Protocolos_Farmacos_ibfk_2` FOREIGN KEY (`id_farmaco`) REFERENCES `Farmacos` (`id_farmaco`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
