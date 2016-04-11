CREATE DATABASE  IF NOT EXISTS `financas` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `financas`;
-- MySQL dump 10.14  Distrib 5.5.40-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: financas
-- ------------------------------------------------------
-- Server version	5.5.40-MariaDB

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
-- Table structure for table `movimentacao`
--

DROP TABLE IF EXISTS `movimentacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movimentacao` (
  `id_movimentacao` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `des_movimentacao` varchar(200) NOT NULL,
  `movimentacao_tipo` varchar(4) NOT NULL,
  `dt_movimentacao` date NOT NULL,
  `custo` float NOT NULL,
  `stat` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_movimentacao`),
  KEY `id_movimentacao_tipo` (`movimentacao_tipo`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `movimentacao_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movimentacao`
--

LOCK TABLES `movimentacao` WRITE;
/*!40000 ALTER TABLE `movimentacao` DISABLE KEYS */;
INSERT INTO `movimentacao` VALUES (3,2,'1','RF','4212-04-01',4242,1),(4,2,'dadwad','RF','1312-01-01',4214,1),(6,2,'roupas','RF','2016-04-06',133,1),(8,2,'1','RV','2016-02-06',1588,1),(9,2,'5','RV','2016-02-06',20144,1),(10,2,'5','RV','2016-02-06',20144,1),(11,2,'calÃ§as','RV','1233-02-06',213,1),(15,4,'xD','RF','2016-03-08',123,1),(16,4,'xD','RF','2015-02-08',23231,1),(17,2,'sapatos','DF','2015-01-10',2321,1),(18,2,'tenis','RF','2016-06-10',1523,1),(19,2,'tenis','DF','2016-04-10',20124,1),(20,2,'caderno','DF','2016-04-10',25,1),(21,2,'cadeira','DF','2016-04-10',99,1),(22,2,'mesa','DF','2016-04-10',50000,1),(23,2,'calÃ§as','DF','2016-04-10',9000,1),(24,2,'despesa variavel nova','DV','2016-02-10',2014,1);
/*!40000 ALTER TABLE `movimentacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(100) DEFAULT NULL,
  `email_usuario` varchar(100) NOT NULL,
  `senha_usuario` varchar(100) NOT NULL,
  `sobrenome_usuario` varchar(45) DEFAULT NULL,
  `telefone_usuario` varchar(45) DEFAULT NULL,
  `stat` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'admin','admin@admin.com.br','admin',NULL,NULL,1),(2,'','erick.maeda','123','','',1),(3,'Erick','erick.maeda@uwadhuahduawd.com','123123','123123','',1),(4,'lulu','lulu.email@','123','','',1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-10 20:57:36
