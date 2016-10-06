<?php
	include_once('./header.php');
	//include_once('./footer.php');
			
	
	if(isset($_POST['showClPaidAmt']))
	{	
		$ClPaid = showClientPaidAmt ($conn);
		
		$showClPaidCnt = count($ClPaid);	
		for($i=0;$i<$showClPaidCnt;$i++)
		{
		?>
			<?php
				if($i == ($showClPaidCnt-1))
				{
					?>
					<tr>
				
						<td>
							<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ClPaid[$i]['event_id'];?>" 
							data-id="<?php echo $ClPaid[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
								<?php echo $ClPaid[$i]['event_id'];?>
							</a>
							<?php //echo $ClPaid[$i]['event_id'];?>
						</td>
						<td>
							<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ClPaid[$i]['event_id'];?>" 
							data-id="<?php echo $ClPaid[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
								<?php echo ucfirst($ClPaid[$i]['event_name']);?>
							</a>
							<?php //echo ucfirst($ClPaid[$i]['event_name']);?>
						</td>
						
						
						<td>
							<?php if($ClPaid[$i]['client_name']!= '') {?>
							<i class="fa fa-info-circle" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
							title="Client Comapany:<?php echo $ClPaid[$i]['client_cmp'];?><br>
							Client Email:<?php echo $ClPaid[$i]['client_email'];?><br>
							Mobile1:<?php echo $ClPaid[$i]['client_work_mob'];?><br>
							Mobile2:<?php echo $ClPaid[$i]['client_home_mob'];?>">
							</i>&nbsp;&nbsp;<?php echo ucfirst($ClPaid[$i]['client_name']); }else {echo "-";}?>
						</td>
						
						
						<td><span style="float:right;"><?php echo $ClPaid[$i]['client_charges'];?></span></td>
						<td><span style="float:right;"><?php echo $ClPaid[$i]['client_discount_amt'];?></span></td>
						<td><span style="float:right;"><?php echo $ClPaid[$i]['service_tax_amt'];?></span></td>
						<td><span style="float:right;"><?php echo $ClPaid[$i]['total_amt'];?></span></td>
						<td><span style="float:right;"><?php echo $ClPaid[$i]['client_paid_amt'];?></span></td>	
						<td>					
							<?php if($ClPaid[$i]['inv_file_name']!='') {?>
								<a href="upload/minvoice/<?php echo $ClPaid[$i]['inv_file_name'] ;?>" target="_blank" >
									<i style="cursor : pointer;" class="fa fa-file-pdf-o" aria-hidden="true" data-toggle="tooltip" title="Invoice">
									</i>
								</a>						
							<?php } ?>
						</td>
						<td>
						<?php echo $ClPaid[$i]['inv_file_id'];?>
								
						</td>
						<td>
							<a data-toggle="tooltip" title="Delete" data-id="<?php echo $ClPaid[$i]['event_id']; ?>" class="delete"> 
								<i class="fa fa-trash-o"></i> 
							</a> 
						</td>
						
					</tr>
					<tr>
						
						<td></td>
						<td></td>						
						<td><b> Grand Total</b></td>
						<td><span style="float:right;"><b><?php echo $ClPaid[$i]['ctotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $ClPaid[$i]['dtotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $ClPaid[$i]['stotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $ClPaid[$i]['ttotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $ClPaid[$i]['ptotal'];?></b> </span></td>
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
					<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ClPaid[$i]['event_id'];?>" 
					data-id="<?php echo $ClPaid[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
						<?php echo $ClPaid[$i]['event_id'];?>
					</a>
					<?php //echo $ClPaid[$i]['event_id'];?>
				</td>
				<td>
					<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ClPaid[$i]['event_id'];?>" 
					data-id="<?php echo $ClPaid[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
						<?php echo ucfirst($ClPaid[$i]['event_name']);?>
					</a>
					<?php //echo ucfirst($ClPaid[$i]['event_name']);?>
				</td>
				
				<td>
					<i class="fa fa-info-circle" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
					title="Client Comapany:<?php echo $ClPaid[$i]['client_cmp'];?><br>
					Client Email:<?php echo $ClPaid[$i]['client_email'];?><br>
					Mobile1:<?php echo $ClPaid[$i]['client_work_mob'];?><br>
					Mobile2:<?php echo $ClPaid[$i]['client_home_mob'];?>">
					</i>&nbsp;&nbsp;<?php echo ucfirst($ClPaid[$i]['client_name']);?>
				</td>
				
				<td><span style="float:right;"><?php echo $ClPaid[$i]['client_charges'];?></span></td>
				<td><span style="float:right;"><?php echo $ClPaid[$i]['client_discount_amt'];?></span></td>
				<td><span style="float:right;"><?php echo $ClPaid[$i]['service_tax_amt'];?></span></td>
				<td><span style="float:right;"><?php echo $ClPaid[$i]['total_amt'];?></span></td>
				<td><span style="float:right;"><?php echo $ClPaid[$i]['client_paid_amt'];?></span></td>	
				<td>					
							<?php if($ClPaid[$i]['inv_file_name']!='') {?>
								<a href="upload/minvoice/<?php echo $ClPaid[$i]['inv_file_name'] ;?>" target="_blank" >
									<i style="cursor : pointer;" class="fa fa-file-pdf-o" aria-hidden="true" data-toggle="tooltip" title="Invoice">
									</i>
								</a>						
							<?php } ?>
				</td>
				<td>
						<?php echo $ClPaid[$i]['inv_file_id'];?>
								
						</td>
				<td>
					<a data-toggle="tooltip" title="Delete" data-id="<?php echo $ClPaid[$i]['event_id']; ?>" class="delete"> 
						<i class="fa fa-trash-o"></i> 
					</a> 
				</td>
				
			</tr>
		<?php
				}
		}
		
	}
	if(isset($_POST['showClPaidAmtType']))
	{	
		if($_POST['value']=='All')
		{
			$ClPaid = showClientPaidAmt ($conn);
		}
		else
		{
			$ClPaid = showClPaidAmtType ($conn,$_POST['value']);
		}
		$showClPaidCnt = count($ClPaid);	
		for($i=0;$i<$showClPaidCnt;$i++)
		{
		?>
			<?php
				if($i == ($showClPaidCnt-1))
				{
					?>
					<tr>
				
						<td>
							<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ClPaid[$i]['event_id'];?>" 
							data-id="<?php echo $ClPaid[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
								<?php echo $ClPaid[$i]['event_id'];?>
							</a>
							<?php //echo $ClPaid[$i]['event_id'];?>
						</td>
						<td>
							<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ClPaid[$i]['event_id'];?>" 
							data-id="<?php echo $ClPaid[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
								<?php echo ucfirst($ClPaid[$i]['event_name']);?>
							</a>
							<?php //echo ucfirst($ClPaid[$i]['event_name']);?>
						</td>
						
						
						<td>
							<?php if($ClPaid[$i]['client_name']!= '') {?>
							<i class="fa fa-info-circle" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
							title="Client Comapany:<?php echo $ClPaid[$i]['client_cmp'];?><br>
							Client Email:<?php echo $ClPaid[$i]['client_email'];?><br>
							Mobile1:<?php echo $ClPaid[$i]['client_work_mob'];?><br>
							Mobile2:<?php echo $ClPaid[$i]['client_home_mob'];?>">
							</i>&nbsp;&nbsp;<?php echo ucfirst($ClPaid[$i]['client_name']); }else {echo "-";}?>
						</td>
						
						
						<td><span style="float:right;"><?php echo $ClPaid[$i]['client_charges'];?></span></td>
						<td><span style="float:right;"><?php echo $ClPaid[$i]['client_discount_amt'];?></span></td>
						<td><span style="float:right;"><?php echo $ClPaid[$i]['service_tax_amt'];?></span></td>
						<td><span style="float:right;"><?php echo $ClPaid[$i]['total_amt'];?></span></td>
						<td><span style="float:right;"><?php echo $ClPaid[$i]['client_paid_amt'];?></span></td>
						<td>					
							<?php if($ClPaid[$i]['inv_file_name']!='') {?>
								<a href="upload/minvoice/<?php echo $ClPaid[$i]['inv_file_name'] ;?>" target="_blank" >
									<i style="cursor : pointer;" class="fa fa-file-pdf-o" aria-hidden="true" data-toggle="tooltip" title="Invoice">
									</i>
								</a>						
							<?php } ?>
						</td>
						<td>
						<?php echo $ClPaid[$i]['inv_file_id'];?>
								
						</td>
						<td>
							<a data-toggle="tooltip" title="Delete" data-id="<?php echo $ClPaid[$i]['event_id']; ?>" class="delete"> 
								<i class="fa fa-trash-o"></i> 
							</a> 
						</td>
						
					</tr>
					<tr>
						
						<td></td>
						<td></td>
						<td></td>						
						<td><b> Grand Total</b></td>
						<td><span style="float:right;"><b><?php echo $ClPaid[$i]['ctotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $ClPaid[$i]['dtotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $ClPaid[$i]['stotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $ClPaid[$i]['ttotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $ClPaid[$i]['ptotal'];?></b> </span></td>
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
					<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ClPaid[$i]['event_id'];?>" 
					data-id="<?php echo $ClPaid[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
						<?php echo $ClPaid[$i]['event_id'];?>
					</a>
					<?php //echo $ClPaid[$i]['event_id'];?>
				</td>
				<td>
					<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ClPaid[$i]['event_id'];?>" 
					data-id="<?php echo $ClPaid[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
						<?php echo ucfirst($ClPaid[$i]['event_name']);?>
					</a>
					<?php //echo ucfirst($ClPaid[$i]['event_name']);?>
				</td>
				
				<td>
					<i class="fa fa-info-circle" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
					title="Client Comapany:<?php echo $ClPaid[$i]['client_cmp'];?><br>
					Client Email:<?php echo $ClPaid[$i]['client_email'];?><br>
					Mobile1:<?php echo $ClPaid[$i]['client_work_mob'];?><br>
					Mobile2:<?php echo $ClPaid[$i]['client_home_mob'];?>">
					</i>&nbsp;&nbsp;<?php echo ucfirst($ClPaid[$i]['client_name']);?>
				</td>
				
				<td><span style="float:right;"><?php echo $ClPaid[$i]['client_charges'];?></span></td>
				<td><span style="float:right;"><?php echo $ClPaid[$i]['client_discount_amt'];?></span></td>
				<td><span style="float:right;"><?php echo $ClPaid[$i]['service_tax_amt'];?></span></td>
				<td><span style="float:right;"><?php echo $ClPaid[$i]['total_amt'];?></span></td>
				<td><span style="float:right;"><?php echo $ClPaid[$i]['client_paid_amt'];?></span></td>	
				<td>					
					<?php if($ClPaid[$i]['inv_file_name']!='') {?>
						<a href="upload/minvoice/<?php echo $ClPaid[$i]['inv_file_name'] ;?>" target="_blank" >
							<i style="cursor : pointer;" class="fa fa-file-pdf-o" aria-hidden="true" data-toggle="tooltip" title="Invoice">
							</i>
						</a>						
					<?php } ?>
				</td>
				<td>
						<?php echo $ClPaid[$i]['inv_file_id'];?>
								
				</td>
				<td>
					<a data-toggle="tooltip" title="Delete" data-id="<?php echo $ClPaid[$i]['event_id']; ?>" class="delete"> 
						<i class="fa fa-trash-o"></i> 
					</a> 
				</td>
				
				
			</tr>
		<?php
				}
		}
		
	}
	
	
	if(isset($_POST['showClPaidAmtCmpType']))
	{	
		if($_POST['value']=='')
		{
			$ClPaid = showClientPaidAmt ($conn);
		}
		else
		{
			$ClPaid = showClPaidAmtCmpType ($conn,$_POST['value']);
		}
		$showClPaidCnt = count($ClPaid);	
		for($i=0;$i<$showClPaidCnt;$i++)
		{
		?>
			<?php
				if($i == ($showClPaidCnt-1))
				{
					?>
					<tr>
				
						<td>
							<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ClPaid[$i]['event_id'];?>" 
							data-id="<?php echo $ClPaid[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
								<?php echo $ClPaid[$i]['event_id'];?>
							</a>
							<?php //echo $ClPaid[$i]['event_id'];?>
						</td>
						<td>
							<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ClPaid[$i]['event_id'];?>" 
							data-id="<?php echo $ClPaid[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
								<?php echo ucfirst($ClPaid[$i]['event_name']);?>
							</a>
							<?php //echo ucfirst($ClPaid[$i]['event_name']);?>
						</td>
						
						
						<td>
							<?php if($ClPaid[$i]['client_name']!= '') {?>
							<i class="fa fa-info-circle" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
							title="Client Comapany:<?php echo $ClPaid[$i]['client_cmp'];?><br>
							Client Email:<?php echo $ClPaid[$i]['client_email'];?><br>
							Mobile1:<?php echo $ClPaid[$i]['client_work_mob'];?><br>
							Mobile2:<?php echo $ClPaid[$i]['client_home_mob'];?>">
							</i>&nbsp;&nbsp;<?php echo ucfirst($ClPaid[$i]['client_name']); }else {echo "-";}?>
						</td>
						
						
						<td><span style="float:right;"><?php echo $ClPaid[$i]['client_charges'];?></span></td>
						<td><span style="float:right;"><?php echo $ClPaid[$i]['client_discount_amt'];?></span></td>
						<td><span style="float:right;"><?php echo $ClPaid[$i]['service_tax_amt'];?></span></td>
						<td><span style="float:right;"><?php echo $ClPaid[$i]['total_amt'];?></span></td>
						<td><span style="float:right;"><?php echo $ClPaid[$i]['client_paid_amt'];?></span></td>
						<td>					
							<?php if($ClPaid[$i]['inv_file_name']!='') {?>
								<a href="upload/minvoice/<?php echo $ClPaid[$i]['inv_file_name'] ;?>" target="_blank" >
									<i style="cursor : pointer;" class="fa fa-file-pdf-o" aria-hidden="true" data-toggle="tooltip" title="Invoice">
									</i>
								</a>						
							<?php } ?>
						</td>
						<td>
						<?php echo $ClPaid[$i]['inv_file_id'];?>
								
						</td>
						<td>
							<a data-toggle="tooltip" title="Delete" data-id="<?php echo $ClPaid[$i]['event_id']; ?>" class="delete"> 
								<i class="fa fa-trash-o"></i> 
							</a> 
						</td>
						
					</tr>
					<tr>
						
						
						<td></td>
						<td></td>
						<td><b> Grand Total</b></td>
						<td><span style="float:right;"><b><?php echo $ClPaid[$i]['ctotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $ClPaid[$i]['dtotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $ClPaid[$i]['stotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $ClPaid[$i]['ttotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $ClPaid[$i]['ptotal'];?></b> </span></td>
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
					<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ClPaid[$i]['event_id'];?>" 
					data-id="<?php echo $ClPaid[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
						<?php echo $ClPaid[$i]['event_id'];?>
					</a>
					<?php //echo $ClPaid[$i]['event_id'];?>
				</td>
				<td>
					<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ClPaid[$i]['event_id'];?>" 
					data-id="<?php echo $ClPaid[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
						<?php echo ucfirst($ClPaid[$i]['event_name']);?>
					</a>
					<?php //echo ucfirst($ClPaid[$i]['event_name']);?>
				</td>
				
				<td>
					<i class="fa fa-info-circle" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
					title="Client Comapany:<?php echo $ClPaid[$i]['client_cmp'];?><br>
					Client Email:<?php echo $ClPaid[$i]['client_email'];?><br>
					Mobile1:<?php echo $ClPaid[$i]['client_work_mob'];?><br>
					Mobile2:<?php echo $ClPaid[$i]['client_home_mob'];?>">
					</i>&nbsp;&nbsp;<?php echo ucfirst($ClPaid[$i]['client_name']);?>
				</td>
				
				<td><span style="float:right;"><?php echo $ClPaid[$i]['client_charges'];?></span></td>
				<td><span style="float:right;"><?php echo $ClPaid[$i]['client_discount_amt'];?></span></td>
				<td><span style="float:right;"><?php echo $ClPaid[$i]['service_tax_amt'];?></span></td>
				<td><span style="float:right;"><?php echo $ClPaid[$i]['total_amt'];?></span></td>
				<td><span style="float:right;"><?php echo $ClPaid[$i]['client_paid_amt'];?></span></td>				
				<td>					
					<?php if($ClPaid[$i]['inv_file_name']!='') {?>
						<a href="upload/minvoice/<?php echo $ClPaid[$i]['inv_file_name'] ;?>" target="_blank" >
							<i style="cursor : pointer;" class="fa fa-file-pdf-o" aria-hidden="true" data-toggle="tooltip" title="Invoice">
							</i>
						</a>						
					<?php } ?>
				</td>
				<td>
						<?php echo $ClPaid[$i]['inv_file_id'];?>
								
						</td>
				<td>
					<a data-toggle="tooltip" title="Delete" data-id="<?php echo $ClPaid[$i]['event_id']; ?>" class="delete"> 
					<i class="fa fa-trash-o"></i> 
					</a> 
				</td>
				
			</tr>
		<?php
				}
		}
		
	}
?>