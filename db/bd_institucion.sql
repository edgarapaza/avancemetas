CREATE DATABASE avancemetas2;
use avancemetas2;

-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-01-2020 a las 14:21:11
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
-- Base de datos: `avancemetas2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `id_areas` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `id_metas` int(11) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `f_creacion` date DEFAULT NULL,
  `f_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `id_cargos` int(11) NOT NULL,
  `id_jefearea` int(11) DEFAULT NULL,
  `nombre_cargo` varchar(50) DEFAULT NULL,
  `id_personal` int(11) DEFAULT NULL,
  `f_inicio_cargo` date DEFAULT NULL,
  `f_fin_cargo` date DEFAULT NULL,
  `documento` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datospersonal`
--

CREATE TABLE `datospersonal` (
  `id_adpersonal` int(11) NOT NULL,
  `profesion` varchar(50) DEFAULT NULL,
  `tiempo_servicio` int(11) DEFAULT NULL,
  `condicion` text DEFAULT NULL,
  `seguro_social` varchar(50) DEFAULT NULL,
  `grupo_sanguineo` varchar(50) DEFAULT NULL,
  `f_ingreso` date DEFAULT NULL,
  `f_deceso` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE `institucion` (
  `id` int(11) NOT NULL,
  `nombre_inst` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `RUC` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `p_web` varchar(50) NOT NULL,
  `fecha_creacion_archivo` date NOT NULL,
  `fecha_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_metas` int(11) NOT NULL,
  `n_resolucion` varchar(50) NOT NULL,
  `f_creacion_datos` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefe_area`
--

CREATE TABLE `jefe_area` (
  `id_jefearea` int(11) NOT NULL,
  `id_personal` int(11) DEFAULT NULL,
  `id_areas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metas`
--

CREATE TABLE `metas` (
  `id_metas` int(11) NOT NULL,
  `nombre_meta` varchar(50) NOT NULL,
  `programado` varchar(50) NOT NULL,
  `unidad_medida` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metas_areas`
--

CREATE TABLE `metas_areas` (
  `id_metas_areas` int(11) NOT NULL,
  `id_meta` int(11) DEFAULT NULL,
  `id_area` int(11) DEFAULT NULL,
  `fecha_reporte` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cantidad_avance` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oficinas`
--

CREATE TABLE `oficinas` (
  `id` int(11) NOT NULL,
  `nombre_of` varchar(15) DEFAULT NULL,
  `f_creacion` date DEFAULT NULL,
  `f_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_metas` int(11) DEFAULT NULL,
  `id_institucion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oficinas_areas`
--

CREATE TABLE `oficinas_areas` (
  `id_ofiarea` int(11) NOT NULL,
  `id_oficinas` int(11) DEFAULT NULL,
  `id_areas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id_personal` int(11) NOT NULL,
  `nombre` varchar(15) DEFAULT NULL,
  `apellidos` varchar(15) DEFAULT NULL,
  `sexo` enum('masculino','femenino') DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `email` varchar(15) DEFAULT NULL,
  `foto` blob DEFAULT NULL,
  `id_area` int(11) DEFAULT NULL,
  `f_creacion` date DEFAULT NULL,
  `f_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_oficinas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `id_repotes` int(11) NOT NULL,
  `id_personal` int(11) DEFAULT NULL,
  `id_responsabilidades` int(11) DEFAULT NULL,
  `f_reportes` date DEFAULT NULL,
  `cantidad_avance` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `responsabilidades`
--

CREATE TABLE `responsabilidades` (
  `id_responsabilidades` int(11) NOT NULL,
  `nobmre` varchar(15) DEFAULT NULL,
  `f_inicio_respo` date DEFAULT NULL,
  `documento` text DEFAULT NULL,
  `unidad_medida` varchar(50) DEFAULT NULL,
  `id_personal` int(11) DEFAULT NULL,
  `id_jefearea` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `estudiante_id` int(11) DEFAULT NULL,
  `nivel` enum('ADMINISTRADOR','DOCENTE','ESTUDIANTE') DEFAULT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `contrasena` varchar(50) DEFAULT NULL,
  `estado` varchar(12) DEFAULT NULL,
  `time_login` varchar(20) DEFAULT NULL,
  `time_logout` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `estudiante_id`, `nivel`, `nombre`, `contrasena`, `estado`, `time_login`, `time_logout`) VALUES
(1, 1, 'ADMINISTRADOR', 'admin', '9bd3e6bf8599bc2f31f3f22a16725059', 'conectado', '2020-01-Friday 9:42:', '2020202020202020-Jan'),
(2, 2, 'ESTUDIANTE', 'juan', 'aa2b18657db12239e6f8e30622e3e116', 'desconectado', '2019-12-Friday 19:59', '2019-Dec-Fri 18:59:0'),
(3, 3, 'ESTUDIANTE', 'antuane', '9bd3e6bf8599bc2f31f3f22a16725059', 'desconectado', '2019-12-Friday 19:59', '2019-Dec-Fri 18:59:2'),
(4, 0, 'ADMINISTRADOR', 'javier', '9bd3e6bf8599bc2f31f3f22a16725059', 'desconectado', '2019-12-Friday 19:33', '2019-Dec-Fri 18:33:3'),
(5, 6, 'ADMINISTRADOR', 'Ana', '9bd3e6bf8599bc2f31f3f22a16725059', 'desconectado', '2019-12-Friday 19:04', NULL),
(6, 7, 'ADMINISTRADOR', 'Juan', '9bd3e6bf8599bc2f31f3f22a16725059', 'desconectado', '2019-12-Friday 19:59', '2019-Dec-Fri 18:59:0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id_areas`),
  ADD KEY `id_metas` (`id_metas`);

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id_cargos`),
  ADD KEY `id_jefearea` (`id_jefearea`),
  ADD KEY `id_personal` (`id_personal`);

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
  ADD KEY `id_metas` (`id_metas`),
  ADD KEY `id_institucion` (`id_institucion`);

--
-- Indices de la tabla `oficinas_areas`
--
ALTER TABLE `oficinas_areas`
  ADD PRIMARY KEY (`id_ofiarea`),
  ADD KEY `id_oficinas` (`id_oficinas`),
  ADD KEY `id_areas` (`id_areas`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id_personal`),
  ADD KEY `id_area` (`id_area`),
  ADD KEY `id_oficinas` (`id_oficinas`);

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`id_repotes`),
  ADD KEY `id_personal` (`id_personal`),
  ADD KEY `id_responsabilidades` (`id_responsabilidades`);

--
-- Indices de la tabla `responsabilidades`
--
ALTER TABLE `responsabilidades`
  ADD PRIMARY KEY (`id_responsabilidades`),
  ADD KEY `id_personal` (`id_personal`),
  ADD KEY `id_jefearea` (`id_jefearea`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id_areas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id_cargos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `datospersonal`
--
ALTER TABLE `datospersonal`
  MODIFY `id_adpersonal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jefe_area`
--
ALTER TABLE `jefe_area`
  MODIFY `id_jefearea` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `metas`
--
ALTER TABLE `metas`
  MODIFY `id_metas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `metas_areas`
--
ALTER TABLE `metas_areas`
  MODIFY `id_metas_areas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `oficinas`
--
ALTER TABLE `oficinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `oficinas_areas`
--
ALTER TABLE `oficinas_areas`
  MODIFY `id_ofiarea` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id_personal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `id_repotes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `responsabilidades`
--
ALTER TABLE `responsabilidades`
  MODIFY `id_responsabilidades` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `areas`
--
ALTER TABLE `areas`
  ADD CONSTRAINT `areas_ibfk_1` FOREIGN KEY (`id_metas`) REFERENCES `metas` (`id_metas`);

--
-- Filtros para la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD CONSTRAINT `cargos_ibfk_1` FOREIGN KEY (`id_jefearea`) REFERENCES `jefe_area` (`id_jefearea`),
  ADD CONSTRAINT `cargos_ibfk_2` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id_personal`);

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
-- Filtros para la tabla `oficinas_areas`
--
ALTER TABLE `oficinas_areas`
  ADD CONSTRAINT `oficinas_areas_ibfk_1` FOREIGN KEY (`id_oficinas`) REFERENCES `oficinas` (`id`),
  ADD CONSTRAINT `oficinas_areas_ibfk_2` FOREIGN KEY (`id_areas`) REFERENCES `areas` (`id_areas`);

--
-- Filtros para la tabla `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`id_area`) REFERENCES `areas` (`id_areas`),
  ADD CONSTRAINT `personal_ibfk_2` FOREIGN KEY (`id_oficinas`) REFERENCES `oficinas` (`id`);

--
-- Filtros para la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD CONSTRAINT `reportes_ibfk_1` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id_personal`),
  ADD CONSTRAINT `reportes_ibfk_2` FOREIGN KEY (`id_responsabilidades`) REFERENCES `responsabilidades` (`id_responsabilidades`);

--
-- Filtros para la tabla `responsabilidades`
--
ALTER TABLE `responsabilidades`
  ADD CONSTRAINT `responsabilidades_ibfk_1` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id_personal`),
  ADD CONSTRAINT `responsabilidades_ibfk_2` FOREIGN KEY (`id_jefearea`) REFERENCES `jefe_area` (`id_jefearea`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
