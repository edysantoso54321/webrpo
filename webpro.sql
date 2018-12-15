-- MySQL dump 10.16  Distrib 10.1.16-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: webpro
-- ------------------------------------------------------
-- Server version	10.1.16-MariaDB

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
-- Table structure for table `hasil`
--

DROP TABLE IF EXISTS `hasil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hasil` (
  `id` int(11) DEFAULT NULL,
  `noktp` varchar(50) NOT NULL,
  PRIMARY KEY (`noktp`),
  KEY `fk_hasil1` (`id`),
  CONSTRAINT `fk_hasil1` FOREIGN KEY (`id`) REFERENCES `kandidat` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk_hasil2` FOREIGN KEY (`noktp`) REFERENCES `pemilih` (`noktp`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hasil`
--

LOCK TABLES `hasil` WRITE;
/*!40000 ALTER TABLE `hasil` DISABLE KEYS */;
INSERT INTO `hasil` VALUES (1,'12342'),(3,'12345');
/*!40000 ALTER TABLE `hasil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kandidat`
--

DROP TABLE IF EXISTS `kandidat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kandidat` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `partai` varchar(100) NOT NULL,
  `visimisi` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kandidat`
--

LOCK TABLES `kandidat` WRITE;
/*!40000 ALTER TABLE `kandidat` DISABLE KEYS */;
INSERT INTO `kandidat` VALUES (1,'Joko widodo','Partai Demokrasi Indonesia Perjuangan','Terwujudnya Indonesia yang Berdaulat, Mandiri dan Berkepribadian Berlandaskan Gotong Royong'),(2,'Prabowo Subianto','Partai Gerindra','Terwujudnya Indonesia yang Berdaulat, Mandiri dan Berkepribadian Berlandaskan Gotong Royong'),(3,'Susilo Bambang Yudhoyono','Partai Demokrat','Mewujudkan Indonesia yang Lebih Sejahtera, Aman dan Damai dan Meletekkan Fondasi yang Lebih Kuat Bagi Indonesia yang Adil dan Demokratis');
/*!40000 ALTER TABLE `kandidat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `koment`
--

DROP TABLE IF EXISTS `koment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `koment` (
  `noktp` varchar(50) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `pesan` varchar(1000) DEFAULT NULL,
  KEY `fk` (`noktp`),
  KEY `fk1` (`id`),
  CONSTRAINT `fk` FOREIGN KEY (`noktp`) REFERENCES `pemilih` (`noktp`),
  CONSTRAINT `fk1` FOREIGN KEY (`id`) REFERENCES `kandidat` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `koment`
--

LOCK TABLES `koment` WRITE;
/*!40000 ALTER TABLE `koment` DISABLE KEYS */;
INSERT INTO `koment` VALUES ('12345',3,'lanjutkann'),('12342',1,'mantap jiiwa pak.');
/*!40000 ALTER TABLE `koment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pemilih`
--

DROP TABLE IF EXISTS `pemilih`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pemilih` (
  `noktp` varchar(50) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tgl` varchar(50) DEFAULT NULL,
  `jk` varchar(20) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`noktp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pemilih`
--

LOCK TABLES `pemilih` WRITE;
/*!40000 ALTER TABLE `pemilih` DISABLE KEYS */;
INSERT INTO `pemilih` VALUES ('12341','haikal','1111-11-11','Laki-laki','kawin','jatim'),('12342','edy','1111-11-11','Laki-laki','kawin','jatim'),('12343','faisal','1111-11-11','Laki-laki','belum kawin','jatim'),('12345','ana','1111-11-11','Perempuan','kawin','jatim'),('12346','panji','1111-11-11','Laki-laki','blum kawin','bekasi'),('12347','eko','1111-11-11','Laki-laki','kawin','jatim');
/*!40000 ALTER TABLE `pemilih` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `namaa` varchar(50) DEFAULT NULL,
  `namab` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('edy','santoso','edy@edy.com','edy'),('gian','adi pratama','gian@gmail.com','gian');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-14 20:22:35
