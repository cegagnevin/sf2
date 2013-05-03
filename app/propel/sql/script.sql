-- MySQL dump 10.13 Distrib 5.1.41, for debian-linux-gnu (i486)
--
-- Host: localhost Database: licweb
-- ------------------------------------------------------
-- Server version 5.1.41-3ubuntu12

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
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
/*!40101 SET @saved_cs_client = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comment` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`author` varchar(100) NOT NULL,
`message` varchar(1000) NOT NULL,
`idLocation` int(11) NOT NULL,
PRIMARY KEY (`id`),
KEY `comment_FI_1` (`idLocation`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment`
--

LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
INSERT INTO `comment` VALUES (1,'Davids650','Seulement une étoile en moins à cause des 
chaises en plastique !!!! Pour le reste, merci à la ville de Clermont de nous avoir 
permis d\'en avoir un !',2),(2,'saquourra','Eh oui nous aussi en auvergne nous avons un 
zénith! Déjà très esthetique de l\'exterieur, il en est tout autant de l\'interieur. Ce zenith permet enfin de recevoir des grandes stars, comme par exemple 
Lenny Kravitz en mai 2009. Seul bémol, le manque d\'explication sur le site au niveau 
de l\'emplacement des places, on a du mal à s\'y retrouver.',2),(3,'Guillaume','Petite 
salle avec une très bonne programmation. N\'hésitez pas à prendre la carte annuelle.',1);
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
/*!40101 SET @saved_cs_client = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `location` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`name` varchar(100) NOT NULL,
`street` varchar(100) NOT NULL,
`zipcode` varchar(5) NOT NULL,
`city` varchar(100) NOT NULL,
`presentation` varchar(1000) DEFAULT NULL,
`phoneNumber` varchar(10) DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `location`
--

LOCK TABLES `location` WRITE;
/*!40000 ALTER TABLE `location` DISABLE KEYS */;
INSERT INTO `location` VALUES (1,'Coopérative de mai','rue Serge-
Gainsbourg','63000','Clermont Ferrand','Première scène de musiques actuelles de Clermont-
Ferrand mais aussi de toute la région Auvergne, elle se situe à  une place stratégique 
dans la ville, place du 1er Mai, sur les vestiges de l\'ancienne coopérative Michelin : 
à  dix minutes du centre ville.','0473144800'),(2,'Zénith d\'Auvergne','Plaine de 
Sarliève','63808','Cournon d\'Auvergne','Intégré à  l\'ensemble Grande Halle d\'Auvergne, 
à  laquelle il donne une signature architecturale forte avec sa silhouette en forme de 
cheminée de volcan et ses hublots circulaires, le Zénith d\'Auvergne est une salle de 
spectacle qui obéit à  sa propre programmation, indépendamment des autres manifestations 
programmées à  la Grande Halle.','0473772424');
/*!40000 ALTER TABLE `location` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-04-12 15:15:13
