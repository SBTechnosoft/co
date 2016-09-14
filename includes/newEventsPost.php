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
			insertEventPlaces($conn,$eventlast_id,$_POST['txtvenue'][$i],$_POST['txthall'][$i],$_POST['txtldmark'][$i],$_POST['txtfunction'][$i],$_POST['txtfromdate'][$i],$_POST['txttodate'][$i]);
			
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
		$evnt_nm = $_POST['txteventnm'];
		if($_POST['taxmode'] == 'Yes')
		{
			if($_POST['txtdisc']=='')
			{
				$tax  =	round(($_POST['txtcharge'])* ($_POST['txtstax'])/100);				
				$gtot =  ($_POST['txtcharge'] ) + ($tax) ;				
			}
			else
			{
				$tax =  round(((($_POST['txtcharge']) - ($_POST['txtdisc'])) * ($_POST['txtstax']))/100);				
				$gtot =  (($_POST['txtcharge']) - ($_POST['txtdisc']) ) + ($tax) ;
			}
		}
		else
		{
			if($_POST['txtdisc'] == '')
			{
				$gtot = ($_POST['txtcharge']);
			}
			else
			{
				
				$gtot =  (($_POST['txtcharge']) - ($_POST['txtdisc']) )  ;
				
			}
				
			
		}
		
		
		$hdn_ary = $_POST['hdn'];
		// echo "<pre>";
		// print_r($hdn_ary);
		// echo "</pre>";
		
		
		//exit;
		
		// inserted in event_mst
		$cur_date = date('Y-m-d H:i:s');
		
		//$tot_amt = $_POST['gtot'];
		
		//temporory data
		//$tot_amt = $_POST['txtcharge'];
		
		$tot_amt = $gtot;
		
		$paid_amt = $_POST['txtpaid'];
		
		
		
		if($tot_amt - $paid_amt != 0)
		{
			$pay_status = "Unpaid";
		}
		else
		{
			$pay_status = "Paid";
		}
		
		if($_POST['txtpaid']=='')
		{
			$txtpaid = 0;
		}
		else
		{
			$txtpaid = $_POST['txtpaid'];
		}
		$estatus = $_POST['order_type'];
		//need chng on gtot value
		$gtot = $tot_amt;
		$vtot = $_POST['txtvcharge'];
		
		$frdt = $_POST['txtfromdt'];
		$trdt = $_POST['txttodt'];
		
		$nfrdt = date_format(new DateTime($frdt),'Y-m-d H:i:s');
		$ntrdt = date_format(new DateTime($trdt),'Y-m-d H:i:s');
		
		$date1=date_create($_POST['txtfromdt']);
		$sdate =  date_format($date1,DATE_ISO8601);
		
		$date2=date_create($_POST['txttodt']);
		$edate =  date_format($date2,DATE_ISO8601);
		
		@insertEventAdd($conn,$_POST['txteventnm'],$_POST['txteventds'],$_POST['txtclnm'],$_POST['txtclcmp'],$_POST['txtclemail'],$_POST['txtworkmob'],$_POST['txthmmob'],$_POST['txtmob'],$_POST['txtcharge'],$_POST['txtpaid'],$nfrdt,$ntrdt,$estatus,$cur_date,$pay_status,$_POST['drpcmpnm'],$_POST['taxmode'],$_POST['txtbillno'],$_POST['txtfpno'],$tax,$gtot,$_POST['txtstax'],$_POST['txtdisc'],$_POST['drpctgnm'],$_POST['drpsubctgnm'],$_POST['txtjobdata1'],$_POST['txtjobdata2'],$vtot);
		
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
			$fromdt = $value['txtfromdate'];
			$tordt = $value['txttodate'];
			
			$nfromdt = date_format(new DateTime($fromdt),'Y-m-d H:i:s');
			$ntordt = date_format(new DateTime($tordt),'Y-m-d H:i:s');
			
			 insertEventPlaces($conn,$eventlast_id, $value['txtvenue'],$value['txthall'],$value['txtldmark'],$value['txtfunction'],$nfromdt,$ntordt);			
			 $last_vplc_id  =  mysql_insert_id();			
			
			//insertion of event_place over stop
				
			foreach($value as $key => $subvalue)
			{
			
				if(is_array($subvalue) && !empty($subvalue) )
				{									
					if(@is_array ($subvalue['equipment'])&& isset($subvalue['equipment']) && !empty($subvalue['equipment']))
					{
						// echo $subvalue['equipment']['txtieqp'];
						// echo $subvalue['equipment']['txtieqpnm'];
						// echo $subvalue['equipment']['txtirate'];
						// echo $subvalue['equipment']['txtiqty'];
						// echo $subvalue['equipment']['txtiamt'];
						// echo $subvalue['equipment']['txtistf'];
						// echo $subvalue['equipment']['txtistfnm'];
						// echo $subvalue['equipment']['txtivend'];
						// echo $subvalue['equipment']['txtivendnm'];
						// echo $subvalue['equipment']['txtivendprice'];
						// echo $subvalue['equipment']['txtiremark'];
						// echo $subvalue['equipment']['txtilength'];
						// echo $subvalue['equipment']['txtiwidth']."</br>";
						
						insNewEventPlac($conn,$eventlast_id,$last_vplc_id,$subvalue['equipment']['txtieqp'],$subvalue['equipment']['txtirate'],$subvalue['equipment']['txtiqty'],$subvalue['equipment']['txtiamt'],$subvalue['equipment']['txtistf'],$subvalue['equipment']['txtivend'],$subvalue['equipment']['txtivendprice'],$subvalue['equipment']['txtiremark'],$subvalue['equipment']['txtilength'],$subvalue['equipment']['txtiwidth']);	
						
					}
					 if(@is_array ($subvalue['resource']) && isset($subvalue['resource']) && !empty($subvalue['resource']))
					{
						// echo $subvalue['resource']['txtires'];
						// echo $subvalue['resource']['txtiresnm'];
						// echo $subvalue['resource']['txtiqty'];
						// echo $subvalue['resource']['txtirate'];
						// echo $subvalue['resource']['rtxtiamt']."</br>";
						insNewRes($conn,$eventlast_id,$last_vplc_id,$subvalue['resource']['txtires'],$subvalue['resource']['txtiresnm'],$subvalue['resource']['txtiqty'],$subvalue['resource']['txtirate'],$subvalue['resource']['rtxtiamt'],$subvalue['resource']['txtivend'],$subvalue['resource']['txtiresvendprice'],$subvalue['resource']['txtiremark']);
					}				
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
<<<<<<< HEAD
		}	
=======
		}
>>>>>>> a76782b0fe4489ccb97e61e4babd72472ea116e5
		if($_POST['order_type'] == 'enquiry')
		{
			header ('location:'.HTTP_SERVER.'index.php?url=ENR');
		}	
		else
		{
			header ('location:'.HTTP_SERVER.'index.php?url=EVD');
		}
<<<<<<< HEAD
				
=======
		?>
			<!--script src="../assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>      
			
			<script type="text/javascript">
				
				var now = new Date();
				today = now.toISOString();
				
				var twoHoursLater = new Date(now.getTime() + (2 * 1000 * 60 * 60));
				twoHoursLater = twoHoursLater.toISOString();

				
				var clientId = '998888557917-udke5p4to575koi31aboismo8gjvr1me.apps.googleusercontent.com';
				var apiKey = 'AIzaSyDrZMvRi0Csy68Rl0J56_AuEJLg91kO2Kk';

				
				var scopes = 'https://www.googleapis.com/auth/calendar';

				
				function handleClientLoad() {
					gapi.client.setApiKey(apiKey);
					window.setTimeout(checkAuth, 1);
				}

				function checkAuth() {
					gapi.auth.authorize({ client_id: clientId, scope: scopes, immediate: true }, handleAuthResult);
				}

				
				function handleAuthResult(authResult) {
					
					var resultPanel = document.getElementById('result-panel');
					var resultTitle = document.getElementById('result-title');

					if (authResult && !authResult.error) {
							
						resultPanel.className = resultPanel.className.replace(/(?:^|\s)panel-danger(?!\S)/g, '')	// remove red class
						resultPanel.className += ' panel-success'; 			// add green class
						resultTitle.innerHTML = 'Application Authorized'		// display 'authorized' text
						
						$("#txtEventDetails").attr("visibility", "visible");
					} else {													// otherwise, show button
						
						$("#txtEventDetails").attr("visibility", "hidden");
						
						resultPanel.className += ' panel-danger'; 			// make panel red
									
					}
				}

				
				function handleAuthClick(event) {
					gapi.auth.authorize({ client_id: clientId, scope: scopes, immediate: false }, handleAuthResult);
					return false;
				}	  
			</script>
			<script src="https://apis.google.com/js/client.js?onload=handleClientLoad" type="text/javascript"></script>
			
			<script>
				
				//Insert Event Function
				function insertEvent() {
					
						var evnt_name = '<?php echo $evnt_nm ; ?>';
						var sdt = '<?php echo  $sdate ; ?>';
						var edt = '<?php echo  $edate ; ?>';					
						alert('done');
						 
						var add_resource = {
							"summary": evnt_name,
							"start": {
								"dateTime":  sdt
							},
							"end": {
								"dateTime":  edt
							},
							"description":"done"
						};
					
						var eventResponse = document.getElementById('event-response');
						//alert('df');
					  // console.log(add_resource);
					   
						gapi.client.load('calendar', 'v3', function () {					// load the calendar api (version 3)
							var request = gapi.client.calendar.events.insert
							({
								'calendarId': 'suafag3ku0re5rnvjl4beriljc@group.calendar.google.com',
								//'eventId':'i9lsd13tarh37rk27b0ge7uno8',
								"resource": add_resource			// pass event details with api call
							});
							
							// handle the response from our api call
							request.execute(function (resp) {
							
								if (resp.status == 'confirmed') {
								
									//eventResponse.innerHTML = "Event created successfully. View it <a href='" + resp.htmlLink + "'>online here</a>.";
									//eventResponse.className += ' panel-success';
									// refreshICalendarframe();
									// $('.updateModal-body').empty();
									// makeApiCall1();
									//alert('insert successfully');
									//alert(resp.id);
									var cal_id = resp.id;
									var eid = '<?php echo $eventlast_id;?>';									
									//updEvent
									$.ajax({
										//url : './includes/newEventsPost.php',
										url : '<?php  DIR_WS_INCLUDES.'newEventsPost.php';?>',
										type : 'POST',
										async : false,
										data : {
											'addcalid'  : 1,
											'cal_id'   : cal_id,
											'eid'	: eid
																										
										},
										success : function()
										{
											alert('Success');
											window.location = "<?php echo HTTP_SERVER.'index.php?url=EVD';?>";				
										}				
									});
									
									
								} else {
									// document.getElementById('event-response').innerHTML = "There was a problem. Reload page and try again.";
									// eventResponse.className += ' panel-danger';
									alert('Bad Luck');
									window.location = "<?php echo HTTP_SERVER.'index.php?url=EVE';?>";
								}
							});
						});
					}
					insertEvent();	
			</script-->
		<?php
		
		//header ('location:'.HTTP_SERVER.'index.php?url=EVD');		
		


>>>>>>> a76782b0fe4489ccb97e61e4babd72472ea116e5
	}
	
	if(isset($_POST['addcalid']))
	{	
		updEventCalId($conn,$_POST['eid'],$_POST['cal_id']);
		
	}
	if(isset($_POST['txtupdchk']))
	{	
		$evnt_id = $_POST['txtupdchk'];		
		$hdn_ary = $_POST['hdn'];
		
		if( $_POST['contresn'] == 0 )
		{													
			
			$clcharge = $_POST['clchargen'] + $_POST['txtucharge'] ;						
			$vdcharge = $_POST['vdchargen'] + $_POST['txtvcharge'] ; 
			
			
			if($_POST['txmdn']=='Yes')
			{							
				$servtax  =	($_POST['txtucharge']*$_POST['txratn'])/100;
				$txamt =  $_POST['txamtn'] + $servtax;
				$totammt = $_POST['totammtn'] + $_POST['txtucharge'] + $servtax ;
			}
			else
			{
				$totammt = $_POST['totammtn'] + $_POST['txtucharge'];
			}
			// echo $clcharge."<br>";
			// echo $vdcharge."<br>";
			// echo $txamt."<br>";
			// echo $totammt."<br>";
			updEqpEventMst($conn,$evnt_id,$totammt,$txamt,$clcharge,$vdcharge);
		}
		else
		{
			
			$clcharge = $_POST['clchargen'] + $_POST['txtrescharge'] ;
			
			$vdcharge = $_POST['vdchargen'] + $_POST['txtresvcharge'] ;
			
			if($_POST['txmdn']=='Yes')
			{							
				$servtax  =	($_POST['txtrescharge']*$_POST['txratn'])/100;
				$txamt =  $_POST['txamtn'] + $servtax;
				$totammt = $_POST['totammtn'] + $_POST['txtrescharge'] + $servtax ;
			}
			else
			{
				$totammt = $_POST['totammtn'] + $_POST['txtrescharge'];
			}
			// echo $clcharge."<br>";
			// echo $txamt."<br>";
			// echo $totammt."<br>";
			updResEventMst($conn,$evnt_id,$totammt,$txamt,$clcharge,$vdcharge);
		}
		
		// exit;
		//now inserted in event_places_id
		
		
		//here is loop coming for multiple record//
		foreach($hdn_ary as $key => $value)
		{
					  
		  if(is_array($value))
		  {							
				
				
			//insertion work start
			$fromdt = $value['txtfromdate'];
			$tordt = $value['txttodate'];
			
			$nfromdt = date_format(new DateTime($fromdt),'Y-m-d H:i:s');
			$ntordt = date_format(new DateTime($tordt),'Y-m-d H:i:s');
			
			 insertEventPlaces($conn,$evnt_id, $value['txtvenue'],$value['txthall'],$value['txtldmark'],$value['txtfunction'],$nfromdt,$ntordt);			
			 $last_vplc_id  =  mysql_insert_id();			
			
			//insertion of event_place over stop
				
			foreach($value as $key => $subvalue)
			{
			
				if(is_array($subvalue) && !empty($subvalue) )
				{									
					if(@is_array ($subvalue['equipment'])&& isset($subvalue['equipment']) && !empty($subvalue['equipment']))
					{					
						insNewEventPlac($conn,$evnt_id,$last_vplc_id,$subvalue['equipment']['txtieqp'],$subvalue['equipment']['txtirate'],$subvalue['equipment']['txtiqty'],$subvalue['equipment']['txtiuamt'],$subvalue['equipment']['txtistf'],$subvalue['equipment']['txtivend'],$subvalue['equipment']['txtiuvendprice'],$subvalue['equipment']['txtiremark'],$subvalue['equipment']['txtilength'],$subvalue['equipment']['txtiwidth']);							
					}
					 if(@is_array ($subvalue['resource']) && isset($subvalue['resource']) && !empty($subvalue['resource']))
					{
						insNewRes($conn,$evnt_id,$last_vplc_id,$subvalue['resource']['txtires'],$subvalue['resource']['txtiresnm'],$subvalue['resource']['txtiqty'],$subvalue['resource']['txtirate'],$subvalue['resource']['rtxtiuamt'],$subvalue['resource']['txtivend'],$subvalue['resource']['txtiresvendprice'],$subvalue['resource']['txtiremark']);
					}				
				}
				else
				{				
					
				}				
			}					
		  }
		  
		}			
		header ('location:'.HTTP_SERVER.'index.php?url=EVD&id='.$evnt_id.'#tab_1_2');
		
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
	if(isset($_POST['showCmpDtl']))
	{	
		$data = showCmpDrp($conn);
		$showCmpCnt = count($data);
		?>
		<option select="selected" value="">All-Company</option>
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
		<option select="selected" value="">Select Category</option>
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
		<option select="selected" value="">Select Sub Category</option>
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
		<option select= "selected" value=""> Select the Equipment </option>
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
			
			<option  value="<?php echo $data[$i]['vend_id'];?>"> 
				<?php echo $data[$i]['vendor_name']."  ( ".$data[$i]['vendor_cmp']." )";?> 
			</option>
		<?php	
		}		
	}
	if(isset($_POST['shownewRes']))
	{	
		$data = showResoDrp($conn);
		$showResoCnt = count($data);
	?>
		<option select= "selected" value=""> Select the Resource </option>
	<?php
		for($i=0;$i<$showResoCnt;$i++)		
		{
		?>
			<option  value="<?php echo $data[$i]['res_id'];?>"><?php echo $data[$i]['res_name'];?></option>
		<?php	
		}		
	}
	if(isset($_POST['showeqpprice']))
	{			
		$q = mysql_query("select `price`,`price_type` from  equipment_mst where `eq_id` = '".$_POST['eqpid']."' ");
		$row = mysql_fetch_array($q);
		$r = mysql_query("select ea.as_name from equipment_mst em 
			right join eq_accessories ea on em.category_id = ea.eq_id
						where em.eq_id = '".$_POST['eqpid']."' ");		
		$check = array();		
		while($row2 = mysql_fetch_assoc($r))
		{
			$check[] = implode($row2);		
		}
		$result = implode(", ",$check);
		$row['as_name'] = $result;
		header("Content-type: text/x-json");
		echo json_encode($row);
		exit();	
	}
	if(isset($_POST['showresprice']))
	{			
		$q = mysql_query("select `amount` from  resource_mst where `res_id` = '".$_POST['resid']."' ");
		$row = mysql_fetch_array($q);
		header("Content-type: text/x-json");
		echo json_encode($row);
		exit();	
	}
?>