CREATE DATABASE  IF NOT EXISTS `altage_gastrocmd` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `altage_gastrocmd`;
-- MySQL dump 10.13  Distrib 5.6.13, for osx10.6 (i386)
--
-- Host: localhost    Database: altage_gastrocmd
-- ------------------------------------------------------
-- Server version	5.5.34

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
-- Table structure for table `Aversion`
--

DROP TABLE IF EXISTS `Aversion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Aversion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomAversion` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `couleurAversion` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Aversion`
--

LOCK TABLES `Aversion` WRITE;
/*!40000 ALTER TABLE `Aversion` DISABLE KEYS */;
INSERT INTO `Aversion` VALUES (1,'Végétarien','#FFFFFF'),(2,'S/porc\rS/agneau','#FFFFFF'),(3,'S/agneau','#FFFFFF'),(4,'S/abats','#FFFFFF'),(5,'S/poisson','#FFFFFF'),(6,'S/œuf','#FFFFFF'),(7,'S/fromage','#FFFFFF'),(8,'S/riz','#FFFFFF'),(9,'S/polenta','#FFFFFF'),(10,'S/céréales','#FFFFFF'),(11,'S/légumineuses','#FFFFFF'),(12,'S/tomates','#FFFFFF'),(13,'S/choux','#FFFFFF'),(14,'S/poivrons','#FFFFFF'),(15,'S/champignons','#FFFFFF');
/*!40000 ALTER TABLE `Aversion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Texture`
--

DROP TABLE IF EXISTS `Texture`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Texture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomTexture` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `couleurTexture` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Texture`
--

LOCK TABLES `Texture` WRITE;
/*!40000 ALTER TABLE `Texture` DISABLE KEYS */;
INSERT INTO `Texture` VALUES (1,'Normal (N)','#FFFFFF'),(2,'Coupé au couteau (CC)','#FFFFFF'),(3,'Viande Hachée (VH)','#CCCCCC'),(4,'Haché fin (Hfin)','#CCCCCC'),(5,'Mixé (M)','#C96600'),(6,'Mixé lisse (ML)','#C96600'),(7,'Liquide (L)','#5181BE'),(8,'Manger main (MM)','#FFFFFF');
/*!40000 ALTER TABLE `Texture` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Allergie`
--

DROP TABLE IF EXISTS `Allergie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Allergie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomAllergie` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `couleurAllergie` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Allergie`
--

LOCK TABLES `Allergie` WRITE;
/*!40000 ALTER TABLE `Allergie` DISABLE KEYS */;
INSERT INTO `Allergie` VALUES (1,'Soja','#000000'),(2,'Céleri','#000000'),(3,'Oeuf','#000000'),(4,'Fruits de mer','#000000'),(5,'Fruits oléagineux (les noix, les noisettes, l’arachide, etc…)','#000000'),(6,'Sésame','#000000'),(7,'Fruits à pépins et/ou noyaux  (les fraises, les pommes, etc…)','#000000'),(8,'Fruits exotiques (le kiwi, etc…)','#000000');
/*!40000 ALTER TABLE `Allergie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Regime`
--

DROP TABLE IF EXISTS `Regime`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Regime` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomRegime` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `couleurRegime` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Regime`
--

LOCK TABLES `Regime` WRITE;
/*!40000 ALTER TABLE `Regime` DISABLE KEYS */;
INSERT INTO `Regime` VALUES (1,'Normal (N)','#FFFFFF'),(2,'Léger (L)','#FFFFFF'),(3,'Sans résidu large (SRL)','#E53F37'),(4,'Sans résidu strict SRS)','#E53F37'),(5,'Diabétique (DB)','#5CB150'),(6,'Hypocalorique (Hypo)','#FEF84F'),(7,'Pauvre en sel (↘NaCl)','#E54998'),(8,'Pauvre en potasium (↘K)','#7F64A3'),(9,'Enrichi (HPHC)','#7FF9FB');
/*!40000 ALTER TABLE `Regime` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-07-25  8:40:30
