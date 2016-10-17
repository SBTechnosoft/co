<?php
	include_once('./header.php');
	
	if(isset($_POST['show']))
	{	
		$data = showRetailDetail ($conn);
		
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
	if(isset($_POST['edit']))
	{		
		$q = mysql_query("SELECT `event_id`,`event_name`,`event_ds`,`client_name`,`client_cmp`,`client_email`,`client_work_mob`,`client_home_mob`,`client_mob`,`status`,`payment_status`,`client_charges`,`client_paid_amt`,`client_discount_amt`,`from_date`,`total_amt`,`job_data_1`,`job_data_2`,`vendor_charges`,`vd_paid_amt`,`taxmode`,`service_tax_rate`,`service_tax_amt`,`event_cal_id` FROM event_mst where `event_id` = '".$_POST['id']."' ");
		$row = mysql_fetch_array($q);
		header("Content-type: text/x-json");
		echo json_encode($row);
		exit();	
		
	}
	if(isset($_POST['showlast']))
	{		
		$q = mysql_query("SELECT `event_id`,`event_name`,`event_ds`,`client_name`,`client_cmp`,`client_email`,`client_work_mob`,`client_home_mob`,`client_mob`,`status`,`payment_status`,`client_charges`,`client_paid_amt`,`client_discount_amt`,`from_date`,`total_amt`,`job_data_1`,`job_data_2`,`vendor_charges`,`vd_paid_amt`,`taxmode`,`service_tax_rate`,`service_tax_amt`,`event_cal_id` FROM event_mst where `event_id` = '".$_POST['id']."' ");
		$row = mysql_fetch_array($q);
		header("Content-type: text/x-json");
		echo json_encode($row);
		exit();	
		
	}
	if(isset($_POST['btnUpdate']))
	{		
		$date = date('Y-m-d H:i:s');
		updEventDetail($conn,$_POST['eid'],$_POST['txteventnm'],$_POST['txteventds'],$_POST['txtclnm'],$_POST['txtclcmp'],$_POST['txtclemail'],$_POST['txtworkmob'],$_POST['txthmmob'],$_POST['txtmob'],$_POST['txtjobdata1'],$_POST['txtjobdata2'],$date);
	}
	if(isset($_POST['RetailIns']))
	{	
			
		$evntid = $_POST['evntid'];
		
		for($k=0;$k<count($_POST['txtictg']);$k++)
			{
				insRetailUpd($conn,$evntid,$_POST['txtictg'][$k],$_POST['txtprdid'][$k],$_POST['txticomgrp'][$k],
				$_POST['txtirate'][$k],$_POST['txtiqty'][$k],$_POST['ptxtiamt'][$k],$_POST['ptxtitax'][$k],$_POST['txtphotoId'][$k]);
			}
			
		updRetailMst($conn,$evntid,$_POST['totclcharge'],$_POST['tottaxamt'],$_POST['totfinalAmt']);		
	}
	if(isset($_POST['newshowretaildtl']))
	{
		$data = showRetailDtl($conn,$_POST['eid']);	
		$showEventPlacesCnt = count($data);
		
		for($i=0;$i<$showEventPlacesCnt;$i++)
		{
		 ?>	
			
			<tr id="retailrow">
			
				<input id="retailRate<?php echo $data[$i]['retail_inv_id']; ?>" class="retailRate" name="retailRate" 
				value="<?php echo $data[$i]['rate']; ?>" type="hidden">				
				
				<input id="retailTax<?php echo $data[$i]['retail_inv_id']; ?>" 
				class="retailTax" name="retailTax" value="<?php echo $data[$i]['tax']; ?>" type="hidden">				
				
				<input id="retailTotal<?php echo $data[$i]['retail_inv_id']; ?>" class="retailTotal" 
				name="retailTotal" value="<?php echo $data[$i]['amount']; ?>" type="hidden">
				
				
				<td><?php echo $data[$i]['eq_name']; ?></td>
				<td><?php echo $data[$i]['photo_id']; ?></td>
				<td><?php echo $data[$i]['rate']; ?></td>
				<td><?php echo $data[$i]['qty']; ?></td>
				
				<td class="amount"><?php echo $data[$i]['tax']; ?></td>				
				<td><?php echo $data[$i]['amount']; ?></td>
				
				<td>
					<a data-id = "<?php echo $data[$i]['retail_inv_id']; ?>" class="retaildel" style="cursor:pointer; margin-left:15px;">
						<i class="fa fa-times" aria-hidden="true"></i>
					</a>
				</td>
			</tr>
            
		 <?php	
		}				

	}
	if(isset($_POST['retaildel']))
	{		
		//$date = date('Y-m-d H:i:s');
		delRetailUpd($conn,$_POST['id']);
		updRetailEventMst($conn,$_POST['evnt_id'],$_POST['clcharge'],$_POST['evtax'],$_POST['totalAmt']);
	}
?>