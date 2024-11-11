CREATE DATABASE  IF NOT EXISTS `devweb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `devweb`;
-- MySQL dump 10.13  Distrib 8.0.40, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: devweb
-- ------------------------------------------------------
-- Server version	8.0.40

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
-- Table structure for table `estudo`
--

DROP TABLE IF EXISTS `estudo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estudo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `cep` varchar(9) DEFAULT NULL,
  `bairro` varchar(20) DEFAULT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `nivel` char(1) DEFAULT NULL,
  `sobrenome` varchar(20) DEFAULT NULL,
  `texto` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudo`
--

LOCK TABLES `estudo` WRITE;
/*!40000 ALTER TABLE `estudo` DISABLE KEYS */;
INSERT INTO `estudo` VALUES (1,'admin','admin','admin',NULL,NULL,NULL,NULL,NULL,NULL,'a',NULL,''),(11,'Eduardo1 Ventura','85682642',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'u',NULL,NULL),(16,'Eduardo4 Ventura','85682642',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'u',NULL,NULL),(18,'13','13','123','14214','124','124124','12414','1241','142','u','123',NULL),(19,'11','11','eduardo','2299558','eduaaa@gmail.com','28909086','recanto','cabo frio','rio de janeiro','u',NULL,NULL),(20,'15','15','edu','412','123','412','4212','4124','2412','u','123',NULL),(21,'Edulopes22','22021999','Eduardo','22029','Eduventuralopes@gmail.com','23939820','recanto','cabofrio','rio de janeiro','a','Ventura','safjopiajsfiopajsfpio´jaqsfiop´jhsapio´fjhaip´fjhaipsófhjpáshjfp´sahfpashfpsíhafpi´hap´fhasp´fhípsahp´fihasip´fghasip´fhjaps´fhjaipósfháphfsp´´afiopshpíashfgpáhnsvpiáhnsíopfvhnsaoidbfnvaosidbgnvosiuajzghnbdvopuiasijbhgndasopiujgbnvaso'),(26,'12','12','12','123','123','123','1234','123','241','u','123','gadgapvmikopamngiopvamnsopfgi´vjansiop´gfjvnasiop´fgjvnmaosipgjnvmopaisgv'),(27,'43','255',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'u',NULL,NULL);
/*!40000 ALTER TABLE `estudo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-11-06 15:20:31
