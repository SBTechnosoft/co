<?php
	include_once('./header.php');
	//include_once('./footer.php');
	if(isset($_POST['saverecord']))
	{		
		$cur_date = date('Y-m-d H:i:s');
		insAcs($conn,$_POST['txtcatid'],$_POST['txtacsnm'],$_POST['txtacsremk'],$cur_date);	
	}		
	
	if(isset($_POST['delete']))
	{	
		$del_date = date('Y-m-d H:i:s');
		delAcs($conn,$_POST['id'],$del_date);	
	}
	
	if(isset($_POST['show']))
	{	
		$data = showAcs ($conn);
		
		$showAcsCnt = count($data);	
		for($i=0;$i<$showAcsCnt;$i++)
		{
		?>
			<tr>
				
				<td><?php echo $data[$i]['as_id'];?></td>
				<td><?php echo ucfirst($data[$i]['as_name']);?></td>
				<td><?php echo $data[$i]['eq_id'];?></td>
				<td><?php echo ucfirst($data[$i]['remark']);?></td>
				<td>				
					<a data-toggle="tooltip" title="Delete" data-id="<?php echo $data[$i]['as_id']; ?>" class="delete"> <i class="fa fa-trash-o"></i> </a> 
				</td>
				
			</tr>
		<?php	
		}
		
	}
	if(isset($_POST['showCtg']))
	{	
		$ctg = showCtgdrp($conn);
		?>
		
		<option select="select" value = "">Select the Category </option>
		<?php
		$showctgCnt = count($ctg);	
		 for($i=0;$i<$showctgCnt;$i++)
		 {
		?>
			<option  value = "<?php echo $ctg[$i]['cat_id'];?>"> <?php echo $ctg[$i]['cat_name']?> </option>
						
		 <?php	
		}
		
	}
?>