<?php
	include_once('./header.php');
	//include_once('./footer.php');

// $eventnm = $_POST['txteventnm'];
// $eventds = $_POST['txteventds'];
// $clnm = $_POST['txtclnm'];
// $clcmp = $_POST['txtclcmp'];
// $clemail = $_POST['txtclemail'];
// $workmob = $_POST['txtworkmob'];
// $hmmob = $_POST['txthmmob'];
// $mob = $_POST['txtmob'];


// $vennue = $_POST['txtvenue'];
// $ldmark = $_POST['txtldmark'];
// $fromdate = $_POST['txtfromdate'];
// $todate = $_POST['txttodate'];

// foreach($_POST['eqp'] as $eqp_id)
	// {
       // echo "Cheked Product is:= ".$eqp_id." <br>";
    // }
// foreach($_POST['stf'] as $stf_id)
	// {
        // echo "Cheked Product is:= ".$stf_id." <br>";
    // }
// echo "hi divyesh";
// exit;	
	
if(isset($_POST['showtax']))
	{	
		$q = mysql_query("SELECT `service_tax` from setting ");
		$row = mysql_fetch_array($q);
		header("Content-type: text/x-json");
		echo json_encode($row);
		exit();	
		
	}
	
	
	if(isset($_POST['saverecord']))
	{	
				
		// inserted in event_mst
		$cur_date = date('Y-m-d H:i:s');
		$tot_amt = $_POST['gtot'];
		$paid_amt = $_POST['txtpaid'];
		if($tot_amt - $paid_amt != 0)
		{
			$pay_status = "Unpaid";
		}
		else
		{
			$pay_status = "Paid";
		}
		
		insertEventAdd($conn,$_POST['txteventnm'],$_POST['txteventds'],$_POST['txtclnm'],$_POST['txtclcmp'],$_POST['txtclemail'],$_POST['txtworkmob'],$_POST['txthmmob'],$_POST['txtmob'],$_POST['txtcharge'],$_POST['txtpaid'],$_POST['txtfromdt'],$_POST['txttodt'],$_POST['status'],$cur_date,$pay_status,$_POST['drpcmpnm'],$_POST['taxmode'],$_POST['txtbillno'],$_POST['txtfpno'],$_POST['tax'],$_POST['gtot'],$_POST['txtstax'],$_POST['txtdisc'],$_POST['drpctgnm'],$_POST['drpsubctgnm'],$_POST['txtjobdata1'],$_POST['txtjobdata2']);
		
		//select last rescord inserted from event_mst
		//select event_id from event_mst order by event_id desc limit 1;
		
		$getdata = mysql_query("SELECT `event_id` FROM event_mst order by `event_id` desc  limit 1");
		$row = mysql_fetch_array($getdata);
		$eventlast_id = $row['event_id'];
		
		//now inserted in event_places_id
		
		//here is loop coming for multiple record//
		for($i=0;$i<count($_POST['txtvenue']); $i++)
		{
			insertEventPlaces($conn,$eventlast_id,$_POST['txtvenue'][$i],$_POST['txthall'][$i],$_POST['txtldmark'][$i],$_POST['txtfromdate'][$i],$_POST['txttodate'][$i]);
			
			//select last record inserted from event_places_dtl
			
			$getdata = mysql_query("SELECT `event_places_id`,`event_id` FROM `event_places_dtl` order by `event_places_id` desc  limit 1");
			$row = mysql_fetch_array($getdata);
			
			$eventplaces_id = $row['event_places_id'];
			$event_id_pdtl = $row['event_id'];
			
			//insert data into event_equipment_dtl
			
			foreach($_POST['eqp'] as $eqp_id)
				{
					// echo "Cheked Product is:= ".$eqp_id." <br>";			
					insertEqpDrp ($conn,$eventplaces_id,$event_id_pdtl,$eqp_id);
				}
			// insert data into staff_dtl 
			
			foreach($_POST['stf'] as $stf_id)
				{
					// echo "Cheked Product is:= ".$eqp_id." <br>";			
					insertStfDrp ($conn,$eventplaces_id,$event_id_pdtl,$stf_id);
				}
			//insert data into new eventplaces detail...
			for($j=0;$j<count($_POST['txtieqp']);$j++)
			{
				insNewEventPlac($conn,$event_id_pdtl,$eventplaces_id,$_POST['txtieqp'][$j],$_POST['txtirate'][$j],$_POST['txtiqty'][$j],$_POST['txtiamt'][$j],$_POST['txtistf'][$j],$_POST['txtivend'][$j],$_POST['txtivendprice'][$j],$_POST['txtiremark'][$j],$_POST['txtilength'][$j],$_POST['txtiwidth'][$j]);
			}
		}
			//insert the record in the event_client_payment_trn
			$client_charge = $_POST['txtcharge'];
			$cur_date = date('Ymd');
			if($_POST['txtpaid'] != '' && $_POST['txtpaid'] != 0 )
			{
				insertPaymentTrn($conn,$event_id_pdtl,$cur_date,$_POST['txtpaid'],$_POST['paymentMode'],$_POST['txtbanknm'],$_POST['txtchkno']);
			}
		
	}


	//insertion using simple form post method.
	
	if(isset($_POST['txteventnm']))
	{	
		$hdn_ary = $_POST['hdn'];	
		
		
		// inserted in event_mst
		$cur_date = date('Y-m-d H:i:s');
		
		//$tot_amt = $_POST['gtot'];
		
		//temporory data
		$tot_amt = $_POST['txtcharge'];
		
		$paid_amt = $_POST['txtpaid'];
		
		
		
		if($tot_amt - $paid_amt != 0)
		{
			$pay_status = "Unpaid";
		}
		else
		{
			$pay_status = "Paid";
		}
		$estatus = "new";
		//need chng on gtot value
		$gtot = $_POST['txtcharge'];
		insertEventAdd($conn,$_POST['txteventnm'],$_POST['txteventds'],$_POST['txtclnm'],$_POST['txtclcmp'],$_POST['txtclemail'],$_POST['txtworkmob'],$_POST['txthmmob'],$_POST['txtmob'],$_POST['txtcharge'],$_POST['txtpaid'],$_POST['txtfromdt'],$_POST['txttodt'],$estatus,$cur_date,$pay_status,$_POST['drpcmpnm'],$_POST['taxmode'],$_POST['txtbillno'],$_POST['txtfpno'],$_POST['tax'],$gtot,$_POST['txtstax'],$_POST['txtdisc'],$_POST['drpctgnm'],$_POST['drpsubctgnm'],$_POST['txtjobdata1'],$_POST['txtjobdata2']);
		
		//select last record inserted from event_mst	
		$eventlast_id = mysql_insert_id();;
		//now inserted in event_places_id
		
		
		//here is loop coming for multiple record//
		foreach($hdn_ary as $key => $value)
		{
					  
		  if(is_array($value))
		  {
							
				// echo $value['txtvenue']."</br>";
				// echo $value['txthall']."</br>";
				// echo $value['txtldmark']."</br>";
				// echo $value['txtfromdate']."</br>";
				// echo $value['txttodate']."</br>";			
				
				
			//insertion work start
			
			insertEventPlaces($conn,$eventlast_id, $value['txtvenue'],$value['txthall'],$value['txtldmark'],$value['txtfromdate'],$value['txttodate']);			
			$last_vplc_id  =  mysql_insert_id();			
			//insertion of event_place over stop
				
			foreach($value as $key => $subvalue)
			{
			
				if(is_array($subvalue))
				{
					
					// echo $subvalue['txtieqp'];
					// echo $subvalue['txtieqpnm'];
					// echo $subvalue['txtirate'];
					// echo $subvalue['txtiqty'];
					// echo $subvalue['txtiamt'];
					// echo $subvalue['txtistf'];
					// echo $subvalue['txtistfnm'];
					// echo $subvalue['txtivend'];
					// echo $subvalue['txtivendnm'];
					// echo $subvalue['txtivendprice'];
					// echo $subvalue['txtiremark'];
					// echo $subvalue['txtilength'];
					// echo $subvalue['txtiwidth']."</br>";
					insNewEventPlac($conn,$eventlast_id,$last_vplc_id,$subvalue['txtieqp'],$subvalue['txtirate'],$subvalue['txtiqty'],$subvalue['txtiamt'],$subvalue['txtistf'],$subvalue['txtivend'],$subvalue['txtivendprice'],$subvalue['txtiremark'],$subvalue['txtilength'],$subvalue['txtiwidth']);	
					
				}
				else
				{				
					
				}				
			}					
		  }
		  
		}
		
		$client_charge = $_POST['txtcharge'];
		$cur_date = date('Ymd');
		if($_POST['txtpaid'] != '' && $_POST['txtpaid'] != 0 )
		{
			insertPaymentTrn($conn,$eventlast_id,$cur_date,$_POST['txtpaid'],$_POST['paymentMode'],$_POST['txtbanknm'],$_POST['txtchkno']);
		}
		
		
		header ('location:'.HTTP_SERVER.'index.php?url=EVD');		
	}
	
	if(isset($_POST['showEqp']))
	{	
		$data = showEqupDrp($conn);
		$showEqpCnt = count($data);	
		for($i=0;$i<$showEqpCnt;$i++)
		{
		?>
			<input type="checkbox" id="eqp" name="eqp" value="<?php echo $data[$i]['eq_id'];?>"/> <?php echo $data[$i]['eq_name']." (Rs.".$data[$i]['price']."/-)";?> </br>
		<?php	
		}
		
	}
	if(isset($_POST['showStf']))
	{	
		$data = showStaffDrp($conn);
		$showStaffCnt = count($data);	
		for($i=0;$i<$showStaffCnt;$i++)
		{
		?>
			<input type="checkbox" id="stf" name="stf" value="<?php echo $data[$i]['staff_id'];?>"/> <?php echo $data[$i]['first_name'];?></br>
		<?php	
		}
		
	}
	if(isset($_POST['showCmp']))
	{	
		$data = showCmpDrp($conn);
		$showCmpCnt = count($data);
		?>
		<option select="selected" value="">Select Company</option>
		<?php
		for($i=0;$i<$showCmpCnt;$i++)
		{
		?>
			<option  value="<?php echo $data[$i]['cmp_id'];?>"><?php echo $data[$i]['cmp_name'];?></option>
		<?php	
		}
		
	}
	
	//showctg js is showCtgDrp.js and its include the subcatg also
	if(isset($_POST['showCtg']))
	{	
		$data = showCtgDrpNew($conn);
		$showCtgCnt = count($data);
		?>
		<option select="selected" value="">Select Company</option>
		<?php
		for($i=0;$i<$showCtgCnt;$i++)
		{
		?>
			<option  value="<?php echo $data[$i]['cat_id'];?>"><?php echo $data[$i]['cat_name'];?></option>
		<?php	
		}
		
	}
	
	//showsubctg js is showCtgDrp.js 
	if(isset($_POST['showsubctg']))
	{	
		$data = showSubCtgDrpNew($conn,$_POST['ctgid']);
		$showsubCtgCnt = count($data);
		?>
		<option select="selected" value="">Select Company</option>
		<?php
		for($i=0;$i<$showsubCtgCnt;$i++)
		{
		?>
			<option  value="<?php echo $data[$i]['as_id'];?>"><?php echo $data[$i]['as_name'];?></option>
		<?php	
		}
		
	}
	
	
	
	if(isset($_POST['shownewEqp']))
	{	
		$data = showEqupDrp($conn);
		$showEqpCnt = count($data);
	?>
		<option select= "selected" value=""> Select the Equpment </option>
	<?php
		for($i=0;$i<$showEqpCnt;$i++)		
		{
		?>
			<option  value="<?php echo $data[$i]['eq_id'];?>"><?php echo $data[$i]['eq_name'];?></option>
		<?php	
		}		
	}
	if(isset($_POST['shownewStf']))
	{	
		$data = showStaffDrp($conn);
		$showStaffCnt = count($data);
	?>
		<option select= "selected" value=""> Select Staff </option>
	<?php
		for($i=0;$i<$showStaffCnt;$i++)
		{
		?>
			<option  value="<?php echo $data[$i]['staff_id'];?>"><?php echo $data[$i]['first_name'];?></option>
		<?php	
		}		
	}
	if(isset($_POST['shownewVend']))
	{	
		$data = showVendName($conn);
		$showVendCnt = count($data);
		?>
			<option select= "selected" value=""> Select Vendor </option>
		<?php
		
		for($i=0;$i<$showVendCnt;$i++)
		{
		?>
			<option  value="<?php echo $data[$i]['vend_id'];?>"><?php echo $data[$i]['vendor_name'];?></option>
		<?php	
		}		
	}
	if(isset($_POST['showeqpprice']))
	{			
		$q = mysql_query("select `price`,`price_type` from  equipment_mst where `eq_id` = '".$_POST['eqpid']."' ");
		$row = mysql_fetch_array($q);
		header("Content-type: text/x-json");
		echo json_encode($row);
		exit();	
	}
?>