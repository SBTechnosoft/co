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
				
				<td><?php echo $data[$i]['cat_name'];?></td>
				
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
	if(isset($_POST['showCtgSerach']))
	{	
		$ctg1 = showCtgdrpSearch($conn);
		?>
		
		<option select="select" value = "">Select the Category </option>
		<?php
		$showctgCntSearch = count($ctg1);	
		 for($i=0;$i<$showctgCntSearch;$i++)
		 {
		?>
			<option  value = "<?php echo $ctg1[$i]['cat_id'];?>"> <?php echo $ctg1[$i]['cat_name']?> </option>
						
		 <?php	
		}
		
	}
	if(isset($_POST['search']))
	{	
		$s2 = '';$s3 = '';
		if($_POST['txtacces']!='')
		{
			$s2 = " `as_name` like '%".$_POST['txtacces']."%' ";
		}
		 if($_POST['txtcatid']!='')
		{
			$s3 = " `eq_id` like '%".$_POST['txtcatid']."%' ";
		}
		
		$arr= array($s2,$s3);
		$cnt= count($arr);
			for($i=0;$i<$cnt;$i++)
			{		
				if($arr[$i]!= '')
				{			
					$narry[] = $arr[$i];
				}		
			}
		$cnt1= count($narry);
		for($a=0;$a<$cnt1;$a++)
		{
			//$str1 = array();
			if($a == ($cnt1 - 1))
			{
				$str2[] =  $narry[$a];
			}
			else
			{
				$str1[] =  $narry[$a]."or";
			}
		}
		if(!empty($str1))
		{	
			$where = implode(array_merge($str1,$str2));
			//echo $where;
		}
		else
		{
			$where = implode ($str2);
			//echo $where;
		}
		$data = searchAccesDetail ($conn,$where);
		
		$searchAccessCnt = count($data);	
		for($i=0;$i<$searchAccessCnt;$i++)
		{
		?>
			<tr>
				 <td> </td>
				<td><?php echo $data[$i]['as_id'];?></td>
				<td><?php echo ucfirst($data[$i]['as_name']);?></td>
				
				<td><?php echo $data[$i]['cat_name'];?></td>
				
				<td><?php echo ucfirst($data[$i]['remark']);?></td>
				<td>				
					<a data-toggle="tooltip" title="Delete" data-id="<?php echo $data[$i]['as_id']; ?>" class="delete"> <i class="fa fa-trash-o"></i> </a> 
				</td>
				
			</tr>
		<?php	
		}
		
	}
?>