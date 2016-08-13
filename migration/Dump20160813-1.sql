-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: suchak_mgt
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.8-MariaDB

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
-- Table structure for table `cmp_info`
--

DROP TABLE IF EXISTS `cmp_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cmp_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cmp_name` varchar(45) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `purchase_from` varchar(45) DEFAULT NULL,
  `remark` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cmp_info`
--

LOCK TABLES `cmp_info` WRITE;
/*!40000 ALTER TABLE `cmp_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `cmp_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_mst`
--

DROP TABLE IF EXISTS `company_mst`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_mst` (
  `cmp_id` int(11) NOT NULL AUTO_INCREMENT,
  `cmp_name` varchar(45) NOT NULL,
  `cmp_reg_no` varchar(45) DEFAULT NULL,
  `banner_img` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cmp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_mst`
--

LOCK TABLES `company_mst` WRITE;
/*!40000 ALTER TABLE `company_mst` DISABLE KEYS */;
INSERT INTO `company_mst` VALUES (1,'siliconbrain','sb123',NULL,'2016-06-24 08:09:47','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(2,'RD Construction','',NULL,'2016-07-29 18:58:08','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(3,'studio om','str123','ombanner','2016-08-01 05:23:47','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL);
/*!40000 ALTER TABLE `company_mst` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eq_accessories`
--

DROP TABLE IF EXISTS `eq_accessories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eq_accessories` (
  `eq_id` int(11) NOT NULL,
  `as_id` int(11) NOT NULL AUTO_INCREMENT,
  `as_name` varchar(45) DEFAULT NULL,
  `remark` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`as_id`),
  KEY `FK_EQASS_EQID_idx` (`eq_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='		';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eq_accessories`
--

LOCK TABLES `eq_accessories` WRITE;
/*!40000 ALTER TABLE `eq_accessories` DISABLE KEYS */;
INSERT INTO `eq_accessories` VALUES (1,1,'aaaa','','2016-07-12 05:37:59','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(1,2,'bbbbb','','2016-07-12 05:38:10','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL);
/*!40000 ALTER TABLE `eq_accessories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eq_category_mst`
--

DROP TABLE IF EXISTS `eq_category_mst`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eq_category_mst` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(45) DEFAULT NULL,
  `description` varchar(245) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cat_id`),
  UNIQUE KEY `cat_name_UNIQUE` (`cat_name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eq_category_mst`
--

LOCK TABLES `eq_category_mst` WRITE;
/*!40000 ALTER TABLE `eq_category_mst` DISABLE KEYS */;
INSERT INTO `eq_category_mst` VALUES (1,'electronic eqp','','2016-06-23 10:50:19','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL);
/*!40000 ALTER TABLE `eq_category_mst` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eq_enquiry_mst`
--

DROP TABLE IF EXISTS `eq_enquiry_mst`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eq_enquiry_mst` (
  `enq_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(45) DEFAULT NULL,
  `client_add` varchar(45) DEFAULT NULL,
  `client_email` varchar(45) DEFAULT NULL,
  `contact_no` varchar(45) DEFAULT NULL,
  `date_of_enquiry` datetime DEFAULT NULL,
  `time` varchar(45) DEFAULT NULL,
  `type_of_event` varchar(45) DEFAULT NULL,
  `from_date` datetime DEFAULT NULL,
  `to_date` datetime DEFAULT NULL,
  `event_add` varchar(45) DEFAULT NULL,
  `remainder` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`enq_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eq_enquiry_mst`
--

LOCK TABLES `eq_enquiry_mst` WRITE;
/*!40000 ALTER TABLE `eq_enquiry_mst` DISABLE KEYS */;
/*!40000 ALTER TABLE `eq_enquiry_mst` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipment_mst`
--

DROP TABLE IF EXISTS `equipment_mst`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipment_mst` (
  `eq_id` int(11) NOT NULL AUTO_INCREMENT,
  `eq_name` varchar(45) DEFAULT NULL,
  `serial_no` varchar(45) DEFAULT NULL,
  `model_no` varchar(45) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `purchase_date` datetime DEFAULT NULL,
  `purchase_from` varchar(45) DEFAULT NULL,
  `eq_photo` varchar(45) DEFAULT NULL,
  `remark` varchar(45) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `price_type` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`eq_id`),
  KEY `REF_CATID_idx` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipment_mst`
--

LOCK TABLES `equipment_mst` WRITE;
/*!40000 ALTER TABLE `equipment_mst` DISABLE KEYS */;
INSERT INTO `equipment_mst` VALUES (1,'camera','cam123','cam123',1,'2016-06-23 04:06:37','surat','','','25000','1','2016-06-23 10:51:11','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(2,'Projectors','proj123','proj123',1,'2016-07-01 10:07:46','Surat','projector for rent','projector for rent','12500','1','2016-07-01 04:36:58','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(3,'LedLight','lgt123','lgt123',1,'2016-07-05 11:07:36','Surat','test','test','35','2','2016-07-05 05:31:16','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(4,'laptop','lap123','lap123',1,'0000-00-00 00:00:00','Surat','testmultiple','testmultiple','15000','1','2016-07-05 17:59:15','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL);
/*!40000 ALTER TABLE `equipment_mst` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_client_invoice_dtl`
--

DROP TABLE IF EXISTS `event_client_invoice_dtl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_client_invoice_dtl` (
  `invoice_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) DEFAULT NULL,
  `inv_file_name` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `generated_by` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`invoice_id`)
) ENGINE=InnoDB AUTO_INCREMENT=305 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_client_invoice_dtl`
--

LOCK TABLES `event_client_invoice_dtl` WRITE;
/*!40000 ALTER TABLE `event_client_invoice_dtl` DISABLE KEYS */;
INSERT INTO `event_client_invoice_dtl` VALUES (1,2,'20160624-2_1.pdf','2016-06-24 14:26:15',NULL,'client123'),(2,2,'20160624-2_2.pdf','2016-06-24 14:28:15',NULL,'client123'),(3,2,'20160624-2_3.pdf','2016-06-24 14:30:04',NULL,'client123'),(4,2,'20160624-2_4.pdf','2016-06-24 14:33:35',NULL,'client123'),(5,1,'20160624-1_1.pdf','2016-06-24 17:16:41',NULL,'client123'),(6,6,'20160701-6_1.pdf','2016-07-04 15:53:57',NULL,'client123'),(7,6,'20160701-6_2.pdf','2016-07-04 15:54:15',NULL,'client123'),(8,6,'20160701-6_3.pdf','2016-07-04 16:14:37',NULL,'client123'),(9,10,'20160708-10_1.pdf','2016-07-11 14:09:19',NULL,'client123'),(10,10,'20160708-10_2.pdf','2016-07-11 14:09:31',NULL,'client123'),(11,10,'20160708-10_3.pdf','2016-07-11 14:12:48',NULL,'client123'),(12,10,'20160708-10_4.pdf','2016-07-11 15:08:13',NULL,'client123'),(13,10,'20160708-10_5.pdf','2016-07-11 15:10:02',NULL,'client123'),(14,2,'20160624-2_5.pdf','2016-07-14 23:04:09',NULL,'client123'),(15,10,'20160708-10_6.pdf','2016-07-14 23:04:29',NULL,'client123'),(16,8,'20160726-8_1.pdf','2016-07-16 12:28:37',NULL,'client123'),(17,8,'20160726-8_2.pdf','2016-07-16 12:29:08',NULL,'client123'),(18,8,'20160726-8_3.pdf','2016-07-16 12:29:35',NULL,'client123'),(19,8,'20160726-8_4.pdf','2016-07-16 12:32:56',NULL,'client123'),(20,8,'20160726-8_5.pdf','2016-07-16 12:35:07',NULL,'client123'),(21,12,'20160715-12_1.pdf','2016-07-16 13:27:55',NULL,'client123'),(22,12,'20160715-12_2.pdf','2016-07-16 13:27:59',NULL,'client123'),(23,12,'20160715-12_3.pdf','2016-07-16 14:34:11',NULL,'client123'),(24,12,'20160715-12_4.pdf','2016-07-16 15:05:20',NULL,'client123'),(25,12,'20160715-12_5.pdf','2016-07-16 16:18:04',NULL,'client123'),(26,4,'20160720-4_1.pdf','2016-07-25 15:05:51',NULL,'client123'),(27,5,'20160715-5_1.pdf','2016-07-25 16:49:31',NULL,'client123'),(28,5,'20160715-5_2.pdf','2016-07-25 16:50:18',NULL,'client123'),(29,5,'20160715-5_3.pdf','2016-07-25 16:52:21',NULL,'client123'),(30,2,'20160624-2_6.pdf','2016-07-25 17:12:27',NULL,'client123'),(31,12,'20160715-12_6.pdf','2016-07-27 16:39:42',NULL,'client123'),(32,12,'20160715-12_7.pdf','2016-07-27 16:56:27',NULL,'client123'),(33,12,'20160715-12_8.pdf','2016-07-27 16:57:39',NULL,'client123'),(34,12,'20160715-12_9.pdf','2016-07-27 17:01:26',NULL,'client123'),(35,12,'20160715-12_10.pdf','2016-07-27 17:49:12',NULL,'client123'),(36,12,'20160715-12_2.pdf','2016-07-27 17:53:42',NULL,'client123'),(37,12,'20160715-12_3.pdf','2016-07-27 18:03:55',NULL,'client123'),(38,12,'20160715-12_4.pdf','2016-07-27 18:05:12',NULL,'client123'),(39,11,'20160715-11_1.pdf','2016-07-27 18:10:06',NULL,'client123'),(40,12,'20160715-12_5.pdf','2016-07-27 18:28:21',NULL,'client123'),(41,12,'20160715-12_6.pdf','2016-07-27 18:30:26',NULL,'client123'),(42,12,'20160715-12_7.pdf','2016-07-27 18:31:38',NULL,'client123'),(43,12,'20160715-12_8.pdf','2016-07-27 18:43:36',NULL,'client123'),(44,11,'20160715-11_2.pdf','2016-07-27 23:01:33',NULL,'client123'),(45,12,'20160715-12_9.pdf','2016-07-27 23:16:01',NULL,'client123'),(46,12,'20160715-12_10.pdf','2016-07-27 23:18:35',NULL,'client123'),(47,12,'20160715-12_2.pdf','2016-07-27 23:20:59',NULL,'client123'),(48,12,'20160715-12_3.pdf','2016-07-27 23:22:29',NULL,'client123'),(49,12,'20160715-12_4.pdf','2016-07-27 23:23:07',NULL,'client123'),(50,12,'20160715-12_5.pdf','2016-07-27 23:27:18',NULL,'client123'),(51,12,'20160715-12_6.pdf','2016-07-27 23:36:34',NULL,'client123'),(52,15,'20160728-15_1.pdf','2016-07-28 14:16:41',NULL,'client123'),(53,15,'20160728-15_2.pdf','2016-07-28 14:17:45',NULL,'client123'),(54,3,'20160629-3_1.pdf','2016-07-28 14:21:00',NULL,'client123'),(55,3,'20160629-3_2.pdf','2016-07-28 14:30:09',NULL,'client123'),(56,3,'20160629-3_3.pdf','2016-07-28 14:30:49',NULL,'client123'),(57,3,'20160629-3_4.pdf','2016-07-28 14:31:37',NULL,'client123'),(58,3,'20160629-3_5.pdf','2016-07-28 14:33:34',NULL,'client123'),(59,3,'20160629-3_6.pdf','2016-07-28 14:34:59',NULL,'client123'),(60,3,'20160629-3_7.pdf','2016-07-28 14:35:36',NULL,'client123'),(61,3,'20160629-3_8.pdf','2016-07-28 14:36:33',NULL,'client123'),(62,3,'20160629-3_9.pdf','2016-07-28 14:37:19',NULL,'client123'),(63,3,'20160629-3_10.pdf','2016-07-28 14:38:28',NULL,'client123'),(64,3,'20160629-3_2.pdf','2016-07-28 14:41:35',NULL,'client123'),(65,3,'20160629-3_3.pdf','2016-07-28 14:48:43',NULL,'client123'),(66,3,'20160629-3_4.pdf','2016-07-28 14:51:42',NULL,'client123'),(67,3,'20160629-3_5.pdf','2016-07-28 14:57:49',NULL,'client123'),(68,3,'20160629-3_6.pdf','2016-07-28 14:58:16',NULL,'client123'),(69,3,'20160629-3_7.pdf','2016-07-28 15:01:03',NULL,'client123'),(70,3,'20160629-3_8.pdf','2016-07-28 15:02:47',NULL,'client123'),(71,3,'20160629-3_9.pdf','2016-07-28 15:04:43',NULL,'client123'),(72,3,'20160629-3_10.pdf','2016-07-28 15:05:15',NULL,'client123'),(73,3,'20160629-3_2.pdf','2016-07-28 15:06:14',NULL,'client123'),(74,3,'20160629-3_3.pdf','2016-07-28 15:06:52',NULL,'client123'),(75,3,'20160629-3_4.pdf','2016-07-28 15:09:51',NULL,'client123'),(76,3,'20160629-3_5.pdf','2016-07-28 15:18:04',NULL,'client123'),(77,15,'20160728-15_3.pdf','2016-07-28 15:18:27',NULL,'client123'),(78,3,'20160629-3_6.pdf','2016-07-28 15:26:07',NULL,'client123'),(79,15,'20160728-15_4.pdf','2016-07-28 15:26:30',NULL,'client123'),(80,15,'20160728-15_5.pdf','2016-07-28 15:26:48',NULL,'client123'),(81,15,'20160728-15_6.pdf','2016-07-28 15:27:15',NULL,'client123'),(82,15,'20160728-15_7.pdf','2016-07-28 15:29:10',NULL,'client123'),(83,15,'20160728-15_8.pdf','2016-07-28 15:29:37',NULL,'client123'),(84,15,'20160728-15_9.pdf','2016-07-28 15:48:46',NULL,'client123'),(85,2,'20160624-2_7.pdf','2016-07-28 15:55:22',NULL,'client123'),(86,15,'20160728-15_10.pdf','2016-07-28 16:12:58',NULL,'client123'),(87,15,'20160728-15_2.pdf','2016-07-28 16:13:25',NULL,'client123'),(88,15,'20160728-15_3.pdf','2016-07-28 16:16:39',NULL,'client123'),(89,15,'20160728-15_4.pdf','2016-07-28 16:18:20',NULL,'client123'),(90,15,'20160728-15_5.pdf','2016-07-28 16:19:23',NULL,'client123'),(91,15,'20160728-15_6.pdf','2016-07-28 16:25:27',NULL,'client123'),(92,15,'20160728-15_7.pdf','2016-07-28 16:27:00',NULL,'client123'),(93,15,'20160728-15_8.pdf','2016-07-28 16:30:19',NULL,'client123'),(94,2,'20160624-2_8.pdf','2016-07-29 00:51:54',NULL,'client123'),(95,2,'20160624-2_9.pdf','2016-07-29 00:55:09',NULL,'client123'),(96,2,'20160624-2_10.pdf','2016-07-29 00:58:59',NULL,'client123'),(97,2,'20160624-2_2.pdf','2016-07-29 01:00:35',NULL,'client123'),(98,2,'20160624-2_3.pdf','2016-07-29 01:06:45',NULL,'client123'),(99,2,'20160624-2_4.pdf','2016-07-29 01:07:45',NULL,'client123'),(100,2,'20160624-2_5.pdf','2016-07-29 01:08:21',NULL,'client123'),(101,2,'20160624-2_6.pdf','2016-07-29 01:08:55',NULL,'client123'),(102,2,'20160624-2_7.pdf','2016-07-29 01:09:31',NULL,'client123'),(103,2,'20160624-2_8.pdf','2016-07-29 01:12:09',NULL,'client123'),(104,2,'20160624-2_9.pdf','2016-07-29 01:14:18',NULL,'client123'),(105,2,'20160624-2_10.pdf','2016-07-29 01:15:14',NULL,'client123'),(106,2,'20160624-2_2.pdf','2016-07-29 01:16:09',NULL,'client123'),(107,2,'20160624-2_3.pdf','2016-07-29 01:16:35',NULL,'client123'),(108,15,'20160728-15_9.pdf','2016-07-29 16:53:05',NULL,'client123'),(109,2,'20160624-2_4.pdf','2016-07-29 16:53:32',NULL,'client123'),(110,2,'20160624-2_5.pdf','2016-07-29 16:54:27',NULL,'client123'),(111,2,'20160624-2_6.pdf','2016-07-29 16:56:44',NULL,'client123'),(112,2,'20160624-2_7.pdf','2016-07-29 16:57:44',NULL,'client123'),(113,2,'20160624-2_8.pdf','2016-07-29 16:58:18',NULL,'client123'),(114,2,'20160624-2_9.pdf','2016-07-29 17:00:26',NULL,'client123'),(115,2,'20160624-2_10.pdf','2016-07-29 17:00:49',NULL,'client123'),(116,2,'20160624-2_2.pdf','2016-07-29 17:05:16',NULL,'client123'),(117,2,'20160624-2_3.pdf','2016-07-29 17:13:10',NULL,'client123'),(118,2,'20160624-2_4.pdf','2016-07-29 17:20:35',NULL,'client123'),(119,2,'20160624-2_5.pdf','2016-07-29 17:21:57',NULL,'client123'),(120,2,'20160624-2_6.pdf','2016-07-29 17:29:50',NULL,'client123'),(121,2,'20160624-2_7.pdf','2016-07-29 17:34:35',NULL,'client123'),(122,2,'20160624-2_8.pdf','2016-07-29 17:45:47',NULL,'client123'),(123,2,'20160624-2_9.pdf','2016-07-29 17:49:36',NULL,'client123'),(124,2,'20160624-2_10.pdf','2016-07-29 18:21:32',NULL,'client123'),(125,2,'20160624-2_2.pdf','2016-07-29 18:24:22',NULL,'client123'),(126,2,'20160624-2_3.pdf','2016-07-29 18:24:47',NULL,'client123'),(127,2,'20160624-2_4.pdf','2016-07-29 18:25:54',NULL,'client123'),(128,2,'20160624-2_5.pdf','2016-07-29 18:27:19',NULL,'client123'),(129,2,'20160624-2_6.pdf','2016-07-29 18:29:34',NULL,'client123'),(130,2,'20160624-2_7.pdf','2016-07-29 18:30:22',NULL,'client123'),(131,2,'20160624-2_8.pdf','2016-07-29 18:31:16',NULL,'client123'),(132,2,'20160624-2_9.pdf','2016-07-29 22:38:39',NULL,'client123'),(133,2,'20160624-2_10.pdf','2016-07-29 22:39:29',NULL,'client123'),(134,2,'20160624-2_2.pdf','2016-07-29 22:40:27',NULL,'client123'),(135,2,'20160624-2_3.pdf','2016-07-29 22:41:30',NULL,'client123'),(136,2,'20160624-2_4.pdf','2016-07-29 22:42:26',NULL,'client123'),(137,2,'20160624-2_5.pdf','2016-07-29 22:43:09',NULL,'client123'),(138,2,'20160624-2_6.pdf','2016-07-29 22:43:30',NULL,'client123'),(139,2,'20160624-2_7.pdf','2016-07-29 22:44:16',NULL,'client123'),(140,2,'20160624-2_8.pdf','2016-07-29 23:19:36',NULL,'client123'),(141,2,'20160624-2_9.pdf','2016-07-29 23:21:25',NULL,'client123'),(142,15,'20160728-15_10.pdf','2016-07-30 11:54:57',NULL,'client123'),(143,2,'20160624-2_10.pdf','2016-08-01 09:53:05',NULL,'client123'),(144,29,'1.pdf','2016-08-01 14:11:25',NULL,'client123'),(145,29,'11.pdf','2016-08-01 14:14:07',NULL,'client123'),(146,29,'20160801-29_1.pdf','2016-08-01 14:31:58',NULL,'client123'),(147,29,'20160801-29_1.pdf','2016-08-01 14:32:25',NULL,'client123'),(148,29,'20160801-29_1.pdf','2016-08-01 14:32:58',NULL,'client123'),(149,29,'20160801-29_1.pdf','2016-08-01 14:51:37',NULL,'client123'),(150,2,'20160624-2_1.pdf','2016-08-05 12:07:06',NULL,'client123'),(151,36,'20160805-36_1.pdf','2016-08-06 17:17:18',NULL,'client123'),(152,15,'20160728-15_2.pdf','2016-08-09 17:34:04',NULL,'client123'),(153,15,'20160728-15_3.pdf','2016-08-09 17:34:45',NULL,'client123'),(154,13,'20160815-13_1.pdf','2016-08-09 17:35:27',NULL,'client123'),(155,13,'20160815-13_2.pdf','2016-08-09 17:35:40',NULL,'client123'),(156,14,'20160810-14_1.pdf','2016-08-09 17:38:57',NULL,'client123'),(157,1,'20160624-1_2.pdf','2016-08-09 17:39:23',NULL,'client123'),(158,10,'20160708-10_7.pdf','2016-08-09 17:40:04',NULL,'client123'),(159,10,'20160708-10_8.pdf','2016-08-09 17:45:18',NULL,'client123'),(160,10,'20160708-10_9.pdf','2016-08-10 09:16:11',NULL,'client123'),(161,10,'20160708-10_10.pdf','2016-08-10 09:52:53',NULL,'client123'),(162,10,'20160708-10_2.pdf','2016-08-10 10:00:18',NULL,'client123'),(163,10,'20160708-10_3.pdf','2016-08-10 10:03:30',NULL,'client123'),(164,10,'20160708-10_4.pdf','2016-08-10 10:04:28',NULL,'client123'),(165,10,'20160708-10_5.pdf','2016-08-10 10:05:05',NULL,'client123'),(166,10,'20160708-10_6.pdf','2016-08-10 10:50:10',NULL,'client123'),(167,10,'20160708-10_7.pdf','2016-08-10 10:53:44',NULL,'client123'),(168,10,'20160708-10_8.pdf','2016-08-10 11:20:14',NULL,'client123'),(169,10,'20160708-10_9.pdf','2016-08-10 11:30:06',NULL,'client123'),(170,10,'20160708-10_10.pdf','2016-08-10 11:35:57',NULL,'client123'),(171,10,'20160708-10_2.pdf','2016-08-10 11:38:44',NULL,'client123'),(172,10,'20160708-10_3.pdf','2016-08-10 11:39:19',NULL,'client123'),(173,10,'20160708-10_4.pdf','2016-08-10 11:45:18',NULL,'client123'),(174,10,'20160708-10_5.pdf','2016-08-10 12:03:28',NULL,'client123'),(175,10,'20160708-10_6.pdf','2016-08-10 12:17:29',NULL,'client123'),(176,10,'20160708-10_7.pdf','2016-08-10 12:21:43',NULL,'client123'),(177,10,'20160708-10_8.pdf','2016-08-10 12:22:50',NULL,'client123'),(178,10,'20160708-10_9.pdf','2016-08-10 12:34:22',NULL,'client123'),(179,10,'20160708-10_10.pdf','2016-08-10 12:37:35',NULL,'client123'),(180,10,'20160708-10_2.pdf','2016-08-10 12:40:12',NULL,'client123'),(181,10,'20160708-10_3.pdf','2016-08-10 12:42:43',NULL,'client123'),(182,10,'20160708-10_4.pdf','2016-08-10 12:52:38',NULL,'client123'),(183,10,'20160708-10_5.pdf','2016-08-10 13:35:07',NULL,'client123'),(184,10,'20160708-10_6.pdf','2016-08-10 13:35:44',NULL,'client123'),(185,10,'20160708-10_7.pdf','2016-08-10 13:36:04',NULL,'client123'),(186,10,'20160708-10_8.pdf','2016-08-10 13:36:31',NULL,'client123'),(187,10,'20160708-10_9.pdf','2016-08-10 13:44:39',NULL,'client123'),(188,10,'20160708-10_10.pdf','2016-08-10 13:48:08',NULL,'client123'),(189,10,'20160708-10_2.pdf','2016-08-10 13:51:34',NULL,'client123'),(190,10,'20160708-10_3.pdf','2016-08-10 13:54:13',NULL,'client123'),(191,10,'20160708-10_4.pdf','2016-08-10 13:56:09',NULL,'client123'),(192,10,'20160708-10_5.pdf','2016-08-10 13:58:20',NULL,'client123'),(193,10,'20160708-10_6.pdf','2016-08-10 13:58:56',NULL,'client123'),(194,1,'20160624-1_3.pdf','2016-08-10 14:07:49',NULL,'client123'),(195,1,'20160624-1_4.pdf','2016-08-10 14:36:16',NULL,'client123'),(196,13,'20160815-13_3.pdf','2016-08-10 14:36:38',NULL,'client123'),(197,15,'20160728-15_4.pdf','2016-08-10 14:41:09',NULL,'client123'),(198,15,'20160728-15_5.pdf','2016-08-10 14:42:08',NULL,'client123'),(199,34,'20160810-34_1.pdf','2016-08-10 16:03:24',NULL,'client123'),(200,15,'20160728-15_6.pdf','2016-08-10 16:04:03',NULL,'client123'),(201,15,'20160728-15_7.pdf','2016-08-10 22:15:36',NULL,'client123'),(202,15,'20160728-15_8.pdf','2016-08-10 22:19:08',NULL,'client123'),(203,15,'20160728-15_9.pdf','2016-08-11 09:07:33',NULL,'client123'),(204,2,'20160624-2_1.pdf','2016-08-11 09:43:16',NULL,'client123'),(205,2,'20160624-2_1.pdf','2016-08-11 12:46:06',NULL,'client123'),(206,2,'20160624-2_1.pdf','2016-08-11 12:54:46',NULL,'client123'),(207,2,'20160624-2_1.pdf','2016-08-11 13:39:57',NULL,'client123'),(208,2,'20160624-2_1.pdf','2016-08-11 13:45:11',NULL,'client123'),(209,2,'20160624-2_1.pdf','2016-08-11 13:59:58',NULL,'client123'),(210,2,'20160624-2_1.pdf','2016-08-11 14:04:42',NULL,'client123'),(211,2,'20160624-2_1.pdf','2016-08-11 14:12:34',NULL,'client123'),(212,2,'20160624-2_1.pdf','2016-08-11 14:49:14',NULL,'client123'),(213,2,'20160624-2_1.pdf','2016-08-11 15:04:29',NULL,'client123'),(214,2,'20160624-2_1.pdf','2016-08-11 15:13:12',NULL,'client123'),(215,2,'20160624-2_1.pdf','2016-08-11 15:21:49',NULL,'client123'),(216,2,'20160624-2_1.pdf','2016-08-11 15:23:05',NULL,'client123'),(217,2,'20160624-2_1.pdf','2016-08-11 15:24:18',NULL,'client123'),(218,36,'20160805-36_1.pdf','2016-08-11 15:34:01',NULL,'client123'),(219,2,'20160624-2_1.pdf','2016-08-11 16:44:41',NULL,'client123'),(220,2,'20160624-2_1.pdf','2016-08-11 16:52:47',NULL,'client123'),(221,2,'20160624-2_1.pdf','2016-08-11 16:52:47',NULL,'client123'),(222,2,'20160624-2_1.pdf','2016-08-11 16:52:48',NULL,'client123'),(223,2,'20160624-2_1.pdf','2016-08-11 16:55:01',NULL,'client123'),(224,2,'20160624-2_1.pdf','2016-08-11 16:55:02',NULL,'client123'),(225,2,'20160624-2_1.pdf','2016-08-11 16:55:02',NULL,'client123'),(226,2,'20160624-2_1.pdf','2016-08-11 16:59:35',NULL,'client123'),(227,2,'20160624-2_1.pdf','2016-08-11 16:59:35',NULL,'client123'),(228,2,'20160624-2_1.pdf','2016-08-11 16:59:36',NULL,'client123'),(229,2,'20160624-2_1.pdf','2016-08-11 17:02:55',NULL,'client123'),(230,2,'20160624-2_1.pdf','2016-08-11 17:02:55',NULL,'client123'),(231,2,'20160624-2_1.pdf','2016-08-11 17:02:56',NULL,'client123'),(232,2,'20160624-2_1.pdf','2016-08-11 17:05:15',NULL,'client123'),(233,2,'20160624-2_1.pdf','2016-08-11 17:05:16',NULL,'client123'),(234,2,'20160624-2_1.pdf','2016-08-11 17:05:16',NULL,'client123'),(235,2,'20160624-2_1.pdf','2016-08-11 17:06:05',NULL,'client123'),(236,2,'20160624-2_1.pdf','2016-08-11 17:06:05',NULL,'client123'),(237,2,'20160624-2_1.pdf','2016-08-11 17:06:06',NULL,'client123'),(238,2,'20160624-2_1.pdf','2016-08-12 09:01:40',NULL,'client123'),(239,29,'20160801-29_1.pdf','2016-08-12 09:02:04',NULL,'client123'),(240,29,'20160801-29_1.pdf','2016-08-12 09:02:05',NULL,'client123'),(241,29,'20160801-29_1.pdf','2016-08-12 09:02:05',NULL,'client123'),(242,36,'20160805-36_1.pdf','2016-08-12 09:03:47',NULL,'client123'),(243,36,'20160805-36_1.pdf','2016-08-12 09:03:48',NULL,'client123'),(244,36,'20160805-36_1.pdf','2016-08-12 09:03:48',NULL,'client123'),(245,36,'20160805-36_1.pdf','2016-08-12 09:41:01',NULL,'client123'),(246,36,'20160805-36_1.pdf','2016-08-12 09:41:01',NULL,'client123'),(247,36,'20160805-36_1.pdf','2016-08-12 09:41:02',NULL,'client123'),(248,36,'20160805-36_1.pdf','2016-08-12 09:41:37',NULL,'client123'),(249,36,'20160805-36_1.pdf','2016-08-12 09:41:37',NULL,'client123'),(250,36,'20160805-36_1.pdf','2016-08-12 09:41:38',NULL,'client123'),(251,36,'20160805-36_1.pdf','2016-08-12 10:03:45',NULL,'client123'),(252,36,'20160805-36_1.pdf','2016-08-12 10:03:45',NULL,'client123'),(253,36,'20160805-36_1.pdf','2016-08-12 10:03:46',NULL,'client123'),(254,36,'20160805-36_1.pdf','2016-08-12 10:22:54',NULL,'client123'),(255,36,'20160805-36_1.pdf','2016-08-12 10:22:55',NULL,'client123'),(256,36,'20160805-36_1.pdf','2016-08-12 10:22:55',NULL,'client123'),(257,36,'20160805-36_1.pdf','2016-08-12 10:29:13',NULL,'client123'),(258,36,'20160805-36_1.pdf','2016-08-12 10:29:13',NULL,'client123'),(259,36,'20160805-36_1.pdf','2016-08-12 10:29:14',NULL,'client123'),(260,36,'20160805-36_1.pdf','2016-08-12 10:30:23',NULL,'client123'),(261,36,'20160805-36_1.pdf','2016-08-12 10:30:23',NULL,'client123'),(262,36,'20160805-36_1.pdf','2016-08-12 10:30:24',NULL,'client123'),(263,36,'20160805-36_1.pdf','2016-08-12 10:31:46',NULL,'client123'),(264,36,'20160805-36_1.pdf','2016-08-12 10:31:47',NULL,'client123'),(265,36,'20160805-36_1.pdf','2016-08-12 10:31:47',NULL,'client123'),(266,36,'20160805-36_1.pdf','2016-08-12 10:33:37',NULL,'client123'),(267,36,'20160805-36_1.pdf','2016-08-12 10:34:05',NULL,'client123'),(268,36,'20160805-36_1.pdf','2016-08-12 10:42:24',NULL,'client123'),(269,36,'20160805-36_1.pdf','2016-08-12 10:43:31',NULL,'client123'),(270,36,'20160805-36_1.pdf','2016-08-12 11:06:09',NULL,'client123'),(271,36,'20160805-36_1.pdf','2016-08-12 11:06:57',NULL,'client123'),(272,36,'20160805-36_1.pdf','2016-08-12 12:14:36',NULL,'client123'),(273,36,'20160805-36_1.pdf','2016-08-12 12:29:42',NULL,'client123'),(274,36,'20160805-36_1.pdf','2016-08-12 12:31:43',NULL,'client123'),(275,36,'20160805-36_1.pdf','2016-08-12 12:36:15',NULL,'client123'),(276,36,'20160805-36_1.pdf','2016-08-12 12:37:49',NULL,'client123'),(277,36,'20160805-36_1.pdf','2016-08-12 12:51:04',NULL,'client123'),(278,2,'20160624-2_1.pdf','2016-08-12 15:04:17',NULL,'client123'),(279,2,'20160624-2_1.pdf','2016-08-12 16:18:21',NULL,'client123'),(280,36,'20160805-36_1.pdf','2016-08-12 16:20:00',NULL,'client123'),(281,36,'20160805-36_1.pdf','2016-08-12 16:36:41',NULL,'client123'),(282,29,'20160801-29_1.pdf','2016-08-12 16:43:29',NULL,'client123'),(283,29,'20160801-29_1.pdf','2016-08-12 17:29:22',NULL,'client123'),(284,36,'20160805-36_1.pdf','2016-08-12 17:29:36',NULL,'client123'),(285,29,'20160801-29_1.pdf','2016-08-12 17:38:29',NULL,'client123'),(286,29,'20160801-29_1.pdf','2016-08-12 17:39:13',NULL,'client123'),(287,29,'20160801-29_1.pdf','2016-08-12 17:41:42',NULL,'client123'),(288,36,'20160805-36_1.pdf','2016-08-12 17:41:53',NULL,'client123'),(289,36,'20160805-36_1.pdf','2016-08-12 17:42:57',NULL,'client123'),(290,29,'20160801-29_1.pdf','2016-08-12 17:48:31',NULL,'client123'),(291,36,'20160805-36_1.pdf','2016-08-12 17:48:46',NULL,'client123'),(292,29,'20160801-29_1.pdf','2016-08-12 17:58:31',NULL,'client123'),(293,29,'20160801-29_1.pdf','2016-08-12 17:59:33',NULL,'client123'),(294,29,'20160801-29_1.pdf','2016-08-13 08:08:28',NULL,'client123'),(295,15,'20160728-15_10.pdf','2016-08-13 09:04:28',NULL,'client123'),(296,15,'20160728-15_2.pdf','2016-08-13 11:48:58',NULL,'client123'),(297,29,'20160801-29_1.pdf','2016-08-13 11:49:50',NULL,'client123'),(298,29,'20160801-29_1.pdf','2016-08-13 11:51:39',NULL,'client123'),(299,29,'20160801-29_1.pdf','2016-08-13 11:54:12',NULL,'client123'),(300,29,'20160801-29_1.pdf','2016-08-13 11:56:15',NULL,'client123'),(301,2,'20160624-2_1.pdf','2016-08-13 11:56:47',NULL,'client123'),(302,2,'20160624-2_1.pdf','2016-08-13 12:27:41',NULL,'client123'),(303,15,'20160728-15_3.pdf','2016-08-13 12:28:29',NULL,'client123'),(304,15,'20160728-15_4.pdf','2016-08-13 12:39:55',NULL,'client123');
/*!40000 ALTER TABLE `event_client_invoice_dtl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_client_payment_trn`
--

DROP TABLE IF EXISTS `event_client_payment_trn`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_client_payment_trn` (
  `cl_payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `payment_date` date DEFAULT NULL,
  `client_paid_amt` varchar(45) DEFAULT NULL,
  `payment_mode` varchar(50) DEFAULT NULL,
  `cheque_no` varchar(45) DEFAULT NULL,
  `bank_name` varchar(45) DEFAULT NULL,
  `trn_type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cl_payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_client_payment_trn`
--

LOCK TABLES `event_client_payment_trn` WRITE;
/*!40000 ALTER TABLE `event_client_payment_trn` DISABLE KEYS */;
INSERT INTO `event_client_payment_trn` VALUES (1,1,'2016-06-24','25000','cash','','','Payment'),(2,3,'2016-06-29','5000','cash','','','Payment'),(3,4,'2016-07-01','10000','cash','','','Payment'),(4,5,'2016-07-01','15000','cash','','','Payment'),(5,6,'2016-07-01','25000','cash','','','Payment'),(6,10,'2016-07-08','25000','cash','','','Payment'),(7,11,'2016-07-15','25000','cash','','','Payment'),(8,12,'2016-07-15','25000','cash','','','Payment'),(9,18,'2016-07-30','3500','cash','','','Payment'),(10,19,'2016-07-30','3500','cash','','','Payment'),(11,20,'2016-07-30','3500','cash','','','Payment'),(12,21,'2016-07-30','3500','cash','','','Payment'),(13,22,'2016-07-30','3500','cash','','','Payment'),(14,23,'2016-07-30','3500','cash','','','Payment'),(15,24,'2016-07-30','3500','cash','','','Payment'),(16,25,'2016-07-30','3500','cash','','','Payment'),(17,26,'2016-07-30','3500','cash','','','Payment'),(18,27,'2016-07-30','3500','cash','','','Payment'),(19,28,'2016-07-30','3500','cash','','','Payment'),(20,30,'2016-08-01','8000','cash','','','Payment'),(21,31,'2016-08-01','8000','cash','','','Payment'),(22,32,'2016-08-01','8000','cash','','','Payment'),(23,33,'2016-08-04','2000','cash','','','Payment'),(24,34,'2016-08-04','2000','cash','','','Payment'),(25,35,'2016-08-05','7000','cash','','','Payment'),(26,37,'2016-08-13','3365','cash','','','Payment');
/*!40000 ALTER TABLE `event_client_payment_trn` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_equipment_dtl`
--

DROP TABLE IF EXISTS `event_equipment_dtl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_equipment_dtl` (
  `event_equipment_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_places_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `equipment_id` int(11) NOT NULL,
  PRIMARY KEY (`event_equipment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_equipment_dtl`
--

LOCK TABLES `event_equipment_dtl` WRITE;
/*!40000 ALTER TABLE `event_equipment_dtl` DISABLE KEYS */;
INSERT INTO `event_equipment_dtl` VALUES (1,5,5,1),(2,6,6,1),(3,6,6,2),(4,6,6,2),(5,6,6,1),(6,7,7,1),(7,7,7,2),(8,8,7,2),(9,8,7,3),(10,9,7,2),(11,9,7,1),(12,10,8,1),(13,10,8,4),(14,11,8,3),(15,11,8,1),(16,13,8,2),(17,13,8,3),(18,13,8,1),(19,15,10,1),(20,15,10,3),(21,16,10,2),(22,17,10,1),(23,17,10,4),(24,17,10,2),(25,18,11,1),(26,19,11,3),(27,20,12,1),(28,20,12,3),(29,21,12,3),(30,24,13,4),(31,24,13,2),(32,25,13,1),(33,26,14,4),(34,26,14,2),(35,27,14,1),(36,28,15,4),(37,28,15,4),(38,29,15,1),(39,30,15,3),(40,34,35,1),(41,34,35,2),(42,35,35,1),(43,35,35,4),(44,37,36,1),(45,37,36,4),(46,38,36,1),(47,39,36,1);
/*!40000 ALTER TABLE `event_equipment_dtl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_mst`
--

DROP TABLE IF EXISTS `event_mst`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_mst` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(45) DEFAULT NULL,
  `event_ds` varchar(2000) DEFAULT NULL,
  `client_name` varchar(45) DEFAULT NULL,
  `client_cmp` varchar(45) DEFAULT NULL,
  `client_email` varchar(45) DEFAULT NULL,
  `client_work_mob` varchar(15) DEFAULT NULL,
  `client_home_mob` varchar(15) DEFAULT NULL,
  `client_mob` varchar(15) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `from_date` datetime DEFAULT NULL,
  `to_date` datetime DEFAULT NULL,
  `payment_status` varchar(15) DEFAULT NULL,
  `client_charges` varchar(15) DEFAULT NULL,
  `client_paid_amt` varchar(15) DEFAULT NULL,
  `vendor_charges` varchar(15) DEFAULT NULL,
  `vd_paid_amt` varchar(15) DEFAULT NULL,
  `invoice` varchar(45) DEFAULT NULL,
  `client_discount_amt` varchar(15) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cmp_id` int(11) DEFAULT NULL,
  `taxmode` varchar(5) DEFAULT NULL,
  `inv_file_name` varchar(45) DEFAULT NULL,
  `info_file_name` varchar(45) DEFAULT NULL,
  `bill_no` varchar(25) DEFAULT NULL,
  `fp_no` varchar(25) DEFAULT NULL,
  `service_tax_rate` varchar(5) DEFAULT NULL,
  `service_tax_amt` varchar(15) DEFAULT NULL,
  `total_amt` varchar(15) DEFAULT NULL,
  `deleted_by` varchar(45) DEFAULT NULL,
  `cat_id` int(10) DEFAULT NULL,
  `sub_cat_id` int(10) DEFAULT NULL,
  `job_data_1` varchar(155) DEFAULT NULL,
  `job_data_2` varchar(155) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `vat` varchar(15) DEFAULT NULL,
  `order_type` enum('Retail','Event') DEFAULT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_mst`
--

LOCK TABLES `event_mst` WRITE;
/*!40000 ALTER TABLE `event_mst` DISABLE KEYS */;
INSERT INTO `event_mst` VALUES (1,'photography','test','divyesh','r&d cmp','divyesh@gmail.com','9724783505','','','new','2016-06-24 01:06:26','2016-06-24 01:06:26','Unpaid','50000','25000',NULL,NULL,NULL,'2000','2016-06-24 08:15:17','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'Yes','20160624-1_4.pdf','20160624_1.pdf','jjj123','ah123','10','4800','52800',NULL,1,1,NULL,NULL,NULL,NULL,'Event'),(2,'testEnq','divyesh marriage','Divyesh','RanaDc','','9724783505','','','enquiry','2016-06-24 02:06:53','2016-06-24 02:06:53','Unpaid','50000','',NULL,NULL,NULL,'','2016-06-24 08:55:07','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'Yes','20160624-2_1.pdf',NULL,'hj123','ag123','10','5000','55000',NULL,1,1,NULL,NULL,NULL,NULL,'Event'),(3,'update_cheking','its wedding update						','divyesh','rnd cmp','divyesh@gmail.com','9724783505','','','new','2016-06-29 12:06:20','2016-06-29 12:06:20','Unpaid','25000','5000',NULL,NULL,NULL,'','2016-06-29 07:23:49','0000-00-00 00:00:00','2016-07-01 04:19:08',1,'No','20160629-3_6.pdf',NULL,'','','10','','25000',NULL,1,1,'divyesh/jkj/llk','kjlk/part3','client123',NULL,'Event'),(4,'testing','testing of data							','Divyesh','rana dc','divyesh@gmail.com','9724783505','','','new','2016-07-20 09:07:51','2016-07-22 09:07:51','Unpaid','25000','10000','5000',NULL,NULL,'','2016-07-01 04:24:05','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'No','20160720-4_1.pdf',NULL,'','','10','','25000',NULL,2,2,'divyesh/part1','divysh/part2',NULL,NULL,'Event'),(5,'testing order','testing entry					','Divyesh','C D Aquaria','div@gmail.com','9724783505','','','new','2016-07-15 09:07:51','2016-07-01 09:07:51','Unpaid','25000','15000','2000',NULL,NULL,'','2016-07-01 04:30:35','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'Yes','20160715-5_3.pdf','20160715_5.pdf','','','10','2500','27500',NULL,1,1,'div/part1','div/part2',NULL,NULL,'Event'),(6,'Testing Detail','testing of data','Rakesh Limbachya','DR Company','divyesh@gmail.com','9724783505','','','new','2016-07-17 10:07:48','2016-07-01 10:07:48','Unpaid','100000','25000',NULL,NULL,NULL,'','2016-07-01 04:45:25','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'No','20160701-6_3.pdf','20160701_6.pdf','','','10','','100000',NULL,1,1,'div/123/part1','div/231/part2',NULL,NULL,'Event'),(8,'test multi','				wedding of divyesh				','raja','raj@sons','divyesh@gmail.com','7898776655','','','new','2016-07-26 11:07:39','2016-07-29 11:07:39','Paid','25000','25000',NULL,NULL,NULL,'','2016-07-07 18:35:51','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'','20160726-8_5.pdf',NULL,'','','','','',NULL,1,1,'divyesh1','divyesh2',NULL,NULL,'Event'),(10,'testmulti124','mrg								','raj','raj','raj@gmail.com','7898776655','','6755667788','new','2016-07-08 12:07:24','2016-07-08 12:07:24','Unpaid','122750','25000',NULL,NULL,NULL,'5000','2016-07-07 19:31:55','0000-00-00 00:00:00','2016-07-13 10:09:21',1,'No','20160708-10_6.pdf',NULL,'','','10','','122750',NULL,3,4,'raj','raj','client123',NULL,'Event'),(11,'test data','						sdd		','sd','ad','','','','','new','2016-07-15 12:07:06','2016-07-15 12:07:06','Unpaid','80250','25000',NULL,NULL,NULL,'5000','2016-07-14 19:02:46','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'Yes','20160715-11_2.pdf',NULL,'','','10','7525','80250',NULL,2,2,'sd','d',NULL,NULL,'Event'),(12,'yesyy','					ds			','','dsd','','7898776655','','','new','2016-07-15 01:07:56','2016-07-15 01:07:56','Unpaid','100375','25000',NULL,NULL,NULL,'375','2016-07-14 19:46:22','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'Yes','20160715-12_6.pdf',NULL,'','','10','10000','110000',NULL,3,4,'','',NULL,NULL,'Event'),(13,'merrage','fashion detail			','Rana Divyesh','R d industry','divyesh@gmail.com','9724783505','','','new','2016-08-15 13:07:00','2016-08-28 13:07:00','Unpaid','12700','','',NULL,NULL,'200','2016-07-28 08:31:01','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'Yes','20160815-13_3.pdf',NULL,'','','12','1500','14000',NULL,2,2,'cd://divyesh','cd://divyesh',NULL,NULL,'Event'),(14,'merrage','fashion detail			','Rana Divyesh','R d industry','divyesh@gmail.com','9724783505','','','new','2016-08-10 13:07:00','2016-08-28 13:07:00','Unpaid','12700','','',NULL,NULL,'200','2016-07-28 08:32:36','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'Yes','20160810-14_1.pdf',NULL,'','','12','1500','14000',NULL,2,2,'cd://divyesh','cd://divyesh',NULL,NULL,'Event'),(15,'mearrage','								','Rana Divyesh','DR Company','raj@gmail.com','9724783505','','','new','2016-07-28 14:07:00','2016-07-28 14:07:00','Unpaid','15900','','',NULL,NULL,'400','2016-07-28 08:40:34','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'Yes','20160728-15_4.pdf','20160728_15.pdf','','','12','1860','17360',NULL,2,2,'asd','ds',NULL,NULL,'Event'),(16,NULL,NULL,'Divyesh',NULL,NULL,'',NULL,NULL,'complete','2016-07-30 00:07:00','2016-07-30 00:07:00','Paid','2000','2000',NULL,NULL,NULL,'','2016-07-30 02:39:52','0000-00-00 00:00:00','0000-00-00 00:00:00',1,NULL,NULL,NULL,NULL,NULL,'12','','2000',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Retail'),(17,NULL,NULL,'Divyesh',NULL,NULL,'9724783505',NULL,NULL,'complete','2016-07-30 09:07:00','2016-07-30 09:07:00','Unpaid','3500','',NULL,NULL,NULL,'','2016-07-30 03:48:08','0000-00-00 00:00:00','0000-00-00 00:00:00',1,NULL,NULL,NULL,NULL,NULL,'12','','3500',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Retail'),(18,NULL,NULL,'test',NULL,NULL,'9724783505',NULL,NULL,'complete','2016-07-30 09:07:00','2016-07-30 09:07:00','Paid','3500','3500',NULL,NULL,NULL,'','2016-07-30 04:28:23','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,'12','','3500',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Retail'),(19,NULL,NULL,'test',NULL,NULL,'9724783505',NULL,NULL,'complete','2016-07-30 09:07:00','2016-07-30 09:07:00','Paid','3500','3500',NULL,NULL,NULL,'','2016-07-30 04:35:17','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,'12','','3500',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Retail'),(20,NULL,NULL,'test',NULL,NULL,'9724783505',NULL,NULL,'complete','2016-07-30 09:07:00','2016-07-30 09:07:00','Paid','3500','3500',NULL,NULL,NULL,'','2016-07-30 04:50:06','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,'12','','3500',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Retail'),(21,NULL,NULL,'test',NULL,NULL,'9724783505',NULL,NULL,'complete','2016-07-30 09:07:00','2016-07-30 09:07:00','Paid','3500','3500',NULL,NULL,NULL,'','2016-07-30 04:51:10','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,'12','','3500',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Retail'),(22,NULL,NULL,'test',NULL,NULL,'9724783505',NULL,NULL,'complete','2016-07-30 09:07:00','2016-07-30 09:07:00','Paid','3500','3500',NULL,NULL,NULL,'','2016-07-30 04:52:30','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,'12','','3500',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Retail'),(23,NULL,NULL,'test',NULL,NULL,'9724783505',NULL,NULL,'complete','2016-07-30 09:07:00','2016-07-30 09:07:00','Paid','3500','3500',NULL,NULL,NULL,'','2016-07-30 04:54:05','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,'12','','3500',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Retail'),(24,NULL,NULL,'test',NULL,NULL,'9724783505',NULL,NULL,'complete','2016-07-30 09:07:00','2016-07-30 09:07:00','Paid','3500','3500',NULL,NULL,NULL,'','2016-07-30 04:58:29','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,'12','','3500',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Retail'),(25,NULL,NULL,'test',NULL,NULL,'9724783505',NULL,NULL,'complete','2016-07-30 09:07:00','2016-07-30 09:07:00','Paid','3500','3500',NULL,NULL,NULL,'','2016-07-30 04:59:18','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,'12','','3500',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Retail'),(26,NULL,NULL,'test',NULL,NULL,'9724783505',NULL,NULL,'complete','2016-07-30 09:07:00','2016-07-30 09:07:00','Paid','3500','3500',NULL,NULL,NULL,'','2016-07-30 05:00:38','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,'12','','3500',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Retail'),(27,NULL,NULL,'test',NULL,NULL,'9724783505',NULL,NULL,'complete','2016-07-30 09:07:00','2016-07-30 09:07:00','Paid','3500','3500',NULL,NULL,NULL,'','2016-07-30 05:01:16','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,'12','','3500',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Retail'),(28,NULL,NULL,'test',NULL,NULL,'9724783505',NULL,NULL,'complete','2016-07-30 09:07:00','2016-07-30 09:07:00','Paid','3500','3500',NULL,NULL,NULL,'','2016-07-30 05:01:49','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,'12','','3500',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Retail'),(29,'Testing quatation','detail  of quatation of cheking this detail 								','test','r d construction','divyesh@gmail.com','9724783505','','','enquiry','2016-08-01 14:08:00','2016-08-01 14:08:00','Unpaid','55500','','',NULL,NULL,'','2016-08-01 08:40:38','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'No','20160801-29_1.pdf',NULL,'','','12','','55500',NULL,2,3,'','',NULL,NULL,'Event'),(30,NULL,NULL,'testofRinv',NULL,NULL,'9724783505',NULL,NULL,'complete','2016-08-01 17:08:00','2016-08-01 17:08:00','Paid','8000','8000',NULL,NULL,NULL,'','2016-08-01 11:46:21','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,'12','','8000',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Retail'),(31,NULL,NULL,'testofRinv',NULL,NULL,'9724783505',NULL,NULL,'complete','2016-08-01 17:08:00','2016-08-01 17:08:00','Paid','8000','8000',NULL,NULL,NULL,'','2016-08-01 11:47:08','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,'12','','8000',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Retail'),(32,NULL,NULL,'testofRinv',NULL,NULL,'9724783505',NULL,NULL,'complete','2016-08-01 17:08:00','2016-08-01 17:08:00','Paid','8000','8000',NULL,NULL,NULL,'','2016-08-01 11:49:47','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,'12','','8000',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Retail'),(33,NULL,NULL,'Harsil',NULL,NULL,'9724783505',NULL,NULL,'complete','2016-08-10 14:08:00','2016-08-10 14:08:00','Unpaid','6333','2000',NULL,NULL,NULL,'333','2016-08-04 09:38:29','0000-00-00 00:00:00','0000-00-00 00:00:00',1,NULL,NULL,NULL,NULL,NULL,'12','720','6753',NULL,NULL,NULL,NULL,NULL,NULL,'33','Retail'),(34,NULL,NULL,'Harsil',NULL,NULL,'9724783505',NULL,NULL,'complete','2016-08-10 14:08:00','2016-08-10 14:08:00','Unpaid','6333','2000',NULL,NULL,NULL,'333','2016-08-04 09:42:40','0000-00-00 00:00:00','0000-00-00 00:00:00',1,NULL,'20160810-34_1.pdf',NULL,NULL,NULL,'12','720','6753',NULL,NULL,NULL,NULL,NULL,NULL,'33','Retail'),(35,'test of iq','				sd				','Divyesh','Rd const','div@gmail.com','9724783505','','','enquiry','2016-08-05 12:08:00','2016-08-05 12:08:00','Unpaid','77500','7000','NaN',NULL,NULL,'500','2016-08-05 06:44:30','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'Yes',NULL,NULL,'','','12','9240','86240',NULL,2,2,'','',NULL,NULL,'Event'),(36,'test enq','								jhjk','Divyesh','jkkjl','','9724783505','','','enquiry','2016-08-05 12:08:00','2016-08-05 12:08:00','Unpaid','140000','','NaN',NULL,NULL,'','2016-08-05 06:52:23','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'Yes','20160805-36_1.pdf',NULL,'','','12','16800','156800',NULL,3,4,'','',NULL,NULL,'Event'),(37,NULL,NULL,'DivyeshTest',NULL,NULL,'9724783505',NULL,NULL,'complete','2016-08-13 08:08:00','2016-08-13 08:08:00','Unpaid','3250','3365',NULL,NULL,NULL,'250','2016-08-13 02:50:01','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,'12','240','3365',NULL,NULL,NULL,NULL,NULL,NULL,'125','Retail'),(38,NULL,NULL,'TestRetail',NULL,NULL,'9724783505',NULL,NULL,'complete','2016-08-13 10:08:00','2016-08-13 10:08:00','Paid','3750','',NULL,NULL,NULL,'','2016-08-13 05:30:00','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,'12','0','3750',NULL,NULL,NULL,NULL,NULL,NULL,'0','Retail'),(39,NULL,NULL,'TestData',NULL,NULL,'9724783505',NULL,NULL,'complete','2016-08-13 10:08:00','2016-08-13 10:08:00','Paid','3750','',NULL,NULL,NULL,'','2016-08-13 05:52:39','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,'12','0','3750',NULL,NULL,NULL,NULL,NULL,NULL,'0','Retail'),(40,NULL,NULL,'TestData',NULL,NULL,'9724783505',NULL,NULL,'complete','2016-08-13 10:08:00','2016-08-13 10:08:00','Paid','3750','',NULL,NULL,NULL,'','2016-08-13 05:53:34','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,'12','0','3750',NULL,NULL,NULL,NULL,NULL,NULL,'0','Retail'),(41,NULL,NULL,'TestData',NULL,NULL,'9724783505',NULL,NULL,'complete','2016-08-13 10:08:00','2016-08-13 10:08:00','Paid','3750','',NULL,NULL,NULL,'','2016-08-13 05:55:54','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,'12','0','3750',NULL,NULL,NULL,NULL,NULL,NULL,'0','Retail'),(42,NULL,NULL,'TestData',NULL,NULL,'9724783505',NULL,NULL,'complete','2016-08-13 10:08:00','2016-08-13 10:08:00','Paid','3750','',NULL,NULL,NULL,'','2016-08-13 06:17:47','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,'12','0','3750',NULL,NULL,NULL,NULL,NULL,NULL,'0','Retail'),(43,NULL,NULL,'TestData',NULL,NULL,'9724783505',NULL,NULL,'complete','2016-08-13 10:08:00','2016-08-13 10:08:00','Paid','3750','',NULL,NULL,NULL,'','2016-08-13 06:18:30','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,'12','0','3750',NULL,NULL,NULL,NULL,NULL,NULL,'0','Retail'),(44,NULL,NULL,'TestData',NULL,NULL,'9724783505',NULL,NULL,'complete','2016-08-13 10:08:00','2016-08-17 10:08:00','Paid','3750','',NULL,NULL,NULL,'','2016-08-13 06:28:52','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,'12','0','3750',NULL,NULL,NULL,NULL,NULL,NULL,'0','Retail');
/*!40000 ALTER TABLE `event_mst` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_places_dtl`
--

DROP TABLE IF EXISTS `event_places_dtl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_places_dtl` (
  `event_places_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `event_vennue` varchar(45) DEFAULT NULL,
  `event_hall` varchar(25) DEFAULT NULL,
  `event_ld_mark` varchar(45) DEFAULT NULL,
  `event_date` datetime DEFAULT NULL,
  `event_to_date` datetime DEFAULT NULL,
  PRIMARY KEY (`event_places_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_places_dtl`
--

LOCK TABLES `event_places_dtl` WRITE;
/*!40000 ALTER TABLE `event_places_dtl` DISABLE KEYS */;
INSERT INTO `event_places_dtl` VALUES (1,1,'surat','surat','surat','2016-06-24 01:06:26','2016-06-24 01:06:26'),(2,2,'surat','surat','surat','2016-06-24 02:06:53','2016-06-24 02:06:53'),(3,3,'surat','surat','surat','2016-06-29 12:06:20','2016-06-29 12:06:20'),(4,4,'sagrampura','Community','surat','2016-07-01 09:07:51','2016-07-01 09:07:51'),(5,5,'sagrampura','Community','Surat','2016-07-01 09:07:51','2016-07-01 09:07:51'),(6,6,'Palanpur','Starmall','Surat','2016-07-01 10:07:48','2016-07-01 10:07:48'),(7,7,'venn0','hallo','land0','2016-07-07 02:07:42','2016-07-07 02:07:42'),(8,7,'venn1','hall1','land1','2016-07-07 14:52:36','2016-07-07 14:52:36'),(9,7,'venn2','hall2','land2','2016-07-07 14:53:34','2016-07-07 14:53:34'),(10,8,'test0','hall0','land0','2016-07-07 11:07:39','2016-07-07 11:07:39'),(11,8,'test1','hall1','land1','2016-07-08 00:01:49','2016-07-08 00:01:49'),(12,8,'test2','hall2','land2','2016-07-08 00:01:51','2016-07-08 00:01:51'),(13,8,'test4','hall4','land4','2016-07-08 00:04:16','2016-07-08 00:04:16'),(14,9,'','','','2016-07-08 12:07:07','2016-07-08 12:07:07'),(15,10,'surat','surat','surat','2016-07-08 12:07:24','2016-07-08 12:07:24'),(16,10,'adajan','jkkl','jkj','2016-07-08 00:59:34','2016-07-08 00:59:34'),(17,10,'sagrampura','surat','surat','2016-07-08 00:59:36','2016-07-08 00:59:36'),(18,11,'aa','asa','sa','2016-07-15 12:07:06','2016-07-15 12:07:06'),(19,11,'xasd','sas','sas','2016-07-15 00:32:02','2016-07-15 00:32:02'),(20,12,'sdd','sd','sd','2016-07-15 01:07:56','2016-07-15 01:07:56'),(21,12,'dsa','dad','ad','2016-07-15 01:13:55','2016-07-15 01:13:55'),(22,0,'','','','2016-07-28 11:07:00','2016-07-28 11:07:00'),(23,0,'','','','2016-07-28 12:47:35','2016-07-28 12:47:35'),(24,13,'Adajan','Community','surat','2016-07-28 13:07:00','2016-07-28 13:07:00'),(25,13,'','','','2016-07-28 14:01:02','2016-07-28 14:01:02'),(26,14,'Adajan','Community','surat','2016-07-28 13:07:00','2016-07-28 13:07:00'),(27,14,'','','','2016-07-28 14:02:36','2016-07-28 14:02:36'),(28,15,'Adajan','comunity','rustompura','2016-07-28 14:07:00','2016-07-28 14:07:00'),(29,15,'sagrampura','anavil vadi','sagrampura','2016-07-29 14:08:00','2016-08-02 14:08:00'),(30,15,'Katargam','community','surat','2016-08-03 14:08:00','2016-08-05 14:08:00'),(31,29,'Sagrampura','Community','Surat','2016-08-02 14:08:00','2016-08-02 14:08:00'),(32,29,'Adajan','Comminty','Surat','2016-08-03 14:08:00','2016-08-03 14:08:00'),(33,29,'katargam','community','Surat','2016-08-03 14:09:00','2016-08-03 14:09:00'),(34,35,'Surat','surat','surat','2016-08-05 12:08:00','2016-08-05 12:08:00'),(35,35,'surat','surat','surat','2016-08-10 12:13:00','2016-08-10 12:13:00'),(36,35,'surat','surat','surat','2016-08-11 12:13:00','2016-08-12 12:13:00'),(37,36,'surat','surat','surat','2016-08-05 12:08:00','2016-08-05 12:08:00'),(38,36,'surat','surat','surat','2016-08-06 12:21:00','2016-08-06 12:21:00'),(39,36,'surat','surat','surat','2016-08-07 12:21:00','2016-08-07 12:21:00');
/*!40000 ALTER TABLE `event_places_dtl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_staff_dtl`
--

DROP TABLE IF EXISTS `event_staff_dtl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_staff_dtl` (
  `event_staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_places_id` int(11) NOT NULL,
  `event_id` int(11) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`event_staff_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_staff_dtl`
--

LOCK TABLES `event_staff_dtl` WRITE;
/*!40000 ALTER TABLE `event_staff_dtl` DISABLE KEYS */;
INSERT INTO `event_staff_dtl` VALUES (1,5,5,18),(2,6,6,18),(3,6,6,19),(4,6,6,0),(5,6,6,0),(6,7,7,16),(7,7,7,18),(8,8,7,0),(9,8,7,19),(10,9,7,19),(11,9,7,18),(12,10,8,18),(13,10,8,18),(14,11,8,0),(15,11,8,19),(16,13,8,0),(17,13,8,19),(18,13,8,18),(19,15,10,18),(20,15,10,18),(21,16,10,16),(22,17,10,18),(23,17,10,18),(24,17,10,19),(25,18,11,18),(26,19,11,0),(27,20,12,18),(28,20,12,0),(29,21,12,0),(30,24,13,16),(31,24,13,19),(32,25,13,19),(33,26,14,16),(34,26,14,19),(35,27,14,19),(36,28,15,16),(37,28,15,19),(38,29,15,18),(39,30,15,18),(40,34,35,16),(41,34,35,16),(42,35,35,19),(43,35,35,17),(44,37,36,16),(45,37,36,17),(46,38,36,16),(47,39,36,16);
/*!40000 ALTER TABLE `event_staff_dtl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_vend_mass_pay_trn`
--

DROP TABLE IF EXISTS `event_vend_mass_pay_trn`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_vend_mass_pay_trn` (
  `mass_payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_vend_json_id` varchar(250) DEFAULT NULL,
  `payment_date` datetime DEFAULT NULL,
  `payment_mode` varchar(45) DEFAULT NULL,
  `bank_name` varchar(45) DEFAULT NULL,
  `cheque_no` varchar(45) DEFAULT NULL,
  `paid_amt` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`mass_payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_vend_mass_pay_trn`
--

LOCK TABLES `event_vend_mass_pay_trn` WRITE;
/*!40000 ALTER TABLE `event_vend_mass_pay_trn` DISABLE KEYS */;
INSERT INTO `event_vend_mass_pay_trn` VALUES (1,'[\"1\"]','2016-07-02 11:46:07','cash','','','     15000												');
/*!40000 ALTER TABLE `event_vend_mass_pay_trn` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_vend_payment_trn`
--

DROP TABLE IF EXISTS `event_vend_payment_trn`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_vend_payment_trn` (
  `vd_payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_vendor_id` int(11) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `payment_mode` varchar(45) DEFAULT NULL,
  `vend_bank_name` varchar(45) DEFAULT NULL,
  `vend_cheque_no` varchar(45) DEFAULT NULL,
  `paid_amt` varchar(45) DEFAULT NULL,
  `mass_payment_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`vd_payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_vend_payment_trn`
--

LOCK TABLES `event_vend_payment_trn` WRITE;
/*!40000 ALTER TABLE `event_vend_payment_trn` DISABLE KEYS */;
INSERT INTO `event_vend_payment_trn` VALUES (1,1,5,'2016-07-02','cash','','','15000',1);
/*!40000 ALTER TABLE `event_vend_payment_trn` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_vendor_dtl`
--

DROP TABLE IF EXISTS `event_vendor_dtl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_vendor_dtl` (
  `event_vendor_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `event_places_id` int(11) NOT NULL,
  `vend_id` int(11) NOT NULL,
  `vendor_charges` varchar(45) DEFAULT NULL,
  `vendor_paid_amt` varchar(45) DEFAULT NULL,
  `vendor_paid_status` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`event_vendor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_vendor_dtl`
--

LOCK TABLES `event_vendor_dtl` WRITE;
/*!40000 ALTER TABLE `event_vendor_dtl` DISABLE KEYS */;
INSERT INTO `event_vendor_dtl` VALUES (1,5,5,1,'15000','15000','Paid'),(2,5,5,1,'15000',NULL,NULL),(3,6,6,0,'','0','Unpaid'),(4,6,6,0,'','0','Unpaid'),(5,6,6,3,'18000','0','Unpaid'),(6,6,6,2,'20000','0','Unpaid'),(7,7,7,0,'','0','Unpaid'),(8,7,7,0,'','0','Unpaid'),(9,7,8,2,'5000','0','Unpaid'),(10,7,8,0,'','0','Unpaid'),(11,7,9,0,'','0','Unpaid'),(12,7,9,0,'','0','Unpaid'),(13,8,10,0,'','0','Unpaid'),(14,8,10,0,'','0','Unpaid'),(15,8,11,3,'8000','0','Unpaid'),(16,8,11,0,'','0','Unpaid'),(17,8,13,3,'18000','0','Unpaid'),(18,8,13,0,'','0','Unpaid'),(19,8,13,0,'','0','Unpaid'),(20,10,15,0,'','0','Unpaid'),(21,10,15,0,'','0','Unpaid'),(22,10,16,2,'15000','0','Unpaid'),(23,10,17,0,'','0','Unpaid'),(24,10,17,0,'','0','Unpaid'),(25,10,17,0,'','0','Unpaid'),(26,11,18,0,'','0','Unpaid'),(27,11,19,2,'2500s','0','Unpaid'),(28,12,20,0,'','0','Unpaid'),(29,12,20,3,'12000','0','Unpaid'),(30,12,21,3,'500','0','Unpaid'),(31,13,24,0,'','0','Unpaid'),(32,13,24,0,'','0','Unpaid'),(33,13,25,0,'','0','Unpaid'),(34,14,26,0,'','0','Unpaid'),(35,14,26,0,'','0','Unpaid'),(36,14,27,0,'','0','Unpaid'),(37,15,28,0,'','0','Unpaid'),(38,15,28,0,'','0','Unpaid'),(39,15,29,0,'','0','Unpaid'),(40,15,30,0,'','0','Unpaid'),(41,35,34,0,'','0','Unpaid'),(42,35,34,0,'','0','Unpaid'),(43,35,35,0,'','0','Unpaid'),(44,35,35,0,'','0','Unpaid'),(45,36,37,0,'','0','Unpaid'),(46,36,37,0,'','0','Unpaid'),(47,36,38,0,'','0','Unpaid'),(48,36,39,0,'','0','Unpaid');
/*!40000 ALTER TABLE `event_vendor_dtl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `expence_cat_mst`
--

DROP TABLE IF EXISTS `expence_cat_mst`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `expence_cat_mst` (
  `exp_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(45) DEFAULT NULL,
  `cat_type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`exp_cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expence_cat_mst`
--

LOCK TABLES `expence_cat_mst` WRITE;
/*!40000 ALTER TABLE `expence_cat_mst` DISABLE KEYS */;
INSERT INTO `expence_cat_mst` VALUES (1,'Food','event'),(2,'Traveling','event'),(3,'Other','event'),(4,'Salary','other'),(5,'Stationary','other'),(6,'Tea/Coffee','other'),(7,'Electricity','other'),(8,'Phone Bill','other'),(9,'Internet Bill','other'),(10,'Rent','other'),(11,'Other','other');
/*!40000 ALTER TABLE `expence_cat_mst` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `expence_dtl`
--

DROP TABLE IF EXISTS `expence_dtl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `expence_dtl` (
  `exp_id` int(11) NOT NULL AUTO_INCREMENT,
  `exp_cat_id` int(11) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  `exp_date` datetime DEFAULT NULL,
  `amount` varchar(15) DEFAULT NULL,
  `exp_by` int(11) DEFAULT NULL,
  `attachment_json` varchar(5000) DEFAULT NULL,
  PRIMARY KEY (`exp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expence_dtl`
--

LOCK TABLES `expence_dtl` WRITE;
/*!40000 ALTER TABLE `expence_dtl` DISABLE KEYS */;
INSERT INTO `expence_dtl` VALUES (2,1,3,'2016-07-16 09:07:35','500',18,NULL),(3,1,1,'2016-07-16 01:07:04','500',16,NULL),(4,2,1,'2016-07-16 01:07:04','1000',18,NULL),(5,3,1,'2016-07-16 01:07:04','700',19,NULL),(6,1,0,'2016-07-16 03:07:27','1000',16,NULL),(7,0,0,'2016-08-02 14:32:47','',0,NULL),(8,0,0,'2016-08-02 14:32:57','',0,NULL);
/*!40000 ALTER TABLE `expence_dtl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `new_category_mst`
--

DROP TABLE IF EXISTS `new_category_mst`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `new_category_mst` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(45) DEFAULT NULL,
  `description` varchar(245) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cat_id`),
  UNIQUE KEY `cat_name_UNIQUE` (`cat_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `new_category_mst`
--

LOCK TABLES `new_category_mst` WRITE;
/*!40000 ALTER TABLE `new_category_mst` DISABLE KEYS */;
INSERT INTO `new_category_mst` VALUES (1,'Photography','its all photography','2016-06-15 14:26:34','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(2,'Film Making','its abt filmm','2016-06-15 15:23:09','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(3,'Desigining','','2016-06-15 15:23:39','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL);
/*!40000 ALTER TABLE `new_category_mst` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `new_event_places_dtl`
--

DROP TABLE IF EXISTS `new_event_places_dtl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `new_event_places_dtl` (
  `places_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) DEFAULT NULL,
  `event_places_id` int(11) DEFAULT NULL,
  `eq_id` int(11) DEFAULT NULL,
  `rate` varchar(15) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `amount` varchar(15) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `vend_id` int(11) DEFAULT NULL,
  `vend_price` varchar(15) DEFAULT NULL,
  `remark` varchar(245) DEFAULT NULL,
  `length` varchar(15) DEFAULT NULL,
  `width` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`places_id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `new_event_places_dtl`
--

LOCK TABLES `new_event_places_dtl` WRITE;
/*!40000 ALTER TABLE `new_event_places_dtl` DISABLE KEYS */;
INSERT INTO `new_event_places_dtl` VALUES (1,1,1,1,'25000',2,'50000',0,0,'','test','',''),(2,2,2,1,'25000',2,'50000',0,0,'','test','',''),(3,3,3,1,'25000',1,'25000',16,0,'','hello\n','',''),(4,4,4,1,'25000',1,'25000',16,1,'15000','','',''),(5,5,5,1,'25000',1,'25000',18,1,'15000','testing','',''),(6,6,6,1,'25000',1,'25000',18,0,'','taking this task to the this particular place','',''),(7,6,6,2,'12500',2,'25000',19,0,'','taking this task to u','',''),(8,6,6,2,'12500',2,'25000',0,3,'18000','selected vendor for this ','',''),(9,6,6,1,'25000',1,'25000',0,2,'20000','selected vendor for this','',''),(10,7,7,1,'25000',1,'25000',16,0,'','rem0','',''),(11,7,7,2,'12500',1,'12500',18,0,'','rem0','',''),(12,7,8,2,'12500',1,'12500',0,2,'5000','rem1','undefined','undefined'),(13,7,8,3,'35',1,'3500',19,0,'','','undefined','undefined'),(14,7,9,2,'12500',1,'12500',19,0,'','rem2','undefined','undefined'),(15,7,9,1,'25000',1,'25000',18,0,'','rem2','undefined','undefined'),(16,8,10,1,'25000',2,'50000',18,0,'','zero','',''),(17,8,10,4,'15000',2,'30000',18,0,'','zero','',''),(18,8,11,3,'35',3,'15750',0,3,'8000','one','undefined','undefined'),(19,8,11,1,'25000',1,'25000',19,0,'','one','undefined','undefined'),(20,8,13,2,'12500',3,'37500',0,3,'18000','four','undefined','undefined'),(21,8,13,3,'35',1,'10500',19,0,'','four','undefined','undefined'),(22,8,13,1,'25000',1,'25000',18,0,'','four','undefined','undefined'),(23,10,15,1,'25000',1,'25000',18,0,'','0','',''),(24,10,15,3,'35',1,'5250',18,0,'','0','10','15'),(25,10,16,2,'12500',2,'25000',16,2,'15000','1','undefined','undefined'),(26,10,17,1,'25000',1,'25000',18,0,'','2','undefined','undefined'),(27,10,17,4,'15000',2,'30000',18,0,'','2','undefined','undefined'),(28,10,17,2,'12500',1,'12500',19,0,'','2','undefined','undefined'),(29,11,18,1,'25000',3,'75000',18,0,'','a','',''),(30,11,19,3,'35',1,'5250',0,2,'2500s','dsad','undefined','undefined'),(31,12,20,1,'25000',3,'75000',18,0,'','','',''),(32,12,20,3,'35',1,'21875',0,3,'12000','s','25','25'),(33,12,21,3,'35',1,'3500',0,3,'500','','undefined','undefined'),(34,13,24,4,'15000',1,'15000',16,0,'','ashish at 1','',''),(35,13,24,2,'2000',1,'2000',19,0,'','divyesh','',''),(36,13,25,1,'25000',1,'25000',19,0,'','','undefined','undefined'),(37,14,26,4,'15000',1,'15000',16,0,'','ashish at 1','',''),(38,14,26,2,'2000',1,'2000',19,0,'','divyesh','',''),(39,14,27,1,'25000',1,'25000',19,0,'','','undefined','undefined'),(40,15,28,4,'15000',1,'15000',16,0,'','','',''),(41,15,28,4,'15000',1,'15000',19,0,'','','',''),(42,15,29,1,'25000',1,'25000',18,0,'','','undefined','undefined'),(43,15,30,3,'35',1,'8750',18,0,'','','undefined','undefined'),(44,35,34,1,'25000',1,'25000',16,0,'','','',''),(45,35,34,2,'12500',1,'12500',16,0,'','','',''),(46,35,35,1,'25000',1,'25000',19,0,'','','undefined','undefined'),(47,35,35,4,'15000',1,'15000',17,0,'','','undefined','undefined'),(48,36,37,1,'25000',1,'25000',16,0,'','','',''),(49,36,37,4,'15000',1,'15000',17,0,'','','',''),(50,36,38,1,'25000',2,'50000',16,0,'','','undefined','undefined'),(51,36,39,1,'25000',2,'50000',16,0,'','','undefined','undefined');
/*!40000 ALTER TABLE `new_event_places_dtl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `new_sub_catg`
--

DROP TABLE IF EXISTS `new_sub_catg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `new_sub_catg` (
  `eq_id` int(11) NOT NULL,
  `as_id` int(11) NOT NULL AUTO_INCREMENT,
  `as_name` varchar(45) DEFAULT NULL,
  `remark` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`as_id`),
  KEY `FK_EQASS_EQID_idx` (`eq_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `new_sub_catg`
--

LOCK TABLES `new_sub_catg` WRITE;
/*!40000 ALTER TABLE `new_sub_catg` DISABLE KEYS */;
INSERT INTO `new_sub_catg` VALUES (1,1,'Wedding','wedding detail','2016-06-15 15:14:38','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(2,2,'Fashion','fashion movie','2016-06-15 15:24:38','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(2,3,'3 idiot','test','2016-07-04 08:53:46','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(3,4,'Marrage album','test','2016-07-04 08:54:26','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL);
/*!40000 ALTER TABLE `new_sub_catg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_cat_mst`
--

DROP TABLE IF EXISTS `product_cat_mst`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_cat_mst` (
  `prd_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `prd_cat_name` varchar(155) DEFAULT NULL,
  `prd_cat_parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(155) DEFAULT NULL,
  PRIMARY KEY (`prd_cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_cat_mst`
--

LOCK TABLES `product_cat_mst` WRITE;
/*!40000 ALTER TABLE `product_cat_mst` DISABLE KEYS */;
INSERT INTO `product_cat_mst` VALUES (1,'Accessories',0,'2016-07-28 11:58:28','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(2,'Album',1,'2016-07-28 12:06:23','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(3,'Camera',1,'2016-07-28 12:06:40','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(4,'Roll',1,'2016-07-28 12:06:54','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(5,'Glass',0,'2016-07-28 12:07:09','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(6,'Double Glass',5,'2016-07-28 12:07:30','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(7,'Single Glass',5,'2016-07-28 12:07:43','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(8,'test',0,'2016-07-28 12:10:27','2016-07-28 12:10:31','0000-00-00 00:00:00','client123');
/*!40000 ALTER TABLE `product_cat_mst` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_mst`
--

DROP TABLE IF EXISTS `product_mst`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_mst` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_nm` varchar(45) DEFAULT NULL,
  `prd_id` varchar(45) DEFAULT NULL,
  `item_code` varchar(45) DEFAULT NULL,
  `disp_nm` varchar(45) DEFAULT NULL,
  `commodity_grp` varchar(45) DEFAULT NULL,
  `prd_cat_id` int(11) DEFAULT NULL,
  `retail_price` varchar(45) DEFAULT NULL,
  `pur_price` varchar(45) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_mst`
--

LOCK TABLES `product_mst` WRITE;
/*!40000 ALTER TABLE `product_mst` DISABLE KEYS */;
INSERT INTO `product_mst` VALUES (1,'test','t123','t123','Camera','Services',1,'2000','1000',1,'2016-07-28 18:28:45','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(2,'test','tevh','hghg','hgh','Services',1,'232','2121',1,'2016-07-28 18:47:24','2016-07-28 18:47:43','0000-00-00 00:00:00','client123'),(3,'Roll','r123','r123','Roll','Product',1,'1500','1500',1,'2016-07-29 07:46:36','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(4,'Single photo','pic123','pic123','Single Photo','Product',3,'250','200',1,'2016-08-03 06:30:49','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL);
/*!40000 ALTER TABLE `product_mst` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `res_places_dtl`
--

DROP TABLE IF EXISTS `res_places_dtl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `res_places_dtl` (
  `res_pls_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) DEFAULT NULL,
  `event_places_id` int(11) DEFAULT NULL,
  `res_id` int(11) DEFAULT NULL,
  `res_name` varchar(45) DEFAULT NULL,
  `qty` varchar(45) DEFAULT NULL,
  `rate` varchar(45) DEFAULT NULL,
  `amount` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`res_pls_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `res_places_dtl`
--

LOCK TABLES `res_places_dtl` WRITE;
/*!40000 ALTER TABLE `res_places_dtl` DISABLE KEYS */;
INSERT INTO `res_places_dtl` VALUES (1,15,28,2,'cinemetography','1','4500','4500'),(2,15,28,1,'photography','1','1200','1200'),(3,15,29,2,'cinemetography','1','4500','4500'),(4,15,29,1,'photography','1','1200','1200'),(5,15,30,2,'cinemetography','1','4500','4500'),(6,29,31,2,'cinemetography','3','4500','13500'),(7,29,32,2,'cinemetography','3','4500','13500'),(8,29,32,1,'photography','2','1200','2400'),(9,29,33,2,'cinemetography','5','4500','22500'),(10,29,33,1,'photography','3','1200','3600');
/*!40000 ALTER TABLE `res_places_dtl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resource_mst`
--

DROP TABLE IF EXISTS `resource_mst`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resource_mst` (
  `res_id` int(11) NOT NULL AUTO_INCREMENT,
  `res_name` varchar(100) DEFAULT NULL,
  `amount` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`res_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resource_mst`
--

LOCK TABLES `resource_mst` WRITE;
/*!40000 ALTER TABLE `resource_mst` DISABLE KEYS */;
INSERT INTO `resource_mst` VALUES (1,'photography','1200','2016-07-27 04:37:46','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(2,'cinemetography','4500','2016-07-27 04:37:46','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(3,'test','500','2016-07-27 10:59:11','2016-07-27 10:59:17','0000-00-00 00:00:00','client123'),(4,'videography','2200','2016-07-27 11:08:08','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL);
/*!40000 ALTER TABLE `resource_mst` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `retail_inv_dtl`
--

DROP TABLE IF EXISTS `retail_inv_dtl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `retail_inv_dtl` (
  `retail_inv_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) DEFAULT NULL,
  `prd_cat_id` int(11) DEFAULT NULL,
  `prod_id` int(11) DEFAULT NULL,
  `comm_grp` varchar(45) DEFAULT NULL,
  `rate` varchar(10) DEFAULT NULL,
  `qty` varchar(45) DEFAULT NULL,
  `amount` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`retail_inv_id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `retail_inv_dtl`
--

LOCK TABLES `retail_inv_dtl` WRITE;
/*!40000 ALTER TABLE `retail_inv_dtl` DISABLE KEYS */;
INSERT INTO `retail_inv_dtl` VALUES (1,17,1,1,'Services','2000','1','2000'),(2,17,3,3,'Product','1500','1','1500'),(3,18,1,1,'Services','2000','1','2000'),(4,18,2,3,'Product','1500','1','1500'),(5,19,1,1,'Services','2000','1','2000'),(6,19,2,3,'Product','1500','1','1500'),(7,20,1,1,'Services','2000','1','2000'),(8,20,2,3,'Product','1500','1','1500'),(9,21,1,1,'Services','2000','1','2000'),(10,21,2,3,'Product','1500','1','1500'),(11,22,1,1,'Services','2000','1','2000'),(12,22,2,3,'Product','1500','1','1500'),(13,23,1,1,'Services','2000','1','2000'),(14,23,2,3,'Product','1500','1','1500'),(15,24,1,1,'Services','2000','1','2000'),(16,24,2,3,'Product','1500','1','1500'),(17,25,1,1,'Services','2000','1','2000'),(18,25,2,3,'Product','1500','1','1500'),(19,26,1,1,'Services','2000','1','2000'),(20,26,2,3,'Product','1500','1','1500'),(21,27,1,1,'Services','2000','1','2000'),(22,27,2,3,'Product','1500','1','1500'),(23,28,1,1,'Services','2000','1','2000'),(24,28,2,3,'Product','1500','1','1500'),(25,30,1,1,'Services','2000','1','2000'),(26,30,2,1,'Services','2000','3','6000'),(27,31,1,1,'Services','2000','1','2000'),(28,31,2,1,'Services','2000','3','6000'),(29,32,1,1,'Services','2000','1','2000'),(30,32,2,1,'Services','2000','3','6000'),(31,33,1,1,'Services','2000','2','4000'),(32,33,1,3,'Product','111','3','333'),(33,33,1,1,'Services','2000','1','2000'),(34,34,1,1,'Services','2000','2','4000'),(35,34,1,3,'Product','111','3','333'),(36,34,1,1,'Services','2000','1','2000'),(37,37,1,1,'Services','2000','1','2000'),(38,37,3,4,'Product','250','5','1250'),(39,38,1,1,'Services','2000','1','2000'),(40,38,1,3,'Product','1500','1','1500'),(41,38,3,4,'Product','250','1','250'),(42,39,1,1,'Services','2000','1','2000'),(43,39,1,3,'Product','1500','1','1500'),(44,39,3,4,'Product','250','1','250'),(45,40,1,1,'Services','2000','1','2000'),(46,40,1,3,'Product','1500','1','1500'),(47,40,3,4,'Product','250','1','250'),(48,41,1,1,'Services','2000','1','2000'),(49,41,1,3,'Product','1500','1','1500'),(50,41,3,4,'Product','250','1','250'),(51,42,1,1,'Services','2000','1','2000'),(52,42,1,3,'Product','1500','1','1500'),(53,42,3,4,'Product','250','1','250'),(54,43,1,1,'Services','2000','1','2000'),(55,43,1,3,'Product','1500','1','1500'),(56,43,3,4,'Product','250','1','250'),(57,44,1,1,'Services','2000','1','2000'),(58,44,1,3,'Product','1500','1','1500'),(59,44,3,4,'Product','250','1','250');
/*!40000 ALTER TABLE `retail_inv_dtl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setting`
--

DROP TABLE IF EXISTS `setting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_tax` varchar(45) DEFAULT NULL,
  `upcoming_days` varchar(45) DEFAULT NULL,
  `inv_cond_json` varchar(5000) DEFAULT NULL,
  `vat` varchar(10) DEFAULT NULL,
  `retail_sales` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setting`
--

LOCK TABLES `setting` WRITE;
/*!40000 ALTER TABLE `setting` DISABLE KEYS */;
INSERT INTO `setting` VALUES (1,'12','15','[\"1.cond1\",\"2. Cond 2\",\"3. Cond3\",\"4. Cond 4\",\"5.Cond 5\"]','10','Enable');
/*!40000 ALTER TABLE `setting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staff_mst`
--

DROP TABLE IF EXISTS `staff_mst`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staff_mst` (
  `staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(25) DEFAULT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `relative1` varchar(15) DEFAULT NULL,
  `relative2` varchar(15) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `add1` varchar(45) DEFAULT NULL,
  `add2` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  `zip` varchar(45) DEFAULT NULL,
  `staff_type` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staff_mst`
--

LOCK TABLES `staff_mst` WRITE;
/*!40000 ALTER TABLE `staff_mst` DISABLE KEYS */;
INSERT INTO `staff_mst` VALUES (15,'prabandhaksuper','admin','admin','virat@siliconbrain.co.in','7575069056',NULL,NULL,'bW9jdXByZXRAMTIzIQ==','Adajan',NULL,'Surat',NULL,NULL,'superadmin'),(16,'ash123','ashish','jariwala','abc@gmail.com','9016664332','9724783505','','YXNoaXNoMTIz','surat','surat','surat','Gujarat','395004','staff'),(17,'client123','Red','Carpet','abc@gmail.com','1234567890',NULL,NULL,'Y2xpZW50MzIx','',NULL,'Surat','Gujarat',NULL,'admin'),(18,'ash123','Ashish','Jariwala','abc@gmail.com','9016664332','','','YXNoMTIz','surat','','surat','Gujarat','395002','staff'),(19,'vishal123','Vishal','Jariwala','vis123@gmail.com','9974624995','','','dmlzaGFsMzIx','sagrampura','','surat','Gujarat','395002','staff');
/*!40000 ALTER TABLE `staff_mst` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staff_permission`
--

DROP TABLE IF EXISTS `staff_permission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staff_permission` (
  `user_id` varchar(15) NOT NULL,
  `permission` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staff_permission`
--

LOCK TABLES `staff_permission` WRITE;
/*!40000 ALTER TABLE `staff_permission` DISABLE KEYS */;
INSERT INTO `staff_permission` VALUES ('client123','[\"ENR\",\"EVD\",\"Event_Status\",\"EALL\",\"NEW\",\"UPC\",\"COM\",\"Equipment\",\"EQA\",\"CTG\",\"ACS\",\"RES\",\"Category\",\"OCTG\",\"OSTG\",\"Product\",\"PRD\",\"PADD\",\"PVIW\",\"Vendors\",\"VAL\",\"Accounting\",\"TRN\",\"PID\",\"UPD\",\"INV\",\"VPD\",\"VUD\",\"Staff\",\"STA\",\"STF\",\"Settings\",\"HOL\",\"CMP\",\"ADC\",\"OPT\",\"EML\",\"TEMP\"]'),('div123','[\"ENR\",\"EVD\",\"Event_Status\",\"EALL\",\"NEW\",\"UPC\",\"COM\",\"Equipment\",\"EQA\",\"CTG\",\"ACS\",\"Vendors\",\"VAL\",\"Accounting\",\"PID\",\"UPD\",\"VPD\",\"VUD\",\"Staff\",\"STA\",\"STF\",\"Settings\",\"HOL\",\"CMP\",\"ADC\",\"OPT\"]');
/*!40000 ALTER TABLE `staff_permission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `template_mst`
--

DROP TABLE IF EXISTS `template_mst`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `template_mst` (
  `template_id` int(11) NOT NULL AUTO_INCREMENT,
  `template_name` varchar(50) DEFAULT NULL,
  `template_body` longtext,
  PRIMARY KEY (`template_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `template_mst`
--

LOCK TABLES `template_mst` WRITE;
/*!40000 ALTER TABLE `template_mst` DISABLE KEYS */;
INSERT INTO `template_mst` VALUES (1,'InvoicePdf','<table class=\"tg\" style=\"border-collapse: collapse; border-spacing: 0;\">  <tbody>  <tr>  <th colspan=\"5\"><img src=\"images/ombanner.jpg\" width=\"1020\" height=\"320\" /></th>  </tr>  <tr class=\"trhw\">  <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 80px; font-family: Calibri;font-size:12px;vertical-align:bottom;color:#4e4e4e;\" colspan=\"3\">To: [Company]</td>  <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 20px; font-family: Calibri;vertical-align:bottom;color:#4e4e4e;\" colspan=\"2\">&nbsp;</td>  </tr>  <tr class=\"trhw\">  <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 80px; font-family: Calibri;font-size:12px;vertical-align:bottom;color:#4e4e4e;\" colspan=\"3\">Order: [OrderName]</td>  <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 20px; font-family: Calibri;font-size:12px;vertical-align:bottom;color:#4e4e4e;\" colspan=\"2\">Quotation No: [OrderId]</td>  </tr>  <tr class=\"trhw\">  <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 80px; font-family: Calibri;font-size:12px;vertical-align:bottom;color:#4e4e4e;\" colspan=\"5\">Order Date : [OrderDate]</td>  </tr>  <tr class=\"trhw\">  <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 80px; font-family: Calibri;font-size:12px;vertical-align:bottom;color:#4e4e4e;\" colspan=\"3\">Vennue: [Venue]</td>  <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 20px; font-family: Calibri;font-size:12px;vertical-align:bottom;color:#4e4e4e;\" colspan=\"2\">Invoice No: </td>  </tr>  <tr class=\"trhw\">  <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 80px; font-family: Calibri;font-size:12px;vertical-align:bottom;color:#4e4e4e;\" colspan=\"5\">Client: [ClientName]</td>  </tr>   <tr class=\"trhw\">  <td class=\"tg-vi9z\" style=\"border-width: 0px;  padding: 5px 5px;vertical-align:bottom;\" colspan=\"5\">&nbsp;</td>  </tr>   <tr class=\"trhw\" style=\"background-color: #9a9a9a; font-family: Calibri;\">  <td class=\"tg-m36b thsrno\" style=\"font-size:12px;padding: 5px 5px;color:#e1e1e1;\">Sr.No</td>  <td class=\"tg-m36b theqp\" style=\"font-size:12px;padding: 5px 5px;color:#e1e1e1;\" >Particulars</td>  <td class=\"tg-ullm thsrno\" style=\"text-align: right;font-size:12px;padding: 5px 5px;color:#e1e1e1;\">Qty.</td>  <td class=\"tg-ullm thamt\" style=\"text-align: right;font-size:12px;padding: 5px 5px;color:#e1e1e1;\">Unit Cost</td>  <td class=\"tg-ullm thamt\" style=\"text-align: right;font-size:12px;padding: 5px 5px;color:#e1e1e1;\">Amount</td>  </tr>  <tr class=\"trhw\">  <td class=\"tg-vi9z\"  colspan=\"5\" >[Description]</td>  </tr>    <tr class=\"trhw\">  <td class=\"tg-jtyd\" style=\"text-align: right; background-color: #9a9a9a;font-size:12px;padding: 5px 5px;color:#e1e1e1;\" colspan=\"4\">Charge</td>  <td class=\"tg-3gzm\" style=\"background-color: #d9d9d9; text-align: right;font-size:12px;padding: 5px 5px;color:#4e4e4e;\">&nbsp;[ClientCharge]</td>  </tr>  <tr class=\"trhw\">  <td class=\"tg-jtyd\" style=\"text-align: right; background-color: #9a9a9a;font-size:12px;padding: 5px 5px;color:#e1e1e1;\" colspan=\"4\">Discount</td>  <td class=\"tg-3gzm\" style=\"background-color: #d9d9d9; text-align: right;font-size:12px;padding: 5px 5px;color:#4e4e4e;\">&nbsp;[Discount]</td>  </tr>  <tr class=\"trhw\">  <td class=\"tg-jtyd\" style=\"text-align: right; background-color: #9a9a9a;font-size:12px;padding: 5px 5px;color:#e1e1e1;\" colspan=\"4\">S.Tax&nbsp;[TaxRate] %</td>  <td class=\"tg-3gzm\" style=\"background-color: #d9d9d9; text-align: right;font-size:12px;padding: 5px 5px;color:#4e4e4e;\">&nbsp;[TaxAmt]</td>  </tr>  <tr class=\"trhw\">  <td class=\"tg-jtyd\" style=\"text-align: right; background-color: #9a9a9a;font-size:12px;padding: 5px 5px;color:#e1e1e1;\" colspan=\"4\">Total</td>  <td class=\"tg-3gzm\" style=\"background-color: #d9d9d9; text-align: right;font-size:12px;padding: 5px 5px;color:#4e4e4e;\">&nbsp;[Total]</td>  </tr>  <tr class=\"trhw\">  <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9;padding: 5px 5px;\" colspan=\"5\" rowspan=\"1\">&nbsp;</td>  </tr>  <tr>  <td class=\"tg-3gzm\" style=\"text-align: center; vertical-align: bottom; background-color: #d9d9d9;\" colspan=\"1\">&nbsp;</td>  <td style=\"background-color: #d9d9d9; vertical-align: bottom;color:#4e4e4e;\" colspan=\"2\">Remark</td>  <td class=\"tg-3gzm\" style=\"text-align: center; vertical-align: bottom; background-color: #d9d9d9;color:#4e4e4e;\" colspan=\"2\">Venture Of</td>  </tr>  <tr>  <td class=\"tg-3gzm\" style=\"text-align: center; vertical-align: bottom; background-color: #d9d9d9;\" colspan=\"1\">&nbsp;</td>  <td style=\"background-color: #d9d9d9; vertical-align: bottom;color:#4e4e4e;\" colspan=\"2\">E.&amp;.O.E.</td>  <td class=\"tg-3gzm\" style=\"text-align: center; background-color: #d9d9d9;\" colspan=\"2\"><img src=\"images/smlogo.png\" /></td>  </tr>  <tr class=\"trhw\">  <td class=\"tg-vi9z\" style=\"border-width: 0px;  padding: 5px 5px;vertical-align:bottom;background-color: #d9d9d9;\" colspan=\"5\">&nbsp;</td>  </tr>  </tbody>  </table>'),(2,'InvoiceQuotation','<html><body><table class=\"tg\" style=\"border-collapse: collapse; border-spacing: 0;\"> <tr>            <th colspan=\"5\"><img width=\"1020\" height=\"320\" src=\"images/ombanner.jpg\"></th>        </tr>        <tr class=\"trhw\">            <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 80px; font-family: Calibri;font-size:12px;vertical-align:bottom;color:#4e4e4e;\" colspan=\"4\">To: [Company]</td>            <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 20px; font-family: Calibri;vertical-align:bottom;color:#4e4e4e;\" colspan=\"1\">&nbsp;</td>        </tr>        <tr class=\"trhw\">            <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 80px; font-family: Calibri;font-size:12px;vertical-align:bottom;color:#4e4e4e;\" colspan=\"4\">Order: [OrderName]</td>            <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 20px; font-family: Calibri;font-size:12px;vertical-align:bottom;color:#4e4e4e;\" colspan=\"1\">Quotation No: [OrderId]</td>        </tr>        <tr class=\"trhw\">            <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 80px; font-family: Calibri;font-size:12px;vertical-align:bottom;color:#4e4e4e;\" colspan=\"5\">Order Date : [OrderDate]</td>        </tr>        <tr class=\"trhw\">            <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 80px; font-family: Calibri;font-size:12px;vertical-align:bottom;color:#4e4e4e;\" colspan=\"4\">Vennue: [Venue]</td>            <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 20px; font-family: Calibri;font-size:12px;vertical-align:bottom;color:#4e4e4e;\" colspan=\"1\">Invoice No: </td>        </tr>        <tr class=\"trhw\">            <td class=\"tg-vi9z\" colspan=\"5\" style=\"background-color: #d9d9d9; padding: 5px 80px; font-family: Calibri;font-size:12px;vertical-align:bottom;color:#4e4e4e;\">Client:</td>        </tr>        <tr class=\"trhw\">            <td class=\"tg-vi9z\" style=\"border-width: 0px;  padding: 5px 5px;vertical-align:bottom;\" colspan=\"5\">&nbsp;</td>        </tr>        <tr class=\"trhw\">			<td class=\"tg-vi9z\" colspan=\"5\">[Description] </td>		</tr>        <tr class=\"trhw\">            <td class=\"tg-jtyd\" style=\"text-align: right; background-color: #9a9a9a;font-size:12px;padding: 5px 5px;color:#e1e1e1;\" colspan=\"4\">Charge</td>            <td class=\"tg-3gzm\" style=\"background-color: #d9d9d9; text-align: right;font-size:12px;padding: 5px 5px;color:#4e4e4e;\">&nbsp;[ClientCharge]</td>        </tr>        <tr class=\"trhw\">            <td class=\"tg-jtyd\" style=\"text-align: right; background-color: #9a9a9a;font-size:12px;padding: 5px 5px;color:#e1e1e1;\" colspan=\"4\">Discount</td>            <td class=\"tg-3gzm\" style=\"background-color: #d9d9d9; text-align: right;font-size:12px;padding: 5px 5px;color:#4e4e4e;\">&nbsp;[Discount]</td>        </tr>        <tr class=\"trhw\">            <td class=\"tg-jtyd\" style=\"text-align: right; background-color: #9a9a9a;font-size:12px;padding: 5px 5px;color:#e1e1e1;\" colspan=\"4\">S.Tax&nbsp;[TaxRate] %</td>            <td class=\"tg-3gzm\" style=\"background-color: #d9d9d9; text-align: right;font-size:12px;padding: 5px 5px;color:#4e4e4e;\">&nbsp;[TaxAmt]</td>        </tr>        <tr class=\"trhw\">            <td class=\"tg-jtyd\" style=\"text-align: right; background-color: #9a9a9a;font-size:12px;padding: 5px 5px;color:#e1e1e1;\" colspan=\"4\">Total</td>            <td class=\"tg-3gzm\" style=\"background-color: #d9d9d9; text-align: right;font-size:12px;padding: 5px 5px;color:#4e4e4e;\">&nbsp;[Total]</td>        </tr>        <tr>            <td colspan=\"5\" style=\"height:30px;vertical-align:bottom;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;padding: 5px 5px;\"> I have carefully read and agreed on the final quotation with all terms & conditions mentioned. </td>        </tr>        <tr>            <td colspan=\"4\" style=\"background-color: #d9d9d9;font-size:12px;color:#4e4e4e;\">Signature <br>(Client) </td>            <td colspan=\"1\" style=\"background-color: #d9d9d9;font-size:12px;color:#4e4e4e;\">Signature <br>[Company] </td>        </tr>        <tr>            <td colspan=\"5\" style=\"height:30px;vertical-align:bottom;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;padding: 5px 5px;\"> </td>        </tr>    </table></body></html>'),(3,'Quotation Condition','<table>    <tr>        <th colspan=\"2\"> <img width=\"1020\" height=\"320\" src=\"images/ombanner.jpg\"> </th>    </tr>    <tr>        <td colspan=\"2\" style=\"height:50px;font-size:16px;vertical-align:bottom;color: #4e4e4e;border-color: #4e4e4e;\"> <b>Terms & Conditions related to Wedding or Event Photography & Filmmaking Project</b> </td>    </tr>    <tr>        <td colspan=\"2\" style=\"height:200px; font-size:13px;border-style:solid;padding:7px 3px; border-width:1px;color: #4e4e4e;border-color: #4e4e4e;\"> (1) Album Printing Cost is Not included into this quotation.<br> (2) In case of any film corrections,changes should be communicated by the client within 20 days after the submission.<br> (3) Movie editing cost is included into this quotation.<br> (4) 2 sets od DVDs & 1 set of HD/Blu-ray-Disk is includedin the quotation.<br> (5) Raw data of the project will be handed over to the client only when the payment is paid.<br> (6) Album Printing Cost will be required on the delivery of the album.<br> (7) Delivery time of the Wedding Film will be minimum60 days after post production advanced is received.<br> (8) Delivery time of the albums will be minimum 50 days after the final selection of pictures from the client\\\'s end.<br> (9) Stage set-up or Back-drop arrangement will be managed by the event manager or by the client\\\'s decoration agency.<br> (10)We shall not be able to shoot on the other than the dates mentioned in the final quotation.<br> (11)For events outside the surat city; Accomodation & Food will be arranged by the client at same venue.<br> (12)For events outside the surat city; Travelling & Transportation will be arranged by the client or charges will be at actuals.<br> (13)Album design correction and film correction will be managed only once & at a time.<br> (14)Final wedding film includes 1 trailer up to 5 minutes & event wise full edited films.<br> (15)Any additional cuts for the wedding films will be charged as per the requirments.<br> (16)Any type of advance amount is no refundable.<br> (17)Any amount related to LED Screens,Mixer,Instant printing will be required well in advance.<br> </td>    </tr>    <tr>        <td colspan=\"2\" style=\"height:50px;font-size:16px;vertical-align:bottom;color: #4e4e4e;border-color: #4e4e4e;\"> Terms & Conditions related to Payment </td>    </tr>    <tr>        <td colspan=\"2\" style=\"height:100px; font-size:13px;border-style:solid;padding:7px 3px; border-width:1px;color: #4e4e4e;border-color: #4e4e4e;\"> (1) 40% Advance amount is required to block the dates.<br> (2) 40% Pending amount is to be paid on completion of shoot.<br> (3) 10% Pending amount is to be paid to start the editing process.<br> (4) 10% Pending amount is to be paid at the end of editing process.<br> </td>    </tr>    <tr>        <td colspan=\"2\" style=\"height:30px;vertical-align:bottom;color: #4e4e4e;border-color: #4e4e4e;\"> I have carefully read and agreed on the final quotation with all terms & conditions mentioned. </td>    </tr>    <tr>        <td colspan=\"1\" style=\"height:100px;vertical-align:bottom;color: #4e4e4e;border-color: #4e4e4e;\">Signature <br>(Client) </td>        <td colspan=\"1\" style=\"height:100px;vertical-align:bottom;float:right;color: #4e4e4e;border-color: #4e4e4e;\">Signature <br>[Company] </td>    </tr></table>'),(4,'Retail Invoice','<table class=\"tg\" style=\"border-collapse: collapse; border-spacing: 0;\"> <tbody> <tr> <th colspan=\"5\"><img src=\"images/ombanner.jpg\" width=\"1020\" height=\"320\" /></th> </tr> <tr class=\"trhw\"> <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 80px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"3\">To: [Company]</td> <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 20px; font-family: Calibri; vertical-align: bottom; color: #4e4e4e;\" colspan=\"2\">&nbsp;</td> </tr> <tr class=\"trhw\"> <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 80px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"3\">Order: [OrderName]</td> <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 20px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"2\">Quotation No: [OrderId]</td> </tr> <tr class=\"trhw\"> <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 80px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"3\">Order Date : [OrderDate]</td> <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 20px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"2\">Delivery Date : [DeliveryDate]</td> </tr> <tr class=\"trhw\"> <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 80px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"3\">Client: [ClientName]</td> <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 20px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"2\">Invoice No:</td> </tr> <tr class=\"trhw\"> <td class=\"tg-vi9z\" style=\"border-width: 0px; padding: 5px 5px; vertical-align: bottom;\" colspan=\"5\">&nbsp;</td> </tr> <tr class=\"trhw\" style=\"background-color: #9a9a9a; font-family: Calibri;\"> <td class=\"tg-m36b thsrno\" style=\"font-size: 12px; padding: 5px 5px; color: #e1e1e1;\">Sr.No</td> <td class=\"tg-m36b theqp\" style=\"font-size: 12px; padding: 5px 5px; color: #e1e1e1;\">Particulars</td> <td class=\"tg-ullm thsrno\" style=\"text-align: right; font-size: 12px; padding: 5px 5px; color: #e1e1e1;\">Qty.</td> <td class=\"tg-ullm thamt\" style=\"text-align: right; font-size: 12px; padding: 5px 5px; color: #e1e1e1;\">Unit Cost</td> <td class=\"tg-ullm thamt\" style=\"text-align: right; font-size: 12px; padding: 5px 5px; color: #e1e1e1;\">Amount</td> </tr> <tr class=\"trhw\"> <td class=\"tg-vi9z\" colspan=\"5\">[Description]</td> </tr> <tr class=\"trhw\"> <td class=\"tg-jtyd\" style=\"text-align: right; background-color: #9a9a9a; font-size: 12px; padding: 5px 5px; color: #e1e1e1;\" colspan=\"4\">Charge</td> <td class=\"tg-3gzm\" style=\"background-color: #d9d9d9; text-align: right; font-size: 12px; padding: 5px 5px; color: #4e4e4e;\">&nbsp;[ClientCharge]</td> </tr> <tr class=\"trhw\"> <td class=\"tg-jtyd\" style=\"text-align: right; background-color: #9a9a9a; font-size: 12px; padding: 5px 5px; color: #e1e1e1;\" colspan=\"4\">Discount</td> <td class=\"tg-3gzm\" style=\"background-color: #d9d9d9; text-align: right; font-size: 12px; padding: 5px 5px; color: #4e4e4e;\">&nbsp;[Discount]</td> </tr> <tr class=\"trhw\"> <td class=\"tg-jtyd\" style=\"text-align: right; background-color: #9a9a9a; font-size: 12px; padding: 5px 5px; color: #e1e1e1;\" colspan=\"4\">S.Tax&nbsp;[TaxRate] %</td> <td class=\"tg-3gzm\" style=\"background-color: #d9d9d9; text-align: right; font-size: 12px; padding: 5px 5px; color: #4e4e4e;\">&nbsp;[TaxAmt]</td> </tr> <tr class=\"trhw\"> <td class=\"tg-jtyd\" style=\"text-align: right; background-color: #9a9a9a; font-size: 12px; padding: 5px 5px; color: #e1e1e1;\" colspan=\"4\">Total</td> <td class=\"tg-3gzm\" style=\"background-color: #d9d9d9; text-align: right; font-size: 12px; padding: 5px 5px; color: #4e4e4e;\">&nbsp;[Total]</td> </tr> <tr class=\"trhw\"> <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 5px;\" colspan=\"5\" rowspan=\"1\">&nbsp;</td> </tr> <tr> <td class=\"tg-3gzm\" style=\"text-align: center; vertical-align: bottom; background-color: #d9d9d9;\" colspan=\"1\">&nbsp;</td> <td style=\"background-color: #d9d9d9; vertical-align: bottom; color: #4e4e4e;\" colspan=\"2\">Remark</td> <td class=\"tg-3gzm\" style=\"text-align: center; vertical-align: bottom; background-color: #d9d9d9; color: #4e4e4e;\" colspan=\"2\">Venture Of</td> </tr> <tr> <td class=\"tg-3gzm\" style=\"text-align: center; vertical-align: bottom; background-color: #d9d9d9;\" colspan=\"1\">&nbsp;</td> <td style=\"background-color: #d9d9d9; vertical-align: bottom; color: #4e4e4e;\" colspan=\"2\">E.&amp;.O.E.</td> <td class=\"tg-3gzm\" style=\"text-align: center; background-color: #d9d9d9;\" colspan=\"2\"><img src=\"images/smlogo.png\" /></td> </tr> <tr class=\"trhw\"> <td class=\"tg-vi9z\" style=\"border-width: 0px; padding: 5px 5px; vertical-align: bottom; background-color: #d9d9d9;\" colspan=\"5\">&nbsp;</td> </tr> </tbody> </table>');
/*!40000 ALTER TABLE `template_mst` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendor_mst`
--

DROP TABLE IF EXISTS `vendor_mst`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vendor_mst` (
  `vend_id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_name` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `cat_id` int(11) NOT NULL,
  `vendor_cmp` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`vend_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendor_mst`
--

LOCK TABLES `vendor_mst` WRITE;
/*!40000 ALTER TABLE `vendor_mst` DISABLE KEYS */;
INSERT INTO `vendor_mst` VALUES (1,'Divyesh',1,'','2016-06-23 11:49:12','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(2,'Ashish',2,'BalKrushnaJari','2016-07-01 04:39:32','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(3,'Dipesh',3,'chamunda jari','2016-07-01 04:40:33','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(4,'',0,'','2016-07-05 16:07:25','2016-07-05 16:16:03','0000-00-00 00:00:00','client123'),(5,'Anand',1,'Silicon','2016-07-05 16:14:37','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(6,'Raj',3,'Raghav and Sons','2016-07-05 16:16:58','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL);
/*!40000 ALTER TABLE `vendor_mst` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-08-13 12:56:05
