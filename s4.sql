-- MySQL dump 10.13  Distrib 5.7.29, for Linux (x86_64)
--
-- Host: localhost    Database: s4
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
-- Table structure for table `Admin`
--

DROP TABLE IF EXISTS `Admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(1024) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Admin`
--

LOCK TABLES `Admin` WRITE;
/*!40000 ALTER TABLE `Admin` DISABLE KEYS */;
INSERT INTO `Admin` VALUES (1,'testadmin','$2y$10$XOIiOrKlBKrdFCvCkIknt.hPNd1912JEa0ZmtTdl/AwlJ58FhPnKC');
/*!40000 ALTER TABLE `Admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Avis`
--

DROP TABLE IF EXISTS `Avis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Avis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire` varchar(4096) NOT NULL,
  `date` varchar(2048) DEFAULT NULL,
  `prenom` varchar(255) NOT NULL,
  `formation_effectue` varchar(512) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Avis`
--

LOCK TABLES `Avis` WRITE;
/*!40000 ALTER TABLE `Avis` DISABLE KEYS */;
/*!40000 ALTER TABLE `Avis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Candidat`
--

DROP TABLE IF EXISTS `Candidat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Candidat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) NOT NULL,
  `nomfamille` varchar(255) NOT NULL,
  `planning_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adresse` varchar(512) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `financement` varchar(2048) NOT NULL,
  `nub` varchar(255) DEFAULT NULL,
  `nubpole` varchar(255) DEFAULT NULL,
  `souhait` varchar(512) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Candidat`
--

LOCK TABLES `Candidat` WRITE;
/*!40000 ALTER TABLE `Candidat` DISABLE KEYS */;
/*!40000 ALTER TABLE `Candidat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Formation`
--

DROP TABLE IF EXISTS `Formation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Formation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) CHARACTER SET utf8 NOT NULL,
  `dure` int(11) NOT NULL,
  `cout` int(11) NOT NULL,
  `prerequis_id` int(11) DEFAULT NULL,
  `img` varchar(4096) NOT NULL,
  `nbr_place` int(11) NOT NULL,
  `presentation` varchar(4096) CHARACTER SET utf8 NOT NULL,
  `public_vise` varchar(2048) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Formation`
--

LOCK TABLES `Formation` WRITE;
/*!40000 ALTER TABLE `Formation` DISABLE KEYS */;
/*!40000 ALTER TABLE `Formation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Inscription`
--

DROP TABLE IF EXISTS `Inscription`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Inscription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `etat` varchar(255) CHARACTER SET utf8 NOT NULL,
  `planning_id` int(11) NOT NULL,
  `candidat_id` int(11) NOT NULL,
  `financement` varchar(512) CHARACTER SET utf8 NOT NULL,
  `souhait` varchar(512) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Inscription`
--

LOCK TABLES `Inscription` WRITE;
/*!40000 ALTER TABLE `Inscription` DISABLE KEYS */;
/*!40000 ALTER TABLE `Inscription` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Page`
--

DROP TABLE IF EXISTS `Page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Page` (
  `presentation` varchar(4096) CHARACTER SET utf8 NOT NULL,
  `img1` varchar(4096) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Page`
--

LOCK TABLES `Page` WRITE;
/*!40000 ALTER TABLE `Page` DISABLE KEYS */;
INSERT INTO `Page` VALUES ('  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas semper egestas orci, eget feugiat ipsum porta sodales. Nulla ultrices at metus et eleifend. Duis molestie condimentum metus at faucibus. Nullam scelerisque lectus quis augue dignissim, vitae mollis nibh dictum. Aliquam faucibus nibh nec aliquet lobortis. Fusce eleifend dictum turpis molestie sodales. Suspendisse eget nibh egestas, varius libero hendrerit, finibus dolor. Quisque cursus risus a est sagittis pellentesque. Nunc nec tortor et lectus vestibulum pretium nec vel massa. Ut faucibus dapibus sapien, eget porta diam finibus non. Aenean eu orci nec augue laoreet scelerisque vitae quis nulla. Sed fringilla ipsum sem, sed scelerisque ligula eleifend et. Nullam nec dolor tellus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus porta ante lacus, et finibus nibh imperdiet a. Duis posuere, neque nec tempor elementum, lacus leo accumsan neque, ut elementum ex ex in nisi.  Fusce ornare varius nisi ut lacinia. Sed vitae ornare tortor, vel aliquam est. Donec eu lorem ultrices sapien blandit scelerisque eget id mauris. Curabitur auctor egestas metus, sit amet rutrum risus rhoncus vitae. Vivamus porttitor, lorem at cursus tincidunt, felis felis blandit turpis, sit amet rhoncus dolor nisi et dolor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut sodales tempus nulla id tincidunt. Aliquam nisi massa, egestas quis erat sed, fermentum vulputate tellus. Vestibulum facilisis odio odio, at consequat ligula aliquet in. Maecenas pulvinar felis et consectetur pellentesque. Quisque suscipit quis dui at ullamcorper. Aliquam nulla mi, laoreet sit amet ullamcorper eget, cursus vitae tortor. ','./img/img1.png','+33 6 87 90 56 45 67','batpi@gmail.com','20 rue Abbé Gregoire, Grenoble');
/*!40000 ALTER TABLE `Page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Planning`
--

DROP TABLE IF EXISTS `Planning`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Planning` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `debut` varchar(255) CHARACTER SET utf8 NOT NULL,
  `fin` varchar(255) NOT NULL,
  `formation_id` int(11) NOT NULL,
  `nbr_place` int(11) NOT NULL,
  `exament` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Planning`
--

LOCK TABLES `Planning` WRITE;
/*!40000 ALTER TABLE `Planning` DISABLE KEYS */;
/*!40000 ALTER TABLE `Planning` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Prerequis`
--

DROP TABLE IF EXISTS `Prerequis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Prerequis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `formation_id` int(11) NOT NULL,
  `prerequis` varchar(4096) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Prerequis`
--

LOCK TABLES `Prerequis` WRITE;
/*!40000 ALTER TABLE `Prerequis` DISABLE KEYS */;
/*!40000 ALTER TABLE `Prerequis` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-03-08  6:50:20
