-- MySQL dump 10.13  Distrib 8.0.17, for Win64 (x86_64)
--
-- Host: localhost    Database: bd_institucion
-- ------------------------------------------------------
-- Server version	5.7.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `areas`
--
DROP Database bd_institucion;
CREATE Database bd_institucion;
use bd_institucion;

DROP TABLE IF EXISTS `areas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `areas` (
  `id_areas` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text,
  `idoficina` int(11) NOT NULL,
  `id_metas` int(11) DEFAULT NULL,
  `f_creacion` datetime DEFAULT NULL,
  `f_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_areas`),
  KEY `id_metas` (`id_metas`),
  CONSTRAINT `areas_ibfk_1` FOREIGN KEY (`id_metas`) REFERENCES `metas` (`id_metas`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `areas`
--

LOCK TABLES `areas` WRITE;
/*!40000 ALTER TABLE `areas` DISABLE KEYS */;
INSERT INTO `areas` VALUES (1,'ASESORIA JURIDICA','Encargado de la parte legal y juridica de la institucion',1,1,'2020-01-08 00:00:00','2020-02-03 13:50:26'),(2,'PLANIFICACION Y PRESUPUESTO','PLANIFICACION',6,1,'2020-01-24 00:00:00','2020-02-03 14:39:29'),(7,'INFORMATICA','DESARROLLO DE SOFTWARE',1,1,'2020-02-03 13:46:28',NULL),(9,'FONDO NOTARIAL','VELAR POR LA CONSERVACION DEL FONDO NOTARIAL',2,1,'2020-02-03 14:40:53',NULL),(10,'REGISTRO CIVIL','PARTIDAS DE NACIMIENTO, MATRIMONIO Y DEFUNCIóN',2,1,'2020-02-03 14:41:34',NULL),(11,'FONDO CORTE SUPERIOR DE JUSTICIA','FONDO CORTE SUPERIOR DE JUSTICIA',5,1,'2020-02-03 14:42:16',NULL),(12,'INTENDENCIA Y CORREGIMIENTO','INTENDENCIA Y CORREGIMIENTO',5,1,'2020-02-03 14:42:41',NULL),(13,'BIBLIOTECA','BIBLIOTECA',5,1,'2020-02-03 14:42:56',NULL),(14,'RECURSOS HUMANOS','RECURSOS HUMANOS',6,1,'2020-02-03 14:43:25',NULL),(15,'ABASTECIMIENTOS','ABASTECIMIENTOS',6,1,'2020-02-03 14:43:40',NULL),(16,'TESORERíA Y CONTABILIDAD','TESORERíA Y CONTABILIDAD',6,1,'2020-02-03 14:44:07',NULL);
/*!40000 ALTER TABLE `areas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cargos`
--

DROP TABLE IF EXISTS `cargos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cargos` (
  `id_cargos` int(11) NOT NULL AUTO_INCREMENT,
  `id_jefearea` int(11) NOT NULL,
  `nombre_cargo` varchar(50) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `f_inicio_cargo` date DEFAULT NULL,
  `f_fin_cargo` date DEFAULT NULL,
  `documento` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_cargos`),
  KEY `id_jefearea` (`id_jefearea`),
  KEY `id_personal` (`id_personal`),
  CONSTRAINT `cargos_ibfk_1` FOREIGN KEY (`id_jefearea`) REFERENCES `jefe_area` (`id_jefearea`),
  CONSTRAINT `cargos_ibfk_2` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id_personal`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cargos`
--

LOCK TABLES `cargos` WRITE;
/*!40000 ALTER TABLE `cargos` DISABLE KEYS */;
INSERT INTO `cargos` VALUES (1,2,'realizar cargo',2,'2020-01-05','2020-01-18','doc'),(2,2,'Porteria',5,'2020-01-23',NULL,'Memorandum N° 0521-SHSDH/DDD-2020');
/*!40000 ALTER TABLE `cargos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `datospersonal`
--

DROP TABLE IF EXISTS `datospersonal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `datospersonal` (
  `id_adpersonal` int(11) NOT NULL AUTO_INCREMENT,
  `profesion` varchar(50) DEFAULT NULL,
  `tiempo_servicio` int(11) DEFAULT NULL,
  `condicion` varchar(20) DEFAULT NULL,
  `seguro_social` varchar(20) DEFAULT NULL,
  `grupo_sanguineo` varchar(10) DEFAULT NULL,
  `f_ingreso` date DEFAULT NULL,
  `f_deceso` date DEFAULT NULL,
  PRIMARY KEY (`id_adpersonal`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datospersonal`
--

LOCK TABLES `datospersonal` WRITE;
/*!40000 ALTER TABLE `datospersonal` DISABLE KEYS */;
INSERT INTO `datospersonal` VALUES (1,'ing. de sistemas',5,'contratado','SIS','O','2020-01-01','2021-04-16');
/*!40000 ALTER TABLE `datospersonal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `institucion`
--

DROP TABLE IF EXISTS `institucion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `institucion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `fecha_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_metas` (`id_metas`),
  CONSTRAINT `institucion_ibfk_1` FOREIGN KEY (`id_metas`) REFERENCES `metas` (`id_metas`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `institucion`
--

LOCK TABLES `institucion` WRITE;
/*!40000 ALTER TABLE `institucion` DISABLE KEYS */;
INSERT INTO `institucion` VALUES (1,'Archivo Regional Puno','Av. Ejercito Nº 645','051 -600704  051-600705','20164852167','archivoregionalpuno@gmail.com','www.arp.gob.pe','1987-03-15','R.D. J. N° 246-AGN/J',1,'2020-01-09 00:00:00','2020-01-31 16:40:34');
/*!40000 ALTER TABLE `institucion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jefe_area`
--

DROP TABLE IF EXISTS `jefe_area`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jefe_area` (
  `id_jefearea` int(11) NOT NULL AUTO_INCREMENT,
  `id_personal` int(11) DEFAULT NULL,
  `id_areas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_jefearea`),
  KEY `id_personal` (`id_personal`),
  KEY `id_areas` (`id_areas`),
  CONSTRAINT `jefe_area_ibfk_1` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id_personal`),
  CONSTRAINT `jefe_area_ibfk_2` FOREIGN KEY (`id_areas`) REFERENCES `areas` (`id_areas`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jefe_area`
--

LOCK TABLES `jefe_area` WRITE;
/*!40000 ALTER TABLE `jefe_area` DISABLE KEYS */;
INSERT INTO `jefe_area` VALUES (2,2,1),(3,5,1),(5,5,2),(7,5,2);
/*!40000 ALTER TABLE `jefe_area` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `login` (
  `log_usu` int(10) NOT NULL AUTO_INCREMENT,
  `id_personal` int(11) NOT NULL,
  `nom_usu` varchar(30) NOT NULL,
  `psw_usu` varchar(255) NOT NULL,
  `niv_usu` int(1) NOT NULL DEFAULT '2',
  `chk_usu` tinyint(4) NOT NULL,
  PRIMARY KEY (`log_usu`),
  KEY `id_personal` (`id_personal`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,5,'yaned','yaned',2,1);
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `metas`
--

DROP TABLE IF EXISTS `metas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `metas` (
  `id_metas` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_meta` varchar(50) NOT NULL,
  `programado` double NOT NULL,
  `unidad_medida` varchar(50) NOT NULL,
  PRIMARY KEY (`id_metas`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `metas`
--

LOCK TABLES `metas` WRITE;
/*!40000 ALTER TABLE `metas` DISABLE KEYS */;
INSERT INTO `metas` VALUES (1,'Vacio',0,'unidad'),(2,'crear solicitudes',10000,'unidad'),(3,'Ingreso de Escrituras',100000,'unidad');
/*!40000 ALTER TABLE `metas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `metas_areas`
--

DROP TABLE IF EXISTS `metas_areas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `metas_areas` (
  `id_metas_areas` int(11) NOT NULL AUTO_INCREMENT,
  `id_meta` int(11) DEFAULT NULL,
  `id_area` int(11) DEFAULT NULL,
  `fecha_reporte` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cantidad_avance` double DEFAULT NULL,
  PRIMARY KEY (`id_metas_areas`),
  KEY `id_meta` (`id_meta`),
  KEY `id_area` (`id_area`),
  CONSTRAINT `metas_areas_ibfk_1` FOREIGN KEY (`id_meta`) REFERENCES `metas` (`id_metas`),
  CONSTRAINT `metas_areas_ibfk_2` FOREIGN KEY (`id_area`) REFERENCES `areas` (`id_areas`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `metas_areas`
--

LOCK TABLES `metas_areas` WRITE;
/*!40000 ALTER TABLE `metas_areas` DISABLE KEYS */;
INSERT INTO `metas_areas` VALUES (1,2,1,'2020-01-31 16:08:05',1);
/*!40000 ALTER TABLE `metas_areas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oficinas`
--

DROP TABLE IF EXISTS `oficinas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oficinas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_of` varchar(60) NOT NULL,
  `sigla` varchar(10) DEFAULT NULL,
  `f_creacion` datetime DEFAULT NULL,
  `f_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_metas` int(11) DEFAULT NULL,
  `id_institucion` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre_of_UNIQUE` (`nombre_of`),
  KEY `id_metas` (`id_metas`),
  KEY `id_institucion` (`id_institucion`),
  CONSTRAINT `oficinas_ibfk_1` FOREIGN KEY (`id_metas`) REFERENCES `metas` (`id_metas`),
  CONSTRAINT `oficinas_ibfk_2` FOREIGN KEY (`id_institucion`) REFERENCES `institucion` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oficinas`
--

LOCK TABLES `oficinas` WRITE;
/*!40000 ALTER TABLE `oficinas` DISABLE KEYS */;
INSERT INTO `oficinas` VALUES (1,'DIRECCION ARCHIVO REGIONAL DE PUNO','DIRECCION','2020-01-01 00:00:00','2020-02-03 13:53:00',1,1),(2,'DIRECCION DE ARCHIVO INTERMEDIO','AI','2020-01-02 00:00:00','2020-02-03 13:53:00',1,1),(5,'DIRECCION DE ARCHIVO HITORICO','AH','2020-01-31 16:44:01','2020-02-03 13:53:00',1,1),(6,'OFICINA TECNICA ADMINISTRATIVA (OTA)','OTA','2020-01-31 16:46:39','2020-02-03 13:53:00',1,1);
/*!40000 ALTER TABLE `oficinas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oficinas_areas`
--

DROP TABLE IF EXISTS `oficinas_areas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oficinas_areas` (
  `id_ofiarea` int(11) NOT NULL AUTO_INCREMENT,
  `id_oficinas` int(11) DEFAULT NULL,
  `id_areas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_ofiarea`),
  KEY `id_oficinas` (`id_oficinas`),
  KEY `id_areas` (`id_areas`),
  CONSTRAINT `oficinas_areas_ibfk_1` FOREIGN KEY (`id_oficinas`) REFERENCES `oficinas` (`id`),
  CONSTRAINT `oficinas_areas_ibfk_2` FOREIGN KEY (`id_areas`) REFERENCES `areas` (`id_areas`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oficinas_areas`
--

LOCK TABLES `oficinas_areas` WRITE;
/*!40000 ALTER TABLE `oficinas_areas` DISABLE KEYS */;
INSERT INTO `oficinas_areas` VALUES (1,1,1),(2,1,2);
/*!40000 ALTER TABLE `oficinas_areas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal`
--

DROP TABLE IF EXISTS `personal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal` (
  `id_personal` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `id_area` int(11) DEFAULT NULL,
  `f_creacion` datetime DEFAULT NULL,
  `f_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_oficinas` int(11) NOT NULL,
  `DNI` char(8) DEFAULT NULL,
  PRIMARY KEY (`id_personal`),
  KEY `id_area` (`id_area`),
  KEY `id_oficinas` (`id_oficinas`),
  CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`id_area`) REFERENCES `areas` (`id_areas`),
  CONSTRAINT `personal_ibfk_2` FOREIGN KEY (`id_oficinas`) REFERENCES `oficinas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal`
--

LOCK TABLES `personal` WRITE;
/*!40000 ALTER TABLE `personal` DISABLE KEYS */;
INSERT INTO `personal` VALUES (2,'Edson','Vargas','masculino','978452587','1999-02-17','edson@gmail.com','null',1,'2020-01-04 00:00:00','2020-01-24 18:07:41',1,NULL),(5,'yaned','condori','femenino','978452587','1998-12-23','yaned@gmail.com',NULL,1,'2020-01-08 00:00:00','2020-01-23 13:56:43',1,NULL),(6,'EDGAR','APAZA','masculino','600704','1988-04-15','EDGARAPAZAC@GMAIL.COM','null',1,'2020-01-24 00:00:00','2020-01-24 18:20:52',1,NULL);
/*!40000 ALTER TABLE `personal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reportes`
--

DROP TABLE IF EXISTS `reportes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reportes` (
  `id_reportes` int(11) NOT NULL AUTO_INCREMENT,
  `id_personal` int(11) NOT NULL,
  `id_responsabilidades` int(11) NOT NULL,
  `f_reportes` datetime DEFAULT NULL,
  `cantidad_avance` double DEFAULT NULL,
  PRIMARY KEY (`id_reportes`),
  KEY `id_personal` (`id_personal`),
  KEY `id_responsabilidades` (`id_responsabilidades`)
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
-- Table structure for table `responsabilidades`
--

DROP TABLE IF EXISTS `responsabilidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `responsabilidades` (
  `id_responsabilidades` int(11) NOT NULL AUTO_INCREMENT,
  `nomb_resp` varchar(50) DEFAULT NULL,
  `f_inicio_respo` date DEFAULT NULL,
  `documento` varchar(50) DEFAULT NULL,
  `unidad_medida` varchar(10) DEFAULT NULL,
  `id_personal` int(11) DEFAULT NULL,
  `id_jefearea` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_responsabilidades`),
  KEY `id_personal` (`id_personal`),
  KEY `id_jefearea` (`id_jefearea`),
  CONSTRAINT `responsabilidades_ibfk_1` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id_personal`),
  CONSTRAINT `responsabilidades_ibfk_2` FOREIGN KEY (`id_jefearea`) REFERENCES `jefe_area` (`id_jefearea`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `responsabilidades`
--

LOCK TABLES `responsabilidades` WRITE;
/*!40000 ALTER TABLE `responsabilidades` DISABLE KEYS */;
INSERT INTO `responsabilidades` VALUES (1,'asignaciones','2019-09-01','asignaciones encargadas al personal','unidad',5,3),(2,'jjfj','2020-02-01','hrthr','unidad',2,2),(3,'a','2020-01-02','a','a',2,2),(4,'eeee','2020-01-03','ee','eee',2,2);
/*!40000 ALTER TABLE `responsabilidades` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-03 12:21:19
