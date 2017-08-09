-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-08-2017 a las 19:58:50
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `carrito`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE IF NOT EXISTS `compras` (
  `id_compra` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_compra`),
  KEY `id_producto` (`id_producto`),
  KEY `usuario_id` (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=196 ;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id_compra`, `id_producto`, `usuario_id`) VALUES
(171, 40, 8),
(172, 40, 8),
(173, 40, 8),
(174, 40, 8),
(175, 40, 8),
(176, 40, 8),
(177, 40, 8),
(178, 40, 8),
(179, 40, 8),
(180, 40, 8),
(181, 42, 9),
(182, 40, 9),
(183, 42, 9),
(184, 42, 9),
(185, 41, 9),
(186, 41, 8),
(187, 40, 8),
(188, 42, 8),
(189, 40, 8),
(190, 41, 8),
(191, 41, 8),
(192, 46, 8),
(193, 43, 8),
(194, 45, 8),
(195, 42, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE IF NOT EXISTS `permisos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) NOT NULL,
  `code` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id`, `nombre`, `code`) VALUES
(1, 'Administrador', 'admin'),
(3, 'usuario', 'user');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_de_producto` varchar(250) NOT NULL,
  `Precio_de_producto` double DEFAULT NULL,
  `imagen_de_producto` varchar(250) DEFAULT NULL,
  `descripcion` text,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `Nombre_de_producto`, `Precio_de_producto`, `imagen_de_producto`, `descripcion`) VALUES
(40, 'Samsung', 200, 'file_sitio/1502248215laptop.png', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerÃ¡ con el contenido del texto de un sitio mientras que mira su diseÃ±o. El punto de usar Lorem Ipsum es que tiene una distribuciÃ³n mÃ¡s o menos normal de las letras, al contrario de usar textos como por ejemplo '),
(41, 'Motorola', 1000, 'file_sitio/1502248231laptop.png', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerÃ¡ con el contenido del texto de un sitio mientras que mira su diseÃ±o. El punto de usar Lorem Ipsum es que tiene una distribuciÃ³n mÃ¡s o menos normal de las letras, al contrario de usar textos como por ejemplo '),
(42, 'Compu', 10000, 'file_sitio/1502248237laptop.png', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerÃ¡ con el contenido del texto de un sitio mientras que mira su diseÃ±o. El punto de usar Lorem Ipsum es que tiene una distribuciÃ³n mÃ¡s o menos normal de las letras, al contrario de usar textos como por ejemplo '),
(43, 'Lorem Ipsum Dolor Sit Amet', 600, 'file_sitio/1502248252laptop.png', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerÃ¡ con el contenido del texto de un sitio mientras que mira su diseÃ±o. El punto de usar Lorem Ipsum es que tiene una distribuciÃ³n mÃ¡s o menos normal de las letras, al contrario de usar textos como por ejemplo '),
(45, 'Adidas', 5000, 'file_sitio/1502248260laptop.png', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerÃ¡ con el contenido del texto de un sitio mientras que mira su diseÃ±o. El punto de usar Lorem Ipsum es que tiene una distribuciÃ³n mÃ¡s o menos normal de las letras, al contrario de usar textos como por ejemplo '),
(46, 'Nike', 5000, 'file_sitio/1502248271laptop.png', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerÃ¡ con el contenido del texto de un sitio mientras que mira su diseÃ±o. El punto de usar Lorem Ipsum es que tiene una distribuciÃ³n mÃ¡s o menos normal de las letras, al contrario de usar textos como por ejemplo '),
(47, 'Reebook', 2000, 'file_sitio/1502248296laptop.png', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerÃ¡ con el contenido del texto de un sitio mientras que mira su diseÃ±o. El punto de usar Lorem Ipsum es que tiene una distribuciÃ³n mÃ¡s o menos normal de las letras, al contrario de usar textos como por ejemplo '),
(48, 'Toper', 3000, 'file_sitio/1502248310laptop.png', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerÃ¡ con el contenido del texto de un sitio mientras que mira su diseÃ±o. El punto de usar Lorem Ipsum es que tiene una distribuciÃ³n mÃ¡s o menos normal de las letras, al contrario de usar textos como por ejemplo '),
(49, 'Toper v4', 2000, 'file_sitio/1502248318laptop.png', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerÃ¡ con el contenido del texto de un sitio mientras que mira su diseÃ±o. El punto de usar Lorem Ipsum es que tiene una distribuciÃ³n mÃ¡s o menos normal de las letras, al contrario de usar textos como por ejemplo ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `apellido` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `nombre`, `apellido`, `pass`) VALUES
(1, 'javier.altmann@hotmail.com', 'javier', 'altmann', 'javier'),
(2, 'javier.altmann@davinci.edu.ar', 'javiers', 'altman', 'javier'),
(3, 'juanc.s@hotmail.com', 'jun', 'gomez', 'j123'),
(4, 'permiso.usuario@hotmail.com', 'usuario', 'usuario', 'usuario'),
(6, 'jony.sosin@gmail.com', 'jony', 'jonys', 'aaaaa'),
(8, 'prueba.encript@hotmail.com', 'Prueba', 'Encript', '3c9c03d6008a5adf42c2a55dd4a1a9f2'),
(9, 'javier.altmann@admin.com', 'javi', 'altmann', '3c9c03d6008a5adf42c2a55dd4a1a9f2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_permisos`
--

CREATE TABLE IF NOT EXISTS `usuario_permisos` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `permiso_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_id` (`usuario_id`),
  KEY `permiso_id` (`permiso_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario_permisos`
--

INSERT INTO `usuario_permisos` (`id`, `usuario_id`, `permiso_id`) VALUES
(0, 4, 3),
(1, 1, 1),
(2, 2, 3),
(3, 4, 3),
(5, 9, 1),
(6, 8, 3);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`),
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `usuario_permisos`
--
ALTER TABLE `usuario_permisos`
  ADD CONSTRAINT `usuario_permisos_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `usuario_permisos_ibfk_2` FOREIGN KEY (`permiso_id`) REFERENCES `permisos` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
