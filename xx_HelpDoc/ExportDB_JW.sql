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
-- Table structure for table `Client`
--

DROP TABLE IF EXISTS `Client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastName` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `firstName` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `entryDate` date NOT NULL,
  `leaveDate` date DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Client`
--

LOCK TABLES `Client` WRITE;
/*!40000 ALTER TABLE `Client` DISABLE KEYS */;
/*!40000 ALTER TABLE `Client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Collaborateur`
--

DROP TABLE IF EXISTS `Collaborateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Collaborateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `siteId` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `firstName` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `entryDate` date NOT NULL,
  `leaveDate` date DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Collaborateur`
--

LOCK TABLES `Collaborateur` WRITE;
/*!40000 ALTER TABLE `Collaborateur` DISABLE KEYS */;
/*!40000 ALTER TABLE `Collaborateur` ENABLE KEYS */;
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
-- Table structure for table `User`
--

DROP TABLE IF EXISTS `User`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `User` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `longName` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `npa` int(11) NOT NULL,
  `city` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2DA17977F85E0677` (`username`),
  UNIQUE KEY `UNIQ_2DA17977E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `User`
--

LOCK TABLES `User` WRITE;
/*!40000 ALTER TABLE `User` DISABLE KEYS */;
INSERT INTO `User` VALUES (1,'jowa','b04ca7535f3ea8ace5efe04a0a2950ea','2000Neuchatel','info@jowamedia.ch',1,'joel walther','ch. des Pavés 67',2000,'Neuchâtel','079401579');
/*!40000 ALTER TABLE `User` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client_allergie`
--

DROP TABLE IF EXISTS `client_allergie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client_allergie` (
  `client_id` int(11) NOT NULL,
  `allergie_id` int(11) NOT NULL,
  PRIMARY KEY (`client_id`,`allergie_id`),
  KEY `IDX_303EAE8F19EB6921` (`client_id`),
  KEY `IDX_303EAE8F7C86304A` (`allergie_id`),
  CONSTRAINT `FK_303EAE8F7C86304A` FOREIGN KEY (`allergie_id`) REFERENCES `Allergie` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_303EAE8F19EB6921` FOREIGN KEY (`client_id`) REFERENCES `Client` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client_allergie`
--

LOCK TABLES `client_allergie` WRITE;
/*!40000 ALTER TABLE `client_allergie` DISABLE KEYS */;
/*!40000 ALTER TABLE `client_allergie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client_aversion`
--

DROP TABLE IF EXISTS `client_aversion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client_aversion` (
  `client_id` int(11) NOT NULL,
  `aversion_id` int(11) NOT NULL,
  PRIMARY KEY (`client_id`,`aversion_id`),
  KEY `IDX_75F5433419EB6921` (`client_id`),
  KEY `IDX_75F5433452EBB767` (`aversion_id`),
  CONSTRAINT `FK_75F5433452EBB767` FOREIGN KEY (`aversion_id`) REFERENCES `Aversion` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_75F5433419EB6921` FOREIGN KEY (`client_id`) REFERENCES `Client` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client_aversion`
--

LOCK TABLES `client_aversion` WRITE;
/*!40000 ALTER TABLE `client_aversion` DISABLE KEYS */;
/*!40000 ALTER TABLE `client_aversion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client_regime`
--

DROP TABLE IF EXISTS `client_regime`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client_regime` (
  `client_id` int(11) NOT NULL,
  `regime_id` int(11) NOT NULL,
  PRIMARY KEY (`client_id`,`regime_id`),
  KEY `IDX_FF2001CF19EB6921` (`client_id`),
  KEY `IDX_FF2001CF35E7D534` (`regime_id`),
  CONSTRAINT `FK_FF2001CF35E7D534` FOREIGN KEY (`regime_id`) REFERENCES `Regime` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_FF2001CF19EB6921` FOREIGN KEY (`client_id`) REFERENCES `Client` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client_regime`
--

LOCK TABLES `client_regime` WRITE;
/*!40000 ALTER TABLE `client_regime` DISABLE KEYS */;
/*!40000 ALTER TABLE `client_regime` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client_texture`
--

DROP TABLE IF EXISTS `client_texture`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client_texture` (
  `client_id` int(11) NOT NULL,
  `texture_id` int(11) NOT NULL,
  PRIMARY KEY (`client_id`,`texture_id`),
  KEY `IDX_D05B490F19EB6921` (`client_id`),
  KEY `IDX_D05B490F204BC3AC` (`texture_id`),
  CONSTRAINT `FK_D05B490F204BC3AC` FOREIGN KEY (`texture_id`) REFERENCES `Texture` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_D05B490F19EB6921` FOREIGN KEY (`client_id`) REFERENCES `Client` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client_texture`
--

LOCK TABLES `client_texture` WRITE;
/*!40000 ALTER TABLE `client_texture` DISABLE KEYS */;
/*!40000 ALTER TABLE `client_texture` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client_user`
--

DROP TABLE IF EXISTS `client_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client_user` (
  `client_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`client_id`,`user_id`),
  KEY `IDX_5C0F152B19EB6921` (`client_id`),
  KEY `IDX_5C0F152BA76ED395` (`user_id`),
  CONSTRAINT `FK_5C0F152BA76ED395` FOREIGN KEY (`user_id`) REFERENCES `User` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_5C0F152B19EB6921` FOREIGN KEY (`client_id`) REFERENCES `Client` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client_user`
--

LOCK TABLES `client_user` WRITE;
/*!40000 ALTER TABLE `client_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `client_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_F06D397057698A6A` (`role`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (1,'Administrateur','ROLE_ADMIN'),(2,'User du Site','ROLE_SITE_USER'),(3,'Cuisinier','ROLE_CUISINE'),(4,'Secrétaire','ROLE_SECRETAIRE');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_client`
--

DROP TABLE IF EXISTS `user_client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_client` (
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`client_id`),
  KEY `IDX_A2161F68A76ED395` (`user_id`),
  KEY `IDX_A2161F6819EB6921` (`client_id`),
  CONSTRAINT `FK_A2161F6819EB6921` FOREIGN KEY (`client_id`) REFERENCES `Client` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_A2161F68A76ED395` FOREIGN KEY (`user_id`) REFERENCES `User` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_client`
--

LOCK TABLES `user_client` WRITE;
/*!40000 ALTER TABLE `user_client` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_collaborateur`
--

DROP TABLE IF EXISTS `user_collaborateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_collaborateur` (
  `user_id` int(11) NOT NULL,
  `collaborateur_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`collaborateur_id`),
  KEY `IDX_99821183A76ED395` (`user_id`),
  KEY `IDX_99821183A848E3B1` (`collaborateur_id`),
  CONSTRAINT `FK_99821183A848E3B1` FOREIGN KEY (`collaborateur_id`) REFERENCES `Collaborateur` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_99821183A76ED395` FOREIGN KEY (`user_id`) REFERENCES `User` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_collaborateur`
--

LOCK TABLES `user_collaborateur` WRITE;
/*!40000 ALTER TABLE `user_collaborateur` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_collaborateur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_group`
--

DROP TABLE IF EXISTS `user_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_group` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`),
  KEY `IDX_8F02BF9DA76ED395` (`user_id`),
  KEY `IDX_8F02BF9DFE54D947` (`group_id`),
  CONSTRAINT `FK_8F02BF9DFE54D947` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_8F02BF9DA76ED395` FOREIGN KEY (`user_id`) REFERENCES `User` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_group`
--

LOCK TABLES `user_group` WRITE;
/*!40000 ALTER TABLE `user_group` DISABLE KEYS */;
INSERT INTO `user_group` VALUES (1,1);
/*!40000 ALTER TABLE `user_group` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-08-06 18:17:02
