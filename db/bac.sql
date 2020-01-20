--
-- Base de datos: `avancemetas`
--
CREATE DATABASE IF NOT EXISTS `avancemetas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `avancemetas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `idActividad` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `id_institucion` int(11) NOT NULL,
  `id_oficina` int(11) NOT NULL,
  `id_cargo` int(11) NOT NULL,
  `actividad` varchar(150) NOT NULL,
  `unidadMedida` varchar(12) NOT NULL,
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `obs` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`idActividad`, `id_personal`, `id_institucion`, `id_oficina`, `id_cargo`, `actividad`, `unidadMedida`, `fecha`, `obs`) VALUES
(1, 1, 3, 14, 117, 'Reuniones de Trabajo', 'Numero', '2016-06-09 17:35:27', NULL),
(2, 25, 5, 15, 109, 'Expedicion de Resoluciones', 'Numerico', '2016-06-09 20:39:46', 'ninguno'),
(3, 26, 7, 16, 110, 'Expedicion de Resoluciones', 'Numerico', '2016-06-09 20:41:12', 'ninguno'),
(4, 25, 6, 18, 113, 'Consultas Juridicas', 'Numerico', '2016-06-09 20:41:48', ''),
(5, 1, 4, 16, 108, 'Ordenamiento de Legajos', 'Metros', '2016-06-09 20:43:08', ''),
(6, 10, 4, 16, 112, 'Organizacion Documental', 'Metros', '2016-06-09 20:44:12', ''),
(7, 3, 3, 14, 105, 'Elaboracion de Documentos de Gestión', 'Numerico', '2016-06-10 16:40:30', ''),
(8, 6, 2, 11, 101, 'Reuniones de trabajo', 'Numerico', '2016-06-10 16:42:42', ''),
(9, 19, 4, 16, 109, 'Elaboracion de Documentos de Gestión', 'Numerico', '2016-06-10 16:43:41', ''),
(10, 8, 4, 14, 107, 'Control de Inventarios', 'Numerico', '2016-06-10 16:44:19', ''),
(11, 1, 2, 13, 102, 'Reuniones de trabajo', 'Porcentaje', '2016-06-10 16:46:33', ''),
(12, 15, 4, 15, 111, 'Recepcion de documentos', 'Numerico', '2016-06-10 17:06:31', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `id_cargo` int(11) NOT NULL,
  `id_oficina` int(11) NOT NULL,
  `id_institucion` int(11) NOT NULL,
  `cargo` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`id_cargo`, `id_oficina`, `id_institucion`, `cargo`) VALUES
(100, 10, 1, 'Director del Archivo Regional de Puno'),
(101, 11, 2, 'Presidente de la Comisión Técnica Regional de Archivos'),
(102, 12, 2, 'Presidente del COCOI'),
(103, 13, 2, 'Presidente del CED'),
(104, 14, 3, 'Administrador'),
(105, 14, 3, 'Jefe de Planificación y Presupuesto'),
(106, 14, 3, 'Jefe de Personal'),
(107, 14, 3, 'Encargado del Almacen'),
(108, 15, 4, 'Director del Archivo Intermedio'),
(109, 15, 4, 'Secretaria de Archivo Intermedio'),
(110, 15, 4, 'Calificación'),
(111, 15, 4, 'Reprografía'),
(112, 15, 4, 'Restauración documental'),
(113, 17, 5, 'Encargado de informatica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condicion`
--

CREATE TABLE `condicion` (
  `id_condicion` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `condicion` varchar(20) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date DEFAULT NULL,
  `obs` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `condicion`
--

INSERT INTO `condicion` (`id_condicion`, `id_personal`, `condicion`, `fechaInicio`, `fechaFin`, `obs`) VALUES
(1, 2, 'Nombrado', '2019-12-12', NULL, NULL),
(2, 1, 'Contratado', '2019-12-12', NULL, NULL),
(3, 1, 'Sin Relacion Laboral', '2019-12-12', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE `institucion` (
  `id_institucion` int(11) NOT NULL,
  `nombre` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `institucion`
--

INSERT INTO `institucion` (`id_institucion`, `nombre`) VALUES
(1, 'Alta Dirección'),
(2, 'Organos Consultivos'),
(3, 'Organo de Apoyo'),
(4, 'Organos de Línea'),
(5, 'Informatica y Tecnologia'),
(6, 'Asesoria Juridica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `idlogin` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(32) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_personal` int(11) NOT NULL,
  `idrol` int(11) NOT NULL,
  `idpermisos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`idlogin`, `username`, `password`, `create_time`, `id_personal`, `idrol`, `idpermisos`) VALUES
(1, 'edgar', 'edgar', '2016-06-06 00:43:22', 20, 10, 5),
(2, 'felix', '123', '2016-06-06 00:43:22', 2, 11, 3),
(3, 'jorge', '2016', '2016-06-09 22:06:48', 6, 13, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oficinas`
--

CREATE TABLE `oficinas` (
  `id_oficina` int(11) NOT NULL,
  `id_institucion` int(11) NOT NULL,
  `oficina` varchar(60) DEFAULT NULL,
  `abreviatura` varchar(20) DEFAULT NULL,
  `areas` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `oficinas`
--

INSERT INTO `oficinas` (`id_oficina`, `id_institucion`, `oficina`, `abreviatura`, `areas`) VALUES
(10, 1, 'Dirección del Archivo Regional', 'D-ARP', NULL),
(11, 2, 'Comisión Técnica Regional de Archivos', 'CTRA', NULL),
(12, 2, 'Comité de Coordinación Institucional', 'COCOI', NULL),
(13, 2, 'Comité Evaluador de Documentos', 'CED', NULL),
(14, 3, 'Oficina Técnica Administrativa', 'OTA', NULL),
(15, 4, 'Dirección de Archivo Intermedio', 'DAI', NULL),
(16, 4, 'Dirección de Archivo Histórico', 'DAH', NULL),
(17, 5, 'Informática y Tecnología', 'IT', NULL),
(18, 6, 'Asesoria Jurídica', 'AJ', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id_permiso` int(11) NOT NULL,
  `permiso` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id_permiso`, `permiso`) VALUES
(1, 'Solo lectura'),
(2, 'Lectura y Escritura'),
(3, 'Editar'),
(4, 'Borrar'),
(5, 'Todo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id_personal` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `paterno` varchar(60) NOT NULL,
  `materno` varchar(60) NOT NULL,
  `dni` char(8) NOT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `telcasa` varchar(10) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `barrio` varchar(60) DEFAULT NULL,
  `GrupoSanguineo` varchar(10) DEFAULT NULL,
  `foto` blob,
  `idcondicion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id_personal`, `nombre`, `paterno`, `materno`, `dni`, `celular`, `telcasa`, `email`, `direccion`, `barrio`, `GrupoSanguineo`, `foto`, `idcondicion`) VALUES
(1, 'Sonia Rosario', 'Sotomayor', 'Vargas', '01214239', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(2, 'Marcos Felix', 'Hilasaca', 'Yungas', '01284489', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(3, 'Julia', 'Tapia', 'Quispe', '01233838', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, 'Martha Dunia', 'Tapia', 'Angles', '01213337', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(5, 'Wilfredo', 'Olaguivel', 'Paniahua', '01213832', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(6, 'Grimanesa', 'Ccori', 'Valdivia', '01227155', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(7, 'Roxana Julia', 'Villa', 'Ruiz', '01341616', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(8, 'Corina Vilma', 'Rodriguez', 'Choque', '01287762', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(9, 'Angel', 'Apaza', 'Mamani', '02386100', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(10, 'Diego Hugo', 'Yucra', 'Mamani', '01212598', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(11, 'Pedro', 'Tapia', 'Cruz', '01202166', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(12, 'Victor Alejo', 'Begazo', 'Begazo', '01322673', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(13, 'Adolfo', 'Rojas', 'Noa', '01216699', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(14, 'Alejandro', 'Mamani', 'Rodriguez', '01200176', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(15, 'Victor Jacinto', 'Ramos', 'Cuentas', '01286061', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(16, 'Juan Manuel', 'Chura', 'Livise', '01287519', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(17, 'Justo German', 'Mamani', 'Quispe', '01235408', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(18, 'Amelio Ademir', 'Fuentes', 'Flores', '02007070', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(19, 'Nelly', 'Chambilla', 'Asqui', '43019525', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(20, 'Edgar', 'Apaza', 'Choque', '40023528', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(21, 'Edit Marleny', 'Huanca', 'Condemayta', '41291818', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(22, 'Eugenio Manuel', 'Yucra', 'Estuco', '01317448', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(23, 'Tomas de Aquino Isidro', 'Tique', 'Quispe', '01211690', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(24, 'Catia', 'Aguilar', 'Soncco', '01219196', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(25, 'Julio Julian', 'Chana', 'Alave', '04645405', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(26, 'Vilma Isabel', 'Huaricallo', 'Ramos', '40023492', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(28, 'Jorge', 'Vargas', 'Gonzales', '12345678', '951326598', '326598', 'jorge@hotmail.com', 'Jr. Begonias', 'bellavista', 'RH+', NULL, 0),
(29, 'AGRIPINA', 'RODRIGUEZ', 'HALLASI', '99999999', '972653298', '365859', 'lili_dream7@hotmail.com', 'Av. Floral 215', 'Bellavista', 'RH+', NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `idreportes` int(11) NOT NULL,
  `idpersonal` int(11) NOT NULL,
  `idactividad` int(11) NOT NULL,
  `reporte` int(11) NOT NULL DEFAULT '0',
  `estado` int(11) NOT NULL DEFAULT '0',
  `obs` varchar(400) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reportes`
--

INSERT INTO `reportes` (`idreportes`, `idpersonal`, `idactividad`, `reporte`, `estado`, `obs`, `fecha`) VALUES
(1, 1, 1, 2, 1, NULL, '2016-06-10 19:21:39'),
(2, 1, 5, 0, 0, NULL, '2016-06-10 19:22:13'),
(3, 25, 2, 0, 0, NULL, '2016-06-10 19:23:04'),
(4, 25, 3, 16, 1, NULL, '2016-06-10 19:23:04'),
(5, 25, 4, 0, 0, NULL, '2016-06-10 19:23:04'),
(6, 6, 8, 34, 1, 'obs', '2016-06-10 19:23:56'),
(7, 6, 8, 4, 1, 'Otras', '2016-06-13 20:37:30'),
(8, 6, 8, -9, 1, '', '2016-06-13 20:40:25'),
(9, 6, 8, 78, 1, '', '2016-06-13 20:40:44'),
(10, 25, 4, 50, 1, 'Problemas', '2016-06-13 20:42:07'),
(11, 25, 4, 66, 1, '', '2016-06-13 20:43:46'),
(12, 25, 2, 352, 1, 'Reuion de trabajo', '2016-06-14 13:45:31'),
(13, 25, 4, 789, 1, 'niguna observacion de los sistemas', '2016-06-14 13:46:14'),
(14, 25, 2, 31, 1, 'sdfjasdfjlñasd', '2016-06-14 13:51:40'),
(15, 25, 4, 654, 1, 'opweruotweuotiopwer', '2016-06-14 13:52:06'),
(16, 6, 8, 1, 1, '', '2016-06-14 13:53:01'),
(17, 6, 8, 789, 1, 'peque pqueueu', '2016-06-14 17:29:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idroles` int(11) NOT NULL,
  `roles` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idroles`, `roles`) VALUES
(10, 'Control Total'),
(11, 'Administrador'),
(12, 'Estadisticas'),
(13, 'Personal'),
(14, 'Busqueda');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`idActividad`);

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id_cargo`,`id_oficina`,`id_institucion`);

--
-- Indices de la tabla `condicion`
--
ALTER TABLE `condicion`
  ADD PRIMARY KEY (`id_condicion`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD PRIMARY KEY (`id_institucion`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idlogin`),
  ADD KEY `fk_login_roles_idx` (`idrol`),
  ADD KEY `fk_login_permisos_idx` (`idpermisos`);

--
-- Indices de la tabla `oficinas`
--
ALTER TABLE `oficinas`
  ADD PRIMARY KEY (`id_oficina`,`id_institucion`),
  ADD KEY `fk_oficinas_institucion1_idx` (`id_institucion`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id_permiso`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id_personal`),
  ADD KEY `fk_personal_condicion_idx` (`idcondicion`);

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`idreportes`),
  ADD KEY `fk_reporte_personal_idx` (`idpersonal`),
  ADD KEY `fk_reporte_actividades_idx` (`idactividad`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idroles`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `idActividad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
--
-- AUTO_INCREMENT de la tabla `condicion`
--
ALTER TABLE `condicion`
  MODIFY `id_condicion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
  MODIFY `id_institucion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `idlogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `oficinas`
--
ALTER TABLE `oficinas`
  MODIFY `id_oficina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id_permiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id_personal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `idreportes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idroles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `fk_login_permisos` FOREIGN KEY (`idpermisos`) REFERENCES `permisos` (`id_permiso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_login_roles` FOREIGN KEY (`idrol`) REFERENCES `roles` (`idroles`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `oficinas`
--
ALTER TABLE `oficinas`
  ADD CONSTRAINT `fk_oficinas_institucion1` FOREIGN KEY (`id_institucion`) REFERENCES `institucion` (`id_institucion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD CONSTRAINT `fk_reporte_actividades` FOREIGN KEY (`idactividad`) REFERENCES `actividades` (`idActividad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reporte_personal` FOREIGN KEY (`idpersonal`) REFERENCES `personal` (`id_personal`) ON DELETE NO ACTION ON UPDATE NO ACTION;
