-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: event_mgt
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

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
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_by` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cmp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COMMENT='		';
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `event_mst`
--

DROP TABLE IF EXISTS `event_mst`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_mst` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(45) DEFAULT NULL,
  `event_ds` varchar(100) DEFAULT NULL,
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
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

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
  PRIMARY KEY (`vd_payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `setting`
--

DROP TABLE IF EXISTS `setting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_tax` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-06-14 15:02:13
