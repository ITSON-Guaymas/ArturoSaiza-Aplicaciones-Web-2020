-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para notasdb
CREATE DATABASE IF NOT EXISTS `notasdb` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci */;
USE `notasdb`;

-- Volcando estructura para tabla notasdb.notas
CREATE TABLE IF NOT EXISTS `notas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cuerpo` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo` varchar(40) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'normal, tarea, recordatorio',
  `fechaRecordar` date DEFAULT NULL,
  `realizada` tinyint(4) DEFAULT NULL,
  `usuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla notasdb.notas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `notas` DISABLE KEYS */;
/*!40000 ALTER TABLE `notas` ENABLE KEYS */;

-- Volcando estructura para tabla notasdb.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `contrasena` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo` varchar(20) COLLATE utf8_spanish2_ci NOT NULL DEFAULT 'normal',
  PRIMARY KEY (`id`),
  UNIQUE KEY `correo` (`correo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla notasdb.usuarios: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `correo`, `contrasena`, `tipo`) VALUES
	(1, 'Arturo', 'Garcia Saiza', 'arturogsaiza@gmail.com', 'zapato1', 'admin');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
