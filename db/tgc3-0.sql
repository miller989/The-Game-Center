-- MariaDB dump 10.17  Distrib 10.4.8-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: tgcdb
-- ------------------------------------------------------
-- Server version	10.4.8-MariaDB-1:10.4.8+maria~bionic-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `TgcUsers`
--

DROP TABLE IF EXISTS `TgcUsers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TgcUsers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `permissions` int(11) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TgcUsers`
--

LOCK TABLES `TgcUsers` WRITE;
/*!40000 ALTER TABLE `TgcUsers` DISABLE KEYS */;
INSERT INTO `TgcUsers` VALUES (1,'Will','Customer',3,'',''),(2,'Mark','Customer',3,'',''),(3,'Emma','Customer',3,'',''),(4,'Jae','Customer',3,'',''),(5,'Robert','Customer',3,'',''),(6,'Kyle','Administrator',2,'',''),(7,'Piper','Owner',1,'',''),(8,'Jake','Owner',1,'',''),(9,'Josh','Owner',1,'',''),(10,'hey',NULL,NULL,'ho',''),(11,'yo',NULL,NULL,'$2y$10$uKtfpoHcGJcRFML6lhYYkeVhpPBwEPzpZEbFY7uK8ON5jjyRrp4NC',''),(12,'hey',NULL,NULL,'ho',''),(13,'green',NULL,NULL,'$2y$10$..cPfSPYEvdDlWpvGPQLOOItGUqPkh6rDiT2Nwa1lvbJnSjFzRiBW',''),(14,'test2',NULL,NULL,'$2y$10$xFj8mmmC281o9BBE15T.GOpqMV2bO16nruPQ3hZSfFgcDrJbCSq.O',''),(15,'testuser1',NULL,NULL,'$2y$10$2XNeU.AjcGkPt6BZow0bweq/.7LmNVDozea.dqpPzfZMwHxkWrk9m',''),(16,'hihih',NULL,NULL,'$2y$10$Q0SFDcW4NGRaD0jXy/CU3OX.xk/yO/V.S0SBqpVrB.b9.dXLm0iS.',''),(17,'miller',NULL,NULL,'$2y$10$tt8nUaFiRMaP80J14ds9eetnJb.2fmpP0gsQ1R942H13fmynerbQO',''),(18,'hello',NULL,2,'$2y$10$aoyVzNgoQHwyWmuk15Rg.ezDTycvqrIc4EMm1Bgpy/XmxjNItRZ6G','');
/*!40000 ALTER TABLE `TgcUsers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discount`
--

DROP TABLE IF EXISTS `discount`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `discount` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `discount` int(11) NOT NULL,
  `game_id` mediumint(9) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discount`
--

LOCK TABLES `discount` WRITE;
/*!40000 ALTER TABLE `discount` DISABLE KEYS */;
/*!40000 ALTER TABLE `discount` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `name`
--

DROP TABLE IF EXISTS `name`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `name` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `name` char(10) DEFAULT NULL,
  `publisher` int(11) DEFAULT NULL,
  `price` mediumint(9) DEFAULT NULL,
  `rating` mediumint(9) DEFAULT NULL,
  `description` char(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `name`
--

LOCK TABLES `name` WRITE;
/*!40000 ALTER TABLE `name` DISABLE KEYS */;
INSERT INTO `name` VALUES (1,'GTAV',1,60,5,'test');
/*!40000 ALTER TABLE `name` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testtable`
--

DROP TABLE IF EXISTS `testtable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `testtable` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testtable`
--

LOCK TABLES `testtable` WRITE;
/*!40000 ALTER TABLE `testtable` DISABLE KEYS */;
/*!40000 ALTER TABLE `testtable` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-06 16:18:20
