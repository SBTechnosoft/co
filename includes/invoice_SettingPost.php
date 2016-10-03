<?php
	include_once('./header.php');
	//include_once('./footer.php');
	if(isset($_POST['saverecord']))
	{		
		$cur_date = date('Y-m-d H:i:s');
		insInvoicSet($conn,$_POST['drpcomp'],$_POST['txtlabel'],$_POST['prefix'],$_POST['start_at'],$cur_date);	
	}		
	
	
	if(isset($_POST['show']))
	{	
		$data = showInvoiceSet ($conn);
		$inc=1;
		$showIns = count($data);	
		for($i=0;$i<$showIns;$i++)
		{
			$resultCat=showCmpDrp1($conn,$data[$i]['cmp_id']);
		?>
			<tr>
				<td><?php echo $data[$i]['invoice_conf_id'];?></td>
				<td><?php echo $resultCat[0]['cmp_name'] ;?></td>
				<td><?php echo $data[$i]['label'];?></td>
				<td><?php echo $data[$i]['type'];?></td>
				<td><?php echo $data[$i]['start_at'];?></td>
				<td><?php echo $data[$i]['next_val'];?>	</td>			
				<?php $from_date=date_create($data[$i]['created_at']);
					$inm1= date_format($from_date,dateFormat);  
				?>
				<td><?php echo $inm1;?></td>		
				
				
			</tr>
		<?php	
		$inc++;
		}
		
	}
	
	if(isset($_POST['showCompany']))
	{	
		$showcmp = showCmpDrp($conn);
		$showcmpCnt = count($showcmp);
		?>
		<option selected="select" value="">
				Select Companay
			</option>
		<?php
		for($i=0;$i<$showcmpCnt;$i++)
		{
			
		?>
			
			<option  value="<?php echo $showcmp[$i]['cmp_id'];?>">
				<?php echo $showcmp[$i]['cmp_name'];?> 
			</option>
			
		<?php
			
		}
		
	}
	
?>