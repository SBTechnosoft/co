<?php
	include_once('./header.php');
	//include_once('./footer.php');
	if(isset($_POST['saverecord']))
	{		
		$cur_date = date('Y-m-d H:i:s');
		insVend($conn,$_POST['txtvendnm'],$_POST['drp_cat_vend'],$_POST['txtvendcmp'],$cur_date);	
	}
	if(isset($_POST['delete']))
	{	
		$del_date = date('Y-m-d H:i:s');
		delVend($conn,$_POST['id'],$del_date);	
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
				<td>				
					<a data-toggle="tooltip" title="Delete" data-id="<?php echo $data[$i]['vend_id']; ?>" class="delete"> <i class="fa fa-trash-o"></i> </a> 
				</td>
			</tr>
		<?php	
		}
		
	}
?>
				