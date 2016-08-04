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
				<td><?php echo $data[$i]['cat_name'];?></td>
				
				<?php $purchase_date=date_create($data[$i]['purchase_date']);
						$inm1= date_format($purchase_date,dateFormat);  
				?>
				<td><?php echo $inm1;?></td>
				
				<td><?php echo ucfirst($data[$i]['purchase_from']);?></td>
				<td style="text-align : right;"><?php echo ucfirst($data[$i]['price']);?></td>
				<td><?php echo ucfirst($data[$i]['remark']);?></td>
				<td>
					<form id="<?php echo $data[$i]['eq_id']; ?>"  method="post" action= "index.php?url=ALL">
						<input type="hidden" id="eq_id" name="eq_id" value="<?php echo $data[$i]['eq_id']; ?>" />						
						<a class="edit" data-toggle="tooltip" title="Edit" 
						onclick="document.getElementById('<?php echo $data[$i]['eq_id']; ?>').submit();">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						
						<a data-toggle="tooltip" title="Delete" data-id="<?php echo $data[$i]['eq_id']; ?>" class="delete"> <i class="fa fa-trash-o"></i> </a> 
					</form>
					
					
 				</td>
			</tr>
		<?php	
		}
		
	}
		if(isset($_POST['equipedit']))
	{	 
		$q = mysql_query("select `eq_id`,`eq_name`,`serial_no`,`model_no`,`category_id`,`purchase_date`,`purchase_from`, `remark`,`price`,`price_type` from  `equipment_mst` where `eq_id` = '".$_POST['eq_id']."' ");
		//$q = mysql_query("select * from  `staff_mst` where `staff_id` = '".$_POST['stfid']."' ");
		$row = mysql_fetch_array($q);
		header("Content-type: text/x-json");
		echo json_encode($row);
		
	}
?>
	