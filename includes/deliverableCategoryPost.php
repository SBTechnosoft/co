<?php
	include_once('./header.php');
	//include_once('./footer.php');
	if(isset($_POST['saverecord']))
	{	
		$cur_date = date('Y-m-d H:i:s');
		insDeliverable($conn,$_POST['txtdelvnm'],$_POST['drptype'],$_POST['txtdelvPrice'],$cur_date);	
	}		
	
	if(isset($_POST['show']))
	{	
		$data = showDeliverable ($conn);
		$showStudCnt = count($data);	
		for($i=0;$i<$showStudCnt;$i++)
		{
		?>
			<tr>
				
				<td><?php echo ucfirst($data[$i]['delv_name']);?></td>
				<td><?php echo ucfirst($data[$i]['delv_type']);?></td>
				<td><?php echo ucfirst($data[$i]['amount']);?></td>
				<td>				
					<a data-toggle="tooltip" title="Delete" data-id="<?php echo $data[$i]['delv_id']; ?>" class="delete"> <i class="fa fa-trash-o"></i> </a> 
				</td>
			</tr>
		<?php	
		}
		
	}
	if(isset($_POST['delete']))
	{	
		$del_date = date('Y-m-d H:i:s');
		delDeliverable($conn,$_POST['id'],$del_date);	
	}
?>
				