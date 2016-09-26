<?php
	include_once('./header.php');
	//include_once('./footer.php');
	
	
	
	if(isset($_POST['saverecord']))
	{		
		insEnqFrm($conn,$_POST['txtclnm'],$_POST['txtcladd'],$_POST['txtclmail'],$_POST['txtclmob'],$_POST['txtclenqdate'],$_POST['txtenqtime'],$_POST['txt_type_event'],$_POST['txtfrom_dt'],$_POST['txt_to_dt'],$_POST['txt_event_add'],$_POST['drp_remainder']);	
	}

	if(isset($_POST['edit']))
	{		
		updEnqFrm($conn,$_POST['id']);	
	}
	
	if(isset($_POST['delete']))
	{	
		$del_date = date('Y-m-d H:i:s');
		delEnq($conn,$_POST['id'],$del_date);	
	}
	if(isset($_POST['show']))
	{	
		$data = showEventEnquiry ($conn);
		//echo json_encode($data);
		$showEventCnt = count($data);	
		for($i=0;$i<$showEventCnt;$i++)
		{
		?>
		
			<tr>
				
				<td>
					<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $data[$i]['event_id'];?>" data-id="<?php echo $data[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="Enquiry">						
						<?php echo $data[$i]['event_id'];?>
					</a>
					
				</td>
				
				<td>
					<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $data[$i]['event_id'];?>" data-id="<?php echo $data[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="Enquiry">						
						<?php echo ucfirst($data[$i]['event_name']);?></td>
					</a>
				<td>
					<i class="fa fa-info-circle" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
					title="Client Comapany:<?php echo $data[$i]['client_cmp'];?><br>
					Client Email:<?php echo ucfirst($data[$i]['client_email']);?><br>
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
				
				
				<?php// $to_date=date_create($data[$i]['to_date']);
						//$inm2= date_format($to_date,dateFormat);  
				?>
				<!--td><?php//echo $inm2;?></td-->
				
				<td> <span style="float:right;"><?php echo $data[$i]['client_charges'];?></span> </td>
				
				<td>
					<span style="float:right;">
						<?php if($data[$i]['service_tax_amt']!=''){?><i class="fa fa-info-circle" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
						title="Tax Rate:<?php echo $data[$i]['service_tax_rate']."%";?>">
						</i>&nbsp;&nbsp;<?php echo $data[$i]['service_tax_amt'];}?> 
					</span>
				</td>
				<td><span style="float:right;"><?php echo $data[$i]['total_amt'];?> </span></td>
				<td>
					<form class="form-search" id="<?php echo $data[$i]['event_id'];?>" target="_blank" method="post" action="invoicePdfQ.php">
							
						<input type="hidden" id="txteid" name="txteid" value="<?php echo $data[$i]['event_id'];?>"/>
						<input type="hidden" id="txtcmpnm" name="txtcmpnm" value="<?php echo $data[$i]['client_cmp'];?>"/>
						<input type="hidden" id="txtenm" name="txtenm" value="<?php echo ucfirst($data[$i]['event_name']);?>"/>
						<input type="hidden" id="txtfdate" name="txtfdate" value="<?php echo $data[$i]['from_date'];?>"/>
						<input type="hidden" id="txtcnm" name="txtcnm" value="<?php echo ucfirst($data[$i]['client_name']);?>"/>
						<input type="hidden" id="txtcharge1" name="txtcharge1" value="<?php echo $data[$i]['client_charges'];?>"/>
						<input type="hidden" id="txtpaid" name="txtpaid" value="<?php echo $data[$i]['client_paid_amt'];?>" />
						
						<a onclick="document.getElementById('<?php echo $data[$i]['event_id'];?>').submit();" >
							<i style="cursor : pointer; " class="fa fa-file-pdf-o" aria-hidden="true" >
							</i>
						</a>
						
					</form>
				</td>
				<td> 
					<a href="#" data-id="<?php echo $data[$i]['event_id']; ?>" class="editenq" data-toggle="tooltip" title="Order">
						<i class="fa fa-file-text"></i>
						Order
					</a> 
					<a data-id="<?php echo $data[$i]['event_id']; ?>" class="delete" data-toggle="tooltip" title="Delete">
					<i class="fa fa-trash-o"></i> </a> 
				</td>		
				
			</tr>
			
		<?php
			
		}
		
	}
?>