CREATE TABLE `suchak_mgt`.`resource_mst` (
  `res_id` INT NOT NULL AUTO_INCREMENT,
  `res_name` VARCHAR(100) NULL,
  `amount` VARCHAR(10) NULL,
  PRIMARY KEY (`res_id`));
  
  ALTER TABLE `suchak_mgt`.`resource_mst` 
ADD COLUMN `created_at` TIMESTAMP NULL AFTER `amount`,
ADD COLUMN `deleted_at` TIMESTAMP NULL AFTER `created_at`,
ADD COLUMN `updated_at` TIMESTAMP NULL AFTER `deleted_at`,
ADD COLUMN `deleted_by` VARCHAR(45) NULL AFTER `updated_at`;


CREATE TABLE `suchak_mgt`.`res_places_dtl` (
  `res_pls_id` INT NOT NULL AUTO_INCREMENT,
  `event_id` INT NULL,
  `event_places_id` INT NULL,
  `res_id` INT NULL,
  `res_name` VARCHAR(45) NULL,
  `qty` VARCHAR(45) NULL,
  `rate` VARCHAR(45) NULL,
  `amount` VARCHAR(45) NULL,
  PRIMARY KEY (`res_pls_id`));


CREATE TABLE `suchak_mgt`.`product_cat_mst` (
  `prd_cat_id` INT NOT NULL AUTO_INCREMENT,
  `prd_cat_name` VARCHAR(155) NULL,
  `prd_cat_parent_id` INT NULL,
  `created_at` TIMESTAMP NULL,
  `deleted_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  `deleted_by` VARCHAR(155) NULL,
  PRIMARY KEY (`prd_cat_id`));

CREATE TABLE `suchak_mgt`.`product_mst` (
  `prod_id` INT NOT NULL AUTO_INCREMENT,
  `prod_nm` VARCHAR(45) NULL,
  `prd_id` VARCHAR(45) NULL,
  `item_code` VARCHAR(45) NULL,
  `disp_nm` VARCHAR(45) NULL,
  `commodity_grp` VARCHAR(45) NULL,
  `prd_cat_id` INT NULL,
  `retail_price` VARCHAR(45) NULL,
  `pur_price` VARCHAR(45) NULL,
  `type` INT NULL,
  `created_at` TIMESTAMP NULL,
  `deleted_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  `deleted_by` VARCHAR(45) NULL,
  PRIMARY KEY (`prod_id`));
  
  ALTER TABLE `suchak_mgt`.`setting` 
ADD COLUMN `vat` VARCHAR(10) NULL AFTER `inv_cond_json`;

ALTER TABLE `suchak_mgt`.`event_mst` 
ADD COLUMN `vat` VARCHAR(15) NULL AFTER `updated_by`,
ADD COLUMN `order_type` ENUM('Retail', 'Event') NULL AFTER `vat`;

CREATE TABLE `suchak_mgt`.`retail_inv_dtl` (
  `retail_inv_id` INT NOT NULL AUTO_INCREMENT,
  `event_id` INT NULL,
  `prd_cat_id` INT NULL,
  `prod_id` INT NULL,
  `comm_grp` VARCHAR(45) NULL,
  `rate` VARCHAR(10) NULL,
  `qty` VARCHAR(45) NULL,
  `amount` VARCHAR(45) NULL,
  PRIMARY KEY (`retail_inv_id`));
  
ALTER TABLE `suchak_mgt`.`company_mst` 
ADD COLUMN `banner_img` VARCHAR(45) NULL AFTER `cmp_reg_no`;

change///
02-08-2016
 
ALTER TABLE `suchak_mgt`.`setting` 
ADD COLUMN `retail_sales` VARCHAR(45) NULL AFTER `vat`;


 
  
  