-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-05-2014 a las 05:41:45
-- Versión del servidor: 5.5.20
-- Versión de PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `u187202040_mybd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(25) NOT NULL,
  `Apellido` varchar(75) NOT NULL,
  `Nit` int(11) DEFAULT NULL,
  `Direccion` varchar(175) DEFAULT NULL,
  `Correo` varchar(60) NOT NULL,
  `Usuario` varchar(30) NOT NULL,
  `Clave` varchar(30) NOT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `Nombre`, `Apellido`, `Nit`, `Direccion`, `Correo`, `Usuario`, `Clave`) VALUES
(1, 'rudy', 'marroquin', NULL, NULL, 'rudy.innov@gmail.com', 'rd', 'rudy'),
(2, '', '', NULL, NULL, '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion`
--

CREATE TABLE IF NOT EXISTS `cotizacion` (
  `idCotizacion` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(500) NOT NULL,
  `Vehiculo` varchar(4) NOT NULL,
  `Modelo` int(11) NOT NULL,
  `Marca` varchar(15) NOT NULL,
  `Cl_idCliente` int(11) NOT NULL,
  PRIMARY KEY (`idCotizacion`),
  KEY `fk_Cotizacion_Cliente1` (`Cl_idCliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cotizacion`
--

INSERT INTO `cotizacion` (`idCotizacion`, `Descripcion`, `Vehiculo`, `Modelo`, `Marca`, `Cl_idCliente`) VALUES
(1, 'Remodelar', 'C', 2010, 'toyota', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_producto`
--

CREATE TABLE IF NOT EXISTS `detalle_producto` (
  `Pr_idProyecto` int(11) NOT NULL,
  `Pr_idProducto` int(11) NOT NULL,
  `idDetalle_Pr` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idDetalle_Pr`),
  KEY `fk_Proyecto_has_Producto_Producto1` (`Pr_idProducto`),
  KEY `fk_Proyecto_has_Producto_Proyecto1` (`Pr_idProyecto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
  `idEmpleado` int(11) NOT NULL,
  `Nombre` varchar(75) NOT NULL,
  `Apellido` varchar(75) NOT NULL,
  `Direccion` varchar(175) DEFAULT NULL,
  `Telefono` varchar(8) DEFAULT NULL,
  `DPI` varchar(13) NOT NULL,
  `Sexo` varchar(2) NOT NULL,
  `FechaNaci` date NOT NULL,
  `Usuario` varchar(30) NOT NULL,
  `Clave` varchar(30) NOT NULL,
  PRIMARY KEY (`idEmpleado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idEmpleado`, `Nombre`, `Apellido`, `Direccion`, `Telefono`, `DPI`, `Sexo`, `FechaNaci`, `Usuario`, `Clave`) VALUES
(0, 'Omar', 'Garcia', '9calle', NULL, '2522533256', 'M', '0000-00-00', 'og', 'omar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_propuesta`
--

CREATE TABLE IF NOT EXISTS `estado_propuesta` (
  `idEstado_Pr` int(11) NOT NULL AUTO_INCREMENT,
  `Stado` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`idEstado_Pr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `idProducto` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Descripcion` varchar(45) DEFAULT NULL,
  `Existencia` int(11) NOT NULL,
  `Precio_Costo` float NOT NULL,
  `Precio_Venta` float NOT NULL,
  PRIMARY KEY (`idProducto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `Nombre`, `Descripcion`, `Existencia`, `Precio_Costo`, `Precio_Venta`) VALUES
(1, 'Pintura', 'pintura marca corona', 50, 250, 195),
(2, 'Masilla', 'material para relleno', 10, 210, 153);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propuesta`
--

CREATE TABLE IF NOT EXISTS `propuesta` (
  `idPropuesta` int(11) NOT NULL AUTO_INCREMENT,
  `FechaEmi` date NOT NULL,
  `Em_idEmpleado` int(11) NOT NULL,
  `Es_idEstado` int(11) NOT NULL,
  PRIMARY KEY (`idPropuesta`),
  KEY `fk_Propuesta_Empleado1` (`Em_idEmpleado`),
  KEY `fk_Propuesta_Estado_Propuesta1` (`Es_idEstado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE IF NOT EXISTS `proyecto` (
  `idProyecto` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(75) NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaFin` date DEFAULT NULL,
  `CostoTotal` float NOT NULL,
  `Em_idEmpleado` int(11) NOT NULL,
  `Co_idCotizacion` int(11) NOT NULL,
  PRIMARY KEY (`idProyecto`),
  KEY `fk_Proyecto_Emprelado_idx` (`Em_idEmpleado`),
  KEY `fk_Proyecto_Cotizacion1` (`Co_idCotizacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD CONSTRAINT `fk_Cotizacion_Cliente1` FOREIGN KEY (`Cl_idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalle_producto`
--
ALTER TABLE `detalle_producto`
  ADD CONSTRAINT `fk_Proyecto_has_Producto_Producto1` FOREIGN KEY (`Pr_idProducto`) REFERENCES `producto` (`idProducto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Proyecto_has_Producto_Proyecto1` FOREIGN KEY (`Pr_idProyecto`) REFERENCES `proyecto` (`idProyecto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `propuesta`
--
ALTER TABLE `propuesta`
  ADD CONSTRAINT `fk_Propuesta_Empleado1` FOREIGN KEY (`Em_idEmpleado`) REFERENCES `empleado` (`idEmpleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Propuesta_Estado_Propuesta1` FOREIGN KEY (`Es_idEstado`) REFERENCES `estado_propuesta` (`idEstado_Pr`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD CONSTRAINT `fk_Proyecto_Cotizacion1` FOREIGN KEY (`Co_idCotizacion`) REFERENCES `cotizacion` (`idCotizacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Proyecto_Emprelado` FOREIGN KEY (`Em_idEmpleado`) REFERENCES `empleado` (`idEmpleado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
