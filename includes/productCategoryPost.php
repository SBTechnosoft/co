<?php
	include_once('./header.php');
	//include_once('./footer.php');
	if(isset($_POST['saverecord']))
	{	
		$cur_date = date('Y-m-d H:i:s');
		insProduct($conn,$_POST['txtprdnm'],$_POST['txtcatid'],$cur_date);	
	}		
	
	if(isset($_POST['show']))
	{	
		$data = showProduct ($conn);
		$showStudCnt = count($data);	
		for($i=0;$i<$showStudCnt;$i++)
		{
		?>
			<tr>
				
				<td><?php echo ucfirst($data[$i]['prd_cat_name']);?></td>
				<td><?php echo ucfirst($data[$i]['prd_cat_parent_id']);?></td>
				<td>				
					<a data-toggle="tooltip" title="Delete" data-id="<?php echo $data[$i]['prd_cat_id']; ?>" class="delete"> <i class="fa fa-trash-o"></i> </a> 
				</td>
			</tr>
		<?php	
		}
		
	}
	if(isset($_POST['delete']))
	{	
		$del_date = date('Y-m-d H:i:s');
		delProduct($conn,$_POST['id'],$del_date);	
	}
	
	if(isset($_POST['showCtg']))
	{	
		$ctg = showPrdCtgdrp($conn);
		?>
		
		<option select="select" value = "">Select the Category </option>
		<?php
		$showctgCnt = count($ctg);	
		 for($i=0;$i<$showctgCnt;$i++)
		 {
		?>
			<option  value = "<?php echo $ctg[$i]['prd_cat_id'];?>"> <?php echo $ctg[$i]['prd_cat_name']?> </option>
						
		 <?php	
		}
		
	}
?>
				