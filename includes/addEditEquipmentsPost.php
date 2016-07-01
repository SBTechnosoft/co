<?php
	include_once('./header.php');
	//include_once('./footer.php');
	
	if(isset($_POST['saverecord']))
	{	
		$cur_date = date('Y-m-d H:i:s');
		insEqup($conn,$_POST['txteqpnm'],$_POST['txtserno'],$_POST['txtmodel'],$_POST['txtcateqp'],$_POST['txtpurdate'],$_POST['txtpurfrm'],$_POST['txtremk'],$_POST['txtprice'],$cur_date,$_POST['drptype']);	
	}		
	if(isset($_POST['delete']))
	{	
		$del_date = date('Y-m-d H:i:s');
		delEquip($conn,$_POST['id'],$del_date);	
	}
	if(isset($_POST['show']))
	{	
		$data = showCatg ($conn);
		$showStudCnt = count($data);	
		for($i=0;$i<$showStudCnt;$i++)
		{
		?>
			<tr>
				
				<td><?php echo $data[$i]['cat_name'];?></td>
				<td><?php echo $data[$i]['description'];?></td>
				
			</tr>
		<?php	
		}
		
	}
	if(isset($_POST['showCategoryEqp']))
	{	
		$showeqp = showCatInEqp ($conn);
		$showEqpCnt = count($showeqp);
		?>
		<option selected="select" value="">
				Select Equipment
			</option>
		<?php
		for($i=0;$i<$showEqpCnt;$i++)
		{
			if($i==0)
			{
		?>
			
			<option  value="<?php echo $showeqp[$i]['cat_id'];?>">
				<?php echo $showeqp[$i]['cat_name'];?> 
			</option>
			
		<?php
			}
			else
			{
				?>
					<option  value="<?php echo $showeqp[$i]['cat_id'];?>">
						<?php echo $showeqp[$i]['cat_name'];?> 
					</option>
				<?php
			}
		}
		
	}
?>
				