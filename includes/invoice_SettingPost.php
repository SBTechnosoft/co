<?php
	include_once('./header.php');
	//include_once('./footer.php');
	if(isset($_POST['saverecord']))
	{		
		$cur_date = date('Y-m-d H:i:s');
		insInvoicSet($conn,$_POST['txtlabel'],$_POST['prefix'],$_POST['start_at'],$cur_date);	
	}		
	
	
	if(isset($_POST['show']))
	{	
		$data = showInvoiceSet ($conn);
		
		$showIns = count($data);	
		for($i=0;$i<$showIns;$i++)
		{
		?>
			<tr>
				
				<td><?php echo $data[$i]['invoice_conf_id'];?></td>
				<td><?php echo $data[$i]['label'];?></td>
				<td><?php echo $data[$i]['type'];?></td>
				<td><?php echo $data[$i]['start_at'];?></td>
				<td><?php echo $data[$i]['next_val'];?>	</td>			
				<?php $from_date=date_create($data[$i]['created_at']);
					$inm1= date_format($from_date,dateFormat);  
				?>
				<td><?php echo $inm1;?></td>		
				
				
			</tr>
		<?php	
		}
		
	}
	
?>