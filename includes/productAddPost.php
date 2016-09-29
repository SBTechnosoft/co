<?php
	include_once('./header.php');
	//include_once('./footer.php');
	
	if(isset($_POST['saverecord']))
	{	
		$cur_date = date('Y-m-d H:i:s');
		insProductAdd($conn,$_POST['txtprdnm'],$_POST['txtprdid'],$_POST['txtitmcd'],$_POST['txtdispnm'],$_POST['txtcgrp'],
		$_POST['drpprdctg'],$_POST['txtrprice'],$_POST['txtpprice'],$_POST['drptype'],$cur_date,$_POST['txtrtaxmode'],
		$_POST['txttaxrt'],$_POST['txttaxamt'],$_POST['txtactAmt']);	
	}		
	
	if(isset($_POST['show']))
	{	
		$data = showResources ($conn);
		$showStudCnt = count($data);	
		for($i=0;$i<$showStudCnt;$i++)
		{
		?>
			<tr>
				
				<td><?php echo ucfirst($data[$i]['res_name']);?></td>
				<td><?php echo ucfirst($data[$i]['amount']);?></td>
				<td>				
					<a data-toggle="tooltip" title="Delete" data-id="<?php echo $data[$i]['res_id']; ?>" class="delete"> <i class="fa fa-trash-o"></i> </a> 
				</td>
			</tr>
		<?php	
		}
		
	}
	if(isset($_POST['delete']))
	{	
		$del_date = date('Y-m-d H:i:s');
		delResources($conn,$_POST['id'],$del_date);	
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
	if(isset($_POST['updprod']))
	{	
		$cur_date = date('Y-m-d H:i:s');
		updProduct($conn,$_POST['txtprdnm'],$_POST['txtprdid'],$_POST['txtitmcd'],$_POST['txtdispnm'],$_POST['txtcgrp'],
		$_POST['drpprdctg'],$_POST['txtrprice'],$_POST['txtpprice'],$_POST['drptype'],$upd_date,$_POST['prod_id']);	
	}
	if(isset($_POST['fetch_tax']))
	{	
		
		$vap = mysql_query("select `service_tax` from `setting` ");
		$vendrow = mysql_fetch_array($vap);
		header("Content-type: text/x-json");
		echo json_encode($vendrow);
		exit();	
		
	}	
?>
				