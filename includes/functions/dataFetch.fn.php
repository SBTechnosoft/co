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
function showCatg($conn)
	{
		$sqlShowCatg = "select `cat_id`,`cat_name`,`description` from  `eq_category_mst` where  `deleted_at` = '0000-00-00 00:00:00' order by `cat_name` DESC"; 
		return $conn->getResultArray($sqlShowCatg);		
	}
function showCatgNew($conn)
	{
		$sqlShowCatg = "select `cat_id`,`cat_name`,`description` from  `new_category_mst` where  `deleted_at` = '0000-00-00 00:00:00' order by `cat_name` DESC"; 
		return $conn->getResultArray($sqlShowCatg);		
	}
function showCtgdrp($conn)
	{
		$sqlShowCatgdrp = "select `cat_id`,`cat_name` from  `eq_category_mst`  where `deleted_at` = '0000-00-00 00:00:00' order by `cat_name` "; 
		return $conn->getResultArray($sqlShowCatgdrp);		
	}
function showCtgdrpNew($conn)
	{
		$sqlShowCatgdrp = "select `cat_id`,`cat_name` from  `new_category_mst`  where `deleted_at` = '0000-00-00 00:00:00' order by `cat_name` "; 
		return $conn->getResultArray($sqlShowCatgdrp);		
	}
	
function showSubCtgDrpNew($conn,$catid)
	{
		$sqlShowCatgdrp = "select `as_id`,`as_name` from  `new_sub_catg`  where eq_id = '".$catid."' && `deleted_at` = '0000-00-00 00:00:00' "; 
		return $conn->getResultArray($sqlShowCatgdrp);		
	}
	
function showAcs($conn)
	{
		$sqlShowAcs = "select `as_id`,`as_name`,`eq_id`,`remark` from  `eq_accessories` where `deleted_at` = '0000-00-00 00:00:00'  "; 
		return $conn->getResultArray($sqlShowAcs);		
	}
function showSubCatg($conn)
	{
		$sqlShowAcs = "select `as_id`,`as_name`,ncm.cat_name,`remark` from  `new_sub_catg` nsc inner join new_category_mst ncm on ncm.cat_id = eq_id where nsc.deleted_at = '0000-00-00 00:00:00'  "; 
		return $conn->getResultArray($sqlShowAcs);		
	}

function showEnq($conn)
	{
		$sqlShowEnq = "select * from  `eq_enquiry_mst` "; 
		return $conn->getResultArray($sqlShowEnq);		
	}
function showVend($conn)
	{
		$sqlShowVend = "select `vend_id`,`vendor_name`,`vendor_cmp`,`cat_id` from  `vendor_mst` where `deleted_at` = '0000-00-00 00:00:00'  "; 
		return $conn->getResultArray($sqlShowVend);	
	}
function showStaff($conn)
	{
		$sqlShowStaff = "select `staff_id`,`emp_id`,`first_name`,`last_name`,`email`,`mobile`,`relative1`,`relative2`,`password`,`staff_type` from  staff_mst where `staff_type`= 'staff' or staff_type = 'admin' "; 
		return $conn->getResultArray($sqlShowStaff);	
	}
function showAllEquipment($conn)
	{
		$sqlShowEquipment = "select `eq_id`,`eq_name`,`serial_no`,`model_no`,`category_id`,`purchase_date`,`purchase_from`,`price`,`remark` from  `equipment_mst` where `deleted_at` = '0000-00-00 00:00:00' "; 
		return $conn->getResultArray($sqlShowEquipment);	
	}
function showEqupDrp($conn)
	{
		$sqlShowEquipment1 = "select `eq_id`,`eq_name`,`price` from  `equipment_mst` where `deleted_at` = '0000-00-00 00:00:00' "; 
		return $conn->getResultArray($sqlShowEquipment1);	
	}
function showStaffDrp($conn)
	{
		$sqlShowStaffDrp = "select `staff_id`,`first_name` from  staff_mst where `staff_type`= 'staff' "; 
		return $conn->getResultArray($sqlShowStaffDrp);	
	}
function showEventDetail($conn)
	{
		$sqlEventDetail = "select `event_id`,`event_name`,`client_name`,`client_cmp`,`client_email`,`client_work_mob`,`client_home_mob`,`from_date`,`to_date`,`invoice`,`status` ,`client_charges`,`client_paid_amt`,`inv_file_name`,`bill_no`,`fp_no`,`payment_status`,`service_tax_amt`,`total_amt`,`service_tax_rate` from  `event_mst` where `status` != 'enquiry' and deleted_at = '0000-00-00 00:00:00' "; 
		return $conn->getResultArray($sqlEventDetail);	
	}								
function searchEventDetail($conn,$where)
	{
		$sqlEventDetail = "select `event_id`,`event_name`,`client_name`,`client_cmp`,`client_email`,`client_work_mob`,`client_home_mob`,`from_date`,`to_date`,`invoice`,`status` ,`client_charges`,`client_paid_amt`,`inv_file_name`,`bill_no`,`fp_no`,`payment_status`,`service_tax_amt`,`total_amt`,`service_tax_rate`,`cmp_id` from  `event_mst` where" .$where." and `status` != 'enquiry' and deleted_at = '0000-00-00 00:00:00' "; 
		return $conn->getResultArray($sqlEventDetail);	
	}
function searchEventAll($conn,$where)
	{
		$sqlEventDetail = "select `event_id`,`event_name`,`client_name`,`client_cmp`,`client_email`,`client_work_mob`,`client_home_mob`,`from_date`,`to_date`,`invoice`,`status` ,`client_charges`,`client_paid_amt`,`inv_file_name`,`bill_no`,`fp_no`,`payment_status`,`service_tax_amt`,`total_amt`,`service_tax_rate`,`cmp_id` from  `event_mst` where" .$where." and `status` != 'enquiry' and deleted_at = '0000-00-00 00:00:00' "; 
		return $conn->getResultArray($sqlEventDetail);	
	}
function searchEventNew($conn,$where)
	{
		$sqlEventDetail = "select `event_id`,`event_name`,`client_name`,`client_cmp`,`client_email`,`client_work_mob`,`client_home_mob`,`from_date`,`to_date`,`invoice`,`status` ,`client_charges`,`client_paid_amt`,`inv_file_name`,`bill_no`,`fp_no`,`payment_status`,`service_tax_amt`,`total_amt`,`service_tax_rate`,`cmp_id` from  `event_mst` where" .$where." and `status` == 'new' and deleted_at = '0000-00-00 00:00:00' "; 
		return $conn->getResultArray($sqlEventDetail);	
	}
function searchEventUpc($conn,$where)
	{
		$sqlEventDetail = "select `event_id`,`event_name`,`client_name`,`client_cmp`,`client_email`,`client_work_mob`,`client_home_mob`,`from_date`,`to_date`,`invoice`,`status` ,`client_charges`,`client_paid_amt`,`inv_file_name`,`bill_no`,`fp_no`,`payment_status`,`service_tax_amt`,`total_amt`,`service_tax_rate`,`cmp_id` from  `event_mst` where" .$where." and `status` == 'upcoming' and deleted_at = '0000-00-00 00:00:00' "; 
		return $conn->getResultArray($sqlEventDetail);	
	}
function searchEventCom($conn,$where)
	{
		$sqlEventDetail = "select `event_id`,`event_name`,`client_name`,`client_cmp`,`client_email`,`client_work_mob`,`client_home_mob`,`from_date`,`to_date`,`invoice`,`status` ,`client_charges`,`client_paid_amt`,`inv_file_name`,`bill_no`,`fp_no`,`payment_status`,`service_tax_amt`,`total_amt`,`service_tax_rate`,`cmp_id` from  `event_mst` where" .$where." and `status` != 'completed' and deleted_at = '0000-00-00 00:00:00' "; 
		return $conn->getResultArray($sqlEventDetail);	
	}	
function showEventEnquiry($conn)
	{
		$sqlEventEnquiry = "select `event_id`,`event_name`,`client_name`,`client_cmp`,`client_email`,`client_work_mob`,`client_home_mob`,`from_date`,`to_date`,`invoice`,`status` ,`client_charges`,`client_paid_amt`,`inv_file_name`,`bill_no`,`fp_no`,`payment_status`,`service_tax_amt`,`total_amt`,`service_tax_rate` from  `event_mst` where `status` = 'enquiry' and deleted_at = '0000-00-00 00:00:00' "; 
		return $conn->getResultArray($sqlEventEnquiry);	
	}

function showEventDataDet($conn,$id)
	{
		$sqlEventDataDetail = "select `event_name`,`client_name`,`client_email`,`status` from  `event_mst` where `event_id` = '".$id."' "; 
		return $conn->getResultArray($sqlEventDataDetail);	
	}	
function showNew($conn)
	{
		$sqlEventNewStatus = "select `event_id`,`event_name`,`client_name`,`client_cmp`,`client_email`,`client_work_mob`,`client_home_mob`,`from_date`,`to_date`,`invoice`,`status` ,`client_charges`,`client_paid_amt`,`inv_file_name`,`bill_no`,`fp_no`,`payment_status`,`service_tax_amt`,`total_amt`,`service_tax_rate` from  `event_mst` where `status` = 'new' and  deleted_at = '0000-00-00 00:00:00' "; 
		return $conn->getResultArray($sqlEventNewStatus);	
	}
function showAll($conn)
	{
		$sqlEventAllStatus = "select `event_id`,`event_name`,`client_name`,`client_cmp`,`client_email`,`client_work_mob`,`client_home_mob`,`from_date`,`to_date`,`invoice`,`status` ,`client_charges`,`client_paid_amt`,`inv_file_name`,`bill_no`,`fp_no`,`payment_status`,`service_tax_amt`,`total_amt`,`service_tax_rate` from  `event_mst` where `status` != 'enquiry' and deleted_at = '0000-00-00 00:00:00' order by `from_date` DESC "; 
		return $conn->getResultArray($sqlEventAllStatus);	
	}
function showUpcoming($conn)
	{
		$sqlEventUpcomingStatus = "select `event_id`,`event_name`,`client_name`,`client_cmp`,`client_email`,`client_work_mob`,`client_home_mob`,`from_date`,`to_date`,`invoice`,`status` ,`client_charges`,`client_paid_amt`,`inv_file_name`,`bill_no`,`fp_no`,`payment_status`,`service_tax_amt`,`total_amt`,`service_tax_rate` from  `event_mst` where `status` = 'upcoming' and  deleted_at = '0000-00-00 00:00:00' "; 
		return $conn->getResultArray($sqlEventUpcomingStatus);	
	}
function showCompleted($conn)
	{
		$sqlEventCompletedStatus = "select `event_id`,`event_name`,`client_name`,`client_cmp`,`client_email`,`client_work_mob`,`client_home_mob`,`from_date`,`to_date`,`invoice`,`status` ,`client_charges`,`client_paid_amt`,`inv_file_name`,`bill_no`,`fp_no`,`payment_status`,`service_tax_amt`,`total_amt`,`service_tax_rate` from  `event_mst` where `status` = 'completed' and  deleted_at = '0000-00-00 00:00:00' "; 
		return $conn->getResultArray($sqlEventCompletedStatus);	
	}
function showEqpdtl($conn,$event_plc_dtl)
	{
		$sqlShowEventEqpDtl = "select eq_name from `event_equipment_dtl` eed inner join equipment_mst em on eed.equipment_id = em.eq_id where `event_places_id` = '".$event_plc_dtl."' "; 
		return $conn->getResultArray($sqlShowEventEqpDtl);	
	}

function showstfdtl($conn,$event_plc_dtl_stf)
	{
		$sqlShowEventStfDtl = "select sm.first_name from `event_staff_dtl` esd inner join staff_mst sm on esd.staff_id = sm.staff_id where `event_places_id` = '".$event_plc_dtl_stf."' "; 
		return $conn->getResultArray($sqlShowEventStfDtl);	
	}
function showpaidtrn($conn,$epid)
	{
		$sqlShowEventPaidTrn = "select `payment_date`,`event_id`,`client_paid_amt`,`payment_mode`,`cheque_no`,`bank_name`,`trn_type` from `event_client_payment_trn` where `event_id` = '".$epid."' "; 
		return $conn->getResultArray($sqlShowEventPaidTrn);	
	}
function showTotPaidTrn($conn,$etpid)
	{
		$sqlShowTotEventPaidTrn = "select sum(`client_paid_amt`) as `paid_amt` from `event_client_payment_trn` where `event_id` = '".$etpid."' "; 
		return $conn->getResultArray($sqlShowTotEventPaidTrn);	
	}
function show_ClientCharge_ClientPaid($conn,$setpid)
	{
		$sqlShowClPaid = "select `total_amt`,`client_paid_amt` from `event_mst` where `event_id` = '".$setpid."' "; 
		return $conn->getResultArray($sqlShowClPaid);	
	}
function showClientPaidAmt($conn)
	{
		$sqlClPaidAmt = "select `event_id`,`event_name`,`client_name`,`client_work_mob`,`client_charges`,`client_paid_amt`,`client_discount_amt` from `event_mst` where `payment_status` = 'Paid' and `status` != 'enquiry' "; 
		return $conn->getResultArray($sqlClPaidAmt);	
	}
function showClientUnpaidAmt($conn)
	{
		$sqlClPaidAmt = "select `event_id`,`event_name`,`client_name`,`client_work_mob`,`client_charges`,`client_paid_amt` from `event_mst` where `payment_status` = 'Unpaid' and `status` != 'enquiry' "; 
		return $conn->getResultArray($sqlClPaidAmt);	
	}
function showCatInEqp($conn)
	{
		$sqlShowCatInEqp = "select `cat_id`,`cat_name` from  `eq_category_mst` where `deleted_at` = '0000-00-00 00:00:00' order by `cat_name` "; 
		return $conn->getResultArray($sqlShowCatInEqp);		
	}
function showEventPlacesDetail($conn,$epdid)
	{
		$sqlShowPlacesDtl = "SELECT `event_places_id`,`event_id`,`event_vennue`,`event_hall`,`event_ld_mark`,`event_date`,`event_to_date` FROM event_places_dtl where `event_id` = '".$epdid."' "; 
		return $conn->getResultArray($sqlShowPlacesDtl);	
	}
function showVendName($conn)
	{
		$sqlShowVend = "select `vend_id`,`vendor_name` from  `vendor_mst` where `deleted_at` = '0000-00-00 00:00:00' order by `vendor_name` "; 
		return $conn->getResultArray($sqlShowVend);		
	}
	
function showVendSel($conn,$eventplid)
	{
		$sqlShowSelVend = "select vm.vendor_name from vendor_mst vm inner join event_vendor_dtl evd on vm.vend_id = evd.vend_id where evd.event_places_id = '".$eventplid."' "; 
		return $conn->getResultArray($sqlShowSelVend);		
	}
	
function showvendpaidtrn($conn,$eveid)
	{
		$sqlShowEVend = "select vm.vendor_name,vm.vendor_cmp,vm.cat_id,evd.event_places_id,evd.vend_id,evd.vendor_charges,evd.vendor_paid_amt,evd.vendor_paid_status,evd.event_vendor_id from vendor_mst vm inner join event_vendor_dtl evd on vm.vend_id = evd.vend_id where evd.event_id = '".$eveid."' order by vm.vendor_name "; 
		return $conn->getResultArray($sqlShowEVend);		
	}
function showEventVendpaidtrn($conn,$txtevent_vend_id,$txtvend_evnt_id)
	{
		$sqlShowEVend = "select `vd_payment_id`,`event_id`,`event_vendor_id`,`payment_date`,`payment_mode`,`vend_bank_name`,`vend_cheque_no`,`paid_amt` from event_vend_payment_trn where `event_vendor_id` = '".$txtevent_vend_id."' and `event_id` = '".$txtvend_evnt_id."' "; 
		return $conn->getResultArray($sqlShowEVend);		
	}
	
	
	
	
function show_VendCharge_ClientPaid($conn,$setvpid)
	{
		$sqlShowVdPaid = "select `vendor_charges`,`vendor_paid_amt` from `event_vendor_dtl` where `event_vendor_id` = '".$setvpid."' "; 
		return $conn->getResultArray($sqlShowVdPaid);	
	}
function showTotPaidTrnVd($conn,$vetpid)
	{
		$sqlShowTotEventPaidTrnVd = "select sum(`paid_amt`) as `paid_amt` from `event_vend_payment_trn` where `event_vendor_id` = '".$vetpid."' "; 
		return $conn->getResultArray($sqlShowTotEventPaidTrnVd);	
	}
	
	
function showVendorPaidAmt($conn)
	{
		$sqlVdPaidAmt = "select evd.event_vendor_id,evd.event_id,evd.event_places_id,evd.vend_id,vm.vendor_name,vm.vendor_cmp,evd.vendor_charges,evd.vendor_paid_amt,evd.vendor_paid_status  from event_vendor_dtl evd inner join vendor_mst vm on evd.vend_id = vm.vend_id where evd.vendor_paid_status = 'paid'" ;
		return $conn->getResultArray($sqlVdPaidAmt);	
	}
function showVendorUnPaidAmt($conn)
	{
		$sqlVdUnPaidAmt = "select evd.event_vendor_id,evd.event_id,evd.event_places_id,evd.vend_id,vm.vendor_name,vm.vendor_cmp,evd.vendor_charges,evd.vendor_paid_amt,evd.vendor_paid_status  from event_vendor_dtl evd inner join vendor_mst vm on evd.vend_id = vm.vend_id where evd.vendor_paid_status = 'unpaid'"; 
		return $conn->getResultArray($sqlVdUnPaidAmt);	
	}
function showCmp($conn)
	{
		$sqlShowCmp = "select `cmp_id`,`cmp_name`,`cmp_reg_no` from  `company_mst`  where `deleted_at` = '0000-00-00 00:00:00' order by `cmp_name` "; 
		return $conn->getResultArray($sqlShowCmp);		
	}	
function showCmpDrp($conn)
	{
		$sqlShowCmpDrp = "select `cmp_id`,`cmp_name` from  `company_mst` where `deleted_at` = '0000-00-00 00:00:00' order by `cmp_name` "; 
		return $conn->getResultArray($sqlShowCmpDrp);		
	}
	
function login($conn,$userid,$userpass)
	{
		$sqlLogin = "select count(emp_id) as tot,`first_name`,`last_name` from  staff_mst where `emp_id` = '".$userid."' && `password` = '".$userpass."'  "; 
		return $conn->getResultArray($sqlLogin);		
	}
function showProfile($conn)
	{
		$sqlProfile = "select `emp_id`,`first_name`,`last_name`,`email`,`mobile`,`add1`,`add2`,`city`,`state`,`zip`  from  staff_mst where `emp_id` = '".$_SESSION['USER_ID']."' "; 
		return $conn->getResultArray($sqlProfile);		
	}
	
function showInvName($conn,$eid)
	{
		$sqlshowInvName = "select `inv_file_name`,`fp_no`,`bill_no`,`client_charges`,`client_discount_amt`,`service_tax_rate`,`service_tax_amt`,`total_amt`,`client_paid_amt`  from  `event_mst` where `event_id` = '".$eid."' "; 
		return $conn->getResultArray($sqlshowInvName);		
	}
function showPdf($conn,$eid)
	{
		$sqlshowInvFile = "select `inv_file_name`  from  `event_client_invoice_dtl` where `event_id` = '".$eid."' "; 
		return $conn->getResultArray($sqlshowInvFile);		
	}
function showfullPdf($conn,$eid)
	{
		$sqlshowInvFile = "select `info_file_name`  from  `event_mst` where `event_id` = '".$eid."' "; 
		return $conn->getResultArray($sqlshowInvFile);		
	}
function showCntStatus($conn)
	{
		
		$sqlCntStatus = " SELECT 
				(SELECT COUNT(*) FROM event_mst WHERE status ='new' and  deleted_at = '0000-00-00 00:00:00' ) as new1,
				(SELECT COUNT(*) FROM event_mst WHERE status ='upcoming' and  deleted_at = '0000-00-00 00:00:00' ) as upcoming,
				(SELECT COUNT(*) FROM event_mst WHERE  status ='completed' and  deleted_at = '0000-00-00 00:00:00' ) as completed,
				(SELECT COUNT(`status`) FROM event_mst where status != 'enquiry' and  deleted_at = '0000-00-00 00:00:00'  ) as tot
			FROM event_mst limit 1 "; 
		return $conn->getResultArray($sqlCntStatus);		
	}
function showEqpPrice($conn,$eqid)
	{
		$sqlShowEquipment1 = "select `price` from  equipment_mst where `eq_id` = '".$eqid."' and `deleted_at` = '0000-00-00 00:00:00' "; 
		return $conn->getResultArray($sqlShowEquipment1);	
	}
function showPerm($conn)
	{
		$sqlshowPerm = "select `user_id`,`permission` from  `staff_permission` where `user_id` = '".$_SESSION['USER_ID']."' "; 
		return $conn->getResultArray($sqlshowPerm);	
	}

function showEqpRsDtl($conn,$event_id)
	{
		$sqlshowEqpRsDtl = "select em.eq_name,nepd.qty,nepd.rate,nepd.amount,nepd.length,nepd.width 
						from `new_event_places_dtl` nepd  inner join `equipment_mst` em 
						on nepd.eq_id = em.eq_id where nepd.event_id = '".$event_id."' "; 
		return $conn->getResultArray($sqlshowEqpRsDtl);	
	}
function showClientInv($conn)
	{
		$sqlshowClientInv = "select `event_id`,`event_name`,`client_name`,`client_work_mob`,`client_charges`,`client_paid_amt`,`inv_file_name` from `event_mst` where `inv_file_name` != '' and `status` != 'enquiry' and deleted_at = '0000-00-00 00:00:00' "; 
		return $conn->getResultArray($sqlshowClientInv);	
	}
	
function showTransDtl($conn)
	{
		$sqlTransDtl = "select `event_id`,`event_name`,`client_name`,`client_charges` from `event_mst` where `deleted_at` = '0000-00-00 00:00:00' and `status` != 'enquiry' "; 
		return $conn->getResultArray($sqlTransDtl);	
	}
function showTransVend($conn)
	{
		$sqlTransDtlVend = "select `event_id`,sum(vend_price) as vtot from new_event_places_dtl where vend_id != 0  GROUP BY `event_id`   "; 
		return $conn->getResultArray($sqlTransDtlVend);	
	}
	
function showAccNum($conn)
	{
		$sqlshowAccNum = " select sum(client_charges) as total , sum(client_paid_amt) as paid from `event_mst` "; 
		return $conn->getResultArray($sqlshowAccNum);	
	}
function showAccExp($conn)
	{
		$sqlshowAccNum = " select sum(vendor_charges) as total , sum(vendor_paid_amt) as paid from  `event_vendor_dtl` "; 
		return $conn->getResultArray($sqlshowAccNum);	
	}
function showRemainVAmt($conn,$evd_id)
	{
		$sqlshowRemainVAmt = "select (vendor_charges) - (vendor_paid_amt) as remain_amt  from `event_vendor_dtl` where `event_vendor_id` = '".$evd_id."' "; 
		return $conn->getResultArray($sqlshowRemainVAmt);	
	}
function showVUPDetail($conn,$evd_id)
	{
		$sqlshowVUPDetail = "select `event_id`,`event_places_id`,`vend_id`,`vendor_paid_status`,`vendor_charges`,(vendor_charges) - (vendor_paid_amt) as remain_amt  from `event_vendor_dtl` where `event_vendor_id` = '".$evd_id."' "; 
		return $conn->getResultArray($sqlshowVUPDetail);	
	}
function showExpCtg($conn)
	{
		$sqlshowExpCtg = " select `exp_cat_id`,`cat_name`,`cat_type`  from  `expence_cat_mst` "; 
		return $conn->getResultArray($sqlshowExpCtg);	
	}
function showEvent($conn)
	{
		$sqlshowEvent = " select `event_id`,`event_name`  from  `event_mst` "; 
		return $conn->getResultArray($sqlshowEvent);	
	}

	
	/*
	
select vm.vendor_name,vm.vendor_cmp,vm.cat_id,evd.event_places_id
from vendor_mst vm 
inner join event_vendor_dtl evd on vm.vend_id = evd.vend_id 
where evd.event_id = 86;	
	
function showCmpInfo($conn)
	{
		$sqlShowCmpInfo = "select `cmp_name`,`address`,`mobile`,`purchase_from`,`remark` from 
		cmp_info where `id` = 1 "; 
		return $conn->getResultArray($sqlShowCmpInfo);	
	}*/

// function insDesg($conn,$desgId,$designation)
// {
    // $sqlInsDesg = "INSERT INTO ".TABLE_M_DESG_MST." (DESG_ID,DESIGNATION) VALUES ('".$desgId."','".strtoupper($designation)."')"; 
    // return $conn->insertQuery($sqlInsDesg);
// }
?>