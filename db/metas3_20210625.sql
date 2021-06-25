-- MariaDB dump 10.19  Distrib 10.5.10-MariaDB, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: avancemetas
-- ------------------------------------------------------
-- Server version	10.5.10-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `acciones`
--

DROP TABLE IF EXISTS `acciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acciones` (
  `id_acciones` int(11) NOT NULL AUTO_INCREMENT,
  `id_personal` int(11) NOT NULL,
  `nomb_actividad` varchar(150) DEFAULT NULL,
  `unidad_medida` varchar(20) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_acciones`),
  KEY `fk_acciones_personal_idx` (`id_personal`),
  CONSTRAINT `fk_acciones_personal` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id_personal`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acciones`
--

LOCK TABLES `acciones` WRITE;
/*!40000 ALTER TABLE `acciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `acciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `areas`
--

DROP TABLE IF EXISTS `areas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `areas` (
  `id_areas` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `idsubgerencia` int(11) NOT NULL,
  `id_metas` int(11) DEFAULT NULL,
  `f_creacion` datetime DEFAULT NULL,
  `f_update` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_areas`),
  KEY `fk_areas_subgerencia_idx` (`idsubgerencia`),
  CONSTRAINT `fk_areas_subgerencia` FOREIGN KEY (`idsubgerencia`) REFERENCES `subgerencia` (`idsubgerencia`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `areas`
--

LOCK TABLES `areas` WRITE;
/*!40000 ALTER TABLE `areas` DISABLE KEYS */;
INSERT INTO `areas` VALUES (1,'DESARROLLO DE SOFTWAREA','DESARROLLO DE SOFTWARE',2,1,'2021-06-24 16:24:47',NULL);
/*!40000 ALTER TABLE `areas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cargos`
--

DROP TABLE IF EXISTS `cargos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cargos` (
  `id_cargos` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) NOT NULL,
  `id_areas` int(11) NOT NULL,
  `fec_creacion` datetime NOT NULL,
  `idpersonal` int(11) NOT NULL,
  PRIMARY KEY (`id_cargos`),
  KEY `fk_cargos_areas_idx` (`id_areas`),
  KEY `fk_cargos_personal_idx` (`idpersonal`),
  CONSTRAINT `fk_cargos_areas` FOREIGN KEY (`id_areas`) REFERENCES `areas` (`id_areas`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_cargos_personal` FOREIGN KEY (`idpersonal`) REFERENCES `personal` (`id_personal`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cargos`
--

LOCK TABLES `cargos` WRITE;
/*!40000 ALTER TABLE `cargos` DISABLE KEYS */;
INSERT INTO `cargos` VALUES (1,'DIGITADOR',1,'2021-06-24 21:54:59',1),(2,'RESPOSNABEL DE SERVIDOR',1,'2021-06-25 08:57:13',1),(3,'CHOFER',1,'2021-06-25 08:58:17',1);
/*!40000 ALTER TABLE `cargos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `datospersonal`
--

DROP TABLE IF EXISTS `datospersonal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `datospersonal` (
  `idpersonal2` int(11) NOT NULL AUTO_INCREMENT,
  `profesion` varchar(50) DEFAULT NULL,
  `tiempo_servicio` int(11) DEFAULT NULL,
  `condicion` varchar(20) DEFAULT NULL,
  `seguro_social` varchar(20) DEFAULT NULL,
  `grupo_sanguineo` varchar(10) DEFAULT NULL,
  `f_ingreso` date DEFAULT NULL,
  `f_deceso` date DEFAULT NULL,
  `idpersonal` int(11) NOT NULL,
  PRIMARY KEY (`idpersonal2`),
  KEY `fk_datospersonal_personal_idx` (`idpersonal`),
  CONSTRAINT `fk_datospersonal_personal` FOREIGN KEY (`idpersonal`) REFERENCES `personal` (`id_personal`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datospersonal`
--

LOCK TABLES `datospersonal` WRITE;
/*!40000 ALTER TABLE `datospersonal` DISABLE KEYS */;
/*!40000 ALTER TABLE `datospersonal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funciones`
--

DROP TABLE IF EXISTS `funciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `funciones` (
  `idfunciones` int(11) NOT NULL AUTO_INCREMENT,
  `funciones` varchar(150) NOT NULL,
  PRIMARY KEY (`idfunciones`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funciones`
--

LOCK TABLES `funciones` WRITE;
/*!40000 ALTER TABLE `funciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `funciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gerencias`
--

DROP TABLE IF EXISTS `gerencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gerencias` (
  `idgerencia` int(11) NOT NULL AUTO_INCREMENT,
  `nomgerencia` varchar(60) NOT NULL,
  `sigla` varchar(20) NOT NULL,
  `iduorg` int(11) NOT NULL,
  `fechaActual` datetime DEFAULT NULL,
  PRIMARY KEY (`idgerencia`),
  KEY `fk_gerencias_uniorganica_idx` (`iduorg`),
  CONSTRAINT `fk_gerencias_uniorganica` FOREIGN KEY (`iduorg`) REFERENCES `unidadorganica` (`iduorg`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gerencias`
--

LOCK TABLES `gerencias` WRITE;
/*!40000 ALTER TABLE `gerencias` DISABLE KEYS */;
INSERT INTO `gerencias` VALUES (1,'DIRECCION DE ARCHIVO','DIRECCION',1,'2021-06-23 21:38:26');
/*!40000 ALTER TABLE `gerencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `institucion`
--

DROP TABLE IF EXISTS `institucion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `institucion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_inst` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `RUC` char(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `p_web` varchar(50) NOT NULL,
  `creacion` date NOT NULL,
  `resolucion` varchar(50) NOT NULL,
  `fecCreate` datetime NOT NULL,
  `fecChange` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `institucion`
--

LOCK TABLES `institucion` WRITE;
/*!40000 ALTER TABLE `institucion` DISABLE KEYS */;
INSERT INTO `institucion` VALUES (1,'ARCHIVO REGIONAL DE PUNO','AV. EL EJERCITO 645','9652211','20212113','archivo@gmial.com','archi','1999-12-02','','2021-06-23 21:27:44','2021-06-23 21:27:44');
/*!40000 ALTER TABLE `institucion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `log_usu` int(10) NOT NULL AUTO_INCREMENT,
  `id_personal` int(11) NOT NULL,
  `nom_usu` varchar(30) NOT NULL,
  `psw_usu` varchar(255) NOT NULL,
  `niv_usu` int(1) NOT NULL DEFAULT 2,
  `chk_usu` tinyint(4) NOT NULL,
  PRIMARY KEY (`log_usu`),
  KEY `id_personal` (`id_personal`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,1,'e','e',1,1);
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `metas_areas`
--

DROP TABLE IF EXISTS `metas_areas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `metas_areas` (
  `idmetasareas` int(11) NOT NULL AUTO_INCREMENT,
  `metaarea` varchar(45) DEFAULT NULL,
  `cantidad` double DEFAULT NULL,
  `unidadmedida` varchar(20) DEFAULT NULL,
  `frecuencia` varchar(20) DEFAULT NULL,
  `idarea` int(11) DEFAULT NULL,
  `fecCreate` datetime DEFAULT NULL,
  PRIMARY KEY (`idmetasareas`),
  KEY `fk_metas_areas_idx` (`idarea`),
  CONSTRAINT `fk_metas_areas` FOREIGN KEY (`idarea`) REFERENCES `areas` (`id_areas`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `metas_areas`
--

LOCK TABLES `metas_areas` WRITE;
/*!40000 ALTER TABLE `metas_areas` DISABLE KEYS */;
/*!40000 ALTER TABLE `metas_areas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `metas_personal`
--

DROP TABLE IF EXISTS `metas_personal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `metas_personal` (
  `idmetas` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) NOT NULL,
  `cantidad` double NOT NULL,
  `unidadmedida` varchar(50) NOT NULL,
  `frecuencia` varchar(45) DEFAULT NULL,
  `idpersonal` int(11) DEFAULT NULL,
  `fecCreate` datetime DEFAULT NULL,
  PRIMARY KEY (`idmetas`),
  KEY `fk_metas_personal_idx` (`idpersonal`),
  CONSTRAINT `fk_metas_personal` FOREIGN KEY (`idpersonal`) REFERENCES `personal` (`id_personal`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `metas_personal`
--

LOCK TABLES `metas_personal` WRITE;
/*!40000 ALTER TABLE `metas_personal` DISABLE KEYS */;
INSERT INTO `metas_personal` VALUES (1,'Ingreso a Base de Datos',15000,'Unidad','uno',NULL,NULL),(2,'MI META',12213,'UNIDAD','SEMANAL',NULL,NULL),(3,'INGRESOS',8888,'UNIDAD','MENSUAL',NULL,NULL);
/*!40000 ALTER TABLE `metas_personal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oficinas`
--

DROP TABLE IF EXISTS `oficinas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oficinas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `sigla` varchar(10) NOT NULL,
  `iduorg` int(11) NOT NULL,
  `f_creacion` datetime DEFAULT NULL,
  `f_update` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre_of_UNIQUE` (`nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oficinas`
--

LOCK TABLES `oficinas` WRITE;
/*!40000 ALTER TABLE `oficinas` DISABLE KEYS */;
INSERT INTO `oficinas` VALUES (2,'INFORMATICA','AI',1,'2021-06-24 13:05:13','2021-06-24 18:05:13'),(4,'SUB GERENCIA DE PLANEANIEMTO Y DESARROLLO','SGPD',1,'2021-06-24 16:08:53','2021-06-24 21:08:53');
/*!40000 ALTER TABLE `oficinas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal`
--

DROP TABLE IF EXISTS `personal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal` (
  `id_personal` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `DNI` char(8) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `f_creacion` datetime DEFAULT NULL,
  `f_update` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_personal`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal`
--

LOCK TABLES `personal` WRITE;
/*!40000 ALTER TABLE `personal` DISABLE KEYS */;
INSERT INTO `personal` VALUES (1,'Edgar','Apaza','Masculino','9','1999-05-01','','','','2021-06-01 00:00:00','2021-06-01 05:00:00'),(2,'EDGAR','APAZA','MASCULINO','98','1999-01-01','edga@mc.com','92929','./imagenes/usuario.png','2021-06-24 20:56:46','2021-06-25 01:56:46');
/*!40000 ALTER TABLE `personal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reportes`
--

DROP TABLE IF EXISTS `reportes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reportes` (
  `id_reportes` int(11) NOT NULL AUTO_INCREMENT,
  `id_personal` int(11) NOT NULL,
  `id_acciones` int(11) DEFAULT NULL,
  `f_reportes` timestamp NULL DEFAULT NULL,
  `cantidad` double DEFAULT NULL,
  PRIMARY KEY (`id_reportes`),
  KEY `id_personal` (`id_personal`),
  KEY `id_responsabilidades` (`id_acciones`),
  CONSTRAINT `fk_reporte_acciones` FOREIGN KEY (`id_acciones`) REFERENCES `acciones` (`id_acciones`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_reporte_personal` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id_personal`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reportes`
--

LOCK TABLES `reportes` WRITE;
/*!40000 ALTER TABLE `reportes` DISABLE KEYS */;
/*!40000 ALTER TABLE `reportes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subgerencia`
--

DROP TABLE IF EXISTS `subgerencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subgerencia` (
  `idsubgerencia` int(11) NOT NULL AUTO_INCREMENT,
  `nomsubger` varchar(120) NOT NULL,
  `sigla` varchar(20) NOT NULL,
  `idgerencia` int(11) NOT NULL,
  PRIMARY KEY (`idsubgerencia`),
  KEY `fk_subgerencia_gerencia_idx` (`idgerencia`),
  CONSTRAINT `fk_subgerencia_gerencia` FOREIGN KEY (`idgerencia`) REFERENCES `gerencias` (`idgerencia`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subgerencia`
--

LOCK TABLES `subgerencia` WRITE;
/*!40000 ALTER TABLE `subgerencia` DISABLE KEYS */;
INSERT INTO `subgerencia` VALUES (1,'Unidad de Imagen Instituciaonl y Protocolo','UIIyP',1),(2,'Unidad de Registro Civil','URC',1);
/*!40000 ALTER TABLE `subgerencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unidadorganica`
--

DROP TABLE IF EXISTS `unidadorganica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unidadorganica` (
  `iduorg` int(11) NOT NULL AUTO_INCREMENT,
  `nombreuo` varchar(120) NOT NULL,
  `sigla` varchar(20) NOT NULL,
  `idinstitucion` int(11) NOT NULL,
  PRIMARY KEY (`iduorg`),
  KEY `fk_unidadorganica_institucion_idx` (`idinstitucion`),
  CONSTRAINT `fk_unidadorganica_institucion` FOREIGN KEY (`idinstitucion`) REFERENCES `institucion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unidadorganica`
--

LOCK TABLES `unidadorganica` WRITE;
/*!40000 ALTER TABLE `unidadorganica` DISABLE KEYS */;
INSERT INTO `unidadorganica` VALUES (1,'Alcaldia','Alcaldia',1),(2,'','CM',1),(3,'CONCEJO MUNICIPAL','CM',1),(4,'ALCALDIA','ALCALDIA',1),(5,'GERENCIA MUNICIPAL','GM',1);
/*!40000 ALTER TABLE `unidadorganica` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-25 13:03:16
