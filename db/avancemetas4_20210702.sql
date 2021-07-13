-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-07-2021 a las 20:04:26
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `avancemetas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acciones`
--

CREATE TABLE `acciones` (
  `id_acciones` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `id_cargos` int(11) NOT NULL,
  `nomb_actividad` varchar(150) DEFAULT NULL,
  `unidad_medida` varchar(20) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `acciones`
--

INSERT INTO `acciones` (`id_acciones`, `id_personal`, `id_cargos`, `nomb_actividad`, `unidad_medida`, `fecha_creacion`, `fecha_update`) VALUES
(1, 1, 1, 'ACCION NAME', 'SERVICIO', '2021-06-28 16:22:24', '2021-06-30 16:03:35'),
(4, 1, 1, 'ddd', 'Moneda', '2021-06-28 17:05:48', '2021-06-28 17:10:21'),
(5, 1, 2, 'et', 'Metros Lineales', '2021-06-28 17:05:57', '2021-06-28 17:10:21'),
(6, 1, 3, 'NAME ACCION', 'SERVICIO', '2021-06-28 18:38:22', '2021-06-30 16:03:58'),
(7, 2, 3, 'PRUEBA ACCION', 'PRUEBA', '2021-06-28 18:39:35', '2021-06-30 15:33:01'),
(8, 1, 1, 'DIGITAR LIBRO', 'Escritura', '2021-06-30 18:01:52', '2021-06-30 23:01:52'),
(9, 2, 3, 'CHOFER', 'Servicio', '2021-06-30 18:03:07', '2021-06-30 23:03:07'),
(10, 3, 2, 'ingreso a base de datos', 'Escritura', '2021-06-30 18:31:58', '2021-06-30 23:31:58'),
(11, 3, 3, 'chofer', 'Servicio', '2021-07-01 19:01:29', '2021-07-02 00:01:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `idActividad` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `id_subgerencia` int(11) NOT NULL,
  `id_cargo` int(11) NOT NULL,
  `actividad` varchar(100) DEFAULT NULL,
  `unidadMedida` varchar(30) DEFAULT NULL,
  `obs` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`idActividad`, `id_personal`, `id_subgerencia`, `id_cargo`, `actividad`, `unidadMedida`, `obs`) VALUES
(1, 1, 1, 1, 'digitador', 'unidad', 'obs');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `id_areas` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `idsubgerencia` int(11) NOT NULL,
  `id_metas` int(11) DEFAULT NULL,
  `f_creacion` datetime DEFAULT NULL,
  `f_update` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id_areas`, `nombre`, `descripcion`, `idsubgerencia`, `id_metas`, `f_creacion`, `f_update`) VALUES
(1, 'DESARROLLO DE SOFTWAREA', 'DESARROLLO DE SOFTWARE', 2, 1, '2021-06-24 16:24:47', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `id_cargos` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `id_areas` int(11) NOT NULL,
  `fec_creacion` datetime NOT NULL,
  `idpersonal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`id_cargos`, `nombre`, `id_areas`, `fec_creacion`, `idpersonal`) VALUES
(1, 'DIGITADOR C', 1, '2021-06-24 21:54:59', 1),
(2, 'RESPOSNABEL DE SERVIDOR', 1, '2021-06-25 08:57:13', 1),
(3, 'CHOFER', 1, '2021-06-25 08:58:17', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datospersonal`
--

CREATE TABLE `datospersonal` (
  `idpersonal2` int(11) NOT NULL,
  `profesion` varchar(50) DEFAULT NULL,
  `tiempo_servicio` int(11) DEFAULT NULL,
  `condicion` varchar(20) DEFAULT NULL,
  `seguro_social` varchar(20) DEFAULT NULL,
  `grupo_sanguineo` varchar(10) DEFAULT NULL,
  `f_ingreso` date DEFAULT NULL,
  `f_deceso` date DEFAULT NULL,
  `idpersonal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funciones`
--

CREATE TABLE `funciones` (
  `idfunciones` int(11) NOT NULL,
  `funciones` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gerencias`
--

CREATE TABLE `gerencias` (
  `idgerencia` int(11) NOT NULL,
  `nomgerencia` varchar(60) NOT NULL,
  `sigla` varchar(20) NOT NULL,
  `iduorg` int(11) NOT NULL,
  `fechaActual` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gerencias`
--

INSERT INTO `gerencias` (`idgerencia`, `nomgerencia`, `sigla`, `iduorg`, `fechaActual`) VALUES
(1, 'DIRECCION DE ARCHIVO', 'DIRECCION', 1, '2021-06-23 21:38:26');

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
  `creacion` date NOT NULL,
  `resolucion` varchar(50) NOT NULL,
  `fecCreate` datetime NOT NULL,
  `fecChange` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `institucion`
--

INSERT INTO `institucion` (`id`, `nombre_inst`, `direccion`, `telefono`, `RUC`, `email`, `p_web`, `creacion`, `resolucion`, `fecCreate`, `fecChange`) VALUES
(1, 'ARCHIVO REGIONAL DE PUNO', 'AV. EL EJERCITO 645', '9652211', '20212113', 'archivo@gmial.com', 'archi', '1999-12-02', '', '2021-06-23 21:27:44', '2021-06-23 21:27:44');

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
(1, 1, 'e', 'e', 1, 1),
(2, 2, 'b', 'b', 2, 1),
(3, 3, 'usu3', 'usu3', 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metas_areas`
--

CREATE TABLE `metas_areas` (
  `idmetasareas` int(11) NOT NULL,
  `metaarea` varchar(45) DEFAULT NULL,
  `cantidad` double DEFAULT NULL,
  `unidadmedida` varchar(20) DEFAULT NULL,
  `frecuencia` varchar(20) DEFAULT NULL,
  `idarea` int(11) DEFAULT NULL,
  `fecCreate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metas_personal`
--

CREATE TABLE `metas_personal` (
  `idmetas` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `cantidad` double NOT NULL,
  `unidadmedida` varchar(50) NOT NULL,
  `frecuencia` varchar(45) DEFAULT NULL,
  `idpersonal` int(11) DEFAULT NULL,
  `fecCreate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `metas_personal`
--

INSERT INTO `metas_personal` (`idmetas`, `nombre`, `cantidad`, `unidadmedida`, `frecuencia`, `idpersonal`, `fecCreate`) VALUES
(1, 'Ingreso a Base de Datos', 15000, 'Unidad', 'uno', NULL, NULL),
(2, 'MI META', 12213, 'UNIDAD', 'SEMANAL', NULL, NULL),
(3, 'INGRESOS', 444444, 'UNIDAD', 'MENSUAL', NULL, '2021-06-28 18:55:45'),
(8, 'YYYYYY', 444444, 'UNIDAD', 'DIARIO', 2, '2021-06-28 18:55:29'),
(9, 'HJNJNLN', 64162, 'UNIDAS', '54', 1, '2021-06-28 19:15:32'),
(10, 'metanombre prueba', 45, 'unidads', 'Semanal', 1, '2021-06-30 18:08:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oficinas`
--

CREATE TABLE `oficinas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `sigla` varchar(10) NOT NULL,
  `iduorg` int(11) NOT NULL,
  `f_creacion` datetime DEFAULT NULL,
  `f_update` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `oficinas`
--

INSERT INTO `oficinas` (`id`, `nombre`, `sigla`, `iduorg`, `f_creacion`, `f_update`) VALUES
(2, 'INFORMATICA', 'AI', 1, '2021-06-24 13:05:13', '2021-06-24 18:05:13'),
(4, 'SUB GERENCIA DE PLANEANIEMTO Y DESARROLLO', 'SGPD', 1, '2021-06-24 16:08:53', '2021-06-24 21:08:53');

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
(1, 'Edgar', 'Apaza', 'Masculino', '9', '1999-05-01', '', '', '', '2021-06-01 00:00:00', '2021-06-01 05:00:00'),
(2, 'EDGAR', 'APAZA', 'MASCULINO', '98', '1999-01-01', 'edga@mc.com', '92929', './imagenes/usuario.png', '2021-06-24 20:56:46', '2021-06-25 01:56:46'),
(3, 'usuario3', 'apellidos', 'masculino', '978542', '2020-06-10', NULL, '78784587', NULL, '2021-06-30 18:21:17', '2021-06-30 16:22:14');

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
(1, 1, 6, '2021-06-30 14:16:02', 50),
(4, 2, 7, '2021-06-30 22:13:27', 2),
(5, 2, 7, '2021-06-30 22:13:55', 10),
(6, 2, 7, '2021-06-30 22:15:38', 80),
(7, 3, 10, '2021-07-01 23:59:20', 45),
(8, 3, 10, '2021-07-02 00:00:10', 88888),
(9, 3, 11, '2021-07-02 00:01:44', 78),
(10, 3, 10, '2021-07-02 00:26:32', 34),
(11, 3, 11, '2021-07-02 00:31:57', 1),
(12, 3, 10, '2021-07-02 00:54:28', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subgerencia`
--

CREATE TABLE `subgerencia` (
  `idsubgerencia` int(11) NOT NULL,
  `nomsubger` varchar(120) NOT NULL,
  `sigla` varchar(20) NOT NULL,
  `idgerencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `subgerencia`
--

INSERT INTO `subgerencia` (`idsubgerencia`, `nomsubger`, `sigla`, `idgerencia`) VALUES
(1, 'Unidad de Imagen Instituciaonl y Protocolo', 'UIIyP', 1),
(2, 'Unidad de Registro Civil', 'URC', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidadorganica`
--

CREATE TABLE `unidadorganica` (
  `iduorg` int(11) NOT NULL,
  `nombreuo` varchar(120) NOT NULL,
  `sigla` varchar(20) NOT NULL,
  `idinstitucion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `unidadorganica`
--

INSERT INTO `unidadorganica` (`iduorg`, `nombreuo`, `sigla`, `idinstitucion`) VALUES
(1, 'Alcaldia', 'Alcaldia', 1),
(2, '', 'CM', 1),
(3, 'CONCEJO MUNICIPAL', 'CM', 1),
(4, 'ALCALDIA', 'ALCALDIA', 1),
(5, 'GERENCIA MUNICIPAL', 'GM', 1),
(6, 'ORGANIZACION', 'O', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acciones`
--
ALTER TABLE `acciones`
  ADD PRIMARY KEY (`id_acciones`),
  ADD KEY `fk_acciones_personal_idx` (`id_personal`);

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`idActividad`),
  ADD KEY `fk_actividades_personal` (`id_personal`),
  ADD KEY `fk_actividades_cargos` (`id_cargo`);

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id_areas`),
  ADD KEY `fk_areas_subgerencia_idx` (`idsubgerencia`);

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id_cargos`),
  ADD KEY `fk_cargos_areas_idx` (`id_areas`),
  ADD KEY `fk_cargos_personal_idx` (`idpersonal`);

--
-- Indices de la tabla `datospersonal`
--
ALTER TABLE `datospersonal`
  ADD PRIMARY KEY (`idpersonal2`),
  ADD KEY `fk_datospersonal_personal_idx` (`idpersonal`);

--
-- Indices de la tabla `funciones`
--
ALTER TABLE `funciones`
  ADD PRIMARY KEY (`idfunciones`);

--
-- Indices de la tabla `gerencias`
--
ALTER TABLE `gerencias`
  ADD PRIMARY KEY (`idgerencia`),
  ADD KEY `fk_gerencias_uniorganica_idx` (`iduorg`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`log_usu`),
  ADD KEY `id_personal` (`id_personal`);

--
-- Indices de la tabla `metas_areas`
--
ALTER TABLE `metas_areas`
  ADD PRIMARY KEY (`idmetasareas`),
  ADD KEY `fk_metas_areas_idx` (`idarea`);

--
-- Indices de la tabla `metas_personal`
--
ALTER TABLE `metas_personal`
  ADD PRIMARY KEY (`idmetas`),
  ADD KEY `fk_metas_personal_idx` (`idpersonal`);

--
-- Indices de la tabla `oficinas`
--
ALTER TABLE `oficinas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_of_UNIQUE` (`nombre`);

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
-- Indices de la tabla `subgerencia`
--
ALTER TABLE `subgerencia`
  ADD PRIMARY KEY (`idsubgerencia`),
  ADD KEY `fk_subgerencia_gerencia_idx` (`idgerencia`);

--
-- Indices de la tabla `unidadorganica`
--
ALTER TABLE `unidadorganica`
  ADD PRIMARY KEY (`iduorg`),
  ADD KEY `fk_unidadorganica_institucion_idx` (`idinstitucion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acciones`
--
ALTER TABLE `acciones`
  MODIFY `id_acciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `idActividad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id_areas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id_cargos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `datospersonal`
--
ALTER TABLE `datospersonal`
  MODIFY `idpersonal2` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `funciones`
--
ALTER TABLE `funciones`
  MODIFY `idfunciones` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `gerencias`
--
ALTER TABLE `gerencias`
  MODIFY `idgerencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `log_usu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `metas_areas`
--
ALTER TABLE `metas_areas`
  MODIFY `idmetasareas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `metas_personal`
--
ALTER TABLE `metas_personal`
  MODIFY `idmetas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `oficinas`
--
ALTER TABLE `oficinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id_personal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `id_reportes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `subgerencia`
--
ALTER TABLE `subgerencia`
  MODIFY `idsubgerencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `unidadorganica`
--
ALTER TABLE `unidadorganica`
  MODIFY `iduorg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acciones`
--
ALTER TABLE `acciones`
  ADD CONSTRAINT `fk_acciones_personal` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id_personal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD CONSTRAINT `fk_actividades_cargos` FOREIGN KEY (`id_cargo`) REFERENCES `cargos` (`id_cargos`),
  ADD CONSTRAINT `fk_actividades_personal` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id_personal`);

--
-- Filtros para la tabla `areas`
--
ALTER TABLE `areas`
  ADD CONSTRAINT `fk_areas_subgerencia` FOREIGN KEY (`idsubgerencia`) REFERENCES `subgerencia` (`idsubgerencia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD CONSTRAINT `fk_cargos_areas` FOREIGN KEY (`id_areas`) REFERENCES `areas` (`id_areas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cargos_personal` FOREIGN KEY (`idpersonal`) REFERENCES `personal` (`id_personal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `datospersonal`
--
ALTER TABLE `datospersonal`
  ADD CONSTRAINT `fk_datospersonal_personal` FOREIGN KEY (`idpersonal`) REFERENCES `personal` (`id_personal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `gerencias`
--
ALTER TABLE `gerencias`
  ADD CONSTRAINT `fk_gerencias_uniorganica` FOREIGN KEY (`iduorg`) REFERENCES `unidadorganica` (`iduorg`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `metas_areas`
--
ALTER TABLE `metas_areas`
  ADD CONSTRAINT `fk_metas_areas` FOREIGN KEY (`idarea`) REFERENCES `areas` (`id_areas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `metas_personal`
--
ALTER TABLE `metas_personal`
  ADD CONSTRAINT `fk_metas_personal` FOREIGN KEY (`idpersonal`) REFERENCES `personal` (`id_personal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD CONSTRAINT `fk_reporte_acciones` FOREIGN KEY (`id_acciones`) REFERENCES `acciones` (`id_acciones`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_reporte_personal` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id_personal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `subgerencia`
--
ALTER TABLE `subgerencia`
  ADD CONSTRAINT `fk_subgerencia_gerencia` FOREIGN KEY (`idgerencia`) REFERENCES `gerencias` (`idgerencia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `unidadorganica`
--
ALTER TABLE `unidadorganica`
  ADD CONSTRAINT `fk_unidadorganica_institucion` FOREIGN KEY (`idinstitucion`) REFERENCES `institucion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
