CREATE DATABASE  IF NOT EXISTS `avacemetas` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `avacemetas`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: avacemetas
-- ------------------------------------------------------
-- Server version	5.6.20

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
-- Table structure for table `actividades`
--

DROP TABLE IF EXISTS `actividades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `actividades` (
  `idActividad` int(11) NOT NULL AUTO_INCREMENT,
  `id_personal` int(11) NOT NULL,
  `id_institucion` int(11) NOT NULL,
  `id_oficina` int(11) NOT NULL,
  `id_cargo` int(11) NOT NULL,
  `actividad` varchar(150) NOT NULL,
  `unidadMedida` varchar(12) NOT NULL,
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `obs` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`idActividad`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actividades`
--

LOCK TABLES `actividades` WRITE;
/*!40000 ALTER TABLE `actividades` DISABLE KEYS */;
INSERT INTO `actividades` VALUES (1,1,3,14,117,'Reuniones de Trabajo','Numero','2016-06-09 17:35:27',NULL),(2,25,5,15,109,'Expedicion de Resoluciones','Numerico','2016-06-09 20:39:46','ninguno'),(3,25,5,15,109,'Expedicion de Resoluciones','Numerico','2016-06-09 20:41:12','ninguno'),(4,25,6,18,113,'Consultas Juridicas','Numerico','2016-06-09 20:41:48',''),(5,1,4,16,108,'Ordenamiento de Legajos','Metros','2016-06-09 20:43:08',''),(6,10,4,16,112,'Organizacion Documental','Metros','2016-06-09 20:44:12','');
/*!40000 ALTER TABLE `actividades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cargos`
--

DROP TABLE IF EXISTS `cargos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cargos` (
  `id_cargo` int(11) NOT NULL AUTO_INCREMENT,
  `id_oficina` int(11) NOT NULL,
  `id_institucion` int(11) NOT NULL,
  `cargo` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id_cargo`,`id_oficina`,`id_institucion`)
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cargos`
--

LOCK TABLES `cargos` WRITE;
/*!40000 ALTER TABLE `cargos` DISABLE KEYS */;
INSERT INTO `cargos` VALUES (100,10,1,'Director del Archivo Regional de Puno'),(101,11,2,'Presidente de la Comisión Técnica Regional de Archivos'),(102,12,2,'Presidente del COCOI'),(103,13,2,'Presidente del CED'),(104,14,3,'Administrador'),(105,14,3,'Jefe de Planificación y Presupuesto'),(106,14,3,'Jefe de Personal'),(107,14,3,'Encargado del Almacen'),(108,15,4,'Director del Archivo Intermedio'),(109,15,4,'Secretaria de Archivo Intermedio'),(110,15,4,'Calificación'),(111,15,4,'Reprografía'),(112,15,4,'Restauración documental'),(113,17,5,'Encargado de informatica');
/*!40000 ALTER TABLE `cargos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `condicion`
--

DROP TABLE IF EXISTS `condicion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `condicion` (
  `id_condicion` int(11) NOT NULL AUTO_INCREMENT,
  `id_personal` int(11) NOT NULL,
  `condicion` varchar(20) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date DEFAULT NULL,
  `obs` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_condicion`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `condicion`
--

LOCK TABLES `condicion` WRITE;
/*!40000 ALTER TABLE `condicion` DISABLE KEYS */;
INSERT INTO `condicion` VALUES (1,2,'Nombrado','0000-00-00',NULL,NULL),(2,1,'Contratado','0000-00-00',NULL,NULL),(3,0,'Sin Relacion Laboral','0000-00-00',NULL,NULL);
/*!40000 ALTER TABLE `condicion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `institucion`
--

DROP TABLE IF EXISTS `institucion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `institucion` (
  `id_institucion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id_institucion`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `institucion`
--

LOCK TABLES `institucion` WRITE;
/*!40000 ALTER TABLE `institucion` DISABLE KEYS */;
INSERT INTO `institucion` VALUES (1,'Alta Dirección'),(2,'Organos Consultivos'),(3,'Organo de Apoyo'),(4,'Organos de Línea'),(5,'Informatica y Tecnologia'),(6,'Asesoria Juridica');
/*!40000 ALTER TABLE `institucion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `idlogin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `password` varchar(32) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_personal` int(11) NOT NULL,
  `idrol` int(11) NOT NULL,
  `idpermisos` int(11) NOT NULL,
  PRIMARY KEY (`idlogin`),
  KEY `fk_login_roles_idx` (`idrol`),
  KEY `fk_login_permisos_idx` (`idpermisos`),
  CONSTRAINT `fk_login_permisos` FOREIGN KEY (`idpermisos`) REFERENCES `permisos` (`id_permiso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_login_roles` FOREIGN KEY (`idrol`) REFERENCES `roles` (`idroles`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,'edgar','edgar','2016-06-06 00:43:22',20,10,5),(2,'felix','123','2016-06-06 00:43:22',2,11,3);
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oficinas`
--

DROP TABLE IF EXISTS `oficinas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oficinas` (
  `id_oficina` int(11) NOT NULL AUTO_INCREMENT,
  `id_institucion` int(11) NOT NULL,
  `oficina` varchar(60) DEFAULT NULL,
  `abreviatura` varchar(20) DEFAULT NULL,
  `areas` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_oficina`,`id_institucion`),
  KEY `fk_oficinas_institucion1_idx` (`id_institucion`),
  CONSTRAINT `fk_oficinas_institucion1` FOREIGN KEY (`id_institucion`) REFERENCES `institucion` (`id_institucion`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oficinas`
--

LOCK TABLES `oficinas` WRITE;
/*!40000 ALTER TABLE `oficinas` DISABLE KEYS */;
INSERT INTO `oficinas` VALUES (10,1,'Dirección del Archivo Regional','D-ARP',NULL),(11,2,'Comisión Técnica Regional de Archivos','CTRA',NULL),(12,2,'Comité de Coordinación Institucional','COCOI',NULL),(13,2,'Comité Evaluador de Documentos','CED',NULL),(14,3,'Oficina Técnica Administrativa','OTA',NULL),(15,4,'Dirección de Archivo Intermedio','DAI',NULL),(16,4,'Dirección de Archivo Histórico','DAH',NULL),(17,5,'Informática y Tecnología','IT',NULL),(18,6,'Asesoria Jurídica','AJ',NULL);
/*!40000 ALTER TABLE `oficinas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permisos`
--

DROP TABLE IF EXISTS `permisos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permisos` (
  `id_permiso` int(11) NOT NULL AUTO_INCREMENT,
  `permiso` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_permiso`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permisos`
--

LOCK TABLES `permisos` WRITE;
/*!40000 ALTER TABLE `permisos` DISABLE KEYS */;
INSERT INTO `permisos` VALUES (1,'Solo lectura'),(2,'Lectura y Escritura'),(3,'Editar'),(4,'Borrar'),(5,'Todo');
/*!40000 ALTER TABLE `permisos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal`
--

DROP TABLE IF EXISTS `personal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal` (
  `id_personal` int(11) NOT NULL AUTO_INCREMENT,
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
  `idcondicion` int(11) NOT NULL,
  PRIMARY KEY (`id_personal`),
  KEY `fk_personal_condicion_idx` (`idcondicion`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal`
--

LOCK TABLES `personal` WRITE;
/*!40000 ALTER TABLE `personal` DISABLE KEYS */;
INSERT INTO `personal` VALUES (1,'Sonia Rosario','Sotomayor','Vargas','01214239',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(2,'Marcos Felix','Hilasaca','Yungas','01284489',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(3,'Julia','Tapia','Quispe','01233838',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(4,'Martha Dunia','Tapia','Angles','01213337',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(5,'Wilfredo','Olaguivel','Paniahua','01213832',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(6,'Grimanesa','Ccori','Valdivia','01227155',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(7,'Roxana Julia','Villa','Ruiz','01341616',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(8,'Corina Vilma','Rodriguez','Choque','01287762',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(9,'Angel','Apaza','Mamani','02386100',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(10,'Diego Hugo','Yucra','Mamani','01212598',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(11,'Pedro','Tapia','Cruz','01202166',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(12,'Victor Alejo','Begazo','Begazo','01322673',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(13,'Adolfo','Rojas','Noa','01216699',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(14,'Alejandro','Mamani','Rodriguez','01200176',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(15,'Victor Jacinto','Ramos','Cuentas','01286061',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(16,'Juan Manuel','Chura','Livise','01287519',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(17,'Justo German','Mamani','Quispe','01235408',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(18,'Amelio Ademir','Fuentes','Flores','02007070',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(19,'Nelly','Chambilla','Asqui','43019525',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(20,'Edgar','Apaza','Choque','40023528',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(21,'Edit Marleny','Huanca','Condemayta','41291818',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(22,'Eugenio Manuel','Yucra','Estuco','01317448',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(23,'Tomas de Aquino Isidro','Tique','Quispe','01211690',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(24,'Catia','Aguilar','Soncco','01219196',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(25,'Julio Julian','Chana','Alave','04645405',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(26,'Vilma Isabel','Huaricallo','Ramos','40023492',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(28,'Jorge','Vargas','Gonzales','12345678','951326598','326598','jorge@hotmail.com','Jr. Begonias','bellavista','RH+',NULL,0),(29,'AGRIPINA','RODRIGUEZ','HALLASI','99999999','972653298','365859','lili_dream7@hotmail.com','Av. Floral 215','Bellavista','RH+',NULL,0);
/*!40000 ALTER TABLE `personal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `idroles` int(11) NOT NULL AUTO_INCREMENT,
  `roles` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idroles`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (10,'Control Total'),(11,'Administrador'),(12,'Estadisticas'),(13,'Personal'),(14,'Busqueda');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-06-09 17:03:58
