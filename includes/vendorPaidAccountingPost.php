<?php
	include_once('./header.php');
	//include_once('./footer.php');
			
	
	if(isset($_POST['showVdPaidAmt']))
	{	
		$VdPaid = showVendorPaidAmt ($conn);
		
		$showVdPaidCnt = count($VdPaid);	
		for($i=0;$i<$showVdPaidCnt;$i++)
		{
		?>
			<?php
				if($i == ($showVdPaidCnt-1))
				{
					?>
					<tr>
						
						<!--td><?php //echo $VdPaid[$i]['event_vendor_id'];?></td-->
						<td>
							<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $VdPaid[$i]['event_id'];?>" 
							data-id="<?php echo $VdPaid[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
								<?php echo $VdPaid[$i]['event_id'];?>
							</a>
							<?php //echo $VdPaid[$i]['event_id'];?>
						</td>
						<td>
							<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $VdPaid[$i]['event_id'];?>" 
							data-id="<?php echo $VdPaid[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
								<?php echo $VdPaid[$i]['event_name'];?>
							</a>
							<?php //echo $VdPaid[$i]['event_id'];?>
						</td>
						<?php $from_date=date_create($VdPaid[$i]['from_date']);
								$inm1= date_format($from_date,dateForm);  
						?>
						<td><?php echo $inm1;?></td>
						<!--td><?php //echo $VdPaid[$i]['event_places_id'];?></td>
						<td><?php //echo $VdPaid[$i]['vend_id'];?></td-->
						<td>
							<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $VdPaid[$i]['event_id'];?>" 
							data-id="<?php echo $VdPaid[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
								<?php echo ucfirst($VdPaid[$i]['vendor_name']);?>
							</a>
							<?php //echo ucfirst($VdPaid[$i]['vendor_name']);?>
						
						</td>
						<td><?php echo ucfirst($VdPaid[$i]['vendor_cmp']);?></td>
						<td><span style="float:right;"><?php echo $VdPaid[$i]['vendor_charges'];?></span></td>
						<td><span style="float:right;"><?php echo $VdPaid[$i]['vendor_paid_amt'];?></span></td>
						<td>
							<a data-toggle="tooltip" title="Delete" data-id="<?php echo $VdPaid[$i]['event_id']; ?>" class="delete"> 
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
						<td><span style="float:right;"><b><?php echo $VdPaid[$i]['vtotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $VdPaid[$i]['ptotal'];?> </b></span></td>
						<td></td>
					</tr>
					
				<?php	
					
				}
				
				else
				{?>
					<tr>
						
						<!--td><?php //echo $VdPaid[$i]['event_vendor_id'];?></td-->
						<td>
							<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $VdPaid[$i]['event_id'];?>" 
							data-id="<?php echo $VdPaid[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
								<?php echo $VdPaid[$i]['event_id'];?>
							</a>
							<?php //echo $VdPaid[$i]['event_id'];?>
						</td>
						<!--td><?php //echo $VdPaid[$i]['event_places_id'];?></td>
						<td><?php //echo $VdPaid[$i]['vend_id'];?></td-->
						<td>
							<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $VdPaid[$i]['event_id'];?>" 
							data-id="<?php echo $VdPaid[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
								<?php echo ucfirst($VdPaid[$i]['vendor_name']);?>
							</a>
							<?php //echo ucfirst($VdPaid[$i]['vendor_name']);?>
						
						</td>
						<td><?php echo ucfirst($VdPaid[$i]['vendor_cmp']);?></td>
						<td><span style="float:right;"><?php echo $VdPaid[$i]['vendor_charges'];?></span></td>
						<td><span style="float:right;"><?php echo $VdPaid[$i]['vendor_paid_amt'];?></span></td>
						<td>
							<a data-toggle="tooltip" title="Delete" data-id="<?php echo $VdPaid[$i]['event_id']; ?>" class="delete"> 
							<i class="fa fa-trash-o"></i> 
							</a> 
						</td>
						
					</tr>
		<?php
				}		
		}
		
	}
?>