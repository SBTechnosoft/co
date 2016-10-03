<?php
/**
* @Author Divyesh Rana
* Created on : 03-March-2016
* Purpose: Common database insert function
* Last Modified By: Divyesh Rana
* Last Modified Date: 03-March-2016
*/

include_once(DIR_WS_FUNCTIONS.'general.fn.php');


//function to insert designation
function insCatg($conn,$txtcatgnm,$txtcatgdes,$cur_date)
		{
			$sqlInsCatg = "INSERT INTO `eq_category_mst` (`cat_name`,`description`,`created_at`,`deleted_at`,`updated_at`) VALUES ('".$txtcatgnm."','".$txtcatgdes."','".$cur_date."','','')"; 
			$resultArray = $conn->insertQuery($sqlInsCatg);
			echo 0;
			exit;
		}
function insContactList($conn,$clientName,$companyName,$mobileNo,$workNo,$emailId,$address)
{
	 $sqlInsCatg = "INSERT INTO contact_dtl (client_name,company_name,mobile_no,work_no,email_id,address) VALUES ('".$clientName."','".$companyName."','".$mobileNo."','".$workNo."','".$emailId."','".$address."')"; 
	
	$resultArray = $conn->insertQuery($sqlInsCatg);
}
function insertContactEvent($conn,$clientName1,$companyName1,$mobileNo1,$workNo1,$emailId1,$address1)
{
	$sqlInsCnt = "INSERT INTO contact_dtl (`client_name`,`company_name`,`mobile_no`,`work_no`,`email_id`,`address`,`client_type`) VALUES ('".$clientName1."','".$companyName1."','".$mobileNo1."','".$workNo1."','".$emailId1."','".$address1."','Event')"; 
	$resultArray = $conn->insertQuery($sqlInsCnt);
}

function insertContactRetail($conn,$clientName2,$mobileNo2,$email,$address2)
{
	$sqlInsCnt = "INSERT INTO contact_dtl (client_name,mobile_no,work_no,email_id,address,client_type) VALUES ('".$clientName2."','".$mobileNo2."','','".$email."','".$address2."','Retail')"; 
	$resultArray = $conn->insertQuery($sqlInsCnt);
}
function insResource($conn,$txtresnm,$txtresprice,$cur_date)
		{
			$sqlInsCatg = "INSERT INTO `resource_mst` (`res_name`,`amount`,`created_at`,`deleted_at`,`updated_at`) VALUES ('".$txtresnm."','".$txtresprice."','".$cur_date."','','')"; 
			$resultArray = $conn->insertQuery($sqlInsCatg);
			echo 0;
			exit;
		}
function insProduct($conn,$txtprdnm,$txtcatid,$cur_date)
		{
			$sqlinsProduct = "INSERT INTO `product_cat_mst` (`prd_cat_name`,`prd_cat_parent_id`,`created_at`,`deleted_at`,`updated_at`) 
			VALUES ('".$txtprdnm."','".$txtcatid."','".$cur_date."','','')"; 
			$resultArray = $conn->insertQuery($sqlinsProduct);
			echo 0;
			exit;
		}
		
function insProductAdd($conn,$txtprdnm,$txtprdid,$txtitmcd,$txtdispnm,$txtcgrp,$drpprdctg,$txtrprice,$txtpprice,$drptype,$cur_date)
		{
			$sqlinsProductAdd = "INSERT INTO `product_mst` 
			(`prod_nm`,`prd_id`,`item_code`,`disp_nm`,`commodity_grp`,`prd_cat_id`,`retail_price`,
			`pur_price`,`type`,`created_at`,`deleted_at`,`updated_at`) 
			VALUES ('".$txtprdnm."','".$txtprdid."','".$txtitmcd."','".$txtdispnm."','".$txtcgrp."',
			'".$drpprdctg."','".$txtrprice."','".$txtpprice."','".$drptype."','".$cur_date."','','')"; 
			$resultArray = $conn->insertQuery($sqlinsProductAdd);
			echo 0;
			exit;
		}
function updProduct($conn,$prod_nm,$prd_id,$item_code,$disp_nm,$commodity_grp,$prd_cat_id,$retail_price,$pur_price,$type,$upd_date,$prod_id)
		{
			$sqlInsEqup = "UPDATE  `product_mst` set `prod_nm` = '".$prod_nm."',
														`prd_id` = '".$prd_id."',
														`item_code` = '".$item_code."',
														`disp_nm` = '".$disp_nm."',
														`commodity_grp` = '".$commodity_grp."',
														`prd_cat_id`='".$prd_cat_id."',
														`retail_price` = '".$retail_price."',
														`pur_price` = '".$pur_price."',
														`type` = '".$type."',
														`updated_at` = '".$upd_date."' where `prod_id` = '".$prod_id."'"; 
			$resultArray = $conn->insertQuery($sqlInsEqup);
			//print_r($resultArray);			
			echo 0;
			exit;
		}			
function insCatgNew($conn,$txtcatgnm,$txtcatgdes,$cur_date)
		{
			$sqlInsCatg = "INSERT INTO `new_category_mst` (`cat_name`,`description`,`created_at`,`deleted_at`,`updated_at`) VALUES ('".$txtcatgnm."','".$txtcatgdes."','".$cur_date."','','')"; 
			$resultArray = $conn->insertQuery($sqlInsCatg);
			echo 0;
			exit;
		}
function insAcs($conn,$txtcatid,$txtacsnm,$txtacsremk,$cur_date)
		{
			$sqlInsAcs = "INSERT INTO `eq_accessories` (`eq_id`,`as_name`,`remark`,`created_at`,`deleted_at`,`updated_at`) VALUES ('".$txtcatid."','".$txtacsnm."','".$txtacsremk."','".$cur_date."','','')"; 
			$resultAcs = $conn->insertQuery($sqlInsAcs);
			echo 0;
			exit;
		}
function insSubCatg($conn,$txtcatid,$txtacsnm,$txtacsremk,$cur_date)
		{
			$sqlInsAcs = "INSERT INTO `new_sub_catg` (`eq_id`,`as_name`,`remark`,`created_at`,`deleted_at`,`updated_at`) VALUES ('".$txtcatid."','".$txtacsnm."','".$txtacsremk."','".$cur_date."','','')"; 
			$resultAcs = $conn->insertQuery($sqlInsAcs);
			echo 0;
			exit;
		}
		
function insEnqFrm($conn,$txtclnm,$txtcladd,$txtclmail,$txtclmob,$txtclenqdate,$txtenqtime,$txt_type_event,$txtfrom_dt,$txt_to_dt,$txt_event_add,$drp_remainder)
		{
			$sqlInsEnqFrm = "INSERT INTO `eq_enquiry_mst` (`client_name`,`client_add`,`client_email`,`contact_no`,`date_of_enquiry`,`time`,`type_of_event`,`from_date`,`to_date`,`event_add`,`remainder`) VALUES ('".$txtclnm."','".$txtcladd."','".$txtclmail."','".$txtclmob."','".$txtclenqdate."','".$txtenqtime."','".$txt_type_event."','".$txtfrom_dt."','".$txt_to_dt."','".$txt_event_add."','".$drp_remainder."')"; 
			$resultEnqFrm = $conn->insertQuery($sqlInsEnqFrm);
			echo 0;
			exit;
		}
function insVend($conn,$txtvendnm,$txtemail,$txtcontact,$drp_cat_vend,$txtvendcmp,$cur_date)
		{
			$sqlInsVend = "INSERT INTO `vendor_mst` (`vendor_name`,`vendor_email`,`vendor_contact`,`cat_id`,`vendor_cmp`,`created_at`,`deleted_at`,`updated_at`) VALUES ('".$txtvendnm."','".$txtemail."','".$txtcontact."','".$drp_cat_vend."','".$txtvendcmp."','".$cur_date."','','')"; 
			$resultArray = $conn->insertQuery($sqlInsVend);
			echo 0;
			exit;
		}
function insVendDtl($conn,$txtveid,$txtvpeid,$showvendor,$txtvendchrg)
		{
			$sqlInsVend = "INSERT INTO `event_vendor_dtl` (`event_id`,`event_places_id`,`vend_id`,`vendor_charges`) VALUES ('".$txtveid."','".$txtvpeid."','".$showvendor."','".$txtvendchrg."')"; 
			$resultArray = $conn->insertQuery($sqlInsVend);
			echo 0;
			exit;
		}
		
function insStaff($conn,$txtempid,$txtfname,$txtlname,$txtempmail,$txtmob,$txtrel1,$txtrel2,$txtpass,$txtadd1,$txtadd2,$txtcity,$txtstate,$txtzip,$txtstype)
		{
			$sqlInsStaff = "INSERT INTO `staff_mst` (`emp_id`,`first_name`,`last_name`,`email`,`mobile`,`relative1`,`relative2`,`password`,`add1`,`add2`,`city`,`state`,`zip`,`staff_type`)
							VALUES ('".$txtempid."','".$txtfname."','".$txtlname."','".$txtempmail."','".$txtmob."','".$txtrel1."','".$txtrel2."','".$txtpass."',
							'".$txtadd1."','".$txtadd2."','".$txtcity."','".$txtstate."','".$txtzip."','".$txtstype."')"; 
			$resultArray = $conn->insertQuery($sqlInsStaff);
			echo 0;
			exit;
		}
function updStaff($conn,$txtempid,$txtfname,$txtlname,$txtempmail,$txtmob,$txtrel1,$txtrel2,$txtpass,$txtadd1,$txtadd2,$txtcity,$txtstate,$txtzip,$txtstype,$stfid)
		{
			
			$sqlUpdStaff = "UPDATE `staff_mst` set `emp_id` = '".$txtempid."',
													`first_name` = '".$txtfname."',
													`last_name` = '".$txtlname."',
													`email` = '".$txtempmail."',
													`mobile` = '".$txtmob."',
													`relative1` = '".$txtrel1."',
													`relative2` = '".$txtrel2."',
													`password` = '".$txtpass."',
													`add1` = '".$txtadd1."',
													`add2` = '".$txtadd2."',
													`city` = '".$txtcity."',
													`state` = '".$txtstate."',
													`zip` = '".$txtzip."',
													`staff_type` = '".$txtstype."' where `staff_id` = '".$stfid."'	";
			$resultArray = $conn->insertQuery($sqlUpdStaff);
			echo 0;
			exit;
		}
		
function insCmp($conn,$txtcmpnm,$txtpass,$txtcmpadd,$txtcmpcont,$txtpur,$txtrmrk)
		{
			$sqlInsCmp = "INSERT INTO `cmp_info` (`cmp_name`,`password`,`address`,`mobile`,`purchase_from`,`remark`) VALUES ('".$txtcmpnm."','".$txtpass."','".$txtcmpadd."','".$txtcmpcont."','".$txtpur."','".$txtrmrk."')"; 
			$resultArray = $conn->insertQuery($sqlInsCmp);
			echo 0;
			exit;
		}

function insEqup($conn,$txteqpnm,$txtserno,$txtmodel,$txtcateqp,$txtpurdate,$txtpurfrm,$txtremk,$txtprice,$cur_date,$drptype)
		{
			$sqlInsEqup = "INSERT INTO `equipment_mst` (`eq_name`,`serial_no`,`model_no`,`category_id`,`purchase_date`,`purchase_from`,`eq_photo`,`remark`,`price`,`price_type`,`created_at`,`deleted_at`,`updated_at`)VALUES ('".$txteqpnm."','".$txtserno."','".$txtmodel."','".$txtcateqp."','".$txtpurdate."','".$txtpurfrm."','".$txtremk."','".$txtremk."','".$txtprice."','".$drptype."','".$cur_date."','','')"; 
			$resultArray = $conn->insertQuery($sqlInsEqup);
			//print_r($resultArray);			
			echo 0;
			exit;
		}
function updEqup($conn,$txteqpnm,$txtserno,$txtmodel,$txtcateqp,$txtpurdate,$txtpurfrm,$txtremk,$txtprice,$upd_date,$drptype,$eq_id)
		{
			$sqlInsEqup = "UPDATE  `equipment_mst` set `eq_name` = '".$txteqpnm."',
														`serial_no` = '".$txtserno."',
														`model_no` = '".$txtmodel."',
														`category_id` = '".$txtcateqp."',
														`purchase_date` = '".$txtpurdate."',
														`purchase_from` = '".$txtpurfrm."',
														`eq_photo` = '".$txtremk."',
														`remark` = '".$txtremk."',
														`price` = '".$txtprice."',
														`price_type` = '".$drptype."',
														`updated_at` = '".$upd_date."' where `eq_id` = '".$eq_id."'  "; 
			$resultArray = $conn->insertQuery($sqlInsEqup);
			//print_r($resultArray);			
			echo 0;
			exit;
		}			

function insertEventAdd($conn,$txteventnm,$txteventds,$txtclnm,$txtclcmp,$txtclemail,$txtworkmob,$txthmmob,$txtmob,$address,$txtcharge,$txtpaid,$fromdate,$todate,$status,$cur_date,$pay_status,$drpcmpnm,$taxmode,$txtbillno,$txtfpno,$tax,$gtot,$txtstax,$txtdisc,$cat_id,$sub_cat_id,$txtjobpart1,$txtjobpart2,$txtvcharge)
		{
			$sqlInsEventAdd = "INSERT INTO `event_mst` (`event_name`,`event_ds`,`client_name`,`client_cmp`,`client_email`,`client_work_mob`,`client_home_mob`,`client_mob`,`client_address`,`status`,`from_date`,`to_date`,`payment_status`,`client_charges`,`client_paid_amt`,`vendor_charges`,`client_discount_amt`,`created_at`,`deleted_at`,`updated_at`,`cmp_id`,`taxmode`,`bill_no`,`fp_no`,`service_tax_amt`,`total_amt`,`service_tax_rate`,`cat_id`,`sub_cat_id`,`job_data_1`,`job_data_2`,`order_type`) 
			VALUES ('".$txteventnm."','".$txteventds."','".$txtclnm."','".$txtclcmp."','".$txtclemail."','".$txtworkmob."','".$txthmmob."','".$txtmob."','".$address."','".$status."','".$fromdate."','".$todate."','".$pay_status."','".$txtcharge."','".$txtpaid."','".$txtvcharge."','".$txtdisc."','".$cur_date."','','','".$drpcmpnm."','".$taxmode."','".$txtbillno."','".$txtfpno."','".$tax."','".$gtot."','".$txtstax."','".$cat_id."','".$sub_cat_id."','".$txtjobpart1."','".$txtjobpart2."','Event')"; 
			$resultArray = $conn->insertQuery($sqlInsEventAdd);
			echo 1;
			//exit;
		}
function insertRetailAdd($conn,$txtprdnm,$email,$txtmobno,$txtAdd,$drpcmpnm,$txtcharge,$txtpaid,$txtdisc,
							$nfrdt,$ntrdt,$cur_date,$pay_status,$tax,$gtot,$txtstax,$vat)
		{
			$sqlInsEventAdd = "INSERT INTO `event_mst` (`client_name`,`client_email`,`client_work_mob`,`client_address`,`cmp_id`,`client_charges`,
			`client_paid_amt`,`client_discount_amt`,`from_date`,`to_date`,`created_at`,`payment_status`,`service_tax_amt`,
			`total_amt`,`service_tax_rate`,`order_type`,`status`,`deleted_at`,`updated_at`,`vat`) 
			VALUES ('".$txtprdnm."','".$email."','".$txtmobno."','".$txtAdd."','".$drpcmpnm."','".$txtcharge."','".$txtpaid."','".$txtdisc."','".$nfrdt."','".$ntrdt."','".$cur_date."','".$pay_status."','".$tax."','".$gtot."','".$txtstax."','Retail','complete','','','".$vat."')"; 
			$resultArray = $conn->insertQuery($sqlInsEventAdd);
			echo 1;
			//exit;
		}
function insertRetailDtl($conn,$event_id,$txtictg,$txtprdid,$txticomgrp,$txtirate,$txtiqty,$ptxtiamt)
		{
			$sqlInsEventAdd = "INSERT INTO `retail_inv_dtl` (`event_id`,`prd_cat_id`,`prod_id`,`comm_grp`,`rate`,`qty`,`amount`) 
			VALUES ('".$event_id."','".$txtictg."','".$txtprdid."','".$txticomgrp."','".$txtirate."','".$txtiqty."','".$ptxtiamt."')"; 
			$resultArray = $conn->insertQuery($sqlInsEventAdd);
			echo 1;
			//exit;
		}		
	
function insertEventPlaces($conn,$eventlast_id,$txtvenue,$txthall,$txtldmark,$txtfunction,$txtfromdate,$txttodate)
		{
			$sqlInsEventPlaces = "INSERT INTO `event_places_dtl` (`event_id`,`event_vennue`,`event_hall`,`event_ld_mark`,`function`,`event_date`,`event_to_date`) 
			VALUES ('".$eventlast_id."','".$txtvenue."','".$txthall."','".$txtldmark."','".$txtfunction."','".$txtfromdate."','".$txttodate."')"; 
			$resultArray1 = $conn->insertQuery($sqlInsEventPlaces);
			echo 2;
			//exit;
		}		
		
function insertEqpDrp($conn,$eventplaces_id,$event_id_pdtl,$eqp_id)
		{
			$sqlInsEqpDrp = "INSERT INTO `event_equipment_dtl` (`event_places_id`,`event_id`,`equipment_id`) 
			VALUES ('".$eventplaces_id."','".$event_id_pdtl."','".$eqp_id."')"; 
			$resultArray2 = $conn->insertQuery($sqlInsEqpDrp);
			echo 3;
			//exit;
		}	

function insertStfDrp($conn,$eventplaces_id,$event_id_pdtl,$stf_id)
		{
			$sqlInsStfDrp = "INSERT INTO `event_staff_dtl` (`event_places_id`,`event_id`,`staff_id`) 
			VALUES ('".$eventplaces_id."','".$event_id_pdtl."','".$stf_id."')"; 
			$resultArray3 = $conn->insertQuery($sqlInsStfDrp);
			echo 4;
			//exit;
		}
		
		
function insertPaymentTrn($conn,$event_id_pdtl1,$cur_date,$txtpaid,$paymentMode,$txtbanknm,$txtchkno)
		{
			$sqlInsPayTrn = "INSERT INTO `event_client_payment_trn` (`event_id`,`payment_date`,`client_paid_amt`,`payment_mode`,`cheque_no`,`bank_name`,`trn_type`) 
			VALUES ('".$event_id_pdtl1."','".$cur_date."','".$txtpaid."','".$paymentMode."','".$txtbanknm."','".$txtchkno."','Payment')"; 
			$resultArray3 = $conn->insertQuery($sqlInsPayTrn);
			echo 5;
			//exit;
		}
	
function insPayTrn($conn,$txtpeid,$txtpdate,$txtpamt,$txtpmode,$txtpbnm,$txtpchq,$txtptrn)
		{
			$sqlInsertPayTrn = "INSERT INTO `event_client_payment_trn` (`event_id`,`payment_date`,`client_paid_amt`,`payment_mode`,`cheque_no`,`bank_name`,`trn_type`) 
			VALUES ('".$txtpeid."','".$txtpdate."','".$txtpamt."','".$txtpmode."','".$txtpbnm."','".$txtpchq."','".$txtptrn."')"; 
			$resultArray3 = $conn->insertQuery($sqlInsertPayTrn);
			echo 6;
			//exit;
		}
function updatePaidAmt($conn,$ueid,$total_amt_paid)
		{
			$sqlUpdPaidAmt = "Update `event_mst`  set `client_paid_amt` = '".$total_amt_paid."' where `event_id` = '".$ueid."' "; 
			$resultArray = $conn->insertQuery($sqlUpdPaidAmt);
			echo 7;
			//exit;
		}
function updatePaidAmtStat($conn,$ueid,$total_amt_paid)
		{
			$sqlUpdPaidAmt = "Update `event_mst`  set `client_paid_amt` = '".$total_amt_paid."',`payment_status` = 'Paid' where `event_id` = '".$ueid."' "; 
			$resultArray = $conn->insertQuery($sqlUpdPaidAmt);
			echo 8;
			//exit;
		}
function insAddVendPTrn($conn,$txtevent_vend_id,$txtvend_evnt_id,$txtvpdate,$txtvpmode,$txtvpbnm,$txtvpchq,$txtvdpamt)
		{
			$sqlInsertvndPayTrn = "INSERT INTO `event_vend_payment_trn` (`event_id`,`event_vendor_id`,`payment_date`,`payment_mode`,`vend_bank_name`,`vend_cheque_no`,`paid_amt`) 
			VALUES ('".$txtevent_vend_id."','".$txtvend_evnt_id."','".$txtvpdate."','".$txtvpmode."','".$txtvpbnm."','".$txtvpchq."','".$txtvdpamt."')"; 
			$resultArray = $conn->insertQuery($sqlInsertvndPayTrn);
			echo 6;
			//exit;
		}		
function updatePaidAmtVend($conn,$vueid,$total_amt_paid)
		{
			$sqlvUpdPaidAmt = "Update `event_vendor_dtl`  set `vendor_paid_amt` = '".$total_amt_paid."',`vendor_paid_status` = 'Unpaid' where `event_vendor_id` = '".$vueid."' "; 
			$resultArray = $conn->insertQuery($sqlvUpdPaidAmt);
			echo 7;
			//exit;
		}
function updatePaidAmtVendP($conn,$vueid,$total_amt_paid)
		{
			$sqlvUpdPaidAmt = "Update `event_vendor_dtl`  set `vendor_paid_amt` = '".$total_amt_paid."',`vendor_paid_status` = 'Paid' where `event_vendor_id` = '".$vueid."' "; 
			$resultArray = $conn->insertQuery($sqlvUpdPaidAmt);
			echo 8;
			//exit;
		}
function insCmpNew($conn,$txtcmpnm,$txtcmprno,$txtbnrnm,$cur_date)
		{
			$sqlInsCmp = "INSERT INTO `company_mst` (`cmp_name`,`cmp_reg_no`,`banner_img`,`cmp_default`,`created_at`,`deleted_at`,`updated_at`) VALUES ('".$txtcmpnm."','".$txtcmprno."','".$txtbnrnm."',0,'".$cur_date."','','')"; 
			$resultArray = $conn->insertQuery($sqlInsCmp);
			//echo 1;
			//exit;
		}
function Updatecmpdisplay($conn,$id,$value,$cur_date)
		{
			$sqlupdampFrm = "Update `company_mst` set `cmp_default`='".$value."',updated_at='".$cur_date."' where `cmp_id` = '".$id."' "; 
			$resultArray = $conn->insertQuery($sqlupdampFrm);
			
			$sqlupdampFrm1 = "Update `company_mst` set `cmp_default`=0,updated_at='".$cur_date."' where `cmp_id` != '".$id."' "; 
			$resultArray = $conn->insertQuery($sqlupdampFrm1);
			
		}
function updEnqFrm($conn,$id)
		{
			$sqlupdEnqFrm = "Update `event_mst`  set `status` = 'new' where `event_id` = '".$id."' "; 
			$resultArray = $conn->insertQuery($sqlupdEnqFrm);
			echo 12;
			exit;
		}
/*function delevent($conn,$id,$date)
		{
			$sqldelEvent = "Update `event_mst`  set `deleted_at` = '".$date."' where `event_id` = '".$id."' "; 
			$resultArray = $conn->insertQuery($sqldelEvent);
			//echo 12;
			exit;
		}*/
function updInvEM($conn,$id,$fname)
		{
			$sqlinsInvEM = "Update `event_mst` set `inv_file_name` = '".$fname."' where event_id = '".$id."'"; 
			$resultArray = $conn->insertQuery($sqlinsInvEM);
			
		}
function updInvFULL($conn,$id,$fname)
		{
			$sqlinsInvEM = "Update `event_mst` set `info_file_name` = '".$fname."' where event_id = '".$id."'"; 
			$resultArray = $conn->insertQuery($sqlinsInvEM);
			
		}
function insInvECID($conn,$id,$fname,$date,$user)
		{
			$sqlinsInvECID = "INSERT INTO `event_client_invoice_dtl` (`event_id`,`inv_file_name`,`created_at`,`generated_by`) VALUES ('".$id."','".$fname."','".$date."','".$user."')"; 
			$resultArray = $conn->insertQuery($sqlinsInvECID);
			
		}
function insOption($conn,$stax)
		{
			//INSERT INTO `setting` (`service_tax`) VALUES ('".$stax."')ON DUPLICATE KEY UPDATE `service_tax` = `service_tax`;
			$sqlinsOption = "INSERT INTO `setting` (`id`,`service_tax`) VALUES (1,'".$stax."')ON DUPLICATE KEY UPDATE `service_tax` = `service_tax`"; 
			$resultArray = $conn->insertQuery($sqlinsOption);
			echo 1;
			$sqlinsOption1 = "UPDATE `setting` SET `service_tax` = '".$stax."' WHERE `id` = 1"; 
			$resultArray = $conn->insertQuery($sqlinsOption1);
			echo 2;
		}
function insOptionDays($conn,$updays)
		{
			
			$sqlinsOption = "INSERT INTO `setting` (`id`,`upcoming_days`) VALUES (1,'".$updays."')ON DUPLICATE KEY UPDATE `upcoming_days` = `upcoming_days`"; 
			$resultArray = $conn->insertQuery($sqlinsOption);
			echo 1;
			$sqlinsOption1 = "UPDATE `setting` SET `upcoming_days` = '".$updays."' WHERE `id` = 1"; 
			$resultArray = $conn->insertQuery($sqlinsOption1);
			echo 2;
		}
function insOptionVat($conn,$txtvat)
		{
			
			$sqlinsOption = "INSERT INTO `setting` (`id`,`vat`) VALUES (1,'".$txtvat."')ON DUPLICATE KEY UPDATE `vat` = `vat`"; 
			$resultArray = $conn->insertQuery($sqlinsOption);
			echo 1;
			$sqlinsOption1 = "UPDATE `setting` SET `vat` = '".$txtvat."' WHERE `id` = 1"; 
			$resultArray = $conn->insertQuery($sqlinsOption1);
			echo 2;
		}
function insOptionRtl($conn,$txtrtl)
		{
			
			$sqlinsOption = "INSERT INTO `setting` (`id`,`retail_sales`) VALUES (1,'".$txtrtl."')ON DUPLICATE KEY UPDATE `retail_sales` = `retail_sales`"; 
			$resultArray = $conn->insertQuery($sqlinsOption);
			echo 1;
			$sqlinsOption1 = "UPDATE `setting` SET `retail_sales` = '".$txtrtl."' WHERE `id` = 1"; 
			$resultArray = $conn->insertQuery($sqlinsOption1);
			echo 2;
		}
function insOptionResEqu($conn,$txtres_equ)
		{
			
			$sqlinsEqu = "INSERT INTO `setting` (`id`,`resorce`) VALUES (1,'".$txtres_equ."')ON DUPLICATE KEY UPDATE `resorce` = `resorce`"; 
			$resultArray = $conn->insertQuery($sqlinsEqu);
			
			$sqlinsEqu1 = "UPDATE `setting` SET `resorce` = '".$txtres_equ."' WHERE `id` = 1"; 
			$resultArray = $conn->insertQuery($sqlinsEqu1);
			
		}
function insOptionAutoSetDate($conn,$txtAutoSetDate)
		{
			
			$sqlinsEqu = "INSERT INTO `setting` (`id`,`retail_sales_day`) VALUES (1,'".$txtAutoSetDate."')ON DUPLICATE KEY UPDATE `retail_sales_day` = `retail_sales_day`"; 
			$resultArray = $conn->insertQuery($sqlinsEqu);
			
			$sqlinsEqu1 = "UPDATE `setting` SET `retail_sales_day` = '".$txtAutoSetDate."' WHERE `id` = 1"; 
			$resultArray = $conn->insertQuery($sqlinsEqu1);
			
		}
function insNewEventPlac($conn,$event_id,$event_plc_id,$txtieqp,$txtirate,$txtiqty,$txtiamt,$txtistf,$txtivend,$txtivendprice,$txtiremark,$txtilength,$txtiwidth)
		{
			$sqlinsNewEventPlac = "INSERT INTO `new_event_places_dtl` (`event_id`,`event_places_id`,`eq_id`,`rate`,`qty`,`amount`,`staff_id`,`vend_id`,`vend_price`,`remark`,`length`,`width`) 
				VALUES ('".$event_id."','".$event_plc_id."','".$txtieqp."','".$txtirate."','".$txtiqty."','".$txtiamt."','".$txtistf."','".$txtivend."','".$txtivendprice."','".$txtiremark."','".$txtilength."','".$txtiwidth."')"; 
			$resultArray = $conn->insertQuery($sqlinsNewEventPlac);
			
		}
function insPermission($conn,$stf_id,$json)
		{
			$sqlInsPerm = "INSERT INTO `staff_permission` (`user_id`,`permission`) VALUES ('".$stf_id."','".$json."') ON DUPLICATE KEY UPDATE `user_id` = `user_id`"; 
			$resultArray = $conn->insertQuery($sqlInsPerm);
			$sqlInsPerm1 = "Update `staff_permission` set `permission` = '".$json."' where `user_id` = '".$stf_id."' "; 
			$resultArray = $conn->insertQuery($sqlInsPerm1);
			//echo 1;
			exit;
		}
		
		
function updEventDetail($conn,$eid,$txteventnm,$txteventds,$txtclnm,$txtclcmp,$txtclemail,$txtworkmob,$txthmmob,$txtmob,$txtjobdata1,$txtjobdata2,$date)
		{
			
			$sqlupdEventDetail = "UPDATE `event_mst` set `event_name` = '".$txteventnm."',
													`event_ds` = '".$txteventds."',
													`client_name` = '".$txtclnm."',
													`client_cmp` = '".$txtclcmp."',
													`client_email` = '".$txtclemail."',
													`client_work_mob` = '".$txtworkmob."',
													`client_home_mob` = '".$txthmmob."',
													`client_mob` = '".$txtmob."',
													`job_data_1` = '".$txtjobdata1."',
													`job_data_2` = '".$txtjobdata2."',
													`updated_at` = '".$date."',
													`updated_by` = '".$_SESSION['USER_ID']."'	where `event_id` = '".$eid."'	";
			$resultArray = $conn->insertQuery($sqlupdEventDetail);
			echo 0;
			exit;
		}
function updEventPlacesDetail($conn,$epldtlid,$txtvenue,$txthall,$txtldmark,$txtfunction,$txtfromdate,$txttodate,$date)
		{
			
			$sqlupdEventDetail = "UPDATE `event_places_dtl` set `event_vennue` = '".$txtvenue."',
													`event_hall` = '".$txthall."',
													`event_ld_mark` = '".$txtldmark."',
													`function`='".$txtfunction."',
													`event_date` = '".$txtfromdate."',
													`event_to_date` = '".$txttodate."'													
													where `event_places_id` = '".$epldtlid."'	";
			$resultArray = $conn->insertQuery($sqlupdEventDetail);
			echo 0;
			exit;
		}

function insertMassPayTrn($conn,$json,$cur_date,$pay_mode,$bk_nm,$chk_no,$mass_amt)
		{
			$sqlinsMassPayTrn = "INSERT INTO `event_vend_mass_pay_trn` (`event_vend_json_id`,`payment_date`,`payment_mode`,`bank_name`,`cheque_no`,`paid_amt`) 
				VALUES ('".$json."','".$cur_date."','".$pay_mode."','".$bk_nm."','".$chk_no."','".$mass_amt."')"; 
			$resultArray = $conn->insertQuery($sqlinsMassPayTrn);
			
		}
function insert_mass_vend_pay_trn($conn,$evd_id,$event_id,$cur_date,$pay_mode,$bk_nm,$chk_no,$paid_amt,$last_id)
		{
			$sqlins_mass_vend_pay_trn = "INSERT INTO `event_vend_payment_trn`(`event_vendor_id`,`event_id`,`payment_date`,`payment_mode`,`vend_bank_name`,`vend_cheque_no`,`paid_amt`,`mass_payment_id`) 
				VALUES ('".$evd_id."','".$event_id."','".$cur_date."','".$pay_mode."','".$bk_nm."','".$chk_no."','".$paid_amt."','".$last_id."')"; 
			$resultArray = $conn->insertQuery($sqlins_mass_vend_pay_trn);
			
		}
function upd_vend_dtl($conn,$evd_id,$vend_paid_amt)
		{
			$sqlUpd_vend_dtl = "Update `event_vendor_dtl` set `vendor_paid_amt` = '".$vend_paid_amt."',`vendor_paid_status`= 'Paid' where event_vendor_id = '".$evd_id."'"; 
			$resultArray = $conn->insertQuery($sqlUpd_vend_dtl);
			
		}
function insertExpence($conn,$showexpctg,$showevent,$txtfromdt,$txtamt,$showstf,$showvnd,$cmpid)
		{
			$sqlinsertExpence = "INSERT INTO `expence_dtl` (`exp_cat_id`,`event_id`,`exp_date`,`amount`,`exp_by`,`exp_by_vendor`,`cmp_id`) 
			VALUES ('".$showexpctg."','".$showevent."','".$txtfromdt."','".$txtamt."','".$showstf."','".$showvnd."','".$cmpid."')"; 
			$resultArray = $conn->insertQuery($sqlinsertExpence);
			//echo 4;
			//exit;
		}
function insNewRes($conn,$event_id,$event_plc_id,$res_id,$res_nm,$qty,$rate,$amount,$txtivend,$txtiresvendprice,$txtiremark)
		{
			$sqlinsNewRes = "INSERT INTO `res_places_dtl` (`event_id`,`event_places_id`,`res_id`,`res_name`,`qty`,`rate`,`amount`,`res_vend_id`,`res_vend_price`,`res_remark`) 
				VALUES ('".$event_id."','".$event_plc_id."','".$res_id."','".$res_nm."','".$qty."','".$rate."','".$amount."','".$txtivend."','".$txtiresvendprice."','".$txtiremark."')"; 
			$resultArray = $conn->insertQuery($sqlinsNewRes);
			
		}
function updateTemplate($conn,$txttempid,$txtename,$txttemplate)
	{
		$sqlupdateTemplate = "UPDATE `template_mst` set `template_name` = '".$txtename."',
													`template_body` = '".$txttemplate."'
													 where `template_id` = '".$txttempid."' ";
		return $conn->getResultArray($sqlupdateTemplate);
			
	}
function insResourceUpd($conn,$evntid,$epldtlid,$txtires,$txtiresnm,$txtiqty,$txtirate,$rtxtiamt,$txtivend,$txtiresvendprice,$txtiremark)
		{
			$sqlinsNewRes = "INSERT INTO `res_places_dtl` (`event_id`,`event_places_id`,`res_id`,`res_name`,`qty`,`rate`,`amount`,`res_vend_id`,`res_vend_price`,`res_remark`) 
				VALUES ('".$evntid."','".$epldtlid."','".$txtires."','".$txtiresnm."','".$txtiqty."','".$txtirate."','".$rtxtiamt."','".$txtivend."','".$txtiresvendprice."','".$txtiremark."')"; 
			$resultArray = $conn->insertQuery($sqlinsNewRes);
			
		}
function insEquipmentUpd($conn,$evntid,$epldtlid,$txtieqp,$txtirate,$txtiqty,$txtiamt,$txtistf,$txtivend,$txtivendprice,
							$txtiremark,$txtilength,$txtiwidth)
		{
			$sqlinsNewEqp = "INSERT INTO `new_event_places_dtl`	(`event_id`,`event_places_id`,`eq_id`,`rate`,`qty`,
			`amount`,`staff_id`,`vend_id`,`vend_price`,`remark`,`length`,`width`) 
			VALUES ('".$evntid."','".$epldtlid."','".$txtieqp."','".$txtirate."','".$txtiqty."','".$txtiamt."',
			'".$txtistf."','".$txtivend."','".$txtivendprice."','".$txtiremark."','".$txtilength."','".$txtiwidth."')"; 
			$resultArray = $conn->insertQuery($sqlinsNewEqp);
			
		}
function updResEventMst($conn,$evntid,$totammt,$txamt,$clcharge,$vdcharge)
		{
			
			$sqlupdResEventMst = "Update `event_mst` set `total_amt` = '".$totammt."',
														`service_tax_amt` = '".$txamt."',
														`client_charges`= '".$clcharge."',
														`vendor_charges`= '".$vdcharge."' where `event_id` = '".$evntid."' "; 
			$resultArray = $conn->insertQuery($sqlupdResEventMst);
			
			
		}
function updEqpEventMst($conn,$evntid,$totammt,$txamt,$clcharge,$vdcharge)
		{
			$sqlupdResEventMst = "Update `event_mst` set `total_amt` = '".$totammt."',
														`service_tax_amt` = '".$txamt."',
														`client_charges`= '".$clcharge."',
														`vendor_charges`= '".$vdcharge."'	where `event_id` = '".$evntid."'"; 
			$resultArray = $conn->insertQuery($sqlupdResEventMst);
			
		}

function insInvoicSet($conn,$drpcomp,$txtlabel,$type,$start_at,$cur_date)
		{
			$sqlInsCatg = "INSERT INTO `invoice_config` (`cmp_id`,`label`,`type`,`start_at`,`next_val`,`created_at`) VALUES ('".$drpcomp."','".$txtlabel."','".$type."','".$start_at."','','".$cur_date."')"; 
			$resultArray = $conn->insertQuery($sqlInsCatg);
			echo 0;
			exit;
		}
// function insDesg($conn,$desgId,$designation)
// {
    // $sqlInsDesg = "INSERT INTO ".TABLE_M_DESG_MST." (DESG_ID,DESIGNATION) VALUES ('".$desgId."','".strtoupper($designation)."')"; 
    // return $conn->insertQuery($sqlInsDesg);
// }
?>