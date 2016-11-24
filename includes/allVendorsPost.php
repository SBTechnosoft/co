<?php
	include_once('./header.php');
	//include_once('./footer.php');
	if(isset($_POST['saverecord']))
	{		
		$cur_date = date('Y-m-d H:i:s');
		insVend($conn,$_POST['txtvendnm'],$_POST['txtvendemail'],$_POST['txtContact'],$_POST['drp_cat_vend'],$_POST['txtvendcmp'],$cur_date);	
	}
	if(isset($_POST['editrecord']))
	{		
		$cur_date = date('Y-m-d H:i:s');
		updVend($conn,$_POST['txtid'],$_POST['txtvendnm'],$_POST['txtvendemail'],$_POST['txtContact'],$_POST['drp_cat_vend'],$_POST['txtvendcmp'],$cur_date);	
	}
	if(isset($_POST['delete']))
	{	
		$del_date = date('Y-m-d H:i:s');
		delVend($conn,$_POST['id'],$del_date);	
	}
	if(isset($_POST['editshow']))
	{	
		$data=showvendedit($conn,$_POST['id']);
		header("Content-type: text/x-json");
		echo json_encode($data);
	}
	
	if(isset($_POST['show']))
	{	
		$data = showVend($conn);
		$showVendCnt = count($data);	
		for($i=0;$i<$showVendCnt;$i++)
		{
		?>
			<tr>
				
				<td><?php echo ucfirst($data[$i]['vendor_name']);?></td>
				<td>
					<?php if( $data[$i]['vendor_cmp']!= '') {echo ucfirst($data[$i]['vendor_cmp']);}else {echo "-";}?>
				</td>
				<td>
					
					<?php 
						if($data[$i]['cat_id'] == 1) 
						{
							echo "Class 1";
							
						}
						else if($data[$i]['cat_id'] == 2)
						{
							echo "Class 2";
						}
						else if($data[$i]['cat_id'] == 3)
						{
							echo "Class 3";
						}
						else if($data[$i]['cat_id'] == 4)
						{
							echo "Class 4";
						}
						else if($data[$i]['cat_id'] == '')
						{
							echo "-";
						}
						else 
						{
							echo "-";
						}
					?>
				</td>
				<td><?php echo ucfirst($data[$i]['vendor_email']);?></td>
				<td><?php echo ucfirst($data[$i]['vendor_contact']);?></td>
				<td>
					<a data-id="<?php echo $data[$i]['vend_id']; ?>" class="edit" data-toggle="tooltip" title="Edit">
						<i class="fa fa-pencil-square-o"></i>
					</a> &nbsp;&nbsp;&nbsp;
					<a data-toggle="tooltip" title="Delete" data-id="<?php echo $data[$i]['vend_id']; ?>" class="delete"> <i class="fa fa-trash-o"></i> </a> 
				</td>
			</tr>
		<?php	
		}
		
	}
	if(isset($_POST['search']))
	{	
		$s2 = '';
		if($_POST['vendname']!='')
		{
			$s2 = " `vendor_name` like '%".trim($_POST['vendname'])."%' ";
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
		$data = searchVend($conn,$where);
		//echo json_encode($data);
		$searchEnqCnt = count($data);	
		for($i=0;$i<$searchEnqCnt;$i++)
		{
?>
		<tr>
				
				<td><?php echo ucfirst($data[$i]['vendor_name']);?></td>
				<td>
					<?php if( $data[$i]['vendor_cmp']!= '') {echo ucfirst($data[$i]['vendor_cmp']);}else {echo "-";}?>
				</td>
				<td>
					
					<?php 
						if($data[$i]['cat_id'] == 1) 
						{
							echo "Class 1";
							
						}
						else if($data[$i]['cat_id'] == 2)
						{
							echo "Class 2";
						}
						else if($data[$i]['cat_id'] == 3)
						{
							echo "Class 3";
						}
						else if($data[$i]['cat_id'] == 4)
						{
							echo "Class 4";
						}
						else if($data[$i]['cat_id'] == '')
						{
							echo "-";
						}
						else 
						{
							echo "-";
						}
					?>
				</td>
				<td><?php echo ucfirst($data[$i]['vendor_email']);?></td>
				<td><?php echo ucfirst($data[$i]['vendor_contact']);?></td>
				<td>
					<a data-id="<?php echo $data[$i]['vend_id']; ?>" class="edit" data-toggle="tooltip" title="Edit">
						<i class="fa fa-pencil-square-o"></i>
					</a> &nbsp;&nbsp;&nbsp;
					<a data-toggle="tooltip" title="Delete" data-id="<?php echo $data[$i]['vend_id']; ?>" class="delete"> <i class="fa fa-trash-o"></i> </a> 
				</td>
			</tr>
<?php
		}

	}
?>	