<?php
	include_once('./header.php');
	//include_once('./footer.php');
	if(isset($_POST['saverecord']))
	{	
		$cur_date = date('Y-m-d H:i:s');
		insResource($conn,$_POST['txtresnm'],$_POST['txtresprice'],$cur_date);	
	}		
	
	if(isset($_POST['show']))
	{	
		$data = showProductAdd ($conn);
		$showStudCnt = count($data);	
		for($i=0;$i<$showStudCnt;$i++)
		{
		?>
			<tr>
				
				<td><?php echo ucfirst($data[$i]['prod_nm']);?></td>
				<td><?php echo ucfirst($data[$i]['prd_id']);?></td>
				<td><?php echo ucfirst($data[$i]['item_code']);?></td>
				<td><?php echo ucfirst($data[$i]['disp_nm']);?></td>
				<td><?php echo ucfirst($data[$i]['commodity_grp']);?></td>
				<td><?php echo ucfirst($data[$i]['prd_cat_id']);?></td>
				<td><?php echo ucfirst($data[$i]['retail_price']);?></td>
				<td><?php echo ucfirst($data[$i]['pur_price']);?></td>
				
				<td>				
					<a data-toggle="tooltip" title="Delete" data-id="<?php echo $data[$i]['prod_id']; ?>" class="delete"> <i class="fa fa-trash-o"></i> </a> 
				</td>
			</tr>
		<?php	
		}
		
	}
	if(isset($_POST['delete']))
	{	
		$del_date = date('Y-m-d H:i:s');
		delProductAdd($conn,$_POST['id'],$del_date);	
	}
?>
				