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
	
	if(isset($_POST['search']))
	{	
		$s2 = '';
		if($_POST['delname']!='')
		{
			$s2 = " `delv_name` like '%".trim($_POST['delname'])."%' ";
		}
		 
		
		$arr = array($s2);
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
				$str1[] =  $narry[$a]."and";
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
		
		//$where = " `event_name` like '%".$_POST['txtename']."%'  ";		
		$data = SearchDeliverable($conn,$where);
		//echo json_encode($data);
		$searchEnqCnt = count($data);	
		for($i=0;$i<$searchEnqCnt;$i++)
		{
?>
			<tr>
				<td></td>
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
?>