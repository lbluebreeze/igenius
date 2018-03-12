-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.9-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para igenius
CREATE DATABASE IF NOT EXISTS `igenius` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `igenius`;


-- Volcando estructura para tabla igenius.actividades
CREATE TABLE IF NOT EXISTS `actividades` (
  `idActividad` int(11) NOT NULL AUTO_INCREMENT,
  `nombreActividad` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `descripcionActividad` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idActividad`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla igenius.actividades: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `actividades` DISABLE KEYS */;
INSERT INTO `actividades` (`idActividad`, `nombreActividad`, `descripcionActividad`) VALUES
	(7, '123', '123'),
	(8, '123', '123');
/*!40000 ALTER TABLE `actividades` ENABLE KEYS */;


-- Volcando estructura para tabla igenius.apartamentos
CREATE TABLE IF NOT EXISTS `apartamentos` (
  `idApartamento` int(11) NOT NULL AUTO_INCREMENT,
  `numeroApartamento` int(3) NOT NULL,
  PRIMARY KEY (`idApartamento`),
  UNIQUE KEY `Índice 2` (`numeroApartamento`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla igenius.apartamentos: ~54 rows (aproximadamente)
/*!40000 ALTER TABLE `apartamentos` DISABLE KEYS */;
INSERT INTO `apartamentos` (`idApartamento`, `numeroApartamento`) VALUES
	(1, 101),
	(2, 102),
	(6, 103),
	(4, 104),
	(5, 105),
	(3, 106),
	(7, 201),
	(8, 202),
	(10, 203),
	(11, 204),
	(9, 205),
	(13, 206),
	(14, 301),
	(16, 302),
	(17, 303),
	(12, 304),
	(15, 305),
	(18, 306),
	(19, 401),
	(20, 402),
	(21, 403),
	(22, 404),
	(24, 405),
	(25, 406),
	(26, 501),
	(23, 502),
	(27, 503),
	(28, 504),
	(29, 505),
	(30, 506),
	(31, 601),
	(32, 602),
	(34, 603),
	(33, 604),
	(36, 605),
	(37, 606),
	(35, 701),
	(38, 702),
	(39, 703),
	(41, 704),
	(40, 705),
	(45, 706),
	(43, 801),
	(42, 802),
	(44, 803),
	(46, 804),
	(47, 805),
	(48, 806),
	(50, 901),
	(49, 902),
	(51, 903),
	(52, 904),
	(53, 905),
	(54, 906);
/*!40000 ALTER TABLE `apartamentos` ENABLE KEYS */;


-- Volcando estructura para tabla igenius.equipos
CREATE TABLE IF NOT EXISTS `equipos` (
  `idEquipo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `marca` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `modelo` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `noSerie` int(11) NOT NULL,
  `proveedor` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `telefonoProveedor` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `tecnico` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `telefonoTecnico` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fechaRegistro` date NOT NULL,
  PRIMARY KEY (`idEquipo`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla igenius.equipos: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `equipos` DISABLE KEYS */;
INSERT INTO `equipos` (`idEquipo`, `nombre`, `descripcion`, `marca`, `modelo`, `noSerie`, `proveedor`, `telefonoProveedor`, `tecnico`, `telefonoTecnico`, `fechaRegistro`) VALUES
	(12, '123', '123', '123', '123', 123, '123', '123', '123', '123', '2013-11-15'),
	(15, 'Equipo portatil', 'Equipo portatil', 'Compaq', 'Dx100', 1937333, 'Dell', '2221112', 'Alejandra', '2233442', '0000-00-00'),
	(16, 'Equipo portatil', 'Equipo portatil', 'Compaq', 'Dx100', 1937333, 'Dell', '2221112', 'Alejandra', '2233442', '0000-00-00'),
	(17, 'Equipo portatil', 'Equipo portatil', 'Compaq', 'Dx100', 1937333, 'Dell', '2221112', 'Alejandra', '2233442', '0000-00-00'),
	(18, 'Com', 'adsgfsdg', 'sdgsdg', 'sdgsdg', 2234235, 'sdgsdg', '0', 'sdgsdg', '0', '0000-00-00'),
	(19, 'Com', 'adsgfsdg', 'sdgsdg', 'sdgsdg', 2234235, 'sdgsdg', '0', 'sdgsdg', '0', '0000-00-00'),
	(20, 'Com', 'adsgfsdg', 'sdgsdg', 'sdgsdg', 2234235, 'sdgsdg', '0', 'sdgsdg', '0', '0000-00-00'),
	(21, 'Com', 'adsgfsdg', 'sdgsdg', 'sdgsdg', 2234235, 'sdgsdg', '0', 'sdgsdg', '0', '0000-00-00'),
	(22, 'Com', 'adsgfsdg', 'sdgsdg', 'sdgsdg', 2234235, 'sdgsdg', '0', 'sdgsdg', '0', '0000-00-00'),
	(23, 'Com', 'adsgfsdg', 'sdgsdg', 'sdgsdg', 2234235, 'sdgsdg', '0', 'sdgsdg', '0', '0000-00-00'),
	(24, 'Com', 'adsgfsdg', 'sdgsdg', 'sdgsdg', 2234235, 'sdgsdg', '0', 'sdgsdg', '0', '0000-00-00'),
	(25, 'sdgf', 'zsfg', 'zfg', 'zfg', 0, 'zfdgaert', '0', 'aret', '0', '2014-01-24');
/*!40000 ALTER TABLE `equipos` ENABLE KEYS */;


-- Volcando estructura para tabla igenius.equipo_has_mantenimiento
CREATE TABLE IF NOT EXISTS `equipo_has_mantenimiento` (
  `idEquipo_has_mantenimiento` int(11) NOT NULL AUTO_INCREMENT,
  `idEquipo` int(11) NOT NULL,
  `idMantenimiento` int(11) NOT NULL,
  PRIMARY KEY (`idEquipo_has_mantenimiento`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla igenius.equipo_has_mantenimiento: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `equipo_has_mantenimiento` DISABLE KEYS */;
INSERT INTO `equipo_has_mantenimiento` (`idEquipo_has_mantenimiento`, `idEquipo`, `idMantenimiento`) VALUES
	(5, 12, 10),
	(6, 15, 11);
/*!40000 ALTER TABLE `equipo_has_mantenimiento` ENABLE KEYS */;


-- Volcando estructura para tabla igenius.eventos
CREATE TABLE IF NOT EXISTS `eventos` (
  `idEvento` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) COLLATE utf8_spanish_ci DEFAULT '0',
  `destinatario` varchar(50) COLLATE utf8_spanish_ci DEFAULT '0',
  `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT '0',
  `lugar` varchar(50) COLLATE utf8_spanish_ci DEFAULT '0',
  `descripcion` varchar(350) COLLATE utf8_spanish_ci DEFAULT '0',
  `fechaInicio` date DEFAULT NULL,
  `fechaFin` date DEFAULT NULL,
  `horaInicio` time DEFAULT NULL,
  `horaFin` time DEFAULT NULL,
  `documento` int(11) DEFAULT '0',
  PRIMARY KEY (`idEvento`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla igenius.eventos: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
INSERT INTO `eventos` (`idEvento`, `tipo`, `destinatario`, `nombre`, `lugar`, `descripcion`, `fechaInicio`, `fechaFin`, `horaInicio`, `horaFin`, `documento`) VALUES
	(1, 'sdf', 'sdf', 'Pedreada', 'Dentro del conjunto', 'A apedrear a Ivan', '2011-12-12', '2011-12-22', '00:00:00', '23:59:59', 0),
	(2, 'sdf', 'sdf', 'Asado', 'En la casa de Ivan', 'Asado con la carne del apedreado Ivan', '2012-01-01', '2011-01-03', '00:00:00', '23:59:59', 0),
	(3, 'sdf', 'sdf', 'Pedreada al Negro', 'Dentro del conjunto residencial', 'A apedrear al negro por que por culpa de el Ivan murio', '2011-02-12', '2012-02-29', '00:00:00', '23:59:59', 0);
/*!40000 ALTER TABLE `eventos` ENABLE KEYS */;


-- Volcando estructura para tabla igenius.habitantes
CREATE TABLE IF NOT EXISTS `habitantes` (
  `idHabitante` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `documento` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `sexo` varchar(10) COLLATE utf8_spanish_ci DEFAULT '0',
  `fechaNacimiento` date NOT NULL,
  `emailHabitante` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '1',
  `fecha_mudanza` date NOT NULL,
  `fecha_salida` date DEFAULT NULL,
  PRIMARY KEY (`idHabitante`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla igenius.habitantes: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `habitantes` DISABLE KEYS */;
INSERT INTO `habitantes` (`idHabitante`, `nombres`, `apellidos`, `documento`, `sexo`, `fechaNacimiento`, `emailHabitante`, `telefono`, `estado`, `fecha_mudanza`, `fecha_salida`) VALUES
	(18, 'Juan Eduardo', 'Padilla Gonzalez', '123', 'M', '1991-04-27', 'juan_p14@hotmail.com', '7049674', 1, '2016-11-28', NULL),
	(19, 'Katherine Paola', 'Padilla González', '1019131381', 'F', '1997-04-14', '', '', 1, '2016-11-27', NULL),
	(20, 'Gabriel', '', '2233', 'M', '1993-09-07', '', '', 1, '2016-11-27', NULL);
/*!40000 ALTER TABLE `habitantes` ENABLE KEYS */;


-- Volcando estructura para tabla igenius.habitante_has_apartamento
CREATE TABLE IF NOT EXISTS `habitante_has_apartamento` (
  `idHabitante_has_apartamento` int(11) NOT NULL AUTO_INCREMENT,
  `idHabitante` int(11) DEFAULT NULL,
  `idApartamento` int(11) DEFAULT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date DEFAULT NULL,
  PRIMARY KEY (`idHabitante_has_apartamento`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla igenius.habitante_has_apartamento: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `habitante_has_apartamento` DISABLE KEYS */;
INSERT INTO `habitante_has_apartamento` (`idHabitante_has_apartamento`, `idHabitante`, `idApartamento`, `fechaInicio`, `fechaFin`) VALUES
	(31, 19, 7, '2016-10-05', NULL),
	(32, 20, 16, '2016-10-22', NULL),
	(33, 18, 49, '2016-11-27', NULL);
/*!40000 ALTER TABLE `habitante_has_apartamento` ENABLE KEYS */;


-- Volcando estructura para tabla igenius.habitante_has_mascota
CREATE TABLE IF NOT EXISTS `habitante_has_mascota` (
  `idHabitante_has_mascota` int(11) NOT NULL AUTO_INCREMENT,
  `idHabitante` int(11) NOT NULL,
  `idMascota` int(11) NOT NULL,
  PRIMARY KEY (`idHabitante_has_mascota`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla igenius.habitante_has_mascota: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `habitante_has_mascota` DISABLE KEYS */;
INSERT INTO `habitante_has_mascota` (`idHabitante_has_mascota`, `idHabitante`, `idMascota`) VALUES
	(9, 18, 1),
	(10, 20, 2),
	(11, 20, 3);
/*!40000 ALTER TABLE `habitante_has_mascota` ENABLE KEYS */;


-- Volcando estructura para tabla igenius.habitante_has_vehiculo
CREATE TABLE IF NOT EXISTS `habitante_has_vehiculo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idHabitante` int(11) NOT NULL,
  `idVehiculo` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idHabitante` (`idHabitante`,`idVehiculo`),
  KEY `idVehiculo` (`idVehiculo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla igenius.habitante_has_vehiculo: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `habitante_has_vehiculo` DISABLE KEYS */;
INSERT INTO `habitante_has_vehiculo` (`id`, `idHabitante`, `idVehiculo`) VALUES
	(2, 18, 1),
	(3, 20, 2);
/*!40000 ALTER TABLE `habitante_has_vehiculo` ENABLE KEYS */;


-- Volcando estructura para tabla igenius.mantenimientos
CREATE TABLE IF NOT EXISTS `mantenimientos` (
  `idMantenimiento` int(11) NOT NULL AUTO_INCREMENT,
  `fechaProgramacion` date NOT NULL,
  `descripcionGeneral` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idMantenimiento`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla igenius.mantenimientos: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `mantenimientos` DISABLE KEYS */;
INSERT INTO `mantenimientos` (`idMantenimiento`, `fechaProgramacion`, `descripcionGeneral`, `estado`) VALUES
	(10, '2013-11-14', '123', 1),
	(11, '2016-11-28', '123', 1);
/*!40000 ALTER TABLE `mantenimientos` ENABLE KEYS */;


-- Volcando estructura para tabla igenius.mantenimiento_has_actividad
CREATE TABLE IF NOT EXISTS `mantenimiento_has_actividad` (
  `idMantenimiento_has_actividad` int(11) NOT NULL AUTO_INCREMENT,
  `idMantenimiento` int(11) NOT NULL,
  `idActividad` int(11) NOT NULL,
  PRIMARY KEY (`idMantenimiento_has_actividad`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla igenius.mantenimiento_has_actividad: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `mantenimiento_has_actividad` DISABLE KEYS */;
INSERT INTO `mantenimiento_has_actividad` (`idMantenimiento_has_actividad`, `idMantenimiento`, `idActividad`) VALUES
	(1, 10, 7),
	(2, 10, 8);
/*!40000 ALTER TABLE `mantenimiento_has_actividad` ENABLE KEYS */;


-- Volcando estructura para tabla igenius.mascotas
CREATE TABLE IF NOT EXISTS `mascotas` (
  `idMascota` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `raza` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `idTipoMascota` int(11) NOT NULL,
  `anoNacimiento` varchar(4) COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idMascota`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla igenius.mascotas: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `mascotas` DISABLE KEYS */;
INSERT INTO `mascotas` (`idMascota`, `nombre`, `raza`, `idTipoMascota`, `anoNacimiento`, `estado`) VALUES
	(1, 'Peter', 'Pastor alemán', 1, '2001', 1),
	(2, 'Otto', 'Otro', 1, '2005', 1),
	(3, 'Taco', 'Gato', 2, '2012', 1);
/*!40000 ALTER TABLE `mascotas` ENABLE KEYS */;


-- Volcando estructura para tabla igenius.mascota_has_vacuna
CREATE TABLE IF NOT EXISTS `mascota_has_vacuna` (
  `idMascota_has_vacuna` int(11) NOT NULL AUTO_INCREMENT,
  `idMascota` int(11) NOT NULL,
  `idVacuna` int(11) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`idMascota_has_vacuna`),
  KEY `idMascota` (`idMascota`,`idVacuna`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla igenius.mascota_has_vacuna: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `mascota_has_vacuna` DISABLE KEYS */;
/*!40000 ALTER TABLE `mascota_has_vacuna` ENABLE KEYS */;


-- Volcando estructura para tabla igenius.notificaciones
CREATE TABLE IF NOT EXISTS `notificaciones` (
  `idNotificacion` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Detalle` varchar(350) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Asunto` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `FechaAct` datetime DEFAULT NULL,
  PRIMARY KEY (`idNotificacion`),
  KEY `FK1_usuarios_idUsuario` (`idUsuario`),
  CONSTRAINT `FK1_usuarios_idUsuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla igenius.notificaciones: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `notificaciones` DISABLE KEYS */;
INSERT INTO `notificaciones` (`idNotificacion`, `idUsuario`, `Fecha`, `Detalle`, `Asunto`, `FechaAct`) VALUES
	(1, 1, '2016-10-09 20:43:08', 'Se genero una prueba para las notificaciones', 'Prueba', NULL),
	(2, 3, '2016-10-09 00:00:00', 'asfsdg', NULL, NULL),
	(3, 3, '2016-10-05 00:00:00', 'usted tiene que pagar las facturas', NULL, NULL),
	(4, 3, '2016-09-19 00:00:00', 'Su solicitud queda cancelada', NULL, NULL),
	(5, 3, '2016-09-21 00:00:00', 'Debe 14 meses de renta', NULL, NULL),
	(6, 1, '2016-10-09 19:22:26', 'Se genera otra prueba.', 'Otra prueba', '2016-10-09 19:25:09'),
	(8, 1, '2016-10-09 12:28:47', 'Timezone', 'Prueba', '2016-10-09 12:28:47'),
	(9, 1, '2016-10-09 12:34:44', 'Listo el pollo', 'Listo el pollo', '2016-10-09 12:34:44'),
	(10, 3, '2016-11-27 14:26:03', 'Lleva atrasado desde que se mudó. No nos haga llamar al SMAD', 'Pague pues', '2016-11-27 14:26:03');
/*!40000 ALTER TABLE `notificaciones` ENABLE KEYS */;


-- Volcando estructura para procedimiento igenius.registrarHabitante
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `registrarHabitante`(IN `nombres` VARCHAR(32), IN `apellidos` VARCHAR(32), IN `docum` INT, IN `sexo` BOOLEAN, IN `fechaInicio` DATE, IN `fechaNacimiento` DATE, IN `emailHabitante` VARCHAR(32), IN `telefono` INT, IN `num` INT)
    NO SQL
BEGIN

DECLARE id INTEGER;
DECLARE hab INTEGER;
DECLARE error CONDITION FOR SQLSTATE '45000';

SET id = (SELECT idApartamento FROM apartamentos WHERE numeroApartamento = num);
SET hab = (SELECT idHabitante FROM habitantes WHERE estado = 1 AND documento = docum);
IF (hab IS NULL) THEN
INSERT INTO habitantes VALUES (0, nombres, apellidos, docum, sexo, fechaNacimiento, emailHabitante, telefono, 1);
INSERT INTO habitante_has_apartamento VALUES (0, LAST_INSERT_ID(), id, fechaInicio, null);
ELSE SIGNAL error SET MESSAGE_TEXT = 'Ya existe un habitante con el documento especificado';
END IF;

END//
DELIMITER ;


-- Volcando estructura para procedimiento igenius.registrarMascota
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `registrarMascota`(IN `nombre` VARCHAR(32), IN `raza` VARCHAR(32), IN `idTipoMascota` INT, IN `anoNacimiento` INT, IN `doc` INT)
BEGIN

DECLARE id INTEGER;
DECLARE error CONDITION FOR SQLSTATE '45000';
SET id = (SELECT idHabitante FROM habitantes WHERE estado = 1 AND `documento` = doc);

IF (id IS NOT NULL) THEN 
INSERT INTO mascotas VALUES (0, nombre, raza, idTipoMascota, anoNacimiento, 1);
ELSE 
	SIGNAL error 
		SET MESSAGE_TEXT = 'No se encuentra habitante con el documento especificado.';
END IF;
INSERT INTO habitante_has_mascota VALUES (0, id, LAST_INSERT_ID());

END//
DELIMITER ;


-- Volcando estructura para tabla igenius.rol
CREATE TABLE IF NOT EXISTS `rol` (
  `id_rol` int(3) NOT NULL AUTO_INCREMENT,
  `nombre_rol` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla igenius.rol: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
INSERT INTO `rol` (`id_rol`, `nombre_rol`) VALUES
	(1, 'Administrador'),
	(2, 'Usuario');
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;


-- Volcando estructura para tabla igenius.tipomascotas
CREATE TABLE IF NOT EXISTS `tipomascotas` (
  `idTipoMascota` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idTipoMascota`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla igenius.tipomascotas: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `tipomascotas` DISABLE KEYS */;
INSERT INTO `tipomascotas` (`idTipoMascota`, `nombre`) VALUES
	(1, 'Perro'),
	(2, 'Gato');
/*!40000 ALTER TABLE `tipomascotas` ENABLE KEYS */;


-- Volcando estructura para tabla igenius.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(3) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(30) CHARACTER SET latin1 NOT NULL,
  `documento` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(255) CHARACTER SET latin1 NOT NULL,
  `id_rol` int(3) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `documento` (`documento`),
  KEY `id_rol` (`id_rol`),
  CONSTRAINT `id_rol` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla igenius.usuarios: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`idUsuario`, `usuario`, `documento`, `contrasena`, `id_rol`) VALUES
	(1, 'Juan Eduardo', '123', '123', 1),
	(3, 'Gabriel', '2233', '2233', 2),
	(4, 'usuario', '234', '234', 2);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;


-- Volcando estructura para tabla igenius.vacunas
CREATE TABLE IF NOT EXISTS `vacunas` (
  `idVacuna` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idVacuna`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla igenius.vacunas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `vacunas` DISABLE KEYS */;
/*!40000 ALTER TABLE `vacunas` ENABLE KEYS */;


-- Volcando estructura para tabla igenius.vehiculos
CREATE TABLE IF NOT EXISTS `vehiculos` (
  `idVehiculo` int(11) NOT NULL AUTO_INCREMENT,
  `Placa` varchar(7) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idVehiculo`),
  UNIQUE KEY `Placa` (`Placa`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla igenius.vehiculos: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `vehiculos` DISABLE KEYS */;
INSERT INTO `vehiculos` (`idVehiculo`, `Placa`) VALUES
	(1, 'AUO-071'),
	(2, 'VTN-230');
/*!40000 ALTER TABLE `vehiculos` ENABLE KEYS */;


-- Volcando estructura para vista igenius.vw_apartamentos
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `vw_apartamentos` (
	`idApartamento` INT(11) NOT NULL,
	`numeroApartamento` INT(3) NOT NULL,
	`disponibilidad` VARCHAR(10) NULL COLLATE 'utf8mb4_general_ci'
) ENGINE=MyISAM;


-- Volcando estructura para vista igenius.vw_habitantes
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `vw_habitantes` (
	`idHabitante` INT(11) NOT NULL,
	`nombres` VARCHAR(30) NOT NULL COLLATE 'utf8_spanish_ci',
	`apellidos` VARCHAR(30) NULL COLLATE 'utf8_spanish_ci',
	`documento` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish_ci',
	`sexo` VARCHAR(10) NULL COLLATE 'utf8_spanish_ci',
	`fechaNacimiento` DATE NOT NULL,
	`emailHabitante` VARCHAR(30) NULL COLLATE 'utf8_spanish_ci',
	`telefono` VARCHAR(50) NULL COLLATE 'utf8_spanish_ci',
	`estado` TINYINT(1) NOT NULL,
	`idApartamento` INT(11) NULL,
	`numeroApartamento` INT(3) NULL
) ENGINE=MyISAM;


-- Volcando estructura para vista igenius.vw_habitantes_libres
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `vw_habitantes_libres` (
	`idHabitante` INT(11) NOT NULL,
	`nombres` VARCHAR(30) NOT NULL COLLATE 'utf8_spanish_ci',
	`apellidos` VARCHAR(30) NULL COLLATE 'utf8_spanish_ci',
	`documento` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish_ci',
	`sexo` VARCHAR(10) NULL COLLATE 'utf8_spanish_ci',
	`fechaNacimiento` DATE NOT NULL,
	`emailHabitante` VARCHAR(30) NULL COLLATE 'utf8_spanish_ci',
	`telefono` VARCHAR(50) NULL COLLATE 'utf8_spanish_ci',
	`estado` TINYINT(1) NOT NULL
) ENGINE=MyISAM;


-- Volcando estructura para vista igenius.vw_mantenimientos
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `vw_mantenimientos` (
	`idMantenimiento` INT(11) NOT NULL,
	`fechaProgramacion` DATE NOT NULL,
	`descripcionGeneral` TEXT NOT NULL COLLATE 'utf8_spanish_ci',
	`estado` TINYINT(1) NOT NULL,
	`idEquipo` INT(11) NOT NULL,
	`nombre` VARCHAR(32) NOT NULL COLLATE 'utf8_spanish_ci'
) ENGINE=MyISAM;


-- Volcando estructura para vista igenius.vw_mascotas
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `vw_mascotas` (
	`idMascota` INT(11) NOT NULL,
	`nombre` VARCHAR(32) NOT NULL COLLATE 'utf8_spanish_ci',
	`raza` VARCHAR(32) NOT NULL COLLATE 'utf8_spanish_ci',
	`idTipoMascota` INT(11) NOT NULL,
	`anoNacimiento` VARCHAR(4) NOT NULL COLLATE 'utf8_spanish_ci',
	`estado` TINYINT(1) NOT NULL,
	`tipo` VARCHAR(32) NULL COLLATE 'utf8_spanish_ci'
) ENGINE=MyISAM;


-- Volcando estructura para vista igenius.vw_notificaciones
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `vw_notificaciones` (
	`idNotificacion` INT(11) NOT NULL,
	`idUsuario` INT(11) NOT NULL,
	`Fecha` DATETIME NOT NULL,
	`Detalle` VARCHAR(350) NULL COLLATE 'utf8_spanish_ci',
	`Asunto` VARCHAR(50) NULL COLLATE 'utf8_spanish_ci',
	`usuario` VARCHAR(30) NOT NULL COLLATE 'latin1_swedish_ci'
) ENGINE=MyISAM;


-- Volcando estructura para vista igenius.vw_usuarios
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `vw_usuarios` (
	`idUsuario` INT(3) NOT NULL,
	`usuario` VARCHAR(30) NOT NULL COLLATE 'latin1_swedish_ci',
	`documento` VARCHAR(20) NOT NULL COLLATE 'utf8_spanish_ci',
	`contrasena` VARCHAR(255) NOT NULL COLLATE 'latin1_swedish_ci',
	`id_rol` INT(3) NOT NULL,
	`nombre_rol` VARCHAR(30) NULL COLLATE 'utf8_spanish_ci'
) ENGINE=MyISAM;


-- Volcando estructura para vista igenius.vw_vehiculos
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `vw_vehiculos` (
	`idVehiculo` INT(11) NOT NULL,
	`Placa` VARCHAR(7) NOT NULL COLLATE 'utf8_spanish_ci',
	`idHabitante` INT(11) NULL,
	`nombres` VARCHAR(30) NULL COLLATE 'utf8_spanish_ci'
) ENGINE=MyISAM;


-- Volcando estructura para vista igenius.vw_apartamentos
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `vw_apartamentos`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` VIEW `vw_apartamentos` AS (
	SELECT
		a.*,
		CASE WHEN (select count(*) from habitante_has_apartamento where idApartamento = a.idApartamento) > 0 Then 'Ocupado' Else 'Disponible' End as disponibilidad
	FROM
		apartamentos a
) ;


-- Volcando estructura para vista igenius.vw_habitantes
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `vw_habitantes`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` VIEW `vw_habitantes` AS (
	SELECT
		h.*,
		a.idApartamento,
		a.numeroApartamento
	FROM
		habitantes h
		LEFT JOIN habitante_has_apartamento hha ON (hha.idHabitante = h.idHabitante)
		LEFT JOIN apartamentos a ON (a.idApartamento = hha.idApartamento)
) ;


-- Volcando estructura para vista igenius.vw_habitantes_libres
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `vw_habitantes_libres`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` VIEW `vw_habitantes_libres` AS (
	SELECT
		*
	FROM
		habitantes
	WHERE
		idHabitante NOT IN (
			SELECT idHabitante FROM habitante_has_apartamento
		)
) ;


-- Volcando estructura para vista igenius.vw_mantenimientos
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `vw_mantenimientos`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` VIEW `vw_mantenimientos` AS (
	SELECT
		m.*,
		e.idEquipo,
		e.nombre
	FROM
		mantenimientos m
		join equipo_has_mantenimiento em on (em.idMantenimiento = m.idMantenimiento)
		join equipos e on (e.idEquipo = em.idEquipo)
) ;


-- Volcando estructura para vista igenius.vw_mascotas
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `vw_mascotas`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` VIEW `vw_mascotas` AS (
	SELECT
		m.*,
		t.nombre as tipo
	FROM
		mascotas m
		LEFT JOIN tipomascotas t ON (t.idTipoMascota = m.idTipoMascota)
) ;


-- Volcando estructura para vista igenius.vw_notificaciones
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `vw_notificaciones`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` VIEW `vw_notificaciones` AS (
	SELECT
		n.*,
		u.usuario
	FROM
		notificaciones n
		JOIN usuarios u ON (u.idUsuario = n.idUsuario)
) ;


-- Volcando estructura para vista igenius.vw_usuarios
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `vw_usuarios`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` VIEW `vw_usuarios` AS (
	SELECT
		u.*,
		r.nombre_rol
	FROM
		usuarios u
		LEFT JOIN rol r ON (r.id_rol = u.id_rol)
) ;


-- Volcando estructura para vista igenius.vw_vehiculos
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `vw_vehiculos`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` VIEW `vw_vehiculos` AS (
	SELECT
		v.*,
		h.idHabitante,
		h.nombres
	FROM
		vehiculos v
		LEFT JOIN habitante_has_vehiculo hhv ON (hhv.idVehiculo = v.idVehiculo)
		LEFT JOIN habitantes h ON (h.idHabitante = hhv.idHabitante)
) ;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
