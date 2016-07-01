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
			<tr>
				
				<td><?php echo $ClPaid[$i]['event_id'];?></td>
				<td><?php echo ucfirst($ClPaid[$i]['event_name']);?></td>
				<td><?php echo ucfirst($ClPaid[$i]['client_name']);?></td>
				<td><?php echo $ClPaid[$i]['client_work_mob'];?></td>
				<td><?php echo $ClPaid[$i]['client_charges'];?></td>
				<td><?php echo $ClPaid[$i]['client_paid_amt'];?></td>
				<td><?php if ($ClPaid[$i]['client_discount_amt'] == ''){echo 0;} else {echo $ClPaid[$i]['client_discount_amt'];}?></td>
				
			</tr>
		<?php	
		}
		
	}
?>