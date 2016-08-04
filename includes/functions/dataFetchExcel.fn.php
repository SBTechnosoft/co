<?php
$data = showUpDays($conn);
if(isset($data))
{
	$updy = $data[0]['upcoming_days'];
}
else
{
	$updy = 0;
}
//print_r($data);




define('NEW_EVENT_EXCEL', "select `event_id` as 'Order Id',`event_name` as 'Order Name',`client_name` as 'Client Name',
								`client_cmp` as 'Client Company',`client_email` as 'E-mail',`client_work_mob` as 'Mobile#',								
								`from_date` as 'Order Date',`client_charges` as 'Client Charge',`service_tax_rate` as 'S.Rate',
								`service_tax_amt` as 'S.Tax',`total_amt` as 'Tot. Amount',`client_paid_amt` as 'Rec.Amount',
								`payment_status` as 'Payment Status' 
								from  `event_mst` 
								where  `to_date` > curdate()  and `deleted_at` = '0000-00-00 00:00:00'"
	);
								
define	('All_EVENT_EXCEL', 
			"select `event_id` as 'Order Id',`event_name` as 'Order Name',`client_name` as 'Client Name',
			`client_cmp` as 'Client Company',`client_email` as 'E-mail',`client_work_mob` as 'Mobile#',
			`from_date` as 'Order Date',`client_charges` as 'Client Charge',`service_tax_rate` as 'S. Rate',
			`service_tax_amt` as 'Service Tax',`total_amt` as 'Tot Amount',`client_paid_amt` as 'Rec. Amount',
			`payment_status` as 'Payment Status',`status` as 'Order Status' from  `event_mst` where `status` != 'enquiry' 
			and `deleted_at` = '0000-00-00 00:00:00' " 
		);
define	('COMPLETED_EVENT_EXCEL', "select `event_id` as 'Order Id',`event_name` as 'Order Name',`client_name` as 'Client Name',
								`client_cmp` as 'Client Company',`client_email` as 'E-mail',`client_work_mob` as 'Mobile#',								
								`from_date` as 'Order Date',`client_charges` as 'Client Charge',`service_tax_rate` as 'S.Rate',
								`service_tax_amt` as 'S.Tax',`total_amt` as 'Tot. Amount',`client_paid_amt` as 'Rec.Amount',
								`payment_status` as 'Payment Status' 
								from  `event_mst` 
								where  `to_date` < curdate() and status!='enquiry' and `deleted_at` = '0000-00-00 00:00:00' "
								
	);
define	('UPCOMING_EVENT_EXCEL', "select `event_id` as 'Order Id',`event_name` as 'Order Name',`client_name` as 'Client Name',
								`client_cmp` as 'Client Company',`client_email` as 'E-mail',`client_work_mob` as 'Mobile#',								
								`from_date` as 'Order Date',`client_charges` as 'Client Charge',`service_tax_rate` as 'S.Rate',
								`service_tax_amt` as 'S.Tax',`total_amt` as 'Tot. Amount',`client_paid_amt` as 'Rec.Amount',
								`payment_status` as 'Payment Status'
									from `event_mst`
									where  `from_date` between curdate() and date_add(curdate(),INTERVAL ".$updy." DAY)  and 
									`deleted_at` = '0000-00-00 00:00:00' "
	);
define	('PAID_EVENT_EXCEL', "select `event_id` as 'Order ID',`event_name` as 'Order Name',`client_name` as 'Client Name',`client_work_mob` as 'Mobile#',`client_cmp` as 'Client Company',`client_email` as 'Client Email',
							`client_charges` as 'Client Charge',`client_discount_amt` as 'Discount',`service_tax_amt` As 'Service Tax',`total_amt` as 'Amount',`client_paid_amt` as 'Paid Amount'
							from `event_mst` 
							where `payment_status` = 'Paid' and `status` != 'enquiry'  
							order by event_id "
	);
define	('UNPAID_EVENT_EXCEL', "select `event_id` as 'Order Id',`event_name` as 'Order Name',`client_name` as 'Client Name',`client_work_mob` as 'Mobile #',`client_cmp` as 'Client Company',`client_email` as 'E-mail',
								`client_charges` as 'Client Charge',`client_discount_amt` as 'Discount',`service_tax_amt` as 'Service Tax',`total_amt` as 'Amount',`client_paid_amt` as 'Client Paid',(`total_amt` - `client_paid_amt`) as 'Remain Amount'
								from `event_mst` 
								where `payment_status` = 'Unpaid' and `status` != 'enquiry' 
								order by `event_id` "
	);
define	('VPAID_EVENT_EXCEL', "select evd.event_id as 'Order Id',vm.vendor_name as 'Vendor Name',vm.vendor_cmp as 'Company Name',
							evd.vendor_charges as 'Vendor Charge',evd.vendor_paid_amt as 'Vendor Paid'
							from event_vendor_dtl evd 
							inner join vendor_mst vm on evd.vend_id = vm.vend_id 
							where evd.vendor_paid_status = 'paid' "
	);
define	('VUNPAID_EVENT_EXCEL', "select evd.event_id as 'Order Id',vm.vendor_name as 'Vendor Name',
								vm.vendor_cmp as 'Company Name',evd.vendor_charges as 'Vendor Charge',
								evd.vendor_paid_amt as 'Vendor Paid',(evd.vendor_charges - evd.vendor_paid_amt) as 'Remainig Amount'  
								from event_vendor_dtl evd 
								inner join vendor_mst vm on evd.vend_id = vm.vend_id 
								where evd.vendor_paid_status = 'unpaid'"
	);
define	('TRAN_EVENT_EXCEL',"select event_id as 'Order ID' ,'Event Expense',event_name as 'Order Name',client_name  as 'Client Name',from_date as 'Date',null, 		
							client_charges as 'Client Charge',client_discount_amt as 'Discount',service_tax_rate as 'Tax %', service_tax_amt as 'Service Tax', total_amt as 'Income',client_paid_amt as 'Client Paid',(total_amt - client_paid_amt) as 'Client Unpaid', vendor_charges as 'Expence',
							(
								select sum(amount) 
								from expence_dtl 
								where expence_dtl.event_id=event_mst.event_id
							) as 'Other Exp'
							from event_mst where `status` != 'enquiry' and deleted_at = '0000-00-00 00:00:00' 
							UNION
							select event_id as 'Order ID','General Expense',NULL,NULL,exp_date as 'Date',sm.first_name as 'Exp.By',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Other Exp'
							from expence_dtl exd
							inner join staff_mst sm on sm.staff_id = exd.exp_by
							where event_id = 0"
	);
define	('ENQUIRY_EVENT_EXCEL',
				"select `event_id` as 'Order Id',`event_name` as 'Order Name',`client_name` as 'Client Name',`client_cmp` as 'Client Company',
				`client_email` as 'E-mail',`client_work_mob` as 'Mobile#',`from_date` as 'Order Date',
				`client_charges` as 'Client Charge',`service_tax_rate` as 'Tax Rate',`service_tax_amt` as 'S. Tax',`total_amt` as 'Amount'
				from  `event_mst` 
				where `status` = 'enquiry' and deleted_at = '0000-00-00 00:00:00' "
	);

?>