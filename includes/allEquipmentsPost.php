<?php
	include_once('./header.php');
	//include_once('./footer.php');
	
			
	
	if(isset($_POST['show']))
	{	
		$data = showAllEquipment ($conn);
		$showEqupCnt = count($data);	
		for($i=0;$i<$showEqupCnt;$i++)
		{
		?>
			<tr>
				
				<td><?php echo ucfirst($data[$i]['eq_name']);?></td>
				<td><?php echo ucfirst($data[$i]['serial_no']);?></td>
				<td><?php echo ucfirst($data[$i]['model_no']);?></td>
				<td><?php echo $data[$i]['category_id'];?></td>
				
				<?php $purchase_date=date_create($data[$i]['purchase_date']);
						$inm1= date_format($purchase_date,dateFormat);  
				?>
				<td><?php echo $inm1;?></td>
				
				<td><?php echo ucfirst($data[$i]['purchase_from']);?></td>
				<td><?php echo ucfirst($data[$i]['price']);?></td>
				<td><?php echo ucfirst($data[$i]['remark']);?></td>
				<td>				
					<a data-toggle="tooltip" title="Delete" data-id="<?php echo $data[$i]['eq_id']; ?>" class="delete"> <i class="fa fa-trash-o"></i> </a> 
				</td>
			</tr>
		<?php	
		}
		
	}
?>
	