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
				<td><?php echo $VdPaid[$i]['vendor_charges'];?></td>
				<td><?php echo $VdPaid[$i]['vendor_paid_amt'];?></td>
				<td><?php echo $VdPaid[$i]['vendor_paid_status'];?></td>
				
			</tr>
		<?php	
		}
		
	}
?>