<?php
	include_once('./header.php');
	//include_once('./footer.php');
	$setting2 = showSettingRes($conn);
	if(isset($setting2) && !empty($setting2))
	{
		$setRes = $setting2[0]['resorce'];
	
	}
	if(isset($_POST['savepaytrn']))
	{
		if($_POST['txtpamt']!= '')
		{
			$resultShow = show_ClientCharge_ClientPaid($conn,$_POST['txtpeid']);
			//echo $resultShow[0]['client_charges'];
			$tot =  $resultShow[0]['client_paid_amt'] + $_POST['txtpamt'];
			if($resultShow[0]['total_amt'] >= $tot)
			{
				insPayTrn($conn,$_POST['txtpeid'],$_POST['txtpdate'],$_POST['txtpamt'],$_POST['txtpmode'],$_POST['txtpbnm'],$_POST['txtpchq'],$_POST['txtptrn']);				
				$tot_paid_amt = showTotPaidTrn($conn,$_POST['txtpeid']);
				
				if($resultShow[0]['total_amt'] > $tot)
				{							
					updatePaidAmt($conn,$_POST['txtpeid'],$tot_paid_amt[0]['paid_amt']);
				}
				else if($resultShow[0]['total_amt']== $tot)
				{
					updatePaidAmtStat($conn,$_POST['txtpeid'],$tot_paid_amt[0]['paid_amt']);
				}
			}
			else
			{
				echo 10;
			}
			
		}
	}
	
	if(isset($_POST['btnUpdate']))
	{		
		$date = date('Y-m-d H:i:s');
		updEventDetail($conn,$_POST['eid'],$_POST['txteventnm'],$_POST['txteventds'],$_POST['txtclnm'],$_POST['txtclcmp'],$_POST['txtclemail'],$_POST['txtworkmob'],$_POST['txthmmob'],$_POST['txtmob'],$_POST['txtjobdata1'],$_POST['txtjobdata2'],$date);
	}
	if(isset($_POST['PlacesUpdate']))
	{		
		$date = date('Y-m-d H:i:s');
		$fromdt = $_POST['txtfromdate'];
		$tordt = $_POST['txttodate'];
		
		$nfromdt = date_format(new DateTime($fromdt),'Y-m-d H:i:s');
		$ntordt = date_format(new DateTime($tordt),'Y-m-d H:i:s');
		
		updEventPlacesDetail($conn,$_POST['epldtlid'],$_POST['txtvenue'],$_POST['txthall'],$_POST['txtldmark'],
		$_POST['txtfunction'],$nfromdt,$ntordt,$date);
	}
	if(isset($_POST['ResourceIns']))
	{	
		$epldtlid =$_POST['epldtlid'];	
		$evntid =$_POST['evntid'];
		
		for($j=0;$j<count($_POST['txtires']);$j++)
			{
				insResourceUpd($conn,$evntid,$epldtlid,$_POST['txtires'][$j],$_POST['txtiresnm'][$j],$_POST['txtiqty'][$j],
				$_POST['txtirate'][$j],$_POST['rtxtiamt'][$j],$_POST['txtivend'][$j],$_POST['txtiresvendprice'][$j],$_POST['txtiremark'][$j]);
			}
		updResEventMst($conn,$evntid,$_POST['totammt'],$_POST['txamt'],$_POST['clcharge'],$_POST['vdcharge']);
	}
	
	if(isset($_POST['EquipmentIns']))
	{	
		$epldtlid =$_POST['epldtlid'];	
		$evntid =$_POST['evntid'];
		
		for($j=0;$j<count($_POST['txtieqp']);$j++)
			{
				insEquipmentUpd($conn,$evntid,$epldtlid,$_POST['txtieqp'][$j],$_POST['txtirate'][$j],$_POST['txtiqty'][$j],
				$_POST['txtiamt'][$j],$_POST['txtistf'][$j],$_POST['txtivend'][$j],$_POST['txtivendprice'][$j],
				$_POST['txtiremark'][$j],$_POST['txtilength'][$j],$_POST['txtiwidth'][$j]);
			}
		updEqpEventMst($conn,$evntid,$_POST['totammt'],$_POST['txamt'],$_POST['clcharge'],$_POST['vdcharge']);		
	}
	
	if(isset($_POST['delete']))
	{		
		$date = date('Y-m-d H:i:s');
		delevent($conn,$_POST['id'],$date);
	}
	
	if(isset($_POST['AddVendPTrn']))
	{			
		$resultShowVend = show_VendCharge_ClientPaid($conn,$_POST['txtevent_vend_id']);	
		
		$tot =  $resultShowVend[0]['vendor_paid_amt'] + $_POST['txtvdpamt'];
		
		//echo $tot;
		//echo $resultShowVend[0]['vendor_charges'];
		
		if($resultShowVend[0]['vendor_charges'] >= $tot)
		 {
			insAddVendPTrn($conn,$_POST['txtvend_evnt_id'],$_POST['txtevent_vend_id'],$_POST['txtvpdate'],$_POST['txtvpmode'],$_POST['txtvpbnm'],$_POST['txtvpchq'],$_POST['txtvdpamt']);
			
			 $tot_paid_amt = showTotPaidTrnVd($conn,$_POST['txtevent_vend_id']);
			
			//echo $tot_paid_amt[0]['paid_amt'];
			
			 if($resultShowVend[0]['vendor_charges'] > $tot_paid_amt[0]['paid_amt'])
			 {							
				 updatePaidAmtVend($conn,$_POST['txtevent_vend_id'],$tot_paid_amt[0]['paid_amt']);
			 }
			 else if($resultShowVend[0]['vendor_charges']== $tot)
			 {
				 updatePaidAmtVendP($conn,$_POST['txtevent_vend_id'],$tot_paid_amt[0]['paid_amt']);
			 }
		 }
		 else
		 {
			 echo 11;
		 }
	}
	
	
	if(isset($_POST['search']))
	{	
		// $_POST['txtename'],
		// $_POST['txtclname'],
		// $_POST['txtfpno'],
		// $_POST['txtbillno'],
		// $_POST['txtfromdt'],
		// $_POST['txttodt']
		
		//$where = " `event_name` like %".$txtename."%' or `client_name` like '%".$txtclname."%' or 
		//`bill_no` like '%".$txtbillno."%' or `fp_no` like '%".$txtfpno."%' or 
		//`from_date` like '%".$txtfromdt."%'  and `status` != 'enquiry' and deleted_at = '0000-00-00 00:00:00'";
		
		$s2 = '';$s3 = '';$s4 = '';$s5 = '';$s6 = '';$s7 = '';$s8 = '';
		if($_POST['txtename']!='')
		{
			$s2 = " `event_name` like '%".$_POST['txtename']."%' ";
		}
		 if($_POST['txtclname']!='')
		{
			$s3 = " `client_name` like '%".$_POST['txtclname']."%' ";
		}
		 //if($_POST['txtbillno'] != '')
		//{
			//$s4 = " `bill_no` like '%".$_POST['txtbillno']."%' ";
		//}
		//if($_POST['txtfpno']!='')
		//{
			//$s5 = " `fp_no` like '%".$_POST['txtfpno']."%' ";
		//}
		 if($_POST['txtfromdt'] !='')
		{
			$s6 = " `from_date` like '%".$_POST['txtfromdt']."%' ";
		}
		 if($_POST['txttodt'] !='')
		{
			$s7 = " `from_date` like '%".$_POST['txttodt']."%'  ";
		}
		 if($_POST['drpcmpnm'] !='')
		{
			$s8 = " `cmp_id` like '%".$_POST['drpcmpnm']."%'  ";
		}
		
		$arr = array($s2,$s3,$s4,$s5,$s6,$s7,$s8);
		$cnt= count($arr);
			for($i=0;$i<$cnt;$i++)
			{		
				if($arr[$i]!= '')
				{			
					$narry[] = $arr[$i];
				}		
			}
		$cnt1= count($narry);
		for($a=0;$a<$cnt1;$a++)
		{
			//$str1 = array();
			if($a == ($cnt1 - 1))
			{
				$str2[] =  $narry[$a];
			}
			else
			{
				$str1[] =  $narry[$a]."or";
			}
		}
		if(!empty($str1))
		{	
			$where = implode(array_merge($str1,$str2));
			//echo $where;
		}
		else
		{
			$where = implode ($str2);
			//echo $where;
		}
		
		//$where = " `event_name` like '%".$_POST['txtename']."%'  ";		
		$data = searchEventDetail ($conn,$where);
		//echo json_encode($data);
		$searchEventCnt = count($data);	
		for($i=0;$i<$searchEventCnt;$i++)
		{
		?>
		
			<tr>
				<td> </td>
				<td>
					<?php if($i+1 == $searchEventCnt)
					{
						?>
						<input type="hidden" id="lasteid" name="lasteid" value="<?php echo $data[$i]['event_id'];?>"/>
				<?php
					}
					?>
					<a data-id="<?php echo $data[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="View">						
						<?php echo $data[$i]['event_id'];	?>
					</a>
					
					
				</td>
				<td><?php echo ucfirst($data[$i]['event_name']);?></td>
				<td>
					<i class="fa fa-info-circle" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
					title="Client Comapany:<?php echo $data[$i]['client_cmp'];?><br>
					Client Email:<?php echo $data[$i]['client_email'];?><br>
					Mobile1:<?php echo $data[$i]['client_work_mob'];?><br>
					Mobile2:<?php echo $data[$i]['client_home_mob'];?>">
					</i>&nbsp;&nbsp;<?php echo ucfirst($data[$i]['client_name']);?>
				</td>				
				<!--td> <?php //echo $data[$i]['fp_no']; ?> </td>
				<td> <?php// echo $data[$i]['bill_no'];?> </td-->				
				<?php $from_date=date_create($data[$i]['from_date']);
						$inm1= date_format($from_date,dateForm);  
				?>
				<td><?php echo $inm1;?></td>
				
				<?php //$to_date=date_create($data[$i]['to_date']);
						//$inm2= date_format($to_date,dateFormat);  
				?>
				<!--td><?php// echo $inm2;?></td-->
				<td> <span style="float:right;"><?php echo $data[$i]['client_charges'];?></span> </td>
				
				<td>
					<span style="float:right;">
						<?php if($data[$i]['service_tax_rate']!=''){?>
						<i class="fa fa-info-circle" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
						title="Tax Rate:<?php echo $data[$i]['service_tax_rate']."%";?>">
						</i>&nbsp;&nbsp;<?php echo round($data[$i]['service_tax_amt']);}?> 
					</span>
				</td>
				<td><span style="float:right;"><?php echo round($data[$i]['total_amt']);?> </span></td>				
				<td><span style="float:right;"><?php echo $data[$i]['client_paid_amt']; ?></span></td>
				<td>
					<span <?php if(ucfirst($data[$i]['payment_status']) == 'Paid' ){ ?> class="label label-success " <?php } else {?> class="label label-warning " <?php } ?> >
					<?php if($data[$i]['payment_status']!=''){echo ucfirst($data[$i]['payment_status']);}else{echo "Unpaid";};?> 
					</span>
				</td>
				
				<td>					
					<?php //$date=date_create($data[$i]['from_date']);$inm = date_format($date,"Ymd"); ?>
					<?php if($data[$i]['inv_file_name']!='') {?>
					<a href="upload/minvoice/<?php echo $data[$i]['inv_file_name'] ;?>" target="_blank" >
						<i style="cursor : pointer;" class="fa fa-file-pdf-o" aria-hidden="true" data-toggle="tooltip" title="Invoice">
						</i>
					</a>						
					<?php } ?>
					
				</td>
				
				<td> 
					<a data-id="<?php echo $data[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="View">
						<i class="fa fa-pencil-square-o"></i>
					</a> &nbsp;&nbsp;&nbsp;
					<a data-toggle="tooltip" title="Delete" data-id="<?php echo $data[$i]['event_id']; ?>" class="delete"> <i class="fa fa-trash-o"></i> </a> 
				</td>		
				
			</tr>
			
		<?php
			
		}
		
	}
	
	
	
	
	
	if(isset($_POST['show']))
	{	
		$data = showEventDetail ($conn);
		//echo json_encode($data);
		$showEventCnt = count($data);	
		for($i=0;$i<$showEventCnt;$i++)
		{
		?>
		
			<tr>
				
				<td>
					<?php if($i+1 == $showEventCnt)
					{
						?>
						<input type="hidden" id="lasteid" name="lasteid" value="<?php echo $data[$i]['event_id'];?>"/>
				<?php
					}
					?>
					<a data-id="<?php echo $data[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="View">						
						<?php echo $data[$i]['event_id'];	?>
					</a>
					
					
				</td>
				<td>
					<a data-id="<?php echo $data[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="View">
						<?php echo ucfirst($data[$i]['event_name']);?>
					</a>
				</td>
				<td>
					<i class="fa fa-info-circle" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
					title="Client Comapany:<?php echo $data[$i]['client_cmp'];?><br>
					Client Email:<?php echo $data[$i]['client_email'];?><br>
					Mobile1:<?php echo $data[$i]['client_work_mob'];?><br>
					Mobile2:<?php echo $data[$i]['client_home_mob'];?>">
					</i>&nbsp;&nbsp;<?php echo ucfirst($data[$i]['client_name']);?>
				</td>	

				
				<!--td> <?php //echo $data[$i]['fp_no']; ?> </td>
				<td> <?php //echo $data[$i]['bill_no'];?> </td-->

				
				<?php $from_date=date_create($data[$i]['from_date']);
						$inm1= date_format($from_date,dateForm);  
				?>
				<td><?php echo $inm1;?></td>
				
				<?php //$to_date=date_create($data[$i]['to_date']);
						//$inm2= date_format($to_date,dateFormat);  
				?>
				<!--td><?php// echo $inm2;?></td-->
				<td> <span style="float:right;"><?php echo $data[$i]['client_charges'];?></span> </td>
				
				<td>
					<span style="float:right;">
						<?php if($data[$i]['service_tax_amt']!=''){?>
						<i class="fa fa-info-circle" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
						title="Tax Rate:<?php echo $data[$i]['service_tax_rate']."%";?>">
						</i>&nbsp;&nbsp;<?php echo $data[$i]['service_tax_amt'];}?> 
					</span>
				</td>
				<td><span style="float:right;"><?php echo $data[$i]['total_amt'];?> </span></td>				
				<td><span style="float:right;"><?php echo $data[$i]['client_paid_amt']; ?></span></td>
				<td>
					<span <?php if(ucfirst($data[$i]['payment_status']) == 'Paid' ){ ?> class="label label-success " <?php } else {?> class="label label-warning " <?php } ?> >
					<?php if($data[$i]['payment_status']!=''){echo ucfirst($data[$i]['payment_status']);}else{echo "Unpaid";};?> 
					</span>
				</td>
				
				<td>					
					<?php //$date=date_create($data[$i]['from_date']);$inm = date_format($date,"Ymd"); ?>
					<?php if($data[$i]['inv_file_name']!='') {?>
					<a href="upload/minvoice/<?php echo $data[$i]['inv_file_name'] ;?>" target="_blank" >
						<i style="cursor : pointer;" class="fa fa-file-pdf-o" aria-hidden="true" data-toggle="tooltip" title="Invoice">
						</i>
					</a>						
					<?php } ?>
					
				</td>
				
				<td> 
					<a data-id="<?php echo $data[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="View">
						<i class="fa fa-pencil-square-o"></i>
					</a> &nbsp;&nbsp;&nbsp;
					<a data-toggle="tooltip" title="Delete" data-id="<?php echo $data[$i]['event_id']; ?>" class="delete"> <i class="fa fa-trash-o"></i> </a> 
				</td>		
				
			</tr>
			
		<?php
			
		}
		
	}
	if(isset($_POST['showPdf']))
	{	
		$data = showPdf ($conn,$_POST['eid']);
		$showPdfCnt = count($data);	
		//echo $data[0]['inv_file_name'];
		for($i=0;$i<$showPdfCnt;$i++)
		{
		?>
			<a href="upload/minvoice/<?php echo $data[$i]['inv_file_name'] ; ?>" class="pdflist" target="_blank"> 
				<?php echo $data[$i]['inv_file_name'] ;?> 
			</a></br>
		<?php	
		}
		
	}
	if(isset($_POST['showfullPdf']))
	{	
		$data = showfullPdf ($conn,$_POST['eid']);
		$showPdfCnt = count($data);	
		//echo $data[0]['inv_file_name'];
		for($i=0;$i<$showPdfCnt;$i++)
		{
		?>
			<a href="upload/minvoice/<?php echo $data[$i]['info_file_name'] ; ?>" class="pdflist" target="_blank"> 
				<?php echo $data[$i]['info_file_name'] ;?> 
			</a></br>
		<?php	
		}
		
	}
	
	if(isset($_POST['showdatavend']))
	{	
		$showVend = showVendName ($conn);
		$showVendCnt = count($showVend);	
		for($i=0;$i<$showVendCnt;$i++)
		{
		?>
			<option value="<?php echo $showVend[$i]['vend_id'] ;?>"> <?php echo $showVend[$i]['vendor_name'] ;?></option>		
		<?php	
		}
		
	}
	
	if(isset($_POST['insVendDtl']))
	{	
		 insVendDtl($conn,$_POST['txtveid'],$_POST['txtvpeid'],$_POST['showvendor'],$_POST['txtvendchrg']);
		
	}
	
	
	if(isset($_POST['showvendselect']))
	{	
		$showVendSel = showVendSel($conn,$_POST['evldtl']);
		
		$showVendSelCnt = count($showVendSel);	
		for($i=0;$i<$showVendSelCnt;$i++)
		{
		?>
			<input type="text" name = "vend" class="small-box" value="<?php echo $showVendSel[$i]['vendor_name'] ;?>" readonly /><br>
			
		<?php	
		}
		
	}
	
	
	if(isset($_POST['showeventdtl']))
	{		
		// $e = mysql_query("SELECT `event_places_id`,`event_vennue`,`event_ld_mark`,`event_date`,`event_to_date` FROM event_places_dtl where `event_id` = '".$_POST['eid']."' ");
		// $row1 = mysql_fetch_array($e);
		// header("Content-type: text/x-json");
		// echo json_encode($row1);
		// exit();
		$edata = showEventPlacesDetail ($conn,$_POST['eid']);
		$showEventPlacesCnt = count($edata);	
		for($i=0;$i<$showEventPlacesCnt;$i++)
		{
		?>	
		<script>
			//attach the vendor on event and its insertion on event_vendor_dtl
		
			$('#savevend<?php echo $i;?>').click(function(){
				var txtveid    =   $('#txtveid<?php echo $i;?>').val();
				var txtvpeid    =   $('#txtvpeid<?php echo $i;?>').val();
				var showvendor    =   $('#showvendor<?php echo $i;?>').val();
				var txtvendchrg    =   $('#txtvendchrg<?php echo $i;?>').val();
				
				
				//alert(eid);
				$.ajax({
					url : 'includes/eventDetailPost.php',
					type : 'POST',
					async : false,
					data : {
						'insVendDtl'  : 1,
						'txtveid'   : txtveid,
						'txtvpeid'   : txtvpeid,	
						'showvendor'   : showvendor,	
						'txtvendchrg'   : txtvendchrg,	
						
					},
					success : function(r)
					{						 
						//$('#txtveid').val('');
						//$('#txtvpeid').val('');
						//$('#showvendor').val('');
						$('#txtvendchrg<?php echo $i;?>').val('');						
						showdatavendsel<?php echo $i;?>();
						showvendorpaid();
						// showdataeqp();
						// showdatastf();
						
					}				
				});	
						
			});
			function showdatavendsel<?php echo $i;?>()
			{	
				var evldtl    =   $('#epldtl<?php echo $i?>').val();			
				//alert(epldtl);
				
				$.ajax({
					url : './includes/eventDetailPost.php',
					type : 'post',
					async : false,
					data : {
						'showvendselect' : 1,
						'evldtl'   : evldtl,
						
					},
					success : function(r8)
					{
						$('#showvend<?php echo $i;?>').html(r8);						
					}
					
				});
			}
			showdatavendsel<?php echo $i;?>();			
		</script>
		
		<div class="timeline-wrapper"> 
			<h2 class="timeline-time">
				<span>
				<?php $date=date_create($edata[$i]['event_date']);
						echo date_format($date,"dS F, Y H:i A");  
				?>
				</span>
			</h2>
			<dl class="timeline-series">
				<dt id="1955082<?php echo $i;?>" class="timeline-event"><a>General</a></dt>
				<dd class="timeline-event-content" id="1955082<?php echo $i;?>EX">
				
				<input type="hidden" id="evfromdt" name="evfromdt" value="<?php echo $edata[$i]['event_date']; ?>"/>
					<input type="hidden" id="epldtl<?php echo $i; ?>" name="epldtl<?php echo $i; ?>" value="<?php echo $edata[$i]['event_places_id']; ?>"/>
					<input type="hidden" id="epldtl" name="epldtl" value="<?php echo $edata[$i]['event_places_id']; ?>"/>
					<div>
						<tr>
							<td class="names"><label for="txtvenue">Venue </label></td>
							<td>
								<input class="small-box" id="txtvenue" name="txtvenue" type="text" value="<?php echo $edata[$i]['event_vennue']; ?>" readonly />
							</td>
						</tr>
					</div>
					<div>
						<tr>
							<td class="names"><label for="txthall">Hall </label></td><br>
							<td>
								<input class="small-box" id="txthall" name="txthall" type="text" value="<?php echo $edata[$i]['event_hall']; ?>" readonly />
							</td>
						</tr>
					</div>
					<div>
						<tr>
							<td class="names"><label for="txtldmark">Land Mark</label> </td>
							<td>
							   <input class="small-box" id="txtldmark" name="txtldmark" type="text"  value=" <?php echo $edata[$i]['event_ld_mark']; ?>" readonly />
							</td>
						</tr>
					</div>

					<br class="clear">
				</dd>
				<dt id="1955120<?php echo $i; ?>" class="timeline-event"><a>Equipments Detail</a></dt>
				<dd class="timeline-event-content" id="1955120<?php echo $i;?>EX">
					
					<div >
						<div class="controls">
							<tr>
								<td class="names"><label for="showeqp">Equipment</label></td>
								<div id="showeqp<?php if($i!= 0){echo $i;} ?>" >
									
								</div>
							</tr>
						</div>
					</div>

						<br class="clear" />
				</dd>
				<dt id="1955121<?php echo $i;?>" class="timeline-event"><a>Staff Detail</a> </dt>
				<dd class="timeline-event-content" id="1955121<?php echo $i;?>EX">
					
					<div >
						<div class="controls">
							<tr>
								<td class="names"><label for="showstf<?php if($i!= 0){echo $i;} ?>">Staff</label></td>
								<div id="showstf">
									  
								</div>
							</tr>
						</div>
					</div> 

						<br class="clear">
				</dd>
				<dt id="1955122<?php echo $i;?>" class="timeline-event"><a>Vendor Detail</a></dt>		
				
				<dd class="timeline-event-content" id="1955122<?php echo $i;?>EX">
					
					<div>
						<div class="controls">							
							<label for="select_vendor" > Selected Vendor</label>
							<a id="addvend<?php echo $i; ?>" class="btn blue" name="addvend"><i class="icon-plus"></i></a><br/><br/>
							<div id="showvend<?php echo $i; ?>">
								  
							</div>							
						</div>
					</div>			
					<br class="clear">
					<div id="divvend<?php echo $i; ?>" style="display:none;">					
						<input type="hidden" id="txtveid<?php echo $i;?>" name="txtveid" value="<?php echo $edata[$i]['event_id']; ?>" readonly />					
						<input type="hidden" id="txtvpeid<?php echo $i;?>" name="txtvpeid" value="<?php echo $edata[$i]['event_places_id']; ?>" readonly />					
						<div>
							<label for="select_vendor" style="margin-left:30px;">
								Select Vendor
							</label>						
							<select class="medium m-wrap showvendor" id="showvendor<?php echo $i;?>" name="showvendor">
															
							</select>								
							<br/>
						</div>
						<br>
						<div>
							<label for="select_vendor" style="margin-left:30px;">
								Vendor Charge
							</label>
							<input type="text" id="txtvendchrg<?php echo $i;?>" name="txtvendchrg" />
						</div>	
						<br>
						<div>
							<a id="savevend<?php echo $i;?>" class="btn blue">Save </a>
						</div>
						<br/>
					</div> 
					<script>
					
						$("#addvend<?php echo $i;?>").click(function(){
							$("#divvend<?php echo $i;?>").toggle();						
						});
						
						
					</script>
				</dd>
				
			</dl>
			
		</div>
		<br class="clear">
		<div class="timeline-wrapper">
			<h2 class="timeline-time">
			<span> 
			<?php $date1=date_create($edata[$i]['event_to_date']);
					echo date_format($date1,"dS F, Y H:i A");  
			?>
			</span></h2>
			<input type="hidden" id="evtodt" name="evtodt" value="<?php echo $edata[$i]['event_to_date'];  ?>"/>
		</div>
		<br class="clear">
<?php
		}
	}
	
	if(isset($_POST['newshoweventdtl']))
	{
		$edata = showEventPlacesDetail ($conn,$_POST['eid']);
		
		$mdata = showEventDataDet($conn,$_POST['eid']);
		$cntres = showcntRes($conn,$_POST['eid']);
		
		$showEventPlacesCnt = count($edata);
		?>
		<input type="hidden" class="m-wrap" id="contres" name="contres" value="<?php echo $cntres[0]['Count'];?>" />		
		<input type="hidden" class="m-wrap" id="clcharge" name="clcharge" value="<?php echo $mdata[0]['client_charges'];?>" />
		<input type="hidden" class="m-wrap" id="clpdcharge" name="clpdcharge" value="<?php echo $mdata[0]['client_paid_amt'];?>" />
		<input type="hidden" class="m-wrap" id="vdcharge" name="vdcharge" value="<?php echo $mdata[0]['vendor_charges'];?>" />
		<input type="hidden" class="m-wrap" id="vdpdcharge" name="vdpdcharge" value="<?php echo $mdata[0]['vd_paid_amt'];?>" />
		<input type="hidden" class="m-wrap" id="txmd" name="txmd" value="<?php echo $mdata[0]['taxmode'];?>" />
		<input type="hidden" class="m-wrap" id="txrat" name="txrat" value="<?php echo $mdata[0]['service_tax_rate'];?>" />
		<input type="hidden" class="m-wrap" id="txamt" name="txamt" value="<?php echo $mdata[0]['service_tax_amt'];?>" />
		<input type="hidden" class="m-wrap" id="totammt" name="totammt" value="<?php echo $mdata[0]['total_amt'];?>" />
				
		<?php
		for($i=0;$i<$showEventPlacesCnt;$i++)
		{
			?>
			
			<div id="dynamic_field">
			
					<?php //print_r($mdata); ?>
					<h4 >Order places
					<div class="pqr">
					<a id= "epddel" data-id="<?php echo $edata[$i]['event_places_id'];?>" class="btn blue epddel " style="" >
						<i class="icon-minus"></i>
					</a>
					<a name="add" id="add" class="btn blue btn_remove ">
						<i class="icon-plus"></i>								
					</a>
					<a name="edtvn<?php echo $i; ?>" id="edtvn<?php echo $i; ?>" class="btn blue" style="">
					<i class="fa fa-pencil-square-o"></i>								
					</a>	
					</div>					
				</h4> 
				<hr class="hr1"/>
			<div id="vennuedtl<?php echo $i;?>">
							
				<div class="clearfix margin-bottom-10">
					
					<input type="hidden" class="m-wrap" id="hdn[<?php echo $i; ?>][txtEventPlacesId]" name="hdn[<?php echo $i; ?>][txtEventPlacesId]" value="<?php echo $edata[$i]['event_places_id'];?>"   />
					<input type="hidden" class="m-wrap" id="epldtlid<?php echo $i;?>" name="epldtlid<?php echo $i;?>" value="<?php echo $edata[$i]['event_places_id'];?>"   />
					<input type="hidden" class="m-wrap evntid" id="evntid<?php echo $i;?>" name="evntid" value="<?php echo $edata[$i]['event_id'];?>"   />
					<br>
					<div class="pull-left margin-right-20">
					<label for="txtvenue">Venue :</label>
					<div class="input-icon input-append">
						<input class="m-wrap" id="txtvenue<?php echo $i; ?>" name="txtvenue<?php echo $i; ?>" value="<?php echo $edata[$i]['event_vennue'];?>" type="text" readonly />
					</div>
				</div>
				<div class="pull-left margin-right-20 abc">
					<label for="txthall">Hall :</label>
					<div class="input-icon input-append">
						<input class="m-wrap" id="txthall<?php echo $i; ?>" name="txthall<?php echo $i; ?>" value="<?php echo $edata[$i]['event_hall'];?>" type="text" readonly />
					</div>
				</div>
				<div class="pull-right margin-right-20">
					<label for="txtldmark">Land Mark :</label>
					<div class="input-icon input-append">
						<input class="m-wrap" id="txtldmark<?php echo $i; ?>" name="txtldmark<?php echo $i; ?>" value="<?php echo $edata[$i]['event_ld_mark'];?>" type="text" readonly />
					</div>
				</div>
				</div>
				
				<div class="clearfix margin-bottom-10">
					<div class="pull-left margin-right-10">
						<div class="input-icon input-append">
							<label for="txtfunction">Function: </label>
						</div>
						<select name="txtfunction<?php echo $i; ?>" id="txtfunction<?php echo $i; ?>" class="medium m-wrap">
											<option  value="Mahendi">Mahendi</option>
											<option value="Sangit">Sangit</option>
											<option value="Reception">Reception</option>
											<option value="Ghruhshanti">Ghruhshanti</option>
										</select>
					</div>
					<div class="pull-left margin-right-10">
						<label for="txtfromdate">From Date </label>
						<div id="datetimepickerPF<?php echo $i; ?>" class="input-append date">
							<input data-format="dd-MM-yyyy HH:mm PP" class="m-wrap"  type="text" name="txtfromdate<?php echo $i; ?>" id="txtfromdate<?php echo $i; ?>" value="<?php echo $edata[$i]['event_date'];?>" readonly />
							<span class="add-on">
							  <i class="icon-time" class="icon-calendar"></i>
							</span>
						</div>
					</div>
					<div class="pull-right margin-right-20">
					<label for="txttodate" class="well1">To Date </label>
					<div id="datetimepickerPT<?php echo $i; ?>" class="input-append date">
						<input data-format="dd-MM-yyyy HH:mm PP" type="text" class="m-wrap"  name="txttodate<?php echo $i; ?>" id="txttodate<?php echo $i; ?>" value="<?php echo $edata[$i]['event_to_date'];?>" readonly />
						<span class="add-on">
						  <i class="icon-time" class="icon-calendar"></i>
						</span>
					</div>
					</div>									
				</div>
			</div>
				<div id="shwvn<?php echo $i; ?>" class="clearfix margin-bottom-10">
					<!--label for="txtldmark"> </label-->
					<div class="input-icon left">
						<input class="m-wrap btn blue" value="Save" data-id="<?php echo $edata[$i]['event_places_id'];?>" id="updateEpd<?php echo $i; ?>" name="updateEpd<?php echo $i; ?>"  type="button" />
					</div>
				</div>
				<input type="hidden" value="<?php echo $setRes;?>" id="hiddenresource"/>
				<?php if (isset($setRes) && $setRes == 'resource') {?>
			<div id="resinfo<?php echo $i; ?>">
				<div>
					<input style="width:207px;" type="text"  value="Resources" readonly />									
														
					<input style="width:121px;" type="text"  value="Rate" readonly />
					<input style="width:123px;" type="text"  value="Qty" readonly />
					<input style="width:120px;" type="text"  value="Amount" readonly />
					<input style="width:205px;" type="text"  value="Vendor" readonly />	
					<input style="width:124px;" type="text"  value="Price" readonly />
				</div>
				<div>				
					<select  name="drp_resource<?php echo $i; ?>" id="drp_resource<?php echo $i; ?>" class="medium m-wrap drp_resource<?php echo $i; ?>">											
					</select>	
					<input class="small m-wrap txtresrate<?php echo $i; ?>"  type="text"  id="txtresrate<?php echo $i; ?>" name="txtresrate<?php echo $i; ?>" value=""  />	
					<input class="small m-wrap txtresqty<?php echo $i; ?>"  type="text"  id="txtresqty<?php echo $i; ?>" name="txtresqty<?php echo $i; ?>" value="1" />																	
					<input class="small m-wrap txtresamt<?php echo $i; ?>" type="text"  id="txtresamt<?php echo $i; ?>" name="txtresamt<?php echo $i; ?>" value="" readonly />	
					<select name="drpnewresvend<?php echo $i; ?>" id="drpnewresvend<?php echo $i; ?>" class="medium m-wrap drpnewresvend<?php echo $i; ?>"> 											
					</select>
					<input class="small m-wrap txtresvprice<?php echo $i; ?>" type="text"  id="txtresvprice<?php echo $i; ?>" name="txtresvprice<?php echo $i; ?>" value="" />
								
				</div>
				<div>
					<input  type="text"  value="Remark" readonly />
				</div>
				
				<div>
					<textarea rows="2" cols="140" id="txtresremark<?php echo $i; ?>" class="txtresremark<?php echo $i; ?>" name="txtresremark<?php echo $i; ?>"></textarea>
					<a name="addres<?php echo $i;?>" class="btn blue" id="addres<?php echo $i;?>" style="margin-left:15px;" >
						Add								
					</a>
				</div>
				
			</div>	
				<br>
				<div class="portlet box green">
					<div class="portlet-title">
						<div class="caption"><i class="icon-reorder"></i>Resources</div>
						
						<a id="edtres<?php echo $i;?>" class="invoice invoice_excel">
							<i class="fa fa-pencil-square-o" style="color:white; margin-top:10%;" aria-hidden="true"></i>
						</a>
						
					</div>
					<div class="portlet-body">
						<table class="table table-striped table-bordered table-hover table-full-width" id="sample_3">
							<thead>
								<tr>
									<th> Resource</th>													
									<th> Rate</th>
									<th> Qty</th>
									<th> Amount</th>
									<th> Vendor</th>
									<th> Price</th>
									<th> Remark</th>
									<th> Action</th>													 
								</tr>
							</thead>
							<tbody id="resrec<?php echo $i; ?>">
							</tbody>
						</table>
					</div>
				</div>
				
				<!-- Save Button for resource Insertion -->
				<div id ="shwres<?php echo $i; ?>" class="clearfix margin-bottom-10">
					<!--label for="txtldmark"> </label-->
					<div class="input-icon left">
						<input class="m-wrap btn blue" value="Save"  id="updResD<?php echo $i; ?>" name="updResD<?php echo $i; ?>"  type="button" />
					</div>
				</div>
				<!-- End of Resource save button -->
				
					<?php }
								else if (isset($setRes) && $setRes == 'equipment') {?>
				
				
			<div id="eqpinfo<?php echo $i; ?>">	
				<div>
					<input class="xyz" type="text"  value="Equipment" readonly />
					<i class="fa fa-info-circle" title="New" id="newinseqp" data-toggle="tooltip" style="cursor:pointer;"> 
					</i>							
					
					
					<input class="xyz123" type="text" id="labelLT<?php echo $i; ?>" name="labelLT<?php echo $i; ?>"  value="Length(FT)" readonly />
					<input class="xyz123" type="text" id="labelWT<?php echo $i; ?>" name="labelWT<?php echo $i; ?>" value="Width(FT)" readonly />
					<input class="xyz123" type="text"  value="Rate" readonly />
					
					<input class="xyz123" type="hidden"  value="Type" readonly />
					
					<input class="xyz123" type="text"  value="Qty" readonly />
					<input class="xyz123" type="text"  value="Amount" readonly />
					
					<input class="xyz123" type="text"  value="Staff" readonly />
					<input class="xyz" type="text"  value="Vendor" readonly />
					<i class="fa fa-info-circle" title="New" id="newinsvd" data-toggle="tooltip" style="cursor:pointer;"> 
					</i>
					<input class="xyz123" type="text"  value="Price" readonly />				
				</div>
				<p></p>
				<div>	
				
					<select  name="drpneweqp<?php echo $i;?>" id="drpneweqp<?php echo $i;?>" class="small set1 m-wrap drpneweqp<?php echo $i;?>">											
					</select>
					
					
					<input class="xyz m-wrap txtlength<?php echo $i; ?>"  type="text"  id="txtlength<?php echo $i; ?>" name="txtlength<?php echo $i; ?>" value=""  />
					<input class="xyz m-wrap txtwidth<?php echo $i; ?>"  type="text"  id="txtwidth<?php echo $i; ?>" name="txtwidth<?php echo $i; ?>" value="" />
								
					<input class="xyz m-wrap txtrate<?php echo $i;?>"  type="text"  id="txtrate<?php echo $i;?>" name="txtrate<?php echo $i;?>" value=""  />
					
					<input class="xyz m-wrap txttype<?php echo $i;?>"  type="hidden"  id="txttype<?php echo $i;?>" name="txttype<?php echo $i;?>" value="" readonly />
					
					<input class="xyz m-wrap txtassdtl<?php echo $i;?>"  type="hidden"  id="txtassdtl<?php echo $i;?>" name="txtassdtl<?php echo $i;?>" value="" readonly />
					
					<input class="xyz m-wrap drpqty<?php echo $i;?>"  type="text"  id="drpqty<?php echo $i;?>" name="drpqty<?php echo $i;?>" value="1"  />
					
					<input class="xyz m-wrap txtamt<?php echo $i;?>" type="text"  id="txtamt<?php echo $i;?>" name="txtamt<?php echo $i;?>" value="" readonly />
					
					<input class="xyz m-wrap txthamt<?php echo $i;?>" type="hidden"  id="txthamt<?php echo $i;?>" name="txthamt<?php echo $i;?>" value="" readonly />
					
					<select name="drpnewstf<?php echo $i; ?>" id="drpnewstf<?php echo $i; ?>" class=" set3 m-wrap drpnewstf<?php echo $i; ?>"> 											
					</select>
					<select name="drpnewvend<?php echo $i; ?>" id="drpnewvend<?php echo $i; ?>" class="set3 m-wrap drpnewvend<?php echo $i; ?>"> 											
					</select>
					<input class="xyz m-wrap txtvprice<?php echo $i;?>" type="text"  id="txtvprice<?php echo $i;?>" name="txtvprice<?php echo $i;?>" value="" />
					
					
				</div>
				<p></p>
				<div>
					<input  type="text"  value="Remark" readonly />
				</div>
				<p></p>
				<div>
					<textarea rows="2" cols="122" id="txtremark<?php echo $i;?>" class="txtremark<?php echo $i;?>" name="txtremark<?php echo $i;?>"></textarea><br/>
					<p>
					<a name="addeqp<?php echo $i; ?>" class="btn blue" id="addeqp<?php echo $i; ?>" style="margin-left:15px;" >
						Add								
					</a>
					</p>
				</div>
			</div>
				<br/>
				
				
				<div class="portlet box green">
					<div class="portlet-title">
						<div class="caption"><i class="icon-reorder"></i>Equipments</div>
						<a id="edteqp<?php echo $i;?>" class="invoice invoice_excel">
							<i class="fa fa-pencil-square-o" style="color:white; margin-top:10%;" aria-hidden="true"></i>
						</a>
					</div>
					<div class="portlet-body">
						<table class="table table-striped table-bordered table-hover table-full-width" id="sample_3">
							<thead>
								<tr>
									<th> Equipment</th>
									<th> Asseccories</th>
									<th> Rate</th>
									<th> Qty</th>
									<th> Amount</th>
									<th> Staff</th>
									<th> Vendor</th>
									<th> Price</th>
									<th> Remark</th>
									<th> Action</th>													 
								</tr>
							</thead>
							<tbody id="eqprec<?php echo $i; ?>">

							</tbody>
						</table>
					</div>
				</div>
				
				<!-- Save Button for Equipment Insertion -->
				<div id ="shweqp<?php echo $i; ?>" class="clearfix margin-bottom-10">
					<!--label for="txtldmark"> </label-->
					<div class="input-icon left">
						<input class="m-wrap btn blue" value="Save"  id="updEqpD<?php echo $i; ?>" name="updEqpD<?php echo $i; ?>"  type="button" />
					</div>
				</div>
			<?php }
				else
			{?>
		<div id="resinfo<?php echo $i; ?>">
				<div>
					<input style="width:207px;" type="text"  value="Resources" readonly />									
														
					<input style="width:121px;" type="text"  value="Rate" readonly />
					<input style="width:123px;" type="text"  value="Qty" readonly />
					<input style="width:120px;" type="text"  value="Amount" readonly />									
				</div>
				<div>				
					<select  name="drp_resource<?php echo $i; ?>" id="drp_resource<?php echo $i; ?>" class="medium m-wrap drp_resource<?php echo $i; ?>">											
					</select>	
					<input class="small m-wrap txtresrate<?php echo $i; ?>"  type="text"  id="txtresrate<?php echo $i; ?>" name="txtresrate<?php echo $i; ?>" value=""  />	
					<input class="small m-wrap txtresqty<?php echo $i; ?>"  type="text"  id="txtresqty<?php echo $i; ?>" name="txtresqty<?php echo $i; ?>" value="1" />																	
					<input class="small m-wrap txtresamt<?php echo $i; ?>" type="text"  id="txtresamt<?php echo $i; ?>" name="txtresamt<?php echo $i; ?>" value="" readonly />	
					
					<a name="addres<?php echo $i;?>" class="btn blue" id="addres<?php echo $i;?>" style="margin-left:15px;" >
						Add								
					</a>
				</div>
			</div>	
				<br>
				<div class="portlet box green">
					<div class="portlet-title">
						<div class="caption"><i class="icon-reorder"></i>Resources</div>
						
						<a id="edtres<?php echo $i;?>" class="invoice invoice_excel">
							<i class="fa fa-pencil-square-o" style="color:white; margin-top:10%;" aria-hidden="true"></i>
						</a>
						
					</div>
					<div class="portlet-body">
						<table class="table table-striped table-bordered table-hover table-full-width" id="sample_3">
							<thead>
								<tr>
									<th> Resource</th>													
									<th> Rate</th>
									<th> Qty</th>
									<th> Amount</th>													
									<th> Action</th>													 
								</tr>
							</thead>
							<tbody id="resrec<?php echo $i; ?>">
							</tbody>
						</table>
					</div>
				</div>
				
				<!-- Save Button for resource Insertion -->
				<div id ="shwres<?php echo $i; ?>" class="clearfix margin-bottom-10">
					<!--label for="txtldmark"> </label-->
					<div class="input-icon left">
						<input class="m-wrap btn blue" value="Save"  id="updResD<?php echo $i; ?>" name="updResD<?php echo $i; ?>"  type="button" />
					</div>
				</div>
				<!-- End of Resource save button -->
			
			<div id="eqpinfo<?php echo $i; ?>">	
				<div>
					<input class="xyz" type="text"  value="Equipment" readonly />
					<i class="fa fa-info-circle" title="New" id="newinseqp" data-toggle="tooltip" style="cursor:pointer;"> 
					</i>							
					
					
					<input class="xyz123" type="text" id="labelLT<?php echo $i; ?>" name="labelLT<?php echo $i; ?>"  value="Length(FT)" readonly />
					<input class="xyz123" type="text" id="labelWT<?php echo $i; ?>" name="labelWT<?php echo $i; ?>" value="Width(FT)" readonly />
					<input class="xyz123" type="text"  value="Rate" readonly />
					
					<input class="xyz123"" type="hidden"  value="Type" readonly />
					
					<input class="xyz123" type="text"  value="Qty" readonly />
					<input class="xyz123" type="text"  value="Amount" readonly />
					
					<input class="xyz123" type="text"  value="Staff" readonly />
					<input class="xyz" type="text"  value="Vendor" readonly />
					<i class="fa fa-info-circle" title="New" id="newinsvd" data-toggle="tooltip" style="cursor:pointer;"> 
					</i>
					<input class="xyz123" type="text"  value="Price" readonly />				
				</div>
				<p></p>
				<div>	
				
					<select  name="drpneweqp<?php echo $i;?>" id="drpneweqp<?php echo $i;?>" class="small set1 m-wrap drpneweqp<?php echo $i;?>">											
					</select>
					
					
					<input class="xyz m-wrap txtlength<?php echo $i; ?>"  type="text"  id="txtlength<?php echo $i; ?>" name="txtlength<?php echo $i; ?>" value=""  />
					<input class="xyz m-wrap txtwidth<?php echo $i; ?>"  type="text"  id="txtwidth<?php echo $i; ?>" name="txtwidth<?php echo $i; ?>" value="" />
												
					<input class="xyz m-wrap txtrate<?php echo $i;?>"  type="text"  id="txtrate<?php echo $i;?>" name="txtrate<?php echo $i;?>" value=""  />
					
					<input class="xyz m-wrap txttype<?php echo $i;?>"  type="hidden"  id="txttype<?php echo $i;?>" name="txttype<?php echo $i;?>" value="" readonly />
					
					<input class="xyz m-wrap txtassdtl<?php echo $i;?>"  type="hidden"  id="txtassdtl<?php echo $i;?>" name="txtassdtl<?php echo $i;?>" value="" readonly />
					
					<input class="xyz m-wrap drpqty<?php echo $i;?>"  type="text"  id="drpqty<?php echo $i;?>" name="drpqty<?php echo $i;?>" value="1"  />
					
					<input class="xyz m-wrap txtamt<?php echo $i;?>" type="text"  id="txtamt<?php echo $i;?>" name="txtamt<?php echo $i;?>" value="" readonly />
					
					<input class="xyz m-wrap txthamt<?php echo $i;?>" type="hidden"  id="txthamt<?php echo $i;?>" name="txthamt<?php echo $i;?>" value="" readonly />
					
					<select name="drpnewstf<?php echo $i; ?>" id="drpnewstf<?php echo $i; ?>" class="set3 m-wrap drpnewstf<?php echo $i; ?>"> 											
					</select>
					<select name="drpnewvend<?php echo $i; ?>" id="drpnewvend<?php echo $i; ?>" class="set3 m-wrap drpnewvend<?php echo $i; ?>"> 											
					</select>
					<input class="xyz m-wrap txtvprice<?php echo $i;?>" type="text"  id="txtvprice<?php echo $i;?>" name="txtvprice<?php echo $i;?>" value="" />
					
					
				</div>
				<p></p>
				<div>
					<input  type="text"  value="Remark" readonly />
				</div>
				<p></p>
				<div>
					<textarea rows="2" cols="122" id="txtremark<?php echo $i;?>" class="txtremark<?php echo $i;?>" name="txtremark<?php echo $i;?>"></textarea><br/>
					<p>
					<a name="addeqp<?php echo $i; ?>" class="btn blue" id="addeqp<?php echo $i; ?>" style="margin-left:15px;" >
						Add								
					</a>
					</p>
				</div>
			</div>
				<br/>
				
				
				<div class="portlet box green">
					<div class="portlet-title">
						<div class="caption"><i class="icon-reorder"></i>Equipments</div>
						<a id="edteqp<?php echo $i;?>" class="invoice invoice_excel">
							<i class="fa fa-pencil-square-o" style="color:white; margin-top:10%;" aria-hidden="true"></i>
						</a>
					</div>
					<div class="portlet-body">
						<table class="table table-striped table-bordered table-hover table-full-width" id="sample_3">
							<thead>
								<tr>
									<th> Equipment</th>
									<th> Asseccories</th>
									<th> Rate</th>
									<th> Qty</th>
									<th> Amount</th>
									<th> Staff</th>
									<th> Vendor</th>
									<th> Price</th>
									<th> Remark</th>
									<th> Action</th>													 
								</tr>
							</thead>
							<tbody id="eqprec<?php echo $i; ?>">

							</tbody>
						</table>
					</div>
				</div>
				
				<!-- Save Button for Equipment Insertion -->
				<div id ="shweqp<?php echo $i; ?>" class="clearfix margin-bottom-10">
					<!--label for="txtldmark"> </label-->
					<div class="input-icon left">
						<input class="m-wrap btn blue" value="Save"  id="updEqpD<?php echo $i; ?>" name="updEqpD<?php echo $i; ?>"  type="button" />
					</div>
				</div>
			<?php }?>
				<!-- End of Equipment save button -->
				
			</div>
			<script>
					$('#datetimepickerPF<?php echo $i; ?>').datetimepicker({
					language: 'pt-BR'
				  });
				   $('#datetimepickerPT<?php echo $i; ?>').datetimepicker({
					language: 'pt-BR'
				  });
				  //edit vennue
				 $('#edtvn<?php echo $i;?>').click(function()
					{
						$('#txtvenue<?php echo $i;?>').removeAttr('readonly');
						$('#txthall<?php echo $i;?>').removeAttr('readonly');
						$('#txtldmark<?php echo $i;?>').removeAttr('readonly');
						$('#txtfunction<?php echo $i;?>').removeAttr('readonly');
						$('#txtfromdate<?php echo $i;?>').removeAttr('readonly');
						$('#txttodate<?php echo $i;?>').removeAttr('readonly');
						
						$("#edtvn<?php echo $i;?>").hide();
						$("#shwvn<?php echo $i;?>").show();
					});
				
				$("#shwvn<?php echo $i;?>").hide(); 
				//exit
				
				//edit resource
				$('#edtres<?php echo $i;?>').click(function()
					{
						//$('#txtvat').removeAttr('readonly');						
						$("#edtres<?php echo $i;?>").hide();
						$("#shwres<?php echo $i;?>").show();
						$("#resinfo<?php echo $i;?>").show();
					});
				
				$("#shwres<?php echo $i;?>").hide();
				$("#resinfo<?php echo $i;?>").hide();
				//exit 

				//edit equipment
				$('#edteqp<?php echo $i;?>').click(function()
					{
						//$('#txtvat').removeAttr('readonly');						
						$("#edteqp<?php echo $i;?>").hide();
						$("#shweqp<?php echo $i;?>").show();
						$("#eqpinfo<?php echo $i;?>").show();
					});
				
				$("#shweqp<?php echo $i;?>").hide();
				$("#eqpinfo<?php echo $i;?>").hide();
				//exit 
				
				function newshowResDtl<?php echo $i; ?> ()
				{					
					var epldtlid = 	$('#epldtlid<?php echo $i; ?>').val();
					//alert(epldtlid);
					$.ajax({
						url : 'includes/eventDetailPost.php',
						type : 'POST',
						async : false,
						data : {
							'newshowResDtl'  : 1,
							'epldtlid'   : epldtlid,				
							
						},
						success : function(rd1)
						{										
							 $('#resrec<?php echo $i; ?>').html(rd1);
							 
								// showdataeqp();
								// showdatastf();
								// showdatavend();
								// showdatavendsel();										
						}				
					});	
							
				}			 
				function newshowEqpDtl<?php echo $i; ?> ()
				{					
					var epldtlid = 	$('#epldtlid<?php echo $i; ?>').val();
					//alert(epldtlid);
					$.ajax({
						url : 'includes/eventDetailPost.php',
						type : 'POST',
						async : false,
						data : {
							'newshowEqpDtl'  : 1,
							'epldtlid'   : epldtlid,				
							
						},
						success : function(rd2)
						{										
							 $('#eqprec<?php echo $i; ?>').html(rd2);
							 
								// showdataeqp();
								// showdatastf();
								// showdatavend();
								// showdatavendsel();										
						}				
					});	
							
				}		 
				 
				function shownewEqp<?php echo $i;?>()
				{		
					$.ajax({
						url : './includes/newEventsPost.php',
						type : 'post',
						async : false,
						data : {
							'shownewEqp' : 1
							
						},
						success : function(r)
						{
							$('#drpneweqp<?php echo $i;?>').html(r);	
							
						}
						
					});
				}
				function shownewStf<?php echo $i;?>()
				{		
					$.ajax({
						url : './includes/newEventsPost.php',
						type : 'post',
						async : false,
						data : {
							'shownewStf' : 1
							
						},
						success : function(r)
						{
							$('#drpnewstf<?php echo $i;?>').html(r);	
							
						}
						
					});
				}
				function shownewVend<?php echo $i;?>()
				{		
					$.ajax({
						url : './includes/newEventsPost.php',
						type : 'post',
						async : false,
						data : {
							'shownewVend' : 1
							
						},
						success : function(r)
						{
							$('#drpnewvend<?php echo $i;?>').html(r);	
							$('#drpnewresvend<?php echo $i;?>').html(r);
						}
						
					});
				}
				function shownewRes<?php echo $i;?>()
				{		
					$.ajax({
						url : './includes/newEventsPost.php',
						type : 'post',
						async : false,
						data : {
							'shownewRes' : 1
							
						},
						success : function(r)
						{
							$('#drp_resource<?php echo $i;?>').html(r);	
							
						}
						
					});
				}
				
				$("#drpneweqp<?php echo $i;?>").on("change", function()
				{
					var eqpid    =   $('#drpneweqp<?php echo $i;?>').val();
					
					$.ajax({
						url : './includes/newEventsPost.php',
						type : 'post',
						async : false,
						data : {
							'showeqpprice' : 1,
							'eqpid' : eqpid,
							
						},
						success : function(r)
						{
							$('#txtrate<?php echo $i;?>').val(r.price);
							$('#txtamt<?php echo $i;?>').val(r.price);
							$('#txthamt<?php echo $i;?>').val(r.price);
							$('#txttype<?php echo $i;?>').val(r.price_type);
							$('#txtassdtl<?php echo $i;?>').val(r.as_name);
							checkType<?php echo $i;?>();
						}
						
					});
				});
				$("#drp_resource<?php echo $i; ?>").on("change", function()
				{
					var resid    =   $('#drp_resource<?php echo $i; ?>').val();
					
					$.ajax({
						url : './includes/newEventsPost.php',
						type : 'post',
						async : false,
						data : {
							'showresprice' : 1,
							'resid' : resid,
							
						},
						success : function(r)
						{
							$('#txtresrate<?php echo $i; ?>').val(r.amount);
							$('#txtresamt<?php echo $i; ?>').val(r.amount);
											
						}
						
					});
				});
				$("#txtresqty<?php echo $i; ?>").on("focusout", function()
				{
					var qty    =   $('#txtresqty<?php echo $i; ?>').val();
					if(qty == "")
					{
						alert("Plz Insert The qty!!!");
						return false;
					}
					if(qty != "")
					{
						if(isNaN(qty))
						{
							alert("Please Only Numeric in qty!!! (Allowed input:0-9)");
							return false;
						}
						if(qty == 0)
						{
							alert("Can't GIve qty 0");
							return false;
						}
					}
					var txtramt = $('#txtresrate<?php echo $i; ?>').val();			
					var tot = parseInt(qty) * parseInt(txtramt);			
					$('#txtresamt<?php echo $i; ?>').val(tot);			
				});
				$("#txtresrate<?php echo $i; ?>").on("focusout", function()
				{
							
					var ratechg = $('#txtresrate<?php echo $i; ?>').val();		
					if(ratechg == "")
					{
						alert("Plz Insert The Rate!!!");
						return false;
					}
					if(ratechg != "")
					{
						if(isNaN(ratechg))
						{
							alert("Please Only Numeric in Rate!!! (Allowed input:0-9)");
							return false;
						}
						// if(ratechg == 0)
						// {
							// alert("Can't GIve rate 0");
							// return false;
						// }
					}
					var qty    =   $('#txtresqty<?php echo $i; ?>').val();			
					var tot = parseInt(qty) * parseInt(ratechg);			
					$('#txtresamt<?php echo $i; ?>').val(tot);
					
				});				
				function checkType<?php echo $i;?>()
				{	
					var gettype = $('#txttype<?php echo $i; ?>').val();
					
					if(gettype == 2)
					{
						$('#labelLT<?php echo $i; ?>').show();
						$('#labelWT<?php echo $i; ?>').show();
						$('#txtlength<?php echo $i; ?>').show();
						$('#txtwidth<?php echo $i; ?>').show();
					}
					else
					{
						$('#labelLT<?php echo $i; ?>').hide();
						$('#labelWT<?php echo $i; ?>').hide();
						$('#txtlength<?php echo $i; ?>').hide();
						$('#txtwidth<?php echo $i; ?>').hide();
					}					
					
				}
				
				$("#txtwidth<?php echo $i; ?>").on("focusout", function()
				{
					var txtlength    =   $('#txtlength<?php echo $i; ?>').val();
					var txtwidth    =   $('#txtwidth<?php echo $i; ?>').val();
					var sqfeet = parseInt(txtlength) * parseInt(txtwidth);
					
					var rate = $('#txtrate<?php echo $i; ?>').val();	
					
					var tot = parseInt(sqfeet) * parseInt(rate);
					$('#txthamt<?php echo $i; ?>').val(tot);
					$('#txtamt<?php echo $i; ?>').val(tot);			
				});
				
				$("#txtrate<?php echo $i; ?>").on("focusout", function()
				{
					
					var gettype = $('#txttype<?php echo $i; ?>').val();
					//alert(gettype);
					var rate = $('#txtrate<?php echo $i; ?>').val();	
					if(rate == "")
					{
						alert("Plz Insert The Rate!!!");
						return false;
					}
					if(rate != "")
					{
						if(isNaN(rate))
						{
							alert("Please Only Numeric in Rate!!! (Allowed input:0-9)");
							return false;
						}
						// if(rate == 0)
						// {
							// alert("Can't GIve rate 0");
							// return false;
						// }
					}
					if(gettype == 2)
					{
						var txtlength    =   $('#txtlength<?php echo $i; ?>').val();
						var txtwidth    =   $('#txtwidth<?php echo $i; ?>').val();
						var sqfeet = parseInt(txtlength) * parseInt(txtwidth);
						
						var rate = $('#txtrate<?php echo $i; ?>').val();	
						
						var tot = parseInt(sqfeet) * parseInt(rate);
						$('#txthamt<?php echo $i; ?>').val(tot);
						$('#txtamt<?php echo $i; ?>').val(tot);
					}
					else
					{
						var rate = $('#txtrate<?php echo $i; ?>').val();	
						$('#txthamt<?php echo $i; ?>').val(rate);
						$('#txtamt<?php echo $i; ?>').val(rate);
					}
				});
				$("#drpqty<?php echo $i; ?>").on("focusout", function()
				{
					var qty    =   $('#drpqty<?php echo $i; ?>').val();
					if(qty == "")
					{
						alert("Plz Insert The qty!!!");
						return false;
					}
					if(qty != "")
					{
						if(isNaN(qty))
						{
							alert("Please Only Numeric in qty!!! (Allowed input:0-9)");
							return false;
						}
						if(qty == 0)
						{
							alert("Can't GIve qty 0");
							return false;
						}
					}
					var txthamt = $('#txthamt<?php echo $i; ?>').val();			
					var tot = parseInt(qty) * parseInt(txthamt);			
					$('#txtamt<?php echo $i; ?>').val(tot);			
				});
				
				
				var k = 11;
				var i = 11;
				$('#addeqp<?php echo $i; ?>').on('click',function()
				{
					var eqpid = $('.drpneweqp<?php echo $i; ?>').val();
					var eqpnm = document.getElementById("drpneweqp<?php echo $i; ?>").options[(document.getElementById("drpneweqp<?php echo $i; ?>").options.selectedIndex)].text;										
					var rate = $('.txtrate<?php echo $i; ?>').val();
					var qty = $('.drpqty<?php echo $i; ?>').val();
					var amt = $('.txtamt<?php echo $i; ?>').val();
					var staff = $('.drpnewstf<?php echo $i; ?>').val();
					var staffnm = document.getElementById("drpnewstf<?php echo $i; ?>").options[(document.getElementById("drpnewstf<?php echo $i; ?>").options.selectedIndex)].text;
					var vend = $('.drpnewvend<?php echo $i; ?>').val();
					var vendnm = document.getElementById("drpnewvend<?php echo $i; ?>").options[(document.getElementById("drpnewvend<?php echo $i; ?>").options.selectedIndex)].text;
					var vprice = $('.txtvprice<?php echo $i; ?>').val();
					var reamrk = $('.txtremark<?php echo $i; ?>').val();
					
					var length = $('.txtlength<?php echo $i; ?>').val();
					var width = $('.txtwidth<?php echo $i; ?>').val();
					var txttype = $('.txttype<?php echo $i; ?>').val();
					var txtassdtl = $('.txtassdtl<?php echo $i; ?>').val();
					if(eqpid=='')
					{
						alert("Plz Select Equipment.");
						return false;
					}
					if(rate=='')
					{
						alert("Plz Fill Rate.");
						return false;
					 }
					if(rate != "")
					{
						if(isNaN(rate))
						{
							alert("Please Only Numeric in rate!!! (Allowed input:0-9)");
							return false;
						}
						// if(rate == 0)
						// {
							// alert("Can't Give rate 0");
							// return false;
						// }
					}
					if(qty=='')
					{
						alert("Plz Fill Qty.");
						return false;
					}
					if(qty != "")
					{
						if(isNaN(qty))
						{
							alert("Please Only Numeric in qty!!! (Allowed input:0-9)");
							return false;
						}
						if(qty == 0)
						{
							alert("Can't GIve qty 0");
							return false;
						}
					}
					if(txttype==2)
					{
						if(length=='')
						{
							alert("Plz Fill length.");
							return false;
						}
						if(width=='')
						{
							alert("Plz Fill width.");
							return false;
						}
					}
					if(length != "")
					{
						if(isNaN(length))
						{
							alert("Please Only Numeric in length!!! (Allowed input:0-9)");
							return false;
						}
						if(length == 0)
						{
							alert("Can't GIve length 0");
							return false;
						}
					}
					if(width != "")
					{
						if(isNaN(width))
						{
							alert("Please Only Numeric in width!!! (Allowed input:0-9)");
							return false;
						}
						if(width == 0)
						{
							alert("Can't GIve width 0");
							return false;
						}
					}					
					i++;
					var div=
							'<tr id="eqrow'+i+'">'+
								'<input   type="hidden"  id="txtieqp<?php echo $i;?>" name="txtieqp<?php echo $i;?>" value="'+eqpid+'">'+
								'<input  type="hidden"  id="txtieqpnm<?php echo $i;?>" name="txtieqpnm<?php echo $i;?>" value="'+eqpnm+'">'+
								'<input  type="hidden"  id="txtirate<?php echo $i;?>" name="txtirate<?php echo $i;?>" value="'+rate+'">'+
								'<input  type="hidden"  id="txtiqty<?php echo $i;?>" name="txtiqty<?php echo $i;?>" value="'+qty+'">'+
								'<input   type="hidden" id="txtiamt<?php echo $i;?>" name="txtiamt<?php echo $i;?>"  class="txtiamt"  value="'+amt+'">'+
								'<input   type="hidden"  id="txtistf<?php echo $i;?>" name="txtistf<?php echo $i;?>" value="'+staff+'">'+
								'<input  type="hidden"  id="txtistfnm<?php echo $i;?>" name="txtistfnm<?php echo $i;?>" value="'+staffnm+'">'+
								'<input  type="hidden"  id="txtivend<?php echo $i;?>" name="txtivend<?php echo $i;?>" value="'+vend+'">'+
								'<input type="hidden"  id="txtivendnm<?php echo $i;?>" name="txtivendnm<?php echo $i;?>" value="'+vendnm+'">'+
								'<input  type="hidden"  id="txtivendprice<?php echo $i;?>" name="txtivendprice<?php echo $i;?>" class="txtivendprice" value="'+vprice+'">'+
								'<input   type="hidden"  id="txtiremark<?php echo $i;?>" name="txtiremark<?php echo $i;?>" value="'+reamrk+'">'+
								'<input  type="hidden"  id="txtilength<?php echo $i;?>" name="txtilength<?php echo $i;?>" value="'+length+'">'+
								'<input   type="hidden"  id="txtiwidth<?php echo $i;?>" name="txtiwidth<?php echo $i;?>" value="'+width+'">'+
								
								
								
								'<td>'+ eqpnm+'</td>'+
								'<td>'+ txtassdtl+'</td>'+
								'<td>'+ rate+'</td>'+
								'<td>'+ qty+'</td>'+
								'<td class="amount">'+ amt+'</td>'+						
								'<td>'+ staffnm+'</td>'+						
								'<td>'+ vendnm+'</td>'+
								'<td>'+ vprice+'</td>'+
								'<td>'+ reamrk+'</td>'+						
								'<td><a class="remove<?php echo $i; ?>" id="'+i+'" style= "cursor:pointer; margin-left:15px;">'+
									'<i class="fa fa-times" aria-hidden="true"></i>'+							
								'</a></td>'+
							'</tr>';							
					$('#eqprec<?php echo $i; ?>').append(div);
					
					// var txtrescharge = $('.txtrescharge').val();
					// if(txtrescharge == "")
					// {			
						// var gtot = [];
						// $.each($('.txtiamt'), function(){            
							// gtot.push($(this).val());
						// });
						// var total_amt = 0;
						// $.each(gtot,function() {
							// total_amt += parseInt(this);
						// });			
						// var vtot = [];
						// $.each($('.txtivendprice'), function(){            
							// vtot.push($(this).val());
						// });
						// var total_vamt = 0;
						// $.each(vtot,function() {
							// total_vamt += parseInt(this);
						// });
						// $('.txtcharge').val(total_amt);
						// $('.txtvcharge').val(total_vamt);
					// }

					// $('.drpneweqp').val('');
					// $('.txtrate').val('');
					// $('.drpqty').val('1');
					// $('.txtamt').val('');
					// $('.drpnewstf').val('');
					// $('.drpnewvend').val('');
					// $('.txtvprice').val('');
					// $('.txtremark').val('');
					// $('.txtlength').val('');
					// $('.txtwidth').val('');
					// $('#labelLT').hide();
					// $('#labelWT').hide();
					// $('#txtlength').hide();
					// $('#txtwidth').hide();					
				});
				
				$(document).on('click','.remove<?php echo $i; ?>',function()
				{
					var button_id = $(this).attr("id");
					$("#eqrow"+button_id+"").remove();
					
					// var txtrescharge = $('.txtrescharge').val();
					// if(txtrescharge == "")
					// {
						// var gtot = [];
						// $.each($('.txtiamt'), function(){            
							// gtot.push($(this).val());
						// });
						// var total_amt = 0;
						// $.each(gtot,function() {
							// total_amt += parseInt(this);
						// });				
						// var vtot = [];
						// $.each($('.txtivendprice'), function(){            
							// vtot.push($(this).val());
						// });
						// var total_vamt = 0;
						// $.each(vtot,function() {
							// total_vamt += parseInt(this);
						// });				
						// $('.txtcharge').val(total_amt);
						// $('.txtvcharge').val(total_vamt);
					// }
				});
				
				$('#addres<?php echo $i; ?>').on('click',function()
				{
					var resid = $('.drp_resource<?php echo $i; ?>').val();
					var resnm = document.getElementById("drp_resource<?php echo $i; ?>").options[(document.getElementById("drp_resource<?php echo $i; ?>").options.selectedIndex)].text;		
					
					var resvend = $('.drpnewresvend<?php echo $i; ?>').val();
					var resvendnm = document.getElementById("drpnewresvend<?php echo $i; ?>").options[(document.getElementById("drpnewresvend<?php echo $i; ?>").options.selectedIndex)].text;
					var resvprice = $('.txtresvprice<?php echo $i; ?>').val();
			
					
					var qty = $('.txtresqty<?php echo $i; ?>').val();
					var rate = $('.txtresrate<?php echo $i; ?>').val();
					var amt = $('.txtresamt<?php echo $i; ?>').val();
					
					var resreamrk = $('.txtresremark<?php echo $i; ?>').val();
					
					if(resid=='')
					{
						alert("Plz Select Equipment.");
						return false;
					}
					if(rate=='')
					{
						alert("Plz Fill Rate.");
						return false;
					 }
					if(rate != "")
					{
						if(isNaN(rate))
						{
							alert("Please Only Numeric in rate!!! (Allowed input:0-9)");
							return false;
						}
						// if(rate == 0)
						// {
							// alert("Can't Give rate 0");
							// return false;
						// }
					}
					if(qty=='')
					{
						alert("Plz Fill Qty.");
						return false;
					}
					if(qty != "")
					{
						if(isNaN(qty))
						{
							alert("Please Only Numeric in qty!!! (Allowed input:0-9)");
							return false;
						}
						if(qty == 0)
						{
							alert("Can't GIve qty 0");
							return false;
						}
					}		
					
					k++;
					var resdiv=
							
							
							'<tr id="resrow'+k+'">'+
								'<input   type="hidden"  id="txtires<?php echo $i; ?>" name="txtires<?php echo $i; ?>" value="'+resid+'">'+
								'<input  type="hidden"  id="txtiresnm<?php echo $i; ?>" name="txtiresnm<?php echo $i; ?>" value="'+resnm+'">'+
								'<input  type="hidden"  id="txtiqty<?php echo $i; ?>" name="txtiqty<?php echo $i; ?>" value="'+qty+'">'+
								'<input  type="hidden"  id="txtirate<?php echo $i; ?>" name="txtirate<?php echo $i; ?>" value="'+rate+'">'+
								'<input   type="hidden" id="rtxtiamt<?php echo $i; ?>" name="rtxtiamt<?php echo $i; ?>" class="rtxtiamt<?php echo $i; ?>" value="'+amt+'">'+
								
								'<input  type="hidden"  id="txtivend<?php echo $i; ?>" name="txtivend<?php echo $i; ?>" value="'+resvend+'">'+
								'<input type="hidden"  id="txtivendnm<?php echo $i; ?>" name="txtivendnm<?php echo $i; ?>" value="'+resvendnm+'">'+
								'<input  type="hidden"  id="txtiresvendprice<?php echo $i; ?>" name="txtiresvendprice<?php echo $i; ?>" class="txtiresvendprice<?php echo $i; ?>" value="'+resvprice+'">'+
								'<input   type="hidden"  id="txtiremark<?php echo $i; ?>" name="txtiremark<?php echo $i; ?>" value="'+resreamrk+'">'+
								
										
								'<td>'+ resnm+'</td>'+
								'<td>'+ rate+'</td>'+
								'<td>'+ qty+'</td>'+
								'<td class="amount">'+ amt+'</td>'+						
								'<td>'+ resvendnm+'</td>'+
								'<td>'+ resvprice+'</td>'+						
								'<td>'+ resreamrk+'</td>'+						
								'<td><a class="resremove<?php echo $i; ?>" id="'+k+'" style= "cursor:pointer; margin-left:15px;">'+
									'<i class="fa fa-times" aria-hidden="true"></i>'+							
								'</a></td>'+
							'</tr>';					
							
					$('#resrec<?php echo $i; ?>').append(resdiv);
					
					// var rgtot = [];
					// $.each($('.rtxtiamt<?php echo $i; ?>'), function(){            
						// rgtot.push($(this).val());
					// });
					// var rtotal_amt = 0;
					// $.each(rgtot,function() {
						// rtotal_amt += parseInt(this);
					// });
					
					// $('.txtcharge<?php echo $i; ?>').val(rtotal_amt);
					// $('.txtrescharge<?php echo $i; ?>').val(rtotal_amt);
					// $('.drp_resource<?php echo $i; ?>').val('');
					// $('.txtresrate<?php echo $i; ?>').val('');
					// $('.txtresqty<?php echo $i; ?>').val('1');
					// $('.txtresamt<?php echo $i; ?>').val('');
					
					
					
				});
				
				$(document).on('click','.resremove<?php echo $i; ?>',function()
				{
					var button_id = $(this).attr("id");
					$("#resrow"+button_id+"").remove();	

					// var rgtot = [];
					// $.each($('.rtxtiamt<?php echo $i; ?>'), function(){            
						// rgtot.push($(this).val());
					// });			

					// var rtotal_amt = 0;
					// $.each(rgtot,function() {
						// rtotal_amt += parseInt(this);
					// });
					
					// $('.txtcharge<?php echo $i; ?>').val(rtotal_amt);
					// $('.txtrescharge<?php echo $i; ?>').val(rtotal_amt);
				});
				
				//update the eventplaces detail
				$('#updateEpd<?php echo $i; ?>').click(function()
				{
					
					// alert('hi <?php echo $i;?>');
					// return false;
					
					var epldtlid = $('#epldtlid<?php echo $i; ?>').val();					
					var txtvenue = $('#txtvenue<?php echo $i; ?>').val();
					var txthall = $('#txthall<?php echo $i; ?>').val();
					var txtldmark = $('#txtldmark<?php echo $i; ?>').val();
					var txtfunction = $('#txtfunction<?php echo $i; ?>').val();
					var txtfromdate = $('#txtfromdate<?php echo $i; ?>').val();
					var txttodate = $('#txttodate<?php echo $i; ?>').val();
					
					
					$.ajax({
							url : 'includes/eventDetailPost.php',
							type : 'POST',
							async : false,
							data : {
								'PlacesUpdate'  : 1,								
								'epldtlid' 	: epldtlid,	
								'txtvenue' 	: txtvenue,
								'txthall' 	: txthall,
								'txtldmark' 	: txtldmark,
								'txtfunction' 	: txtfunction,
								'txtfromdate' 	: txtfromdate,
								'txttodate' 	: txttodate,
								
								
							},
							success : function(v)
							{
								alert('Updated Successfully!!!');
								$('#txtvenue<?php echo $i; ?>').attr('readonly','txtvenue<?php echo $i; ?>');
								$('#txthall<?php echo $i; ?>').attr('readonly','txthall<?php echo $i; ?>');								
								$('#txtldmark<?php echo $i; ?>').attr('readonly','txtldmark<?php echo $i; ?>');
								$('#txtfunction<?php echo $i; ?>').attr('readonly','txtfunction<?php echo $i; ?>');
								$('#txtfromdate<?php echo $i; ?>').attr('readonly','txtfromdate<?php echo $i; ?>');
								$('#txttodate<?php echo $i; ?>').attr('readonly','txttodate<?php echo $i; ?>');

								$("#edtvn<?php echo $i;?>").show();
								$("#shwvn<?php echo $i;?>").hide();
							}
							
						});			
				});
				//end
				
				//insert the resorce detail
				$('#updResD<?php echo $i; ?>').click(function()
				{									
					var contres = $('#contres').val();
					var clcharge = $('#clcharge').val();
					var clpdcharge = $('#clpdcharge').val();					
					var txmd = $('#txmd').val();
					var txrat = $('#txrat').val();
					var txamt = $('#txamt').val();
					var totammt = $('#totammt').val();					
					var vdcharge = $('#vdcharge').val();
					
					var epldtlid = $('#epldtlid<?php echo $i; ?>').val();
					var evntid = $('#evntid<?php echo $i; ?>').val();
					
					var txtires = [];
					$.each($("input[name='txtires<?php echo $i;?>']"), function(){            
						 txtires.push($(this).val());
					});
					var txtiresnm = [];
					$.each($("input[name='txtiresnm<?php echo $i;?>']"), function(){            
						 txtiresnm.push($(this).val());
					});
					var txtiqty = [];
					$.each($("input[name='txtiqty<?php echo $i;?>']"), function(){            
						 txtiqty.push($(this).val());
					});
					var txtirate = [];
					$.each($("input[name='txtirate<?php echo $i;?>']"), function(){            
						 txtirate.push($(this).val());
					});
					var rtxtiamt = [];
					$.each($("input[name='rtxtiamt<?php echo $i;?>']"), function(){            
						 rtxtiamt.push($(this).val());
					});	
					
					var txtivend = [];
					$.each($("input[name='txtivend<?php echo $i;?>']"), function(){            
						 txtivend.push($(this).val());
					});
					
					var txtiremark = [];
					$.each($("input[name='txtiremark<?php echo $i;?>']"), function(){            
						 txtiremark.push($(this).val());
					});
					
					var txtiresvendprice =[];
					$.each($("input[name='txtiresvendprice<?php echo $i;?>']"), function(){            
						 txtiresvendprice.push($(this).val());
					});
					
					if( contres > 0 )
					{													
						var restotal_amt = 0;
						$.each(rtxtiamt,function() {
							restotal_amt += parseInt(this);
						});
						clcharge = parseInt(clcharge) +parseInt(restotal_amt);						
						vdcharge = parseInt(vdcharge) + parseInt(txtiresvendprice);
						
						if(txmd=='Yes')
						{							
							var servtax  =	(parseInt(restotal_amt)* parseFloat(txrat))/100;
							txamt =  parseInt(txamt) + parseInt(servtax);
							totammt = parseInt(totammt) +parseInt(restotal_amt) + parseInt(servtax) ;
						}
						else
						{
							totammt = parseInt(totammt) +parseInt(restotal_amt);
						}
						
						
					}
					
					$.ajax({
							url : 'includes/eventDetailPost.php',
							type : 'POST',
							async : false,
							data : {
								'ResourceIns'  : 1,								
								'epldtlid' 	: epldtlid,	
								'evntid' 	: evntid,
								'txtires' 	: txtires,
								'txtiresnm' 	: txtiresnm,
								'txtiqty' 	: txtiqty,
								'txtirate' 	: txtirate,
								'rtxtiamt' 	: rtxtiamt,
								
								'totammt'   : totammt,
								'txamt'     : txamt,
								'clcharge' : clcharge,
								'vdcharge' : vdcharge,
								'txtiresvendprice' :txtiresvendprice,
								'txtivend' : txtivend,
								'txtiremark' : txtiremark,
								
							},
							success : function(v)
							{
								alert('Updated Resources!!!');
								
								$("#shwres<?php echo $i;?>").hide();
								$("#resinfo<?php echo $i;?>").hide();
								$("#edtres<?php echo $i;?>").show();
								
								newshowResDtl<?php echo $i; ?> ();
								newshowEqpDtl<?php echo $i; ?> ();
								UpdateAcc();
							}
							
						});			
				});
				//end
				//insert the Equipment detail
				$('#updEqpD<?php echo $i; ?>').click(function()
				{									
					var contres = $('#contres').val();
					var clcharge = $('#clcharge').val();
					var clpdcharge = $('#clpdcharge').val();					
					var txmd = $('#txmd').val();
					var txrat = $('#txrat').val();
					var txamt = $('#txamt').val();
					var totammt = $('#totammt').val();	
					var vdcharge = $('#vdcharge').val();
					
					
					var epldtlid = $('#epldtlid<?php echo $i; ?>').val();
					var evntid = $('#evntid<?php echo $i; ?>').val();					
					var txtieqp = [];
					$.each($("input[name='txtieqp<?php echo $i;?>']"), function(){            
						 txtieqp.push($(this).val());
					});
					var txtirate = [];
					$.each($("input[name='txtirate<?php echo $i;?>']"), function(){            
						 txtirate.push($(this).val());
					});
					var txtiqty = [];
					$.each($("input[name='txtiqty<?php echo $i;?>']"), function(){            
						 txtiqty.push($(this).val());
					});					
					var txtiamt = [];
					$.each($("input[name='txtiamt<?php echo $i;?>']"), function(){            
						 txtiamt.push($(this).val());
					});	
					var txtistf = [];
					$.each($("input[name='txtistf<?php echo $i;?>']"), function(){            
						 txtistf.push($(this).val());
					});	
					
					var txtivend = [];
					$.each($("input[name='txtivend<?php echo $i;?>']"), function(){            
						 txtivend.push($(this).val());
					});
					var txtivendprice = [];
					$.each($("input[name='txtivendprice<?php echo $i;?>']"), function(){            
						 txtivendprice.push($(this).val());
					});
					var txtiremark = [];
					$.each($("input[name='txtiremark<?php echo $i;?>']"), function(){            
						 txtiremark.push($(this).val());
					});
					var txtilength = [];
					$.each($("input[name='txtilength<?php echo $i;?>']"), function(){            
						 txtilength.push($(this).val());
					});
					var txtiwidth = [];
					$.each($("input[name='txtiwidth<?php echo $i;?>']"), function(){            
						 txtiwidth.push($(this).val());
					});
					
					if( contres == 0 )
					{													
						var eqptotal_amt = 0;
						$.each(txtiamt,function() {
							eqptotal_amt += parseInt(this);
						});
						var vendtotal_amt = 0;
						$.each(txtivendprice,function() {
							vendtotal_amt += parseInt(this);
						});
						clcharge = parseInt(clcharge) + parseInt(eqptotal_amt);	
						
						vdcharge = parseInt(vdcharge) + parseInt(vendtotal_amt); 
						// alert(clcharge);
						// alert(vdcharge);
						
						if(txmd=='Yes')
						{							
							var servtax  =	(parseInt(eqptotal_amt)* parseFloat(txrat))/100;
							txamt =  parseInt(txamt) + parseInt(servtax);
							totammt = parseInt(totammt) +parseInt(eqptotal_amt) + parseInt(servtax) ;
						}
						else
						{
							totammt = parseInt(totammt) +parseInt(eqptotal_amt);
						}
						// alert(txamt);
						// alert(totammt);
						// return false;
					}
					
					$.ajax({
							url : 'includes/eventDetailPost.php',
							type : 'POST',
							async : false,
							data : {
								'EquipmentIns'  : 1,								
								'epldtlid' 	: epldtlid,	
								'evntid' 	: evntid,								
								'txtieqp' 	: txtieqp,
								'txtirate' 	: txtirate,
								'txtiqty' 	: txtiqty,								
								'txtiamt' 	: txtiamt,								
								'txtistf' 	: txtistf,
								'txtivend' 	: txtivend,
								'txtivendprice' 	: txtivendprice,								
								'txtiremark' 	: txtiremark,
								'txtilength' 	: txtilength,
								'txtiwidth' 	: txtiwidth,
								
								'totammt'   : totammt,
								'txamt'     : txamt,
								'clcharge' : clcharge,
								'vdcharge' : vdcharge,
								
							},
							success : function(v)
							{
								alert('Updated Equipemnt!!!');
								$("#shweqp<?php echo $i;?>").hide();
								$("#eqpinfo<?php echo $i;?>").hide();
								$("#edteqp<?php echo $i;?>").show();
								
								newshowResDtl<?php echo $i; ?> ();
								newshowEqpDtl<?php echo $i; ?> ();
								UpdateAcc();
							}
							
						});			
				});
				//end				
				
				
				
				newshowResDtl<?php echo $i; ?> ();
				newshowEqpDtl<?php echo $i; ?> ();
				shownewEqp<?php echo $i;?>();
				shownewStf<?php echo $i;?>();
				shownewVend<?php echo $i;?>();
				shownewRes<?php echo $i;?>();
				
				$('#labelLT<?php echo $i; ?>').hide();
				$('#labelWT<?php echo $i; ?>').hide();
				$('#txtlength<?php echo $i; ?>').hide();
				$('#txtwidth<?php echo $i; ?>').hide();
				
				
			</script>
			<?php
		}		
	}
	if(isset($_POST['newshowResDtl']))
	{
		$data = showResourceDtl($conn,$_POST['epldtlid']);
		$showResCnt = count($data);
		for($i=0;$i<$showResCnt;$i++)
		{
		 ?>	
			
			<tr id="resrow<?php echo $i; ?>">
				<!--
				<input id="hdn[0][1][resource][txtires]" name="hdn[0][1][resource][txtires]" value="2" type="hidden">
				<input id="hdn[0][1][resource][txtiresnm]" name="hdn[0][1][resource][txtiresnm]" value="cinemetography" type="hidden">
				<input id="hdn[0][1][resource][txtiqty]" name="hdn[0][1][resource][txtiqty]" value="1" type="hidden">
				<input id="hdn[0][1][resource][txtirate]" name="hdn[0][1][resource][txtirate]" value="4500" type="hidden">
				-->
				<input id="rtxtiamt<?php echo $data[$i]['res_pls_id']; ?>" class="rtxtiamt" name="rtxtiamt" value="<?php echo $data[$i]['amount']; ?>" type="hidden">				
				<input id="rtxtallpamt<?php echo $data[$i]['res_pls_id']; ?>" class="rtxtallpamt<?php echo $data[$i]['event_places_id']; ?>" name="rtxtiamt" value="<?php echo $data[$i]['amount']; ?>" type="hidden">
				
				<input id="rtxtivendprice<?php echo $data[$i]['res_pls_id']; ?>" class="rtxtivendprice" name="rtxtivendprice" value="<?php echo $data[$i]['res_vend_price']; ?>" type="hidden">
				<input id="rtxtallpvendprice<?php echo $data[$i]['res_pls_id']; ?>" class="rtxtallpvendprice<?php echo $data[$i]['event_places_id']; ?>" name="rtxtallpvendprice" value="<?php echo $data[$i]['res_vend_price']; ?>" type="hidden">
				
				
				<td><?php echo $data[$i]['res_name']; ?></td>
				<td><?php echo $data[$i]['rate']; ?></td>
				<td><?php echo $data[$i]['qty']; ?></td>
				<td class="amount"><?php echo $data[$i]['amount']; ?></td>
				<td><?php echo $data[$i]['vendor_name']."(".$data[$i]['vendor_cmp'].")"; ?></td>
				<td><?php echo $data[$i]['res_vend_price']; ?></td>
				<td><?php echo $data[$i]['res_remark']; ?></td>
				
				<td>
					<a data-id = "<?php echo $data[$i]['res_pls_id']; ?>" class="resdel" style="cursor:pointer; margin-left:15px;">
						<i class="fa fa-times" aria-hidden="true"></i>
					</a>
				</td>
			</tr>
            
		 <?php	
		}
		
	}
	if(isset($_POST['newshowEqpDtl']))
	{
		$data = showEquipmentDtl($conn,$_POST['epldtlid']);
		//print_r($data1);
		
		
		
		
		$showEqpCnt = count($data);
		for($j=0;$j<$showEqpCnt;$j++)
		{
			$r = mysql_query("select ea.as_name from equipment_mst em 
			right join eq_accessories ea on em.category_id = ea.eq_id
						where em.eq_id = '".$data[$j]['eq_id']."' ");		
			$check = array();		
			while($row2 = mysql_fetch_assoc($r))
			{
				$check[] = implode($row2);		
			}
			$result = implode(", ",$check);
		 ?>	
			
			<tr id="eqrow<?php echo $j; ?>">
				<!--
				<input id="hdn[0][1][equipment][txtieqp]" name="hdn[0][1][equipment][txtieqp]" value="4" type="hidden">
				<input id="hdn[0][1][equipment][txtieqpnm]" name="hdn[0][1][equipment][txtieqpnm]" value="laptop" type="hidden">
				<input id="hdn[0][1][equipment][txtirate]" name="hdn[0][1][equipment][txtirate]" value="15000" type="hidden">
				<input id="hdn[0][1][equipment][txtiqty]" name="hdn[0][1][equipment][txtiqty]" value="1" type="hidden">
				
				<input id="hdn[0][1][equipment][txtistf]" name="hdn[0][1][equipment][txtistf]" value="16" type="hidden">
				<input id="hdn[0][1][equipment][txtistfnm]" name="hdn[0][1][equipment][txtistfnm]" value="ashish" type="hidden">
				<input id="hdn[0][1][equipment][txtivend]" name="hdn[0][1][equipment][txtivend]" value="" type="hidden">
				<input id="hdn[0][1][equipment][txtivendnm]" name="hdn[0][1][equipment][txtivendnm]" value="Select Vendor" type="hidden">
				<input id="hdn[0][1][equipment][txtivendprice]" class="txtivendprice" name="hdn[0][1][equipment][txtivendprice]" value="" type="hidden">
				<input id="hdn[0][1][equipment][txtiremark]" name="hdn[0][1][equipment][txtiremark]" value="" type="hidden">
				<input id="hdn[0][1][equipment][txtilength]" name="hdn[0][1][equipment][txtilength]" value="" type="hidden">
				<input id="hdn[0][1][equipment][txtiwidth]" name="hdn[0][1][equipment][txtiwidth]" value="" type="hidden">
				-->
				<input id="txtiamt<?php echo $data[$j]['places_id']; ?>" class="txtiamt" name="txtiamt" value="<?php echo $data[$j]['amount']; ?>" type="hidden">
				<input id="txtivendprice<?php echo $data[$j]['places_id']; ?>" class="txtivendprice" name="txtivendprice" value="<?php echo $data[$j]['vend_price']; ?>" type="hidden">
				
				<input id="txtallpamt<?php echo $data[$j]['places_id']; ?>" class="txtallpamt<?php echo $data[$j]['event_places_id']; ?>" name="txtallpamt" value="<?php echo $data[$j]['amount']; ?>" type="hidden">
				<input id="txtallpvendprice<?php echo $data[$j]['places_id']; ?>" class="txtallpvendprice<?php echo $data[$j]['event_places_id']; ?>" name="txtallpvendprice" value="<?php echo $data[$j]['vend_price']; ?>" type="hidden">
				
				<td><?php echo $data[$j]['eq_name']; ?></td>
				<td><?php echo $result; ?></td>
				<td><?php echo $data[$j]['rate']; ?></td>
				<td><?php echo $data[$j]['qty']; ?></td>
				<td class="amount"><?php echo $data[$j]['amount']; ?></td>
				<td><?php echo $data[$j]['first_name']; ?></td>
				<td><?php echo $data[$j]['vendor_name']; ?></td>
				<td><?php echo $data[$j]['vend_price']; ?></td>
				<td><?php echo $data[$j]['remark']; ?></td>
				<td>
				<a data-id = "<?php echo $data[$j]['places_id']; ?>" class="eqpdel" style="cursor:pointer; margin-left:15px;">
				<i class="fa fa-times" aria-hidden="true"></i>
				</a>
				</td>
			</tr>
            
		 <?php	
		}
		
	}
	if(isset($_POST['resdel']))
	{		
		//$date = date('Y-m-d H:i:s');
		delResourceUpd($conn,$_POST['id']);
		updResEventMst($conn,$_POST['evnt_id'],$_POST['totammt'],$_POST['txamt'],$_POST['clcharge'],$_POST['vdcharge']);
	}
	if(isset($_POST['epddel']))
	{		
		//$date = date('Y-m-d H:i:s');
		if( $_POST['contres'] == 0 )
		{													
			
			$clcharge = $_POST['clcharge'] - $_POST['eqp_amt'] ;						
			$vdcharge = $_POST['vdcharge'] - $_POST['ven_amt'] ; 
			
			
			if($_POST['txmd']=='Yes')
			{							
				$servtax  =	($_POST['eqp_amt']*$_POST['txrat'])/100;
				$txamt =  $_POST['txamt'] - $servtax;
				$totammt = $_POST['totammt'] - $_POST['eqp_amt'] - $servtax ;
			}
			else
			{
				$totammt = $_POST['totammt'] - $_POST['eqp_amt'];
			}
			// echo $clcharge."<br>";
			// echo $vdcharge."<br>";
			// echo $txamt."<br>";
			// echo $totammt."<br>";
			updEqpEventMst($conn,$_POST['event_id'],$totammt,$txamt,$clcharge,$vdcharge);
		}
		else
		{
			
			$clcharge = $_POST['clcharge'] - $_POST['res_amt'] ;	
			
			$vdcharge = $_POST['vdcharge'] - $_POST['rven_amt'] ;
			
			if($_POST['txmd']=='Yes')
			{							
				$servtax  =	($_POST['res_amt']*$_POST['txrat'])/100;
				$txamt =  $_POST['txamt'] - $servtax;
				$totammt = $_POST['totammt'] - $_POST['res_amt'] - $servtax ;
			}
			else
			{
				$totammt = $_POST['totammt'] - $_POST['res_amt'];
			}
			// echo $clcharge."<br>";
			// echo $txamt."<br>";
			// echo $totammt."<br>";
			updResEventMst($conn,$_POST['event_id'],$totammt,$txamt,$clcharge,$vdcharge);
		}		
		delEventPlacesUpd($conn,$_POST['id']);
	}
	if(isset($_POST['eqpdel']))
	{		
		//$date = date('Y-m-d H:i:s');
		delEquipmentUpd($conn,$_POST['id']);
		updEqpEventMst($conn,$_POST['evnt_id'],$_POST['totammt'],$_POST['txamt'],$_POST['clcharge'],$_POST['vdcharge']);
	}
	if(isset($_POST['edit']))
	{		
		$q = mysql_query("SELECT `event_id`,`event_name`,`event_ds`,`client_name`,`client_cmp`,`client_email`,`client_work_mob`,`client_home_mob`,`client_mob`,`status`,`payment_status`,`client_charges`,`client_paid_amt`,`client_discount_amt`,`from_date`,`total_amt`,`job_data_1`,`job_data_2`,`vendor_charges`,`vd_paid_amt`,`taxmode`,`service_tax_rate`,`service_tax_amt` FROM event_mst where `event_id` = '".$_POST['id']."' ");
		$row = mysql_fetch_array($q);
		header("Content-type: text/x-json");
		echo json_encode($row);
		exit();	
		
	}
	
	if(isset($_POST['showlast']))
	{		
		$q = mysql_query("SELECT `event_id`,`event_name`,`event_ds`,`client_name`,`client_cmp`,`client_email`,`client_work_mob`,`client_home_mob`,`client_mob`,`status`,`payment_status`,`client_charges`,`client_paid_amt`,`client_discount_amt`,`from_date`,`total_amt`,`job_data_1`,`job_data_2`,`vendor_charges`,`vd_paid_amt`,`taxmode`,`service_tax_rate`,`service_tax_amt` FROM event_mst where `event_id` = '".$_POST['id']."' ");
		$row = mysql_fetch_array($q);
		header("Content-type: text/x-json");
		echo json_encode($row);
		exit();	
		
	}
	if(isset($_POST['countRes']))
	{		
		$q = mysql_query("select count(*) as 'Count' from res_places_dtl where event_id='".$_POST['id']."'");
		$row = mysql_fetch_array($q);
		header("Content-type: text/x-json");
		echo json_encode($row);
		exit();	
		
	}
	
	if(isset($_POST['UpdateAcc']))
	{		
		$q = mysql_query("select `total_amt`,`client_charges`,`vendor_charges`,`service_tax_amt` from `event_mst` where event_id='".$_POST['id']."'");
		$row = mysql_fetch_array($q);
		header("Content-type: text/x-json");
		echo json_encode($row);
		exit();	
		
	}
	
	if(isset($_POST['showUpdtrn']))
	{		
		$q = mysql_query("SELECT `payment_status`,`client_paid_amt` FROM event_mst where `event_id` = '".$_POST['uepid']."' ");
		$row = mysql_fetch_array($q);
		header("Content-type: text/x-json");
		echo json_encode($row);
		exit();	
		
	}
	if(isset($_POST['vend_add_edit']))
	{	
		
		$vap = mysql_query("select `event_vendor_id`,`event_id` from `event_vendor_dtl` where `event_vendor_id` = '".$_POST['event_vend_id']."' ");
		$vendrow = mysql_fetch_array($vap);
		header("Content-type: text/x-json");
		echo json_encode($vendrow);
		exit();	
		
	}
	
	
	
	if(isset($_POST['vend_show_trn']))
	{			
		$vendpaidtrn = showEventVendpaidtrn($conn,$_POST['txtevent_vend_id'],$_POST['txtvend_evnt_id']);		
		
		$showvendpaidtrnCnt = count($vendpaidtrn);
		?>
		
		<div class="Heading">			
			<div class="Cell">Event Id</div>
			<div class="Cell">Event Vendor Id</div>
			<div class="Cell">Payment Date</div>
			<div class="Cell">Payment Mode</div>
			<div class="Cell">Bank Name</div>
			<div class="Cell">Cheque No</div>
			<div class="Cell">Amount</div>			
		</div>
		<?php
		for($a=0;$a<$showvendpaidtrnCnt;$a++)
		{
		 ?>	
			
			<div class="Row" >			
				<div class="Cell"><?php echo $vendpaidtrn[$a]['event_id'];?></div>
				<div class="Cell"><?php echo $vendpaidtrn[$a]['event_vendor_id'];?></div>
				<div class="Cell"><?php if($vendpaidtrn[$a]['payment_date']== ''){echo "null";}else{echo $vendpaidtrn[$a]['payment_date']; } ?></div>
				<div class="Cell"><?php if($vendpaidtrn[$a]['payment_mode']== ''){echo "null";}else{echo $vendpaidtrn[$a]['payment_mode']; } ?></div>
				<div class="Cell"><?php if($vendpaidtrn[$a]['vend_bank_name']== ''){echo "null";}else{echo $vendpaidtrn[$a]['vend_bank_name']; } ?></div>
				<div class="Cell"><?php if($vendpaidtrn[$a]['vend_cheque_no']== ''){echo "null";}else{echo $vendpaidtrn[$a]['vend_cheque_no']; } ?></div>
				<div class="Cell"><?php  if($vendpaidtrn[$a]['paid_amt']== ''){echo "null";}else{echo $vendpaidtrn[$a]['paid_amt']; } ?></div>
				
				
			</div>
            
		 <?php	
		}	
		
	}
	
	
	if(isset($_POST['showpaidtrn']))
	{			
		$paidtrn = showpaidtrn($conn,$_POST['epid']);		
		
		$showpaidtrnCnt = count($paidtrn);
		?>
		
		<div class="Heading">
			<div class="Cell">Payment Date</div>
			<div class="Cell">Event Id</div>
			<div class="Cell">Amount</div>
			<div class="Cell">Payment Mode</div>
			<div class="Cell">Bank Name</div>
			<div class="Cell">Cheque No</div>
			<div class="Cell">Trn Type</div>
			
		</div>
		<?php
		for($a=0;$a<$showpaidtrnCnt;$a++)
		{
		 ?>	
			
			<div class="Row" >
					<?php $from_date=date_create($paidtrn[$a]['payment_date']);
					$pnm= date_format($from_date,dateFormat);  
					?>		
				<div class="Cell"><?php echo $pnm;?></div>
				<div class="Cell"><?php echo $paidtrn[$a]['event_id'];?></div>
				<div class="Cell"><?php if($paidtrn[$a]['client_paid_amt']== ''){echo "null";}else{echo $paidtrn[$a]['client_paid_amt']; } ?></div>
				<div class="Cell"><?php if($paidtrn[$a]['payment_mode']== ''){echo "null";}else{echo $paidtrn[$a]['payment_mode']; } ?></div>
				<div class="Cell"><?php if($paidtrn[$a]['cheque_no']== ''){echo "";}else{echo $paidtrn[$a]['cheque_no']; } ?></div>
				<div class="Cell"><?php  if($paidtrn[$a]['bank_name']== ''){echo "";}else{echo $paidtrn[$a]['bank_name']; } ?></div>
				<div class="Cell"><?php if($paidtrn[$a]['trn_type']== ''){echo "null";}else{echo $paidtrn[$a]['trn_type']; }  ?></div>
				
			</div>
            
		 <?php	
		}	
		
	}
	//showing vendor paid transaction on event detail in accounting section
	if(isset($_POST['showvendpaidtrn']))
	{			
		$vendpaidtrn = showvendpaidtrn($conn,$_POST['evpeid']);		
		
		$showvendpaidtrnCnt = count($vendpaidtrn);
		?>		
		<?php
		for($a=0;$a<$showvendpaidtrnCnt;$a++)
		{
		 ?>	
			
			<tr>
				<td><?php echo $vendpaidtrn[$a]['vendor_name'];?></td>
				<td><?php echo $vendpaidtrn[$a]['vendor_cmp'];?></td>
				<td>					
					<?php 
						if($vendpaidtrn[$a]['cat_id'] == 1) 
						{
							echo "Class 1";
							
						}
						else if($vendpaidtrn[$a]['cat_id'] == 2)
						{
							echo "Class 2";
						}
						else if($vendpaidtrn[$a]['cat_id'] == 3)
						{
							echo "Class 3";
						}
						else if($vendpaidtrn[$a]['cat_id'] == 4)
						{
							echo "Class 4";
						}
						else if($vendpaidtrn[$a]['cat_id'] == '')
						{
							echo "-";
						}
						else 
						{
							echo "-";
						}
					?>
				</td>				
				<td><?php echo $vendpaidtrn[$a]['vendor_charges'];?></td>
				<td><?php echo $vendpaidtrn[$a]['vendor_paid_amt'];?></td>
				<td><?php echo $vendpaidtrn[$a]['vendor_paid_status'];?></td>
				<td><a href="#vend_pop_box" data-id = "<?php echo $vendpaidtrn[$a]['event_vendor_id'];?>" class="vendaddp">Add </a></td>
				
				
			</tr>
            
		 <?php	
		}	
		
	}
	if(isset($_POST['showdataeqp']))
	{		
		
		//$a = mysql_query(" select `em.eq_name` from `event_equipment_dtl` eed inner join equipment_mst em on eed.equipment_id = em.eq_id where `event_places_id` = '".$_POST['epldtl']."' ");
		//$data = mysql_fetch_array($a);
		
		$data1 = showEqpdtl($conn,$_POST['epldtl']);		
		//print_r($data1);
		$showeqpstfCnt = count($data1);	
		for($i=0;$i<$showeqpstfCnt;$i++)
		{
		 ?>				
			 <input type="text" name="eqp" class="small-box" value="<?php echo $data1[$i]['eq_name'];?>" readonly /><br>			
            
		 <?php	
		}	
		
	}
	if(isset($_POST['showdatastf']))
	{			
		$data2 = showstfdtl($conn,$_POST['epldtl']);		
		//print_r($data1);
		$showstfCnt = count($data2);	
		for($i=0;$i<$showstfCnt;$i++)
		{
		 ?>				
			 <input type="text" name="stf" class="small-box" value="<?php echo $data2[$i]['first_name'];?>" readonly /><br>			
            
		 <?php	
		}	
		
	}
?>
