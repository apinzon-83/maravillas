-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 07-03-2018 a las 05:07:22
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `maravilladb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enteraste`
--

DROP TABLE IF EXISTS `enteraste`;
CREATE TABLE IF NOT EXISTS `enteraste` (
  `identeraste` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`identeraste`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `enteraste`
--

INSERT INTO `enteraste` (`identeraste`, `tipo`) VALUES
(1, 'Facebook'),
(2, 'Recomendación'),
(3, 'Amigos'),
(4, 'Publicidad'),
(5, 'Promotor'),
(6, 'Internet'),
(7, 'Pagina Web');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `establecimiento`
--

DROP TABLE IF EXISTS `establecimiento`;
CREATE TABLE IF NOT EXISTS `establecimiento` (
  `idestablecimiento` int(11) NOT NULL AUTO_INCREMENT,
  `claveEstablecimiento` int(11) NOT NULL,
  `nombreEstablecimiento` varchar(45) DEFAULT NULL,
  `nHabitaciones` int(11) DEFAULT NULL,
  `pagWeb` varchar(45) DEFAULT NULL,
  `tipoMoneda` varchar(45) DEFAULT NULL,
  `nombreContacto` varchar(45) DEFAULT NULL,
  `calle` varchar(45) DEFAULT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `colonia` varchar(45) DEFAULT NULL,
  `ciudad` varchar(45) DEFAULT NULL,
  `cp` int(11) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `telefonoAlternativo` int(11) DEFAULT NULL,
  `horaEntrada` varchar(45) DEFAULT NULL,
  `horaSalida` varchar(45) DEFAULT NULL,
  `intenet` varchar(45) DEFAULT NULL,
  `tipoInternet` varchar(45) DEFAULT NULL,
  `dondeInternet` varchar(45) DEFAULT NULL,
  `pagoPorDiaInternet` int(11) DEFAULT NULL,
  `parking` varchar(45) DEFAULT NULL,
  `lugarParking` varchar(45) DEFAULT NULL,
  `tipoParking` varchar(45) DEFAULT NULL,
  `pagoPorDiaParking` int(11) DEFAULT NULL,
  `niños` varchar(45) DEFAULT NULL,
  `mascotas` varchar(45) DEFAULT NULL,
  `pagoPorPerrera` int(11) DEFAULT NULL,
  `idioma` varchar(45) DEFAULT NULL,
  `tipoHabitacion` int(11) DEFAULT NULL,
  `nombreHabitacion` varchar(45) DEFAULT NULL,
  `fumadores` varchar(45) DEFAULT NULL,
  `tamanoHabitacion` varchar(45) DEFAULT NULL,
  `precioPorNoche` int(11) DEFAULT NULL,
  `fotoHabitacion1` varchar(45) DEFAULT NULL,
  `fotoHabitacion2` varchar(45) DEFAULT NULL,
  `fotoHabitacion3` varchar(45) DEFAULT NULL,
  `terminalBancaria` varchar(45) DEFAULT NULL,
  `iva` varchar(45) DEFAULT NULL,
  `impuestoMunicipal` varchar(45) DEFAULT NULL,
  `rfc` varchar(45) DEFAULT NULL,
  `direccionFactura` varchar(45) DEFAULT NULL,
  `ciudadFactura` varchar(45) DEFAULT NULL,
  `cpFactura` int(11) DEFAULT NULL,
  `emailFactura` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idestablecimiento`),
  KEY `fk_tipoEstablecimiento_establecimiento_idx` (`claveEstablecimiento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `idrol` int(11) NOT NULL,
  `rol` int(11) DEFAULT NULL,
  `nombreRol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idrol`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idrol`, `rol`, `nombreRol`) VALUES
(1, 1, 'usuario'),
(2, 2, 'socio'),
(3, 3, 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoestablecimiento`
--

DROP TABLE IF EXISTS `tipoestablecimiento`;
CREATE TABLE IF NOT EXISTS `tipoestablecimiento` (
  `idtipoEstablecimiento` int(11) NOT NULL AUTO_INCREMENT,
  `claveEstablecimiento` int(11) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtipoEstablecimiento`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipohabitacion`
--

DROP TABLE IF EXISTS `tipohabitacion`;
CREATE TABLE IF NOT EXISTS `tipohabitacion` (
  `idtipoHabitacion` int(11) NOT NULL AUTO_INCREMENT,
  `claveHabitacion` int(11) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtipoHabitacion`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuarios` int(11) NOT NULL AUTO_INCREMENT,
  `idrol` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellidoP` varchar(45) DEFAULT NULL,
  `apellidoM` varchar(45) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `genero` varchar(45) DEFAULT NULL,
  `enteraste` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idusuarios`),
  KEY `fk_rol_usuario_idx` (`idrol`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `idrol`, `nombre`, `apellidoP`, `apellidoM`, `usuario`, `password`, `email`, `telefono`, `genero`, `enteraste`) VALUES
(18, 1, 'ricardo', 'espinosa', 'delgado', 'rick', '$2y$10$FrRLnCE4Nj1hzb0y4UaDH.nHH.ylKK7K6KhRUWRnvKPXjl/AGyQgi', 'rick@conextium.com', '553864344', 'Hombre', 'Pagina_web');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
