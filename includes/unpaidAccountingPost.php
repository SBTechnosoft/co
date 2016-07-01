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
			<tr>
				
				<td><?php echo $ClUnpaid[$i]['event_id'];?></td>
				<td><?php echo ucfirst($ClUnpaid[$i]['event_name']);?></td>
				<td><?php echo ucfirst($ClUnpaid[$i]['client_name']);?></td>
				<td><?php echo $ClUnpaid[$i]['client_work_mob'];?></td>
				<td><?php echo $ClUnpaid[$i]['client_charges'];?></td>
				<td><?php echo $ClUnpaid[$i]['client_paid_amt'];?></td>
				
				<td style="color:red;"><?php echo $ClUnpaid[$i]['client_charges'] - $ClUnpaid[$i]['client_paid_amt'];?></td>
				
			</tr>
		<?php	
		}
		
	}
?>