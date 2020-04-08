-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-02-2020 a las 16:24:42
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_institucion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acciones`
--

CREATE TABLE `acciones` (
  `id_acciones` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `id_cargos` int(11) DEFAULT NULL,
  `nomb_actividad` varchar(150) DEFAULT NULL,
  `unidad_medida` varchar(20) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `acciones`
--

INSERT INTO `acciones` (`id_acciones`, `id_personal`, `id_cargos`, `nomb_actividad`, `unidad_medida`, `fecha_creacion`, `fecha_update`) VALUES
(1, 9, 8, 'CONTROL DE INGRESOS Y SALIDAS DEL PERSONAL', 'UNIDAD', '2020-02-07 00:00:00', '2020-02-12 15:21:58'),
(2, 8, 10, 'Ingreso a Base de Datos', 'Unidad', '2020-02-12 15:52:22', '2020-02-12 20:52:22'),
(3, 8, 10, 'Mantenimiento de Computadoras y equipos', 'Unidad', '2020-02-12 15:52:57', '2020-02-12 20:52:57'),
(4, 2, 3, 'Emitir Documentos fedateados', 'Unidad', '2020-02-12 16:22:39', '2020-02-12 21:22:39'),
(5, 6, 12, 'Elaborar del POI', 'Unidad', '2020-02-14 14:51:15', '2020-02-14 19:51:15'),
(6, 6, 12, 'Elaboracion de presupuesto', 'Unidad', '2020-02-14 14:51:47', '2020-02-14 19:51:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `id_areas` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `idoficina` int(11) NOT NULL,
  `id_metas` int(11) DEFAULT NULL,
  `f_creacion` datetime DEFAULT NULL,
  `f_update` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id_areas`, `nombre`, `descripcion`, `idoficina`, `id_metas`, `f_creacion`, `f_update`) VALUES
(1, 'ASESORIA JURIDICA', 'Encargado de la parte legal y juridica de la institucion', 1, 1, '2020-01-08 00:00:00', '2020-02-03 13:50:26'),
(2, 'PLANIFICACION Y PRESUPUESTO', 'PLANIFICACION', 6, 1, '2020-01-24 00:00:00', '2020-02-03 14:39:29'),
(7, 'INFORMATICA', 'DESARROLLO DE SOFTWARE', 1, 1, '2020-02-03 13:46:28', NULL),
(9, 'FONDO NOTARIAL', 'VELAR POR LA CONSERVACION DEL FONDO NOTARIAL', 2, 1, '2020-02-03 14:40:53', NULL),
(10, 'REGISTRO CIVIL', 'PARTIDAS DE NACIMIENTO, MATRIMONIO Y DEFUNCIóN', 2, 1, '2020-02-03 14:41:34', NULL),
(11, 'FONDO CORTE SUPERIOR DE JUSTICIA', 'FONDO CORTE SUPERIOR DE JUSTICIA', 5, 1, '2020-02-03 14:42:16', NULL),
(12, 'INTENDENCIA Y CORREGIMIENTO', 'INTENDENCIA Y CORREGIMIENTO', 5, 1, '2020-02-03 14:42:41', NULL),
(13, 'BIBLIOTECA', 'BIBLIOTECA', 5, 1, '2020-02-03 14:42:56', NULL),
(14, 'RECURSOS HUMANOS', 'RECURSOS HUMANOS', 6, 1, '2020-02-03 14:43:25', NULL),
(15, 'ABASTECIMIENTOS', 'ABASTECIMIENTOS', 6, 1, '2020-02-03 14:43:40', NULL),
(16, 'TESORERíA Y CONTABILIDAD', 'TESORERíA Y CONTABILIDAD', 6, 1, '2020-02-03 14:44:07', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacionpersonal`
--

CREATE TABLE `asignacionpersonal` (
  `idasignacion` int(11) NOT NULL,
  `idoficina` int(11) NOT NULL,
  `idarea` int(11) DEFAULT NULL,
  `idcargo` int(11) DEFAULT NULL,
  `idpersonal` int(11) DEFAULT NULL,
  `fecInicioCargo` date DEFAULT NULL,
  `fecFinCargo` date DEFAULT NULL,
  `documento` varchar(100) DEFAULT NULL,
  `fecCreate` datetime DEFAULT NULL,
  `fecUpdtae` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asignacionpersonal`
--

INSERT INTO `asignacionpersonal` (`idasignacion`, `idoficina`, `idarea`, `idcargo`, `idpersonal`, `fecInicioCargo`, `fecFinCargo`, `documento`, `fecCreate`, `fecUpdtae`) VALUES
(1, 1, 0, 3, 2, '2019-01-01', NULL, 'R.D 15-GRPUNO', '2020-02-05 16:11:26', NULL),
(2, 6, 7, 10, 8, '2012-02-16', NULL, 'RESOLUCION N° 25-2012-ARP/D', '2020-02-05 19:20:34', NULL),
(3, 2, 0, 8, 5, '2005-02-15', NULL, 'RESOLUCION N° 29-2012-ARP/D', '2020-02-05 19:27:16', NULL),
(4, 6, 14, 13, 9, '2009-06-25', NULL, 'RD 156-ARP/D', '2020-02-05 19:37:07', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `id_cargos` int(11) NOT NULL,
  `id_oficina` int(11) NOT NULL,
  `nombre_cargo` varchar(150) NOT NULL,
  `fec_creacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`id_cargos`, `id_oficina`, `nombre_cargo`, `fec_creacion`) VALUES
(3, 1, 'DIRECTOR ARCHIVO REGIONAL DE PUNO', '2020-02-05 14:51:47'),
(5, 6, 'JEFE e) OFICINA TECNICA ADMINISTRATIVA', '2020-02-05 14:51:47'),
(7, 2, 'DIRECTOR e) ARCHIVO INTERMEDIO', '2020-02-05 15:06:04'),
(8, 5, 'DIRECTOR e) ARCHIVO HISTÓRICO', '2020-02-05 15:06:23'),
(9, 1, 'ASESOR LEGAL', '2020-02-05 15:06:41'),
(10, 1, 'e) ÁREA DE INFORMÁTICA Y TECNOLOGÍA', '2020-02-05 15:07:03'),
(11, 1, 'e) ARCHIVO CENTRAL Y TRAMITE DOCUMENTARIO', '2020-02-05 15:07:54'),
(12, 6, 'e) PLANIFICACIÓN Y PRESUPUESTO', '2020-02-05 15:19:35'),
(13, 6, 'e) RECURSOS HUMANOS', '2020-02-05 15:19:49'),
(14, 6, 'e) ABASTECIMIENTOS', '2020-02-05 15:20:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datospersonal`
--

CREATE TABLE `datospersonal` (
  `id_adpersonal` int(11) NOT NULL,
  `profesion` varchar(50) DEFAULT NULL,
  `tiempo_servicio` int(11) DEFAULT NULL,
  `condicion` varchar(20) DEFAULT NULL,
  `seguro_social` varchar(20) DEFAULT NULL,
  `grupo_sanguineo` varchar(10) DEFAULT NULL,
  `f_ingreso` date DEFAULT NULL,
  `f_deceso` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datospersonal`
--

INSERT INTO `datospersonal` (`id_adpersonal`, `profesion`, `tiempo_servicio`, `condicion`, `seguro_social`, `grupo_sanguineo`, `f_ingreso`, `f_deceso`) VALUES
(1, 'ing. de sistemas', 5, 'contratado', 'SIS', 'O', '2020-01-01', '2021-04-16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE `institucion` (
  `id` int(11) NOT NULL,
  `nombre_inst` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `RUC` char(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `p_web` varchar(50) NOT NULL,
  `fecha_creacion_archivo` date NOT NULL,
  `n_resolucion` varchar(50) NOT NULL,
  `id_metas` int(11) NOT NULL,
  `fecha_create` datetime NOT NULL,
  `fecha_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `institucion`
--

INSERT INTO `institucion` (`id`, `nombre_inst`, `direccion`, `telefono`, `RUC`, `email`, `p_web`, `fecha_creacion_archivo`, `n_resolucion`, `id_metas`, `fecha_create`, `fecha_update`) VALUES
(1, 'Archivo Regional Puno', 'Av. Ejercito Nº 645', '051 -600704  051-600705', '20164852167', 'archivoregionalpuno@gmail.com', 'www.arp.gob.pe', '1987-03-15', 'R.D. J. N° 246-AGN/J', 1, '2020-01-09 00:00:00', '2020-01-31 16:40:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefe_area`
--

CREATE TABLE `jefe_area` (
  `id_jefearea` int(11) NOT NULL,
  `id_personal` int(11) DEFAULT NULL,
  `id_areas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jefe_area`
--

INSERT INTO `jefe_area` (`id_jefearea`, `id_personal`, `id_areas`) VALUES
(2, 2, 1),
(3, 5, 1),
(5, 5, 2),
(7, 5, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `log_usu` int(10) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `nom_usu` varchar(30) NOT NULL,
  `psw_usu` varchar(255) NOT NULL,
  `niv_usu` int(1) NOT NULL DEFAULT 2,
  `chk_usu` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`log_usu`, `id_personal`, `nom_usu`, `psw_usu`, `niv_usu`, `chk_usu`) VALUES
(1, 5, 'yaned', 'yaned', 1, 1),
(2, 2, 'eliana', '123', 3, 1),
(3, 6, 'julia', 'julia', 2, 1),
(4, 8, 'edgar', 'edgar', 3, 1),
(5, 10, 'rut', 'rut', 2, 1),
(6, 11, 'danitza', 'danitza', 2, 1),
(7, 12, 'corayma', 'corayma', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metas`
--

CREATE TABLE `metas` (
  `id_metas` int(11) NOT NULL,
  `nombre_meta` varchar(150) NOT NULL,
  `programado` double NOT NULL,
  `unidad_medida` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `metas`
--

INSERT INTO `metas` (`id_metas`, `nombre_meta`, `programado`, `unidad_medida`) VALUES
(1, 'Vacio', 0, 'unidad'),
(2, 'crear solicitudes', 10000, 'unidad'),
(3, 'Ingreso de Escrituras', 100000, 'unidad'),
(4, 'ORGANIZACION DE METROS LINEALES DE DOCUMENTOS EN CUSTODIA', 180, 'METROS LINEALES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metas_areas`
--

CREATE TABLE `metas_areas` (
  `id_metas_areas` int(11) NOT NULL,
  `id_meta` int(11) DEFAULT NULL,
  `id_area` int(11) DEFAULT NULL,
  `fecha_reporte` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cantidad_avance` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `metas_areas`
--

INSERT INTO `metas_areas` (`id_metas_areas`, `id_meta`, `id_area`, `fecha_reporte`, `cantidad_avance`) VALUES
(1, 2, 1, '2020-01-31 16:08:05', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oficinas`
--

CREATE TABLE `oficinas` (
  `id` int(11) NOT NULL,
  `nombre_of` varchar(60) NOT NULL,
  `sigla` varchar(10) DEFAULT NULL,
  `f_creacion` datetime DEFAULT NULL,
  `f_update` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_metas` int(11) DEFAULT NULL,
  `id_institucion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `oficinas`
--

INSERT INTO `oficinas` (`id`, `nombre_of`, `sigla`, `f_creacion`, `f_update`, `id_metas`, `id_institucion`) VALUES
(1, 'ARCHIVO REGIONAL DE PUNO', 'DIRECCION', '2020-01-01 00:00:00', '2020-02-05 20:04:50', 1, 1),
(2, 'DIRECCIÓN DE ARCHIVO INTERMEDIO', 'AI', '2020-01-02 00:00:00', '2020-02-05 20:05:20', 1, 1),
(5, 'DIRECCIÓN DE ARCHIVO HISTÓRICO', 'AH', '2020-01-31 16:44:01', '2020-02-05 20:05:09', 1, 1),
(6, 'OFICINA TECNICA ADMINISTRATIVA (OTA)', 'OTA', '2020-01-31 16:46:39', '2020-02-03 13:53:00', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id_personal` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `DNI` char(8) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `f_creacion` datetime DEFAULT NULL,
  `f_update` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id_personal`, `nombre`, `apellidos`, `sexo`, `telefono`, `fecha_nac`, `email`, `DNI`, `foto`, `f_creacion`, `f_update`) VALUES
(2, 'ELIANA', 'CONDEMAITA MORALES', 'masculino', '951', '1999-02-17', 'elianacondemaita@hotmail.com', '01111', './imagenes/usuario.png', '2020-01-04 00:00:00', '2020-02-04 15:06:41'),
(5, 'SONIA ROSARIO', 'SOTOMAYOR VARGAS', 'femenino', '95111', '1998-12-23', 'ssotomayor@hotmail.com', '01111', './imagenes/usuario.png', '2020-01-08 00:00:00', '2020-02-04 15:06:48'),
(6, 'JULIA', 'TAPIA QUISPE', 'masculino', '951', '1978-01-01', 'jtapia@hotmail.com', '0111', './imagenes/usuario.png', '2020-01-24 00:00:00', '2020-02-04 15:06:54'),
(7, 'MARCOS', 'HILASAYA YUNGAS', 'masculino', '987654321', '1968-06-19', 'MARCOSHILASACA@OTMAIL.COM', '01235689', './imagenes/usuario.png', '2020-02-04 14:57:13', '2020-02-04 14:57:13'),
(8, 'EDGAR', 'APAZA CHOQUE', 'masculino', '935017466', '1978-04-15', 'EDGARAPAZAC@GMAIL.COM', '40023528', './imagenes/usuario.png', '2020-02-05 14:23:15', '2020-02-05 14:23:15'),
(9, 'ALEJANDRO', 'MAMANI RODRIGUEZ', 'masculino', '9', '1968-02-05', 'ALEJANDRO@GMIAL.COM', '0657884', './imagenes/usuario.png', '2020-02-05 19:36:15', '2020-02-05 19:36:15'),
(10, 'RUTH ERIKA', 'NINA TAPIA', 'femenino', '954428799', '2001-05-14', 'RUTHERIKA124@GMAIL.COM', '71516787', './imagenes/usuario.png', '2020-02-14 14:55:51', '2020-02-14 13:55:51'),
(11, 'DANITZA THALIA', 'ROJAS PACORICONA', 'femenino', '928720180', '2001-05-11', 'DANIITHALIARP@GMAIL.COM', '71461931', './imagenes/usuario.png', '2020-02-14 15:23:32', '2020-02-14 14:23:32'),
(12, 'CORAYMA  ARAXA', 'NUñEZ QUISPE', 'femenino', '999999999', '2001-01-01', 'CORAYMANQ@GMAIL.COM', '71419787', './imagenes/usuario.png', '2020-02-14 15:29:08', '2020-02-14 14:29:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `id_reportes` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `id_acciones` int(11) DEFAULT NULL,
  `f_reportes` timestamp NULL DEFAULT NULL,
  `cantidad` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reportes`
--

INSERT INTO `reportes` (`id_reportes`, `id_personal`, `id_acciones`, `f_reportes`, `cantidad`) VALUES
(118, 6, 6, '2020-02-14 21:42:23', 9),
(119, 6, 6, '2020-02-14 21:42:26', 9),
(120, 6, 5, '2020-02-14 21:42:39', 78),
(121, 6, 5, '2020-02-14 21:43:48', 78),
(122, 6, 6, '2020-02-14 21:43:49', 78),
(123, 6, 6, '2020-02-14 21:43:50', 78),
(124, 6, 5, '2020-02-14 21:44:47', 1),
(125, 6, 6, '2020-02-14 21:44:48', 2),
(126, 6, 6, '2020-02-14 21:44:48', 2),
(127, 6, 5, '2020-02-17 19:27:34', 78),
(128, 6, 6, '2020-02-17 19:27:37', 78),
(129, 6, 6, '2020-02-17 19:27:38', 78),
(130, 6, 6, '2020-02-17 19:27:38', 78),
(131, 8, 3, '2020-02-17 19:28:19', 48),
(132, 8, 3, '2020-02-17 19:28:22', 48),
(133, 8, 3, '2020-02-17 19:28:45', 12),
(134, 8, 3, '2020-02-17 19:28:46', 12),
(135, 8, 3, '2020-02-17 19:29:01', 12),
(136, 8, 3, '2020-02-17 19:29:02', 12),
(137, 8, 3, '2020-02-17 19:29:02', 12),
(138, 8, 3, '2020-02-17 19:29:42', 50),
(139, 8, 3, '2020-02-17 19:30:31', 45);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acciones`
--
ALTER TABLE `acciones`
  ADD PRIMARY KEY (`id_acciones`),
  ADD KEY `id_personal` (`id_personal`),
  ADD KEY `id_cargos` (`id_cargos`);

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id_areas`),
  ADD KEY `id_metas` (`id_metas`);

--
-- Indices de la tabla `asignacionpersonal`
--
ALTER TABLE `asignacionpersonal`
  ADD PRIMARY KEY (`idasignacion`);

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id_cargos`),
  ADD KEY `fk_oficina_cargos_idx` (`id_oficina`);

--
-- Indices de la tabla `datospersonal`
--
ALTER TABLE `datospersonal`
  ADD PRIMARY KEY (`id_adpersonal`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_metas` (`id_metas`);

--
-- Indices de la tabla `jefe_area`
--
ALTER TABLE `jefe_area`
  ADD PRIMARY KEY (`id_jefearea`),
  ADD KEY `id_personal` (`id_personal`),
  ADD KEY `id_areas` (`id_areas`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`log_usu`),
  ADD UNIQUE KEY `log_usu_UNIQUE` (`log_usu`),
  ADD KEY `id_personal` (`id_personal`);

--
-- Indices de la tabla `metas`
--
ALTER TABLE `metas`
  ADD PRIMARY KEY (`id_metas`);

--
-- Indices de la tabla `metas_areas`
--
ALTER TABLE `metas_areas`
  ADD PRIMARY KEY (`id_metas_areas`),
  ADD KEY `id_meta` (`id_meta`),
  ADD KEY `id_area` (`id_area`);

--
-- Indices de la tabla `oficinas`
--
ALTER TABLE `oficinas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_of_UNIQUE` (`nombre_of`),
  ADD KEY `id_metas` (`id_metas`),
  ADD KEY `id_institucion` (`id_institucion`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id_personal`);

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`id_reportes`),
  ADD KEY `id_personal` (`id_personal`),
  ADD KEY `id_responsabilidades` (`id_acciones`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acciones`
--
ALTER TABLE `acciones`
  MODIFY `id_acciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id_areas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `asignacionpersonal`
--
ALTER TABLE `asignacionpersonal`
  MODIFY `idasignacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id_cargos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `datospersonal`
--
ALTER TABLE `datospersonal`
  MODIFY `id_adpersonal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `jefe_area`
--
ALTER TABLE `jefe_area`
  MODIFY `id_jefearea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `metas`
--
ALTER TABLE `metas`
  MODIFY `id_metas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `metas_areas`
--
ALTER TABLE `metas_areas`
  MODIFY `id_metas_areas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `oficinas`
--
ALTER TABLE `oficinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id_personal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `id_reportes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acciones`
--
ALTER TABLE `acciones`
  ADD CONSTRAINT `acciones_ibfk_1` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id_personal`),
  ADD CONSTRAINT `acciones_ibfk_2` FOREIGN KEY (`id_cargos`) REFERENCES `cargos` (`id_cargos`);

--
-- Filtros para la tabla `areas`
--
ALTER TABLE `areas`
  ADD CONSTRAINT `areas_ibfk_1` FOREIGN KEY (`id_metas`) REFERENCES `metas` (`id_metas`);

--
-- Filtros para la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD CONSTRAINT `fk_oficina_cargos` FOREIGN KEY (`id_oficina`) REFERENCES `oficinas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD CONSTRAINT `institucion_ibfk_1` FOREIGN KEY (`id_metas`) REFERENCES `metas` (`id_metas`);

--
-- Filtros para la tabla `jefe_area`
--
ALTER TABLE `jefe_area`
  ADD CONSTRAINT `jefe_area_ibfk_1` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id_personal`),
  ADD CONSTRAINT `jefe_area_ibfk_2` FOREIGN KEY (`id_areas`) REFERENCES `areas` (`id_areas`);

--
-- Filtros para la tabla `metas_areas`
--
ALTER TABLE `metas_areas`
  ADD CONSTRAINT `metas_areas_ibfk_1` FOREIGN KEY (`id_meta`) REFERENCES `metas` (`id_metas`),
  ADD CONSTRAINT `metas_areas_ibfk_2` FOREIGN KEY (`id_area`) REFERENCES `areas` (`id_areas`);

--
-- Filtros para la tabla `oficinas`
--
ALTER TABLE `oficinas`
  ADD CONSTRAINT `oficinas_ibfk_1` FOREIGN KEY (`id_metas`) REFERENCES `metas` (`id_metas`),
  ADD CONSTRAINT `oficinas_ibfk_2` FOREIGN KEY (`id_institucion`) REFERENCES `institucion` (`id`);

--
-- Filtros para la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD CONSTRAINT `fk_acciones_1` FOREIGN KEY (`id_acciones`) REFERENCES `acciones` (`id_acciones`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_personal_1` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id_personal`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
