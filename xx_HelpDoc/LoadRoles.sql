USE `altage_gastrocmd`;
--
-- Dumping data for table `Role`
--

LOCK TABLES `Role` WRITE;
/*!40000 ALTER TABLE `Role` DISABLE KEYS */;
INSERT INTO `Role` VALUES (38,'Administrateur','ROLE_ADMIN'),(39,'User du Site','ROLE_SITE_USER'),(40,'Cuisinier','ROLE_CUISINE'),(41,'Secrétaire','ROLE_SECRETAIRE');
/*!40000 ALTER TABLE `Role` ENABLE KEYS */;
UNLOCK TABLES;
