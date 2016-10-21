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
  `cmp_logo` varchar(45) DEFAULT NULL,
  `cmp_default` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cmp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_mst`
--

LOCK TABLES `company_mst` WRITE;
/*!40000 ALTER TABLE `company_mst` DISABLE KEYS */;
INSERT INTO `company_mst` VALUES (1,'siliconbrain','sb123','ombanner.jpg','smlogo.png',0,'2016-06-24 08:09:47','0000-00-00 00:00:00','2016-09-28 09:17:02',NULL),(2,'RD Construction','rd123','ombanner.jpg','smlogo.png',1,'2016-07-29 18:58:08','0000-00-00 00:00:00','2016-09-28 09:17:02',NULL),(3,'studio om','str123','ombanner.jpg','smlogo.png',0,'2016-08-01 05:23:47','0000-00-00 00:00:00','2016-09-28 09:17:02',NULL),(4,'','','logo1.png','smlogo.png',0,'2016-09-03 09:19:07','2016-09-03 09:23:14','2016-09-28 09:17:02','client123'),(5,'Divyesh1','D1234','50mmbanner.jpg','smlogo.png',0,'2016-09-03 09:25:58','0000-00-00 00:00:00','2016-09-28 09:17:02',NULL),(6,'simplyBrain','sb123','logo.png','smlogo.png',0,'2016-09-03 10:19:48','0000-00-00 00:00:00','2016-09-28 09:17:02',NULL),(7,'Studio Om New','SON123','ombanner.jpg','smlogo.png',0,'2016-09-05 06:01:53','0000-00-00 00:00:00','2016-09-28 09:17:02',NULL),(8,'Shree Tulsi Movies','','STM.png','smlogo.png',0,'2016-09-16 11:36:36','0000-00-00 00:00:00','2016-09-28 09:17:02',NULL),(9,'testimg','a123','^248453BF7BBC37847DBDA8845571F497057522F5BC5D','smlogo.png',0,'2016-10-03 10:41:16','2016-10-09 14:49:20','0000-00-00 00:00:00','client123'),(10,'test banr and logo','blogo123','ombanner.jpg','smlogo.png',0,'2016-10-09 14:21:44','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(11,'redcartpet123','red123','REDCarpetBanner.png','testlogo.png',0,'2016-10-09 14:50:01','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL);
/*!40000 ALTER TABLE `company_mst` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_dtl`
--

DROP TABLE IF EXISTS `contact_dtl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_dtl` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(20) DEFAULT NULL,
  `company_name` varchar(20) DEFAULT NULL,
  `mobile_no` varchar(20) DEFAULT NULL,
  `work_no` varchar(20) DEFAULT NULL,
  `email_id` varchar(30) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `client_type` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_dtl`
--

LOCK TABLES `contact_dtl` WRITE;
/*!40000 ALTER TABLE `contact_dtl` DISABLE KEYS */;
INSERT INTO `contact_dtl` VALUES (1,'Divyesh','RanaConstuct','2147483647','0','div@gmmai.com','Sagrampura surat',NULL),(2,'Divyesh','Rd const','2147483647','0','div@gmail.com','aa','Event'),(3,'Krunal','krindustry','0','2147483647','div@gmail.com','								','Event'),(4,'Divyesh','divyesh','2147483647','0','div@gmail.com','Sagrampura','Event'),(5,'Krunal','krindustry','0','2147483647','kr@gmail.com','								','Event'),(6,'Divyesh','krindustry','2147483647','0','rahul.hathi@gmail.com','		as						','Event'),(7,'harshil',NULL,'1234567890','0','','as','Retail'),(8,'Tetdisvyesh',NULL,'2147483647','0','','			s								','Retail'),(9,'TestData',NULL,'2147483647','0','','				as							','Retail'),(10,'TestData',NULL,'2147483647','0','','				as							','Retail'),(11,'harshil123',NULL,'2147483647','0','','s','Retail'),(12,'harshil123',NULL,'2147483647','0','','											','Retail'),(13,'harshil123',NULL,'2147483647','0','','											','Retail'),(14,'harshil123',NULL,'2147483647','0','','											','Retail'),(15,'harshil123',NULL,'2147483647','0','','											','Retail'),(16,'harshil123',NULL,'2147483647','0','','											','Retail'),(17,'harshil123',NULL,'2147483647','0','','											','Retail'),(18,'harshil123',NULL,'2147483647','0','','											','Retail'),(19,'harshil123',NULL,'2147483647','0','','											','Retail'),(20,'harshil123',NULL,'2147483647','0','','											','Retail'),(21,'harshil123',NULL,'2147483647','0','','											','Retail'),(22,'harshil123',NULL,'2147483647','0','','											','Retail'),(23,'harshil123',NULL,'2147483647','0','','											','Retail'),(24,'tetst',NULL,'2147483647','0','','											','Retail'),(25,'testraja',NULL,'1452637894','0','','										sagrampura1	','Retail'),(26,'rajhit',NULL,'123462556','0','','									Sagrampura		','Retail'),(27,'test Reatail','','9812578125','','divyeshdolly1990@gmail.com','sagrampura										','Retail'),(28,'Raju123','','9724783505','','divyeshdolly1990@gmail.com','		sagrampura									','Retail'),(29,'Krunal','divyesh','9685748574','','div@gmail.com','sagrampura								','Event'),(30,'Kunall Chauhan','','','','krishna.kunal14@gmail','								','Event'),(31,'Rana Divysh','testcompany','9725842109','','rahul.hathi@gmail.com','Sagrampura Ramnivas Society Surat							','Event');
/*!40000 ALTER TABLE `contact_dtl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `deliverable_mst`
--

DROP TABLE IF EXISTS `deliverable_mst`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `deliverable_mst` (
  `delv_id` int(11) NOT NULL AUTO_INCREMENT,
  `delv_name` varchar(45) DEFAULT NULL,
  `delv_type` varchar(45) DEFAULT NULL,
  `amount` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`delv_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deliverable_mst`
--

LOCK TABLES `deliverable_mst` WRITE;
/*!40000 ALTER TABLE `deliverable_mst` DISABLE KEYS */;
INSERT INTO `deliverable_mst` VALUES (1,'Album','','20000','2016-09-27 19:29:45','2016-09-27 19:37:24','0000-00-00 00:00:00','client123'),(2,'Album','','20000','2016-09-27 19:29:57','2016-09-27 19:37:18','0000-00-00 00:00:00','client123'),(3,'Album','3','20000','2016-09-27 19:31:19','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(4,'CD/DVD','1','2500','2016-09-27 19:32:41','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(5,'Banner','2','400','2016-09-27 19:33:02','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL);
/*!40000 ALTER TABLE `deliverable_mst` ENABLE KEYS */;
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
  `as_name` varchar(100) DEFAULT NULL,
  `remark` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`as_id`),
  KEY `FK_EQASS_EQID_idx` (`eq_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COMMENT='		';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eq_accessories`
--

LOCK TABLES `eq_accessories` WRITE;
/*!40000 ALTER TABLE `eq_accessories` DISABLE KEYS */;
INSERT INTO `eq_accessories` VALUES (1,1,'aaaa','','2016-07-12 05:37:59','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(1,2,'bbbbb','','2016-07-12 05:38:10','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(2,3,'Monitor','15 inch monitor','2016-08-31 10:19:04','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(2,4,'Hard Disk','500 gb hard disk','2016-08-31 10:19:40','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(2,5,'Ram','3 gb ddr 2 Ram','2016-08-31 10:20:12','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(2,6,'Combination Of Parts(Ram,Harddisk,Keyboard,Mo','','2016-08-31 10:21:08','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(2,7,'KeyBoard','tvs keyboard','2016-10-19 04:56:19','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eq_category_mst`
--

LOCK TABLES `eq_category_mst` WRITE;
/*!40000 ALTER TABLE `eq_category_mst` DISABLE KEYS */;
INSERT INTO `eq_category_mst` VALUES (1,'electronic eqp','','2016-06-23 10:50:19','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(2,'Computer Parts','All computer Parts','2016-08-31 10:18:25','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(3,'test','testdesc','2016-10-18 12:10:32','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipment_mst`
--

LOCK TABLES `equipment_mst` WRITE;
/*!40000 ALTER TABLE `equipment_mst` DISABLE KEYS */;
INSERT INTO `equipment_mst` VALUES (1,'camera','cam123','cam123',1,'2016-06-23 04:06:37','surat','','','25000','1','2016-06-23 10:51:11','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(2,'Projectors','proj123','proj123',1,'2016-07-01 10:07:46','Surat','projector for rent','projector for rent','12500','1','2016-07-01 04:36:58','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(3,'LedLight','lgt123','lgt123',1,'2016-07-05 11:07:36','Surat','test','test','35','2','2016-07-05 05:31:16','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(4,'laptop','lap123','lap123',1,'0000-00-00 00:00:00','Surat','testmultiple','testmultiple','15000','1','2016-07-05 17:59:15','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(5,'testrate0','t123','t123',1,'2016-08-29 10:03:22','surat','testing','testing','0','1','2016-08-29 04:34:48','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(6,'Computer','Com123','Com123',2,'2016-08-31 16:30:00','Surat','total  no of computer','total  no of computer','35000','1','2016-08-31 11:01:18','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL);
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
  PRIMARY KEY (`invoice_id`),
  KEY `event_id` (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=413 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_client_invoice_dtl`
--

LOCK TABLES `event_client_invoice_dtl` WRITE;
/*!40000 ALTER TABLE `event_client_invoice_dtl` DISABLE KEYS */;
INSERT INTO `event_client_invoice_dtl` VALUES (1,2,'20160624-2_1.pdf','2016-06-24 14:26:15',NULL,'client123'),(2,2,'20160624-2_2.pdf','2016-06-24 14:28:15',NULL,'client123'),(3,2,'20160624-2_3.pdf','2016-06-24 14:30:04',NULL,'client123'),(4,2,'20160624-2_4.pdf','2016-06-24 14:33:35',NULL,'client123'),(5,1,'20160624-1_1.pdf','2016-06-24 17:16:41',NULL,'client123'),(6,6,'20160701-6_1.pdf','2016-07-04 15:53:57',NULL,'client123'),(7,6,'20160701-6_2.pdf','2016-07-04 15:54:15',NULL,'client123'),(8,6,'20160701-6_3.pdf','2016-07-04 16:14:37',NULL,'client123'),(9,10,'20160708-10_1.pdf','2016-07-11 14:09:19',NULL,'client123'),(10,10,'20160708-10_2.pdf','2016-07-11 14:09:31',NULL,'client123'),(11,10,'20160708-10_3.pdf','2016-07-11 14:12:48',NULL,'client123'),(12,10,'20160708-10_4.pdf','2016-07-11 15:08:13',NULL,'client123'),(13,10,'20160708-10_5.pdf','2016-07-11 15:10:02',NULL,'client123'),(14,2,'20160624-2_5.pdf','2016-07-14 23:04:09',NULL,'client123'),(15,10,'20160708-10_6.pdf','2016-07-14 23:04:29',NULL,'client123'),(16,8,'20160726-8_1.pdf','2016-07-16 12:28:37',NULL,'client123'),(17,8,'20160726-8_2.pdf','2016-07-16 12:29:08',NULL,'client123'),(18,8,'20160726-8_3.pdf','2016-07-16 12:29:35',NULL,'client123'),(19,8,'20160726-8_4.pdf','2016-07-16 12:32:56',NULL,'client123'),(20,8,'20160726-8_5.pdf','2016-07-16 12:35:07',NULL,'client123'),(21,12,'20160715-12_1.pdf','2016-07-16 13:27:55',NULL,'client123'),(22,12,'20160715-12_2.pdf','2016-07-16 13:27:59',NULL,'client123'),(23,12,'20160715-12_3.pdf','2016-07-16 14:34:11',NULL,'client123'),(24,12,'20160715-12_4.pdf','2016-07-16 15:05:20',NULL,'client123'),(25,12,'20160715-12_5.pdf','2016-07-16 16:18:04',NULL,'client123'),(26,4,'20160720-4_1.pdf','2016-07-25 15:05:51',NULL,'client123'),(27,5,'20160715-5_1.pdf','2016-07-25 16:49:31',NULL,'client123'),(28,5,'20160715-5_2.pdf','2016-07-25 16:50:18',NULL,'client123'),(29,5,'20160715-5_3.pdf','2016-07-25 16:52:21',NULL,'client123'),(30,2,'20160624-2_6.pdf','2016-07-25 17:12:27',NULL,'client123'),(31,12,'20160715-12_6.pdf','2016-07-27 16:39:42',NULL,'client123'),(32,12,'20160715-12_7.pdf','2016-07-27 16:56:27',NULL,'client123'),(33,12,'20160715-12_8.pdf','2016-07-27 16:57:39',NULL,'client123'),(34,12,'20160715-12_9.pdf','2016-07-27 17:01:26',NULL,'client123'),(35,12,'20160715-12_10.pdf','2016-07-27 17:49:12',NULL,'client123'),(36,12,'20160715-12_2.pdf','2016-07-27 17:53:42',NULL,'client123'),(37,12,'20160715-12_3.pdf','2016-07-27 18:03:55',NULL,'client123'),(38,12,'20160715-12_4.pdf','2016-07-27 18:05:12',NULL,'client123'),(39,11,'20160715-11_1.pdf','2016-07-27 18:10:06',NULL,'client123'),(40,12,'20160715-12_5.pdf','2016-07-27 18:28:21',NULL,'client123'),(41,12,'20160715-12_6.pdf','2016-07-27 18:30:26',NULL,'client123'),(42,12,'20160715-12_7.pdf','2016-07-27 18:31:38',NULL,'client123'),(43,12,'20160715-12_8.pdf','2016-07-27 18:43:36',NULL,'client123'),(44,11,'20160715-11_2.pdf','2016-07-27 23:01:33',NULL,'client123'),(45,12,'20160715-12_9.pdf','2016-07-27 23:16:01',NULL,'client123'),(46,12,'20160715-12_10.pdf','2016-07-27 23:18:35',NULL,'client123'),(47,12,'20160715-12_2.pdf','2016-07-27 23:20:59',NULL,'client123'),(48,12,'20160715-12_3.pdf','2016-07-27 23:22:29',NULL,'client123'),(49,12,'20160715-12_4.pdf','2016-07-27 23:23:07',NULL,'client123'),(50,12,'20160715-12_5.pdf','2016-07-27 23:27:18',NULL,'client123'),(51,12,'20160715-12_6.pdf','2016-07-27 23:36:34',NULL,'client123'),(54,3,'20160629-3_1.pdf','2016-07-28 14:21:00',NULL,'client123'),(55,3,'20160629-3_2.pdf','2016-07-28 14:30:09',NULL,'client123'),(56,3,'20160629-3_3.pdf','2016-07-28 14:30:49',NULL,'client123'),(57,3,'20160629-3_4.pdf','2016-07-28 14:31:37',NULL,'client123'),(58,3,'20160629-3_5.pdf','2016-07-28 14:33:34',NULL,'client123'),(59,3,'20160629-3_6.pdf','2016-07-28 14:34:59',NULL,'client123'),(60,3,'20160629-3_7.pdf','2016-07-28 14:35:36',NULL,'client123'),(61,3,'20160629-3_8.pdf','2016-07-28 14:36:33',NULL,'client123'),(62,3,'20160629-3_9.pdf','2016-07-28 14:37:19',NULL,'client123'),(63,3,'20160629-3_10.pdf','2016-07-28 14:38:28',NULL,'client123'),(64,3,'20160629-3_2.pdf','2016-07-28 14:41:35',NULL,'client123'),(65,3,'20160629-3_3.pdf','2016-07-28 14:48:43',NULL,'client123'),(66,3,'20160629-3_4.pdf','2016-07-28 14:51:42',NULL,'client123'),(67,3,'20160629-3_5.pdf','2016-07-28 14:57:49',NULL,'client123'),(68,3,'20160629-3_6.pdf','2016-07-28 14:58:16',NULL,'client123'),(69,3,'20160629-3_7.pdf','2016-07-28 15:01:03',NULL,'client123'),(70,3,'20160629-3_8.pdf','2016-07-28 15:02:47',NULL,'client123'),(71,3,'20160629-3_9.pdf','2016-07-28 15:04:43',NULL,'client123'),(72,3,'20160629-3_10.pdf','2016-07-28 15:05:15',NULL,'client123'),(73,3,'20160629-3_2.pdf','2016-07-28 15:06:14',NULL,'client123'),(74,3,'20160629-3_3.pdf','2016-07-28 15:06:52',NULL,'client123'),(75,3,'20160629-3_4.pdf','2016-07-28 15:09:51',NULL,'client123'),(76,3,'20160629-3_5.pdf','2016-07-28 15:18:04',NULL,'client123'),(94,2,'20160624-2_8.pdf','2016-07-29 00:51:54',NULL,'client123'),(95,2,'20160624-2_9.pdf','2016-07-29 00:55:09',NULL,'client123'),(96,2,'20160624-2_10.pdf','2016-07-29 00:58:59',NULL,'client123'),(97,2,'20160624-2_2.pdf','2016-07-29 01:00:35',NULL,'client123'),(98,2,'20160624-2_3.pdf','2016-07-29 01:06:45',NULL,'client123'),(99,2,'20160624-2_4.pdf','2016-07-29 01:07:45',NULL,'client123'),(100,2,'20160624-2_5.pdf','2016-07-29 01:08:21',NULL,'client123'),(101,2,'20160624-2_6.pdf','2016-07-29 01:08:55',NULL,'client123'),(102,2,'20160624-2_7.pdf','2016-07-29 01:09:31',NULL,'client123'),(103,2,'20160624-2_8.pdf','2016-07-29 01:12:09',NULL,'client123'),(104,2,'20160624-2_9.pdf','2016-07-29 01:14:18',NULL,'client123'),(105,2,'20160624-2_10.pdf','2016-07-29 01:15:14',NULL,'client123'),(106,2,'20160624-2_2.pdf','2016-07-29 01:16:09',NULL,'client123'),(107,2,'20160624-2_3.pdf','2016-07-29 01:16:35',NULL,'client123'),(108,15,'20160728-15_9.pdf','2016-07-29 16:53:05',NULL,'client123'),(109,2,'20160624-2_4.pdf','2016-07-29 16:53:32',NULL,'client123'),(110,2,'20160624-2_5.pdf','2016-07-29 16:54:27',NULL,'client123'),(111,2,'20160624-2_6.pdf','2016-07-29 16:56:44',NULL,'client123'),(112,2,'20160624-2_7.pdf','2016-07-29 16:57:44',NULL,'client123'),(113,2,'20160624-2_8.pdf','2016-07-29 16:58:18',NULL,'client123'),(114,2,'20160624-2_9.pdf','2016-07-29 17:00:26',NULL,'client123'),(115,2,'20160624-2_10.pdf','2016-07-29 17:00:49',NULL,'client123'),(116,2,'20160624-2_2.pdf','2016-07-29 17:05:16',NULL,'client123'),(117,2,'20160624-2_3.pdf','2016-07-29 17:13:10',NULL,'client123'),(118,2,'20160624-2_4.pdf','2016-07-29 17:20:35',NULL,'client123'),(119,2,'20160624-2_5.pdf','2016-07-29 17:21:57',NULL,'client123'),(120,2,'20160624-2_6.pdf','2016-07-29 17:29:50',NULL,'client123'),(121,2,'20160624-2_7.pdf','2016-07-29 17:34:35',NULL,'client123'),(122,2,'20160624-2_8.pdf','2016-07-29 17:45:47',NULL,'client123'),(123,2,'20160624-2_9.pdf','2016-07-29 17:49:36',NULL,'client123'),(124,2,'20160624-2_10.pdf','2016-07-29 18:21:32',NULL,'client123'),(125,2,'20160624-2_2.pdf','2016-07-29 18:24:22',NULL,'client123'),(126,2,'20160624-2_3.pdf','2016-07-29 18:24:47',NULL,'client123'),(127,2,'20160624-2_4.pdf','2016-07-29 18:25:54',NULL,'client123'),(128,2,'20160624-2_5.pdf','2016-07-29 18:27:19',NULL,'client123'),(129,2,'20160624-2_6.pdf','2016-07-29 18:29:34',NULL,'client123'),(130,2,'20160624-2_7.pdf','2016-07-29 18:30:22',NULL,'client123'),(131,2,'20160624-2_8.pdf','2016-07-29 18:31:16',NULL,'client123'),(132,2,'20160624-2_9.pdf','2016-07-29 22:38:39',NULL,'client123'),(133,2,'20160624-2_10.pdf','2016-07-29 22:39:29',NULL,'client123'),(134,2,'20160624-2_2.pdf','2016-07-29 22:40:27',NULL,'client123'),(135,2,'20160624-2_3.pdf','2016-07-29 22:41:30',NULL,'client123'),(136,2,'20160624-2_4.pdf','2016-07-29 22:42:26',NULL,'client123'),(137,2,'20160624-2_5.pdf','2016-07-29 22:43:09',NULL,'client123'),(138,2,'20160624-2_6.pdf','2016-07-29 22:43:30',NULL,'client123'),(139,2,'20160624-2_7.pdf','2016-07-29 22:44:16',NULL,'client123'),(140,2,'20160624-2_8.pdf','2016-07-29 23:19:36',NULL,'client123'),(141,2,'20160624-2_9.pdf','2016-07-29 23:21:25',NULL,'client123'),(142,15,'20160728-15_10.pdf','2016-07-30 11:54:57',NULL,'client123'),(143,2,'20160624-2_10.pdf','2016-08-01 09:53:05',NULL,'client123'),(150,2,'20160624-2_1.pdf','2016-08-05 12:07:06',NULL,'client123'),(151,36,'20160805-36_1.pdf','2016-08-06 17:17:18',NULL,'client123'),(152,15,'20160728-15_2.pdf','2016-08-09 17:34:04',NULL,'client123'),(153,15,'20160728-15_3.pdf','2016-08-09 17:34:45',NULL,'client123'),(154,13,'20160815-13_1.pdf','2016-08-09 17:35:27',NULL,'client123'),(155,13,'20160815-13_2.pdf','2016-08-09 17:35:40',NULL,'client123'),(156,14,'20160810-14_1.pdf','2016-08-09 17:38:57',NULL,'client123'),(157,1,'20160624-1_2.pdf','2016-08-09 17:39:23',NULL,'client123'),(158,10,'20160708-10_7.pdf','2016-08-09 17:40:04',NULL,'client123'),(159,10,'20160708-10_8.pdf','2016-08-09 17:45:18',NULL,'client123'),(160,10,'20160708-10_9.pdf','2016-08-10 09:16:11',NULL,'client123'),(161,10,'20160708-10_10.pdf','2016-08-10 09:52:53',NULL,'client123'),(162,10,'20160708-10_2.pdf','2016-08-10 10:00:18',NULL,'client123'),(163,10,'20160708-10_3.pdf','2016-08-10 10:03:30',NULL,'client123'),(164,10,'20160708-10_4.pdf','2016-08-10 10:04:28',NULL,'client123'),(165,10,'20160708-10_5.pdf','2016-08-10 10:05:05',NULL,'client123'),(166,10,'20160708-10_6.pdf','2016-08-10 10:50:10',NULL,'client123'),(167,10,'20160708-10_7.pdf','2016-08-10 10:53:44',NULL,'client123'),(168,10,'20160708-10_8.pdf','2016-08-10 11:20:14',NULL,'client123'),(169,10,'20160708-10_9.pdf','2016-08-10 11:30:06',NULL,'client123'),(170,10,'20160708-10_10.pdf','2016-08-10 11:35:57',NULL,'client123'),(171,10,'20160708-10_2.pdf','2016-08-10 11:38:44',NULL,'client123'),(172,10,'20160708-10_3.pdf','2016-08-10 11:39:19',NULL,'client123'),(173,10,'20160708-10_4.pdf','2016-08-10 11:45:18',NULL,'client123'),(174,10,'20160708-10_5.pdf','2016-08-10 12:03:28',NULL,'client123'),(175,10,'20160708-10_6.pdf','2016-08-10 12:17:29',NULL,'client123'),(176,10,'20160708-10_7.pdf','2016-08-10 12:21:43',NULL,'client123'),(177,10,'20160708-10_8.pdf','2016-08-10 12:22:50',NULL,'client123'),(178,10,'20160708-10_9.pdf','2016-08-10 12:34:22',NULL,'client123'),(179,10,'20160708-10_10.pdf','2016-08-10 12:37:35',NULL,'client123'),(180,10,'20160708-10_2.pdf','2016-08-10 12:40:12',NULL,'client123'),(181,10,'20160708-10_3.pdf','2016-08-10 12:42:43',NULL,'client123'),(182,10,'20160708-10_4.pdf','2016-08-10 12:52:38',NULL,'client123'),(183,10,'20160708-10_5.pdf','2016-08-10 13:35:07',NULL,'client123'),(184,10,'20160708-10_6.pdf','2016-08-10 13:35:44',NULL,'client123'),(185,10,'20160708-10_7.pdf','2016-08-10 13:36:04',NULL,'client123'),(186,10,'20160708-10_8.pdf','2016-08-10 13:36:31',NULL,'client123'),(187,10,'20160708-10_9.pdf','2016-08-10 13:44:39',NULL,'client123'),(188,10,'20160708-10_10.pdf','2016-08-10 13:48:08',NULL,'client123'),(189,10,'20160708-10_2.pdf','2016-08-10 13:51:34',NULL,'client123'),(190,10,'20160708-10_3.pdf','2016-08-10 13:54:13',NULL,'client123'),(191,10,'20160708-10_4.pdf','2016-08-10 13:56:09',NULL,'client123'),(192,10,'20160708-10_5.pdf','2016-08-10 13:58:20',NULL,'client123'),(193,10,'20160708-10_6.pdf','2016-08-10 13:58:56',NULL,'client123'),(194,1,'20160624-1_3.pdf','2016-08-10 14:07:49',NULL,'client123'),(195,1,'20160624-1_4.pdf','2016-08-10 14:36:16',NULL,'client123'),(196,13,'20160815-13_3.pdf','2016-08-10 14:36:38',NULL,'client123'),(197,15,'20160728-15_4.pdf','2016-08-10 14:41:09',NULL,'client123'),(198,15,'20160728-15_5.pdf','2016-08-10 14:42:08',NULL,'client123'),(199,34,'20160810-34_1.pdf','2016-08-10 16:03:24',NULL,'client123'),(204,2,'20160624-2_1.pdf','2016-08-11 09:43:16',NULL,'client123'),(205,2,'20160624-2_1.pdf','2016-08-11 12:46:06',NULL,'client123'),(206,2,'20160624-2_1.pdf','2016-08-11 12:54:46',NULL,'client123'),(207,2,'20160624-2_1.pdf','2016-08-11 13:39:57',NULL,'client123'),(208,2,'20160624-2_1.pdf','2016-08-11 13:45:11',NULL,'client123'),(209,2,'20160624-2_1.pdf','2016-08-11 13:59:58',NULL,'client123'),(210,2,'20160624-2_1.pdf','2016-08-11 14:04:42',NULL,'client123'),(211,2,'20160624-2_1.pdf','2016-08-11 14:12:34',NULL,'client123'),(212,2,'20160624-2_1.pdf','2016-08-11 14:49:14',NULL,'client123'),(213,2,'20160624-2_1.pdf','2016-08-11 15:04:29',NULL,'client123'),(214,2,'20160624-2_1.pdf','2016-08-11 15:13:12',NULL,'client123'),(215,2,'20160624-2_1.pdf','2016-08-11 15:21:49',NULL,'client123'),(216,2,'20160624-2_1.pdf','2016-08-11 15:23:05',NULL,'client123'),(217,2,'20160624-2_1.pdf','2016-08-11 15:24:18',NULL,'client123'),(218,36,'20160805-36_1.pdf','2016-08-11 15:34:01',NULL,'client123'),(219,2,'20160624-2_1.pdf','2016-08-11 16:44:41',NULL,'client123'),(220,2,'20160624-2_1.pdf','2016-08-11 16:52:47',NULL,'client123'),(221,2,'20160624-2_1.pdf','2016-08-11 16:52:47',NULL,'client123'),(222,2,'20160624-2_1.pdf','2016-08-11 16:52:48',NULL,'client123'),(223,2,'20160624-2_1.pdf','2016-08-11 16:55:01',NULL,'client123'),(224,2,'20160624-2_1.pdf','2016-08-11 16:55:02',NULL,'client123'),(225,2,'20160624-2_1.pdf','2016-08-11 16:55:02',NULL,'client123'),(226,2,'20160624-2_1.pdf','2016-08-11 16:59:35',NULL,'client123'),(227,2,'20160624-2_1.pdf','2016-08-11 16:59:35',NULL,'client123'),(228,2,'20160624-2_1.pdf','2016-08-11 16:59:36',NULL,'client123'),(229,2,'20160624-2_1.pdf','2016-08-11 17:02:55',NULL,'client123'),(230,2,'20160624-2_1.pdf','2016-08-11 17:02:55',NULL,'client123'),(231,2,'20160624-2_1.pdf','2016-08-11 17:02:56',NULL,'client123'),(232,2,'20160624-2_1.pdf','2016-08-11 17:05:15',NULL,'client123'),(233,2,'20160624-2_1.pdf','2016-08-11 17:05:16',NULL,'client123'),(234,2,'20160624-2_1.pdf','2016-08-11 17:05:16',NULL,'client123'),(235,2,'20160624-2_1.pdf','2016-08-11 17:06:05',NULL,'client123'),(236,2,'20160624-2_1.pdf','2016-08-11 17:06:05',NULL,'client123'),(237,2,'20160624-2_1.pdf','2016-08-11 17:06:06',NULL,'client123'),(238,2,'20160624-2_1.pdf','2016-08-12 09:01:40',NULL,'client123'),(242,36,'20160805-36_1.pdf','2016-08-12 09:03:47',NULL,'client123'),(243,36,'20160805-36_1.pdf','2016-08-12 09:03:48',NULL,'client123'),(244,36,'20160805-36_1.pdf','2016-08-12 09:03:48',NULL,'client123'),(245,36,'20160805-36_1.pdf','2016-08-12 09:41:01',NULL,'client123'),(246,36,'20160805-36_1.pdf','2016-08-12 09:41:01',NULL,'client123'),(247,36,'20160805-36_1.pdf','2016-08-12 09:41:02',NULL,'client123'),(248,36,'20160805-36_1.pdf','2016-08-12 09:41:37',NULL,'client123'),(249,36,'20160805-36_1.pdf','2016-08-12 09:41:37',NULL,'client123'),(250,36,'20160805-36_1.pdf','2016-08-12 09:41:38',NULL,'client123'),(251,36,'20160805-36_1.pdf','2016-08-12 10:03:45',NULL,'client123'),(252,36,'20160805-36_1.pdf','2016-08-12 10:03:45',NULL,'client123'),(253,36,'20160805-36_1.pdf','2016-08-12 10:03:46',NULL,'client123'),(254,36,'20160805-36_1.pdf','2016-08-12 10:22:54',NULL,'client123'),(255,36,'20160805-36_1.pdf','2016-08-12 10:22:55',NULL,'client123'),(256,36,'20160805-36_1.pdf','2016-08-12 10:22:55',NULL,'client123'),(257,36,'20160805-36_1.pdf','2016-08-12 10:29:13',NULL,'client123'),(258,36,'20160805-36_1.pdf','2016-08-12 10:29:13',NULL,'client123'),(259,36,'20160805-36_1.pdf','2016-08-12 10:29:14',NULL,'client123'),(260,36,'20160805-36_1.pdf','2016-08-12 10:30:23',NULL,'client123'),(261,36,'20160805-36_1.pdf','2016-08-12 10:30:23',NULL,'client123'),(262,36,'20160805-36_1.pdf','2016-08-12 10:30:24',NULL,'client123'),(263,36,'20160805-36_1.pdf','2016-08-12 10:31:46',NULL,'client123'),(264,36,'20160805-36_1.pdf','2016-08-12 10:31:47',NULL,'client123'),(265,36,'20160805-36_1.pdf','2016-08-12 10:31:47',NULL,'client123'),(266,36,'20160805-36_1.pdf','2016-08-12 10:33:37',NULL,'client123'),(267,36,'20160805-36_1.pdf','2016-08-12 10:34:05',NULL,'client123'),(268,36,'20160805-36_1.pdf','2016-08-12 10:42:24',NULL,'client123'),(269,36,'20160805-36_1.pdf','2016-08-12 10:43:31',NULL,'client123'),(270,36,'20160805-36_1.pdf','2016-08-12 11:06:09',NULL,'client123'),(271,36,'20160805-36_1.pdf','2016-08-12 11:06:57',NULL,'client123'),(272,36,'20160805-36_1.pdf','2016-08-12 12:14:36',NULL,'client123'),(273,36,'20160805-36_1.pdf','2016-08-12 12:29:42',NULL,'client123'),(274,36,'20160805-36_1.pdf','2016-08-12 12:31:43',NULL,'client123'),(275,36,'20160805-36_1.pdf','2016-08-12 12:36:15',NULL,'client123'),(276,36,'20160805-36_1.pdf','2016-08-12 12:37:49',NULL,'client123'),(277,36,'20160805-36_1.pdf','2016-08-12 12:51:04',NULL,'client123'),(278,2,'20160624-2_1.pdf','2016-08-12 15:04:17',NULL,'client123'),(279,2,'20160624-2_1.pdf','2016-08-12 16:18:21',NULL,'client123'),(280,36,'20160805-36_1.pdf','2016-08-12 16:20:00',NULL,'client123'),(281,36,'20160805-36_1.pdf','2016-08-12 16:36:41',NULL,'client123'),(284,36,'20160805-36_1.pdf','2016-08-12 17:29:36',NULL,'client123'),(288,36,'20160805-36_1.pdf','2016-08-12 17:41:53',NULL,'client123'),(289,36,'20160805-36_1.pdf','2016-08-12 17:42:57',NULL,'client123'),(291,36,'20160805-36_1.pdf','2016-08-12 17:48:46',NULL,'client123'),(301,2,'20160624-2_1.pdf','2016-08-13 11:56:47',NULL,'client123'),(302,2,'20160624-2_1.pdf','2016-08-13 12:27:41',NULL,'client123'),(306,15,'20160728-15_5.pdf','2016-08-17 18:32:01',NULL,'client123'),(307,44,'20160813-44_1.pdf','2016-08-30 12:43:59',NULL,'client123'),(308,48,'20160905-48_1.pdf','2016-09-05 11:30:00',NULL,'client123'),(309,49,'20160905-49_1.pdf','2016-09-05 11:33:54',NULL,'client123'),(310,15,'20160728-15_6.pdf','2016-09-08 12:58:42',NULL,'client123'),(311,2,'20160624-2_1.pdf','2016-09-12 11:37:17',NULL,'client123'),(312,2,'20160624-2_1.pdf','2016-09-13 09:45:15',NULL,'client123'),(322,2,'20160624-2_1.pdf','2016-09-16 09:16:01',NULL,'client123'),(325,81,'20160925-81_1.pdf','2016-09-16 10:23:48',NULL,'client123'),(326,83,'20160910-83_1.pdf','2016-09-16 10:25:37',NULL,'client123'),(327,84,'20160910-84_1.pdf','2016-09-16 10:27:43',NULL,'client123'),(328,85,'20160910-85_1.pdf','2016-09-16 10:28:14',NULL,'client123'),(329,81,'20160925-81_1.pdf','2016-09-16 10:35:45',NULL,'client123'),(330,81,'20160925-81_2.pdf','2016-09-16 10:40:43',NULL,'client123'),(331,85,'20160910-85_1.pdf','2016-09-16 10:52:30',NULL,'client123'),(332,85,'20160910-85_2.pdf','2016-09-16 10:52:52',NULL,'client123'),(333,86,'20160921-86_1.pdf','2016-09-16 10:53:22',NULL,'client123'),(334,89,'20160916-89_1.pdf','2016-09-16 11:06:39',NULL,'client123'),(335,89,'20160916-89_2.pdf','2016-09-16 11:07:15',NULL,'client123'),(336,91,'20160916-91_1.pdf','2016-09-16 17:07:54',NULL,'client123'),(338,92,'20160924-92_1.pdf','2016-09-24 11:53:04',NULL,'client123'),(339,92,'20160924-92_2.pdf','2016-09-24 11:53:54',NULL,'client123'),(340,95,'20160926-95_1.pdf','2016-09-26 15:20:11',NULL,'client123'),(341,95,'20160926-95_2.pdf','2016-09-27 10:58:29',NULL,'client123'),(342,95,'20160926-95_3.pdf','2016-09-27 14:15:13',NULL,'client123'),(343,95,'20160926-95_1.pdf','2016-09-27 14:19:42',NULL,'client123'),(344,95,'20160926-95_2.pdf','2016-09-28 16:47:08',NULL,'client123'),(345,95,'20160926-95_3.pdf','2016-09-28 16:48:28',NULL,'client123'),(346,96,'20160928-96_1.pdf','2016-09-28 17:27:42',NULL,'client123'),(347,96,'20160928-96_2.pdf','2016-09-28 17:27:49',NULL,'client123'),(348,96,'20160928-96_3.pdf','2016-09-28 17:29:28',NULL,'client123'),(349,96,'20160928-96_4.pdf','2016-09-28 17:36:33',NULL,'client123'),(350,96,'20160928-96_5.pdf','2016-09-28 17:58:13',NULL,'client123'),(351,96,'20160928-96_6.pdf','2016-09-28 18:05:04',NULL,'client123'),(352,97,'20160928-97_1.pdf','2016-09-28 18:18:38',NULL,'client123'),(353,97,'20160928-97_2.pdf','2016-09-28 18:18:47',NULL,'client123'),(354,97,'20160928-97_3.pdf','2016-09-28 18:27:05',NULL,'client123'),(355,97,'20160928-97_4.pdf','2016-09-28 18:27:54',NULL,'client123'),(356,97,'20160928-97_5.pdf','2016-09-28 18:48:46',NULL,'client123'),(357,2,'20160624-2_1.pdf','2016-09-28 18:53:57',NULL,'client123'),(359,97,'20160928-97_6.pdf','2016-09-28 19:06:10',NULL,'client123'),(360,97,'20160928-97_7.pdf','2016-09-28 19:06:51',NULL,'client123'),(361,97,'20160928-97_8.pdf','2016-09-28 19:09:39',NULL,'client123'),(362,97,'20160928-97_9.pdf','2016-09-28 19:10:35',NULL,'client123'),(363,97,'20160928-97_10.pdf','2016-09-28 19:16:50',NULL,'client123'),(364,97,'20160928-97_2.pdf','2016-09-28 19:17:19',NULL,'client123'),(365,97,'20160928-97_3.pdf','2016-09-28 19:25:08',NULL,'client123'),(366,97,'20160928-97_4.pdf','2016-09-28 19:25:47',NULL,'client123'),(367,96,'20160928-96_7.pdf','2016-09-28 19:26:33',NULL,'client123'),(368,95,'20160926-95_4.pdf','2016-09-28 19:26:47',NULL,'client123'),(370,97,'20160928-97_1.pdf','2016-09-29 09:54:53',NULL,'client123'),(371,97,'20160928-97_2.pdf','2016-09-29 09:55:52',NULL,'client123'),(372,98,'20160929-98_1.pdf','2016-09-29 11:04:37',NULL,'client123'),(373,98,'20160929-98_2.pdf','2016-10-05 11:05:27',NULL,'client123'),(375,88,'20160912-88_1.pdf','2016-10-09 11:05:42',NULL,'client123'),(380,98,'20160929-98_3.pdf','2016-10-10 11:40:36',NULL,'client123'),(382,29,'20160801-29_1.pdf','2016-10-11 15:28:59',NULL,'client123'),(383,29,'20160801-29_1.pdf','2016-10-11 15:44:26',NULL,'client123'),(384,29,'20160801-29_1.pdf','2016-10-11 15:55:56',NULL,'client123'),(385,29,'20160801-29_1.pdf','2016-10-11 16:08:03',NULL,'client123'),(386,29,'20160801-29_1.pdf','2016-10-11 16:10:45',NULL,'client123'),(387,29,'20160801-29_1.pdf','2016-10-11 16:23:28',NULL,'client123'),(388,29,'20160801-29_1.pdf','2016-10-11 16:24:57',NULL,'client123'),(389,29,'20160801-29_1.pdf','2016-10-13 09:30:08',NULL,'client123'),(390,148,'20161012-148_1.pdf','2016-10-14 15:18:42',NULL,'client123'),(391,148,'20161012-148_2.pdf','2016-10-14 15:28:52',NULL,'client123'),(392,148,'20161012-148_3.pdf','2016-10-14 19:31:39',NULL,'client123'),(393,148,'20161012-148_4.pdf','2016-10-14 19:36:29',NULL,'client123'),(394,150,'20161014-150_1.pdf','2016-10-14 19:48:20',NULL,'client123'),(395,150,'20161014-150_2.pdf','2016-10-14 20:01:31',NULL,'client123'),(396,150,'20161014-150_3.pdf','2016-10-14 20:11:51',NULL,'client123'),(397,150,'20161014-150_1.pdf','2016-10-14 20:19:20',NULL,'client123'),(398,150,'20161014-150_2.pdf','2016-10-14 20:21:44',NULL,'client123'),(399,150,'20161014-150_3.pdf','2016-10-15 11:36:25',NULL,'client123'),(400,150,'20161014-150_4.pdf','2016-10-15 12:47:11',NULL,'client123'),(401,150,'20161014-150_5.pdf','2016-10-15 14:21:31',NULL,'client123'),(402,150,'20161014-150_6.pdf','2016-10-15 14:22:25',NULL,'client123'),(403,150,'20161014-150_7.pdf','2016-10-15 14:24:06',NULL,'client123'),(404,150,'20161014-150_1.pdf','2016-10-15 14:25:54',NULL,'client123'),(405,150,'20161014-150_2.pdf','2016-10-15 14:32:17',NULL,'client123'),(406,150,'20161014-150_3.pdf','2016-10-15 14:34:57',NULL,'client123'),(407,150,'20161014-150_1.pdf','2016-10-15 14:49:51',NULL,'client123'),(408,150,'20161014-150_2.pdf','2016-10-15 14:50:56',NULL,'client123'),(409,150,'20161014-150_3.pdf','2016-10-17 10:15:03',NULL,'client123'),(410,150,'20161014-150_4.pdf','2016-10-17 10:15:30',NULL,'client123'),(411,150,'20161014-150_5.pdf','2016-10-17 10:26:13',NULL,'client123'),(412,150,'20161014-150_6.pdf','2016-10-17 12:56:07',NULL,'client123');
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
  `tax` varchar(15) DEFAULT NULL,
  `payment_mode` varchar(50) DEFAULT NULL,
  `cheque_no` varchar(45) DEFAULT NULL,
  `bank_name` varchar(45) DEFAULT NULL,
  `trn_type` varchar(45) DEFAULT NULL,
  `receipt_name` varchar(105) DEFAULT NULL,
  PRIMARY KEY (`cl_payment_id`),
  KEY `event_id` (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_client_payment_trn`
--

LOCK TABLES `event_client_payment_trn` WRITE;
/*!40000 ALTER TABLE `event_client_payment_trn` DISABLE KEYS */;
INSERT INTO `event_client_payment_trn` VALUES (1,1,'2016-06-24','25000',NULL,'cash','','','Payment',NULL),(2,3,'2016-06-29','5000',NULL,'cash','','','Payment',NULL),(3,4,'2016-07-01','10000',NULL,'cash','','','Payment',NULL),(4,5,'2016-07-01','15000',NULL,'cash','','','Payment',NULL),(5,6,'2016-07-01','25000',NULL,'cash','','','Payment',NULL),(6,10,'2016-07-08','25000',NULL,'cash','','','Payment',NULL),(7,11,'2016-07-15','25000',NULL,'cash','','','Payment',NULL),(8,12,'2016-07-15','25000',NULL,'cash','','','Payment',NULL),(9,18,'2016-07-30','3500',NULL,'cash','','','Payment',NULL),(10,19,'2016-07-30','3500',NULL,'cash','','','Payment',NULL),(11,20,'2016-07-30','3500',NULL,'cash','','','Payment',NULL),(12,21,'2016-07-30','3500',NULL,'cash','','','Payment',NULL),(13,22,'2016-07-30','3500',NULL,'cash','','','Payment',NULL),(14,23,'2016-07-30','3500',NULL,'cash','','','Payment',NULL),(15,24,'2016-07-30','3500',NULL,'cash','','','Payment',NULL),(16,25,'2016-07-30','3500',NULL,'cash','','','Payment',NULL),(17,26,'2016-07-30','3500',NULL,'cash','','','Payment',NULL),(18,27,'2016-07-30','3500',NULL,'cash','','','Payment',NULL),(19,28,'2016-07-30','3500',NULL,'cash','','','Payment',NULL),(20,30,'2016-08-01','8000',NULL,'cash','','','Payment',NULL),(21,31,'2016-08-01','8000',NULL,'cash','','','Payment',NULL),(22,32,'2016-08-01','8000',NULL,'cash','','','Payment',NULL),(23,33,'2016-08-04','2000',NULL,'cash','','','Payment',NULL),(24,34,'2016-08-04','2000',NULL,'cash','','','Payment',NULL),(25,35,'2016-08-05','7000',NULL,'cash','','','Payment',NULL),(26,37,'2016-08-13','3365',NULL,'cash','','','Payment',NULL),(27,98,'2016-09-29','1000',NULL,'cash','','','Payment',NULL),(28,8,'2016-09-29','500',NULL,'cash','','','Payment',NULL),(29,101,'2016-09-29','3390',NULL,'cash','','','Payment',NULL),(30,102,'2016-09-29','3390',NULL,'cash','','','Payment',NULL),(31,104,'2016-09-30','50',NULL,'cash','','','Payment',NULL),(32,105,'2016-09-30','50',NULL,'cash','','','Payment',NULL),(33,106,'2016-09-30','50',NULL,'cash','','','Payment',NULL),(34,107,'2016-09-30','50',NULL,'cash','','','Payment',NULL),(35,108,'2016-09-30','50',NULL,'cash','','','Payment',NULL),(36,109,'2016-09-30','50',NULL,'cash','','','Payment',NULL),(37,110,'2016-09-30','50',NULL,'cash','','','Payment',NULL),(38,111,'2016-09-30','50',NULL,'cash','','','Payment',NULL),(39,112,'2016-09-30','50',NULL,'cash','','','Payment',NULL),(40,113,'2016-09-30','50',NULL,'cash','','','Payment',NULL),(41,114,'2016-09-30','50',NULL,'cash','','','Payment',NULL),(42,115,'2016-09-30','50',NULL,'cash','','','Payment',NULL),(43,116,'2016-09-30','600',NULL,'cash','','','Payment',NULL),(44,117,'2016-09-30','650',NULL,'cash','','','Payment',NULL),(45,118,'2016-09-30','600',NULL,'cash','','','Payment',NULL),(46,119,'2016-10-01','600',NULL,'cash','','','Payment',NULL),(47,120,'2016-10-01','110',NULL,'cash','','','Payment',NULL),(48,121,'2016-10-01','110',NULL,'cash','','','Payment',NULL),(49,122,'2016-10-01','110',NULL,'cash','','','Payment',NULL),(50,123,'2016-10-01','220',NULL,'cash','','','Payment',NULL),(51,124,'2016-10-01','200',NULL,'cash','','','Payment',NULL),(52,127,'2016-10-03','110',NULL,'cash','','','Payment',NULL),(53,128,'2016-10-03','110',NULL,'cash','','','Payment',NULL),(54,129,'2016-10-03','230',NULL,'cash','','','Payment',NULL),(55,130,'2016-10-03','110',NULL,'cash','','','Payment',NULL),(56,131,'2016-10-03','110',NULL,'cash','','','Payment',NULL),(57,132,'2016-10-05','340',NULL,'cash','','','Payment',NULL),(58,133,'2016-10-05','340',NULL,'cash','','','Payment',NULL),(59,134,'2016-10-05','340',NULL,'cash','','','Payment',NULL),(60,135,'2016-10-05','340',NULL,'cash','','','Payment',NULL),(61,136,'2016-10-05','340',NULL,'cash','','','Payment',NULL),(62,137,'2016-10-05','340',NULL,'cash','','','Payment',NULL),(63,138,'2016-10-05','340',NULL,'cash','','','Payment',NULL),(64,139,'2016-10-05','340',NULL,'cash','','','Payment',NULL),(65,140,'2016-10-06','340',NULL,'cash','','','Payment',NULL),(66,141,'2016-10-07','340',NULL,'cash','','','Payment',NULL),(67,142,'2016-10-11','110',NULL,'cash','','','Payment',NULL),(68,143,'2016-10-11','110',NULL,'cash','','','Payment',NULL),(69,144,'2016-10-11','110',NULL,'cash','','','Payment',NULL),(70,145,'2016-10-11','110',NULL,'cash','','','Payment',NULL),(71,146,'2016-10-12','454.54545454545','45.454545454545','cash','','','Payment',NULL),(72,147,'2016-10-12','1818','182','cash','','','Payment',NULL),(73,149,'2016-10-13','110','cash','','','','Payment',NULL),(74,150,'2016-10-14','4091','409','cash','','','Payment','Payment_20161014-74_1.pdf'),(75,151,'2016-10-14','110','cash','','','','Payment',NULL),(76,152,'2016-10-14','110','cash','','','','Payment',NULL),(77,153,'2016-10-14','110','cash','','','','Payment',NULL),(78,154,'2016-10-15','110','0','cash','','','Payment',NULL),(79,150,'2016-10-15','10000','1000','cash','','','Payment',NULL),(80,155,'2016-10-17','110','0','cash','','','Payment',NULL),(81,168,'2016-10-17','230','0','cash','','','Payment',NULL),(82,150,'2016-10-18','1000','100','cash','','','Payment',NULL),(83,167,'2016-10-18','NaN','NaN','cash','','','Payment',NULL),(84,167,'2016-10-18','340','0','cash','','','Payment',NULL),(85,169,'2016-10-20','209','21','cash','','','Payment','Payment_20161020-85_1.pdf');
/*!40000 ALTER TABLE `event_client_payment_trn` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_deliverable_dtl`
--

DROP TABLE IF EXISTS `event_deliverable_dtl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_deliverable_dtl` (
  `delv_plc_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) DEFAULT NULL,
  `event_places_id` int(11) DEFAULT NULL,
  `delv_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `rate` varchar(15) DEFAULT NULL,
  `amount` varchar(15) DEFAULT NULL,
  `delv_vend_id` int(11) DEFAULT NULL,
  `delv_vend_price` varchar(15) DEFAULT NULL,
  `delv_remark` varchar(150) DEFAULT NULL,
  `width` varchar(5) DEFAULT NULL,
  `height` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`delv_plc_id`),
  KEY `event_id` (`event_id`),
  KEY `event_places_id` (`event_places_id`),
  KEY `delv_id` (`delv_id`),
  KEY `delv_vend_id` (`delv_vend_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_deliverable_dtl`
--

LOCK TABLES `event_deliverable_dtl` WRITE;
/*!40000 ALTER TABLE `event_deliverable_dtl` DISABLE KEYS */;
INSERT INTO `event_deliverable_dtl` VALUES (1,96,107,4,1,'2500','2500',5,'100','','0','0'),(2,97,108,3,1,'20000','20000',2,'5000','','0','0'),(3,97,108,5,1,'400','40000',0,'0','','10','10'),(4,97,108,4,1,'2500','2500',5,'1500','','0','0'),(16,98,0,3,1,'','2000',0,'0','','0','0'),(18,10,0,3,1,'20000','20000',0,'0','','0','0'),(19,29,0,3,1,'','20000',0,'0','','0','0'),(20,29,0,4,1,'','2500',0,'0','','0','0'),(21,150,114,3,1,'20000','20000',0,'0','','0','0');
/*!40000 ALTER TABLE `event_deliverable_dtl` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `suchak_mgt`.`event_deliverable_dtl_AFTER_INSERT` AFTER INSERT ON `event_deliverable_dtl` FOR EACH ROW
BEGIN
	INSERT INTO `event_vendor_dtl`
  (event_places_id,event_id,vend_id,vendor_charges,vendor_paid_amt,vendor_paid_status) 
  VALUES 
  (NEW.event_places_id,NEW.event_id,NEW.delv_vend_id,NEW.delv_vend_price,'0','Unpaid');

END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

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
  PRIMARY KEY (`event_equipment_id`),
  KEY `event_places_id` (`event_places_id`),
  KEY `event_id` (`event_id`),
  KEY `equipment_id` (`equipment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_equipment_dtl`
--

LOCK TABLES `event_equipment_dtl` WRITE;
/*!40000 ALTER TABLE `event_equipment_dtl` DISABLE KEYS */;
INSERT INTO `event_equipment_dtl` VALUES (1,5,5,1),(2,6,6,1),(3,6,6,2),(4,6,6,2),(5,6,6,1),(6,7,7,1),(7,7,7,2),(8,8,7,2),(9,8,7,3),(10,9,7,2),(11,9,7,1),(12,10,8,1),(13,10,8,4),(14,11,8,3),(15,11,8,1),(16,13,8,2),(17,13,8,3),(18,13,8,1),(19,15,10,1),(20,15,10,3),(21,16,10,2),(22,17,10,1),(23,17,10,4),(24,17,10,2),(25,18,11,1),(26,19,11,3),(27,20,12,1),(28,20,12,3),(29,21,12,3),(30,24,13,4),(31,24,13,2),(32,25,13,1),(33,26,14,4),(34,26,14,2),(35,27,14,1),(36,28,15,4),(37,28,15,4),(38,29,15,1),(39,30,15,3),(40,34,35,1),(41,34,35,2),(42,35,35,1),(43,35,35,4),(44,37,36,1),(45,37,36,4),(46,38,36,1),(47,39,36,1),(48,28,15,2),(49,29,15,3),(50,29,15,3),(51,29,15,2),(52,28,15,3),(53,40,0,1),(54,40,0,3),(55,41,15,4),(56,41,15,1),(57,1,1,1),(58,1,1,3),(59,1,1,1),(60,1,1,4),(61,42,15,3),(62,43,15,1),(63,44,15,1),(64,28,15,2),(65,29,15,1),(66,44,15,4),(67,45,15,1),(68,46,15,4),(69,47,45,4),(70,48,45,4),(71,49,46,6),(72,51,47,3),(73,51,47,4),(74,53,47,1),(75,53,47,6),(76,54,47,4),(77,55,48,1),(78,56,48,4),(79,57,49,6),(80,62,54,3),(81,109,98,1),(82,109,98,4);
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
  `client_address` varchar(200) DEFAULT NULL,
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
  `qua_file_name` varchar(45) DEFAULT NULL,
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
  `event_cal_id` varchar(145) DEFAULT NULL,
  `inv_file_id` varchar(25) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=171 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_mst`
--

LOCK TABLES `event_mst` WRITE;
/*!40000 ALTER TABLE `event_mst` DISABLE KEYS */;
INSERT INTO `event_mst` VALUES (1,'photography','test','divyesh','r&d cmp','divyesh@gmail.com','9724783505','','',NULL,'new','2016-06-24 01:06:26','2016-06-24 01:06:26','Unpaid','65000','25000','12000','0',NULL,'2000','2016-06-24 08:15:17','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'Yes','20160624-1_4.pdf','20160624_1.pdf',NULL,'jjj123','ah123','10','6300','69300',NULL,1,1,NULL,NULL,NULL,NULL,'Event',NULL,NULL,NULL),(2,'testEnq','divyesh marriage','Divyesh','RanaDc','','9724783505','','',NULL,'enquiry','2016-06-24 02:06:53','2016-06-24 02:06:53','Unpaid','50000','',NULL,NULL,NULL,'','2016-06-24 08:55:07','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'Yes','20160624-2_1.pdf',NULL,'QUA20160624-2_1.pdf','hj123','ag123','10','5000','55000',NULL,1,1,NULL,NULL,NULL,NULL,'Event',NULL,'',NULL),(3,'update_cheking','its wedding update						','divyesh','rnd cmp','divyesh@gmail.com','9724783505','','',NULL,'new','2016-06-29 12:06:20','2016-06-29 12:06:20','Unpaid','25000','5000',NULL,NULL,NULL,'','2016-06-29 07:23:49','0000-00-00 00:00:00','2016-07-01 04:19:08',1,'No','20160629-3_6.pdf',NULL,NULL,'','','10','','25000',NULL,1,1,'divyesh/jkj/llk','kjlk/part3','client123',NULL,'Event',NULL,NULL,NULL),(4,'testing','testing of data							','Divyesh','rana dc','divyesh@gmail.com','9724783505','','',NULL,'new','2016-07-20 09:07:51','2016-07-22 09:07:51','Unpaid','25000','10000','5000',NULL,NULL,'','2016-07-01 04:24:05','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'No','20160720-4_1.pdf',NULL,NULL,'','','10','','25000',NULL,2,2,'divyesh/part1','divysh/part2',NULL,NULL,'Event',NULL,NULL,NULL),(5,'testing order','testing entry					','Divyesh','C D Aquaria','div@gmail.com','9724783505','','',NULL,'new','2016-07-15 09:07:51','2016-07-01 09:07:51','Unpaid','25000','15000','2000',NULL,NULL,'','2016-07-01 04:30:35','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'Yes','20160715-5_3.pdf','20160715_5.pdf',NULL,'','','10','2500','27500',NULL,1,1,'div/part1','div/part2',NULL,NULL,'Event',NULL,NULL,NULL),(6,'Testing Detail','testing of data','Rakesh Limbachya','DR Company','divyesh@gmail.com','9724783505','','',NULL,'new','2016-07-17 10:07:48','2016-07-01 10:07:48','Unpaid','100000','25000',NULL,NULL,NULL,'','2016-07-01 04:45:25','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'No','20160701-6_3.pdf','20160701_6.pdf',NULL,'','','10','','100000',NULL,1,1,'div/123/part1','div/231/part2',NULL,NULL,'Event',NULL,NULL,NULL),(8,'test multi','				wedding of divyesh				','raja','raj@sons','divyesh@gmail.com','7898776655','','',NULL,'new','2016-07-26 11:07:39','2016-07-29 11:07:39','Paid','25000','25000',NULL,NULL,NULL,'','2016-07-07 18:35:51','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'','20160726-8_5.pdf',NULL,NULL,'','','','','',NULL,1,1,'divyesh1','divyesh2',NULL,NULL,'Event',NULL,NULL,NULL),(10,'testmulti124','mrg								','raj','raj','raj@gmail.com','7898776655','','6755667788',NULL,'new','2016-07-08 12:07:24','2016-07-08 12:07:24','Unpaid','142750','25000','NaN',NULL,NULL,'5000','2016-07-07 19:31:55','0000-00-00 00:00:00','2016-07-13 10:09:21',1,'No','20160708-10_6.pdf',NULL,NULL,'','','10','','142750',NULL,3,4,'raj','raj','client123',NULL,'Event',NULL,NULL,NULL),(11,'test data','						sdd		','sd','ad','','','','',NULL,'new','2016-07-15 12:07:06','2016-07-15 12:07:06','Unpaid','80250','25000',NULL,NULL,NULL,'5000','2016-07-14 19:02:46','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'Yes','20160715-11_2.pdf',NULL,NULL,'','','10','7525','80250',NULL,2,2,'sd','d',NULL,NULL,'Event',NULL,NULL,NULL),(12,'yesyy','					ds			','','dsd','','7898776655','','',NULL,'new','2016-07-15 01:07:56','2016-07-15 01:07:56','Unpaid','100375','25000',NULL,NULL,NULL,'375','2016-07-14 19:46:22','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'Yes','20160715-12_6.pdf',NULL,NULL,'','','10','10000','110000',NULL,3,4,'','',NULL,NULL,'Event',NULL,NULL,NULL),(13,'merrage','fashion detail			','Rana Divyesh','R d industry','divyesh@gmail.com','9724783505','','',NULL,'new','2016-08-15 13:07:00','2016-08-28 13:07:00','Unpaid','12700','','',NULL,NULL,'200','2016-07-28 08:31:01','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'Yes','20160815-13_3.pdf',NULL,NULL,'','','12','1500','14000',NULL,2,2,'cd://divyesh','cd://divyesh',NULL,NULL,'Event',NULL,NULL,NULL),(14,'merrage','fashion detail			','Rana Divyesh','R d industry','divyesh@gmail.com','9724783505','','',NULL,'new','2016-08-10 13:07:00','2016-08-28 13:07:00','Unpaid','12700','','',NULL,NULL,'200','2016-07-28 08:32:36','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'Yes','20160810-14_1.pdf',NULL,NULL,'','','12','1500','14000',NULL,2,2,'cd://divyesh','cd://divyesh',NULL,NULL,'Event',NULL,NULL,NULL),(15,'mearrage','								','Rana Divyesh','DR Company','raj@gmail.com','9724783505','','',NULL,'new','2016-07-28 14:07:00','2016-07-28 14:07:00','Unpaid','2400','','0',NULL,NULL,'400','2016-07-28 08:40:34','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'Yes','20160728-15_6.pdf','20160728_15.pdf',NULL,'','','12','240','2240','',2,2,'asd','ds',NULL,NULL,'Event',NULL,NULL,NULL),(16,NULL,NULL,'Divyesh',NULL,NULL,'',NULL,NULL,NULL,'complete','2016-07-30 00:07:00','2016-07-30 00:07:00','Paid','2000','2000',NULL,NULL,NULL,'','2016-07-30 02:39:52','0000-00-00 00:00:00','0000-00-00 00:00:00',1,NULL,NULL,NULL,NULL,NULL,NULL,'12','','2000',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Retail',NULL,NULL,NULL),(17,NULL,NULL,'Divyesh',NULL,NULL,'9724783505',NULL,NULL,NULL,'complete','2016-07-30 09:07:00','2016-07-30 09:07:00','Unpaid','3500','',NULL,NULL,NULL,'','2016-07-30 03:48:08','0000-00-00 00:00:00','0000-00-00 00:00:00',1,NULL,NULL,NULL,NULL,NULL,NULL,'12','','3500',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Retail',NULL,NULL,NULL),(18,NULL,NULL,'test',NULL,NULL,'9724783505',NULL,NULL,NULL,'complete','2016-07-30 09:07:00','2016-07-30 09:07:00','Paid','3500','3500',NULL,NULL,NULL,'','2016-07-30 04:28:23','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'12','','3500',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Retail',NULL,NULL,NULL),(19,NULL,NULL,'test',NULL,NULL,'9724783505',NULL,NULL,NULL,'complete','2016-07-30 09:07:00','2016-07-30 09:07:00','Paid','3500','3500',NULL,NULL,NULL,'','2016-07-30 04:35:17','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'12','','3500',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Retail',NULL,NULL,NULL),(20,NULL,NULL,'test',NULL,NULL,'9724783505',NULL,NULL,NULL,'complete','2016-07-30 09:07:00','2016-07-30 09:07:00','Paid','3500','3500',NULL,NULL,NULL,'','2016-07-30 04:50:06','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'12','','3500',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Retail',NULL,NULL,NULL),(21,NULL,NULL,'test',NULL,NULL,'9724783505',NULL,NULL,NULL,'complete','2016-07-30 09:07:00','2016-07-30 09:07:00','Paid','3500','3500',NULL,NULL,NULL,'','2016-07-30 04:51:10','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'12','','3500',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Retail',NULL,NULL,NULL),(22,NULL,NULL,'test',NULL,NULL,'9724783505',NULL,NULL,NULL,'complete','2016-07-30 09:07:00','2016-07-30 09:07:00','Paid','3500','3500',NULL,NULL,NULL,'','2016-07-30 04:52:30','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'12','','3500',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Retail',NULL,NULL,NULL),(23,NULL,NULL,'test',NULL,NULL,'9724783505',NULL,NULL,NULL,'complete','2016-07-30 09:07:00','2016-07-30 09:07:00','Paid','3500','3500',NULL,NULL,NULL,'','2016-07-30 04:54:05','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'12','','3500',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Retail',NULL,NULL,NULL),(24,NULL,NULL,'test',NULL,NULL,'9724783505',NULL,NULL,NULL,'complete','2016-07-30 09:07:00','2016-07-30 09:07:00','Paid','3500','3500',NULL,NULL,NULL,'','2016-07-30 04:58:29','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'12','','3500',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Retail',NULL,NULL,NULL),(25,NULL,NULL,'test',NULL,NULL,'9724783505',NULL,NULL,NULL,'complete','2016-07-30 09:07:00','2016-07-30 09:07:00','Paid','3500','3500',NULL,NULL,NULL,'','2016-07-30 04:59:18','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'12','','3500',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Retail',NULL,NULL,NULL),(26,NULL,NULL,'test',NULL,NULL,'9724783505',NULL,NULL,NULL,'complete','2016-07-30 09:07:00','2016-07-30 09:07:00','Paid','3500','3500',NULL,NULL,NULL,'','2016-07-30 05:00:38','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'12','','3500',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Retail',NULL,NULL,NULL),(27,NULL,NULL,'test',NULL,NULL,'9724783505',NULL,NULL,NULL,'complete','2016-07-30 09:07:00','2016-07-30 09:07:00','Paid','3500','3500',NULL,NULL,NULL,'','2016-07-30 05:01:16','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'12','','3500',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Retail',NULL,NULL,NULL),(28,NULL,NULL,'test',NULL,NULL,'9724783505',NULL,NULL,NULL,'complete','2016-07-30 09:07:00','2016-07-30 09:07:00','Paid','3500','3500',NULL,NULL,NULL,'','2016-07-30 05:01:49','2016-09-21 18:27:37','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'12','','3500','client123',NULL,NULL,NULL,NULL,NULL,NULL,'Retail',NULL,NULL,NULL),(29,'Testing quatation','detail  of quatation of cheking this detail 								','test','r d construction','divyesh@gmail.com','9724783505','','',NULL,'enquiry','2016-08-01 14:08:00','2016-08-01 14:08:00','Unpaid','51900','','0',NULL,NULL,'','2016-08-01 08:40:38','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'No','',NULL,'QUA20160801-29_1.pdf','','','12','','51900',NULL,2,3,'','',NULL,NULL,'Event',NULL,'',NULL),(30,NULL,NULL,'testofRinv',NULL,NULL,'9724783505',NULL,NULL,NULL,'complete','2016-08-01 17:08:00','2016-08-01 17:08:00','Paid','8000','8000',NULL,NULL,NULL,'','2016-08-01 11:46:21','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'12','','8000',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Retail',NULL,NULL,NULL),(31,NULL,NULL,'testofRinv',NULL,NULL,'9724783505',NULL,NULL,NULL,'complete','2016-08-01 17:08:00','2016-08-01 17:08:00','Paid','8000','8000',NULL,NULL,NULL,'','2016-08-01 11:47:08','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'12','','8000',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Retail',NULL,NULL,NULL),(32,NULL,NULL,'testofRinv',NULL,NULL,'9724783505',NULL,NULL,NULL,'complete','2016-08-01 17:08:00','2016-08-01 17:08:00','Paid','8000','8000',NULL,NULL,NULL,'','2016-08-01 11:49:47','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'12','','8000',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Retail',NULL,NULL,NULL),(33,NULL,NULL,'Harsil',NULL,NULL,'9724783505',NULL,NULL,NULL,'complete','2016-08-10 14:08:00','2016-08-10 14:08:00','Unpaid','6333','2000',NULL,NULL,NULL,'333','2016-08-04 09:38:29','0000-00-00 00:00:00','0000-00-00 00:00:00',1,NULL,NULL,NULL,NULL,NULL,NULL,'12','720','6753',NULL,NULL,NULL,NULL,NULL,NULL,'33','Retail',NULL,NULL,NULL),(34,NULL,NULL,'Harsil',NULL,NULL,'9724783505',NULL,NULL,NULL,'complete','2016-08-10 14:08:00','2016-08-10 14:08:00','Unpaid','6333','2000',NULL,NULL,NULL,'333','2016-08-04 09:42:40','0000-00-00 00:00:00','0000-00-00 00:00:00',1,NULL,'20160810-34_1.pdf',NULL,NULL,NULL,NULL,'12','720','6753',NULL,NULL,NULL,NULL,NULL,NULL,'33','Retail',NULL,NULL,NULL),(35,'test of iq','				sd				','Divyesh','Rd const','div@gmail.com','9724783505','','',NULL,'enquiry','2016-08-05 12:08:00','2016-08-05 12:08:00','Unpaid','77500','7000','NaN',NULL,NULL,'500','2016-08-05 06:44:30','2016-09-22 12:16:56','0000-00-00 00:00:00',1,'Yes',NULL,NULL,NULL,'','','12','9240','86240','client123',2,2,'','',NULL,NULL,'Event',NULL,NULL,NULL),(36,'test enq','								jhjk','Divyesh','jkkjl','','9724783505','','',NULL,'new','2016-08-05 12:08:00','2016-08-05 12:08:00','Unpaid','140000','','NaN',NULL,NULL,'','2016-08-05 06:52:23','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'Yes','20160805-36_1.pdf',NULL,NULL,'','','12','16800','156800',NULL,3,4,'','',NULL,NULL,'Event',NULL,NULL,NULL),(37,NULL,NULL,'DivyeshTest',NULL,NULL,'9724783505',NULL,NULL,NULL,'complete','2016-08-13 08:08:00','2016-08-13 08:08:00','Unpaid','3250','3365',NULL,NULL,NULL,'250','2016-08-13 02:50:01','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'12','240','3365',NULL,NULL,NULL,NULL,NULL,NULL,'125','Retail',NULL,NULL,NULL),(38,NULL,NULL,'TestRetail',NULL,NULL,'9724783505',NULL,NULL,NULL,'complete','2016-08-13 10:08:00','2016-08-13 10:08:00','Paid','3750','',NULL,NULL,NULL,'','2016-08-13 05:30:00','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'12','0','3750',NULL,NULL,NULL,NULL,NULL,NULL,'0','Retail',NULL,NULL,NULL),(39,NULL,NULL,'TestData',NULL,NULL,'9724783505',NULL,NULL,NULL,'complete','2016-08-13 10:08:00','2016-08-13 10:08:00','Paid','3750','',NULL,NULL,NULL,'','2016-08-13 05:52:39','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'12','0','3750',NULL,NULL,NULL,NULL,NULL,NULL,'0','Retail',NULL,NULL,NULL),(40,NULL,NULL,'TestData',NULL,NULL,'9724783505',NULL,NULL,NULL,'complete','2016-08-13 10:08:00','2016-08-13 10:08:00','Paid','3750','',NULL,NULL,NULL,'','2016-08-13 05:53:34','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'12','0','3750',NULL,NULL,NULL,NULL,NULL,NULL,'0','Retail',NULL,NULL,NULL),(41,NULL,NULL,'TestData',NULL,NULL,'9724783505',NULL,NULL,NULL,'complete','2016-08-13 10:08:00','2016-08-13 10:08:00','Paid','3750','',NULL,NULL,NULL,'','2016-08-13 05:55:54','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'12','0','3750',NULL,NULL,NULL,NULL,NULL,NULL,'0','Retail',NULL,NULL,NULL),(42,NULL,NULL,'TestData',NULL,NULL,'9724783505',NULL,NULL,NULL,'complete','2016-08-13 10:08:00','2016-08-13 10:08:00','Paid','3750','',NULL,NULL,NULL,'','2016-08-13 06:17:47','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'12','0','3750',NULL,NULL,NULL,NULL,NULL,NULL,'0','Retail',NULL,NULL,NULL),(43,NULL,NULL,'TestData',NULL,NULL,'9724783505',NULL,NULL,NULL,'complete','2016-08-13 10:08:00','2016-08-13 10:08:00','Paid','3750','',NULL,NULL,NULL,'','2016-08-13 06:18:30','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'12','0','3750',NULL,NULL,NULL,NULL,NULL,NULL,'0','Retail',NULL,NULL,NULL),(44,NULL,NULL,'TestData',NULL,NULL,'9724783505',NULL,NULL,NULL,'complete','2016-08-13 10:08:00','2016-08-17 10:08:00','Paid','3750','',NULL,NULL,NULL,'','2016-08-13 06:28:52','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,'20160813-44_1.pdf',NULL,NULL,NULL,NULL,'12','0','3750',NULL,NULL,NULL,NULL,NULL,NULL,'0','Retail',NULL,NULL,NULL),(45,'test vendor','								','Divyesh','Rd const','div@gmail.com','9724783505','','',NULL,'new','2016-09-01 17:09:00','2016-09-01 17:09:00','Unpaid','5000','','',NULL,NULL,'','2016-09-01 12:01:31','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'No',NULL,NULL,NULL,'','','12','','5000',NULL,3,4,'','',NULL,NULL,'Event',NULL,NULL,NULL),(46,'testvendor in db','								','Divyesh','Rd const','div@gmail.com','9724783505','','',NULL,'new','2016-09-01 17:09:00','2016-09-01 17:09:00','Unpaid','10100','','',NULL,NULL,'','2016-09-01 12:08:04','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes',NULL,'20160901_46.pdf',NULL,'','','12','1212','11312',NULL,3,4,'','',NULL,NULL,'Event',NULL,NULL,NULL),(47,'Krunal','jkhkj								','Krunal','krindustry','kr@gmail.com','9724783505','','',NULL,'new','2016-09-02 12:09:00','2016-09-02 12:09:00','Unpaid','24250','','8500',NULL,NULL,'','2016-09-02 06:36:35','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'Yes',NULL,'20160902_47.pdf',NULL,'','','12','2910','27160',NULL,2,2,'','',NULL,NULL,'Event',NULL,NULL,NULL),(48,'Test ENquiry  resources','								','Divyesh','krindustry','div@gmail.com','9724783505','','',NULL,'new','2016-09-05 09:09:00','2016-09-05 09:09:00','Unpaid','10150','','NaN',NULL,NULL,'','2016-09-05 03:43:44','0000-00-00 00:00:00','0000-00-00 00:00:00',6,'No','20160905-48_1.pdf',NULL,NULL,'','','12','','10150',NULL,2,2,'','',NULL,NULL,'Event',NULL,NULL,NULL),(49,'Std om bnr img chk','								','Krunal','krindustry','kr@gmail.com','9724783505','','',NULL,'new','2016-09-05 11:09:00','2016-09-05 11:09:00','Unpaid','500','','250',NULL,NULL,'','2016-09-05 06:03:43','0000-00-00 00:00:00','0000-00-00 00:00:00',7,'No','20160905-49_1.pdf','20160905_49.pdf',NULL,'','','12','','500',NULL,2,2,'','',NULL,NULL,'Event',NULL,NULL,NULL),(50,'testt calendar','								','divyesh','krindustry','div@gmail.com','9724783505','','',NULL,'new','2016-09-08 15:09:00','2016-09-08 15:09:00','Unpaid','4500','','2500',NULL,NULL,'','2016-09-08 10:12:42','0000-00-00 00:00:00','0000-00-00 00:00:00',7,'No',NULL,NULL,NULL,'','','12','','4500',NULL,3,4,'','',NULL,NULL,'Event',NULL,NULL,NULL),(51,'testing cal data','								','Divyesh','Rd const','kr@gmail.com','9724783505','','',NULL,'new','2016-09-08 15:09:00','2016-09-08 15:09:00','Unpaid','150','','2500',NULL,NULL,'','2016-09-08 10:21:48','0000-00-00 00:00:00','0000-00-00 00:00:00',7,'Yes',NULL,NULL,NULL,'','','12','18','168',NULL,3,4,'','',NULL,NULL,'Event',NULL,NULL,NULL),(52,'Image Banner test','								','Divyesh','Rd const','kr@gmail.com','9724783505','','',NULL,'new','2016-09-08 15:09:00','2016-09-08 15:09:00','Unpaid','500','','200',NULL,NULL,'','2016-09-08 10:28:15','0000-00-00 00:00:00','0000-00-00 00:00:00',7,'Yes',NULL,NULL,NULL,'','','12','60','560',NULL,3,4,'','',NULL,NULL,'Event',NULL,NULL,NULL),(53,'testing cal data new','								','Divyesh','Rd const','div@gmail.com','9724783505','','',NULL,'new','2016-09-08 16:09:00','2016-09-08 16:09:00','Unpaid','4500','','2500',NULL,NULL,'','2016-09-08 10:36:29','0000-00-00 00:00:00','0000-00-00 00:00:00',7,'No',NULL,NULL,NULL,'','','12','','4500',NULL,2,2,'','',NULL,NULL,'Event',NULL,NULL,NULL),(54,'testing cal with start and end','								','Divyesh','Rd const','div@gmail.com','9724783505','','',NULL,'new','2016-09-08 17:09:00','2016-09-08 17:09:00','Unpaid','4250','','2750',NULL,NULL,'','2016-09-08 11:49:41','0000-00-00 00:00:00','0000-00-00 00:00:00',7,'Yes',NULL,NULL,NULL,'','','12','510','4760',NULL,3,4,'','',NULL,NULL,'Event',NULL,NULL,NULL),(55,'testing datat','								','Krunal','Rd const','kr@gmail.com','9724783505','','',NULL,'new','2016-09-08 17:09:00','2016-09-08 17:09:00','Unpaid','12000','','5000',NULL,NULL,'','2016-09-08 11:56:46','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes',NULL,NULL,NULL,'','','12','1440','13440',NULL,2,2,'','',NULL,NULL,'Event',NULL,NULL,NULL),(56,'Image Banner test','								','Divyesh','krindustry','kr@gmail.com','9724783505','','',NULL,'new','2016-09-08 17:09:00','2016-09-08 17:09:00','Unpaid','18000','','12000',NULL,NULL,'','2016-09-08 12:02:43','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes',NULL,NULL,NULL,'','','12','2160','20160',NULL,2,3,'','',NULL,NULL,'Event',NULL,NULL,NULL),(57,'Image Banner test','								','Divyesh','krindustry','kr@gmail.com','9724783505','','',NULL,'new','2016-09-08 17:09:00','2016-09-08 17:09:00','Unpaid','18000','','12000',NULL,NULL,'','2016-09-08 12:03:25','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes',NULL,NULL,NULL,'','','12','2160','20160',NULL,2,3,'','',NULL,NULL,'Event',NULL,NULL,NULL),(58,'testing cal data','								','Krunal','Rd const','kr@gmail.com','9724783505','','',NULL,'new','2016-09-08 17:09:00','2016-09-08 17:09:00','Unpaid','7500','','2500',NULL,NULL,'','2016-09-08 12:11:21','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes',NULL,NULL,NULL,'','','12','900','8400',NULL,3,4,'','',NULL,NULL,'Event',NULL,NULL,NULL),(59,'Image Banner test','								','Divyesh','divyesh','kr@gmail.com','9724783505','','',NULL,'new','2016-09-08 17:09:00','2016-09-08 17:09:00','Unpaid','4500','','2500',NULL,NULL,'','2016-09-08 12:14:19','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes',NULL,NULL,NULL,'','','12','540','5040',NULL,3,4,'','',NULL,NULL,'Event',NULL,NULL,NULL),(60,'Std om bnr img chk','								','divyesh','Rd const','kr@gmail.com','9724783505','','',NULL,'new','2016-09-08 17:09:00','2016-09-08 17:09:00','Unpaid','3000','','2000',NULL,NULL,'','2016-09-08 12:20:35','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes',NULL,NULL,NULL,'','','12','360','3360',NULL,2,3,'','',NULL,NULL,'Event',NULL,NULL,NULL),(61,'Std om bnr img chk','								','Divyesh','krindustry','kr@gmail.com','9724783505','','',NULL,'new','2016-09-08 17:09:00','2016-09-08 17:09:00','Unpaid','14400','','1111',NULL,NULL,'','2016-09-08 12:24:12','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes',NULL,NULL,NULL,'','','12','1728','16128',NULL,3,4,'','',NULL,NULL,'Event',NULL,NULL,NULL),(62,'Image Banner test','								','Divyesh','Rd const','kr@gmail.com','9724783505','','',NULL,'new','2016-09-08 17:09:00','2016-09-08 17:09:00','Unpaid','1950','','NaN',NULL,NULL,'','2016-09-08 12:28:17','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes',NULL,NULL,NULL,'','','12','234','2184',NULL,2,3,'','',NULL,NULL,'Event',NULL,NULL,NULL),(63,'testing cal data','					refvefrv			','fgv','fdv','div@gmail.com','9724783505','','9685748574',NULL,'new','2016-09-09 18:09:00','2016-09-09 18:09:00','Unpaid','4500','','5000',NULL,NULL,'','2016-09-08 12:55:35','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'No',NULL,NULL,NULL,'','','12','','4500',NULL,3,4,'fdvf','fgvfg',NULL,NULL,'Event',NULL,NULL,NULL),(64,'testing cal data','						dscds		','sdc','sdc','kr@gmail.com','9724783505','','',NULL,'new','2016-09-09 18:09:00','2016-09-09 18:09:00','Unpaid','500','','6666',NULL,NULL,'','2016-09-08 12:59:07','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'No',NULL,NULL,NULL,'','','12','','500',NULL,3,4,'dsc','dsc',NULL,NULL,'Event',NULL,NULL,NULL),(65,'Image Banner test','								','Divyesh','Rd const','kr@gmail.com','9724783505','','',NULL,'new','2016-09-08 18:09:00','2016-09-08 18:09:00','Unpaid','9000','','2500',NULL,NULL,'','2016-09-08 13:03:10','0000-00-00 00:00:00','0000-00-00 00:00:00',5,'Yes',NULL,NULL,NULL,'','','12','1080','10080',NULL,3,4,'','',NULL,NULL,'Event',NULL,NULL,NULL),(66,'testing cal data','								','Divyesh','Rd const','kr@gmail.com','9724783505','','',NULL,'new','2016-09-08 18:09:00','2016-09-08 18:09:00','Unpaid','7500','','2500',NULL,NULL,'','2016-09-08 13:08:45','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes',NULL,NULL,NULL,'','','12','900','8400',NULL,2,2,'','',NULL,NULL,'Event',NULL,NULL,NULL),(67,'cal test','								','Krunal','Rd const','div@gmail.com','9724783505','','',NULL,'new','2016-09-09 09:09:00','2016-09-09 09:09:00','Unpaid','4500','','2500',NULL,NULL,'','2016-09-09 04:05:50','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'No',NULL,NULL,NULL,'','','12','','4500',NULL,3,4,'','',NULL,NULL,'Event',NULL,NULL,NULL),(68,'raja','								','Krunal','krindustry','kr@gmail.com','9724783505','','',NULL,'new','2016-09-09 09:09:00','2016-09-09 09:09:00','Unpaid','2200','','1500',NULL,NULL,'','2016-09-09 04:11:05','0000-00-00 00:00:00','0000-00-00 00:00:00',6,'Yes',NULL,NULL,NULL,'','','12','264','2464',NULL,3,4,'','',NULL,NULL,'Event',NULL,NULL,NULL),(69,'caltesting','								','Krunal','Rd const','kr@gmail.com','9724783505','','',NULL,'new','2016-09-09 10:09:00','2016-09-09 10:09:00','Unpaid','8800','','2500',NULL,NULL,'','2016-09-09 05:01:08','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes',NULL,NULL,NULL,'','','12','1056','9856',NULL,3,4,'','',NULL,NULL,'Event',NULL,NULL,NULL),(70,'Std om bnr img chk','								','Krunal','Rd const','div@gmail.com','9724783505','','',NULL,'new','2016-09-09 10:09:00','2016-09-09 10:09:00','Unpaid','4500','','2000',NULL,NULL,'','2016-09-09 05:02:58','0000-00-00 00:00:00','0000-00-00 00:00:00',7,'No',NULL,NULL,NULL,'','','12','','4500',NULL,1,1,'','',NULL,NULL,'Event',NULL,NULL,NULL),(71,'last ins in cal','								','Krunal','krindustry','kr@gmail.com','9724783505','','',NULL,'new','2016-09-09 10:09:00','2016-09-09 10:09:00','Unpaid','4500','','2500',NULL,NULL,'','2016-09-09 05:06:31','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes',NULL,NULL,NULL,'','','12','540','5040',NULL,3,4,'','',NULL,NULL,'Event',NULL,NULL,NULL),(72,'Std om bnr img chk','								','Divyesh','krindustry','div@gmail.com','9724783505','','',NULL,'new','2016-09-09 10:09:00','2016-09-09 10:09:00','Unpaid','3750','','1200',NULL,NULL,'','2016-09-09 05:07:55','0000-00-00 00:00:00','0000-00-00 00:00:00',6,'No',NULL,NULL,NULL,'','','12','','3750',NULL,3,4,'','',NULL,NULL,'Event',NULL,NULL,NULL),(73,'farhan in trouble','								','Divyesh','krindustry','kr@gmail.com','9724783505','','9685748574',NULL,'new','2016-09-09 10:09:00','2016-09-09 10:09:00','Unpaid','1500','','150',NULL,NULL,'','2016-09-09 05:10:03','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'No',NULL,NULL,NULL,'','','12','','1500',NULL,3,4,'','',NULL,NULL,'Event',NULL,NULL,NULL),(74,'Image Banner test','								','Divyesh','divyesh','kr@gmail.com','','','9685748574',NULL,'new','2016-09-10 10:09:00','2016-09-10 10:09:00','Unpaid','4500','','1500',NULL,NULL,'','2016-09-10 04:58:32','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes',NULL,NULL,NULL,'','','12','540','5040',NULL,2,2,'','',NULL,NULL,'Event',NULL,NULL,NULL),(75,'new event','								','Krunal','krindustry','kr@gmail.com','','','9685748574',NULL,'new','2016-09-12 10:35:00','2016-09-15 15:35:00','Unpaid','12000','','5000',NULL,NULL,'','2016-09-10 05:06:41','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes',NULL,NULL,NULL,'','','12','1440','13440',NULL,3,4,'','',NULL,NULL,'Event',NULL,NULL,NULL),(76,'testing cal data','								','Krunal','Rd const','div@gmail.com','','','9685748574',NULL,'new','2016-09-10 10:09:00','2016-09-15 15:09:00','Unpaid','500','','100',NULL,NULL,'','2016-09-10 05:10:15','0000-00-00 00:00:00','0000-00-00 00:00:00',5,'No',NULL,NULL,NULL,'','','12','','500',NULL,3,4,'','',NULL,NULL,'Event',NULL,NULL,NULL),(77,'divyesh','								','divyesh','divyesh','div@gmail.com','','','9685748574',NULL,'new','2016-09-20 11:09:00','2016-09-22 16:09:00','Unpaid','500','','250',NULL,NULL,'','2016-09-10 05:57:23','0000-00-00 00:00:00','0000-00-00 00:00:00',5,'Yes',NULL,NULL,NULL,'','','12','60','560',NULL,1,1,'','',NULL,NULL,'Event',NULL,NULL,NULL),(78,'raja','								','studio om','Rd const','div@gmail.com','','','9685748574',NULL,'new','2016-09-17 11:09:00','2016-09-18 11:09:00','Unpaid','4500','','2500',NULL,NULL,'','2016-09-10 06:02:58','0000-00-00 00:00:00','0000-00-00 00:00:00',5,'Yes',NULL,NULL,NULL,'','','12','540','5040',NULL,3,4,'','',NULL,NULL,'Event',NULL,NULL,NULL),(79,'test123','sd','Divyesh','Rd const','div@gmail.com','','','9685748574',NULL,'new','2016-09-09 11:09:00','2016-09-15 11:09:00','Unpaid','4500','','2500',NULL,NULL,'','2016-09-10 06:11:02','2016-09-10 06:51:26','0000-00-00 00:00:00',2,'Yes',NULL,NULL,NULL,'','','12','540','5040','client123',3,4,'','',NULL,NULL,'Event','6aqhdatdd5qvma2ohou0s2stfs',NULL,NULL),(80,'Raja Rani','								','Krunal','divyesh','div@gmail.com','','','9685748574',NULL,'new','2016-09-25 12:09:00','2016-09-27 12:09:00','Unpaid','2200','','1500',NULL,NULL,'','2016-09-10 06:53:52','2016-09-10 06:54:24','0000-00-00 00:00:00',0,'Yes',NULL,NULL,NULL,'','','12','264','2464','client123',3,4,'','',NULL,NULL,'Event','qemo4jravgt4ldjiqc1nv8ie3c',NULL,NULL),(81,'merrage of minu','								','studio om','divyesh','div@gmail.com','','','9685748574',NULL,'new','2016-09-25 13:09:00','2016-09-28 18:09:00','Unpaid','4500','','2500',NULL,NULL,'','2016-09-10 06:59:08','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'No','20160925-81_2.pdf',NULL,NULL,'','','12','','4500',NULL,2,2,'','',NULL,NULL,'Event',NULL,'',NULL),(82,'Marrage Of Milu','								','Divyesh','divyesh','div@gmail.com','','','9685748574',NULL,'new','2016-09-10 12:09:00','2016-09-20 12:09:00','Unpaid','4500','','1500',NULL,NULL,'','2016-09-10 07:01:23','2016-09-10 07:15:12','0000-00-00 00:00:00',5,'No',NULL,NULL,NULL,'','','12','','4500','client123',3,4,'','',NULL,NULL,'Event','ce6abr0i8c8o93ocb4op5rr7ps',NULL,NULL),(83,'mrg of raja','								','asdss','sadas','div@gmail.com','','','9685748574',NULL,'new','2016-09-10 12:09:00','2016-09-14 12:09:00','Unpaid','4500','','1500',NULL,NULL,'','2016-09-10 07:05:13','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'No',NULL,NULL,NULL,'','','12','','4500',NULL,2,3,'','',NULL,NULL,'Event',NULL,NULL,NULL),(84,'mrg of raja','								','asdss','sadas','div@gmail.com','','','9685748574',NULL,'new','2016-09-10 12:09:00','2016-09-14 12:09:00','Unpaid','4500','','1500',NULL,NULL,'','2016-09-10 07:05:33','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'No',NULL,NULL,NULL,'','','12','','4500',NULL,2,3,'','',NULL,NULL,'Event',NULL,NULL,NULL),(85,'mrg 1323','								','Divyesh','Rd const','div@gmail.com','','','9685748574',NULL,'new','2016-09-10 12:09:00','2016-09-10 12:09:00','Unpaid','4500','','1500',NULL,NULL,'','2016-09-10 07:12:47','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'No','20160910-85_2.pdf',NULL,NULL,'','','12','','4500',NULL,2,3,'','',NULL,NULL,'Event',NULL,'',NULL),(86,'test cla by reema','								','Divyesh','krindustry','kr@gmail.com','','','9685748574',NULL,'new','2016-09-21 12:09:00','2016-09-23 12:09:00','Unpaid','500','','250',NULL,NULL,'','2016-09-10 07:14:30','0000-00-00 00:00:00','2016-09-12 12:28:21',2,'No','20160921-86_1.pdf',NULL,NULL,'','','12','','500',NULL,2,3,'','','client123',NULL,'Event','ef213jodldv8lm7gnvkl7mlsco','RDC/2016-17/4',NULL),(87,'testing ','								','Divyesh','krindustry','div@gmail.com','','','9685748574',NULL,'enquiry','2016-09-12 15:09:00','2016-09-15 15:09:00','Unpaid','4500','','2500',NULL,NULL,'','2016-09-12 10:03:18','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes',NULL,NULL,NULL,'','','12','540','5040',NULL,3,4,'','',NULL,NULL,'Event',NULL,NULL,NULL),(88,'testing data','								','Krunal','divyesh','kr@gmail.com','','','9685748574',NULL,'enquiry','2016-09-12 15:09:00','2016-09-15 15:09:00','Unpaid','4500','','2200',NULL,NULL,'','2016-09-12 10:10:24','0000-00-00 00:00:00','0000-00-00 00:00:00',5,'Yes','20160912-88_1.pdf',NULL,NULL,'','','12','540','5040',NULL,3,4,'','',NULL,NULL,'Event',NULL,'',NULL),(89,'testinvid','								','Krunal','divyesh','kr@gmail.com','','','9685748574',NULL,'new','2016-09-16 10:09:00','2016-09-17 10:09:00','Unpaid','5000','','NaN',NULL,NULL,'','2016-09-16 04:50:33','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'Yes','20160916-89_2.pdf',NULL,NULL,'','','12','600','5600',NULL,3,4,'','',NULL,NULL,'Event',NULL,'',NULL),(90,'testinv id','								','Krunal','Rd const','kr@gmail.com','','','9685748574',NULL,'new','2016-09-16 10:09:00','2016-09-16 10:09:00','Unpaid','500','','NaN',NULL,NULL,'','2016-09-16 04:53:20','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes',NULL,NULL,NULL,'','','12','60','560',NULL,3,4,'','',NULL,NULL,'Event',NULL,NULL,NULL),(91,'Image Banner test','								','studio om','divyesh','kr@gmail.com','','','9685748574',NULL,'new','2016-09-16 17:09:00','2016-09-16 17:09:00','Unpaid','0','','NaN',NULL,NULL,'','2016-09-16 11:37:29','0000-00-00 00:00:00','0000-00-00 00:00:00',8,'Yes','20160916-91_1.pdf',NULL,NULL,'','','12','0','0',NULL,3,4,'','',NULL,NULL,'Event',NULL,'/DCV/2016-17/0',NULL),(92,'all banner test','								','Krunal','krindustry','div@gmail.com','','','9685748574',NULL,'new','2016-09-24 11:09:00','2016-09-24 11:09:00','Unpaid','1000','','0',NULL,NULL,'','2016-09-24 06:22:54','0000-00-00 00:00:00','0000-00-00 00:00:00',8,'No','20160924-92_2.pdf','20160924_92.pdf',NULL,'','','12','','1000',NULL,1,1,'','',NULL,NULL,'Event',NULL,'',NULL),(93,NULL,NULL,'Harsil',NULL,NULL,'9724783505',NULL,NULL,NULL,'complete','2016-09-24 11:09:00','2016-09-24 11:09:00','Paid','250','',NULL,NULL,NULL,'','2016-09-24 06:24:39','0000-00-00 00:00:00','0000-00-00 00:00:00',8,NULL,NULL,NULL,NULL,NULL,NULL,'12','','',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(94,'testing vendor amt','w								','Divyesh','Rd const','div@gmail.com','','','9685748574','aa','new','2016-09-26 10:09:00','2016-09-29 10:09:00','Unpaid','5000','','2000',NULL,NULL,'1000','2016-09-25 05:04:42','0000-00-00 00:00:00','0000-00-00 00:00:00',8,'Yes',NULL,NULL,NULL,'','','12','480','4480',NULL,1,1,'','',NULL,NULL,'Event',NULL,NULL,NULL),(95,'testing vendor dtl','								','Krunal','krindustry','div@gmail.com','9724783505','','','						22,Ram Nivas society ,Navsari Bazzar,Sagrampura,surat	','new','2016-09-26 09:09:00','2016-09-29 09:09:00','Unpaid','5000','','150',NULL,NULL,'','2016-09-26 03:55:11','0000-00-00 00:00:00','0000-00-00 00:00:00',8,'Yes','20160926-95_4.pdf','20160926_95.pdf',NULL,'','','12','600','5600',NULL,3,4,'','',NULL,NULL,'Event',NULL,'',NULL),(96,'testing deliverable','								','Divyesh','divyesh','div@gmail.com','','','9685748574','Sagrampura','new','2016-09-28 13:09:00','2016-09-28 13:09:00','Unpaid','3000','','200',NULL,NULL,'100','2016-09-28 08:19:19','0000-00-00 00:00:00','0000-00-00 00:00:00',5,'No','20160928-96_7.pdf',NULL,NULL,'','','12','','2900',NULL,3,4,'','',NULL,NULL,'Event',NULL,'',NULL),(97,'testing cal data','								','Krunal','krindustry','kr@gmail.com','9724783505','','','								','new','2016-09-28 00:00:00','2016-09-28 00:00:00','Unpaid','133125','','23200',NULL,NULL,'','2016-09-28 12:48:24','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'No','20160928-97_2.pdf','20160928_97.pdf',NULL,'','','12','','133125',NULL,3,4,'','',NULL,NULL,'Event',NULL,'',NULL),(98,'test del without del','		sa						','Divyesh','krindustry','rahul.hathi@gmail.com','','','9685748574','		as						','new','2016-09-29 00:00:00','2016-10-04 00:00:00','Unpaid','7000','1000','NaN',NULL,NULL,'','2016-09-29 05:29:52','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes','20160929-98_3.pdf','20160929_98.pdf',NULL,'','','12','840','7840',NULL,3,4,'','',NULL,NULL,'Event',NULL,'',NULL),(99,NULL,NULL,'harshil',NULL,NULL,'1234567890',NULL,NULL,'','complete','0000-00-00 00:00:00','2016-09-29 13:09:00','2016-09-29 13:1','1','3500',NULL,NULL,NULL,'','2016-09-29 07:39:00','0000-00-00 00:00:00','0000-00-00 00:00:00',0,NULL,NULL,NULL,NULL,NULL,NULL,'3390','Paid','240',NULL,NULL,NULL,NULL,NULL,NULL,'12','Retail',NULL,NULL,NULL),(100,NULL,NULL,'Tetdisvyesh',NULL,NULL,'9724783505',NULL,NULL,'			s								','complete','2016-09-29 13:09:00','2016-09-29 13:09:00','Unpaid','3500','500',NULL,NULL,NULL,'100','2016-09-29 07:58:45','0000-00-00 00:00:00','0000-00-00 00:00:00',8,NULL,NULL,NULL,NULL,NULL,NULL,'12','0','3400',NULL,NULL,NULL,NULL,NULL,NULL,'0','Retail',NULL,NULL,NULL),(101,NULL,NULL,'TestData',NULL,NULL,'9724783505',NULL,NULL,'				as							','complete','2016-09-29 13:09:00','2016-09-29 13:09:00','Unpaid','3500','3390',NULL,NULL,NULL,'500','2016-09-29 08:15:56','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'12','240','3390',NULL,NULL,NULL,NULL,NULL,NULL,'150','Retail',NULL,NULL,NULL),(102,NULL,NULL,'TestData',NULL,NULL,'9724783505',NULL,NULL,'				as							','complete','2016-09-29 13:09:00','2016-09-29 13:09:00','Unpaid','3500','3390',NULL,NULL,NULL,'500','2016-09-29 08:58:00','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'12','240','3390',NULL,NULL,NULL,NULL,NULL,NULL,'150','Retail',NULL,NULL,NULL),(103,NULL,NULL,'harshil123',NULL,NULL,'9724783505',NULL,NULL,'s','complete','2016-09-29 14:09:00','2016-09-29 14:09:00','Paid','3500','',NULL,NULL,NULL,'500','2016-09-29 09:08:20','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'12','240','3390',NULL,NULL,NULL,NULL,NULL,NULL,'150','Retail',NULL,NULL,NULL),(104,NULL,NULL,'harshil123',NULL,NULL,'2147483647',NULL,NULL,'											','complete','2016-09-30 15:09:00','2016-10-03 09:48:00','Unpaid','600','50',NULL,NULL,NULL,'100','2016-09-30 09:49:28','0000-00-00 00:00:00','0000-00-00 00:00:00',1,NULL,NULL,NULL,NULL,NULL,NULL,'15','','',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(105,NULL,NULL,'harshil123',NULL,NULL,'2147483647',NULL,NULL,'											','complete','2016-09-30 15:09:00','2016-10-03 09:48:00','Unpaid','600','50',NULL,NULL,NULL,'100','2016-09-30 11:26:38','0000-00-00 00:00:00','0000-00-00 00:00:00',1,NULL,NULL,NULL,NULL,NULL,NULL,'15','','',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(106,NULL,NULL,'harshil123',NULL,NULL,'2147483647',NULL,NULL,'											','complete','2016-09-30 15:09:00','2016-10-03 09:48:00','Unpaid','600','50',NULL,NULL,NULL,'100','2016-09-30 11:27:46','0000-00-00 00:00:00','0000-00-00 00:00:00',1,NULL,NULL,NULL,NULL,NULL,NULL,'15','','',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(107,NULL,NULL,'harshil123',NULL,NULL,'2147483647',NULL,NULL,'											','complete','2016-09-30 15:09:00','2016-10-03 09:48:00','Unpaid','600','50',NULL,NULL,NULL,'100','2016-09-30 11:33:50','0000-00-00 00:00:00','0000-00-00 00:00:00',1,NULL,NULL,NULL,NULL,NULL,NULL,'15','','',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(108,NULL,NULL,'harshil123',NULL,NULL,'2147483647',NULL,NULL,'											','complete','2016-09-30 15:09:00','2016-10-03 09:48:00','Unpaid','600','50',NULL,NULL,NULL,'100','2016-09-30 11:34:40','0000-00-00 00:00:00','0000-00-00 00:00:00',1,NULL,NULL,NULL,NULL,NULL,NULL,'15','','',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(109,NULL,NULL,'harshil123',NULL,NULL,'2147483647',NULL,NULL,'											','complete','2016-09-30 15:09:00','2016-10-03 09:48:00','Unpaid','600','50',NULL,NULL,NULL,'100','2016-09-30 11:37:38','0000-00-00 00:00:00','0000-00-00 00:00:00',1,NULL,NULL,NULL,NULL,NULL,NULL,'15','','',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(110,NULL,NULL,'harshil123',NULL,NULL,'2147483647',NULL,NULL,'											','complete','2016-09-30 15:09:00','2016-10-03 09:48:00','Unpaid','600','50',NULL,NULL,NULL,'100','2016-09-30 11:55:34','0000-00-00 00:00:00','0000-00-00 00:00:00',1,NULL,NULL,NULL,NULL,NULL,NULL,'15','','',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(111,NULL,NULL,'harshil123',NULL,NULL,'2147483647',NULL,NULL,'											','complete','2016-09-30 15:09:00','2016-10-03 09:48:00','Unpaid','600','50',NULL,NULL,NULL,'100','2016-09-30 12:00:23','0000-00-00 00:00:00','0000-00-00 00:00:00',1,NULL,NULL,NULL,NULL,NULL,NULL,'15','','',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(112,NULL,NULL,'harshil123',NULL,NULL,'2147483647',NULL,NULL,'											','complete','2016-09-30 15:09:00','2016-10-03 09:48:00','Unpaid','600','50',NULL,NULL,NULL,'100','2016-09-30 12:00:51','0000-00-00 00:00:00','0000-00-00 00:00:00',1,NULL,NULL,NULL,NULL,NULL,NULL,'15','','',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(113,NULL,NULL,'harshil123',NULL,NULL,'2147483647',NULL,NULL,'											','complete','2016-09-30 15:09:00','2016-10-03 09:48:00','Unpaid','600','50',NULL,NULL,NULL,'100','2016-09-30 12:08:59','0000-00-00 00:00:00','0000-00-00 00:00:00',1,NULL,NULL,NULL,NULL,NULL,NULL,'15','','',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(114,NULL,NULL,'harshil123',NULL,NULL,'2147483647',NULL,NULL,'											','complete','2016-09-30 15:09:00','2016-10-03 09:48:00','Unpaid','600','50',NULL,NULL,NULL,'100','2016-09-30 12:17:59','0000-00-00 00:00:00','0000-00-00 00:00:00',1,NULL,NULL,NULL,NULL,NULL,NULL,'15','0','600',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(115,NULL,NULL,'harshil123',NULL,NULL,'2147483647',NULL,NULL,'											','complete','2016-09-30 15:09:00','2016-10-03 09:48:00','Unpaid','600','50',NULL,NULL,NULL,'100','2016-09-30 12:19:40','0000-00-00 00:00:00','0000-00-00 00:00:00',1,NULL,NULL,NULL,NULL,NULL,NULL,'15','0','500',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(116,NULL,NULL,'tetst',NULL,NULL,'9812356444',NULL,NULL,'											','complete','2016-09-30 17:09:00','2016-10-03 12:20:00','Unpaid','600','600',NULL,NULL,NULL,'69','2016-09-30 12:23:14','0000-00-00 00:00:00','0000-00-00 00:00:00',8,NULL,NULL,NULL,NULL,NULL,NULL,'15','90','621',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(117,NULL,NULL,'testraja',NULL,NULL,'1452637894',NULL,NULL,'											','complete','2016-09-30 17:09:00','2016-10-03 12:30:00','Unpaid','600','650',NULL,NULL,NULL,'10','2016-09-30 12:30:42','0000-00-00 00:00:00','0000-00-00 00:00:00',8,NULL,NULL,NULL,NULL,NULL,NULL,'15','90','680',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(118,NULL,NULL,'rajhit',NULL,NULL,'123462556',NULL,NULL,'											','complete','2016-09-30 18:09:00','2016-10-03 12:44:00','Unpaid','600','600',NULL,NULL,NULL,'69','2016-09-30 12:45:41','0000-00-00 00:00:00','0000-00-00 00:00:00',5,NULL,NULL,NULL,NULL,NULL,NULL,'15','90','621',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(119,NULL,NULL,'harshil',NULL,NULL,'1234567890',NULL,NULL,'									Surat		','complete','2016-10-01 12:16:00','2016-10-01 12:19:40','Unpaid','600','600',NULL,NULL,NULL,'69','2016-10-01 06:49:40','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'15','90','621',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(120,NULL,NULL,'',NULL,NULL,'',NULL,NULL,'											','complete','2016-10-01 12:10:00','2016-10-01 12:42:55','Unpaid','100','110',NULL,NULL,NULL,'0','2016-10-01 07:12:55','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'10','10','110',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(121,NULL,NULL,'',NULL,NULL,'',NULL,NULL,'											','complete','2016-10-01 12:10:00','2016-10-01 12:49:46','Unpaid','100','110',NULL,NULL,NULL,'0','2016-10-01 07:19:46','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'10','10','110',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(122,NULL,NULL,'',NULL,NULL,'',NULL,NULL,'											','complete','2016-10-01 12:10:00','2016-10-01 12:52:48','Paid','100','110',NULL,NULL,NULL,'0','2016-10-01 07:22:48','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'10','10','110',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(123,NULL,NULL,'vaibhav',NULL,NULL,'9725101520',NULL,NULL,'											','complete','2016-10-01 12:10:00','2016-10-01 13:00:07','Paid','200','220',NULL,NULL,NULL,'0','2016-10-01 07:30:07','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'10','20','220',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(124,NULL,NULL,'vaibhav',NULL,NULL,'9725101520',NULL,NULL,'											','complete','2016-10-01 12:10:00','2016-10-01 13:01:03','Paid','200','200',NULL,NULL,NULL,'0','2016-10-01 07:31:03','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'10','0','200',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(125,NULL,NULL,'',NULL,NULL,'',NULL,NULL,'											','complete','2016-10-01 14:10:00','2016-10-03 07:01:00','Paid','','0',NULL,NULL,NULL,'0','2016-10-01 08:56:20','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'10','','',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(126,NULL,NULL,'',NULL,NULL,'',NULL,NULL,'											','complete','2016-10-01 14:10:00','2016-10-03 07:01:00','Paid','','0',NULL,NULL,NULL,'0','2016-10-01 08:58:26','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'10','','',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(127,NULL,NULL,'testraja',NULL,NULL,'1452637894',NULL,NULL,'											','complete','2016-10-03 11:10:00','2016-10-04 07:01:00','Paid','100','110',NULL,NULL,NULL,'0','2016-10-03 05:35:17','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'10','10','110',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(128,NULL,NULL,'rajhit',NULL,NULL,'123462556',NULL,NULL,'											','complete','2016-10-03 12:10:00','2016-10-04 07:01:00','Paid','100','110',NULL,NULL,NULL,'0','2016-10-03 06:43:04','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'10','10','110',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(129,NULL,NULL,'rajhit',NULL,NULL,'123462556',NULL,NULL,'											','complete','2016-10-03 12:10:00','2016-10-04 07:01:00','Paid','200','230',NULL,NULL,NULL,'0','2016-10-03 06:51:09','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'10','30','230',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(130,NULL,NULL,'rajhit',NULL,NULL,'123462556',NULL,NULL,'Sagrampura		','complete','2016-10-03 15:10:00','2016-10-04 07:01:00','Paid','100','110',NULL,NULL,NULL,'0','2016-10-03 09:57:14','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'10','10','110',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(131,NULL,NULL,'rajhit',NULL,NULL,'123462556',NULL,NULL,'Sagrampura		','complete','2016-10-03 15:10:00','2016-10-04 07:01:00','Paid','100','110',NULL,NULL,NULL,'0','2016-10-03 09:57:50','0000-00-00 00:00:00','0000-00-00 00:00:00',2,NULL,NULL,NULL,NULL,NULL,NULL,'10','10','110',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(132,NULL,NULL,'test Reatail',NULL,'divyeshdolly1990@gmail.com','9812578125',NULL,NULL,'sagrampura										','complete','2016-10-05 10:10:00','2016-10-06 07:01:00','Paid','300','340',NULL,NULL,NULL,'0','2016-10-05 04:57:04','0000-00-00 00:00:00','0000-00-00 00:00:00',5,NULL,NULL,NULL,NULL,NULL,NULL,'10','40','340',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(133,NULL,NULL,'test Reatail',NULL,'divyeshdolly1990@gmail.com','9812578125',NULL,NULL,'sagrampura										','complete','2016-10-05 10:10:00','2016-10-06 07:01:00','Paid','300','340',NULL,NULL,NULL,'0','2016-10-05 11:14:34','0000-00-00 00:00:00','0000-00-00 00:00:00',5,NULL,NULL,NULL,NULL,NULL,NULL,'10','40','340',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(134,NULL,NULL,'test Reatail',NULL,'divyeshdolly1990@gmail.com','9812578125',NULL,NULL,'sagrampura										','complete','2016-10-05 10:10:00','2016-10-06 07:01:00','Paid','300','340',NULL,NULL,NULL,'0','2016-10-05 11:25:26','0000-00-00 00:00:00','0000-00-00 00:00:00',5,NULL,NULL,NULL,NULL,NULL,NULL,'10','40','340',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(135,NULL,NULL,'test Reatail',NULL,'divyeshdolly1990@gmail.com','9812578125',NULL,NULL,'sagrampura										','complete','2016-10-05 10:10:00','2016-10-06 07:01:00','Paid','300','340',NULL,NULL,NULL,'0','2016-10-05 11:26:40','0000-00-00 00:00:00','0000-00-00 00:00:00',5,NULL,NULL,NULL,NULL,NULL,NULL,'10','40','340',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(136,NULL,NULL,'test Reatail',NULL,'divyeshdolly1990@gmail.com','9812578125',NULL,NULL,'sagrampura										','complete','2016-10-05 10:10:00','2016-10-06 07:01:00','Paid','300','340',NULL,NULL,NULL,'0','2016-10-05 11:29:44','0000-00-00 00:00:00','0000-00-00 00:00:00',5,NULL,NULL,NULL,NULL,NULL,NULL,'10','40','340',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(137,NULL,NULL,'test Reatail',NULL,'divyeshdolly1990@gmail.com','9812578125',NULL,NULL,'sagrampura										','complete','2016-10-05 10:10:00','2016-10-06 07:01:00','Paid','300','340',NULL,NULL,NULL,'0','2016-10-05 11:31:13','0000-00-00 00:00:00','0000-00-00 00:00:00',5,NULL,NULL,NULL,NULL,NULL,NULL,'10','40','340',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(138,NULL,NULL,'test Reatail',NULL,'divyeshdolly1990@gmail.com','9812578125',NULL,NULL,'sagrampura										','complete','2016-10-05 10:10:00','2016-10-06 07:01:00','Paid','300','340',NULL,NULL,NULL,'0','2016-10-05 11:32:10','0000-00-00 00:00:00','0000-00-00 00:00:00',5,NULL,NULL,NULL,NULL,NULL,NULL,'10','40','340',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(139,NULL,NULL,'test Reatail',NULL,'divyeshdolly1990@gmail.com','9812578125',NULL,NULL,'sagrampura										','complete','2016-10-05 10:10:00','2016-10-06 19:01:00','Paid','300','340',NULL,NULL,NULL,'0','2016-10-05 11:36:01','0000-00-00 00:00:00','0000-00-00 00:00:00',5,NULL,NULL,NULL,NULL,NULL,NULL,'10','40','340',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,NULL),(140,'','','test Reatailupdate','','divyeshdolly1990@gmail.com','9812578125','','','sagrampura										','complete','2016-10-05 10:10:00','2016-10-06 19:01:00','Paid','300','340',NULL,NULL,NULL,'0','2016-10-06 10:37:20','0000-00-00 00:00:00','2016-10-07 11:18:34',5,NULL,NULL,NULL,NULL,NULL,NULL,'10','40','340',NULL,NULL,NULL,'','','client123','','Retail',NULL,NULL,NULL),(141,NULL,NULL,'Raju123',NULL,'divyeshdolly1990@gmail.com','9724783505',NULL,NULL,'		sagrampura									','complete','2016-10-07 17:10:00','2016-10-08 07:01:00','Paid','500','340',NULL,NULL,NULL,'0','2016-10-07 12:02:41','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes',NULL,NULL,NULL,NULL,NULL,'10','60','560',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,NULL,17),(142,NULL,NULL,'harshil123',NULL,'divyeshdolly1990@gmail.com','1234567890',NULL,NULL,'Sagrampur										','complete','2016-10-11 13:10:00','2016-10-12 07:01:00','Paid','100','110',NULL,NULL,NULL,'0','2016-10-11 08:29:59','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes','20161011-142_1.pdf',NULL,NULL,NULL,NULL,'10','10','110',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,'',17),(143,NULL,NULL,'harshil123',NULL,'divyeshdolly1990@gmail.com','9724783505',NULL,NULL,'		Sagrampura									','complete','2016-10-11 14:10:00','2016-10-12 07:01:00','Paid','100','110',NULL,NULL,NULL,'0','2016-10-11 08:59:05','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes','20161011-143_1.pdf',NULL,NULL,NULL,NULL,'10','10','110',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,'1006/rdf/16-17/',17),(144,NULL,NULL,'harshil123',NULL,'divyeshdolly1990@gmail.com','9724783505',NULL,NULL,'		Sagrampura									','complete','2016-10-11 14:10:00','2016-10-12 07:01:00','Paid','100','110',NULL,NULL,NULL,'0','2016-10-11 09:38:17','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes','20161011-144_1.pdf',NULL,NULL,NULL,NULL,'10','10','110',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,'1007/rdf/16-17/',17),(145,NULL,NULL,'harshil123',NULL,'divyeshdolly1990@gmail.com','9724783505',NULL,NULL,'		Sagrampura									','complete','2016-10-11 14:10:00','2016-10-12 07:01:00','Paid','100','110',NULL,NULL,NULL,'0','2016-10-11 11:28:11','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes','20161011-145_1.pdf',NULL,NULL,NULL,NULL,'10','10','110',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,'1008/rdf/16-17/',17),(146,'test wth tax','tsting								','Krunal','divyesh','div@gmail.com','','','9685748574','sagrampura								','new','2016-10-12 00:00:00','2016-10-13 00:00:00','Unpaid','1000','500','200',NULL,NULL,'','2016-10-12 06:07:12','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes',NULL,NULL,NULL,'','','10','100','1100',NULL,3,4,'','',NULL,NULL,'Event',NULL,NULL,NULL),(147,'test with tax','	test							','studio om','Rd const','rahul.hathi@gmail.com','','','9685748574','	Sagrampura							','new','2016-10-12 00:00:00','2016-10-13 00:00:00','Unpaid','5000','2000','200',NULL,NULL,'','2016-10-12 06:12:41','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes',NULL,NULL,NULL,'','','10','500','5500',NULL,3,4,'','',NULL,NULL,'Event',NULL,NULL,NULL),(148,'test std om 97','	merrage							','Kunall Chauhan','','krishna.kunal14@gmail','','8866568854','','								','new','2016-10-12 00:00:00','2016-10-12 00:00:00','Unpaid','49000','','21000',NULL,NULL,'','2016-10-12 08:42:32','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes','20161012-148_4.pdf',NULL,NULL,'','','10','4900','53900',NULL,3,4,'','',NULL,NULL,'Event',NULL,'',NULL),(149,NULL,NULL,'harshil123',NULL,'divyeshdolly1990@gmail.com','9724783505',NULL,NULL,'		Sagrampura									','complete','2016-10-11 14:10:00','2016-10-12 07:01:00','Paid','100','110',NULL,NULL,NULL,'0','2016-10-13 04:25:36','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes','20161011-149_1.pdf',NULL,NULL,NULL,NULL,'10','10','110',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,'1009/rdf/16-17/',17),(150,'testing with detail','								','Rana Divysh','testcompany','rahul.hathi@gmail.com','','','9725842109','Sagrampura Ramnivas Society Surat							','new','2016-10-14 00:00:00','2016-10-16 00:00:00','Unpaid','29000','15091','0',NULL,NULL,'','2016-10-14 14:18:04','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes','20161014-150_6.pdf',NULL,NULL,'','','10','2900','31900',NULL,2,2,'','',NULL,NULL,'Event',NULL,'1018/rdf/16-17/',NULL),(151,NULL,NULL,'harshil123',NULL,'divyeshdolly1990@gmail.com','9724783505',NULL,NULL,'		Sagrampura									','complete','2016-10-11 14:10:00','2016-10-12 07:01:00','Paid','100','110',NULL,NULL,NULL,'0','2016-10-14 15:12:51','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes','20161011-151_1.pdf',NULL,NULL,NULL,NULL,'10','10','110',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,'1013/rdf/16-17/',17),(152,NULL,NULL,'harshil123',NULL,'divyeshdolly1990@gmail.com','9724783505',NULL,NULL,'		Sagrampura									','complete','2016-10-11 14:10:00','2016-10-12 07:01:00','Paid','100','110',NULL,NULL,NULL,'0','2016-10-14 15:13:56','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes','20161011-152_1.pdf',NULL,NULL,NULL,NULL,'10','10','110',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,'1014/rdf/16-17/',17),(153,NULL,NULL,'harshil123',NULL,'divyeshdolly1990@gmail.com','9724783505',NULL,NULL,'		Sagrampura									','complete','2016-10-11 14:10:00','2016-10-12 07:01:00','Paid','100','110',NULL,NULL,NULL,'0','2016-10-14 17:07:26','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes','20161011-153_1.pdf',NULL,NULL,NULL,NULL,'10','10','110',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,'1015/rdf/16-17/',17),(154,NULL,NULL,'harshil123',NULL,'divyeshdolly1990@gmail.com','9724783505',NULL,NULL,'		Sagrampura									','complete','2016-10-11 14:10:00','2016-10-12 07:01:00','Paid','100','110',NULL,NULL,NULL,'0','2016-10-15 04:53:29','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes','20161011-154_1.pdf',NULL,NULL,NULL,NULL,'10','10','110',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,'1016/rdf/16-17/',17),(155,NULL,NULL,'harshil',NULL,'','1234567890',NULL,NULL,'as','complete','2016-10-11 14:10:00','2016-10-12 07:01:00','Unpaid','200','110',NULL,NULL,NULL,'0','2016-10-17 07:25:46','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes','20161011-155_1.pdf',NULL,NULL,NULL,NULL,'10','20','220',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,'1019/rdf/16-17/',17),(156,NULL,NULL,'',NULL,'','',NULL,NULL,'											','complete','2016-10-17 15:10:00','2016-10-18 07:01:00','Unpaid','200','0',NULL,NULL,NULL,'0','2016-10-17 10:40:20','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'Yes','20161017-156_1.pdf',NULL,NULL,NULL,NULL,'10','30','230',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,'',17),(157,NULL,NULL,'Divyesh',NULL,'div@gmmai.com','2147483647',NULL,NULL,'Divyesh','complete','2016-10-17 15:10:00','2016-10-18 07:01:00','Unpaid','200','0',NULL,NULL,NULL,'0','2016-10-17 10:42:39','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes','20161017-157_1.pdf',NULL,NULL,NULL,NULL,'10','30','230',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,'1020/rdf/16-17/',17),(158,NULL,NULL,'Divyesh',NULL,'div@gmmai.com','2147483647',NULL,NULL,'Divyesh','complete','2016-10-17 16:10:00','2016-10-18 07:01:00','Unpaid','200','0',NULL,NULL,NULL,'0','2016-10-17 10:45:04','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes','20161017-158_1.pdf',NULL,NULL,NULL,NULL,'10','30','230',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,'1021/rdf/16-17/',17),(159,NULL,NULL,'Divyesh',NULL,'div@gmmai.com','2147483647',NULL,NULL,'Divyesh','complete','2016-10-17 16:10:00','2016-10-18 07:01:00','Unpaid','200','0',NULL,NULL,NULL,'0','2016-10-17 10:49:49','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'Yes','20161017-159_1.pdf',NULL,NULL,NULL,NULL,'10','30','230',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,'',17),(160,NULL,NULL,'Divyesh',NULL,'div@gmmai.com','2147483647',NULL,NULL,'Divyesh','complete','2016-10-17 16:10:00','2016-10-18 07:01:00','Unpaid','200','0',NULL,NULL,NULL,'0','2016-10-17 10:51:35','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'Yes','20161017-160_1.pdf',NULL,NULL,NULL,NULL,'10','30','230',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,'',17),(161,NULL,NULL,'Divyesh',NULL,'div@gmmai.com','2147483647',NULL,NULL,'Divyesh','complete','2016-10-17 16:10:00','2016-10-18 07:01:00','Unpaid','NaN','0',NULL,NULL,NULL,'0','2016-10-17 10:51:52','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes','20161017-161_1.pdf',NULL,NULL,NULL,NULL,'10','NaN','NaN',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,'1022/rdf/16-17/',17),(162,NULL,NULL,'Divyesh',NULL,'div@gmmai.com','2147483647',NULL,NULL,'Divyesh','complete','2016-10-17 16:10:00','2016-10-18 07:01:00','Unpaid','500','0',NULL,NULL,NULL,'0','2016-10-17 11:28:25','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes','20161017-162_1.pdf',NULL,NULL,NULL,NULL,'10','70','570',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,'1023/rdf/16-17/',17),(163,NULL,NULL,'Divyesh',NULL,'div@gmmai.com','2147483647',NULL,NULL,'Divyesh','complete','2016-10-17 16:10:00','2016-10-18 07:01:00','Unpaid','200','0',NULL,NULL,NULL,'0','2016-10-17 12:08:11','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes','20161017-163_1.pdf',NULL,NULL,NULL,NULL,'10','30','230',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,'1024/rdf/16-17/',17),(164,NULL,NULL,'Divyesh',NULL,'div@gmmai.com','2147483647',NULL,NULL,'Divyesh','complete','2016-10-17 16:10:00','2016-10-18 07:01:00','Unpaid','300','0',NULL,NULL,NULL,'0','2016-10-17 12:09:11','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes','20161017-164_1.pdf',NULL,NULL,NULL,NULL,'10','40','340',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,'1025/rdf/16-17/',17),(165,NULL,NULL,'Divyesh',NULL,'div@gmmai.com','2147483647',NULL,NULL,'Divyesh','complete','2016-10-17 16:10:00','2016-10-18 07:01:00','Unpaid','300','0',NULL,NULL,NULL,'0','2016-10-17 12:09:55','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes','20161017-165_1.pdf',NULL,NULL,NULL,NULL,'10','40','340',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,'1026/rdf/16-17/',17),(166,NULL,NULL,'Divyesh',NULL,'div@gmmai.com','2147483647',NULL,NULL,'Divyesh','complete','2016-10-17 16:10:00','2016-10-18 07:01:00','Unpaid','300','0',NULL,NULL,NULL,'0','2016-10-17 12:11:24','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes','20161017-166_1.pdf',NULL,NULL,NULL,NULL,'10','40','340',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,'1027/rdf/16-17/',17),(167,NULL,NULL,'Divyesh',NULL,'div@gmmai.com','2147483647',NULL,NULL,'Divyesh','complete','2016-10-17 16:10:00','2016-10-18 07:01:00','Paid','300','340',NULL,NULL,NULL,'0','2016-10-17 12:13:42','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes','20161017-167_1.pdf',NULL,NULL,NULL,NULL,'10','40','340',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,'1028/rdf/16-17/',17),(168,NULL,NULL,'Divyesh',NULL,'div@gmmai.com','2147483647',NULL,NULL,'Divyesh','complete','2016-10-17 18:10:00','2016-10-18 07:01:00','Paid','200','230',NULL,NULL,NULL,'0','2016-10-17 13:01:14','0000-00-00 00:00:00','0000-00-00 00:00:00',5,'Yes','20161017-168_2.pdf',NULL,NULL,NULL,NULL,'10','30','230',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,'',17),(169,NULL,NULL,'Divyesh',NULL,'div@gmmai.com','2147483647',NULL,NULL,'Divyesh','complete','2016-10-18 11:10:00','2016-10-19 07:01:00','Paid','200','209',NULL,NULL,NULL,'0','2016-10-18 06:11:20','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes','20161018-169_1.pdf',NULL,NULL,NULL,NULL,'10','30','230',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,'1028/rdf/16-17/',17),(170,NULL,NULL,'Divyesh',NULL,'div@gmmai.com','2147483647',NULL,NULL,'Divyesh','complete','2016-10-18 11:10:00','2016-10-19 07:01:00','Unpaid','300','0',NULL,NULL,NULL,'0','2016-10-18 08:11:49','0000-00-00 00:00:00','0000-00-00 00:00:00',2,'Yes','20161018-170_1.pdf',NULL,NULL,NULL,NULL,'10','40','340',NULL,NULL,NULL,NULL,NULL,NULL,'','Retail',NULL,'/rdf/16-17/1030',17);
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
  `function` varchar(25) DEFAULT NULL,
  `event_date` datetime DEFAULT NULL,
  `event_to_date` datetime DEFAULT NULL,
  PRIMARY KEY (`event_places_id`),
  KEY `event_id` (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_places_dtl`
--

LOCK TABLES `event_places_dtl` WRITE;
/*!40000 ALTER TABLE `event_places_dtl` DISABLE KEYS */;
INSERT INTO `event_places_dtl` VALUES (1,1,'surat','surat','surat',NULL,'2016-06-24 01:06:26','2016-06-24 01:06:26'),(2,2,'surat','surat','surat',NULL,'2016-06-24 02:06:53','2016-06-24 02:06:53'),(3,3,'surat','surat','surat',NULL,'2016-06-29 12:06:20','2016-06-29 12:06:20'),(4,4,'sagrampura','Community','surat',NULL,'2016-07-01 09:07:51','2016-07-01 09:07:51'),(5,5,'sagrampura','Community','Surat',NULL,'2016-07-01 09:07:51','2016-07-01 09:07:51'),(6,6,'Palanpur','Starmall','Surat',NULL,'2016-07-01 10:07:48','2016-07-01 10:07:48'),(7,7,'venn0','hallo','land0',NULL,'2016-07-07 02:07:42','2016-07-07 02:07:42'),(8,7,'venn1','hall1','land1',NULL,'2016-07-07 14:52:36','2016-07-07 14:52:36'),(9,7,'venn2','hall2','land2',NULL,'2016-07-07 14:53:34','2016-07-07 14:53:34'),(10,8,'test0','hall0','land0',NULL,'2016-07-07 11:07:39','2016-07-07 11:07:39'),(11,8,'test1','hall1','land1',NULL,'2016-07-08 00:01:49','2016-07-08 00:01:49'),(12,8,'test2','hall2','land2',NULL,'2016-07-08 00:01:51','2016-07-08 00:01:51'),(13,8,'test4','hall4','land4',NULL,'2016-07-08 00:04:16','2016-07-08 00:04:16'),(14,9,'','','',NULL,'2016-07-08 12:07:07','2016-07-08 12:07:07'),(15,10,'surat','surat','surat',NULL,'2016-07-08 12:07:24','2016-07-08 12:07:24'),(16,10,'adajan','jkkl','jkj',NULL,'2016-07-08 00:59:34','2016-07-08 00:59:34'),(17,10,'sagrampura','surat','surat',NULL,'2016-07-08 00:59:36','2016-07-08 00:59:36'),(18,11,'aa','asa','sa',NULL,'2016-07-15 12:07:06','2016-07-15 12:07:06'),(19,11,'xasd','sas','sas',NULL,'2016-07-15 00:32:02','2016-07-15 00:32:02'),(20,12,'sdd','sd','sd',NULL,'2016-07-15 01:07:56','2016-07-15 01:07:56'),(21,12,'dsa','dad','ad',NULL,'2016-07-15 01:13:55','2016-07-15 01:13:55'),(22,0,'','','',NULL,'2016-07-28 11:07:00','2016-07-28 11:07:00'),(23,0,'','','',NULL,'2016-07-28 12:47:35','2016-07-28 12:47:35'),(24,13,'Adajan','Community','surat',NULL,'2016-07-28 13:07:00','2016-07-28 13:07:00'),(25,13,'','','',NULL,'2016-07-28 14:01:02','2016-07-28 14:01:02'),(26,14,'Adajan','Community','surat',NULL,'2016-07-28 13:07:00','2016-07-28 13:07:00'),(27,14,'','','',NULL,'2016-07-28 14:02:36','2016-07-28 14:02:36'),(28,15,'Adajan','comunity123','rustompura123',NULL,'2016-08-18 15:25:00','2016-08-18 15:24:00'),(29,15,'sagram','anavil store','sagrampura1',NULL,'2016-07-29 14:08:00','2016-08-18 15:25:00'),(31,29,'Sagrampura','Community','Surat','Sangit','2016-08-02 14:08:00','2016-08-02 14:08:00'),(32,29,'Adajan','Comminty','Surat','ras dandya','2016-08-03 14:08:00','2016-08-03 14:08:00'),(37,36,'surat','surat','surat',NULL,'2016-08-05 12:08:00','2016-08-05 12:08:00'),(38,36,'surat','surat','surat',NULL,'2016-08-06 12:21:00','2016-08-06 12:21:00'),(39,36,'surat','surat','surat',NULL,'2016-08-07 12:21:00','2016-08-07 12:21:00'),(47,45,'surat','surat','surat',NULL,'2016-09-01 17:09:00','2016-09-01 17:09:00'),(48,45,'surat1','surat1','surat1',NULL,'2016-09-01 17:30:00','2016-09-01 17:30:00'),(49,46,'surat','surat','surat',NULL,'2016-09-01 17:09:00','2016-09-01 17:09:00'),(50,46,'surat1','surat1','surat1',NULL,'2016-09-01 17:36:00','2016-09-01 17:36:00'),(51,47,'Adajan','Surat','Surat',NULL,'2016-09-02 12:09:00','2016-09-02 12:09:00'),(53,47,'new places','surat','surat',NULL,'2016-09-02 18:19:00','2016-09-02 18:19:00'),(54,47,'new place in res','surat','surat',NULL,'2016-09-02 18:25:00','2016-09-02 18:25:00'),(55,48,'vn1','Surat','Surat',NULL,'2016-09-06 09:09:00','2016-09-06 09:09:00'),(56,48,'adajan','Party','Surat',NULL,'2016-09-07 09:12:00','2016-09-07 09:12:00'),(57,49,'vn1','surat','',NULL,'2016-09-06 11:09:00','2016-09-06 11:09:00'),(58,50,'surat','surat','surat',NULL,'2016-09-08 15:09:00','2016-09-08 15:09:00'),(59,51,'Adajan','Surat','surat',NULL,'2016-09-08 15:09:00','2016-09-14 15:09:00'),(60,52,'Sagrampura','surat1','',NULL,'2016-09-08 15:09:00','2016-09-08 15:09:00'),(61,53,'gopipura','surat','surat',NULL,'2016-09-08 16:09:00','2016-09-08 16:09:00'),(62,54,'sagrampura','surat','surat',NULL,'2016-09-08 17:09:00','2016-09-09 17:09:00'),(63,55,'surat','surat','surat',NULL,'2016-09-08 17:09:00','2016-09-09 17:09:00'),(64,56,'Adajan','Surat','surat',NULL,'2016-09-08 17:09:00','2016-09-09 17:09:00'),(65,57,'Adajan','Surat','surat',NULL,'2016-09-08 17:09:00','2016-09-09 17:09:00'),(66,58,'Sagrampura','surat','Surat',NULL,'2016-09-08 17:09:00','2016-09-08 17:09:00'),(67,59,'Sagrampura','surat','Surat',NULL,'2016-09-08 17:09:00','2016-09-08 17:09:00'),(68,60,'Sagrampura','surat','surat',NULL,'2016-09-08 17:09:00','2016-09-08 17:09:00'),(69,61,'Adajan','surat','surat1',NULL,'2016-09-08 17:09:00','2016-09-08 17:09:00'),(70,62,'Adajan','Surat','Surat',NULL,'2016-09-08 17:09:00','2016-09-08 17:09:00'),(71,63,'thyt','ythyt','ytjy',NULL,'2016-09-08 18:09:00','2016-09-09 18:09:00'),(72,64,'dcd','sdcsd','dsc',NULL,'2016-09-09 18:09:00','2016-09-08 18:09:00'),(73,65,'vn1','surat','Surat',NULL,'2016-09-08 18:09:00','2016-09-08 18:09:00'),(74,66,'vn1','surat1','surat1',NULL,'2016-09-08 18:09:00','2016-09-08 18:09:00'),(75,67,'Sagrampura','surat','surat',NULL,'2016-09-09 09:09:00','2016-09-09 09:09:00'),(76,68,'Adajan','surat','surat',NULL,'2016-09-09 09:09:00','2016-09-09 09:09:00'),(77,69,'Sagrampura','surat','Surat',NULL,'2016-09-09 10:09:00','2016-09-09 10:09:00'),(78,70,'Sagrampura','Surat','Surat',NULL,'2016-09-09 10:09:00','2016-09-09 10:09:00'),(79,71,'Sagrampura','surat','surat',NULL,'2016-09-09 10:09:00','2016-09-09 10:09:00'),(80,72,'Adajan','surat','Surat',NULL,'2016-09-09 10:09:00','2016-09-09 10:09:00'),(81,73,'Sagrampura','Surat','Surat',NULL,'2016-09-09 10:09:00','2016-09-09 10:09:00'),(82,74,'Adajan','surat','surat','Reception','2016-09-10 10:09:00','2016-09-10 10:09:00'),(83,75,'Adajan','surat','surat','Sangit','2016-09-10 10:09:00','2016-09-10 10:09:00'),(84,76,'Sagrampura','surat','surat','Reception','2016-09-10 10:09:00','2016-09-10 10:09:00'),(85,77,'Adajan','surat','Surat','Sangit','2016-09-10 11:09:00','2016-09-10 11:09:00'),(86,78,'Sagrampura','surat','surat','Sangit','2016-09-10 11:09:00','2016-09-10 11:09:00'),(87,79,'Sagrampura','surat','surat1','Sangit','2016-09-10 11:09:00','2016-09-10 11:09:00'),(88,80,'Adajan','surat','surat1','Sangit','2016-09-10 12:09:00','2016-09-10 12:09:00'),(89,81,'Adajan','surat1','surat','Reception','2016-09-10 12:09:00','2016-09-10 12:09:00'),(90,82,'Sagrampura','Surat','surat','Sangit','2016-09-10 12:09:00','2016-09-10 12:09:00'),(91,83,'Sagrampura','surat1','Surat','Sangit','2016-09-10 12:09:00','2016-09-10 12:09:00'),(92,84,'Sagrampura','surat1','Surat','Sangit','2016-09-10 12:09:00','2016-09-10 12:09:00'),(93,85,'','','','Mahendi','2016-09-21 12:09:00','2016-09-23 12:09:00'),(94,86,'Sagrampura','surat','surat','Sangit','2016-09-10 12:09:00','2016-09-10 12:09:00'),(95,87,'Sagrampura','surat','Surat','Sangit','2016-09-12 15:09:00','2016-09-12 20:09:00'),(96,88,'Adajan','surat','Surat','Sangit','2016-09-12 15:09:00','2016-09-12 15:09:00'),(97,89,'Sagrampura','surat','Surat','Sangit','2016-09-16 10:09:00','2016-09-16 10:09:00'),(98,90,'Sagrampura','surat','surat','Sangit','2016-09-16 10:09:00','2016-09-16 10:09:00'),(99,91,'Sagrampura','Surat','surat','Reception','2016-09-16 17:09:00','2016-09-16 17:09:00'),(100,1,'test new','surat','','Mahendi','2016-09-22 15:30:00','2016-09-22 15:30:00'),(101,92,'Adajan','surat','Surat','Sangit','2016-09-24 11:09:00','2016-09-24 11:09:00'),(102,92,'adajan','surat1','Unik Hospital','Sangit','2016-09-24 11:09:00','2016-09-24 11:09:00'),(103,94,'Sagrampura','surat','Surat','sangit','2016-09-27 10:09:00','2016-09-27 10:09:00'),(104,94,'U.M Road','Community','Surat','ras dandya','2016-09-27 10:09:00','2016-09-27 10:09:00'),(105,95,'Sagrampura','surat','Surat','sangit','2016-09-26 09:09:00','2016-09-26 09:09:00'),(106,95,'adajan','Community','Surat','ras dandya','2016-09-26 09:09:00','2016-09-26 09:09:00'),(107,96,'Sagrampura','surat','Surat','surat','2016-09-28 13:09:00','2016-09-28 13:09:00'),(108,97,'Adajan','','','sangit','2016-09-28 18:09:00','2016-09-28 18:09:00'),(109,98,'Sagrampura','Surat','Surat','Sangit','2016-09-30 10:57:00','2016-09-30 10:57:00'),(110,146,'Sagrampura','surat','surat','Sangit','2016-10-12 10:21:00','2016-10-13 18:21:00'),(111,147,'jolly party plot','Surat','Surat','Sangit','2016-10-12 11:10:00','2016-10-12 11:10:00'),(112,148,'Surat','Vijayalaxmi Hall','Vesu','Ring Ceremony & DJ','2016-10-12 14:10:00','2016-10-12 14:10:00'),(113,148,'Surat','Vijaya Laxmi Hall','Vesu','Wedding','2016-10-12 14:02:00','2016-10-12 14:02:00'),(114,150,'Sagrampura','Vijayalaxmi Hall','Surat','Ring Ceremony & DJ','2016-10-14 19:10:00','2016-10-14 23:45:00');
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
  PRIMARY KEY (`event_staff_id`),
  KEY `event_places_id` (`event_places_id`),
  KEY `event_id` (`event_id`),
  KEY `staff_id` (`staff_id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_staff_dtl`
--

LOCK TABLES `event_staff_dtl` WRITE;
/*!40000 ALTER TABLE `event_staff_dtl` DISABLE KEYS */;
INSERT INTO `event_staff_dtl` VALUES (1,5,5,18),(2,6,6,18),(3,6,6,19),(4,6,6,0),(5,6,6,0),(6,7,7,16),(7,7,7,18),(8,8,7,0),(9,8,7,19),(10,9,7,19),(11,9,7,18),(12,10,8,18),(13,10,8,18),(14,11,8,0),(15,11,8,19),(16,13,8,0),(17,13,8,19),(18,13,8,18),(19,15,10,18),(20,15,10,18),(21,16,10,16),(22,17,10,18),(23,17,10,18),(24,17,10,19),(25,18,11,18),(26,19,11,0),(27,20,12,18),(28,20,12,0),(29,21,12,0),(30,24,13,16),(31,24,13,19),(32,25,13,19),(33,26,14,16),(34,26,14,19),(35,27,14,19),(36,28,15,16),(37,28,15,19),(38,29,15,18),(39,30,15,18),(40,34,35,16),(41,34,35,16),(42,35,35,19),(43,35,35,17),(44,37,36,16),(45,37,36,17),(46,38,36,16),(47,39,36,16),(48,28,15,17),(49,29,15,17),(50,29,15,17),(51,29,15,17),(52,28,15,19),(53,40,0,16),(54,40,0,16),(55,41,15,0),(56,41,15,19),(57,1,1,0),(58,1,1,17),(59,1,1,16),(60,1,1,16),(61,42,15,0),(62,43,15,16),(63,44,15,0),(64,28,15,17),(65,29,15,16),(66,44,15,16),(67,45,15,17),(68,46,15,17),(69,47,45,17),(70,48,45,18),(71,49,46,16),(72,51,47,16),(73,51,47,16),(74,53,47,17),(75,53,47,17),(76,54,47,17),(77,55,48,16),(78,56,48,16),(79,57,49,0),(80,62,54,16),(81,109,98,16),(82,109,98,17);
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
  PRIMARY KEY (`vd_payment_id`),
  KEY `event_vendor_id` (`event_vendor_id`),
  KEY `event_id` (`event_id`)
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
  PRIMARY KEY (`event_vendor_id`),
  KEY `event_id` (`event_id`),
  KEY `event_places_id` (`event_places_id`),
  KEY `vend_id` (`vend_id`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_vendor_dtl`
--

LOCK TABLES `event_vendor_dtl` WRITE;
/*!40000 ALTER TABLE `event_vendor_dtl` DISABLE KEYS */;
INSERT INTO `event_vendor_dtl` VALUES (1,5,5,1,'15000','15000','Paid'),(2,5,5,1,'15000',NULL,NULL),(3,6,6,0,'','0','Unpaid'),(4,6,6,0,'','0','Unpaid'),(5,6,6,3,'18000','0','Unpaid'),(6,6,6,2,'20000','0','Unpaid'),(7,7,7,0,'','0','Unpaid'),(8,7,7,0,'','0','Unpaid'),(9,7,8,2,'5000','0','Unpaid'),(10,7,8,0,'','0','Unpaid'),(11,7,9,0,'','0','Unpaid'),(12,7,9,0,'','0','Unpaid'),(13,8,10,0,'','0','Unpaid'),(14,8,10,0,'','0','Unpaid'),(15,8,11,3,'8000','0','Unpaid'),(16,8,11,0,'','0','Unpaid'),(17,8,13,3,'18000','0','Unpaid'),(18,8,13,0,'','0','Unpaid'),(19,8,13,0,'','0','Unpaid'),(20,10,15,0,'','0','Unpaid'),(21,10,15,0,'','0','Unpaid'),(22,10,16,2,'15000','0','Unpaid'),(23,10,17,0,'','0','Unpaid'),(24,10,17,0,'','0','Unpaid'),(25,10,17,0,'','0','Unpaid'),(26,11,18,0,'','0','Unpaid'),(27,11,19,2,'2500s','0','Unpaid'),(28,12,20,0,'','0','Unpaid'),(29,12,20,3,'12000','0','Unpaid'),(30,12,21,3,'500','0','Unpaid'),(31,13,24,0,'','0','Unpaid'),(32,13,24,0,'','0','Unpaid'),(33,13,25,0,'','0','Unpaid'),(34,14,26,0,'','0','Unpaid'),(35,14,26,0,'','0','Unpaid'),(36,14,27,0,'','0','Unpaid'),(37,15,28,0,'','0','Unpaid'),(38,15,28,0,'','0','Unpaid'),(39,15,29,0,'','0','Unpaid'),(40,15,30,0,'','0','Unpaid'),(41,35,34,0,'','0','Unpaid'),(42,35,34,0,'','0','Unpaid'),(43,35,35,0,'','0','Unpaid'),(44,35,35,0,'','0','Unpaid'),(45,36,37,0,'','0','Unpaid'),(46,36,37,0,'','0','Unpaid'),(47,36,38,0,'','0','Unpaid'),(48,36,39,0,'','0','Unpaid'),(49,15,28,1,'12000','0','Unpaid'),(50,15,29,3,'5000','0','Unpaid'),(51,15,29,3,'5000','0','Unpaid'),(52,15,29,3,'5000','0','Unpaid'),(53,15,28,2,'12000','0','Unpaid'),(54,0,40,5,'15000','0','Unpaid'),(55,0,40,2,'2000','0','Unpaid'),(56,15,41,0,'','0','Unpaid'),(57,15,41,2,'15000','0','Unpaid'),(58,1,1,5,'15000','0','Unpaid'),(59,1,1,5,'1000','0','Unpaid'),(60,1,1,5,'20000','0','Unpaid'),(61,1,1,1,'12000','0','Unpaid'),(62,15,42,0,'','0','Unpaid'),(63,15,43,2,'','0','Unpaid'),(64,15,44,0,'0','0','Unpaid'),(65,15,28,2,'5000','0','Unpaid'),(66,15,29,5,'25000','0','Unpaid'),(67,15,44,0,'0','0','Unpaid'),(68,15,45,5,'10000','0','Unpaid'),(69,15,46,3,'10000','0','Unpaid'),(70,45,47,2,'5000','0','Unpaid'),(71,45,48,1,'5000','0','Unpaid'),(72,46,49,2,'25000','0','Unpaid'),(73,47,51,3,'2500','0','Unpaid'),(74,47,51,5,'5000','0','Unpaid'),(75,47,53,5,'5000','0','Unpaid'),(76,47,53,3,'15000','0','Unpaid'),(77,47,54,3,'5000','0','Unpaid'),(78,48,55,0,'','0','Unpaid'),(79,48,56,0,'','0','Unpaid'),(80,49,57,0,'','0','Unpaid'),(81,54,62,2,'2500','0','Unpaid'),(82,95,105,5,'150','0','Unpaid'),(83,95,106,0,'0','0','Unpaid'),(84,96,107,5,'100','0','Unpaid'),(85,96,107,5,'100','0','Unpaid'),(86,97,108,0,'0','0','Unpaid'),(87,97,108,5,'500','0','Unpaid'),(88,97,108,2,'500','0','Unpaid'),(89,97,108,2,'5000','0','Unpaid'),(90,97,108,0,'0','0','Unpaid'),(91,97,108,5,'1500','0','Unpaid'),(92,97,108,0,'0','0','Unpaid'),(93,97,108,0,'0','0','Unpaid'),(94,0,0,0,'\".$txtdelvendpr','0','Unpaid'),(95,97,0,5,'100','0','Unpaid'),(96,97,0,0,'0','0','Unpaid'),(97,97,0,0,'0','0','Unpaid'),(98,98,109,5,'0','0','Unpaid'),(99,98,109,5,'1000','0','Unpaid'),(100,98,0,0,'0','0','Unpaid'),(101,10,0,0,'0','0','Unpaid'),(102,10,0,0,'0','0','Unpaid'),(103,98,109,0,'0','0','Unpaid'),(104,98,109,0,'0','0','Unpaid'),(105,29,0,0,'0','0','Unpaid'),(106,29,0,0,'0','0','Unpaid'),(107,146,110,5,'200','0','Unpaid'),(108,147,111,0,'0','0','Unpaid'),(109,147,111,5,'200','0','Unpaid'),(110,148,112,2,'5000','0','Unpaid'),(111,148,112,3,'4500','0','Unpaid'),(112,148,113,2,'7000','0','Unpaid'),(113,148,113,2,'4500','0','Unpaid'),(114,150,114,0,'0','0','Unpaid'),(115,150,114,0,'0','0','Unpaid'),(116,150,114,0,'0','0','Unpaid');
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expence_cat_mst`
--

LOCK TABLES `expence_cat_mst` WRITE;
/*!40000 ALTER TABLE `expence_cat_mst` DISABLE KEYS */;
INSERT INTO `expence_cat_mst` VALUES (1,'Food','event'),(2,'Traveling','event'),(3,'Other','event'),(4,'Salary','other'),(5,'Stationary','other'),(6,'Tea/Coffee','other'),(7,'Electricity','other'),(8,'Phone Bill','other'),(9,'Internet Bill','other'),(10,'Rent','other'),(11,'Other','other'),(12,'Home','other'),(13,'Personal','other');
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
  `exp_by_vendor` int(11) DEFAULT NULL,
  `attachment_json` varchar(5000) DEFAULT NULL,
  `cmp_id` int(11) DEFAULT NULL,
  `payment_mode` varchar(45) DEFAULT NULL,
  `bank_name` varchar(45) DEFAULT NULL,
  `cheque_no` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`exp_id`),
  KEY `exp_cat_id` (`exp_cat_id`),
  KEY `event_id` (`event_id`),
  KEY `exp_by` (`exp_by`),
  KEY `exp_by_vendor` (`exp_by_vendor`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expence_dtl`
--

LOCK TABLES `expence_dtl` WRITE;
/*!40000 ALTER TABLE `expence_dtl` DISABLE KEYS */;
INSERT INTO `expence_dtl` VALUES (2,1,3,'2016-07-16 09:07:35','500',18,0,NULL,NULL,NULL,NULL,NULL),(3,1,1,'2016-07-16 01:07:04','500',16,0,NULL,NULL,NULL,NULL,NULL),(4,2,1,'2016-07-16 01:07:04','1000',18,0,NULL,NULL,NULL,NULL,NULL),(5,3,1,'2016-07-16 01:07:04','700',19,0,NULL,NULL,NULL,NULL,NULL),(9,1,4,'2016-08-27 12:08:00','100',17,0,NULL,NULL,NULL,NULL,NULL),(10,3,4,'2016-08-27 12:08:00','50',17,0,NULL,NULL,NULL,NULL,NULL),(11,1,12,'2016-08-27 12:08:00','150',16,0,NULL,NULL,NULL,NULL,NULL),(12,1,12,'2016-08-30 15:08:00','155',0,0,NULL,NULL,NULL,NULL,NULL),(13,2,1,'2016-10-14 13:10:00','1000',17,0,NULL,1,'cheque','bank of baroda','c1234'),(14,12,0,'2016-10-14 13:10:00','500',18,0,NULL,3,'cheque','state  bank of india','s123455');
/*!40000 ALTER TABLE `expence_dtl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invoice_config`
--

DROP TABLE IF EXISTS `invoice_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `invoice_config` (
  `invoice_conf_id` int(11) NOT NULL AUTO_INCREMENT,
  `cmp_id` int(11) DEFAULT NULL,
  `label` varchar(30) NOT NULL,
  `type` varchar(10) NOT NULL,
  `start_at` int(5) NOT NULL,
  `next_val` int(10) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`invoice_conf_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invoice_config`
--

LOCK TABLES `invoice_config` WRITE;
/*!40000 ALTER TABLE `invoice_config` DISABLE KEYS */;
INSERT INTO `invoice_config` VALUES (1,5,'SBT/2016-17/','prefix',0,0,'2016-09-16 09:31:24'),(2,5,'RDC/2016-17/','prefix',0,6,'2016-09-16 09:35:03'),(3,2,'/DCV/2016-17/','prefix',0,2,'2016-09-16 11:51:08'),(4,5,'/Dc/16-17/','prefix',1,14,'2016-09-26 13:29:04'),(5,2,'/rdf/16-17/','postfix',1001,1031,'2016-10-03 10:54:18');
/*!40000 ALTER TABLE `invoice_config` ENABLE KEYS */;
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
  PRIMARY KEY (`places_id`),
  KEY `event_id` (`event_id`),
  KEY `event_places_id` (`event_places_id`),
  KEY `eq_id` (`eq_id`),
  KEY `staff_id` (`staff_id`),
  KEY `vend_id` (`vend_id`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `new_event_places_dtl`
--

LOCK TABLES `new_event_places_dtl` WRITE;
/*!40000 ALTER TABLE `new_event_places_dtl` DISABLE KEYS */;
INSERT INTO `new_event_places_dtl` VALUES (1,1,1,1,'25000',2,'50000',0,0,'','test','',''),(2,2,2,1,'25000',2,'50000',0,0,'','test','',''),(3,3,3,1,'25000',1,'25000',16,0,'','hello\n','',''),(4,4,4,1,'25000',1,'25000',16,1,'15000','','',''),(5,5,5,1,'25000',1,'25000',18,1,'15000','testing','',''),(6,6,6,1,'25000',1,'25000',18,0,'','taking this task to the this particular place','',''),(7,6,6,2,'12500',2,'25000',19,0,'','taking this task to u','',''),(8,6,6,2,'12500',2,'25000',0,3,'18000','selected vendor for this ','',''),(9,6,6,1,'25000',1,'25000',0,2,'20000','selected vendor for this','',''),(10,7,7,1,'25000',1,'25000',16,0,'','rem0','',''),(11,7,7,2,'12500',1,'12500',18,0,'','rem0','',''),(12,7,8,2,'12500',1,'12500',0,2,'5000','rem1','undefined','undefined'),(13,7,8,3,'35',1,'3500',19,0,'','','undefined','undefined'),(14,7,9,2,'12500',1,'12500',19,0,'','rem2','undefined','undefined'),(15,7,9,1,'25000',1,'25000',18,0,'','rem2','undefined','undefined'),(16,8,10,1,'25000',2,'50000',18,0,'','zero','',''),(17,8,10,4,'15000',2,'30000',18,0,'','zero','',''),(18,8,11,3,'35',3,'15750',0,3,'8000','one','undefined','undefined'),(19,8,11,1,'25000',1,'25000',19,0,'','one','undefined','undefined'),(20,8,13,2,'12500',3,'37500',0,3,'18000','four','undefined','undefined'),(21,8,13,3,'35',1,'10500',19,0,'','four','undefined','undefined'),(22,8,13,1,'25000',1,'25000',18,0,'','four','undefined','undefined'),(23,10,15,1,'25000',1,'25000',18,0,'','0','',''),(24,10,15,3,'35',1,'5250',18,0,'','0','10','15'),(25,10,16,2,'12500',2,'25000',16,2,'15000','1','undefined','undefined'),(26,10,17,1,'25000',1,'25000',18,0,'','2','undefined','undefined'),(27,10,17,4,'15000',2,'30000',18,0,'','2','undefined','undefined'),(28,10,17,2,'12500',1,'12500',19,0,'','2','undefined','undefined'),(29,11,18,1,'25000',3,'75000',18,0,'','a','',''),(30,11,19,3,'35',1,'5250',0,2,'2500s','dsad','undefined','undefined'),(31,12,20,1,'25000',3,'75000',18,0,'','','',''),(32,12,20,3,'35',1,'21875',0,3,'12000','s','25','25'),(33,12,21,3,'35',1,'3500',0,3,'500','','undefined','undefined'),(34,13,24,4,'15000',1,'15000',16,0,'','ashish at 1','',''),(35,13,24,2,'2000',1,'2000',19,0,'','divyesh','',''),(36,13,25,1,'25000',1,'25000',19,0,'','','undefined','undefined'),(37,14,26,4,'15000',1,'15000',16,0,'','ashish at 1','',''),(38,14,26,2,'2000',1,'2000',19,0,'','divyesh','',''),(39,14,27,1,'25000',1,'25000',19,0,'','','undefined','undefined'),(42,15,29,1,'25000',1,'25000',18,0,'','','undefined','undefined'),(44,35,34,1,'25000',1,'25000',16,0,'','','',''),(45,35,34,2,'12500',1,'12500',16,0,'','','',''),(46,35,35,1,'25000',1,'25000',19,0,'','','undefined','undefined'),(47,35,35,4,'15000',1,'15000',17,0,'','','undefined','undefined'),(48,36,37,1,'25000',1,'25000',16,0,'','','',''),(49,36,37,4,'15000',1,'15000',17,0,'','','',''),(50,36,38,1,'25000',2,'50000',16,0,'','','undefined','undefined'),(51,36,39,1,'25000',2,'50000',16,0,'','','undefined','undefined'),(64,1,1,4,'15000',1,'15000',16,1,'12000','','',''),(67,15,28,2,'12500',1,'12500',17,2,'5000','','',''),(72,45,47,4,'15000',1,'15000',17,2,'5000','cx','',''),(73,45,48,4,'15000',1,'15000',18,1,'5000','ddcd','undefined','undefined'),(74,46,49,6,'35000',1,'35000',16,2,'25000','','',''),(75,47,51,3,'35',1,'5250',16,3,'2500','','10','15'),(76,47,51,4,'15000',1,'15000',16,5,'5000','sas','',''),(77,47,53,1,'25000',1,'25000',17,5,'5000','sd','undefined','undefined'),(78,47,53,6,'35000',1,'35000',17,3,'15000','asdsa','undefined','undefined'),(79,47,54,4,'15000',1,'15000',17,3,'5000','sds','undefined','undefined'),(80,48,55,1,'25000',1,'25000',16,0,'','','',''),(81,48,56,4,'15000',1,'15000',16,0,'','','undefined','undefined'),(82,49,57,6,'35000',1,'35000',0,0,'','','',''),(83,54,62,3,'35',1,'5250',16,2,'2500','','10','15'),(84,98,109,1,'25000',1,'25000',16,0,'0','','',''),(85,98,109,4,'15000',1,'15000',17,0,'0','','','');
/*!40000 ALTER TABLE `new_event_places_dtl` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `suchak_mgt`.`new_event_places_dtl_AFTER_INSERT` AFTER INSERT ON `new_event_places_dtl` FOR EACH ROW
BEGIN

	INSERT INTO `event_equipment_dtl`
  (event_places_id,event_id,equipment_id) 
  VALUES 
  (NEW.event_places_id,NEW.event_id,NEW.eq_id); 
  
  INSERT INTO `event_staff_dtl`
  (event_places_id,event_id,staff_id) 
  VALUES 
  (NEW.event_places_id,NEW.event_id,NEW.staff_id); 
  
  INSERT INTO `event_vendor_dtl`
  (event_places_id,event_id,vend_id,vendor_charges,vendor_paid_amt,vendor_paid_status) 
  VALUES 
  (NEW.event_places_id,NEW.event_id,NEW.vend_id,NEW.vend_price,'0','Unpaid');
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

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
  KEY `FK_EQASS_EQID_idx` (`eq_id`),
  KEY `eq_id` (`eq_id`),
  KEY `eq_id_2` (`eq_id`)
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
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
  `tax_mode` varchar(15) DEFAULT NULL,
  `tax_rate` varchar(15) DEFAULT NULL,
  `tax_amt` varchar(15) DEFAULT NULL,
  `actual_amt` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_mst`
--

LOCK TABLES `product_mst` WRITE;
/*!40000 ALTER TABLE `product_mst` DISABLE KEYS */;
INSERT INTO `product_mst` VALUES (1,'test','t123','t123','Camera','Services',1,'2000','1000',1,'2016-07-28 18:28:45','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL,NULL,NULL),(2,'test','tevh','hghg','hgh','Services',1,'232','2121',1,'2016-07-28 18:47:24','2016-07-28 18:47:43','0000-00-00 00:00:00','client123',NULL,NULL,NULL,NULL),(3,'Roll1','r123','r123','Roll','',1,'1500','1500',1,'2016-07-29 07:46:36','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL,NULL,NULL),(4,'Single photo','pic123','pic123','Single Photo','Product',3,'250','200',1,'2016-08-03 06:30:49','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL,NULL,NULL),(5,'Photo 10 X 20','P123','P123','Photo 10 X 20','Product',3,'230','150',1,'2016-09-29 18:15:21','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,'Yes','15','30','200'),(6,'mug','m1','m1','mug with tax','Services',3,'110','80',1,'2016-10-01 07:11:17','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,'Yes','10','10','100'),(7,'keyboard','k1','k1','keyboard with tax','Services',3,'220','150',1,'2016-10-01 07:28:21','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,'Yes','10','20','200');
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
  `res_vend_id` int(11) DEFAULT NULL,
  `res_vend_price` varchar(15) DEFAULT NULL,
  `res_remark` varchar(245) DEFAULT NULL,
  PRIMARY KEY (`res_pls_id`),
  KEY `event_id` (`event_id`),
  KEY `res_id` (`res_id`),
  KEY `res_vend_id` (`res_vend_id`)
) ENGINE=InnoDB AUTO_INCREMENT=137 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `res_places_dtl`
--

LOCK TABLES `res_places_dtl` WRITE;
/*!40000 ALTER TABLE `res_places_dtl` DISABLE KEYS */;
INSERT INTO `res_places_dtl` VALUES (6,29,31,2,'cinemetography','3','4500','13500',0,NULL,NULL),(7,29,32,2,'cinemetography','3','4500','13500',0,NULL,NULL),(8,29,32,1,'photography','2','1200','2400',0,NULL,NULL),(47,15,29,1,'photography','1','1200','1200',0,'',''),(51,15,28,1,'photography','1','1200','1200',0,'',''),(53,45,47,6,'25 photo copy','1','500','500',NULL,NULL,NULL),(54,45,48,2,'cinemetography','1','4500','4500',NULL,NULL,NULL),(55,46,49,2,'cinemetography','1','4500','4500',5,'2000','kkh'),(56,46,50,6,'25 photo copy','4','500','2000',5,'1500','s'),(57,46,50,1,'photography','3','1200','3600',2,'1000',''),(58,47,51,7,'Double photo','15','150','2250',2,'500',''),(63,47,53,7,'Double photo','100','150','15000',0,'',''),(64,47,53,2,'cinemetography','1','4500','4500',0,'',''),(65,47,54,5,'Single Photo','10','250','2500',3,'500','sds'),(66,48,55,2,'cinemetography','1','4500','4500',0,'',''),(67,48,55,5,'Single Photo','3','250','750',0,'',''),(68,48,56,4,'videography','2','2200','4400',0,'',''),(69,48,56,6,'25 photo copy','1','500','500',0,'',''),(70,49,57,6,'25 photo copy','1','500','500',2,'250',''),(71,50,58,2,'cinemetography','1','4500','4500',5,'2500',''),(72,51,59,7,'Double photo','1','150','150',5,'2500',''),(73,52,60,6,'25 photo copy','1','500','500',2,'200',''),(74,53,61,2,'cinemetography','1','4500','4500',5,'2500',''),(75,54,62,6,'25 photo copy','1','500','500',2,'250',''),(76,54,62,7,'Double photo','25','150','3750',5,'2500',''),(77,55,63,1,'photography','10','1200','12000',5,'5000',''),(78,56,64,1,'photography','15','1200','18000',5,'12000','zd'),(79,57,65,1,'photography','15','1200','18000',5,'12000','zd'),(80,58,66,6,'25 photo copy','15','500','7500',5,'2500','c'),(81,59,67,2,'cinemetography','1','4500','4500',2,'2500',''),(82,60,68,7,'Double photo','20','150','3000',3,'2000',''),(83,61,69,1,'photography','12','1200','14400',5,'1111',''),(84,62,70,7,'Double photo','13','150','1950',0,'',''),(85,63,71,2,'cinemetography','1','4500','4500',2,'5000','tujuy'),(86,64,72,6,'25 photo copy','1','500','500',2,'6666',''),(87,65,73,2,'cinemetography','2','4500','9000',5,'2500',''),(88,66,74,7,'Double photo','50','150','7500',5,'2500',''),(89,67,75,2,'cinemetography','1','4500','4500',2,'2500',''),(90,68,76,4,'videography','1','2200','2200',2,'1500',''),(91,69,77,4,'videography','4','2200','8800',2,'2500',''),(92,70,78,2,'cinemetography','1','4500','4500',5,'2000',''),(93,71,79,2,'cinemetography','1','4500','4500',5,'2500',''),(94,72,80,7,'Double photo','25','150','3750',2,'1200',''),(95,73,81,7,'Double photo','10','150','1500',2,'150',''),(96,74,82,2,'cinemetography','1','4500','4500',5,'1500',''),(97,75,83,1,'photography','10','1200','12000',2,'5000',''),(98,76,84,6,'25 photo copy','1','500','500',5,'100',''),(99,77,85,6,'25 photo copy','1','500','500',2,'250',''),(100,78,86,2,'cinemetography','1','4500','4500',2,'2500',''),(101,79,87,2,'cinemetography','1','4500','4500',5,'2500',''),(102,80,88,4,'videography','1','2200','2200',2,'1500',''),(103,81,89,2,'cinemetography','1','4500','4500',5,'2500',''),(104,82,90,2,'cinemetography','1','4500','4500',2,'1500',''),(105,83,91,2,'cinemetography','1','4500','4500',3,'1500',''),(106,84,92,2,'cinemetography','1','4500','4500',3,'1500',''),(107,85,93,2,'cinemetography','1','4500','4500',5,'1500',''),(108,86,94,6,'25 photo copy','1','500','500',5,'250',''),(109,87,95,2,'cinemetography','1','4500','4500',2,'2500',''),(110,88,96,2,'cinemetography','1','4500','4500',5,'2200',''),(111,89,97,6,'25 photo copy','1','500','500',5,'250',''),(112,90,98,6,'25 photo copy','1','500','500',0,'',''),(114,1,100,6,'25 photo copy','1','500','500',0,'',''),(115,92,101,6,'25 photo copy','1','500','500',0,'0',''),(116,92,102,6,'25 photo copy','1','500','500',0,'0',''),(117,94,103,6,'25 photo copy','1','500','500',0,'0',''),(118,94,104,2,'cinemetography','1','4500','4500',5,'2000',''),(119,95,105,6,'25 photo copy','1','500','500',5,'150',''),(120,95,106,2,'cinemetography','1','4500','4500',0,'0',''),(121,96,107,6,'25 photo copy','1','500','500',5,'100',''),(122,97,108,2,'cinemetography','1','4500','4500',0,'0',''),(126,98,109,6,'25 photo copy','1','500','500',5,'0',''),(127,98,109,2,'cinemetography','1','4500','4500',5,'1000',''),(128,146,110,6,'25 photo copy','2','500','1000',5,'200',''),(129,147,111,2,'cinemetography','1','4500','4500',0,'0',''),(130,147,111,6,'25 photo copy','1','500','500',5,'200','as'),(131,148,112,2,'cinemetography','1','10000','10000',2,'5000','rahul'),(132,148,112,1,'photography','1','12000','12000',3,'4500','exposer pallav'),(133,148,113,1,'photography','1','12000','12000',2,'7000','exposer rahul'),(134,148,113,2,'cinemetography','1','15000','15000',2,'4500','palav bhai'),(135,150,114,2,'cinemetography','1','4500','4500',0,'0',''),(136,150,114,2,'cinemetography','1','4500','4500',0,'0','');
/*!40000 ALTER TABLE `res_places_dtl` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `suchak_mgt`.`res_places_dtl_AFTER_INSERT` AFTER INSERT ON `res_places_dtl` FOR EACH ROW
BEGIN
  
  INSERT INTO `event_vendor_dtl`
  (event_places_id,event_id,vend_id,vendor_charges,vendor_paid_amt,vendor_paid_status) 
  VALUES 
  (NEW.event_places_id,NEW.event_id,NEW.res_vend_id,NEW.res_vend_price,'0','Unpaid');

END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resource_mst`
--

LOCK TABLES `resource_mst` WRITE;
/*!40000 ALTER TABLE `resource_mst` DISABLE KEYS */;
INSERT INTO `resource_mst` VALUES (1,'photography','1200','2016-07-27 04:37:46','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(2,'cinemetography','4500','2016-07-27 04:37:46','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(3,'test','500','2016-07-27 10:59:11','2016-07-27 10:59:17','0000-00-00 00:00:00','client123'),(4,'videography','2200','2016-07-27 11:08:08','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(5,'Single Photo','250','2016-08-29 08:08:43','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(6,'25 photo copy','500','2016-08-29 08:09:45','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(7,'Double photo','150','2016-08-29 08:13:51','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(8,'testmulti','102','2016-08-29 09:05:00','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL);
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
  `tax` varchar(45) DEFAULT NULL,
  `photo_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`retail_inv_id`),
  KEY `event_id` (`event_id`),
  KEY `prd_cat_id` (`prd_cat_id`),
  KEY `prod_id` (`prod_id`)
) ENGINE=InnoDB AUTO_INCREMENT=169 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `retail_inv_dtl`
--

LOCK TABLES `retail_inv_dtl` WRITE;
/*!40000 ALTER TABLE `retail_inv_dtl` DISABLE KEYS */;
INSERT INTO `retail_inv_dtl` VALUES (1,17,1,1,'Services','2000','1','2000',NULL,NULL),(2,17,3,3,'Product','1500','1','1500',NULL,NULL),(3,18,1,1,'Services','2000','1','2000',NULL,NULL),(4,18,2,3,'Product','1500','1','1500',NULL,NULL),(5,19,1,1,'Services','2000','1','2000',NULL,NULL),(6,19,2,3,'Product','1500','1','1500',NULL,NULL),(7,20,1,1,'Services','2000','1','2000',NULL,NULL),(8,20,2,3,'Product','1500','1','1500',NULL,NULL),(9,21,1,1,'Services','2000','1','2000',NULL,NULL),(10,21,2,3,'Product','1500','1','1500',NULL,NULL),(11,22,1,1,'Services','2000','1','2000',NULL,NULL),(12,22,2,3,'Product','1500','1','1500',NULL,NULL),(13,23,1,1,'Services','2000','1','2000',NULL,NULL),(14,23,2,3,'Product','1500','1','1500',NULL,NULL),(15,24,1,1,'Services','2000','1','2000',NULL,NULL),(16,24,2,3,'Product','1500','1','1500',NULL,NULL),(17,25,1,1,'Services','2000','1','2000',NULL,NULL),(18,25,2,3,'Product','1500','1','1500',NULL,NULL),(19,26,1,1,'Services','2000','1','2000',NULL,NULL),(20,26,2,3,'Product','1500','1','1500',NULL,NULL),(21,27,1,1,'Services','2000','1','2000',NULL,NULL),(22,27,2,3,'Product','1500','1','1500',NULL,NULL),(23,28,1,1,'Services','2000','1','2000',NULL,NULL),(24,28,2,3,'Product','1500','1','1500',NULL,NULL),(25,30,1,1,'Services','2000','1','2000',NULL,NULL),(26,30,2,1,'Services','2000','3','6000',NULL,NULL),(27,31,1,1,'Services','2000','1','2000',NULL,NULL),(28,31,2,1,'Services','2000','3','6000',NULL,NULL),(29,32,1,1,'Services','2000','1','2000',NULL,NULL),(30,32,2,1,'Services','2000','3','6000',NULL,NULL),(31,33,1,1,'Services','2000','2','4000',NULL,NULL),(32,33,1,3,'Product','111','3','333',NULL,NULL),(33,33,1,1,'Services','2000','1','2000',NULL,NULL),(34,34,1,1,'Services','2000','2','4000',NULL,NULL),(35,34,1,3,'Product','111','3','333',NULL,NULL),(36,34,1,1,'Services','2000','1','2000',NULL,NULL),(37,37,1,1,'Services','2000','1','2000',NULL,NULL),(38,37,3,4,'Product','250','5','1250',NULL,NULL),(39,38,1,1,'Services','2000','1','2000',NULL,NULL),(40,38,1,3,'Product','1500','1','1500',NULL,NULL),(41,38,3,4,'Product','250','1','250',NULL,NULL),(42,39,1,1,'Services','2000','1','2000',NULL,NULL),(43,39,1,3,'Product','1500','1','1500',NULL,NULL),(44,39,3,4,'Product','250','1','250',NULL,NULL),(45,40,1,1,'Services','2000','1','2000',NULL,NULL),(46,40,1,3,'Product','1500','1','1500',NULL,NULL),(47,40,3,4,'Product','250','1','250',NULL,NULL),(48,41,1,1,'Services','2000','1','2000',NULL,NULL),(49,41,1,3,'Product','1500','1','1500',NULL,NULL),(50,41,3,4,'Product','250','1','250',NULL,NULL),(51,42,1,1,'Services','2000','1','2000',NULL,NULL),(52,42,1,3,'Product','1500','1','1500',NULL,NULL),(53,42,3,4,'Product','250','1','250',NULL,NULL),(54,43,1,1,'Services','2000','1','2000',NULL,NULL),(55,43,1,3,'Product','1500','1','1500',NULL,NULL),(56,43,3,4,'Product','250','1','250',NULL,NULL),(57,44,1,1,'Services','2000','1','2000',NULL,NULL),(58,44,1,3,'Product','1500','1','1500',NULL,NULL),(59,44,3,4,'Product','250','1','250',NULL,NULL),(60,93,3,4,'Product','250','1','250',NULL,NULL),(61,7,1,1,'Services','2000','1','2000',NULL,NULL),(62,7,1,3,'','1500','1','1500',NULL,NULL),(63,8,1,1,'Services','2000','1','2000',NULL,NULL),(64,8,1,3,'','1500','1','1500',NULL,NULL),(65,101,1,1,'Services','2000','1','2000',NULL,NULL),(66,101,1,3,'','1500','1','1500',NULL,NULL),(67,102,1,1,'Services','2000','1','2000',NULL,NULL),(68,102,1,3,'','1500','1','1500',NULL,NULL),(69,103,1,1,'Services','2000','1','2000',NULL,NULL),(70,103,1,3,'','1500','1','1500',NULL,NULL),(71,104,3,5,'Product','200','1','230',NULL,NULL),(72,104,3,5,'Product','200','2','460',NULL,NULL),(73,105,3,5,'Product','200','1','230',NULL,NULL),(74,105,3,5,'Product','200','2','460',NULL,NULL),(75,106,3,5,'Product','200','1','230',NULL,NULL),(76,106,3,5,'Product','200','2','460',NULL,NULL),(77,107,3,5,'Product','200','1','230',NULL,NULL),(78,107,3,5,'Product','200','2','460',NULL,NULL),(79,108,3,5,'Product','200','1','230',NULL,NULL),(80,108,3,5,'Product','200','2','460',NULL,NULL),(81,109,3,5,'Product','200','1','230',NULL,NULL),(82,109,3,5,'Product','200','2','460',NULL,NULL),(83,110,3,5,'Product','200','1','230',NULL,NULL),(84,110,3,5,'Product','200','2','460',NULL,NULL),(85,111,3,5,'Product','200','1','230',NULL,NULL),(86,111,3,5,'Product','200','2','460',NULL,NULL),(87,112,3,5,'Product','200','1','230',NULL,NULL),(88,112,3,5,'Product','200','2','460',NULL,NULL),(89,113,3,5,'Product','200','1','200',NULL,NULL),(90,113,3,5,'Product','200','2','400',NULL,NULL),(91,114,3,5,'Product','200','1','200',NULL,NULL),(92,114,3,5,'Product','200','2','400',NULL,NULL),(93,115,3,5,'Product','200','1','200',NULL,NULL),(94,115,3,5,'Product','200','2','400',NULL,NULL),(95,116,3,5,'Product','200','1','230',NULL,NULL),(96,116,3,5,'Product','200','2','460',NULL,NULL),(97,117,3,5,'Product','200','1','230',NULL,NULL),(98,117,3,5,'Product','200','2','460',NULL,NULL),(99,118,3,5,'Product','200','2','460',NULL,NULL),(100,118,3,5,'Product','200','1','230',NULL,NULL),(101,119,3,5,'Product','200','2','460',NULL,NULL),(102,119,3,5,'Product','200','1','230',NULL,NULL),(103,120,3,6,'Services','100','1','110',NULL,NULL),(104,121,3,6,'Services','100','1','110',NULL,NULL),(105,122,3,6,'Services','100','1','110',NULL,NULL),(106,123,3,7,'Services','200','1','220',NULL,NULL),(107,124,3,7,'Services','200','1','200',NULL,NULL),(108,127,3,6,'Services','100','1','110',NULL,NULL),(109,128,3,6,'Services','100','1','110',NULL,NULL),(110,129,3,5,'Product','200','1','230',NULL,NULL),(111,130,3,6,'Services','100','1','110',NULL,NULL),(112,131,3,6,'Services','100','1','110',NULL,NULL),(113,132,3,6,'Services','100','1','110',NULL,NULL),(114,132,3,5,'Product','200','1','230',NULL,NULL),(115,133,3,6,'Services','100','1','110',NULL,NULL),(116,133,3,5,'Product','200','1','230',NULL,NULL),(117,134,3,6,'Services','100','1','110',NULL,NULL),(118,134,3,5,'Product','200','1','230',NULL,NULL),(119,135,3,6,'Services','100','1','110',NULL,NULL),(120,135,3,5,'Product','200','1','230',NULL,NULL),(121,136,3,6,'Services','100','1','110',NULL,NULL),(122,136,3,5,'Product','200','1','230',NULL,NULL),(123,137,3,6,'Services','100','1','110',NULL,NULL),(124,137,3,5,'Product','200','1','230',NULL,NULL),(125,138,3,6,'Services','100','1','110',NULL,NULL),(126,138,3,5,'Product','200','1','230',NULL,NULL),(127,139,3,6,'Services','100','1','110',NULL,NULL),(128,139,3,5,'Product','200','1','230',NULL,NULL),(129,140,3,6,'Services','100','1','110','10',NULL),(130,140,3,5,'Product','200','1','230','30',NULL),(131,141,3,5,'Product','200','1','230','30',NULL),(132,141,3,6,'Services','100','1','110','10',NULL),(133,141,3,7,'Services','200','1','220','20',NULL),(135,142,3,6,'Services','100','1','110','10',NULL),(136,143,3,6,'Services','100','1','110','10',NULL),(137,144,3,6,'Services','100','1','110','10',NULL),(138,145,3,6,'Services','100','1','110','10',NULL),(139,149,3,6,'Services','100','1','110','10',NULL),(140,151,3,6,'Services','100','1','110','10',NULL),(141,152,3,6,'Services','100','1','110','10',NULL),(142,153,3,6,'Services','100','1','110','10',NULL),(143,154,3,6,'Services','100','1','110','10',NULL),(144,155,3,6,'Services','100','1','110','10',NULL),(145,155,3,6,'Services','100','1','110','10',NULL),(146,156,3,5,'Product','200','1','230','30',''),(147,157,3,5,'Product','200','1','230','30',''),(148,158,3,5,'Product','200','1','230','30',''),(149,159,3,5,'Product','200','1','230','30','P123'),(150,160,3,5,'Product','200','1','230','30','P123'),(151,161,3,5,'Product','200','1','230','30','P123'),(152,161,3,5,'Product','200','1','230','30','n11'),(153,162,3,5,'Product','200','1','230','30','P123'),(154,162,3,5,'Product','200','1','230','30','p1'),(155,162,3,6,'Services','100','1','110','10','p1'),(156,163,3,5,'Product','200','1','230','30','P123'),(157,164,3,5,'Product','200','1','230','30','P123'),(158,164,3,6,'Services','100','1','110','10','m122'),(159,165,3,5,'Product','200','1','230','30','P123'),(160,165,3,6,'Services','100','1','110','10','m122'),(161,166,3,5,'Product','200','1','230','30','P123'),(162,166,3,6,'Services','100','1','110','10',''),(163,167,3,5,'Product','200','1','230','30','P123'),(164,167,3,6,'Services','100','1','110','10',''),(165,168,3,5,'Product','200','1','230','30','p113'),(166,169,3,5,'Product','200','1','230','30','p12'),(167,170,3,5,'Product','200','1','230','30','p12'),(168,170,3,6,'Services','100','1','110','10','m1223');
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
  `resorce` varchar(25) DEFAULT NULL,
  `retail_sales_day` varchar(40) NOT NULL,
  `deliverable` varchar(45) DEFAULT NULL,
  `set_as_quatation` enum('Yes','No') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setting`
--

LOCK TABLES `setting` WRITE;
/*!40000 ALTER TABLE `setting` DISABLE KEYS */;
INSERT INTO `setting` VALUES (1,'10','15','[\"1.cond1\",\"2. Cond 2\",\"3. Cond3\",\"4. Cond 4\",\"5.Cond 5\"]','10','Enable','both','[\"1\",\"7\",\"1\"]','Enable','Yes');
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
INSERT INTO `staff_mst` VALUES (0,NULL,'Not Selected',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(15,'prabandhaksuper','admin','admin','virat@siliconbrain.co.in','7575069056',NULL,NULL,'bW9jdXByZXRAMTIzIQ==','Adajan',NULL,'Surat',NULL,NULL,'superadmin'),(16,'ash123','ashish','jariwala','abc@gmail.com','9016664332','9724783505','','YXNoaXNoMTIz','surat','surat','surat','Gujarat','395004','staff'),(17,'client123','Red','Carpet','abc@gmail.com','1234567890','','','Y2xpZW50MzIx','','','Surat','Gujarat','','staff'),(18,'ash123','Ashish','Jariwala','abc@gmail.com','9016664332','','','YXNoMTIz','surat','','surat','Gujarat','395002','staff'),(19,'vishal123','Vishal','Jariwala','vis123@gmail.com','9974624995','','','dmlzaGFsMzIx','sagrampura','','surat','Gujarat','395002','staff');
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
INSERT INTO `staff_permission` VALUES ('client123','[\"ENR\",\"EVD\",\"Event_Status\",\"EALL\",\"NEW\",\"UPC\",\"COM\",\"Equipment\",\"EQA\",\"CTG\",\"ACS\",\"RES\",\"Category\",\"OCTG\",\"OSTG\",\"Product\",\"PRD\",\"PADD\",\"PVIW\",\"Vendors\",\"VAL\",\"Accounting\",\"TRN\",\"PID\",\"UPD\",\"INV\",\"VPD\",\"VUD\",\"Staff\",\"STA\",\"STF\",\"Settings\",\"HOL\",\"CMP\",\"ADC\",\"OPT\",\"EML\",\"TEMP\"]'),('div123','[\"ENR\",\"EVD\",\"Event_Status\",\"EALL\",\"NEW\",\"UPC\",\"COM\",\"Equipment\",\"EQA\",\"CTG\",\"ACS\",\"Vendors\",\"VAL\",\"Accounting\",\"PID\",\"UPD\",\"VPD\",\"VUD\",\"Staff\",\"STA\",\"STF\",\"Settings\",\"HOL\",\"CMP\",\"ADC\",\"OPT\"]'),('vishal123','[\"ENR\",\"EVD\",\"Event_Status\",\"EALL\",\"NEW\",\"UPC\",\"COM\",\"Equipment\",\"EQA\",\"CTG\",\"ACS\",\"RES\",\"Category\",\"OCTG\",\"OSTG\",\"Product\",\"PRD\",\"PADD\",\"PVIW\",\"Vendors\",\"VAL\",\"Accounting\",\"TRN\",\"PID\",\"UPD\",\"INV\",\"VPD\",\"VUD\",\"Staff\",\"STA\",\"STF\",\"Settings\",\"HOL\",\"CMP\",\"ADC\",\"OPT\",\"TEMP\"]');
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `template_mst`
--

LOCK TABLES `template_mst` WRITE;
/*!40000 ALTER TABLE `template_mst` DISABLE KEYS */;
INSERT INTO `template_mst` VALUES (1,'InvoicePdf','<table class=\"tg\" style=\"border-collapse: collapse; border-spacing: 0;\">\n<tbody>\n<tr>\n<th colspan=\"5\">[Banner_Img]</th>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 80px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"3\">Client: [ClientName]</td>\n<td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 20px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"2\">Company :[Company]</td>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 80px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"5\">Order Date : [ADATE]</td>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 80px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"3\">Mobile:[Mobile]</td>\n<td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 20px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"2\">Email:[Email]</td>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 80px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"5\">Address :[CLIENTADD]</td>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 80px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"3\">Quotation No: [OrderId]</td>\n<td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 20px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"2\">Invoice No: [INVID]</td>\n</tr>\n<tr class=\"trhw\" style=\"background-color: #9a9a9a; font-family: Calibri;\">\n<td class=\"tg-m36b thsrno\" style=\"font-size: 12px; padding: 5px 5px; color: #e1e1e1;\">Sr.No</td>\n<td class=\"tg-m36b theqp\" style=\"font-size: 12px; padding: 5px 5px; color: #e1e1e1;\">Particulars</td>\n<td class=\"tg-ullm thsrno\" style=\"text-align: right; font-size: 12px; padding: 5px 5px; color: #e1e1e1;\">Qty.</td>\n<td class=\"tg-ullm thamt\" style=\"text-align: right; font-size: 12px; padding: 5px 5px; color: #e1e1e1;\">Unit Cost</td>\n<td class=\"tg-ullm thamt\" style=\"text-align: right; font-size: 12px; padding: 5px 5px; color: #e1e1e1;\">Amount</td>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-vi9z\" colspan=\"5\">[Description]</td>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-jtyd\" style=\"text-align: right; background-color: #9a9a9a; font-size: 12px; padding: 5px 5px; color: #e1e1e1;\" colspan=\"4\">Charge</td>\n<td class=\"tg-3gzm\" style=\"background-color: #d9d9d9; text-align: right; font-size: 12px; padding: 5px 5px; color: #4e4e4e;\">&nbsp;[ClientCharge]</td>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-jtyd\" style=\"text-align: right; background-color: #9a9a9a; font-size: 12px; padding: 5px 5px; color: #e1e1e1;\" colspan=\"4\">Discount</td>\n<td class=\"tg-3gzm\" style=\"background-color: #d9d9d9; text-align: right; font-size: 12px; padding: 5px 5px; color: #4e4e4e;\">&nbsp;[Discount]</td>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-jtyd\" style=\"text-align: right; background-color: #9a9a9a; font-size: 12px; padding: 5px 5px; color: #e1e1e1;\" colspan=\"4\">S.Tax&nbsp;[TaxRate] %</td>\n<td class=\"tg-3gzm\" style=\"background-color: #d9d9d9; text-align: right; font-size: 12px; padding: 5px 5px; color: #4e4e4e;\">&nbsp;[TaxAmt]</td>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-jtyd\" style=\"text-align: right; background-color: #9a9a9a; font-size: 12px; padding: 5px 5px; color: #e1e1e1;\" colspan=\"4\">Total</td>\n<td class=\"tg-3gzm\" style=\"background-color: #d9d9d9; text-align: right; font-size: 12px; padding: 5px 5px; color: #4e4e4e;\">&nbsp;[Total]</td>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-jtyd\" style=\"text-align: right; background-color: #9a9a9a; font-size: 12px; padding: 5px 5px; color: #e1e1e1;\" colspan=\"4\">Paid</td>\n<td class=\"tg-3gzm\" style=\"background-color: #d9d9d9; text-align: right; font-size: 12px; padding: 5px 5px; color: #4e4e4e;\">[PAIDAMT]</td>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-jtyd\" style=\"text-align: right; background-color: #9a9a9a; font-size: 12px; padding: 5px 5px; color: #e1e1e1;\" colspan=\"4\">Remain</td>\n<td class=\"tg-3gzm\" style=\"background-color: #d9d9d9; text-align: right; font-size: 12px; padding: 5px 5px; color: #4e4e4e;\">[REMAINAMT]</td>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 5px;\" colspan=\"5\" rowspan=\"1\">&nbsp;</td>\n</tr>\n<tr>\n<td class=\"tg-3gzm\" style=\"text-align: center; vertical-align: bottom; background-color: #d9d9d9;\" colspan=\"1\">&nbsp;</td>\n<td style=\"background-color: #d9d9d9; vertical-align: bottom; color: #4e4e4e;\" colspan=\"2\">Remark</td>\n<td class=\"tg-3gzm\" style=\"text-align: center; vertical-align: bottom; background-color: #d9d9d9; color: #4e4e4e;\" colspan=\"2\">Venture Of</td>\n</tr>\n<tr>\n<td class=\"tg-3gzm\" style=\"text-align: center; vertical-align: bottom; background-color: #d9d9d9;\" colspan=\"1\">&nbsp;</td>\n<td style=\"background-color: #d9d9d9; vertical-align: bottom; color: #4e4e4e;\" colspan=\"2\">E.&amp;.O.E.</td>\n<td class=\"tg-3gzm\" style=\"text-align: center; background-color: #d9d9d9;\" colspan=\"2\">[CMPLOGO]</td>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-vi9z\" style=\"border-width: 0px; padding: 5px 5px; vertical-align: bottom; background-color: #d9d9d9;\" colspan=\"5\">&nbsp;</td>\n</tr>\n</tbody>\n</table>'),(2,'InvoiceQuotation','<table class=\"tg\" style=\"border-collapse: collapse; border-spacing: 0;\">\n<tbody>\n<tr>\n<th colspan=\"5\">[Banner_Img]</th>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 80px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"4\">To: [Company]</td>\n<td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 20px; font-family: Calibri; vertical-align: bottom; color: #4e4e4e;\" colspan=\"1\">&nbsp;</td>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 80px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"4\">Client: [ClientName]</td>\n<td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 20px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"1\">&nbsp;</td>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 80px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"5\">Address: [CLIENTADD]</td>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 80px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"4\">Quotation No: [OrderId]</td>\n<td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 20px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"1\">&nbsp;</td>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 80px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"5\">Order Date : [ADATE]</td>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-vi9z\" style=\"border-width: 0px; padding: 5px 5px; vertical-align: bottom;\" colspan=\"5\">&nbsp;</td>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-vi9z\" colspan=\"5\">[Description]</td>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-jtyd\" style=\"text-align: right; background-color: #9a9a9a; font-size: 12px; padding: 5px 5px; color: #e1e1e1;\" colspan=\"4\">Charge</td>\n<td class=\"tg-3gzm\" style=\"background-color: #d9d9d9; text-align: right; font-size: 12px; padding: 5px 5px; color: #4e4e4e;\">&nbsp;[ClientCharge]</td>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-jtyd\" style=\"text-align: right; background-color: #9a9a9a; font-size: 12px; padding: 5px 5px; color: #e1e1e1;\" colspan=\"4\">Discount</td>\n<td class=\"tg-3gzm\" style=\"background-color: #d9d9d9; text-align: right; font-size: 12px; padding: 5px 5px; color: #4e4e4e;\">&nbsp;[Discount]</td>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-jtyd\" style=\"text-align: right; background-color: #9a9a9a; font-size: 12px; padding: 5px 5px; color: #e1e1e1;\" colspan=\"4\">S.Tax&nbsp;[TaxRate] %</td>\n<td class=\"tg-3gzm\" style=\"background-color: #d9d9d9; text-align: right; font-size: 12px; padding: 5px 5px; color: #4e4e4e;\">&nbsp;[TaxAmt]</td>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-jtyd\" style=\"text-align: right; background-color: #9a9a9a; font-size: 12px; padding: 5px 5px; color: #e1e1e1;\" colspan=\"4\">Total</td>\n<td class=\"tg-3gzm\" style=\"background-color: #d9d9d9; text-align: right; font-size: 12px; padding: 5px 5px; color: #4e4e4e;\">&nbsp;[Total]</td>\n</tr>\n<tr>\n<td style=\"height: 30px; vertical-align: bottom; background-color: #d9d9d9; font-size: 12px; color: #4e4e4e; padding: 5px 5px;\" colspan=\"5\">I have carefully read and agreed on the final quotation with all terms &amp; conditions mentioned.</td>\n</tr>\n<tr>\n<td style=\"background-color: #d9d9d9; font-size: 12px; color: #4e4e4e;\" colspan=\"4\">Signature <br />(Client)</td>\n<td style=\"background-color: #d9d9d9; font-size: 12px; color: #4e4e4e;\" colspan=\"1\">Signature <br />[Company]</td>\n</tr>\n<tr>\n<td style=\"height: 30px; vertical-align: bottom; background-color: #d9d9d9; font-size: 12px; color: #4e4e4e; padding: 5px 5px;\" colspan=\"5\">&nbsp;</td>\n</tr>\n</tbody>\n</table>'),(3,'Quotation Condition','<table>\n<tbody>\n<tr>\n<th colspan=\"2\">[Banner_Img]</th>\n</tr>\n<tr>\n<td style=\"height: 50px; font-size: 16px; vertical-align: bottom; color: #4e4e4e; border-color: #4e4e4e;\" colspan=\"2\"><strong>Terms &amp; Conditions related to Wedding or Event Photography &amp; Filmmaking Project</strong></td>\n</tr>\n<tr>\n<td style=\"height: 200px; font-size: 13px; padding: 7px 3px; color: #4e4e4e; border: 1px solid #4e4e4e;\" colspan=\"2\">(1) Album Printing Cost is Not included into this quotation.<br /> (2) In case of any film corrections,changes should be communicated by the client within 20 days after the submission.<br /> (3) Movie editing cost is included into this quotation.<br /> (4) 2 sets od DVDs &amp; 1 set of HD/Blu-ray-Disk is includedin the quotation.<br /> (5) Raw data of the project will be handed over to the client only when the payment is paid.<br /> (6) Album Printing Cost will be required on the delivery of the album.<br /> (7) Delivery time of the Wedding Film will be minimum60 days after post production advanced is received.<br /> (8) Delivery time of the albums will be minimum 50 days after the final selection of pictures from the client\'s end.<br /> (9) Stage set-up or Back-drop arrangement will be managed by the event manager or by the client\'s decoration agency.<br /> (10)We shall not be able to shoot on the other than the dates mentioned in the final quotation.<br /> (11)For events outside the surat city; Accomodation &amp; Food will be arranged by the client at same venue.<br /> (12)For events outside the surat city; Travelling &amp; Transportation will be arranged by the client or charges will be at actuals.<br /> (13)Album design correction and film correction will be managed only once &amp; at a time.<br /> (14)Final wedding film includes 1 trailer up to 5 minutes &amp; event wise full edited films.<br /> (15)Any additional cuts for the wedding films will be charged as per the requirments.<br /> (16)Any type of advance amount is no refundable.<br /> (17)Any amount related to LED Screens,Mixer,Instant printing will be required well in advance.</td>\n</tr>\n<tr>\n<td style=\"height: 50px; font-size: 16px; vertical-align: bottom; color: #4e4e4e; border-color: #4e4e4e;\" colspan=\"2\">Terms &amp; Conditions related to Payment</td>\n</tr>\n<tr>\n<td style=\"height: 100px; font-size: 13px; padding: 7px 3px; color: #4e4e4e; border: 1px solid #4e4e4e;\" colspan=\"2\">(1) 40% Advance amount is required to block the dates.<br /> (2) 40% Pending amount is to be paid on completion of shoot.<br /> (3) 10% Pending amount is to be paid to start the editing process.<br /> (4) 10% Pending amount is to be paid at the end of editing process.</td>\n</tr>\n<tr>\n<td style=\"height: 30px; vertical-align: bottom; color: #4e4e4e; border-color: #4e4e4e;\" colspan=\"2\">I have carefully read and agreed on the final quotation with all terms &amp; conditions mentioned.</td>\n</tr>\n<tr>\n<td style=\"height: 100px; vertical-align: bottom; color: #4e4e4e; border-color: #4e4e4e;\" colspan=\"1\">Signature <br />(Client)</td>\n<td style=\"height: 100px; vertical-align: bottom; float: right; color: #4e4e4e; border-color: #4e4e4e;\" colspan=\"1\">Signature <br />[Company]</td>\n</tr>\n</tbody>\n</table>'),(4,'Retail Invoice','<table class=\"tg\" style=\"border-collapse: collapse; border-spacing: 0;\">\n<tbody>\n<tr>\n<th colspan=\"5\">[Banner_Img]</th>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 80px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"3\">Client: [ClientName]</td>\n<td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 20px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"2\">Company: [Company]</td>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 80px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"3\">Order Date : [OrderDate]</td>\n<td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 20px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"2\">&nbsp;Delivery Date : [DeliveryDate]</td>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 80px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"3\">Mobile: [Mobile]</td>\n<td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 20px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"2\">Email: [Email]</td>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 80px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"5\">Address: [CLIENTADD]</td>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 80px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"3\">Operator : [OPERATOR]</td>\n<td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 20px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"2\">Invoice No: [INVID]</td>\n</tr>\n<tr class=\"trhw\" style=\"background-color: #9a9a9a; font-family: Calibri;\">\n<td class=\"tg-m36b thsrno\" style=\"font-size: 12px; padding: 5px 5px; color: #e1e1e1;\">Sr.No</td>\n<td class=\"tg-m36b theqp\" style=\"font-size: 12px; padding: 5px 5px; color: #e1e1e1;\">Particulars</td>\n<td class=\"tg-ullm thsrno\" style=\"text-align: right; font-size: 12px; padding: 5px 5px; color: #e1e1e1;\">Qty.</td>\n<td class=\"tg-ullm thamt\" style=\"text-align: right; font-size: 12px; padding: 5px 5px; color: #e1e1e1;\">Unit Cost</td>\n<td class=\"tg-ullm thamt\" style=\"text-align: right; font-size: 12px; padding: 5px 5px; color: #e1e1e1;\">Amount</td>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-vi9z\" colspan=\"5\">[Description]</td>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-jtyd\" style=\"text-align: right; background-color: #9a9a9a; font-size: 12px; padding: 5px 5px; color: #e1e1e1;\" colspan=\"4\">Charge</td>\n<td class=\"tg-3gzm\" style=\"background-color: #d9d9d9; text-align: right; font-size: 12px; padding: 5px 5px; color: #4e4e4e;\">&nbsp;[ClientCharge]</td>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-jtyd\" style=\"text-align: right; background-color: #9a9a9a; font-size: 12px; padding: 5px 5px; color: #e1e1e1;\" colspan=\"4\">Discount</td>\n<td class=\"tg-3gzm\" style=\"background-color: #d9d9d9; text-align: right; font-size: 12px; padding: 5px 5px; color: #4e4e4e;\">&nbsp;[Discount]</td>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-jtyd\" style=\"text-align: right; background-color: #9a9a9a; font-size: 12px; padding: 5px 5px; color: #e1e1e1;\" colspan=\"4\">S.Tax&nbsp;[TaxRate] %</td>\n<td class=\"tg-3gzm\" style=\"background-color: #d9d9d9; text-align: right; font-size: 12px; padding: 5px 5px; color: #4e4e4e;\">&nbsp;[TaxAmt]</td>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-jtyd\" style=\"text-align: right; background-color: #9a9a9a; font-size: 12px; padding: 5px 5px; color: #e1e1e1;\" colspan=\"4\">Total</td>\n<td class=\"tg-3gzm\" style=\"background-color: #d9d9d9; text-align: right; font-size: 12px; padding: 5px 5px; color: #4e4e4e;\">&nbsp;[Total]</td>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-jtyd\" style=\"text-align: right; background-color: #9a9a9a; font-size: 12px; padding: 5px 5px; color: #e1e1e1;\" colspan=\"4\">Paid</td>\n<td class=\"tg-3gzm\" style=\"background-color: #d9d9d9; text-align: right; font-size: 12px; padding: 5px 5px; color: #4e4e4e;\">[PAIDAMT]</td>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-jtyd\" style=\"text-align: right; background-color: #9a9a9a; font-size: 12px; padding: 5px 5px; color: #e1e1e1;\" colspan=\"4\">Remain</td>\n<td class=\"tg-3gzm\" style=\"background-color: #d9d9d9; text-align: right; font-size: 12px; padding: 5px 5px; color: #4e4e4e;\">[REMAINAMT]</td>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 5px;\" colspan=\"5\" rowspan=\"1\">&nbsp;</td>\n</tr>\n<tr>\n<td class=\"tg-3gzm\" style=\"text-align: center; vertical-align: bottom; background-color: #d9d9d9;\" colspan=\"1\">&nbsp;</td>\n<td style=\"background-color: #d9d9d9; vertical-align: bottom; color: #4e4e4e;\" colspan=\"2\">Remark</td>\n<td class=\"tg-3gzm\" style=\"text-align: center; vertical-align: bottom; background-color: #d9d9d9; color: #4e4e4e;\" colspan=\"2\">Venture Of</td>\n</tr>\n<tr>\n<td class=\"tg-3gzm\" style=\"text-align: center; vertical-align: bottom; background-color: #d9d9d9;\" colspan=\"1\">&nbsp;</td>\n<td style=\"background-color: #d9d9d9; vertical-align: bottom; color: #4e4e4e;\" colspan=\"2\">E.&amp;.O.E.</td>\n<td class=\"tg-3gzm\" style=\"text-align: center; background-color: #d9d9d9;\" colspan=\"2\">[CMPLOGO]</td>\n</tr>\n<tr class=\"trhw\">\n<td class=\"tg-vi9z\" style=\"border-width: 0px; padding: 5px 5px; vertical-align: bottom; background-color: #d9d9d9;\" colspan=\"5\">&nbsp;</td>\n</tr>\n</tbody>\n</table>'),(5,'OrderInfo','<table class=\"tg\" style=\"border-collapse: collapse; border-spacing: 0;\"> <tbody> <tr> <th colspan=\"9\">[Banner_Img]</th> </tr> <tr class=\"trhw\"> <td class=\"tg-vi9z\" style=\"background-color: #9a9a9a; padding: 5px 10px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #e1e1e1;\" colspan=\"9\">Order Detail</td> </tr> <tr class=\"trhw\"> <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"3\">Order Name: [OrderName]</td> <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"6\">Order Description: [OrderDesc]</td> </tr> <tr class=\"trhw\"> <td class=\"tg-vi9z\" style=\"background-color: #9a9a9a; padding: 5px 10px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #e1e1e1;\" colspan=\"9\">Client Detail</td> </tr> <tr class=\"trhw\"> <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"3\">Client Name: [ClientName]</td> <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"6\">Client Company: [Company]</td> </tr> <tr class=\"trhw\"> <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"3\">Email Id: [Email]</td> <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"6\">Work: [WorkMob]</td> </tr> <tr class=\"trhw\"> <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"3\">Home: [HomeMob]</td> <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"6\">Mobile: [Mobile]</td> </tr> <tr class=\"trhw\"> <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;\" colspan=\"9\">[Description]</td> </tr> </tbody> </table>'),(6,'Payement Receipt','<table class=\"tg\" style=\"border-collapse: collapse; border-spacing: 0;\" border=\"1\">		<tr>						<th style=\" width: 100px;height: 150px; font-size:26px;border:none; padding: 5px;\">				[CmpLogo]			</th>									<th style=\" width: 950px;height: 150px; font-size:26px;border:none; \">				<h3>									Payment Receipt 				</h3>			</th>					</tr>	</table>	<table class=\"tg\" style=\"border-collapse: collapse; border-spacing: 0;\" border=\"1\">		 <tbody>		 		 <tr style=\"height: 50px;\">		 <td style=\"font-size: 16px; padding: 10px; width: 700px;\">Receipt No:[RecNo]</td>		 <td style=\"font-size: 16px; padding: 10px; width: 350px;\">Date:[Date]</td>		 </tr>		 <tr style=\"height: 50px;\">		 <td style=\"font-size: 16px; padding: 10px;\" colspan=\"2\">Sum Of Rupees:[Amount]</td>		 </tr>		 <tr style=\"height: 50px;\">		 <td style=\"font-size: 16px; padding: 10px;\" colspan=\"2\">In Words:[AmountWord]</td>		 </tr>		 <tr style=\"height: 50px;\">		 <td style=\"font-size: 16px; padding: 10px;\" colspan=\"2\">Received With Thanks From:[ClientName]</td>		 </tr>		 <tr style=\"height: 50px;\">		 <td style=\"font-size: 16px; padding: 10px;\" colspan=\"2\">By:[TrnType]</td>		 </tr>		 <tr style=\"height: 50px;\">		 <td style=\"font-size: 16px; padding: 10px;\">Prepared By:</td>		 <td style=\"font-size: 16px; padding: 10px;\">Received By:</td>		 </tr>		 </tbody>	</table>');
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
  `vendor_email` varchar(200) NOT NULL,
  `vendor_contact` int(10) NOT NULL,
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
INSERT INTO `vendor_mst` VALUES (0,'Not Selected','',0,0,NULL,NULL,NULL,NULL,NULL),(1,'Divyesh','',0,1,'','2016-06-23 11:49:12','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(2,'Ashish','',0,2,'BalKrushnaJari','2016-07-01 04:39:32','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(3,'Dipesh','',0,3,'chamunda jari','2016-07-01 04:40:33','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(4,'','',0,0,'','2016-07-05 16:07:25','2016-07-05 16:16:03','0000-00-00 00:00:00','client123'),(5,'Anand','',0,1,'Silicon','2016-07-05 16:14:37','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(6,'Raj','',0,3,'Raghav and Sons','2016-07-05 16:16:58','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL);
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

-- Dump completed on 2016-10-21 14:07:33
