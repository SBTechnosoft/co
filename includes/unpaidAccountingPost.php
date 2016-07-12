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
						<td><?php echo ucfirst($ClUnpaid[$i]['client_name']);?></td>
						<td><?php echo $ClUnpaid[$i]['client_work_mob'];?></td>
						
						<td><?php echo $ClUnpaid[$i]['client_charges'];?></td>
						<td><?php echo $ClUnpaid[$i]['client_paid_amt'];?></td>
						
						<td style="color:red;"><?php echo $ClUnpaid[$i]['client_charges'] - $ClUnpaid[$i]['client_paid_amt'];?></td>
						
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td><?php echo $ClUnpaid[$i]['ctotal'];?> </td>
						<td><?php echo $ClUnpaid[$i]['ptotal'];?> </td>
						<td> </td>
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
				<td><?php echo ucfirst($ClUnpaid[$i]['client_name']);?></td>
				<td><?php echo $ClUnpaid[$i]['client_work_mob'];?></td>
				<td><?php echo $ClUnpaid[$i]['client_charges'];?></td>
				<td><?php echo $ClUnpaid[$i]['client_paid_amt'];?></td>
				
				<td style="color:red;"><?php echo $ClUnpaid[$i]['client_charges'] - $ClUnpaid[$i]['client_paid_amt'];?></td>
				
			</tr>
		<?php
				}
		}
		
	}
?>