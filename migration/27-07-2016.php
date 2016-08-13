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

db change///
02-08-2016
 
ALTER TABLE `suchak_mgt`.`setting` 
ADD COLUMN `retail_sales` VARCHAR(45) NULL AFTER `vat`;

db change //
03-08-2016

CREATE TABLE `template_mst` (
  `template_id` INT NOT NULL AUTO_INCREMENT,
  `template_name` VARCHAR(50) NULL,
  `template_body` LONGTEXT NULL,
  PRIMARY KEY (`template_id`));
 
 //04-08-2016

INSERT INTO `suchak_mgt`.`template_mst` (`template_name`, `template_body`) VALUES ('Invoice', '<table class=\"tg\" height = \"780\" width =\"1020\" border=\"1\">  <tr>    <th class=\"tg-baqh\"><img style=\"height:40px; width:100px;\" src=\"images/sblogo.png\" ></th>    <th class=\"tg-ywh4l0\" colspan=\"7\"><b>Event information</b><br></th>  </tr>  <tr>    <td class=\"tg-ywh4l0\" colspan=\"8\"><b>Event Detail</b><br></td>  </tr>  <tr>    <td class=\"tg-baqhsub\" colspan=\"2\">Event Name:<br></td>    <td class=\"tg-ywh4lsub\" colspan=\"6\"></td>  </tr>  <tr>    <td class=\"tg-baqhsub\" colspan=\"2\">Event Desc. :<br></td>    <td class=\"tg-ywh4lsub\" colspan=\"6\"></td>  </tr>  <tr>    <td class=\"tg-yw4l0\" colspan=\"8\"><b>Client Detail</b><br></td>  </tr>  <tr>    <td class=\"tg-baqhsub\" colspan=\"2\">Client Name:<br></td>    <td class=\"tg-ywh4lsub\" colspan=\"6\"></td>  </tr> <tr>    <td class=\"tg-baqhsub\" colspan=\"2\">Client Company:<br></td>    <td class=\"tg-ywh4lsub\" colspan=\"6\"></td>  </tr>  <tr>    <td class=\"tg-baqhsub\" colspan=\"2\">Email Id:<br></td>    <td class=\"tg-ywh4lsub\" colspan=\"6\"></td>  </tr>  <tr>    <td class=\"tg-baqhsub\" colspan=\"2\">Work:</td>    <td class=\"tg-ywh4lsub\" colspan=\"6\"></td>  </tr>  <tr>    <td class=\"tg-baqhsub\" colspan=\"2\">Home:</td>    <td class=\"tg-ywh4lsub\" colspan=\"6\"></td>  </tr>  <tr>    <td class=\"tg-baqhsub\" colspan=\"2\">Mobile:</td>    <td class=\"tg-ywh4lsub\" colspan=\"6\"></td>  </tr>  <tr>    <td class=\"tg-baqhsub\" colspan=\"2\">Status<br></td>    <td class=\"tg-ywh4lsub\" colspan=\"6\"></td>  </tr>  <tr>    <td class=\"tg-ywh4l0\" colspan=\"8\"><b>Event Places Detail</b><br></td>  </tr>  <tr>    <td class=\"tg-baqhsub\" colspan=\"2\">Vennue:</td>    <td class=\"tg-ywh4lsub\" colspan=\"6\"></td>  </tr>  <tr>    <td class=\"tg-baqhsub\" colspan=\"2\">Hall:</td>    <td class=\"tg-ywh4lsub\" colspan=\"6\"></td>  </tr>  <tr>    <td class=\"tg-baqhsub\" colspan=\"2\">From Date<br></td>    <td class=\"tg-ywh4lsub\" colspan=\"6\"></td>  </tr>  <tr>    <td class=\"tg-baqhsub\" colspan=\"2\">To Date<br></td>    <td class=\"tg-ywh4lsub\" colspan=\"6\"></td>  </tr>  <tr>    <td class=\"tg-ywh4l0\" colspan=\"8\"><b>Equipment Detail</b><br></td>  </tr>  <tr>    <td class=\"tg-baqhsub1\" colspan=\"4\">Equipment<br></td>	    <td class=\"tg-baqhsub2\">Qty</td>    <td class=\"tg-baqhsub3\">Staff</td>    <td class=\"tg-baqhsub4\">Vendor</td>    <td class=\"tg-baqhsub5\">Remark</td>  </tr>  <tr>    <td class=\"\" colspan=\"4\">camera</td>    <td class=\"\">5</td>    <td class=\"\">divyesh</td>    <td class=\"\">rajesh</td>    <td class=\"\">its testing<br></td>  </tr>  </table>');

//08-08-2016
//this cahnge only in co and u hv must do the query

UPDATE `staff_permission` SET `permission`='[\"ENR\",\"EVD\",\"Event_Status\",\"EALL\",\"NEW\",\"UPC\",\"COM\",\"Equipment\",\"EQA\",\"CTG\",\"ACS\",\"RES\",\"Category\",\"OCTG\",\"OSTG\",\"Product\",\"PRD\",\"PADD\",\"PVIW\",\"Vendors\",\"VAL\",\"Accounting\",\"TRN\",\"PID\",\"UPD\",\"INV\",\"VPD\",\"VUD\",\"Staff\",\"STA\",\"STF\",\"Settings\",\"HOL\",\"CMP\",\"ADC\",\"OPT\",\"EML\",\"TEMP\"]' 
WHERE `user_id`='client123';

//setting for get the data

INSERT INTO `event_mgt`.`vendor_mst` (`vend_id`, `vendor_name`) VALUES ('0', 'Not Selected');

//query for fetching data in invoice..
select em.eq_name,sm.first_name,evd.remark,vm.vendor_name 
from new_event_places_dtl evd 
right join staff_mst sm on sm.staff_id = evd.staff_id
right join vendor_mst vm on vm.vend_id = evd.vend_id
right join equipment_mst em on em.eq_id = evd.eq_id
where evd.event_id=130;
 
 //insertion query for the template_mst for invoice_pdf
 
  INSERT INTO `template_mst` (`template_name`, `template_body`) VALUES ('InvoicePdf', ' <table class=\"tg\" style=\"border-collapse: collapse; border-spacing: 0;\">  <tbody>  <tr>  <th colspan=\"5\"><img src=\"images/ombanner.jpg\" width=\"1020\" height=\"320\" /></th>  </tr>  <tr class=\"trhw\">  <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 80px; font-family: Calibri;font-size:12px;vertical-align:bottom;color:#4e4e4e;\" colspan=\"3\">To: [Company]</td>  <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 20px; font-family: Calibri;vertical-align:bottom;color:#4e4e4e;\" colspan=\"2\">&nbsp;</td>  </tr>  <tr class=\"trhw\">  <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 80px; font-family: Calibri;font-size:12px;vertical-align:bottom;color:#4e4e4e;\" colspan=\"3\">Order: [OrderName]</td>  <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 20px; font-family: Calibri;font-size:12px;vertical-align:bottom;color:#4e4e4e;\" colspan=\"2\">Quotation No: [OrderId]</td>  </tr>  <tr class=\"trhw\">  <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 80px; font-family: Calibri;font-size:12px;vertical-align:bottom;color:#4e4e4e;\" colspan=\"5\">Order Date : [OrderDate]</td>  </tr>  <tr class=\"trhw\">  <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 80px; font-family: Calibri;font-size:12px;vertical-align:bottom;color:#4e4e4e;\" colspan=\"3\">Vennue: [Venue]</td>  <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 20px; font-family: Calibri;font-size:12px;vertical-align:bottom;color:#4e4e4e;\" colspan=\"2\">Invoice No: </td>  </tr>  <tr class=\"trhw\">  <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9; padding: 5px 80px; font-family: Calibri;font-size:12px;vertical-align:bottom;color:#4e4e4e;\" colspan=\"5\">Client: [ClientName]</td>  </tr>   <tr class=\"trhw\">  <td class=\"tg-vi9z\" style=\"border-width: 0px;  padding: 5px 5px;vertical-align:bottom;\" colspan=\"5\">&nbsp;</td>  </tr>   <tr class=\"trhw\" style=\"background-color: #9a9a9a; font-family: Calibri;\">  <td class=\"tg-m36b thsrno\" style=\"font-size:12px;padding: 5px 5px;color:#e1e1e1;\">Sr.No</td>  <td class=\"tg-m36b theqp\" style=\"font-size:12px;padding: 5px 5px;color:#e1e1e1;\" >Particulars</td>  <td class=\"tg-ullm thsrno\" style=\"text-align: right;font-size:12px;padding: 5px 5px;color:#e1e1e1;\">Qty.</td>  <td class=\"tg-ullm thamt\" style=\"text-align: right;font-size:12px;padding: 5px 5px;color:#e1e1e1;\">Unit Cost</td>  <td class=\"tg-ullm thamt\" style=\"text-align: right;font-size:12px;padding: 5px 5px;color:#e1e1e1;\">Amount</td>  </tr>  <tr class=\"trhw\">  <td class=\"tg-vi9z\"  colspan=\"5\" >[Description]</td>  </tr>    <tr class=\"trhw\">  <td class=\"tg-jtyd\" style=\"text-align: right; background-color: #9a9a9a;font-size:12px;padding: 5px 5px;color:#e1e1e1;\" colspan=\"4\">Charge</td>  <td class=\"tg-3gzm\" style=\"background-color: #d9d9d9; text-align: right;font-size:12px;padding: 5px 5px;color:#4e4e4e;\">&nbsp;[ClientCharge]</td>  </tr>  <tr class=\"trhw\">  <td class=\"tg-jtyd\" style=\"text-align: right; background-color: #9a9a9a;font-size:12px;padding: 5px 5px;color:#e1e1e1;\" colspan=\"4\">Discount</td>  <td class=\"tg-3gzm\" style=\"background-color: #d9d9d9; text-align: right;font-size:12px;padding: 5px 5px;color:#4e4e4e;\">&nbsp;[Discount]</td>  </tr>  <tr class=\"trhw\">  <td class=\"tg-jtyd\" style=\"text-align: right; background-color: #9a9a9a;font-size:12px;padding: 5px 5px;color:#e1e1e1;\" colspan=\"4\">S.Tax&nbsp;[TaxRate] %</td>  <td class=\"tg-3gzm\" style=\"background-color: #d9d9d9; text-align: right;font-size:12px;padding: 5px 5px;color:#4e4e4e;\">&nbsp;[TaxAmt]</td>  </tr>  <tr class=\"trhw\">  <td class=\"tg-jtyd\" style=\"text-align: right; background-color: #9a9a9a;font-size:12px;padding: 5px 5px;color:#e1e1e1;\" colspan=\"4\">Total</td>  <td class=\"tg-3gzm\" style=\"background-color: #d9d9d9; text-align: right;font-size:12px;padding: 5px 5px;color:#4e4e4e;\">&nbsp;[Total]</td>  </tr>  <tr class=\"trhw\">  <td class=\"tg-vi9z\" style=\"background-color: #d9d9d9;padding: 5px 5px;\" colspan=\"5\" rowspan=\"1\">&nbsp;</td>  </tr>  <tr>  <td class=\"tg-3gzm\" style=\"text-align: center; vertical-align: bottom; background-color: #d9d9d9;\" colspan=\"1\">&nbsp;</td>  <td style=\"background-color: #d9d9d9; vertical-align: bottom;color:#4e4e4e;\" colspan=\"2\">Remark</td>  <td class=\"tg-3gzm\" style=\"text-align: center; vertical-align: bottom; background-color: #d9d9d9;color:#4e4e4e;\" colspan=\"2\">Venture Of</td>  </tr>  <tr>  <td class=\"tg-3gzm\" style=\"text-align: center; vertical-align: bottom; background-color: #d9d9d9;\" colspan=\"1\">&nbsp;</td>  <td style=\"background-color: #d9d9d9; vertical-align: bottom;color:#4e4e4e;\" colspan=\"2\">E.&amp;.O.E.</td>  <td class=\"tg-3gzm\" style=\"text-align: center; background-color: #d9d9d9;\" colspan=\"2\"><img src=\"smlogo.png\" /></td>  </tr>  <tr class=\"trhw\">  <td class=\"tg-vi9z\" style=\"border-width: 0px;  padding: 5px 5px;vertical-align:bottom;background-color: #d9d9d9;\" colspan=\"5\">&nbsp;</td>  </tr>  </tbody>  </table>');

  
 
  