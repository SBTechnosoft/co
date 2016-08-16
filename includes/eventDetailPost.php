
<?php
	include_once('./header.php');
	//include_once('./footer.php');
	
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
		 if($_POST['txtbillno'] != '')
		{
			$s4 = " `bill_no` like '%".$_POST['txtbillno']."%' ";
		}
		if($_POST['txtfpno']!='')
		{
			$s5 = " `fp_no` like '%".$_POST['txtfpno']."%' ";
		}
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
						$inm1= date_format($from_date,dateFormat);  
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
						$inm1= date_format($from_date,dateFormat);  
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
		$showEventPlacesCnt = count($edata);	
		for($i=0;$i<$showEventPlacesCnt;$i++)
		{
			?>
			<div id="dynamic_field">
				<h4>
					Order places 
					<a name="add" id="add" class="btn blue event">
						<i class="icon-plus"></i>								
					</a>									
				</h4>
				<hr />
				<div class="clearfix margin-bottom-10">
					<input type="hidden" class="m-wrap" id="hdn[<?php echo $i; ?>][txtEventPlacesId]" name="hdn[<?php echo $i; ?>][txtEventPlacesId]" value="<?php echo $edata[$i]['event_places_id'];?>"   />
					<input type="hidden" class="m-wrap" id="epldtlid<?php echo $i;?>" name="epldtlid<?php echo $i;?>" value="<?php echo $edata[$i]['event_places_id'];?>"   />
					<br>
					<label for="txtvenue">Venue </label>
					<div class="input-icon left">
						<input class="m-wrap" id="hdn[<?php echo $i; ?>][txtvenue]" name="hdn[<?php echo $i; ?>][txtvenue]" value="<?php echo $edata[$i]['event_vennue'];?>" type="text"  />
					</div>
				</div>
				<div class="clearfix margin-bottom-10">
					<label for="txthall">Hall </label>
					<div class="input-icon left">
						<input class="m-wrap" id="hdn[<?php echo $i; ?>][txthall]" name="hdn[<?php echo $i; ?>][txthall]" value="<?php echo $edata[$i]['event_hall'];?>" type="text"  />
					</div>
				</div>
				<div class="clearfix margin-bottom-10">
					<label for="txtldmark">Land Mark </label>
					<div class="input-icon left">
						<input class="m-wrap" id="hdn[<?php echo $i; ?>][txtldmark]" name="hdn[<?php echo $i; ?>][txtldmark]" value="<?php echo $edata[$i]['event_ld_mark'];?>" type="text" />
					</div>
				</div>
				<div class="clearfix margin-bottom-10">
					<div class="pull-left margin-right-20">
						<label for="txtfromdate">From Date </label>
						<div id="datetimepickerPF<?php echo $i; ?>" class="input-append date">
							<input data-format="dd-MM-yyyy HH:mm PP" class="m-wrap"  type="text" name="hdn[<?php echo $i; ?>][txtfromdate]" id="hdn[<?php echo $i; ?>][txtfromdate]" value="<?php echo $edata[$i]['event_date'];?>" />
							<span class="add-on">
							  <i class="icon-time" class="icon-calendar"></i>
							</span>
						</div>
					</div>
					<div class="pull-right margin-right-20">
					<label for="txttodate" class="well1">To Date </label>
					<div id="datetimepickerPT<?php echo $i; ?>" class="input-append date">
						<input data-format="dd-MM-yyyy HH:mm PP" type="text" class="m-wrap"  name="hdn[<?php echo $i; ?>][txttodate]" id="hdn[<?php echo $i; ?>][txttodate]" value="<?php echo $edata[$i]['event_to_date'];?>" />
						<span class="add-on">
						  <i class="icon-time" class="icon-calendar"></i>
						</span>
					</div>
					</div>									
				</div>
				
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
					
					<a name="addres" class="btn blue" id="addres" style="margin-left:15px;" >
						Add								
					</a>
				</div>
				<br>
				<div class="portlet box green">
					<div class="portlet-title">
						<div class="caption"><i class="icon-reorder"></i>Resources</div>

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
				
				<div>
					<input style="width:190px;" type="text"  value="Equipment" readonly />
					<i class="fa fa-info-circle" title="New" id="newinseqp" data-toggle="tooltip" style="cursor:pointer;"> 
					</i>							
					
					
					<input style="width:120px;" type="text" id="labelLT<?php echo $i; ?>" name="labelLT<?php echo $i; ?>"  value="Length(FT)" readonly />
					<input style="width:120px;" type="text" id="labelWT<?php echo $i; ?>" name="labelWT<?php echo $i; ?>" value="Width(FT)" readonly />
					
					
					
				</div>
				
				<div>
				
					
				
					<select  name="drpneweqp<?php echo $i;?>" id="drpneweqp<?php echo $i;?>" class="medium m-wrap drpneweqp<?php echo $i;?>">											
					</select>
					
					
					<input class="small m-wrap txtlength<?php echo $i; ?>"  type="text"  id="txtlength<?php echo $i; ?>" name="txtlength<?php echo $i; ?>" value=""  />
					<input class="small m-wrap txtwidth<?php echo $i; ?>"  type="text"  id="txtwidth<?php echo $i; ?>" name="txtwidth<?php echo $i; ?>" value="" />
					
				</div>
				<div>
					<input style="width:120px;" type="text"  value="Rate" readonly />
					
					<input style="width:125px;" type="hidden"  value="Type" readonly />
					
					<input style="width:123px;" type="text"  value="Qty" readonly />
					<input style="width:123px;" type="text"  value="Amount" readonly />
					
					<input style="width:200px;" type="text"  value="Staff" readonly />
					<input style="width:200px;" type="text"  value="Vendor" readonly />
					<i class="fa fa-info-circle" title="New" id="newinsvd" data-toggle="tooltip" style="cursor:pointer;"> 
					</i>
					<input style="width:124px;" type="text"  value="Price" readonly />
				
					
				</div>
				<div>
				
					<input class="small m-wrap txtrate<?php echo $i;?>"  type="text"  id="txtrate<?php echo $i;?>" name="txtrate<?php echo $i;?>" value=""  />
					
					<input class="small m-wrap txttype<?php echo $i;?>"  type="hidden"  id="txttype<?php echo $i;?>" name="txttype<?php echo $i;?>" value="" readonly />
					
					<input class="small m-wrap drpqty<?php echo $i;?>"  type="text"  id="drpqty<?php echo $i;?>" name="drpqty<?php echo $i;?>" value="1"  />
					
					<input class="small m-wrap txtamt<?php echo $i;?>" type="text"  id="txtamt<?php echo $i;?>" name="txtamt<?php echo $i;?>" value="" readonly />
					
					<input class="small m-wrap txthamt<?php echo $i;?>" type="hidden"  id="txthamt<?php echo $i;?>" name="txthamt<?php echo $i;?>" value="" readonly />
					
					<select name="drpnewstf<?php echo $i; ?>" id="drpnewstf<?php echo $i; ?>" class="medium m-wrap drpnewstf<?php echo $i; ?>"> 											
					</select>
					<select name="drpnewvend<?php echo $i; ?>" id="drpnewvend<?php echo $i; ?>" class="medium m-wrap drpnewvend<?php echo $i; ?>"> 											
					</select>
					<input class="small m-wrap txtvprice<?php echo $i;?>" type="text"  id="txtvprice<?php echo $i;?>" name="txtvprice<?php echo $i;?>" value="" />
					
					
				</div>
				
				<div>
					<input  type="text"  value="Remark" readonly />
				</div>
				
				<div>
					<textarea rows="2" cols="140" id="txtremark<?php echo $i;?>" class="txtremark<?php echo $i;?>" name="txtremark<?php echo $i;?>"></textarea>
					<a name="addeqp" class="btn blue" id="addeqp" style="margin-left:15px;" >
						Add								
					</a>
				</div>
				<br/>
				
				
				<div class="portlet box green">
					<div class="portlet-title">
						<div class="caption"><i class="icon-reorder"></i>Equipments</div>

					</div>
					<div class="portlet-body">
						<table class="table table-striped table-bordered table-hover table-full-width" id="sample_3">
							<thead>
								<tr>
									<th> Equipment</th>
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
				
			</div>
			<script>
					$('#datetimepickerPF<?php echo $i; ?>').datetimepicker({
					language: 'pt-BR'
				  });
				   $('#datetimepickerPT<?php echo $i; ?>').datetimepicker({
					language: 'pt-BR'
				  });
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
							checkType();
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
						if(ratechg == 0)
						{
							alert("Can't GIve rate 0");
							return false;
						}
					}
					var qty    =   $('#txtresqty<?php echo $i; ?>').val();			
					var tot = parseInt(qty) * parseInt(ratechg);			
					$('#txtresamt<?php echo $i; ?>').val(tot);
					
				});
				
				function checkType()
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
				<input id="hdn[0][1][resource][rtxtiamt]" class="rtxtiamt" name="hdn[0][1][resource][rtxtiamt]" value="4500" type="hidden">
				-->
				<td><?php echo $data[$i]['res_name']; ?></td>
				<td><?php echo $data[$i]['rate']; ?></td>
				<td><?php echo $data[$i]['qty']; ?></td>
				<td class="amount"><?php echo $data[$i]['amount']; ?></td>
				<td>
					<a id="1" class="resremove" style="cursor:pointer; margin-left:15px;">
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
		 ?>	
			
			<tr id="eqrow<?php echo $j; ?>">
				<!--
				<input id="hdn[0][1][equipment][txtieqp]" name="hdn[0][1][equipment][txtieqp]" value="4" type="hidden">
				<input id="hdn[0][1][equipment][txtieqpnm]" name="hdn[0][1][equipment][txtieqpnm]" value="laptop" type="hidden">
				<input id="hdn[0][1][equipment][txtirate]" name="hdn[0][1][equipment][txtirate]" value="15000" type="hidden">
				<input id="hdn[0][1][equipment][txtiqty]" name="hdn[0][1][equipment][txtiqty]" value="1" type="hidden">
				<input id="hdn[0][1][equipment][txtiamt]" class="txtiamt" name="hdn[0][1][equipment][txtiamt]" value="15000" type="hidden">
				<input id="hdn[0][1][equipment][txtistf]" name="hdn[0][1][equipment][txtistf]" value="16" type="hidden">
				<input id="hdn[0][1][equipment][txtistfnm]" name="hdn[0][1][equipment][txtistfnm]" value="ashish" type="hidden">
				<input id="hdn[0][1][equipment][txtivend]" name="hdn[0][1][equipment][txtivend]" value="" type="hidden">
				<input id="hdn[0][1][equipment][txtivendnm]" name="hdn[0][1][equipment][txtivendnm]" value="Select Vendor" type="hidden">
				<input id="hdn[0][1][equipment][txtivendprice]" class="txtivendprice" name="hdn[0][1][equipment][txtivendprice]" value="" type="hidden">
				<input id="hdn[0][1][equipment][txtiremark]" name="hdn[0][1][equipment][txtiremark]" value="" type="hidden">
				<input id="hdn[0][1][equipment][txtilength]" name="hdn[0][1][equipment][txtilength]" value="" type="hidden">
				<input id="hdn[0][1][equipment][txtiwidth]" name="hdn[0][1][equipment][txtiwidth]" value="" type="hidden">
				-->
				<td><?php echo $data[$j]['eq_name']; ?></td>
				<td><?php echo $data[$j]['rate']; ?></td>
				<td><?php echo $data[$j]['qty']; ?></td>
				<td class="amount"><?php echo $data[$j]['amount']; ?></td>
				<td><?php echo $data[$j]['first_name']; ?></td>
				<td><?php echo $data[$j]['vendor_name']; ?></td>
				<td><?php echo $data[$j]['vend_price']; ?></td>
				<td><?php echo $data[$j]['remark']; ?></td>
				<td>
				<a id="1" class="remove" style="cursor:pointer; margin-left:15px;">
				<i class="fa fa-times" aria-hidden="true"></i>
				</a>
				</td>
			</tr>
            
		 <?php	
		}
		
	}
	if(isset($_POST['edit']))
	{		
		$q = mysql_query("SELECT `event_id`,`event_name`,`event_ds`,`client_name`,`client_cmp`,`client_email`,`client_work_mob`,`client_home_mob`,`client_mob`,`status`,`payment_status`,`client_charges`,`client_paid_amt`,`client_discount_amt`,`from_date`,`total_amt`,`job_data_1`,`job_data_2` FROM event_mst where `event_id` = '".$_POST['id']."' ");
		$row = mysql_fetch_array($q);
		header("Content-type: text/x-json");
		echo json_encode($row);
		exit();	
		
	}
	if(isset($_POST['showlast']))
	{		
		$q = mysql_query("SELECT `event_id`,`event_name`,`event_ds`,`client_name`,`client_cmp`,`client_email`,`client_work_mob`,`client_home_mob`,`client_mob`,`status`,`payment_status`,`client_charges`,`client_paid_amt`,`client_discount_amt`,`from_date`,`total_amt`,`job_data_1`,`job_data_2` FROM event_mst where `event_id` = '".$_POST['id']."' ");
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
				<div class="Cell"><?php echo $paidtrn[$a]['payment_date'];?></div>
				<div class="Cell"><?php echo $paidtrn[$a]['event_id'];?></div>
				<div class="Cell"><?php if($paidtrn[$a]['client_paid_amt']== ''){echo "null";}else{echo $paidtrn[$a]['client_paid_amt']; } ?></div>
				<div class="Cell"><?php if($paidtrn[$a]['payment_mode']== ''){echo "null";}else{echo $paidtrn[$a]['payment_mode']; } ?></div>
				<div class="Cell"><?php if($paidtrn[$a]['cheque_no']== ''){echo "null";}else{echo $paidtrn[$a]['cheque_no']; } ?></div>
				<div class="Cell"><?php  if($paidtrn[$a]['bank_name']== ''){echo "null";}else{echo $paidtrn[$a]['bank_name']; } ?></div>
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
