<?php
	include_once('./header.php');
	//include_once('./footer.php');
	
	if(isset($_POST['show']))
	{
		$data = showEmailTemplate($conn);
		$showtempCnt = count($data);	
		for($i=0;$i<$showtempCnt;$i++)
		{
		?>
			<tr>
				
				<td><?php echo $data[$i]['email_template_id'];?></td>
				<td><?php echo ucfirst($data[$i]['email_template_name']);?></td>				
				<td>				
					<a data-toggle="tooltip" title="edit" data-id="<?php echo $data[$i]['email_template_id']; ?>" class="edit"> <i class="fa fa-pencil-square-o"></i> </a> 
				</td>
				
			</tr>
		<?php	
		}
	}	
	if(isset($_POST['edit']))
	{		
		$q = mysql_query("SELECT `email_template_id`,`email_template_name`,`email_template_body` FROM `email_template_mst` where `email_template_id` = '".$_POST['id']."' ");
		$row = mysql_fetch_array($q);
		header("Content-type: text/x-json");
		echo json_encode($row);
		exit();	
		
	}
	if(isset($_POST['update']))		
	{
		
		updateEmailTemplate($conn,$_POST['txttempid'],$_POST['txtename'],$_POST['txttemplate']);
		
	}
?>