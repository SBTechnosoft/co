<?php
	include_once('./header.php');
	//include_once('./footer.php');
	if(isset($_POST['show']))
	{	
		$data = showNew($conn);
		
		$showNewCnt = count($data);	
		for($i=0;$i<$showNewCnt;$i++)
		{
			if($i == $showNewCnt-1)
					{
		?>
			<tr>
				
				<td>						
					<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $data[$i]['event_id'];?>" 
					data-id="<?php echo $data[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
						<?php echo $data[$i]['event_id'];?>
					</a>
				</td>
				<td>
					
					<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $data[$i]['event_id'];?>" 
					data-id="<?php echo $data[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
						<?php echo ucfirst($data[$i]['event_name']);?>
					</a>
				</td>
				<td>
					<?php 
					if($data[$i]['client_name']!='') 
					{
					?>
						<i class="fa fa-info-circle" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
						title="Client Comapany:<?php echo $data[$i]['client_cmp'];?><br>
						Client Email:<?php echo $data[$i]['client_email'];?><br>
						Mobile1:<?php echo $data[$i]['client_work_mob'];?><br>
						Mobile2:<?php echo $data[$i]['client_home_mob'];?>">
						</i>&nbsp;&nbsp;
						<?php echo ucfirst($data[$i]['client_name']);?>
					<?php 
					} 
					else
					{
						echo "-";
					}
					?>
				</td>	
				
				<!--td> <?php // echo $data[$i]['fp_no']; ?> </td>
				<td> <?php //echo $data[$i]['bill_no'];?> </td-->	
				
				<?php $from_date=date_create($data[$i]['from_date']);
						$inm1= date_format($from_date,dateFormat);  
				?>
				<td><?php echo $inm1;?></td>
				
				<?php //$to_date=date_create($data[$i]['to_date']);
						//$inm2= date_format($to_date,dateFormat);  
				?>
				<!--td><?php// echo $inm2;?></td-->
				<td> 
					
						<?php 
							if($data[$i]['client_charges']=='NaN'){echo "0";}
							else if($data[$i]['client_charges']!='')
							{ 
								echo $data[$i]['client_charges'];
							}
							else
							{
								echo "0";
							}
							
						?>
					
				</td>
				
				<td>
					
						<?php 
						if($data[$i]['service_tax_amt']=='NaN'){echo "0";}
						else if($data[$i]['service_tax_amt']!=''){ echo $data[$i]['service_tax_amt'];}
						else{echo "0";}?> 
					
				</td>
				<td>
				
						<?php 
							if($data[$i]['total_amt']!= '')
							{ 
								echo $data[$i]['total_amt'];
							} 
							else 
							{ 
								echo "0";
							}
						?> 
					
				</td>				
				<td>
					
						<?php 
						if($data[$i]['client_paid_amt']!='')
						{
							echo $data[$i]['client_paid_amt'];
						}
						else
						{
							echo "0";
						}
						?>
					
				</td>
				<td>
					
						<?php 
						if($data[$i]['client_paid_amt']!='' || $data[$i]['client_paid_amt']==0 && $data[$i]['payment_status'] != 'Paid')
						{
							
							echo $data[$i]['total_amt']-$data[$i]['client_paid_amt'];
						}
						else
						{
							echo "0";
						}
						?>
				
				</td>
				<td style="text-align:center;">
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
				<?php echo $data[$i]['inv_file_id'];?>
								
				</td>
				<td>
					<a data-toggle="tooltip" title="Delete" data-id="<?php echo $data[$i]['event_id']; ?>" class="delete"> 
						<i class="fa fa-trash-o"></i> 
					</a> 
				</td>
			</tr>
			<tr>
						
						<td></td>
						<td></td>						
						<td></td>
						<td><b> Grand Total</b></td>
						<td><span style="float:right;"><b><?php echo $data[$i]['ctotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $data[$i]['stotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $data[$i]['nettotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $data[$i]['cpaidtotal'];?></b> </span></td>
						<td style="color:red;"><span style="float:right;"><b><?php echo $data[$i]['nettotal']-$data[$i]['cpaidtotal'];	?></b></span></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						
						
					</tr>
		<?php	
			}
			else
			{
				?>
				<tr>
				
				<td>						
					<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $data[$i]['event_id'];?>" 
					data-id="<?php echo $data[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
						<?php echo $data[$i]['event_id'];?>
					</a>
				</td>
				<td>
					
					<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $data[$i]['event_id'];?>" 
					data-id="<?php echo $data[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
						<?php echo ucfirst($data[$i]['event_name']);?>
					</a>
				</td>
				<td>
					<?php 
					if($data[$i]['client_name']!='') 
					{
					?>
						<i class="fa fa-info-circle" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
						title="Client Comapany:<?php echo $data[$i]['client_cmp'];?><br>
						Client Email:<?php echo $data[$i]['client_email'];?><br>
						Mobile1:<?php echo $data[$i]['client_work_mob'];?><br>
						Mobile2:<?php echo $data[$i]['client_home_mob'];?>">
						</i>&nbsp;&nbsp;
						<?php echo ucfirst($data[$i]['client_name']);?>
					<?php 
					} 
					else
					{
						echo "-";
					}
					?>
				</td>	
				
				<!--td> <?php // echo $data[$i]['fp_no']; ?> </td>
				<td> <?php //echo $data[$i]['bill_no'];?> </td-->	
				
				<?php $from_date=date_create($data[$i]['from_date']);
						$inm1= date_format($from_date,dateFormat);  
				?>
				<td><?php echo $inm1;?></td>
				
				<?php //$to_date=date_create($data[$i]['to_date']);
						//$inm2= date_format($to_date,dateFormat);  
				?>
				<!--td><?php// echo $inm2;?></td-->
				<td> 
					
						<?php 
							if($data[$i]['client_charges']=='NaN'){echo "0";}
							else if($data[$i]['client_charges']!='')
							{ 
								echo $data[$i]['client_charges'];
							}
							else
							{
								echo "0";
							}
							
						?>
					
				</td>
				
				<td>
					
						<?php 
						if($data[$i]['service_tax_amt']=='NaN'){echo "0";}
						else if($data[$i]['service_tax_amt']!=''){ echo $data[$i]['service_tax_amt'];}
						else{echo "0";}?> 
					
				</td>
				<td>
					
						<?php 
							if($data[$i]['total_amt']!= '')
							{ 
								echo $data[$i]['total_amt'];
							} 
							else 
							{ 
								echo "0";
							}
						?> 
					
				</td>				
				<td>
					
						<?php 
						if($data[$i]['client_paid_amt']!='')
						{
							echo $data[$i]['client_paid_amt'];
						}
						else
						{
							echo "0";
						}
						?>
					
				</td>
				<td>
					
						<?php 
						if($data[$i]['client_paid_amt']!='' || $data[$i]['client_paid_amt']==0 && $data[$i]['payment_status'] != 'Paid')
						{
							
							echo $data[$i]['total_amt']-$data[$i]['client_paid_amt'];
						}
						else
						{
							echo "0";
						}
						?>
				
				</td>
				<td style="text-align:center;">
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
				<?php echo $data[$i]['inv_file_id'];?>
								
				</td>
				<td>
					<a data-toggle="tooltip" title="Delete" data-id="<?php echo $data[$i]['event_id']; ?>" class="delete"> 
						<i class="fa fa-trash-o"></i> 
					</a> 
				</td>
			</tr>
				<?php
			}
		}
	}
	if(isset($_POST['search']))
	{	
		$s2 = '';$s3 = '';$s5 = '';$s6 = '';$s7 = '';$s8 = '';
		if($_POST['txtename']!='')
		{
			$s2 = " `event_name` like '%".trim($_POST['txtename'])."%' ";
		}
		 if($_POST['txtclname']!='')
		{
			$s3 = " `client_name` like '%".trim($_POST['txtclname'])."%' ";
		}
		 
		if($_POST['txtInv']!='')
		{
			$s5 = " `inv_file_id` like '%".trim($_POST['txtInv'])."%' ";
		}
		 if($_POST['txtfromdt'] !='')
		{
			$s6 = " `from_date` like '%".trim($_POST['txtfromdt'])."%' ";
		}
		 if($_POST['txttodt'] !='')
		{
			$s7 = " `to_date` like '%".trim($_POST['txttodt'])."%'  ";
		}
		 if($_POST['drpcmpnm'] !='')
		{
			$s8 = " `cmp_id` like '%".$_POST['drpcmpnm']."%'  ";
		}
		
		$arr = array($s2,$s3,$s5,$s6,$s7,$s8);
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
				$str1[] =  $narry[$a]."and";
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
		$data = searchEventNew ($conn,$where);
		//echo json_encode($data);
		$searchEventCnt = count($data);	
		for($i=0;$i<$searchEventCnt;$i++)
		{
			if($i == $searchEventCnt-1)
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
				<td> 
					
						<?php 
							if($data[$i]['client_charges']=='NaN'){echo "0";}
							else if($data[$i]['client_charges']!='')
							{ 
								echo $data[$i]['client_charges'];
							}
							else
							{
								echo "0";
							}
							
						?>
					
				</td>
				
				<td>
					
						<?php 
						if($data[$i]['service_tax_amt']=='NaN'){echo "0";}
						else if($data[$i]['service_tax_amt']!=''){ echo $data[$i]['service_tax_amt'];}
						else{echo "0";}?> 
					
				</td>
				<td><?php echo $data[$i]['total_amt'];?></td>				
				<td><?php echo $data[$i]['client_paid_amt']; ?></td>
				<td>
					
						<?php 
						if($data[$i]['client_paid_amt']!='' || $data[$i]['client_paid_amt']==0 && $data[$i]['payment_status'] != 'Paid')
						{
							
							echo $data[$i]['total_amt']-$data[$i]['client_paid_amt'];
						}
						else
						{
							echo "0";
						}
						?>
					
				</td>
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
				<?php echo $data[$i]['inv_file_id'];?>
								
				</td>
				<td>
					<a data-toggle="tooltip" title="Delete" data-id="<?php echo $data[$i]['event_id']; ?>" class="delete"> 
						<i class="fa fa-trash-o"></i> 
					</a> 
				</td>
			</tr>
			<tr>
						<td></td>
						<td></td>
						<td></td>						
						<td></td>
						<td><b> Grand Total</b></td>
						<td><span style="float:right;"><b><?php echo $data[$i]['ctotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $data[$i]['stotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $data[$i]['nettotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $data[$i]['cpaidtotal'];?></b> </span></td>
						<td style="color:red;"><span style="float:right;"><b><?php echo $data[$i]['nettotal']-$data[$i]['cpaidtotal'];	?></b></span></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						
						
					</tr>
		<?php
					}
					else
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
				<td> 
					
						<?php 
							if($data[$i]['client_charges']=='NaN'){echo "0";}
							else if($data[$i]['client_charges']!='')
							{ 
								echo $data[$i]['client_charges'];
							}
							else
							{
								echo "0";
							}
							
						?>
					
				</td>
				
				<td>
					
						<?php 
						if($data[$i]['service_tax_amt']=='NaN'){echo "0";}
						else if($data[$i]['service_tax_amt']!=''){ echo $data[$i]['service_tax_amt'];}
						else{echo "0";}?> 
					
				</td>
				<td><?php echo $data[$i]['total_amt'];?> </td>				
				<td><?php echo $data[$i]['client_paid_amt']; ?></td>
				<td>
					
						<?php 
						if($data[$i]['client_paid_amt']!='' || $data[$i]['client_paid_amt']==0 && $data[$i]['payment_status'] != 'Paid')
						{
							
							echo $data[$i]['total_amt']-$data[$i]['client_paid_amt'];
						}
						else
						{
							echo "0";
						}
						?>
					
				</td>
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
				<?php echo $data[$i]['inv_file_id'];?>
								
				</td>
				<td>
					<a data-toggle="tooltip" title="Delete" data-id="<?php echo $data[$i]['event_id']; ?>" class="delete"> 
						<i class="fa fa-trash-o"></i> 
					</a> 
				</td>
			</tr>
						<?php
					}
		}
		
	}
	if(isset($_POST['showDetailType']))
	{	
		if($_POST['value']=='All')
		{
		$data = showNewRadio($conn);
		
		$showNewCntRadio = count($data);	
		for($i=0;$i<$showNewCntRadio;$i++)
		{
			if($i == $showNewCntRadio-1)
					{
		?>
			<tr>
				<td></td>
				<td>						
					<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $data[$i]['event_id'];?>" 
					data-id="<?php echo $data[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
						<?php echo $data[$i]['event_id'];?>
					</a>
				</td>
				<td>
					
					<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $data[$i]['event_id'];?>" 
					data-id="<?php echo $data[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
						<?php echo ucfirst($data[$i]['event_name']);?>
					</a>
				</td>
				<td>
					<?php 
					if($data[$i]['client_name']!='') 
					{
					?>
						<i class="fa fa-info-circle" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
						title="Client Comapany:<?php echo $data[$i]['client_cmp'];?><br>
						Client Email:<?php echo $data[$i]['client_email'];?><br>
						Mobile1:<?php echo $data[$i]['client_work_mob'];?><br>
						Mobile2:<?php echo $data[$i]['client_home_mob'];?>">
						</i>&nbsp;&nbsp;
						<?php echo ucfirst($data[$i]['client_name']);?>
					<?php 
					} 
					else
					{
						echo "-";
					}
					?>
				</td>	
				
				<!--td> <?php // echo $data[$i]['fp_no']; ?> </td>
				<td> <?php //echo $data[$i]['bill_no'];?> </td-->	
				
				<?php $from_date=date_create($data[$i]['from_date']);
						$inm1= date_format($from_date,dateFormat);  
				?>
				<td><?php echo $inm1;?></td>
				
				<?php //$to_date=date_create($data[$i]['to_date']);
						//$inm2= date_format($to_date,dateFormat);  
				?>
				<!--td><?php// echo $inm2;?></td-->
				<td> 
					
						<?php 
							if($data[$i]['client_charges']=='NaN'){echo "0";}
							else if($data[$i]['client_charges']!='')
							{ 
								echo $data[$i]['client_charges'];
							}
							else
							{
								echo "0";
							}
							
						?>
					
				</td>
				
				<td>
					
						<?php 
						if($data[$i]['service_tax_amt']=='NaN'){echo "0";}
						else if($data[$i]['service_tax_amt']!=''){ echo $data[$i]['service_tax_amt'];}
						else{echo "0";}?> 
					
				</td>
				<td>
				
						<?php 
							if($data[$i]['total_amt']!= '')
							{ 
								echo $data[$i]['total_amt'];
							} 
							else 
							{ 
								echo "0";
							}
						?> 
				
				</td>				
				<td>
					
						<?php 
						if($data[$i]['client_paid_amt']!='')
						{
							echo $data[$i]['client_paid_amt'];
						}
						else
						{
							echo "0";
						}
						?>
					
				</td>
				<td>
					
						<?php 
						if($data[$i]['client_paid_amt']!='' || $data[$i]['client_paid_amt']==0 && $data[$i]['payment_status'] != 'Paid')
						{
							
							echo $data[$i]['total_amt']-$data[$i]['client_paid_amt'];
						}
						else
						{
							echo "0";
						}
						?>
					
				</td>
				<td style="text-align:center;">
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
				<?php echo $data[$i]['inv_file_id'];?>
								
				</td>
				<td>
					<a data-toggle="tooltip" title="Delete" data-id="<?php echo $data[$i]['event_id']; ?>" class="delete"> 
						<i class="fa fa-trash-o"></i> 
					</a> 
				</td>
			</tr>
			<tr>
						<td></td>
						<td></td>
						<td></td>						
						<td></td>
						<td><b> Grand Total</b></td>
						<td><span style="float:right;"><b><?php echo $data[$i]['ctotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $data[$i]['stotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $data[$i]['nettotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $data[$i]['cpaidtotal'];?></b> </span></td>
						<td style="color:red;"><span style="float:right;"><b><?php echo $data[$i]['nettotal']-$data[$i]['cpaidtotal'];	?></b></span></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						
						
					</tr>
		<?php
					}
						else
						{
							?>
							<tr>
				<td></td>
				<td>						
					<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $data[$i]['event_id'];?>" 
					data-id="<?php echo $data[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
						<?php echo $data[$i]['event_id'];?>
					</a>
				</td>
				<td>
					
					<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $data[$i]['event_id'];?>" 
					data-id="<?php echo $data[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
						<?php echo ucfirst($data[$i]['event_name']);?>
					</a>
				</td>
				<td>
					<?php 
					if($data[$i]['client_name']!='') 
					{
					?>
						<i class="fa fa-info-circle" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
						title="Client Comapany:<?php echo $data[$i]['client_cmp'];?><br>
						Client Email:<?php echo $data[$i]['client_email'];?><br>
						Mobile1:<?php echo $data[$i]['client_work_mob'];?><br>
						Mobile2:<?php echo $data[$i]['client_home_mob'];?>">
						</i>&nbsp;&nbsp;
						<?php echo ucfirst($data[$i]['client_name']);?>
					<?php 
					} 
					else
					{
						echo "-";
					}
					?>
				</td>	
				
				<!--td> <?php // echo $data[$i]['fp_no']; ?> </td>
				<td> <?php //echo $data[$i]['bill_no'];?> </td-->	
				
				<?php $from_date=date_create($data[$i]['from_date']);
						$inm1= date_format($from_date,dateFormat);  
				?>
				<td><?php echo $inm1;?></td>
				
				<?php //$to_date=date_create($data[$i]['to_date']);
						//$inm2= date_format($to_date,dateFormat);  
				?>
				<!--td><?php// echo $inm2;?></td-->
				<td> 
					
						<?php 
							if($data[$i]['client_charges']=='NaN'){echo "0";}
							else if($data[$i]['client_charges']!='')
							{ 
								echo $data[$i]['client_charges'];
							}
							else
							{
								echo "0";
							}
							
						?>
					
				</td>
				
				<td>
					
						<?php 
						if($data[$i]['service_tax_amt']=='NaN'){echo "0";}
						else if($data[$i]['service_tax_amt']!=''){ echo $data[$i]['service_tax_amt'];}
						else{echo "0";}?> 
					
				</td>
				<td>
					
						<?php 
							if($data[$i]['total_amt']!= '')
							{ 
								echo $data[$i]['total_amt'];
							} 
							else 
							{ 
								echo "0";
							}
						?> 
					
				</td>				
				<td>
					
						<?php 
						if($data[$i]['client_paid_amt']!='')
						{
							echo $data[$i]['client_paid_amt'];
						}
						else
						{
							echo "0";
						}
						?>
					
				</td>
				<td>
					
						<?php 
						if($data[$i]['client_paid_amt']!='' || $data[$i]['client_paid_amt']==0 && $data[$i]['payment_status'] != 'Paid')
						{
							
							echo $data[$i]['total_amt']-$data[$i]['client_paid_amt'];
						}
						else
						{
							echo "0";
						}
						?>
					
				</td>
				<td style="text-align:center;">
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
				<?php echo $data[$i]['inv_file_id'];?>
								
				</td>
				<td>
					<a data-toggle="tooltip" title="Delete" data-id="<?php echo $data[$i]['event_id']; ?>" class="delete"> 
						<i class="fa fa-trash-o"></i> 
					</a> 
				</td>
			</tr>
							<?php
						}
		}
		
		}
	else
	{	
		$data = showNewRadioEvent($conn,$_POST['value']);
		
		$showNewCntRadioevent = count($data);	
		for($i=0;$i<$showNewCntRadioevent;$i++)
		{
			if($i == $showNewCntRadioevent-1)
					{
		?>
			<tr>
				<td></td>
				<td>						
					<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $data[$i]['event_id'];?>" 
					data-id="<?php echo $data[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
						<?php echo $data[$i]['event_id'];?>
					</a>
				</td>
				<td>
					
					<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $data[$i]['event_id'];?>" 
					data-id="<?php echo $data[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
						<?php echo ucfirst($data[$i]['event_name']);?>
					</a>
				</td>
				<td>
					<?php 
					if($data[$i]['client_name']!='') 
					{
					?>
						<i class="fa fa-info-circle" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
						title="Client Comapany:<?php echo $data[$i]['client_cmp'];?><br>
						Client Email:<?php echo $data[$i]['client_email'];?><br>
						Mobile1:<?php echo $data[$i]['client_work_mob'];?><br>
						Mobile2:<?php echo $data[$i]['client_home_mob'];?>">
						</i>&nbsp;&nbsp;
						<?php echo ucfirst($data[$i]['client_name']);?>
					<?php 
					} 
					else
					{
						echo "-";
					}
					?>
				</td>	
				
				<!--td> <?php // echo $data[$i]['fp_no']; ?> </td>
				<td> <?php //echo $data[$i]['bill_no'];?> </td-->	
				
				<?php $from_date=date_create($data[$i]['from_date']);
						$inm1= date_format($from_date,dateFormat);  
				?>
				<td><?php echo $inm1;?></td>
				
				<?php //$to_date=date_create($data[$i]['to_date']);
						//$inm2= date_format($to_date,dateFormat);  
				?>
				<!--td><?php// echo $inm2;?></td-->
				<td> 
					
						<?php 
							if($data[$i]['client_charges']=='NaN'){echo "0";}
							else if($data[$i]['client_charges']!='')
							{ 
								echo $data[$i]['client_charges'];
							}
							else
							{
								echo "0";
							}
							
						?>
					
				</td>
				
				<td>
					
						<?php 
						if($data[$i]['service_tax_amt']=='NaN'){echo "0";}
						else if($data[$i]['service_tax_amt']!=''){ echo $data[$i]['service_tax_amt'];}
						else{echo "0";}?> 
					
				</td>
				<td>
					
						<?php 
							if($data[$i]['total_amt']!= '')
							{ 
								echo $data[$i]['total_amt'];
							} 
							else 
							{ 
								echo "0";
							}
						?> 
				
				</td>				
				<td>
					
						<?php 
						if($data[$i]['client_paid_amt']!='')
						{
							echo $data[$i]['client_paid_amt'];
						}
						else
						{
							echo "0";
						}
						?>
					
				</td>
				<td>
				
						<?php 
						if($data[$i]['client_paid_amt']!='' || $data[$i]['client_paid_amt']==0 && $data[$i]['payment_status'] != 'Paid')
						{
							
							echo $data[$i]['total_amt']-$data[$i]['client_paid_amt'];
						}
						else
						{
							echo "0";
						}
						?>
					
				</td>
				<td style="text-align:center;">
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
				<?php echo $data[$i]['inv_file_id'];?>
								
				</td>
				<td>
					<a data-toggle="tooltip" title="Delete" data-id="<?php echo $data[$i]['event_id']; ?>" class="delete"> 
						<i class="fa fa-trash-o"></i> 
					</a> 
				</td>
			</tr>
			<tr>
						<td></td>
						<td></td>
						<td></td>						
						<td></td>
						<td><b> Grand Total</b></td>
						<td><span style="float:right;"><b><?php echo $data[$i]['ctotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $data[$i]['stotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $data[$i]['nettotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $data[$i]['cpaidtotal'];?></b> </span></td>
						<td style="color:red;"><span style="float:right;"><b><?php echo $data[$i]['nettotal']-$data[$i]['cpaidtotal'];	?></b></span></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						
						
					</tr>
		<?php	
					}
					else
					{
						?>
						<tr>
				<td></td>
				<td>						
					<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $data[$i]['event_id'];?>" 
					data-id="<?php echo $data[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
						<?php echo $data[$i]['event_id'];?>
					</a>
				</td>
				<td>
					
					<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $data[$i]['event_id'];?>" 
					data-id="<?php echo $data[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
						<?php echo ucfirst($data[$i]['event_name']);?>
					</a>
				</td>
				<td>
					<?php 
					if($data[$i]['client_name']!='') 
					{
					?>
						<i class="fa fa-info-circle" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
						title="Client Comapany:<?php echo $data[$i]['client_cmp'];?><br>
						Client Email:<?php echo $data[$i]['client_email'];?><br>
						Mobile1:<?php echo $data[$i]['client_work_mob'];?><br>
						Mobile2:<?php echo $data[$i]['client_home_mob'];?>">
						</i>&nbsp;&nbsp;
						<?php echo ucfirst($data[$i]['client_name']);?>
					<?php 
					} 
					else
					{
						echo "-";
					}
					?>
				</td>	
				
				<!--td> <?php // echo $data[$i]['fp_no']; ?> </td>
				<td> <?php //echo $data[$i]['bill_no'];?> </td-->	
				
				<?php $from_date=date_create($data[$i]['from_date']);
						$inm1= date_format($from_date,dateFormat);  
				?>
				<td><?php echo $inm1;?></td>
				
				<?php //$to_date=date_create($data[$i]['to_date']);
						//$inm2= date_format($to_date,dateFormat);  
				?>
				<!--td><?php// echo $inm2;?></td-->
				<td> 
					
						<?php 
							if($data[$i]['client_charges']=='NaN'){echo "0";}
							else if($data[$i]['client_charges']!='')
							{ 
								echo $data[$i]['client_charges'];
							}
							else
							{
								echo "0";
							}
							
						?>
					
				</td>
				
				<td>
					
						<?php 
						if($data[$i]['service_tax_amt']=='NaN'){echo "0";}
						else if($data[$i]['service_tax_amt']!=''){ echo $data[$i]['service_tax_amt'];}
						else{echo "0";}?> 
					
				</td>
				<td>
					
						<?php 
							if($data[$i]['total_amt']!= '')
							{ 
								echo $data[$i]['total_amt'];
							} 
							else 
							{ 
								echo "0";
							}
						?> 
					
				</td>				
				<td>
					
						<?php 
						if($data[$i]['client_paid_amt']!='')
						{
							echo $data[$i]['client_paid_amt'];
						}
						else
						{
							echo "0";
						}
						?>
					
				</td>
				<td>
					
						<?php 
						if($data[$i]['client_paid_amt']!='' || $data[$i]['client_paid_amt']==0 && $data[$i]['payment_status'] != 'Paid')
						{
							
							echo $data[$i]['total_amt']-$data[$i]['client_paid_amt'];
						}
						else
						{
							echo "0";
						}
						?>
					
				</td>
				<td style="text-align:center;">
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
				<?php echo $data[$i]['inv_file_id'];?>
								
				</td>
				<td>
					<a data-toggle="tooltip" title="Delete" data-id="<?php echo $data[$i]['event_id']; ?>" class="delete"> 
						<i class="fa fa-trash-o"></i> 
					</a> 
				</td>
			</tr>
						<?php
					}
		}
		
	}
}
?>