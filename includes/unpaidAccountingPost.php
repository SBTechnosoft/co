<?php
	include_once('./header.php');
	//include_once('./footer.php');
			
	
	if(isset($_POST['showClUnpaidAmt']))
	{	
		$ClUnpaid = showClientUnpaidAmt ($conn);
		
		$showClUnpaidCnt = count($ClUnpaid);	
		for($i=0;$i<$showClUnpaidCnt;$i++)
		{
		?>
			<?php
				if($i == ($showClUnpaidCnt-1))
				{
					?>
					<tr>
				
						<td>
							<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ClUnpaid[$i]['event_id'];?>" 
							data-id="<?php echo $ClUnpaid[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
								<?php echo $ClUnpaid[$i]['event_id'];?>
							</a>
							<?php //echo $ClUnpaid[$i]['event_id'];?>
						</td>
						<td>
							<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ClUnpaid[$i]['event_id'];?>" 
							data-id="<?php echo $ClUnpaid[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
								<?php echo ucfirst($ClUnpaid[$i]['event_name']);?>
							</a>
							<?php //echo ucfirst($ClUnpaid[$i]['event_name']);?>
						</td>
						
						
						<td>
							<i class="fa fa-info-circle" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
							title="Client Comapany:<?php echo $ClUnpaid[$i]['client_cmp'];?><br>
							Client Email:<?php echo $ClUnpaid[$i]['client_email'];?><br>
							Mobile1:<?php echo $ClUnpaid[$i]['client_work_mob'];?><br>
							Mobile2:<?php echo $ClUnpaid[$i]['client_home_mob'];?>">
							</i>&nbsp;&nbsp;<?php echo ucfirst($ClUnpaid[$i]['client_name']);?>
						</td>
						
						
						<td><span style="float:right;"><?php echo $ClUnpaid[$i]['client_charges'];?></span></td>
						<td><span style="float:right;"><?php echo $ClUnpaid[$i]['client_discount_amt'];?></span></td>
						<td><span style="float:right;"><?php echo $ClUnpaid[$i]['service_tax_amt'];?></span></td>
						<td><span style="float:right;"><?php echo $ClUnpaid[$i]['total_amt'];?></span></td>
						<td><span style="float:right;"><?php echo $ClUnpaid[$i]['client_paid_amt'];?></span></td>				
						<td style="color:red;"><span style="float:right;"><?php echo $ClUnpaid[$i]['remain_amt'] ;?></span></td>
						<td>					
							<?php if($ClUnpaid[$i]['inv_file_name']!='') {?>
								<a href="upload/minvoice/<?php echo $ClUnpaid[$i]['inv_file_name'] ;?>" target="_blank" >
									<i style="cursor : pointer;" class="fa fa-file-pdf-o" aria-hidden="true" data-toggle="tooltip" title="Invoice">
									</i>
								</a>						
							<?php } ?>
						</td>
			
						<td>
							<a data-toggle="tooltip" title="Delete" data-id="<?php echo $ClUnpaid[$i]['event_id']; ?>" class="delete"> 
								<i class="fa fa-trash-o"></i> 
							</a> 
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>						
						<td><b> Grand Total</b></td>
						<td><span style="float:right;"><b><?php echo $ClUnpaid[$i]['ctotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $ClUnpaid[$i]['dtotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $ClUnpaid[$i]['stotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $ClUnpaid[$i]['ttotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $ClUnpaid[$i]['ptotal'];?></b> </span></td>
						<td style="color:red;"><span style="float:right;"><b><?php echo $ClUnpaid[$i]['rtotal'];?></b></span></td>
						<td></td>
					</tr>
					
					
					<?php
					
				}
				else
				{
			?>
			<tr>
				
				<td>
					<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ClUnpaid[$i]['event_id'];?>" 
					data-id="<?php echo $ClUnpaid[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
						<?php echo $ClUnpaid[$i]['event_id'];?>
					</a>
					<?php //echo $ClUnpaid[$i]['event_id'];?>
				</td>
				<td>
					<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ClUnpaid[$i]['event_id'];?>" 
					data-id="<?php echo $ClUnpaid[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
						<?php echo ucfirst($ClUnpaid[$i]['event_name']);?>
					</a>
					<?php //echo ucfirst($ClUnpaid[$i]['event_name']);?>
				</td>
				
				<td>
					<i class="fa fa-info-circle" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
					title="Client Comapany:<?php echo $ClUnpaid[$i]['client_cmp'];?><br>
					Client Email:<?php echo $ClUnpaid[$i]['client_email'];?><br>
					Mobile1:<?php echo $ClUnpaid[$i]['client_work_mob'];?><br>
					Mobile2:<?php echo $ClUnpaid[$i]['client_home_mob'];?>">
					</i>&nbsp;&nbsp;<?php echo ucfirst($ClUnpaid[$i]['client_name']);?>
				</td>
				
				<td><span style="float:right;"><?php echo $ClUnpaid[$i]['client_charges'];?></span></td>
				<td><span style="float:right;"><?php echo $ClUnpaid[$i]['client_discount_amt'];?></span></td>
				<td><span style="float:right;"><?php echo $ClUnpaid[$i]['service_tax_amt'];?></span></td>
				<td><span style="float:right;"><?php echo $ClUnpaid[$i]['total_amt'];?></span></td>
				<td><span style="float:right;"><?php echo $ClUnpaid[$i]['client_paid_amt'];?></span></td>				
				<td style="color:red;"><span style="float:right;"><?php echo $ClUnpaid[$i]['remain_amt'] ;?></span></td>
				<td>					
							<?php if($ClUnpaid[$i]['inv_file_name']!='') {?>
								<a href="upload/minvoice/<?php echo $ClUnpaid[$i]['inv_file_name'] ;?>" target="_blank" >
									<i style="cursor : pointer;" class="fa fa-file-pdf-o" aria-hidden="true" data-toggle="tooltip" title="Invoice">
									</i>
								</a>						
							<?php } ?>
						</td>
				
				<td>
					<a data-toggle="tooltip" title="Delete" data-id="<?php echo $ClUnpaid[$i]['event_id']; ?>" class="delete"> 
						<i class="fa fa-trash-o"></i> 
					</a> 
				</td>
			</tr>
		<?php
				}
		}
		
	}
	if(isset($_POST['showClientUnpaidAmtType']))
	{	
		if($_POST['value']=='All')
		{
			$ClUnpaid = showClientUnpaidAmt ($conn);
		}
		else
		{
			$ClUnpaid = showClientUnpaidAmtType ($conn,$_POST['value']);
		}
		
		
		
		$showClUnpaidCnt = count($ClUnpaid);	
		for($i=0;$i<$showClUnpaidCnt;$i++)
		{
		?>
			<?php
				if($i == ($showClUnpaidCnt-1))
				{
					?>
					<tr>
				
						<td>
							<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ClUnpaid[$i]['event_id'];?>" 
							data-id="<?php echo $ClUnpaid[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
								<?php echo $ClUnpaid[$i]['event_id'];?>
							</a>
							<?php //echo $ClUnpaid[$i]['event_id'];?>
						</td>
						<td>
							<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ClUnpaid[$i]['event_id'];?>" 
							data-id="<?php echo $ClUnpaid[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
								<?php echo ucfirst($ClUnpaid[$i]['event_name']);?>
							</a>
							<?php //echo ucfirst($ClUnpaid[$i]['event_name']);?>
						</td>
						
						
						<td>
							<i class="fa fa-info-circle" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
							title="Client Comapany:<?php echo $ClUnpaid[$i]['client_cmp'];?><br>
							Client Email:<?php echo $ClUnpaid[$i]['client_email'];?><br>
							Mobile1:<?php echo $ClUnpaid[$i]['client_work_mob'];?><br>
							Mobile2:<?php echo $ClUnpaid[$i]['client_home_mob'];?>">
							</i>&nbsp;&nbsp;<?php echo ucfirst($ClUnpaid[$i]['client_name']);?>
						</td>
						
						
						<td><span style="float:right;"><?php echo $ClUnpaid[$i]['client_charges'];?></span></td>
						<td><span style="float:right;"><?php echo $ClUnpaid[$i]['client_discount_amt'];?></span></td>
						<td><span style="float:right;"><?php echo $ClUnpaid[$i]['service_tax_amt'];?></span></td>
						<td><span style="float:right;"><?php echo $ClUnpaid[$i]['total_amt'];?></span></td>
						<td><span style="float:right;"><?php echo $ClUnpaid[$i]['client_paid_amt'];?></span></td>				
						<td style="color:red;"><span style="float:right;"><?php echo $ClUnpaid[$i]['remain_amt'] ;?></span></td>
						<td>					
							<?php if($ClUnpaid[$i]['inv_file_name']!='') {?>
								<a href="upload/minvoice/<?php echo $ClUnpaid[$i]['inv_file_name'] ;?>" target="_blank" >
									<i style="cursor : pointer;" class="fa fa-file-pdf-o" aria-hidden="true" data-toggle="tooltip" title="Invoice">
									</i>
								</a>						
							<?php } ?>
						</td>
						<td>
							<a data-toggle="tooltip" title="Delete" data-id="<?php echo $ClUnpaid[$i]['event_id']; ?>" class="delete"> 
								<i class="fa fa-trash-o"></i> 
							</a> 
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>						
						<td><b> Grand Total</b></td>
						<td><span style="float:right;"><b><?php echo $ClUnpaid[$i]['ctotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $ClUnpaid[$i]['dtotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $ClUnpaid[$i]['stotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $ClUnpaid[$i]['ttotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $ClUnpaid[$i]['ptotal'];?></b> </span></td>
						<td style="color:red;"><span style="float:right;"><b><?php echo $ClUnpaid[$i]['rtotal'];?></b></span></td>
					</tr>
					
					
					<?php
					
				}
				else
				{
			?>
			<tr>
				
				<td>
					<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ClUnpaid[$i]['event_id'];?>" 
					data-id="<?php echo $ClUnpaid[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
						<?php echo $ClUnpaid[$i]['event_id'];?>
					</a>
					<?php //echo $ClUnpaid[$i]['event_id'];?>
				</td>
				<td>
					<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ClUnpaid[$i]['event_id'];?>" 
					data-id="<?php echo $ClUnpaid[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
						<?php echo ucfirst($ClUnpaid[$i]['event_name']);?>
					</a>
					<?php //echo ucfirst($ClUnpaid[$i]['event_name']);?>
				</td>
				
				<td>
					<i class="fa fa-info-circle" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
					title="Client Comapany:<?php echo $ClUnpaid[$i]['client_cmp'];?><br>
					Client Email:<?php echo $ClUnpaid[$i]['client_email'];?><br>
					Mobile1:<?php echo $ClUnpaid[$i]['client_work_mob'];?><br>
					Mobile2:<?php echo $ClUnpaid[$i]['client_home_mob'];?>">
					</i>&nbsp;&nbsp;<?php echo ucfirst($ClUnpaid[$i]['client_name']);?>
				</td>
				
				<td><span style="float:right;"><?php echo $ClUnpaid[$i]['client_charges'];?></span></td>
				<td><span style="float:right;"><?php echo $ClUnpaid[$i]['client_discount_amt'];?></span></td>
				<td><span style="float:right;"><?php echo $ClUnpaid[$i]['service_tax_amt'];?></span></td>
				<td><span style="float:right;"><?php echo $ClUnpaid[$i]['total_amt'];?></span></td>
				<td><span style="float:right;"><?php echo $ClUnpaid[$i]['client_paid_amt'];?></span></td>				
				<td style="color:red;"><span style="float:right;"><?php echo $ClUnpaid[$i]['remain_amt'] ;?></span></td>
				<td>					
							<?php if($ClUnpaid[$i]['inv_file_name']!='') {?>
								<a href="upload/minvoice/<?php echo $ClUnpaid[$i]['inv_file_name'] ;?>" target="_blank" >
									<i style="cursor : pointer;" class="fa fa-file-pdf-o" aria-hidden="true" data-toggle="tooltip" title="Invoice">
									</i>
								</a>						
							<?php } ?>
						</td>
				<td>
							<a data-toggle="tooltip" title="Delete" data-id="<?php echo $ClUnpaid[$i]['event_id']; ?>" class="delete"> 
								<i class="fa fa-trash-o"></i> 
							</a> 
						</td>
			</tr>
		<?php
				}
		}
		
	}
	
	if(isset($_POST['showClientUnpaidAmtCmpType']))
	{	
		if($_POST['value']=='')
		{
			$ClUnpaid = showClientUnpaidAmt ($conn);
		}
		else
		{
			$ClUnpaid = showClientUnpaidAmtCmpType ($conn,$_POST['value']);
		}
		
		
		
		$showClUnpaidCnt = count($ClUnpaid);	
		for($i=0;$i<$showClUnpaidCnt;$i++)
		{
		?>
			<?php
				if($i == ($showClUnpaidCnt-1))
				{
					?>
					<tr>
				
						<td>
							<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ClUnpaid[$i]['event_id'];?>" 
							data-id="<?php echo $ClUnpaid[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
								<?php echo $ClUnpaid[$i]['event_id'];?>
							</a>
							<?php //echo $ClUnpaid[$i]['event_id'];?>
						</td>
						<td>
							<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ClUnpaid[$i]['event_id'];?>" 
							data-id="<?php echo $ClUnpaid[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
								<?php echo ucfirst($ClUnpaid[$i]['event_name']);?>
							</a>
							<?php //echo ucfirst($ClUnpaid[$i]['event_name']);?>
						</td>
						
						
						<td>
							<i class="fa fa-info-circle" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
							title="Client Comapany:<?php echo $ClUnpaid[$i]['client_cmp'];?><br>
							Client Email:<?php echo $ClUnpaid[$i]['client_email'];?><br>
							Mobile1:<?php echo $ClUnpaid[$i]['client_work_mob'];?><br>
							Mobile2:<?php echo $ClUnpaid[$i]['client_home_mob'];?>">
							</i>&nbsp;&nbsp;<?php echo ucfirst($ClUnpaid[$i]['client_name']);?>
						</td>
						
						
						<td><span style="float:right;"><?php echo $ClUnpaid[$i]['client_charges'];?></span></td>
						<td><span style="float:right;"><?php echo $ClUnpaid[$i]['client_discount_amt'];?></span></td>
						<td><span style="float:right;"><?php echo $ClUnpaid[$i]['service_tax_amt'];?></span></td>
						<td><span style="float:right;"><?php echo $ClUnpaid[$i]['total_amt'];?></span></td>
						<td><span style="float:right;"><?php echo $ClUnpaid[$i]['client_paid_amt'];?></span></td>				
						<td style="color:red;"><span style="float:right;"><?php echo $ClUnpaid[$i]['remain_amt'] ;?></span></td>
						<td>					
							<?php if($ClUnpaid[$i]['inv_file_name']!='') {?>
								<a href="upload/minvoice/<?php echo $ClUnpaid[$i]['inv_file_name'] ;?>" target="_blank" >
									<i style="cursor : pointer;" class="fa fa-file-pdf-o" aria-hidden="true" data-toggle="tooltip" title="Invoice">
									</i>
								</a>						
							<?php } ?>
						</td>
			<td>
							<a data-toggle="tooltip" title="Delete" data-id="<?php echo $ClUnpaid[$i]['event_id']; ?>" class="delete"> 
								<i class="fa fa-trash-o"></i> 
							</a> 
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>						
						<td><b> Grand Total</b></td>
						<td><span style="float:right;"><b><?php echo $ClUnpaid[$i]['ctotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $ClUnpaid[$i]['dtotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $ClUnpaid[$i]['stotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $ClUnpaid[$i]['ttotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $ClUnpaid[$i]['ptotal'];?></b> </span></td>
						<td style="color:red;"><span style="float:right;"><b><?php echo $ClUnpaid[$i]['rtotal'];?></b></span></td>
					</tr>
					
					
					<?php
					
				}
				else
				{
			?>
			<tr>
				
				<td>
					<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ClUnpaid[$i]['event_id'];?>" 
					data-id="<?php echo $ClUnpaid[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
						<?php echo $ClUnpaid[$i]['event_id'];?>
					</a>
					<?php //echo $ClUnpaid[$i]['event_id'];?>
				</td>
				<td>
					<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ClUnpaid[$i]['event_id'];?>" 
					data-id="<?php echo $ClUnpaid[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
						<?php echo ucfirst($ClUnpaid[$i]['event_name']);?>
					</a>
					<?php //echo ucfirst($ClUnpaid[$i]['event_name']);?>
				</td>
				
				<td>
					<i class="fa fa-info-circle" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
					title="Client Comapany:<?php echo $ClUnpaid[$i]['client_cmp'];?><br>
					Client Email:<?php echo $ClUnpaid[$i]['client_email'];?><br>
					Mobile1:<?php echo $ClUnpaid[$i]['client_work_mob'];?><br>
					Mobile2:<?php echo $ClUnpaid[$i]['client_home_mob'];?>">
					</i>&nbsp;&nbsp;<?php echo ucfirst($ClUnpaid[$i]['client_name']);?>
				</td>
				
				<td><span style="float:right;"><?php echo $ClUnpaid[$i]['client_charges'];?></span></td>
				<td><span style="float:right;"><?php echo $ClUnpaid[$i]['client_discount_amt'];?></span></td>
				<td><span style="float:right;"><?php echo $ClUnpaid[$i]['service_tax_amt'];?></span></td>
				<td><span style="float:right;"><?php echo $ClUnpaid[$i]['total_amt'];?></span></td>
				<td><span style="float:right;"><?php echo $ClUnpaid[$i]['client_paid_amt'];?></span></td>				
				<td style="color:red;"><span style="float:right;"><?php echo $ClUnpaid[$i]['remain_amt'] ;?></span></td>
				<td>					
							<?php if($ClUnpaid[$i]['inv_file_name']!='') {?>
								<a href="upload/minvoice/<?php echo $ClUnpaid[$i]['inv_file_name'] ;?>" target="_blank" >
									<i style="cursor : pointer;" class="fa fa-file-pdf-o" aria-hidden="true" data-toggle="tooltip" title="Invoice">
									</i>
								</a>						
							<?php } ?>
						</td>
			<td>
							<a data-toggle="tooltip" title="Delete" data-id="<?php echo $ClUnpaid[$i]['event_id']; ?>" class="delete"> 
								<i class="fa fa-trash-o"></i> 
							</a> 
						</td>
			</tr>
		<?php
				}
		}
		
	}
?>