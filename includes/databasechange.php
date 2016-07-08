ALTER TABLE `suchak_mgt`.`event_mst` 
ADD COLUMN `updated_by` VARCHAR(45) NULL AFTER `job_data_2`;

date:08/july/2016
//suchak_mgt change

CREATE TABLE `suchak_mgt`.`expence_cat_mst` (
  `exp_cat_id` INT NOT NULL AUTO_INCREMENT,
  `cat_name` VARCHAR(45) NULL,
  `cat_type` VARCHAR(45) NULL,
  PRIMARY KEY (`exp_cat_id`));
  
  
  INSERT INTO `suchak_mgt`.`expence_cat_mst` (`cat_name`, `cat_type`) VALUES ('Food', 'event');
INSERT INTO `suchak_mgt`.`expence_cat_mst` (`cat_name`, `cat_type`) VALUES ('Traveling', 'event');
INSERT INTO `suchak_mgt`.`expence_cat_mst` (`cat_name`, `cat_type`) VALUES ('Other', 'event');
INSERT INTO `suchak_mgt`.`expence_cat_mst` (`cat_name`, `cat_type`) VALUES ('Salary', 'other');
INSERT INTO `suchak_mgt`.`expence_cat_mst` (`cat_name`, `cat_type`) VALUES ('Stationary', 'other');
INSERT INTO `suchak_mgt`.`expence_cat_mst` (`cat_name`, `cat_type`) VALUES ('Tea/Coffee', 'other');
INSERT INTO `suchak_mgt`.`expence_cat_mst` (`cat_name`, `cat_type`) VALUES ('Electricity', 'other');
INSERT INTO `suchak_mgt`.`expence_cat_mst` (`cat_name`, `cat_type`) VALUES ('Phone Bill', 'other');
INSERT INTO `suchak_mgt`.`expence_cat_mst` (`cat_name`, `cat_type`) VALUES ('Internet Bill', 'other');
INSERT INTO `suchak_mgt`.`expence_cat_mst` (`cat_name`, `cat_type`) VALUES ('Rent', 'other');
INSERT INTO `suchak_mgt`.`expence_cat_mst` (`cat_name`, `cat_type`) VALUES ('Other', 'other');



CREATE TABLE `suchak_mgt`.`expence_dtl` (
  `exp_id` INT NOT NULL AUTO_INCREMENT,
  `exp_cat_id` INT NULL,
  `event_id` INT NULL,
  `exp_date` DATETIME NULL,
  `amount` VARCHAR(15) NULL,
  `exp_by` INT NULL,
  `attachment_json` VARCHAR(5000) NULL,
  PRIMARY KEY (`exp_id`));
  
  
  


