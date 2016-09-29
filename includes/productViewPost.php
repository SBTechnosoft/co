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
			$resultCat=showPrdCtgdrp($conn,$data[$i]['prd_cat_id']);
		?>
			<tr>
				
				<td><?php echo ucfirst($data[$i]['prod_nm']);?></td>
				<td><?php echo ucfirst($data[$i]['prd_id']);?></td>
				<td><?php echo ucfirst($data[$i]['item_code']);?></td>
				<td><?php echo ucfirst($data[$i]['disp_nm']);?></td>
				<td><?php echo ucfirst($data[$i]['commodity_grp']);?></td>
				<td><?php echo $resultCat[$i]['prd_cat_name'];?></td>
				<td><?php echo ucfirst($data[$i]['retail_price']);?></td>
				<td><?php echo ucfirst($data[$i]['pur_price']);?></td>
				
				<td>
					<form id="<?php echo $data[$i]['prod_id']; ?>"  method="post" action= "index.php?url=PADD">
						<input type="hidden" id="prod_id" name="prod_id" value="<?php echo $data[$i]['prod_id']; ?>" />
					<a class="edit" data-toggle="tooltip" title="Edit" 
						onclick="document.getElementById('<?php echo $data[$i]['prod_id']; ?>').submit();">
							<i class="fa fa-pencil-square-o"></i>
					</a>			
 					<a data-toggle="tooltip" title="Delete" data-id="<?php echo $data[$i]['prod_id']; ?>" class="delete"> <i class="fa fa-trash-o"></i> </a> 
					</form>
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
	if(isset($_POST['prodEdit']))
	{	 
		$q = mysql_query("select `prod_id`,`prod_nm`,`prd_id`,`item_code`,`disp_nm`,`commodity_grp`,`prd_cat_id`,`retail_price`, `pur_price`,`type` from  `product_mst` where `prod_id` = '".$_POST['prod_id']."' ");
		//$q = mysql_query("select * from  `staff_mst` where `staff_id` = '".$_POST['stfid']."' ");
		$row = mysql_fetch_array($q);
		header("Content-type: text/x-json");
		echo json_encode($row);
		
	}
?>
				