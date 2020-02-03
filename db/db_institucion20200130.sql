/*CREATE DATABASE bd_institucion;
USE bd_institucion;*/

-- MySQL dump 10.13  Distrib 5.7.29, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: bd_institucion
-- ------------------------------------------------------
-- Server version	5.7.29-0ubuntu0.18.04.1

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
-- Table structure for table `areas`
--

DROP TABLE IF EXISTS `areas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `areas` (
  `id_areas` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `id_metas` int(11) DEFAULT NULL,
  `descripcion` text,
  `f_creacion` date DEFAULT NULL,
  `f_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_areas`),
  KEY `id_metas` (`id_metas`),
  CONSTRAINT `areas_ibfk_1` FOREIGN KEY (`id_metas`) REFERENCES `metas` (`id_metas`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `areas`
--

LOCK TABLES `areas` WRITE;
/*!40000 ALTER TABLE `areas` DISABLE KEYS */;
INSERT INTO `areas` VALUES (1,'informatica',1,'se creara durante el dia todos los registros posibles ','2020-01-08','2020-01-23 13:36:04'),(2,'CONTABILIADAD',2,'SDCJSDBASDB','2020-01-24','2020-01-24 16:06:07'),(3,'SAC',1,'ASCASJOJO','2020-01-27','2020-01-27 13:23:05'),(4,'JUAN',2,'FGJJIJI','2020-01-27','2020-01-27 13:24:05');
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
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `datospersonal` (
  `id_adpersonal` int(11) NOT NULL AUTO_INCREMENT,
  `profesion` varchar(50) DEFAULT NULL,
  `tiempo_servicio` int(11) DEFAULT NULL,
  `condicion` text,
  `seguro_social` varchar(50) DEFAULT NULL,
  `grupo_sanguineo` varchar(50) DEFAULT NULL,
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
/*!40101 SET character_set_client = utf8 */;
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `institucion`
--

LOCK TABLES `institucion` WRITE;
/*!40000 ALTER TABLE `institucion` DISABLE KEYS */;
INSERT INTO `institucion` VALUES (1,'Archivo Regional Puno','Av. Ejercito Nº645','600704','784587454','archivoregionalpuno@gmail.com','Archivo Regional de Puno','1987-03-15','465',2,'2020-01-09 00:00:00','2020-01-23 13:43:43'),(2,'ARCHIVO REGIONAL DE PUNO','AV. EL EJERCITIO 645','(051) 600705 (051) 600705','2015467862','archivoregionalpuno@gmail.com','https://archivoregionalpuno.gob.pe','1983-01-17','R.D. N° 0157-UNAP/J',1,'2020-01-24 00:00:00','2020-01-24 14:15:26'),(3,'CVNBV','JR. AVENIDA EL EJERCITO','600704','5647916','archivoregionalpuno@gmail.com','archivo regional','0123-03-21','123',1,'2020-01-24 09:56:27','2020-01-24 14:56:27');
/*!40000 ALTER TABLE `institucion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jefe_area`
--

DROP TABLE IF EXISTS `jefe_area`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `metas` (
  `id_metas` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_meta` varchar(50) NOT NULL,
  `programado` varchar(50) NOT NULL,
  `unidad_medida` varchar(50) NOT NULL,
  PRIMARY KEY (`id_metas`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `metas`
--

LOCK TABLES `metas` WRITE;
/*!40000 ALTER TABLE `metas` DISABLE KEYS */;
INSERT INTO `metas` VALUES (1,'crear  cien mil registros','crear los registros','unidad'),(2,'crear solicitudes','10000','unidad'),(3,'Ingreso de Escrituras','100000','unidad'),(4,'','',''),(5,' bvbb','bbb','bbb'),(6,'hola','hola','hola'),(7,' bvbb','bbb','bbb'),(8,'','',''),(9,'','',''),(10,'','',''),(11,'','','');
/*!40000 ALTER TABLE `metas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `metas_areas`
--

DROP TABLE IF EXISTS `metas_areas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `metas_areas` (
  `id_metas_areas` int(11) NOT NULL AUTO_INCREMENT,
  `id_meta` int(11) DEFAULT NULL,
  `id_area` int(11) DEFAULT NULL,
  `fecha_reporte` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cantidad_avance` varchar(50) DEFAULT NULL,
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
INSERT INTO `metas_areas` VALUES (1,2,1,'2020-01-23 14:10:58','unidad');
/*!40000 ALTER TABLE `metas_areas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oficinas`
--

DROP TABLE IF EXISTS `oficinas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oficinas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_of` varchar(15) DEFAULT NULL,
  `f_creacion` date DEFAULT NULL,
  `f_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_metas` int(11) DEFAULT NULL,
  `id_institucion` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_metas` (`id_metas`),
  KEY `id_institucion` (`id_institucion`),
  CONSTRAINT `oficinas_ibfk_1` FOREIGN KEY (`id_metas`) REFERENCES `metas` (`id_metas`),
  CONSTRAINT `oficinas_ibfk_2` FOREIGN KEY (`id_institucion`) REFERENCES `institucion` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oficinas`
--

LOCK TABLES `oficinas` WRITE;
/*!40000 ALTER TABLE `oficinas` DISABLE KEYS */;
INSERT INTO `oficinas` VALUES (1,'informatica 1','2020-01-01','2020-01-23 13:45:44',1,1),(2,'asesoría legal','2020-01-02','2020-01-23 13:45:44',3,1);
/*!40000 ALTER TABLE `oficinas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oficinas_areas`
--

DROP TABLE IF EXISTS `oficinas_areas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal` (
  `id_personal` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) DEFAULT NULL,
  `apellidos` varchar(15) DEFAULT NULL,
  `sexo` enum('masculino','femenino') DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `fecha_nac` datetime DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `foto` blob,
  `id_area` int(11) DEFAULT NULL,
  `f_creacion` date DEFAULT NULL,
  `f_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_oficinas` int(11) NOT NULL,
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
INSERT INTO `personal` VALUES (2,'Edson','Vargas','masculino',978452587,'1999-02-17 00:00:00','edson@gmail.com',_binary 'null',1,'2020-01-04','2020-01-24 18:07:41',1),(5,'yaned','condori','femenino',978452587,'1998-12-23 00:00:00','yaned@gmail.com',NULL,1,'2020-01-08','2020-01-23 13:56:43',1),(6,'EDGAR','APAZA','masculino',600704,'1988-04-15 00:00:00','EDGARAPAZAC@GMAIL.COM',_binary 'null',1,'2020-01-24','2020-01-24 18:20:52',1);
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
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `responsabilidades` (
  `id_responsabilidades` int(11) NOT NULL AUTO_INCREMENT,
  `nomb_resp` varchar(50) DEFAULT NULL,
  `f_inicio_respo` date DEFAULT NULL,
  `documento` text,
  `unidad_medida` varchar(50) DEFAULT NULL,
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

-- Dump completed on 2020-01-30 10:41:37
