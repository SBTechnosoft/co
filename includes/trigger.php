//suchak trigger on localhost

USE `suchak_mgt`;

DELIMITER $$

DROP TRIGGER IF EXISTS suchak_mgt.new_event_places_dtl_AFTER_INSERT$$
USE `suchak_mgt`$$
CREATE DEFINER = CURRENT_USER TRIGGER `suchak_mgt`.`new_event_places_dtl_AFTER_INSERT` AFTER INSERT ON `new_event_places_dtl` FOR EACH ROW
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
END$$
DELIMITER ;















































CREATE  TRIGGER `pb_beta`.`new_event_places_dtl_AFTER_INSERT` AFTER INSERT ON `new_event_places_dtl` FOR EACH ROW
BEGIN
	INSERT INTO `event_equipment_dtl`
  (event_places_id,event_id,equipment_id) 
  VALUES 
  ('NEW.event_places_id','NEW.event_id','NEW.eq_id'); 
  
  INSERT INTO `event_staff_dtl`
  (event_places_id,event_id,staff_id) 
  VALUES 
  ('NEW.event_places_id','NEW.event_id','NEW.staff_id'); 
  
  INSERT INTO `event_vendor_dtl`
  (event_places_id,event_id,vend_id,vendor_charges) 
  VALUES 
  ('NEW.event_places_id','NEW.event_id','NEW.vend_id','NEW.vend_price');
END

//for query

DELIMITER $$
CREATE TRIGGER new_event_places_dtl_AFTER_INSERT AFTER INSERT ON `new_event_places_dtl`
FOR EACH ROW
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
  (event_places_id,event_id,vend_id,vendor_charges) 
  VALUES 
  (NEW.event_places_id,NEW.event_id,NEW.vend_id,NEW.vend_price);
  
  END $$
DELIMITER ;