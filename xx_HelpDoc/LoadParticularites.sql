USE `altage_gastrocmd`;

--
-- Dumping data for table `Texture`
--

LOCK TABLES `Texture` WRITE;
/*!40000 ALTER TABLE `Texture` DISABLE KEYS */;
INSERT INTO `Texture` VALUES (1,'Normal (N)','#FFFFFF'),(2,'Coupé au couteau (CC)','#FFFFFF'),(3,'Viande Hachée (VH)','#CCCCCC'),(4,'Haché fin (Hfin)','#CCCCCC'),(5,'Mixé (M)','#C96600'),(6,'Mixé lisse (ML)','#C96600'),(7,'Liquide (L)','#5181BE'),(8,'Manger main (MM)','#FFFFFF');
/*!40000 ALTER TABLE `Texture` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `Aversion`
--

LOCK TABLES `Aversion` WRITE;
/*!40000 ALTER TABLE `Aversion` DISABLE KEYS */;
INSERT INTO `Aversion` VALUES (1,'Végétarien','#FFFFFF'),(2,'S/porc\rS/agneau','#FFFFFF'),(3,'S/agneau','#FFFFFF'),(4,'S/abats','#FFFFFF'),(5,'S/poisson','#FFFFFF'),(6,'S/œuf','#FFFFFF'),(7,'S/fromage','#FFFFFF'),(8,'S/riz','#FFFFFF'),(9,'S/polenta','#FFFFFF'),(10,'S/céréales','#FFFFFF'),(11,'S/légumineuses','#FFFFFF'),(12,'S/tomates','#FFFFFF'),(13,'S/choux','#FFFFFF'),(14,'S/poivrons','#FFFFFF'),(15,'S/champignons','#FFFFFF');
/*!40000 ALTER TABLE `Aversion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `Allergie`
--

LOCK TABLES `Allergie` WRITE;
/*!40000 ALTER TABLE `Allergie` DISABLE KEYS */;
INSERT INTO `Allergie` VALUES (1,'Soja','#000000'),(2,'Céleri','#000000'),(3,'Oeuf','#000000'),(4,'Fruits de mer','#000000'),(5,'Fruits oléagineux (les noix, les noisettes, l’arachide, etc…)','#000000'),(6,'Sésame','#000000'),(7,'Fruits à pépins et/ou noyaux  (les fraises, les pommes, etc…)','#000000'),(8,'Fruits exotiques (le kiwi, etc…)','#000000');
/*!40000 ALTER TABLE `Allergie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `Regime`
--

LOCK TABLES `Regime` WRITE;
/*!40000 ALTER TABLE `Regime` DISABLE KEYS */;
INSERT INTO `Regime` VALUES (1,'Normal (N)','#FFFFFF'),(2,'Léger (L)','#FFFFFF'),(3,'Sans résidu large (SRL)','#E53F37'),(4,'Sans résidu strict SRS)','#E53F37'),(5,'Diabétique (DB)','#5CB150'),(6,'Hypocalorique (Hypo)','#FEF84F'),(7,'Pauvre en sel (↘NaCl)','#E54998'),(8,'Pauvre en potasium (↘K)','#7F64A3'),(9,'Enrichi (HPHC)','#7FF9FB');
/*!40000 ALTER TABLE `Regime` ENABLE KEYS */;
UNLOCK TABLES;
