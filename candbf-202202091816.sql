-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: candbf
-- ------------------------------------------------------
-- Server version	5.7.26

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
-- Table structure for table `comptes`
--

DROP TABLE IF EXISTS `comptes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comptes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(64) DEFAULT NULL,
  `mot_de_passe` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comptes`
--

LOCK TABLES `comptes` WRITE;
/*!40000 ALTER TABLE `comptes` DISABLE KEYS */;
INSERT INTO `comptes` VALUES (1,'Abdoul Rachid COMPAORE','$2y$10$ueCIFCLuuuIeatUXIoozwuBC7EPfkF2zKvngHYlfwc5Wc66FkNgUW',NULL,NULL,NULL),(2,'Abdoul Rachid COMPAORE','$2y$10$7RZds0g3MgZpI4sbD5ps0.V0ZPsdNAYLLBmsFZsM3X5fTui1q3qUG',NULL,NULL,NULL);
/*!40000 ALTER TABLE `comptes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enregistrements`
--

DROP TABLE IF EXISTS `enregistrements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enregistrements` (
  `user_id` bigint(20) unsigned NOT NULL,
  `offre_id` int(11) NOT NULL,
  `date_enreg` date DEFAULT NULL,
  `description` varchar(256) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`,`offre_id`),
  UNIQUE KEY `user_id` (`user_id`),
  KEY `enregistrements_FK` (`offre_id`),
  CONSTRAINT `enregistrements_FK` FOREIGN KEY (`offre_id`) REFERENCES `offres` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `enregistrements_FK_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enregistrements`
--

LOCK TABLES `enregistrements` WRITE;
/*!40000 ALTER TABLE `enregistrements` DISABLE KEYS */;
/*!40000 ALTER TABLE `enregistrements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `offres`
--

DROP TABLE IF EXISTS `offres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `offres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `compte_id` int(11) NOT NULL,
  `ville_id` int(11) DEFAULT NULL,
  `nom_offre` varchar(128) DEFAULT NULL,
  `contact_entreprise` varchar(256) DEFAULT NULL,
  `date_debut` datetime DEFAULT NULL,
  `date_fin` datetime DEFAULT NULL,
  `type` varchar(64) DEFAULT NULL,
  `nom_entreprise` varchar(256) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `offres_FK` (`compte_id`),
  KEY `offres_FK_1` (`ville_id`),
  CONSTRAINT `offres_FK` FOREIGN KEY (`compte_id`) REFERENCES `comptes` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `offres_FK_1` FOREIGN KEY (`ville_id`) REFERENCES `villes` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `offres`
--

LOCK TABLES `offres` WRITE;
/*!40000 ALTER TABLE `offres` DISABLE KEYS */;
INSERT INTO `offres` VALUES (1,1,7,'Offre de Stage','secuetgedhb','2022-02-08 00:00:00','2022-03-08 00:00:00','CDI','Orange BF',NULL,NULL,NULL),(2,2,7,'Offre de formation','Bobo','2022-02-08 00:00:00','2022-02-08 00:00:00','CDI','Orange BF',NULL,NULL,NULL);
/*!40000 ALTER TABLE `offres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `compte_id` int(11) DEFAULT NULL,
  `nom` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_naissances` date DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `users_FK` (`compte_id`),
  CONSTRAINT `users_FK` FOREIGN KEY (`compte_id`) REFERENCES `comptes` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'','',NULL,NULL,'Abdoul Rachid COMPAORE','abdoulrachid.c9@gmail.com',NULL,'$2y$10$ueCIFCLuuuIeatUXIoozwuBC7EPfkF2zKvngHYlfwc5Wc66FkNgUW',NULL,'2022-02-08 20:07:52','2022-02-08 20:07:52'),(2,2,NULL,NULL,NULL,NULL,'Abdoul Rachid COMPAORE','abdoulrachid.c7@gmail.com',NULL,'$2y$10$7RZds0g3MgZpI4sbD5ps0.V0ZPsdNAYLLBmsFZsM3X5fTui1q3qUG',NULL,'2022-02-09 11:27:29','2022-02-09 11:27:29');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `villes`
--

DROP TABLE IF EXISTS `villes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `villes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_ville` varchar(64) DEFAULT NULL,
  `description_ville` varchar(128) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `villes`
--

LOCK TABLES `villes` WRITE;
/*!40000 ALTER TABLE `villes` DISABLE KEYS */;
INSERT INTO `villes` VALUES (7,'Bobo-Dioulasso',NULL,NULL,NULL,NULL),(8,'Ouagadougou',NULL,NULL,NULL,NULL),(9,'Banfora',NULL,NULL,NULL,NULL),(10,'Boromo',NULL,NULL,NULL,NULL),(11,'Boulsa',NULL,NULL,NULL,NULL),(12,'Boussé',NULL,NULL,NULL,NULL),(13,'Dano',NULL,NULL,NULL,NULL),(14,'Dédougou',NULL,NULL,NULL,NULL),(15,'Diapaga',NULL,NULL,NULL,NULL),(16,'Diébougou',NULL,NULL,NULL,NULL),(17,'Djibo',NULL,NULL,NULL,NULL),(18,'Dori',NULL,NULL,NULL,NULL),(19,'Fada NGourma',NULL,NULL,NULL,NULL),(20,'Garango',NULL,NULL,NULL,NULL),(21,'Gourcy',NULL,NULL,NULL,NULL),(22,'Houndé',NULL,NULL,NULL,NULL),(23,'Kaya',NULL,NULL,NULL,NULL),(24,'Khyon',NULL,NULL,NULL,NULL),(25,'Kokologo',NULL,NULL,NULL,NULL),(26,'Kombissiri',NULL,NULL,NULL,NULL),(27,'Kongoussi',NULL,NULL,NULL,NULL),(28,'Kordié',NULL,NULL,NULL,NULL),(29,'Koudougou',NULL,NULL,NULL,NULL),(30,'Kouka',NULL,NULL,NULL,NULL),(31,'Koupéla',NULL,NULL,NULL,NULL),(32,'Léo',NULL,NULL,NULL,NULL),(33,'Manga',NULL,NULL,NULL,NULL),(34,'Nouna',NULL,NULL,NULL,NULL),(35,'Orodara',NULL,NULL,NULL,NULL),(36,'Ouahigouya',NULL,NULL,NULL,NULL),(37,'Ouargaye',NULL,NULL,NULL,NULL),(38,'Pama',NULL,NULL,NULL,NULL),(39,'Pissila',NULL,NULL,NULL,NULL),(40,'Po^',NULL,NULL,NULL,NULL),(41,'Pouytenga',NULL,NULL,NULL,NULL),(42,'Réo',NULL,NULL,NULL,NULL),(43,'Solenzo',NULL,NULL,NULL,NULL),(44,'Tanghin-Dassouri',NULL,NULL,NULL,NULL),(45,'Tenkodogo',NULL,NULL,NULL,NULL),(46,'Titao',NULL,NULL,NULL,NULL),(47,'Tougan',NULL,NULL,NULL,NULL),(48,'Yako',NULL,NULL,NULL,NULL),(49,'Ziniaré',NULL,NULL,NULL,NULL),(50,'Zorgho',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `villes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'candbf'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-02-09 18:16:09
