<?php
	include_once('./header.php');
	//include_once('./footer.php');
			
	
	if(isset($_POST['showVdUnpaidAmt']))
	{	
		$VdUnPaid = showVendorUnPaidAmt ($conn);
		
		$showVdUnPaidCnt = count($VdUnPaid);	
		for($i=0;$i<$showVdUnPaidCnt;$i++)
		{
		?>
			<tr>
				
				<!--td><?php// echo $VdUnPaid[$i]['event_vendor_id'];?></td-->
				<td><?php echo $VdUnPaid[$i]['event_id'];?></td>
				<!--td><?php //echo $VdUnPaid[$i]['event_places_id'];?></td>
				<td><?php //echo $VdUnPaid[$i]['vend_id'];?></td-->
				<td><?php echo ucfirst($VdUnPaid[$i]['vendor_name']);?></td>
				<td><?php echo ucfirst($VdUnPaid[$i]['vendor_cmp']);?></td>
				<td><?php echo $VdUnPaid[$i]['vendor_charges'];?></td>
				<td><?php if($VdUnPaid[$i]['vendor_paid_amt']==''){ echo 0;} else {echo $VdUnPaid[$i]['vendor_paid_amt'];}?></td>
				<td style="color:red;"><?php echo $VdUnPaid[$i]['vendor_charges']-$VdUnPaid[$i]['vendor_paid_amt'] ;?></td>
				
			</tr>
		<?php	
		}
		
	}
?>