<?php
	include_once('./header.php');
	//include_once('./footer.php');
	if(isset($_POST['saverecord']))
	{	
		
		insContactList($conn,$_POST['clientName'],$_POST['companyName'],$_POST['mobileNo'],$_POST['workNo'],$_POST['emailId'],$_POST['address']);	
	}		
	
	if(isset($_POST['show']))
	{	
		$data = showContactList ($conn);
		$showCnt = count($data);	
		for($i=0;$i<$showCnt;$i++)
		{
		?>
			<tr>
				
				<td><?php echo ucfirst($data[$i]['client_name']);?></td>
				<td><?php echo ucfirst($data[$i]['company_name']);?></td>
				<td><?php echo ucfirst($data[$i]['mobile_no']);?></td>
				<td><?php echo ucfirst($data[$i]['work_no']);?></td>
				<td><?php echo ucfirst($data[$i]['email_id']);?></td>
				<td><?php echo ucfirst($data[$i]['address']);?></td>
				
			</tr>
		<?php	
		}
		
	}
	
?>
				