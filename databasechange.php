ALTER TABLE `suchak_mgt`.`event_mst` 
ADD COLUMN `job_data_1` VARCHAR(155) NULL AFTER `sub_cat_id`,
ADD COLUMN `job_data_2` VARCHAR(155) NULL AFTER `job_data_1`;

ALTER TABLE `suchak_mgt`.`event_mst` 
CHANGE COLUMN `event_ds` `event_ds` VARCHAR(2000) NULL DEFAULT NULL ;

ALTER TABLE `setting` 
ADD COLUMN `inv_cond_json` VARCHAR(5000) NULL AFTER `upcoming_days`;

INSERT INTO `suchak_mgt`.`staff_permission` (`user_id`, `permission`) 
VALUES ('raj', '[\"ENR\",\"EVD\",\"Event_Status\",\"EALL\",\"NEW\"]');





