<?php
	include_once('./header.php');
	//include_once('./footer.php');
	if(isset($_POST['saverecord']))
	{	
		$cur_date = date('Y-m-d H:i:s');
		insCmpNew($conn,$_POST['txtcmpnm'],$_POST['txtcmprnno'],$cur_date);	
	}		
	
	if(isset($_POST['show']))
	{	
		$data = showCmp($conn);
		$showCmpCnt = count($data);	
		for($i=0;$i<$showCmpCnt;$i++)
		{
		?>
			<tr>				
				<td><?php echo ucfirst($data[$i]['cmp_name']);?></td>
				<td><?php echo $data[$i]['cmp_reg_no'];?></td>
				<td>				
					<a data-toggle="tooltip" title="Delete" data-id="<?php echo $data[$i]['cmp_id']; ?>" class="delete"> <i class="fa fa-trash-o"></i> </a> 
				</td>
			</tr>
		<?php	
		}
		
	}
	
	if(isset($_POST['delete']))
	{	
		$del_date = date('Y-m-d H:i:s');
		delCmpNew($conn,$_POST['id'],$del_date);	
	}
?>
				