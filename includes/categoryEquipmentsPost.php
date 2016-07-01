<?php
	include_once('./header.php');
	//include_once('./footer.php');
	if(isset($_POST['saverecord']))
	{	
		$cur_date = date('Y-m-d H:i:s');
		insCatg($conn,$_POST['txtcatgnm'],$_POST['txtcatgdes'],$cur_date);	
	}		
	
	if(isset($_POST['show']))
	{	
		$data = showCatg ($conn);
		$showStudCnt = count($data);	
		for($i=0;$i<$showStudCnt;$i++)
		{
		?>
			<tr>
				
				<td><?php echo ucfirst($data[$i]['cat_name']);?></td>
				<td><?php echo ucfirst($data[$i]['description']);?></td>
				<td>				
					<a data-toggle="tooltip" title="Delete" data-id="<?php echo $data[$i]['cat_id']; ?>" class="delete"> <i class="fa fa-trash-o"></i> </a> 
				</td>
			</tr>
		<?php	
		}
		
	}
	if(isset($_POST['delete']))
	{	
		$del_date = date('Y-m-d H:i:s');
		delCatg($conn,$_POST['id'],$del_date);	
	}
?>
				