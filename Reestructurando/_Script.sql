-- Base de datos: `grupo2`
--
DROP DATABASE IF EXISTS `grupo2`;
CREATE DATABASE IF NOT EXISTS `Grupo2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `grupo2`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservacion`
-- Beltran Santistevan Steven
CREATE TABLE `reservacion` (
  `id_reservacion` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `cedula_pasaporte` int(11) NOT NULL,
  `apellidos_nombres` varchar(200) NOT NULL,
  `email` varchar(120) NOT NULL,
  `telefono` int(11) NOT NULL,
  `adultos` int(2) NOT NULL,
  `ninos` int(11) NOT NULL,
  `reservadodesde` date NOT NULL,
  `diasreservado` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `mas_informacion`
-- Rendón Quijije Iván

CREATE TABLE `grupo2`.`mas_informacion` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `apellidos` VARCHAR(45) NOT NULL,
  `telefono` VARCHAR(45) NULL,
  `correo` VARCHAR(45) NOT NULL,
  `asunto` VARCHAR(45) NOT NULL,
  `mensaje` MEDIUMTEXT NOT NULL,
  PRIMARY KEY (`id`)
);